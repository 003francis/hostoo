<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/9/16
 * Time: 10:33 PM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Service;
use hostoo\SanteBundle\Form\ServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
    public function ajouterServiceAction(Request $request)
    {
        $service=new Service;
        $em=$this->getDoctrine()->getManager();
        $form=$this->get('form.factory')->create(ServiceType::class, $service);
        $tcs=$em->getRepository('hostooSanteBundle:Service')->findAll();
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        //$actelabo=$em->getRepository('hostooSanteBundle:Tarifslabo')->findAll();
        //$categories2=$em->getRepository('hostooSanteBundle:Catetarifslabo')->findAll();
        if($request->isMethod('POST')&& $form->handleRequest($request))
        {

            $em->persist($service);
            $em->flush();
            return $this->redirectToRoute('hostoo_service_ajouter');
        }
        return $this->render('hostooSanteBundle:Types:ajouter.html.twig',array('tcs'=>$tcs,'form'=>$form->createView(),));
    }
}