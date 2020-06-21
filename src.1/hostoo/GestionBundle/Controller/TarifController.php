<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\GestionBundle\Entity\Tarif;
use hostoo\GestionBundle\Form\TarifType;

/**
 * Tarif controller.
 *
 * @Route("/facture/tarif")
 */
class TarifController extends Controller
{
    /**
     * Lists all Tarif entities.
     *
     * @Route("/", name="facture_tarif_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarifs = $em->getRepository('hostooGestionBundle:Tarif')->findAll();

        return $this->render('tarif/index.html.twig', array(
            'tarifs' => $tarifs,
        ));
    }

    /**
     * Creates a new Tarif entity.
     *
     * @Route("/new", name="facture_tarif_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tarif = new Tarif();
        $form = $this->createForm('hostoo\GestionBundle\Form\TarifType', $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('facture_tarif_show', array('id' => $tarif->getId()));
        }

        return $this->render('tarif/new.html.twig', array(
            'tarif' => $tarif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarif entity.
     *
     * @Route("/{id}", name="facture_tarif_show")
     * @Method("GET")
     */
    public function showAction(Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);

        return $this->render('tarif/show.html.twig', array(
            'tarif' => $tarif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tarif entity.
     *
     * @Route("/{fact}/{id}/edit", name="facture_tarif_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $fact, Tarif $tarif)
    {
        $em = $this->getDoctrine()->getManager();
        $facture=$em->getRepository('hostooSanteBundle:Facture')->find($fact);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\TarifType', $tarif);
        $editForm->handleRequest($request);
        $session=$request->getSession();
        if(!$session->has('tempo')) $session->set('tempo',$tarif->getPrix());
        if ($request->isMethod('POST')) {

            foreach ($facture->getTarif() as $item){
                if ($item->getId() == $tarif->getId()){
                   var_dump(floatval($facture->getPrix()));
                    $facture->setPrix(floatval($facture->getPrix())-$session->get('tempo')+floatval($item->getPrix()));
                    $item->setPrix((float)$session->get('tempo'));
                    $facture->setLog('Modification du Montant de l\'acte '.$tarif->getActes()->getDesignationacte().'de '.$session->get('tempo').'à'.$tarif->getPrix().'Par '.$this->getUser());
                    var_dump($facture->getPrix());
                }

            }
            var_dump($tarif->getPrix());
//die('ok');
           $em->persist($facture);
            //$em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('edition-facture_show', array('id' => $facture->getId()));
        }

        return $this->render('tarif/edit.html.twig', array(
            'tarif' => $tarif,
            'edit_form' => $editForm->createView(),'fact'=>$fact,
        ));
    }

    /**
     * Deletes a Tarif entity.
     *
     * @Route("/{fact}/{id}", name="facture_tarif_delete")
     *
     */
    public function deleteAction(Request $request, $fact, Tarif $tarif)
    {
        //var_dump($fact);die('ok');

            $em = $this->getDoctrine()->getManager();

            $facture=$em->getRepository('hostooSanteBundle:Facture')->find($fact);
            $facture->setPrix($facture->getPrix()-$tarif->getPrix());
            foreach ($facture->getCommandes() as $item)
            {
                $item->removeTarif($tarif);
                $em->persist($item);
            }
            $em->persist($facture);
            $em->flush();


        return $this->redirectToRoute('edition-facture_show',array('id'=>$fact));
    }

    /**
     * Creates a form to delete a Tarif entity.
     *
     * @param Tarif $tarif The Tarif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarif $tarif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facture_tarif_delete', array('id' => $tarif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     *
     * @Route("/change-tarif", name="change-tarif", options={"expose"=true})
     */
    public function changeTarif(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        if($request->isXmlHttpRequest()){

        }
    }
}
