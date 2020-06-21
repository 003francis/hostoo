<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datefacture', 'datetime')
            ->add('prix')
            ->add('solde')
            ->add('urgence')
            ->add('validation')
            ->add('lasolde')
            ->add('episode')
            ->add('tarif')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Facture'
        ));
    }
}
