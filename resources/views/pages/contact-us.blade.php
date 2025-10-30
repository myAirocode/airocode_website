@extends('layouts.app')

@section('title', 'Contact Airocode Technologies - Get Course Info & Admission Details')
@section('meta_description', 'Contact Airocode Technologies for course inquiries, enrollment, and career guidance. Call or WhatsApp for instant response. Visit our center')
@section('meta_keywords', 'Contact Airocode Technologies, Airocode Technologies courses, tech training, course inquiry Airocode, admission details Airocode, career guidance tech courses, call Airocode Technologies, WhatsApp Airocode Technologies, IT training institute, software training institute contact')

@section('content')

  <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Contact Info Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"> Contact Airocode</h6>
                <h3>Get in Touch with Airocode Technologies</h3>
                <p class="lead">
                    Ready to transform your career with industry-ready tech skills? Contact our enrollment team for
                    detailed course information, batch schedules, and personalized career guidance.
                </p>
            </div>

            <div class="row g-4">
                <!-- Contact Details -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="mb-3">Company Address</h5>
                    <p><strong>Airocode Technologies</strong><br> - Pimpri, Pune, Pin code - 412303<br>Maharashtra, India</p>
                    <p><strong>Somayu Infotech</strong><br> - Padmashree Classic GQ8J+5M9, Sagar Co-Operative Housing Society, Bavdhan, Pune, Maharashtra 411021</p>

                    <h5 class="mt-4 mb-3">Contact Information</h5>
                    <p><i class="fa fa-phone-alt text-primary me-2"></i> Phone: </p>
                    <p><i class="fab fa-whatsapp text-success me-2"></i> WhatsApp: 91 467 51 567 (Instant Response)</p>
                    <p><i class="fa fa-envelope text-primary me-2"></i> info@airocode.com</p>

                    <h5 class="mt-4 mb-3">Career Guidance</h5>
                    <p><i class="fa fa-envelope-open text-primary me-2"></i> careers@airocode.com</p>
                    <p><i class="fa fa-clock text-primary me-2"></i> Monday to Saturday: 9:00 AM – 6:00 PM</p>
                    <p><i class="fa fa-calendar text-primary me-2"></i> Sunday: Available for Appointments</p>
                    
                </div>

                <!-- Google Map -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                   <iframe
                    class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps?q=Padmashree+Classic,+Sagar+Co-Operative+Housing+Society,+Bavdhan,+Pune,+Maharashtra+411021&output=embed"
                    frameborder="0"
                    style="min-height: 300px; border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                    </iframe>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h5 class="mb-3">Quick Enquiry Form</h5>
                    @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                   <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
                                    <label for="fullname">Full Name</label>
                                    @error('fullname') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}">
                                    <label for="mobile">Mobile Number</label>
                                    @error('mobile') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" value="{{ old('email') }}">
                                    <label for="email">Email Address</label>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Message" id="message" style="height: 150px">{{ old('message') }}</textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Location Benefits -->
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center">
                    <h5>Location Benefits</h5>
                    <p>Our location offers easy accessibility, proximity to colleges and universities, and
                        good transportation connectivity for students.</p>
                </div>
            </div>

            <!-- Visit Campus -->
            <div class="row mt-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-12 text-center">
                    <h5>Visit Our Campus</h5>
                    <p>Schedule a campus tour to see our facilities, meet faculty, and experience our learning
                        environment. Campus visits available during office hours.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

@endsection
