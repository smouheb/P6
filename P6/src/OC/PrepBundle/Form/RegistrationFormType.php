<?php

namespace OC\PrepBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RegistrationFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imageFile', VichImageType::class, [
                            'label' => 'Select a Picture']);
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getImageFile()
    {
        return $this->getBlockPrefix();
    }


}
