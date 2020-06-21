<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AntecedentPatient
 *
 * @ORM\Table(name="antecedent_patient")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\AntecedentPatientRepository")
 */
class AntecedentPatient
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="antecedents")
     */
    private $patient;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Antecedent", inversedBy="patients")
     */
    private $antecedent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateant", type="datetime", nullable=true)
     */
    private $dateant;

    /**
     * @var string
     *
     * @ORM\Column(name="sequelles", type="string", length=255, nullable=true)
     */
    private $sequelles;

    /**
     * @var string
     *
     * @ORM\Column(name="traitementencours", type="string", length=255, nullable=true)
     */
    private $traitementencours;

    /**
     * @var string
     *
     * @ORM\Column(name="servicemilitaire", type="string", length=255, nullable=true)
     */
    private $servicemilitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="grossesse", type="string", length=255, nullable=true)
     */
    private $grossesse;


    /**
     * Set dateant
     *
     * @param \DateTime $dateant
     * @return AntecedentPatient
     */
    public function setDateant($dateant)
    {
        $this->dateant = $dateant;

        return $this;
    }

    /**
     * Get dateant
     *
     * @return \DateTime 
     */
    public function getDateant()
    {
        return $this->dateant;
    }

    /**
     * Set sequelles
     *
     * @param string $sequelles
     * @return AntecedentPatient
     */
    public function setSequelles($sequelles)
    {
        $this->sequelles = $sequelles;

        return $this;
    }

    /**
     * Get sequelles
     *
     * @return string 
     */
    public function getSequelles()
    {
        return $this->sequelles;
    }

    /**
     * Set traitementencours
     *
     * @param string $traitementencours
     * @return AntecedentPatient
     */
    public function setTraitementencours($traitementencours)
    {
        $this->traitementencours = $traitementencours;

        return $this;
    }

    /**
     * Get traitementencours
     *
     * @return string 
     */
    public function getTraitementencours()
    {
        return $this->traitementencours;
    }

    /**
     * Set servicemilitaire
     *
     * @param string $servicemilitaire
     * @return AntecedentPatient
     */
    public function setServicemilitaire($servicemilitaire)
    {
        $this->servicemilitaire = $servicemilitaire;

        return $this;
    }

    /**
     * Get servicemilitaire
     *
     * @return string 
     */
    public function getServicemilitaire()
    {
        return $this->servicemilitaire;
    }

    /**
     * Set grossesse
     *
     * @param string $grossesse
     * @return AntecedentPatient
     */
    public function setGrossesse($grossesse)
    {
        $this->grossesse = $grossesse;

        return $this;
    }

    /**
     * Get grossesse
     *
     * @return string 
     */
    public function getGrossesse()
    {
        return $this->grossesse;
    }


    /**
     * Set patient
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patient
     * @return AntecedentPatient
     */
    public function setPatient(\hostoo\SanteBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Set antecedent
     *
     * @param \hostoo\SanteBundle\Entity\Antecedent $antecedent
     * @return AntecedentPatient
     */
    public function setAntecedent(\hostoo\SanteBundle\Entity\Antecedent $antecedent)
    {
        $this->antecedent = $antecedent;

        return $this;
    }

    /**
     * Get antecedent
     *
     * @return \hostoo\SanteBundle\Entity\Antecedent 
     */
    public function getAntecedent()
    {
        return $this->antecedent;
    }
}
