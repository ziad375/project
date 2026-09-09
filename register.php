<?php
session_start();
include 'db.php';

$error_msg = "";
$success_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $role = 'student'; 

    // Validate password confirmation match
    if ($password !== $confirm_password) {
        $error_msg = "Passwords do not match!";
    } else {
        // Verify email or username are not already registered
        $check_query = "SELECT * FROM users WHERE email = '$email' OR username = '$username' LIMIT 1";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $error_msg = "Username or Email already exists!";
        } else {
            // Save new user into database
            $sql = "INSERT INTO users (first_name, last_name, username, email, password, role) 
                    VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$role')";
            
            if (mysqli_query($conn, $sql)) {
                $success_msg = "Account created successfully! You can now <a href='login.php'>Log In</a>.";
            } else {
                $error_msg = "Something went wrong, please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - BeCoder</title>
    <link rel="stylesheet" href="system.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="navbar">
        <div class="left-header">
            <a href="home.php" class="logo">
                <i class="fa-solid fa-graduation-cap logo-icon"></i>
                <span class="logo-text">BeCoder</span>
            </a>
        </div>

        <div class="right-header">
            <a href="login.php" class="btn-login">Log In</a>
            <a href="register.php" class="btn-register">Sign Up</a>
        </div>
    </div>

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Create Your Account</h1>
                <p class="auth-subtitle">Join BeCoder & start your coding journey</p>
            </div>

            <!-- Error / Success Messages -->
            <?php if (!empty($error_msg)): ?>
                <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; color: #ef4444; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center; font-size: 14px;">
                    <?php echo $error_msg; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($success_msg)): ?>
                <div style="background: rgba(34, 197, 94, 0.1); border: 1px solid #22c55e; color: #22c55e; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center; font-size: 14px;">
                    <?php echo $success_msg; ?>
                </div>
            <?php endif; ?>

            <form class="auth-form-grid" action="register.php" method="POST">
                
                <div class="form-group">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-input" placeholder="e.g. Hossam" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-input" placeholder="e.g. Ahmed" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-input" placeholder="hossam_20" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="form-input" placeholder="••••••••" required>
                </div>

                <div class="full-width">
                    <button type="submit" class="btn-submit" style="width: 100%;">Create Account</button>
                </div>

            </form>

            <div class="auth-footer">
                Already have an account? <a href="login.php" class="auth-link">Log In</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Baccalaureate Students in Programming & AI. 🇪🇬</p>
    </div>

</body>
</html>