<?php

namespace RecreativeWeb\VideosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 

class FilmType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
        add('titre', TextType::class,array(
            'label'=>'Titre',
            'attr'=>array()
        ))
        ->add('genre', TextType::class, array(
            'label'=>'Genre',
            'attr'=>array()
        ))
        ->add('realisateur', TextType::class, array(
            'label'=>'Réalisateur',
            'required'=>false,
            'attr'=>array()
        ))
        ->add('annee', DateTimeType::class, array(
            'label'=>'Année de sortie',
            'required'=>false,
            'attr'=>array()
        ))
        ->add('cover',FileType::class, array(
            'label'=>'Jaquette (80 x 120)',
            'required'=>false,
            'attr'=>array()
        ))
        ->add('bigCover', FileType::class, array(
            'label'=>'Jaquette (350 X 500)',
            'required'=>false,
            'attr'=>array()
        ))
        ->add('synopsis', TextareaType::class, array(
            'label'=>'Synopsis',
            'required'=>false,
            'attr'=>array('rows'=>'10','cols'=>'100')
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecreativeWeb\VideosBundle\Entity\Film'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recreativeweb_videosbundle_film';
    }


}
