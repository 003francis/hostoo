<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValeurRef
 *
 * @ORM\Table(name="valeur_ref")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ValeurRefRepository")
 */
class ValeurRef
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
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     *
     * @ORM\OneToOne(targetEntity="Tarification", cascade={"persist"}, inversedBy="valeur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $acte;


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
     * Set valeur
     *
     * @param string $valeur
     * @return ValeurRef
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    public function __toString()
    {
        return $this->valeur;
    }

    /**
     * Set acte
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $acte
     * @return ValeurRef
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
