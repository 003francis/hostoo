<?php

namespace hostoo\UserBundle\Controller;

use hostoo\UserBundle\Entity\Utilisateur;
use hostoo\UserBundle\Form\UtilisateurEditType;
use hostoo\UserBundle\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class DefaultController extends Controller
{
    public function creeUserAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $hr=$this->get('security.role_hierarchy');
        $utilisateur= new Utilisateur;
        $form=$this->get('form.factory')->create(UtilisateurType::class, $utilisateur);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $utilisateur->setEnabled(true);
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('hostoo_user_homepage');
        }
        return $this->render('hostooUserBundle:Default:index.html.twig',array('form'=>$form->createView(),'hr'=>$hr));
    }

    public function editUserAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $utilisateur= $em->getRepository('hostooUserBundle:Utilisateur')->find($id);
        $form=$this->get('form.factory')->create(UtilisateurEditType::class, $utilisateur);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('hostoo_user_homepage');
        }
        return $this->render('hostooUserBundle:Default:index2.html.twig',array('form'=>$form->createView(),'user'=>$utilisateur->getId()));
    }

    public function dropUserAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $utilisateur= $em->getRepository('hostooUserBundle:Utilisateur')->find($id);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em->remove($utilisateur);
            $em->flush();
        }
        return $this->render('hostooUserBundle:Default:index.html.twig',array('form'=>$form->createView(),));
    }

    /**
     *
     *
     * @Route("/profile/Utilisateur/{id}", name="profile_utilisateur")
     */
    public function profileUtilisateurAction(Request $request, Utilisateur $utilisateur)
    {
        $em=$this->getDoctrine()->getManager();
        $mesactes=$em->getRepository('hostooSanteBundle:ResultatsLabo')->resultatsLabo($utilisateur->getId());
        $mesactesimg=$em->getRepository('hostooSanteBundle:ResultatsImg')->resultatsIMG($utilisateur->getId());

        return $this->render('hostooUserBundle:Default:profile.html.twig',array('utilisateur'=>$utilisateur,'actes'=>$mesactes,'actesimg'=>$mesactesimg));
    }

    /**
     *
     *
     * @Route("/profile/MDP/{id}", name="change_mdp")
     */
    public function changeMDPAction(Request $request, Utilisateur $utilisateur)
    {
        if($request->isMethod('POST')){
            $em=$this->getDoctrine()->getManager();
            $utilisateur->setPassword($request->get('mdp'));
        }
        return $this->render('hostooUserBundle:Default:mdp.html.twig',array('utilisateur'=>$utilisateur,));
    }

    public function listeUsersAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $utilisateur= $em->getRepository('hostooUserBundle:Utilisateur')->findAll();
        return $this->render('hostooUserBundle:Default:liste.html.twig',array('users'=>$utilisateur,));
    }

    public function throwAuthorizationAction()
    {
        $message="NON AUTORIZE";
        return $this->render('hostooUserBundle:Default:throwauthorization.html.twig',array('message'=>$message,));
    }
}
