<?php

namespace hostoo\PharmacieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('hostooPharmacieBundle:Default:index.html.twig');
    }

    public function ordonnanceAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository('hostooSanteBundle:Ordonnance')->find($id);
        return $this->render('hostooPharmacieBundle:Pharmacie:ordonnance.html.twig',
            ['ordonnance'=>$ordonnance]);
    }
    public function ordonnancesAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:Ordonnance')->findAll();
        return $this->render('hostooPharmacieBundle:Pharmacie:ordonnance.html.twig',
            ['ordonnances'=>$ordonnances]);
    }
}
