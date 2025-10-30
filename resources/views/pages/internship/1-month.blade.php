@extends('layouts.app')

@section('title', '1 Month IT Internship Program | Short Term Software Internship')
@section('meta_description', '1-month IT internship for students. Gain hands-on coding experience, work on real-world projects, and enhance your resume with professional mentorship and certification.')
@section('meta_keywords', '1 month internship, short term internship, summer internship, winter internship, quick IT internship, software internship, Airocode internship, coding internship')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Program Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">1 Month IT Internship Program</h4>
                <p class="mb-4"><b>Program Overview</b><br>
                    Our 1-month internship is designed for students with limited time during semester breaks. 
                    This intensive 4-week program provides meaningful hands-on experience with real development work 
                    and professional mentorship from industry experts. 
                    <br><br>
                    Perfect for students looking to gain practical exposure in a short duration, this program helps build 
                    your technical and teamwork skills through guided project-based learning.
                </p>
            </div>
        </div>
    <!-- Program Overview End -->

    <!-- Program Structure Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Program Structure</h4>

                <h5 class="text-primary mt-4">Week 1: Onboarding</h5>
                <ul class="mb-4 ps-4">
                    <li>Team introduction and orientation</li>
                    <li>Development environment setup</li>
                    <li>Technology stack overview</li>
                    <li>Project understanding</li>
                    <li>First task assignment</li>
                </ul>

                <h5 class="text-primary">Weeks 2–3: Development</h5>
                <ul class="mb-4 ps-4">
                    <li>Feature implementation</li>
                    <li>Code development</li>
                    <li>Testing and debugging</li>
                    <li>Code reviews</li>
                    <li>Documentation</li>
                </ul>

                <h5 class="text-primary">Week 4: Completion</h5>
                <ul class="mb-4 ps-4">
                    <li>Project finalization</li>
                    <li>Code cleanup</li>
                    <li>Documentation</li>
                    <li>Final presentation</li>
                    <li>Certificate issuance</li>
                </ul>
            </div>
        </div>
    <!-- Program Structure End -->

    <!-- What You'll Work On Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">What You'll Work On</h4>
                <ul class="mb-4 ps-4">
                    <li>Web page or component development</li>
                    <li>API integration</li>
                    <li>Database operations</li>
                    <li>Bug fixes</li>
                    <li>Feature implementations</li>
                    <li>Testing tasks</li>
                </ul>
            </div>
        </div>
    <!-- What You'll Work On End -->

    <!-- Skills Developed Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Skills Developed</h4>
                <ul class="mb-4 ps-4">
                    <li>Version control (Git)</li>
                    <li>Professional coding practices</li>
                    <li>Code documentation</li>
                    <li>Debugging techniques</li>
                    <li>Team collaboration</li>
                    <li>Agile workflow basics</li>
                </ul>
            </div>
        </div>
    <!-- Skills Developed End -->

    <!-- Deliverables Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Deliverables</h4>
                <ul class="mb-4 ps-4">
                    <li>Completed project tasks</li>
                    <li>GitHub repository with code</li>
                    <li>Technical documentation</li>
                    <li>Internship completion certificate</li>
                    <li>Experience letter</li>
                </ul>
            </div>
        </div>
    <!-- Deliverables End -->

    <!-- Eligibility Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Eligibility</h4>
                <ul class="mb-4 ps-4">
                    <li>Students on semester breaks</li>
                    <li>Final year students</li>
                    <li>Basic programming knowledge required</li>
                    <li>Available for 4 consecutive weeks</li>
                </ul>
            </div>
        </div>
    <!-- Eligibility End -->
@endsection
