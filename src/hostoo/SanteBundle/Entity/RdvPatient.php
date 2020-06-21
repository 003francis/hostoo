<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RdvPatient
 *
 * @ORM\Table(name="rdvpatient")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\RdvPatientRepository")
 */
class RdvPatient
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
     * @ORM\Column(name="daterdv", type="datetime")
     */
    private $daterdv;

    /**
     * @var bool
     *
     * @ORM\Column(name="recu", type="boolean")
     */
    private $recu;

    /**
     * @var bool
     *
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Rdv", inversedBy="RDVspatients")
     */
    private $rdv;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="rdvpat")
     *
     */
    private $episode;
    public function __construct()
    {
        $this->daterdv= new \DateTime();
        $this->recu=false;
        $this->valid=false;
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
     * Set daterdv
     *
     * @param \DateTime $daterdv
     * @return RdvPatient
     */
    public function setDaterdv($daterdv)
    {
        $this->daterdv = $daterdv;

        return $this;
    }

    /**
     * Get daterdv
     *
     * @return \DateTime 
     */
    public function getDaterdv()
    {
        return $this->daterdv;
    }





    /**
     * Set recu
     *
     * @param boolean $recu
     * @return RdvPatient
     */
    public function setRecu($recu)
    {
        $this->recu = $recu;

        return $this;
    }

    /**
     * Get recu
     *
     * @return boolean 
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return RdvPatient
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return RdvPatient
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
     * Set rdv
     *
     * @param \hostoo\SanteBundle\Entity\Rdv $rdv
     * @return RdvPatient
     */
    public function setRdv(\hostoo\SanteBundle\Entity\Rdv $rdv = null)
    {
        $this->rdv = $rdv;

        return $this;
    }

    /**
     * Get rdv
     *
     * @return \hostoo\SanteBundle\Entity\Rdv 
     */
    public function getRdv()
    {
        return $this->rdv;
    }


}
