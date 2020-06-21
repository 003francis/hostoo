<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\rapportCaisseJr;
use hostoo\SanteBundle\Entity\Caisse;
use hostoo\SanteBundle\Entity\CaissePrive;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\Becaisse;
use hostoo\GestionBundle\Form\BecaisseType;

/**
 * Becaisse controller.
 *
 */
class BecaisseController extends Controller
{
    /**
     * Lists all Becaisse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $becaisses = $em->getRepository('hostooGestionBundle:Becaisse')->findAll();

        return $this->render('becaisse/index.html.twig', array(
            'becaisses' => $becaisses,
        ));
    }

    /**
     * Creates a new Becaisse entity.
     *
     */
    public function newAction(Request $request)
    {
        $becaisse = new Becaisse();
        $form = $this->createForm('hostoo\GestionBundle\Form\BecaisseType', $becaisse);
        ;

        if ($request->isMethod('POST')&&$form->handleRequest($request)) {
            $em = $this->getDoctrine()->getManager();
            $rapp=new rapportCaisseJr();
            $rapp->setNumdoc($becaisse->getId().date_format(new \DateTime(),'mY').'/R');
            $rapp->setLibelle($becaisse->getLibelle().$becaisse->getCompte())
            ->setCommentaire($becaisse->getObservation())
            ->setJustificatif($becaisse->getLibelle())
            ;



            $caissj=new Caisse();
            $cp=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
            $caissj->setEpisode(null);
            $caissj->setType(1);
            if($becaisse->getDevise()==2){
            $caissj->setMontantcdf($becaisse->getMontant());
                $cp->setMontantCdf($cp->getMontantCdf()+$becaisse->getMontant());
                $rapp->setRecettebrute(floor(round($becaisse->getMontant()/$request->getSession()->get('taux'),2)));

            }else{
            $caissj->setMontantusd($becaisse->getMontant());
                $cp->setMontantUsd($cp->getMontantUsd()+$becaisse->getMontant());
                $rapp->setReport($becaisse->getMontant());
            }
            $em->persist($cp);
            $em->persist($caissj);
            $em->persist($rapp);
            $em->persist($becaisse);
            $em->flush();

            return $this->redirect($this->generateUrl('hostoo_sante_listeactes'));
        }

        return $this->render('becaisse/new.html.twig', array(
            'becaisse' => $becaisse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Becaisse entity.
     *
     */
    public function showAction(Becaisse $becaisse)
    {
        $deleteForm = $this->createDeleteForm($becaisse);

        return $this->render('becaisse/show.html.twig', array(
            'becaisse' => $becaisse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Becaisse entity.
     *
     */
    public function editAction(Request $request, Becaisse $becaisse)
    {
        $deleteForm = $this->createDeleteForm($becaisse);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\BecaisseType', $becaisse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($becaisse);
            $em->flush();

            return $this->redirectToRoute('becaisse_edit', array('id' => $becaisse->getId()));
        }

        return $this->render('becaisse/edit.html.twig', array(
            'becaisse' => $becaisse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Becaisse entity.
     *
     */
    public function deleteAction(Request $request, Becaisse $becaisse)
    {
        $form = $this->createDeleteForm($becaisse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($becaisse);
            $em->flush();
        }

        return $this->redirectToRoute('becaisse_index');
    }

    /**
     * Creates a form to delete a Becaisse entity.
     *
     * @param Becaisse $becaisse The Becaisse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Becaisse $becaisse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('becaisse_delete', array('id' => $becaisse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
