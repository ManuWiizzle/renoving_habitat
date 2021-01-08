<?php

namespace App\Form;

use App\Entity\Roofing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RoofingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('roofTiles', CheckboxType::class)
            ->add('waterLeak', CheckboxType::class)
            ->add('mosse', CheckboxType::class)
            ->add('lastTreatment', ChoiceType::class, [
                'choices'  => [
                    '+ de 5 ans' => '+ de 5 ans',
                    '- de 5 ans' => '- de 5 ans',
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
            'data_class' => Roofing::class,
        ]);
    }
}
