<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $title = 'Zoo Lander';
        $navbarTitle = '<strong style="color:darkgreen;">Zoo Lander</strong>';
        $welcome = 'Bem vindo ao nosso zoológico';

        return $this->render('hello/homepage.html.twig', [
          'title'       => $title,
          'navbarTitle' => $navbarTitle,
          'welcome'     => $welcome . ' ' . $navbarTitle,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug = null): Response
    {
        $newSlug = str_replace('-', ' ', $slug);
        $newSlug = u($newSlug)->title(true)->toString();

        return new Response('Olá ' . $newSlug);
    }
}
