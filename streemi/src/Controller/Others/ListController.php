<?php

declare(strict_types=1);

namespace App\Controller\Others;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class ListController extends AbstractController
{
    #[Route(path: '/lists')]
    public function show(): Response
    {
        return $this->render('others/lists.html.twig');
    }
}
