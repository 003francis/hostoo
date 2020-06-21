<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="nomservice", type="string", length=255)
     */
    private $nomservice;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\Article", mappedBy="service")
     *
     */
    private $service;


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
     * Set nomservice
     *
     * @param string $nomservice
     * @return Service
     */
    public function setNomservice($nomservice)
    {
        $this->nomservice = $nomservice;

        return $this;
    }

    /**
     * Get nomservice
     *
     * @return string 
     */
    public function getNomservice()
    {
        return $this->nomservice;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->service = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \hostoo\GestionBundle\Entity\Article $service
     * @return Service
     */
    public function addService(\hostoo\GestionBundle\Entity\Article $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \hostoo\GestionBundle\Entity\Article $service
     */
    public function removeService(\hostoo\GestionBundle\Entity\Article $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getService()
    {
        return $this->service;
    }
}
