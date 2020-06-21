<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormuleTarificationProprietaire
 *
 * @ORM\Table(name="formule_tarification_proprietaire")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\FormuleTarificationProprietaireRepository")
 */
class FormuleTarificationProprietaire
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Formule", inversedBy="forsoc")
     */
    private $formule;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Tarification", inversedBy="proforacte")
     */
    private $acte;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\GestionBundle\Entity\Proprietaire", inversedBy="forpro")
     */
    private $societe;

    /**
     *  Get societe
     * @return   \hostoo\GestionBundle\Entity\Proprietaire
     *
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set societe
     *
     * @param  \hostoo\GestionBundle\Entity\Proprietaire $societe
     * @return FormuleTarificationProprietaire
     */
    public function setSociete(\hostoo\GestionBundle\Entity\Proprietaire $societe)
    {
        $this->societe = $societe;
        return $this;
    }

    /**
     * Set formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return FormuleTarificationProprietaire
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


    /**
     * Set acte
     *
     * @param \hostoo\SanteBundle\Entity\Tarification $acte
     * @return FormuleTarificationProprietaire
     */
    public function setActe(\hostoo\SanteBundle\Entity\Tarification $acte = null)
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

    public function checked($formule,$actes,$pro){
        if($this->getFormule()->getId()==$formule && $this->getActe()->getId()==$actes && $this->getSociete()->getId()==$pro){
            return 'checked';
        }
            return '';
    }

    public function formulesEntreprise($formule)
    {
        foreach ($this->getSociete()->getForpro() as $mesformules)
        {

        }
    }
}
