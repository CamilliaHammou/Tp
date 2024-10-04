<?php

declare(strict_types=1);

namespace App\Controller\Others;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    #[Route(path: '/lists', name: 'my_lists')]
    public function show(): Response
    {
        return $this->render('others/lists.html.twig');
    }
}
