<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Etudiants
 *
 * @ORM\Table(name="etudiants")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtudiantRepository")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User", message="fos_user.email.already_used")
 */
class Etudiants extends Utilisateurs
{

    /**
     * @var Projets[]
     *
     * @ORM\ManyToMany(targetEntity="Projets", mappedBy="listeEtufiants")
     */
    private $listeProjets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeProjets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeProjet
     *
     * @param \AppBundle\Entity\Projets $listeProjet
     *
     * @return Etudiants
     */
    public function addListeProjet(\AppBundle\Entity\Projets $listeProjet)
    {
        $this->listeProjets[] = $listeProjet;

        return $this;
    }

    /**
     * Remove listeProjet
     *
     * @param \AppBundle\Entity\Projets $listeProjet
     */
    public function removeListeProjet(\AppBundle\Entity\Projets $listeProjet)
    {
        $this->listeProjets->removeElement($listeProjet);
    }

    /**
     * Get listeProjets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeProjets()
    {
        return $this->listeProjets;
    }
}
