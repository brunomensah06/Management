<?php

namespace App\Form;

use App\Entity\Gestion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Marches')
            ->add('Maitres_ouvrages')
            ->add('Projets')
            ->add('Montant')
            ->add('Debut_projet')
            ->add('Contrat')
            ->add('Duree_projet')
            ->add('Date_de_fin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gestion::class,
        ]);
    }
}
