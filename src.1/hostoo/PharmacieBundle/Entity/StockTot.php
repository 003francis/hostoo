<?php

namespace hostoo\PharmacieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockTot
 *
 * @ORM\Table(name="stocktot")
 * @ORM\Entity(repositoryClass="hostoo\PharmacieBundle\Repository\StockTotRepository")
 */
class StockTot
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
     * @ORM\OneToOne(targetEntity="Produit", mappedBy="stocktot")
     */
    private $produit;

    public function __construct()
    {
        $this->qte=0;

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
     * @return StockTot
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
     * Set produit
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produit
     * @return StockTot
     */
    public function setProduit(\hostoo\PharmacieBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \hostoo\PharmacieBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
