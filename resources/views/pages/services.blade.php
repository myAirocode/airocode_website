@extends('layouts.app')

@section('title', 'IT Services & Solutions | Software Development Company - Airocode')
@section('meta_description', 'Comprehensive IT services by Airocode — Web development, mobile app development, cloud computing, and digital marketing solutions for businesses in Pune and beyond.')
@section('meta_keywords', 'IT services, software development, web development, mobile app development, cloud services, digital marketing, UI/UX design, IT company Pune, software company Pune, web development Pune')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Intro Section Start -->
    <div class="container-xxl ">
        <div class="container">
            <h3 class="text-primary mb-4">Comprehensive IT Services & Software Solutions for Growing Businesses</h3>
            <p class="mb-4" style="text-align:justify;">
                Welcome to Airocode’s complete range of IT services — your trusted technology partner for innovative, 
                scalable, and high-performance software solutions. Our expertise spans across full-stack web development, 
                mobile applications, cloud computing, and digital marketing, empowering businesses to thrive in today’s 
                digital-first world.
            </p>
        </div>
    </div>
    <!-- Intro Section End -->

    <!-- Why Choose Airocode Start -->
    <div class="container-xxl >
        <div class="container">
            <h4 class="text-primary mb-4">Why Choose Airocode for Your IT Needs?</h4>
            <ul class="mb-0 ps-4">
                <li>5+ years of experience delivering software solutions across multiple industries</li>
                <li>150+ successful projects completed globally</li>
                <li>Expert developers skilled in modern technologies and frameworks</li>
                <li>Client-centric approach with scalable, secure, and reliable solutions</li>
                <li>Comprehensive post-deployment support and maintenance</li>
            </ul>
        </div>
    </div>
    <!-- Why Choose Airocode End -->

    <!-- Services Overview Start -->
    <div class="container-xxl bg-light py-5">
        <div class="container">
            <h4 class="text-primary mb-4">Our Core IT Services</h4>
            <p class="mb-5">
                Airocode offers a full spectrum of IT services designed to meet modern business challenges. 
                From ideation to deployment, we deliver solutions that blend creativity, strategy, and technology.
            </p>

            <!-- Web Development -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">1. Web Development Services</h5>
                <p class="mb-3">
                    Build responsive, high-performance, and SEO-optimized websites with our 
                    <b>full-stack web development</b> expertise. We use modern technologies like 
                    <b>React, Node.js, Laravel, and PHP</b> to create user-friendly digital experiences.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Custom website design & development</li>
                    <li>CMS-based development (WordPress, Laravel Nova)</li>
                    <li>E-commerce & marketplace development</li>
                    <li>API development & integration</li>
                    <li>Maintenance and scalability support</li>
                </ul>
            </div>

            <!-- Mobile App Development -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">2. Mobile App Development</h5>
                <p class="mb-3">
                    Develop robust and scalable <b>mobile applications</b> for both Android and iOS using the latest 
                    native and cross-platform frameworks such as <b>Flutter, React Native, and Kotlin</b>. 
                    Our mobile apps focus on usability, performance, and business growth.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Android & iOS native app development</li>
                    <li>Cross-platform mobile apps</li>
                    <li>API integration & backend development</li>
                    <li>UI/UX design for mobile interfaces</li>
                    <li>App deployment & post-launch support</li>
                </ul>
            </div>

            <!-- Cloud Services -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">3. Cloud Computing & Infrastructure Services</h5>
                <p class="mb-3">
                    Enable digital transformation with our <b>cloud migration and management services</b>. 
                    We help businesses harness the power of <b>AWS, Azure, and Google Cloud</b> to improve scalability, 
                    reduce costs, and enhance performance.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Cloud migration and setup</li>
                    <li>DevOps and CI/CD implementation</li>
                    <li>Data backup and recovery</li>
                    <li>Cloud cost optimization</li>
                    <li>Infrastructure monitoring and support</li>
                </ul>
            </div>

            <!-- Digital Marketing -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">4. Digital Marketing Solutions</h5>
                <p class="mb-3">
                    Grow your brand visibility with our <b>digital marketing services</b>. From SEO and PPC campaigns to 
                    social media marketing, we craft data-driven strategies that deliver measurable results.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Search Engine Optimization (SEO)</li>
                    <li>Pay-per-click (PPC) advertising</li>
                    <li>Social media management</li>
                    <li>Content creation & blogging</li>
                    <li>Online reputation management</li>
                </ul>
            </div>

            <!-- UI/UX Design -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">5. UI/UX Design Services</h5>
                <p class="mb-3">
                    Create intuitive and engaging user experiences with Airocode’s <b>UI/UX design services</b>. 
                    Our design process focuses on user psychology, usability, and visual appeal.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Wireframing & prototyping</li>
                    <li>Responsive web design</li>
                    <li>Design system development</li>
                    <li>User flow optimization</li>
                </ul>
            </div>

            <!-- Custom Software Development -->
            <div class="mb-5">
                <h5 class="text-primary mb-3">6. Custom Software Development</h5>
                <p class="mb-3">
                    From concept to execution, we design and develop <b>custom software solutions</b> 
                    that fit your business processes perfectly — ensuring scalability, security, and integration flexibility.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Enterprise software development</li>
                    <li>Business process automation</li>
                    <li>CRM and ERP systems</li>
                    <li>API and backend systems</li>
                </ul>
            </div>

            <!-- QA & Maintenance -->
            <div>
                <h5 class="text-primary mb-3">7. Quality Assurance & Maintenance</h5>
                <p class="mb-3">
                    Ensure smooth operation and long-term performance of your digital products with our 
                    <b>QA and ongoing maintenance services</b>.
                </p>
                <ul class="ps-4 mb-0">
                    <li>Automated and manual testing</li>
                    <li>Bug detection and resolution</li>
                    <li>Performance tuning</li>
                    <li>Security audits and fixes</li>
                    <li>24/7 application monitoring</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Services Overview End -->

    <!-- Industries We Serve Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h4 class="text-primary mb-4">Industries We Serve</h4>
            <p class="mb-4">
                Airocode delivers IT services tailored for diverse industries, ensuring solutions that align 
                with specific business goals.
            </p>
            <ul class="ps-4 mb-0">
                <li>Education & E-learning</li>
                <li>Healthcare & Fitness</li>
                <li>E-commerce & Retail</li>
                <li>Finance & Banking</li>
                <li>Real Estate & Construction</li>
                <li>Travel & Hospitality</li>
                <li>IT & SaaS Startups</li>
            </ul>
        </div>
    </div>
    <!-- Industries We Serve End -->

    <!-- CTA Start -->
    <div class="container-xxl bg-primary text-white text-center py-5">
        <div class="container">
            <h3 class="mb-3">Ready to Build Your Next Big Project?</h3>
            <p class="mb-4">
                Let’s collaborate to turn your business ideas into cutting-edge software solutions. 
                Partner with Airocode for web, mobile, and cloud development services that deliver real results.
            </p>
            <a href="{{ url('/contact-us') }}" class="btn btn-light px-4 py-2">Get in Touch</a>
        </div>
    </div>
    <!-- CTA End -->

@endsection
