<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Symptomes
 *
 * @ORM\Table(name="symptomes")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\SymptomesRepository")
 */
class Symptomes
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="TSymptome", inversedBy="symptomes")
     */
    private $tsymptome;

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
     * Set nom
     *
     * @param string $nom
     * @return Symptomes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tsymptome
     *
     * @param \hostoo\SanteBundle\Entity\TSymptome $tsymptome
     * @return Symptomes
     */
    public function setTsymptome(\hostoo\SanteBundle\Entity\TSymptome $tsymptome = null)
    {
        $this->tsymptome = $tsymptome;

        return $this;
    }

    /**
     * Get tsymptome
     *
     * @return \hostoo\SanteBundle\Entity\TSymptome 
     */
    public function getTsymptome()
    {
        return $this->tsymptome;
    }

}
