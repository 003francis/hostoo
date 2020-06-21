<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\ResultatsImg;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ImagerieController extends Controller
{

    /**
     * @Route("/tableaudebord_img", name="img_tb")
     */
    public function tbAction()
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:ResultatsImg')->examensDemandesMois();
        $exnr=$em->getRepository('hostooSanteBundle:ResultatsImg')->examensNRMois();
        $exr=$em->getRepository('hostooSanteBundle:ResultatsImg')->examensRMois();
        $ordonnances=$em->getRepository('hostooSanteBundle:ResultatsImg')->findAll();
        return $this->render('hostooSanteBundle:Imagerie:tb.html.twig', array(
            'exd'=>$exd,
            'exnr'=>$exnr,
            'exr'=>$exr,
        ));
    }

    /**
     * @Route("/examens-img", name="examens_img")
     */
    public function examensAction()
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->findAll();
        //$exnr=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->examensNRMoisL();
        //$exr=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->examensRMoisL();
        //$ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->findAll();
        return $this->render('hostooSanteBundle:Imagerie:liste.html.twig', array(
            'exd'=>$exd,
            /*  'exnr'=>$exnr,
              'exr'=>$exr,*/
        ));
    }
    public function IndexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->examensDuJour();
        return $this->render('hostooSanteBundle:Imagerie:index.html.twig', array('ordos'=>$ordonnances));
    }

    public function ajouterResultatAction(Request $request,$id)
    {
        $session = $request->getSession();

        if (!$session->has('resultati')) $session->set('resultati', array());
        $resultat = $session->get('resultati');

        if (array_key_exists($id, $resultat)) {
            if ($request->get('myresultat') != null) $resultat[$id] = $request->get('myresultat');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('myresultat') != null)
                $resultat[$id] = $request->get('myresultat');
            else
                $resultat[$id] = 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }

        $session->set('resultati', $resultat);
        return $this->redirectToRoute('hostoo_img_dash');
    }

    public function validerResultatAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->find($id);
        if($ordonnance->getEpisode()->getPatient()->getConvention()->getId() != 2){
        $bordereau=$em->getRepository('hostooSanteBundle:Bordereau')->findLast($ordonnance->getEpisode()->getPatient()->getId());
        }
        $res=array();
        foreach ($request->get('myresultat') as $key => $item){
            $resultat=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));
        if($resultat != null){
            $resultat->setDateresultat(new \DateTime());
            //var_dump(trim($item));

            if (trim($resultat->getResultat()) == null && trim($item) == '') {
                    $resultat->setAttente(0);
                }else{
                $resultat->setResultat(trim($item));
                    $resultat->setAttente(1);
                if($ordonnance->getEpisode()->getPatient()->getConvention()->getId() != 2 && $bordereau->monActe($resultat->getActe()->getId()) == null){
                        $bordereau->addLesActe($resultat->getActe());
                    $em->persist($bordereau);
                    }

                }
        }

            $em->persist($resultat);
        }


        //var_dump($request->files->get('fichier')); die('OK');
        foreach ($request->files->get('fichier') as $key => $item){
            $resultat=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));

            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */


            $file = $item;
            //var_dump($file);
            if($file !=null){
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                // Move the file to the directory where brochures are stored
                $brochuresDir = $this->container->getParameter('img_directory');
                $file->move($brochuresDir, $fileName);

                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
                $resultat->setFichier($fileName);
                $em->persist($resultat);
            }

        }
        //die('test');
        $em->persist($resultat);
        $em->persist($ordonnance);
        $em->flush();
        $request->getSession()->remove('resultati');
        return $this->redirectToRoute('hostoo_img_dash');
    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/attente_resultat_img/{id}/{act}", name="img_res_attente")
     */
    public function enAttenteAction($id,$act)
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->find($id);
        $act=$em->getRepository('hostooSanteBundle:Tarification')->find($act);
        $res=new ResultatsImg();
        $res->setAttente(true);
        $res->setActe($act);
        $res->setOrdonnance($exd);
        $em->persist($res);
        $em->flush();
        return $this->redirectToRoute('hostoo_img_dash');
    }

    function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
    {
        //Test1: fichier correctement uploadé
        if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
        //Test2: taille limite
        if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
        //Test3: extension
        $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
        if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
        //Déplacement
        return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
    }
}
