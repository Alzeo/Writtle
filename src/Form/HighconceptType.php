<?php

namespace App\Form;

use App\Entity\Highconcept;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HighconceptType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('protagoniste')
            ->add('antagoniste')
            ->add('contexte')
            ->add('eventStart')
            ->add('stake')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Highconcept::class,
        ]);
    }
}
