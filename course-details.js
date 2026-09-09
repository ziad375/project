document.addEventListener('DOMContentLoaded', () => {
    // 1. Fetch course details & lessons dynamically using URL parameter id
    const urlParams = new URLSearchParams(window.location.search);
    const courseId = urlParams.get('id');

    if (courseId) {
        fetch(`get-course.php?id=${courseId}`)
            .then(response => response.json())
            .then(result => {
                if (result.status === 'success') {
                    const data = result.data;
                    
                    document.getElementById('courseTitle').innerText = data.title;
                    document.getElementById('courseCategory').innerText = data.category || 'General CS';
                    document.getElementById('courseDescription').innerText = data.description;
                    
                    if (data.instructor_first) {
                        document.getElementById('instructorName').innerText = `Instructor: ${data.instructor_first} ${data.instructor_last}`;
                    }

                    if (data.instructor_brief) {
                        document.getElementById('instructorBio').innerText = data.instructor_brief;
                    }

                    // Render dynamic lessons list on the webpage
                    if (result.lessons && Array.isArray(result.lessons)) {
                        renderLessonsList(result.lessons);
                    }
                } else {
                    console.error('Course not found in database');
                }
            })
            .catch(error => console.error('Error fetching course data:', error));
    }

    // Function to render lessons into the UI with interactive links
    function renderLessonsList(lessons) {
        const container = document.getElementById('lessonsListContainer');
        if (!container) return;

        if (lessons.length === 0) {
            container.innerHTML = '<p class="no-lessons">No lessons added yet.</p>';
            return;
        }

        container.innerHTML = lessons.map((lesson, index) => `
            <div class="lesson-card" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; padding: 12px; background: rgba(255,255,255,0.05); border-radius: 6px;">
                <span><strong>Lesson ${index + 1}:</strong> ${lesson.title}</span>
                <a href="${lesson.video_url}" target="_blank" class="watch-link-btn" data-url="${lesson.video_url}" style="color: #ffd700; text-decoration: none; font-weight: bold; background: rgba(255, 215, 0, 0.1); padding: 6px 12px; border-radius: 4px; border: 1px solid #ffd700;">
                    <i class="fa-solid fa-play"></i> Watch Video
                </a>
            </div>
        `).join('');

        // Attach click handlers to dynamically play embedded videos or direct MP4 files
        container.querySelectorAll('.watch-link-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const videoUrl = btn.getAttribute('data-url');
                const mainVideo = document.getElementById('mainVideo');
                const videoSource = document.getElementById('videoSource');
                const videoOverlay = document.getElementById('videoOverlay');

                // If it is an MP4 video stream, update the main video player and play directly
                if (videoUrl.endsWith('.mp4') || videoUrl.includes('w3schools')) {
                    e.preventDefault();
                    if (videoSource && mainVideo) {
                        videoSource.src = videoUrl;
                        mainVideo.load();
                        if (videoOverlay) videoOverlay.style.display = 'none';
                        mainVideo.hidden = false;
                        mainVideo.play();
                        
                        mainVideo.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });
    }

    // 2. Modal elements selection
    const addLessonBtn = document.getElementById('addLessonBtn');
    const addLessonModal = document.getElementById('addLessonModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const startVideoBtn = document.getElementById('startVideoBtn');
    const videoOverlay = document.getElementById('videoOverlay');
    const mainVideo = document.getElementById('mainVideo');
    const addLessonForm = document.getElementById('addLessonForm');

    // 3. Handle modal display
    if (addLessonBtn && addLessonModal) {
        addLessonBtn.addEventListener('click', () => {
            addLessonModal.style.display = 'flex';
            showInstructorAuthStep();
        });
    }

    if (closeModalBtn && addLessonModal) {
        closeModalBtn.addEventListener('click', () => {
            addLessonModal.style.display = 'none';
        });
    }

    window.addEventListener('click', (e) => {
        if (e.target === addLessonModal) {
            addLessonModal.style.display = 'none';
        }
    });

    // 4. Video protection logic
    if (startVideoBtn) {
        startVideoBtn.addEventListener('click', () => {
            const isLogged = startVideoBtn.getAttribute('data-logged') === 'true';
            
            if (!isLogged) {
                if (addLessonModal) {
                    addLessonModal.style.display = 'flex';
                    showStudentAuthStep();
                }
                return;
            }

            if (videoOverlay) videoOverlay.style.display = 'none';
            if (mainVideo) {
                mainVideo.hidden = false;
                mainVideo.play();
            }
        });
    }

 // 5. Render Functions with Labels and Placeholders
function showStudentAuthStep() {
    if (!addLessonForm) return;
    
    addLessonForm.innerHTML = `
        <h3 class="dynamic-form-title">Student Login Required</h3>
        <p class="dynamic-form-subtitle">Please enter your credentials to watch the video.</p>
        
        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="studentUser" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Username</label>
            <input type="text" id="studentUser" placeholder="Enter your username" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="studentPass" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Password</label>
            <input type="password" id="studentPass" placeholder="Enter your password" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <button type="button" id="verifyStudentBtn" class="form-styled-btn">Login & Watch</button>
    `;
}

function showInstructorAuthStep() {
    if (!addLessonForm) return;
    
    addLessonForm.innerHTML = `
        <h3 class="dynamic-form-title">Instructor Authentication</h3>
        <p class="dynamic-form-subtitle">Please enter your credentials to manage lessons.</p>
        
        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="instUser" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Instructor Username</label>
            <input type="text" id="instUser" placeholder="e.g. john_doe" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="instPass" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Instructor Password</label>
            <input type="password" id="instPass" placeholder="Enter your instructor password" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <button type="button" id="verifyInstBtn" class="form-styled-btn">Verify & Continue</button>
    `;
}

function showAddLessonStep() {
    if (!addLessonForm) return;

    addLessonForm.innerHTML = `
        <h3 class="dynamic-form-title">Add New Lesson</h3>
        
        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="lessonTitleInput" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Lesson Title</label>
            <input type="text" id="lessonTitleInput" placeholder="e.g. Introduction to Variables" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px; text-align: left;">
            <label for="lessonUrlInput" style="display: block; font-weight: bold; margin-bottom: 5px; color: #fff;">Video URL (.mp4 or link)</label>
            <input type="url" id="lessonUrlInput" placeholder="https://example.com/video.mp4" required class="form-styled-input" style="width: 100%; padding: 8px;">
        </div>

        <button type="submit" id="saveLessonBtn" class="form-styled-btn">Save Lesson</button>
    `;
}
    // 6. Global Event Delegation for Dynamic Form Buttons
    if (addLessonForm) {
        addLessonForm.addEventListener('click', async (e) => {
            if (e.target && e.target.id === 'verifyInstBtn') {
                const username = document.getElementById('instUser').value;
                const password = document.getElementById('instPass').value;

                if (!username || !password) {
                    alert('Please enter both username and password.');
                    return;
                }

                try {
                    const response = await fetch('verify-instructor.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ 
                            username: username, 
                            password: password,
                            course_id: courseId 
                        })
                    });
                    
                    const result = await response.json();

                    if (result.status === 'success') {
                        showAddLessonStep();
                    } else {
                        alert(result.message);
                    }
                } catch (err) {
                    console.error('Verification error:', err);
                    alert('Server error verifying course ownership.');
                }
            }

            if (e.target && e.target.id === 'verifyStudentBtn') {
                const user = document.getElementById('studentUser').value;
                const pass = document.getElementById('studentPass').value;

                if (user && pass) {
                    alert('Logged in successfully!');
                    addLessonModal.style.display = 'none';
                    if (videoOverlay) videoOverlay.style.display = 'none';
                    if (mainVideo) {
                        mainVideo.hidden = false;
                        mainVideo.play();
                    }
                } else {
                    alert('Please fill in all fields!');
                }
            }
        });

        // Save lesson to database on form submission
        addLessonForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const titleInput = document.getElementById('lessonTitleInput');
            const urlInput = document.getElementById('lessonUrlInput');

            if (titleInput && urlInput && titleInput.value && urlInput.value) {
                try {
                    const response = await fetch('add-lesson.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            course_id: courseId,
                            title: titleInput.value,
                            video_url: urlInput.value
                        })
                    });

                    const result = await response.json();

                    if (result.status === 'success') {
                        alert('Lesson saved successfully!');
                        addLessonModal.style.display = 'none';
                        location.reload();
                    } else {
                        alert('Error: ' + result.message);
                    }
                } catch (err) {
                    console.error('Error saving lesson:', err);
                    alert('Failed to connect to server.');
                }
            }
        });
    }
});