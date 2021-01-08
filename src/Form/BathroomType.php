<?php

namespace App\Form;

use App\Entity\Bathroom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BathroomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('italianShower', CheckboxType::class)
            ->add('showerCabin', CheckboxType::class)
            ->add('earthenware', CheckboxType::class)
            ->add('floorTiles', CheckboxType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bathroom::class,
        ]);
    }
}
