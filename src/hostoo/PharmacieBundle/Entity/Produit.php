<?php

namespace hostoo\PharmacieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="hostoo\PharmacieBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="origine", type="string", length=255, nullable=true)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="grammage", type="string", length=255, nullable=true)
     */
    private $grammage;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Emballage", cascade={"persist"})
     */
    private $boite;
    /**
     * @var int
     *
     * @ORM\Column(name="plaquette", type="integer" ,nullable=true)
     */
    private $plaquette;

    /**
     * @var int
     *
     * @ORM\Column(name="unite", type="integer" ,nullable=true)
     */
    private $unite;

    /**
     * @var int
     *
     * @ORM\Column(name="alert", type="integer", nullable=true)
     */
    private $alert;


    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="decimal" ,precision=10, scale=2)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateexp", type="datetime", nullable=true)
     */
    private $dateexp;

    /**
     * @ORM\ManyToOne(targetEntity="Cattheura", inversedBy="produit")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Nature", inversedBy="produit")
     */
    private $nature;


    /**
     * @ORM\ManyToMany(targetEntity="hostoo\SanteBundle\Entity\Formule", inversedBy="produit")
     */
    private $formule;

    /**
     * @ORM\OneToMany(targetEntity="Stock", mappedBy="produit_in")
     */
    private $stocks;

    /**
     * @ORM\OneToOne(targetEntity="StockTot", inversedBy="produit")
     */
    private $stocktot;

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
     * @return Produit
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
     * Set grammage
     *
     * @param string $grammage
     * @return Produit
     */
    public function setGrammage($grammage)
    {
        $this->grammage = $grammage;

        return $this;
    }

    /**
     * Get grammage
     *
     * @return string
     */
    public function getGrammage()
    {
        return $this->grammage;
    }

    /**
     * Set dateexp
     *
     * @param \DateTime $dateexp
     * @return Produit
     */
    public function setDateexp($dateexp)
    {
        $this->dateexp = $dateexp;

        return $this;
    }

    /**
     * Get dateexp
     *
     * @return \DateTime 
     */
    public function getDateexp()
    {
        return $this->dateexp;
    }

    /**
     * Set categorie
     *
     * @param \hostoo\PharmacieBundle\Entity\Cattheura $categorie
     * @return Produit
     */
    public function setCategorie(\hostoo\PharmacieBundle\Entity\Cattheura $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \hostoo\PharmacieBundle\Entity\Cattheura 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nature
     *
     * @param \hostoo\PharmacieBundle\Entity\Nature $nature
     * @return Produit
     */
    public function setNature(\hostoo\PharmacieBundle\Entity\Nature $nature = null)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return \hostoo\PharmacieBundle\Entity\Nature 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Produit
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
     * Constructor
     */
    public function __construct()
    {
        $this->prix=0;
        $this->formule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return Produit
     */
    public function addFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {
        $this->formule[] = $formule;

        return $this;
    }

    /**
     * Remove formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     */
    public function removeFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {
        $this->formule->removeElement($formule);
    }

    /**
     * Get formule
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set origine
     *
     * @param string $origine
     * @return Produit
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string 
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Add stocks
     *
     * @param \hostoo\PharmacieBundle\Entity\Stock $stocks
     * @return Produit
     */
    public function addStock(\hostoo\PharmacieBundle\Entity\Stock $stocks)
    {
        $this->stocks[] = $stocks;

        return $this;
    }

    /**
     * Remove stocks
     *
     * @param \hostoo\PharmacieBundle\Entity\Stock $stocks
     */
    public function removeStock(\hostoo\PharmacieBundle\Entity\Stock $stocks)
    {
        $this->stocks->removeElement($stocks);
    }

    /**
     * Get stocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStocks()
    {
        return $this->stocks;
    }


    /**
     * Set stocktot
     *
     * @param \hostoo\PharmacieBundle\Entity\StockTot $stocktot
     * @return Produit
     */
    public function setStocktot(\hostoo\PharmacieBundle\Entity\StockTot $stocktot = null)
    {
        $this->stocktot = $stocktot;

        return $this;
    }

    /**
     * Get stocktot
     *
     * @return \hostoo\PharmacieBundle\Entity\StockTot 
     */
    public function getStocktot()
    {
        return $this->stocktot;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->nom;
    }

    /**
     * Set plaquette
     *
     * @param integer $plaquette
     * @return Produit
     */
    public function setPlaquette($plaquette)
    {
        $this->plaquette = $plaquette;

        return $this;
    }

    /**
     * Get plaquette
     *
     * @return integer 
     */
    public function getPlaquette()
    {
        return $this->plaquette;
    }

    /**
     * Set unite
     *
     * @param integer $unite
     * @return Produit
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return integer 
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set boite
     *
     * @param \hostoo\SanteBundle\Entity\Emballage $boite
     * @return Produit
     */
    public function setBoite(\hostoo\SanteBundle\Entity\Emballage $boite = null)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return \hostoo\SanteBundle\Entity\Emballage 
     */
    public function getBoite()
    {
        return $this->boite;
    }

    public function enDetails()
    {
        if($this->getPlaquette()>0){

            return $this->getUnite()*$this->getPlaquette();
        }
        return $this->getUnite();
    }

    /**
     * Set alert
     *
     * @param integer $alert
     * @return Produit
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;

        return $this;
    }

    /**
     * Get alert
     *
     * @return integer 
     */
    public function getAlert()
    {
        return $this->alert;
    }
}
