<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CuriculumController extends AbstractController
{
    #[Route('/cv', name: 'app_curiculum')]
    public function index(): Response
    {
        return $this->render('curiculum/index.html.twig');
    }
}
