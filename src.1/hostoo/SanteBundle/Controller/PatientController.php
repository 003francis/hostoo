<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/1/16
 * Time: 10:37 PM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\Commande;
use hostoo\SanteBundle\Entity\Actes;
use hostoo\SanteBundle\Entity\BonConvention;
use hostoo\SanteBundle\Entity\Dependant;
use hostoo\SanteBundle\Entity\Episode;
use hostoo\SanteBundle\Entity\Facture;
use hostoo\SanteBundle\Entity\Parente;
use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Form\DependantType;
use hostoo\SanteBundle\Form\EpisodeType;
use hostoo\SanteBundle\Form\ParenteType;
use hostoo\SanteBundle\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class PatientController extends Controller
{
    public function enregistrerPatientAction(Request $request)
    {

        $patient = new Patient;
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $this->get('session')->getFlashBag()->add('info', 'le Patient '.$patient->getNom().'bien enregistré');
                $em=$this->getDoctrine()->getManager();
            $patient_test=$em->getRepository('hostooSanteBundle:Patient')->findOneBy(
              array(
                  'nom'=>$patient->getNom(),
                  'postnom'=>$patient->getPostnom(),
                  'prenom'=>$patient->getPrenom(),
                  'datenaissance'=>$patient->getDatenaissance()
              )
            );

            if($patient_test){
                throw $this->createNotFoundException('Ce Patient Existe déjà !');
            }
            $societe=$em->getRepository('hostooGestionBundle:Proprietaire')->find(15);
            $patient->setSociete($societe);
            $patient->setFormule(null);
            $patient->setDateenr(new \DateTime());
            $patient->setDatemod(new \DateTime());
            $em->persist($patient);
                $em->flush();


            return $this->redirectToRoute('hostoo_sante_voirpatient', array('id'=>$patient->getId()));
        }
        return $this->render('hostooSanteBundle:Patient:enregistrer.html.twig',array('form'=>$form->createView(),));
    }

    public function enregistrerPatientRCAction(Request $request)
    {

        $patient = new Patient;
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $this->get('session')->getFlashBag()->add('info', 'le Patient '.$patient->getNom().'bien enregistré');
            $em=$this->getDoctrine()->getManager();
            $patient_test=$em->getRepository('hostooSanteBundle:Patient')->findOneBy(
                array(
                    'nom'=>$patient->getNom(),
                    'postnom'=>$patient->getPostnom(),
                    'prenom'=>$patient->getPrenom(),
                    'datenaissance'=>$patient->getDatenaissance()
                )
            );

            if($patient_test){
                throw $this->createNotFoundException('Ce Patient Existe déjà !');
            }
            $societe=$em->getRepository('hostooGestionBundle:Proprietaire')->find(15);
            $patient->setSociete($societe);
            $patient->setFormule(null);
            $patient->setDateenr(new \DateTime());
            $patient->setDatemod(new \DateTime());
            $em->persist($patient);
            $em->flush();


            return $this->redirectToRoute('hostoo_sante_voirpatient', array('id'=>$patient->getId()));
        }
        return $this->render('hostooSanteBundle:Patient:enregistrermodal.html.twig',array('form'=>$form->createView(),));
    }

    public function modifierPatientRCAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();

        $patient = $em->getRepository('hostooSanteBundle:Patient')->find($id);
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $this->get('session')->getFlashBag()->add('info', 'le Patient '.$patient->getNom().'bien modifié');
            if($patient->getSociete()->getId() == 15){
                $patient->setFormule(null);
            }
            $patient->setDatemod(new \DateTime());
            $em->persist($patient);
            $em->flush();


            return $this->redirectToRoute('hostoo_sante_voirpatient', array('id'=>$patient->getId()));
        }
        return $this->render('hostooSanteBundle:Patient:modifier.html.twig',array('form'=>$form->createView(),'patient'=>$patient));
    }

    public function listePatientsAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->patientsActifs();
        if($request->get('societe')){
            $societe=$em->getRepository('hostooGestionBundle:Proprietaire')->findOneById($request->get('societe'));
            $liste=$em->getRepository('hostooSanteBundle:Patient')->patientsParSocieteActifs($societe);
            return $this->render('hostooSanteBundle:Patient:listepatients.html.twig',array('patients'=>$liste,));
        }
        if($request->get('formule'))
        {
            $societe=$em->getRepository('hostooSanteBundle:Formule')->findOneById($request->get('formule'));
            $liste=$em->getRepository('hostooSanteBundle:Patient')->patientsParFormuleActifs($societe);
            return $this->render('hostooSanteBundle:Patient:listepatients.html.twig',array('patients'=>$liste,));

        }
        return $this->render('hostooSanteBundle:Patient:listepatients.html.twig',array('patients'=>$liste,));
    }

    public function listePatientsModalAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->findAll();
        if($request->get('societe')){
            $societe=$em->getRepository('hostooGestionBundle:Proprietaire')->findOneByNom($request->get('societe'));
            $liste=$em->getRepository('hostooSanteBundle:Patient')->findBySociete($societe);
            return $this->render('hostooSanteBundle:Patient:listepatientsmodal.html.twig',array('patients'=>$liste,));
        }
        return $this->render('hostooSanteBundle:Patient:listepatients.html.twig',array('patients'=>$liste,));
    }

    public function listePatientsPrivesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->patientsPrives();

        return $this->render('hostooSanteBundle:Patient:listepatientspv.html.twig',array('patients'=>$liste,));
    }

    public function listePatientsConventionnesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->patientsConventionnes();

        return $this->render('hostooSanteBundle:Patient:listepatientscv.html.twig',array('patients'=>$liste,));
    }

    public function fichePatientAction(Request $request)
    {
        $motcle=$request->get('motcle');
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->findOneBy(array('nom'=>$motcle));
        $episode= new Episode;
        $form=$this->get('form.factory')->create(EpisodeType::class,$episode);

        return $this->render('hostooSanteBundle:Patient:fichepatient2.html.twig',array('patient'=>$liste,'form'=>$form->createView(),));
    }
    /**
     * @Route("/voir-le-patient/{id}", name = "hostoo_sante_voirpatient", requirements={"id": "\d+"})
     *
     */
    public function voirPatientAction(Request $request,$id)
    {

        $session = $request->getSession();

        $user=$this->container->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->find($id);
        $RDV=$em->getRepository('hostooRDVBundle:RDVMed')->findOneBy(['patients'=>$liste->getId(), 'daterdv'=>new \DateTime(date('Y-m-d'))]);
//        var_dump($RDV);
        $tar1=$em->getRepository('hostooGestionBundle:Tarif')->find(187);
        $tar=$em->getRepository('hostooGestionBundle:Tarif')->findOneBy(array('convention'=>$liste->getSociete()->getConvention(),'actes'=>$request->get('consulta')));
        $episodes=$em->getRepository('hostooSanteBundle:Episode')->findByPatient($liste,array('id'=>'desc'));
        $actess=$em->getRepository('hostooGestionBundle:Tarif')->findAll();
        //var_dump($liste->getForm); die('Ok');
        $episode= new Episode;

        $form=$this->get('form.factory')->create(EpisodeType::class,$episode);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $prix=0;
            $tag=$request->get('episode');

            ($RDV)?$RDV->setEtat('RECU'):"";
//var_dump((bool)$tag['consultation']); die('ok');
            if(((bool)$tag['consultation']) == false){

                if($liste->getSociete() == null || $liste->getSociete()->getId()==15){

                    $acte = new Facture;
                    $commande = new Commande();

                    $commande->addTarif($tar);
                    $prix = $tar->getPrix();
                    $acte->setEpisode($episode);
                    $acte->setPrix($prix);
                    $em->persist($acte);
                    $acte->addCommande($commande);
                    $episode->setPatient($liste);
                    $em->persist($commande);
                    $episode->setUtilisateur($user);
                    $em->persist($episode);
                }else{
                    $acte = new Facture;
                    $commande = new Commande();

                    //$acte->setDatefacture(new \DateTime(date('d-m-Y')));

                    $commande->addTarif($tar);
                    $prix = 0;

                    $acte->addCommande($commande);
                    $episode->setPatient($liste);
                    $episode->setUtilisateur($user);
                    $em->persist($episode);
                    $acte->setEpisode($episode);
                    $acte->setPrix($prix);
                    $em->persist($commande);
                    $em->persist($acte);
                }

            }else if(((bool)$tag['consultation']) == true){
                if($liste->getSociete() == null || $liste->getSociete()->getId()==15 ) {
                    $acte = new Facture;
                    $commande = new Commande();

                    $commande->addTarif($tar);
                    $commande->addTarif($tar1);
                    $prix = $tar->getPrix() + $tar1->getPrix();

                    $acte->addCommande($commande);
                    $episode->setPatient($liste);
                    $episode->setUtilisateur($user);
                    $em->persist($episode);
                    $acte->setEpisode($episode);
                    $acte->setPrix($prix);
                    $em->persist($commande);
                    $em->persist($acte);
                }else{
                    $acte = new Facture;
                    $commande = new Commande();

                    $commande->addTarif($tar);
                    $prix = 0;
                    $acte->addCommande($commande);
                    $episode->setPatient($liste);
                    $episode->setUtilisateur($user);
                    $em->persist($episode);
                    $acte->setEpisode($episode);
                    $acte->setPrix($prix);
                    $em->persist($commande);
                    $em->persist($acte);
                }
            }

            $em->flush();
            return $this->redirectToRoute('hostoo_sante_lesactesdupatientparepisode', array('id'=>$episode->getId()));
        }

        return $this->render('hostooSanteBundle:Patient:fichepatient.html.twig',array('actess'=>$actess,'patient'=>$liste,'form'=>$form->createView(),'episodes'=>$episodes));
    }

    public function ajouterParenteAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $parent= new Dependant;
        $patient=$em->getRepository('hostooSanteBundle:Patient')->find($id);

        $dependants=$em->getRepository('hostooSanteBundle:Dependant')->findByPatient($patient);
        //$parent->setTelephone($patient->getTelephone1());

        //  $parent->setMoi($patient);
        $formulaire=$this->get('form.factory')->create(DependantType::class,$parent);
        if($request->isMethod('POST')&& $formulaire->handleRequest($request))
        {
            $moipatient= new Patient();
            $moipatient=$parent->getMoi();
            $parent->setMoi($moipatient);
            $parent->setPatient($patient);
            $em->persist($parent);
            $em->persist($moipatient);
            $em->flush();
            return $this->redirect($this->generateUrl('hostoo_ajouter_parent',array('id'=>$id)));
        }
        return $this->render('hostooSanteBundle:Patient:ajouterparent.html.twig', array('dependants'=>$dependants,'patient'=>$patient,'form'=>$formulaire->createView(),));
    }

    /**
     *
     * @Route("/chargerCodes")
     */
    public function chargerCode()
    {
        $em=$this->getDoctrine()->getManager();
        $Feuil1 = array(
            array('CODE' => '100','id' => '1'),
            array('CODE' => '101','id' => '2'),
            array('CODE' => '102','id' => '3'),
            array('CODE' => '103','id' => '4'),
            array('CODE' => '104','id' => '5'),
            array('CODE' => '105','id' => '6'),
            array('CODE' => '106','id' => '7'),
            array('CODE' => '107','id' => '8'),
            array('CODE' => '108','id' => '9'),
            array('CODE' => '109','id' => '10'),
            array('CODE' => '110','id' => '11'),
            array('CODE' => '111','id' => '12'),
            array('CODE' => '112','id' => '13'),
            array('CODE' => '113','id' => '14'),
            array('CODE' => '114','id' => '15'),
            array('CODE' => '115','id' => '16'),
            array('CODE' => '116','id' => '17'),
            array('CODE' => '117','id' => '18'),
            array('CODE' => '118','id' => '19'),
            array('CODE' => '119','id' => '20'),
            array('CODE' => '120','id' => '21'),
            array('CODE' => '121','id' => '22'),
            array('CODE' => '122','id' => '23'),
            array('CODE' => '123','id' => '24'),
            array('CODE' => '124','id' => '25'),
            array('CODE' => '125','id' => '26'),
            array('CODE' => '126','id' => '27'),
            array('CODE' => '127','id' => '28'),
            array('CODE' => '128','id' => '29'),
            array('CODE' => '129','id' => '30'),
            array('CODE' => '130','id' => '31'),
            array('CODE' => '131','id' => '32'),
            array('CODE' => '132','id' => '33'),
            array('CODE' => '133','id' => '34'),
            array('CODE' => '134','id' => '35'),
            array('CODE' => '135','id' => '36'),
            array('CODE' => '136','id' => '37'),
            array('CODE' => '137','id' => '38'),
            array('CODE' => '138','id' => '39'),
            array('CODE' => '139','id' => '40'),
            array('CODE' => '140','id' => '41'),
            array('CODE' => '141','id' => '42'),
            array('CODE' => '142','id' => '43'),
            array('CODE' => '143','id' => '44'),
            array('CODE' => '144','id' => '45'),
            array('CODE' => '145','id' => '46'),
            array('CODE' => '146','id' => '47'),
            array('CODE' => '147','id' => '48'),
            array('CODE' => '148','id' => '49'),
            array('CODE' => '149','id' => '50'),
            array('CODE' => '150','id' => '51'),
            array('CODE' => '151','id' => '52'),
            array('CODE' => '152','id' => '53'),
            array('CODE' => '153','id' => '54'),
            array('CODE' => '154','id' => '55'),
            array('CODE' => '155','id' => '56'),
            array('CODE' => '156','id' => '57'),
            array('CODE' => '157','id' => '58'),
            array('CODE' => '158','id' => '59'),
            array('CODE' => '159','id' => '60'),
            array('CODE' => '160','id' => '61'),
            array('CODE' => '161','id' => '62'),
            array('CODE' => '162','id' => '63'),
            array('CODE' => '163','id' => '64'),
            array('CODE' => '164','id' => '65'),
            array('CODE' => '165','id' => '66'),
            array('CODE' => '166','id' => '67'),
            array('CODE' => '167','id' => '68'),
            array('CODE' => '168','id' => '69'),
            array('CODE' => '169','id' => '70'),
            array('CODE' => '170','id' => '71'),
            array('CODE' => '171','id' => '72'),
            array('CODE' => '172','id' => '73'),
            array('CODE' => '173','id' => '74'),
            array('CODE' => '174','id' => '75'),
            array('CODE' => '175','id' => '76'),
            array('CODE' => '176','id' => '77'),
            array('CODE' => '177','id' => '78'),
            array('CODE' => '178','id' => '79'),
            array('CODE' => '179','id' => '80'),
            array('CODE' => '180','id' => '81'),
            array('CODE' => '181','id' => '82'),
            array('CODE' => '182','id' => '83'),
            array('CODE' => '183','id' => '84'),
            array('CODE' => '184','id' => '85'),
            array('CODE' => '185','id' => '86'),
            array('CODE' => '186','id' => '87'),
            array('CODE' => '187','id' => '88'),
            array('CODE' => '188','id' => '89'),
            array('CODE' => '189','id' => '90'),
            array('CODE' => '190','id' => '91'),
            array('CODE' => '191','id' => '92'),
            array('CODE' => '192','id' => '93'),
            array('CODE' => '193','id' => '94'),
            array('CODE' => '194','id' => '95'),
            array('CODE' => '195','id' => '96'),
            array('CODE' => '196','id' => '97'),
            array('CODE' => '197','id' => '98'),
            array('CODE' => '198','id' => '99'),
            array('CODE' => '199','id' => '100'),
            array('CODE' => '200','id' => '101'),
            array('CODE' => '201','id' => '102'),
            array('CODE' => '202','id' => '103'),
            array('CODE' => '203','id' => '104'),
            array('CODE' => '204','id' => '105'),
            array('CODE' => '205','id' => '106'),
            array('CODE' => '206','id' => '107'),
            array('CODE' => '207','id' => '108'),
            array('CODE' => '208','id' => '109'),
            array('CODE' => '209','id' => '110'),
            array('CODE' => '210','id' => '111'),
            array('CODE' => '211','id' => '112'),
            array('CODE' => '212','id' => '113'),
            array('CODE' => '213','id' => '114'),
            array('CODE' => '214','id' => '115'),
            array('CODE' => '215','id' => '116'),
            array('CODE' => '216','id' => '117'),
            array('CODE' => '217','id' => '118'),
            array('CODE' => '218','id' => '119'),
            array('CODE' => '300','id' => '120'),
            array('CODE' => '301','id' => '121'),
            array('CODE' => '302','id' => '122'),
            array('CODE' => '303','id' => '123'),
            array('CODE' => '304','id' => '124'),
            array('CODE' => '305','id' => '125'),
            array('CODE' => '306','id' => '126'),
            array('CODE' => '307','id' => '127'),
            array('CODE' => '308','id' => '128'),
            array('CODE' => '309','id' => '129'),
            array('CODE' => '310','id' => '130'),
            array('CODE' => '311','id' => '131'),
            array('CODE' => '312','id' => '132'),
            array('CODE' => '313','id' => '133'),
            array('CODE' => '314','id' => '134'),
            array('CODE' => '315','id' => '135'),
            array('CODE' => '316','id' => '136'),
            array('CODE' => '317','id' => '137'),
            array('CODE' => '318','id' => '138'),
            array('CODE' => '319','id' => '139'),
            array('CODE' => '320','id' => '140'),
            array('CODE' => '321','id' => '141'),
            array('CODE' => '322','id' => '142'),
            array('CODE' => '323','id' => '143'),
            array('CODE' => '324','id' => '144'),
            array('CODE' => '325','id' => '145'),
            array('CODE' => '326','id' => '146'),
            array('CODE' => '327','id' => '147'),
            array('CODE' => '328','id' => '148'),
            array('CODE' => '329','id' => '149'),
            array('CODE' => '330','id' => '150'),
            array('CODE' => '331','id' => '151'),
            array('CODE' => '332','id' => '152'),
            array('CODE' => '333','id' => '153'),
            array('CODE' => '334','id' => '154'),
            array('CODE' => '400','id' => '155'),
            array('CODE' => '401','id' => '156'),
            array('CODE' => '402','id' => '157'),
            array('CODE' => '403','id' => '158'),
            array('CODE' => '404','id' => '159'),
            array('CODE' => '405','id' => '160'),
            array('CODE' => '406','id' => '161'),
            array('CODE' => '407','id' => '162'),
            array('CODE' => '408','id' => '163'),
            array('CODE' => '409','id' => '164'),
            array('CODE' => '410','id' => '165'),
            array('CODE' => '411','id' => '166'),
            array('CODE' => '412','id' => '167'),
            array('CODE' => '413','id' => '168'),
            array('CODE' => '414','id' => '169'),
            array('CODE' => '415','id' => '170'),
            array('CODE' => '416','id' => '171'),
            array('CODE' => '417','id' => '172'),
            array('CODE' => '418','id' => '173'),
            array('CODE' => '419','id' => '174'),
            array('CODE' => '420','id' => '175'),
            array('CODE' => '421','id' => '176'),
            array('CODE' => '422','id' => '177'),
            array('CODE' => '423','id' => '178'),
            array('CODE' => '424','id' => '179'),
            array('CODE' => '425','id' => '180'),
            array('CODE' => '426','id' => '181'),
            array('CODE' => '427','id' => '182'),
            array('CODE' => '428','id' => '183'),
            array('CODE' => '429','id' => '184'),
            array('CODE' => '430','id' => '185'),
            array('CODE' => '500','id' => '186'),
            array('CODE' => '501','id' => '187')
        );

        foreach ($Feuil1 as $f){
            $tar=$em->getRepository('hostooSanteBundle:Tarification')->find($f['id']);

            $tar->setCode($f['CODE']);
                $em->persist($tar);
            }

        $em->flush();
        }

}