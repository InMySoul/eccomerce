<?php

namespace App\Controller;

use App\Entity\FeedBackRequest;
use App\Form\FeedBackRequestType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FeedbackRequestController extends AbstractController
{
    /**
     * @Route("/feedback/request", name="feed_back_request")
     */
    public function index(Request $request,EntityManagerInterface $entityManager)
    {
        $feedbackrequest = new FeedBackRequest();
        $form = $this->createForm(FeedBackRequestType::class, $feedbackrequest);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
        $entityManager->persist($feedbackrequest);
        $entityManager->flush();

        return $this->redirectToRoute('feedback_request_succes');
        }

        return $this->render('feedback_request/index.html.twig', [
            'form'=>$form->createView(),
        ]);
    }

    /**
     * @Route("/feedback/succes",name="feedback_request_succes")
     */
    public function  succes()
    {
        return $this->render('feedback_request/succes.html.twig');
    }
}
