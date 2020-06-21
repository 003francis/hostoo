<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\Tarif;
use hostoo\GestionBundle\Form\TarifType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PrixController extends Controller
{
    public function ajouterUnPrixAction(Request $request,$acte)
    {
        $em=$this->getDoctrine()->getManager();
        $act=$em->getRepository('hostooSanteBundle:Tarification')->find($acte);
        $prix=new Tarif();
        $form=$this->get('form.factory')->create(TarifType::class,$prix);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $prix->setActes($act);
            $em->persist($prix);
            $em->flush();
            return $this->redirect($this->generateUrl('liste_actes'));
        }
        return $this->render('hostooGestionBundle:Prix:ajouter_un_prix.html.twig', array(
            'form'=>$form->createView(),'acte'=>$acte,
            // ...
        ));
    }

    public function modifierUnPrixAction()
    {
        return $this->render('hostooGestionBundle:Prix:modifier_un_prix.html.twig', array(
            // ...
        ));
    }

    public function ajouterDesPrixAction(Request $request,$convention)
    {
        $em=$this->getDoctrine()->getManager();
        $conv=$em->getRepository('hostooGestionBundle:Convention')->find($convention);
        $actes=$request->get('actes');
        $tsactes=$act=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        //$form=$this->get('form.factory')->create(TarifType::class,$prix);
        if($request->isMethod('POST'))
        {
            foreach ($actes as $key =>$val){

                $act=$em->getRepository('hostooSanteBundle:Tarification')->find($key);
                $prix[$act->getId()]=new Tarif();
                $prix[$act->getId()]->setPrix($val);
                $prix[$act->getId()]->setActes($act);
                $prix[$act->getId()]->setConvention($conv);
                $em->persist($prix[$act->getId()]);
            }
            $em->flush();
            return $this->redirect($this->generateUrl('liste_actes'));
        }
        return $this->render('hostooGestionBundle:Prix:ajouter_des_prix.html.twig', array(
            'convention'=>$conv,'touslesactes'=>$tsactes,
            // ...
        ));
    }
    public function modifierDesPrixAction(Request $request,$convention)
    {
        $em=$this->getDoctrine()->getManager();
        $conv=$em->getRepository('hostooGestionBundle:Convention')->find($convention);
        $actes=$request->get('actes');
        $tsactes=$act=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        //$form=$this->get('form.factory')->create(TarifType::class,$prix);
        if($request->isMethod('POST'))
        {
            foreach ($request->get('actes') as $key =>$val){

                $act=$em->getRepository('hostooGestionBundle:Tarif')->findOneById($key);

                $act->setPrix($val);
                $em->persist($act);
            }
            $em->flush();
            return $this->redirect($this->generateUrl('liste_actes'));
        }
        return $this->render('hostooGestionBundle:Prix:modifier_des_prix.html.twig', array(
            'convention'=>$conv,'touslesactes'=>$tsactes,
            // ...
        ));
    }


}
