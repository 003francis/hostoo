<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaractProduit
 *
 * @ORM\Table(name="caract_produit")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\CaractProduitRepository")
 */
class CaractProduit
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
     * @var int
     *
     * @ORM\Column(name="reste", type="integer")
     */
    private $reste;

    /**
     *
     * @ORM\OneToOne(targetEntity="Article", inversedBy="prodstock")
     *
     */
    private $article;

    public function __construct()
    {
        $this->qte=0;
        $this->reste=0;
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
     * @return CaractProduit
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
     * Set qteRest
     *
     * @param integer $qteRest
     * @return CaractProduit
     */
    public function setQteRest($qteRest)
    {
        $this->qteRest = $qteRest;

        return $this;
    }

    /**
     * Get qteRest
     *
     * @return integer 
     */
    public function getQteRest()
    {
        return $this->qteRest;
    }

    /**
     * Set article
     *
     * @param \hostoo\GestionBundle\Entity\Article $article
     * @return CaractProduit
     */
    public function setArticle(\hostoo\GestionBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \hostoo\GestionBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set reste
     *
     * @param integer $reste
     * @return CaractProduit
     */
    public function setReste($reste)
    {
        $this->reste = $reste;

        return $this;
    }

    /**
     * Get reste
     *
     * @return integer 
     */
    public function getReste()
    {
        return $this->reste;
    }
}
