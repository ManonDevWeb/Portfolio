<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ) {

        $this->entityManager = $entityManager;
    }
    
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //injecte toutes les données du form
            $contact = $form->getData();

            $this->entityManager->persist($contact);
            $this->entityManager->flush();
        }

        return $this->render('contact/index.html.twig', [
            'contactForm'=> $form->createView() 
        ]);
    }
}
