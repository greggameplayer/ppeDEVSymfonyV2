<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add("user", PatientUserType::class, [
                "label" => false
            ])


            ->add('lastName', TextType::class, [
                "label" => "Nom :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-2 mt-2"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('firstName', TextType::class, [
                "label" => "Prénom :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-2 mt-2"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('socialSecurityNumber', TextType::class, [
                "label" => "Numéro de sécurité social :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-2 mt-2"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('birthDate', DateType::class, [
                "label" => "Date de naissance :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-2 mt-2"
                ],
                "attr" => [
                    "class" => "form-control"
                ],
                "widget" => "single_text"
            ])
            ->add('bloodType', ChoiceType::class, [
                "label" => "Groupe Sanguin :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-2 mt-2"
                ],
                "required" => false,
                "attr" => [
                    "class" => "form-control"
                ],
                'placeholder' => 'Sélectionner un groupe sanguin',
                'choices' => [
                    'O' => 'O',
                    'A' => 'A',
                    'B' => 'B',
                    'AB' => 'AB'
                ]
            ])
            ->add("Sauvegarder", SubmitType::class, [
                "attr" => [
                    "class" => "btn btn-primary w-100 mt-2"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
