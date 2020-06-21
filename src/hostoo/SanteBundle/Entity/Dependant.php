<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependant
 *
 * @ORM\Table(name="dependant")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\DependantRepository")
 */
class Dependant
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="postnom", type="string", length=50, nullable=true)
     */
    private $postnom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Patient", inversedBy="dependants")
     * @ORM\JoinColumn(nullable=true)
     */
    private $patient;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Patient", cascade={"persist"},inversedBy="madependance")
     * @ORM\JoinColumn(nullable=true)
     */
    private $moi;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Parente")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parente;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPrenom
     *
     * @param string $nomPrenom
     *
     * @return Dependant
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Dependant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Dependant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set patient
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patient
     *
     * @return Dependant
     */
    public function setPatient(\hostoo\SanteBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \hostoo\SanteBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set parente
     *
     * @param \hostoo\SanteBundle\Entity\Parente $parente
     *
     * @return Dependant
     */
    public function setParente(\hostoo\SanteBundle\Entity\Parente $parente = null)
    {
        $this->parente = $parente;

        return $this;
    }

    /**
     * Get parente
     *
     * @return \hostoo\SanteBundle\Entity\Parente
     */
    public function getParente()
    {
        return $this->parente;
    }

    /**
     * Set moi
     *
     * @param \hostoo\SanteBundle\Entity\Patient $moi
     * @return Dependant
     */
    public function setMoi(\hostoo\SanteBundle\Entity\Patient $moi = null)
    {
        $this->moi = $moi;

        return $this;
    }

    /**
     * Get moi
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getMoi()
    {
        return $this->moi;
    }

    public function getAge()
    {
        return (int)(date_format(new \DateTime('now'),'Y')-date_format($this->getMoi()->getDatenaissance(),'Y'));
    }

    /**
     * Set postnom
     *
     * @param string $postnom
     * @return Dependant
     */
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;

        return $this;
    }

    /**
     * Get postnom
     *
     * @return string 
     */
    public function getPostnom()
    {
        return $this->postnom;
    }

    public function monTuteur()
    {
        return $this->getMoi();
    }
}
