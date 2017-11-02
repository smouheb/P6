<?php

namespace OC\PrepBundle\Controller;

use OC\PrepBundle\Entity\TricksGroup;
use OC\PrepBundle\Form\TricksGroupType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\PrepBundle\Entity\Trick;
use OC\PrepBundle\Form\TrickType;

class AddController extends Controller
{
    public function addAction(Request $request)
    {
        $trick = new Trick();

        $form = $this->createForm(TrickType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($trick);
            $em->flush();

            $this->addFlash('success', 'Trick created successfully!');

            return $this->redirectToRoute('oc_prep_homepage');

        }

        return $this->render('OCPrepBundle:Default:add.html.twig', array(

            'form' => $form->createView()
        ));
    }

    public function newGroupAction(Request $request)
    {
        $group = new TricksGroup();

        $form = $this->createForm(TricksGroupType::class, $group);

        $form->handleRequest($request);

        if($form->getClickedButton() && 'Remove' === $form->getClickedButton()->getName()) {

            $id = $form->getData();

            foreach ($id as $item){

                $item->getGroupId();

                dump($item);
                exit;
            }


                return $this->redirectToRoute('oc_prep_delgroup', array('id' => $item));

        }

        if($form->getClickedButton() && 'Remove' !== $form->getClickedButton()->getName()) {

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($group);
                $em->flush();

                $this->addFlash('success', 'Group created successfully!');

                return $this->redirectToRoute('oc_prep_add');
            }
        }

        return $this->render('OCPrepBundle:Default:newgroup.html.twig', [

            'form' => $form->createView(),
        ]);
    }

}
