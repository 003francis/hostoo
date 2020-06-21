<?php

namespace hostoo\SanteBundle\Controller;

use Doctrine\DBAL\Exception\InvalidFieldNameException;
use hostoo\GestionBundle\Litoyi\LitoyiListener;
use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TBController extends Controller
{

    public function receptionTBAction()
    {
        $em=$this->getDoctrine()->getManager();

        $patient=new Patient();
        $episodes= $em->getRepository('hostooSanteBundle:Episode')->findAll();
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        $patient=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        $patient_prive=$em->getRepository('hostooSanteBundle:Patient')->nombresConventionnes();
        $patient_conv=$em->getRepository('hostooSanteBundle:Patient')->nombresPrives();
        $frequentations=$em->getRepository('hostooSanteBundle:Episode')->frequentationPatients(date('Y-m'));
        $frequentations_jour=$em->getRepository('hostooSanteBundle:Episode')->frequentationPatients(date('Y-m-d'));
        $patientsSocietes=$em->getRepository('hostooGestionBundle:Proprietaire')->societesDesPatients();
        $patientsFor=$em->getRepository('hostooSanteBundle:Formule')->nbreParFormule();
        $rDVMeds=$em->getRepository('hostooRDVBundle:RDVMed')->trouverToday();
        /*$patient_fer=$em->getRepository('hostooSanteBundle:Patient')->findBy(array('typeclient'=>'3'));*/
            //var_dump($frequentations); die('ok');
        try{
        $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        }catch (InvalidFieldNameException $e){
            $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        }
        $epi=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        return $this->render('hostooSanteBundle:TB:reception_tb.html.twig', array(
            // ...
            'form'=>$form->createView(),'episodes'=>$episodes,
            'patients'=>$patient,
           'conv'=>$patient_conv[0]['NbrePatients'],
            'prive'=>$patient_prive[0]['NbrePatients'],
            'socs'=>$patientsSocietes,'patfor'=>$patientsFor,'rdvs'=>$rDVMeds,
            /*'fer'=>$patient_fer,*/
            'dependants'=>$dependants,'epis'=>$epi,'freqs'=>$frequentations,'freqsj'=>$frequentations_jour
        ));
    }

    public function salleDesSoinsTBAction()
    {
        $em=$this->getDoctrine()->getManager();
        $daterdv=date_format(new \DateTime('now'),'Y-m-d');
        $epis=$em->getRepository('hostooSanteBundle:Episode')->trouverDate(date_format(new \DateTime(),'d-m-Y'));
        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->parLaDate($daterdv);
        $svs=$em->getRepository('hostooSanteBundle:SignesVitaux')->findAll();
        return $this->render('hostooSanteBundle:TB:salle_des_soins_tb.html.twig', array(
            // ...
            'epis'=>$epis,
            'rdvs'=>$rdvdoctor,
            'svs'=>$svs
        ));
    }

    public function docTBAction()
    {
        return $this->render('hostooSanteBundle:TB:doc_tb.html.twig', array(
            // ...
        ));
    }

    public function laboTBAction()
    {
        return $this->render('hostooSanteBundle:TB:labo_tb.html.twig', array(
            // ...
        ));
    }

    public function ImgTBAction()
    {
        return $this->render('hostooSanteBundle:TB:img_tb.html.twig', array(
            // ...
        ));
    }

    public function TBAdminAction()
    {
        $em=$this->getDoctrine()->getManager();


       // var_dump($journal->getEvenement($this->getUser())); die('koournal');
        $patients=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        $mylogs=$em->getRepository('hostooSanteBundle:AuditLog')->findAll();
        $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findAll();
        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->findAll();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        $stocks=$em->getRepository('hostooPharmacieBundle:Stock')->findAll();
        $users=$em->getRepository('hostooUserBundle:Utilisateur')->findAll();
        $patient_prive=$em->getRepository('hostooSanteBundle:Patient')->nombresConventionnes();
        $patient_conv=$em->getRepository('hostooSanteBundle:Patient')->nombresPrives();
        $patientsSocietes=$em->getRepository('hostooGestionBundle:Proprietaire')->societesDesPatients();
        $patientsFor=$em->getRepository('hostooSanteBundle:Formule')->nbreParFormule();
        return $this->render('hostooSanteBundle:TB:admin_tb.html.twig', array(
            // ...
            'mylogs'=>$mylogs,
            'patients'=>$patients,
            'dependants'=>$dependants,
            'episodes'=>$episodes,
            'ordos'=>$ordos,
            'produits'=>$produits,
            'stocks'=>$stocks,
            'users'=>$users,
            'patpriv'=>$patient_prive[0]['NbrePatients'],
            'patconv'=>$patient_conv[0]['NbrePatients'],
            'patsoc'=>$patientsSocietes,
            'patfor'=>$patientsFor

        ));
    }


    public function CaisseTBAction()
    {
        $em=$this->getDoctrine()->getManager();
        $caisse_prive=$em->getRepository('hostooSanteBundle:CaissePrive')->find(1);
        $snp=$em->getRepository('hostooSanteBundle:Caisse')->sommeNonPercues();
        $caisse_conv=$em->getRepository('hostooSanteBundle:CaissePrive')->find(2);
        $daterdv=date_format(new \DateTime('now'),'Y-m-d');
        $facture=$em->getRepository('hostooSanteBundle:Facture')->trouverDate($daterdv);
        $som=0;
        foreach ($facture as $fct)
        {
            $som+=$fct->getPrix();
        }
        return $this->render('hostooSanteBundle:TB:caisse_tb.html.twig', array(
            // ...
            'Cprive'=>$caisse_prive,
            'snp'=>$snp,
            'CConv'=>$caisse_conv,
            'facts'=>$som,
        ));
    }

}
