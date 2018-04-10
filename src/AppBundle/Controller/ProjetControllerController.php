<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetControllerController extends Controller
{
    public function listeProjetsEtudiantAction()
    {
        return $this->render('AppBundle:ProjetController:liste_projets_etudiant.html.twig', array(
            // ...
        ));
    }

    public function listeProjetsAction()
    {
        return $this->render('AppBundle:ProjetController:liste_projets.html.twig', array(
            // ...
        ));
    }

    public function ajouterProjetAction()
    {
        return $this->render('AppBundle:ProjetController:ajouter_projet.html.twig', array(
            // ...
        ));
    }

    public function supprimerProjetAction($id)
    {
        return $this->render('AppBundle:ProjetController:supprimer_projet.html.twig', array(
            // ...
        ));
    }

    public function rejoindreProjetAction()
    {
        return $this->render('AppBundle:ProjetController:rejoindre_projet.html.twig', array(
            // ...
        ));
    }

}
