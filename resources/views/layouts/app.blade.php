<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Default site description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default, Keywords')">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta name="robots" content="index, follow">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" sizes="50x50">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @media (max-width: 991px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: none;
            }
            .navbar .dropdown.show .dropdown-menu {
                display: block;
            }
            }
        </style>
        <meta name="google-site-verification" content="MgO9dCa2J8LK151mq58y0bpc1g1WH7_A5YB4JyRWW3E" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2SPRSF9TFZ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-2SPRSF9TFZ');
        </script>
         @include('partials.schema')
    </head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('img/Logo.png')}}" width="150" height="120"  alt="Airocode Technologies Logo">
        </a>
       
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about-us') }}" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About Us</a>
                <!-- <a href="{{ url('/courses') }}" class="nav-item nav-link">Courses</a> -->
                 <div class="nav-item dropdown">
                    <a href="{{ url('/internship') }}" class="nav-link dropdown-toggle {{ Request::is('internship*') ? 'active' : '' }}" data-bs-toggle="dropdown">Internship</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/internship/1-month') }}" class="dropdown-item {{ Request::is('internship/1-month') ? 'active' : '' }}">1 Month</a>
                        <a href="{{ url('/internship/2-months') }}" class="dropdown-item {{ Request::is('internship/2-months') ? 'active' : '' }}">2 Months</a>
                        <a href="{{ url('/internship/3-months') }}" class="dropdown-item {{ Request::is('internship/3-months') ? 'active' : '' }}">3 Months</a>
                        <a href="{{ url('/internship/6-months') }}" class="dropdown-item {{ Request::is('internship/6-months') ? 'active' : '' }}">6 Months</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ url('/training') }}" class="nav-link dropdown-toggle {{ Request::is('training*') ? 'active' : '' }}" data-bs-toggle="dropdown">Industrial Training</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/training/2-months') }}" class="dropdown-item {{ Request::is('training/2-months') ? 'active' : '' }}">2 Months</a>
                        <a href="{{ url('/training/3-months') }}" class="dropdown-item {{ Request::is('training/3-months') ? 'active' : '' }}">3 Months</a>
                        <a href="{{ url('/training/6-months') }}" class="dropdown-item {{ Request::is('training/6-months') ? 'active' : '' }}">6 Months</a>
                </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ url('/courses') }}" class="nav-link dropdown-toggle {{ Request::is('courses*') ? 'active' : '' }}" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/courses/java-full-stack-development') }}" class="dropdown-item {{ Request::is('courses/java-full-stack-development') ? 'active' : '' }}">Java Full Stack Development</a>
                        <a href="{{ url('/courses/python-full-stack-development') }}" class="dropdown-item {{ Request::is('courses/python-full-stack-development') ? 'active' : '' }}">Python Full Stack Development</a>
                        <a href="{{ url('/courses/ai-ml-stack-development') }}" class="dropdown-item {{ Request::is('courses/ai-ml-stack-development') ? 'active' : '' }}">AI/ML Stack Development</a>
                        <a href="{{ url('/courses/data-science-stack-development') }}" class="dropdown-item {{ Request::is('courses/data-science-stack-development') ? 'active' : '' }}">Data Science Stack Development</a>
                        <a href="{{ url('/courses/mern-stack-development') }}" class="dropdown-item {{ Request::is('courses/mern-stack-development') ? 'active' : '' }}">MERN Stack Development</a>
                        <a href="{{ url('/courses/mean-stack-development') }}" class="dropdown-item {{ Request::is('courses/mean-stack-development') ? 'active' : '' }}">MEAN Stack Development</a>
                        <a href="{{ url('/courses/web-full-stack-development') }}" class="dropdown-item {{ Request::is('courses/web-full-stack-development') ? 'active' : '' }}">Web Full Stack Development</a>
                        <a href="{{ url('/courses/application-full-stack-development') }}" class="dropdown-item {{ Request::is('courses/application-full-stack-development') ? 'active' : '' }}">Application Full Stack Development</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ url('/services') }}" class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ url('/services/web-development') }}" class="dropdown-item {{ Request::is('services/web-development') ? 'active' : '' }}">Web Development</a>
                        <a href="{{ url('/services/software-development') }}" class="dropdown-item {{ Request::is('services/software-development') ? 'active' : '' }}">SoftwareDevelopment</a>
                        <a href="{{ url('/services/mobile-app-development') }}" class="dropdown-item {{ Request::is('services/mobile-app-development') ? 'active' : '' }}">Mobile App Development</a>
                        <a href="{{ url('/services/ecommerce-development') }}" class="dropdown-item {{ Request::is('services/ecommerce-development') ? 'active' : '' }}">Ecommerce Development</a>
                        <a href="{{ url('/services/digital-marketing') }}" class="dropdown-item {{ Request::is('services/digital-marketing') ? 'active' : '' }}">Digital Marketing</a>
                    </div>
                </div>
                <a href="{{ url('/contact-us') }}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact Us</a>
            </div>
            <a href="{{ url('/enrollment') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    {{-- page content will be injected here --}}
    @yield('content')
        <!-- Start Application -->
    @if (Request::is('courses*') || Request::is('training*') || Request::is('internship*'))
    <div class="col-md-12 text-center my-5">
        <div class="p-4 border shadow-sm rounded bg-light">
            <h5 class="text-primary">Start Your Enrollment</h5>
            <p>Ready to begin your tech career? Contact us today to start your enroll process and secure your seat in the next available batch.</p>
            <a href="{{ url('/enrollment') }}" class="btn btn-primary px-4">Enroll Now</a>
        </div>
    </div>
    @endif

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="{{ url('/about-us') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('/faculty') }}">Faculty</a>
                    <a class="btn btn-link" href="{{ url('/success-stories') }}">Success Stories</a>
                    <a class="btn btn-link" href="{{ url('/gallery') }}">Gallery</a>
                    <a class="btn btn-link" href="{{ url('/contact-us') }}">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="row g-2 pt-2">
                    <h4 class="text-white mb-3"></h4>
                    <a class="btn btn-link" href="{{ url('/infrastructure') }}">Infrastructure</a>
                    <a class="btn btn-link" href="{{ url('/enrollment') }}">Enrollment</a>
                    <a class="btn btn-link" href="{{ url('/fee-structure') }}">Fee Structure</a>
                    <a class="btn btn-link" href="{{ url('/placements') }}">Placements</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Social Media</h4>
                    <div class="d-flex pt-2">
                        <a class="" href="https://facebook.com" target="_blank"><img src="{{asset('img/facebook.png')}}" with="60" height="60" alt="Airocode Facebook Page"></a>
                        <a class="" href="https://instagram.com" target="_blank"><img src="{{asset('img/instagram.png')}}" with="60" height="60" alt="Airocode Instagram Page"></a>
                        <a class="" href="https://linkedin.com" target="_blank"><img src="{{asset('img/linkedin.png')}}" with="60" height="60" alt="Airocode Linkedin Page"></a>
                        <a class="" href="https://youtube.com" target="_blank"><img src="{{asset('img/youtube.png')}}" with="60" height="60" alt="Airocode Youtube Page"></a>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Innovation by</h4>
                    <div class="d-flex">
                    <img src="{{asset('img/new_logo.png')}}" width="200" height="80" alt="Somayu Infotech Logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; &nbsp;2025&nbsp;<a class="border-bottom" href="/">Airocode.</a> All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="/">Home</a>
                            <a href="{{ url('/faq') }}">FQAs</a>
                            <a href="{{ url('/blog') }}">Blog</a>
                            <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                            <a href="{{ url('/terms-of-service') }}">Terms & Condition</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.nav-link.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        let isOpen = false;

        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) { // mobile/tablet
                if (!isOpen) {
                    e.preventDefault(); // prevent redirect only on first tap
                    dropdown.classList.toggle('show');
                    menu.classList.toggle('show');
                    isOpen = true;

                    // close others
                    dropdowns.forEach(d => {
                        if (d !== dropdown) {
                            d.classList.remove('show');
                            const m = d.querySelector('.dropdown-menu');
                            if (m) m.classList.remove('show');
                        }
                    });
                } else {
                    // second tap = redirect to /courses
                    isOpen = false;
                    window.location.href = toggle.getAttribute('href');
                }
            }
        });

        // close dropdown when clicking on dropdown-item (for mobile)
        menu.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.addEventListener('click', function() {
                dropdown.classList.remove('show');
                menu.classList.remove('show');
            });
        });
    });

    // close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        dropdowns.forEach(function(dropdown) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('show');
                const menu = dropdown.querySelector('.dropdown-menu');
                if (menu) menu.classList.remove('show');
            }
        });
    });
});
</script>

