@extends('layouts.app')

@section('title', 'Course Enrollment - Join Airocode Technologies Tech Training Programs')
@section('meta_description', 'Simple admission process for tech courses. Online application, flexible payments, immediate batch enrollment. Start your tech career journey today.')
@section('meta_keywords', 'Course Enrollment, Tech Training Enrollment, Full Stack Development Admission, Programming Courses, Flexible Payment Options, Airocode Enrollment, Online Application, Career Counseling')

@section('content')

<!-- Custom Styles -->
<style>
    /* --- GOOGLE FORM STYLE --- */
    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-input {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        width: 100%;
        padding: 10px 5px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
        background: transparent;
    }

    .form-input:focus {
        outline: none;
        border-bottom: 2px solid #4285F4;
    }

    .form-label {
        position: absolute;
        top: 10px;
        left: 5px;
        color: #777;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .form-input:focus + .form-label,
    .form-input:not(:placeholder-shown) + .form-label {
        top: -10px;
        left: 0;
        font-size: 0.8rem;
        color: #4285F4;
        background: #fff;
        padding: 0 4px;
    }

    select.form-input {
        appearance: none;
        background: transparent;
    }

    textarea.form-input {
        resize: none;
        min-height: 100px;
    }

    button.submit-btn {
        background-color: #4285F4;
        color: #fff;
        border: none;
        padding: 12px;
        width: 100%;
        border-radius: 30px;
        font-weight: 600;
        transition: 0.3s ease;
    }

    button.submit-btn:hover {
        background-color: #3367D6;
    }

    /* Box styling */
    .enrollment-box {
        background: #fff;
        padding: 2rem;
        border: 1px solid #eee;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .enrollment-title {
        text-align: center;
        color: #4285F4;
        font-weight: 600;
        margin-bottom: 1.5rem;
        border-bottom: 2px solid #4285F4;
        display: inline-block;
        padding-bottom: 6px;
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5 text-center text-white">
        <h3 class="animated slideInDown">Course Enrollment - Start Your Tech Career Journey Today</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Enrollment</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- Enrollment Content Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">

            <!-- Left Side: Enrollment Form -->
            <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="enrollment-box">
                    <h5 class="enrollment-title">Enrollment Form</h5>

                    @if(session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="fullname" class="form-input" placeholder=" " value="{{ old('fullname') }}">
                            <label class="form-label">Full Name</label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="mobile" class="form-input" placeholder=" " value="{{ old('mobile') }}">
                            <label class="form-label">Mobile Number</label>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder=" " value="{{ old('email') }}">
                            <label class="form-label">Email Address</label>
                        </div>

                        <div class="form-group">
                            <select class="form-input" id="program_type" name="program_type">
                                <option value="">Select Program Type</option>
                                <option value="internship">Internships</option>
                                <option value="training">Training Programs</option>
                                <option value="course">Courses</option>
                            </select>
                        </div>

                        <div class="form-group" id="durationContainer" style="display:none;">
                            <select class="form-input" id="duration" name="duration">
                                <option value="">Select Duration</option>
                            </select>
                        </div>

                        <div class="form-group" id="specializationContainer" style="display:none;">
                            <select class="form-input" name="course" id="course">
                                <option value="">Select Program</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" name="education" class="form-input" placeholder="Education - e.g., B.Tech 3rd Year" value="{{ old('education') }}">
                        </div>

                        <div class="form-group">
                            <select name="batchdays" class="form-input">
                                <option value="">Preferred Batch Days</option>
                                <option value="Weekdays">Weekdays</option>
                                <option value="Weekend">Weekend</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="batchtiming" class="form-input">
                                <option value="">Preferred Batch Timing</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-input" placeholder=" ">{{ old('message') }}</textarea>
                            <label class="form-label">Message</label>
                        </div>

                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Right Side: Admission Info -->
            <div class="col-lg-7">
                <h4 class="text-primary mb-3">Admission Overview</h4>
                <p>Join Airocode Technologies and start your journey toward a successful tech career. Our simple admission process makes it easy to enroll in your preferred course and begin learning immediately.</p>

                <div class="p-4 border shadow-sm rounded mb-4">
                    <h5 class="text-primary">Simple Admission Process</h5>
                    <ol>
                        <li>Choose your preferred course or program.</li>
                        <li>Attend a free career counseling session.</li>
                        <li>Submit the online application form.</li>
                        <li>Make a secure payment.</li>
                        <li>Get confirmation and batch schedule.</li>
                        <li>Start your learning journey.</li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4 border shadow-sm rounded">
                            <h5 class="text-primary">Admission Requirements</h5>
                            <ul>
                                <li>Basic computer knowledge</li>
                                <li>Minimum 10th-grade education</li>
                                <li>Age 16+</li>
                                <li>Commitment to learn</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border shadow-sm rounded">
                            <h5 class="text-primary">Required Documents</h5>
                            <ul>
                                <li>Valid ID proof</li>
                                <li>Educational certificates</li>
                                <li>2 Passport photos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const programType = document.getElementById('program_type');
    const durationContainer = document.getElementById('durationContainer');
    const specializationContainer = document.getElementById('specializationContainer');
    const durationSelect = document.getElementById('duration');
    const courseSelect = document.getElementById('course');

    const durations = {
        internship: ["1 Month", "2 Months", "3 Months", "6 Months"],
        training: ["2 Months", "3 Months", "6 Months"]
    };

    const courses = [
        "AI/ML Stack Development",
        "Data Science Stack Development",
        "Web Full Stack Development",
        "Java Full Stack Development",
        "MERN Stack Development",
        "MEAN Stack Development",
        "Python Full Stack Development",
        "Application Full Stack Development"
    ];

    function populateFields(selectedType, oldDuration, oldCourse) {
        durationContainer.style.display = "none";
        specializationContainer.style.display = "none";

        durationSelect.innerHTML = '<option value="">Select Duration</option>';
        courseSelect.innerHTML = '<option value="">Select Course</option>';

        if (selectedType === "internship" || selectedType === "training") {
            durationContainer.style.display = "block";
            durations[selectedType].forEach(d => {
                const opt = document.createElement('option');
                opt.value = d;
                opt.textContent = d;
                if (d === oldDuration) opt.selected = true;
                durationSelect.appendChild(opt);
            });
        } else if (selectedType === "course") {
            specializationContainer.style.display = "block";
            courses.forEach(c => {
                const opt = document.createElement('option');
                opt.value = c;
                opt.textContent = c;
                if (c === oldCourse) opt.selected = true;
                courseSelect.appendChild(opt);
            });
        }
    }

    // Event listener for manual change
    programType.addEventListener('change', function () {
        populateFields(this.value, '', '');
    });

    // On page load — restore old selections (from Laravel old() helper)
    const oldProgramType = "{{ old('program_type') }}";
    const oldDuration = "{{ old('duration') }}";
    const oldCourse = "{{ old('course') }}";

    if (oldProgramType) {
        programType.value = oldProgramType;
        populateFields(oldProgramType, oldDuration, oldCourse);
    }
});
</script>


@endsection
