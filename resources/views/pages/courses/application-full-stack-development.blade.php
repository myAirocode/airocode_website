@extends('layouts.app')

@section('title', 'Application Full-Stack Development Course | End-to-End App Development Training')
@section('meta_description', 'Master application full-stack development with Airocode. Learn frontend, backend, database, DevOps, and build complete applications from scratch with hands-on projects.')
@section('meta_keywords', 'application development course, full stack app development, end to end development, frontend development, backend development, database management, DevOps, software development training, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Application Full-Stack Development Course - Build Complete Applications from Scratch</h4>
                <p class="mb-4"><b>Course Overview:</b><br>
                    The Application Full-Stack Development course at Airocode transforms you into a complete application developer capable of building production-ready software. Learn the complete development lifecycle, from frontend and backend programming to database management, DevOps, deployment, and application scaling.
                </p>

                <h5 class="text-primary mb-3">What Makes This Course Unique?</h5>
                <ul class="mb-4 ps-4">
                    <li><b>Complete Application Focus:</b> Build fully functional applications from day one.</li>
                    <li><b>Production-Ready Skills:</b> Learn secure, scalable, and maintainable coding practices.</li>
                    <li><b>Modern Architecture Patterns:</b> Microservices, serverless apps, PWAs, SPAs, and more.</li>
                    <li><b>Full Development Lifecycle:</b> From requirements gathering to deployment and maintenance.</li>
                </ul>

                <h5 class="text-primary mb-3">Comprehensive Curriculum</h5>
                <p><b>Module 1: Application Fundamentals (Weeks 1-2)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Application architecture basics</li>
                    <li>Client-server architecture</li>
                    <li>REST API fundamentals, HTTP, JSON</li>
                    <li>Environment setup and tooling</li>
                </ul>

                <p><b>Module 2: Frontend Development (Weeks 3-6)</b></p>
                <ul class="mb-3 ps-4">
                    <li>HTML5, CSS3, JavaScript ES6+</li>
                    <li>Responsive design & mobile-first approach</li>
                    <li>Bootstrap, Tailwind CSS</li>
                    <li>React.js, Vue.js, or Angular, Redux/Vuex</li>
                    <li>Component architecture, routing, API integration</li>
                </ul>

                <p><b>Module 3: Backend Development (Weeks 7-10)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Node.js, Python, or Java backend</li>
                    <li>RESTful & GraphQL API development</li>
                    <li>Authentication, JWT/session management</li>
                    <li>Middleware, email/SMS integration, third-party APIs</li>
                </ul>

                <p><b>Module 4: Database Management (Weeks 11-13)</b></p>
                <ul class="mb-3 ps-4">
                    <li>SQL (MySQL/PostgreSQL) and NoSQL (MongoDB)</li>
                    <li>Database design, indexing, optimization</li>
                    <li>ORM frameworks, migrations, backups</li>
                </ul>

                <p><b>Module 5: Application Security (Week 14)</b></p>
                <ul class="mb-3 ps-4">
                    <li>OWASP top 10, input validation, XSS/CSRF protection</li>
                    <li>Secure authentication, HTTPS/SSL, API security</li>
                </ul>

                <p><b>Module 6: Testing & QA (Week 15)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Unit, integration, and end-to-end testing</li>
                    <li>TDD, testing frameworks, code coverage, debugging, performance profiling</li>
                </ul>

                <p><b>Module 7: DevOps & Deployment (Weeks 16-17)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Git, GitHub, CI/CD, Docker</li>
                    <li>Cloud platforms (AWS/Azure/GCP), environment management</li>
                    <li>Monitoring, logging, performance optimization</li>
                </ul>

                <p><b>Module 8: Advanced Topics (Weeks 18-19)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Microservices, message queues, caching, websockets</li>
                    <li>Payment gateway integration, push notifications, analytics</li>
                </ul>

                <p><b>Module 9: Capstone Project (Weeks 20-24)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Build full-featured applications</li>
                    <li>System design, agile workflow, code review, production deployment</li>
                </ul>

                <h5 class="text-primary mb-3">Application Projects You'll Build</h5>
                <ul class="mb-4 ps-4">
                    <li>Task Management App (React, Node.js, MongoDB, Socket.io)</li>
                    <li>E-Commerce Platform (Vue.js, Express.js, PostgreSQL, Stripe)</li>
                    <li>Social Media App (Angular, Python Flask, MongoDB)</li>
                    <li>Real-Time Chat App (React, Node.js, Socket.io, Redis)</li>
                    <li>Capstone Application of your choice</li>
                </ul>

                <h5 class="text-primary mb-3">Technologies Covered</h5>
                <p><b>Frontend:</b> HTML5, CSS3, JavaScript, React.js, Vue.js/Angular, Redux, Material-UI/Ant Design</p>
                <p><b>Backend:</b> Node.js, Express.js, Python Django/Flask, REST/GraphQL APIs, Microservices</p>
                <p><b>Database:</b> MongoDB, PostgreSQL/MySQL, Redis, ORM/ODM frameworks</p>
                <p><b>DevOps & Tools:</b> Git, GitHub, Docker, AWS/Azure, CI/CD, Nginx/Apache, PM2</p>
                <p><b>Additional Tools:</b> Postman, VS Code, Chrome DevTools, Testing frameworks, Monitoring tools</p>

                <h5 class="text-primary mb-3">Learning Methodology</h5>
                <ul class="mb-4 ps-4">
                    <li>Hands-On Practice (60%)</li>
                    <li>Live Coding Sessions (25%)</li>
                    <li>Code Reviews (10%)</li>
                    <li>Collaborative Learning (5%)</li>
                </ul>

                <h5 class="text-primary mb-3">Career Outcomes</h5>
                <p>Full-Stack Developer, Application Developer, Software Engineer, Backend/Frontend Developer, Web Application Developer, API Developer. Salary Range: 3-7 LPA (freshers), 6-12 LPA (1-2 yrs experience).</p>

                <h5 class="text-primary mb-3">Who Should Enroll?</h5>
                <ul class="mb-4 ps-4">
                    <li>Students seeking comprehensive development skills</li>
                    <li>Frontend or backend developers looking to expand skills</li>
                    <li>Career changers entering software development</li>
                    <li>Entrepreneurs building applications</li>
                    <li>Anyone serious about application development</li>
                </ul>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic programming concepts</li>
                    <li>Familiarity with HTML and CSS</li>
                    <li>Problem-solving aptitude</li>
                    <li>Commitment to complete the program</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Investment</h5>
                <p>Duration: 24 weeks (6 months) <br>
                   Schedule: Weekday batches: Mon-Fri 2-3 hrs/day, Weekend batches: Sat-Sun 4-5 hrs/day <br>
                   Investment: Contact for pricing and installment options
                </p>

                <h5 class="text-primary mb-3">Certification & Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode Application Full-Stack Developer Certificate</li>
                    <li>Project completion certificates</li>
                    <li>Portfolio: 5+ complete applications, GitHub profile, deployed apps, technical documentation</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>Resume building and portfolio development</li>
                    <li>Mock technical interviews</li>
                    <li>System design interview prep</li>
                    <li>Coding challenge practice</li>
                    <li>Direct referrals to 150+ hiring partners</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
