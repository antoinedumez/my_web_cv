<?php

namespace App\Controller;

use App\Service\AgeCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/skills/', name: 'app_skills')]
    public function index(AgeCalculator $ageCalculator): Response
    {
        $interval = $ageCalculator->ageDifference();
        return $this->render('skills/index.html.twig', [
            'age' => $interval,
        ]);
    }

}
