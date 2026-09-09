<?php
session_start();
require_once 'db.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$course_id = isset($data['course_id']) ? intval($data['course_id']) : 0;
$title = isset($data['title']) ? trim($data['title']) : '';
$video_url = isset($data['video_url']) ? trim($data['video_url']) : '';

if (empty($course_id) || empty($title) || empty($video_url)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    exit();
}

$stmt = $conn->prepare("INSERT INTO lessons (course_id, title, video_url) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $course_id, $title, $video_url);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Saved to database.']);
} else {
    echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}

$stmt->close();
$conn->close();
?>