<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
       return new Response (content: 'Bem vindo ao nosso Zoológico');
    }
    
    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
      $newSlug = str_replace('-', ' ', $slug);
      $newSlug = u($newSlug)->title(true)->toString();
      return new Response (content:'Olá ' . $newSlug);
    }
}