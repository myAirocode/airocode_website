@extends('layouts.app')

@section('title', 'About Airocode Technologies - Leading Tech Training Institute')
@section('meta_description', 'Discover Airocode Technologies journey in tech education. Experienced faculty,
 modern labs, proven track record. Empowering students with industry-ready skills.')
@section('meta_keywords', 'Airocode Technologies, Tech Training Institute, Best IT Training, Full Stack Development Training, MERN Stack Training Institute, Python Training, Java Training Institute, Web Development Courses, Software Development Training, Industry-Ready IT Skills, Practical IT Training with Live Projects, Placement-Focused IT Courses, Modern Computer Labs for IT Training, Experienced IT Faculty, Career in Technology and Software Development')

@section('content')

    <!-- Header Start -->
         @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Service Start -->
        <div class="container-xxl">
        <div class="container ">
                    <h4 class="bg-white text-start text-primary pe-3">About Airocode Technologies</h4>
                    <p class="mb-4"><b>Our Story</b><br>
                        Airocode Technologies was founded with a vision to bridge the gap between traditional college
                        education and the rapidly evolving technology industry. we have been
                        empowering college students and recent graduates with practical, industry-ready skills.</p>
                    <p class="mb-4"><b>Our Mission</b><br>
                        To provide affordable, high-quality technology training that transforms students into confident,
                        job-ready professionals. We believe every student deserves access to practical, industry
                        focused education.</p>
                    <p class="mb-4"><b>Our Vision</b><br>
                        To become most trusted tech training institute, recognized for producing skilled
                        professionals who contribute to India's growing technology ecosystem.</p>   
                    <p class="mb-4"><b>Leadership & Faculty</b><br>
                         Our institute is led by passionate educators and industry professionals with extensive
                        experience in IT training and software development. Our faculty brings together academic
                        excellence and real-world industry insights.</p>
                     <p class="mb-4"><b>Student-Centric Approach</b><br>
                        At Airocode Technologies, students are at the center of everything we do. Our flexible batch timings,
                        affordable fee structure, and comprehensive placement support reflect our commitment to
                        student success.</p>  

                </div>
        
    </div>
    <!-- Service End -->

      <!-- About Section Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Modern Infrastructure -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4 rounded shadow" style="background: #2AB7FF; color: #fff;"> <!-- Teal Blue -->
                    <h4 class="text-start text-white pe-3">Modern Infrastructure</h4>
                    <ul class="mb-4 ps-4"> <!-- Added list style -->
                        <li>State-of-the-art computer laboratories with updated hardware</li>
                        <li>High-speed internet connectivity for seamless learning</li>
                        <li>Updated software for all major development tools and frameworks
                        </li>
                        <li>Comfortable classrooms designed for focused learning
                        </li>
                        <li>Project rooms for team collaboration and presentation practice
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Internship Opportunities -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4 rounded shadow" style="background: #2AB7FF; color: #fff;">
                    <h4 class="text-start text-white pe-3">Our Achievements</h4>
                    <ul class="mb-4 ps-4"> 
                        <li>Successfully trained numerous students across various programs</li>
                        <li>Maintained high placement success rate</li>
                        <li>Established partnerships with hiring companies</li>
                        <li>Recognized as a preferred training partner by IT firms</li>
                        <li>High student satisfaction based on course feedback</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

    <!-- about section End -->
        

    
@endsection
