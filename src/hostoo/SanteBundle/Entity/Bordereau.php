<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bordereau
 *
 * @ORM\Table(name="bordereau")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\BordereauRepository")
 */
class Bordereau
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
     * @ORM\Column(name="datedujour", type="datetime")
     */
    private $datedujour;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Patient", cascade={"persist"}, inversedBy="bordereaux")
     */
    private $demandeur;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Patient", cascade={"persist"})
     */
    private $beneficiaire;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Tarification", mappedBy="bordereaux")
     */
    private $lesactes;

    /**
     *
     * @ORM\OneToOne(targetEntity="Facture", cascade={"persist"})
     */
    private $facture;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Service", cascade={"persist"})
     */
    private $service;

    /**
     * @var bool
     * @ORM\Column(name="estvalide", type="boolean", nullable=true)
     */
    private $estvalide;


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
     * Set datedujour
     *
     * @param \DateTime $datedujour
     * @return Bordereau
     */
    public function setDatedujour($datedujour)
    {
        $this->datedujour = $datedujour;

        return $this;
    }

    /**
     * Get datedujour
     *
     * @return \DateTime 
     */
    public function getDatedujour()
    {
        return $this->datedujour;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estvalide=false;
        $this->datedujour= new \DateTime('now');
        $this->lesactes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesactes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $lesactes
     * @return Bordereau
     */
    public function addLesacte(\hostoo\SanteBundle\Entity\Tarification $lesactes)
    {
        $this->lesactes[] = $lesactes;
        $lesactes->addBordereaux($this);

        return $this;
    }

    /**
     * Remove lesactes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $lesactes
     */
    public function removeLesacte(\hostoo\SanteBundle\Entity\Tarification $lesactes)
    {
        $this->lesactes->removeElement($lesactes);
    }

    /**
     * Get lesactes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLesactes()
    {
        return $this->lesactes;
    }

    /**
     * Set demandeur
     *
     * @param \hostoo\SanteBundle\Entity\Patient $demandeur
     * @return Bordereau
     */
    public function setDemandeur(\hostoo\SanteBundle\Entity\Patient $demandeur = null)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set beneficiaire
     *
     * @param \hostoo\SanteBundle\Entity\Patient $beneficiaire
     * @return Bordereau
     */
    public function setBeneficiaire(\hostoo\SanteBundle\Entity\Patient $beneficiaire = null)
    {
        $this->beneficiaire = $beneficiaire;

        return $this;
    }

    /**
     * Get beneficiaire
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getBeneficiaire()
    {
        return $this->beneficiaire;
    }

    public function lesActesParCategories($categorie)
    {
        $tar=array();
        foreach ($this->getLesactes() as $mesactes)
        {
          if($mesactes->getCategories()->getId()==$categorie)
          {
              $tar[]=$mesactes;
          }
        }
        return $tar;
    }


    /**
     * Set estvalide
     *
     * @param boolean $estvalide
     * @return Bordereau
     */
    public function setEstvalide($estvalide)
    {
        $this->estvalide = $estvalide;

        return $this;
    }

    /**
     * Get estvalide
     *
     * @return boolean 
     */
    public function getEstvalide()
    {
        return $this->estvalide;
    }

    /**
     * Set service
     *
     * @param \hostoo\SanteBundle\Entity\Service $service
     * @return Bordereau
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

    public function monActe($acte)
    {
        foreach ($this->getLesactes() as $actes)
        {
            if ($actes->getId() == $acte){
                return $actes;
            }
        }
        return null;
    }

    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Bordereau
     */
    public function setFacture(\hostoo\SanteBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \hostoo\SanteBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
}
