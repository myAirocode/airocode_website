@extends('layouts.app')

@section('title', 'Industrial Training in Software Development | Airocode IT Training Programs')
@section('meta_description', "Join Airocode's industrial training programs in software development, Python, Java, React, Node.js, AI/ML, and more. Gain hands-on experience, live project exposure, and placement support for a successful tech career.")
@section('meta_keywords', 'industrial training, IT training programs, software development training, Python, Java, React, Node.js, AI, ML, cloud computing, placement assistance, coding bootcamp')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Training Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Industrial Training Programs for Aspiring Tech Professionals</h4>
                <p class="mb-4">
                    Airocode's industrial training programs bridge the gap between academic learning and industry requirements, preparing you for a successful career in software development and IT. 
                    Our comprehensive training combines theoretical knowledge with practical, hands-on experience across cutting-edge technologies including Python, Java, React, Node.js, Cloud Computing, AI/ML, and more.
                </p>
                <p class="mb-4">
                    With experienced industry professionals as instructors, real-world project exposure, and dedicated placement assistance, our programs equip you with the technical skills and professional competencies employers demand. 
                    Flexible durations (2, 3, or 6 months) cater to your learning pace and career goals.
                </p>

                <h5 class="text-primary mb-3">Why Choose Airocode Industrial Training?</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Industry-Relevant Curriculum:</b> Stay ahead with programs designed around current market demands, covering in-demand technologies and industry best practices.</li>
                    <li><b>Expert Instructors:</b> Learn from seasoned professionals bringing real-world insights, case studies, and practical problem-solving approaches.</li>
                    <li><b>Hands-On Learning:</b> Build a portfolio with coding assignments, live projects, and application development to showcase to employers.</li>
                    <li><b>Placement Assistance:</b> Benefit from resume building, interview preparation, and direct hiring connections.</li>
                    <li><b>Flexible Training Duration:</b> Choose from 2, 3, or 6 months programs optimized for skill development.</li>
                </ul>
            </div>
        </div>
    <!-- Training Overview End -->

    <!-- Technologies Section Start -->
        <div class="container-xxl">
            <div class="container">
                <div class="row g-5">
                    <!-- Development & Programming -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="p-4 rounded shadow" style="background: #2AB7FF; color: #fff;">
                            <h4 class="text-start text-white pe-3">Training Technologies & Domains</h4>
                            <ul class="mb-4 ps-4">
                                <li>Full-Stack Development: React, Angular, Node.js, Express.js</li>
                                <li>Backend Development: Python, Java, PHP, .NET</li>
                                <li>Mobile Development: Android, iOS, React Native</li>
                                <li>Data Science & AI: Machine Learning, Deep Learning, Python for Data Science</li>
                                <li>Cloud Computing: AWS, Azure, Google Cloud Platform</li>
                                <li>DevOps: Docker, Kubernetes, CI/CD pipelines</li>
                                <li>Database Management: MySQL, MongoDB, PostgreSQL</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Program Benefits -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="p-4 rounded shadow" style="background: #2AB7FF; color: #fff;">
                            <h4 class="text-start text-white pe-3">Program Benefits</h4>
                            <ul class="mb-4 ps-4">
                                <li>Live project experience with industry-standard tools</li>
                                <li>Soft skills and personality development sessions</li>
                                <li>Technical interview preparation</li>
                                <li>Industry-recognized certification</li>
                                <li>Post-training mentorship support</li>
                                <li>Resume and portfolio building guidance</li>
                                <li>Access to exclusive hiring network</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Technologies Section End -->
    <br>
    <!-- Training Methodology Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Training Methodology</h4>
                <p class="mb-4"><b>Phase 1: Foundation Building</b><br> Core concepts and fundamentals.</p>
                <p class="mb-4"><b>Phase 2: Practical Application</b><br> Hands-on projects and coding exercises.</p>
                <p class="mb-4"><b>Phase 3: Advanced Topics</b><br> Industry-specific scenarios and best practices.</p>
                <p class="mb-4"><b>Phase 4: Capstone Project</b><br> Comprehensive project showcasing learned skills.</p>
            </div>
        </div>
    <!-- Training Methodology End -->

    <!-- Who Should Enroll Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Who Should Enroll?</h4>
                <ul class="mb-4 ps-4">
                    <li>Final year engineering students</li>
                    <li>Recent graduates seeking industry exposure</li>
                    <li>Professionals transitioning to IT careers</li>
                    <li>Working professionals upgrading their skill sets</li>
                    <li>Anyone passionate about building a tech career</li>
                </ul>

                <h5 class="text-primary mb-3">Get Started Today</h5>
                <p>Transform your career trajectory with Airocode's industrial training programs. Choose your preferred duration and begin your journey toward becoming a skilled IT professional ready for today's competitive job market.</p>
            </div>
        </div>
    <!-- Who Should Enroll End -->

@endsection
