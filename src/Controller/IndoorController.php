<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 03/06/19
 * Time: 10:55
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndoorController extends AbstractController
{

    /**
     * @Route("/je_renov/indoor", name="indoor_index")
     * @return Response
     */

    public function index(): Response
    {

        return $this->render('je_renov/indoor.html.twig', [
        ]);
    }
}
