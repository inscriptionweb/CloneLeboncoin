<?php

namespace keny\LeboncoinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo','text',array('label' => 'Pseudo:'))
            ->add('email','text',array('label' => 'Email:'))
            ->add('telephone','integer',array('label' => 'Telephone:'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'keny\LeboncoinBundle\Entity\Annonceur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keny_leboncoinbundle_annonceur';
    }
}
