@extends('layouts.app')

@section('title', 'AI ML Full-Stack Development Course | Machine Learning Web Applications Training')
@section('meta_description', 'Master AI/ML full-stack development with Airocode. Learn Python, machine learning, deep learning, AI model deployment, and build intelligent web applications.')
@section('meta_keywords', 'AI ML course, machine learning development, AI full stack, deep learning training, AI application development, web development, Airocode')

@section('content')

    <!-- Header Start -->
        @include('components.breadcrumb')
    <!-- Header End -->

    <!-- Course Overview Start -->
        <div class="container-xxl">
            <div class="container">
                <h4 class="bg-white text-start text-primary pe-3">AI & ML Full-Stack Development - Build Intelligent Applications with Machine Learning</h4>

                <p class="mb-4"><b>Why AI/ML Full-Stack Development?</b><br>
                    AI and ML are transforming industries from healthcare to finance and retail. This course equips you to build production-ready AI applications, combining ML expertise with full-stack development skills for real-world impact.
                </p>

                <h5 class="text-primary mb-3">Comprehensive AI/ML Full-Stack Curriculum</h5>

                <p><b>Phase 1: Python Programming & Mathematics (Weeks 1-4)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Python fundamentals, OOP, file handling, modules, NumPy, Pandas, data cleaning & preprocessing</li>
                    <li>Mathematics for ML: linear algebra, calculus, statistics, probability, hypothesis testing, correlation & regression</li>
                </ul>

                <p><b>Phase 2: Data Analysis & Visualization (Weeks 5-7)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Exploratory data analysis (EDA), missing data handling, outlier detection, feature engineering</li>
                    <li>Visualization: Matplotlib, Seaborn, Plotly, dashboards, data storytelling, visualization best practices</li>
                </ul>

                <p><b>Phase 3: Machine Learning Fundamentals (Weeks 8-13)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Supervised Learning: Linear & Logistic Regression, Decision Trees, Random Forests, SVM, KNN, Naive Bayes, Gradient Boosting</li>
                    <li>Unsupervised Learning: K-Means, Hierarchical, DBSCAN, PCA, dimensionality reduction, association rules</li>
                    <li>ML Pipeline: Scikit-learn, train-test split, feature scaling, model selection, persistence, pipeline creation</li>
                </ul>

                <p><b>Phase 4: Deep Learning (Weeks 14-17)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Neural Networks (ANN): activation, backpropagation, gradient descent, loss functions</li>
                    <li>Frameworks: TensorFlow, Keras, PyTorch; model building, evaluation</li>
                    <li>CNNs: image processing, convolution/pooling, transfer learning, pre-trained models, classification, object detection</li>
                    <li>RNNs: sequential data, LSTM/GRU, NLP, sentiment analysis, text classification</li>
                </ul>

                <p><b>Phase 5: Natural Language Processing (Weeks 18-19)</b></p>
                <ul class="mb-3 ps-4">
                    <li>NLP: text preprocessing, tokenization, stemming, lemmatization, Bag of Words, TF-IDF, embeddings</li>
                    <li>Advanced NLP: NER, text classification, sentiment analysis, chatbot basics, transformers, BERT, language models</li>
                </ul>

                <p><b>Phase 6: Frontend Development (Weeks 20-23)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Web fundamentals: HTML5, CSS3, JavaScript ES6+, responsive design, Bootstrap/Tailwind</li>
                    <li>React.js for AI Applications: components/hooks, state management, API integration, file uploads, real-time updates, data visualization with Chart.js & D3.js, building AI UIs</li>
                </ul>

                <p><b>Phase 7: Backend Development (Weeks 24-27)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Flask: routing, views, templating (Jinja2), REST APIs, file uploads, ML model endpoints, error handling</li>
                    <li>FastAPI: async programming, Pydantic models, API documentation, authentication, background tasks</li>
                    <li>Model Deployment: saving/loading models, prediction APIs, input validation, batch & real-time predictions, versioning, A/B testing</li>
                </ul>

                <p><b>Phase 8: Database & MLOps (Weeks 28-29)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Databases: PostgreSQL, MongoDB, Redis, vector databases; optimization, storing predictions/logs</li>
                    <li>MLOps: DVC model versioning, MLflow tracking, model monitoring, retraining pipelines, Docker, serving, continuous training</li>
                </ul>

                <p><b>Phase 9: Cloud & Deployment (Week 30)</b></p>
                <ul class="mb-3 ps-4">
                    <li>Cloud: AWS SageMaker, Azure ML, Google Cloud AI; serverless ML APIs, model deployment</li>
                    <li>Production: Docker, Kubernetes basics, CI/CD, monitoring, scaling, cost optimization</li>
                </ul>

                <p><b>Phase 10: Advanced Projects (Weeks 31-36)</b></p>
                <ul class="mb-4 ps-4">
                    <li>Project 1: Sentiment Analysis Web App (Python, NLP, Flask, React, MongoDB, LSTM/BERT)</li>
                    <li>Project 2: Image Classification App (CNN, TensorFlow, Flask, React, Transfer Learning)</li>
                    <li>Project 3: Recommendation System (Collaborative/content-based filtering, Flask, React, MongoDB)</li>
                    <li>Project 4: Chatbot Application (NLP, Transformers, FastAPI, React, Socket.io)</li>
                    <li>Project 5: Predictive Analytics Dashboard (Time series, Flask, React, PostgreSQL, Plotly)</li>
                    <li>Project 6: Face Recognition System (CNN, OpenCV, Flask, React)</li>
                    <li>Project 7: AI-Powered Content Generator (GPT, FastAPI, React)</li>
                    <li>Project 8: Capstone AI Application (complex AI-powered full-stack application)</li>
                </ul>

                <h5 class="text-primary mb-3">Technology Stack</h5>
                <p><b>Machine Learning:</b> Python 3.x, Scikit-learn, TensorFlow, Keras, PyTorch, XGBoost, LightGBM, NLTK, spaCy, Hugging Face Transformers, OpenCV</p>
                <p><b>Data Processing:</b> NumPy, Pandas, Matplotlib, Seaborn, Plotly, Jupyter Notebooks, preprocessing libraries</p>
                <p><b>Frontend:</b> React.js, Chart.js, D3.js, Material-UI, Axios</p>
                <p><b>Backend:</b> Flask, FastAPI, Django (optional), REST APIs, WebSocket</p>
                <p><b>Database:</b> PostgreSQL, MongoDB, Redis, Vector databases (Pinecone, Weaviate)</p>
                <p><b>MLOps & Deployment:</b> Docker, MLflow, DVC, AWS SageMaker, Azure ML, Google Cloud AI, Kubernetes basics</p>

                <h5 class="text-primary mb-3">Career Opportunities</h5>
                <ul class="mb-4 ps-4">
                    <li>ML Engineer</li>
                    <li>AI Full-Stack Developer</li>
                    <li>Data Scientist with deployment skills</li>
                    <li>ML Operations Engineer</li>
                    <li>AI Application Developer</li>
                    <li>Computer Vision Engineer</li>
                    <li>NLP Engineer</li>
                    <li>AI Product Developer</li>
                </ul>

                <h5 class="text-primary mb-3">Industries</h5>
                <ul class="mb-4 ps-4">
                    <li>AI/ML Companies, FinTech, Healthcare, E-commerce, Automotive, Security, EdTech, Marketing</li>
                </ul>

                <h5 class="text-primary mb-3">Course Duration & Format</h5>
                <p>Duration: 36 weeks (9 months) <br>
                   Batch Options: Weekday Mon-Fri 2-3 hrs/day, Weekend Sat-Sun 5-6 hrs/day, Intensive fast-track<br>
                   Learning Mode: Classroom with GPU, Online live, Hybrid, Recorded lectures
                </p>

                <h5 class="text-primary mb-3">Prerequisites</h5>
                <ul class="mb-4 ps-4">
                    <li>Basic programming knowledge</li>
                    <li>High school mathematics</li>
                    <li>Logical thinking and problem-solving</li>
                    <li>Passion for AI and technology</li>
                    <li>No prior ML experience required</li>
                </ul>

                <h5 class="text-primary mb-3">Certification</h5>
                <ul class="mb-4 ps-4">
                    <li>Airocode AI/ML Full-Stack Developer Certificate</li>
                    <li>Machine Learning Specialist Certificate</li>
                    <li>Deep Learning Proficiency Certificate</li>
                    <li>Project completion certificates (8 projects)</li>
                    <li>Research paper guidance (optional)</li>
                    <li>Portfolio of AI applications</li>
                </ul>

                <h5 class="text-primary mb-3">Placement Support</h5>
                <ul class="mb-4 ps-4">
                    <li>Specialized AI job placement: resume building, ML interview prep, math/stat revision, system design, 25+ mock interviews</li>
                    <li>Portfolio showcasing and direct referrals to AI companies</li>
                    <li>Kaggle competitions and startup connections</li>
                    <li>Hiring Network: 100+ AI-focused partners, startups, product companies, research labs, big tech AI divisions</li>
                    <li>Placement Stats: 80%+ placement, average package 7-12 LPA, highest package 25 LPA</li>
                </ul>

            </div>
        </div>
    <!-- Course Overview End -->

@endsection