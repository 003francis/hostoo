<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\TagBundle\Concerne\Taggable;

/**
 * Diagnostic
 *
 * @ORM\Table(name="diagnostic")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\DiagnosticRepository")
 */
class Diagnostic
{
    use Taggable;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @ORM\OneToOne(targetEntity="Episode", inversedBy="diag")
     */
    private $episode;


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
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Diagnostic
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
     * Constructor
     */
    public function __construct()
    {
        $this->Diagnostiques = new \Doctrine\Common\Collections\ArrayCollection();
    }


}
