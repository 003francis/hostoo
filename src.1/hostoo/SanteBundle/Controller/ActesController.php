<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Form\TarificationType;
use hostoo\SanteBundle\Entity\Tarification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActesController extends Controller
{
    public function creerActeAction(Request $request)
    {
        $acte=new Tarification();
        $form=$this->get('form.factory')->create(TarificationType::class,$acte);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($acte);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info','Acte '.$acte->getDesignationacte().'bien enregistré');
            return $this->redirect($this->generateUrl('liste_actes'));
        }
        return $this->render('hostooSanteBundle:Actes:creer_acte.html.twig', array('form'=>$form->createView(),
            // ...
        ));
    }

    public function modifierActeAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $acte=$em->getRepository('hostooSanteBundle:Tarification')->find($id);
        $form=$this->get('form.factory')->create(TarificationType::class,$acte);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $em->persist($acte);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Acte '.$acte->getDesignationacte().'bien enregistré');
            return $this->redirect($this->generateUrl('liste_actes'));
        }
        return $this->render('hostooSanteBundle:Actes:modifier_acte.html.twig', array(
            // ...
            'form'=>$form->createView(),
        ));
    }

    public function SupprimerActeAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $acte=$em->getRepository('hostooSanteBundle:Tarification')->find($id);
        $form=$this->get('form.factory')->create(TarificationType::class,$acte);
        if($acte) {
            $this->get('session')->getFlashBag()->add('danger', 'Acte ' . $acte->getDesignationacte() . 'bien supprimé');
            $em->remove($acte);
            $em->flush();
        }
            return $this->redirect($this->generateUrl('liste_actes'));

    }

    public function listeActesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $acte=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $liste=$em->getRepository('hostooGestionBundle:Convention')->findAll();
        return $this->render('hostooSanteBundle:Actes:liste_actes.html.twig', array(
            // ...
            'liste'=>$acte, 'convs'=>$liste,
        ));
    }

    public function listeActesRCAction()
    {
        $em=$this->getDoctrine()->getManager();
        $acte=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $liste=$em->getRepository('hostooGestionBundle:Convention')->findAll();
        return $this->render('hostooSanteBundle:Actes:liste_actes_rc.html.twig', array(
            // ...
            'liste'=>$acte, 'convs'=>$liste,
        ));
    }

}
