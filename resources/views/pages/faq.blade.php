@extends('layouts.app')

@section('title', 'Frequently Asked Questions - Course & Admission Info | Airocode')
@section('meta_description', 'Get answers to common questions about courses, fees, admission process, placement support, and training programs at Airocode Technologies.')
@section('meta_keywords', 'Airocode Technologies frequently asked questions, course FAQ, admission questions, tech training queries')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="text-white animated slideInDown">Frequently Asked Questions - Course & Admission Information</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- FAQ Section -->
<div class="container-xxl py-5">
    <div class="container">

        <!-- General Questions -->
        <h4 class="text-primary">General Questions</h4>
        <div class="mt-3">
            <h6 class="text-primary">Q: What courses does Airocode Technologies offer?</h6>
            <p>A: We offer 6 full stack development courses (Web, Java, MERN, MEAN, Python, Application), training programs (2/3/6 months), and internship opportunities (1–6 months).</p>
            
            <h6 class="text-primary">Q: What is the duration and fee for courses?</h6>
            <p>A: All full stack courses are 2 months duration with ₹20,000 fee each. Training programs range from ₹25,000 (2 months) to ₹45,000 (6 months).</p>
            
            <h6 class="text-primary">Q: Do you offer flexible batch timings?</h6>
            <p>A: Yes, we offer weekend batches and evening batches to accommodate college students and working professionals.</p>
        </div>

        <!-- Course-Related Questions -->
        <div class="mt-5">
            <h4 class="text-primary">Course-Related Questions</h4>
            <h6 class="text-primary">Q: Do I need prior programming experience?</h6>
            <p>A: No prior experience required for most courses. We start with fundamentals and build up to advanced concepts.</p>

            <h6 class="text-primary">Q: What is included in the course fee?</h6>
            <p>A: Course fee includes training materials, project guidance, lab access, and basic placement assistance.</p>

            <h6 class="text-primary">Q: Can I switch between courses?</h6>
            <p>A: Course changes may be possible in early stages, subject to batch availability and administrative approval.</p>
        </div>

        <!-- Admission Process Questions -->
        <div class="mt-5">
            <h4 class="text-primary">Admission Process Questions</h4>
            <h6 class="text-primary">Q: How do I enroll in a course?</h6>
            <p>A: Contact us for counseling, choose your course, complete payment, and confirm your batch enrollment.</p>

            <h6 class="text-primary">Q: Are EMI options available?</h6>
            <p>A: Yes, we offer EMI options through approved payment partners for course fees.</p>

            <h6 class="text-primary">Q: What documents are required for admission?</h6>
            <p>A: Basic identification, educational certificates, and passport-size photographs are required.</p>
        </div>

        <!-- Placement and Support Questions -->
        <div class="mt-5">
            <h4 class="text-primary">Placement and Support Questions</h4>
            <h6 class="text-primary">Q: Do you provide job placement assistance?</h6>
            <p>A: Yes, we offer comprehensive placement support including resume building, interview preparation, and job referrals.</p>

            <h6 class="text-primary">Q: What is your placement success rate?</h6>
            <p>A: We maintain a strong placement track record with graduates placed in various IT companies.</p>

            <h6 class="text-primary">Q: Do you provide certificates?</h6>
            <p>A: Yes, course completion certificates are provided upon successful completion of programs.</p>
        </div>

        <!-- Technical Questions -->
        <div class="mt-5">
            <h4 class="text-primary">Technical Questions</h4>
            <h6 class="text-primary">Q: What software and tools will I learn?</h6>
            <p>A: You'll learn industry-standard development tools, frameworks, databases, and deployment platforms relevant to your chosen course.</p>

            <h6 class="text-primary">Q: Do you provide practice labs?</h6>
            <p>A: Yes, we have modern computer labs with updated software for hands-on practice during and after class hours.</p>
        </div>

        <!-- Contact for More Questions -->
        <div class="mt-5">
            <h4 class="text-primary">Contact for More Questions</h4>
            <p>If you don't find your question answered here, please <a href="/contact" class="text-decoration-underline text-primary">contact us</a> directly for personalized assistance.</p>
        </div>
    </div>
</div>

@endsection
