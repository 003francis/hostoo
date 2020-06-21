<?php

namespace hostoo\RDVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('hostooRDVBundle:Default:index.html.twig');
    }

    public function directionAction()
    {
        return $this->redirectToRoute('fos_user_security_login');
    }
}
