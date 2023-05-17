<?php

namespace App\Controller;

use App\Entity\Bestselling;
use App\Repository\BestsellingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowbestsellingController extends AbstractController
{
    #[Route('/showbestselling', name: 'app_showbestselling')]
    public function index(EntityManagerInterface $entityManager,BestsellingRepository $postRepository): Response{
        $posts = $postRepository-> findAll();
        return $this->render('showbestselling/index.html.twig', 
            ['posts' => $posts]);
       
    }
    #[Route('bestselling/{id}', name: 'app__best_delete')]
    public function delete(Bestselling $best, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($best);
        $em->flush();
    
        return $this->redirectToRoute('app_showbestselling');
    
}
       
}
