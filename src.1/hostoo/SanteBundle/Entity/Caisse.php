<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caisse
 *
 * @ORM\Table(name="caisse")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\CaisseRepository")
 */
class Caisse
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
     * @ORM\Column(name="montantusd", type="integer")
     */
    private $montantusd;

    /**
     * @var int
     *
     * @ORM\Column(name="montantcdf", type="integer")
     */
    private $montantcdf;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecaisse", type="datetime")
     */
    private $datecaisse;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateperception", type="datetime", nullable=true)
     */
    private $dateperception;

    /**
     * @ORM\ManyToOne(targetEntity="Episode", cascade={"persist"})
     */
    private $episode;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", inversedBy="hospitalisation")
     */
    private $hospitalisation;

    /**
     * @var bool
     *
     * @ORM\Column(name="remis", type="boolean", nullable=true)
     */
    private $remis;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $percepteur;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $percepteurPrimaire;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy="paiements")
     */
    private $facture;

    public function __construct()
    {
        $this->datecaisse= new \DateTime('now');
        $this->montantcdf=0;
        $this->montantusd=0;
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
     * Set datecaisse
     *
     * @param \DateTime $datecaisse
     * @return Caisse
     */
    public function setDatecaisse($datecaisse)
    {
        $this->datecaisse = $datecaisse;

        return $this;
    }

    /**
     * Get datecaisse
     *
     * @return \DateTime 
     */
    public function getDatecaisse()
    {
        return $this->datecaisse;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Caisse
     */
    public function setEpisode(\hostoo\SanteBundle\Entity\Episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \hostoo\SanteBundle\Entity\Episode 
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Set montantusd
     *
     * @param integer $montantusd
     * @return Caisse
     */
    public function setMontantusd($montantusd)
    {
        $this->montantusd = $montantusd;

        return $this;
    }

    /**
     * Get montantusd
     *
     * @return integer 
     */
    public function getMontantusd()
    {
        return $this->montantusd;
    }

    /**
     * Set montantcdf
     *
     * @param integer $montantcdf
     * @return Caisse
     */
    public function setMontantcdf($montantcdf)
    {
        $this->montantcdf = $montantcdf;

        return $this;
    }

    /**
     * Get montantcdf
     *
     * @return integer 
     */
    public function getMontantcdf()
    {
        return $this->montantcdf;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Caisse
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set percepteur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $percepteur
     * @return Caisse
     */
    public function setPercepteur(\hostoo\UserBundle\Entity\Utilisateur $percepteur = null)
    {
        $this->percepteur = $percepteur;

        return $this;
    }

    /**
     * Get percepteur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getPercepteur()
    {
        return $this->percepteur;
    }

    /**
     * Set remis
     *
     * @param boolean $remis
     * @return Caisse
     */
    public function setRemis($remis)
    {
        $this->remis = $remis;

        return $this;
    }

    /**
     * Get remis
     *
     * @return boolean 
     */
    public function getRemis()
    {
        return $this->remis;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return Caisse
     */
    public function setHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation = null)
    {
        $this->hospitalisation = $hospitalisation;

        return $this;
    }

    /**
     * Get hospitalisation
     *
     * @return \hostoo\HospisBundle\Entity\Hospitalisation
     */
    public function getHospitalisation()
    {
        return $this->hospitalisation;
    }

    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Caisse
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

    /**
     * Set dateperception
     *
     * @param \DateTime $dateperception
     * @return Caisse
     */
    public function setDateperception($dateperception)
    {
        $this->dateperception = $dateperception;

        return $this;
    }

    /**
     * Get dateperception
     *
     * @return \DateTime 
     */
    public function getDateperception()
    {
        return $this->dateperception;
    }

    /**
     * Set percepteurPrimaire
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $percepteurPrimaire
     * @return Caisse
     */
    public function setPercepteurPrimaire(\hostoo\UserBundle\Entity\Utilisateur $percepteurPrimaire = null)
    {
        $this->percepteurPrimaire = $percepteurPrimaire;

        return $this;
    }

    /**
     * Get percepteurPrimaire
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getPercepteurPrimaire()
    {
        return $this->percepteurPrimaire;
    }
}
