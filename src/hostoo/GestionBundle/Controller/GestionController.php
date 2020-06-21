<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\Proprietaire;
use hostoo\GestionBundle\Form\ProprietaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GestionController extends Controller
{
    public function nouvelleConventionAction(Request $request)
    {
        $pro=new Proprietaire();
        $form=$this->get('form.factory')->create(ProprietaireType::class,$pro);
        if($request->isMethod('POST')&& $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();

            //$pro->addConvention($pro->getConvention());

            $em->persist($pro);
            $em->flush();
        }

        return $this->render('hostooGestionBundle:Gestion:nouvelle_convention.html.twig', array(
            'form'=>$form->createView(),
            // ...
        ));
    }

    public function modifierConventionAction(Request $request,$id)
    {
        return $this->render('hostooGestionBundle:Gestion:modifier_convention.html.twig', array(
            // ...
        ));
    }

    public function switchEntrepriseAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $proprios=$em->getRepository('hostooGestionBundle:Proprietaire')->find($id);
        if($proprios->getEtat()== true){
            $proprios->setEtat(0);
        }else{
            $proprios->setEtat(1);
        }
        $em->persist($proprios);
        $em->flush();
        return $this->redirectToRoute('liste_conventions');

    }


    public function listeConventionsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooGestionBundle:Convention')->findAll();
        $proprios=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();
        return $this->render('hostooGestionBundle:Gestion:liste_conventions.html.twig', array(
            'liste'=>$liste,'proprios'=>$proprios,
            // ...
        ));
    }

    public function crrAction(Request $request,$id)
    {
        return $this->render('hostooGestionBundle:Gestion:modifier_convention.html.twig', array(
            // ...
        ));
    }

    public function lesMedecinsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooUserBundle:Utilisateur')->lesmedecins();

        return $this->render('hostooSanteBundle:Caisse:lesmedecins.html.twig', array(
            'liste'=>$liste
        ));
    }

}
