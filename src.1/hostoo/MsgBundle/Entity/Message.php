<?php

namespace hostoo\MsgBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="hostoo\MsgBundle\Repository\MessageRepository")
 */
class Message
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
     *
     * @ORM\OneToMany(targetEntity="hostoo\UserBundle\Entity\Utilisateur", mappedBy="msq")
     */
    private $destinateur;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="text")
     */
    private $corps;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


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
     * Set sujet
     *
     * @param string $sujet
     * @return Message
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set corps
     *
     * @param string $corps
     * @return Message
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string 
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Message
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->destinateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add destinateur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $destinateur
     * @return Message
     */
    public function addDestinateur(\hostoo\UserBundle\Entity\Utilisateur $destinateur)
    {
        $this->destinateur[] = $destinateur;

        return $this;
    }

    /**
     * Remove destinateur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $destinateur
     */
    public function removeDestinateur(\hostoo\UserBundle\Entity\Utilisateur $destinateur)
    {
        $this->destinateur->removeElement($destinateur);
    }

    /**
     * Get destinateur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDestinateur()
    {
        return $this->destinateur;
    }
}
