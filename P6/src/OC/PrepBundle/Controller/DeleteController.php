<?php

namespace OC\PrepBundle\Controller;

use OC\PrepBundle\Entity\TricksGroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PrepBundle\Entity\Trick;

class DeleteController extends Controller
{
    public function deleteAction(Trick $trick)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($trick);
        $em->flush();

        $this->addFlash('success', 'Trick Deleted');

        return $this->redirectToRoute('oc_prep_homepage');
    }

    public function deleteGroupAction(TricksGroup $group)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($group);
        $em->flush();

        $this->addFlash('success', 'Group type deleted');

        return $this->redirectToRoute('oc_prep_group');
    }
}