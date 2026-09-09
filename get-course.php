<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
include 'db.php';

$courseId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($courseId <= 0) {
    echo json_encode([
        'status' => 'error', 
        'message' => 'Invalid course ID'
    ]);
    exit();
}

// 1. Fetch Course & Instructor Details
$query = "SELECT c.*, u.first_name AS instructor_first, u.last_name AS instructor_last, u.username AS instructor_username, u.brief AS instructor_brief 
          FROM courses c 
          LEFT JOIN users u ON c.instructor_id = u.id 
          WHERE c.id = $courseId LIMIT 1";

$result = mysqli_query($conn, $query);

$courseData = null;

if ($result && mysqli_num_rows($result) > 0) {
    $courseData = mysqli_fetch_assoc($result);
} else {
    $fallback_query = "SELECT * FROM courses WHERE id = $courseId LIMIT 1";
    $fallback_result = mysqli_query($conn, $fallback_query);
    
    if ($fallback_result && mysqli_num_rows($fallback_result) > 0) {
        $courseData = mysqli_fetch_assoc($fallback_result);
        $courseData['instructor_first'] = 'Expert';
        $courseData['instructor_last'] = 'Instructor';
        $courseData['instructor_brief'] = 'Expert in Web Development';
    }
}

// Check if course was found
if (!$courseData) {
    echo json_encode([
        'status' => 'error', 
        'message' => 'Course not found in database'
    ]);
    exit();
}

// 2. Fetch Associated Lessons for this Course
$lessons = [];
$lessonsQuery = "SELECT id, title, video_url, sort_order FROM lessons WHERE course_id = $courseId ORDER BY sort_order ASC, id ASC";
$lessonsResult = mysqli_query($conn, $lessonsQuery);

if ($lessonsResult && mysqli_num_rows($lessonsResult) > 0) {
    while ($row = mysqli_fetch_assoc($lessonsResult)) {
        $lessons[] = $row;
    }
}

// 3. Return Combined JSON Data
echo json_encode([
    'status' => 'success', 
    'data' => $courseData,
    'lessons' => $lessons
]);

mysqli_close($conn);
?>