<?php

namespace App\Controller;

use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;



class ConfirmDeleteController extends AbstractController
{
    #[Route('/{id}/confirm_delete', name: 'app_project_confirm_delete')]

    public function confirmDelete(User $user, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->getMethod() == 'POST') {
            $em = $doctrine->getManager();
            $em->remove($user);
            $em->flush();
        
            return $this->redirectToRoute('app_showuser');
        }
        
        return $this->render('confirm_delete/index.html.twig', [
            'user' => $user,
        ]);
    }
    

}
