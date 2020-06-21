<?php

namespace hostoo\PharmacieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cattheura
 *
 * @ORM\Table(name="cattheura")
 * @ORM\Entity(repositoryClass="hostoo\PharmacieBundle\Repository\CattheuraRepository")
 */
class Cattheura
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
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="categorie")
     */
    private $produit;

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
     * @return Cattheura
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
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produit
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produit
     * @return Cattheura
     */
    public function addProduit(\hostoo\PharmacieBundle\Entity\Produit $produit)
    {
        $this->produit[] = $produit;

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
}
