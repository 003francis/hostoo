<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/14/16
 * Time: 12:35 AM
 */

namespace hostoo\SanteBundle\Controller;

use Doctrine\ORM\NoResultException;
use hostoo\GestionBundle\Entity\Commande;
use hostoo\GestionBundle\Entity\Tarif;
use hostoo\PharmacieBundle\Entity\Produit;
use hostoo\SanteBundle\Entity\ActesPrescrits;
use hostoo\SanteBundle\Entity\Anamnese;
use hostoo\SanteBundle\Entity\Diagnostic;
use hostoo\SanteBundle\Entity\Diagnotics;
use hostoo\SanteBundle\Entity\Facture;
use hostoo\SanteBundle\Entity\Ordonnance;
use hostoo\SanteBundle\Entity\OrdonnanceImg;
use hostoo\SanteBundle\Entity\OrdonnanceLabo;

use hostoo\SanteBundle\Entity\ResultatsImg;
use hostoo\SanteBundle\Entity\ResultatsLabo;
use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Entity\Posologie;
use hostoo\SanteBundle\Entity\RClinic;
use hostoo\SanteBundle\Entity\Tarification;
use hostoo\SanteBundle\Form\AnamneseType;
use hostoo\SanteBundle\Form\DiagnosticType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MedecinController extends  Controller
{
    public function TBAction()
    {
        $em=$this->getDoctrine()->getManager();
        $um=$this->get('fos_user.user_manager');
        $user=$um->findUserByUsername($this->getUser());
        $caisse_centrale=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $ccdf=$em->getRepository('hostooSanteBundle:Caisse')->totalCDFJr();
        $cusd=$em->getRepository('hostooSanteBundle:Caisse')->totalUSDJr();
        $proservs=$em->getRepository('hostooSanteBundle:Facture')->facturesParServices(date('Y-m'));
        $proactes=$em->getRepository('hostooSanteBundle:Facture')->recetteDuMoisPatient(date('Y-m'));
        $depenses=$em->getRepository('hostooSanteBundle:BSCaisse')->findAll();
        $banque=$em->getRepository('hostooGestionBundle:Banque')->findAll();
        $patients=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        $freqs=$em->getRepository('hostooSanteBundle:Episode')->findAll();

        $liste=$em->getRepository('hostooSanteBundle:Rdv')->findOneBy(array('medecin'=>$user,'daterdv'=>new \DateTime(date('Y-m-d'))));
        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->findByMedecin($user);
        $medecins=$em->getRepository('hostooUserBundle:Utilisateur')->lesmedecinsListe();
        if($liste==null){
            $liste=0;
           $numRDV=0;
        }else{
            $numRDV=count($liste->getRDVspatients());
        }
        $cpt=0;
        foreach ($rdvdoctor as $don){
           $cpt=$cpt+ count($don->getRDVspatients());
        }
        return $this->render('hostooSanteBundle:Medecin:dash.html.twig',array(
            'liste'=>$liste,'nbreRDV'=>$numRDV,'rdvs'=>$rdvdoctor,'nbr'=>$cpt,
            'caisse'=>$caisse_centrale,'banks'=>$banque,'patients'=>$patients,'freqs'=>$freqs,
            'ccdf'=>$ccdf,'cusd'=>$cusd,'depenses'=>$depenses, 'proservs'=>$proservs,'proactes'=>$proactes,'medecins'=>$medecins));
    }

    public function listePatientAction()
    {
        $em=$this->getDoctrine()->getManager();
        $um=$this->get('fos_user.user_manager');
        $user=$um->findUserByUsername($this->getUser());
        $liste=$em->getRepository('hostooSanteBundle:Rdv')->findByMedecin($user);
        return $this->render('hostooSanteBundle:Medecin:medecinaccueil.html.twig', array('liste'=>$liste));
    }

    public function fichePatientAction(Request $request,$id)
    {
        $session = $request->getSession();

        if (!$session->has('actes')) $session->set('actes', array());
        if (!$session->has('acteslbo')) $session->set('acteslbo', array());
        $user=$this->container->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->find($id);

        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findByPatient($liste,array('id'=>'desc'),1);
        return $this->render('hostooSanteBundle:Medecin:fichepatient.html.twig',array('patient'=>$liste,'episodes'=>$episodes));
    }

    public function lireEpisodeAction(Request $request,$id)
    {
        $session=$request->getSession();
        if (!$session->has('actes')) $session->set('actes', array());
        if (!$session->has('imgrie')) $session->set('imgrie', array());
        if (!$session->has('phar')) $session->set('phar', array());
        if (!$session->has('autres')) $session->set('autres', array());
        if (!$session->has('page')) $session->set('page', $id); else $session->set('page', $id);
        $em=$this->getDoctrine()->getManager();
        $episode=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $symptomes=$em->getRepository('hostooSanteBundle:TSymptome')->findAll();
        $rdvpatient=$em->getRepository('hostooSanteBundle:RdvPatient')->rdvTest($episode);
        // $um=$this->get('fos_user.user_manager');
        $medecin=$this->getUser();
        /*if($rdvpatient->getRecu()==0){
        try {
            $rdvdoctor = $em->getRepository('hostooSanteBundle:Rdv')->rdvMedparLaDate($medecin, new \DateTime(date('Y-m-d')));
            $rdvdoctor->setNbrepatients($rdvdoctor->getNbrepatients()-1);
            $rdvdoctor->setPatientsrecus($rdvdoctor->getPatientsrecus()+1);
            $em->persist($rdvdoctor);
        }catch (NoResultException $e){
            $rdvdoctor = $em->getRepository('hostooSanteBundle:Rdv')->findOneBy(array('medecin'=>$medecin,'daterdv'=>new \DateTime(date('Y-m-d'))));
                $rdvpatient->setRecu(1);
                $rdvdoctor->setNbrepatients($rdvdoctor->getNbrepatients()-1);
                $rdvdoctor->setPatientsrecus($rdvdoctor->getPatientsrecus()+1);
            }*/
        if($rdvpatient && $rdvpatient->getRecu() == 0) {
            $rdvdoctor = $em->getRepository('hostooSanteBundle:Rdv')->rdvMedparLaDate($medecin, new \DateTime(date('Y-m-d')));
            $rdvdoctor->checkRDV($rdvpatient);
            $episode->setUtilisateur($this->getUser());
            $rdvpatient->setRecu(1);
            $em->persist($rdvdoctor);
            $em->persist($episode);
            $em->persist($rdvpatient);
            $em->flush();
        }

        //}




        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('actes')));
        $tabimg=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('imgrie')));
        $tabmed=$em->getRepository('hostooPharmacieBundle:Produit')->findArray(array_keys($session->get('phar')));
        $tabautres=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('autres')));
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $labos=$em->getRepository('hostooSanteBundle:Tarification')->findByCategories(3);
        $img=$em->getRepository('hostooSanteBundle:Tarification')->findByCategories(4);
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        $signe=$em->getRepository('hostooSanteBundle:SignesVitaux')->findByEpisode($episode,array('id'=>'desc'));
        //var_dump($episode); die('episode');
        return $this->render('hostooSanteBundle:Medecin:fichepatient2.html.twig',array(
            'labos'=>$labos,
            'imgs'=>$img,
            'tabautres'=>$tabautres,
            'tabimg'=>$tabimg,
            'tabmed'=>$tabmed,
            'produits'=>$produits,
            'tabacte'=>$tabacte,
            'episode'=>$episode,
            'svs'=>$signe,
            'actes'=>$actemedicaux,
            'symptomes'=>$symptomes,
            'categories'=>$categories));
    }

    public function actesAction(Request $request,$id)
    {
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        //if (!$session->has('actes')) $session->set('actes', array());
        //$epi=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        //if (!$session->has('patient')) $session->set('episode',$id);
        if(!is_null($session->get('actes'))){
            $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_keys($session->get('actes')));
            //$form=$this->get('form.factory')->create(EpisodeType::class,$episode);
            return $this->render('hostooSanteBundle:Actes:actes.html.twig',array('actes'=>$actemedicaux,'categories'=>$categories,
               'tabacte'=>$tabacte/*'form'=>$form->createView()*/));
           // return $this->redirect($this->generateUrl('hostoo_med_lireepisode', array('id'=>$id)));
        }

        return $this->render('hostooSanteBundle:Actes:actes.html.twig',array('actes'=>$actemedicaux,'categories'=>$categories,));

    }

    public function addAnamneseAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $anamnese=new Anamnese;
        $epi=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $form=$this->get('form.factory')->create(AnamneseType::class,$anamnese);
        if($request->isMethod('POST')&& $form->handleRequest($request))
        {
            $anamnese->setEpisode($epi);
            $em->persist($anamnese);
            $em->flush();

            return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$id));
        }
        return $this->render('hostooSanteBundle:formulaire:anamnese.html.twig', array('id'=>$id,'form'=>$form->createView(),));
    }

    public function addDiagnosticAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $epi=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $diagnostic=$em->getRepository('hostooSanteBundle:Diagnostic')->findOneByEpisode($id);
        if($diagnostic==null){
        $diagnostic=new Diagnostic();
        }
        $form=$this->get('form.factory')->create(DiagnosticType::class,$diagnostic);
        if($request->isMethod('POST')&& $form->handleRequest($request))
        {
            $diagnostic->setEpisode($epi);
            $em->persist($diagnostic);
            $em->flush();

            return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$id));
        }
        //$diagnostic->setEpisode(null);
        return $this->render('hostooSanteBundle:formulaire:diagnostic.html.twig', array('id'=>$id,'form'=>$form->createView(),));
    }



    public function ajouterActeAction(Request $request)
    {

        $session = $request->getSession();

        if (!$session->has('actes')) $session->set('actes', array());
        $actes = $session->get('actes');

        if (!empty($actes)) {
            if ($request->get('labo') != null) $actes = $request->get('labo');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('labo') != null)
                $actes = $request->get('labo');
            else
                $actes = 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }

        $session->set('actes', $actes);


        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))));
    }

    public function supprimerActeAction(Request $request,$id)
    {
        $session = $request->getSession();
        $actes = $session->get('actes');

        if (array_key_exists($id, $actes))
        {
            unset($actes[$id]);
            $session->set('actes',$actes);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))).'#tabr3');
    }

    public function ajouterImgAction(Request $request)
    {

        $session = $request->getSession();

        if (!$session->has('imgrie')) $session->set('imgrie', array());
        $imgrie = $session->get('imgrie');

        if (!empty($imgrie)) {
            if ($request->get('imgr') != null) $imgrie = $request->get('imgr');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('imgr') != null)
                $imgrie= $request->get('imgr');
            else
                $imgrie= 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }

        $session->set('imgrie', $imgrie);


        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))));
    }

    public function supprimerImgAction(Request $request,$id)
    {
        $session = $this->getRequest()->getSession();
        $imgrie = $session->get('imgrie');

        if (array_key_exists($id, $imgrie))
        {
            unset($imgrie[$id]);
            $session->set('imgrie',$imgrie);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))).'#tabr4');
    }

    public function ajouterProdAction(Request $request)
    {

        $session = $request->getSession();

        if (!$session->has('phar')) $session->set('phar', array());
        $imgrie = $session->get('phar');
        $recid = $request->get('qte');
        foreach ($recid as $item => $value)
        {
            $imgrie[$value]=1;
        }
/**
        if (!empty($imgrie)) {
            if ($request->get('qte') != null) $imgrie = $request->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('qte') != null)
                $imgrie= $request->get('qte');
            else
                $imgrie= 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }
*/
        $session->set('phar', $imgrie);
        $session->set('pos', $imgrie);

        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))));
    }
    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function ajouterMedAction(Request $request, $id)
    {

        $session = $request->getSession();

        if (!$session->has('phar')) $session->set('phar', array());
        if (!$session->has('pos')) $session->set('pos', array());
        $phar = $session->get('phar');
        $pos = $session->get('pos');

        if (array_key_exists($id, $phar)) {
            if ($request->get('qte') != null) $phar[$id] = $request->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('qte') != null)
                $phar[$id] = $request->get('qte');

            else
                $phar[$id] = 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }
        if (array_key_exists($id, $pos)) {
            if ($request->get('pos') != null) $pos[$id] = $request->get('pos');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('pos') != null)
                $pos[$id] = $request->get('pos');

            else
                $pos[$id] = "";

            $this->get('session')->getFlashBag()->add('success', 'Posologie ajouté avec succès');
        }

        $session->set('phar', $phar);
        $session->set('pos', $pos);


        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))).'#tabr5');
    }

    public function supprimerMedAction(Request $request,$id)
    {
        $session = $this->getRequest()->getSession();
        $phar = $session->get('phar');

        if (array_key_exists($id, $phar))
        {
            unset($phar[$id]);
            $session->set('phar',$phar);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))).'#tabr5');
    }

    public function ajouterAutresAction(Request $request)
    {

        $session = $request->getSession();

        if (!$session->has('autres')) $session->set('autres', array());
        $autres = $session->get('autres');

        if (!empty($autres)) {
            if ($request->get('aut') != null) $autres = $request->get('aut');
            $this->get('session')->getFlashBag()->add('success', 'Acte existe deja');
        } else {
            if ($request->get('aut') != null)
                $autres = $request->get('aut');
            else
                $autres = 1;

            $this->get('session')->getFlashBag()->add('success', 'Acte medical ajouté avec succès');
        }

        $session->set('autres', $autres);


        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))));
    }

    public function supprimerAutresAction(Request $request,$id)
    {
        $session = $this->getRequest()->getSession();
        $autres = $session->get('autres');

        if (array_key_exists($id, $autres))
        {
            unset($autres[$id]);
            $session->set('autres',$autres);

            $this->get('session')->getFlashBag()->add('success','Acte supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$request->getSession()->get('page'))).'#tabr6');
    }
    public function extArray($array)
    {
        $tr='';
        $n=1;
        foreach ($array as $val){
            $tr.=$val;
            if($n<count($array)){
                $tr.=',';
                $n++;
            }
        }
        return $tr;
    }
    /**
     * @param Request $request
     */
    public function factureActesAction(Request $request)
    {

        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        //$id = $request->get('id');
        //$actesmed = $request->getSession()->get('actes');
        //$acteslabo = $request->getSession()->get('acteslbo');
        $epi = $em->getRepository('hostooSanteBundle:Episode')->find($session->get('page'));
        /*$rdv=$em->getRepository('hostooSanteBundle:RdvPatient')->findOneBy(array('patient'=>$epi->getPatient()->getId(),
            'id'=>'desc'));*/
        $conv = $epi->getPatient()->getSociete()->getConvention();
        // $tabacte=$tabautres=$tabimg=new Tarif();
        //var_dump(gettype($session->get('imgrie'))); die('actes');
       //var_dump(array_values($session->get('actes'))); var_dump($conv); die('ok');
        $tabacte = $em->getRepository('hostooGestionBundle:Tarif')->findArray(array_values($session->get('actes')), $conv);
        $tabimg = $em->getRepository('hostooGestionBundle:Tarif')->findArray(array_values($session->get('imgrie')), $conv);
        $tabmed = $em->getRepository('hostooPharmacieBundle:Produit')->findArray(array_keys($session->get('phar')));
        $tabautres = $em->getRepository('hostooGestionBundle:Tarif')->findArray(array_values($session->get('autres')), $conv);
        //var_dump(count($tabacte));
        //var_dump(count($tabimg));
        //die('Ok');
        $factures = new Facture();
        $commande = new Commande();
        $ordonnance = new Ordonnance();
        $ordolab = new OrdonnanceLabo();
        $ordoimg = new OrdonnanceImg();

        $phar = $session->get('phar');
        $poso = $session->get('pos');
        $n = 0;
        $t = 0;
        $som = 0;
        /* Examen de labo*/
        if($tabacte !=null) {
            foreach ($tabacte as $acte) {
                $res = new ResultatsLabo();
                $commande->addTarif($acte);
                $actesmed = new ActesPrescrits();
                $actesmed->setActes($acte);
                $actesmed->setOrdonnancelabo($ordolab);
                $res->setActe($acte);
                $ordolab->addResultat($res);
                $ordolab->setFacture($factures);
                $em->persist($res);
                $em->persist($actesmed);
                $formule = $em->getRepository('hostooGestionBundle:FormuleTarification')->findBy(array('formule' => $epi->getPatient()->getFormule(), 'acte' => $acte));
                if (!$formule) {
                    $som += $acte->getPrix();
                }
                $session->remove('actes');
            }
            $ordolab->setMedecin($this->getUser());
                $em->persist($ordolab);
        }
     /* Examen de l'imagerie */
        if($tabimg !=null) {
            foreach ($tabimg as $acte) {
              $res=new ResultatsImg();
                $commande->addTarif($acte);
                $actesmed = new ActesPrescrits();
                $actesmed->setActes($acte);
                $res->setActe($acte);
                $actesmed->setOrdonnanceimg($ordoimg);
                $ordoimg->addResultat($res);
                $ordoimg->setFacture($factures);
                $em->persist($res);
                $em->persist($actesmed);
                $formule=$em->getRepository('hostooGestionBundle:FormuleTarification')->findBy(array('formule'=>$epi->getPatient()->getFormule(),'acte'=>$acte));
                if(!$formule) {
                    $som += $acte->getPrix();
                }
                $session->remove('imgrie');
            }
            $ordoimg->setMedecin($this->getUser());
            $em->persist($ordoimg);
        }
        /* Autres actes medicaux*/
        if($tabautres !=null){
        foreach ($tabautres as $acte) {
            $commande->addTarif($acte);
            $formule=$em->getRepository('hostooGestionBundle:FormuleTarification')->findBy(array('formule'=>$epi->getPatient()->getFormule(),'acte'=>$acte));
            if(!$formule) {
                $som += $acte->getPrix();
            }
        }
    }
        /* Ordonnace pharmcie*/

        if($tabmed !=null){
            $nb=0;
        foreach ($tabmed as $med)
        {
            $factures->addProduit($med);
            $som += $med->getPrix()*$phar[$med->getId()];
            $posologie= new Posologie();
            $posologie->setProduit($med);
            $posologie->setQte($phar[$med->getId()]);
            $posologie->setPosologie($poso[$med->getId()]);
            $em->persist($posologie);
            $ordonnance->addPosologie($posologie);
            $ls=$epi->getListesoins();
            $ls->setRechecked(true);
            //var_dump($ls->getRechecked()); die('ls');
            $em->persist($ls);
            $nb++;
        }
        }
        $factures->addCommande($commande);
        $ordonnance->setEpisode($epi);
        $factures->setEpisode($epi);
        $ordoimg->setEpisode($epi);
        $ordolab->setEpisode($epi);
        $factures->setPrix($som);
        $em->persist($ordonnance);
        $em->persist($commande);
        $em->persist($factures);
        $em->flush();
        $request->getSession()->set('actes', array());
        $request->getSession()->set('acteslbo', array());
        $request->getSession()->set('imgrie', array());
        $request->getSession()->set('phar', array());

        return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$session->get('page')));
    }

    public function resetActesAction(Request $request)
    {
        $request->getSession()->set('actes', array());
        $request->getSession()->set('acteslbo', array());
        return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$request->get('id')));
    }

    public function recuperePrix(Patient $patient,Tarification $tarification)
    {
        if($patient->getConvention()->getTconvention()->getId() == 2)
        {
            return $tarification->getConventionne();
        }elseif ($patient->getTypeclient()->getNom() == 'privé')
        {
            return $tarification->getPrive();
        }else{
            return $tarification->getGardejourferie();
        }
    }

    public function resetAction(Request $request)
    {
        $session=$request->getSession();
        $session->set('actes', array());
        $session->set('imgrie', array());
        $session->set('phar', array());
        $session->set('autres', array());
        return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$session->get('page')));
    }

    public function lesPatientsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        return $this->render('hostooSanteBundle:Medecin:liste_patients.html.twig',array(
            'liste'=>$liste,
        ));
    }

    public function dossierDuPatientAction($patient)
    {
        $em=$this->getDoctrine()->getManager();
        $pat=$em->getRepository('hostooSanteBundle:Patient')->findOneById($patient);
        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findByPatient($patient,array('id'=>'desc'));
        return $this->render('hostooSanteBundle:Medecin:dossier_patient.html.twig',array(
            'episodes'=>$episodes,'patient'=>$pat,
        ));
    }

}
