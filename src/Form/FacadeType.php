<?php

namespace App\Form;

use App\Entity\Facade;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FacadeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('smear', CheckboxType::class)
            ->add('peelingOff', CheckboxType::class)
            ->add('humidification', CheckboxType::class)
            ->add('cracksFrom', ChoiceType::class, [
                'choices'  => [
                    '+ de 10 ans' => '+ de 10 ans',
                    '- de 10 ans' => '- de 10 ans',
                ],
                'expanded' => true,
                'required' => null,
                'label' => false,
                'placeholder' => false
            ])
            ->add('cracksSize', ChoiceType::class, [
                'choices'  => [
                    '+ de 1 cm' => '+ de 1 cm',
                    '- de 5 cm' => '- de 5 cm',
                ],
                'expanded' => true,
                'required' => null,
                'label' => false,
                'placeholder' => false
            ]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facade::class,
        ]);
    }
}
