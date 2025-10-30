@extends('layouts.app')

@section('title', 'Campus Gallery - Training Facilities & Learning Environment | Airocode')
@section('meta_description', 'View photos of our modern campus, computer labs, classrooms, and student activities. See our professional learning environment and facilities.')
@section('meta_keywords', 'Airocode Campus Gallery, Tech Training Facilities, Modern Computer Labs, Classrooms for IT Training, Learning Environment, Student Activities at Airocode, IT Education Campus Tour')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="text-white animated slideInDown">Campus Gallery - Explore Our Learning Environment</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Campus Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Campus Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="mb-5">
            <h4 class="text-primary">Campus Gallery Overview</h4>
            <p>Take a visual tour of Airocode Technologies's modern facilities and vibrant learning environment. Our gallery showcases the infrastructure, classrooms, labs, and student activities that make our institute a great place to learn and grow.</p>
        </div>

        <!-- Facility Categories -->
        <div class="row g-4">
            <!-- Computer Laboratory -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Computer Laboratory</h5>
                    <ul>
                        <li>Modern computer labs equipped with updated hardware</li>
                        <li>Development workstations with professional software installations</li>
                        <li>Collaborative workspace arrangements for team projects</li>
                        <li>Clean, well-organized learning environment</li>
                    </ul>
                </div>
            </div>

            <!-- Classroom Environment -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Classroom Environment</h5>
                    <ul>
                        <li>Comfortable, well-lit classrooms designed for effective learning</li>
                        <li>Modern audio-visual equipment for presentations</li>
                        <li>Interactive spaces that encourage participation</li>
                        <li>Professional atmosphere for focused study</li>
                    </ul>
                </div>
            </div>

            <!-- Campus Infrastructure -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Campus Infrastructure</h5>
                    <ul>
                        <li>Overview of campus layout and architectural features</li>
                        <li>Common areas and student interaction spaces</li>
                        <li>Reception and administrative areas</li>
                        <li>Safe and secure campus environment</li>
                    </ul>
                </div>
            </div>

            <!-- Student Activities -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Student Activities</h5>
                    <ul>
                        <li>Hands-on coding and project development</li>
                        <li>Group discussions and collaborative sessions</li>
                        <li>Faculty interaction and mentorship moments</li>
                        <li>Project presentations and demos</li>
                    </ul>
                </div>
            </div>

            <!-- Learning Sessions -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Learning Sessions</h5>
                    <ul>
                        <li>Active classroom sessions with faculty</li>
                        <li>Individual and team project work</li>
                        <li>Workshops and practical learning demos</li>
                        <li>Problem-solving activities and discussions</li>
                    </ul>
                </div>
            </div>

            <!-- Events and Workshops -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Events and Workshops</h5>
                    <ul>
                        <li>Special workshops and guest sessions</li>
                        <li>Project presentations and showcases</li>
                        <li>Industry interaction and networking</li>
                        <li>Student achievements and milestone celebrations</li>
                    </ul>
                </div>
            </div>

            <!-- Modern Amenities -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Modern Amenities</h5>
                    <ul>
                        <li>Clean and comfortable facilities</li>
                        <li>Ergonomic furniture and seating</li>
                        <li>Tech integration across classrooms</li>
                        <li>Professional, industry-like environment</li>
                    </ul>
                </div>
            </div>

            <!-- Virtual Campus Tour -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border rounded">
                    <h5 class="text-primary">Virtual Campus Tour</h5>
                    <p>Explore our facilities remotely through a virtual tour. It's a convenient way for prospective students to experience our learning environment before visiting in person.</p>
                </div>
            </div>
        </div>

        <!-- Visit Our Campus -->
        <div class="mt-5">
            <h5 class="text-primary">Visit Our Campus</h5>
            <p>We invite prospective students to visit Airocode Technologies and experience our vibrant campus, meet our faculty, and see our learning environment in action. <a href="#">Schedule a visit today &raquo;</a></p>
        </div>

        <!-- Regular Updates -->
        <div class="mt-4">
            <h5 class="text-primary">Regular Updates</h5>
            <p>Our gallery is regularly updated with photos of current student activities, facility upgrades, events, and achievements. Check back often to see what’s new at Airocode.</p>
        </div>
    </div>
</div>
<!-- Campus Gallery End -->

@endsection
