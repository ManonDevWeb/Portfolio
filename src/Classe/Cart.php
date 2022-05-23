<?php

namespace App\Classe;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class Cart
{
    private $session;
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
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

    public function delete($id)
    {
        $cart = $this->requestStack->getSession()->get('cart');
        // Retirer du panier le produit avec l'id selectionné
        unset($cart[$id]);
        return $this->requestStack->getSession()->set('cart', $cart);
    }

    public function decrease($id)
    {
        //Il faut vérifier qu'il y ait plus d'une fois le produit dans le panier, sinon on le supprime complètement
        $cart = $this->requestStack->getSession()->get('cart');

        if ($cart[$id] > 1){
            $cart[$id]--;
        } else {
            unset($cart[$id]);
        }
        return $this->requestStack->getSession()->set('cart', $cart);
    }

    public function getFull()
    {
        //Variable stockant toutes les infos liées au panier (id, nom, ...)
        $cartComplete = [];
        //Pour chaque élément dans le panier, et si le panier n'est pas vide
        if ($this->get()) {
            foreach ($this->get() as $id => $quantity) {
                //Empeche l'injection d'id inconnus dans l'url
                $product_object = $this->entityManager->getRepository(Product::class)->findOneById($id);
                if (!$product_object){
                    //Si l'id n'existe pas, on supprime le produit du panier
                    $this->delete($id);
                    //Sors de la boucle et passe au produit suivant
                    continue;
                }
                $cartComplete[] = [
                    'product' => $product_object,
                    'quantity' => $quantity
                ];
            }
        }
        return $cartComplete;
    }
}