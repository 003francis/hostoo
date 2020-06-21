<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdonnanceImg
 *
 * @ORM\Table(name="ordonnanceimg")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\OrdonnanceImgRepository")
 */
class OrdonnanceImg
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
     * @ORM\OneToMany(targetEntity="Tarification", mappedBy="ordonnanceimg")
     */
    private $actes;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="ordonnanceimgs")
     *
     */
    private $episode;


    /**
     * @ORM\ManyToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", inversedBy="ordonnanceimgs")
     *
     */
    private $hospitalisation;
    /**
     * @ORM\OneToMany(targetEntity="ResultatsImg", mappedBy="ordonnance")
     */
    private $resultats;

    /**
     * @ORM\ManyToOne(targetEntity="Facture", cascade={"persist"})
     */
    private $facture;
    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"}, inversedBy="ordonnancesimgs")
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
     * @return OrdonnanceImg
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
        $this->dateordo= new \DateTime('now');
        $this->valider=false;
        $this->livre=false;
    }


    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return OrdonnanceImg
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
     * @return OrdonnanceImg
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
     * @return OrdonnanceImg
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
     * @return OrdonnanceImg
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
     * @param \hostoo\SanteBundle\Entity\ResultatsImg $resultats
     * @return OrdonnanceImg
     */
    public function addResultat(\hostoo\SanteBundle\Entity\ResultatsImg $resultats)
    {
        $this->resultats[] = $resultats;
        $resultats->setOrdonnance($this);

        return $this;
    }

    /**
     * Remove resultats
     *
     * @param \hostoo\SanteBundle\Entity\ResultatsImg $resultats
     */
    public function removeResultat(\hostoo\SanteBundle\Entity\ResultatsImg $resultats)
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
        if(($this->examensEnAttente()- $this->examensEffectues()) == 0){
            return true;
        }
        return false;
    }

    /**
     * Set medecin
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $medecin
     * @return OrdonnanceImg
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
     * Add actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     * @return OrdonnanceImg
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

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return OrdonnanceImg
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
