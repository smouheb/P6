<?php

namespace OC\PrepBundle\Form;

use OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TrickType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array(
                            'label' => 'Enter a Trick name'
                ))
                ->add('description', TextType::class, array(
                            'label' => 'Enter a description'
                ))
                //Adding the group where the trick will actually belong
                ->add('Group', EntityType::class,[
                            'label' => 'Select a group',
                            'class' => 'OCPrepBundle:TricksGroup',
                            'choice_label' => function(TricksGroup $group){
                                $name = $group->getGroupName();
                                return $name;
                            }]
                )
                //Addind the Picture url input
               ->add('picture', CollectionType::class, [
                        'entry_type' => PictureType::class,
                        'allow_add' => true,
                        'allow_delete'=> true,
                        'by_reference' => false
                ])
               ->add('video', CollectionType::class, [
                         'entry_type' => VideoType::class,
                        'allow_add' => true,
                        'allow_delete'=> true,
                        'by_reference' => false
                 ])
                ->add('submit', SubmitType::class, array('label' => 'Submit'));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\PrepBundle\Entity\Trick'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_prepbundle_trick';
    }


}
