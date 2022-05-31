<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use DateTimeImmutable;
use App\Form\OrderType;
use App\Entity\OrderDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
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


    #[Route('/commande/recapitulatif', name: 'app_order_recap', methods:['POST'])]
    /**
     * @Route
     */
    //Créer la commande en bd
    public function add(Cart $cart, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OrderType::class, null, [
            // Permet de n'afficher que les adresses de l'utilisateur en cours
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            //dd($form->getData());

            $date = new \DateTimeImmutable();
            $carriers = $form->get('carriers')->getData();
            $delivery = $form->get('addresses')->getData();
            $delivery_content = $delivery->getFirstname().' '.$delivery->getLastname();
            $delivery_content .= '<br>'.$delivery->getPhone();

            if ($delivery->getCompany()){
                $delivery_content .= '<br>'.$delivery->getCompany();
            }
            
            $delivery_content .= '<br>'.$delivery->getAddress();
            $delivery_content .= '<br>'.$delivery->getPostal().' - '.$delivery->getCity();
            $delivery_content .= '<br>'.$delivery->getCountry();
            //dd($delivery_content);
            
            //dd($carriers);
            //Enregistrer ma commande entité Order()
            $order = new Order();
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            //On stocke le transporteur
            $order->setCarrierName($carriers->getName());
            $order->setCarrierPrice($carriers->getPrice());

            $order->setDelivery($delivery_content);
            //La commande n'est pas encore payée
            $order->setIsPaid(0);


            //On veut persister
            $this->entityManager->persist($order);

            //Pour chaque produit dans le panier, on veut créer une nouvelle entrée dans OrderDetails
            //Enregistrer mes produits entité OrderDetails()
            //OrderDetails = prix, produits, quantités de ce qui a été ajouté au panier par l'utilisateur

            foreach ($cart->getFull() as $product){
                $orderDetails = new OrderDetails();
                $orderDetails->setMyOrder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                $orderDetails->setTotal($product['product']->getPrice() * $product['quantity']);
                //dd($product);
                $this->entityManager->persist($orderDetails);
            }

            //dd($orderDetails);

            //Enregistrer dans la bd
            //$this->entityManager->flush();

            //Placé dans le if car le form doit être soumis pour avoir accès aux variables carriers...
            return $this->render('order/add.html.twig', [
                'cart' => $cart->getFull(),
                'carrier' => $carriers,
                'delivery' => $delivery_content
            ]);
        }

        return $this->redirectToRoute('app_cart');
    }
}