<?php

namespace App\Form;

use App\Entity\Verfahren;
use App\Entity\Dienstsitz;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VerfahrenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label'=>"Name"])
            ->add('nummer', NumberType::class, ['label'=>"Nummer"])
            ->add('art', TextType::class, ['label'=>"Art"])
            ->add('anschrift', TextType::class, ['label'=>"Anschrift"])
            ->add('stadt', TextType::class, ['label'=>"Stadt"])
            ->add('plz', NumberType::class, ['label'=>"Postleitzahl"])
            ->add('ziel', TextareaType::class, ['label'=>"Ziel"])
            ->add('inhalt', TextareaType::class, ['label'=>"Inhalt"])
            ->add('lat', NumberType::class, ['label'=>"Latitude"])
            ->add('lng', NumberType::class, ['label'=>"Longitude"])
            ->add('link', UrlType::class, ['label'=>"Verfahren Path"])
            ->add('dienstsitz', EntityType::class, [
                'class' => Dienstsitz::class,
                'choice_label' => 'Ort'
            ])
            ->add('auszug', FileType::class, [
                'label' => 'Auszug',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Bitte laden Sie ein gültiges PDF-Dokument hoch',
                    ])
                ],
            ])
            ->add('auslage', FileType::class, [
                'label' => 'Auslage',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Bitte laden Sie ein gültiges PDF-Dokument hoch',
                    ])
                ],
            ])
            ->add('karte', FileType::class, [
                'label' => 'Karte',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Bitte laden Sie ein gültiges PDF-Dokument hoch',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Verfahren::class,
           ]);
    }
}
