<?php

namespace App\Controller;

use App\Service\MyProjectEmailSender;
use App\Form\MyProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\MyProjectPersonal;

class MyProjectController extends AbstractController
{

    /**
     * @Route("/projet", name="projet")*
     */

    public function index(Request $request, \Swift_Mailer $mailer, \Twig\Environment $templating) :Response
    {
        $form = $this->createForm(
            MyProjectType::class
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $info = $form->getData();
            $RenovingEmail = $this->getParameter('mailer_from');

            $emailSender = new MyProjectEmailSender($mailer, $templating, $RenovingEmail);
            $emailSender->sendEmail($info);

            $this->addFlash(
                'notice',
                'Votre demande de devis a été envoyée, nous vous recontacterons bientôt!'
            );
        }

        return $this->render('monProjet/index.html.twig', ['form' => $form->createView()]);
    }
}
