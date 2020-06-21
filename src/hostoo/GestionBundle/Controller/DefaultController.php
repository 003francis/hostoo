<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\FormuleTarificationProprietaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function afficherProprietaireAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $proprietaire=$em->getRepository('hostooGestionBundle:Proprietaire')->find($id);
        $tarifs=$em->getRepository('hostooSanteBundle:Cattarifs')->leurConvention(1);
       // var_dump($tarifs); die('OK');
        $lesformules=$em->getRepository('hostooSanteBundle:Formule')->findAll();
        $mesformules=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->findBySociete($id);
        $formtab=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->groupeFormule($id);
        return $this->render('hostooGestionBundle:Proprietaire:afficher.html.twig',array(
            'proprietaire'=>$proprietaire,
            'tarifs'=>$tarifs,
            'formules'=>$lesformules,'checkforms'=>$mesformules,'formtab'=>$formtab
        ));
    }

    public function nbPatientsAction($societe, $formule)
    {
        $em=$this->getDoctrine()->getManager();
        $proprietaire=$em->getRepository('hostooSanteBundle:Patient')->findBy(['societe'=>$societe,'formule'=>$formule]);
        $lareponse=(string)count($proprietaire);
        return new Response($lareponse);
    }

    public function insererLesActesAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $leproprio=$em->getRepository('hostooGestionBundle:Proprietaire')->find($request->get('proprietaire'));
        $lesactes=$request->get('lesactes');

       if($request->isMethod('POST'))
       {
           $tt=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->findBySociete($request->get('proprietaire'));
           foreach ($tt as $testy) {
               $em->remove($testy);
           }
           $em->flush();
           if($lesactes != null)
           {
               foreach ($lesactes as $formule =>$formm)
               {

                   foreach ($formm as $value) {
                           //$test=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->findOneBy(array('societe'=>$leproprio,'formule'=>$formule,'acte'=>$value));

                           $ftp[$value]=new FormuleTarificationProprietaire();
                           $ftp[$value]->setSociete($leproprio);
                           $ftp[$value]->setFormule($em->getRepository('hostooSanteBundle:Formule')->find($formule));
                           $ftp[$value]->setActe($em->getRepository('hostooSanteBundle:Tarification')->find($value));
                           $em->persist($ftp[$value]);

                       }
                   }

               }
               //die('OK');
               $em->flush();
           }
        return $this->redirectToRoute('hostoo_gestion_prop',array('id'=>$request->get('proprietaire')));
    }

    /* $tt=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->findAll();
                      foreach ($tt as $v =>$vv){
                          if($vv !=null && !array_key_exists($vv->getFormule()->getId(),$lesactes)){
                              $em->remove($vv);
                          }
                      }
                      var_dump(array_values($formm));
                      //$em->flush();
                      var_dump($leproprio->getId());

                          foreach ($formule as $act =>$item){
                              $test=$em->getRepository('hostooGestionBundle:FormuleTarificationProprietaire')->findOneBy(array('societe'=>$leproprio,'formule'=>$formule,'acte'=>$item));
                                   if($test == null){


                                       var_dump($item );
                                       $ftp[$act]=new FormuleTarificationProprietaire();
                                       $ftp[$act]->setSociete($leproprio);
                                       $ftp[$act]->setFormule($em->getRepository('hostooSanteBundle:Formule')->find($formule));
                                       $ftp[$act]->setActe($em->getRepository('hostooSanteBundle:Tarification')->find($item));
                                       $em->persist($ftp[$act]);
                                   }

                          }*/

}
