<?php

namespace hostoo\HospisBundle\Controller;

use hostoo\GestionBundle\Entity\Commande;
use hostoo\SanteBundle\Entity\ActesPrescrits;
use hostoo\SanteBundle\Entity\Facture;
use hostoo\SanteBundle\Entity\Ordonnance;
use hostoo\SanteBundle\Entity\OrdonnanceImg;
use hostoo\SanteBundle\Entity\OrdonnanceLabo;
use hostoo\SanteBundle\Entity\Posologie;
use hostoo\SanteBundle\Entity\ResultatsImg;
use hostoo\SanteBundle\Entity\ResultatsLabo;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\HospisBundle\Entity\Tour;
use hostoo\HospisBundle\Form\TourType;

/**
 * Tour controller.
 *
 * @Route("/hospitalisation/tour")
 */
class TourController extends Controller
{
    /**
     * Lists all Tour entities.
     *
     * @Route("/{id}/liste", name="hospitalisation_tour_index")
     * @Method("GET")
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tours = $em->getRepository('hostooHospisBundle:Tour')->findByHospitalisation($id);

        return $this->render('hostooHospisBundle:tour:index.html.twig', array(
            'tours' => $tours,
        ));
    }

    /**
     * Lists all Tour entities.
     *
     * @Route("/{hos}", name="hospitalisation_tour_tours")
     * @Method("GET")
     */
    public function toursHospitalisationAction($hos)
    {
        $em = $this->getDoctrine()->getManager();

        $tours = $em->getRepository('hostooHospisBundle:Tour')->findByHospitalisation($hos);

        return $this->render('hostooHospisBundle:tour:tours.html.twig', array(
            'tours' => $tours,
        ));
    }

    /**
     * Creates a new Tour entity.
     *
     * @Route("/new/{id}", name="hospitalisation_tour_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $hos=$em->getRepository('hostooHospisBundle:Hospitalisation')->find($id);
        $tour = new Tour();
        $tour->setHospitalisation($hos);
        $tour->setGarde($this->getUser());
        $form = $this->createForm('hostoo\HospisBundle\Form\TourType', $tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_tour_show', array('id' => $tour->getId()));
        }

        return $this->render('hostooHospisBundle:tour:new.html.twig', array(
            'tour' => $tour,
            'form' => $form->createView(),'hos'=>$hos
        ));
    }

    /**
     * Finds and displays a Tour entity.
     *
     * @Route("/{id}/show", name="hospitalisation_tour_show")
     * @Method("GET")
     */
    public function showAction(Request $request,Tour $tour)
    {
        $session=$request->getSession();
        if (!$session->has('actes')) $session->set('actes', array());
        if (!$session->has('imgrie')) $session->set('imgrie', array());
        if (!$session->has('phar')) $session->set('phar', array());
        if (!$session->has('autres')) $session->set('autres', array());
        $deleteForm = $this->createDeleteForm($tour);
        $session->set('page', $tour->getId());
        $em=$this->getDoctrine()->getManager();
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();

        $labos=$em->getRepository('hostooSanteBundle:Tarification')->ActesLabo();
        $img=$em->getRepository('hostooSanteBundle:Tarification')->ActesImg();
        $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('actes')));
        $tabimg=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('imgrie')));
        $tabmed=$em->getRepository('hostooPharmacieBundle:Produit')->findArray(array_keys($session->get('phar')));
        $tabautres=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('autres')));


        return $this->render('hostooHospisBundle:tour:show.html.twig', array(
            'tour' => $tour,'labos'=>$labos,'imgs'=>$img,'tabacte'=>$tabacte,'tabimg'=>$tabimg,'tabmed'=>$tabmed,'tabautres'=>$tabautres,
            'delete_form' => $deleteForm->createView(),'actes'=>$actemedicaux,
        ));
    }

    /**
     * Displays a form to edit an existing Tour entity.
     *
     * @Route("/{id}/edit", name="hospitalisation_tour_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tour $tour)
    {
        $deleteForm = $this->createDeleteForm($tour);
        $editForm = $this->createForm('hostoo\HospisBundle\Form\TourType', $tour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tour);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_tour_edit', array('id' => $tour->getId()));
        }

        return $this->render('hostooHospisBundle:tour:edit.html.twig', array(
            'tour' => $tour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tour entity.
     *
     * @Route("/{id}", name="hospitalisation_tour_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tour $tour)
    {
        $form = $this->createDeleteForm($tour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tour);
            $em->flush();
        }

        return $this->redirectToRoute('hospitalisation_tour_index');
    }

    /**
     * Creates a form to delete a Tour entity.
     *
     * @param Tour $tour The Tour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tour $tour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hospitalisation_tour_delete', array('id' => $tour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @param Request $request
     * @Route("/facturerActesTout/{id}", name="facturer_actes_tout")
     */
    public function factureActesAction(Request $request,$id)
    {

        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        //$id = $request->get('id');
        //$actesmed = $request->getSession()->get('actes');
        //$acteslabo = $request->getSession()->get('acteslbo');
        $epi = $em->getRepository('hostooHospisBundle:Hospitalisation')->find($id);
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
        //var_dump($epi->getFacture() );
        //var_dump(count($tabimg));
        //die('Ok');

        $factures = $epi->getFacture();
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
        if($tabacte !=null && $tabacte != []) {
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
        $ordonnance->setHospitalisation($epi);
        $factures->setHospitalisation($epi);
        $ordoimg->setHospitalisation($epi);
        $ordolab->setHospitalisation($epi);
        $factures->setPrix($factures->getPrix()+$som);
        $em->persist($ordonnance);
        $em->persist($commande);
        $em->persist($factures);
        $em->flush();
        $request->getSession()->set('actes', array());
        $request->getSession()->set('acteslbo', array());
        $request->getSession()->set('imgrie', array());
        $request->getSession()->set('phar', array());

        return $this->redirectToRoute('hospitalisation_show',array('id'=>$id));
    }

    /**
     *
     * @Route("/labo-actes", name="labo_actes")
     */
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


        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))));
    }
    /**
     *
     * @Route("/labo-actes-supp/{id}", name="labo_actes-supp")
     */
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

        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))).'#tabr3');
    }
    /**
     *
     * @Route("/img-actes", name="img_actes")
     */
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


        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))));
    }
    /**
     *
     * @Route("/img-actes-supp", name="img_actes_supp")
     */
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

        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))).'#tabr4');
    }
    /**
     *
     * @Route("/aj-prod", name="aj_prod")
     */
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

        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))));
    }
    /**
     *
     * @Route("/ajouter-med-prod/{id}", name="ajouter_med_prod")
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


        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))).'#tabr5');
    }

    /**
     *
     * @Route("/supprimer-med-prod/{id}", name="suppriner_med_prod")
     */
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

        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))).'#tabr5');
    }

    /**
     * @param Request $request
     * @Route("/ajouter-actes-autres", name="autres_actes_hop")
     */
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


        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))));
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

        return $this->redirect($this->generateUrl('hospitalisation_show',array('id'=>$request->getSession()->get('page'))).'#tabr6');
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

}
