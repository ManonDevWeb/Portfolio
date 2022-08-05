<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\User;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande/merci/{stripeSessionId}', name: 'app_order_validate')]
    public function index(Cart $cart, $stripeSessionId): Response
    {
        $order=$this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        //Regarde si l'user est bien celui de la commande et que la commande existe
        if (!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_home');
        }

        if (!$order->isIsPaid()) {
            //Vider la session "cart"
            $cart->remove();

            //Modifier le statut isPaid de la commande vers 1
            $order->setIsPaid(1);
            $this->entityManager->flush();

            //Création et envoi du mail de confirmation de commande
            $mail = new Mail();
            $user_id = $this->getUser()->getId();
            $user = $this->entityManager->getRepository(User::class)->findOneById($user_id);
            $firstname = $user->getFirstname();

            $carrier = $order->getCarrierName();
            $reference = $order->getReference();
            //Suivi de la commande dans l'espace client
            $url = $this->generateUrl('app_account_order_show', ['reference' => $reference], UrlGeneratorInterface::ABSOLUTE_URL);

            $object = '💅🏻 Confirmation de votre commande MCMC !';

            $content = "Bonjour ".$firstname.",<br><br>Votre commande n°<strong>".$reference."</strong> chez MCMC vient d'être validée !<br><br>";
            $content .= "Vous recevrez très prochainement votre commande via ".$carrier.".<br><br>";
            $content .= "Pour suivre votre commande, rendez-vous dans <a href=".$url.">votre espace client MCMC</a>.<br><br>";
            $content .= "Cordialement,<br>L'équipe MCMC";

            $mail->send($user->getEmail(), $firstname, $object, $content);

        }
        //Afficher les quelques infos de la commande de l'utilisateur

        return $this->render('order_success/index.html.twig',[
            'order' => $order
        ]);
    }
}
