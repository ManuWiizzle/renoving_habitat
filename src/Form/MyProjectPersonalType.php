<?php

namespace App\Form;

use App\Entity\MyProjectPersonal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class MyProjectPersonalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['attr' => ['placeholder' => 'Jean']])
            ->add('lastname', TextType::class, ['attr' => ['placeholder' => 'Dupond']])
            ->add('email', TextType::class, ['attr' => ['placeholder' => 'Jean@dupond.fr']])
            ->add('address', TextType::class, ['attr' => [
                'placeholder' => '1 Avenue du Champs de Mars, 45100 Orléans']])
            ->add('message', TextareaType::class, ['attr' => [
                'placeholder' => 'Décrivez-nous votre projet, et n\'hésitez pas à nous poser vos questions ...']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MyProjectPersonal::class,
        ]);
    }
}
