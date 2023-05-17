<?php

namespace App\Controller;
use App\Entity\Message;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ShowmessageController extends AbstractController
{
    #[Route('/showmessage', name: 'app_showmessage')]
    public function index(EntityManagerInterface $entityManager,MessageRepository $postRepository): Response{
        $posts = $postRepository-> findAll();
        return $this->render('showmessage/index.html.twig', 
          ['posts' => $posts]);
    }
    #[Route('message/{id}', name: 'app_delete_msg')]
    public function deletemsg(Message $message, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($message);
        $em->flush();
    
        return $this->redirectToRoute('app_showmessage');
    }
}
