<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\AntecedentPatient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\Antecedent;
use hostoo\SanteBundle\Form\AntecedentType;

/**
 * Antecedent controller.
 *
 */
class AntecedentController extends Controller
{
    /**
     * Lists all Antecedent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $antecedents = $em->getRepository('hostooSanteBundle:Antecedent')->findAll();

        return $this->render('antecedent/index.html.twig', array(
            'antecedents' => $antecedents,
        ));
    }

    /**
     * Creates a new Antecedent entity.
     *
     */
    public function newAction(Request $request)
    {
        $antecedent = new Antecedent();
        $form = $this->createForm('hostoo\SanteBundle\Form\AntecedentType', $antecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($antecedent);
            $em->flush();

            return $this->redirectToRoute('antecedent_show', array('id' => $antecedent->getId()));
        }

        return $this->render('antecedent/new.html.twig', array(
            'antecedent' => $antecedent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Antecedent entity.
     *
     */
    public function showAction(Antecedent $antecedent)
    {
        $deleteForm = $this->createDeleteForm($antecedent);

        return $this->render('antecedent/show.html.twig', array(
            'antecedent' => $antecedent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Antecedent entity.
     *
     */
    public function editAction(Request $request, Antecedent $antecedent)
    {
        $deleteForm = $this->createDeleteForm($antecedent);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\AntecedentType', $antecedent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($antecedent);
            $em->flush();

            return $this->redirectToRoute('antecedent_edit', array('id' => $antecedent->getId()));
        }

        return $this->render('antecedent/edit.html.twig', array(
            'antecedent' => $antecedent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Antecedent entity.
     *
     */
    public function deleteAction(Request $request, Antecedent $antecedent)
    {
        $form = $this->createDeleteForm($antecedent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($antecedent);
            $em->flush();
        }

        return $this->redirectToRoute('antecedent_index');
    }

    /**
     * Creates a form to delete a Antecedent entity.
     *
     * @param Antecedent $antecedent The Antecedent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Antecedent $antecedent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('antecedent_delete', array('id' => $antecedent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function antecedentPatientAction(Request $request,$pat)
    {
        $em=$this->getDoctrine()->getManager();
        $antecedents=$em->getRepository('hostooSanteBundle:TypeAntecedent')->findAll();
        $epi=$em->getRepository('hostooSanteBundle:Episode')->find($pat);
        $antsdupatient=$em->getRepository('hostooSanteBundle:AntecedentPatient')->findByPatient($epi->getPatient());

        if($request->isXmlHttpRequest())
        {

            $antecedents=$request->get('antpat');

            //var_dump($antecedents); die('antecedent');
            foreach ($antecedents as $keys =>$items)
            {
                $antexist=$em->getRepository('hostooSanteBundle:AntecedentPatient')->findOneBy(array('patient'=>$pat,'antecedent'=>$keys));
                if($antexist != null && $items!='on'){
                   
                    $em->remove($antexist);

                }else{
                $ant=new AntecedentPatient();
                $idant=$em->getRepository('hostooSanteBundle:Antecedent')->findOneBy(array('id'=>$keys));
                    if(!is_object($antexist)){

                $ant->setAntecedent($idant)->setPatient($epi->getPatient());
                $em->persist($ant);
                    }
                }
            }

            $em->flush();
            return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$pat));
        }
        return $this->render('hostooSanteBundle:Medecin:antecedent.html.twig',array(
            'ants'=>$antecedents,
            'patants'=>$antsdupatient,
            'pat'=>$pat
        ));
    }

    public function antecedentsDuPatientAction($patient)
    {
        $em=$this->getDoctrine()->getManager();
        $epi=$em->getRepository('hostooSanteBundle:Patient')->find($patient);
        $antecedents=$em->getRepository('hostooSanteBundle:TypeAntecedent')->findAll();
        $antsdupatient=$em->getRepository('hostooSanteBundle:AntecedentPatient')->findByPatient($patient);
        return $this->render('hostooSanteBundle:Medecin:antecedentsdupatient.html.twig',array(
            'patants'=>$antsdupatient,
            'cat'=>$antecedents,
            'pat'=>$patient
        ));
    }
}
