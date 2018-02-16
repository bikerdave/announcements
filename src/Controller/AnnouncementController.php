<?php

namespace App\Controller;

use App\Entity\Company;
use App\Entity\Entry;
use App\Entity\Type;
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
     * @Route("/find/{company_id}/{type_id}/{announcement_id}"), name="find")
     * @param String $company_id
     * @param String $type_id
     * @param String $announcement_id
     * @return RedirectResponse
     */
    public function find($company_id, $type_id, $announcement_id)
    {
        $company = $this->getDoctrine()
            ->getRepository(Company::class)
            ->find($company_id);

        $type = $this->getDoctrine()
            ->getRepository(Type::class)
            ->find($type_id);

        $entry = $this->getDoctrine()
            ->getRepository(Entry::class)
            ->findOneBy([
                'company' => $company,
                'type' => $type,
                'id' => $announcement_id
            ]);

        if ($entry) {
            return $this->redirect($entry->getUrl());
        } else {
            throw new NotFoundHttpException();
        }
    }
}
