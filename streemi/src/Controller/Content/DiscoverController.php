<?php

declare(strict_types=1);

namespace App\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class DiscoverController extends AbstractController
{
    #[Route(path: '/discover')]
    public function show(): Response
    {
        return $this->render('movie/discover.html.twig');
    }
}
