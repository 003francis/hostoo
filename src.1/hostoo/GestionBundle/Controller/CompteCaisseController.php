<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\GestionBundle\Entity\CompteCaisse;
use hostoo\GestionBundle\Form\CompteCaisseType;

/**
 * CompteCaisse controller.
 *
 * @Route("/comptecaisse")
 */
class CompteCaisseController extends Controller
{
    /**
     * Lists all CompteCaisse entities.
     *
     * @Route("/{cais}", name="comptecaisse_index")
     * @Method("GET")
     */
    public function indexAction($cais)
    {
        $em = $this->getDoctrine()->getManager();

        $compteCaisses = $em->getRepository('hostooGestionBundle:CompteCaisse')->findByCaissier($cais);

        return $this->render('comptecaisse/index.html.twig', array(
            'compteCaisses' => $compteCaisses,
        ));
    }

    /**
     * Creates a new CompteCaisse entity.
     *
     * @Route("/new/{id}", name="comptecaisse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id)
    {
        $compteCaisse = new CompteCaisse();
        $em = $this->getDoctrine()->getManager();
        $caissier=$em->getRepository('hostooUserBundle:Utilisateur')->find($id);
        $form = $this->createForm('hostoo\GestionBundle\Form\CompteCaisseType', $compteCaisse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compteCaisse->setCaissier($caissier);
            $em->persist($compteCaisse);
            $em->flush();

            return $this->redirectToRoute('comptecaisse_new',['id'=>$id]);
        }

        return $this->render('comptecaisse/new.html.twig', array(
            'compteCaisse' => $compteCaisse,'soc'=>$caissier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CompteCaisse entity.
     *
     * @Route("/{id}", name="comptecaisse_show")
     * @Method("GET")
     */
    public function showAction(CompteCaisse $compteCaisse)
    {
        $deleteForm = $this->createDeleteForm($compteCaisse);

        return $this->render('comptecaisse/show.html.twig', array(
            'compteCaisse' => $compteCaisse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CompteCaisse entity.
     *
     * @Route("/{id}/edit", name="comptecaisse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CompteCaisse $compteCaisse)
    {
        $deleteForm = $this->createDeleteForm($compteCaisse);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\CompteCaisseType', $compteCaisse);
        $editForm->handleRequest($request);
            //var_dump($compteCaisse->getCaissier()); die('OK');
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compteCaisse);
            $em->flush();

            return $this->redirectToRoute('comptecaisse_new', array('id' => $compteCaisse->getCaissier()->getId()));
        }

        return $this->render('comptecaisse/edit.html.twig', array(
            'compteCaisse' => $compteCaisse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CompteCaisse entity.
     *
     * @Route("/{id}", name="comptecaisse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CompteCaisse $compteCaisse)
    {
        $form = $this->createDeleteForm($compteCaisse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compteCaisse);
            $em->flush();
        }

        return $this->redirectToRoute('comptecaisse_index');
    }

    /**
     * Creates a form to delete a CompteCaisse entity.
     *
     * @param CompteCaisse $compteCaisse The CompteCaisse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CompteCaisse $compteCaisse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptecaisse_delete', array('id' => $compteCaisse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
