<?php

declare(strict_types=1);

namespace App\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class DetailSerieController extends AbstractController
{
    #[Route(path: '/serie')]
    public function show(): Response
    {
        return $this->render('movie/detail_serie.html.twig');
    }
}
