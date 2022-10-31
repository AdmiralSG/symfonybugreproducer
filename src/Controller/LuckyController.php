<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController {
    
    #[Route(
            path: [
                'es' => '/registro',
                'en' => '/signup',
                'pt' => '/registarme'
            ],
            name: 'registro',
            requirements: [
                '_locale' => 'es|en|pt',
            ],
    )]
    public function registro(): Response {
        return $this->render('registro.html.twig');
    }
        
}
