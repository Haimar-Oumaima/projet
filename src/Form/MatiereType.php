<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('libelle_matiere', ChoiceType::class, array('label' => false, 'choices' => array(
            'Thématique' => 'thematique',
            'Matière' => 'matiere',),
            'expanded' => true))
        ->add('libelle_thematique', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Ex : Anglais')))
       // ->add('autre_categorie',ButtonType::class, array('label' => '+'))
        ->add('ajouter',SubmitType::class, array('label' => 'Ajouter'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
