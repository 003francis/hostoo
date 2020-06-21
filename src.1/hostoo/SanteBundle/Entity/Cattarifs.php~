<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cattarifs
 *
 * @ORM\Table(name="cattarifs")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\CattarifsRepository")
 */
class Cattarifs
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="Tarification" , mappedBy="categories")
     */
    private $actes;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Cattarifs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     * @return Cattarifs
     */
    public function addActe(\hostoo\SanteBundle\Entity\Tarification $actes)
    {
        $this->actes[] = $actes;

        return $this;
    }

    /**
     * Remove actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     */
    public function removeActe(\hostoo\SanteBundle\Entity\Tarification $actes)
    {
        $this->actes->removeElement($actes);
    }

    /**
     * Get actes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActes()
    {
        return $this->actes;
    }
}
