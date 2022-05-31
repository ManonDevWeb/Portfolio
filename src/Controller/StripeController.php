<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Classe\Cart;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class StripeController extends AbstractController
{
    #[Route('/commande/create-session', name: 'app_stripe_create_session')]
    public function index(Cart $cart): Response
    {
        $products_for_stripe = [];
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        //Après avoir installé Stripe
        Stripe::setApiKey('sk_test_51L5REXLRjiZIOMs1zmLrHD7iHsjh7KXKpK2ETvPu90x2JX975JmoG89QTXn0owbQek3dix62hN6bHalLK1xCP93z004se3cjQh');

        foreach ($cart->getFull() as $product){
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $product['product']->getPrice(),
                    'product_data' => [
                        'name' => $product['product']->getName(),
                        'images' => [$YOUR_DOMAIN."/uploads/".$product['product']->getIllustration()],
                    ],
                ],
                'quantity' => $product['quantity'],
            ];
        }
        //dd($products_for_stripe);

        $checkout_session = Session::create([
            //Les différents produits à afficher
            'payment_method_types' => ['card'],
            'line_items' => [[
                $products_for_stripe
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success.html',
            'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        $response = new JsonResponse(['id' => $checkout_session->id]);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        return $response;

        //dump($checkout_session->id);
        //dd($checkout_session);
    }

}