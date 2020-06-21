<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('postnom',TextType::class, array('required'=>false))
            ->add('prenom',TextType::class, array('required'=>false))
            ->add('sexe',ChoiceType::class,array('choices'=>array('Feminin'=>false,'Masculin'=>true),'multiple'=>false,
                'choices_as_values'=>true))
            ->add('datenaissance', BirthdayType::class)
            ->add('nationalite',CountryType::class, array('required'=>false,'preferred_choices'=>array('CD')))
            ->add('adresse',TextType::class, array('required'=>false))
            ->add('telephone1',TextType::class, array('required'=>false))
            ->add('telephone2',TextType::class, array('required'=>false))
            ->add('numerodossier',TextType::class, array('required'=>false))
            ->add('societe',EntityType::class,
                array('class'=>'hostooGestionBundle:Proprietaire',
                    'choice_label'=>'nom',
                    'multiple'=> false))
            /*->add('convention',EntityType::class,
                array('class'=>'hostooGestionBundle:Convention',
                    'choice_label'=>'nomconvention',
                    'multiple'=> false))*/
            ->add('formule',EntityType::class,
                array('class'=>'hostooSanteBundle:Formule',
                    'choice_label'=>'nom',
                    'empty_data'=>null,
                    'multiple'=> false))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer le Patient'))
            ->getForm()

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Patient'
        ));
    }
}
