<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'becoder_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the user is logged in as an instructor
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'instructor') {
    header("Location: Login.php");
    exit();
}

$instructor_id = $_SESSION['user_id'];

// Fetch only the courses owned by this specific instructor
$stmt = $conn->prepare("SELECT * FROM courses WHERE instructor_id = ?");
$stmt->bind_param("i", $instructor_id);
$stmt->execute();
$courses_result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructor Dashboard - BeCoder</title>
    <link rel="stylesheet" href="system.css">
</head>
<body>

    <div class="auth-wrapper">
        <div class="auth-card admin-card" style="max-width: 800px; width: 100%;">
            <div class="auth-header">
                <h1 class="auth-title">Instructor Workspace 🎓</h1>
                <p class="auth-subtitle">Welcome back, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>. Manage your assigned courses here.</p>
            </div>

            <div class="instructor-courses-list" style="margin: 20px 0; text-align: left;">
                <h3>Your Assigned Courses</h3>
                <?php if ($courses_result && $courses_result->num_rows > 0): ?>
                    <ul style="list-style: none; padding: 0; margin-top: 15px;">
                        <?php while ($course = $courses_result->fetch_assoc()): ?>
                            <li style="background: rgba(255,255,255,0.05); margin-bottom: 10px; padding: 12px 16px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <strong><?php echo htmlspecialchars($course['title']); ?></strong>
                                    <span style="font-size: 0.85em; opacity: 0.7; display: block;"><?php echo htmlspecialchars($course['category'] ?? 'General'); ?></span>
                                </div>
                                <a href="course-details.php?id=<?php echo $course['id']; ?>" class="btn-submit admin-btn" style="padding: 6px 12px; text-decoration: none; font-size: 0.9em;">Manage Course</a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else: ?>
                    <p style="opacity: 0.8; margin-top: 10px;">You are not assigned as an instructor to any courses yet.</p>
                <?php endif; ?>
            </div>

            <div class="admin-actions">
                <a href="home.php" class="btn-submit admin-btn">Go to Home</a>
                <a href="logout.php" class="btn-submit logout-btn">Log Out</a>
            </div>
        </div>
    </div>

</body>
</html>