<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormuleTarification
 *
 * @ORM\Table(name="formule_tarification")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\FormuleTarificationRepository")
 */
class FormuleTarification
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Formule", inversedBy="fortar")
     */
    private $formule;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Tarification")
     */
    private $acte;


    /**
     * Set acte
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $acte
     * @return FormuleTarification
     */
    public function setActe(\hostoo\SanteBundle\Entity\Tarification $acte)
    {
        $this->acte = $acte;

        return $this;
    }

    /**
     * Get acte
     *
     * @return \hostoo\SanteBundle\Entity\Tarification 
     */
    public function getActe()
    {
        return $this->acte;
    }

    /**
     * Set formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return FormuleTarification
     */
    public function setFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \hostoo\SanteBundle\Entity\Formule 
     */
    public function getFormule()
    {
        return $this->formule;
    }

    public function checkedFormule($form,$acte)
    {
        $formules=$this->getFormule();
        $actes=$this->getActe();
        foreach ($formules as $mf)
        {
            foreach ($actes as $act){
                if($mf==$form and $act=$acte)
                    return true;
            }

        }
        return false;
    }
}
