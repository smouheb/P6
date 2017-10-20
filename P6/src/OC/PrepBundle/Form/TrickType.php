<?php

namespace OC\PrepBundle\Form;

use Doctrine\ORM\Mapping\Entity;
use OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TrickType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class)
                ->add('description', TextType::class)

                //Adding the group where the trick will actually belog

                ->add('Group', EntityType::class,[
                            'class' => 'OCPrepBundle:TricksGroup',
                            'choice_label' => 'groupName'
                    ])
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
