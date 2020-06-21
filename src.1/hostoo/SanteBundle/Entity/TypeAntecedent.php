<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAntecedent
 *
 * @ORM\Table(name="type_antecedent")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\TypeAntecedentRepository")
 */
class TypeAntecedent
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
     * @ORM\OneToMany(targetEntity="Antecedent", mappedBy="type")
     */
    private $antecedents;

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
     * @return TypeAntecedent
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
     * Constructor
     */
    public function __construct()
    {
        $this->antecedents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add antecedents
     *
     * @param \hostoo\SanteBundle\Entity\Antecedent $antecedents
     * @return TypeAntecedent
     */
    public function addAntecedent(\hostoo\SanteBundle\Entity\Antecedent $antecedents)
    {
        $this->antecedents[] = $antecedents;

        return $this;
    }

    /**
     * Remove antecedents
     *
     * @param \hostoo\SanteBundle\Entity\Antecedent $antecedents
     */
    public function removeAntecedent(\hostoo\SanteBundle\Entity\Antecedent $antecedents)
    {
        $this->antecedents->removeElement($antecedents);
    }

    /**
     * Get antecedents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAntecedents()
    {
        return $this->antecedents;
    }
}
