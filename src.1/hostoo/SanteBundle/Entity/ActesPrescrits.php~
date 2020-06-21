<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActesPrescrits
 *
 * @ORM\Table(name="actesprescrits")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ActesPrescritsRepository")
 */
class ActesPrescrits
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
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Tarif", cascade={"persist"})
     */
    private $actes;

    /**
     * @ORM\ManyToOne(targetEntity="OrdonnanceLabo", inversedBy="actesl")
     */
    private $ordonnancelabo;

    /**
     * @ORM\ManyToOne(targetEntity="OrdonnanceImg", inversedBy="actesi")
     */
    private $ordonnanceimg;

    public function __construct()
    {
        $this->qte=1;
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
     * Set qte
     *
     * @param integer $qte
     * @return ActesPrescrits
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set actes
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $actes
     * @return ActesPrescrits
     */
    public function setActes(\hostoo\GestionBundle\Entity\Tarif $actes = null)
    {
        $this->actes = $actes;

        return $this;
    }

    /**
     * Get actes
     *
     * @return \hostoo\GestionBundle\Entity\Tarif
     */
    public function getActes()
    {
        return $this->actes;
    }

    /**
     * Set ordonnancelabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo
     * @return ActesPrescrits
     */
    public function setOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo = null)
    {
        $this->ordonnancelabo = $ordonnancelabo;

        return $this;
    }

    /**
     * Get ordonnancelabo
     *
     * @return \hostoo\SanteBundle\Entity\OrdonnanceLabo 
     */
    public function getOrdonnancelabo()
    {
        return $this->ordonnancelabo;
    }

    /**
     * Set ordonnanceimg
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg
     * @return ActesPrescrits
     */
    public function setOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg = null)
    {
        $this->ordonnanceimg = $ordonnanceimg;

        return $this;
    }

    /**
     * Get ordonnanceimg
     *
     * @return \hostoo\SanteBundle\Entity\OrdonnanceImg 
     */
    public function getOrdonnanceimg()
    {
        return $this->ordonnanceimg;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return ActesPrescrits
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }
}
