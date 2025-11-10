<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($page = 'home')
    {

        $backgrounds = [
        'about-us' => 'web-img2.png',
        'internship'=>'web-img3.png',
        'courses'=>'web-img4.png',
        'enrollment'=>'web-img8.png',
        'training'=>'web-img34.png',
        'services'=>'web-img12.png',
        'contact-us'=>'web-img5.png',
        'internship/1-month' => 'web-img41.png',
        'internship/2-months' => 'web-img41.png',
        'internship/3-months' => 'web-img41.png',
        'internship/6-months' => 'web-img41.png',
        'training/2-months' => 'web-img32.png',
        'training/3-months' => 'web-img32.png',
        'training/6-months' => 'web-img32.png',
        'courses/application-full-stack-development' => 'web-img16.png',
        'courses/data-science-stack-development' => 'web-img16.png',
        'courses/python-full-stack-development' => 'web-img16.png',
        'courses/web-full-stack-development' => 'web-img16.png',
        'courses/java-full-stack-development' => 'web-img16.png',
        'courses/mern-stack-development' => 'web-img16.png',
        'courses/mean-stack-development' => 'web-img16.png',
        'courses/ai-ml-stack-development' => 'web-img16.png',
        'services/web-development' => 'web-img44.png',
        'services/software-development' => 'web-img38.png',
        'services/mobile-app-development' => 'web-img52.png',
        'services/ecommerce-development' => 'web-img44.png',
        'services/digital-marketing' => 'web-img38.png',
        // Add all other pages here
    ];


        $map = [
            // Main pages
            'home' => 'pages.index',
            'about-us' => 'pages.about-us',
            'courses' => 'pages.courses',
            'contact-us' => 'pages.contact-us',
            'privacy-policy' => 'pages.privacy-policy',
            'terms-of-service' => 'pages.terms-of-service',
            'faq' => 'pages.faq',
            'blog' => 'pages.blog',
            'gallery' => 'pages.gallery',
            'placements' => 'pages.placements',
            'faculty' => 'pages.faculty',
            'enrollment' => 'pages.enrollment',
            'infrastructure' => 'pages.infrastructure',
            'success-stories' => 'pages.success-stories',
            'fee-structure' => 'pages.fee-structure',
            'testimonial' => 'pages.testimonial',

            // Internship pages
            'internship' => 'pages.internship',
            'internship/1-month' => 'pages.internship.1-month',
            'internship/2-months' => 'pages.internship.2-months',
            'internship/3-months' => 'pages.internship.3-months',
            'internship/6-months' => 'pages.internship.6-months',

            // Training pages
            'training' => 'pages.training',
            'training/2-months' => 'pages.training.2-months',
            'training/3-months' => 'pages.training.3-months',
            'training/6-months' => 'pages.training.6-months',

            // Course pages
            'courses/application-full-stack-development' => 'pages.courses.application-full-stack-development',
            'courses/python-full-stack-development' => 'pages.courses.python-full-stack-development',
            'courses/web-full-stack-development' => 'pages.courses.web-full-stack-development',
            'courses/data-science-stack-development' => 'pages.courses.data-science-stack-development',
            'courses/java-full-stack-development' => 'pages.courses.java-full-stack-development',
            'courses/mern-stack-development' => 'pages.courses.mern-stack-development',
            'courses/mean-stack-development' => 'pages.courses.mean-stack-development',
            'courses/ai-ml-stack-development' => 'pages.courses.ai-ml-stack-development',

            // Services pages
            'services' => 'pages.services',
            'services/web-development' => 'pages.services.web-development',
            'services/software-development' => 'pages.services.software-development',
            'services/mobile-app-development' => 'pages.services.mobile-app-development',
            'services/ecommerce-development' => 'pages.services.ecommerce-development',
            'services/digital-marketing' => 'pages.services.digital-marketing',

            // 404
            '404' => 'pages.404',
        ];

        // ✅ Return view if exists, else 404
        $view = $map[$page] ?? 'pages.404';
        $status = isset($map[$page]) ? 200 : 404;
        $pageBackground = $backgrounds[$page] ?? '';
        $pageTitle = ucwords(str_replace('-', ' ', $page));

        return response()->view($view, compact('pageBackground', 'pageTitle'), $status);
    }
}
