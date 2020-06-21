<?php

namespace hostoo\HospisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospitalisation
 *
 * @ORM\Table(name="hospitalisation")
 * @ORM\Entity(repositoryClass="hostoo\HospisBundle\Repository\HospitalisationRepository")
 */
class Hospitalisation
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
     * @ORM\Column(name="datehospi", type="datetime")
     */
    private $datehospi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesortie", type="datetime", nullable=true)
     */
    private $datesortie;

    /**
     * @var string
     *
     * @ORM\Column(name="typehospitalisation", type="string", length=255, nullable=true)
     */
    private $typehospitalisation;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\Santebundle\Entity\Patient", inversedBy="hospitatilisations")
     */
    private $patient;
    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\Userbundle\Entity\Utilisateur", inversedBy="hospitalisations")
     */
    private $medecin;


    /**
     *
     * @ORM\ManyToOne(targetEntity="Chambre", inversedBy="hospitatilisations")
     */
    private $chambre;

    /**
     *
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Facture", inversedBy="hospitalisation")
     */
    private $facture;

    /**
     *
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Consultation", mappedBy="hospitalisation")
     */
    private $consult;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Ordonnance", mappedBy="hospitalisation")
     */
    private $ordonnances;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceLabo", mappedBy="hospitalisation")
     */
    private $ordonnancelabos;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceImg", mappedBy="hospitalisation")
     */
    private $ordonnanceimgs;
    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Caisse", mappedBy="hospitalisation")
     */
    private $caisses;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    public function __construct()
    {
        $this->datehospi = new \DateTime('now');
    }

    /**
     * Set datehospi
     *
     * @param \DateTime $datehospi
     * @return Hospitalisation
     */
    public function setDatehospi($datehospi)
    {
        $this->datehospi = $datehospi;

        return $this;
    }

    /**
     * Get datehospi
     *
     * @return \DateTime
     */
    public function getDatehospi()
    {
        return $this->datehospi;
    }

    /**
     * Set datesortie
     *
     * @param \DateTime $datesortie
     * @return Hospitalisation
     */
    public function setDatesortie($datesortie)
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    /**
     * Get datesortie
     *
     * @return \DateTime
     */
    public function getDatesortie()
    {
        return $this->datesortie;
    }

    /**
     * Set typehospitalisation
     *
     * @param string $typehospitalisation
     * @return Hospitalisation
     */
    public function setTypehospitalisation($typehospitalisation)
    {
        $this->typehospitalisation = $typehospitalisation;

        return $this;
    }

    /**
     * Get typehospitalisation
     *
     * @return string
     */
    public function getTypehospitalisation()
    {
        return $this->typehospitalisation;
    }

    /**
     * Set patient
     *
     * @param \hostoo\Santebundle\Entity\Patient $patient
     * @return Hospitalisation
     */
    public function setPatient(\hostoo\Santebundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \hostoo\Santebundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set medecin
     *
     * @param \hostoo\Userbundle\Entity\Utilisateur $medecin
     * @return Hospitalisation
     */
    public function setMedecin(\hostoo\Userbundle\Entity\Utilisateur $medecin = null)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \hostoo\Userbundle\Entity\Utilisateur
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set chambre
     *
     * @param \hostoo\HospisBundle\Entity\Chambre $chambre
     * @return Hospitalisation
     */
    public function setChambre(\hostoo\HospisBundle\Entity\Chambre $chambre = null)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return \hostoo\HospisBundle\Entity\Chambre
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "H" . $this->id . "/" . date_format($this->datehospi, 'Y-m');
    }

    /**
     * Add ordonnances
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ordonnances
     * @return Hospitalisation
     */
    public function addOrdonnance(\hostoo\SanteBundle\Entity\Ordonnance $ordonnances)
    {
        $this->ordonnances[] = $ordonnances;

        return $this;
    }

    /**
     * Remove ordonnances
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ordonnances
     */
    public function removeOrdonnance(\hostoo\SanteBundle\Entity\Ordonnance $ordonnances)
    {
        $this->ordonnances->removeElement($ordonnances);
    }

    /**
     * Get ordonnances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrdonnances()
    {
        return $this->ordonnances;
    }

    /**
     * Add ordonnancelabos
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabos
     * @return Hospitalisation
     */
    public function addOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabos)
    {
        $this->ordonnancelabos[] = $ordonnancelabos;

        return $this;
    }

    /**
     * Remove ordonnancelabos
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabos
     */
    public function removeOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabos)
    {
        $this->ordonnancelabos->removeElement($ordonnancelabos);
    }

    /**
     * Get ordonnancelabos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrdonnancelabos()
    {
        return $this->ordonnancelabos;
    }

    /**
     * Add ordonnanceimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs
     * @return Hospitalisation
     */
    public function addOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs)
    {
        $this->ordonnanceimgs[] = $ordonnanceimgs;

        return $this;
    }

    /**
     * Remove ordonnanceimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs
     */
    public function removeOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimgs)
    {
        $this->ordonnanceimgs->removeElement($ordonnanceimgs);
    }

    /**
     * Get ordonnanceimgs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrdonnanceimgs()
    {
        return $this->ordonnanceimgs;
    }

    /**
     * Add caisses
     *
     * @param \hostoo\SanteBundle\Entity\Caisse $caisses
     * @return Hospitalisation
     */
    public function addCaiss(\hostoo\SanteBundle\Entity\Caisse $caisses)
    {
        $this->caisses[] = $caisses;

        return $this;
    }

    /**
     * Remove caisses
     *
     * @param \hostoo\SanteBundle\Entity\Caisse $caisses
     */
    public function removeCaiss(\hostoo\SanteBundle\Entity\Caisse $caisses)
    {
        $this->caisses->removeElement($caisses);
    }

    /**
     * Get caisses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaisses()
    {
        return $this->caisses;
    }

    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Hospitalisation
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


    public function Cloture()
    {
        $this->datesortie= new \DateTime('now');
        return $this;
    }


    /**
     * Set consult
     *
     * @param \hostoo\SanteBundle\Entity\Consultation $consult
     * @return Hospitalisation
     */
    public function setConsult(\hostoo\SanteBundle\Entity\Consultation $consult = null)
    {
        $this->consult = $consult;

        return $this;
    }

    /**
     * Get consult
     *
     * @return \hostoo\SanteBundle\Entity\Consultation 
     */
    public function getConsult()
    {
        return $this->consult;
    }
}
