<?php

declare(strict_types=1);

namespace App\Controller\Others;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubscriptionController extends AbstractController
{
    #[Route(path: '/subscriptions', name: 'subscriptions')]
    public function show(): Response
    {
        return $this->render('others/abonnements.html.twig');
    }
}
