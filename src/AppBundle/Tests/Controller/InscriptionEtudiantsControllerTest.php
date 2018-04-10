<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InscriptionEtudiantsControllerTest extends WebTestCase
{
    public function testInscrire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'inscrire-etudiants');
    }

}
