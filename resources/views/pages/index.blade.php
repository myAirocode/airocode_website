@extends('layouts.app')

@section('title', 'Airocode - Best Full Stack & Tech Training Institute in Pune')
@section('meta_description', 'Learn Full Stack Development at Airocode, Pune. Expert faculty, hands-on projects & 85% placement support. Enroll in MERN, Java, Python & AI/ML.')
@section('meta_keywords', 'Full Stack Development Course Pune, Coding Bootcamp Pune, Programming Training Institute, Airocode, Web Development, MERN, Python, Java Training')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
    <div class="owl-carousel-item position-relative">
    <img class="" src="{{ asset('images/web-img20.png') }}" alt="Internship programming at Airocode" width="809" height="700">
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
        <div class="container">
            <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
            <h5 class="text-primary text-uppercase mb-3 animate__animated animate__slideInDown"><b>Student Internship & Industrial Training Programs</b></h5>
                <h1 class="banner-heading text-white text-uppercase">
                    <span class="constant-part text-warning">WE |</span>
                    <span class="rotating-wrapper text-warning">
                        <span class="rotating-item">Teach You.</span>
                        <span class="rotating-item">Excel You..</span>
                        <span class="rotating-item">Place You...</span>
                    </span>
                </h1>
                <h3 class="text-white text-center text-md-start mt-3">AT INDIA’S PREMIER INSTITUTE</h3>
                 <h2 class="banner-heading text-white text-uppercase">
                        <span class="constant-part text-warning">Gain |</span>
                        <span class="rotating-wrapper text-warning">
                        <span class="rotating-item">Hands-On Skills.</span>
                        <span class="rotating-item">Project Experience..</span>
                        <span class="rotating-item">Industry Ready...</span>
                        </span>
                    </h2>
                    <p class="fs-5 text-white mb-4 pb-2 animate__animated animate__fadeIn animate__delay-1s" style="text-align: justify;">
                    Join our <b>Internship and Industrial Training Programs</b> to gain hands-on experience, real project exposure, 
                    and guidance from industry experts. These programs are designed to bridge the gap between academic learning 
                    and professional excellence — helping you become industry-ready.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                                <a href="{{ url('/internship') }}" class="btn btn-primary py-md-3 px-md-5 animate__animated animate__fadeInUp animate__delay-2s">
                                Explore Internship
                                </a>
                                <a href="{{ url('/training') }}" class="btn btn-primary py-md-3 px-md-5 animate__animated animate__fadeInUp animate__delay-2s">
                                Explore Training
                                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl">
        <div class="container">
                    <h4 class="bg-white text-start text-primary pe-3">Transform Your Future with Airocode Technologies</h4>
                    <p class="mb-4"> Transform your future with India's leading tech training institute designed specifically for
                    college students and recent graduates. Join over 1000 success stories who have launched their
                    careers through our industry-focused full stack development programs.</p>
                </div>
        
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('images/web-img1.png') }}" alt="About Airocode Technologies" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="bg-white text-start text-primary pe-3">Why Choose Airocode Technologies?</h4>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Affordable ₹30,000 Full Stack Courses</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Weekend & Evening Batches for Students</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>85% Placement Success Rate</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Mentors with Industry Experience</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Modern Computer Labs & Infrastructure</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Live Project Development & Portfolio Building</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-primary fw-bold">AI Tools Creation & Robotics Integration</h2>
      <p class="text-muted">Add-on programs designed to build real-world AI and robotics projects.</p>
    </div>

    <div class="row g-4">
      <!-- AI Tools Creation -->
      <div class="col-lg-6 col-md-12">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/AI_TOOLS3.jpg') }}" class="card-img-top" alt="AI Tools Creation at Airocode">
          <div class="card-body">
            <h4 class="fw-bold text-primary">AI Tools Creation Add-On</h4>
            <p>Learn to integrate ChatGPT and other AI APIs to create your own intelligent web tools like Resume Reviewer, Blog Generator, or Chatbot.</p>

            <ul class="mb-3">
              <li>API Integration (OpenAI, Gemini)</li>
              <li>Build AI Chatbots & Web Tools</li>
              <li>Deploy live on Render</li>
              <li>Certification</li>
            </ul>
            <a href="{{ url('/download/Airocode_AI_Tools_Module.pdf') }}" class="btn btn-primary rounded-pill">Download</a>
          </div>
        </div>
      </div>

      <!-- Robotics -->
      <div class="col-lg-6 col-md-12">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/ROBOTICS.jpg') }}" class="card-img-top" alt="Robotics and AI Integration at Airocode">
          <div class="card-body">
            <h4 class="fw-bold text-primary">Robotics & AI Integration</h4>
            <p>Combine coding, hardware, and AI to create voice-controlled robots, obstacle avoiders, and IoT-based smart devices.</p>

            <ul class="mb-3">
              <li>Raspberry Pi projects</li>
              <li>AI + ChatGPT integration</li>
              <li>IoT & Sensor Programming</li>
              <li>Certification</li>
            </ul>
             <a href="{{ url('/download/Airocode_Robotics_Module.pdf') }}" class="btn btn-primary rounded-pill">Download</a>          
         </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Expertise In</h6>
                <h2 class="mb-5"></h2>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="{{ url('/internship') }}">
                            <img 
                                src="{{ asset('images/INTERNSHIP3.png') }}" 
                                alt="Internship at Airocode"
                                class="img-fluid w-100"
                                style="height: 300px; object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h3 class="m-0" style="color:#002D72;">Internship</h3>
                                </div>
                        </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{ url('/training') }}">
                                <img class="" src="{{ asset('images/INDUSTRIAL_TRAINING4.png') }}" alt="Training at Airocode" height="250" width="500">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h3 class="m-0" style="color:#002D72">Industrial Training</h3>
                                    <!-- <small class="text-primary">49 Courses</small> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="{{ url('/courses') }}">
                                <img class="" src="{{ asset('images/web-img91.png') }}" alt="Full Stack Development at Airocode" height="250" width="500">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h3 class="m-0" style="color:#002D72">Full Stack Courses</h3>
                                    <!-- <small class="text-primary">49 Courses</small> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{ url('/services') }}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('images/APP4.png') }}" alt="Servicesat Airocode" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h3 class="m-0" style="color:#002D72">Services</h3>
                            <!-- <small class="text-primary">49 Courses</small> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Popular Courses</h6>
                <h2 class="mb-5"></h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/ai-ml-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/AIML.png') }}" alt="AI and Machine Learning Course at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                              <h5><a href="{{ url('/courses/ai-ml-stack-development') }}">
                              Artificial Intelligence & Machine Learning
                            </a></h5>
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Learn how to design intelligent systems using Python, Data Science, and Machine Learning algorithms. 
                            Master AI tools, model training, and deep learning for real-world projects.</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-tie text-primary me-2"></i>Expert Mentors
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-clock text-primary me-2"></i>2 Hrs
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user text-primary me-2"></i>30 Students
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/data-science-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/data3.png') }}" alt="Data Science Course at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                             <h5><a href="{{ url('/courses/data-science-stack-development') }}">
                              Data Science Stack Development
                            </a></h5>
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Gain expertise in data analysis, visualization, and predictive modeling using Python, Pandas, NumPy, and Machine Learning. 
                            Learn to extract insights and make data-driven decisions for real-world applications.</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-tie text-primary me-2"></i>Expert Trainers
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-clock text-primary me-2"></i>2 Hrs
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-user text-primary me-2"></i>30 Students
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                         <a href="{{ url('/courses/python-full-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                        <img class="img-fluid" src="{{ asset('images/python3.png') }}" alt="Python Full Stack Development Course at Airocode">
                        </a>
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                        </div>
                    </div>
                    <div class="p-4 pb-0">
                        <h5><a href="{{ url('/courses/python-full-stack-development') }}">
                              Python Full Stack Development
                            </a></h5>
                        <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                        <p> Master both front-end and back-end web development using Python, Django, HTML, CSS, JavaScript, and databases. 
                        Build dynamic, scalable web applications from scratch with real-world project experience.</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-user-tie text-primary me-2"></i>Professional Mentors
                        </small>
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-clock text-primary me-2"></i>2 Hrs
                        </small>
                        <small class="flex-fill text-center py-2">
                            <i class="fa fa-user text-primary me-2"></i>30 Students
                        </small>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/mern-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/mern3.png') }}" alt="MERN Stack Development at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5><a href="{{ url('/courses/mern-stack-development') }}">
                              MERN Stack Development
                            </a></h5>
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Build modern web applications using MongoDB, Express.js, React, Node.js. Complete JavaScript
                            stack for scalable single-page applications (SPA) development.</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Industry Expert</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/java-full-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/java4.png') }}" alt="Java Full Stack Development at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                             <h5><a href="{{ url('/courses/java-full-stack-development') }}">
                              Java Full Stack Development
                            </a></h5>
                       
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Learn enterprise-level development using Java for back-end with front-end technologies.Includes Spring Boot, Hibernate, and databases like MySQL or MongoDB for professional applications.</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Industry Expert</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/mean-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/mean2.jpg') }}" alt="MEAN Stack Development at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                             <h5><a href="{{ url('/courses/mean-stack-development') }}">
                              MEAN Stack Development
                            </a></h5>
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Create dynamic web applications with MongoDB, Express.js, Angular, Node.js. Similar to MERN
                            but uses Angular framework for data-driven applications.</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Industry Expert</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <a href="{{ url('/courses/application-full-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                        <img class="img-fluid" src="{{ asset('images/app.png') }}" alt="Application Full Stack Development Course at Airocode">
                        </a>
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                        </div>
                    </div>
                    <div class="p-4 pb-0">
                        <h5><a href="{{ url('/courses/application-full-stack-development') }}">
                              Application Full Stack Development
                            </a></h5>
                        <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                        <p> Learn to build robust web and mobile applications using front-end, back-end, and database technologies. 
                        Gain hands-on experience with frameworks like React, Node.js, and APIs to develop complete end-to-end applications.</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-user-tie text-primary me-2"></i>Industry Experts
                        </small>
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-clock text-primary me-2"></i>2 Hrs
                        </small>
                        <small class="flex-fill text-center py-2">
                            <i class="fa fa-user text-primary me-2"></i>30 Students
                        </small>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ url('/courses/web-full-stack-development') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">
                            <img class="img-fluid" src="{{ asset('images/web121.png') }}" alt="Web Full Stack Development at Airocode">
                            </a>
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5><a href="{{ url('/courses/web-full-stack-development') }}">
                             Web Full Stack Development
                            </a></h5>
                            <h6>Duration: 6 Months | Fee: ₹30,000</h6>
                            <p> Master complete web application development covering front-end (HTML, CSS, JavaScript,
                            React/Angular) and back-end (Node.js, PHP, databases). Perfect for building websites and web
                            apps end-to-end</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Industry Expert</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Training Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Industrial Training Programs -->
      <div class="col-lg-6 col-md-12 wow fadeInUp d-flex" data-wow-delay="0.3s">
        <div class="p-4 rounded shadow flex-fill d-flex flex-column justify-content-between" style="background: #2AB7FF; color: #fff; min-height: 100%;">
          <div>
            <h4 class="text-start text-white pe-3">Industrial Training Programs</h4>
            <div class="row gy-2 gx-4 mb-4 text-white">
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>2 Month Fast-Track Training: ₹25,000</b><br>
                  Core skills with 1 live project for industry exposure
                </p>
              </div>
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>3 Month Comprehensive Training: ₹35,000</b><br>
                  Advanced concepts with 12 major live projects
                </p>
              </div>
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>6 Month Complete Training: ₹45,000</b><br>
                  Full workflow with 34 projects plus placement guidance
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Internship Opportunities -->
      <div class="col-lg-6 col-md-12 wow fadeInUp d-flex" data-wow-delay="0.3s">
        <div class="p-4 rounded shadow flex-fill d-flex flex-column justify-content-between" style="background: #2AB7FF; color: #fff; min-height: 100%;">
          <div>
            <h4 class="text-start text-white pe-3">Internship Opportunities</h4>
            <div class="row gy-2 gx-4 mb-4 text-white">
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>1 Month Internship:</b> Quick skill exposure and industry introduction
                </p>
              </div>
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>2 Month Internship:</b> Project-based learning experience
                </p>
              </div>
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>3 Month Internship:</b> Real industry workflow exposure
                </p>
              </div>
              <div class="col-12">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-white me-2"></i>
                  <b>6 Month Internship:</b> Complete industry immersion with comprehensive training
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

    <!-- Training End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Student Success Story</h6>
                <h2 class="mb-5"></h2>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-0">Monika Korhale</h5>
                    <p>SR. UI Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Got placed as a Web Developer with excellent package after completing the MERN Stackcourse! The hands-on project experience and mentor support made all the difference.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-0">Swapnil Dhawale</h5>
                    <p>SR. Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Got placed as a Web Developer with excellent package after completing the MERN Stackcourse! The hands-on project experience and mentor support made all the difference.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-0">Umesh Bhor</h5>
                    <p>Sr. Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Got placed as a Web Developer with excellent package after completing the MERN Stackcourse! The hands-on project experience and mentor support made all the difference.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-0">Rahul Mahabare</h5>
                    <p>Sr. Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Got placed as a Web Developer with excellent package after completing the MERN Stackcourse! The hands-on project experience and mentor support made all the difference.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-0">Swati Thete</h5>
                    <p>SR. UI Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I am extremely impressed with Somayu Technologies and their all platform expertise. Their IT industrial training and web development solutions are top-notch.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Quick Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h2 class="mb-5"></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fab fa-whatsapp text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary">WhatsApp</h5>
                            <p class="mb-0">91 467 51 567</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary">Phone</h5>
                            <p class="mb-0">91 467 51 567</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@airocode.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">Bavdhan / Pimpri - Pune. India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Contact End -->
@endsection





