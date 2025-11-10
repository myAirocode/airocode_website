@extends('layouts.app')

@section('title', 'Data Science Stack Development Course | Airocode')
@section('meta_description', 'Learn Data Science Stack Development at Airocode - master Python, machine learning, big data & deployment with real projects and placement support.')
@section('meta_keywords', 'data science stack development course, data science full stack, machine learning training India, big data analytics course, deployment of ML models, data engineering bootcamp')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
    <div class="container-xxl">
        <div class="container">
            
            <h4 class="bg-white text-start text-primary pe-3">Data Science Stack Development Course at Airocode</h4>

            <p class="mb-4">
                Airocode’s <strong>Data Science Stack Development Course</strong> provides complete, hands-on learning in machine learning, data engineering, big data analytics, and MLOps. 
                You’ll master Python, Pandas, scikit-learn, TensorFlow, Hadoop, and Spark while working on real-world datasets and deployment projects. 
                Our industry mentors guide you through every step — from model building to deployment and career preparation.
            </p>

            <h5 class="text-primary mb-3">Why Choose Our Data Science Stack Course</h5>
            <ul class="mb-4 ps-4">
                <li>Industry-experienced instructors</li>
                <li>Comprehensive coverage: Python, ML, Big Data, and MLOps</li>
                <li>Hands-on real-world projects with placement support</li>
                <li>Internship and cloud deployment exposure</li>
            </ul>

            <h5 class="text-primary mb-3">What You Will Learn (Curriculum Overview)</h5>
            <p>The curriculum covers every layer of the modern data science pipeline — from data collection to deployment:</p>
            <ul class="mb-4 ps-4">
                <li>Data collection, cleaning, and preprocessing</li>
                <li>Machine Learning and Deep Learning fundamentals</li>
                <li>Data engineering and Big Data with Hadoop/Spark</li>
                <li>MLOps and deployment techniques</li>
                <li>Visualization and interactive dashboards</li>
            </ul>

            <h5 class="text-primary mb-3">Project-Based Learning & Real-World Deployments</h5>
            <p>
                During the course, learners build and deploy projects that simulate real industry environments. 
                Each project focuses on critical skills such as feature engineering, model optimization, and cloud-based deployment. 
                Example projects include:
            </p>
            <ul class="mb-4 ps-4">
                <li>Customer churn prediction with scikit-learn</li>
                <li>Big Data analytics pipeline using PySpark and Hadoop</li>
                <li>Deep learning image classifier using TensorFlow/Keras</li>
                <li>Data engineering workflow with Airflow and PostgreSQL</li>
                <li>Deployed ML model APIs using FastAPI and Docker</li>
            </ul>

            <h5 class="text-primary mb-3">Career Path & Placement Support</h5>
            <p>
                After completing this course, you’ll be equipped for multiple data-centric roles across industries. 
                Airocode’s placement support team provides one-on-one career mentoring, resume guidance, and mock interviews. 
                Career paths include:
            </p>
            <ul class="mb-4 ps-4">
                <li>Data Scientist</li>
                <li>Machine Learning Engineer</li>
                <li>Data Engineer</li>
                <li>AI Specialist</li>
            </ul>

            <h5 class="text-primary mb-3">Who Should Enroll & How to Apply</h5>
            <p>
                This program is ideal for aspiring data professionals, software engineers, or recent graduates seeking a data-driven career. 
                Basic Python programming knowledge is recommended. 
                You can apply directly through our course portal below:
            </p>
        </div>
    </div>
    <!-- Course Overview End -->

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Data Science Stack Development Course",
        "provider": {
            "@type": "Organization",
            "name": "Airocode",
            "url": "https://airocode.com"
        },
        "description": "An end-to-end data science stack development course covering data engineering, machine learning, big data analytics and deployment.",
        "educationalCredentialAwarded": "Airocode Certified Data Science Stack Developer",
        "url": "https://airocode.com/courses/data-science-stack-development",
        "coursePrerequisites": "Basic programming knowledge in Python"
    }
    </script>

@endsection
