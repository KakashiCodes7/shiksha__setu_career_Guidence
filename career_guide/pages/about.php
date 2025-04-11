<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Career Guide</title>

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        header {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: fadeIn 1s ease-in-out;
        }
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: white;
        }

        .section {
            padding: 80px 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .feature-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
        }

        .btn-custom {
            background-color: #ff9800;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
     <!-- Header -->
     <header>
        <h1> About Us </h1>
        <a href="home.php" class="btn btn-custom">Back to Home</a>
    </header>
    <section id="mission" class="section">
        <h2>Our Mission</h2>
        <p>We aim to help students make informed career decisions by providing expert guidance and valuable insights.To empower individuals to make informed career decisions,To provide accessible and comprehensive career resources.To be the leading online resource for career guidance,To create a world where everyone finds fulfilling work.What principles guide our work?-"Integrity, Accessibility, Empowerment, Innovation"</p>
    </section>
    <section id="how-it-works" class="section">
        <h2>How It Works</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature-card">
                    <i class="fas fa-search fa-2x"></i>
                    <h4>Explore</h4>
                    <p>Browse through different career options based on your field of interest.</p>
                </div>
                <div class="col-md-4 feature-card">
                    <i class="fas fa-book-open fa-2x"></i>
                    <h4>Learn</h4>
                    <p>Gain insights into job roles, salaries, required skills, and industry trends.</p>
                </div>
                <div class="col-md-4 feature-card">
                    <i class="fas fa-check-circle fa-2x"></i>
                    <h4>Decide</h4>
                    <p>Choose a career path that aligns with your strengths and interests.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <p>Email: support@careerguide.com | Phone: +91 98765 43210</p>
        
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
