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
    
    #[Route('/animal/{slug}')]
    public function slug($slug=null): Response
    {
       return new Response (content:'Olá ' . $slug);
    }
    
}