<?php

namespace App\Controller;

use App\Service\AgeCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(AgeCalculator $ageCalculator): Response
    {
        $interval = $ageCalculator->ageDifference();

        return $this->render('contact/index.html.twig', [
            'age' => $interval,
        ]);
    }
}
