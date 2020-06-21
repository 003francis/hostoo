<?php

namespace hostoo\HospisBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HospitalisationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datehospi', 'datetime',array('label'=>'date d\'entrée'))
           // ->add('datesortie', 'datetime',array('label'=>'date de sortie'))
            ->add('typehospitalisation',TextType::class,array('label'=>'type d\'hospitalisation'))
            ->add('patient',EntityType::class,array('class'=>'hostooSanteBundle:Patient'))
            ->add('medecin')
            ->add('chambre')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\HospisBundle\Entity\Hospitalisation'
        ));
    }
}
