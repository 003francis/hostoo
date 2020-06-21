<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActesControllerTest extends WebTestCase
{
    public function testCreeracte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creerActe');
    }

    public function testModifieracte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifierActe');
    }

    public function testSupprimeracte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerActe');
    }

    public function testListeactes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listeActes');
    }

}
