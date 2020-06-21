<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BSCaisseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datebs',DateType::class,array('attr'=>array('class'=>'hidden')))
            ->add('motif',TextareaType::class)
            ->add('montant',NumberType::class)
            ->add('devise',ChoiceType::class,array('choices'=>array('USD'=>'USD','CDF'=>'CDF'),'choices_as_values'=>true))
            ->add('beneficiaire',TextType::class)
            ->add('visa',TextType::class)
            ->add('caissier','hidden')
            ->add('save',SubmitType::class,array('label'=>'Faire un Bon de Sortie'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\BSCaisse'
        ));
    }
}
