@extends('layouts.app')

@section('title', 'Best Full Stack Development Courses | Airocode Technologies')
@section('meta_description', "Choose from 6 full stack development courses at ₹20,000 each. Web, Java, MERN, MEAN, Python & Application development. 2-month duration, flexible batches.")
@section('meta_keywords', 'Full Stack Development Courses, MERN, MEAN, Java, Python, Web Development, Application Development, Airocode Technologies, Tech training')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Full Stack Courses Content Start -->
    <div class="container-xxl">
        <div class="container" >

            <p>Transform your career with industry-ready programming skills through our comprehensive full stack development courses. Each <strong>2-month program</strong> combines theoretical knowledge with hands-on project experience.</p>

            <h4 class="text-primary mt-4">Why Choose Our Full Stack Courses?</h4>
            <ul>
                <li><strong>Affordable Investment:</strong> All courses priced at ₹20,000</li>
                <li><strong>Student-Friendly Schedule:</strong> Flexible batch timings</li>
                <li><strong>Live Project Experience:</strong> Build real applications for your portfolio</li>
                <li><strong>Industry-Current Curriculum:</strong> Updated technologies and frameworks</li>
                <li><strong>Expert Mentorship:</strong> Learn from experienced professionals</li>
                <li><strong>Placement Support:</strong> Career guidance and job assistance</li>
            </ul>

            <h4 class="text-primary mt-4">Our Complete Course Lineup</h4>
            <ul>
                <li><strong>1. Web Full Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    Covers front-end (HTML, CSS, JavaScript, React/Angular) and back-end (Node.js, PHP, databases). Ideal for websites and web apps.</li>

                <li class="mt-3"><strong>2. Java Full Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    Back-end with Java, Spring Boot, Hibernate + front-end (HTML, CSS, JS). Includes MySQL/MongoDB. Perfect for enterprise applications.</li>

                <li class="mt-3"><strong>3. MERN Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    MongoDB, Express.js, React, Node.js. Full JavaScript stack for modern, scalable single-page apps.</li>

                <li class="mt-3"><strong>4. MEAN Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    MongoDB, Express.js, Angular, Node.js. Best for dynamic, data-driven applications.</li>

                <li class="mt-3"><strong>5. Python Full Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    Python back-end (Django/Flask) + front-end (HTML, CSS, JS). Great for APIs, web apps, and AI/ML integration.</li>

                <li class="mt-3"><strong>6. Application Full Stack Development</strong><br>
                    Duration: 2 Months | Fee: ₹20,000<br>
                    Focus on desktop/mobile apps + back-end services. Includes GUI, API integration, and database management.</li>
            </ul>

            <h4 class="text-primary mt-4">Course Comparison Guide</h4>
            <p>Choose the right course based on your career goals and interests. Each program offers unique advantages and career opportunities in different sectors of the tech industry.</p>

            <h4 class="text-primary mt-4">Flexible Learning Options</h4>
            <ul>
                <li>Weekend batches for working students</li>
                <li>Evening batches for college students</li>
                <li>Flexible scheduling options</li>
                <li>Hands-on practical approach</li>
            </ul>

            <h4 class="text-primary mt-4">Enrollment Process</h4>
            <ul>
                <li>Choose your preferred course</li>
                <li>Schedule a counseling session</li>
                <li>Complete enrollment and fee payment</li>
                <li>Start your learning journey</li>
            </ul>

        </div>
    </div>
    <!-- Full Stack Courses Content End -->

@endsection
