<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="montant_usd", type="decimal", precision=10, scale=2)
     */
    private $montantUsd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepaiement", type="datetime")
     */
    private $datepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Proprietaire", cascade={"persist"})
     */
    private $societe;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $utilisateur;


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
     * Set montantUsd
     *
     * @param string $montantUsd
     * @return Paiement
     */
    public function setMontantUsd($montantUsd)
    {
        $this->montantUsd = $montantUsd;

        return $this;
    }

    /**
     * Get montantUsd
     *
     * @return string 
     */
    public function getMontantUsd()
    {
        return $this->montantUsd;
    }

    /**
     * Set datepaiement
     *
     * @param \DateTime $datepaiement
     * @return Paiement
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return \DateTime 
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Paiement
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
     * Set societe
     *
     * @param \hostoo\GestionBundle\Entity\Proprietaire $societe
     * @return Paiement
     */
    public function setSociete(\hostoo\GestionBundle\Entity\Proprietaire $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \hostoo\GestionBundle\Entity\Proprietaire 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set utilisateur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $utilisateur
     * @return Paiement
     */
    public function setUtilisateur(\hostoo\UserBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
