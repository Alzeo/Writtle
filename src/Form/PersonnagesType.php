<?php

namespace App\Form;

use App\Entity\Personnages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonnagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',

            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',

            ])
            ->add('role', ChoiceType::class, [
                'label' => 'Rôle du personnage',
                'choices' => [
                    'Héros' => 'Héros',
                    'Antagoniste' => 'Antagoniste',
                    'Principal' => 'Principal',
                    'Secondaire' => 'Secondaire'
                    ]
            ])
            ->add('surname', TextType::class, [
                'label' => 'Surnom',
                'required' => false
            ])
            ->add('genre', ChoiceType::class, [
                'label' => 'Sexe',
                'choices' => [
                    'homme' => 'homme',
                    'femme' => 'femme',
                    'Non défini' => 'Non défini',
                ]
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Âge',
                'required' => false
            ])
            ->add('residence', TextType::class, [
                'label' => 'Lieu de résidence',
                'required' => false
            ])
            ->add('placeBorn', TextType::class, [
                'label' => 'Lieu de naissance',
                'required' => false
            ])
            ->add('profession', TextType::class, [
                'label' => 'Profession',
                'required' => false
            ])
            ->add('taille', IntegerType::class, [
                'label' => 'Taille (cm)',
                'required' => false
            ])
            ->add('poids', IntegerType::class, [
                'label' => 'Poids (Kg)',
                'required' => false
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de votre personnage',
                'required' => false
            ])
            ->add('accessoires', TextType::class, [
                'label' => 'Accessoires portés',
                'required' => false
            ])
            ->add('tenue', TextType::class, [
                'label' => 'Style vestimentaire',
                'required' => false
            ])
            ->add('croyances', TextType::class, [
                'label' => 'Croyance religieuse',
                'required' => false
            ])
            ->add('secrets', TextType::class, [
                'label' => 'Secrets',
                'required' => false
            ])
            ->add('tiqueParole', TextType::class, [
                'label' => 'Tique de parole',
                'required' => false
            ])
            ->add('education', TextType::class, [
                'label' => 'Éducation',
                'required' => false
            ])
            ->add('richesse', TextType::class, [
                'label' => 'Niveau de richesse',
                'required' => false
            ])
            ->add('qualites', TextType::class, [
                'label' => 'Qualité (séparé par une virgule)',
                'required' => false
            ])
            ->add('defauts', TextType::class, [
                'label' => 'Défauts (séparé par une virgule)',
                'required' => false
            ])
            ->add('addictions', TextType::class, [
                'label' => 'Addictions',
                'required' => false
            ])
            ->add('weakness', TextType::class, [
                'label' => 'Faiblesses et peurs',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnages::class,
        ]);
    }
}
