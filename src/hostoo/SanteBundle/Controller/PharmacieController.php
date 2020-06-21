<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/15/16
 * Time: 9:13 PM
 */

namespace hostoo\SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PharmacieController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnances=$em->getRepository('hostooSanteBundle:Ordonnance')->findAll();
        return $this->render('hostooSanteBundle:pharmacie:index.html.twig', array(
            'ordonnance'=>$ordonnances
        ));
    }
}