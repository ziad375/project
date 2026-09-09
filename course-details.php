<?php 
session_start(); 
include 'db.php';
// Check if student session is active and valid
$isStudentLoggedIn = isset($_SESSION['user_id']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Metadata configuration section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeCoder - Course Details</title>
    
    <!-- External icon library stylesheet reference -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom unified system stylesheet reference -->
    <link rel="stylesheet" href="system.css?v=1.2"> 
</head>
<body>

    <!-- Main navigation bar container -->
    <header class="main-header">
        <!-- Inner wrapper for logo and header actions -->
        <div class="nav-container">
            <!-- Brand logo link routing back to home -->
            <a href="home.php" class="logo">
                <span class="logo-text">BeCoder</span>  
                <i class="fa-solid fa-graduation-cap logo-icon"></i>
            </a>

            <!-- Action container holding instructor controls (Only shown to instructors and admins) -->
            <?php if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] === 'instructor' || $_SESSION['user_role'] === 'admin')): ?>
                <div class="instructor-action">
                    <button id="addLessonBtn" class="btn-add-lesson">+ Add Lesson</button>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <!-- Main dynamic content wrapper section -->
    <main class="single-course-container">
        
        <!-- Navigation container for returning to courses list -->
        <div class="back-navigation">
            <a href="home.php" class="back-link">&larr; Back to Courses</a>
        </div>

        <!-- Grid wrapper organizing the content boxes -->
        <div class="details-wrapper">
            

            <!-- First content box: course details and overview container -->
            <section class="content-box course-info-section">
                <h1 id="courseTitle">Loading Course...</h1>
                <span id="courseCategory" class="badge">Loading</span>

                <!-- Horizontal layout divider element -->
                <hr class="divider">

                <!-- Course overview textual information section -->
                <div class="overview-box">
                    <h2>Course Overview</h2>
                    <p id="courseDescription">Please wait while course details are being fetched from the database.</p>
                </div>

                <!-- Lessons list container target dynamically rendered by JS -->
                <div class="lessons-section">
                    <h2><i class="fa-solid fa-list-check"></i> Course Lessons</h2>
                    <div id="lessonsListContainer" class="lessons-list">
                        <p class="loading-lessons">Loading lessons...</p>
                    </div>
                </div>

                <!-- Instructor bio and details information section -->
                <div class="instructor-box">
                    <h2>Instructor Bio</h2>
                    <p id="instructorName">Instructor: Loading...</p>
                    <p id="instructorBio">Expert Instructor</p>
                </div>
            </section>

        </div>

    </main>

    <!-- Interactive modal popup container for instructor actions -->
    <div id="addLessonModal" class="modal">
        <!-- Inner wrapper container for the modal content -->
        <div class="modal-content">
            <span class="close-modal" id="closeModalBtn">&times;</span>
            <form id="addLessonForm">
                <!-- Form fields injected dynamically via JavaScript -->
            </form>
        </div>
    </div>

    <!-- External JavaScript execution file reference -->
    <script src="course-details.js"></script>
</body>
</html>
