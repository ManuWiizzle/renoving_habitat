<?php

namespace App\Form;

use App\Entity\Heating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HeatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('totalReplacement', CheckboxType::class)
            ->add('maintain', CheckboxType::class)
            ->add('reparation', CheckboxType::class)
            ->add('heatingType', ChoiceType::class, [
                'choices'  => [
                    'Electrique' => 'Electrique',
                    'Gaz' => 'Gaz',
                    'Fioul' => 'Fioul',
                ],
                'expanded' => true,
                'required' => null,
                'label' => false,
                'placeholder' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Heating::class,
        ]);
    }
}
