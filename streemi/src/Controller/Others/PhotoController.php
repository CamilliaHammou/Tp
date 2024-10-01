<?php

declare(strict_types=1);

namespace App\Controller\Others;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PhotoController extends AbstractController
{
    #[Route(path: '/upload')]
    public function upload(): Response
    {
        return $this->render('others/upload.html.twig');
    }
}
