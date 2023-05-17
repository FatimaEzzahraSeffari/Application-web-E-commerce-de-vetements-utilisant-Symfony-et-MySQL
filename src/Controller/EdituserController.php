<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class EdituserController extends AbstractController
{
    #[Route('/edituser/{id}', name: 'app_edituser')]
    public function edit(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_showuser', ['id' => $user->getId()]);
        }

        return $this->render('edituser/index.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

}
