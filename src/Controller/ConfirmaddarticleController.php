<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmaddarticleController extends AbstractController
{
    #[Route('/confirmaddarticle', name: 'app_confirmaddarticle')]
    public function index(): Response
    {
        
        return $this->render('confirmaddarticle/index.html.twig', [
            'controller_name' => 'ConfirmaddarticleController',
        ]);
    }
}
