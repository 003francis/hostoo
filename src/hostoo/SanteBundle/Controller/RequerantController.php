<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\Commande;
use hostoo\GestionBundle\Entity\Tarif;
use hostoo\SanteBundle\Entity\Caisse;
use hostoo\SanteBundle\Entity\Facture;
use hostoo\SanteBundle\Entity\OrdonnanceImg;
use hostoo\SanteBundle\Entity\OrdonnanceLabo;
use hostoo\SanteBundle\Entity\ResultatsImg;
use hostoo\SanteBundle\Entity\ResultatsLabo;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\Requerant;
use hostoo\SanteBundle\Form\RequerantType;

/**
 * Requerant controller.
 *
 * @Route("/requerant")
 */
class RequerantController extends Controller
{
    /**
     * Lists all Requerant entities.
     *
     * @Route("/", name="requerant_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $requerants = $em->getRepository('hostooSanteBundle:Requerant')->findAll();

        return $this->render('requerant/index.html.twig', array(
            'requerants' => $requerants,
        ));
    }

    /**
     * Creates a new Requerant entity.
     *
     * @Route("/new", name="requerant_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $requerant = new Requerant();
        $form = $this->createForm('hostoo\SanteBundle\Form\RequerantType', $requerant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($requerant);
            $em->flush();

            return $this->redirect($this->generateUrl('hostoo_sante_listeactes'));
        }

        return $this->render('requerant/new.html.twig', array(
            'requerant' => $requerant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Requerant entity.
     *
     * @Route("/{id}", name="requerant_show")
     * @Method("GET")
     */
    public function showAction(Requerant $requerant)
    {
        $deleteForm = $this->createDeleteForm($requerant);
        $em=$this->getDoctrine()->getManager();
        $actes=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $medecins=$em->getRepository('hostooUserBundle:Utilisateur')->lesmedecinsListe();
        return $this->render('requerant/show.html.twig', array(
            'requerant' => $requerant,'actes'=>$actes,'medecins'=>$medecins,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Requerant entity.
     *
     * @Route("/{id}/edit", name="requerant_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Requerant $requerant)
    {
        $deleteForm = $this->createDeleteForm($requerant);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\RequerantType', $requerant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($requerant);
            $em->flush();

            return $this->redirectToRoute('requerant_edit', array('id' => $requerant->getId()));
        }

        return $this->render('requerant/edit.html.twig', array(
            'requerant' => $requerant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Requerant entity.
     *
     * @Route("/{id}", name="requerant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Requerant $requerant)
    {
        $form = $this->createDeleteForm($requerant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requerant);
            $em->flush();
        }

        return $this->redirectToRoute('requerant_index');
    }

    /**
     * Creates a form to delete a Requerant entity.
     *
     * @param Requerant $requerant The Requerant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Requerant $requerant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('requerant_delete', array('id' => $requerant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     *
     * @Route("/FacturerRequerant/{id}", name="facture_un_requerant")
     *
     */
    public function factureRequerant(Request $request,$id)
    {
        $session=$request->getSession();

        $em=$this->getDoctrine()->getManager();
        $requerant = $em->getRepository('hostooSanteBundle:Requerant')->find($id);
        $facture=(!$session->has('facture'))?new Facture():$session->get('facture');

        $medecin=$em->getRepository('hostooUserBundle:Utilisateur')->find($id);
        $facture->setRequerant($requerant);
        $commande = new Commande();
        if($request->get('labos')){

//            if($session->has('bonlabo')) $session->set('bonlabo',new OrdonnanceLabo());

            $labos=$em->getRepository('hostooSanteBundle:Tarification')->findArray($request->get('labos'));
            $ordo= new OrdonnanceLabo();
            $ordo->setMedecin($medecin);

            foreach ($labos as $labo)
            {
                $monacte=$em->getRepository('hostooGestionBundle:Tarif')->findOneByActes($labo->getId());
                $commande->addTarif($monacte);
                $res = new ResultatsLabo();
                $res->setActe($monacte)->setOrdonnance($ordo);

            }
            $facture->addCommande($commande);
            $ordo->setFacture($facture);
            $session->set('facture', $facture);
            $session->set('laboratoire', $ordo);
        }
        if ($request->get('imgs')) {
            $imgs = $em->getRepository('hostooSanteBundle:Tarification')->findArray($request->get('imgs'));
            $ordo= new OrdonnanceImg();
            $ordo->setMedecin($medecin);

            foreach ($imgs as $img)
            {
                $monacte=$em->getRepository('hostooGestionBundle:Tarif')->findOneByActes($img->getId());
                $commande->addTarif($monacte);
                $res = new ResultatsImg();
                $res->setActe($monacte)->setOrdonnance($ordo);

            }
            $facture->addCommande($commande);
            $ordo->setFacture($facture);
            $session->set('facture', $facture);
            $session->set('imagerie', $ordo);

        }
        if ($request->get('auts')) {
            $autres = $em->getRepository('hostooSanteBundle:Tarification')->findArray($request->get('auts'));
            foreach ($autres as $autre) {
                $monacte=$em->getRepository('hostooGestionBundle:Tarif')->findOneByActes($autre->getId());
                $commande->addTarif($monacte);
            }

            $session->set('autres', $autres);

            $facture->addCommande($commande);
//            $ordo->setFacture($facture);
            $session->set('facture', $facture);
        }
        return $this->redirectToRoute('requerant_show',['id'=>$id]);
    }

    /**
     *
     * @Route("/{id}/ValiderFactureRequerant", name="valider_facture_requerant")
     *@Method=("POST")
     */
    public function validerLaFacture(Request $request, Requerant $requerant)
    {
        $em=$this->getDoctrine()->getManager();

        $session=$request->getSession();
        $facture=$session->has('facture')?$session->get('facture'):null;
        $facture->setRequerant($requerant);
        $ordlabo=$session->has('laboratoire')?$session->get('laboratoire'):null;
        $ordimg=$session->has('imagerie')?$session->get('imagerie'):null;
        $caisse= new Caisse();
        if($request->isMethod('POST')) {
            if ($request->get('monnaie') == "CDF")
                $caisse->setFacture($facture)->setPercepteur($this->getUser())->setMontantcdf($facture->getPrix() * $session->get('taux'));
            if ($request->get('monnaie') == "USD")
                $caisse->setFacture($facture)->setPercepteur($this->getUser())->setMontantcdf($facture->getPrix());

            if ($facture != null) {
                $em->persist($facture);
            }
            if ($ordlabo != null) {
                $em->persist($ordlabo);
            }
            if ($ordimg != null) {
                $em->persist($ordimg);
            }


            $em->flush();
        }
        if ($session->has('facture')) $session->remove('facture');
        if($session->has('laboratoire')) $session->remove('laboratoire');
        if($session->has('imagerie')) $session->remove('imagerie');

        $this->redirectToRoute('hostoo_sante_listeactes');
    }
}
