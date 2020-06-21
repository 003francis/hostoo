<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/11/16
 * Time: 10:57 AM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\Commande;
use hostoo\SanteBundle\Entity\Facture;
use hostoo\SanteBundle\Entity\ListeSoins;
use hostoo\SanteBundle\Entity\Obsinf;
use hostoo\SanteBundle\Entity\RdvPatient;
use hostoo\SanteBundle\Entity\SignesVitaux;
use hostoo\SanteBundle\Form\ObsinfType;
use hostoo\SanteBundle\Form\SignesVitauxType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PrelevementController extends Controller
{
    public function listePrelevementsEveryAction()
    {
        $em=$this->getDoctrine()->getManager();

        $actes=$em->getRepository('hostooSanteBundle:Episode')->findAll();
        $lesactesinf=$em->getRepository('hostooSanteBundle:Tarification')->findBy(array('categories'=>array(4,5)));
        //$rdvpatient=$em->getRepository('hostooSanteBundle:RdvPatient')->findByEpisode($actes->getEpisode());
        return $this->render('hostooSanteBundle:Dispatcher:listepatientsevery.html.twig', array(/*'rdvc'=>$rdvpatient*/
        'episodes'=>$actes,
            'mesactes'=>$lesactesinf,
            ));
    }

    public function listePrelevementsAction()
    {
        $em=$this->getDoctrine()->getManager();

        $actes=$em->getRepository('hostooSanteBundle:Episode')->trouverDate(date('Y-m-d'));
        $lsoins=$em->getRepository('hostooSanteBundle:ListeSoins')->listeDesSoinsToday(date('Y-m-d'));
       // var_dump($lsoins); die('OK');
        $lesactesinf=$em->getRepository('hostooSanteBundle:Tarification')->findBy(array('categories'=>array(4,5)));
        //$rdvpatient=$em->getRepository('hostooSanteBundle:RdvPatient')->findByEpisode($actes->getEpisode());
        return $this->render('hostooSanteBundle:Dispatcher:listepatients.html.twig', array(/*'rdvc'=>$rdvpatient*/
            'episodes'=>$actes,
            'mesactes'=>$lesactesinf,
            'lsoins'=>$lsoins,
        ));
    }

    public function ajouterSVAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $signes= new SignesVitaux;
        $episode=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $form=$this->get('form.factory')->create(SignesVitauxType::class,$signes);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
           $signes->setEpisode($episode);
            $em->persist($signes);
            $em->flush();
            return $this->redirect($this->generateUrl('voirpatient_prel',array('id'=>$episode->getId())));
        }
        return $this->render('hostooSanteBundle:Dispatcher:prelevement.html.twig', array('episode'=>$episode,'form'=>$form->createView(),));
    }

    public function ajouterSVMedAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $signes= new SignesVitaux;
        $episode=$em->getRepository('hostooSanteBundle:Episode')->findOneById($id);
        $form=$this->get('form.factory')->create(SignesVitauxType::class,$signes);
        if($request->isXmlHttpRequest() && $form->handleRequest($request)){
            $signes->setEpisode($episode);
            $em->persist($signes);
            $em->flush();
            $items=array();

            foreach ($episode->getSv() as $Sv)
            {
                $items[]=array(
                    'temperature'=>$Sv->getTemperature(),
                    'poids'=>$Sv->getPoids(),
                    'taille'=>$Sv->getTaille(),
                    'tension'=>$Sv->getTension(),
                    'frequencecardiaque'=>$Sv->getFrequenceCardiaque(),
                    'frequencerespiratoire'=>$Sv->getFrequenceRespiratoire(),
                    'glycemiedextro'=>$Sv->getGlycemieDextro(),
                    'saturationoxygene'=>$Sv->getSaturationOxygene(),
                    'imc'=>$Sv->getImc(),
                    'pc'=>$Sv->getPc(),
                    'pb'=>$Sv->getPb(),
                    'pa'=>$Sv->getPa(),
                    'pp'=>$Sv->getPp(),
                    'wrh'=>$Sv->getWrh(),
                    'date'=>date_format($Sv->getDaterecolte(),'d-m-Y h:i:s'),
                );
            }
            //var_dump($items); die('ok');
            $reponse=new JsonResponse();
            return $reponse->setData(array('items'=>$items));
        }
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $signes->setEpisode($episode);
            $em->persist($signes);
            $em->flush();
            $items=array();
            foreach ($episode->getSv() as $Sv)
            {
                $items[]=array(
                    'temperature'=>$Sv->getTemperature(),
                    'poids'=>$Sv->getPoids(),
                    'taille'=>$Sv->getTaille(),
                    'tension'=>$Sv->getTension(),
                    'frequencecardiaque'=>$Sv->getFrequenceCardiaque(),
                    'frequencerespiratoire'=>$Sv->getFrequenceRespiratoire(),
                    'glycemiedextro'=>$Sv->getGlycemieDextro(),
                    'saturationoxygene'=>$Sv->getSaturationOxygene(),
                    'imc'=>$Sv->getImc(),
                    'pc'=>$Sv->getPc(),
                    'pb'=>$Sv->getPb(),
                    'pa'=>$Sv->getPa(),
                    'pp'=>$Sv->getPp(),
                    'wrh'=>$Sv->getWrh(),
                    'date'=>date_format($Sv->getDaterecolte(),'d-m-Y h:i:s'),
                );
            }
            //var_dump(json_encode($items)); die('ok');
            $reponse=new JsonResponse();
            return $reponse->setData(json_encode(array('items'=>$items)));
        }
        return $this->render('hostooSanteBundle:Dispatcher:prelevementmed.html.twig', array('episode'=>$episode,'form'=>$form->createView(),));
    }

    public function tousRDVAction(Request $request){
        $daterdv=date_format(new \DateTime('now'),'Y-m-d');
        $em=$this->getDoctrine()->getManager();
        $patient=$em->getRepository('hostooSanteBundle:Episode')->find($request->get('episode'));


        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->parLaDate($daterdv);

        return $this->render('hostooSanteBundle:Dispatcher:rdvsmed.html.twig', array('patient'=>$patient,'rdvs'=>$rdvdoctor));
    }

    public function attribuerRDVAction(Request $request,$id,$episode){
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $rdvpatient= new RdvPatient;
        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->find($id);
        $patient=$em->getRepository('hostooSanteBundle:Episode')->find($episode);
        $datenow= new \DateTime('now');
        $rdd=$em->getRepository('hostooSanteBundle:RdvPatient')->findOneByEpisode($episode);
        if($rdd){
            throw $this->createNotFoundException('Le patient est déjà attribué');
        }
            $rdvpatient->setEpisode($patient);
            $rdvpatient->setRdv($rdvdoctor);
            $rdvpatient->setValid(true);
            $em->persist($rdvpatient);
            $em->flush();
            //$session->remove('patient');
        return $this->redirectToRoute('hostoo_rdv_medecinrdv', array('episode'=>$patient->getId()));
        //return $this->render('hostooSanteBundle:Dispatcher:attribuerrdv.html.twig', array('rdv'=>$rdvdoctor,'datenow'=>$datenow,'form'=>$form->createView(),));
    }

    public function attribuerRDVMedAction(Request $request,$id,$episode){
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $rdvpatient= new RdvPatient;
        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->find($id);
        $patient=$em->getRepository('hostooSanteBundle:Episode')->find($episode);
        $datenow= new \DateTime('now');
        $rdd=$em->getRepository('hostooSanteBundle:RdvPatient')->findOneByEpisode($episode);
        if($rdd){
            throw $this->createNotFoundException('Le patient est déjà attribué');
        }
        $rdvpatient->setEpisode($patient);
        $rdvpatient->setRdv($rdvdoctor);
        $rdvpatient->setValid(true);
        $em->persist($rdvpatient);
        $em->flush();
        //$session->remove('patient');
        return $this->redirectToRoute('hostoo_rdv_medecinrdv', array('episode'=>$patient->getId()));
        //return $this->render('hostooSanteBundle:Dispatcher:attribuerrdv.html.twig', array('rdv'=>$rdvdoctor,'datenow'=>$datenow,'form'=>$form->createView(),));
    }

    public function oterRDVAction($id,$episode)
    {
        $em=$this->getDoctrine()->getManager();
        $rdv=$em->getRepository('hostooSanteBundle:Rdv')->find($id);
        $rdvpatient=$em->getRepository('hostooSanteBundle:RdvPatient')->findOneByEpisode($episode);
        $patient=$em->getRepository('hostooSanteBundle:Episode')->find($episode);
        $em->remove($rdvpatient);
        $em->flush();
        return $this->redirectToRoute('hostoo_rdv_medecinrdv', array('episode'=>$patient->getId()));

    }

    public function recupererActesAction(Request $request)
    {
        $str="";
        $user=$this->getUser();
        $em=$this->getDoctrine()->getManager();
        $epi=$em->getRepository('hostooSanteBundle:Episode')->find($request->get('episode'));
        $tarif=$em->getRepository('hostooGestionBundle:Tarif')->findArray(array_values($request->get('country')),$epi->getPatient()->getSociete()->getConvention());
        //$epi=$em->getRepository('hostooSanteBundle:Episode')->find($request->get('episode'));
        $liste=$epi->getPatient();
        if($request->isMethod('POST')&& $request->get('country')!=null) {
            $prix = 0;
            $acte = new Facture;
            $cmd = new Commande();
        foreach ($tarif as $tar){
            if ($epi) {

                $cmd->addTarif($tar);
                $acte->setEpisode($epi);
                $formule=$em->getRepository('hostooGestionBundle:FormuleTarification')->findBy(array('formule'=>$epi->getPatient()->getFormule(),'acte'=>$tar));
               if(!$formule){
                $prix += $tar->getPrix();
               }

                $epi->setPatient($liste);
                $epi->setUtilisateur($user);

                $em->persist($epi);
                //var_dump($acte);

            }
        }
        $acte->addCommande($cmd);
            $em->persist($cmd);
            $acte->setPrix($prix);
            $acte->setEpisode($epi);
            $em->persist($acte);
            $em->flush();
        }
            return $this->redirect($this->generateUrl('voirpatient_prel',array('id'=>$epi->getId())));
    }

    public function voirPatientAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $episode=$em->getRepository('hostooSanteBundle:Episode')->find($id);
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->findByEpisode($id);
        $facts=$em->getRepository('hostooSanteBundle:Facture')->findByEpisode($id);
        $obs=$em->getRepository('hostooSanteBundle:Obsinf')->findAll($id);
        if (@count($episode->getListesoins())==0){
            $liste=new ListeSoins();
            $liste->setEpisode($episode);
            $em->persist($liste);
            $em->flush();
        }

        $lesactesinf=$em->getRepository('hostooSanteBundle:Tarification')->findBy(array('categories'=>array(4,5)));

        return $this->render('hostooSanteBundle:Dispatcher:voirpatient.html.twig', array(
            'episode'=>$episode,
            'mesactes'=>$lesactesinf,
            'ordos'=>$ordos,
            'facts'=>$facts,'obs'=>$obs,

            ));
    }

    public function newObsInfAction(Request $request,$fact,$act)
    {
        $em=$this->getDoctrine()->getManager();
        $obs=$em->getRepository('hostooSanteBundle:Obsinf')->findOneBy(array('facture'=>$fact,
                                                                                'acte'=>$act));
        if($obs == null){
        $obs=new Obsinf();
            $obs->setActe($em->getRepository('hostooSanteBundle:Tarification')->find($act));
            $obs->setFacture($em->getRepository('hostooSanteBundle:Facture')->find($fact));
        }
        $form=$this->get('form.factory')->create(ObsinfType::class, $obs);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $em->persist($obs);
            $em->flush();
            return $this->redirectToRoute('voirpatient_prel',array('id'=>$em->getRepository('hostooSanteBundle:Facture')->find($fact)->getEpisode()));
        }

        return $this->render('hostooSanteBundle:Dispatcher:obsinf.html.twig', array(
            'form'=>$form->createView(),'obs'=>$obs,
            'fact'=>$fact,'act'=>$act,
        ));
    }

    public function afficherObservationAction($fact,$act)
    {
        $em = $this->getDoctrine()->getManager();
        $obs = $em->getRepository('hostooSanteBundle:Obsinf')->findOneBy(array('facture' => $fact,
            'acte' => $act));
        return ($obs)?new Response($obs->getObservation()):new Response('Pas d\'observation');
    }
}
