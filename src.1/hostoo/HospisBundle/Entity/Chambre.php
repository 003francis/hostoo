<?php

namespace hostoo\HospisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="hostoo\HospisBundle\Repository\ChambreRepository")
 */
class Chambre
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreDesLits", type="integer")
     */
    private $nombreDesLits;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Chambre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set nombreDesLits
     *
     * @param integer $nombreDesLits
     * @return Chambre
     */
    public function setNombreDesLits($nombreDesLits)
    {
        $this->nombreDesLits = $nombreDesLits;

        return $this;
    }

    /**
     * Get nombreDesLits
     *
     * @return integer 
     */
    public function getNombreDesLits()
    {
        return $this->nombreDesLits;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->libelle;
    }
}
