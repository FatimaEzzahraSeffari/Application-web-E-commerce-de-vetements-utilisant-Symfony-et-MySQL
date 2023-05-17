<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class EditmessageController extends AbstractController
{
    #[Route('/editmessage/{id}', name: 'app_editmessage')]
    public function edit(Message $message, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MessageEditType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_showmessage', ['id' => $message->getId()]);
        }

        return $this->render('editmessage/index.html.twig', [
            'form' => $form->createView(),
            'message' => $message
        ]);
    }
}
