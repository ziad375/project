<?php
session_start();
header('Content-Type: application/json');

// Disable HTML error output to prevent corrupting JSON responses
ini_set('display_errors', 0);
error_reporting(E_ALL);

$conn = new mysqli('localhost', 'root', '', 'becoder_db');

if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

$input = json_decode(file_get_contents('php://input'), true);
$username = trim($input['username'] ?? ''); 
$password = trim($input['password'] ?? '');
$courseId = intval($input['course_id'] ?? 0);

if (empty($username) || empty($password) || $courseId === 0) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields or invalid course ID.']);
    exit();
}

// 1. Verify user credentials and get user ID
$stmt = $conn->prepare("SELECT id, password, role FROM users WHERE (username = ? OR email = ?) AND role = 'instructor'");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$userResult = $stmt->get_result();

if ($user = $userResult->fetch_assoc()) {
    if ($password === $user['password'] || password_verify($password, $user['password'])) {
        
        // 2. Verify course ownership
        $courseStmt = $conn->prepare("SELECT id FROM courses WHERE id = ? AND instructor_id = ?");
        $courseStmt->bind_param("ii", $courseId, $user['id']);
        $courseStmt->execute();
        $courseResult = $courseStmt->get_result();

        if ($courseResult->num_rows > 0) {
            echo json_encode(['status' => 'success']);
            exit();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Access Denied: You are not assigned as the instructor for this course!']);
            exit();
        }
    }
}

echo json_encode(['status' => 'error', 'message' => 'Invalid instructor username or password!']);