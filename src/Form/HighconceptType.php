<?php

namespace App\Form;

use App\Entity\Highconcept;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HighconceptType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('protagoniste', TextType::class, [
                'label' => "Comment s'appelle votre protagoniste ?"
            ])
            ->add('antagoniste', TextType::class, [
                'label' => "Comment s'appelle votre antagoniste"
            ])
            ->add('contexte', TextType::class, [
                'label' => "Dans quel contexte se déroule votre histoire"
            ])
            ->add('eventStart', TextType::class, [
                'label' => "Quel est l'élément déclencheur ?"
            ])
            ->add('stake', TextType::class, [
                'label' => "Quel est l'objectif, l'enjeu pour votre héros ?"
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Highconcept::class,
        ]);
    }
}
