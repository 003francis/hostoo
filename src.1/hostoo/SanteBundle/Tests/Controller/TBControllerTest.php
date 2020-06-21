<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TBControllerTest extends WebTestCase
{
    public function testReceptiontb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/receptionTB');
    }

    public function testSalledessoinstb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/salleDesSoinsTB');
    }

    public function testDoctb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/docTB');
    }

    public function testLabotb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/laboTB');
    }

    public function testImgtb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ImgTB');
    }

    public function testPhartb()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PharTB');
    }

}
