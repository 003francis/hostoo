<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\QteReq;
use hostoo\SanteBundle\Entity\BSCaisse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\Requisition;
use hostoo\GestionBundle\Form\RequisitionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Requisition controller.
 *
 */
class RequisitionController extends Controller
{

    public function approuverRequisitionAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $req=$em->getRepository('hostooGestionBundle:Requisition')->find($id);
        $decaissement=new BSCaisse();
        $decaissement->setDatebs(New \DateTime('now'));
        $decaissement->getBeneficiaire($req->getDemandeur());
        $decaissement->setCaissier($this->getUser());
        $req->setPrixcdf(0);
        $req->setPrixusd(0);
        $req->setApprouver(true);
        $em->persist($req);
        $em->flush();
        return $this->redirect($this->generateUrl('requisition_show',array('id'=>$id)));

    }

    public function LivrerRequisitionAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $req=$em->getRepository('hostooGestionBundle:Requisition')->find($id);
        $req->setPrixcdf(0);
        $req->setPrixusd(0);
        $req->setLivrer(true);
        $req->setApprouver(true);
        // reste a implementer la boucle des produits a livrer
        foreach($req->getQtereq() as $i => $qte)
        {
            $art[$i]=$qte->getArticle();
            $art[$i]->ajouterQte($qte->getQte());
            $em->persist($art[$i]);
        }
        $em->persist($req);
        $em->flush();
        return $this->redirect($this->generateUrl('requisition_show',array('id'=>$id)));
    }
    /**
     * Lists all Requisition entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $requisitions = $em->getRepository('hostooGestionBundle:Requisition')->findAll();
        
        return $this->render('requisition/index.html.twig', array(
            'requisitions' => $requisitions,
        ));
    }

    /**
     * Creates a new Requisition entity.
     *
     */
    public function newAction(Request $request)
    {
        $user=$this->getUser();
        $requisition = new Requisition();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('hostoo\GestionBundle\Form\RequisitionType', $requisition);
        $form->handleRequest($request);
        if($request->get('selectarticlereq') != null){
            $articles=$request->get('selectarticlereq');
            foreach ($articles as $i=> $article){
                $art=$em->getRepository('hostooGestionBundle:Article')->find($article);
                $qte[$i]=new QteReq();
                $qte[$i]->setArticle($art);
                $requisition->addQtereq($qte[$i]);
            }
        }


        if ($form->isSubmitted()) {
            $reqs=$request->get('requisitions');
            foreach ($reqs as $rq =>$val){
                var_dump($rq);
                var_dump($val);
                $art=$em->getRepository('hostooGestionBundle:Article')->find($rq);
                $qte[$rq]=new QteReq();
                $qte[$rq]->setArticle($art);
                $qte[$rq]->setQte($val['qte']);
                $qte[$rq]->setUnit($val['unit']);
                $requisition->addQtereq($qte[$rq]);
                $em->persist($qte[$rq]);
            }
            $requisition->setDemandeur($user);
            $em->persist($requisition);
            $em->flush();

            return $this->redirectToRoute('requisition_show', array('id' => $requisition->getId()));
        }

        return $this->render('requisition/new.html.twig', array(
            'requisition' => $requisition,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Requisition entity.
     *
     */
    public function showAction(Requisition $requisition)
    {
        $deleteForm = $this->createDeleteForm($requisition);

        return $this->render('requisition/show.html.twig', array(
            'requisition' => $requisition,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Requisition entity.
     *
     */
    public function editAction(Request $request, Requisition $requisition)
    {
        $deleteForm = $this->createDeleteForm($requisition);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\RequisitionType', $requisition);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($requisition);
            $em->flush();

            return $this->redirectToRoute('requisition_edit', array('id' => $requisition->getId()));
        }

        return $this->render('requisition/edit.html.twig', array(
            'requisition' => $requisition,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Requisition entity.
     *
     */
    public function deleteAction(Request $request, Requisition $requisition)
    {
        $form = $this->createDeleteForm($requisition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requisition);
            $em->flush();
        }

        return $this->redirectToRoute('requisition_index');
    }

    /**
     * Creates a form to delete a Requisition entity.
     *
     * @param Requisition $requisition The Requisition entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Requisition $requisition)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('requisition_delete', array('id' => $requisition->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     *
     *
     * @Route("/listeDesPatientsFiltre/{conv}/{date}", name="liste_des_patients_filtres")
     */
    public function listeDesPatientsAction($conv,$date)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Episode')->frequentationFiltree($conv, $date);



        return $this->render('hostooSanteBundle:Patient:listepatientsfil.html.twig', array('patients'=>$liste));
    }


    /**
     *
     *
     * @Route("/listeDesPatientsFiltreSoc/{conv}/{date}", name="liste_des_patients_filtres_soc")
     */
    public function listeDesPatientsSocAction($conv,$date)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Episode')->frequentationFiltreeSoc($conv, $date);



        return $this->render('hostooSanteBundle:Patient:listepatientsfil.html.twig', array('patients'=>$liste));
    }
}
