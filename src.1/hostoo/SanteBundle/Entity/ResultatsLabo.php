<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultatsLabo
 *
 * @ORM\Table(name="resultats_labo")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ResultatsLaboRepository")
 */
class ResultatsLabo
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
     * @ORM\Column(name="dateresultat", type="datetime")
     */
    private $dateresultat;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="text", nullable=true)
     */
    private $resultat;

    /**
     * @var bool
     *
     * @ORM\Column(name="attente", type="boolean")
     */
    private $attente;

    /**
     * @ORM\ManyToOne(targetEntity="OrdonnanceLabo", inversedBy="resultats")
     * @ORM\JoinColumn(name="ordonnance_id", referencedColumnName="id")
     */
    private $ordonnance;

    /**
     * @ORM\ManyToOne(targetEntity="\hostoo\GestionBundle\Entity\Tarif", cascade={"persist"}, inversedBy="reslabo")
     */
    private $acte;

    public function __construct()
    {
        $this->attente=true;
        $this->dateresultat=new \DateTime('now');
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
     * Set dateresultat
     *
     * @param \DateTime $dateresultat
     * @return ResultatsLabo
     */
    public function setDateresultat($dateresultat)
    {
        $this->dateresultat = $dateresultat;

        return $this;
    }

    /**
     * Get dateresultat
     *
     * @return \DateTime
     */
    public function getDateresultat()
    {
        return $this->dateresultat;
    }

    /**
     * Set ordonnance
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnance
     * @return ResultatsLabo
     */
    public function setOrdonnance(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnance = null)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \hostoo\SanteBundle\Entity\OrdonnanceLabo
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set attente
     *
     * @param boolean $attente
     * @return ResultatsLabo
     */
    public function setAttente($attente)
    {
        $this->attente = $attente;

        return $this;
    }

    /**
     * Get attente
     *
     * @return boolean
     */
    public function getAttente()
    {
        return $this->attente;
    }

    /**
     * Set acte
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $acte
     * @return ResultatsLabo
     */
    public function setActe(\hostoo\GestionBundle\Entity\Tarif $acte = null)
    {
        $this->acte = $acte;

        return $this;
    }

    /**
     * Get acte
     *
     * @return \hostoo\GestionBundle\Entity\Tarif
     */
    public function getActe()
    {
        return $this->acte;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return ResultatsLabo
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }
}
