<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\MedicamentRepository")
 */
class Medicament
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
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var int
     *
     * @ORM\Column(name="grammage", type="integer")
     */
    private $grammage;

    /**
     * @var string
     *
     * @ORM\Column(name="moleculebase", type="string", length=255)
     */
    private $moleculebase;


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
     * @return Medicament
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
     * Set nature
     *
     * @param string $nature
     * @return Medicament
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set grammage
     *
     * @param integer $grammage
     * @return Medicament
     */
    public function setGrammage($grammage)
    {
        $this->grammage = $grammage;

        return $this;
    }

    /**
     * Get grammage
     *
     * @return integer 
     */
    public function getGrammage()
    {
        return $this->grammage;
    }

    /**
     * Set moleculebase
     *
     * @param string $moleculebase
     * @return Medicament
     */
    public function setMoleculebase($moleculebase)
    {
        $this->moleculebase = $moleculebase;

        return $this;
    }

    /**
     * Get moleculebase
     *
     * @return string 
     */
    public function getMoleculebase()
    {
        return $this->moleculebase;
    }
}
