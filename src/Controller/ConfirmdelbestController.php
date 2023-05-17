<?php

namespace App\Controller;

use App\Entity\Bestselling;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ConfirmdelbestController extends AbstractController
{
    #[Route('/{id}/confirmdelbest', name: 'app_confirmdelbest')]
    public function confirmDelete(Bestselling $best, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->getMethod() == 'POST') {
            $em = $doctrine->getManager();
            $em->remove($best);
            $em->flush();
        
            return $this->redirectToRoute('app_showbestselling');
        }
    
        return $this->render('confirmdelbest/index.html.twig', [
            'best' => $best,
            
        ]);
    }
}
