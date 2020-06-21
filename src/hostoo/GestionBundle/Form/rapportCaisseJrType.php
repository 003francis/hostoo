<?php

namespace hostoo\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class rapportCaisseJrType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numdoc')
            ->add('daterap', DateType::class)
            ->add('libelle')
            ->add('report')
            ->add('recettebrute')
            ->add('depenseusd')
            ->add('depensecdf')
            ->add('recettenet')
            ->add('justificatif')
            ->add('medecin')
            ->add('commentaire')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\GestionBundle\Entity\rapportCaisseJr'
        ));
    }
}
