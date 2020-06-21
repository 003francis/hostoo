<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obsinf
 *
 * @ORM\Table(name="obsinf")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ObsinfRepository")
 */
class Obsinf
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
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     */
    private $facture;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     */
    private $acte;
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
     * Set observation
     *
     * @param string $observation
     * @return Obsinf
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
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Obsinf
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
     * Set acte
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $acte
     * @return Obsinf
     */
    public function setActe(\hostoo\SanteBundle\Entity\Tarification $acte = null)
    {
        $this->acte = $acte;

        return $this;
    }

    /**
     * Get acte
     *
     * @return \hostoo\SanteBundle\Entity\Tarification 
     */
    public function getActe()
    {
        return $this->acte;
    }
}
