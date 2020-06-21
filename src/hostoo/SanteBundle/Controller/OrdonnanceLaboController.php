<?php

namespace hostoo\SanteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\OrdonnanceLabo;

/**
 * OrdonnanceLabo controller.
 *
 * @Route("/ordonnancelabo")
 */
class OrdonnanceLaboController extends Controller
{
    /**
     * Lists all OrdonnanceLabo entities.
     *
     * @Route("/", name="ordonnancelabo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnanceLabos = $em->getRepository('hostooSanteBundle:OrdonnanceLabo')->findAll();

        return $this->render('ordonnancelabo/index.html.twig', array(
            'ordonnanceLabos' => $ordonnanceLabos,
        ));
    }

    /**
     * Finds and displays a OrdonnanceLabo entity.
     *
     * @Route("/{id}", name="ordonnancelabo_show")
     * @Method("GET")
     */
    public function showAction(OrdonnanceLabo $ordonnanceLabo)
    {

        return $this->render('ordonnancelabo/show.html.twig', array(
            'ordonnanceLabo' => $ordonnanceLabo,
        ));
    }

    /**
     * Finds and displays a OrdonnanceLabo entity.
     *
     * @Route("/correct_lab/{id}", name="ordonnancelabo_correct")
     * @Method("GET")
     */
    public function correctAction(OrdonnanceLabo $ordonnanceLabo)
    {

        return $this->render('ordonnancelabo/correct.html.twig', array(
            'ordonnanceLabo' => $ordonnanceLabo,
        ));
    }


    /**
     * Finds and displays a OrdonnanceLabo entity.
     *
     * @Route("/imprimer/{id}", name="ordonnancelabo_printshow")
     * @Method("GET")
     */
    public function showPrintAction(OrdonnanceLabo $ordonnanceLabo)
    {

        return $this->render('ordonnancelabo/printshow.html.twig', array(
            'ordonnanceLabo' => $ordonnanceLabo,
        ));
    }
}
