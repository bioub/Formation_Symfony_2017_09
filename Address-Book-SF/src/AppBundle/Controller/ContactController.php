<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/contacts")
 */
class ContactController extends Controller
{
    /**
     * 
     * @return \AppBundle\Repository\ContactRepository
     */
    protected function getContactRepository() {
        $doctrine = $this->getDoctrine();
        return $doctrine->getRepository(\AppBundle\Entity\Contact::class);
    }


    /**
     * @Route("/")
     */
    public function listAction()
    {
        $repo = $this->getContactRepository();
        
        $contactList = $repo->findAll();
        
        return $this->render('AppBundle:Contact:list.html.twig', array(
            'contacts' => $contactList
        ));
    }
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:Contact:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/{id}")
     */
    public function showAction($id)
    {
        $repo = $this->getContactRepository();
        
        $contact = $repo->find($id);
        
        return $this->render('AppBundle:Contact:show.html.twig', array(
            'contact' => $contact
        ));
    }


}
