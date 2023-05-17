<?php
namespace App\Controller;


use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        // Create a new article entity and handle form submission
        $message = new Message();

        $form = $this->createFormBuilder($message )
            ->add('name')
            ->add('email')
            ->add('message')

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($message);
            $manager->flush();

            return $this->redirectToRoute('app_confirmmsg');
        }

        // Render the form template
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
