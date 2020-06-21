<?php

namespace hostoo\GestionBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TarifType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix',NumberType::class)
            ->add('dateprix', DateType::class)
            ->add('actes',EntityType::class,array(
                'class'
                => 'hostooSanteBundle:Tarification',
                'property' => 'designationacte',
                'multiple' => false))
            ->add('convention',EntityType::class,array(
                'class'
                => 'hostooGestionBundle:Convention',
                'property' => 'nomconvention',
                'multiple' => false))
            ->add('save',SubmitType::class,array('label'=>'Ajouter'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\GestionBundle\Entity\Tarif'
        ));
    }
}
