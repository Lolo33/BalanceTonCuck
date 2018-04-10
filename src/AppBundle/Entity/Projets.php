<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetsRepository")
 */
class Projets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Etudiants[]
     *
     * @ORM\ManyToMany(targetEntity="Etudiants", inversedBy="listeProjets")
     */
    private $listeEtudiants;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Projets
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projets
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeEtudiants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeEtudiant
     *
     * @param \AppBundle\Entity\Etudiants $listeEtudiant
     *
     * @return Projets
     */
    public function addListeEtudiant(\AppBundle\Entity\Etudiants $listeEtudiant)
    {
        $this->listeEtudiants[] = $listeEtudiant;

        return $this;
    }

    /**
     * Remove listeEtudiant
     *
     * @param \AppBundle\Entity\Etudiants $listeEtudiant
     */
    public function removeListeEtudiant(\AppBundle\Entity\Etudiants $listeEtudiant)
    {
        $this->listeEtudiants->removeElement($listeEtudiant);
    }

    /**
     * Get listeEtudiants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeEtudiants()
    {
        return $this->listeEtudiants;
    }
}
