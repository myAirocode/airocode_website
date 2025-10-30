@extends('layouts.app')

@section('title', 'Tech Career Blog - Programming Tips & Industry Insights | Airocode')
@section('meta_description', 'Expert insights on tech careers, programming tutorials, industry trends, and coding tips. Stay updated with latest technology developments.')
@section('meta_keywords', 'Tech Blog, Programming Tips, Coding Tutorials, Technology Insights, Career Guidance, Airocode Blog, Industry Trends, Software Development Articles')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="text-white animated slideInDown">Tech Insights & Career Guidance Blog</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Blog Content Start -->
<div class="container-xxl py-5">
    <div class="container">

        <!-- Welcome to Blog -->
        <div class="mb-5">
            <h4 class="text-primary">Welcome to Our Tech Blog</h4>
            <p>Stay updated with the latest technology trends, programming tutorials, career advice, and industry insights. Our expert team shares valuable content to help students and professionals advance their tech careers.</p>
        </div>

        <div class="row g-4">

            <!-- Blog Categories -->
            <div class="col-md-12">
                <div class="p-4 border shadow-sm rounded">
                    <h5 class="text-primary">Blog Categories</h5>
                    <ul>
                        <li><strong>Programming Tutorials:</strong> Step-by-step guides and tutorials on various programming languages, frameworks, and development tools.</li>
                        <li><strong>Career Guidance:</strong> Professional advice for tech career development, job search strategies, and industry navigation.</li>
                        <li><strong>Technology Trends:</strong> Latest developments in technology, emerging frameworks, and industry innovations.</li>
                        <li><strong>Student Success Stories:</strong> Real experiences and achievements of our students and alumni in their career journeys.</li>
                        <li><strong>Industry Insights:</strong> Deep dives into technology sectors, job market analysis, and professional development opportunities.</li>
                    </ul>
                </div>
            </div>

            <!-- Popular Articles -->
            <div class="col-md-12">
                <div class="p-4 border shadow-sm rounded">
                    <h5 class="text-primary">Popular Articles</h5>
                    <ul>
                        <li>"Essential Programming Languages for 2025"</li>
                        <li>"How to Build an Impressive Tech Portfolio"</li>
                        <li>"Interview Tips for Software Developer Positions"</li>
                        <li>"Career Paths in Full Stack Development"</li>
                        <li>"Latest Trends in Web Development"</li>
                    </ul>
                </div>
            </div>

            <!-- Weekly Content -->
            <div class="col-md-12">
                <div class="p-4 border shadow-sm rounded">
                    <h5 class="text-primary">Weekly Content</h5>
                    <ul>
                        <li>New tutorials and guides posted regularly</li>
                        <li>Industry news and trend analysis</li>
                        <li>Student spotlight features</li>
                        <li>Career advice columns</li>
                        <li>Technology reviews and comparisons</li>
                    </ul>
                </div>
            </div>

            <!-- Expert Contributors -->
            <div class="col-md-12">
                <div class="p-4 border shadow-sm rounded">
                    <h5 class="text-primary">Expert Contributors</h5>
                    <p>Our blog features content from experienced industry professionals, successful alumni, and expert faculty members sharing their knowledge and insights.</p>
                </div>
            </div>

            <!-- Stay Connected -->
            <div class="col-md-12 text-center">
                <div class="p-4 border shadow-sm rounded bg-light">
                    <h5 class="text-primary">Stay Connected</h5>
                    <p>Subscribe to our newsletter for the latest blog updates, tech news, and exclusive content delivered to your inbox.</p>
                    <a href="/subscribe" class="btn btn-primary px-4">Subscribe Now</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog Content End -->

@endsection
