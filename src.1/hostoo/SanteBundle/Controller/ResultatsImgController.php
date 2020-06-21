<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\ResultatsImg;
use hostoo\SanteBundle\Form\ResultatsImgType;

/**
 * ResultatsImg controller.
 *
 * @Route("/resultatsimg")
 */
class ResultatsImgController extends Controller
{
    /**
     * Lists all ResultatsImg entities.
     *
     * @Route("/", name="resultatsimg_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resultatsImgs = $em->getRepository('hostooSanteBundle:ResultatsImg')->findAll();

        return $this->render('resultatsimg/index.html.twig', array(
            'resultatsImgs' => $resultatsImgs,
        ));
    }

    /**
     * Creates a new ResultatsImg entity.
     *
     * @Route("/new", name="resultatsimg_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $resultatsImg = new ResultatsImg();
        $form = $this->createForm('hostoo\SanteBundle\Form\ResultatsImgType', $resultatsImg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resultatsImg);
            $em->flush();

            return $this->redirectToRoute('resultatsimg_show', array('id' => $resultatsImg->getId()));
        }

        return $this->render('resultatsimg/new.html.twig', array(
            'resultatsImg' => $resultatsImg,
            'form' => $form->createView(),
        ));
    }
//
//    /**
//     * Finds and displays a ResultatsImg entity.
//     *
//     * @Route("/{id}", name="resultatsimg_show")
//     * @Method("GET")
//     */
//    public function showAction(ResultatsImg $resultatsImg)
//    {
//        $deleteForm = $this->createDeleteForm($resultatsImg);
//
//        return $this->render('resultatsimg/show.html.twig', array(
//            'resultatsImg' => $resultatsImg,
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Displays a form to edit an existing ResultatsImg entity.
     *
     * @Route("/{id}/edit", name="resultatsimg_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $resultatsImg=$em->getRepository('hostooSanteBundle:ResultatsImg')->findOneById($id);
        $resultatsImg->setFichier(null);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\ResultatsImgType', $resultatsImg);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($resultatsImg);
            $em->flush();

            return $this->redirectToRoute('resultatsimg_edit', array('id' => $resultatsImg->getId()));
        }

        return $this->render('resultatsimg/edit.html.twig', array(
            'resultatsImg' => $resultatsImg,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a ResultatsImg entity.
     *
     * @Route("/{id}", name="resultatsimg_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ResultatsImg $resultatsImg)
    {
        $form = $this->createDeleteForm($resultatsImg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resultatsImg);
            $em->flush();
        }

        return $this->redirectToRoute('resultatsimg_index');
    }

    /**
     * Creates a form to delete a ResultatsImg entity.
     *
     * @param ResultatsImg $resultatsImg The ResultatsImg entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ResultatsImg $resultatsImg)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultatsimg_delete', array('id' => $resultatsImg->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Finds and displays a ResultatsImg entity.
     *
     * @Route("/{id}", name="resultatsimg_show")
     * @Method("GET")
     */
    public function showAction(ResultatsImg $resultatsImg)
    {
        $deleteForm = $this->createDeleteForm($resultatsImg);

        return $this->render('ordonnanceimg/printshow.html.twig', array(
            'resultatsImg' => $resultatsImg,
            'delete_form' => $deleteForm->createView(),
        ));
    }
}
