<?php

namespace App\Controller;

use App\Entity\CustomerReview;
use App\Entity\GoodDeal;
use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @return Response
     */

    public function index(CityRepository $cityRepository, SerializerInterface $serializer): Response
    {
        $good_deal = $this-> getDoctrine()
            ->getRepository(GoodDeal::class)
            ->findAll();
        $cities = $cityRepository->findAll();
        $maps = $serializer->serialize($cities, 'json');
        return $this->render('home/index.html.twig', [
            'good_deal' => $good_deal,
            'maps' => $maps
        ]);
    }
}
