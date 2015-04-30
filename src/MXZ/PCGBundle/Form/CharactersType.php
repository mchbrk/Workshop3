<?php

namespace MXZ\PCGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CharactersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('alignment', 'choice', array(
                'choices' => array(
                    'LG'   => 'Lawful Good',
                    'NG' => 'Neutral Good',
                    'CG'   => 'Chaotic Good',
                    'LN'   => 'Lawful Neutral',
                    'TN' => 'True Neutral',
                    'CN'   => 'Chaotic Neutral',
                    'LE'   => 'Lawful Evil',
                    'NE' => 'Neutral Evil',
                    'CE'   => 'Chaotic Evil',
                ),
                'multiple' => false,))
            ->add('race', 'entity', array(
                'class' => 'MXZPCGBundle:Races',
                'property' => 'race',))
            ->add('xP')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MXZ\PCGBundle\Entity\Characters'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mxz_pcgbundle_characters';
    }
}
