<?php

namespace App\Form;

use App\Entity\Personnages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonnagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('role')
            ->add('surname')
            ->add('genre')
            ->add('age')
            ->add('residence')
            ->add('placeBorn')
            ->add('profession')
            ->add('taille')
            ->add('poids')
            ->add('description')
            ->add('accessoires')
            ->add('tenue')
            ->add('croyances')
            ->add('secrets')
            ->add('tiqueParole')
            ->add('education')
            ->add('richesse')
            ->add('qualites')
            ->add('defauts')
            ->add('addictions')
            ->add('weakness')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnages::class,
        ]);
    }
}
