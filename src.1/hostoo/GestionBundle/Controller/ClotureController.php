<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\GestionBundle\Entity\Cloture;
use hostoo\GestionBundle\Form\ClotureType;

/**
 * Cloture controller.
 *
 * @Route("/cloture")
 */
class ClotureController extends Controller
{
    /**
     * Lists all Cloture entities.
     *
     * @Route("/", name="cloture_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clotures = $em->getRepository('hostooGestionBundle:Cloture')->findByCaisse($this->getUser());

        return $this->render('cloture/index.html.twig', array(
            'clotures' => $clotures,
        ));
    }

    /**
     * Lists all Cloture entities.
     *
     * @Route("/cloture_lacaisse/{id}", name="cloture_lacaisse")
     * @Method("POST")
     */
    public function clotureAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();



        $clotures = $em->getRepository('hostooGestionBundle:Cloture')->find($id);
        if($request->isMethod('POST'))
        {
            $clotures->setMontantusd($request->get('montusd'));
            $clotures->setMontantcdf($request->get('montcdf'));
            $clotures->setDatefermeture(new \DateTime('now'));
            $em->persist($clotures);
            $em->flush();
            return $this->redirectToRoute('hostoo_sante_listeactes');
        }

        return $this->render('cloture/index.html.twig', array(
            'clotures' => $clotures,
        ));
    }


    /**
     * Creates a new Cloture entity.
     *
     * @Route("/new", name="cloture_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cloture = new Cloture();
        $form = $this->createForm('hostoo\GestionBundle\Form\ClotureType', $cloture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cloture);
            $em->flush();

            return $this->redirectToRoute('cloture_show', array('id' => $cloture->getId()));
        }

        return $this->render('cloture/new.html.twig', array(
            'cloture' => $cloture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cloture entity.
     *
     * @Route("/{id}", name="cloture_show")
     * @Method("GET")
     */
    public function showAction(Cloture $cloture)
    {
        $deleteForm = $this->createDeleteForm($cloture);
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $transactions=$em->getRepository('hostooSanteBundle:Facture')->facturesParServices(date_format($cloture->getDateouverture(),'Y-m-d'));
        return $this->render('cloture/show.html.twig', array(
            'cloture' => $cloture,'categories'=>$categories,'factures'=>$transactions,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cloture entity.
     *
     * @Route("/{id}/edit", name="cloture_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cloture $cloture)
    {
        $deleteForm = $this->createDeleteForm($cloture);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\ClotureType', $cloture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cloture);
            $em->flush();

            return $this->redirectToRoute('cloture_edit', array('id' => $cloture->getId()));
        }

        return $this->render('cloture/edit.html.twig', array(
            'cloture' => $cloture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cloture entity.
     *
     * @Route("/{id}", name="cloture_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cloture $cloture)
    {
        $form = $this->createDeleteForm($cloture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cloture);
            $em->flush();
        }

        return $this->redirectToRoute('cloture_index');
    }

    /**
     * Creates a form to delete a Cloture entity.
     *
     * @param Cloture $cloture The Cloture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cloture $cloture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cloture_delete', array('id' => $cloture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
