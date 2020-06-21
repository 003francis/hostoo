<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\PatientRepository")
 */
class Patient
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="postnom", type="string", length=50, nullable=true)
     */
    private $postnom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="datetime", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone1", type="string", length=15, nullable=true)
     */
    private $telephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=15, nullable=true)
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="numerodossier", type="string", length=15, nullable=true)
     */
    private $numerodossier;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Proprietaire", inversedBy="patients")
     * @ORM\JoinColumn(nullable=true)
     */
    private $societe;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Formule", inversedBy="patients")
     * @ORM\JoinColumn(nullable=true)
     */
    private $formule;

    /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="patient")
     */
    private $episode;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Dependant", mappedBy="patient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $dependants;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenr", type="datetime", nullable=true)
     */
    private $dateenr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemod", type="datetime", nullable=true)
     */
    private $datemod;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\RDVBundle\Entity\RDVMed", mappedBy="patient")
     */
    private $rendez;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Dependant", cascade={"persist"},mappedBy="moi")
     * @ORM\JoinColumn(nullable=true)
     */
    private $madependance;
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
     * @return Patient
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
     * Set postnom
     *
     * @param string $postnom
     *
     * @return Patient
     */
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;

        return $this;
    }

    /**
     * Get postnom
     *
     * @return string
     */
    public function getPostnom()
    {
        return $this->postnom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Patient
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Patient
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return bool
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Patient
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Patient
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Patient
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
     * Set telephone1
     *
     * @param string $telephone1
     *
     * @return Patient
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     *
     * @return Patient
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    public function __construct()
    {
        $this->episode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->datemod=new \DateTime('now');
        $this->datenaissance=new \DateTime('now');
        $this->dateenr=new \DateTime('now');
        $this->societe=null;
    }

    /**
     * Add episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Patient
     */
    public function addEpisode(\hostoo\SanteBundle\Entity\Episode $episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     */
    public function removeEpisode(\hostoo\SanteBundle\Entity\Episode $episode)
    {
        $this->episode->removeElement($episode);
    }

    /**
     * Get episode
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Add dependants
     *
     * @param \hostoo\SanteBundle\Entity\Dependant $dependants
     * @return Patient
     */
    public function addDependant(\hostoo\SanteBundle\Entity\Dependant $dependants)
    {
        $this->dependants[] = $dependants;

        return $this;
    }

    /**
     * Remove dependants
     *
     * @param \hostoo\SanteBundle\Entity\Dependant $dependants
     */
    public function removeDependant(\hostoo\SanteBundle\Entity\Dependant $dependants)
    {
        $this->dependants->removeElement($dependants);
    }

    /**
     * Get dependants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDependants()
    {
        return $this->dependants;
    }

    /**
     * Set dateenr
     *
     * @param \DateTime $dateenr
     * @return Patient
     */
    public function setDateenr($dateenr)
    {
        if($this->getDateenr()==null){
        $this->dateenr = $dateenr;
}
        return $this;
    }

    /**
     * Get dateenr
     *
     * @return \DateTime 
     */
    public function getDateenr()
    {
        return $this->dateenr;
    }

    /**
     * Set datemod
     *
     * @param \DateTime $datemod
     * @return Patient
     */
    public function setDatemod($datemod)
    {
        $this->datemod = $datemod;

        return $this;
    }

    /**
     * Get datemod
     *
     * @return \DateTime 
     */
    public function getDatemod()
    {
        return $this->datemod;
    }



    /**
     * Set societe
     *
     * @param \hostoo\GestionBundle\Entity\Proprietaire $societe
     * @return Patient
     */
    public function setSociete(\hostoo\GestionBundle\Entity\Proprietaire $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \hostoo\GestionBundle\Entity\Proprietaire 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Add rendez
     *
     * @param \hostoo\RDVBundle\Entity\RDVMed $rendez
     * @return Patient
     */
    public function addRendez(\hostoo\RDVBundle\Entity\RDVMed $rendez)
    {
        $this->rendez[] = $rendez;

        return $this;
    }

    /**
     * Remove rendez
     *
     * @param \hostoo\RDVBundle\Entity\RDVMed $rendez
     */
    public function removeRendez(\hostoo\RDVBundle\Entity\RDVMed $rendez)
    {
        $this->rendez->removeElement($rendez);
    }

    /**
     * Get rendez
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRendez()
    {
        return $this->rendez;
    }

    /**
     * Set formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return Patient
     */
    public function setFormule(\hostoo\SanteBundle\Entity\Formule $formule = null)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \hostoo\SanteBundle\Entity\Formule 
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set numerodossier
     *
     * @param string $numerodossier
     * @return Patient
     */
    public function setNumerodossier($numerodossier)
    {
        $this->numerodossier=$numerodossier;

        return $this;
    }

    /**
     * Get numerodossier
     *
     * @return string 
     */
    public function getNumerodossier()
    {
        return $this->numerodossier;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return $this->nom." ".$this->postnom." ".$this->prenom;
    }

    public function age()
    {
        return date('Y')-date_format($this->datenaissance,'Y');
    }


    /**
     * Set madependance
     *
     * @param \hostoo\SanteBundle\Entity\Dependant $madependance
     * @return Patient
     */
    public function setMadependance(\hostoo\SanteBundle\Entity\Dependant $madependance = null)
    {
        $this->madependance = $madependance;

        return $this;
    }

    /**
     * Get madependance
     *
     * @return \hostoo\SanteBundle\Entity\Dependant 
     */
    public function getMadependance()
    {
        return $this->madependance;
    }
}
