<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrmdController extends AbstractController
{
    #[Route('/trmd', name: 'trmd')]
    public function index(): Response
    {
        return $this->render('trmd/index.html.twig', [
            'controller_name' => 'TrmdController',
        ]);
    }
}
