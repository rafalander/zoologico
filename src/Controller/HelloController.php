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
    
    #[Route('/mamiferos')]
    public function mamiferos(): Response
    {
       return new Response (content:'Ola mamiferos!');
    }

    #[Route('/repteis')]
    public function repteis(): Response
    {
       return new Response (content:'Ola repteis!');
    }
    
    #[Route('/aves')]
    public function aves(): Response
    {
       return new Response (content:'Ola aves!');
    }

    #[Route('/peixes')]
    public function peixes(): Response
    {
       return new Response (content:'Ola peixes!');
    }

}