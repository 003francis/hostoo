<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\AnamneseSymptome;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\Anamnese;
use hostoo\SanteBundle\Form\AnamneseType;

/**
 * Anamnese controller.
 *
 */
class AnamneseController extends Controller
{
    /**
     * Lists all Anamnese entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $anamnese = $em->getRepository('hostooSanteBundle:Anamnese')->findAll();

        return $this->render('anamnese/index.html.twig', array(
            'anamnese' => $anamnese,
        ));
    }

    /**
     * Creates a new Anamnese entity.
     *
     */
    public function newAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $anamnese=$em->getRepository('hostooSanteBundle:Anamnese')->findOneByEpisode($id);
        $form = $this->createForm('hostoo\SanteBundle\Form\AnamneseType', $anamnese);
        //var_dump($anamnese); die('ok');
        if($anamnese == null){
            $anamnese = new Anamnese();
            $form = $this->createForm('hostoo\SanteBundle\Form\AnamneseType', $anamnese);
        }


        $symptomes=$em->getRepository('hostooSanteBundle:TSymptome')->findAll();
        $epi=$em->getRepository('hostooSanteBundle:Episode')->find($id);



        if ($request->isXmlHttpRequest() && $form->handleRequest($request)) {

            $anamnese->setEpisode($epi);

            $em->persist($anamnese);
            /*foreach($request->get('anamnese_symptomes') as $key =>$items)
            {
                $antSym=new AnamneseSymptome();
                $sym=$em->getRepository('hostooSanteBundle:Symptomes')->findOneById($items);
                $antSym->setAnamnese($anamnese)->setSymptome($sym);
                $em->persist($antSym);
                //$em->flush();
            }*/

            $em->flush();

            return $this->redirectToRoute('hostoo_med_lireepisode', array('id' => $id));
        }

        return $this->render('anamnese/new.html.twig', array(
            'anamnese' => $anamnese,
            'symptomes'=>$symptomes,
            'id'=>$id,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Anamnese entity.
     *
     */
    public function showAction(Anamnese $anamnese)
    {
        $deleteForm = $this->createDeleteForm($anamnese);

        return $this->render('anamnese/show.html.twig', array(
            'anamnese' => $anamnese,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Anamnese entity.
     *
     */
    public function editAction(Request $request, Anamnese $anamnese)
    {
        $deleteForm = $this->createDeleteForm($anamnese);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\AnamneseType', $anamnese);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anamnese);
            $em->flush();

            return $this->redirectToRoute('anamnese_edit', array('id' => $anamnese->getId()));
        }

        return $this->render('anamnese/edit.html.twig', array(
            'anamnese' => $anamnese,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Anamnese entity.
     *
     */
    public function deleteAction(Request $request, Anamnese $anamnese)
    {
        $form = $this->createDeleteForm($anamnese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($anamnese);
            $em->flush();
        }

        return $this->redirectToRoute('anamnese_index');
    }

    /**
     * Creates a form to delete a Anamnese entity.
     *
     * @param Anamnese $anamnese The Anamnese entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anamnese $anamnese)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anamnese_delete', array('id' => $anamnese->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
