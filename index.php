<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeCoder - Egyptian Baccalaureate Learning Platform</title>
    <link rel="stylesheet" href="css/system.css">
    <!-- FontAwesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <!-- Start Hero Section -->
    <section class="hero-section">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="Hi Tech Background 1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-badge">Egyptian Baccalaureate Initiative</span>
            <h1 class="hero-title">
                Start Your <span class="highlight-gold">Coding Journey</span> Today
            </h1>
            <p class="hero-subtitle">
                Welcome to <strong>BeCoder <i class="fa-solid fa-graduation-cap" style="font-size: 13px; color: #facc15;"></i></strong>, the foundational learning hub designed specifically for Baccalaureate students.
            </p>
            <p class="hero-description">
                Step into technology from absolute scratch — learn how computers think, build logical algorithms, and construct your first real project before writing complex code.
            </p>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Main Content -->
    <main class="section-container">

        <div class="main-header">
            <h2 class="section-title">Baccalaureate Introductory Tracks</h2>
            <p class="section-subtitle">Designed step-by-step for absolute beginners in Programming & Artificial Intelligence</p>
        </div>

        <!-- Category 1: IT & Society -->
      <div class="category-block">
            <h2 class="category-title">Information Technology & Society</h2>
            <div class="courses-grid">
                
                <a href="course-details.html?id=1" class="course-card">
                    <div class="course-card-media"><img src="course1.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Computer Skills</h3>
                        <p>Essential computer usage and productivity tools.</p>
                    </div>
                </a>

                <a href="course-details.html?id=2" class="course-card">
                    <div class="course-card-media"><img src="course2.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Information Technology</h3>
                        <p>Core concepts of computing and networking.</p>
                    </div>
                </a>

                <a href="course-details.html?id=3" class="course-card">
                    <div class="course-card-media"><img src="course3.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Computers & Society</h3>
                        <p>Social and ethical impacts of technology.</p>
                    </div>
                </a>

                <a href="course-details.html?id=4" class="course-card">
                    <div class="course-card-media"><img src="course4.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Digital Ethics & Literacy</h3>
                        <p>Navigating the digital world responsibly.</p>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 2: Cybersecurity -->
        <div class="category-block">
            <h2 class="category-title">Cybersecurity</h2>
            <div class="courses-grid">
                
                <a href="course-details.html?id=5" class="course-card">
                    <div class="course-card-media"><img src="course5.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Introduction to Cybersecurity</h3>
                        <p>Securing digital assets and personal data.</p>
                    </div>
                </a>

                <a href="course-details.html?id=6" class="course-card">
                    <div class="course-card-media"><img src="course6.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Information Security</h3>
                        <p>Data protection and encryption methods.</p>
                    </div>
                </a>

                <a href="course-details.html?id=7" class="course-card">
                    <div class="course-card-media"><img src="course7.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Network Security</h3>
                        <p>Securing network infrastructures and firewalls.</p>
                    </div>
                </a>

                <a href="course-details.html?id=8" class="course-card">
                    <div class="course-card-media"><img src="course8.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Ethical Hacking Essentials</h3>
                        <p>Vulnerability scanning and penetration testing.</p>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 3: Web Applications -->
        <div class="category-block">
            <h2 class="category-title">Web Applications</h2>
            <div class="courses-grid">
                
                <a href="course-details.html?id=9" class="course-card">
                    <div class="course-card-media"><img src="course9.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Web Programming</h3>
                        <p>Building dynamic web pages using front-end languages.</p>
                    </div>
                </a>

                <a href="course-details.html?id=10" class="course-card">
                    <div class="course-card-media"><img src="course10.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Web Application Development</h3>
                        <p>Advanced full-stack development techniques.</p>
                    </div>
                </a>

                <a href="course-details.html?id=11" class="course-card">
                    <div class="course-card-media"><img src="course11.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Database Systems for Web</h3>
                        <p>Integrating relational databases into web backends.</p>
                    </div>
                </a>

                <a href="course-details.html?id=12" class="course-card">
                    <div class="course-card-media"><img src="course12.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>API Development & Services</h3>
                        <p>Creating and integrating RESTful Web APIs.</p>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 4: Web Design & Media -->
        <div class="category-block">
            <h2 class="category-title">Web Design & Media</h2>
            <div class="courses-grid">
                
                <a href="course-details.html?id=13" class="course-card">
                    <div class="course-card-media"><img src="course13.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Fundamentals of Web Design</h3>
                        <p>Principles of visual design and layout structures.</p>
                    </div>
                </a>

                <a href="course-details.html?id=14" class="course-card">
                    <div class="course-card-media"><img src="course14.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>UI/UX Design</h3>
                        <p>User research, wireframing, and prototyping.</p>
                    </div>
                </a>

                <a href="course-details.html?id=15" class="course-card">
                    <div class="course-card-media"><img src="course15.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Digital Media Production</h3>
                        <p>Creating and optimizing graphics and video content.</p>
                    </div>
                </a>

                <a href="course-details.html?id=16" class="course-card">
                    <div class="course-card-media"><img src="course16.jpg" alt=""></div>
                    <div class="course-card-body">
                        <h3>Responsive Web Layouts</h3>
                        <p>Designing adaptive websites across all screens.</p>
                    </div>
                </a>

            </div>
        </div>
    </main>
    <!-- End Main Content -->

    <!-- Start Footer -->
    <footer class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Baccalaureate Students in Programming & AI.</p>
    </footer>
    <!-- End Footer -->

</body>
</html>
