<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamensPhysiques
 *
 * @ORM\Table(name="examens_physiques")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ExamensPhysiquesRepository")
 */
class ExamensPhysiques
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
     * @ORM\Column(name="typeexamen", length=200, nullable=false )
     */
    private $typeexamen;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity="Episode", inversedBy="exphys")
     */
    private $episode;


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
     * Set observation
     *
     * @param string $observation
     * @return ExamensPhysiques
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return ExamensPhysiques
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
     * Set typeexamen
     *
     * @param string $typeexamen
     * @return ExamensPhysiques
     */
    public function setTypeexamen($typeexamen)
    {
        $this->typeexamen = $typeexamen;

        return $this;
    }

    /**
     * Get typeexamen
     *
     * @return string 
     */
    public function getTypeexamen()
    {
        return $this->typeexamen;
    }
}
