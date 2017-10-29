<?php

namespace OC\PrepBundle\Form;

use Proxies\__CG__\OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TricksGroupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('groupName', TextType::class,[
                'label' => 'Add a group',
                'attr' => ['placeholder' => 'group name such as 360 etc...']])

                ->add('Create', SubmitType::class);

               /* ->add('Group', EntityType::class,[
                'label' => 'Select a group',
                'class' => 'OCPrepBundle:TricksGroup',
                'choice_label' => 'groupName'
            ]);*/
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
