<?php

namespace hostoo\HospisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 *
 * @ORM\Table(name="obs_tour")
 * @ORM\Entity(repositoryClass="hostoo\HospisBundle\Repository\ObsTourRepository")
 */
class ObsTour
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
     * @ORM\Column(name="dateobs", type="datetime")
     */
    private $dateobs;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;


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
     * Set dateobs
     *
     * @param \DateTime $dateobs
     * @return 
     */
    public function setDateobs($dateobs)
    {
        $this->dateobs = $dateobs;

        return $this;
    }

    /**
     * Get dateobs
     *
     * @return \DateTime 
     */
    public function getDateobs()
    {
        return $this->dateobs;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return 
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
}
