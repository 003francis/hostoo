<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/9/16
 * Time: 12:51 AM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\Cloture;
use hostoo\GestionBundle\Entity\rapportCaisseJr;
use hostoo\SanteBundle\Entity\BSCaisse;
use hostoo\SanteBundle\Entity\Caisse;
use hostoo\SanteBundle\Entity\Facture;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\Solde;
use hostoo\SanteBundle\Entity\Taux;
use hostoo\SanteBundle\Form\BSCaisseType;
use hostoo\SanteBundle\Form\TauxType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CaisseController extends Controller
{
    public function listeActesToutesAction(Request $request)
    {
        $session=$request->getSession();
        if(!$this->has($session->get('devise'))){
            if($session->get('devise')=='USD'){
                $session->set('devise','USD');
            }else{
                $session->set('devise','CDF');
            }
        }
        //var_dump(date('d-m-Y')); die('ok');
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Facture')->facturesPayesToutes();
        $listeNP=$em->getRepository('hostooSanteBundle:Facture')->facturesNonPayesToutes();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $caisse_conv=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
        $caisse=$em->getRepository('hostooSanteBundle:Caisse')->findAll();
        $caisseJrUsd=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseUSD();
        $caisseJrCDF=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseCDF();
       /* var_dump($caisseJrCDF);
        var_dump($caisseJrUsd);
        die('ok');*/
        $som_debit=0;
//var_dump($liste);die('ok');

        $sompriv=0;$somprivcdf=0;
        $somconv=0;$somconvcdf=0;
        $som_credit=0;

        foreach ($mont as $taux){

        }
        if($caisse_prive != null){
        $sompriv=$caisse_prive->getMontantUsd();
        $somprivcdf=$caisse_prive->getMontantCdf();
        }
        if($caisse_conv != null){
        $somconv=$caisse_conv->getMontantUsd();
        $somconvcdf=$caisse_conv->getMontantCdf();
        }
        $session->set('taux',$taux->getMontant());

        return $this->render('hostooSanteBundle:Caisse:dash_tout.html.twig',array(
            'liste'=>$liste,
            'listeNP'=>$listeNP,
            'caisseprivusd'=>$caisseJrUsd,
            'caisseprivcdf'=>$caisseJrCDF,'caisseconvcdf'=>$somconvcdf,'caisseconvusd'=>$somconv));
    }
    public function listeActesAction(Request $request)
    {
        $session=$request->getSession();
        if(!$this->has($session->get('devise'))){
            if($session->get('devise')=='USD'){
                $session->set('devise','USD');
            }else{
                $session->set('devise','CDF');
            }
        }
        //var_dump(date('d-m-Y')); die('ok');
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Facture')->facturesPayes(date('Y-m-d'));
        $listeNP=$em->getRepository('hostooSanteBundle:Facture')->facturesNonPayes(date('Y-m-d'));
        $visas=$em->getRepository('hostooGestionBundle:Visa')->parDate(date('Y-m-d'));
        // creation cloture
        $cloture=$em->getRepository('hostooGestionBundle:Cloture')->testOuverture($this->getUser(),date('Y-m-d'));
        if($cloture == null)
        {
            $cloture=new Cloture();
            $cloture->setCaisse($this->getUser());
            $em->persist($cloture);
            $em->flush();

        }
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $caisse_conv=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
        $caisse=$em->getRepository('hostooSanteBundle:Caisse')->findAll();
        $caisseJrUsd=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJournalierUSD($this->getUser()->getId());

        $caisseJrCDF=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJournalierCDF($this->getUser()->getId());
        $rhs=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportHierSomme();
        $report=new rapportCaisseJr();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        foreach ($mont as $taux) {

        }
        $rep=$rhs[0]['reps']-$rhs[0]['depusd']-($rhs[0]['depcdf']/$taux->getMontant())+$rhs[0]['recnet'];
        $check_trport=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->trouverLeReport($rep,date('Y-m-d'));

        //var_dump($caisseJrUsd); die('ok');
        if($check_trport===null){
            $report->setNumdoc(date('Ymd',strtotime('-1 day')).'/R');
            $report->setReport($rep);
            $report->setCommentaire('Report du '.date('d-m-Y',strtotime('-1 day')));
            $report->setLibelle('Report');
            $em->persist($report);
            $em->flush();
        }


        $som_percues=0;
        $som_percues2=0;
        foreach ($caisse as $usd){
            if($usd->getPercepteur() == null || $usd->getPercepteur()->getId() != $this->getUser()->getId()) {
                $som_percues2 += $usd->getMontantcdf();
            }
        }
        foreach ($caisse as $usd){
            if($usd->getPercepteur() == null || $usd->getPercepteur()->getId() != $this->getUser()->getId() ) {
                $som_percues += $usd->getMontantusd();
            }
        }
        /* var_dump($caisseJrCDF);
         var_dump($caisseJrUsd);
         die('ok');*/
        $som_debit=0;
//var_dump($liste);die('ok');

        $sompriv=0;$somprivcdf=0;
        $somconv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJrUSDC();$somconvcdf=0;
        $som_credit=0;

        foreach ($mont as $taux){

        }

        $session->set('taux',$taux->getMontant());

        return $this->render('hostooSanteBundle:Caisse:dash.html.twig',array(
            'liste'=>$liste,'visas'=>$visas,
            'listeNP'=>$listeNP,'som_percues'=>$som_percues,'som_percues2'=>$som_percues2,
            'caisseprivusd'=>$caisseJrUsd,'cloture'=>$cloture,
            'caisseprivcdf'=>$caisseJrCDF,'caisseconvcdf'=>$somconvcdf,'caisseconvusd'=>$somconv));
    }

    public function lesComissionsAction($medecin)
    {
        $em=$this->getDoctrine()->getManager();
        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findByUtilisateur($medecin);
        return $this->render('hostooSanteBundle:Caisse:lescomissions.html.twig',array(
            'liste'=>$episodes,
            ));
    }

    public function listeActesNrsAction(Request $request)
    {
//
        $session=$request->getSession();
        if(!$this->has($session->get('devise'))){
            if($session->get('devise')=='USD'){
                $session->set('devise','USD');
            }else{
                $session->set('devise','CDF');
            }
        }
        //var_dump(date('d-m-Y')); die('ok');
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Facture')->facturesPayes(date('Y-m-d'));
        $listeNP=$em->getRepository('hostooSanteBundle:Facture')->facturesNonPayes(date('Y-m-d'));
        $visas=$em->getRepository('hostooGestionBundle:Visa')->parDate(date('Y-m-d'));

        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $caisse_conv=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
        $caisse=$em->getRepository('hostooSanteBundle:Caisse')->findAll();
        $caisseJrUsd=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJournalierUSD($this->getUser()->getId());

        $caisseJrCDF=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJournalierCDF($this->getUser()->getId());
        $rhs=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->rapportHierSomme();
        $report=new rapportCaisseJr();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        foreach ($mont as $taux) {

        }
        $rep=$rhs[0]['reps']-$rhs[0]['depusd']-($rhs[0]['depcdf']/$taux->getMontant())+$rhs[0]['recnet'];
        $check_trport=$em->getRepository('hostooGestionBundle:rapportCaisseJr')->trouverLeReport($rep,date('Y-m-d'));

        //var_dump($caisseJrUsd); die('ok');
        if($check_trport===null){
            $report->setNumdoc(date('Ymd',strtotime('-1 day')).'/R');
            $report->setReport($rep);
            $report->setCommentaire('Report du '.date('d-m-Y',strtotime('-1 day')));
            $report->setLibelle('Report');
            $em->persist($report);
            $em->flush();
        }
        /* var_dump($caisseJrCDF);
         var_dump($caisseJrUsd);
         die('ok');*/
        $som_debit=0;
//var_dump($liste);die('ok');

        $sompriv=0;$somprivcdf=0;
        $somconv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJournalierUSD($this->getUser()->getId());$somconvcdf=0;
        $som_credit=0;

        $session->set('taux',$taux->getMontant());

        return $this->render('hostooSanteBundle:Dispatcher:dash.html.twig',array(
            'liste'=>$liste,
            'listeNP'=>$listeNP,
            'caisseprivusd'=>$caisseJrUsd,'visas'=>$visas,
            'caisseprivcdf'=>$caisseJrCDF,'caisseconvcdf'=>$somconvcdf,'caisseconvusd'=>$somconv));
    }

    public function validerActeAction(Request $request,$id)
    {
        $encaisse = new Caisse;
        $session = $request->getSession();
        $devise = $request->get('devise');
        $taux = $session->get('taux');
        $em = $this->getDoctrine()->getManager();
        $mafacture = $em->getRepository('hostooSanteBundle:Facture')->find($id);
        $monrdv = $em->getRepository('hostooSanteBundle:RdvPatient')->findOneByEpisode($mafacture->getEpisode());

        if($mafacture->getEpisode()){
        $encaisse->setEpisode($mafacture->getEpisode());
        if ($mafacture->getEpisode()->getPatient()->getSociete()->getId() == 15) {
            $caisse_prive = $em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
            if ($devise == 'USD') {
                $caisse_prive->setMontantUsd($caisse_prive->getMontantUsd() + $mafacture->getPrix());
                $encaisse->setMontantusd($mafacture->getPrix());
                $encaisse->setType(1);
                $encaisse->setFacture($mafacture);
                $encaisse->setPercepteur($this->getUser());
                $em->persist($encaisse);
            } else {
                $caisse_prive->setMontantCdf($caisse_prive->getMontantCdf() + ($mafacture->getPrix() * $taux));
                $encaisse->setMontantcdf(($mafacture->getPrix() * $taux));
                $encaisse->setType(1);
                $encaisse->setRemis(0);
                $encaisse->setFacture($mafacture);
                $encaisse->setPercepteur($this->getUser());
                $em->persist($encaisse);
            }
            if ($monrdv) {
                $monrdv->setValid(1);
                $em->persist($monrdv);
            }

            $em->persist($caisse_prive);
        } else {
            $caisse_conventionne = $em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
            if ($mafacture->getPrix() > 0) {
                $caisse_conventionne->setMontantUsd($caisse_conventionne->getMontantUsd() + $mafacture->getPrix());
                $encaisse->setMontantusd(($mafacture->getPrix()));
                $encaisse->setType(0);
                $encaisse->setRemis(0);
                $encaisse->setFacture($mafacture);
                $encaisse->setPercepteur($this->getUser());
                $em->persist($encaisse);
            }

            $em->persist($caisse_conventionne);
        }
        }
        if($mafacture->getHospitalisation()) {


            $encaisse->setHospitalisation($mafacture->getHospitalisation());
            if ($mafacture->getHospitalisation()->getPatient()->getSociete()->getId() == 15) {
                $caisse_prive = $em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
                if ($devise == 'USD') {
                    $caisse_prive->setMontantUsd($caisse_prive->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd($mafacture->getPrix());
                    $encaisse->setType(1);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                } else {
                    $caisse_prive->setMontantCdf($caisse_prive->getMontantCdf() + ($mafacture->getPrix() * $taux));
                    $encaisse->setMontantcdf(($mafacture->getPrix() * $taux));
                    $encaisse->setType(1);
                    $encaisse->setRemis(0);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }
                if ($monrdv) {
                    $monrdv->setValid(1);
                    $em->persist($monrdv);
                }

                $em->persist($caisse_prive);
            } else {
                $caisse_conventionne = $em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
                if ($mafacture->getPrix() > 0) {
                    $caisse_conventionne->setMontantUsd($caisse_conventionne->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd(($mafacture->getPrix()));
                    $encaisse->setType(0);
                    $encaisse->setRemis(0);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }

                $em->persist($caisse_conventionne);
            }
        }

         /* activation ordonnance pharmacie */
        if($mafacture->getProduits()!=null){
            if($mafacture->getEpisode()){
            foreach($mafacture->getEpisode()->getOrdonnance() as $ordo)
            {
                $ordo->setValider(1);
            }
            }
            if($mafacture->getHospitalisation()){
            foreach($mafacture->getHospitalisation()->getOrdonnances() as $ordo)
            {
                $ordo->setValider(1);
            }
            }
        }

        /* validation labo */
        if($mafacture->getCommandes() != null){
            if($mafacture->getEpisode() && $mafacture->getEpisode()->getOrdonnancelabos() != null){
                foreach($mafacture->getEpisode()->getOrdonnancelabos() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }else if($mafacture->getHospitalisation()->getOrdonnancelabos() != null){
                foreach($mafacture->getHospitalisation()->getOrdonnancelabos() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }else if($mafacture->getHospitalisation()->getOrdonnanceimgs() != null){
                foreach($mafacture->getEpisode()->getOrdonnanceimgs() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }
        }

        /* validation imagerie */
        if($mafacture->getCommandes() != null){
            if($mafacture->getEpisode()){
            foreach($mafacture->getEpisode()->getOrdonnanceimgs() as $ordo)
            {
                    $ordo->setValider(1);
            }
            }
        }
        /**
         * Ligne du rapport journalier
         */
        $rapcaissejr=new rapportCaisseJr();
        if($mafacture->getPrix()>0){
        $rapcaissejr->setNumdoc($mafacture->getId().date_format(new \DateTime(),'mY').'/R');
        $rapcaissejr->setLibelle($mafacture->getActesFacture());
        $rapcaissejr->setRecettebrute($mafacture->getPrix());
        $rapcaissejr->setRecettenet($mafacture->getPrix());
        $rapcaissejr->setDepenseusd(0);
        $rapcaissejr->setDepensecdf(0);
        $rapcaissejr->setReport(0);
        $rapcaissejr->setJustificatif($mafacture->getId().date_format(new \DateTime(),'mY'));
        $rapcaissejr->setMedecin('RAS');
        $rapcaissejr->setCommentaire('');
            $em->persist($rapcaissejr);
        }
        $mafacture->setValidation(1);
        $mafacture->setPercepteur($this->getUser());

        $em->persist($mafacture);

        $em->flush();
        $session->remove('devise');
        return $this->redirectToRoute('hostoo_sante_listeactes');
    }

    public function validerActeNrsAction(Request $request,$id)
    {
        $encaisse = new Caisse;
        $session = $request->getSession();
        $devise = $request->get('devise');
        $taux = $session->get('taux');
        $em = $this->getDoctrine()->getManager();
        $mafacture = $em->getRepository('hostooSanteBundle:Facture')->find($id);
        $monrdv = $em->getRepository('hostooSanteBundle:RdvPatient')->findOneByEpisode($mafacture->getEpisode());

        if($mafacture->getEpisode()){
            $encaisse->setEpisode($mafacture->getEpisode());
            if ($mafacture->getEpisode()->getPatient()->getSociete()->getId() == 15) {
                $caisse_prive = $em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
                if ($devise == 'USD') {
                    $caisse_prive->setMontantUsd($caisse_prive->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd($mafacture->getPrix());
                    $encaisse->setType(1);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());

                    $em->persist($encaisse);
                } else {
                    $caisse_prive->setMontantCdf($caisse_prive->getMontantCdf() + ($mafacture->getPrix() * $taux));
                    $encaisse->setMontantcdf(($mafacture->getPrix() * $taux));
                    $encaisse->setType(1);
                    $encaisse->setRemis(0);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }
                if ($monrdv) {
                    $monrdv->setValid(1);
                    $em->persist($monrdv);
                }

                $em->persist($caisse_prive);
            } else {
                $caisse_conventionne = $em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
                if ($mafacture->getPrix() > 0) {
                    $caisse_conventionne->setMontantUsd($caisse_conventionne->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd(($mafacture->getPrix()));
                    $encaisse->setType(0);
                    $encaisse->setRemis(0);
                    $encaisse->setFacture($mafacture);

                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }

                $em->persist($caisse_conventionne);
            }
        }
        if($mafacture->getHospitalisation()) {


            $encaisse->setHospitalisation($mafacture->getHospitalisation());
            if ($mafacture->getHospitalisation()->getPatient()->getSociete()->getId() == 15) {
                $caisse_prive = $em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
                if ($devise == 'USD') {
                    $caisse_prive->setMontantUsd($caisse_prive->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd($mafacture->getPrix());
                    $encaisse->setType(1);
                    $encaisse->setFacture($mafacture);
                    $em->persist($encaisse);
                } else {
                    $caisse_prive->setMontantCdf($caisse_prive->getMontantCdf() + ($mafacture->getPrix() * $taux));
                    $encaisse->setMontantcdf(($mafacture->getPrix() * $taux));
                    $encaisse->setType(1);
                    $encaisse->setRemis(0);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }
                if ($monrdv) {
                    $monrdv->setValid(1);
                    $em->persist($monrdv);
                }

                $em->persist($caisse_prive);
            } else {
                $caisse_conventionne = $em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
                if ($mafacture->getPrix() > 0) {
                    $caisse_conventionne->setMontantUsd($caisse_conventionne->getMontantUsd() + $mafacture->getPrix());
                    $encaisse->setMontantusd(($mafacture->getPrix()));
                    $encaisse->setType(0);
                    $encaisse->setRemis(0);
                    $encaisse->setFacture($mafacture);
                    $encaisse->setPercepteur($this->getUser());
                    $em->persist($encaisse);
                }

                $em->persist($caisse_conventionne);
            }
        }

        /* activation ordonnance pharmacie */
        if($mafacture->getProduits()!=null){
            if($mafacture->getEpisode()){
                foreach($mafacture->getEpisode()->getOrdonnance() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }
            if($mafacture->getHospitalisation()){
                foreach($mafacture->getHospitalisation()->getOrdonnances() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }
        }

        /* validation labo */
        if($mafacture->getCommandes() != null){
            if($mafacture->getEpisode() && $mafacture->getEpisode()->getOrdonnancelabos() != null){
                foreach($mafacture->getEpisode()->getOrdonnancelabos() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }else if($mafacture->getHospitalisation()->getOrdonnancelabos() != null){
                foreach($mafacture->getHospitalisation()->getOrdonnancelabos() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }else if($mafacture->getHospitalisation()->getOrdonnanceimgs() != null){
                foreach($mafacture->getEpisode()->getOrdonnanceimgs() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }
        }

        /* validation imagerie */
        if($mafacture->getCommandes() != null){
            if($mafacture->getEpisode()){
                foreach($mafacture->getEpisode()->getOrdonnanceimgs() as $ordo)
                {
                    $ordo->setValider(1);
                }
            }
        }
        /**
         * Ligne du rapport journalier
         */
        $rapcaissejr=new rapportCaisseJr();
        if($mafacture->getPrix()>0){
            $rapcaissejr->setNumdoc($mafacture->getId().date_format(new \DateTime(),'mY').'/R');
            $rapcaissejr->setLibelle($mafacture->getActesFacture());
            $rapcaissejr->setRecettebrute($mafacture->getPrix());
            $rapcaissejr->setRecettenet($mafacture->getPrix());
            $rapcaissejr->setDepenseusd(0);
            $rapcaissejr->setDepensecdf(0);
            $rapcaissejr->setReport(0);
            $rapcaissejr->setJustificatif($mafacture->getId().date_format(new \DateTime(),'mY'));
            $rapcaissejr->setMedecin('RAS');
            $rapcaissejr->setCommentaire('');
            $em->persist($rapcaissejr);
        }
        $mafacture->setValidation(1);
        $mafacture->setPercepteur($this->getUser());

        $em->persist($mafacture);

        $em->flush();
        $session->remove('devise');
        return $this->redirectToRoute('actes_listes');
    }


    public function soldeActeAction(Request $request,$acte)
    {
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $solde= new Solde;
        $encaisse=new Caisse;
        $taux=$session->get('taux');
        $lacte=$em->getRepository('hostooSanteBundle:Facture')->find($acte);
        $lasolde=$request->get('solde');
        $devise=$request->get('devise');
        if($lacte->getEpisode()->getPatient()->getSociete()->getConvention()->getId()== 1)
        {
            $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
            if($devise == 'USD'){
                if($lacte->getPrix()>=($lacte->getLasolde() + $lasolde) ){
                    $caisse_prive->setMontantUsd($caisse_prive->getMontantUsd()+$lasolde);
                    $lacte->setLasolde($lacte->getLasolde()+($lasolde));
                    $encaisse->setMontantusd($lasolde);
                }else{
                    $caisse_prive->setMontantUsd($lacte);
                    $encaisse->setMontantusd($lacte->getPrix()-$lasolde);
                }

//                $encaisse->setMontantusd($lasolde);
                $encaisse->setType(1);
                $encaisse->setFacture($lacte);
            }else{
                if($lacte->getPrix()>=($lacte->getLasolde() + $lasolde) ){
                    $caisse_prive->setMontantCdf($caisse_prive->getMontantCdf()+$lasolde);
                    $lacte->setLasolde($lacte->getLasolde()+($lasolde/$taux));
                    $encaisse->setMontantcdf($lasolde);
                }else{
                    $caisse_prive->setMontantCdf($lacte);
                    $encaisse->setMontantcdf(abs($lacte->getPrix()-($lasolde/$taux)));
                }

//                $encaisse->setMontantusd($lasolde);
                $encaisse->setType(1);
                $encaisse->setFacture($lacte);
            }
            $em->persist($caisse_prive);
        }else{
            $caisse_conventionne=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
            $caisse_conventionne->setMontantUsd($caisse_conventionne->getMontantUsd()+$lasolde);
            $encaisse->setMontantusd($lasolde);
            $em->persist($caisse_conventionne);
        }
        $solde->setSolde($solde->getSolde()+$lasolde);
        $solde->setFacture($lacte);
        $lacte->setSolde(true);
        $lacte->setValidation(true);
        if($lacte->getPrix() == $lacte->getLaSolde())
        {
            $lacte->setLaSolde(0);
            $lacte->setValidation(true);
            $lacte->setSolde(false);
        }
        $encaisse->setEpisode($lacte->getEpisode());
        $em->persist($lacte);
        $em->persist($solde);
        $em->persist($encaisse);
        $em->flush();
        return $this->redirectToRoute('hostoo_sante_listeactes');
    }

    /**
     *
     * @Route("/ValiderVisa/{fact}", name="valider_par_visa")
     */
    public function visaActeAction(Request $request,$fact)
    {
       // $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $facture=$em->getRepository('hostooSanteBundle:Facture')->find($fact);

        $visa=$em->getRepository('hostooGestionBundle:Visa')->find((int)$request->get('visa'));
        $visa->setMontantUsd($visa->getMontantUsd()+$facture->getPrix());


        $facture->setVisa($visa);
        $facture->setValidation(1);
        $facture->setPercepteur($this->getUser());
        $em->persist($facture);
        $em->persist($visa);
        $em->flush();
        return $this->redirectToRoute('hostoo_sante_listeactes');
    }

    public function creeBSAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $um=$this->get('fos_user.user_manager');
        $caissier=$um->findUserByUsername($this->getUser());
        $caisse=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $bs=new BSCaisse;
        $form=$this->get('form.factory')->create(BSCaisseType::class,$bs);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $rapcaissejr=new rapportCaisseJr();
            if($bs->getDevise()=='USD')
            {
                $caisse->setMontantusd($caisse->getMontantusd()-$bs->getMontant());
                $rapcaissejr->setDepenseusd($bs->getMontant());
            }else{
                $caisse->setMontantcdf($caisse->getMontantcdf()-$bs->getMontant());
                $rapcaissejr->setDepensecdf($bs->getMontant());
            }
            /**
             * Ligne Rapport journalier
             */


            $rapcaissejr->setNumdoc($bs->getId().date_format(new \DateTime(),'mY').'/D');
            $rapcaissejr->setLibelle($bs->getMotif().'<br>'.$bs->getBeneficiaire().'<br>'.$bs->getVisa());
            $rapcaissejr->setRecettebrute(0);


            $rapcaissejr->setReport(0);
            $rapcaissejr->setJustificatif($bs->getId().date_format(new \DateTime(),'mY'));
            $rapcaissejr->setMedecin('RAS');
            $rapcaissejr->setCommentaire('');

            $bs->setCaissier($caissier);
            $em->persist($rapcaissejr);
            $em->persist($caisse);
            $em->persist($bs);
            $em->flush();
            return $this->redirectToRoute('hostoo_sante_listeactes');
        }
        return $this->render('hostooSanteBundle:Caisse:ajouterbs.html.twig',array('form'=>$form->createView(),));
    }

    public function lireBSAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $bscaisse=$em->getRepository('hostooSanteBundle:BSCaisse')->find($id);
        return $this->render('hostooSanteBundle:Caisse:bscaisse.html.twig',array('bon'=>$bscaisse,));
    }

    public function listeBSAction()
    {
        $em=$this->getDoctrine()->getManager();
        $bscaisse=$em->getRepository('hostooSanteBundle:BSCaisse')->findAll();
        return $this->render('hostooSanteBundle:Caisse:bscaisse.html.twig',array('bons'=>$bscaisse,));
    }

    public function sommeBSusdAction()
    {
        $em=$this->getDoctrine()->getManager();
        $bscaisse=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesDayUSD();

        return new Response($bscaisse[1]);
    }

    public function sommeBScdfAction()
    {
        $em=$this->getDoctrine()->getManager();
        $bscaisse=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesDayCDF();

        return new Response($bscaisse[1]);
    }

    public function dashAction()
    {
        return $this->render('hostooSanteBundle:Caisse:dash.html.twig');
    }

    public function mettreDeviseAction(Request $request)
    {
        $session=$request->getSession();
        $session->set('devise',$request->get('devise'));
        return $this->redirectToRoute('hostoo_sante_listeactes');
    }

    public function nouveauTauxAction(Request $request)
    {
        $taux= new Taux();
        $form=$this->get('form.factory')->create(TauxType::class, $taux);
        if($request->isMethod('post') && $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($taux);
            $em->flush();
            return $this->redirectToRoute('hostoo_sante_listeactes');
        }
        return $this->render('hostooSanteBundle:Caisse:taux.html.twig',array('form'=>$form->createView(),));
    }

    public function donneTauxAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        if($mont == null){
            return new Response('Pas de Taux defini');
        }else{
            foreach ($mont as $taux) {

            }
            return new Response('<strong>1 USD <br>= <br>'.$taux->getMontant().'CDF</strong>');
        }

    }


    public function monTauxAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        if($mont == null){
            return new Response('Pas de Taux defini');
        }else{
            foreach ($mont as $taux) {

            }
            return new Response($taux->getMontant());
        }

    }
    public function tauxAction()
    {
        $em=$this->getDoctrine()->getManager();
        $mont=$em->getRepository('hostooSanteBundle:Taux')->findBy(array(),array('id'=>'desc'),1);
        if($mont == null){
            return new Response('Pas de Taux defini');
        }else{
            foreach ($mont as $taux) {

            }
            return new Response($taux->getMontant());
        }

    }

    /**
     *
     * @Route("/JournalDeCaisse", name="journal_de_caisse")
     */
    public function journalDeCaissesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste= $em->getRepository('hostooSanteBundle:Caisse')->findAll();
        return $this->render('hostooSanteBundle:Caisse:listecaisse.html.twig', array(
            'liste'=>$liste
        ));
    }


    /**
     *
     * @Route("/EnCaisse/{id}", name="mettre_en_caisse")
     */
    public function encaisserAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $liste= $em->getRepository('hostooSanteBundle:Caisse')->find($id);
        $liste=$liste->setPercepteurPrimaire($liste->getPercepteur()?$liste->getPercepteur():null);
        $liste->setPercepteur($this->getUser());
        $liste->setDateperception($liste->getDatecaisse());
        $liste->setDatecaisse(new \DateTime('now'));
        $em->persist($liste);
        $em->flush();
        return $this->redirectToRoute('journal_de_caisse');
    }

    public function printFactureAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $facture=$em->getRepository('hostooSanteBundle:Facture')->find($id);
        return $this->render('hostooSanteBundle:Caisse:facture.html.twig', array(
        'facture'=>$facture
        ));
    }

    public function TBAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $facture=$em->getRepository('hostooSanteBundle:Facture')->find($id);
        return $this->render('hostooSanteBundle:Caisse:caisse_tb.html.twig', array(
            'facture'=>$facture
        ));
    }


    /**
     *
     * @Route("/ImprimerLesActesEpisode", name="cs_imprimer_les_actes")
     */
    public function imprimerLesActes(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $session=$request->getSession();
        $societes=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();
        $conventions=$em->getRepository('hostooSanteBundle:Formule')->findAll();



        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        if($session->get('temps')){
            if($session->get('societe') == 15 ){
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsPV((int)$session->get('societe'),$session->get('temps'));
            }
            if($session->get('societe') != 15){
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsCV((int)$session->get('societe'),$session->get('temps'));
            }
        }

        return $this->render('hostooSanteBundle:Episode:episoderapportprint.html.twig', array(
//            'societes'=>$societes,
//            'conventions'=>$conventions,
            'episodes'=>$episodes,
        ));
    }

    /**
     *
     * @Route("/RapportDesFrequentations", name="cs_rapport_de_frequentation")
     */
    public function rapportDesFrequentations(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $session=$request->getSession();
        $societes=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();
        $conventions=$em->getRepository('hostooSanteBundle:Formule')->findAll();



        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        if($request->isMethod('POST')){
            $session->set('temps',$request->get('an')."-".$request->get('mois'));
            $session->set('societe',$request->get('societe'));
            $session->set('formule',$request->get('formule'));
            if($request->get('societe') == 15 ){
                $session->set('conv','PRIVES');
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsPV((int)$request->get('societe'),$request->get('an')."-".$request->get('mois'));
            }
            if($request->get('societe') != 15){
                $session->set('conv','CONVENTIONNES');
                $episodes=$em->getRepository('hostooSanteBundle:Episode')->lesPatientsCV((int)$request->get('societe'),$request->get('an')."-".$request->get('mois'));
            }
        }

        return $this->render('hostooSanteBundle:Episode:episoderapport.html.twig', array(
            'societes'=>$societes,
            'conventions'=>$conventions,
            'episodes'=>$episodes,
        ));
    }

}