<?php

namespace hostoo\SanteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use hostoo\SanteBundle\Entity\ordonnanceImg;

/**
 * ordonnanceImg controller.
 *
 * @Route("/ordonnanceimg")
 */
class ordonnanceImgController extends Controller
{
    /**
     * Lists all ordonnanceImg entities.
     *
     * @Route("/", name="ordonnanceimg_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnanceImgs = $em->getRepository('hostooSanteBundle:ordonnanceImg')->findAll();

        return $this->render('ordonnanceimg/index.html.twig', array(
            'ordonnanceImgs' => $ordonnanceImgs,
        ));
    }

    /**
     * Finds and displays a ordonnanceImg entity.
     *
     * @Route("/{id}", name="ordonnanceimg_show")
     * @Method("GET")
     */
    public function showAction(ordonnanceImg $ordonnanceImg)
    {

        return $this->render('ordonnanceimg/show.html.twig', array(
            'ordonnanceImg' => $ordonnanceImg,
        ));
    }

    /**
     * Finds and displays a OrdonnanceLabo entity.
     *
     * @Route("/correct_lab/{id}", name="ordonnanceimg_correct")
     * @Method("GET")
     */
    public function correctAction(OrdonnanceImg $ordonnanceImg)
    {

        return $this->render('ordonnanceimg/correct.html.twig', array(
            'ordonnanceimg' => $ordonnanceImg,
        ));
    }

    /**
     * Finds and displays a OrdonnanceLabo entity.
     *
     * @Route("/imprimer/{id}", name="ordonnanceimg_printshow")
     * @Method("GET")
     */
    public function showPrintAction(OrdonnanceImg $ordonnanceImg)
    {

        return $this->render('ordonnanceimg/printshow.html.twig', array(
            'ordonnanceImg' => $ordonnanceImg,
        ));
    }
}
