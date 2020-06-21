<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;
    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=255, nullable=true)
     */
    private $unite;
    /**
     * @var string
     *
     * @ORM\Column(name="caracteristique", type="string", length=255, nullable=true)
     */
    private $caracteristique;



    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=3, nullable=true)
     */
    private $devise;


    /**
     * @var int
     *
     * @ORM\Column(name="seuil", type="integer", nullable=true)
     */
    private $seuil;

    /**
     *
     * @ORM\OneToOne(targetEntity="CaractProduit", mappedBy="article")
     *
     */
    private $prodstock;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Service", inversedBy="article")
     *
     */
    private $service;


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
     * Set designation
     *
     * @param string $designation
     * @return Article
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }


    /**
     * Set prodstock
     *
     * @param \hostoo\GestionBundle\Entity\CaractProduit $prodstock
     * @return Article
     */
    public function setProdstock(\hostoo\GestionBundle\Entity\CaractProduit $prodstock = null)
    {
        $this->prodstock = $prodstock;

        return $this;
    }

    /**
     * Get prodstock
     *
     * @return \hostoo\GestionBundle\Entity\CaractProduit 
     */
    public function getProdstock()
    {
        return $this->prodstock;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->designation;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return Article
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
     * Set service
     *
     * @param \hostoo\SanteBundle\Entity\Service $service
     * @return Article
     */
    public function setService(\hostoo\SanteBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \hostoo\SanteBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    public function ajouterQte($qte)
    {
        $this->getProdstock()->setQte($this->getProdstock()->getQte()+$qte);
        return $this;
    }
    public function soustraireQte($qte)
    {
        if($this->getProdstock()->getQte()>$qte){

            $this->getProdstock()->setQte($this->getProdstock()->getQte()-$qte);
        }
        return $this;
    }

    /**
     * Set unite
     *
     * @param string $unite
     * @return Article
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string 
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set caracteristique
     *
     * @param string $caracteristique
     * @return Article
     */
    public function setCaracteristique($caracteristique)
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    /**
     * Get caracteristique
     *
     * @return string 
     */
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }

    /**
     * Set seuil
     *
     * @param integer $seuil
     * @return Article
     */
    public function setSeuil($seuil)
    {
        $this->seuil = $seuil;

        return $this;
    }

    /**
     * Get seuil
     *
     * @return integer 
     */
    public function getSeuil()
    {
        return $this->seuil;
    }
}
