<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdonnanceLabo
 *
 * @ORM\Table(name="ordonnancelabo")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\OrdonnanceLaboRepository")
 */
class OrdonnanceLabo
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
     * @ORM\Column(name="dateordo", type="datetime")
     */
    private $dateordo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var boolean
     *
     * @ORM\Column(name="livre", type="boolean")
     */
    private $livre;

    /**
     * @ORM\OneToMany(targetEntity="Tarification", mappedBy="ordonnancelabos")
     */
    private $actes;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="ordonnancelabos")
     *
     */
    private $episode;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", inversedBy="ordonnancelabos")
     *
     */
    private $hospitalisation;

    /**
     * @ORM\OneToMany(targetEntity="ResultatsLabo", mappedBy="ordonnance", cascade={"remove"})
     */
    private $resultats;

    /**
     * @ORM\ManyToOne(targetEntity="Facture", inversedBy="labo")
     */
    private $facture;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", inversedBy="ordonnancelabos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medecin;


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
     * Set dateordo
     *
     * @param \DateTime $dateordo
     * @return OrdonnanceLabo
     */
    public function setDateordo($dateordo)
    {
        $this->dateordo = $dateordo;

        return $this;
    }

    /**
     * Get dateordo
     *
     * @return \DateTime
     */
    public function getDateordo()
    {
        return $this->dateordo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actes= new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateordo= new \DateTime('now');
        $this->valider=false;
        $this->livre=false;
    }


    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return OrdonnanceLabo
     */
    public function setEpisode(\hostoo\SanteBundle\Entity\Episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \hostoo\SanteBundle\Entity\Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     * @return OrdonnanceLabo
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set livre
     *
     * @param boolean $livre
     * @return OrdonnanceLabo
     */
    public function setLivre($livre)
    {
        $this->livre = $livre;

        return $this;
    }

    /**
     * Get livre
     *
     * @return boolean
     */
    public function getLivre()
    {
        return $this->livre;
    }




    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return OrdonnanceLabo
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

    /**
     * Add resultats
     *
     * @param \hostoo\SanteBundle\Entity\ResultatsLabo $resultats
     * @return OrdonnanceLabo
     */
    public function addResultat(\hostoo\SanteBundle\Entity\ResultatsLabo $resultats)
    {
        $this->resultats[] = $resultats;
        $resultats->setOrdonnance($this);

        return $this;
    }

    /**
     * Remove resultats
     *
     * @param \hostoo\SanteBundle\Entity\ResultatsLabo $resultats
     */
    public function removeResultat(\hostoo\SanteBundle\Entity\ResultatsLabo $resultats)
    {
        $this->resultats->removeElement($resultats);
    }

    /**
     * Get resultats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResultats()
    {
        return $this->resultats;
    }

    public function mesResultats($res)
    {
        foreach ($this->getResultats() as $mesres){
            if($mesres->getId() ==$res)
            {
                return $res;
            }
        }
        return null;
    }

    /**
     * Add actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     * @return OrdonnanceLabo
     */
    public function addActe(\hostoo\SanteBundle\Entity\Tarification $actes)
    {
        $this->actes[] = $actes;

        return $this;
    }

    /**
     * Remove actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     */
    public function removeActe(\hostoo\SanteBundle\Entity\Tarification $actes)
    {
        $this->actes->removeElement($actes);
    }

    /**
     * Get actes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActes()
    {
        return $this->actes;
    }


    public function afficherResultat($acte)
    {
        foreach ($this->getResultats() as $res) {
            if ($res->getActe()->getActes()->getId() == $acte) {
                if ($res->getResultat() != null) {
                    return $res->getResultat();
                } else {
                    return "En Attente";
                }
            }
        }
        return null;
    }

    public function nombresActes($acte,$categ)
    {
        $som=0;
        foreach ($this->getResultats() as $resultat){
            if($resultat->getActe()->getId() == $acte && $resultat->getOrdonnance()->getEpisode()->getPatient()->getConvention()->getId() == $categ){
                $som++;
            }
        }

        return $som;

    }


    public function examensEnAttente()
    {
        $nonfait = 0;
        foreach ($this->getResultats() as $res) {
            if ($res->getAttente() == 1 && ($res->getResultat() != null || $res->getResultat() != "")) {
                $nonfait++;

            }

        }
        return $nonfait;
    }


    public function examensEffectues()
    {
        $fait=0;
        foreach ($this->getResultats() as $res)
        {
            if($res->getAttente() == 0  ){
                $fait++;
            }

        }
        return $fait;
    }

    public function Etat()
    {
        if($this->examensEffectues() - $this->examensEnAttente()  == 0){
            return true;
        }
        return false;
    }

    /**
     * Set medecin
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $medecin
     * @return OrdonnanceLabo
     */
    public function setMedecin(\hostoo\UserBundle\Entity\Utilisateur $medecin = null)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return OrdonnanceLabo
     */
    public function setHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation = null)
    {
        $this->hospitalisation = $hospitalisation;

        return $this;
    }

    /**
     * Get hospitalisation
     *
     * @return \hostoo\HospisBundle\Entity\Hospitalisation 
     */
    public function getHospitalisation()
    {
        return $this->hospitalisation;
    }
}
