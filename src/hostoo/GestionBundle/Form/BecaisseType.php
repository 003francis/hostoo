<?php

namespace hostoo\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BecaisseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('compte',ChoiceType::class,array('choices'=>array('Investissement'=>'Investissement','Remise'=>'Remise'),'multiple'=>false,
                'choices_as_values'=>true))
            ->add('montant')
            ->add('devise',ChoiceType::class,array('choices'=>array('USD'=>1,'CDF'=>2),'multiple'=>false,
                'choices_as_values'=>true))
            ->add('observation')
            ->add('dateops',DateTimeType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\GestionBundle\Entity\Becaisse'
        ));
    }
}
