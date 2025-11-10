@extends('layouts.app')

@section('title', 'Internship, Industrial Training, Full Stack Courses Enrollment - Join Airocode Technologies Tech Training Programs in Pune, Pimpri-Chinchwad, Bavdhan, Narayangaon.')
@section('meta_description', 'Internship, Industrial Training, Full Stack Courses Enrollment in Pimpri-Chinchwad, Bavdhan, Narayangaon, Pune. Online application, flexible payments, immediate batch enrollment. Start your tech career journey today.')
@section('meta_keywords', 'Course Enrollment, Tech Training Enrollment, Full Stack Development Enrollment, Programming Courses, Flexible Payment Options, Airocode Enrollment, Online Application, Career Counseling')

@section('content')
 <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

<style>
    .form-group { position: relative; margin-bottom: 1.5rem; }
    .form-input { border: none; border-bottom: 2px solid #ccc; width: 100%; padding: 10px 5px; font-size: 1rem; background: transparent; transition: 0.3s; }
    .form-input:focus { border-bottom-color: #4285F4; outline: none; }
    .form-label { position: absolute; top: 10px; left: 5px; color: #777; font-size: 0.9rem; transition: 0.3s; pointer-events: none; }
    .form-input:focus + .form-label, .form-input:not(:placeholder-shown) + .form-label {
        top: -10px; left: 0; font-size: 0.8rem; color: #4285F4; background: #fff; padding: 0 4px;
    }
    .enrollment-box { background: #fff; padding: 2rem; border: 1px solid #eee; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
    .enrollment-title { text-align: center; color: #4285F4; font-weight: 600; margin-bottom: 1.5rem; border-bottom: 2px solid #4285F4; display: inline-block; padding-bottom: 6px; }
    button.submit-btn { background-color: #4285F4; color: #fff; border: none; padding: 12px; width: 100%; border-radius: 30px; font-weight: 600; transition: 0.3s; }
    button.submit-btn:hover { background-color: #3367D6; }
</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">

            <div class="col-lg-5 col-md-12">
                <div class="enrollment-box">
                    <center><h5 class="enrollment-title">Enrollment Form</h5></center>
                    <p style="color: red; font-size: 14px;">* Fields marked with an asterisk are mandatory.</p>

                    @if(session('success'))
                        <div id="successMessage" class="alert alert-success text-center" style="color:white;font-size:18px">{{ session('success') }}</div>
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
                            <label class="form-label">Full Name <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder=" " value="{{ old('email') }}">
                            <label class="form-label">Email Address <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="whatsapp" class="form-input" placeholder=" " value="{{ old('whatsapp') }}">
                            <label class="form-label">WhatsApp Number <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-input" placeholder=" ">{{ old('address') }}</textarea>
                            <label class="form-label">Address <span style="color: red;">*</span></label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="college_name" class="form-input" placeholder=" " value="{{ old('college_name') }}">
                            <label class="form-label">College Name (if applicable)</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Highest Qualification <span style="color: red;">*</span></label>
                            <br>
                            <input type="text" name="education" class="form-input" placeholder="e.g., B.Tech 3rd Year" value="{{ old('education') }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                             Preferred Program Type <span style="color: red;">*</span>
                            </label>
                            <br>
                            <select class="form-input" id="program_type" name="program_type">
                                <option value="">Select Program Type</option>
                                <option value="internship">Internships</option>
                                <option value="training">Training Programs</option>
                                <option value="course">Full Stack Courses</option>
                            </select>
                        </div>

                        <div class="form-group" id="durationContainer" style="display:none;">
                             <label class="form-label">
                             Preferred Duration <span style="color: red;">*</span>
                            </label>
                            <br>
                            <select class="form-input" id="duration" name="duration">
                                <option value="">Select Duration</option>
                            </select>
                        </div>

                        <div class="form-group" id="specializationContainer" style="display:none;">
                          <label class="form-label">
                             Preferred Program <span style="color: red;">*</span>
                            </label>
                            <br>   
                        <select class="form-input" name="course" id="course">
                                <option value="">Select Program</option>
                            </select>
                        </div>
                                                <!-- Fee Display -->
                        <p id="courseFee" style="font-weight:600; color:#2E7D32; margin-top:10px;"></p>

                        <div class="form-group">
                            <label class="form-label">
                             Preferred Location <span style="color: red;">*</span>
                            </label>
                            <br>
                            <select name="preferred_location" class="form-input">
                                <option value="">Select Location</option>
                                <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
                                <option value="Bavdhan">Bavdhan</option>
                                <option value="Narayangaon">Narayangaon</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Preferred Batch <span style="color: red;">*</span>
                            </label>
                            <br>
                            <select name="batchdays" class="form-input">
                                <option value="">Select Batch</option>
                                <option value="Weekdays">Weekdays</option>
                                <option value="Weekend">Weekend</option>
                            </select>
                        </div>
    
                       <div class="form-group">
                            <label class="form-label">
                                Preferred Batch Timing <span style="color: red;">*</span>
                            </label>
                            <br>
                            <select name="batchtiming" class="form-input">
                                <option value="">Select Batch Timing</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="message" class="form-input" placeholder=" ">{{ old('message') }}</textarea>
                            <label class="form-label">Message</label>
                        </div>

                        <!-- Hidden Fee Input -->
                        <input type="hidden" name="course_fee" id="course_fee" value="">
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>

           <div class="col-lg-7">
                <h4 class="text-primary mb-3">Enrollment Overview</h4>
                <p>Join Airocode Technologies and start your journey toward a successful tech career. Our simple enrollment process makes it easy to enroll in your preferred course and begin learning immediately.</p>

                <div class="p-4 border shadow-sm rounded mb-4">
                    <h5 class="text-primary">Simple Enrollment Process</h5>
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
                            <h5 class="text-primary">Enrollment Requirements</h5>
                            <ul>
                                <li>Basic computer knowledge</li>
                                <li>Minimum 10th-grade education</li>
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
    const feeText = document.getElementById('courseFee');
    const feeInput = document.getElementById('course_fee');

    const durations = {
        internship: ["1 Month", "2 Months", "3 Months", "6 Months"],
        training: ["2 Months", "3 Months", "6 Months"]
    };

    const courses = [
        "AI/ML Stack Development",
        "Python Full Stack Development",
        "Data Science Stack Development",
        "MERN Stack Development",
        "MEAN Stack Development",
        "Java Full Stack Development",
        "Application Full Stack Development",
        "Web Full Stack Development",
    ];

    const fees = {
        internship: { "1 Month": 5000, "2 Months": 7000, "3 Months": 10000, "6 Months": 20000 },
        training: { "2 Months": 25000, "3 Months": 35000, "6 Months": 45000 },
        course: 30000
    };

    function showFee(program, duration) {
        let feeValue = '';
        if (program === 'internship' && fees.internship[duration]) feeValue = fees.internship[duration];
        else if (program === 'training' && fees.training[duration]) feeValue = fees.training[duration];
        else if (program === 'course') feeValue = fees.course;

        if (feeValue) {
            feeText.textContent = `Course Fee: ₹${feeValue.toLocaleString()}`;
            feeInput.value = feeValue;
        } else {
            feeText.textContent = '';
            feeInput.value = '';
        }
    }

    function populateFields(selectedType, oldDuration, oldCourse) {
        durationContainer.style.display = "none";
        specializationContainer.style.display = "none";
        durationSelect.innerHTML = '<option value="">Select Duration</option>';
        courseSelect.innerHTML = '<option value="">Select Course</option>';
        showFee('', '');

        if (selectedType === "internship" || selectedType === "training") {
            durationContainer.style.display = "block";
            durations[selectedType].forEach(d => {
                const opt = document.createElement('option');
                opt.value = d; opt.textContent = d;
                if (d === oldDuration) opt.selected = true;
                durationSelect.appendChild(opt);
            });
            showFee(selectedType, oldDuration);
        } else if (selectedType === "course") {
            specializationContainer.style.display = "block";
            courses.forEach(c => {
                const opt = document.createElement('option');
                opt.value = c; opt.textContent = c;
                if (c === oldCourse) opt.selected = true;
                courseSelect.appendChild(opt);
            });
            // ❌ Removed auto showFee() for courses here
        }
    }

    // When user selects program type
    programType.addEventListener('change', function () {
        populateFields(this.value, '', '');
    });

    // When user selects duration (internship/training)
    durationSelect.addEventListener('change', function () {
        showFee(programType.value, this.value);
    });

    // ✅ When user selects course (only then show the fee)
    courseSelect.addEventListener('change', function () {
        if (this.value) {
            showFee(programType.value, '');
        } else {
            showFee('', '');
        }
    });

    // Restore previous values if form reloads
    const oldProgramType = "{{ old('program_type') }}";
    const oldDuration = "{{ old('duration') }}";
    const oldCourse = "{{ old('course') }}";
    if (oldProgramType) {
        programType.value = oldProgramType;
        populateFields(oldProgramType, oldDuration, oldCourse);
        if (oldProgramType === 'course' && oldCourse) showFee(oldProgramType, '');
    }
      const successMessage = document.getElementById("successMessage");
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = "opacity 0.5s ease";
                successMessage.style.opacity = "0";
                setTimeout(() => successMessage.remove(), 500); 
            }, 5000); // 5 seconds delay
        }
});
</script>

@endsection
