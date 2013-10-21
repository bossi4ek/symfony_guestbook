<?php

namespace Acme\GuestBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\GuestBookBundle\Entity\Post;
use Acme\GuestBookBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $post = $this->getDoctrine()->getRepository('AcmeGuestBookBundle:Post')->findAll();

        $post_obj = new Post();
        $form = $this->createForm(new PostType(), $post_obj);

        $form->handleRequest($request);

        if ($form->isValid()) {
//            if ($form->get('Отправить')->isClicked()) {
                $post_obj = $form->getData();
                $post_obj->setDatecreate(time());
                $em = $this->getDoctrine()->getManager();
                $em->persist($post_obj);
                $em->flush();
                return $this->redirect($this->generateUrl('acme_guest_book_homepage'));
//            }
        }

        return $this->render('AcmeGuestBookBundle:Default:index.html.twig', array(
            'post' => $post,
            'form' => $form->createView())
        );
    }

    public function delAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('AcmeGuestBookBundle:Post')->findOneById($id);
        $em->remove($post);
        $em->flush();

        return $this->redirect($this->generateUrl('acme_guest_book_homepage'));
    }
}
