@extends('layouts.app')

@section('title', 'IT Internship Programs | Software Development Internships | Airocode')
@section('meta_description', "Gain real-world experience with Airocode's IT internship programs. Work on live projects, learn industry-standard tools, receive mentorship, and build a portfolio that boosts your tech career.")
@section('meta_keywords', 'IT internship, software development internship, tech internship, coding internship, web development internship, mobile app internship, data science internship, DevOps internship, cloud internship, QA internship, hands-on training')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Program Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Software Development Internship Programs - Build Real-World Experience</h4>
                <p class="mb-4">
                    Airocode's internship programs offer students and aspiring developers the opportunity to gain hands-on experience working on real software projects. 
                    Whether you're a student, recent graduate, or career changer, our flexible durations (1, 2, 3, or 6 months) cater to your schedule.
                </p>

                <h5 class="text-primary mb-3">What Makes Airocode Internships Different?</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Real Project Experience:</b> Contribute to live codebases, participate in code reviews, and see your work deployed.</li>
                    <li><b>Structured Learning Path:</b> Guided tasks progressing to independent responsibilities.</li>
                    <li><b>Industry Mentorship:</b> Learn from experienced developers with regular feedback.</li>
                    <li><b>Technology Exposure:</b> Work with modern frameworks, version control, and collaboration tools.</li>
                    <li><b>Flexible Duration Options:</b> 1, 2, 3, or 6 months internships.</li>
                    <li><b>Internship Certificate:</b> Recognized certificate documenting your experience.</li>
                </ul>

                <h5 class="text-primary mb-3">Internship Domains & Technologies</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Web Development:</b> HTML5, CSS3, JavaScript, React.js, Vue.js, Angular, Node.js, Python (Django/Flask), PHP, Java, full-stack projects, responsive design, performance optimization.</li>
                    <li><b>Mobile App Development:</b> Android (Kotlin/Java), iOS (Swift), React Native/Flutter, mobile UI/UX, API integration.</li>
                    <li><b>Data Science & Analytics:</b> Data collection, cleaning, visualization, ML models, Python libraries (Pandas, NumPy, Scikit-learn).</li>
                    <li><b>DevOps & Cloud:</b> AWS/Azure/GCP, CI/CD, Docker, infrastructure automation, monitoring & logging.</li>
                    <li><b>Quality Assurance:</b> Manual/automated testing, Selenium, JUnit, TestNG, bug tracking, QA best practices.</li>
                </ul>

                <h5 class="text-primary mb-3">Internship Structure</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Week 1: Onboarding:</b> Team introduction, environment setup, technology orientation, initial tasks.</li>
                    <li><b>Ongoing Development Phase:</b> Daily standups, task execution, code reviews, testing, documentation, team collaboration.</li>
                    <li><b>Final Week: Completion:</b> Project deployment, knowledge documentation, presentation, feedback, certificate ceremony.</li>
                </ul>

                <h5 class="text-primary mb-3">Learning Outcomes</h5>
                <ul class="mb-4 ps-4">
                    <li>Understand professional software workflows and agile methodology</li>
                    <li>Learn Git/GitHub version control</li>
                    <li>Develop problem-solving and debugging skills</li>
                    <li>Practice code documentation and commenting</li>
                    <li>Improve communication and teamwork</li>
                    <li>Build portfolio projects</li>
                    <li>Receive mentor recommendations and career guidance</li>
                </ul>

                <h5 class="text-primary mb-3">Who Can Apply?</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Students:</b> B.Tech/B.E. (CS, IT, ECE), BCA/MCA, B.Sc/M.Sc CS, Diploma (final year)</li>
                    <li><b>Graduates:</b> Recent graduates seeking exposure or career transition</li>
                    <li><b>Requirements:</b> Basic programming knowledge, willingness to learn, commitment, good communication</li>
                </ul>

                <h5 class="text-primary mb-3">Internship Benefits</h5>
                <ul class="mb-4 ps-4">
                    <li>Hands-on experience with real projects</li>
                    <li>Guidance from experienced developers</li>
                    <li>Official internship certificate</li>
                    <li>Letter of recommendation for outstanding performers</li>
                    <li>Resume and portfolio building</li>
                    <li>Industry exposure and networking</li>
                    <li>Potential pre-placement offers</li>
                    <li>Skill assessment and feedback</li>
                    <li>Access to learning resources</li>
                    <li>Career guidance and counseling</li>
                </ul>

                <h5 class="text-primary mb-3">Stipend Policy</h5>
                <p class="mb-4">
                    Performance-based stipends may be offered for 3-month and 6-month internships based on contribution and skill level.
                </p>

                <h5 class="text-primary mb-3">Internship Timings</h5>
                <ul class="mb-4 ps-4">
                    <li>Weekday Options: Morning (9 AM - 1 PM), Afternoon (2 PM - 6 PM), Full day (9 AM - 5 PM)</li>
                    <li>Weekend Option: Saturday & Sunday batches for students with weekday classes</li>
                </ul>

                <h5 class="text-primary mb-3">Internship to Employment Path</h5>
                <p class="mb-4">
                    Outstanding interns may receive pre-placement offers or recommendations. Many past interns have converted experience into full-time employment opportunities.
                </p>

                <h5 class="text-primary mb-3">Start Your Internship Journey</h5>
                <p class="mb-4">
                    Ready to gain practical software development experience? Choose your preferred internship duration and begin building the skills and portfolio that will launch your tech career.
                </p>
            </div>
        </div>
    <!-- Program Overview End -->

@endsection
