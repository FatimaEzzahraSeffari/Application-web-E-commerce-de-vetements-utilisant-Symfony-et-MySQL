<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ShowuserController extends AbstractController
{
    
    #[Route('/showuser', name: 'app_showuser')]
    public function index(EntityManagerInterface $entityManager,UserRepository $postRepository): Response{
        $posts = $postRepository-> findAll();
        return $this->render('showuser/index.html.twig', 
            ['posts' => $posts]);
       
    }

    #[Route('/{id}', name: 'app_project_delete')]
    public function delete(User $user, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($user);
        $em->flush();
    
        return $this->redirectToRoute('app_showuser');
    
}

}
