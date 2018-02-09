<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AnnouncementController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        throw new NotFoundHttpException();
    }
}
