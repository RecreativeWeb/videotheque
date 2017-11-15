<?php

namespace RecreativeWeb\VideoBundle\Form;

use Symfony\Component\Form\\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 

class TinyMceType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array(
                'class' => 'tinymce',
        ));
    }

    public function getParent()
    {
        return TextareaType::class;
    }
}
