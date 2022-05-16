<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AccountPasswordController extends AbstractController
{
    private $entityManager;
        
    public function __construct(EntityManagerInterface $entityManager ) {
        $this->entityManager = $entityManager;
    }

    #[Route('/compte/modifier-mot-de-passe', name: 'app_account_password')]
    public function index(Request $request, UserPasswordHasherInterface $encoder): Response
    {
        //récupérer l'utilisateur actuellement connecté
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);

        //manipuler la requete entrante
        $form->handleRequest($request);

        //formulaire soumis et valide ?
        if ($form->isSubmitted() && $form->isValid()){
            $old_pswd = $form->get('old_password')->getData();
            //compare les deux mots de passe encryptés (de la db et saisi)
            if ($encoder->isPasswordValid($user, $old_pswd)){
                $new_pswd = $form->get('new_password')->getData();
                $password = $encoder->hashPassword($user, $new_pswd);

                $user->setPassword($password);
                $this->entityManager->flush();

            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
