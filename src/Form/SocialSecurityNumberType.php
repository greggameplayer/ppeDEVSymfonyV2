<?php

namespace App\Form;

use App\Entity\Staff;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialSecurityNumberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('socialNumber', TextType::class, [
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0 mt-5 mb-4"
                ],
                "attr" => [
                    "class" => "form-control"
                ],
                'label'=>'Veuillez saisir votre numéro de sécurité social :'
            ])

            ->add("Confirmer", SubmitType::class, [
                "attr" => [
                    "class" => "btn btn-primary w-100 mt-5"
                ]
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
