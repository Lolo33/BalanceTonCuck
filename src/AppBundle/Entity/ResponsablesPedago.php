<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * ResponsablesPedago
 *
 * @ORM\Table(name="responsable_pedago")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResponsablePedagoRepository")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User", message="fos_user.email.already_used")
 */
class ResponsablesPedago extends Utilisateurs
{



}

