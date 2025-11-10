@extends('layouts.app')

@section('title', '6 Month Industrial Training Program | Advanced Software Development Course')
@section('meta_description', "Become a job-ready software developer with Airocode's extensive 6-month training program. Gain mastery in full-stack, data science, mobile development, cloud & DevOps, complete multiple projects, and receive premium placement support.")
@section('meta_keywords', '6 month training program, long term IT course, advanced software training, professional software development, full stack development, data science, mobile app development, cloud computing, DevOps, placement assistance, coding bootcamp')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Program Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">6 Month Advanced Industrial Training & Career Development Program</h4>
                <p class="mb-4">
                    Our flagship 6-month industrial training program is designed to transform beginners into confident, job-ready software professionals. 
                    This extended duration allows deep expertise development, multiple project experiences, and thorough preparation for competitive IT roles.
                </p>

                <h5 class="text-primary mb-3">Why Choose 6 Months?</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Maximum Skill Depth:</b> Master multiple technologies, advanced problem-solving, enterprise-level project experience, and comprehensive industry knowledge.</li>
                    <li><b>Superior Career Outcomes:</b> Qualify for mid-level positions, command higher salaries, access premium job opportunities, and build substantial portfolio.</li>
                    <li><b>Complete Professional Development:</b> Technical excellence, soft skills, leadership, and industry networking.</li>
                </ul>

                <h5 class="text-primary mb-3">Advanced Specialization Tracks</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Enterprise Full-Stack Development:</b> React.js/Vue.js/Angular, Redux, TypeScript, Next.js; Backend: Node.js/Python/Java, microservices, GraphQL, REST APIs; Database: SQL/NoSQL, optimization, data modeling; DevOps: Docker, Kubernetes, CI/CD, cloud deployment; Testing & Security: Unit/integration/E2E testing, OWASP top 10.</li>
                    <li><b>Advanced Data Science & Machine Learning:</b> Python, statistics, ML algorithms, deep learning (TensorFlow/PyTorch), NLP, computer vision, big data (Spark/Hadoop), model deployment, MLOps.</li>
                    <li><b>Cloud Architecture & DevOps Engineering:</b> AWS/Azure/GCP advanced services, Infrastructure as Code, Kubernetes, serverless architecture, monitoring, SRE principles, security, cost optimization.</li>
                    <li><b>Mobile & Cross-Platform Development:</b> Native Android (Kotlin) and iOS (Swift), React Native/Flutter, mobile architecture patterns, performance optimization, offline-first apps, push notifications, app monetization, store publishing.</li>
                </ul>

                <h5 class="text-primary mb-3">Comprehensive 6-Month Curriculum</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Phase 1 (Month 1-2): Foundation</b> – Programming fundamentals, DSA, SDLC, version control, database concepts, web fundamentals, environment setup.</li>
                    <li><b>Phase 2 (Month 3-4): Specialization Core</b> – Chosen track deep-dive, framework mastery, advanced programming patterns, API development, testing, performance optimization, security, agile practices.</li>
                    <li><b>Phase 3 (Month 5): Advanced Topics</b> – System design, microservices, cloud deployment, advanced databases, real-time apps, third-party integration, code review, documentation.</li>
                    <li><b>Phase 4 (Month 6): Industry Preparation</b> – Capstone project, portfolio, technical + HR interview prep, system design interviews, DSA practice, mock interviews, resume/LinkedIn optimization, salary negotiation.</li>
                </ul>

                <h5 class="text-primary mb-3">Extensive Project Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Personal Portfolio Website</li>
                    <li>E-commerce Application</li>
                    <li>Social Media Platform</li>
                    <li>Data Analytics Dashboard</li>
                    <li>Mobile Application (Native/Cross-platform)</li>
                    <li>API Development (RESTful/GraphQL)</li>
                    <li>Cloud-Deployed Application</li>
                    <li>Industry Capstone Project</li>
                </ul>

                <h5 class="text-primary mb-3">Expert Faculty & Mentorship</h5>
                <ul class="mb-4 ps-4">
                    <li>8+ years industry experience, certified professionals, open-source contributors, published authors.</li>
                    <li>Dedicated mentor, weekly one-on-one sessions, career guidance, project review, post-training support for 6 months.</li>
                </ul>

                <h5 class="text-primary mb-3">Premium Placement Services</h5>
                <ul class="mb-4 ps-4">
                    <li>Guaranteed minimum 10 interview calls, direct referrals to 200+ partners, exclusive job postings, on/off-campus recruitment, freelance opportunities.</li>
                    <li>20+ mock interviews, company-specific prep, aptitude & reasoning training, group discussions, technical presentations, salary negotiation workshops.</li>
                    <li>Average placement: 3.5-6 LPA, Highest: up to 12 LPA.</li>
                </ul>

                <h5 class="text-primary mb-3">Additional Benefits</h5>
                <ul class="mb-4 ps-4">
                    <li>Industry Connect: Guest lectures, company visits, hackathons, networking events, alumni meetups.</li>
                    <li>Lifetime Benefits: Updated course materials, advanced course discounts, job referral support, skill upgrade workshops, alumni network, career mentorship.</li>
                    <li>Learning Resources: 500+ hours of videos, study materials, 1000+ practice problems, interview question bank, project templates, premium tool subscriptions.</li>
                </ul>

                <h5 class="text-primary mb-3">Flexible Learning Options</h5>
                <ul class="mb-4 ps-4">
                    <li>Classroom Training: Face-to-face interaction, collaborative environment, hands-on labs.</li>
                    <li>Hybrid Model: Online + offline, flexible attendance, recorded sessions, online assignments.</li>
                    <li>Weekend Batches: For working professionals, full curriculum on Saturdays & Sundays.</li>
                </ul>

                <h5 class="text-primary mb-3">Certification & Recognition</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode Training Completion Certificate</li>
                    <li>Technology-specific certifications</li>
                    <li>Project completion certificates</li>
                    <li>Industry-recognized skill badges</li>
                    <li>LinkedIn skill verification</li>
                </ul>

                <h5 class="text-primary mb-3">Admission Process</h5>
                <ul class="mb-4 ps-4">
                    <li>Application: Fill online form or visit center</li>
                    <li>Counseling: One-on-one session</li>
                    <li>Aptitude Test (if required)</li>
                    <li>Track Selection</li>
                    <li>Documentation submission</li>
                    <li>Payment</li>
                    <li>Onboarding: Welcome kit & access credentials</li>
                </ul>

                <h5 class="text-primary mb-3">Investment & Payment Options</h5>
                <ul class="mb-4 ps-4">
                    <li>Competitive pricing with multiple payment plans</li>
                    <li>0% EMI options</li>
                    <li>Early bird discounts (up to 20%)</li>
                    <li>Group enrollment benefits & scholarships</li>
                </ul>

                <h5 class="text-primary mb-3">Success Stories</h5>
                <p class="mb-4">
                    Graduates have successfully transitioned into software development roles at leading companies, many achieving 100-200% salary increases within the first year of placement.
                </p>

                <h5 class="text-primary mb-3">Transform Your Career Today</h5>
                <p class="mb-4">
                    The 6-month program is perfect for building a long-term career in software development. With comprehensive training, extensive projects, and guaranteed placement support, you'll be ready to excel in the competitive IT industry.
                </p>
            </div>
        </div>
    <!-- Program Overview End -->

@endsection
