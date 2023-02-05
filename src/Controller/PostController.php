<?php
namespace App\Controller;
use App\Repository\PostRepository;
use App\Form\PostTypeThomas;
use App\Entity\PostThomas;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
#[Route('/new', name: 'New ticket')]
    public function new(ManagerRegistry $doctrine, Request $request)
    {
        $post = new PostThomas();
        $form = $this->createForm(PostTypeThomas::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setCreatedDate(new \DateTime('now'));
            $em = $doctrine->getManager();
            $em->persist($post);
            $em->flush();
        }
        return $this->render('PostThomas.html.twig', array(
            'form' => $form->createView(),
        ));
    }

#[Route('/posts', name: 'show_posts')]
    public function showPosts(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();

        if (!$posts) {
            throw $this->createNotFoundException('Rien de trouvé');
        }
        return $this->render('posts.html.twig', array(
            'posts' => $posts
        ));
    }
}