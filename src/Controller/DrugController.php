<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrugController extends AbstractController
{
    /**
     * @Route("/drugs")
     */
    public function index(): Response
    {

        return $this->render('drug/index.html.twig', [
            'controller_name' => 'drug',
        ]);
    }
}