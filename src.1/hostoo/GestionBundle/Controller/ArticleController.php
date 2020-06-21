<?php

namespace hostoo\GestionBundle\Controller;

use hostoo\GestionBundle\Entity\CaractProduit;
use hostoo\GestionBundle\Form\CaractProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\GestionBundle\Entity\Article;
use hostoo\GestionBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('hostooGestionBundle:Article')->findByService($this->getUser()->getService());

        if(in_array('ROLE_CAISSIER',$this->getUser()->getRoles())){
            $articles = $em->getRepository('hostooGestionBundle:Article')->findAll();
        }


        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('hostooGestionBundle:Article')->findByService($this->getUser()->getService());

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();

        $form = ($this->isGranted('ROLE_CAISSIER'))?$this->createForm('hostoo\GestionBundle\Form\ArticleType', $article):$this->createForm('hostoo\GestionBundle\Form\ArticleAutreType', $article);
        $form->handleRequest($request);
        $car=new CaractProduit();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $article->setProdstock($car);
            $article->setService($this->getUser()->getService());
            $car->setArticle($article);
            $em->persist($car);
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('req_article_show', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($article);
        $carprod=$em->getRepository('hostooGestionBundle:CaractProduit')->findOneByArticle($article);
        if($carprod==null){
            $carprod=new CaractProduit();
            $carprod->setArticle($article);
        }
        $formstock=$this->get('form.factory')->create(CaractProduitType::class,$carprod);
        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
            'stockprod'=>$formstock->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('hostoo\GestionBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('req_article_show', array('id' => $article->getId()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('req_article_index');
    }

    /**
     * Creates a form to delete a Article entity.
     *
     * @param Article $article The Article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('req_article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Correction du Stock de produit
     */
    public function corrigerStockProduitAction(Request $request,$id)
    {

    }
}
