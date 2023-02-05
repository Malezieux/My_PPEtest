<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use App\Form\IdentificationType;
use App\Entity\Ident;







class IdentificationController extends AbstractController
{
    #[Route('/identification', name: 'app_identification')]
       public function new(ManagerRegistry $doctrine, Request $request)
    {
        $post = new Ident();
        $form = $this->createForm(IdentificationType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $doctrine->getManager();
            $em->persist($post);
            $em->flush();
        }
        return $this->render('identification/index.html.twig', array(
            'form' => $form->createView(),
        ));
    
        
    }

   
}