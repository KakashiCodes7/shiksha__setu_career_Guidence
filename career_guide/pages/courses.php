<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Shiksha Setu</title>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <style>
        /* General Styles */
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: white;
        }

        /* Header Styling */
        header {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: fadeIn 1s ease-in-out;
        }

        /* About Section */
        #about {
            padding: 80px 20px;
        }
        
        /* Courses Section */
        .course-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .course-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-align: center;
        }

        .course-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .course-card p {
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Hover Effects */
        .course-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
        }

        /* Button Styling */
        .btn-primary {
            background-color: #ff9800;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: 0.3s ease;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Career List Section */
        .career-list {
            display: none; /* Initially hidden */
            margin-top: 10px;
            text-align: left;
            color: black;
            background: white;
            padding: 15px;
            border-radius: 5px;
            list-style: none;
            font-size: 1rem;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .course-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Shiksha Setu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item"><a class="nav-link" href="new.php">Explore</a></li>
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section id="about" class="hero">
        <h2>Explore the Career Oppurtunities</h2>
        <p>Shiksha Setu is a platform designed to help students explore various career opportunities across different fields. Whether you are from Science, Commerce, or Arts, we provide insights to guide you towards your best career path.Exploring career options involves researching careers, assessing your interests, and developing a plan to achieve your goals.Consider what you enjoy doing, what motivates you, and what you're good at</p>
    </section>
    <!-- Courses Section -->
    <section id="courses">
        <h2>Explore Courses</h2>
        <div class="course-container">
            <!-- Science Card -->
            <div class="course-card">
                <h3><i class="fas fa-flask"></i> Science</h3>
                <p>Discover opportunities in Engineering, Medicine, Research, and more.</p>
                <button class="btn btn-primary" onclick="toggleCareer('science-careers')">Learn More</button>
                <ul id="science-careers" class="career-list">
                    <li>🧪 Engineering (Mechanical, Electrical, Computer Science, etc.)</li>
                    <li>🩺 Medicine (MBBS, Dentistry, Nursing, Pharmacy)</li>
                    <li>🔬 Research Scientist</li>
                    <li>💻 Data Science & AI</li>
                    <li>🚀 Aerospace & Aviation</li>
                    <li>🏥 Biomedical Engineering</li>
                    <li>🔬 Nanotechnology</li>
                    <li>🌍 Environmental Science & Sustainability</li>
                    <li>🧬 Genetic Engineering & Biotechnology</li>
                    <li>🤖 Robotics & Automation</li>
                    <li>🏎️ Automotive Engineering (EV & Hybrid Technology)</li>
                    <li>🌌 Astrophysics & Space Science</li>
                    <li>💊 Pharmaceutical Science & Drug Research</li>
                    <li>🕵️ Cybersecurity & Ethical Hacking</li>
                    <li>🏗️ Civil Engineering & Smart Cities Development</li>
                </ul>
            </div>
            <!-- Commerce Card -->
            <div class="course-card">
                <h3><i class="fas fa-chart-line"></i> Commerce</h3>
                <p>Explore careers in Finance, Accounting, Business Management, and Entrepreneurship.</p>
                <button class="btn btn-primary" onclick="toggleCareer('commerce-careers')">Learn More</button>
                <ul id="commerce-careers" class="career-list">
                <li>📊 Chartered Accountant (CA)</li>
                <li>🏦 Investment Banking</li>
                <li>💰 Financial Analyst</li>
                <li>🛒 Business Management & Entrepreneurship</li>
                <li>📈 Digital Marketing & SEO</li>
                <li>🖥️ Business Analytics & Data Science</li>
                <li>🔗 Blockchain & Cryptocurrency</li>
                <li>📦 Supply Chain & Logistics Management</li>
                <li>⚖️ Corporate Law & Compliance</li>
                <li>💳 FinTech & Financial Innovation</li>
                </ul>
            </div>
            <!-- Arts Card -->
            <div class="course-card">
                <h3><i class="fas fa-palette"></i> Arts</h3>
                <p>Find your path in Literature, Media, Fine Arts, and Social Sciences.</p>
                <button class="btn btn-primary" onclick="toggleCareer('arts-careers')">Learn More</button>
                <ul id="arts-careers" class="career-list">
                <li>🎨 Graphic Design & Visual Arts</li>
                <li>🎬 Filmmaking & Video Production</li>
                <li>📝 Content Writing & Blogging</li>
                <li>🎭 Performing Arts (Acting, Theatre, Dance)</li>
                <li>🎵 Music Production & Sound Design</li>
                <li>🖌️ UX/UI Design</li>
                <li>📷 Photography & Photojournalism</li>
                <li>📱 Social Media Management & Influencer Marketing</li>
                <li>📰 Journalism & Mass Communication</li>
                <li>📚 Publishing & Editorial Services</li>
                </ul>
            </div>
        </div>
        <br>
        
    </section>
    <section class="container mt-5">
        <h2 class="text-center fw-bold text-dark">Trending Skills & Courses</h2>
        <p class="text-center text-muted">Stay updated with the latest industry-relevant skills.</p>
        <div class="marquee bg-dark text-light p-3 rounded">
            <span>🔹 Artificial Intelligence | 🔹 Cybersecurity | 🔹 Blockchain | 🔹 Data Science | 🔹 UI/UX Design | 🔹 Digital Marketing | 🔹 Financial Analysis | 🔹 Content Creation | 🔹 Cloud Computing | 🔹 Ethical Hacking</span>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Career Toggle -->
    <script>
        function toggleCareer(id) {
            var careerList = document.getElementById(id);
            if (careerList.style.display === "none" || careerList.style.display === "") {
                careerList.style.display = "block";
            } else {
                careerList.style.display = "none";
            }
        }
    </script>

</body>
</html>
