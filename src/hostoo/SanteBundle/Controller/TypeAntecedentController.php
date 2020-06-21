<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\TypeAntecedent;
use hostoo\SanteBundle\Form\TypeAntecedentType;

/**
 * TypeAntecedent controller.
 *
 */
class TypeAntecedentController extends Controller
{
    /**
     * Lists all TypeAntecedent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeAntecedents = $em->getRepository('hostooSanteBundle:TypeAntecedent')->findAll();

        return $this->render('typeantecedent/index.html.twig', array(
            'typeAntecedents' => $typeAntecedents,
        ));
    }

    /**
     * Creates a new TypeAntecedent entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeAntecedent = new TypeAntecedent();
        $form = $this->createForm('hostoo\SanteBundle\Form\TypeAntecedentType', $typeAntecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAntecedent);
            $em->flush();

            return $this->redirectToRoute('typeantecedent_show', array('id' => $typeAntecedent->getId()));
        }

        return $this->render('typeantecedent/new.html.twig', array(
            'typeAntecedent' => $typeAntecedent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeAntecedent entity.
     *
     */
    public function showAction(TypeAntecedent $typeAntecedent)
    {
        $deleteForm = $this->createDeleteForm($typeAntecedent);

        return $this->render('typeantecedent/show.html.twig', array(
            'typeAntecedent' => $typeAntecedent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeAntecedent entity.
     *
     */
    public function editAction(Request $request, TypeAntecedent $typeAntecedent)
    {
        $deleteForm = $this->createDeleteForm($typeAntecedent);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\TypeAntecedentType', $typeAntecedent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeAntecedent);
            $em->flush();

            return $this->redirectToRoute('typeantecedent_edit', array('id' => $typeAntecedent->getId()));
        }

        return $this->render('typeantecedent/edit.html.twig', array(
            'typeAntecedent' => $typeAntecedent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeAntecedent entity.
     *
     */
    public function deleteAction(Request $request, TypeAntecedent $typeAntecedent)
    {
        $form = $this->createDeleteForm($typeAntecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeAntecedent);
            $em->flush();
        }

        return $this->redirectToRoute('typeantecedent_index');
    }

    /**
     * Creates a form to delete a TypeAntecedent entity.
     *
     * @param TypeAntecedent $typeAntecedent The TypeAntecedent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeAntecedent $typeAntecedent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeantecedent_delete', array('id' => $typeAntecedent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
