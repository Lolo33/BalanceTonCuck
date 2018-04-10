<?php

namespace AppBundle\Controller;

use AppBundle\Form\EtudiantsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionEtudiantsController extends Controller
{

    public function genererForm()
    {
        $form = $this->get('form.factory')->createBuilder(EtudiantsType::class);
        return $this->render("AppBundle:Inscription:form_etudiants.html.twig", array(
            "form" => $form->createView(),
        ));
    }

    public function inscrireAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('AppBundle\Entity\Etudiants');
    }

}
