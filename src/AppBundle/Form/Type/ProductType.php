<?php

namespace AppBundle\Form\Type;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType as BaseType;




use Symfony\Component\Form\FormBuilderInterface;

final class ProductType extends BaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Adding new fields works just like in the parent form type.
        $builder->add('has_discount','checkbox', array(
            'required' => false,
            'label' => 'has discount'
        ));

        
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType(): string
    {
        return \Sylius\Bundle\AdminApiBundle\Form\Type\ProductType::class;
    }
}