<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmmsgController extends AbstractController
{
    #[Route('/confirmmsg', name: 'app_confirmmsg')]
    public function index(): Response
    {
        return $this->render('confirmmsg/index.html.twig', [
            'controller_name' => 'ConfirmmsgController',
        ]);
    }
}
