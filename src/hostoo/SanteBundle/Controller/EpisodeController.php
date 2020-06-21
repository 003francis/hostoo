<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/6/16
 * Time: 8:39 PM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Actes;
use hostoo\SanteBundle\Entity\Episode;
use hostoo\SanteBundle\Form\EpisodeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class EpisodeController extends Controller
{
    public function lireEpisodeAction(Request $request,$id)
    {
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        if (!$session->has('actes')) $session->set('actes', array());
        if (!$session->has('actes')) $session->set('acteslbo', array());
        //if (!$session->has('patient')) $session->set('patient',);
        //$um=$this->get('fos_user.user_manager');
        $episodenow=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $actelabo=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories2=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        if (!$session->has('patient')) $session->set('patient',$episodenow->getPatient()->getId());
        if(!is_null($session->get('actes')) && !empty($session->get('acteslbo'))){
        $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_keys($session->get('actes')));
        $tabacte2=$em->getRepository('hostooSanteBundle:Tarifslabo')->findArray(array_keys($session->get('acteslbo')));
        //$form=$this->get('form.factory')->create(EpisodeType::class,$episode);
            return $this->render('hostooSanteBundle:Episode:episodepatient.html.twig',array('episode'=>$episodenow,'actes'=>$actemedicaux,'categories'=>$categories,'actes2'=>$actelabo,'categories2'=>$categories2,
                'tabacte'=>$tabacte,'tabacte2'=>$tabacte2,/*'form'=>$form->createView()*/));
        }elseif (!is_null($session->get('actes'))){
            $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_keys($session->get('actes')));

            return $this->render('hostooSanteBundle:Episode:episodepatient.html.twig',array('episode'=>$episodenow,'actes'=>$actemedicaux,'categories'=>$categories,'actes2'=>$actelabo,'categories2'=>$categories2,
                'tabacte'=>$tabacte,'tabacte2'=>null,/*'form'=>$form->createView()*/));
        }elseif (!is_null($session->get('acteslbo'))){
            $tabacte2=$em->getRepository('hostooSanteBundle:Tarifslabo')->findArray(array_keys($session->get('acteslbo')));
            //$form=$this->get('form.factory')->create(EpisodeType::class,$episode);
            return $this->render('hostooSanteBundle:Episode:episodepatient.html.twig',array('episode'=>$episodenow,'actes'=>$actemedicaux,'categories'=>$categories,'actes2'=>$actelabo,'categories2'=>$categories2,
                'tabacte2'=>$tabacte2,'tabacte'=>null,/*'form'=>$form->createView()*/));
        }

        return $this->render('hostooSanteBundle:Episode:episodepatient.html.twig',array('episode'=>$episodenow,'actes'=>$actemedicaux,'categories'=>$categories,'actes2'=>$actelabo,'categories2'=>$categories2
            ,/*'form'=>$form->createView()*/));
    }

    public function ajouterActeAction(Request $request,$id)
    {

            $session = $request->getSession();

            if (!$session->has('actes')) $session->set('actes', array());
            $actes = $session->get('actes');

            if (array_key_exists($id, $actes)) {
                if ($request->get('qte') != null) $actes[$id] = $request->get('qte');
                $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
            } else {
                if ($request->get('qte') != null)
                    $actes[$id] = $request->get('qte');
                else
                    $actes[$id] = 1;

                $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
            }

            $session->set('actes', $actes);


        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('page')));
    }

    public function supprimerActeAction(Request $request,$id)
    {
        $session = $this->getRequest()->getSession();
        $actes = $session->get('actes');

        if (array_key_exists($id, $actes))
        {
            unset($actes[$id]);
            $session->set('actes',$actes);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('page')));
    }

    public function ajouterActelboAction(Request $request,$id)
    {

        $session = $request->getSession();

        if (!$session->has('acteslbo')) $session->set('acteslbo', array());
        $acteslbo = $session->get('acteslbo');

        if (array_key_exists($id, $acteslbo)) {
            if ($request->get('qte2') != null) $acteslbo[$id] = $request->get('qte2');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('qte2') != null)
                $acteslbo[$id] = $request->get('qte2');
            else
                $acteslbo[$id] = 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte labo ajouté avec succès');
        }

        $session->set('acteslbo', $acteslbo);


        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('page')));
    }

    public function supprimerActelboAction(Request $request,$id)
    {
        $session = $this->getRequest()->getSession();
        $acteslbo = $session->get('acteslbo');

        if (array_key_exists($id, $acteslbo))
        {
            unset($acteslbo[$id]);
            $session->set('acteslbo',$acteslbo);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('page')));
    }

    /**
     * @param Request $request
     */
    public function factureActesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $actesmed = $request->getSession()->get('actes');
        $acteslabo = $request->getSession()->get('acteslbo');
        $epi = $em->getRepository('hostooSanteBundle:Episode')->find($id);
        $rdv=$em->getRepository('hostooSanteBundle:RdvPatient')->findOneBy(array('patient'=>$epi->getPatient()->getId(),
            'id'=>'desc'));
        $tabacte = $em->getRepository('hostooSanteBundle:Tarification')->findArray(array_keys($actesmed));
        $tabacte2 = $em->getRepository('hostooSanteBundle:Tarifslabo')->findArray(array_keys($acteslabo));

        $ligne = array();
        foreach ($tabacte as $item) {
            if ($epi->getPatient()->getTypeClient() == 'privé') {
            $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getPrive());
        }else if ($epi->getPatient()->getTypeClient() != 'conventionné') {
        $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getGardejourferie());
    } else {
        $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getConventionne());
    }}
        foreach ($tabacte2 as $item) {
            if ($epi->getPatient()->getTypeClient() == 'privé') {
                $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getPrive());
            }else if ($epi->getPatient()->getTypeClient() != 'conventionné') {
                $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getGardejourferie());
            } else {
                $ligne[] = array('libelle' => $item->getDesignationacte(), 'montant' => $item->getConventionne());
            }}
        /*var_dump($ligne);
        var_dump(array_sum($ligne[1]));
        die('ko');*/
        $factueractes=new Actes;
        $rdv->setValid(true);
        $factueractes->setActe($ligne);
        $factueractes->setEpisode($epi);
        $factueractes->setPrix($request->get('somtot'));
        $em->persist($factueractes);
        $em->flush();

        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('id')));
    }

    public function resetActesAction(Request $request)
    {
        $request->getSession()->set('actes', array());
        $request->getSession()->set('acteslbo', array());
        return $this->redirectToRoute('hostoo_sante_lireepisode',array('id'=>$request->get('id')));
    }

    public function voirActesEpisodeAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $episodenow=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        return $this->render('hostooSanteBundle:Episode:episodepatientreception.html.twig',array('episode'=>$episodenow,));
    }

    public function frequentationDesPatients(Request $request,$mois)
    {
        $em=$this->getDoctrine()->getManager();
        $frequentations=$em->getRepository('hostooSanteBundle:Episode')->frequentationPatients($mois);
    }

    public function lesepisodesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $lesepisodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        return $this->render('hostooSanteBundle:Episode:episodes.html.twig',array('episodes'=>$lesepisodes,));
    }

    /**
     *
     *
     * @Route("/DepFlash")
     */
    public function refactoriserDepAction()
    {
        $em=$this->getDoctrine()->getManager();
        $patients=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        $monpatient[]=array();
        $n=0;$rep=0;
        foreach ($patients as $patient ){
            //$monpatient[$key]=$patient;
            foreach ($dependants as $key => $dependant){
                if($patient->getId() == $dependant->getMoi()->getId()){
                    $monpatient[$key]=$dependant->getMoi()->setMadependance($dependant);
//                    $rep++;
                    $n++;
                    $em->persist($monpatient[$key]);

                }
                if($n == 20){
                    $em->flush();
                    //$em->
                    // $em->refresh($monpatient[$key]);
                    $monpatient[]=array();
                }
            }
            //$em->flush();

        }
        //return new Response((string)$rep);
        return $this->redirectToRoute('tableau_de_bord');
    }

    /**
     *
     * @Route("/AfficherLesActesEpisode/{id}", name="afficher_les_actes")
     */
    public function afficherLesActes(Request $request,Episode $episode)
    {
        $session=$request->getSession();

        return $this->render('hostooSanteBundle:Episode:episodepatientprint.html.twig',array('episode'=>$episode));
    }


    /**
     *
     * @Route("/ImprimerLesActesEpisode", name="imprimer_les_actes")
     */
    public function imprimerLesActes(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $session=$request->getSession();
        $societes=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();
        $conventions=$em->getRepository('hostooSanteBundle:Formule')->findAll();



        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        if($session->get('temps')){
            if($session->get('societe') == 15 ){
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsPV((int)$session->get('societe'),$session->get('temps'));
            }
            if($session->get('societe') != 15){
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsCV((int)$session->get('societe'),$session->get('temps'));
            }
        }

        return $this->render('hostooSanteBundle:Episode:episoderapportprint.html.twig', array(
//            'societes'=>$societes,
//            'conventions'=>$conventions,
            'episodes'=>$episodes,
        ));
    }

    /**
     *
     * @Route("/RapportDesFrequentations", name="rapport_de_frequentation")
     */
    public function rapportDesFrequentations(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $session=$request->getSession();
        $societes=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();
        $conventions=$em->getRepository('hostooSanteBundle:Formule')->findAll();



        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        if($request->isMethod('POST')){
            $session->set('temps',$request->get('an')."-".$request->get('mois'));
            $session->set('societe',$request->get('societe'));
            $session->set('formule',$request->get('formule'));
            if($request->get('societe') == 15 ){
                $session->set('conv','PRIVES');
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsPV((int)$request->get('societe'),$request->get('an')."-".$request->get('mois'));
            }
        if($request->get('societe') != 15){
            $session->set('conv','CONVENTIONNES');
            $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsCV((int)$request->get('societe'),$request->get('an')."-".$request->get('mois'));
        }
        }

        return $this->render('hostooSanteBundle:Episode:episoderapport.html.twig', array(
            'societes'=>$societes,
            'conventions'=>$conventions,
            'episodes'=>$episodes,
        ));
    }
}