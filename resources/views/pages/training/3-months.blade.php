@extends('layouts.app')

@section('title', '3 Month Industrial Training Course | Comprehensive Software Development Program')
@section('meta_description', "Master software development in 3 months with Airocode's comprehensive training. Learn full-stack development, data science, mobile apps, or cloud & DevOps with hands-on projects and placement support.")
@section('meta_keywords', '3 month training program, software development course, full stack training, 12 week training, data science, mobile app development, cloud computing, DevOps, placement assistance, coding bootcamp')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Program Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">3 Month Comprehensive Industrial Training Program</h4>
                <p class="mb-4">
                    Our 3-month industrial training program offers a balanced approach to learning software development, combining in-depth theoretical knowledge with extensive practical application. 
                    This program duration allows sufficient time for mastering multiple technologies while completing substantial projects that showcase your abilities.
                </p>

                <h5 class="text-primary mb-3">Specialization Tracks</h5>

                <ul class="mb-4 ps-4">
                    <li><b>Full-Stack Development Track:</b> Frontend: React.js/Angular with HTML5, CSS3, JavaScript ES6+; Backend: Node.js/Python/Java with RESTful API development; Database: SQL (MySQL/PostgreSQL) and NoSQL (MongoDB); Deployment: Cloud hosting, CI/CD basics, Docker introduction.</li>

                    <li><b>Data Science & Analytics Track:</b> Python programming for data science, data manipulation with Pandas/NumPy, data visualization with Matplotlib/Seaborn, machine learning fundamentals with Scikit-learn, statistical analysis, and real-world data projects.</li>

                    <li><b>Mobile Application Development Track:</b> Android development with Kotlin/Java, iOS development with Swift, React Native for cross-platform apps, mobile UI/UX design principles, API integration, and app deployment to Play Store/App Store.</li>

                    <li><b>Cloud & DevOps Track:</b> AWS/Azure/GCP fundamentals, Infrastructure as Code (Terraform), container orchestration with Kubernetes, CI/CD pipeline setup (Jenkins/GitLab), monitoring, logging, and security best practices.</li>
                </ul>

                <h5 class="text-primary mb-3">Comprehensive Curriculum</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Month 1: Foundation & Core Skills:</b> Programming mastery, version control, SDLC, database design, web fundamentals and responsive design.</li>
                    <li><b>Month 2: Advanced Concepts & Specialization:</b> Framework deep-dive, API development, testing, performance optimization, security fundamentals, project management basics.</li>
                    <li><b>Month 3: Project Development & Placement Prep:</b> Capstone project execution, code review, system design principles, interview preparation, resume optimization, soft skills training.</li>
                </ul>

                <h5 class="text-primary mb-3">Hands-On Projects</h5>
                <ul class="mb-4 ps-4">
                    <li>Personal portfolio website</li>
                    <li>Full-featured web application</li>
                    <li>Database-driven application</li>
                    <li>API development project</li>
                    <li>Industry-standard capstone project</li>
                </ul>

                <h5 class="text-primary mb-3">Learning Environment</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Classroom Facilities:</b> Modern labs, high-speed internet, individual workstations, collaborative project spaces.</li>
                    <li><b>Online Learning Platform:</b> Recorded sessions, digital resources, assignment submission portal, discussion forums, peer support.</li>
                    <li><b>Instructor Team:</b> Professionals with 5+ years experience, certified, connected to hiring companies.</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>Resume building workshops, mock interviews, company-specific preparation.</li>
                    <li>Direct referrals, job postings, salary negotiation guidance, career counseling.</li>
                    <li>Hiring Partner Network: 150+ companies, campus & off-campus recruitment, freelance opportunities.</li>
                </ul>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Training completion certificate</li>
                    <li>Project completion certificates</li>
                    <li>Skill assessment reports</li>
                    <li>LinkedIn skill endorsements</li>
                </ul>

                <h5 class="text-primary mb-3">Program Investment & Batches</h5>
                <ul class="mb-4 ps-4">
                    <li>Batch Options: Morning (9 AM - 12 PM), Afternoon (2 PM - 5 PM), Weekend (Sat & Sun)</li>
                    <li>Flexible EMI options, early bird discounts available</li>
                </ul>

                <h5 class="text-primary mb-3">Admission Requirements</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic computer knowledge</li>
                    <li>Graduation or pursuing graduation (any stream)</li>
                    <li>Passion for technology and problem-solving</li>
                    <li>Commitment to complete the program</li>
                </ul>
            </div>
        </div>
    <!-- Program Overview End -->

@endsection
