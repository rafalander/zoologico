<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
       return new Response (content:'Ola mundo!');
    }
    
    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
       return new Response (content:'Ola dinossauro!');
    }

    #[Route('/mamifero')]
    public function mamifero(): Response
    {
       return new Response (content:'Ola mamifero!');
    }
    
}

