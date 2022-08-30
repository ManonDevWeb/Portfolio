<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Stripe\Checkout\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StripeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande/create-session/{reference}', name: 'app_stripe_create_session')]
    public function index(EntityManagerInterface $entityManager, Cart $cart, $reference): Response
    {
        $products_for_stripe = [];
        //A modifier au passage en production (en local, normal qu'il n'y ait pas les images sur stripe)
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        $order = $entityManager->getRepository(Order::class)->findOneByReference($reference);
        //Si la ref n'existe plus, si elle a été modifiée ou supprimée
        if (!$order) {
            //redirection vers la sélection transporteur et adresse
            $this->redirectToRoute('app_order');
        } else {            
            foreach ($order->getOrderDetails()->getValues() as $product){
                $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
                $products_for_stripe[] = [
                    'price_data' => [
                        'currency' => 'eur',
                        'unit_amount' => $product->getPrice(),
                        'product_data' => [
                            'name' => $product->getProduct(),
                            'images' => [$YOUR_DOMAIN."/uploads/".$product_object->getIllustration()],
                        ],
                    ],
                    'quantity' => $product->getQuantity(),
                ];
            }
            
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $order->getCarrierPrice(),
                    'product_data' => [
                        'name' => $order->getCarrierName(),
                        'images' => [$YOUR_DOMAIN],
                    ],
                ],
                'quantity' => 1,
            ];

            //Après avoir installé Stripe
            Stripe::setApiKey('sk_test_51L5REXLRjiZIOMs1zmLrHD7iHsjh7KXKpK2ETvPu90x2JX975JmoG89QTXn0owbQek3dix62hN6bHalLK1xCP93z004se3cjQh');
            
            $checkout_session = Session::create([
                'customer_email' => $this->getUser()->getEmail(),
                //Les différents produits à afficher
                'payment_method_types' => ['card'],
                'line_items' => [[
                    $products_for_stripe
                ]],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
                'cancel_url' => $YOUR_DOMAIN . '/commande/erreur/{CHECKOUT_SESSION_ID}',
            ]);

            $order->setStripeSessionId($checkout_session->id);
            $entityManager->flush();
                
            return $this->redirect($checkout_session->url);  
        }
    }
}