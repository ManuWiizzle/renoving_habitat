<?php

namespace App\Form;

use App\Entity\CvUpload;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CvUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('lastname', TextType::class, ['attr' => ['placeholder' => 'Dupond']])
            ->add('firstname', TextType::class, ['attr' => ['placeholder' => 'Jean']])
            ->add('telephone', TextType::class, ['attr' => ['placeholder' => '0123456789']])
            ->add('email', TextType::class, ['attr' => ['placeholder' => 'jean@dupond.fr']])
            ->add('streetNumber', TextType::class, ['attr' => ['placeholder' => '1']])
            ->add('streetName', TextType::class, ['attr' => ['placeholder' => 'Avenue du Champ de Mars']])
            ->add('city', TextType::class, ['attr' => ['placeholder' => 'Orléans']])
            ->add('postCode', TextType::class, ['attr' => ['placeholder' => '45100']])
            ->add('occupation', ChoiceType::class, ['choices' => [
                'Poseur menuiserie' => 'Poseur menuiserie',
                'Poseur ravalement' => 'Poseur ravalement',
                'Technico commercial' => 'Technico commercial'
            ]
            ])
            ->add('area', ChoiceType::class, ['choices' => [

                'Centre Val de Loire' => 'Centre Val de Loire',
                'Ile de France' => 'Ile de France',
                'Bourgogne Franche-Comté' => 'Bourgogne Franche-Comté'
            ]
            ])
            ->add('message', TextareaType::class, [
                'attr' => ['placeholder' => 'Exemple : parlez nous de vous et de vos motivations ...']])
            ->add('cv', FileType::class);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CvUpload::class,
        ]);
    }
}
