<?php

namespace OC\PrepBundle\Form;

use OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TricksGroupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('groupName', EntityType::class, [

            'placeholder' => 'Select a Group',
            'class' => 'OCPrepBundle:TricksGroup',
            'choice_label' => function (TricksGroup $group){

                $x = $group->getGroupId();

                $y = $group->getGroupName();

                $test =  $x.'-'.$y;

                return $test;
            },
            'required' => true,

        ]);

    }
    /**
     *
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\PrepBundle\Entity\TricksGroup'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_prepbundle_tricksgroup';
    }


}
