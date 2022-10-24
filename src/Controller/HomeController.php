<?php

    namespace App\Controller;

    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Entity\Product;
    use App\Entity\Header;


    class HomeController extends AbstractController
    {
        private $entityManager;

        public function __construct(EntityManagerInterface $entityManager)
        {
            $this->entityManager = $entityManager;
        }

        
        #[Route('/home', name: 'app_home')]
        public function index():Response
        {
            $products = $this->entityManager->getRepository(Product::class)->findByIsBest(1);
            //Aller chercher les différents headers
            $headers = $this->entityManager->getRepository(Header::class)->findAll();

            return $this->render('home/index.html.twig', [
                'products' => $products,
                'headers' => $headers
            ]);
        }
    }