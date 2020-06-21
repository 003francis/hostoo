<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requerant
 *
 * @ORM\Table(name="requerant")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\RequerantRepository")
 */
class Requerant
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
     * @ORM\Column(name="postnom", type="string", length=255, nullable=true)
     */
    private $postnom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date")
     */
    private $dateDeNaissance;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     *
     * @ORM\OneToMany(targetEntity="Facture", cascade={"persist"}, mappedBy="requerant")
     */
    private $factures;

    /**
     *
     * @ORM\OneToMany(targetEntity="OrdonnanceLabo", cascade={"persist"}, mappedBy="requerant")
     */
    private $ordonnancesLabo;

    /**
     *
     * @ORM\OneToMany(targetEntity="OrdonnanceImg", cascade={"persist"}, mappedBy="requerant")
     */
    private $ordonnancesImg;


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
     * @return Requerant
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
     * Set postnom
     *
     * @param string $postnom
     * @return Requerant
     */
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;

        return $this;
    }

    /**
     * Get postnom
     *
     * @return string 
     */
    public function getPostnom()
    {
        return $this->postnom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Requerant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     * @return Requerant
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime 
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Requerant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Requerant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->factures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add factures
     *
     * @param \hostoo\SanteBundle\Entity\Facture $factures
     * @return Requerant
     */
    public function addFacture(\hostoo\SanteBundle\Entity\Facture $factures)
    {
        $this->factures[] = $factures;

        return $this;
    }

    /**
     * Remove factures
     *
     * @param \hostoo\SanteBundle\Entity\Facture $factures
     */
    public function removeFacture(\hostoo\SanteBundle\Entity\Facture $factures)
    {
        $this->factures->removeElement($factures);
    }

    /**
     * Get factures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * Add ordonnancesLabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancesLabo
     * @return Requerant
     */
    public function addOrdonnancesLabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancesLabo)
    {
        $this->ordonnancesLabo[] = $ordonnancesLabo;

        return $this;
    }

    /**
     * Remove ordonnancesLabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancesLabo
     */
    public function removeOrdonnancesLabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancesLabo)
    {
        $this->ordonnancesLabo->removeElement($ordonnancesLabo);
    }

    /**
     * Get ordonnancesLabo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnancesLabo()
    {
        return $this->ordonnancesLabo;
    }

    /**
     * Add ordonnancesImg
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnancesImg
     * @return Requerant
     */
    public function addOrdonnancesImg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnancesImg)
    {
        $this->ordonnancesImg[] = $ordonnancesImg;

        return $this;
    }

    /**
     * Remove ordonnancesImg
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnancesImg
     */
    public function removeOrdonnancesImg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnancesImg)
    {
        $this->ordonnancesImg->removeElement($ordonnancesImg);
    }

    /**
     * Get ordonnancesImg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnancesImg()
    {
        return $this->ordonnancesImg;
    }
}
