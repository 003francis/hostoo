<?php

namespace hostoo\HospisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table(name="tour")
 * @ORM\Entity(repositoryClass="hostoo\HospisBundle\Repository\TourRepository")
 */
class Tour
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
     * @ORM\Column(name="datetour", type="datetime")
     */
    private $datetour;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Hospitalisation", inversedBy="tours")
     *
     */
    private $hospitalisation;

    /**
     *
     * @ORM\OneToMany(targetEntity="ObsTour", mappedBy="tour")
     */
    private $observations;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceLabo", mappedBy="tour")
     */
    private $ordlabos;

    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceImg", mappedBy="tour")
     */
    private $ordimgs;
    /**
     *
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Ordonnance", mappedBy="tour")
     */
    private $ords;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur")
     *
     */
    private $garde;

    public function __construct()
    {
        $this->observations= new \Doctrine\Common\Collections\ArrayCollection();
        $this->datetour=new \DateTime('now');
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
     * Set datetour
     *
     * @param \DateTime $datetour
     * @return Tour
     */
    public function setDatetour($datetour)
    {
        $this->datetour = $datetour;

        return $this;
    }

    /**
     * Get datetour
     *
     * @return \DateTime 
     */
    public function getDatetour()
    {
        return $this->datetour;
    }

    /**
     * Set garde
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $garde
     * @return Tour
     */
    public function setGarde(\hostoo\UserBundle\Entity\Utilisateur $garde = null)
    {
        $this->garde = $garde;

        return $this;
    }

    /**
     * Get garde
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getGarde()
    {
        return $this->garde;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return Tour
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

    /**
     * Add observations
     *
     * @param \hostoo\HospisBundle\Entity\ObsTour $observations
     * @return Tour
     */
    public function addObservation(\hostoo\HospisBundle\Entity\ObsTour $observations)
    {
        $this->observations[] = $observations;

        return $this;
    }

    /**
     * Remove observations
     *
     * @param \hostoo\HospisBundle\Entity\ObsTour $observations
     */
    public function removeObservation(\hostoo\HospisBundle\Entity\ObsTour $observations)
    {
        $this->observations->removeElement($observations);
    }

    /**
     * Get observations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Add ordlabos
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordlabos
     * @return Tour
     */
    public function addOrdlabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordlabos)
    {
        $this->ordlabos[] = $ordlabos;

        return $this;
    }

    /**
     * Remove ordlabos
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordlabos
     */
    public function removeOrdlabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordlabos)
    {
        $this->ordlabos->removeElement($ordlabos);
    }

    /**
     * Get ordlabos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdlabos()
    {
        return $this->ordlabos;
    }

    /**
     * Add ordimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordimgs
     * @return Tour
     */
    public function addOrdimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordimgs)
    {
        $this->ordimgs[] = $ordimgs;

        return $this;
    }

    /**
     * Remove ordimgs
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordimgs
     */
    public function removeOrdimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordimgs)
    {
        $this->ordimgs->removeElement($ordimgs);
    }

    /**
     * Get ordimgs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdimgs()
    {
        return $this->ordimgs;
    }

    /**
     * Add ords
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ords
     * @return Tour
     */
    public function addOrd(\hostoo\SanteBundle\Entity\Ordonnance $ords)
    {
        $this->ords[] = $ords;

        return $this;
    }

    /**
     * Remove ords
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ords
     */
    public function removeOrd(\hostoo\SanteBundle\Entity\Ordonnance $ords)
    {
        $this->ords->removeElement($ords);
    }

    /**
     * Get ords
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrds()
    {
        return $this->ords;
    }
}
