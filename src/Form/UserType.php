<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', TextType::class, [
                "label" => "Identifiant :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('password', PasswordType::class, [
                "attr" => [
                    "class" => "form-control"
                ],
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0"
                ],
                'label' => 'Mot de passe :',
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
            ])
            ->add(
                $builder->create('roles', ChoiceType::class, [
                    "label" => 'Rôle :',
                    "label_attr" => [
                        "class" => "h3 ml-4 mb-0"
                    ],
                    "attr" => [
                        "class" => "form-control"
                    ],
                    'choices' => [
                        'Utilisateur' => "ROLE_USER",
                        'Administrateur' => 'ROLE_ADMIN',
                    ],
                    'multiple' => false,
                    'expanded' => false
                ])
                    ->addModelTransformer(new CallbackTransformer(
                        function ($rolesAsArray) {
                            if ($rolesAsArray !== null) {
                                return implode(', ', $rolesAsArray);
                            }
                            // transform the array to a string
                        },
                        function ($rolesAsString) {
                            // transform the string back to an array
                            return explode(', ', $rolesAsString);
                        }
                    ))
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
