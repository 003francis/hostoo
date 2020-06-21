<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormuleProduit
 *
 * @ORM\Table(name="formule_produit")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\FormuleProduitRepository")
 */
class FormuleProduit
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Formule", inversedBy="forprod")
     */
    private $formule;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="hostoo\PharmacieBundle\Entity\Produit")
     */
    private $produit;


    /**
     * Set produit
     *
     * @param \hostoo\PharmacieBundle\Entity\Produit $produit
     * @return FormuleProduit
     */
    public function setProduit(\hostoo\PharmacieBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \hostoo\PharmacieBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return FormuleProduit
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

    public function checkedFormule($form,$produit)
    {
        $formules=$this->getFormule();
        $produits=$this->getProduit();
        foreach ($formules as $mf)
        {
            foreach ($produits as $act){
                if($mf==$form and $act=$produit)
                    return true;
            }

        }
        return false;
    }
}
