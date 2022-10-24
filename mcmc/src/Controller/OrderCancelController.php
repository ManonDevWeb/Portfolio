<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderCancelController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/commande/erreur/{stripeSessionId}', name: 'app_order_cancel')]
    public function index($stripeSessionId): Response
    {
        $order=$this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        //Regarde si l'user est bien celui de la commande et que la commande existe
        if (!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_home');
        }

        //**Envoyer un email pour lui indiquer l'échec de paiement
        //Création et envoi du mail de confirmation de commande
        $mail = new Mail();
        $user_id = $this->getUser()->getId();
        $user = $this->entityManager->getRepository(User::class)->findOneById($user_id);
        $firstname = $user->getFirstname();

        $reference = $order->getReference();
        //Si le paiement a échoué, proposer de retourner vers le panier
        $url = $this->generateUrl('app_cart', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $object = '💅🏻 Echec de votre commande MCMC 😢';

        $content = "Bonjour ".$firstname.",<br><br>Le paiement de votre commande n°<strong>".$reference."</strong> chez MCMC a échoué.<br><br>";
        $content .= "Pour réessayer, rendez-vous dans <a href=".$url.">votre panier MCMC</a>.<br><br>";
        $content .= "Cordialement,<br>L'équipe MCMC";

        $mail->send($user->getEmail(), $firstname, $object, $content);
        
        return $this->render('order_cancel/index.html.twig', [
            'order' => $order
        ]);
    }
}
