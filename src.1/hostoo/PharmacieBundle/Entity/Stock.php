<?php

namespace hostoo\PharmacieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="hostoo\PharmacieBundle\Repository\StockRepository")
 */
class Stock
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
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datestock", type="datetime")
     */
    private $datestock;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="Produit", cascade={"persist"})
     */
    private $produit_in;

    public function __construct()
    {
        //$this->setAuteur($t('fos_user.user_manager')->getUser());
        $this->datestock= new \DateTime();
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
     * Set qte
     *
     * @param integer $qte
     * @return Stock
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set datestock
     *
     * @param \DateTime $datestock
     * @return Stock
     */
    public function setDatestock($datestock)
    {
        $this->datestock = $datestock;

        return $this;
    }

    /**
     * Get datestock
     *
     * @return \DateTime 
     */
    public function getDatestock()
    {
        return $this->datestock;
    }

    /**
     * Set produit_in
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produitIn
     * @return Stock
     */
    public function setProduitIn(\hostoo\PharmacieBundle\Entity\Produit $produitIn = null)
    {
        $this->produit_in = $produitIn;

        return $this;
    }

    /**
     * Get produit_in
     *
     * @return \hostoo\PharmacieBundle\Entity\Produit 
     */
    public function getProduitIn()
    {
        return $this->produit_in;
    }

    /**
     * Set auteur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $auteur
     * @return Stock
     */
    public function setAuteur(\hostoo\UserBundle\Entity\Utilisateur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
