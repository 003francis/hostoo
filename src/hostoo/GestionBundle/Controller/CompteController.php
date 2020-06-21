<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\GestionBundle\Entity\Compte;
use hostoo\GestionBundle\Form\CompteType;

/**
 * Compte controller.
 *
 * @Route("/comptesociete")
 */
class CompteController extends Controller
{
    /**
     * Lists all Compte entities.
     *
     * @Route("/{soc}", name="comptesociete_index")
     * @Method("GET")
     */
    public function indexAction($soc)
    {
        $em = $this->getDoctrine()->getManager();

        $comptes = $em->getRepository('hostooGestionBundle:Compte')->findBySociete($soc);

        return $this->render('compte/index.html.twig', array(
            'comptes' => $comptes,
        ));
    }

    /**
     * Creates a new Compte entity.
     *
     * @Route("/new/{id}", name="comptesociete_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id)
    {
        $compte = new Compte();
        $em = $this->getDoctrine()->getManager();
        $soc=$em->getRepository('hostooGestionBundle:Proprietaire')->find($id);
        $form = $this->createForm('hostoo\GestionBundle\Form\CompteType', $compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $compte->setSociete($soc);
            $em->persist($compte);
            $em->flush();

            return $this->redirectToRoute('comptesociete_new', array('id'=>$id));
        }

        return $this->render('compte/new.html.twig', array(
            'compte' => $compte,'soc'=>$soc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Compte entity.
     *
     * @Route("/{id}", name="comptesociete_show")
     * @Method("GET")
     */
    public function showAction(Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);

        return $this->render('compte/show.html.twig', array(
            'compte' => $compte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Compte entity.
     *
     * @Route("/{id}/edit", name="comptesociete_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Compte $compte)
    {
        $deleteForm = $this->createDeleteForm($compte);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\CompteType', $compte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compte);
            $em->flush();

            return $this->redirectToRoute('comptesociete_edit', array('id' => $compte->getId()));
        }

        return $this->render('compte/edit.html.twig', array(
            'compte' => $compte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Compte entity.
     *
     * @Route("/{id}", name="comptesociete_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Compte $compte)
    {
        $form = $this->createDeleteForm($compte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compte);
            $em->flush();
        }

        return $this->redirectToRoute('comptesociete_index');
    }

    /**
     * Creates a form to delete a Compte entity.
     *
     * @param Compte $compte The Compte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compte $compte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptesociete_delete', array('id' => $compte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
