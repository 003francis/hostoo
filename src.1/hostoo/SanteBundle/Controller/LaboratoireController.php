<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/15/16
 * Time: 9:13 PM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\Tarif;
use hostoo\SanteBundle\Entity\ResultatsLabo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LaboratoireController extends Controller
{

    /**
     * @Route("/tableaudebord_labo", name="labo_tb")
     */
    public function tbAction()
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:ResultatsLabo')->examensDemandesMois();
        $exnr=$em->getRepository('hostooSanteBundle:ResultatsLabo')->examensNRMois();
        $exr=$em->getRepository('hostooSanteBundle:ResultatsLabo')->examensRMois();
        $ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();


        $resultats=$em->getRepository('hostooSanteBundle:ResultatsLabo')->statistiqueParActe();
        $resultatsne=$em->getRepository('hostooSanteBundle:ResultatsLabo')->statistiqueParNEActe();
        return $this->render('hostooSanteBundle:Labo:tb.html.twig', array(
            'exd'=>$exd,
            'exnr'=>$exnr,
            'exr'=>$exr,'ords'=>$ordonnances,'resultats'=>$resultats,'resultatsne'=>$resultatsne,
        ));
    }

    /**
     * @Route("/attente_resultat/{id}/{act}", name="labo_res_attente")
     */
    public function enAttenteAction($id,$act)
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->find($id);
        $act=$em->getRepository('hostooSanteBundle:Tarification')->find($act);
        $res=new ResultatsLabo();
        $res->setAttente(true);
        $res->setActe($act);
        $res->setOrdonnance($exd);
        $em->persist($res);
        $em->flush();
        return $this->redirectToRoute('hostoo_labo_dash');
    }

    /**
     * @Route("/examens-labo", name="examens_labo")
     */
    public function examensAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $exd=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();
        if($request->get('tag')=="exd"){
            $resultatsLabos=$em->getRepository('hostooSanteBundle:ResultatsLabo')->findAll();

            return $this->render('resultatslabo\index.html.twig', array(
                'resultatsLabos' => $resultatsLabos,
            ));


        }elseif ($request->get('tag')=="exe")
        {
            $resultatsLabos=$em->getRepository('hostooSanteBundle:ResultatsLabo')->examensRMoisL();
            return $this->render('resultatslabo\index.html.twig', array(
                'resultatsLabos' => $resultatsLabos,
            ));

        }elseif ($request->get('tag')=="exf"){
            $resultatsLabos=$em->getRepository('hostooSanteBundle:ResultatsLabo')->examensNRMoisL();
            return $this->render('resultatslabo\index.html.twig', array(
                'resultatsLabos' => $resultatsLabos,
            ));
        }
        //$exnr=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->examensNRMoisL();
        //$exr=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->examensRMoisL();
        //$ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();
        return $this->render('hostooSanteBundle:Labo:liste.html.twig', array(
            'exd'=>$exd,
          /*  'exnr'=>$exnr,
            'exr'=>$exr,*/
        ));
    }
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->examensDuJour();

       return $this->render('hostooSanteBundle:Labo:index.html.twig', array('ordos'=>$ordonnances));
    }

    /**
     *
     * @Route("/Examen-en-attente", name="exattente")
     */
    public function ExamenEnAttenteAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();

        return $this->render('hostooSanteBundle:Labo:exattente.html.twig', array('ordos'=>$ordonnances));
    }

    public function ajouterResultatAction(Request $request,$id)
    {
        $session = $request->getSession();

        if (!$session->has('resultat')) $session->set('resultat', array());
        $resultat = $session->get('resultat');

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

        $session->set('resultat', $resultat);
        return $this->redirectToRoute('hostoo_labo_dash');
    }

    public function validerResultatAction(Request $request, $id)
    {
        $bordereau=null;
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->find($id);
        $res=array();
        //var_dump($request->get('myresultat')); die('OK');
        foreach ($request->get('myresultat') as $key =>$item){

            $resultat=$em->getRepository('hostooSanteBundle:ResultatsLabo')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));
            if($resultat != null) {
                $resultat->setDateresultat(new \DateTime());
                $resultat->setResultat($item);
                if (trim($resultat->getResultat()) == null && trim($item) == '') {
                    $resultat->setAttente(0);
                }else{
                    $resultat->setAttente(1);

                }
            }

            $em->persist($resultat);
        }
        //var_dump($res); die('OK');


        $em->persist($ordonnance);
        $em->flush();
        $request->getSession()->remove('resultat');
        return $this->redirectToRoute('hostoo_labo_dash');
    }

    /**
     *
     * @Route("/valider-exam-att/{id}", name="valider_resultat_att")
     */
    public function validerResultatAttAction(Request $request, $id)
    {
        $bordereau=null;
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->find($id);
        $resultat=array();
        //var_dump($request->get('myresultat')); die('OK');
        foreach ($request->get('myresultat') as $key =>$item){

            $resultat=$em->getRepository('hostooSanteBundle:ResultatsLabo')->findOneBy(array('acte'=>$key,'ordonnance'=>$id));
//           var_dump($resultat);
//           var_dump($id."=>".$key);
            if($resultat != null) {
                $resultat->setDateresultat(new \DateTime());
                $resultat->setResultat($item);
                if (trim($resultat->getResultat()) == null && $item == null) {
                    $resultat->setAttente(0);
                }else{
                    $resultat->setAttente(1);

                }
                $em->persist($resultat);
            }
            /*else{
                $resultat= new ResultatsLabo();
                $acte=$em->getRepository('hostooSanteBundle:Tarification')->findOneById($key);
                $tar=new Tarif();
                $tar->setActes($acte);
                $resultat->setDateresultat(new \DateTime());
                $resultat->setActe($tar);
                $resultat->setResultat($item);
                $resultat->setOrdonnance($ordonnance);
                if (trim($resultat->getResultat()) == null && $item == null) {
                    $resultat->setAttente(0);
                }else{
                    $resultat->setAttente(1);


                }
                $em->persist($tar);
                $em->persist($resultat);
            }*/


        }
//        die('OK');
        //


        $em->persist($ordonnance);
        $em->flush();
        $request->getSession()->remove('resultat');
        return $this->redirectToRoute('ordonnancelabo_show',array('id'=>$id));
    }

    /**
     *
     *
     * @Route("/RapportLabo", name="rapport_labo")
     */
    public function rapportLaboAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordos=$em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();
        $cactes=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $convs=$em->getRepository('hostooGestionBundle:Convention')->findAll();

        return $this->render('hostooSanteBundle:Labo:rapport_labo.html.twig',['ordos'=>$ordos,'cactes'=>$cactes,'convs'=>$convs]);
    }
    /**
     *
     *
     * @Route("/NombreActes/{acte}/{categ}", name="nombreActe_labo")
     */
    public function nbreActesAction($acte,$categ){
        $em=$this->getDoctrine()->getManager();
        $ordos=$em->getRepository('hostooSanteBundle:ResultatsLabo')->lesactesParCategories($acte, $categ);
       return new Response($ordos['nbracte']);
    }
}
