<?php

namespace hostoo\UserBundle\Form;

use FOS\UserBundle\Entity\User;
use hostoo\UserBundle\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
//use FOS\UserBundle\Form\Type\RegistrationFormType as Baseform;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\ChoiceList\ArrayChoiceList;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Role\RoleInterface;


class UtilisateurType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('nom')
            ->add('postnom')
            ->add('prenom')
            ->add('datenaissance',DateType::class,array('widget' => 'single_text'))
            ->add('service',EntityType::class,array('class'=>'hostooSanteBundle:Service','choice_label'=>'nomservice','multiple'=>false))
            ->add('roles',null)
           ->add('roles',ChoiceType::class,array('choices'=>array('ROLE_RECEPTION'=>'ROLE_RECEPTION','ROLE_MEDECIN'=>'ROLE_MEDECIN'
            ,'ROLE_INFIRMIER'=>'ROLE_INFIRMIER','ROLE_CAISSIER'=>'ROLE_CAISSIER','ROLE_SUPER_ADMIN'=>'ROLE_SUPER_ADMIN','ROLE_LABORATOIRE'=>'ROLE_LABORATOIRE','ROLE_IMAGERIE'=>'ROLE_IMAGERIE', 'ROLE_REPORT'=>'ROLE_REPORT','ROLE_DG'=>'ROLE_DG'),'expanded' => false,
                   'multiple' => true,))
            ->add('specialite', ChoiceType::class, array(
                'choices'  => array(
                    'NO MEDECIN' => null,
                    'GENERALISTE' => 'generaliste',
                    'SPECIALISTE' => 'specialiste',
                ),
                // *this line is important*
                'choices_as_values' => true,
            ))

        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hostoo\UserBundle\Entity\Utilisateur'
            /*'validation_groups' => array('Default', 'Register')*/
        ));
    }

    public function getBlockPrefix()
    {
        return 'hostoo_user_utilisateur';
    }
}
