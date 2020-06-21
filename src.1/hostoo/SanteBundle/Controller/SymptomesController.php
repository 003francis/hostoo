<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\Symptomes;
use hostoo\SanteBundle\Form\SymptomesType;

/**
 * Symptomes controller.
 *
 */
class SymptomesController extends Controller
{
    /**
     * Lists all Symptomes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $symptomes = $em->getRepository('hostooSanteBundle:Symptomes')->findAll();

        return $this->render('symptomes/index.html.twig', array(
            'symptomes' => $symptomes,
        ));
    }

    /**
     * Creates a new Symptomes entity.
     *
     */
    public function newAction(Request $request)
    {
        $symptome = new Symptomes();
        $form = $this->createForm('hostoo\SanteBundle\Form\SymptomesType', $symptome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($symptome);
            $em->flush();

            return $this->redirectToRoute('symptomes_show', array('id' => $symptome->getId()));
        }

        return $this->render('symptomes/new.html.twig', array(
            'symptome' => $symptome,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Symptomes entity.
     *
     */
    public function showAction(Symptomes $symptome)
    {
        $deleteForm = $this->createDeleteForm($symptome);

        return $this->render('symptomes/show.html.twig', array(
            'symptome' => $symptome,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Symptomes entity.
     *
     */
    public function editAction(Request $request, Symptomes $symptome)
    {
        $deleteForm = $this->createDeleteForm($symptome);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\SymptomesType', $symptome);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($symptome);
            $em->flush();

            return $this->redirectToRoute('symptomes_edit', array('id' => $symptome->getId()));
        }

        return $this->render('symptomes/edit.html.twig', array(
            'symptome' => $symptome,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Symptomes entity.
     *
     */
    public function deleteAction(Request $request, Symptomes $symptome)
    {
        $form = $this->createDeleteForm($symptome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($symptome);
            $em->flush();
        }

        return $this->redirectToRoute('symptomes_index');
    }

    /**
     * Creates a form to delete a Symptomes entity.
     *
     * @param Symptomes $symptome The Symptomes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Symptomes $symptome)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('symptomes_delete', array('id' => $symptome->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
