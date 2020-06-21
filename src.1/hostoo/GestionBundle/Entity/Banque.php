<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table(name="banque")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\BanqueRepository")
 */
class Banque
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
     * @ORM\Column(name="mouvement", type="string", length=255)
     */
    private $mouvement;

    /**
     *
     * @ORM\ManyToOne(targetEntity="LesBanques",cascade={"persist"})
     */
    private $nombanque;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

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
     * @return Banque
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
     * Set montant
     *
     * @param string $montant
     * @return Banque
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
     * @return Banque
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
     * Set mouvement
     *
     * @param string $mouvement
     * @return Banque
     */
    public function setMouvement($mouvement)
    {
        $this->mouvement = $mouvement;

        return $this;
    }

    /**
     * Get mouvement
     *
     * @return string 
     */
    public function getMouvement()
    {
        return $this->mouvement;
    }



    /**
     * Set reference
     *
     * @param string $reference
     * @return Banque
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set nombanque
     *
     * @param \hostoo\GestionBundle\Entity\LesBanques $nombanque
     * @return Banque
     */
    public function setNombanque(\hostoo\GestionBundle\Entity\LesBanques $nombanque = null)
    {
        $this->nombanque = $nombanque;

        return $this;
    }

    /**
     * Get nombanque
     *
     * @return \hostoo\GestionBundle\Entity\LesBanques 
     */
    public function getNombanque()
    {
        return $this->nombanque;
    }

    /**
     * Set dateops
     *
     * @param \DateTime $dateops
     * @return Banque
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
