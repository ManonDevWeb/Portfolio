<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => "Quel nom souhaitez-vous donner à votre adresse ?",
                'attr' => ['placeholder' => 'Chez Maman']
                ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Pierre']
                ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Dupont']
                ])
            ->add('company', TextType::class, [
                'label' => 'Mon entreprise (facultatif)',
                'required' => false,
                'attr' => ['placeholder' => 'La Boutique Française']
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'attr' => ['placeholder' => '8 rue de la paix']
                ])
            ->add('postal', TextType::class, [
                'label' => 'Code postal',
                'attr' => ['placeholder' => '75000']
                ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'attr' => ['placeholder' => 'Paris']
                ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'data' => 'FR'
                ])
            ->add('phone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => ['placeholder' => '06 12 81 33 96']
                ])
            ->add('submit', SubmitType::class, ['label'=>'Valider',
                'attr' => [
                    'class' => 'btn btn-info float-right'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
