<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReportingController extends Controller
{
    public function tableauDeBordAction()
    {
        $em=$this->getDoctrine()->getManager();
        $patient=new Patient();
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        $patient=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        $patient_prive=$em->getRepository('hostooSanteBundle:Patient')->nombresConventionnes();
        $patient_conv=$em->getRepository('hostooSanteBundle:Patient')->nombresPrives();
        $frequentations=$em->getRepository('hostooSanteBundle:Episode')->frequentationPatients(date('m'));
        $frequentations_jour=$em->getRepository('hostooSanteBundle:Episode')->frequentationPatients(date('Y-m-d'));
        $patientsSocietes=$em->getRepository('hostooGestionBundle:Proprietaire')->societesDesPatients();
        $patientsFor=$em->getRepository('hostooSanteBundle:Formule')->nbreParFormule();
        $rDVMeds=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();


        try{
            $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        }catch (InvalidFieldNameException $e){
            $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        }
        $epi=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $snp=$em->getRepository('hostooSanteBundle:Caisse')->sommeNonPercues();
        $sortie=$em->getRepository('hostooSanteBundle:BSCaisse')->TotalDepensesUSD();
        $caisse_conv=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
        $daterdv=date_format(new \DateTime('now'),'Y-m-d');
        $facture=$em->getRepository('hostooSanteBundle:Facture')->trouverDate($daterdv);
        $som=0;
        foreach ($facture as $fct)
        {
            $som+=$fct->getPrix();
        }
        return $this->render('hostooGestionBundle:Reporting:tableau_de_bord.html.twig', array(
            // ...
            'form'=>$form->createView(),
            'patients'=>$patient,
            'conv'=>$patient_conv[0]['NbrePatients'],
            'prive'=>$patient_prive[0]['NbrePatients'],'sortie'=>$sortie,
            'socs'=>$patientsSocietes,'patfor'=>$patientsFor,'rdvs'=>$rDVMeds,
            /*'fer'=>$patient_fer,*/'dependants'=>$dependants,'epis'=>$epi,'freqsj'=>$frequentations_jour,'freqs'=>$frequentations,
            'Cprive'=>$caisse_prive,
            'snp'=>$snp,
            'CConv'=>$caisse_conv,
            'facts'=>$som,

        ));
    }

    public function ActesFacturesAction()
    {
        return $this->render('hostooGestionBundle:Reporting:actes_factures.html.twig', array(
            // ...
        ));
    }

    public function ConventionsDesEntreprisesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $entreprises=$em->getRepository('hostooGestionBundle:Proprietaire')->findAll();

        return $this->render('hostooGestionBundle:Reporting:conventions_des_entreprises.html.twig', array(
            // ...
            'entreprises'=>$entreprises,
        ));
    }

    public function nbreFormuleAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $formtab=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->groupeFormule($id);
        return new Response(count($formtab));
    }

    public function detailsSurEntreprisesAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $proprietaire=$em->getRepository('hostooGestionBundle:Proprietaire')->find($id);
        $epi=$em->getRepository('hostooSanteBundle:Episode')->nbfrequentationAgentParMois($id);
        $epis=$em->getRepository('hostooSanteBundle:Episode')->frequentationAgentParMois($id);
        $formtab=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->lesFormulesSociete($id);
        return $this->render('hostooGestionBundle:Reporting:details_sur_entreprises.html.twig', array(
            // ...
            'proprietaire'=>$proprietaire,'epi'=>$epi,'epis'=>$epis,'formtabs'=>$formtab,
        ));
    }

    public function activiteJournaliereAction()
    {
        return $this->render('hostooGestionBundle:Reporting:activite_journaliere.html.twig', array(
            // ...
        ));
    }

    public function patientsRecusAction()
    {
        $em=$this->getDoctrine()->getManager();
        $freqs=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        $freqs_date=$em->getRepository('hostooSanteBundle:Episode')->frequentationDate(date('Y-m-d'));
        $freqs_mois=$em->getRepository('hostooSanteBundle:Episode')->frequentationDate(date('Y-m'));
        $freqs_annee=$em->getRepository('hostooSanteBundle:Episode')->frequentationDate(date('Y'));
        // conventionnees
        $freqs_cvday=$em->getRepository('hostooSanteBundle:Episode')->frequentationConventionnesDate(date('Y-m-d'));
        $freqs_cvmois=$em->getRepository('hostooSanteBundle:Episode')->frequentationConventionnesDate(date('Y-m'));
        $freqs_cvannee=$em->getRepository('hostooSanteBundle:Episode')->frequentationConventionnesDate(date('Y'));

        // prives
        $freqs_pvday=$em->getRepository('hostooSanteBundle:Episode')->frequentationPrivesDate(date('Y-m-d'));
        $freqs_pvmois=$em->getRepository('hostooSanteBundle:Episode')->frequentationPrivesDate(date('Y-m'));
        $freqs_pvannee=$em->getRepository('hostooSanteBundle:Episode')->frequentationPrivesDate(date('Y'));


        return $this->render('hostooGestionBundle:Reporting:patients_recus.html.twig', array(
            // ...
            'freqs'=>$freqs,'todayfreq'=>$freqs_date,
            'fms'=>$freqs_mois, 'fans'=>$freqs_annee,'cvday'=>$freqs_cvday,'cvmois'=>$freqs_cvmois,'cvannee'=>$freqs_cvannee,
            'pvday'=>$freqs_pvday,'pvmois'=>$freqs_pvmois,'pvannee'=>$freqs_pvannee,
        ));
    }

    public function caisseAction()
    {
        $em=$this->getDoctrine()->getManager();
        $caissePrive=$em->getRepository('hostooSanteBundle:Caisse')->findByType(1);
        $caisseCV=$em->getRepository('hostooSanteBundle:Caisse')->findByType(0);
        $caisses=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseUSD();
        $caissestotpv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJrUSD();
        $caissesmoispv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseMoisUSDP();

        $caissescv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseUSDC();
        $caissestotcv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseJrUSDC();
        $caissesmoiscv=$em->getRepository('hostooSanteBundle:Caisse')->totalCaisseMoisUSDC();
        $paiements=$em->getRepository('hostooGestionBundle:Paiement')->findAll();
        $bscaisses=$em->getRepository('hostooSanteBundle:BSCaisse')->findAll();
        $bsusd=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesMoisUSD(date('m'),date('Y'));
        $bsusdtot=$em->getRepository('hostooSanteBundle:BSCaisse')->TotalDepensesUSD();
        $bsday=$em->getRepository('hostooSanteBundle:BSCaisse')->depensesDayUSD();
        return $this->render('hostooGestionBundle:Reporting:caisse.html.twig',array(
            'caisseprive'=>$caissePrive,
            'caissecv'=>$caisseCV,'paiements'=>$paiements,
            'caisses'=>$caisses,'depenses'=>$bscaisses,'bsmois'=>$bsusd,'bstot'=>$bsusdtot,'bsday'=>$bsday,
            'ctot'=>$caissestotpv,'ctotmois'=>$caissesmoispv, 'cvmois'=>$caissesmoiscv, 'cvtot'=>$caissescv, 'cvjr'=>$caissestotcv,
        ));
    }

    public function performancesAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $medecins=$em->getRepository('hostooUserBundle:Utilisateur')->lesmedecins();
//        $performances=$em->getRepository('hostooSanteBundle:Episode')->lesPerformancesDeMedecins(date('Y-m-d'));
//        $performancescv=$em->getRepository('hostooSanteBundle:Episode')->lesPerformancesDeMedecinsCV(date('Y-m-d'));
//
        if($request->isMethod('POST')){
            $ladate=$request->get('annee_rapport')."-".$request->get('mois_rapport');
            if($request->get('jour_rapport')>0){
                $ladate.="-".$request->get('jour_rapport');
            }
       $performances=$em->getRepository('hostooSanteBundle:Episode')->lesPerformancesDeMedecins($ladate);
            $performancescv=$em->getRepository('hostooSanteBundle:Episode')->lesPerformancesDeMedecinsCV($ladate);
            //var_dump($performances); die('ok');
            return $this->render('hostooGestionBundle:Reporting:medecin.html.twig',
                array('performances'=>$performances,'performancescv'=>$performancescv,'medecins'=>$medecins));
        }
//

        $performances=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        $performancescv=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        return $this->render('hostooGestionBundle:Reporting:medecin.html.twig',
            array('performances'=>$performances,'performancescv'=>$performancescv,'medecins'=>$medecins));
    }

    public function lesActesDuLaboAction($user)
    {
        $em=$this->getDoctrine()->getManager();
        $labos=$em->getRepository('hostooUserBundle:Utilisateur')->lesordonnanceslabo($user);
        return new Response($labos['nbr']);
    }

    public function lesActesDuImgAction($user)
    {
        $em=$this->getDoctrine()->getManager();
        $labos=$em->getRepository('hostooUserBundle:Utilisateur')->lesordonnancesImg($user);
        return new Response($labos['nbr']);
    }

    public function reportingMensuelAction($url)
    {
        return $this->render('hostooGestionBundle:Reporting:dateranger.html.twig',['url'=>$url]);

    }

    public function requisitionsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $requisitions=$em->getRepository('hostooGestionBundle:Requisition')->findAll();
        return $this->render('hostooGestionBundle:Reporting:requisitions.html.twig',
            ['requisitions'=>$requisitions]);
    }

}
