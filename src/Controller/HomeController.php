<?php

namespace App\Controller;

use App\Entity\GoodDeal;
use App\Entity\Site;
use App\Repository\SiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="index")
     * @return Response
     */

    public function index(SiteRepository $siteRepository, SerializerInterface $serializer): Response
    {
        $good_deal = $this->getDoctrine()
            ->getRepository(GoodDeal::class)
            ->findAll();
        $beginSite = $serializer->serialize($siteRepository->findByBeginSite(), 'json');
        $finalSite = $serializer->serialize($siteRepository->findByFinalSite(), 'json');
        return $this->render('home/index.html.twig', [
            'good_deal' => $good_deal,
            'begin_site' => $beginSite,
            'final_site' => $finalSite,
        ]);
    }
}
