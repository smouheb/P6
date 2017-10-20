<?php

namespace OC\PrepBundle\Controller;

use OC\PrepBundle\Entity\Comment;
use OC\PrepBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\PrepBundle\Entity\Trick;


class ShowController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Request $request, $id)
    {
        //============================= Form to enter comments ===============================//
        $comment = new Comment();

        $form = $this->createForm( CommentType::class, $comment);
        $form->handleRequest($request);

        $comment->setTrick($id);

        if($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('oc_prep_action', array('id'=> $id));
        }
        //=============== Query to retrieve Tricks and related pictures, video ===============//

        $em = $this->getDoctrine()->getManager()->getRepository(Trick::class);

        $trick = $em->findTrick($id);
        $picture = $em->findTrickAndPics($id);
        $video = $em->findTrickAndVideo($id);

        //=============== Query to retrieve all comments ===============//

        $em = $this->getDoctrine()->getManager()->getRepository(Comment::class);

        $allcomments = $em->findBy(['trick' => $id],
                                  ['createdAt' => 'DESC']);

        //=============== pagination ===============//
        /**
         * @var $paginator \knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $paginaton = $paginator->paginate(
          $allcomments,
          $request->query->getInt('page',1),
          1
        );

        //============================= Rendering the template ===============================//
        return $this->render('OCPrepBundle:Default:show.html.twig', array(

            'trick' => $trick,
            'picture'=> $picture,
            'video' => $video,
            'paginaton' => $paginaton,
            'form' => $form->createView()
        ));
    }
}