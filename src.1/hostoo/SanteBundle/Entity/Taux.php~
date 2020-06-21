<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taux
 *
 * @ORM\Table(name="taux")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\TauxRepository")
 */
class Taux
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
     * @ORM\Column(name="montant", type="string", length=255)
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetaux", type="datetime")
     */
    private $datetaux;

    public function __construct()
    {
        $this->datetaux= new \DateTime('now');
    }

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
     * Set montant
     *
     * @param string $montant
     * @return Taux
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set datetaux
     *
     * @param \DateTime $datetaux
     * @return Taux
     */
    public function setDatetaux($datetaux)
    {
        $this->datetaux = $datetaux;

        return $this;
    }

    /**
     * Get datetaux
     *
     * @return \DateTime 
     */
    public function getDatetaux()
    {
        return $this->datetaux;
    }
}
