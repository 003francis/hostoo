<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedent
 *
 * @ORM\Table(name="antecedent")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\AntecedentRepository")
 */
class Antecedent
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
     * @ORM\ManyToOne(targetEntity="TypeAntecedent", inversedBy="antecedents")
     */
    private $type;
    /**
     * @var string
     *
     * @ORM\Column(name="antecedent", type="string", length=255)
     */
    private $antecedent;

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
     * Set antecedent
     *
     * @param string $antecedent
     * @return Antecedent
     */
    public function setAntecedent($antecedent)
    {
        $this->antecedent = $antecedent;

        return $this;
    }

    /**
     * Get antecedent
     *
     * @return string 
     */
    public function getAntecedent()
    {
        return $this->antecedent;
    }



    /**
     * Set type
     *
     * @param \hostoo\SanteBundle\Entity\TypeAntecedent $type
     * @return Antecedent
     */
    public function setType(\hostoo\SanteBundle\Entity\TypeAntecedent $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \hostoo\SanteBundle\Entity\TypeAntecedent 
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->patients = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
