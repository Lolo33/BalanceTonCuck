<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjetControllerControllerTest extends WebTestCase
{
    public function testListeprojetsetudiant()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'mes-projets');
    }

    public function testListeprojets()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'les-projets');
    }

    public function testAjouterprojet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'nouveau-projet');
    }

    public function testSupprimerprojet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'supprimer-projet/{id}');
    }

    public function testRejoindreprojet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'rejoindre-projet');
    }

}
