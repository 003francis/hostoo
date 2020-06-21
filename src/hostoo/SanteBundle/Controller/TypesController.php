<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/1/16
 * Time: 10:37 PM
 */

namespace hostoo\SanteBundle\Controller;

use hostoo\GestionBundle\Entity\FormuleProduit;
use hostoo\GestionBundle\Entity\FormuleTarification;
use hostoo\SanteBundle\Entity\Formule;
use hostoo\SanteBundle\Entity\TypeClient;
use hostoo\SanteBundle\Form\FormuleType;
use hostoo\SanteBundle\Form\TypeClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

;

class TypesController extends Controller
{
    public function ajouterTCAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:TypeClient')->findAll();
        $patient = new TypeClient;
        $form=$this->get('form.factory')->create(TypeClientType::class, $patient);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {


                $em->persist($patient);
                $em->flush();
                return $this->redirectToRoute('hostoo_sante_addtypeclient');

        }
        return $this->render('hostooSanteBundle:Types:typesclients.html.twig',array('form'=>$form->createView(),'tcs'=>$liste,));
    }

    public function ajouterFormuleAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Formule')->findAll();
        $tarifs=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $cats=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        $formule = new Formule;
        $form=$this->get('form.factory')->create(FormuleType::class, $formule);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $tar='';
            if($request->get('prod')){
            foreach ($request->get('prod') as $prod)
            {
                $prodv=$em->getRepository('hostooPharmacieBundle:Produit')->find($prod);
                if($prodv){
                $formule->addProduit($prodv);
                }
            }
            }
            if($request->get('tarif')) {
                foreach ($request->get('tarif') as $tart) {
                    $tarifv = $em->getRepository('hostooSanteBundle:Tarification')->find($tart);
                    $formule->addTarif($tarifv);
                }
            }
                $em->persist($formule);
                $em->flush();
                return $this->redirectToRoute('hostoo_sante_addformule');
        }
        return $this->render('hostooSanteBundle:Types:formules.html.twig',array('form'=>$form->createView(),'tcs'=>$liste,'tarifs'=>$tarifs,'produits'=>$produits,'cats'=>$cats));
    }

    public function EditionFormuleAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Formule')->findAll();
        $tarifs=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $formulecoches=$em->getRepository('hostooGestionBundle:FormuleTarification')->findAll();
        $formulecochesprod=$em->getRepository('hostooGestionBundle:FormuleProduit')->findAll();
        $cats=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $produits=$em->getRepository('hostooPharmacieBundle:Cattheura')->findAll();
                                                                                                                                                                                                                                                                                            
        if($request->isMethod('POST') || $request->isXmlHttpRequest())
        {

            $testcochetout=$em->getRepository('hostooGestionBundle:FormuleTarification')->findBy(array());

            //var_dump($testcochetout);

            $n=0;
            if($request->get('prod')!= null) {
                $mes = $request->get('prod');
                /* supprimer les cases non cochEs */
                foreach ($testcochetout as $test) {
                    foreach ($mes as $prod => $value) {
                        foreach ($value as $valu => $item) {

                            if ($test->getFormule()->getId() != $prod && $test->getActe()->getId() != $valu) {
                                $em->remove($test);

                            }
                        }
                    }
                }
                $em->flush();
                foreach ($mes as $prod => $value) {

                    foreach ($value as $valu => $item) {

                        if (null == $em->getRepository('hostooGestionBundle:FormuleTarification')->findOneBy(array('formule' => $prod, 'acte' => $item))) {
                            $fortar[$n] = new FormuleTarification();
                            $form = $em->getRepository('hostooSanteBundle:Formule')->find($prod);
                            $tari = $em->getRepository('hostooSanteBundle:Tarification')->find($item);
                            $fortar[$n]->setFormule($form);
                            $fortar[$n]->setActe($tari);
                            $em->persist($fortar[$n]);
                            $n++;
                        }
                    }
                    $em->flush();

                }
                $em->flush();
            }
                //pharmacie
            $testcochetout2=$em->getRepository('hostooGestionBundle:FormuleProduit')->findBy(array());
                $t=0;
                if($request->get('phar')!= null) {
                    $mes = $request->get('phar');
                    //var_dump($mes);die('OK');
                    /* supprimer les cases non cochEs */
                    if($testcochetout2){
                        foreach ($testcochetout2 as $test) {
                                foreach ($mes as $prod => $value) {
                                    foreach ($value as $valu => $item) {

                                        if ($test->getFormule()->getId() != $prod && $test->getProduit()->getId() != $valu) {
                                            $em->remove($test);

                                        }
                                    }
                                }

                    }}
                    $em->flush();
                    foreach ($mes as $prod => $value) {

                        foreach ($value as $valu => $item) {

                            if (null == $em->getRepository('hostooGestionBundle:FormuleProduit')->findOneBy(array('formule' => $prod, 'produit' => $item))) {
                                $fortar[$t] = new FormuleProduit();
                                $form = $em->getRepository('hostooSanteBundle:Formule')->find($prod);
                                $tari = $em->getRepository('hostooPharmacieBundle:Produit')->find($item);
                                $fortar[$t]->setFormule($form);
                                $fortar[$t]->setProduit($tari);
                                $em->persist($fortar[$t]);
                                $n++;
                            }
                        }
                        $em->flush();

                    }
                    $em->flush();
                }

                return $this->redirectToRoute('hostoo_sante_editionformule');
        }
        return $this->render('hostooSanteBundle:Types:editionformules.html.twig',array('tcs'=>$liste,'tarifs'=>$tarifs,'produits'=>$produits,'cats'=>$cats,'formulecoche'=>$formulecoches,'formulecocheprod'=>$formulecochesprod));
    }
    public function ModifierFormuleAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $liste=$em->getRepository('hostooSanteBundle:Formule')->findAll();
        $tarifs=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $cats=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        //$formule = $em->getRepository('hostooSanteBundle:Formule')->find($id);
        //$form=$this->get('form.factory')->create(FormuleType::class, $formule);
        if($request->isMethod('POST'))
        {

            $tar='';

            foreach ($request->get('prod') as $prod)
            {
                $prodv=$em->getRepository('hostooPharmacieBundle:Produit')->find($prod);
                //$formule->addProduit($prodv);
            }

            foreach ($request->get('tarif') as $tart){
                $tarifv=$em->getRepository('hostooSanteBundle:Tarification')->find($tart);
                //$formule->addTarif($tarifv);
            }

           // $em->persist($formule);
            //$em->flush();
            return $this->redirectToRoute('hostoo_sante_addformule');
        }



        return $this->render('hostooSanteBundle:Types:formules.html.twig',array('form'=>$form->createView(),'tcs'=>$liste,'tarifs'=>$tarifs,'produits'=>$produits,'cats'=>$cats));
    }


}