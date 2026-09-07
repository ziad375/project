<?php
session_start();
require_once 'db.php';

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['firstname'] ?? '');
    $last_name  = trim($_POST['lastname'] ?? '');
    $username   = trim($_POST['username'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $password   = $_POST['password'] ?? '';
    $confirm_pw = $_POST['confirm-password'] ?? '';
    $role       = $_POST['role'] ?? 'student'; // Capture account role

    if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password)) {
        $error = "Please fill in all required fields.";
    } elseif ($password !== $confirm_pw) {
        $error = "Passwords do not match.";
    } else {
        // Check if username or email already exists
        $checkStmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $checkStmt->bind_param("ss", $username, $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $error = "Username or Email is already registered.";
        } else {
            // Hash password securely
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert user with role (student/instructor)
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $first_name, $last_name, $username, $email, $hashed_password, $role);

            if ($stmt->execute()) {
                header("Location: login.php?registered=1");
                exit();
            } else {
                $error = "Something went wrong. Please try again.";
            }
            $stmt->close();
        }
        $checkStmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - BeCoder</title>
    <link rel="stylesheet" href="css/system.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                 <?php if (!empty($error)): ?>
                <p style="color: #ff4d4d; background: #ffe6e6; padding: 10px; border-radius: 5px; margin-top: 10px; text-align: center;">
                <?php echo $error; ?> </p>  
                <?php endif; ?>     
                <h1 class="auth-title">Create Your Account</h1>
                <p class="auth-subtitle">Join BeCoder & start your coding journey</p>
            </div>

           <form class="auth-form-grid" action="register.php" method="POST">
                
                <!-- Row 1: First Name & Last Name -->
                <div class="form-group">
                    <label class="form-label" for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-input" placeholder="e.g. Hossam" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-input" placeholder="e.g. Ahmed" required>
                </div>

                <!-- Row 2: Username & Email -->
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-input" placeholder="hossam_20" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="name@example.com" required>
                </div>

                <!-- Row 3: Password & Confirm Password -->
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="form-input" placeholder="••••••••" required>
                </div>
                <div class="form-group full-width">
                     <label class="form-label" for="role">Account Type</label>
                     <select name="role" id="role" class="form-input" required>
                       <option value="student">Student</option>
                       <option value="instructor">Instructor</option>
                    </select>
                </div>

                <!-- Row 4: Submit Button -->
                <div class="full-width">
                    <button type="submit" class="btn-submit" style="width: 100%;">Create Account</button>
                </div>

            </form>

            <div class="auth-footer">
                Already have an account? <a href="login.html" class="auth-link">Log In</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2026 BeCoder 🎓 Platform. Designed for Egyptian Baccalaureate Students in Programming & AI.</p>
    </div>

</body>
</html>