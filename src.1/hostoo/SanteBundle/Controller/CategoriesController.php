<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Cattarifs;
use hostoo\SanteBundle\Form\CattarifsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends Controller
{
    public function CreeUneCategorieAction(Request $request)
    {
        $cat=new Cattarifs();
        $form=$this->get('form.factory')->create(CattarifsType::class,$cat);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($cat);
            $em->flush();
            return $this->redirect($this->generateUrl('_cree_une_categorie'));
        }
        return $this->render('hostooSanteBundle:Categories:cree_une_categorie.html.twig', array(
            'form'=>$form->createView(),
            // ...
        ));
    }

    public function ModifieUneCategorieAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $cat=$em->getRepository('hostooSanteBundle:Cattarifs')->find($id);
        $form=$this->get('form.factory')->create(CattarifsType::class,$cat);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $em->persist($cat);
            $em->flush();
            return $this->redirect($this->generateUrl('_cree_une_categorie'));
        }
        return $this->render('hostooSanteBundle:Categories:modifie_une_categorie.html.twig', array(
            'form'=>$form->createView(),
            // ...
        ));
    }

    public function SupprimeUneCategorieAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $cat=$em->getRepository('hostooSanteBundle:Cattarifs')->find($id);
        $form=$this->get('form.factory')->create(CattarifsType::class,$cat);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $em->remove($cat);
            $em->flush();
            return $this->redirect($this->generateUrl('_cree_une_categorie'));
        }
        return $this->render('hostooSanteBundle:Categories:supprime_une_categorie.html.twig', array(
            // ...
        ));
    }

    public function ListeDesCategoriesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $cats=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        return $this->render('hostooSanteBundle:Categories:liste_des_categories.html.twig', array(
            'liste'=>$cats,
            // ...
        ));
    }

}
