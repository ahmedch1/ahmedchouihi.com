<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            // Here you would typically:
            // 1. Validate the form data
            // 2. Send an email
            // 3. Store the message in a database
            // 4. Redirect with a success message
            
            $this->addFlash('success', 'Your message has been sent successfully!');
            return $this->redirectToRoute('home');
        }

        return $this->redirectToRoute('home');
    }
} 