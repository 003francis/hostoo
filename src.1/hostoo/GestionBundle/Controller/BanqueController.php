<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\rapportCaisseJr;
use hostoo\SanteBundle\Entity\Caisse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\Banque;
use hostoo\GestionBundle\Form\BanqueType;

/**
 * Banque controller.
 *
 */
class BanqueController extends Controller
{
    /**
     * Lists all Banque entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $banques = $em->getRepository('hostooGestionBundle:Banque')->findAll();

        return $this->render('banque/index.html.twig', array(
            'banques' => $banques,
        ));
    }

    /**
     * Creates a new Banque entity.
     *
     */
    public function newAction(Request $request)
    {
        $banque = new Banque();
        $form = $this->createForm('hostoo\GestionBundle\Form\BanqueType', $banque);


        if ($request->isMethod('POST') && $form->handleRequest($request)) {
            $em = $this->getDoctrine()->getManager();
            $rapp=new rapportCaisseJr();
            $rapp->setNumdoc($banque->getId().date_format(new \DateTime(),'mY').'/R');
            $rapp->setLibelle($banque->getMouvement().$banque->getLibelle())
                ->setCommentaire($banque->getLibelle())
                ->setJustificatif($banque->getReference())
            ;
            $caissj=new Caisse();
            $cp=$em->getRepository('hostooSanteBundle:CaissePrive')->findOneById(1);
            if($banque->getMouvement()=='Retrait'){


                $caissj->setEpisode(null);
                if($banque->getDevise()==2){
                    $caissj->setMontantcdf($banque->getMontant());
                    $cp->ajouterCDF($caissj->getMontantcdf());
                    $rapp->setReport(floor(round($banque->getMontant()/$request->getSession()->get('taux'),2)));

                }else{
                    $caissj->setMontantusd($banque->getMontant());
                    $cp->ajouterUSD($caissj->getMontantusd());
                    $rapp->setReport($banque->getMontant());

                }
                //var_dump($cp); die('ok');
            }else{
                if($banque->getDevise()==1) {
                    $rapp->setDepenseusd($banque->getMontant());
                }else{
                    $rapp->setDepensecdf($banque->getMontant());
                }
            }
            $caissj->setType(1);
            $em->persist($cp);
            $em->persist($caissj);
            $em->persist($rapp);
            $em->persist($banque);
            $em->flush();

            return $this->redirect($this->generateUrl('hostoo_sante_listeactes'));
        }

        return $this->render('banque/new.html.twig', array(
            'banque' => $banque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Banque entity.
     *
     */
    public function showAction(Banque $banque)
    {
        $deleteForm = $this->createDeleteForm($banque);

        return $this->render('banque/show.html.twig', array(
            'banque' => $banque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Banque entity.
     *
     */
    public function editAction(Request $request, Banque $banque)
    {
        $deleteForm = $this->createDeleteForm($banque);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\BanqueType', $banque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($banque);
            $em->flush();

            return $this->redirectToRoute('banque_edit', array('id' => $banque->getId()));
        }

        return $this->render('banque/edit.html.twig', array(
            'banque' => $banque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Banque entity.
     *
     */
    public function deleteAction(Request $request, Banque $banque)
    {
        $form = $this->createDeleteForm($banque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($banque);
            $em->flush();
        }

        return $this->redirectToRoute('banque_index');
    }

    /**
     * Creates a form to delete a Banque entity.
     *
     * @param Banque $banque The Banque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Banque $banque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('banque_delete', array('id' => $banque->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
