<?php

namespace App\Form;

use App\Classe\Search;
use App\Entity\Category;
use PhpParser\Parser\Multiple;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        //Pas besoin de crypter les données car juste un filtre, csrf -> false
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'csrf_protection' => false 
        ]);
    }


    public function getBlockPrefix()
    {
        return '';

        //Retourne un tableau avec les données dedans dans l'url
        //return parent::getBlockPrefix();
    }

    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('string', TextType::class, [
            //     'label' => false,
            //     'required' => false,
            //     'attr' => [
            //         'placeholder' => 'Votre recherche...',
            //         'class' => 'form-control-sm'
            //     ]
            // ])
            ->add('categories', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Category::class,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Filtrer',
                'attr' => [
                    'class' => 'btn-block btn-info'
                ]
            ]);
    }
}