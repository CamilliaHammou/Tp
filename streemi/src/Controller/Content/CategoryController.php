<?php

declare(strict_types=1);

namespace App\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    #[Route(path: '/category')]
    public function show(): Response
    {
        return $this->render('movie/category.html.twig');
    }
}
