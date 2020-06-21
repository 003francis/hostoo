<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignesVitaux
 *
 * @ORM\Table(name="signes_vitaux")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\SignesVitauxRepository")
 */
class SignesVitaux
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
     * @ORM\Column(name="Temperature", type="integer", nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="Poids", type="decimal", precision=10, scale=2)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="Taille", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="Tension", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tension;

    /**
     * @var int
     *
     * @ORM\Column(name="FrequenceCardiaque", type="integer", nullable=true)
     */
    private $frequenceCardiaque;

    /**
     * @var int
     *
     * @ORM\Column(name="FrequenceRespiratoire", type="integer", nullable=true)
     */
    private $frequenceRespiratoire;

    /**
     * @var string
     *
     * @ORM\Column(name="Glycemie_Dextro", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $glycemieDextro;

    /**
     * @var string
     *
     * @ORM\Column(name="SaturationOxygene", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $saturationOxygene;

    /**
     * @var string
     *
     * @ORM\Column(name="imc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $imc;

    /**
     * @var int
     *
     * @ORM\Column(name="Pc", type="integer", nullable=true)
     */
    private $pc;

    /**
     * @var int
     *
     * @ORM\Column(name="Pb", type="integer", nullable=true)
     */
    private $pb;

    /**
     * @var int
     *
     * @ORM\Column(name="Pa", type="integer", nullable=true)
     */
    private $pa;

    /**
     * @var int
     *
     * @ORM\Column(name="Pp", type="integer", nullable=true)
     */
    private $pp;

    /**
     * @var string
     *
     * @ORM\Column(name="wrh", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $wrh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterecolte", type="datetime")
     */
    private $daterecolte;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="sv")
     *
     */
    private $episode;

    public function __construct()
    {
        $this->daterecolte=new \DateTime();
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
     * Set temperature
     *
     * @param integer $temperature
     * @return SignesVitaux
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return integer 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set poids
     *
     * @param string $poids
     * @return SignesVitaux
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return SignesVitaux
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set tension
     *
     * @param string $tension
     * @return SignesVitaux
     */
    public function setTension($tension)
    {
        $this->tension = $tension;

        return $this;
    }

    /**
     * Get tension
     *
     * @return string 
     */
    public function getTension()
    {
        return $this->tension;
    }

    /**
     * Set frequenceCardiaque
     *
     * @param integer $frequenceCardiaque
     * @return SignesVitaux
     */
    public function setFrequenceCardiaque($frequenceCardiaque)
    {
        $this->frequenceCardiaque = $frequenceCardiaque;

        return $this;
    }

    /**
     * Get frequenceCardiaque
     *
     * @return integer 
     */
    public function getFrequenceCardiaque()
    {
        return $this->frequenceCardiaque;
    }

    /**
     * Set frequenceRespiratoire
     *
     * @param integer $frequenceRespiratoire
     * @return SignesVitaux
     */
    public function setFrequenceRespiratoire($frequenceRespiratoire)
    {
        $this->frequenceRespiratoire = $frequenceRespiratoire;

        return $this;
    }

    /**
     * Get frequenceRespiratoire
     *
     * @return integer 
     */
    public function getFrequenceRespiratoire()
    {
        return $this->frequenceRespiratoire;
    }

    /**
     * Set glycemieDextro
     *
     * @param string $glycemieDextro
     * @return SignesVitaux
     */
    public function setGlycemieDextro($glycemieDextro)
    {
        $this->glycemieDextro = $glycemieDextro;

        return $this;
    }

    /**
     * Get glycemieDextro
     *
     * @return string 
     */
    public function getGlycemieDextro()
    {
        return $this->glycemieDextro;
    }

    /**
     * Set saturationOxygene
     *
     * @param string $saturationOxygene
     * @return SignesVitaux
     */
    public function setSaturationOxygene($saturationOxygene)
    {
        $this->saturationOxygene = $saturationOxygene;

        return $this;
    }

    /**
     * Get saturationOxygene
     *
     * @return string 
     */
    public function getSaturationOxygene()
    {
        return $this->saturationOxygene;
    }

    /**
     * Set imc
     *
     * @param string $imc
     * @return SignesVitaux
     */
    public function setImc($imc)
    {
        $this->imc = $imc;

        return $this;
    }

    /**
     * Get imc
     *
     * @return string 
     */
    public function getImc()
    {
        return $this->imc;
    }

    /**
     * Set pc
     *
     * @param integer $pc
     * @return SignesVitaux
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return integer 
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set pb
     *
     * @param integer $pb
     * @return SignesVitaux
     */
    public function setPb($pb)
    {
        $this->pb = $pb;

        return $this;
    }

    /**
     * Get pb
     *
     * @return integer 
     */
    public function getPb()
    {
        return $this->pb;
    }

    /**
     * Set pa
     *
     * @param integer $pa
     * @return SignesVitaux
     */
    public function setPa($pa)
    {
        $this->pa = $pa;

        return $this;
    }

    /**
     * Get pa
     *
     * @return integer 
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * Set pp
     *
     * @param integer $pp
     * @return SignesVitaux
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return integer 
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set wrh
     *
     * @param string $wrh
     * @return SignesVitaux
     */
    public function setWrh($wrh)
    {
        $this->wrh = $wrh;

        return $this;
    }

    /**
     * Get wrh
     *
     * @return string 
     */
    public function getWrh()
    {
        return $this->wrh;
    }

    /**
     * Set daterecolte
     *
     * @param \DateTime $daterecolte
     * @return SignesVitaux
     */
    public function setDaterecolte($daterecolte)
    {
        $this->daterecolte = $daterecolte;

        return $this;
    }

    /**
     * Get daterecolte
     *
     * @return \DateTime 
     */
    public function getDaterecolte()
    {
        return $this->daterecolte;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return SignesVitaux
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
}
