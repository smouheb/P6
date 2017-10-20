<?php

namespace OC\PrepBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PrepBundle\Entity\Trick;
use OC\PrepBundle\Form\TrickType;

class EditController extends Controller
{
    public function editAction(Request $request,Trick $trick)
    {

        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($trick);
            $em->flush();

            $this->addFlash('success', 'the trick has been successfully edited!');

            return $this->redirectToRoute('oc_prep_homepage');
        }

       return $this->render('OCPrepBundle:Default:edit.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}