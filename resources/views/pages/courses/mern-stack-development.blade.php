@extends('layouts.app')

@section('title', 'MERN Stack Development Course | MongoDB, Express, React, Node.js Training')
@section('meta_description', 'Master MERN stack development with Airocode. Learn MongoDB, Express.js, React, Node.js, full-stack JavaScript, and build modern web applications.')
@section('meta_keywords', 'MERN stack course, MongoDB training, Express React Node, full stack JavaScript, web development, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">MERN Stack Development Course - Master Full-Stack JavaScript Development</h4>

                <p class="mb-4"><b>Why MERN Stack?</b><br>
                    The MERN stack (MongoDB, Express.js, React.js, Node.js) allows developers to use JavaScript across the entire stack—from database to frontend. MERN developers are highly sought-after, powering applications for companies like Netflix, LinkedIn, Uber, and startups worldwide.
                </p>

                <h5 class="text-primary mb-3">Comprehensive MERN Stack Curriculum</h5>

                <p><b>Phase 1: JavaScript Mastery (Weeks 1-3)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Core JS: syntax, variables, control structures, functions, arrays, objects, ES6+, Promises, async/await, error handling, modules</li>
                    <li>Advanced JS: closures, prototypes, higher-order functions, functional programming, event loop, regex, JSON, local/session storage</li>
                </ul>

                <p><b>Phase 2: Frontend with React.js (Weeks 4-9)</b></p>
                <ul class="mb-3 ps-4">
                    <li>HTML5, CSS3, Flexbox/Grid, Bootstrap/Tailwind, animations</li>
                    <li>React fundamentals: components, JSX, props/state, hooks (useState, useEffect, useContext, useReducer, custom hooks), React Router, code splitting, lazy loading, error boundaries, performance optimization</li>
                    <li>State Management: Context API, Redux, Redux Toolkit, middleware, Thunk, DevTools</li>
                    <li>UI Libraries: Material-UI, Ant Design, Styled Components, CSS Modules</li>
                </ul>

                <p><b>Phase 3: Backend with Node.js & Express.js (Weeks 10-15)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Node.js fundamentals: event-driven, non-blocking I/O, modules, file system, streams, debugging</li>
                    <li>Express.js: app structure, routing, middleware, request/response handling, template engines, error handling, modular routes</li>
                    <li>RESTful API: HTTP methods, status codes, request validation, error handling, API versioning, CORS, Swagger docs</li>
                    <li>Authentication & Authorization: JWT, bcrypt, session management, OAuth2, role-based access, protected routes, security best practices</li>
                </ul>

                <p><b>Phase 4: Database with MongoDB (Weeks 16-19)</b></p>
                <ul class="mb-3 ps-4">
                    <li>MongoDB: NoSQL concepts, collections/documents, CRUD, indexes, aggregation, data modeling</li>
                    <li>Mongoose ODM: schema, models, validation, methods/statics, virtuals, middleware, population, plugins</li>
                    <li>Advanced MongoDB: complex queries, transactions, performance, cloud deployment (MongoDB Atlas)</li>
                </ul>

                <p><b>Phase 5: Full-Stack Integration (Weeks 20-22)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Frontend-backend API integration with Axios, Fetch, handling responses, error/loading states, file/image uploads, real-time with Socket.io, authentication flow</li>
                    <li>Advanced features: pagination, search, filtering, infinite scroll, notifications, chat, email/SMS integration, payment gateways, third-party APIs, cron jobs</li>
                </ul>

                <p><b>Phase 6: Testing & Quality (Week 23)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Unit testing with Jest, React Testing Library, hooks testing, integration/API testing, TDD, code coverage</li>
                    <li>Code quality: ESLint, Prettier, Git hooks, pre-commit checks, review practices</li>
                </ul>

                <p><b>Phase 7: Deployment & DevOps (Weeks 24-25)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Version control: Git, GitHub workflows, branching, pull requests</li>
                    <li>Deployment: frontend (Netlify/Vercel), backend (Heroku/Render), full-stack deployment, environment variables, MongoDB Atlas, SSL, CI/CD basics</li>
                    <li>Docker: containerization, Dockerfile, Docker Compose, multi-container apps</li>
                </ul>

                <p><b>Phase 8: Advanced Topics (Week 26)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Performance optimization: frontend/backend, DB queries, caching, CDN, image optimization, lazy loading, code splitting, compression</li>
                    <li>Security: OWASP Top 10, XSS, CSRF, NoSQL injection, secure headers, input validation, rate limiting, Helmet.js, environment security</li>
                    <li>Scalability: horizontal/vertical scaling, load balancing, microservices intro, message queues, caching strategies, DB replication</li>
                </ul>

                <p><b>Phase 9: Capstone Project (Weeks 27-30)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Build a complete production-ready MERN stack application with all modern features</li>
                </ul>

                <h5 class="text-primary mb-3">Projects Portfolio</h5>
                <ul class="mb-4 ps-4">
                    <li>Todo Application: CRUD with authentication</li>
                    <li>Blog Platform: rich text editor, comments, search, pagination</li>
                    <li>E-Commerce Store: product catalog, cart, checkout, payment, admin dashboard</li>
                    <li>Social Media Application: posts, comments, likes, friends, real-time chat</li>
                    <li>Video Streaming Platform: video upload/streaming, channels, subscriptions</li>
                    <li>Real-Time Chat Application: one-on-one and group chats, file sharing</li>
                    <li>Capstone Application: custom MERN app solving a real-world problem</li>
                </ul>

                <h5 class="text-primary mb-3">Technology Stack</h5>
                <p><b>Frontend:</b> React.js 18+, Redux Toolkit, React Router v6, Axios, Material-UI/Ant Design, Styled Components, React Hook Form, Chart.js/Recharts</p>
                <p><b>Backend:</b> Node.js (LTS), Express.js 4+, JWT, bcrypt, Multer, Socket.io, Nodemailer, Express Validator</p>
                <p><b>Database:</b> MongoDB 5+, Mongoose, MongoDB Atlas, Redis</p>
                <p><b>Tools & DevOps:</b> VS Code, Git/GitHub, Postman/Insomnia, MongoDB Compass, Chrome/React/Redux DevTools, Docker, Netlify/Vercel, Heroku/Render</p>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>MERN Stack Developer</li>
                    <li>Full-Stack JavaScript Developer</li>
                    <li>React Developer</li>
                    <li>Node.js Developer</li>
                    <li>Frontend Developer</li>
                    <li>Backend Developer</li>
                    <li>JavaScript Engineer</li>
                </ul>

                <h5 class="text-primary mb-3">Industries</h5>
                <ul class="mb-4 ps-4">
                    <li>Startups, E-commerce, Social media, SaaS, FinTech, EdTech, Media & Entertainment</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Format</h5>
                <p>Duration: 30 weeks (7.5 months) <br>
                   Batch Options: Weekday Mon-Fri 2-3 hrs/day, Weekend Sat-Sun 4-5 hrs/day, Fast-track intensive daily sessions<br>
                   Learning Mode: Classroom, Online live, Hybrid, Recorded sessions for review
                </p>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic computer knowledge</li>
                    <li>No programming experience required (we teach from scratch)</li>
                    <li>Passion for web development</li>
                    <li>Commitment to practice and learn</li>
                </ul>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode MERN Stack Developer Certificate</li>
                    <li>MongoDB proficiency certificate</li>
                    <li>React.js mastery certificate</li>
                    <li>Node.js expertise certificate</li>
                    <li>Project completion certificates (7 projects)</li>
                    <li>Portfolio website</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>100% job assistance: resume building, GitHub/portfolio/LinkedIn optimization, 20+ mock interviews, DSA in JS, coding challenges, system design basics, company-specific prep, salary negotiation guidance</li>
                    <li>Minimum 12 interview calls guaranteed</li>
                    <li>Hiring Network: 200+ partners, startups to enterprises, product/service-based companies, remote/freelance opportunities</li>
                    <li>Success Rate: 85%+ students placed within 3 months, average package 4.5-7 LPA, highest package 15 LPA</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection
