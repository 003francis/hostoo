<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cloture
 *
 * @ORM\Table(name="cloture")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\ClotureRepository")
 */
class Cloture
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
     * @ORM\Column(name="dateouverture", type="datetime")
     */
    private $dateouverture;

    /**
     * @var string
     *
     * @ORM\Column(name="montantusd", type="decimal", precision=10, scale=2)
     */
    private $montantusd;

    /**
     * @var string
     *
     * @ORM\Column(name="montantcdf", type="decimal", precision=10, scale=2)
     */
    private $montantcdf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefermeture", type="datetime", nullable=true)
     */
    private $datefermeture;
    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"}, inversedBy="mesclotures")
     */
    private $caisse;
    /**
     * Cloture constructor.
     *
     */
    public function __construct()
    {
        $this->montantcdf=0;
        $this->montantusd=0;
        $this->dateouverture=new \DateTime('now');
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
     * Set dateouverture
     *
     * @param \DateTime $dateouverture
     * @return Cloture
     */
    public function setDateouverture($dateouverture)
    {
        $this->dateouverture = $dateouverture;

        return $this;
    }

    /**
     * Get dateouverture
     *
     * @return \DateTime 
     */
    public function getDateouverture()
    {
        return $this->dateouverture;
    }

    /**
     * Set montantusd
     *
     * @param string $montantusd
     * @return Cloture
     */
    public function setMontantusd($montantusd)
    {
        $this->montantusd = $montantusd;

        return $this;
    }

    /**
     * Get montantusd
     *
     * @return string 
     */
    public function getMontantusd()
    {
        return $this->montantusd;
    }

    /**
     * Set montantcdf
     *
     * @param string $montantcdf
     * @return Cloture
     */
    public function setMontantcdf($montantcdf)
    {
        $this->montantcdf = $montantcdf;

        return $this;
    }

    /**
     * Get montantcdf
     *
     * @return string 
     */
    public function getMontantcdf()
    {
        return $this->montantcdf;
    }

    /**
     * Set datefermeture
     *
     * @param \DateTime $datefermeture
     * @return Cloture
     */
    public function setDatefermeture($datefermeture)
    {
        $this->datefermeture = $datefermeture;

        return $this;
    }

    /**
     * Get datefermeture
     *
     * @return \DateTime 
     */
    public function getDatefermeture()
    {
        return $this->datefermeture;
    }

    /**
     * Set caisse
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $caisse
     * @return Cloture
     */
    public function setCaisse(\hostoo\UserBundle\Entity\Utilisateur $caisse = null)
    {
        $this->caisse = $caisse;

        return $this;
    }

    /**
     * Get caisse
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getCaisse()
    {
        return $this->caisse;
    }
}
