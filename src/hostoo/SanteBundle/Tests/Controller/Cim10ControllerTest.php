<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Cim10ControllerTest extends WebTestCase
{
    public function testLespathologies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lesPathologies');
    }

}
