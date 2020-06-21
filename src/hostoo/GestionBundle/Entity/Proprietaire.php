<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
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
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Convention", inversedBy="proprietaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $convention;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Patient", mappedBy="societe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patients;

    /**
     *
     * @ORM\OneToMany(targetEntity="FormuleTarificationProprietaire", mappedBy="societe")
     */
    private $forpro;

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
     * @return Proprietaire
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
     * Set adresse
     *
     * @param string $adresse
     * @return Proprietaire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Proprietaire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->patients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add patients
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patients
     * @return Proprietaire
     */
    public function addPatient(\hostoo\SanteBundle\Entity\Patient $patients)
    {
        $this->patients[] = $patients;

        return $this;
    }

    /**
     * Remove patients
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patients
     */
    public function removePatient(\hostoo\SanteBundle\Entity\Patient $patients)
    {
        $this->patients->removeElement($patients);
    }

    /**
     * Get patients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPatients()
    {
        return $this->patients;
    }

    /**
     * Add convention
     *
     * @param \hostoo\GestionBundle\Entity\Convention $convention
     * @return Proprietaire
     */
    public function addConvention(\hostoo\GestionBundle\Entity\Convention $convention)
    {
        $this->convention[] = $convention;

        return $this;
    }

    /**
     * Remove convention
     *
     * @param \hostoo\GestionBundle\Entity\Convention $convention
     */
    public function removeConvention(\hostoo\GestionBundle\Entity\Convention $convention)
    {
        $this->convention->removeElement($convention);
    }

    /**
     * Get convention
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConvention()
    {
        return $this->convention;
    }

    /**
     * Set convention
     *
     * @param \hostoo\GestionBundle\Entity\Convention $convention
     * @return Proprietaire
     */
    public function setConvention(\hostoo\GestionBundle\Entity\Convention $convention)
    {
        $this->convention = $convention;

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNom();
    }

    /**
     * Add forpro
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forpro
     * @return Proprietaire
     */
    public function addForpro(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forpro)
    {
        $this->forpro[] = $forpro;

        return $this;
    }

    /**
     * Remove forpro
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forpro
     */
    public function removeForpro(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forpro)
    {
        $this->forpro->removeElement($forpro);
    }

    /**
     * Get forpro
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForpro()
    {
        return $this->forpro;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Proprietaire
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
