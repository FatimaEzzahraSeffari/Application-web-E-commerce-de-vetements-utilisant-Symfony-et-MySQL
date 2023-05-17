<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmdeleteproduitController extends AbstractController
{
    #[Route('/{id}/confirmdeleteproduit', name: 'app_confirmdeleteproduit')]
    public function confirmDeleteproduit(Produit $produit, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->getMethod() == 'POST') {
            $em = $doctrine->getManager();
            $em->remove($produit,);
            $em->flush();
        
            return $this->redirectToRoute('app_showarticle');
        }
        return $this->render('confirmdeleteproduit/index.html.twig', [
            'produit' => $produit,
        ]);
    }
}

    

