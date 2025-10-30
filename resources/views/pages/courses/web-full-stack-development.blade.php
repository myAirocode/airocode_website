@extends('layouts.app')

@section('title', 'Web Full-Stack Development Course | Complete Web Development Training')
@section('meta_description', 'Master web full-stack development with Airocode. Learn HTML, CSS, JavaScript, React, Node.js, Express, MongoDB, and PostgreSQL to build complete web applications.')
@section('meta_keywords', 'web development course, full stack web developer, complete web development, frontend development, backend development, React.js, Node.js, MongoDB, PostgreSQL, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Web Full-Stack Development Course - Build Modern Websites & Web Applications</h4>

                <p class="mb-4"><b>Course Introduction:</b><br>
                    Become a professional web developer with Airocode’s Web Full-Stack Development course. Learn to create responsive websites, build complex web applications, and integrate frontend and backend technologies to handle real-world user data and scale applications for thousands of users.
                </p>

                <h5 class="text-primary mb-3">Complete Web Development Roadmap</h5>

                <p><b>Foundation Phase (Weeks 1-4): Web Fundamentals</b></p>
                <ul class="mb-3 ps-4">
                    <li>HTML5: semantic elements, forms, APIs, SEO-friendly markup, accessibility, meta tags</li>
                    <li>CSS3: box model, Flexbox, Grid, responsive design, media queries, animations, preprocessors, frameworks, BEM methodology</li>
                    <li>JavaScript: fundamentals, ES6+, DOM manipulation, events, arrays/objects, async JS, fetch/AJAX, local storage, error handling</li>
                </ul>

                <p><b>Frontend Phase (Weeks 5-10): Modern Frontend Development</b></p>
                <ul class="mb-3 ps-4">
                    <li>React.js: JSX, functional components, props/state, hooks, router, context API, Redux (optional)</li>
                    <li>Advanced frontend: design patterns, higher-order components, custom hooks, performance optimization, code splitting, error boundaries, testing, TypeScript basics (optional)</li>
                    <li>UI/UX: responsive design, mobile-first, PWA basics, accessibility, cross-browser compatibility, performance optimization, UI libraries (Material-UI, Ant Design)</li>
                </ul>

                <p><b>Backend Phase (Weeks 11-16): Server-Side Development</b></p>
                <ul class="mb-3 ps-4">
                    <li>Node.js fundamentals: architecture, event loop, NPM, file system, streams, error handling, debugging</li>
                    <li>Express.js: app structure, routing, middleware, templates, static files, error handling, RESTful API development</li>
                    <li>Authentication & Security: user login/registration, bcrypt, JWT, session management, OAuth 2.0 basics, role-based access, HTTPS/SSL</li>
                </ul>

                <p><b>Database Phase (Weeks 17-20): Data Management</b></p>
                <ul class="mb-3 ps-4">
                    <li>MongoDB: architecture, CRUD, queries, data modeling, aggregation, Mongoose</li>
                    <li>SQL: MySQL/PostgreSQL basics, table relationships, joins, normalization, transactions, SQL injection prevention, performance tuning</li>
                </ul>

                <p><b>Full-Stack Integration (Weeks 21-23)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Frontend-backend communication, API integration, file handling, image storage, pagination, search, real-time features (Socket.io), payment gateway basics</li>
                    <li>Testing: Jest, integration testing, Postman/Insomnia API testing, E2E testing, debugging, ESLint/Prettier</li>
                </ul>

                <p><b>Deployment Phase (Weeks 24-26)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Version Control: Git fundamentals, GitHub workflows, branching, pull requests, code reviews</li>
                    <li>Web deployment: Linux basics, domain/DNS, server setup, Nginx/Apache, environment variables, SSL, monitoring</li>
                    <li>Cloud platforms: Heroku, Netlify, Vercel, AWS (EC2/S3/RDS), MongoDB Atlas, cloud storage</li>
                    <li>DevOps fundamentals: Docker, CI/CD, GitHub Actions, automated testing/deployment</li>
                </ul>

                <p><b>Advanced Topics (Weeks 27-28)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Web performance: frontend optimization, lazy loading, caching, CDN, Lighthouse audits, Core Web Vitals</li>
                    <li>SEO & Analytics: meta tags, schema markup, Google Analytics, user tracking, conversion optimization</li>
                </ul>

                <p><b>Capstone Project (Weeks 29-32)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Build a complete, professional web application from scratch, demonstrating mastery of all learned concepts</li>
                </ul>

                <h5 class="text-primary mb-3">Projects You'll Build</h5>
                <ul class="mb-4 ps-4">
                    <li>Personal Portfolio Website: HTML, CSS, JavaScript, responsive design</li>
                    <li>Weather Application: React, API integration, responsive design</li>
                    <li>Task Manager Application: React, Node.js, Express, MongoDB, JWT</li>
                    <li>Blog Platform: React + Node.js + MongoDB, admin panel, rich text editing</li>
                    <li>E-Commerce Website: Full-stack with payment integration</li>
                    <li>Social Media Application: Full-stack + real-time features</li>
                    <li>Capstone Project: Custom application solving a real problem</li>
                </ul>

                <h5 class="text-primary mb-3">Technology Stack</h5>
                <p><b>Frontend:</b> HTML5, CSS3/Sass, JavaScript ES6+, React.js, Redux, Bootstrap, Tailwind CSS, Material-UI/Ant Design</p>
                <p><b>Backend:</b> Node.js, Express.js, REST APIs, WebSocket (Socket.io), JWT/OAuth, Template engines</p>
                <p><b>Database:</b> MongoDB, MySQL/PostgreSQL, Redis for caching</p>
                <p><b>Tools & DevOps:</b> Git/GitHub, VS Code, Postman/Insomnia, Chrome DevTools, Docker, Heroku, Netlify, Vercel, npm/yarn</p>

                <h5 class="text-primary mb-3">Who Should Enroll?</h5>
                <ul class="mb-4 ps-4">
                    <li>Complete beginners to web development</li>
                    <li>Frontend developers wanting to learn backend</li>
                    <li>Backend developers wanting to learn frontend</li>
                    <li>Career changers entering tech</li>
                    <li>Freelancers expanding their skills</li>
                    <li>Entrepreneurs building websites</li>
                    <li>Students seeking web development careers</li>
                </ul>

                <h5 class="text-primary mb-3">Learning Approach</h5>
                <ul class="mb-4 ps-4">
                    <li>Hands-On Practice (70%): Build real projects</li>
                    <li>Live Instructor Sessions (20%): Live coding, demos, Q&A</li>
                    <li>Self-Paced Learning (10%): Recorded sessions and resources</li>
                    <li>Code Reviews: Feedback on coding best practices</li>
                    <li>Peer Learning: Collaborate, pair programming, code reviews</li>
                </ul>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>Full-Stack Web Developer</li>
                    <li>Frontend Developer</li>
                    <li>Backend Developer</li>
                    <li>Web Application Developer</li>
                    <li>JavaScript Developer</li>
                    <li>MERN Stack Developer</li>
                    <li>Software Engineer (Web)</li>
                    <li>Freelance opportunities: website development, web apps, landing pages, maintenance</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Investment</h5>
                <p>Duration: 32 weeks (8 months) <br>
                   Format: Classroom, Online Live, Hybrid options <br>
                   Batch Options: Morning 9AM-12PM, Evening 6PM-9PM, Weekend Sat-Sun <br>
                   Investment: Contact for current pricing & flexible payment plans
                </p>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode Web Full-Stack Developer Certificate</li>
                    <li>Project completion certificates (7 projects)</li>
                    <li>Skills proficiency assessment</li>
                    <li>LinkedIn skill badges</li>
                    <li>Industry-recognized certification</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>100% placement assistance</li>
                    <li>Resume building & optimization</li>
                    <li>Portfolio & GitHub profile development</li>
                    <li>Mock technical interviews</li>
                    <li>Coding challenge preparation</li>
                    <li>Company-specific interview prep & salary negotiation guidance</li>
                    <li>Direct referrals to 200+ companies and freelance project connections</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
