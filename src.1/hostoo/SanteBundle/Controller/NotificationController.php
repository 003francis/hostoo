<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 4/30/17
 * Time: 4:18 PM
 */

namespace hostoo\SanteBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function ajouterPatientAction($route)
    {
        //$this->get('ras_flash_alert.alert_reporter')->addSuccess("cool");

        return $this->render('hostooSanteBundle:Notification:ajouterpatient.html.twig');
    }
}

