<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function index()
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}
