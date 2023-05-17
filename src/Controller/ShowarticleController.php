<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Produit;

class ShowarticleController extends AbstractController
{
    #[Route('/showarticle', name: 'app_showarticle')]
    public function showArticles(ManagerRegistry $doctrine)
    {
        $articles = $doctrine->getManager()->getRepository(Produit::class)->findAll();
    
        return $this->render('showarticle/index.html.twig', [
            'posts' => $articles,
        ]);
    }
    #[Route('article/{id}', name: 'app_produit_delete')]
    public function deleteproduit(Produit $produit, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($produit);
        $em->flush();
    
        return $this->redirectToRoute('app_showarticle');
    
}
    }



    