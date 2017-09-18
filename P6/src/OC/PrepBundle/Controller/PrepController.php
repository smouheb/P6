<?php

namespace OC\PrepBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\PrepBundle\Entity\Trick;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PrepController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCPrepBundle:Default:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $creation = new Trick();

        $formbuilder = $this->get('form.factory')->createBuilder(FormType::class, $creation);

        $formbuilder
            ->add('name', TextType::class)
            ->add('group', TextType::class)
            ->add('picture', FileType::class, array('label'=>'Picture (png format)'))
            ->add('videoUrl', TextType::class);

        $form = $formbuilder->getForm();

        return $this->render('OCPrepBundle:Default:add.html.twig', array(
            'form'=>$form->createView()
        ));
    }
}
