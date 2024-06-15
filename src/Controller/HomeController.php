<?php

namespace App\Controller;

use App\Services\BabyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    public function __construct(private readonly BabyService $babyService)
    {

    }

    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {

        $genre = $this->babyService->genreOfbebe();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Boy Or girl ?',
            'genre' => $genre,
        ]);
    }
}
