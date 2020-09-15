<?php

namespace App\Form;

use App\Entity\RessourcesHumaines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RessourcesHumainesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'Interne' => true,
                    'Externe' => false,
                    ],])
            ->add('Prenoms')
            ->add('Nom')
            ->add('Matricule')
            ->add('Email')
            ->add('Diplome')
            ->add('Date_de_naissance')
            ->add('Lieu_de_naissance')
            ->add('CNI')
            ->add('Statut_dans_l_entreprise')
            ->add('situation_matrimoniale')
            ->add('type_de_contrat')
            ->add('IPRES')
            ->add('CSS')
            ->add('Declaration_fiscale')
            ->add('Impots')
            ->add('ImageFile',FileType::class, ['required'=> false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RessourcesHumaines::class,
        ]);
    }
}
