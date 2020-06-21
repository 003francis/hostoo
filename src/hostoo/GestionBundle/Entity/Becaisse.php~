<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Becaisse
 *
 * @ORM\Table(name="becaisse")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\BecaisseRepository")
 */
class Becaisse
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="compte", type="string", length=255)
     */
    private $compte;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateops", type="datetime")
     */
    private $dateops;

    public function __construct()
    {
        $this->dateops=new \DateTime('now');
    }

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
     * Set libelle
     *
     * @param string $libelle
     * @return Becaisse
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set compte
     *
     * @param string $compte
     * @return Becaisse
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return string 
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Becaisse
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return Becaisse
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string 
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Becaisse
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
     * Set dateops
     *
     * @param \DateTime $dateops
     * @return Becaisse
     */
    public function setDateops($dateops)
    {
        $this->dateops = $dateops;

        return $this;
    }

    /**
     * Get dateops
     *
     * @return \DateTime 
     */
    public function getDateops()
    {
        return $this->dateops;
    }
}
