<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use App\Security\LoginFormAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ) {

        $this->entityManager = $entityManager;
    }

    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request, UserPasswordHasherInterface $encoder, LoginFormAuthenticator $authenticator, UserAuthenticatorInterface $userAuthenticator)
    {
        $notification = null;

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        //Regarde s'il y a eu un post
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //injecte toutes les données du form
            $user = $form->getData();

            //Vérifie que l'email n'existe pas déjà en db
            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());
            if (!$search_email) {
                $password = $encoder->hashPassword($user,$user->getPassword());
    
                $user->setPassword($password);
                $user->setRoles(['ROLE_USER']);

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                //Lien formulaire de contact
                $urlContact = $this->generateUrl('app_contact', [], UrlGeneratorInterface::ABSOLUTE_URL);

                //Création et envoi du mail de confirmation d'inscription
                $mail = new Mail();
                $firstname = $user->getFirstname();

                $object = '💅🏻 Bienvenue chez MCMC !';

                $content = "Bonjour ".$firstname.",<br>Bienvenue dans la boutique <strong>MCMC</strong> !<br><br>";
                $content .= "Vous pouvez maintenant commencer à utiliser votre compte !<br><br>";
                $content .= "Si vous rencontrez des difficultés pour vous connecter à votre compte, contactez-nous <a href=".$urlContact.">ici</a>.<br><br>";
                $content .= "Cordialement,<br>L'équipe MCMC";

                $mail->send($user->getEmail(), $firstname, $object, $content);

                $notification = "Votre inscription s'est déroulée avec succès. Vous pouvez dès à présent vous connecter à votre compte.";

                // Connecte l'utilisateur après l'inscription et le redirige vers la page d'accueil
                return $userAuthenticator->authenticateUser(
                    $user,
                    $authenticator,
                    $request
                );
            } else {
                $notification = "L'email que vous avez renseigné existe déjà.";
            }
        }

        return $this->render('register/index.html.twig', [
            'form'=> $form->createView(),
            'notification' => $notification
        ]);
    }
}
