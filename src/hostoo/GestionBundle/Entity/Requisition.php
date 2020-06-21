<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requisition
 *
 * @ORM\Table(name="requisition")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\RequisitionRepository")
 */
class Requisition
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
     * @ORM\ManyToMany(targetEntity="QteReq" , cascade={"persist"})
     */
    private $qtereq;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateops", type="datetime")
     */
    private $dateops;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur")
     */
    private $demandeur;

    /**
     * @var bool
     *
     * @ORM\Column(name="approuver", type="boolean", nullable=true)
     */
    private $approuver;

    /**
     * @var bool
     *
     * @ORM\Column(name="livrer", type="boolean", nullable=true)
     */
    private $livrer;

    /**
     * @var string
     *
     * @ORM\Column(name="prixcdf", type="decimal", precision=10, scale=2)
     */
    private $prixcdf;

    /**
     * @var string
     *
     * @ORM\Column(name="prixusd", type="decimal", precision=10, scale=2)
     */
    private $prixusd;



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
     * Set observation
     *
     * @param string $observation
     * @return Requisition
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateops=new \DateTime('now');
        $this->approuver=false;
        $this->livrer=false;
        $this->prixcdf=0;
        $this->prixusd=0;
    }

    /**
     * Set dateops
     *
     * @param \DateTime $dateops
     * @return Requisition
     */
    public function setDateops($dateops)
    {
        $this->dateops = $dateops;

        return $this;
    }

    /**
     * Get dateops
     *
     * @return \DateTime 
     */
    public function getDateops()
    {
        return $this->dateops;
    }

    /**
     * Add qtereq
     *
     * @param \hostoo\GestionBundle\Entity\QteReq $qtereq
     * @return Requisition
     */
    public function addQtereq(\hostoo\GestionBundle\Entity\QteReq $qtereq)
    {
        $this->qtereq[] = $qtereq;

        return $this;
    }

    /**
     * Remove qtereq
     *
     * @param \hostoo\GestionBundle\Entity\QteReq $qtereq
     */
    public function removeQtereq(\hostoo\GestionBundle\Entity\QteReq $qtereq)
    {
        $this->qtereq->removeElement($qtereq);
    }

    /**
     * Get qtereq
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQtereq()
    {
        return $this->qtereq;
    }

    /**
     * Set demandeur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $demandeur
     * @return Requisition
     */
    public function setDemandeur(\hostoo\UserBundle\Entity\Utilisateur $demandeur = null)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set approuver
     *
     * @param boolean $approuver
     * @return Requisition
     */
    public function setApprouver($approuver)
    {
        $this->approuver = $approuver;

        return $this;
    }

    /**
     * Get approuver
     *
     * @return boolean 
     */
    public function getApprouver()
    {
        return $this->approuver;
    }

    /**
     * Set livrer
     *
     * @param boolean $livrer
     * @return Requisition
     */
    public function setLivrer($livrer)
    {
        $this->livrer = $livrer;

        return $this;
    }

    /**
     * Get livrer
     *
     * @return boolean 
     */
    public function getLivrer()
    {
        return $this->livrer;
    }

    /**
     * Set prixcdf
     *
     * @param string $prixcdf
     * @return Requisition
     */
    public function setPrixcdf($prixcdf)
    {
        $prixcdf=0;
        foreach($this->getQtereq() as $mesarticles)
        {
            if($mesarticles->getArticle()!=null) {
                if ($mesarticles->getArticle()->getDevise() == 2) {
                    $prixcdf += $mesarticles->getArticle()->getPrix();
                }
            }

        }
        $this->prixcdf = $prixcdf;

        return $this;
    }

    /**
     * Get prixcdf
     *
     * @return string 
     */
    public function getPrixcdf()
    {
        return $this->prixcdf;
    }

    /**
     * Set prixusd
     *
     * @param string $prixusd
     * @return Requisition
     */
    public function setPrixusd($prixusd)
    {
        $prixusd=0;
        foreach($this->getQtereq() as $mesarticles)
        {
            if($mesarticles->getArticle()!=null){
            if($mesarticles->getArticle()->getDevise()==1){
                $prixusd+=$mesarticles->getArticle()->getPrix();
            }
            }
        }
        $this->prixusd = $prixusd;

        return $this;
    }

    /**
     * Get prixusd
     *
     * @return string 
     */
    public function getPrixusd()
    {
        return $this->prixusd;
    }
}
