<?php

namespace App\Controller;

use App\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
class ConfirmDeletemsgController extends AbstractController
{
#[Route('/{id}/confirm_deletemsg', name: 'app_confirm_deletemsg')]

    public function confirmDelete(Message $message, Request $request, ManagerRegistry $doctrine): Response
    {
        if ($request->getMethod() == 'POST') {
            $em = $doctrine->getManager();
            $em->remove($message,);
            $em->flush();
        
            return $this->redirectToRoute('app_showmessage');
        }
        
        return $this->render('confirm_deletemsg/index.html.twig', [
            'message' => $message,
        ]);
    }
    

}
