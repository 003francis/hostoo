<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\GestionBundle\Entity\Visa;
use hostoo\GestionBundle\Form\VisaType;

/**
 * Visa controller.
 *
 * @Route("/visa")
 */
class VisaController extends Controller
{
    /**
     * Lists all Visa entities.
     *
     * @Route("/", name="visa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visas = $em->getRepository('hostooGestionBundle:Visa')->findAll();

        return $this->render('visa/index.html.twig', array(
            'visas' => $visas,
        ));
    }

    /**
     * Creates a new Visa entity.
     *
     * @Route("/new", name="visa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visa = new Visa();
        $form = $this->createForm('hostoo\GestionBundle\Form\VisaType', $visa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visa);
            $em->flush();

            return $this->redirectToRoute('visa_show', array('id' => $visa->getId()));
        }

        return $this->render('visa/new.html.twig', array(
            'visa' => $visa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Visa entity.
     *
     * @Route("/{id}", name="visa_show")
     * @Method("GET")
     */
    public function showAction(Visa $visa)
    {
        $deleteForm = $this->createDeleteForm($visa);

        return $this->render('visa/show.html.twig', array(
            'visa' => $visa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Visa entity.
     *
     * @Route("/{id}/edit", name="visa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visa $visa)
    {
        $deleteForm = $this->createDeleteForm($visa);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\VisaType', $visa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visa);
            $em->flush();

            return $this->redirectToRoute('visa_edit', array('id' => $visa->getId()));
        }

        return $this->render('visa/edit.html.twig', array(
            'visa' => $visa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Visa entity.
     *
     * @Route("/{id}", name="visa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visa $visa)
    {
        $form = $this->createDeleteForm($visa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visa);
            $em->flush();
        }

        return $this->redirectToRoute('visa_index');
    }

    /**
     * Creates a form to delete a Visa entity.
     *
     * @param Visa $visa The Visa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visa $visa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visa_delete', array('id' => $visa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
