<?php

namespace App\Controller;

use App\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $type = new Type();
        $type->setType('RNS');
        $type->setHashtags('#abc #def');

        $em->persist($type);

        $em->flush();

        //return $this->render('base.html.twig');
        return new Response('Type id: ' . $type->getId());
    }
}
