<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actes
 *
 * @ORM\Table(name="actes")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ActesRepository")
 */
class Actes
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
     * @var array
     *
     * @ORM\Column(name="acte", type="array", length=255)
     */
    private $acte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateepisode", type="datetime")
     */
    private $datefacture;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="urgence", type="boolean", nullable=true)
     */
    private $urgence;

    /**
     * @var bool
     *
     * @ORM\Column(name="validation", type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="actes")
     */
    private $episode;
    public  function __construct()
    {
        $this->setUrgence(false);
        $this->setValidation(false);
        $this->datefacture=new \DateTime();
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
     * Set acte
     *
     * @param string $acte
     * @return Actes
     */
    public function setActe($acte)
    {
        $this->acte = $acte;

        return $this;
    }

    /**
     * Get acte
     *
     * @return string 
     */
    public function getActe()
    {
        return $this->acte;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Actes
     */


    /**
     * Set prix
     *
     * @param integer $prix
     * @return Actes
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */

    /**
     * Set urgence
     *
     * @param boolean $urgence
     * @return Actes
     */
    public function setUrgence($urgence)
    {
        $this->urgence = $urgence;

        return $this;
    }

    /**
     * Get urgence
     *
     * @return boolean 
     */
    public function getUrgence()
    {
        return $this->urgence;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     * @return Actes
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean 
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Actes
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
     * Set datefacture
     *
     * @param \DateTime $datefacture
     * @return Actes
     */
    public function setDatefacture($datefacture)
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    /**
     * Get datefacture
     *
     * @return \DateTime 
     */
    public function getDatefacture()
    {
        return $this->datefacture;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
