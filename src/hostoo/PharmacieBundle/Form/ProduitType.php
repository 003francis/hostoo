<?php

namespace hostoo\PharmacieBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bridge\Doctrine\Tests\Form\Type\EntityTypePerformanceTest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('nature',EntityType::class,array(
                'class'=>'hostooPharmacieBundle:Nature'
            ,'choice_label'=>'nom',))
            ->add('origine',ChoiceType::class, array('choices'=>array('Importe'=>'Importé','Local'=>'Local')))
            ->add('grammage',NumberType::class, array('required'=>false))
            ->add('plaquette',NumberType::class, array('required'=>false))
            ->add('boite')
            ->add('unite',NumberType::class, array('required'=>false))
            ->add('alert',NumberType::class, array('required'=>false))
            ->add('prix',NumberType::class, array('required'=>false))
            ->add('dateexp',DateType::class, array('widget'=>'single_text','format' => 'dd/MM/yyyy',))
            ->add('categorie',EntityType::class,array(
                'class'=>'hostooPharmacieBundle:Cattheura'
            ,'choice_label'=>'nom',))
            ->add('save',SubmitType::class, array('label'=>'Ajouter un produit'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\PharmacieBundle\Entity\Produit'
        ));
    }
}
