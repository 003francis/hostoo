<?php

namespace hostoo\MsgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('hostooMsgBundle:Default:index.html.twig');
    }
}
