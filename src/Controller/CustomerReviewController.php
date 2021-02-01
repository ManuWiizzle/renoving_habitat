<?php

namespace App\Controller;

use App\Entity\CustomerReview;
use App\Form\CustomerReviewType;
use App\Repository\CustomerReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/customer/review")
 */
class CustomerReviewController extends AbstractController
{
    /**
     * @Route("/", name="customer_review_index", methods={"GET"})
     */
    public function index(CustomerReviewRepository $customerReviewRepository): Response
    {
        return $this->render('customer_review/index.html.twig', [
            'customer_reviews' => $customerReviewRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="customer_review_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $customerReview = new CustomerReview();
        $form = $this->createForm(CustomerReviewType::class, $customerReview);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($customerReview);
            $entityManager->flush();

            return $this->redirectToRoute('customer_review_index');
        }

        return $this->render('customer_review/new.html.twig', [
            'customer_review' => $customerReview,
            'form' => $form->createView(),
        ]);
    }

    

    /**
     * @Route("/{id}", name="customer_review_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CustomerReview $customerReview): Response
    {
        if ($this->isCsrfTokenValid('delete'.$customerReview->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($customerReview);
            $entityManager->flush();
        }

        return $this->redirectToRoute('customer_review_index');
    }
}

