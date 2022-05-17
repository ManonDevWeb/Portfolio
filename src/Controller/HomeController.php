<?php

    namespace App\Controller;

    //use DateTime;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController
    {
        #[Route('/home', name: 'app_home')]
        public function index():Response
        {
            $chloe = 'cloclo';
            //$currentTime = (new dateTime)->format("H:i");
            //return new Response('<h1>Hello Quebec</h1>');
            return $this->render('home/index.html.twig', compact('chloe'));
        }
    }