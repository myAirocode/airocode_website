@extends('layouts.app')

@section('title', 'MEAN Stack Development Course | MongoDB, Express, Angular, Node.js Training')
@section('meta_description', 'Master MEAN stack development with Airocode. Learn MongoDB, Express.js, Angular, Node.js, and build enterprise-grade applications.')
@section('meta_keywords', 'MEAN stack course, Angular training, MongoDB Express Node, full stack Angular, web development, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">MEAN Stack Development Course - Build Enterprise Angular Applications</h4>

                <p class="mb-4"><b>Why MEAN Stack with Angular?</b><br>
                    The MEAN stack (MongoDB, Express.js, Angular, Node.js) is preferred for building large-scale, complex web applications. Angular provides type safety, structure, and advanced features, making MEAN developers highly valued in enterprise environments.
                </p>

                <h5 class="text-primary mb-3">Comprehensive MEAN Stack Curriculum</h5>

                <p><b>Phase 1: JavaScript & TypeScript Fundamentals (Weeks 1-4)</b></p>
                <ul class="mb-3 ps-4">
                    <li>JavaScript Essentials: core concepts, ES6+, OOP, functional programming, async JS, Promises, error handling, modules</li>
                    <li>TypeScript Mastery: types, interfaces, classes, generics, enums, advanced types, decorators, modules, namespaces, type guards, configuration</li>
                </ul>

                <p><b>Phase 2: Angular Framework (Weeks 5-14)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Angular Fundamentals: architecture, CLI, components, templates, data binding, component communication, lifecycle hooks, directives, pipes, style encapsulation</li>
                    <li>Angular Forms: template-driven, reactive forms, form validation, custom validators, dynamic forms, error handling</li>
                    <li>Services & DI: creating services, dependency injection, singleton services, HttpClient, Observables, RxJS operators, interceptors</li>
                    <li>Routing: router configuration, route params, query params, child/nested routes, route guards, lazy loading, navigation, router events</li>
                    <li>State Management: component state, shared services, NgRx fundamentals, store/actions/reducers, effects, selectors, DevTools, state patterns</li>
                    <li>Advanced Angular: custom directives, content projection, dynamic component loading, animations, change detection, standalone components, Signals (Angular 16+)</li>
                    <li>Angular Material: Material components, forms, navigation, layout, data tables, dialogs/modals, theming, responsive layout</li>
                </ul>

                <p><b>Phase 3: Backend with Node.js & Express.js (Weeks 15-19)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Node.js: architecture, event-driven programming, NPM, file system, streams, events, debugging, environment variables</li>
                    <li>Express.js: setup, routing, middleware, request/response handling, RESTful APIs, error handling, authentication middleware, file upload, API versioning, TypeScript integration</li>
                    <li>Authentication & Security: JWT, bcrypt, refresh tokens, role-based access, OAuth2, API security best practices, CORS, rate limiting, input validation</li>
                </ul>

                <p><b>Phase 4: MongoDB Database (Weeks 20-22)</b></p>
                <ul class="mb-3 ps-4">
                    <li>MongoDB Fundamentals: NoSQL concepts, CRUD operations, query operators, aggregation, indexing, data modeling</li>
                    <li>Mongoose ODM: schemas/models, validation, relationships, populate, middleware hooks, query building, transactions, best practices</li>
                </ul>

                <p><b>Phase 5: Full-Stack Integration (Weeks 23-25)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Connecting Angular to Backend: HttpClient service, API integration, error handling, interceptors, loading states, file upload, real-time with Socket.io, WebSocket integration, authentication flow, protected routes</li>
                    <li>Advanced Features: pagination, search, filtering, sorting, real-time notifications, chat, email/SMS integration, payment gateways, third-party API integration, cron jobs</li>
                </ul>

                <h5 class="text-primary mb-3">Projects Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Project 1: CRUD Application with Angular frontend and Node.js backend</li>
                    <li>Project 2: E-Commerce Platform with authentication, product catalog, cart, checkout</li>
                    <li>Project 3: Social Media App with posts, comments, likes, real-time chat</li>
                    <li>Project 4: Blogging platform with search, pagination, tags, and user authentication</li>
                    <li>Project 5: Capstone enterprise application demonstrating complete MEAN expertise</li>
                </ul>

                <h5 class="text-primary mb-3">Technology Stack</h5>
                <p><b>Frontend:</b> Angular 15+, TypeScript, Angular CLI, RxJS, NgRx, Angular Material, Reactive Forms, Router</p>
                <p><b>Backend:</b> Node.js (LTS), Express.js 4+, JWT, bcrypt, Socket.io, Nodemailer, Express Validator, TypeScript</p>
                <p><b>Database:</b> MongoDB 5+, Mongoose, MongoDB Atlas</p>
                <p><b>Tools & DevOps:</b> VS Code, Git/GitHub, Postman/Insomnia, Docker, Netlify/Vercel, Heroku/Render</p>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>MEAN Stack Developer</li>
                    <li>Full-Stack Angular Developer</li>
                    <li>Frontend Angular Developer</li>
                    <li>Backend Node.js Developer</li>
                    <li>JavaScript Engineer</li>
                </ul>

                <h5 class="text-primary mb-3">Industries</h5>
                <ul class="mb-4 ps-4">
                    <li>Enterprises, Government Projects, E-commerce, SaaS, Startups, IT Services</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Format</h5>
                <p>Duration: 25 weeks (6 months) <br>
                   Batch Options: Weekday Mon-Fri 2-3 hrs/day, Weekend Sat-Sun 4-5 hrs/day<br>
                   Learning Mode: Classroom, Online live, Hybrid, Recorded sessions
                </p>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic computer knowledge</li>
                    <li>No programming experience required (we teach from scratch)</li>
                    <li>Passion for web development</li>
                    <li>Commitment to learn and practice</li>
                </ul>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode MEAN Stack Developer Certificate</li>
                    <li>MongoDB proficiency certificate</li>
                    <li>Angular mastery certificate</li>
                    <li>Node.js expertise certificate</li>
                    <li>Project completion certificates (5 projects)</li>
                    <li>Portfolio website</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>100% Job Assistance: resume building, GitHub/portfolio/LinkedIn optimization, 15+ mock interviews, coding challenges, system design basics, company-specific prep</li>
                    <li>Guaranteed minimum 10 interview calls</li>
                    <li>Hiring Network: 150+ partners, startups to enterprises, product/service-based companies</li>
                    <li>Success Rate: 80%+ students placed within 3 months, average package 4-6 LPA, highest package 12 LPA</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
