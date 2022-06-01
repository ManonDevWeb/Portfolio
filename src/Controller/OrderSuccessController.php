<?php

namespace App\Controller;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'app_order_validate')]
    public function index($stripeSessionId): Response
    {
        $order=$this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        //Regarde si l'user est bien celui de la commande et que la commande existe
        if (!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_home');
        }

        if (!$order->isIsPaid()) {
            //Modifier le statut isPaid de la commande vers 1
            $order->setIsPaid(1);
            $this->entityManager->flush();

        }
        //Envoyer un email au client pour lui confirmer sa commande
        //Afficher les quelques infos de la commande de l'utilisateur

        //dd($order);

        return $this->render('order_validate/index.html.twig',[
            'order' => $order
        ]);
    }
}
