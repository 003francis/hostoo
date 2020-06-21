<?php

namespace hostoo\MsgBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destinateur',EntityType::class, array(
                'class'=>'hostooUserBundle:Utilisateur',
                'property'=>'nom',
                'multiple'=>true
    ))
            //->add('cc')
            ->add('sujet')
            ->add('corps')
            ->add('etat')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\MsgBundle\Entity\Message'
        ));
    }
}
