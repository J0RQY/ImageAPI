<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/hello', name: 'hello_world', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello, World!',
        ]);
    }
}
