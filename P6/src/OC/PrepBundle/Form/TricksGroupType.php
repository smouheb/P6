<?php

namespace OC\PrepBundle\Form;

use OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
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
        $builder->add('groupName', TextType::class, [
                            'label' => 'Add a group',
                            'required' => false,
                            'attr' => ['placeholder' => 'group name such as 360 etc...']
                ])

                ->add('Create', SubmitType::class, [
                    'attr' => ['class' => 'btn btn-success']
                ])

                ->add('groupId', EntityType::class, [

                    'label' => 'Select a group',
                    'class' => 'OCPrepBundle:TricksGroup',
                    'choice_label' => function(TricksGroup $group){

                        $id = $group->getGroupId();
                        $groupname = $group->getGroupName();

                        $idandname = $id.'-'.$groupname;

                        return $idandname;

                    }
                ])

                ->add('Remove', SubmitType::class, [
                    'attr' => ['class' => 'btn btn-danger']
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
