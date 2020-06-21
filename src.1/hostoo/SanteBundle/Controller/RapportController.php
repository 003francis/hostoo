<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RapportController extends Controller
{
    public function transactionsConventionneesAction()
    {

        $em=$this->getDoctrine()->getManager();

        return $this->render('hostooSanteBundle:Rapport:transactions_conventionnees.html.twig', array(
            // ...
        ));
    }

    public function transactionsPriveesAction()
    {
        return $this->render('hostooSanteBundle:Rapport:transactions_privees.html.twig', array(
            // ...
        ));
    }

    public function rapportIntervalleDatesAction()
    {
        return $this->render('hostooSanteBundle:Rapport:rapport_intervalle_dates.html.twig', array(
            // ...
        ));
    }

    public function rapportTransactionsPatientsAction()
    {
        return $this->render('hostooSanteBundle:Rapport:rapport_transactions_patients.html.twig', array(
            // ...
        ));
    }

    public function rapportTransactionsParSocieteAction()
    {
        return $this->render('hostooSanteBundle:Rapport:rapport_transactions_par_societe.html.twig', array(
            // ...
        ));
    }

    public function rapportDetaillePatientAction()
    {
        return $this->render('hostooSanteBundle:Rapport:rapport_detaille_patient.html.twig', array(
            // ...
        ));
    }

}
