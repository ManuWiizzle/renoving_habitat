<?php

namespace App\Controller;


use App\Repository\SiteRepository;
use App\Repository\CityRepository;
use App\Repository\GoodDealRepository;
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


    public function index(CityRepository $cityRepository,
     SerializerInterface $serializer,
     SiteRepository $siteRepository, 
     GoodDealRepository $goodDealRepository): Response
    {
        $good_deal = $goodDealRepository->findAll();
        //maps
        $cities = $cityRepository->findAll();
        $maps = $serializer->serialize($cities, 'json');
        $beginSite = $serializer->serialize($siteRepository->findByBeginSite(), 'json');
        
        $finalSite = $serializer->serialize($siteRepository->findByFinalSite(), 'json');
        
        return $this->render('home/index.html.twig', [
            'good_deal' => $good_deal,
            'maps' => $maps,
            'begin_site' => $beginSite,
            'final_site' => $finalSite,
            ]);
        }        

   
    
}
