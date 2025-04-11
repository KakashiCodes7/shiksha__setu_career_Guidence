<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career Suggestion Box</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #eef5f9;
    padding: 20px;
  }
  .container {
    background-color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 800px;
  }
  .dropdown-menu {
    width: 100%;
  }
  .dropdown-item i {
    margin-right: 10px;
  }
  .roadmap {
    margin-top: 30px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
  }
  .banner-img {
    width: 100%;
    height: auto;
    object-fit: contain;
  }
</style>
</head>
<body>
  <div class="container">
    <img src="banner.jpg" alt="Career Banner" class="banner-img">
    <h2>Career Path Suggestion</h2>

    <div class="dropdown">
      <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="careerDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Your Field
      </button>
      <div class="dropdown-menu" aria-labelledby="careerDropdown">
        <h6 class="dropdown-header">Science</h6>
        <a class="dropdown-item" href="#" onclick="showSteps('Engineer')"><i class="fas fa-laptop-code"></i> Engineer</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Doctor')"><i class="fas fa-user-md"></i> Doctor</a>
        <a class="dropdown-item" href="#" onclick="showSteps('AI Specialist')"><i class="fas fa-robot"></i> AI Specialist</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Data Scientist')"><i class="fas fa-flask"></i> Data Scientist</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Commerce</h6>
        <a class="dropdown-item" href="#" onclick="showSteps('Financial Analyst')"><i class="fas fa-chart-line"></i> Financial Analyst</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Blockchain Specialist')"><i class="fas fa-cube"></i> Blockchain Specialist</a>
        <a class="dropdown-item" href="#" onclick="showSteps('E-commerce Strategist')"><i class="fas fa-store"></i> E-commerce Strategist</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Digital Marketer')"><i class="fas fa-bullhorn"></i> Digital Marketer</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Arts</h6>
        <a class="dropdown-item" href="#" onclick="showSteps('UX/UI Designer')"><i class="fas fa-paint-roller"></i> UX/UI Designer</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Content Creator')"><i class="fas fa-pen"></i> Content Creator</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Influencer Marketing Specialist')"><i class="fas fa-hashtag"></i> Influencer Marketing Specialist</a>
        <a class="dropdown-item" href="#" onclick="showSteps('Video Editor')"><i class="fas fa-video"></i> Video Editor</a>
      </div>
    </div>

    <div id="roadmap" class="roadmap mt-4 d-none">
      <h4>Career Roadmap</h4>
      <p id="careerSteps"></p>
    </div>
  </div>

<!-- Load JavaScript Libraries at the bottom -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('.dropdown-toggle').dropdown();
  });

  const careerSteps = {
    'Engineer': '1. Choose the right engineering branch.\n2. Get a bachelor\'s degree.\n3. Gain practical experience.\n4. Build a strong portfolio.\n5. Apply for relevant jobs or higher studies.',
    'Doctor': '1. Clear NEET exam.\n2. Complete MBBS degree.\n3. Internship and residency.\n4. Specialization (if required).\n5. Start your medical practice.',
    'AI Specialist': '1. Learn programming languages like Python.\n2. Study data science and machine learning.\n3. Build AI projects.\n4. Get certified.\n5. Apply for AI jobs.',
    'Data Scientist': '1. Learn data analysis and machine learning.\n2. Gain expertise in Python or R.\n3. Work on real-world projects.\n4. Get certifications.\n5. Apply for data scientist roles.',
    'Financial Analyst': '1. Earn a degree in finance or accounting.\n2. Gain experience in financial modeling.\n3. Obtain certifications (CFA, FRM).\n4. Work in investment firms or banks.\n5. Continue professional development.',
    'Blockchain Specialist': '1. Learn blockchain fundamentals.\n2. Gain proficiency in smart contracts.\n3. Get certified (CBP, Ethereum certifications).\n4. Work on blockchain projects.\n5. Apply for blockchain-related roles.',
    'E-commerce Strategist': '1. Learn e-commerce platforms (Shopify, Amazon).\n2. Understand digital marketing.\n3. Work on e-commerce projects.\n4. Optimize sales strategies.\n5. Apply for e-commerce jobs.',
    'Digital Marketer': '1. Learn SEO, PPC, and social media marketing.\n2. Get certified (Google Ads, HubSpot).\n3. Work on live projects.\n4. Build a strong portfolio.\n5. Apply for digital marketing roles.',
    'UX/UI Designer': '1. Learn design principles and tools (Figma, Adobe XD).\n2. Create wireframes and prototypes.\n3. Build a strong portfolio.\n4. Work with developers and marketers.\n5. Apply for UX/UI design jobs.',
    'Content Creator': '1. Develop content creation skills.\n2. Build an online presence.\n3. Work with brands and businesses.\n4. Monetize content through sponsorships.\n5. Grow as a digital entrepreneur.',
    'Influencer Marketing Specialist': '1. Understand social media dynamics.\n2. Learn influencer outreach strategies.\n3. Manage influencer campaigns.\n4. Analyze engagement metrics.\n5. Apply for marketing specialist roles.',
    'Video Editor': '1. Learn video editing software (Premiere Pro, Final Cut Pro).\n2. Practice editing different types of videos.\n3. Build a professional portfolio.\n4. Work on projects for brands.\n5. Apply for video editing jobs.'
  };

  function showSteps(career) {
    const steps = careerSteps[career] || 'Steps not available yet.';
    document.getElementById('careerSteps').innerText = steps;
    document.getElementById('roadmap').classList.remove('d-none');
  }
</script>

</body>
</html>
