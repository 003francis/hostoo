<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\ValeurRef;
use hostoo\SanteBundle\Form\ValeurRefType;

/**
 * ValeurRef controller.
 *
 * @Route("/valeurref")
 */
class ValeurRefController extends Controller
{
    /**
     * Lists all ValeurRef entities.
     *
     * @Route("/", name="valeurref_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $valeurRefs = $em->getRepository('hostooSanteBundle:ValeurRef')->findAll();

        return $this->render('valeurref/index.html.twig', array(
            'valeurRefs' => $valeurRefs,
        ));
    }

    /**
     * Creates a new ValeurRef entity.
     *
     * @Route("/new", name="valeurref_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $labos=$em->getRepository('hostooSanteBundle:Tarification')->findByCategories(9);
        $valeurRef = new ValeurRef();
        $form = $this->createForm('hostoo\SanteBundle\Form\ValeurRefType', $valeurRef);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($valeurRef);
            $em->flush();

            return $this->redirectToRoute('valeurref_show', array('id' => $valeurRef->getId()));
        }

        return $this->render('valeurref/new.html.twig', array(
            'valeurRef' => $valeurRef,
            'form' => $form->createView(),
        ));
    }
    /**
     * Creates a new ValeurRef entity.
     *
     * @Route("/new/{id}", name="valeurref_newacte")
     * @Method({"POST"})
     */
    public function newActeAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $tar=$em->getRepository('hostooSanteBundle:Tarification')->find($id);
        $valeurRef = new ValeurRef();
        $form = $this->createForm('hostoo\SanteBundle\Form\ValeurRefType', $valeurRef);
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $valeurRef->setActe($tar);
            $valeurRef->setValeur($request->get('valacte'));
            $em->persist($valeurRef);
            $em->flush();

            return $this->redirectToRoute('hostoo_labo_dash');
        }

        return $this->render('valeurref/new.html.twig', array(
            'valeurRef' => $valeurRef,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ValeurRef entity.
     *
     * @Route("/{id}", name="valeurref_show")
     * @Method("GET")
     */
    public function showAction(ValeurRef $valeurRef)
    {
        $deleteForm = $this->createDeleteForm($valeurRef);

        return $this->render('valeurref/show.html.twig', array(
            'valeurRef' => $valeurRef,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ValeurRef entity.
     *
     * @Route("/{id}/edit", name="valeurref_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ValeurRef $valeurRef)
    {
        $deleteForm = $this->createDeleteForm($valeurRef);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\ValeurRefType', $valeurRef);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($valeurRef);
            $em->flush();

            return $this->redirectToRoute('valeurref_edit', array('id' => $valeurRef->getId()));
        }

        return $this->render('valeurref/edit.html.twig', array(
            'valeurRef' => $valeurRef,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ValeurRef entity.
     *
     * @Route("/{id}", name="valeurref_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ValeurRef $valeurRef)
    {
        $form = $this->createDeleteForm($valeurRef);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($valeurRef);
            $em->flush();
        }

        return $this->redirectToRoute('valeurref_index');
    }

    /**
     * Creates a form to delete a ValeurRef entity.
     *
     * @param ValeurRef $valeurRef The ValeurRef entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ValeurRef $valeurRef)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('valeurref_delete', array('id' => $valeurRef->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
