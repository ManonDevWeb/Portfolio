<?php

namespace App\Controller;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountOrderController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/compte/mes-commandes', name: 'app_account_order')]
    public function index(): Response
    {
        //Afficher uniquement les commandes finalisées, payées
        $orders = $this->entityManager->getRepository(Order::class)->findSuccessOrders($this->getUser());
        //dd($orders);
        
        return $this->render('account/order.html.twig', [
            'orders' => $orders
        ]);
    }

    #[Route('/compte/mes-commandes/{reference}', name: 'app_account_order_show')]
    public function show(): Response
    {
        //Afficher uniquement les commandes finalisées, payées
        $orders = $this->entityManager->getRepository(Order::class)->findSuccessOrders($this->getUser());
        //dd($orders);
        
        return $this->render('account/order.html.twig', [
            'orders' => $orders
        ]);
    }
}
