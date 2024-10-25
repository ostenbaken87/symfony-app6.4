<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/page/{id}', 
            name: 'app_default',
            requirements: ['id' => '\d+'],
            defaults: ['id' => 3, 'title' => 'Page ID 3'],
            methods: ['GET']
    )]
    public function index(int $id): Response
    {
        return $this->render('index.html.twig',['id' => $id]);
    }
}
