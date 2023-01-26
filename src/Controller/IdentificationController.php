<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\IdentificationType;
use App\Entity\Identification;

class IdentificationController extends AbstractController
{
    #[Route('/identification', name: 'app_identification')]
    public function index(): Response
    {
        return $this->render('identification/index.html.twig', [
            'controller_name' => 'IdentificationController',
        ]);
    }
    public function identification(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(IdentificationType::class, $identification);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($post);
        }
        else{
            echo('mauvais pas bon');
        }
        
        return $this->render('identification/identification.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    #[Route('/', name: 'acceuil')]
    public function acceuil(): Response
    {
        return $this->render('identification/index.html.twig', [
            'controller_name' => 'IdentificationController',
        ]);
    }
    

}
