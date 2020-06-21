<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anamnese
 *
 * @ORM\Table(name="anamnese")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\AnamneseRepository")
 */
class Anamnese
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
     * @ORM\Column(name="autres", type="text", nullable=true)
     */
    private $autres;

    /**
     * @var string
     *
     * @ORM\Column(name="complements", type="text", nullable=true)
     */
    private $complements;

    /**
     * @ORM\OneToOne(targetEntity="Episode", inversedBy="anamnese")
     */
    private $episode;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Symptomes")
     */
    private $symptomes;


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
     * Set autres
     *
     * @param string $autres
     * @return Anamnese
     */
    public function setAutres($autres)
    {
        $this->autres = $autres;

        return $this;
    }

    /**
     * Get autres
     *
     * @return string 
     */
    public function getAutres()
    {
        return $this->autres;
    }

    /**
     * Set complements
     *
     * @param string $complements
     * @return Anamnese
     */
    public function setComplements($complements)
    {
        $this->complements = $complements;

        return $this;
    }

    /**
     * Get complements
     *
     * @return string 
     */
    public function getComplements()
    {
        return $this->complements;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Anamnese
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
     * Constructor
     */
    public function __construct()
    {
        $this->symptomes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add symptomes
     *
     * @param \hostoo\SanteBundle\Entity\Symptomes $symptomes
     * @return Anamnese
     */
    public function addSymptome(\hostoo\SanteBundle\Entity\Symptomes $symptomes)
    {
        $this->symptomes[] = $symptomes;


        return $this;
    }

    /**
     * Remove symptomes
     *
     * @param \hostoo\SanteBundle\Entity\Symptomes $symptomes
     */
    public function removeSymptome(\hostoo\SanteBundle\Entity\Symptomes $symptomes)
    {
        $this->symptomes->removeElement($symptomes);
    }

    /**
     * Get symptomes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSymptomes()
    {
        return $this->symptomes;
    }
}
