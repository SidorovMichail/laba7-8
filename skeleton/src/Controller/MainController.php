<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(PostRepository $postRepository): Response
    {

        $post = $postRepository->findBy([], ['datapost' => 'ASC']);
        return $this->render('main/index.html.twig', [
            'posts' => $post,
        ]);
    }
}
