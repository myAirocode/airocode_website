@extends('layouts.app')

@section('title', 'Privacy Policy - Airocode Technologies | Student Data Protection')
@section('meta_description', "Read Airocode Technologies's privacy policy. Learn how we protect student information, handle data securely, and maintain confidentiality standards.")
@section('meta_keywords', 'student data protection, information security, privacy terms, data privacy policy, user confidentiality, student privacy, secure training institute')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h3 class="text-white animated slideInDown">Privacy Policy</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Privacy Policy Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h4 class="text-primary mb-3">Privacy Policy</h4>
            <p>At Airocode Technologies, we are committed to protecting the privacy and confidentiality of our
            students, prospective students, and website visitors. This Privacy Policy explains how we
            collect, use, and safeguard your personal information.</p>

            <h5 class="mt-4">Information We Collect</h5>
            <ul>
                <li>Personal identification information (name, email, phone number)</li>
                <li>Educational background and qualification details</li>
                <li>Course enrollment and payment information</li>
                <li>Learning progress and assessment data</li>
            </ul>

            <h5 class="mt-4">How We Use Your Information</h5>
            <ul>
                <li>Course enrollment and student management</li>
                <li>Communication about courses, schedules, and updates</li>
                <li>Placement assistance and career support</li>
                <li>Improving our training programs and services</li>
            </ul>

            <h5 class="mt-4">Data Security</h5>
            <p>We implement appropriate security measures to protect your personal information against
            unauthorized access, alteration, disclosure, or destruction.</p>

            <h5 class="mt-4">Information Sharing</h5>
            <p>We do not sell, trade, or share your personal information with third parties except with your
            consent, for placement assistance, or when required by law.</p>

            <h5 class="mt-4">Contact for Privacy Questions</h5>
            <p>For privacy-related questions, contact us at 
            <a href="mailto:privacy@airocode.com">privacy@airocode.com</a>.</p>
        </div>
    </div>
    <!-- Privacy Policy Content End -->

@endsection
