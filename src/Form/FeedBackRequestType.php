<?php

namespace App\Form;

use App\Entity\FeedBackRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedBackRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,[
                'label'=>'Имя',
                'attr'=>[
                    'placeholder'=> 'Введите имя'
                ]
            ])
            ->add('email',EmailType::class)
            ->add('topic',ChoiceType::class,[
                'choices'=>array_flip(FeedBackRequest::$topics),
                'placeholder'=>'Выберите тему'
            ])
            ->add('message')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FeedBackRequest::class,
        ]);
    }
}
