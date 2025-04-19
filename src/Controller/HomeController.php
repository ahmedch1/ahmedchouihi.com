<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Define your personal information
        $name = "Your Name";
        $title = "PHP Developer";
        $about = "I'm a passionate PHP developer with expertise in building robust web applications and websites. With a strong foundation in backend development and database management, I create efficient and scalable solutions.";
        
        // Define your skills
        $skills = [
            "PHP", "MySQL", "Laravel", "Symfony", "HTML5", "CSS3", 
            "JavaScript", "jQuery", "REST APIs", "Git", "Docker", "AWS"
        ];
        
        // Define your projects
        $projects = [
            [
                "title" => "E-commerce Platform",
                "description" => "A full-featured online store built with PHP and MySQL. Includes user authentication, product management, shopping cart, and payment integration.",
                "technologies" => "PHP, MySQL, JavaScript, PayPal API"
            ],
            [
                "title" => "Content Management System",
                "description" => "A custom CMS for a media company that allows easy content creation, user management, and analytics tracking.",
                "technologies" => "PHP, Laravel, MySQL, Vue.js"
            ],
            [
                "title" => "Booking System",
                "description" => "An appointment scheduling system for a healthcare provider with calendar integration and automated reminders.",
                "technologies" => "PHP, Symfony, MySQL, jQuery, Google Calendar API"
            ]
        ];

        return $this->render('home/index.html.twig', [
            'name' => $name,
            'title' => $title,
            'about' => $about,
            'skills' => $skills,
            'projects' => $projects
        ]);
    }
} 