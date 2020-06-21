<?php

namespace hostoo\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\rapportCaisseJr;
use hostoo\GestionBundle\Form\rapportCaisseJrType;

/**
 * rapportCaisseJr controller.
 *
 */
class rapportCaisseJrController extends Controller
{
    /**
     * Lists all rapportCaisseJr entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rapportCaisseJrs = $em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportToday();
        $rhs=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportHierSomme();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        foreach ($mont as $taux) {

        }
        $report=new rapportCaisseJr();

        $rep=ceil($rhs[0]['reps']-$rhs[0]['depusd']-($rhs[0]['depcdf']/$taux->getMontant())+$rhs[0]['recnet']);
        $check_trport=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->trouverLeReport($rep,date('Y-m-d'));
        //var_dump($check_trport); die('ok');
        if($check_trport===null){
        $report->setNumdoc(date('Ymd',strtotime('-1 day')).'/R');
        $report->setReport($rep);
            $report->setCommentaire('Report du '.date('d-m-Y',strtotime('-1 day')));
            $report->setLibelle('Report');
        $em->persist($report);
        $em->flush();
        }
        return $this->render('rapportcaissejr/index.html.twig', array(
            'rapportCaisseJrs' => $rapportCaisseJrs,
        ));
    }

    public function moisRapportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mydate=new \DateTime();
        $tabmois=array(

            '01'=>'Janvier',
            '02'=>'Fevrier',
            '03'=>'Mars',
            '04'=>'Avril',
            '05'=>'Mai',
            '06'=>'Juin',
            '07'=>'Juillet',
            '08'=>'Aout',
            '09'=>'Septembre',
            '10'=>'Octobre',
            '11'=>'Novembre',
            '12'=>'Decembre',
        );
        $annee=$request->get('annee');
        $lemois=array();
        if($request->get('mois')!=null){
        $lemois=$tabmois[$request->get('mois')];
        }else
        {
            $lemois=$tabmois[date('m')];
        }
        if($request->get('mois')){
            $rapportCaisseJrs = $em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportMonth($request->get('annee'),$request->get('mois'));
            $recettesConv=$em->getRepository('hostooSanteBundle:Caisse')->recettesConsultation($request->get('mois'),$request->get('annee'));
            $recettesLab=$em->getRepository('hostooSanteBundle:Caisse')->recettesLaboratoire($request->get('mois'),$request->get('annee'));
            $recettesImg=$em->getRepository('hostooSanteBundle:Caisse')->recettesImagerie($request->get('mois'),$request->get('annee'));
            $recettesAut=$em->getRepository('hostooSanteBundle:Caisse')->recettesAutres($request->get('mois'),$request->get('annee'));
            $mydate->setDate($request->get('annee'),$request->get('mois'),0);
            $depbank=$em->getRepository('hostooGestionBundle:Banque')->depotMoisTotal($request->get('mois'),$request->get('annee'));
            $retbank=$em->getRepository('hostooGestionBundle:Banque')->retraitMoisTotal($request->get('mois'),$request->get('annee'));
            $beinvest=$em->getRepository('hostooGestionBundle:Becaisse')->depotInvestMoisTotal($request->get('mois'),$request->get('annee'));
            $berem=$em->getRepository('hostooGestionBundle:Becaisse')->depotRemMoisTotal($request->get('mois'),$request->get('annee'));
            $depmois=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesMoisUSD($request->get('mois'),$request->get('annee'));
        }else{
            $rapportCaisseJrs = $em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportMonth(date_format(new \DateTime('now'),'Y'),date_format(new \DateTime('now'),'m'));
            $recettesConv=$em->getRepository('hostooSanteBundle:Caisse')->recettesConsultation(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $recettesLab=$em->getRepository('hostooSanteBundle:Caisse')->recettesLaboratoire(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $recettesImg=$em->getRepository('hostooSanteBundle:Caisse')->recettesImagerie(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $recettesAut=$em->getRepository('hostooSanteBundle:Caisse')->recettesAutres(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $depbank=$em->getRepository('hostooGestionBundle:Banque')->depotMoisTotal(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $retbank=$em->getRepository('hostooGestionBundle:Banque')->retraitMoisTotal(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $beinvest=$em->getRepository('hostooGestionBundle:Becaisse')->depotInvestMoisTotal(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $berem=$em->getRepository('hostooGestionBundle:Becaisse')->depotRemMoisTotal(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
            $depmois=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesMoisUSD(date_format(new \DateTime('now'),'m'),date_format(new \DateTime('now'),'Y'));
        }


        //var_dump($depbank); var_dump($retbank); die('ok');

        return $this->render('rapportcaissejr/rapportdumois.html.twig', array(
            'rapportCaisseJrs' => $rapportCaisseJrs,
            'lemois'=>$lemois,
            'annee'=>$annee,
            'rcons'=>$recettesConv[0],
            'rLab'=>$recettesLab,
            'rAut'=>$recettesAut,
            'rImg'=>$recettesImg,
            'depbank'=>$depbank[0],
            'retbank'=>$retbank[0],
            'beinvest'=>$beinvest[0],
            'berem'=>$berem[0],
            'depmois'=>$depmois[0],
        ));
    }

    /**
     * Creates a new rapportCaisseJr entity.
     *
     */
    public function newAction(Request $request)
    {
        $rapportCaisseJr = new rapportCaisseJr();
        $form = $this->createForm('hostoo\GestionBundle\Form\rapportCaisseJrType', $rapportCaisseJr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rapportCaisseJr);
            $em->flush();

            return $this->redirectToRoute('rapportcaissejr_show', array('id' => $rapportCaisseJr->getId()));
        }

        return $this->render('rapportcaissejr/new.html.twig', array(
            'rapportCaisseJr' => $rapportCaisseJr,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rapportCaisseJr entity.
     *
     */
    public function showAction(rapportCaisseJr $rapportCaisseJr)
    {
        $deleteForm = $this->createDeleteForm($rapportCaisseJr);

        return $this->render('rapportcaissejr/show.html.twig', array(
            'rapportCaisseJr' => $rapportCaisseJr,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rapportCaisseJr entity.
     *
     */
    public function editAction(Request $request, rapportCaisseJr $rapportCaisseJr)
    {
        $deleteForm = $this->createDeleteForm($rapportCaisseJr);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\rapportCaisseJrType', $rapportCaisseJr);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rapportCaisseJr);
            $em->flush();

            return $this->redirectToRoute('rapportcaissejr_edit', array('id' => $rapportCaisseJr->getId()));
        }

        return $this->render('rapportcaissejr/edit.html.twig', array(
            'rapportCaisseJr' => $rapportCaisseJr,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rapportCaisseJr entity.
     *
     */
    public function deleteAction(Request $request, rapportCaisseJr $rapportCaisseJr)
    {
        $form = $this->createDeleteForm($rapportCaisseJr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rapportCaisseJr);
            $em->flush();
        }

        return $this->redirectToRoute('rapportcaissejr_index');
    }

    /**
     * Creates a form to delete a rapportCaisseJr entity.
     *
     * @param rapportCaisseJr $rapportCaisseJr The rapportCaisseJr entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(rapportCaisseJr $rapportCaisseJr)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapportcaissejr_delete', array('id' => $rapportCaisseJr->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
