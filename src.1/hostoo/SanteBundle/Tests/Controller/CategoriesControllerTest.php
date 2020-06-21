<?php

namespace hostoo\SanteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoriesControllerTest extends WebTestCase
{
    public function testCreeunecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreeUneCategorie');
    }

    public function testModifieunecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifieUneCategorie');
    }

    public function testSupprimeunecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimeUneCategorie');
    }

    public function testListedescategories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListeDesCategories');
    }

}
