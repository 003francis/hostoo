<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RdvType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('daterdv',DateType::class,array('widget'=>'single_text','format'=>'dd/MM/yy'))
            ->add('heureDebut',TimeType::class,array('widget'=>'single_text'))
            ->add('heureFin',TimeType::class,array('widget'=>'single_text'))
            ->add('nbrepatients',NumberType::class)
            ->add('patientsrecus',NumberType::class)
            ->add('disponibilite')
            ->add('medecin','hidden')
            /*->add('patients',EntityType::class,array(
                'class'        => 'hostooSanteBundle:Patient',
                'choice_label' => 'nom',
                'multiple'     => true,
            ))*/
            ->add('creer',SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Rdv'
        ));
    }
}
