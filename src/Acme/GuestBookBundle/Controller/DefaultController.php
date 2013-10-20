<?php

namespace Acme\GuestBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeGuestBookBundle:Default:index.html.twig', array('name' => 'world'));
    }
}
