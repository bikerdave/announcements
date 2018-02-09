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

    /**
     * @Route("/find/{$company}/{$id}"), name="find")
     * @param String|Boolean $company
     * @param String|Boolean $id
     */
    public function find($company = false, $id = false)
    {
        if (!($company || $id)) {

        } else {
            throw new NotFoundHttpException();
        }
    }
}
