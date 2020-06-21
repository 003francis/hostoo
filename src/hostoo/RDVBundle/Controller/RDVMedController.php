<?php

namespace hostoo\RDVBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\RDVBundle\Entity\RDVMed;
use hostoo\RDVBundle\Form\RDVMedType;

/**
 * RDVMed controller.
 *
 */
class RDVMedController extends Controller
{
    /**
     * Lists all RDVMed entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rDVMeds = $em->getRepository('hostooRDVBundle:RDVMed')->findAll();

        return $this->render('hostooRDVBundle:rdvmed:index.html.twig', array(
            'rDVMeds' => $rDVMeds,
        ));
    }


    /**
     * Lists all RDVMed entities.
     *
     */
    public function listAction($pat)
    {
        $em = $this->getDoctrine()->getManager();

        $rDVMeds = $em->getRepository('hostooRDVBundle:RDVMed')->trouver($pat);

        return $this->render('hostooRDVBundle:rdvmed:list.html.twig', array(
            'rDVMeds' => $rDVMeds,
        ));
    }

    /**
     * Creates a new RDVMed entity.
     *
     */
    public function newAction(Request $request,$id)
    {
        $rDVMed = new RDVMed();
        $um=$this->container->get('security.context')->getToken();
        $med=$um->getUser();
        $em = $this->getDoctrine()->getManager();

        $epi=$em->getRepository('hostooSanteBundle:Patient')->findOneById($id);

        $form = $this->createForm('hostoo\RDVBundle\Form\RDVMedType', $rDVMed);
        //$patient=$em->getRepository('hostooSanteBundle:Patient')->findOneById($epi->getPatient()->getId());
        if ($request->isXmlHttpRequest() && $form->handleRequest($request)) {
            //var_dump($rDVMed->getDaterdv()); die('ok');
            $rdv=$em->getRepository('hostooRDVBundle:RDVMed')->trouverUnRDV($epi,$rDVMed->getDaterdv());

            if($rdv== null){
                $rDVMed->setPatients($epi);
                $rDVMed->setMedecin($med);
                $em->persist($rDVMed);
                $em->flush();
                $rdvs=$em->getRepository('hostooRDVBundle:RDVMed')->trouver($id);
                $items=array();
//var_dump($episode->getExphys()); die('OIk');
                foreach ($rdvs as $Sv)
                {
                    $items[]=array(
                        'id'=>$Sv->getId(),
                        'daterdv'=>date_format($Sv->getDaterdv(),'d-m-Y'),
                    );
                }
                //var_dump($items); die('ok');
                $reponse=new JsonResponse();
                return $reponse->setData(array('items'=>$items));
            }
            return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$id)));
        }

        if ($request->isMethod('POST') && $form->handleRequest($request)) {
            //var_dump($rDVMed->getDaterdv()); die('ok');
            $rdv=$em->getRepository('hostooRDVBundle:RDVMed')->trouverRDV($epi->getPatient()->getId(),$rDVMed->getDaterdv());
            if($rdv== null){
                $rDVMed->setMedecin($med);
                $rDVMed->setPatients($epi->getPatient());
            $em->persist($rDVMed);
            $em->flush();
            }
            return $this->redirect($this->generateUrl('hostoo_med_lireepisode',array('id'=>$id)));
        }

        return $this->render('hostooRDVBundle:rdvmed:new.html.twig', array(
            'rDVMed' => $rDVMed,
            'form' => $form->createView(),
            'pat'=>$id
        ));
    }
   /**
    *
    *@Route("/Rdvrecpetion", name="rdv_reception")
    */
    public function newRECAction(Request $request)
    {
        $rDVMed = new RDVMed();
        $um=$this->container->get('security.context')->getToken();
        $em = $this->getDoctrine()->getManager();

        //$epi=$em->getRepository('hostooSanteBundle:Patient')->findOneById($id);

        $form = $this->createForm('hostoo\RDVBundle\Form\RDVMedRecType', $rDVMed);
        //$patient=$em->getRepository('hostooSanteBundle:Patient')->findOneById($epi->getPatient()->getId());
        if ($request->isMethod('POST') && $form->handleRequest($request)) {
            $em->persist($rDVMed);
            $em->flush();

            return $this->redirectToRoute('rdvmed_show_today');
        }

        return $this->render('hostooRDVBundle:rdvmed:newrec.html.twig', array(
            'rDVMed' => $rDVMed,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RDVMed entity.
     *
     */
    public function showAction(RDVMed $rDVMed)
    {
        $deleteForm = $this->createDeleteForm($rDVMed);

        return $this->render('hostooRDVBundle:rdvmed:show.html.twig', array(
            'rDVMed' => $rDVMed,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function LesRDVTodayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rDVMeds=$em->getRepository('hostooRDVBundle:RDVMed')->trouverToday();
        return $this->render('hostooRDVBundle:rdvmed:showtoday.html.twig', array(
            'rDVMeds' => $rDVMeds,
        ));
    }

    public function LesRDVToutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rDVMeds=$em->getRepository('hostooRDVBundle:RDVMed')->findBy(array(),array('daterdv'=>'desc'));
        return $this->render('hostooRDVBundle:rdvmed:showtout.html.twig', array(
            'rDVMeds' => $rDVMeds,
        ));
    }

    /**
     * Displays a form to edit an existing RDVMed entity.
     *
     */
    public function editAction(Request $request, RDVMed $rDVMed)
    {
        $deleteForm = $this->createDeleteForm($rDVMed);
        $editForm = $this->createForm('hostoo\RDVBundle\Form\RDVMedType', $rDVMed);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rDVMed);
            $em->flush();

            return $this->redirectToRoute('rdvmed_edit', array('id' => $rDVMed->getId()));
        }

        return $this->render('hostooRDVBundle:rdvmed:edit.html.twig', array(
            'rDVMed' => $rDVMed,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RDVMed entity.
     *
     */
    public function deleteAction(Request $request, RDVMed $rDVMed)
    {
        $form = $this->createDeleteForm($rDVMed);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rDVMed);
            $em->flush();
        }

        return $this->redirectToRoute('rdvmed_index');
    }

    /**
     * Creates a form to delete a RDVMed entity.
     *
     * @param RDVMed $rDVMed The RDVMed entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RDVMed $rDVMed)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdvmed_delete', array('id' => $rDVMed->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
