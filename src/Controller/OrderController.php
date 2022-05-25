<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Form\OrderType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    #[Route('/commande', name: 'app_order')]
    public function index(Cart $cart): Response
    {
        //Vérifier que l'utilisateur a déjà une adresse pour qu'il puisse la sélectionner, sinon rediriger vers espace membre pour en créer une
        if (!$this->getUser()->getAddresses()->getValues()){
            return $this->redirectToRoute('app_account_address_add');
        }
        $form = $this->createForm(OrderType::class, null, [
            // Permet de n'afficher que les adresses de l'utilisateur en cours
            'user' => $this->getUser()
        ]);

        return $this->render('order/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFull()
        ]);
    }
}