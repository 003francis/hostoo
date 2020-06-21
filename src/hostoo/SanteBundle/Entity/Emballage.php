<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emballage
 *
 * @ORM\Table(name="emballage")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\EmballageRepository")
 */
class Emballage
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * @return Emballage
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

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->nom;
    }
}
