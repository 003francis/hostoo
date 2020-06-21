<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/9/16
 * Time: 9:03 AM
 */

namespace hostoo\SanteBundle\Controller;

use Doctrine\ORM\NoResultException;
use hostoo\SanteBundle\Entity\Rdv;
use hostoo\SanteBundle\Entity\RdvPatient;
use hostoo\SanteBundle\Form\RdvPatientType;
use hostoo\SanteBundle\Form\RdvType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RDVController extends Controller
{
    public function creerUnRDVAction(Request $request)
    {
        $rdv= new Rdv;
        $em=$this->getDoctrine()->getManager();
        //$um=$this->get('fos_user.user_manager');
        $medecin=$this->getUser();

        $liste=$em->getRepository('hostooSanteBundle:Rdv')->findBy(array('medecin'=>$medecin->getId()));
        $form=$this->get('form.factory')->create(RdvType::class,$rdv);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $rdv->setMedecin($medecin);
            $em->persist($rdv);
            $em->flush();
            return $this->redirectToRoute('hostoo_sante_createrdv');
        }
        return $this->render('hostooSanteBundle:Medecin:medecinrdv.html.twig', array('form'=>$form->createView(),'liste'=>$liste));
    }

    public function creerUnRDVPatientAction(Request $request)
    {
        $rdv= new Rdv;
        $em=$this->getDoctrine()->getManager();
        $um=$this->get('fos_user.user_manager');

        $medecins=$em->getRepository('hostooUserBundle:Utilisateur')->findAll();
        $patients=$em->getRepository('hostooSanteBundle:Episode')->patientsEnAttente(new \DateTime(date('Y-m-d')));
        $liste=$em->getRepository('hostooSanteBundle:Rdv')->findByDaterdv(new \DateTime(date('Y-m-d')));
        $form=$this->get('form.factory')->create(RdvType::class,$rdv);
        /*foreach ($medecins as $medi)
        {
            var_dump($medi->getRoles());
        }
        die('Ok');*/
        //var_dump($patients); die('patients');
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $test=$em->getRepository('hostooSanteBundle:Rdv')->rdvMedparLaDate($request->get('medecin'),date('Y-m-d'));
            //var_dump($test);
            if($test != null){
                $this->createNotFoundException('Le Médecin est déjà présent');
            }else{
                $medecin=$em->getRepository('hostooUserBundle:Utilisateur')->find($request->get('medecin'));
                $rdv->setMedecin($medecin);
                $em->persist($rdv);
                $em->flush();
                return $this->redirectToRoute('hostoo_sante_creerdv');
            }

        }
        return $this->render('hostooSanteBundle:Patient:medecinrdv.html.twig', array('form'=>$form->createView(),'liste'=>$liste,'meds'=>$medecins,'pats'=>$patients));
    }

    public function attribuerAuMedAction(Request $request){
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();

        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->find($request->get('rdv'));
        //$form=$this->get('form.factory')->create(RdvPatientType::class, $rdvpatient);
        $datenow= new \DateTime('now');

        if($request->isMethod('POST'))
        {
            $n=0;
           $patient=$em->getRepository('hostooSanteBundle:Episode')->findArray($request->get('patients'));
            foreach ($patient as $pat){
                $rdvpatient[$n]= new RdvPatient;
                $rdvdoctor->setNbrepatients($rdvdoctor->getNbrepatients()+1);
                $rdvpatient[$n]->setEpisode($pat);
                $rdvpatient[$n]->setRdv($rdvdoctor);
                $rdvpatient[$n]->setValid(true);
                $em->persist($rdvpatient[$n]);
                $n++;
                $em->flush();
            }

            //$session->remove('patient');
            return $this->redirect($this->generateUrl('hostoo_sante_creerdv'));
        }
       // return $this->render('hostooSanteBundle:RDV:attribuerrdv.html.twig', array('rdv'=>$rdvdoctor,'datenow'=>$datenow,'form'=>$form->createView(),));
    }

    public function creerUnRDVPatientdAction(Request $request)
    {
        $rdv= new Rdv;
        $em=$this->getDoctrine()->getManager();
        $um=$this->get('fos_user.user_manager');

        $medecins=$em->getRepository('hostooUserBundle:Utilisateur')->findAll();
        $patients=$em->getRepository('hostooSanteBundle:Episode')->patientsEnAttente(new \DateTime(date('Y-m-d')));
        $liste=$em->getRepository('hostooSanteBundle:Rdv')->findByDaterdv(new \DateTime(date('Y-m-d')));
        $form=$this->get('form.factory')->create(RdvType::class,$rdv);
        /*foreach ($medecins as $medi)
        {
            var_dump($medi->getRoles());
        }
        die('Ok');*/
        //var_dump($patients); die('patients');
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $medecin=$em->getRepository('hostooUserBundle:Utilisateur')->find($request->get('medecin'));
            $rdv->setMedecin($medecin);
            $em->persist($rdv);
            $em->flush();
            return $this->redirectToRoute('hostoo_sante_creerdvd');
        }
        return $this->render('hostooSanteBundle:Patient:medecinrdvd.html.twig', array('form'=>$form->createView(),'liste'=>$liste,'meds'=>$medecins,'pats'=>$patients));
    }

    public function attribuerAuMeddAction(Request $request){
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();

        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->find($request->get('rdv'));
        //$form=$this->get('form.factory')->create(RdvPatientType::class, $rdvpatient);
        $datenow= new \DateTime('now');

        if($request->isMethod('POST'))
        {
            $n=0;
            $patient=$em->getRepository('hostooSanteBundle:Episode')->findArray($request->get('patients'));
            foreach ($patient as $pat){
                $rdvpatient[$n]= new RdvPatient;
                $rdvdoctor->setNbrepatients($rdvdoctor->getNbrepatients()+1);
                $rdvpatient[$n]->setEpisode($pat);
                $rdvpatient[$n]->setRdv($rdvdoctor);
                $rdvpatient[$n]->setValid(true);
                $em->persist($rdvpatient[$n]);
                $n++;
                $em->flush();
            }

            //$session->remove('patient');
            return $this->redirect($this->generateUrl('hostoo_sante_creerdvd'));
        }
        // return $this->render('hostooSanteBundle:RDV:attribuerrdv.html.twig', array('rdv'=>$rdvdoctor,'datenow'=>$datenow,'form'=>$form->createView(),));
    }

    public function tousRDVAction(){
        $em=$this->getDoctrine()->getManager();
        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->findAll();
        return $this->render('hostooSanteBundle:RDV:toutrdv.html.twig', array('liste'=>$rdvdoctor));
    }

    public function patientsEnAttenteAction(){
        $em=$this->getDoctrine()->getManager();
        $rdvdoctor=null;
        //$um=$this->get('fos_user.user_manager');
        $medecin=$this->getUser();

        $rdvdoctor=$em->getRepository('hostooSanteBundle:Rdv')->rdvMedparLaDate($medecin,date('Y-m-d'));
        $recus=$em->getRepository('hostooSanteBundle:Rdv')->rdvMedparLaDateOk($medecin,date('Y-m-d'));

            //var_dump($rdvdoctor); die('ok');
        return $this->render('hostooSanteBundle:Medecin:medecinaccueil.html.twig', array('liste'=>$rdvdoctor,'recus'=>$recus));
    }

    public function patientsRdvsAction(){
        $em=$this->getDoctrine()->getManager();
        //$rdvdoctor=null;
//        $um=$this->get('fos_user.user_manager');
        $medecin=$this->getUser();

            $rdvdoctor=$em->getRepository('hostooSanteBundle:RdvPatient')->rdvMed($medecin->getId());

        //
        //var_dump($rdvdoctor); die('ok');
        return $this->render('hostooSanteBundle:Medecin:patientsrecus.html.twig', array('liste'=>$rdvdoctor));
    }
}