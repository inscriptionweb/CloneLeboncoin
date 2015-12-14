<?php

namespace keny\LeboncoinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepartementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           /*->add('nomDep','text',array('label' => 'Departement:')) */
           ->add('nomDep', 'entity',array(
                'label' => 'Departement:',
                'class' => 'kenyLeboncoinBundle:Departement',  
                'property' => 'nomDep',       
                'multiple' => false
                ))  
            
            ->add('region', new RegionType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'keny\LeboncoinBundle\Entity\Departement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keny_leboncoinbundle_departement';
    }
}
