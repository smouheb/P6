<?php
/**
 * Created by PhpStorm.
 * User: MacBookAir
 * Date: 17/10/2017
 * Time: 06:38
 */

namespace OC\PrepBundle\Controller;

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
}