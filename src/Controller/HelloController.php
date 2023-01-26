<?php
//src/Controller/HelloController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class HelloController extends AbstractController
{
    /**
     * hello world, avec twig
     *
     * @Route("/hello/{name}", name="hello")
     */
    public function hello ($name)
    {
        return $this-> render('hello.html.twig',['name'=> $name]);
    }
}