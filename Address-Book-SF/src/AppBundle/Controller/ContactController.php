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
    public function addAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $form = $this->createForm(\AppBundle\Form\ContactType::class);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $contact = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            
            return $this->redirectToRoute('app_contact_list');
        }
        
        return $this->render('AppBundle:Contact:add.html.twig', array(
            'contactForm' => $form->createView()
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
