<?php

namespace hostoo\SanteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnamneseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('symptomes',EntityType::class,
                array('class'=>'hostooSanteBundle:Symptomes',
                    'group_by'=>'tsymptome.nom',
                    'choice_label'=>'nom',
                    'multiple'=> true))
            /*->add('symptomes',CollectionType::class,
                array('entry_type'=>SymptomesType::class,'allow_add'=>true))*/
            ->add('autres',TextareaType::class)
            ->add('complements',TextareaType::class)
            ->add('episode',HiddenType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\SanteBundle\Entity\Anamnese'
        ));
    }
}
