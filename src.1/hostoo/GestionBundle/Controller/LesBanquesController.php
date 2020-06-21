<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\LesBanques;
use hostoo\GestionBundle\Form\LesBanquesType;

/**
 * LesBanques controller.
 *
 */
class LesBanquesController extends Controller
{
    /**
     * Lists all LesBanques entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lesBanques = $em->getRepository('hostooGestionBundle:LesBanques')->findAll();

        return $this->render('lesbanques/index.html.twig', array(
            'lesBanques' => $lesBanques,
        ));
    }

    /**
     * Creates a new LesBanques entity.
     *
     */
    public function newAction(Request $request)
    {
        $lesBanque = new LesBanques();
        $form = $this->createForm('hostoo\GestionBundle\Form\LesBanquesType', $lesBanque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lesBanque);
            $em->flush();

            return $this->redirectToRoute('lesbanques_show', array('id' => $lesBanque->getId()));
        }

        return $this->render('lesbanques/new.html.twig', array(
            'lesBanque' => $lesBanque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LesBanques entity.
     *
     */
    public function showAction(LesBanques $lesBanque)
    {
        $deleteForm = $this->createDeleteForm($lesBanque);

        return $this->render('lesbanques/show.html.twig', array(
            'lesBanque' => $lesBanque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LesBanques entity.
     *
     */
    public function editAction(Request $request, LesBanques $lesBanque)
    {
        $deleteForm = $this->createDeleteForm($lesBanque);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\LesBanquesType', $lesBanque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lesBanque);
            $em->flush();

            return $this->redirectToRoute('lesbanques_edit', array('id' => $lesBanque->getId()));
        }

        return $this->render('lesbanques/edit.html.twig', array(
            'lesBanque' => $lesBanque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a LesBanques entity.
     *
     */
    public function deleteAction(Request $request, LesBanques $lesBanque)
    {
        $form = $this->createDeleteForm($lesBanque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lesBanque);
            $em->flush();
        }

        return $this->redirectToRoute('lesbanques_index');
    }

    /**
     * Creates a form to delete a LesBanques entity.
     *
     * @param LesBanques $lesBanque The LesBanques entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(LesBanques $lesBanque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lesbanques_delete', array('id' => $lesBanque->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
