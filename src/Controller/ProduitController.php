<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Entity\Category;
use App\Form\ProduitType;
use App\Repository\CategoryRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{

#[Route('/produit', name: 'app_produit')]
public function AddNewProduit(Request $request, EntityManagerInterface $entityManager, ProduitRepository $postRepository): Response
{
$post = new Produit();
$form = $this->createForm(ProduitType::class, $post);
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
return $this->render('produit/index.html.twig', [
'form' => $form->createView(),
]);
}
#[Route('/showproduit1', name: 'app_show_produit_by_category')]
public function index(EntityManagerInterface $entityManager, ProduitRepository $produitRepository, CategoryRepository $categoryRepository, Request $request): Response {
    $categoryName = $request->query->get('category');
    if (!$categoryName) {
        $produit = $produitRepository->findAll();
    } else {
        $category = $categoryRepository->findOneBy(['name' => $categoryName]);
        $produit = $produitRepository->findBy(['Category' => $category]);
    }
    $categories = $categoryRepository->findAll();
    return $this->render('produit/showproduit.html.twig', [
        'produit' => $produit,
        'categories' => $categories,
        'currentCategory' => $categoryName
    ]);
   

}}