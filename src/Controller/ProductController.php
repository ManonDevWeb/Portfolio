<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/nos-produits', name: 'app_product')]
    public function index(): Response
    {
        //Récupérer toutes les données grâce au repository
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        // dd($products);
        return $this->render('product/index.html.twig', [
            'products'=>$products
        ]
    );
    }

    
    #[Route('/produit/{slug}', name: 'app_oneproduct')]
    public function show($slug): Response
    {
        //dd($slug);

        //Récupérer toutes les données d'un seul produit grâce au repository via son slug
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);

        //Redirection vers la page nos-produits si le slug n'existe pas
        if (!$product){
            return $this->redirectToRoute('app_product');
        }

        // dd($products);
        return $this->render('product/show.html.twig', [
            'product'=>$product
        ]
    );
    }
}
