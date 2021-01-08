<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\RoofingType;
use App\Form\HeatingType;
use App\Form\HouseWorkType;
use App\Form\FacadeType;
use App\Form\EarthWorkType;
use App\Form\BathroomType;
use App\Form\MyProjectPersonalType;

class MyProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roofing', RoofingType::class, [
            'required' => false,
            'label' => false,
            ])
            ->add('heating', HeatingType::class, [
            'required' => false,
                'label' => false,
            ])
            ->add('facade', FacadeType::class, [
                'required' => false,
                'label' => false,
            ])
            ->add('housework', HouseWorkType::class, [
                'required' => false,
                'label' => false,
            ])
            ->add('bathroom', BathroomType::class, [
                'required' => false,
                'label' => false,
            ])
            ->add('earthwork', EarthWorkType::class, [
                'required' => false,
                'label' => false,
            ])
            ->add('personal', MyProjectPersonalType::class, [
                'required' => true,
                'label' => false,
            ]);
    }
}
