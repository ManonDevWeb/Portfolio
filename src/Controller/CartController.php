<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{

    private $entityManager; 

    //nécessaire pour appeler le getRepository dans index et avoir accès aux données de produits
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/mon-panier', name: 'app_cart')]
    public function index(Cart $cart): Response
    {
        //Variable stockant toutes les infos liées au panier (id, nom, ...)
        $cartComplete = [];
        //Pour chaque élément dans le panier
        foreach ($cart->get() as $id => $quantity) {
            $cartComplete[] = [
                'product' => $this->entityManager->getRepository(Product::class)->findOneById($id),
                'quantity' => $quantity
            ];
        }

        //dd($cartComplete);

        //dd($cart->get());
        return $this->render('cart/index.html.twig', [
            'cart' => $cartComplete
        ]);
    }


    #[Route('/cart/add/{id}', name: 'app_add_to_cart')]
    public function add(Cart $cart, $id): Response
    {
        $cart->add($id);
        //dd($id);
        return $this->redirectToRoute('app_cart');
    }


    #[Route('/cart/remove', name: 'app_remove_my_cart')]
    public function remove(Cart $cart): Response
    {
        $cart->remove();
        //dd($id);
        return $this->redirectToRoute('app_product');
    }
}
