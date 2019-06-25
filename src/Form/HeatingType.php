<?php

namespace App\Form;

use App\Entity\Heating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HeatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('totalReplacement')
            ->add('maintain')
            ->add('reparation')
            ->add('heatingType', ChoiceType::class, [
                'choices'  => [
                    'Electrique' => null,
                    'Gaz' => null,
                    'Fioul' => null,
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
