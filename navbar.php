<nav class="navbar" aria-label="Main navigation">
    <div class="left-header">
        <a href="index.php" class="logo" aria-label="BeCoder home">
            BeCoder <i class="fa-solid fa-graduation-cap"></i>
        </a>
        <div class="search-container" role="search">
            <label class="sr-only" for="track-search">Search tracks</label>
            <input type="search" id="track-search" class="search-input" placeholder="Search Baccalaureate tracks...">
        </div>
    </div>

    <div class="right-header" aria-label="Account navigation">
        <?php if (isset($_SESSION['user_id'])): ?>
            
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'instructor'): ?>
                <span class="badge-instructor">INSTRUCTOR</span>
                <a href="add_course.php" class="btn-register">+ Create Track</a>
            <?php endif; ?>

            <span class="user-welcome">
                Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?> 👋
            </span>
            <a href="logout.php" class="btn-login">Log Out</a>

        <?php else: ?>
            <a href="login.php" class="btn-login">Log In</a>
            <a href="register.php" class="btn-register">Sign Up</a>
        <?php endif; ?>
    </div>
</nav>
