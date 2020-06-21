<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PosologieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('produit',TextType::class,['attr'=>['placeholder'=>'Produit']])
            ->add('qte', NumberType::class, ['attr'=>['placeholder'=>'Qte']])
            ->add('posologie', TextType::class,['attr'=>['placeholder'=>'Posologie']])
            ->add('conduite', TextType::class, array('required'=>false))
            ->add('ordonnance',HiddenType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Posologie'
        ));
    }
}
