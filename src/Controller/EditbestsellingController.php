<?php

namespace App\Controller;

use App\Entity\Bestselling;
use App\Form\BestsellingEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EditbestsellingController extends AbstractController
{
    #[Route('/editbestselling/{id}', name: 'app_editbestselling')]
    public function edit(Bestselling $best, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BestsellingEditType::class, $best);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_showbestselling', ['id' => $best->getId()]);
        }

        return $this->render('editbestselling/index.html.twig', [
            'form' => $form->createView(),
            'best' => $best
        ]);
    }
    
}
