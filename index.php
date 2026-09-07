<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>BeCoder - Egyptian Baccalaureate Learning Platform</title>
    <link rel="stylesheet" href="css/system.css">
</head>
<body>

        <?php include 'navbar.php'; ?>

    <div class="hero-section">
        <video autoplay loop muted playsinline class="hero-video">
            <source src="Hi Tech Background 1.mp4">
        </video>
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <span class="hero-badge">Egyptian Baccalaureate Initiative</span>
            
            <h1 class="hero-title">
                Start Your <span class="highlight-gold">Coding Journey</span> Today
            </h1>

            <p class="hero-subtitle">
                Welcome to BeCoder 🎓, the foundational learning hub designed specifically for Baccalaureate students.
            </p>

            <p class="hero-description">
                Step into technology from absolute scratch — learn how computers think, build logical algorithms, and construct your first real project before writing complex code.
            </p>
        </div>
    </div>

    <div class="courses-section section-container">
        <h2 class="section-title">Baccalaureate Introductory Tracks</h2>
        <p class="section-subtitle">Designed step-by-step for absolute beginners in Programming & Artificial Intelligence</p>

        <div class="courses-grid">

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&auto=format&fit=crop" alt="How Computers Work">
                </div>
                <div class="course-card-body">
                    <h3>1. How Computers Work</h3>
                    <p>Discover hardware basics, CPU logic, binary systems, and how instructions execute.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=500&auto=format&fit=crop" alt="Algorithmic Thinking">
                </div>
                <div class="course-card-body">
                    <h3>2. Algorithmic Thinking</h3>
                    <p>Learn computational logic, flowcharts, and step-by-step problem-solving skills.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1526379095098-d400fd0bf935?w=500&auto=format&fit=crop" alt="Python Fundamentals">
                </div>
                <div class="course-card-body">
                    <h3>3. Python for Beginners</h3>
                    <p>Write your first code using clean Python syntax, variables, conditions, and simple loops.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=500&auto=format&fit=crop" alt="Web Basics">
                </div>
                <div class="course-card-body">
                    <h3>4. Web Foundations</h3>
                    <p>Introduction to the Internet, simple HTML5 page structure, and CSS styling basics.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="licensed-image.jpg" alt="Intro to AI">
                </div>
                <div class="course-card-body">
                    <h3>5. Intro to Artificial Intelligence</h3>
                    <p>Understand what AI is, how smart systems learn, and daily practical AI applications.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=500&auto=format&fit=crop" alt="Students Coding">
                </div>
                <div class="course-card-body">
                    <h3>6. Visual Block Programming</h3>
                    <p>Build interactive projects and games visually to master logic concepts easily.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=500&auto=format&fit=crop" alt="Cyber Safety">
                </div>
                <div class="course-card-body">
                    <h3>7. Digital Safety & Literacy</h3>
                    <p>Essential cyber hygiene, password security, and responsible technology usage.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

            <a href="register.html" class="course-card">
                <div class="course-card-media">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&auto=format&fit=crop" alt="Capstone Project">
                </div>
                <div class="course-card-body">
                    <h3>8. Baccalaureate First Project</h3>
                    <p>Combine what you learned to build your very first real-world student computing project.</p>
                </div>
                <div class="course-card-cta">
                    <span>View Track</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>
                </div>
            </a>

        </div>
    </div>

    <div class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Baccalaureate Students in Programming & AI.</p>
    </div>

</body>
</html>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeCoder - Baccalaureate Tracks</title>
    <link rel="stylesheet" href="system.css">
    <!-- FontAwesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Start Navbar -->
    <nav class="navbar">
        <div class="left-header">
            <!-- Logo with Icon AFTER Text -->
            <a href="#" class="logo">
                BeCoder <i class="fa-solid fa-graduation-cap"></i>
            </a>
            <div class="search-container">
                <input type="text" placeholder="Search Baccalaureate tracks..." class="search-input">
            </div>
        </div>
        <div class="right-header">
            <a href="#" class="btn-login">Login</a>
            <a href="#" class="btn-register">Sign Up</a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Hero Section -->
    <section class="hero-section">
        <!-- Video Background -->
        <video autoplay muted loop playsinline class="hero-video">
            <!-- ============================================== -->
            <!--   PUT VIDEO LINK/PATH HERE (مكان لينك الفيديو)  -->
            <!-- ============================================== -->
            <source src="Hi Tech Background 1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Start Your Today</h1>
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

        <!-- Section Title & Subtitle Below Video -->
        <div class="main-header">
            <h2 class="section-title">Baccalaureate Introductory Tracks</h2>
            <p class="section-subtitle">Designed step-by-step for absolute beginners in Programming & Artificial Intelligence</p>
        </div>

        <!-- Category 1: IT & Society -->
        <div class="category-block">
            <h2 class="category-title">Information Technology & Society</h2>
            <div class="courses-grid">
                
                <!-- Course 1 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 1)          -->
                        <!-- ============================================== -->
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

                <!-- Course 2 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 2)          -->
                        <!-- ============================================== -->
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

                <!-- Course 3 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 3)          -->
                        <!-- ============================================== -->
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

                <!-- Course 4 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 4)          -->
                        <!-- ============================================== -->
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
                
                <!-- Course 1 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 5)          -->
                        <!-- ============================================== -->
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

                <!-- Course 2 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 6)          -->
                        <!-- ============================================== -->
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

                <!-- Course 3 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 7)          -->
                        <!-- ============================================== -->
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

                <!-- Course 4 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 8)          -->
                        <!-- ============================================== -->
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
                
                <!-- Course 1 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 9)          -->
                        <!-- ============================================== -->
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

                <!-- Course 2 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 10)         -->
                        <!-- ============================================== -->
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

                <!-- Course 3 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 11)         -->
                        <!-- ============================================== -->
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

                <!-- Course 4 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 12)         -->
                        <!-- ============================================== -->
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
                
                <!-- Course 1 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 13)         -->
                        <!-- ============================================== -->
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

                <!-- Course 2 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 14)         -->
                        <!-- ============================================== -->
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

                <!-- Course 3 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 15)         -->
                        <!-- ============================================== -->
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

                <!-- Course 4 -->
                <a href="#" class="course-card">
                    <div class="course-card-media">
                        <!-- ============================================== -->
                        <!--       PUT IMAGE HERE (مكان الصورة 16)         -->
                        <!-- ============================================== -->
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
        <p>All Rights Reserved &copy; 2026</p>
    </footer>
    <!-- End Footer -->

</body>
</html>



