<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="formule")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\FormuleRepository")
 */
class Formule
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
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="Tarification", mappedBy="formule")
     */
    private $tarif;

    /**
     * @ORM\ManyToMany(targetEntity="hostoo\PharmacieBundle\Entity\Produit", mappedBy="formule")
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Convention", inversedBy="formule")
     */
    private $convention;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\FormuleTarification", mappedBy="formule")
     */
    private $fortar;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\FormuleTarificationProprietaire", mappedBy="formule")
     */
    private $forsoc;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\FormuleProduit", mappedBy="formule")
     */
    private $forprod;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Patient", mappedBy="formule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $patients;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Formule
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
        $this->tarif = new \Doctrine\Common\Collections\ArrayCollection();
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tarif
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $tarif
     * @return Formule
     */
    public function addTarif(\hostoo\SanteBundle\Entity\Tarification $tarif)
    {
        $this->tarif[] = $tarif;
        $tarif->addFormule($this);

        return $this;
    }

    /**
     * Remove tarif
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $tarif
     */
    public function removeTarif(\hostoo\SanteBundle\Entity\Tarification $tarif)
    {
        $this->tarif->removeElement($tarif);
    }

    /**
     * Get tarif
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Add produit
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produit
     * @return Formule
     */
    public function addProduit(\hostoo\PharmacieBundle\Entity\Produit $produit)
    {
        $this->produit[] = $produit;
        $produit->addFormule($this);

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produit
     */
    public function removeProduit(\hostoo\PharmacieBundle\Entity\Produit $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set convention
     *
     * @param \hostoo\GestionBundle\Entity\Convention $convention
     * @return Formule
     */
    public function setConvention(\hostoo\GestionBundle\Entity\Convention $convention = null)
    {
        $this->convention = $convention;

        return $this;
    }

    /**
     * Get convention
     *
     * @return \hostoo\GestionBundle\Entity\Convention 
     */
    public function getConvention()
    {
        return $this->convention;
    }

    /**
     * Add fortar
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarification $fortar
     * @return Formule
     */
    public function addFortar(\hostoo\GestionBundle\Entity\FormuleTarification $fortar)
    {
        $this->fortar[] = $fortar;

        return $this;
    }

    /**
     * Remove fortar
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarification $fortar
     */
    public function removeFortar(\hostoo\GestionBundle\Entity\FormuleTarification $fortar)
    {
        $this->fortar->removeElement($fortar);
    }

    /**
     * Get fortar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFortar()
    {
        return $this->fortar;
    }

    /**
     * Add patients
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patients
     * @return Formule
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
     * Add forprod
     *
     * @param \hostoo\GestionBundle\Entity\FormuleProduit $forprod
     * @return Formule
     */
    public function addForprod(\hostoo\GestionBundle\Entity\FormuleProduit $forprod)
    {
        $this->forprod[] = $forprod;

        return $this;
    }

    /**
     * Remove forprod
     *
     * @param \hostoo\GestionBundle\Entity\FormuleProduit $forprod
     */
    public function removeForprod(\hostoo\GestionBundle\Entity\FormuleProduit $forprod)
    {
        $this->forprod->removeElement($forprod);
    }

    /**
     * Get forprod
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForprod()
    {
        return $this->forprod;
    }

    /**
     * Add forsoc
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forsoc
     * @return Formule
     */
    public function addForsoc(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forsoc)
    {
        $this->forsoc[] = $forsoc;

        return $this;
    }

    /**
     * Remove forsoc
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forsoc
     */
    public function removeForsoc(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $forsoc)
    {
        $this->forsoc->removeElement($forsoc);
    }

    /**
     * Get forsoc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForsoc()
    {
        return $this->forsoc;
    }
}
