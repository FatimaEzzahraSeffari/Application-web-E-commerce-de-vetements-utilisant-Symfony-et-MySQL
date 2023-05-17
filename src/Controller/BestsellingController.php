<?php

namespace App\Controller;

use App\Entity\Bestselling;
use App\Repository\BestsellingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\BestsellingType;
class BestsellingController extends AbstractController
{
    #[Route('/bestselling', name: 'app_bestselling')]
    public function AddNewProduit1(Request $request, EntityManagerInterface $entityManager, BestsellingRepository $postRepository): Response
    {
    $post = new Bestselling();
    $form = $this->createForm(BestsellingType::class, $post);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
    $post=$form->getData();
    $entityManager->persist($post);
    $entityManager->flush();
    $this->addFlash('success', 'le Produita été ajouté avec succès');
    $posts = $postRepository->findAll();
    // return $this->render('produit/index.html.twig',
    // ['posts' => $posts]);
    return $this->redirectToRoute('app_confirmaddarticle');
    }
    return $this->render('bestselling/index.html.twig', [
    'form' => $form->createView(),
    ]);
}
}