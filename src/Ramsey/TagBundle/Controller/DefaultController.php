<?php

namespace Ramsey\TagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RamseyTagBundle:Default:index.html.twig');
    }
}
