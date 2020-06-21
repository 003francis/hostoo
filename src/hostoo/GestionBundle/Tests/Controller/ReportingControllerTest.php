<?php

namespace hostoo\GestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportingControllerTest extends WebTestCase
{
    public function testTableaudebord()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tableauDeBord');
    }

    public function testActesfactures()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ActesFactures');
    }

    public function testConventionsdesentreprises()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ConventionsDesEntreprises');
    }

    public function testDetailssurentreprises()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailsSurEntreprises');
    }

    public function testActivitejournaliere()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/activiteJournaliere');
    }

    public function testPatientsrecus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/patientsRecus');
    }

}
