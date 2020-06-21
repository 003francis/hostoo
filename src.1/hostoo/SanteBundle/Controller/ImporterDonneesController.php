<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Dependant;
use hostoo\SanteBundle\Entity\Formule;
use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Entity\Symptomes;
use hostoo\SanteBundle\Entity\TSymptome;
use PHPExcel_Cell;
use PHPExcel_IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImporterDonneesController extends Controller
{
    public function importeLesPatientsAction()
    {

        if(!empty($_FILES['fileC']['tmp_name'])) {
            $file = fopen($_FILES['fileC']['tmp_name'], 'r');
            $file = $_FILES['fileC']['tmp_name'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $objReader = PHPExcel_IOFactory::load($file);
            $sheetdata = $objReader->getActiveSheet();

            $HighestRow = $sheetdata->getHighestRow(); // par exemple 10
            $HighestColumn = $sheetdata->getHighestColumn(); // par exemple, 'F'
            $HighestColumnIndex = PHPExcel_Cell:: columnIndexFromString($HighestColumn);
            // var_dump(gettype($sheetdata->getCell('A12')->getValue())); die('oj');
            //var_dump($HighestRow); die('Lignes');

            $em = $this->getDoctrine()->getManager();
            //$monacte=$request->getSession();
            // $monacte->set('acte',null);


            for ($n = 0; $n <= $HighestRow; $n++) {

                $sheetdata->getStyle('G' . $n)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYYSLASH);
                if ((preg_match('/\d{2}\/\d{2}\/\d{4}/', $sheetdata->getCell('G' . $n)->getFormattedValue()))) {
                    $dwligne = $em->getRepository('hostooSanteBundle:Patient')->findOneBy(
                        array(
                            'datenaissance' => trim(new \DateTime($sheetdata->getCell('G' . $n)->getFormattedValue()))
                        , 'numerodossier' => trim($sheetdata->getCell('A' . $n)->getValue()),
                            'societe' => trim($sheetdata->getCell('B' . $n)->getValue()),
                            'prenom' => trim($sheetdata->getCell('C' . $n)->getValue())
                        , 'nom' => trim($sheetdata->getCell('D' . $n)->getValue()),
                            'postnom' => trim($sheetdata->getCell('E' . $n)->getValue()),
                        )
                    );
                    if ($dwligne == null) {
                        if ($n == $HighestRow) {
                            break;
                        }
                        $formule=$em->getRepository('hostooSanteBundle:Formule')->findOneByNomconvention(trim($sheetdata->getCell('M' . $n)->getValue()));
                        if($formule == null){
                            $formule=new Formule();
                            $formule->setConvention(trim($sheetdata->getCell('I' . $n)->getValue()));
                            $formule->setNom(trim($sheetdata->getCell('M' . $n)->getValue()));
                            $em->persist($formule);
                        }
                        $dwtable[$n] = new Patient();
                        $dwtable[$n]->setDatenaissance(new \DateTime($sheetdata->getCell('G' . $n)->getFormattedValue()));
                        $dwtable[$n]->setNumerodossier(trim($sheetdata->getCell('A' . $n)->getValue()));
                        $dwtable[$n]->setSociete(trim($sheetdata->getCell('B' . $n)->getValue()));
                        $dwtable[$n]->setPrenom(trim($sheetdata->getCell('C' . $n)->getValue()));
                        $dwtable[$n]->setNom(trim($sheetdata->getCell('D' . $n)->getValue()));
                        $dwtable[$n]->setPostnom(trim($sheetdata->getCell('E' . $n)->getValue()));
                        $dwtable[$n]->setSexe((trim($sheetdata->getCell('F' . $n)->getValue())=="M")?1:0);
                        $dwtable[$n]->setNationalite(trim($sheetdata->getCell('H' . $n)->getValue()));
                        $dwtable[$n]->setConvention(trim($sheetdata->getCell('I' . $n)->getValue()));
                        $dwtable[$n]->setAdresse(trim($sheetdata->getCell('J' . $n)->getValue()));
                        $dwtable[$n]->setTelephone1(trim($sheetdata->getCell('K' . $n)->getValue()));
                        $dwtable[$n]->setTelephone2(trim($sheetdata->getCell('L' . $n)->getValue()));
                        $dwtable[$n]->setFormule($formule);

                        //var_dump($dwtable); die('Test');
                        $em->persist($dwtable[$n]);

                    }
                }
            }
            $em->flush();
        }
        return $this->render('hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig', array(
            // ...
        ));
    }

    public function importeLesDependantsAction()
    {

        if(!empty($_FILES['fileD']['tmp_name'])) {
            $file = fopen($_FILES['fileD']['tmp_name'], 'r');
            $file = $_FILES['fileD']['tmp_name'];

            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $objReader = PHPExcel_IOFactory::load($file);
            $sheetdata = $objReader->getActiveSheet();

            $HighestRow = $sheetdata->getHighestRow(); // par exemple 10
            $HighestColumn = $sheetdata->getHighestColumn(); // par exemple, 'F'
            $HighestColumnIndex = PHPExcel_Cell:: columnIndexFromString($HighestColumn);
            //var_dump(gettype($sheetdata->getCell('A12')->getValue())); die('oj');
            //var_dump($HighestRow); die('Lignes');
            //var_dump($HighestRow); die('ok');
            $em = $this->getDoctrine()->getManager();
            //$monacte=$request->getSession();
            // $monacte->set('acte',null);


            for ($n = 0; $n <= $HighestRow; $n++) {
                    $dwligne = $em->getRepository('hostooSanteBundle:Patient')->findOneBy(
                        array(
                            'numerodossier' => trim($sheetdata->getCell('B' . $n)->getValue())
                        )
                    );
                    if ($dwligne != null) {
                        if ($n == $HighestRow) {
                            break;
                        }
                        $dep[$n]=new Dependant();
                        $dep[$n]->setPatient($dwligne);
                        $dep[$n]->setNom($sheetdata->getCell('C' . $n)->getValue());
                        $dep[$n]->setPrenom($sheetdata->getCell('E' . $n)->getValue());
                        $dep[$n]->setPostnom($sheetdata->getCell('D' . $n)->getValue());
                        $dep[$n]->setParente($em->getRepository('hostooSanteBundle:Parente')->findOneById($sheetdata->getCell('F' . $n)->getValue()));


                        $dwtable[$n] = new Patient();
                        $dwtable[$n]->setDatenaissance(null);
                        $dwtable[$n]->setNumerodossier(trim($sheetdata->getCell('A' . $n)->getValue()));
                        $dwtable[$n]->setSociete($dwligne->getSociete());
                        $dwtable[$n]->setPrenom(trim($sheetdata->getCell('E' . $n)->getValue()));
                        $dwtable[$n]->setNom(trim($sheetdata->getCell('C' . $n)->getValue()));
                        $dwtable[$n]->setPostnom(trim($sheetdata->getCell('D' . $n)->getValue()));
                        $dwtable[$n]->setSexe(1);
                        $dwtable[$n]->setNationalite($dwligne->getNationalite());
                        $dwtable[$n]->setAdresse($dwligne->getAdresse());
                        $dwtable[$n]->setTelephone1($dwligne->getTelephone1());
                        $dwtable[$n]->setTelephone2($dwligne->getTelephone2());
                        $dep[$n]->setMoi($dwtable[$n]);
                        //var_dump($dwtable); die('Test');
                        $em->persist($dep[$n]);
                        $em->persist($dwtable[$n]);

                    }
                }
            $em->flush();
        }
        return $this->render('hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig', array(
            // ...
        ));
    }

    public function importeLesSymptomesAction()
    {

        if(!empty($_FILES['fileC']['tmp_name'])) {
            $file = fopen($_FILES['fileC']['tmp_name'], 'r');
            $file = $_FILES['fileC']['tmp_name'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $objReader = PHPExcel_IOFactory::load($file);
            $sheetdata = $objReader->getActiveSheet();

            $HighestRow = $sheetdata->getHighestRow(); // par exemple 10
            $HighestColumn = $sheetdata->getHighestColumn(); // par exemple, 'F'
            $HighestColumnIndex = PHPExcel_Cell:: columnIndexFromString($HighestColumn);
            // var_dump(gettype($sheetdata->getCell('A12')->getValue())); die('oj');
            //var_dump($HighestRow); die('Lignes');

            $em = $this->getDoctrine()->getManager();
            //$monacte=$request->getSession();
            // $monacte->set('acte',null);


            for ($n = 0; $n <= $HighestRow; $n++) {


                if ($sheetdata->getCell('A' . $n)->getValue()!='') {
                    $dwligne = $em->getRepository('hostooSanteBundle:Symptomes')->findOneBy(
                        array(

                        'nom' => trim($sheetdata->getCell('B' . $n)->getValue()),

                        )
                    );
                    if ($dwligne == null) {
                        if ($n == $HighestRow) {
                            break;
                        }
                        $formule=$em->getRepository('hostooSanteBundle:TSymptome')->findOneByNom(trim($sheetdata->getCell('A' . $n)->getValue()));
                        if($formule == null){
                            $formule=new TSymptome();
                            $formule->setNom(trim($sheetdata->getCell('A' . $n)->getValue()));
                            $em->persist($formule);
                            $em->flush();
                        }
                        $dwtable[$n] = new Symptomes();

                        $dwtable[$n]->setNom(trim($sheetdata->getCell('B' . $n)->getValue()));

                        $dwtable[$n]->setTsymptome($formule);

                        //var_dump($dwtable); die('Test');
                        $em->persist($dwtable[$n]);

                    }
                }
            }
            $em->flush();
        }
        return $this->render('hostooSanteBundle:ImporterDonnees:importe_les_patients.html.twig', array(
            // ...
        ));
    }

}
