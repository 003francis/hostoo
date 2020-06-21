<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HostooLog
 *
 * @ORM\Table(name="hostoo_log")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\HostooLogRepository")
 */
class HostooLog
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
     * @ORM\Column(name="evenement", type="string", length=255)
     */
    private $evenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps", type="datetime")
     */
    private $temps;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $utilisateur;

    public function __construct()
    {
        $this->temps= new \DateTime('now');
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
     * Set evenement
     *
     * @param string $evenement
     * @return HostooLog
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return string
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set temps
     *
     * @param \DateTime $temps
     * @return HostooLog
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return \DateTime
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set utilisateur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $utilisateur
     * @return HostooLog
     */
    public function setUtilisateur(\hostoo\UserBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
