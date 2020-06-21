<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaissePrive
 *
 * @ORM\Table(name="caisse_prive")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\CaissePriveRepository")
 */
class CaissePrive
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
     * @ORM\Column(name="montant_cdf", type="integer")
     */
    private $montantCdf;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_usd", type="integer")
     */
    private $montantUsd;


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
     * Set montantCdf
     *
     * @param integer $montantCdf
     * @return CaissePrive
     */
    public function setMontantCdf($montantCdf)
    {
        $this->montantCdf = $montantCdf;

        return $this;
    }

    /**
     * Get montantCdf
     *
     * @return integer 
     */
    public function getMontantCdf()
    {
        return $this->montantCdf;
    }

    /**
     * Set montantUsd
     *
     * @param integer $montantUsd
     * @return CaissePrive
     */
    public function setMontantUsd($montantUsd)
    {
        $this->montantUsd = $montantUsd;

        return $this;
    }

    /**
     * Get montantUsd
     *
     * @return integer 
     */
    public function getMontantUsd()
    {
        return $this->montantUsd;
    }

    public function ajouterCDF($mont)
    {
        $this->setMontantCdf($this->getMontantCdf()+$mont);
    }

    public function ajouterUSD($mont)
    {
        $this->setMontantCdf($this->getMontantUsd()+$mont);
    }
}
