@extends('layouts.app')

@section('title', 'Java Full-Stack Development Course | Spring Boot, React Training')
@section('meta_description', 'Master Java full-stack development with Airocode. Learn Java, Spring Boot, Hibernate, React, Microservices, SQL/NoSQL, and enterprise application development.')
@section('meta_keywords', 'java full stack course, spring boot training, java backend development, java react course, hibernate, microservices, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">Java Full-Stack Development Course - Master Enterprise Application Development</h4>

                <p class="mb-4"><b>Why Java Full-Stack Development?</b><br>
                    Java is a leading programming language for enterprise applications used by global corporations, banks, e-commerce platforms, and government organizations. Java full-stack developers command high salaries and build scalable, mission-critical applications using Spring Boot, Hibernate, and modern frontend technologies.
                </p>

                <h5 class="text-primary mb-3">Comprehensive Curriculum</h5>

                <p><b>Phase 1: Java Programming Fundamentals (Weeks 1-5)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Core Java: syntax, OOP, classes, inheritance, polymorphism, interfaces, exception handling, collections, generics, file I/O, multithreading, lambdas, Stream API, Java 8+ features</li>
                    <li>Advanced Java: design patterns, SOLID principles, clean code, JVM architecture, garbage collection, memory management, Java best practices</li>
                </ul>

                <p><b>Phase 2: Database & JDBC (Weeks 6-7)</b></p>
                <ul class="mb-3 ps-4">
                    <li>SQL: MySQL/PostgreSQL/Oracle, table design, joins, stored procedures, triggers, indexing, normalization, transactions</li>
                    <li>JDBC: architecture, database connection, statements, ResultSet, batch processing, connection pooling, transaction management</li>
                </ul>

                <p><b>Phase 3: Frontend Development (Weeks 8-12)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Web Fundamentals: HTML5, CSS3, Bootstrap, responsive design, JavaScript ES6+, DOM manipulation, events, async programming, fetch/AJAX</li>
                    <li>React.js: fundamentals, components, JSX, props/state, hooks, React Router, Redux, Axios integration, forms and validation</li>
                </ul>

                <p><b>Phase 4: Spring Framework Ecosystem (Weeks 13-20)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Spring Core: DI, IoC, AOP, bean lifecycle, configuration</li>
                    <li>Spring Boot: auto-configuration, starters, REST APIs, DevTools, Actuator, embedded servers</li>
                    <li>Spring Data JPA: ORM, CRUD, relationships, JPQL, pagination, transaction management, caching</li>
                    <li>Spring MVC: controllers, request mapping, view resolvers, forms, validation, file upload/download</li>
                    <li>Spring Security: authentication/authorization, JWT, OAuth 2.0, role-based access, CSRF, CORS</li>
                    <li>Spring REST: RESTful web services, HTTP methods, request/response handling, exception handling, API versioning, Swagger/OpenAPI</li>
                </ul>

                <p><b>Phase 5: Microservices Architecture (Weeks 21-23)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Microservices fundamentals: architecture principles, monolith vs microservices, service decomposition, API Gateway</li>
                    <li>Spring Cloud: Config Server, Eureka, Ribbon, API Gateway, circuit breaker, distributed tracing, centralized logging</li>
                    <li>Messaging: Apache Kafka, RabbitMQ, event-driven and asynchronous communication</li>
                </ul>

                <p><b>Phase 6: Advanced Topics (Weeks 24-26)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Testing: JUnit 5, Mockito, integration testing, Spring Boot Test, TDD, JaCoCo, REST Assured</li>
                    <li>Performance & Optimization: profiling, query optimization, caching, connection pool, JVM tuning, monitoring</li>
                    <li>Security: OWASP Top 10, SQL injection, XSS/CSRF, secure password storage, input validation</li>
                </ul>

                <p><b>Phase 7: DevOps & Deployment (Weeks 27-28)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Version Control: Git, GitHub workflows, branching, code reviews</li>
                    <li>Containerization: Docker, Docker Compose, orchestration basics</li>
                    <li>CI/CD: Jenkins, GitHub Actions, Maven/Gradle automation, automated testing</li>
                    <li>Cloud Deployment: AWS (EC2/RDS/S3), Azure, cloud databases, environment management</li>
                </ul>

                <p><b>Phase 8: Capstone Project (Weeks 29-32)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Build a complete enterprise-grade application demonstrating full-stack Java development with microservices architecture</li>
                </ul>

                <h5 class="text-primary mb-3">Projects Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Employee Management System: Spring Boot + React, MySQL, CRUD, search, pagination</li>
                    <li>E-Commerce Platform: Spring Boot + React, MySQL, Spring Security, Stripe API</li>
                    <li>Banking Application: Spring Boot + React, PostgreSQL, security, fund transfer, statements</li>
                    <li>Social Media Platform: Spring Boot + React, MongoDB, WebSocket, real-time notifications</li>
                    <li>Microservices-Based Application: Spring Boot + Spring Cloud + React, PostgreSQL, Kafka, Docker</li>
                    <li>Capstone Enterprise Application: large-scale project demonstrating Java full-stack expertise</li>
                </ul>

                <h5 class="text-primary mb-3">Technology Stack</h5>
                <p><b>Backend:</b> Java 8/11/17, Spring Framework, Spring Boot, Spring Data JPA, Spring Security, Spring Cloud, Hibernate, Maven/Gradle, Apache Kafka, Redis</p>
                <p><b>Frontend:</b> React.js, Redux/Context API, Material-UI/Ant Design, Axios, React Router, TypeScript (optional)</p>
                <p><b>Databases:</b> MySQL/PostgreSQL, MongoDB, Redis, H2 (development)</p>
                <p><b>Tools & DevOps:</b> IntelliJ/Eclipse, Git/GitHub, Postman, Docker, Jenkins, AWS/Azure basics, Swagger/OpenAPI</p>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>Java Full-Stack Developer</li>
                    <li>Spring Boot Developer</li>
                    <li>Backend Java Developer</li>
                    <li>Java Software Engineer</li>
                    <li>Enterprise Application Developer</li>
                    <li>Microservices Developer</li>
                    <li>Java Architect (with experience)</li>
                </ul>

                <h5 class="text-primary mb-3">Industries Hiring</h5>
                <ul class="mb-4 ps-4">
                    <li>Banking and Financial Services, Insurance, Healthcare, E-commerce, Government, IT Services, Product-Based Companies, Large Enterprises</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Format</h5>
                <p>Duration: 32 weeks (8 months) <br>
                   Mode: Classroom / Online / Hybrid <br>
                   Batch Timings: Weekday Morning 9AM-12PM, Weekday Evening 6PM-9PM, Weekend Sat-Sun 9AM-5PM
                </p>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic programming knowledge helpful but not mandatory</li>
                    <li>Logical thinking and problem-solving aptitude</li>
                    <li>Bachelor's degree for job placements</li>
                    <li>Commitment to complete the intensive program</li>
                </ul>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode Java Full-Stack Developer Certificate</li>
                    <li>Spring Framework Proficiency Certificate</li>
                    <li>Microservices Architecture Certificate</li>
                    <li>Project completion certificates (6 projects)</li>
                    <li>Skills assessment report</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>Guaranteed placement assistance: resume building, interview preparation, DSA in Java, system design prep, mock interviews, company-specific prep</li>
                    <li>15+ guaranteed interview calls</li>
                    <li>Direct referrals to 200+ companies</li>
                    <li>Hiring Partners: major IT companies, banks, insurance firms, product companies</li>
                    <li>Placement Track Record: 90%+ placement rate, average 5-8 LPA, highest 18 LPA</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
