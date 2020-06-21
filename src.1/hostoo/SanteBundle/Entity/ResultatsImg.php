<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ResultatsImg
 *
 * @ORM\Table(name="resultats_img")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ResultatsImgRepository")
 */
class ResultatsImg
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
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\File(mimeTypes={ "image/*" })
     */
    private $fichier;

    /**
     * @var bool
     *
     * @ORM\Column(name="attente", type="boolean")
     */
    private $attente;

    /**
     * @ORM\ManyToOne(targetEntity="OrdonnanceImg", inversedBy="resultats")
     */
    private $ordonnance;

    /**
     * @ORM\ManyToOne(targetEntity="\hostoo\GestionBundle\Entity\Tarif", cascade={"persist"})
     */
    private $acte;

    public function __construct()
    {
        $this->attente=true;
        $this->dateresultat= new \DateTime();
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
     * @return ResultatsImg
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
     * Set resultat
     *
     * @param array $resultat
     * @return ResultatsImg
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return array
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set ordonnance
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnance
     * @return ResultatsImg
     */
    public function setOrdonnance(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnance = null)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \hostoo\SanteBundle\Entity\OrdonnanceImg
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set attente
     *
     * @param boolean $attente
     * @return ResultatsImg
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
     * @return ResultatsImg
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
     * Set fichier
     *
     * @param string $fichier
     * @return ResultatsImg
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}
