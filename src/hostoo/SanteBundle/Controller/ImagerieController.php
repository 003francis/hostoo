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
        $resultats=$em->getRepository('hostooSanteBundle:ResultatsImg')->statistiqueParActe();
        $resultatsne=$em->getRepository('hostooSanteBundle:ResultatsImg')->statistiqueParNEActe();
        return $this->render('hostooSanteBundle:Imagerie:tb.html.twig', array(
            'exd'=>$exd,
            'exnr'=>$exnr,
            'exr'=>$exr,'resultats'=>$resultats,'resultatsne'=>$resultatsne,
        ));
    }

    /**
     * @Route("/examens-img", name="examens_img")
     */
    public function examensAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:ResultatsImg')->findAll();
        if($request->get('tag') == "non")
        {
            $exd=$em->getRepository('hostooSanteBundle:ResultatsImg')->examensNRMoisL();
        }elseif($request->get('tag') == "exe")
        {

            $exd=$em->getRepository('hostooSanteBundle:ResultatsImg')->examensRMoisL();
        }
        //$exnr=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->examensNRMoisL();
        //$exr=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->examensRMoisL();
        //$ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->findAll();
        return $this->render('resultatsimg/index.html.twig', array(
            'resultatsImgs'=>$exd,
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

    /**
     *
     * @Route("/valider-exam-attimg/{id}", name="valider_resultat_attimg")
     */
    public function validerResultatAttAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->find($id);

        $res=array();
        foreach ($request->get('myresultat') as $key => $item){
            if($item){
            $resultat[$key]=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));
           // var_dump($resultat);

            if($resultat[$key]) {
                $resultat[$key]->setDateresultat(new \DateTime());
                //var_dump(trim($item));

                if ($resultat[$key]->getAttente()==1) {
                    $resultat[$key]->setAttente(0);
                    $resultat[$key]->setResultat(trim($item));
                    // $resultat[$key]->setAttente(1);
                    $ordonnance->addResultat($resultat[$key]);
                    $em->persist($resultat[$key]);

                }else{
                    $resultat[$key]->setResultat(trim($item));
                    $resultat[$key]->setAttente(0);
                    $ordonnance->addResultat($resultat[$key]);
                    $em->persist($resultat[$key]);
                }
            }
//            var_dump($key."=>".$id);
//            var_dump($item);
//            var_dump($resultat[$key]->getResultat());
        }
        }

                if($request->files->get('fichier')!= null) {
                    foreach ($request->files->get('fichier') as $key => $file) {
                        $resultat[$key] = $em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte' => $key, 'ordonnance' => $id));

                        // $file stores the uploaded PDF file
                        /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
                        //var_dump($file);
                        if ($resultat[$key]) {
                            if ($file) {
                                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();

                                // Move the file to the directory where brochures are stored
                                $brochuresDir = $this->container->getParameter('img_directory');
                                $file->move($brochuresDir, $fileName);

                                // Update the 'brochure' property to store the PDF file name
                                // instead of its contents
                                $resultat[$key]->setFichier($fileName);
                                $em->persist($resultat[$key]);
                            }
                        }
                    }
                    //$em->persist($resultat[$key]);
                }



        $em->persist($ordonnance);

       // die('OK');
        $em->flush();
        $request->getSession()->remove('resultati');
        return $this->redirectToRoute('ordonnanceimg_show',array('id'=>$id));
    }
    public function validerResultatAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->find($id);

        $res=array();

        foreach ($request->get('myresultat') as $key => $item){
            $resultat[$key]=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));
        if($resultat[$key]){
            $resultat[$key]->setDateresultat(new \DateTime());
            //var_dump(trim($item));

            if ($resultat[$key]->getAttente()==1) {
                $resultat[$key]->setAttente(0);
                $resultat[$key]->setResultat(trim($item));
                //$ordonnance->addResultat($resultat[$key]);

            }else{
                $resultat[$key]->setResultat(trim($item));
                $resultat[$key]->setAttente(0);
                //$ordonnance->addResultat($resultat[$key]);

            }
            foreach ($request->files->get('fichier') as $key => $file){
                $resultat[$key]=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));

                // $file stores the uploaded PDF file
                /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
               //var_dump($file);
                if($resultat[$key]){
                if($file){
                    $fileName = $this->generateUniqueFileName().'.'.@$file->getClientOriginalExtension();
                        //var_dump($fileName);
                    // Move the file to the directory where brochures are stored
                    $brochuresDir = $this->getParameter('img_directory');
                    @$file->move($brochuresDir, $fileName);

                    // Update the 'brochure' property to store the PDF file name
                    // instead of its contents
                    $resultat[$key]->setFichier($fileName);
                    $ordonnance->addResultat($resultat[$key]);

                    $em->persist($resultat[$key]);
                }
                }
            }
            $em->persist($resultat[$key]);
            $em->persist($ordonnance);
        }


        }

        //var_dump($request->files->get('fichier')); die('OK');


        //die('test');
        //$em->persist($ordonnance);
        $em->flush();
        $request->getSession()->remove('resultati');
        return $this->redirectToRoute('hostoo_img_dash');
    }

    /**
     *
     * @Route("/Examen-img-attente", name="examens_img_attente")
     */
    public function ExamenEnAttenteAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceImg')->findAll();

        return $this->render('hostooSanteBundle:Imagerie:exattente.html.twig', array('ordos'=>$ordonnances));
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
