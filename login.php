<?php
session_start();
require_once 'db.php';

$error = '';
$success = '';

if (isset($_GET['registered']) && $_GET['registered'] == 1) {
    $success = "Account created successfully! Please log in.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_id = trim($_POST['login-id'] ?? '');
    $password = $_POST['login-password'] ?? '';

    if (empty($login_id) || empty($password)) {
        $error = "Please enter your email/username and password.";
    } else {
        $stmt = $conn->prepare("SELECT id, first_name, username, password, role FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $login_id, $login_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id']    = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['username']   = $user['username'];
                $_SESSION['role']       = $user['role']; // Role now properly saved

                header("Location: index.php");
                exit();
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "No account found with that Email or Username.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - BeCoder 🎓</title>
    <link rel="stylesheet" href="css/system.css">
</head>
<body>

     <?php include 'navbar.php'; ?>

    <div class="auth-wrapper">
        <div class="auth-card" style="max-width: 450px;">
            <div class="auth-header">
                <?php if (!empty($error)): ?>
                    <p style="color: #ff4d4d; background: #ffe6e6; padding: 10px; border-radius: 5px; margin-top: 10px; text-align: center;">
                        <?php echo $error; ?>
                    </p>
                 <?php endif; ?>

                 <?php if (!empty($success)): ?>
                    <p style="color: #2e7d32; background: #e8f5e9; padding: 10px; border-radius: 5px; margin-top: 10px; text-align: center;">
                        <?php echo $success; ?>
                    </p>
                <?php endif; ?>
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Log in to access your courses & track progress</p>
            </div>

            <form class="auth-form-grid" style="grid-template-columns: 1fr;" action="login.php" method="POST">
                
                <div class="form-group">
                    <label class="form-label" for="login-id">Email or Username</label>
                    <input type="text" id="login-id" name="login-id" class="form-input" placeholder="e.g. hossam_20 or name@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="login-password">Password</label>
                   <input type="password" id="login-password" name="login-password" class="form-input" placeholder="••••••••" required>
                </div>

                <div class="full-width">
                    <button type="submit" class="btn-submit" style="width: 100%; margin-top: 5px;">Log In</button>
                </div>

            </form>

            <div class="auth-footer">
                Don't have an account? <a href="register.html" class="auth-link">Sign Up</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Baccalaureate Students in Programming & AI.</p>
    </div>

</body>
</html>