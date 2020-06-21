<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DependantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class,array('required'=>false))
            ->add('prenom',TextType::class,array('required'=>false))
            ->add('patient','hidden')
            ->add('parente',EntityType::class,array(
                'class'=>'hostooSanteBundle:Parente',
                'choice_label'=>'parente',
                'multiple'=>false
            ))
            ->add('moi',PatientType::class)
    ->add('save',SubmitType::class,array('label'=>'Enregistrer'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Dependant'
        ));
    }
}
