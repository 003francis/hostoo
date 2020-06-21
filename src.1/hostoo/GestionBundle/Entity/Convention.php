<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convention
 *
 * @ORM\Table(name="convention")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\ConventionRepository")
 */
    class Convention
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
         * @ORM\Column(name="nomconvention", type="string", length=255)
         */
        private $nomconvention;

        /**
         *
         * @ORM\ManyToOne(targetEntity="TConvention", cascade={"persist"})
         */
        private $tconvention;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="dateconvention", type="datetime")
         */
        private $dateconvention;

        /**
         * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Formule", mappedBy="convention")
         */
        private $formule;

        /**
         *
         * @ORM\OneToMany(targetEntity="Proprietaire", mappedBy="convention")
         */
        private $proprietaire;
        /**
         * @ORM\OneToMany(targetEntity="Tarif", mappedBy="convention")
         */
        private $tarif;

        /**
         * Constructor
         */
        public function __construct()
        {
            $this->formule = new \Doctrine\Common\Collections\ArrayCollection();
            $this->dateconvention=new \DateTime('now');
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
         * Set nomconvention
         *
         * @param string $nomconvention
         * @return Convention
         */
        public function setNomconvention($nomconvention)
        {
            $this->nomconvention = $nomconvention;

            return $this;
        }

        /**
         * Get nomconvention
         *
         * @return string
         */
        public function getNomconvention()
        {
            return $this->nomconvention;
        }

        /**
         * Set dateconvention
         *
         * @param \DateTime $dateconvention
         * @return Convention
         */
        public function setDateconvention($dateconvention)
        {
            $this->dateconvention = $dateconvention;

            return $this;
        }

        /**
         * Get dateconvention
         *
         * @return \DateTime
         */
        public function getDateconvention()
        {
            return $this->dateconvention;
        }


        /**
         * Add formule
         *
         * @param \hostoo\GestionBundle\Entity\Convention $formule
         * @return Convention
         */
        public function addFormule(\hostoo\GestionBundle\Entity\Convention $formule)
        {
            $this->formule[] = $formule;

            return $this;
        }

        /**
         * Remove formule
         *
         * @param \hostoo\GestionBundle\Entity\Convention $formule
         */
        public function removeFormule(\hostoo\GestionBundle\Entity\Convention $formule)
        {
            $this->formule->removeElement($formule);
        }

        /**
         * Get formule
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getFormule()
        {
            return $this->formule;
        }


    
    /**
     * Add tarif
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $tarif
     * @return Convention
     */
    public function addTarif(\hostoo\GestionBundle\Entity\Tarif $tarif)
    {
        $this->tarif[] = $tarif;

        return $this;
    }

    /**
     * Remove tarif
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $tarif
     */
    public function removeTarif(\hostoo\GestionBundle\Entity\Tarif $tarif)
    {
        $this->tarif->removeElement($tarif);
    }

    /**
     * Get tarif
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set tconvention
     *
     * @param \hostoo\GestionBundle\Entity\TConvention $tconvention
     * @return Convention
     */
    public function setTconvention(\hostoo\GestionBundle\Entity\TConvention $tconvention = null)
    {
        $this->tconvention = $tconvention;

        return $this;
    }

    /**
     * Get tconvention
     *
     * @return \hostoo\GestionBundle\Entity\TConvention 
     */
    public function getTconvention()
    {
        return $this->tconvention;
    }

    /**
     * Add proprietaire
     *
     * @param \hostoo\GestionBundle\Entity\Proprietaire $proprietaire
     * @return Convention
     */
    public function addProprietaire(\hostoo\GestionBundle\Entity\Proprietaire $proprietaire)
    {
        $this->proprietaire[] = $proprietaire;

        return $this;
    }

    /**
     * Remove proprietaire
     *
     * @param \hostoo\GestionBundle\Entity\Proprietaire $proprietaire
     */
    public function removeProprietaire(\hostoo\GestionBundle\Entity\Proprietaire $proprietaire)
    {
        $this->proprietaire->removeElement($proprietaire);
    }

    /**
     * Get proprietaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
