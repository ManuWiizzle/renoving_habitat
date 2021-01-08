<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InsulationController extends AbstractController
{

    /**
     * @Route("/je-renove/isolation", name="insulation_index")
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('je_renov/insulation.html.twig', [
        ]);
    }
}
