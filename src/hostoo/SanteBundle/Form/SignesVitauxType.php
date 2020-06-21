<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignesVitauxType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('temperature',NumberType::class)
            ->add('poids',NumberType::class)
            ->add('taille',NumberType::class,array('required'=>false))
            ->add('tension',NumberType::class,array('required'=>false))
            ->add('frequenceCardiaque',NumberType::class,array('required'=>false))
            ->add('frequenceRespiratoire',NumberType::class,array('required'=>false))
            ->add('glycemieDextro',NumberType::class,array('required'=>false))
            ->add('saturationOxygene',NumberType::class,array('required'=>false))
            ->add('imc',NumberType::class,array('required'=>false))
            ->add('pc',NumberType::class,array('required'=>false))
            ->add('pb',NumberType::class,array('required'=>false))
            ->add('pa',NumberType::class,array('required'=>false))
            ->add('pp',NumberType::class,array('required'=>false))
            ->add('wrh',NumberType::class,array('required'=>false))
            ->add('daterecolte',DateTimeType::class,array('required'=>false))
            ->add('episode','hidden',array('required'=>false))
            ->add('save',SubmitType::class,array('attr'=>array('class'=>'btn btn-primary'),'label' => 'Enregistrer',))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\SignesVitaux'
        ));
    }
}
