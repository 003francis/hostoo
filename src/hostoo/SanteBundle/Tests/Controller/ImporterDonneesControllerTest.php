<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ImporterDonneesControllerTest extends WebTestCase
{
    public function testImportelespatients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/importeLesPatients');
    }

}
