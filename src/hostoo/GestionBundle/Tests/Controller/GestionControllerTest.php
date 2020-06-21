<?php

namespace hostoo\GestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionControllerTest extends WebTestCase
{
    public function testNouvelleconvention()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/nouvelleConvention');
    }

    public function testModifierconvention()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifierConvention');
    }

}
