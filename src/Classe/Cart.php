<?php

namespace App\Classe;

use Symfony\Component\HttpFoundation\RequestStack;

class Cart
{
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function add($id)
    {
        //On passe un tableau en argument au cas où le panier est vide
        $cart=$this->requestStack->getSession()->get('cart',[]);
        //Vérifie que le produit est déjà dans le panier (qu'il y en a au moins 1)
        if (!empty($cart[$id])){
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $this->requestStack->getSession()->set('cart', $cart);
    }

    public function get()
    {
        return $this->requestStack->getSession()->get('cart');
    }

    public function remove()
    {
        return $this->requestStack->getSession()->remove('cart');
    }
}