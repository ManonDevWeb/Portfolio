<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\AddressType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountAddressController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ) {
        $this->entityManager = $entityManager;
    }


    #[Route('/compte/adresses', name: 'app_account_address')]
    public function index(): Response
    {
        //dd($this->getUser());
        return $this->render('account/address.html.twig');
    }


    #[Route('/compte/ajouter-une-adresse', name: 'app_account_address_add')]
    public function add(Request $request): Response
    {
        //dd($this->getUser());
        $address = new Address;
        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            //Défini à quel utilisateur les données de l'adresse doivent être associées
            $address->setUser($this->getUser());
            //Prépare la donnée pour qu'elle puisse être envoyée en bd
            $this->entityManager->persist($address);
            //Envoie la donnée dans la bd
            $this->entityManager->flush();
            //dd($address);
            return $this->redirectToRoute('app_account_address');
        }

        return $this->render('account/address_form.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/compte/modifier-une-adresse/{id}', name: 'app_account_address_edit')]
    public function edit(Request $request, $id): Response
    {
        //dd($this->getUser());
        //On va chercher la donnée à modifier
        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        //Est-ce que l'adresse existe ? sinon rediriger vers les adresses
        //Vérifie aussi que le id dans l'url est bien celui de l'utilisateur connecté
        if(!$address || $address->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_account_address');
        }

        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            //Envoie la donnée dans la bd
            $this->entityManager->flush();
            //dd($address);
            return $this->redirectToRoute('app_account_address');
        }

        return $this->render('account/address_form.html.twig', [
            'form' => $form->createView()
        ]);
    }


    #[Route('/compte/supprimer-une-adresse/{id}', name: 'app_account_address_delete')]
    public function delete($id): Response
    {
        //On va chercher la donnée à modifier
        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        //Est-ce que l'adresse existe ? sinon rediriger vers les adresses
        //Vérifie aussi que le id dans l'url est bien celui de l'utilisateur connecté
        if($address && $address->getUser() == $this->getUser()){
            $this->entityManager->remove($address);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('app_account_address');
    }

}
