<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RapportControllerTest extends WebTestCase
{
    public function testTransactionsconventionnees()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/transactionsConventionnees');
    }

    public function testTransactionsprivees()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/transactionsPrivees');
    }

    public function testRapportintervalledates()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rapportIntervalleDates');
    }

    public function testRapporttransactionspatients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rapportTransactionsPatients');
    }

    public function testRapporttransactionsparsociete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rapportTransactionsParSociete');
    }

    public function testRapportdetaillepatient()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rapportDetaillePatient');
    }

}
