<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
     * @Route("/find/{company_id}/{announcement_id}"), name="find")
     * @param String $company_id
     * @param String $announcement_id
     * @return RedirectResponse
     */
    public function find($company_id, $announcement_id)
    {
        return $this->redirect('https://www.google.co.uk/');
    }
}
