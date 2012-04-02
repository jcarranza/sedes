<?php

namespace Sedes\ArticuloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticuloType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titulo')
        ;
    }

    public function getName()
    {
        return 'sedes_articulobundle_articulotype';
    }
}
