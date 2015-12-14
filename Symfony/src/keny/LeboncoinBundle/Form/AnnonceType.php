<?php

namespace keny\LeboncoinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('date', 'date', array('label' => 'Date Annonce:'))
            ->add('description','textarea', array('label' => 'Description:'))
            ->add('prix','integer', array('label' => 'Prix:'))
            ->add('titre','text', array('label' => 'Titre Annonce:'))
            ->add('cathegorie', 'entity',array(
                'label' => 'Cathegorie:',
                'class' => 'kenyLeboncoinBundle:Cathegorie',  
                'property' => 'nomCathegorie',       
                'multiple' => false
                ))
            ->add('departement',new DepartementType())

           
            /* ->add('departement', 'entity',array(
                'label' => 'Departement:',
                'class' => 'kenyLeboncoinBundle:Departement',  
                'property' => 'nomDep',       
                'multiple' => false
                ))  
                 ->add('region', 'entity', array(
                'label' => 'Region:',
                'class' => 'kenyLeboncoinBundle:Region',  //le type d'entités à selectionner
                'property' => 'nomRegion',       //le champs à selectionner
                'multiple' => false
                ))

                */
            ->add('typeannonce','choice', array(
                'choices' => array('o' => 'Offre', 'd' => 'Demandes'),
                'expanded' => true,
                'multiple' => false
                ))
            
            ->add('annonceur', new AnnonceurType()) 
            ->add('image', new ImageType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'keny\LeboncoinBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keny_leboncoinbundle_annonce';
    }
}
