<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\Consultation;
use hostoo\SanteBundle\Form\ConsultationType;

/**
 * Consultation controller.
 *
 * @Route("/medecin/consultation")
 */
class ConsultationController extends Controller
{
    /**
     * Lists all Consultation entities.
     *
     * @Route("/", name="medecin_consultation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $consultations = $em->getRepository('hostooSanteBundle:Consultation')->findAll();

        return $this->render('consultation/index.html.twig', array(
            'consultations' => $consultations,
        ));
    }

    /**
     * Creates a new Consultation entity.
     *
     * @Route("/new/{id}", name="medecin_consultation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $consultation=$em->getRepository('hostooSanteBundle:Consultation')->findOneByEpisode($id);
        $episode =  $em->getRepository('hostooSanteBundle:Episode')->find($id);
        if($consultation== null) {
            $consultation = new Consultation();
        }

        $consultation->setEpisode($episode);
        $form = $this->createForm('hostoo\SanteBundle\Form\ConsultationType', $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();

            return $this->redirectToRoute('hostoo_med_lireepisode', array('id' => $consultation->getEpisode()->getId()));
        }

        return $this->render('consultation/new.html.twig', array(
            'consultation' => $consultation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Consultation entity.
     *
     * @Route("/newConsult/{id}", name="hospi_consultation_new")
     * @Method({"GET", "POST"})
     */
    public function newConsultAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $consultation=$em->getRepository('hostooSanteBundle:Consultation')->findOneByHospitalisation($id);
        $episode =  $em->getRepository('hostooHospisBundle:Hospitalisation')->find($id);
        if($consultation== null) {
            $consultation = new Consultation();
        }

        $consultation->setHospitalisation($episode);
        $form = $this->createForm('hostoo\SanteBundle\Form\ConsultationType', $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_show', array('id' => $consultation->getEpisode()->getId()));
        }

        return $this->render('consultation/newHospi.html.twig', array(
            'consultation' => $consultation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Consultation entity.
     *
     * @Route("/{id}", name="medecin_consultation_show")
     * @Method("GET")
     */
    public function showAction(Consultation $consultation)
    {
        $deleteForm = $this->createDeleteForm($consultation);

        return $this->render('consultation/show.html.twig', array(
            'consultation' => $consultation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a Consultation entity.
     *
     * @Route("/afficherconsultation/{id}", name="medecin_consultation_afficher")
     * @Method("GET")
     */
    public function afficheAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $consultation=$em->getRepository('hostooSanteBundle:Consultation')->findOneByEpisode($id);
        return $this->render('consultation/show.html.twig', array(
            'consultation' => $consultation,
        ));
    }

    /**
     * Displays a form to edit an existing Consultation entity.
     *
     * @Route("/{id}/edit", name="medecin_consultation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Consultation $consultation)
    {
        $deleteForm = $this->createDeleteForm($consultation);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\ConsultationType', $consultation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();

            return $this->redirectToRoute('medecin_consultation_edit', array('id' => $consultation->getId()));
        }

        return $this->render('consultation/edit.html.twig', array(
            'consultation' => $consultation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Consultation entity.
     *
     * @Route("/{id}", name="medecin_consultation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Consultation $consultation)
    {
        $form = $this->createDeleteForm($consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($consultation);
            $em->flush();
        }

        return $this->redirectToRoute('medecin_consultation_index');
    }

    /**
     * Creates a form to delete a Consultation entity.
     *
     * @param Consultation $consultation The Consultation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Consultation $consultation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medecin_consultation_delete', array('id' => $consultation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
