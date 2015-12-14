<?php

namespace keny\LeboncoinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*->add('nomRegion','text',array('label' => 'Region:')) */
             ->add('region', 'entity', array(
                'label' => 'Region:',
                'class' => 'kenyLeboncoinBundle:Region',  //le type d'entités à selectionner
                'property' => 'nomRegion',       //le champs à selectionner
                'multiple' => false
                ))
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'keny\LeboncoinBundle\Entity\Region'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keny_leboncoinbundle_region';
    }
}
