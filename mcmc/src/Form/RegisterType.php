<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Nom',
                'constraints'=> new Length([
                    'min' => 2,
                    'max' => 30]),
                // 'attr' => ['placeholder'=>'Pierre']
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Prénom',
                'constraints'=> new Length([
                    'min' => 2,
                    'max' => 30]),
                // 'attr' => ['placeholder'=>'Dupont']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'constraints'=> new Length([
                    'min' => 8,
                    'max' => 60]),
                // 'attr' => ['placeholder'=>'pierre.dupont@example.com']
            ])
            ->add('password', RepeatedType::class, [
                'type'=> PasswordType::class,
                'invalid_message'=>'Le mot de passe et la confirmation doivent être identiques',
                'label' => 'Votre mot de passe',
                'required'=>true, //obligatoire à remplir
                'constraints'=> new Length([
                    'min' => 8,
                    'max' => 60]),
                'first_options'=>['label'=> 'Mot de passe'],
                'second_options'=>['label'=> 'Confirmez votre mot de passe']
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
