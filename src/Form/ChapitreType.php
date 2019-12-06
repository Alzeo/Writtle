<?php

namespace App\Form;

use App\Entity\Chapitre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\PersonnagesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use App\Entity\Personnages;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class ChapitreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number', IntegerType::class, [
                'label' => 'N° de chapitre',
                'required' => true,
                'attr' => [
                    'placeholder' => 1
                ]
            ])
            ->add('dateContexte', TextType::class, [
                'label' => 'Période ou se déroule le chapitre',
                'required' => false,
                'attr' => [
                    'placeholder' => '20 Mai 1991'
                ]
            ])
            ->add('title', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Bienvenue à Kiwi City'
                ]
            ])
            ->add('resume', TextareaType::class, [
                'required' => false,
                'label' => 'Résumé',
                'attr' => [
                    'placeholder' => "Jean Petit débarque à Kiwi City, nouveau dans le service, il cherche à prendre ses marques. Le chef lui confit la resonsabilité d'éluder l'affaire du vol de Kiwi"
                ]
            ])
            ->add('intriguePrincipale', TextType::class, [
                'required' => false,
                'label' => 'Intrigue principale (facultatif)',
                'attr' => [
                    'placeholder' => 'Jean Petit, en apprend un peu plus sur le trafic de kiwi'
                ]
            ])
            ->add('intrigureSecondaire', TextType::class, [
                'required' => false,
                'label' => 'Intrigue secondaire (facultatif)',
                'attr' => [
                    'placeholder' => 'Jean Petit, fait la rencontre de Kayla, une femme aussi étrange que ravissante.'
                ]
            ])
            ->add('characterRevel', TextType::class, [
                'required' => false,
                'label' => 'Révélation sur le personnage',
                'attr' => [
                    'placeholder' => 'Jean Petit, est allergique au Kiwi.'
                ]
            ]);


        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {

            $form = $event->getForm();
            $formOptions = [
                'class' => Personnages::class,
                'required' => false,
                'label' => 'Personnages impliqués',
                'multiple' => true,
                'choice_label' => function (Personnages $personnages){
                    return $personnages->getFirstName(). ' ' .$personnages->getLastName();
                },
                'query_builder' => function (PersonnagesRepository $personnagesRepository) use ($event) {
                    return $personnagesRepository->createQueryBuilder("p")
                        ->where("p.projet = :projet")
                        ->setParameter("projet", $event->getData()->getProjet());
                },
            ];

            $form->add('personnages', EntityType::class, $formOptions);
        });

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chapitre::class,
        ]);
    }
}
