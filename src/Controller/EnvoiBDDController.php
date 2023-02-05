<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\IdentificationType;
use App\Entity\Ident;
use App\Entiy\Admin;


class EnvoiBDDController extends AbstractController
{
    #[Route('/bdd', name: 'create_bdd')]

      public function index(): Response
    {
        return $this->render('identification/index.html.twig', [
            'controller_name' => 'EnvoiBDDController',
        ]);
    }
    public function createBDD(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $bdd = new Product();
        $bdd->setLogin('Keyboard');
        $bdd->setPassword(1999);
        $bdd->setEmail('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($bdd);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$bdd->getId());
    }
}