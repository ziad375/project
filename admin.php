<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'becoder_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: Login.php");
    exit();
}

// Fetch courses along with their assigned instructors
$courses_sql = "
    SELECT 
        c.id AS course_id, 
        c.title AS course_title, 
        c.category, 
        u.first_name, 
        u.last_name, 
        u.email AS instructor_email
    FROM courses c
    LEFT JOIN users u ON c.instructor_id = u.id
    ORDER BY c.id DESC
";
$courses_result = $conn->query($courses_sql);

// Platform summary counts
$total_courses = $conn->query("SELECT COUNT(*) AS total FROM courses")->fetch_assoc()['total'];
$total_instructors = $conn->query("SELECT COUNT(*) AS total FROM users WHERE role = 'instructor'")->fetch_assoc()['total'];
$total_students = $conn->query("SELECT COUNT(*) AS total FROM users WHERE role = 'student'")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - BeCoder</title>
    <link rel="stylesheet" href="system.css">
</head>
<body>

    <div class="auth-wrapper">
        <div class="auth-card admin-card admin-card-wide">
            
            <div class="auth-header">
                <h1 class="auth-title">Admin Control Panel 🛡️</h1>
                <p class="auth-subtitle">Welcome back, manager. You have full access to manage BeCoder platform.</p>
            </div>

            <div class="admin-actions admin-header-actions">
                <a href="home.php" class="btn-submit admin-btn">Go to Home</a>
                <a href="logout.php" class="btn-submit logout-btn">Log Out</a>
            </div>

            <!-- Platform Stats -->
            <div class="stats-grid">
                <div class="stat-box">
                    <span>Total Courses</span>
                    <h3><?php echo $total_courses; ?></h3>
                </div>
                <div class="stat-box">
                    <span>Instructors</span>
                    <h3><?php echo $total_instructors; ?></h3>
                </div>
                <div class="stat-box">
                    <span>Students</span>
                    <h3><?php echo $total_students; ?></h3>
                </div>
            </div>

            <!-- Course & Instructor Table -->
            <h3 class="section-title-left">Platform Courses & Assigned Instructors</h3>
            <div class="admin-table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Title</th>
                            <th>Category</th>
                            <th>Instructor</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($courses_result && $courses_result->num_rows > 0): ?>
                            <?php while ($row = $courses_result->fetch_assoc()): ?>
                                <tr>
                                    <td>#<?php echo $row['course_id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($row['course_title']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($row['category'] ?? 'General CS'); ?></td>
                                    <td>
                                        <?php if ($row['first_name']): ?>
                                            <span class="instructor-name">
                                                <?php echo htmlspecialchars($row['first_name'] . ' ' . $row['last_name']); ?>
                                            </span>
                                        <?php else: ?>
                                            <span class="unassigned-text">Unassigned</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($row['instructor_email'] ?? 'N/A'); ?></td>
                                    <td>
                                        <a href="course-details.php?id=<?php echo $row['course_id']; ?>" class="action-link">View Course</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="empty-row">No courses registered in database.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
                            
</body>
</html>