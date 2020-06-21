<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Posologie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hostoo\SanteBundle\Entity\Ordonnance;
use hostoo\SanteBundle\Form\OrdonnanceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Ordonnance controller.
 *
 */
class OrdonnanceController extends Controller
{
    /**
     * Lists all Ordonnance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnances = $em->getRepository('hostooSanteBundle:Ordonnance')->findAll();

        return $this->render('ordonnance/index.html.twig', array(
            'ordonnances' => $ordonnances,
        ));
    }

    public function EpisodeOrdonnanceAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnances = $em->getRepository('hostooSanteBundle:Ordonnance')->findByEpisode($id);

        return $this->render('ordonnance/indexc.html.twig', array(
            'ordonnances' => $ordonnances,
        ));
    }


    public function hospitalisationOrdonnanceAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnances = $em->getRepository('hostooSanteBundle:Ordonnance')->findByHospitalisation($id);

        return $this->render('ordonnance/indexc.html.twig', array(
            'ordonnances' => $ordonnances,
        ));
    }

    public function printOrdonnanceAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnance = $em->getRepository('hostooSanteBundle:Ordonnance')->find($id);

        return $this->render('ordonnance/printOrdonnance.html.twig', array(
            'ordonnance' => $ordonnance,
        ));
    }

    /**
     * Creates a new Ordonnance entity.
     *
     */
    public function newAction(Request $request,$id)
    {
        $ordonnance = new Ordonnance();
        $userManager = $this->getUser();
        $form = $this->createForm('hostoo\SanteBundle\Form\OrdonnanceType', $ordonnance);
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $ep=$em->getRepository('hostooSanteBundle:Episode')->find($id);
            $ords=$request->get('ordonnance');
            $posologies=$ords['posologie'];
            $n=0;
            foreach ($posologies as $pos =>$val)
            {
                $pp[$n]=new Posologie();
                $pp[$n]->setConduite($val['conduite']);
                $pp[$n]->setPosologie($val['posologie']);
                $pp[$n]->setProduit($val['produit']);
                $pp[$n]->setQte($val['qte']);

                $ordonnance->addPosologie($pp[$n]);
                //$em->persist($pp[$n]);
                $n++;
            }
            $ordonnance->setMedecin($userManager);
            $ordonnance->setEpisode($ep);
            $ordonnance->setValider(1);
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('hostoo_med_lireepisode',array('id'=>$id));
        }

        return $this->render('ordonnance/new.html.twig', array(
            'ordonnance' => $ordonnance,
            'id'=>$id,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Ordonnance entity.
     * @Route("/hos-ord/{id}", name="ordonnance_hospitalisation")
     */
    public function newHospisAction(Request $request,$id)
    {
        $ordonnance = new Ordonnance();
        $userManager = $this->getUser();
        $form = $this->createForm('hostoo\SanteBundle\Form\OrdonnanceType', $ordonnance);
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $ep=$em->getRepository('hostooHospisBundle:Hospitalisation')->find($id);
            $ords=$request->get('ordonnance');
            $posologies=$ords['posologie'];
            $n=0;
            foreach ($posologies as $pos =>$val)
            {
                $pp[$n]=new Posologie();
                $pp[$n]->setConduite($val['conduite']);
                $pp[$n]->setPosologie($val['posologie']);
                $pp[$n]->setProduit($em->getRepository('hostooPharmacieBundle:Produit')->find($val['produit']));
                $pp[$n]->setQte($val['qte']);

                $ordonnance->addPosologie($pp[$n]);
                //$em->persist($pp[$n]);
                $n++;
            }
            $ordonnance->setMedecin($userManager);
            $ordonnance->setHospitalisation($ep);
            $ordonnance->setValider(1);
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('hospitalisation_tour_show',array('id'=>$id));
        }

        return $this->render('ordonnance/newhos.html.twig', array(
            'ordonnance' => $ordonnance,
            'id'=>$id,
            'form' => $form->createView(),
        ));
    }

    public function newNrsAction(Request $request,$id)
    {
        $ordonnance = new Ordonnance();
        $userManager = $this->getUser();
        $form = $this->createForm('hostoo\SanteBundle\Form\OrdonnanceType', $ordonnance);
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $ep=$em->getRepository('hostooSanteBundle:Episode')->find($id);
            $ords=$request->get('ordonnance');
            $posologies=$ords['posologie'];
            $n=0;
            foreach ($posologies as $pos =>$val)
            {
                $pp[$n]=new Posologie();
                $pp[$n]->setConduite($val['conduite']);
                $pp[$n]->setPosologie($val['posologie']);
                $pp[$n]->setProduit($em->getRepository('hostooPharmacieBundle:Produit')->find($val['produit']));
                $pp[$n]->setQte($val['qte']);

                $ordonnance->addPosologie($pp[$n]);
                //$em->persist($pp[$n]);
                $n++;
            }
            $ordonnance->setMedecin($userManager);
            $ordonnance->setEpisode($ep);
            $ordonnance->setValider(1);
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('voirpatient_prel',array('id'=>$id));
        }

        return $this->render('ordonnance/newnrs.html.twig', array(
            'ordonnance' => $ordonnance,
            'id'=>$id,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ordonnance entity.
     *
     */
    public function showAction(Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);

        return $this->render('ordonnance/show.html.twig', array(
            'ordonnance' => $ordonnance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ordonnance entity.
     *
     */
    public function editAction(Request $request, Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);
        $editForm = $this->createForm('hostoo\SanteBundle\Form\OrdonnanceType', $ordonnance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('ordonnance_med_edit', array('id' => $ordonnance->getId()));
        }

        return $this->render('ordonnance/edit.html.twig', array(
            'ordonnance' => $ordonnance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ordonnance entity.
     *
     */
    public function deleteAction(Request $request, Ordonnance $ordonnance)
    {
        $form = $this->createDeleteForm($ordonnance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ordonnance);
            $em->flush();
        }

        return $this->redirectToRoute('ordonnance_med_index');
    }

    /**
     * Creates a form to delete a Ordonnance entity.
     *
     * @param Ordonnance $ordonnance The Ordonnance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ordonnance $ordonnance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordonnance_med_delete', array('id' => $ordonnance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
