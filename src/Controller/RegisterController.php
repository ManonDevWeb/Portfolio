<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ) {

        $this->entityManager = $entityManager;
    }


    #[Route('/register', name: 'app_register')]
    public function index(Request $request, UserPasswordHasherInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        //Regarde s'il y a eu un post
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //injecte toutes les données du form
            $user = $form->getData();

            $password = $encoder->hashPassword($user,$user->getPassword());
            //var_dump pour voir ce qu'il y a dans la variable $user
            //dd($user);

            //https://github.com/symfony/symfony/discussions/44886
            //Utilisé si non créé avec la fonction construct (passer PersistenceManagerRegistry $doctrine en argument de index())
            //$em = $doctrine->getManager();
            //fige la data
            //$em->persist($user);
            //enregistre dans la db
            //$em->flush();

            $user->setPassword($password);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }

        return $this->render('register/index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
