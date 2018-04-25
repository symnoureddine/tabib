<?php

namespace Ben\DoctorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->add('dateNaissance')
                ->add('cin')
                ->add('age')
                ->add('sexe')
                ->add('telephone')
                ->add('email')
                ->add('adresse')
                ->add('city')
                ->add('villeNaissance')
                ->add('etablissement')
                ->add('gsm')
                ->add('parentName')
                ->add('parentAddress')
                ->add('parentGsm')
                ->add('parentFixe')
                ->add('ishandicap')
                ->add('handicap')
                ->add('created');
    }/**
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
