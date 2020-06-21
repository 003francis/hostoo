<?php

namespace hostoo\SanteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateepisode',\Symfony\Component\Form\Extension\Core\Type\DateType::class,array('attr'=>array('class'=>'hidden')))
            ->add('observation')
            ->add('consultation',ChoiceType::class,array('choices'=>array(0=>'Ancien Cas', 1=>'Nouveau Cas')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Episode'
        ));
    }
}
