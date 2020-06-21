<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\ResultatsLabo;
use hostoo\SanteBundle\Form\ResultatsLaboType;

/**
 * ResultatsLabo controller.
 *
 * @Route("/resultatslabo")
 */
class ResultatsLaboController extends Controller
{
    /**
     * Lists all ResultatsLabo entities.
     *
     * @Route("/", name="resultatslabo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resultatsLabos = $em->getRepository('hostooSanteBundle:ResultatsLabo')->findAll();

        return $this->render('resultatslabo/index.html.twig', array(
            'resultatsLabos' => $resultatsLabos,
        ));
    }

    /**
     * Creates a new ResultatsLabo entity.
     *
     * @Route("/new", name="resultatslabo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $resultatsLabo = new ResultatsLabo();
        $form = $this->createForm('hostoo\SanteBundle\Form\ResultatsLaboType', $resultatsLabo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resultatsLabo);
            $em->flush();

            return $this->redirectToRoute('resultatslabo_show', array('id' => $resultatsLabo->getId()));
        }

        return $this->render('resultatslabo/new.html.twig', array(
            'resultatsLabo' => $resultatsLabo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ResultatsLabo entity.
     *
     * @Route("/{id}", name="resultatslabo_show")
     * @Method("GET")
     */
    public function showAction(ResultatsLabo $resultatsLabo)
    {
        $deleteForm = $this->createDeleteForm($resultatsLabo);

        return $this->render('resultatslabo/show.html.twig', array(
            'resultatsLabo' => $resultatsLabo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ResultatsLabo entity.
     *
     * @Route("/{id}/edit", name="resultatslabo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ResultatsLabo $resultatsLabo)
    {
        $deleteForm = $this->createDeleteForm($resultatsLabo);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\ResultatsLaboType', $resultatsLabo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resultatsLabo);
            $em->flush();

            return $this->redirectToRoute('resultatslabo_edit', array('id' => $resultatsLabo->getId()));
        }

        return $this->render('resultatslabo/edit.html.twig', array(
            'resultatsLabo' => $resultatsLabo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ResultatsLabo entity.
     *
     * @Route("/{id}", name="resultatslabo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ResultatsLabo $resultatsLabo)
    {
        $form = $this->createDeleteForm($resultatsLabo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resultatsLabo);
            $em->flush();
        }

        return $this->redirectToRoute('resultatslabo_index');
    }

    /**
     * Creates a form to delete a ResultatsLabo entity.
     *
     * @param ResultatsLabo $resultatsLabo The ResultatsLabo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ResultatsLabo $resultatsLabo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultatslabo_delete', array('id' => $resultatsLabo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
