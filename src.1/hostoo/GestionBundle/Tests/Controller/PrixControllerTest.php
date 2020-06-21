<?php

namespace hostoo\GestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrixControllerTest extends WebTestCase
{
    public function testAjouterunprix()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterUnPrix');
    }

    public function testModifierunprix()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifierUnPrix');
    }

}
