<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\ExamensPhysiques;
use hostoo\SanteBundle\Form\ExamensPhysiquesType;

/**
 * ExamensPhysiques controller.
 *
 */
class ExamensPhysiquesController extends Controller
{
    /**
     * Lists all ExamensPhysiques entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examensPhysiques = $em->getRepository('hostooSanteBundle:ExamensPhysiques')->findAll();

        return $this->render('examensphysiques/index.html.twig', array(
            'examensPhysiques' => $examensPhysiques,
        ));
    }

    public function listAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $examensPhysiques = $em->getRepository('hostooSanteBundle:ExamensPhysiques')->findByEpisode($id);

        return $this->render('examensphysiques/list.html.twig', array(
            'examensPhysiques' => $examensPhysiques,
            'id'=>$id
        ));
    }

    /**
     * Creates a new ExamensPhysiques entity.
     *
     */
    public function newAction(Request $request,$id)
    {
        $examensPhysique = new ExamensPhysiques();
        $form = $this->createForm('hostoo\SanteBundle\Form\ExamensPhysiquesType', $examensPhysique);


        if ($request->isMethod('POST') && $form->handleRequest($request)) {
            $em = $this->getDoctrine()->getManager();
            $episode=$em->getRepository('hostooSanteBundle:Episode')->findOneById($id);
            $examensPhysique->setEpisode($em->getRepository('hostooSanteBundle:Episode')->findOneById($id));
            $em->persist($examensPhysique);
            $em->flush();
            $items=array();
//var_dump($episode->getExphys()); die('OIk');
            foreach ($episode->getExphys() as $Sv)
            {
                $items[]=array(
                    'id'=>$Sv->getId(),
                    'type'=>$Sv->getTypeexamen(),
                    'observation'=>$Sv->getObservation(),
                );
            }
            $reponse=new JsonResponse();
            return $reponse->setData(array('items'=>$items));
            //return $this->redirectToRoute('hostoo_med_lireepisode', array('id' => $id));
        }
        if ($request->isXmlHttpRequest() && $form->handleRequest($request)) {
        $em = $this->getDoctrine()->getManager();
            $episode=$em->getRepository('hostooSanteBundle:Episode')->findOneById($id);
        $examensPhysique->setEpisode($episode);
        $em->persist($examensPhysique);
        $em->flush();

            $items=array();
//var_dump($episode->getExphys()); die('OIk');
            foreach ($episode->getExphys() as $Sv)
            {
                $items[]=array(
                    'id'=>$Sv->getId(),
                    'type'=>$Sv->getTypeexamen(),
                    'observation'=>$Sv->getObservation(),
                );
            }
            //var_dump($items); die('ok');
            $reponse=new JsonResponse();
            return $reponse->setData(array('items'=>$items));

        }

        return $this->render('examensphysiques/new.html.twig', array(
            'examensPhysique' => $examensPhysique,
            'form' => $form->createView(),
            'id'=>$id
        ));
    }

    /**
     * Finds and displays a ExamensPhysiques entity.
     *
     */
    public function showAction(ExamensPhysiques $examensPhysique)
    {
        $deleteForm = $this->createDeleteForm($examensPhysique);

        return $this->render('examensphysiques/show.html.twig', array(
            'examensPhysique' => $examensPhysique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ExamensPhysiques entity.
     *
     */
    public function editAction(Request $request, ExamensPhysiques $examensPhysique)
    {
        $deleteForm = $this->createDeleteForm($examensPhysique);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\ExamensPhysiquesType', $examensPhysique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($examensPhysique);
            $em->flush();

            return $this->redirectToRoute('examensphysiques_edit', array('id' => $examensPhysique->getId()));
        }

        return $this->render('examensphysiques/edit.html.twig', array(
            'examensPhysique' => $examensPhysique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ExamensPhysiques entity.
     *
     */
    public function deleteAction(Request $request, ExamensPhysiques $examensPhysique)
    {
        $form = $this->createDeleteForm($examensPhysique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examensPhysique);
            $em->flush();
        }

        return $this->redirectToRoute('examensphysiques_index');
    }

    /**
     * Creates a form to delete a ExamensPhysiques entity.
     *
     * @param ExamensPhysiques $examensPhysique The ExamensPhysiques entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ExamensPhysiques $examensPhysique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examensphysiques_delete', array('id' => $examensPhysique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
