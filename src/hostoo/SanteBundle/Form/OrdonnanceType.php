<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdonnanceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateordo',DateTimeType::class)
            ->add('valider',HiddenType::class)
            ->add('posologie','collection',array(
                'type'=> new PosologieType(),
                'allow_add'=>true,
            ))
            ->add('livre',HiddenType::class)
            ->add('episode',HiddenType::class)
            ->add('medecin',HiddenType::class)
            ->add('save', SubmitType::class, array('label'=>'Enregistrer'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Ordonnance'
        ));
    }
}
