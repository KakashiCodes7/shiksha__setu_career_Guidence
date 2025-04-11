<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiksha Setu | Career Guide</title>

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    
    <style>
        /* General Styles */
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: white;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.1rem;
            margin-right: 15px;
            transition: 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff9800 !important;
        }

        /* Header Styling */
        header {
            padding: 20px;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Hero Section */
        .hero {
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeIn 1s ease-in-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0.9;
        }


        /* Career Categories */
        .categories {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }

        .category {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .category:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
        }

        /* Testimonials Section */
        .testimonials {
            margin-top: 60px;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Contact Section */
        .contact {
            margin-top: 80px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        /* Footer */
        .footer {
            margin-top: 40px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            font-size: 0.9rem;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .categories {
                flex-direction: column;
                align-items: center;
            }
        }
        .btn-custom {
            background-color: #ff9800;
            border: none;
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
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

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <h1>Find Your Dream Career</h1>
        <p>Discover the best career paths based on your interests and skills.</p>
        <a href="new.php" class="btn btn-custom">Explore</a>
    </section>
    <!-- Career Categories -->
    <section id="categories" class="categories">
        <div class="category">
            <h3><i class="fas fa-flask"></i> Science</h3>
            <p>Engineering, Medicine, Research, and more.</p>
        </div>
        <div class="category">
            <h3><i class="fas fa-chart-line"></i> Commerce</h3>
            <p>Finance, Accounting, Business Management.</p>
        </div>
        <div class="category">
            <h3><i class="fas fa-palette"></i> Arts</h3>
            <p>Media, Fine Arts, Social Sciences.</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
        <h2>What Students Say</h2>
        <p class="testimonial">"Career Guide helped me find the best career path suited for my interests!" - Rahul</p>
        <p class="testimonial">"The platform is very informative and easy to use. Highly recommend!" - Ananya</p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <label>Shiksha Setu- The Career Guide "</label>
        <label> E-mail: Shiksha_info@gmail.com"</label>
        <br><br>
        <label>HERE U CAN:</label>
        <label>Feel Free To explore More"</label>
        <br>
        <button class="btn btn-primary">HAPPY LEARNING!</button>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Career Guide. All rights reserved.</p>
        <p>Follow us on 
            <a href="#"><i class="fab fa-facebook"></i></a> 
            <a href="#"><i class="fab fa-twitter"></i></a> 
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
