<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\FactureRepository")
 */
class Facture
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
     * @var \DateTime
     *
     * @ORM\Column(name="datefacture", type="datetime")
     */
    private $datefacture;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="solde", type="integer")
     */
    private $solde;

    /**
     * @var bool
     *
     * @ORM\Column(name="urgence", type="boolean", nullable=true)
     */
    private $urgence;

    /**
     * @var bool
     *
     * @ORM\Column(name="validation", type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="lasolde", type="decimal", precision=10, scale=2)
     */
    private $lasolde;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="string", nullable=true)
     */
    private $log;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="factures")
     *
     */
    private $episode;


    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Requerant", inversedBy="factures")
     *
     */
    private $requerant;

    /**
     * @ORM\oneToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", mappedBy="facture")
     *
     */
    private $hospitalisation;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\Commande", cascade={"persist","remove"}, mappedBy="facture")
     */
    private $commandes;

    /**
     * @ORM\ManyToMany(targetEntity="hostoo\PharmacieBundle\Entity\Produit", cascade={"persist"})
     * @ORM\JoinColumn( nullable=true)
     */
    private $produits;

    /**
     * @ORM\OneToMany(targetEntity="Solde", mappedBy="facture")
     */
    private $soldes;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $percepteur;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Visa", cascade={"persist"})
     */
    private $visa;

    /**
     *
     * @ORM\OneToMany(targetEntity="OrdonnanceImg", cascade={"remove"}, mappedBy="facture")
     */
    private $img;

    /**
     *
     * @ORM\OneToMany(targetEntity="OrdonnanceLabo", cascade={"remove"}, mappedBy="facture")
     */
    private $labo;

    /**
     *
     * OneToMany(targetEntity="Caisse", mappedBy="facture")
     */
    private $paiements;

    public  function __construct()
    {
        $this->urgence=false;
        $this->prix=0;
        $this->validation=false;
        $this->solde=false;
        $this->lasolde=0;
        $this->datefacture=new \DateTime('now');
        $this->tarifications= new ArrayCollection;
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
     * Set datefacture
     *
     * @param \DateTime $datefacture
     * @return Facture
     */
    public function setDatefacture($datefacture)
    {
        $this->datefacture = $datefacture;

        return $this;
    }

    /**
     * Get datefacture
     *
     * @return \DateTime 
     */
    public function getDatefacture()
    {
        return $this->datefacture;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Facture
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set urgence
     *
     * @param boolean $urgence
     * @return Facture
     */
    public function setUrgence($urgence)
    {
        $this->urgence = $urgence;

        return $this;
    }

    /**
     * Get urgence
     *
     * @return boolean 
     */
    public function getUrgence()
    {
        return $this->urgence;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     * @return Facture
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean 
     */
    public function getValidation()
    {
        return $this->validation;
    }


    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Facture
     */
    public function setEpisode(\hostoo\SanteBundle\Entity\Episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \hostoo\SanteBundle\Entity\Episode 
     */
    public function getEpisode()
    {
        return $this->episode;
    }


    /**
     * Add soldes
     *
     * @param \hostoo\SanteBundle\Entity\Solde $soldes
     * @return Facture
     */
    public function addSolde(\hostoo\SanteBundle\Entity\Solde $soldes)
    {
        $this->soldes[] = $soldes;

        return $this;
    }

    /**
     * Remove soldes
     *
     * @param \hostoo\SanteBundle\Entity\Solde $soldes
     */
    public function removeSolde(\hostoo\SanteBundle\Entity\Solde $soldes)
    {
        $this->soldes->removeElement($soldes);
    }

    /**
     * Get soldes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSoldes()
    {
        return $this->soldes;
    }

    /**
     * Set solde
     *
     * @param boolean $solde
     * @return Facture
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return boolean 
     */
    public function getSolde()
    {
        return $this->solde;
    }

    public function resteAPayer()
    {
        $reste=0;
        $reste=$this->getPrix()-$this->getLasolde();
        return $reste;
    }

    /**
     * Set lasolde
     *
     * @param string $lasolde
     * @return Facture
     */
    public function setLasolde($lasolde)
    {
        $this->lasolde = $lasolde;

        return $this;
    }

    /**
     * Get lasolde
     *
     * @return string
     */
    public function getLasolde()
    {
        return $this->lasolde;
    }

    /**
     * Add produits
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produits
     * @return Facture
     */
    public function addProduit(\hostoo\PharmacieBundle\Entity\Produit $produits)
    {
        $this->produits[] = $produits;

        return $this;
    }

    /**
     * Remove produits
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produits
     */
    public function removeProduit(\hostoo\PharmacieBundle\Entity\Produit $produits)
    {
        $this->produits->removeElement($produits);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduits()
    {
        return $this->produits;
    }


    public function getActesFacture()
    {
        $str='<ul>';
        foreach ($this->getCommandes() as $com){
            foreach ($com->getTarifs() as $tar){
            $str.='<li>'.$tar->getActes()->getDesignationacte().'</li>';
        }
        }
        $str.='</ul>';
        return $str;
    }

    /**
     * Set percepteur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $percepteur
     * @return Facture
     */
    public function setPercepteur(\hostoo\UserBundle\Entity\Utilisateur $percepteur = null)
    {
        $this->percepteur = $percepteur;

        return $this;
    }

    /**
     * Get percepteur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getPercepteur()
    {
        return $this->percepteur;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return Facture
     */
    public function setHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation = null)
    {
        $this->hospitalisation = $hospitalisation;

        return $this;
    }

    /**
     * Get hospitalisation
     *
     * @return \hostoo\HospisBundle\Entity\Hospitalisation 
     */
    public function getHospitalisation()
    {
        return $this->hospitalisation;
    }

    /**
     * Set log
     *
     * @param string $log
     * @return Facture
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return string 
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set visa
     *
     * @param \hostoo\GestionBundle\Entity\Visa $visa
     * @return Facture
     */
    public function setVisa(\hostoo\GestionBundle\Entity\Visa $visa = null)
    {
        $this->visa = $visa;

        return $this;
    }

    /**
     * Get visa
     *
     * @return \hostoo\GestionBundle\Entity\Visa 
     */
    public function getVisa()
    {
        return $this->visa;
    }


    /**
     * Add commande
     *
     * @param \hostoo\GestionBundle\Entity\Commande $commande
     * @return Facture
     */
    public function addCommande(\hostoo\GestionBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;
        $commande->setFacture($this);

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \hostoo\GestionBundle\Entity\Commande $commande
     */
    public function removeCommande(\hostoo\GestionBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }



    /**
     * Set requerant
     *
     * @param \hostoo\SanteBundle\Entity\Requerant $requerant
     * @return Facture
     */
    public function setRequerant(\hostoo\SanteBundle\Entity\Requerant $requerant = null)
    {
        $this->requerant = $requerant;

        return $this;
    }

    /**
     * Get requerant
     *
     * @return \hostoo\SanteBundle\Entity\Requerant 
     */
    public function getRequerant()
    {
        return $this->requerant;
    }

    /**
     * Add img
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $img
     * @return Facture
     */
    public function addImg(\hostoo\SanteBundle\Entity\OrdonnanceImg $img)
    {
        $this->img[] = $img;

        return $this;
    }

    /**
     * Remove img
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $img
     */
    public function removeImg(\hostoo\SanteBundle\Entity\OrdonnanceImg $img)
    {
        $this->img->removeElement($img);
    }

    /**
     * Get img
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Add labo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $labo
     * @return Facture
     */
    public function addLabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $labo)
    {
        $this->labo[] = $labo;

        return $this;
    }

    /**
     * Remove labo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $labo
     */
    public function removeLabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $labo)
    {
        $this->labo->removeElement($labo);
    }

    /**
     * Get labo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLabo()
    {
        return $this->labo;
    }
}
