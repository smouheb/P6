<?php

namespace OC\PrepBundle\Controller;

use OC\PrepBundle\Entity\Test;
use OC\PrepBundle\Form\TestType;
use OC\PrepBundle\Entity\Picture;
use OC\PrepBundle\Entity\TricksGroup;
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
        $group = new TricksGroup();

        $form = $this->createForm( TrickType::class, $trick);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $trick->setGroup();

            $em = $this->getDoctrine()->getManager();
            $em->persist($trick);
            $em->flush();

            return $this->redirectToRoute('oc_prep_homepage');
        }

        return $this->render('OCPrepBundle:Default:add.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function showAction($id)
    {
        $trick = $this->getDoctrine()
            ->getManager()
            ->getRepository(Trick::class)
            ->findIdToJoin($id);

        return $this->render('OCPrepBundle:Default:show.html.twig', array(
            'trick'=>$trick
        ));
    }

}
