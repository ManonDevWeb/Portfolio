<?php
    namespace App\Controller;

    //use DateTime;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    class HomeController extends AbstractController
    {
        public function index()
        {
            $chloe = 'cloclo';
            //$currentTime = (new dateTime)->format("H:i");
            //return new Response('<h1>Hello Quebec</h1>');
            return $this->render('home/index.html.twig', compact('chloe'));
        }
    }