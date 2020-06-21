<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comission
 *
 * @ORM\Table(name="comission")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\ComissionRepository")
 */
class Comission
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
     * @var \DateTime
     *
     * @ORM\Column(name="datecomission", type="datetime")
     */
    private $datecomission;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_beneficiaire", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantBeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_caisse", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantCaisse;

    /**
     * @var bool
     *
     * @ORM\Column(name="percu", type="boolean")
     */
    private $percu;


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
     * Set datecomission
     *
     * @param \DateTime $datecomission
     * @return Comission
     */
    public function setDatecomission($datecomission)
    {
        $this->datecomission = $datecomission;

        return $this;
    }

    /**
     * Get datecomission
     *
     * @return \DateTime 
     */
    public function getDatecomission()
    {
        return $this->datecomission;
    }

    /**
     * Set montantBeneficiaire
     *
     * @param string $montantBeneficiaire
     * @return Comission
     */
    public function setMontantBeneficiaire($montantBeneficiaire)
    {
        $this->montantBeneficiaire = $montantBeneficiaire;

        return $this;
    }

    /**
     * Get montantBeneficiaire
     *
     * @return string 
     */
    public function getMontantBeneficiaire()
    {
        return $this->montantBeneficiaire;
    }

    /**
     * Set montantCaisse
     *
     * @param string $montantCaisse
     * @return Comission
     */
    public function setMontantCaisse($montantCaisse)
    {
        $this->montantCaisse = $montantCaisse;

        return $this;
    }

    /**
     * Get montantCaisse
     *
     * @return string 
     */
    public function getMontantCaisse()
    {
        return $this->montantCaisse;
    }

    /**
     * Set percu
     *
     * @param boolean $percu
     * @return Comission
     */
    public function setPercu($percu)
    {
        $this->percu = $percu;

        return $this;
    }

    /**
     * Get percu
     *
     * @return boolean 
     */
    public function getPercu()
    {
        return $this->percu;
    }
}
