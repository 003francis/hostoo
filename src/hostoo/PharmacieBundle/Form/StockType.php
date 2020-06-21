<?php

namespace hostoo\PharmacieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qte',NumberType::class)
            ->add('datestock',DateType::class, array('widget'=>'single_text'))
            ->add('produit_in','hidden')
            ->add('auteur','hidden')
            ->add('save',SubmitType::class, array('label'=>'Ajouter Quantité'));
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\PharmacieBundle\Entity\Stock'
        ));
    }
}
