<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSymptome
 *
 * @ORM\Table(name="t_symptome")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\TSymptomeRepository")
 */
class TSymptome
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
     * @ORM\OneToMany(targetEntity="Symptomes", mappedBy="tsymptome")
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
     * Set nom
     *
     * @param string $nom
     * @return TSymptome
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
        $this->symptomes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add symptomes
     *
     * @param \hostoo\SanteBundle\Entity\Symptomes $symptomes
     * @return TSymptome
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
