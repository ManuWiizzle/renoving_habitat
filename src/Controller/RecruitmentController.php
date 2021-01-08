<?php

namespace App\Controller;

use App\Entity\CvUpload;
use App\Form\CvUploadType;
use Swift_Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Route("/recruitment")
 */
class RecruitmentController extends AbstractController
{

    /**
     * @Route("/", name="recruitment", methods={"GET","POST"})
     */
    public function show(Request $request, \Swift_Mailer $mailer)
    {
        $cvUpload = new CvUpload();
        $form = $this->createForm(CvUploadType::class, $cvUpload);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cv = $cvUpload->getCv();

            $message = (new \Swift_Message('Nouvelle demande de recruitment !'))
                ->setFrom($this->getParameter('mailer_from'))
                ->setTo($this->getParameter('mailer_from'))
                ->setBody($this->renderView('recruitment/email.html.twig', ['data' => $cvUpload]))
                ->attach(Swift_Attachment::fromPath($cv->getPathname())->setFilename('cv.'.$cv->guessExtension()))
            ;
            $mailer->send($message);

            $this->addFlash(
                'success-message',
                'Votre message a bien été envoyé. Nous vous contacterons bientôt, merci.'
            );
            return $this->redirectToRoute('recruitment');
        }

        return $this->render('recruitment/show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
