<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QteReq
 *
 * @ORM\Table(name="qte_req")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\QteReqRepository")
 */
class QteReq
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
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=10, nullable=true)
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity="Article")
     */
    private $article;

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
     * @return QteReq
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
     * Set unit
     *
     * @param string $unit
     * @return QteReq
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set article
     *
     * @param \hostoo\GestionBundle\Entity\Article $article
     * @return QteReq
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
}
