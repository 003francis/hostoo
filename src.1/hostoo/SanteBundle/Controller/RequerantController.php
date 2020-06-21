<?php

namespace hostoo\SanteBundle\Controller;

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

            return $this->redirect($this->generateUrl('hostoo_sante_listeactes') . '#tabr2');
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
        $actes=$em->getRepository('hostooSanteBundle:Tarification')->findByCategories(array(7,9));
        return $this->render('requerant/show.html.twig', array(
            'requerant' => $requerant,'actes'=>$actes,
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
}
