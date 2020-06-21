<?php

namespace hostoo\GestionBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BanqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle',TextType::class)
            ->add('dateops',DateTimeType::class)
            ->add('montant',TextType::class)
            ->add('devise',ChoiceType::class,array('choices'=>array('USD'=>1,'CDF'=>2),'multiple'=>false,
                'choices_as_values'=>true))
            ->add('mouvement',ChoiceType::class,array('choices'=>array('Retrait de la banque'=>'Retrait','Dépôt en banque'=>'Dépôt'),'multiple'=>false,
                'choices_as_values'=>true))
            ->add('nombanque',EntityType::class,array('class'=>'hostooGestionBundle:LesBanques',
                'choice_label'=>'nom',
                'multiple'=> false))
            ->add('reference')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\GestionBundle\Entity\Banque'
        ));
    }
}
