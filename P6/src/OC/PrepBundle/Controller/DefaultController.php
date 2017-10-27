<?php

namespace OC\PrepBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PrepBundle\Entity\Picture;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $picture = $em->getRepository(Picture::class)->findIdToJoin();


        return $this->render('OCPrepBundle:Default:index.html.twig', array(
            'picture'=>$picture));
    }
}