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
                
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course1.jpg" alt="Computer Skills">
                    </div>
                    <div class="course-card-body">
                        <h3>Computer Skills</h3>
                        <p>Essential computer usage and productivity tools for academic and professional success.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course2.jpg" alt="Information Technology">
                    </div>
                    <div class="course-card-body">
                        <h3>Information Technology</h3>
                        <p>Core concepts of computing, networking, and modern hardware systems.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course3.jpg" alt="Computers & Society">
                    </div>
                    <div class="course-card-body">
                        <h3>Computers & Society</h3>
                        <p>Exploring the social, ethical, and legal impacts of computer technology.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course4.jpg" alt="Digital Ethics & Literacy">
                    </div>
                    <div class="course-card-body">
                        <h3>Digital Ethics & Literacy</h3>
                        <p>Navigating the digital world responsibly with privacy and security principles.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 2: Cybersecurity -->
        <div class="category-block">
            <h2 class="category-title">Cybersecurity</h2>
            <div class="courses-grid">
                
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course5.jpg" alt="Introduction to Cybersecurity">
                    </div>
                    <div class="course-card-body">
                        <h3>Introduction to Cybersecurity</h3>
                        <p>Fundamental concepts of securing digital assets, networks, and personal data.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course6.jpg" alt="Information Security">
                    </div>
                    <div class="course-card-body">
                        <h3>Information Security</h3>
                        <p>Data protection methods, encryption techniques, and security management protocols.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course7.jpg" alt="Network Security">
                    </div>
                    <div class="course-card-body">
                        <h3>Network Security</h3>
                        <p>Securing network infrastructures, firewalls, and threat mitigation strategies.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course8.jpg" alt="Ethical Hacking Essentials">
                    </div>
                    <div class="course-card-body">
                        <h3>Ethical Hacking Essentials</h3>
                        <p>Understanding vulnerability scanning, penetration testing, and defense mechanisms.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 3: Web Applications -->
        <div class="category-block">
            <h2 class="category-title">Web Applications</h2>
            <div class="courses-grid">
                
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course9.jpg" alt="Web Programming">
                    </div>
                    <div class="course-card-body">
                        <h3>Web Programming</h3>
                        <p>Building dynamic web pages using core front-end languages and standards.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course10.jpg" alt="Web Application Development">
                    </div>
                    <div class="course-card-body">
                        <h3>Web Application Development</h3>
                        <p>Advanced full-stack development techniques for scalable web software.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course11.jpg" alt="Database Systems for Web">
                    </div>
                    <div class="course-card-body">
                        <h3>Database Systems for Web</h3>
                        <p>Integrating relational and NoSQL databases into web application backends.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course12.jpg" alt="API Development & Services">
                    </div>
                    <div class="course-card-body">
                        <h3>API Development & Services</h3>
                        <p>Creating and integrating RESTful Web APIs and backend microservices.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

            </div>
        </div>

        <!-- Category 4: Web Design & Media -->
        <div class="category-block">
            <h2 class="category-title">Web Design & Media</h2>
            <div class="courses-grid">
                
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course13.jpg" alt="Fundamentals of Web Design">
                    </div>
                    <div class="course-card-body">
                        <h3>Fundamentals of Web Design</h3>
                        <p>Principles of visual design, layout structures, and user interface aesthetics.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course14.jpg" alt="UI/UX Design">
                    </div>
                    <div class="course-card-body">
                        <h3>UI/UX Design</h3>
                        <p>User research, wireframing, prototyping, and crafting seamless user experiences.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course15.jpg" alt="Digital Media Production">
                    </div>
                    <div class="course-card-body">
                        <h3>Digital Media Production</h3>
                        <p>Creating and optimizing graphics, audio, and video content for the web.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <img src="course16.jpg" alt="Responsive Web Layouts">
                    </div>
                    <div class="course-card-body">
                        <h3>Responsive Web Layouts</h3>
                        <p>Designing adaptive websites optimized across mobile, tablet, and desktop screens.</p>
                    </div>
                    <div class="course-card-cta">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
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
