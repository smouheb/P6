<?php

namespace OC\PrepBundle\Controller;

use OC\PrepBundle\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\PrepBundle\Entity\Trick;
use OC\PrepBundle\Form\TrickType;

class PrepController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $picture = $em->getRepository(Picture::class)->findIdToJoin();


        return $this->render('OCPrepBundle:Default:index.html.twig', array(
            'picture'=>$picture));
    }

    public function addAction(Request $request)
    {
        $trick = new Trick();

        $form = $this->createForm( TrickType::class, $trick);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($trick);
            $em->flush();

            $this->addFlash('success', 'message sent Thank you!');

            return $this->redirectToRoute('oc_prep_homepage');
        }

        return $this->render('OCPrepBundle:Default:add.html.twig', array(
            'form'=>$form->createView()
        ));
    }


}
