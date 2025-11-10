@extends('layouts.app')

@section('title', 'Python Full-Stack Development Course | Django, Flask, React Training')
@section('meta_description', 'Become a Python full-stack developer with Airocode. Master Django, Flask, React, PostgreSQL, and MongoDB to build complete, production-ready web applications.')
@section('meta_keywords', 'python full stack course, django training, flask development, python web development, react.js, backend development, frontend development, full stack developer, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Python Full-Stack Development Course - Master Django, Flask & Modern Web Development</h4>

                <p class="mb-4"><b>Why Python Full-Stack Development?</b><br>
                    Python is widely used for web development, data science, and automation. Learn to combine Python backend frameworks with modern frontend technologies to create complete, scalable applications. This course prepares you for high-demand Python developer roles and premium salaries.
                </p>

                <h5 class="text-primary mb-3">Comprehensive Curriculum</h5>

                <p><b>Phase 1: Python Programming Foundations (Weeks 1-3)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Core Python: syntax, data types, control structures, OOP, decorators, generators, exception handling, file I/O, standard library</li>
                    <li>Advanced Concepts: list comprehensions, iterators, context managers, regex, JSON/XML handling, multithreading, PEP 8 best practices</li>
                </ul>

                <p><b>Phase 2: Frontend Development (Weeks 4-7)</b></p>
                <ul class="mb-3 ps-4">
                    <li>HTML5, CSS3, JavaScript ES6+</li>
                    <li>Responsive design, Flexbox, Grid</li>
                    <li>React.js: components, props, state, lifecycle, hooks, router, context API, Axios</li>
                    <li>Connecting React frontend to Python backend</li>
                </ul>

                <p><b>Phase 3: Django Framework (Weeks 8-13)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Django architecture, MTV pattern, URL routing, templates, static/media files</li>
                    <li>ORM & Database: models, queries, migrations, optimization</li>
                    <li>Django REST Framework: APIs, serializers, viewsets, authentication, permissions, pagination, Swagger docs</li>
                    <li>Advanced Django: CBVs, middleware, signals, template tags, caching, Celery, channels, testing</li>
                </ul>

                <p><b>Phase 4: Flask Framework (Weeks 14-16)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Flask app structure, routing, Jinja2 templates, sessions, file uploads</li>
                    <li>Flask Extensions: SQLAlchemy, Flask-Login, Flask-WTF, Flask-RESTful, Flask-Mail, Flask-Migrate</li>
                    <li>Building RESTful APIs with Flask, authentication, rate limiting, CORS, API docs</li>
                </ul>

                <p><b>Phase 5: Database Management (Weeks 17-18)</b></p>
                <ul class="mb-3 ps-4">
                    <li>SQL/PostgreSQL: database design, complex queries, joins, indexes, views, security</li>
                    <li>NoSQL/MongoDB: CRUD, aggregation, indexing, PyMongo, when to use SQL vs NoSQL</li>
                </ul>

                <p><b>Phase 6: Full-Stack Integration (Weeks 19-20)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Connecting frontend to backend, API design, JWT authentication, file handling, WebSockets, state management, error handling</li>
                </ul>

                <p><b>Phase 7: Testing & Quality (Week 21)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Backend testing: pytest, Django/Flask testing, mock objects, coverage, integration tests</li>
                    <li>Frontend testing: Jest, component/integration tests, basic E2E testing</li>
                </ul>

                <p><b>Phase 8: Deployment & DevOps (Weeks 22-23)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Server setup, Gunicorn/uWSGI, Nginx, SSL/TLS, environment variables, database deployment</li>
                    <li>Cloud: AWS EC2/RDS/S3, Heroku, Digital Ocean, Docker, CI/CD with GitHub Actions</li>
                </ul>

                <p><b>Phase 9: Advanced Topics (Week 24)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Scalability & Performance: caching with Redis, query optimization, load balancing, CDN, monitoring</li>
                    <li>Security: OWASP Top 10, SQL injection prevention, XSS/CSRF protection, secure passwords, API security</li>
                </ul>

                <p><b>Phase 10: Capstone Project (Weeks 25-28)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Build a complete production-ready application using Django/Flask + React</li>
                </ul>

                <h5 class="text-primary mb-3">Project Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Blog Platform (Django, React, PostgreSQL)</li>
                    <li>E-Learning Platform (Django REST, React, PostgreSQL, Redis)</li>
                    <li>Task Management System (Flask, React, MongoDB, Socket.io)</li>
                    <li>E-Commerce Store (Django, React, PostgreSQL, Stripe)</li>
                    <li>Social Network Application (Django Channels, React, PostgreSQL, Redis)</li>
                </ul>

                <h5 class="text-primary mb-3">Technologies Covered</h5>
                <p><b>Backend:</b> Python 3.x, Django 4.x, Flask 2.x, Django REST Framework, Celery, Django Channels</p>
                <p><b>Frontend:</b> React.js, Hooks, Redux/Context API, Material-UI/Ant Design, Axios, React Router</p>
                <p><b>Database:</b> PostgreSQL, MongoDB, Redis, SQLAlchemy ORM</p>
                <p><b>Tools & DevOps:</b> Git, GitHub, Docker, AWS/Heroku, Nginx/Gunicorn, pytest, Postman</p>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>Python Full-Stack Developer</li>
                    <li>Django Developer</li>
                    <li>Backend Python Developer</li>
                    <li>Web Application Developer</li>
                    <li>API Developer</li>
                    <li>Python Software Engineer</li>
                </ul>

                <h5 class="text-primary mb-3">Industries Hiring</h5>
                <ul class="mb-4 ps-4">
                    <li>IT Services & Consulting</li>
                    <li>E-commerce Platforms</li>
                    <li>FinTech Companies</li>
                    <li>Healthcare Tech</li>
                    <li>EdTech Platforms</li>
                    <li>SaaS Companies</li>
                    <li>Startups</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Format</h5>
                <p>Duration: 28 weeks (7 months) <br>
                   Mode: Online/Offline, Weekday & Weekend batches, Self-paced with mentor support<br>
                   Class Schedule: Weekday Mon-Fri 2-3 hrs/day, Weekend Sat-Sun 4-5 hrs/day
                </p>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic programming knowledge (any language)</li>
                    <li>Understanding of web fundamentals (HTML, CSS)</li>
                    <li>Logical thinking and problem-solving skills</li>
                    <li>No prior Python experience required</li>
                </ul>

                <h5 class="text-primary mb-3">Certification & Recognition</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode Python Full-Stack Developer Certificate</li>
                    <li>Django/Flask Framework Certification</li>
                    <li>Project completion certificates</li>
                    <li>LinkedIn skill endorsements</li>
                    <li>Industry-recognized credentials</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Assistance</h5>
                <ul class="mb-4 ps-4">
                    <li>Resume optimization for Python roles</li>
                    <li>Python-specific interview preparation</li>
                    <li>DSA, Django/Flask interviews, system design prep</li>
                    <li>Mock interviews with industry experts</li>
                    <li>Direct referrals to 150+ hiring companies</li>
                </ul>

                <h5 class="text-primary mb-3">Student Success Metrics</h5>
                <ul class="mb-4 ps-4">
                    <li>85%+ placement rate within 3 months</li>
                    <li>Average salary: 4-7 LPA, Highest package: 12 LPA</li>
                    <li>90%+ student satisfaction rating</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
