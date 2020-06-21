<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 11/24/16
 * Time: 1:02 PM
 */

namespace hostoo\PharmacieBundle\Controller;

use hostoo\GestionBundle\Entity\Logutilisateurs;
use hostoo\PharmacieBundle\Entity\Cattheura;
use hostoo\PharmacieBundle\Entity\Nature;
use hostoo\PharmacieBundle\Entity\Produit;
use hostoo\PharmacieBundle\Entity\Stock;
use hostoo\PharmacieBundle\Entity\StockTot;
use hostoo\PharmacieBundle\Form\CattheuraType;
use hostoo\PharmacieBundle\Form\NatureType;
use hostoo\PharmacieBundle\Form\ProduitEditType;
use hostoo\PharmacieBundle\Form\ProduitType;
use hostoo\PharmacieBundle\Form\StockType;
use hostoo\SanteBundle\Entity\Ordonnance;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;

class PharmacieController extends Controller
{
    public function indexAction(Request $request)
    {

        $session = $request->getSession();
        $stock=new Stock();

        if (!$session->has('medic')) $session->set('medic', array());
        $em=$this->getDoctrine()->getManager();
        $form=$this->get('form.factory')->create(StockType::class,$stock);
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->findByValider(true);
        $produittab=$em->getRepository('hostooPharmacieBundle:Produit')->findArray(array_keys($session->get('medic')));
        return $this->render('hostooPharmacieBundle:Pharmacie:index.html.twig', array(
            'ordonnances'=>$ordos,'produits'=>$produits,'medic'=>$session->get('medic'),'items'=>$produittab,
        'form'=>$form->createView(),
        ));
    }
    public function ajouterProduitAction(Request $request)
    {
        $produit = new Produit();
        $form=$this->get('form.factory')->create(ProduitType::class,$produit);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_produit',array('id'=>$produit->getId()));
        }
        return $this->render('hostooPharmacieBundle:Pharmacie:ajouterproduit.html.twig',array('form'=>$form->createView()));
    }

    public function modifierProduitAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit = $em->getRepository('hostooPharmacieBundle:Produit')->find($id);
        $form=$this->get('form.factory')->create(ProduitEditType::class,$produit);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_produit',array('id'=>$id));
        }
        return $this->render('hostooPharmacieBundle:Pharmacie:modifproduit.html.twig',array('form'=>$form->createView(),'produit'=>$produit));
    }

    public function ajouterCattAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit = new Cattheura();
        $catts=$em->getRepository('hostooPharmacieBundle:Cattheura')->findAll();
        $form=$this->get('form.factory')->create(CattheuraType::class,$produit);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_ajoutercatt');
        }
        return $this->render('hostooPharmacieBundle:Pharmacie:ajoutercatt.html.twig',array('catts'=>$catts,'form'=>$form->createView()));
    }

    public function ajouterNatureAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit = new Nature();
        $catts=$em->getRepository('hostooPharmacieBundle:Nature')->findAll();
        $form=$this->get('form.factory')->create(NatureType::class,$produit);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {

            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_ajouternature');
        }
        return $this->render('hostooPharmacieBundle:Pharmacie:ajouternature.html.twig',array('nature'=>$catts,'form'=>$form->createView()));
    }

    public function ajusterStockAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('hostooPharmacieBundle:Produit')->find($id);
        $journal=new Logutilisateurs();

            if($produit->getStocktot() == null){
                $stocktot= new StockTot();
                if($produit->enDetails()==null ||$produit->enDetails()==0)
                {
                    throw $this->createNotFoundException("Definissez l\'Unité ou le nombre unitaire du produit");
                }
                $stocktot->setQte($request->get('laqte'));
                $produit->setStocktot($stocktot);
                $em->persist($stocktot);
            }else{
                $produit->getStocktot()->setQte($request->get('laqte'));
            }
            $texte="Correction du produit".$produit->getNom()." Qté ".$request->get('laqte')."par :".$this->getUser()->getNom()."-".$this->getUser()->getPostnom();
            $journal->setResume($texte)->setAuteur($this->getUser());
            $em->persist($journal);
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_produit',array('id'=>$id));

    }

    public function ajouterStockAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $stock = new Stock();
        $produit=$em->getRepository('hostooPharmacieBundle:Produit')->find($id);
        //$stocktot=$em->getRepository('hostooPharmacieBundle:StockTot')->findOneBy(array('produit'=>$produit));
        $form=$this->get('form.factory')->create(StockType::class,$stock);
        if($request->isMethod('POST') && $form->handleRequest($request))
        {
            if($produit->getStocktot() == null){
                $stocktot= new StockTot();
                if($produit->enDetails()==null ||$produit->enDetails()==0)
                {
                    throw $this->createNotFoundException("Definissez l\'Unité ou le nombre unitaire du produit");
                }
                $stocktot->setQte($stocktot->getQte()+($stock->getQte()*$produit->enDetails()));
                $produit->setStocktot($stocktot);
                $em->persist($stocktot);
            }else{
                $produit->getStocktot()->setQte($produit->getStocktot()->getQte()+($stock->getQte()*$produit->enDetails()));
            }
            $stock->setProduitIn($produit);
            $stock->setAuteur($this->getUser());
            $em->persist($stock);
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('hp_produit',array('id'=>$id));
        }
        return $this->render('hostooPharmacieBundle:Pharmacie:ajouterstock.html.twig',array('form'=>$form->createView(),'id'=>$produit->getId()));
    }

    public function listeProduitsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        return $this->render('hostooPharmacieBundle:Pharmacie:liste.html.twig',array('produits'=>$produits));
    }

    public function voirProduitAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->find($id);
        //$stock=$em->getRepository('hostooPharmacieBundle:StockTot')->findOneByProduit($produits);
        return $this->render('hostooPharmacieBundle:Pharmacie:produit.html.twig',array('produit'=>$produits));
    }

    public function ajouterItemAction(Request $request,$id)
    {
        if($request->isMethod('POST')){
        $session = $request->getSession();

        if (!$session->has('medic')) $session->set('medic', array());
        $medic = $session->get('medic');
        //$tab=$request->get('my-checkbox');
        if (array_key_exists($id, $medic)) {
            if ($request->get('qte') != null) $medic[$id] = $request->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Produit existe deja');
        } else {
            if ($request->get('qte') != null)
                $medic[$id] = $request->get('qte');
            else
                $medic[$id] = 1;

            $this->get('session')->getFlashBag()->add('success', 'Produit ajouté avec succès');
        }

        $session->set('medic', $medic);

        }
        return $this->redirect($this->generateUrl('hostoo_phar_dash'));

    }

    public function supprimerItemAction(Request $request,$id)
    {
        $session = $request->getSession();
        $medic = $session->get('medic');

        if (array_key_exists($id, $medic))
        {
            unset($medic[$id]);
            $session->set('medic',$medic);
            if(is_null($medic)){
                $session->clear();
            }
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
            return $this->redirect($this->generateUrl('hostoo_phar_dash'));
        }
    }

    public function annulerItemsAction(Request $request)
    {
        $session=$request->getSession();
        $session->remove('medic');
        //if (!$session->has('medic'))$session->set('medic', array());
        return $this->redirect($this->generateUrl('hostoo_phar_dash'));
    }

    public function listeOrdonnancesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->findAll();
    }

    public function livrerProduitsAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->find($id);
        foreach ($ordos->getPosologie() as $poso)
        {
            $stockproduit=$em->getRepository('hostooPharmacieBundle:Produit')->findOneById($poso->getProduit());
            /* prelever le stock */
            $stockproduit->getStocktot()->setQte($stockproduit->getStocktot()->getQte()-$poso->getQte());
            $em->persist($stockproduit);
        }
        $ordos->setPar($this->getUser());
        $ordos->setLivre(true);
        $em->persist($ordos);
        $em->flush();
        return $this->redirect($this->generateUrl('hostoo_phar_dash').'#tabr2');
    }

    public function TBPharmacieAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        $stocks=$em->getRepository('hostooPharmacieBundle:Stock')->findAll();
        $ordos=$em->getRepository('hostooSanteBundle:Ordonnance')->findAll();
        return $this->render('hostooPharmacieBundle:Pharmacie:tb.html.twig',array(
            'produits'=>$produits,
            'stocks'=>$stocks,
            'ordos'=>$ordos));
    }

    public function stockEtaTAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('hostooPharmacieBundle:Produit')->findAll();
        foreach ($produits as $i=>$produit)
        {
            $stock[$i]=new StockTot();
            $produit->setStocktot($stock[$i]);
            $em->persist($stock[$i]);
            $em->persist($produit);

        }
        $em->flush();
        return $this->redirectToRoute('hostoo_phar_dash');
    }

    public function rapportsAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $journaux=$em->getRepository('hostooPharmacieBundle:Stock')->findByDatestock(new \DateTime('today'));

        if($request->isMethod('POST'))
        {
            $datea=$request->get('datea');
            $dateb=$request->get('dateb');
            $journaux=$em->getRepository('hostooPharmacieBundle:Stock')->intervalleStock($datea,$dateb);
        }
        return $this->render('hostooPharmacieBundle:Rapport:rapport.html.twig',
            array('journaux'=>$journaux));
    }


    public function rapportsConsoAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $journaux=$em->getRepository('hostooSanteBundle:Posologie')->consoStock(date('Y-m-d'));

        if($request->isMethod('POST'))
        {
            $datea=$request->get('datea');
            $dateb=$request->get('dateb');
            $journaux=$em->getRepository('hostooSanteBundle:Posologie')->intervalleStock($datea,$dateb);
        }
        return $this->render('hostooPharmacieBundle:Rapport:rapport_conso.html.twig',
            array('journaux'=>$journaux));
    }

    public function importerLesProduitAction()
    {

    }
}