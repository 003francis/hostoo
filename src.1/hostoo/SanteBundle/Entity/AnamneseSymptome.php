<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnamneseSymptome
 *
 * @ORM\Table(name="anamnese_symptome")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\AnamneseSymptomeRepository")
 */
class AnamneseSymptome
{
    /**
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Anamnese", inversedBy="symptome")
     */
    private $anamnese;

    /**
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Symptomes", inversedBy="anamnese")
     */
    private $symptome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateok", type="datetime")
     */
    private $dateok;


    public function __construct()
    {
        $this->dateok=new \DateTime('now');
    }

    /**
     * Set dateok
     *
     * @param \DateTime $dateok
     * @return AnamneseSymptome
     */
    public function setDateok($dateok)
    {
        $this->dateok = $dateok;

        return $this;
    }

    /**
     * Get dateok
     *
     * @return \DateTime 
     */
    public function getDateok()
    {
        return $this->dateok;
    }

    /**
     * Set anamnese
     *
     * @param \hostoo\SanteBundle\Entity\Anamnese $anamnese
     * @return AnamneseSymptome
     */
    public function setAnamnese(\hostoo\SanteBundle\Entity\Anamnese $anamnese)
    {
        $this->anamnese = $anamnese;

        return $this;
    }

    /**
     * Get anamnese
     *
     * @return \hostoo\SanteBundle\Entity\Anamnese 
     */
    public function getAnamnese()
    {
        return $this->anamnese;
    }

    /**
     * Set symptome
     *
     * @param \hostoo\SanteBundle\Entity\Symptomes $symptome
     * @return AnamneseSymptome
     */
    public function setSymptome(\hostoo\SanteBundle\Entity\Symptomes $symptome)
    {
        $this->symptome = $symptome;

        return $this;
    }

    /**
     * Get symptome
     *
     * @return \hostoo\SanteBundle\Entity\Symptomes 
     */
    public function getSymptome()
    {
        return $this->symptome;
    }
}
