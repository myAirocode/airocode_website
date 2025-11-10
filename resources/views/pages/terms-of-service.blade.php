@extends('layouts.app')

@section('title', 'Terms of Service - Airocode Technologies | Course Enrollment Terms')
@section('meta_description', "Read Airocode Technologies's terms of service for course enrollment, payment policies, refund conditions, and student responsibilities.")
@section('meta_keywords', 'terms of service, course enrollment terms, payment policy, refund conditions, student responsibilities, intellectual property, training terms')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h3 class="text-white animated slideInDown">Terms of Service</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Terms of Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Terms of Service Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h4 class="text-primary mb-3">Terms of Service - Airocode Technologies</h4>
            <p><strong>Last Updated:</strong> September 27, 2025</p>
            <p>By enrolling in any course at Airocode Technologies, you agree to comply with these Terms of Service.</p>

            <h5 class="mt-4">Course Enrollment</h5>
            <ul>
                <li>Accurate information must be provided during registration</li>
                <li>Course fees must be paid as per agreed schedule</li>
                <li>Students must meet prerequisite requirements where applicable</li>
            </ul>

            <h5 class="mt-4">Payment Terms</h5>
            <ul>
                <li>Course fees are non-transferable between programs</li>
                <li>EMI options available with approved payment partners</li>
                <li>Refund policy as outlined in Fee Structure page</li>
            </ul>

            <h5 class="mt-4">Student Responsibilities</h5>
            <ul>
                <li>Regular attendance and active participation</li>
                <li>Respectful behavior towards faculty and fellow students</li>
                <li>Completion of assignments and projects as required</li>
            </ul>

            <h5 class="mt-4">Intellectual Property</h5>
            <ul>
                <li>Course materials are proprietary to Airocode Technologies</li>
                <li>Students may not share or distribute course content</li>
                <li>Project work remains student property with institute usage rights</li>
            </ul>

            <h5 class="mt-4">Contact for Terms</h5>
            <p>For questions about these terms, contact us at 
                <a href="mailto:legal@airocode.com">legal@airocode.com</a>.
            </p>
        </div>
    </div>
    <!-- Terms of Service Content End -->

@endsection
