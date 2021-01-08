<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CgvuController extends AbstractController
{
    /**
     * @Route("/cgvu", name="cgvu")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('CGVU/index.html.twig');
    }
}
