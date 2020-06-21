<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solde
 *
 * @ORM\Table(name="solde")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\SoldeRepository")
 */
class Solde
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
     * @var int
     *
     * @ORM\Column(name="solde", type="integer")
     */
    private $solde;


    /**
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy="soldes")
     */
    private $facture;


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
     * Set solde
     *
     * @param integer $solde
     * @return Solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return integer 
     */
    public function getSolde()
    {
        return $this->solde;
    }


    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Solde
     */
    public function setFacture(\hostoo\SanteBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \hostoo\SanteBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
}
