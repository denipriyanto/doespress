<?php

namespace App\Form;

use App\Entity\ArticleForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => ['placeholder' => 'Add title here..']
            ])
            ->add('content', HiddenType::class,[
                'attr' => ['class' => 'tinymce'],
            ])
            ->add('tag', TextType::class, [
                'attr' => ['placeholder' => 'Add tag here..']
            ])
            ->add('category', ChoiceType::class, array(
                'choices' => array(
                    'Select categories' =>array(
                        'Uncategorize' => 'uncategorize',
                        'Hobby' => 'hobby',
                        'Fishing' => 'Fishing',
                    )
                ),
                'empty_data' => false,
            ))
            ->add('featuredImage', FileType::class, [
                'attr' => ['class' => 'form-custom-input']
            ])
            ->add('save', SubmitType::class)
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ArticleForm::class,
        ));
    }
}
