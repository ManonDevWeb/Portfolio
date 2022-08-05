<?php

namespace App\Controller;

use App\Classe\Mail;
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
        $notification = null;

        $contact = new Contact();
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //injecte toutes les données du form
            $contact = $form->getData();

            $this->entityManager->persist($contact);
            $this->entityManager->flush();

            //Création et envoi du mail de confirmation d'inscription
            $mail = new Mail();
            $fullname = $contact->getFirstname()." ".$contact->getLastname();
            $message = $contact->getMessage();

            $object = '📧 '.$fullname.' a envoyé un message à MCMC !';

            $content = "Bonjour,<br>Vous avez reçu ce message de ".$fullname." : <br><br>";
            $content .= $message."<br><br>";
            $content .= "Cordialement,<br>La bise les filles";

            // **Recuperer array avec les admin et en extraire les noms et les emails pour faire une boucle et leur envoyer le mail de contact
            //$admins = $this->entityManager->getRepository(User::class)->findByRole('ROLE_ADMIN');

            $mail->send($emailMarta, 'Marta', $object, $content);
            $mail->send($emailColine, 'Coline', $object, $content);
            $mail->send($emailManon, 'Manon', $object, $content);
            $mail->send($emailChloe, 'Chloe', $object, $content);

            $notification = "Votre inscription s'est déroulée avec succès. Vous pouvez dès à présent vous connecter à votre compte.";
            
        }

        return $this->render('contact/index.html.twig', [
            'contactForm'=> $form->createView(),
            'notification' => $notification
        ]);
    }
}
