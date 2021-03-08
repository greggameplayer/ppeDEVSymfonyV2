<?php

namespace App\Form;

use App\Entity\Doctor;
use App\Entity\Meeting;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('doctor', EntityType::class, [
                "class" => Doctor::class,
                "label" => "Docteur :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0"
                ],
                "required" => true,
                "attr" => [
                    "class" => "form-control"
                ],
                'choice_label' => 'lastName',
                'multiple' => false,
                'expanded' => false
            ])
            ->add("date", DateTimeType::class, [
                "widget" => "single_text",
                "label" => "Date et heure du rendez-vous :",
                "label_attr" => [
                    "class" => "h3 ml-4 mb-0"
                ],
                "attr" => [
                    "class" => "form-control",
                    "placeholder" => date("y-m-d H:i")
                ],
                'disabled' => true
            ])
            ->add("demander", SubmitType::class, [
                "attr" => [
                    "class" => "btn btn-primary w-100"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Meeting::class,
        ]);
    }
}
