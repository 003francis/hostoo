<?php

namespace hostoo\HospisBundle\Controller;

use hostoo\SanteBundle\Entity\Facture;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\HospisBundle\Entity\Hospitalisation;
use hostoo\HospisBundle\Form\HospitalisationType;

/**
 * Hospitalisation controller.
 *
 * @Route("/hospitalisation")
 */
class HospitalisationController extends Controller
{
    /**
     * Lists all Hospitalisation entities.
     *
     * @Route("/", name="hospitalisation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hospitalisations = $em->getRepository('hostooHospisBundle:Hospitalisation')->findAll();

        return $this->render('hostooHospisBundle:hospitalisation:index.html.twig', array(
            'hospitalisations' => $hospitalisations,
        ));
    }

    /**
     * Creates a new Hospitalisation entity.
     *
     * @Route("/new", name="hospitalisation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hospitalisation = new Hospitalisation();
        $form = $this->createForm('hostoo\HospisBundle\Form\HospitalisationType', $hospitalisation);

        $form->handleRequest($request);
        $hospitalisation->setMedecin($this->getUser());
        if ($form->isSubmitted() && $form->isValid()) {
            $facture= new Facture();
            $hospitalisation->setFacture($facture);

            $em = $this->getDoctrine()->getManager();
            $em->persist($facture);
            $em->persist($hospitalisation);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_show', array('id' => $hospitalisation->getId()));
        }

        return $this->render('hostooHospisBundle:hospitalisation:new.html.twig', array(
            'hospitalisation' => $hospitalisation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hospitalisation entity.
     *
     * @Route("/{id}", name="hospitalisation_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Hospitalisation $hospitalisation)
    {
        $session=$request->getSession();
        if (!$session->has('actes')) $session->set('actes', array());
        if (!$session->has('imgrie')) $session->set('imgrie', array());
        if (!$session->has('phar')) $session->set('phar', array());
        if (!$session->has('autres')) $session->set('autres', array());
        $deleteForm = $this->createDeleteForm($hospitalisation);
        $session->set('page', $hospitalisation->getId());
        $em=$this->getDoctrine()->getManager();
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();

        $labos=$em->getRepository('hostooSanteBundle:Tarification')->ActesLabo();
        $img=$em->getRepository('hostooSanteBundle:Tarification')->ActesImg();
        $tabacte=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('actes')));
        $tabimg=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('imgrie')));
        $tabmed=$em->getRepository('hostooPharmacieBundle:Produit')->findArray(array_keys($session->get('phar')));
        $tabautres=$em->getRepository('hostooSanteBundle:Tarification')->findArray(array_values($session->get('autres')));

        return $this->render('hostooHospisBundle:hospitalisation:show.html.twig', array(
            'hospitalisation' => $hospitalisation,'labos'=>$labos,'imgs'=>$img,'tabacte'=>$tabacte,'tabimg'=>$tabimg,'tabmed'=>$tabmed,'tabautres'=>$tabautres,'actes'=>$actemedicaux,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hospitalisation entity.
     *
     * @Route("/{id}/edit", name="hospitalisation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hospitalisation $hospitalisation)
    {
        $deleteForm = $this->createDeleteForm($hospitalisation);
        $editForm = $this->createForm('hostoo\HospisBundle\Form\HospitalisationType', $hospitalisation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hospitalisation);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_edit', array('id' => $hospitalisation->getId()));
        }

        return $this->render('hostooHospisBundle:hospitalisation:edit.html.twig', array(
            'hospitalisation' => $hospitalisation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Hospitalisation entity.
     *
     * @Route("/{id}", name="hospitalisation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hospitalisation $hospitalisation)
    {
        $form = $this->createDeleteForm($hospitalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hospitalisation);
            $em->flush();
        }

        return $this->redirectToRoute('hospitalisation_index');
    }

    /**
     * Creates a form to delete a Hospitalisation entity.
     *
     * @param Hospitalisation $hospitalisation The Hospitalisation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Hospitalisation $hospitalisation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hospitalisation_delete', array('id' => $hospitalisation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
