<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Product;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/nos-produits', name: 'app_product')]
    public function index(Request $request): Response
    {        
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        //FILTRE
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $products = $this->entityManager->getRepository(Product::class)->findWithSearch($search);
        }

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'form' => $form->createView()
        ]
    );
    }

    
    #[Route('/produit/{slug}', name: 'app_oneproduct')]
    public function show($slug): Response
    {
        //Récupérer toutes les données d'un seul produit grâce au repository via son slug
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);

        //Afficher les meilleures ventes
        $products = $this->entityManager->getRepository(Product::class)->findByIsBest(1);

        //Redirection vers la page nos-produits si le slug n'existe pas
        if (!$product){
            return $this->redirectToRoute('app_product');
        }

        return $this->render('product/show.html.twig', [
            'product' => $product,
            'products' => $products
        ]
    );
    }
}
