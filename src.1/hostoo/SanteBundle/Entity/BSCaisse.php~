<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BSCaisse
 *
 * @ORM\Table(name="b_s_caisse")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\BSCaisseRepository")
 */
class BSCaisse
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
     * @ORM\Column(name="datebs", type="datetime")
     */
    private $datebs;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=3)
     */
    private $devise;
    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiaire", type="string", length=255)
     */
    private $beneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="visa", type="string", length=255)
     */
    private $visa;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $caissier;

    public function __construct()
    {
        $this->datebs=new \DateTime();
        $this->devise="USD";
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
     * Set datebs
     *
     * @param \DateTime $datebs
     * @return BSCaisse
     */
    public function setDatebs($datebs)
    {
        $this->datebs = $datebs;

        return $this;
    }

    /**
     * Get datebs
     *
     * @return \DateTime 
     */
    public function getDatebs()
    {
        return $this->datebs;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return BSCaisse
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return BSCaisse
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set beneficiaire
     *
     * @param string $beneficiaire
     * @return BSCaisse
     */
    public function setBeneficiaire($beneficiaire)
    {
        $this->beneficiaire = $beneficiaire;

        return $this;
    }

    /**
     * Get beneficiaire
     *
     * @return string 
     */
    public function getBeneficiaire()
    {
        return $this->beneficiaire;
    }

    /**
     * Set visa
     *
     * @param string $visa
     * @return BSCaisse
     */
    public function setVisa($visa)
    {
        $this->visa = $visa;

        return $this;
    }

    /**
     * Get visa
     *
     * @return string 
     */
    public function getVisa()
    {
        return $this->visa;
    }

    /**
     * Set caissier
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $caissier
     * @return BSCaisse
     */
    public function setCaissier(\hostoo\UserBundle\Entity\Utilisateur $caissier = null)
    {
        $this->caissier = $caissier;

        return $this;
    }

    /**
     * Get caissier
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getCaissier()
    {
        return $this->caissier;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return BSCaisse
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string 
     */
    public function getDevise()
    {
        return $this->devise;
    }
}
