<?php

namespace App\Controller;

use App\Entity\CustomerReview;
use App\Entity\GoodDeal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosRealisationsController extends AbstractController
{

    /**
     * @Route("/realisations", name="nos_real")
     * @return Response
     */

    public function index(): Response
    {
        $customer_reviews = $this-> getDoctrine()
            ->getRepository(CustomerReview::class)
            ->findAll();

        return $this->render('nos_realisations/index.html.twig', [
            'customer_review' => $customer_reviews
        ]);
    }
}
