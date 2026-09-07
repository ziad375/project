<div class="navbar">
    <div class="left-header">
        <a href="index.php" class="logo">BeCoder 🎓</a>
        <input type="text" class="search-input" placeholder="Search Baccalaureate tracks...">
    </div>

    <div class="right-header">
        <?php if (isset($_SESSION['user_id'])): ?>
            
            <!-- Instructor Specific Controls -->
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'instructor'): ?>
                <span style="background-color: #f59e0b; color: #000; padding: 3px 8px; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-right: 10px;">
                    INSTRUCTOR
                </span>
                <a href="add_course.php" class="btn-primary" style="margin-right: 15px;">+ Create Track</a>
            <?php endif; ?>

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
