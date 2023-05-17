<?php

namespace App\Controller;

use App\Repository\BestsellingRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(EntityManagerInterface $entityManager, ProduitRepository $produitRepository, CategoryRepository $categoryRepository,BestsellingRepository $postRepository, Request $request): Response {
        $categoryName = $request->query->get('category');
        if (!$categoryName) {
            $produit = $produitRepository->findAll();
        } else {
            $category = $categoryRepository->findOneBy(['name' => $categoryName]);
            $produit = $produitRepository->findBy(['Category' => $category]);
        }
        $categories = $categoryRepository->findAll();
        $bestselling = $postRepository-> findAll();
        return $this->render('main/index.html.twig', [
            'produit' => $produit,
            'categories' => $categories,
            'currentCategory' => $categoryName,
            'bestselling' => $bestselling,
        ]);
       
       
    }
}
