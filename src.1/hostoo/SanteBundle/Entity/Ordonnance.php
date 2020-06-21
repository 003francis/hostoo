<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\OrdonnanceRepository")
 */
class Ordonnance
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
     * @ORM\Column(name="valider", type="boolean", nullable=true)
     */
    private $valider;

    /**
     * @var boolean
     *
     * @ORM\Column(name="livre", type="boolean", nullable=true)
     */
    private $livre;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $par;

    /**
     * @ORM\OneToMany(targetEntity="Posologie", mappedBy="ordonnance" , cascade={"persist"})
     */
    private $posologie;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Episode", inversedBy="ordonnance")
     *
     */
    private $episode;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", inversedBy="ordonnances")
     *
     */
    private $hospitalisation;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", inversedBy="ordonnance")
     *
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
     * @return Ordonnance
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
        $this->posologie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateordo= new \DateTime('now');
        $this->valider=false;
        $this->livre=false;
    }

    /**
     * Add posologie
     *
     * @param \hostoo\SanteBundle\Entity\Posologie $posologie
     * @return Ordonnance
     */
    public function addPosologie(\hostoo\SanteBundle\Entity\Posologie $posologie)
    {
        $this->posologie[] = $posologie;
        $posologie->setOrdonnance($this);
        return $this;
    }

    /**
     * Remove posologie
     *
     * @param \hostoo\SanteBundle\Entity\Posologie $posologie
     */
    public function removePosologie(\hostoo\SanteBundle\Entity\Posologie $posologie)
    {
        $this->posologie->removeElement($posologie);
    }

    /**
     * Get posologie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosologie()
    {
        return $this->posologie;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Ordonnance
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
     * @return Ordonnance
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
     * @return Ordonnance
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
     * Set medecin
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $medecin
     * @return Ordonnance
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

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "";
    }


    /**
     * Set par
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $par
     * @return Ordonnance
     */
    public function setPar(\hostoo\UserBundle\Entity\Utilisateur $par = null)
    {
        $this->par = $par;

        return $this;
    }

    /**
     * Get par
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getPar()
    {
        return $this->par;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return Ordonnance
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
