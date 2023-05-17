<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class EditproduitController extends AbstractController
{
    #[Route('/editproduit/{id}', name: 'app_editproduit')]
    public function editproduit(Produit $produit, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitEditType::class, $produit);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            return $this->redirectToRoute('app_showarticle', ['id' => $produit->getId()]);
        }
    
        return $this->render('editproduit/index.html.twig', [
            'form' => $form->createView(),
            'produit' => $produit
        ]);
}
}