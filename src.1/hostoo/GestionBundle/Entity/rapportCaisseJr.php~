<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rapportCaisseJr
 *
 * @ORM\Table(name="rapport_caisse_jr")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\rapportCaisseJrRepository")
 */
class rapportCaisseJr
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
     * @ORM\Column(name="numdoc", type="string", length=255)
     */
    private $numdoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterap", type="datetime")
     */
    private $daterap;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="report", type="decimal", precision=10, scale=2)
     */
    private $report;

    /**
     * @var string
     *
     * @ORM\Column(name="recettebrute", type="decimal", precision=10, scale=2)
     */
    private $recettebrute;

    /**
     * @var string
     *
     * @ORM\Column(name="depenseusd", type="decimal", precision=10, scale=2)
     */
    private $depenseusd;

    /**
     * @var string
     *
     * @ORM\Column(name="depensecdf", type="decimal", precision=10, scale=2)
     */
    private $depensecdf;

    /**
     * @var string
     *
     * @ORM\Column(name="recettenet", type="decimal", precision=10, scale=2)
     */
    private $recettenet;

    /**
     * @var string
     *
     * @ORM\Column(name="justificatif", type="string", length=255, nullable=true)
     */
    private $justificatif;

    /**
     * @var string
     *
     * @ORM\Column(name="medecin", type="string", length=255, nullable=true)
     */
    private $medecin;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    public function __construct()
    {
        $this->daterap=new \DateTime('now');
        $this->medecin='RAS';
        $this->depensecdf=0;
        $this->depenseusd=0;
        $this->recettebrute=0;
        $this->recettenet=0;
        $this->report=0;
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
     * Set numdoc
     *
     * @param string $numdoc
     * @return rapportCaisseJr
     */
    public function setNumdoc($numdoc)
    {
        $this->numdoc = $numdoc;

        return $this;
    }

    /**
     * Get numdoc
     *
     * @return string 
     */
    public function getNumdoc()
    {
        return $this->numdoc;
    }

    /**
     * Set daterap
     *
     * @param \DateTime $daterap
     * @return rapportCaisseJr
     */
    public function setDaterap($daterap)
    {
        $this->daterap = $daterap;

        return $this;
    }

    /**
     * Get daterap
     *
     * @return \DateTime 
     */
    public function getDaterap()
    {
        return $this->daterap;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return rapportCaisseJr
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set report
     *
     * @param string $report
     * @return rapportCaisseJr
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return string 
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set recettebrute
     *
     * @param string $recettebrute
     * @return rapportCaisseJr
     */
    public function setRecettebrute($recettebrute)
    {
        $this->recettebrute = $recettebrute;

        return $this;
    }

    /**
     * Get recettebrute
     *
     * @return string 
     */
    public function getRecettebrute()
    {
        return $this->recettebrute;
    }

    /**
     * Set depenseusd
     *
     * @param string $depenseusd
     * @return rapportCaisseJr
     */
    public function setDepenseusd($depenseusd)
    {
        $this->depenseusd = $depenseusd;

        return $this;
    }

    /**
     * Get depenseusd
     *
     * @return string 
     */
    public function getDepenseusd()
    {
        return $this->depenseusd;
    }

    /**
     * Set depensecdf
     *
     * @param string $depensecdf
     * @return rapportCaisseJr
     */
    public function setDepensecdf($depensecdf)
    {
        $this->depensecdf = $depensecdf;

        return $this;
    }

    /**
     * Get depensecdf
     *
     * @return string 
     */
    public function getDepensecdf()
    {
        return $this->depensecdf;
    }

    /**
     * Set recettenet
     *
     * @param string $recettenet
     * @return rapportCaisseJr
     */
    public function setRecettenet($recettenet)
    {
        $this->recettenet = $recettenet;

        return $this;
    }

    /**
     * Get recettenet
     *
     * @return string 
     */
    public function getRecettenet()
    {
        return $this->recettenet;
    }

    /**
     * Set justificatif
     *
     * @param string $justificatif
     * @return rapportCaisseJr
     */
    public function setJustificatif($justificatif)
    {
        $this->justificatif = $justificatif;

        return $this;
    }

    /**
     * Get justificatif
     *
     * @return string 
     */
    public function getJustificatif()
    {
        return $this->justificatif;
    }

    /**
     * Set medecin
     *
     * @param string $medecin
     * @return rapportCaisseJr
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return string 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return rapportCaisseJr
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
