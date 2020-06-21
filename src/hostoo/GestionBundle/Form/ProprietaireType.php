<?php

namespace hostoo\GestionBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProprietaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('adresse',TextType::class)
            ->add('telephone',TextType::class)
            ->add('email',EmailType::class)
            ->add('convention',EntityType::class,array(
                'class'
                => 'hostooGestionBundle:Convention',
                'property' => 'nomconvention',
                'multiple' => false))
            ->add('save',SubmitType::class,array('label'=>'Enregistrer la convention'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\GestionBundle\Entity\Proprietaire'
        ));
    }
}
