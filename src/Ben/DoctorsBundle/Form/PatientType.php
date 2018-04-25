<?php

namespace Ben\DoctorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PatientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->add('dateNaissance', DateType::class, array('widget' => 'single_text'))
                ->add('cin')
                ->add('age')
                ->add('sexe', ChoiceType::class,array(
                    'choices' => array(
                        'Féminin' => 'Féminin',
                        'Masculin' => 'Masculin'
                        ),
                    'required' => false,
                    ))
                ->add('telephone')
                ->add('email')
                ->add('adresse')
                ->add('city')
                ->add('ville');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ben\DoctorsBundle\Entity\Patient'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ben_doctorsbundle_patient';
    }


}
