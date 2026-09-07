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

    <div class="navbar">
        <div class="left-header">
            <a href="index.html" class="logo">BeCoder 🎓</a>
            <input type="text" class="search-input" placeholder="Search Baccalaureate tracks...">
        </div>

       <div class="right-header">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span style="color: #fff; margin-right: 15px; font-weight: bold;">
                Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?> 👋
            </span>
            <a href="logout.php" class="btn-login">Log Out</a>
        <?php else: ?> 
            <a href="login.php" class="btn-login">Log In</a>
            <a href="register.php" class="btn-register">Sign Up</a>
        <?php endif; ?>
        </div>
    </div>

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