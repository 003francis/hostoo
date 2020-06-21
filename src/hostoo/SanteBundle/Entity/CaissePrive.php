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
     * @var string
     *
     * @ORM\Column(name="montant_cdf", type="decimal", precision=10, scale=2)
     */
    private $montantCdf;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_usd", type="integer", precision=10, scale=2)
     */
    private $montantUsd;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montantCdf
     *
     * @param string $montantCdf
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
     * @return string
     */
    public function getMontantCdf()
    {
        return $this->montantCdf;
    }

    /**
     * Set montantUsd
     *
     * @param string $montantUsd
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
