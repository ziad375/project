<?php
session_start();
include 'db.php';

$error_msg = "";

if (isset($_POST['login_btn'])) {
    $login_id = mysqli_real_escape_string($conn, $_POST['login_id']);
    $password = $_POST['password'];
    $selected_role = $_POST['role'];

    $query = "SELECT * FROM users WHERE (email='$login_id' OR username='$login_id') AND role='$selected_role'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($password === $user['password'] || password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_role'] = $user['role'];

            if ($selected_role === 'admin') {
                header("Location: admin.php");
                exit();
            } elseif ($selected_role === 'instructor') {
                header("Location: instructor-dashboard.php");
                exit();
            } else {
                header("Location: home.php");
                exit();
            }

        } else {
            $error_msg = "Invalid password!";
        }
    } else {
        $error_msg = "Invalid credentials or role mismatch!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - BeCoder 🇪🇬</title>
    <link rel="stylesheet" href="system.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="navbar">
        <div class="left-header">
            <a href="#" class="logo">
                BeCoder <i class="fa-solid fa-graduation-cap"></i>
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
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Log in to access your courses & track progress</p>
            </div>

            <?php if (!empty($error_msg)): ?>
                <div class="error-alert">
                    <?php echo $error_msg; ?>
                </div>
            <?php endif; ?>

            <form class="auth-form-grid" action="login.php" method="POST">
                
                <div class="form-group full-width">
                    <label class="form-label" for="login-id">Email or Username</label>
                    <input type="text" name="login_id" id="login-id" class="form-input" placeholder="e.g. hossam_20 or name@example.com" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label" for="login-password">Password</label>
                    <input type="password" name="password" id="login-password" class="form-input" placeholder="••••••••" required>
               </div>

                <div class="role-selector-container full-width">
                    <label>
                        <input type="radio" name="role" value="student" checked>
                        <span>Student</span>
                    </label>
                    <label>
                        <input type="radio" name="role" value="instructor">
                        <span>Instructor</span>
                    </label>
                    <label>
                        <input type="radio" name="role" value="admin">
                        <span>Admin</span>
                    </label>
                </div>

                <div class="full-width">
                    <button type="submit" name="login_btn" class="btn-submit">Log In</button>
                </div>

            </form>

            <div class="auth-footer">
                Don't have an account? <a href="register.php" class="auth-link">Sign Up</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Students in Programming & AI. 🇪🇬</p>
    </div>

</body>
</html>