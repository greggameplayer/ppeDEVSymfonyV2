<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class PatientUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', EmailType::class, [
                "label" => "Email :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('password', RepeatedType::class, [
                'first_options' => ['label' => 'Mot de passe :',
                    "label_attr" => [
                        "class" => "h3 ml-4 mb-0",
                    ],
                    "attr" => [
                        "class" => "form-control"
                    ],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Entrer un mot de passe',
                        ]),
                        new Length([
                            'min' => 4,
                            'minMessage' => 'Votre mot de passe devrait faire {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                    ]],
                'second_options' => [
                    'label' => 'Confirmer votre mot de passe :',
                    "label_attr" => [
                        "class" => "h3 ml-4 mb-0"
                    ],
                    "attr" => [
                        "class" => "form-control"
                    ],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Entrer un mot de passe',
                        ]),
                        new Length([
                            'min' => 4,
                            'minMessage' => 'Votre mot de passe devrait faire {{ limit }} caractères',
                            'max' => 4096,
                        ]),
                    ]
                ],
                "type" => PasswordType::class,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'Votre mot de passe devrait faire {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
                'error_bubbling' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
