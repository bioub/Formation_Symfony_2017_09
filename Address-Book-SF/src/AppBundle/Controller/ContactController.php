<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contacts/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Contact:list.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/contacts/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Contact:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/contacts/{id}")
     */
    public function showAction($id)
    {
        return $this->render('AppBundle:Contact:show.html.twig', array(
            'id' => $id
        ));
    }


}
