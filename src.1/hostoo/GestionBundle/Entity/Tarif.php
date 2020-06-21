<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="tarif")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\TarifRepository")
 */
class Tarif
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
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateprix", type="datetime")
     */
    private $dateprix;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Tarification", inversedBy="tarif")
     */
    private $actes;

    /**
     * @ORM\ManyToOne(targetEntity="Convention",cascade={"persist"}, inversedBy="tarif")
     */
    private $convention;




    public function __construct()
    {
        $this->dateprix=new \DateTime('now');
        $this->prix=0.00;
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
     * Set prix
     *
     * @param string $prix
     * @return Tarif
     */
    public function setPrix($prix)
    {
        if($prix==null){
            $prix=0.00;
        }
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateprix
     *
     * @param \DateTime $dateprix
     * @return Tarif
     */
    public function setDateprix($dateprix)
    {
        $this->dateprix = $dateprix;

        return $this;
    }

    /**
     * Get dateprix
     *
     * @return \DateTime 
     */
    public function getDateprix()
    {
        return $this->dateprix;
    }

    /**
     * Set actes
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $actes
     * @return Tarif
     */
    public function setActes(\hostoo\SanteBundle\Entity\Tarification $actes = null)
    {
        $this->actes = $actes;

        return $this;
    }

    /**
     * Get actes
     *
     * @return \hostoo\SanteBundle\Entity\Tarification 
     */
    public function getActes()
    {
        return $this->actes;
    }


    /**
     * Set convention
     *
     * @param \hostoo\GestionBundle\Entity\Convention $convention
     * @return Tarif
     */
    public function setConvention(\hostoo\GestionBundle\Entity\Convention $convention = null)
    {
        $this->convention = $convention;

        return $this;
    }

    /**
     * Get convention
     *
     * @return \hostoo\GestionBundle\Entity\Convention 
     */
    public function getConvention()
    {
        return $this->convention;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getActes()->getDesignationacte()." (".$this->prix.")";
    }

}
