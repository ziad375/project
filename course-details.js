document.addEventListener('DOMContentLoaded', () => {

    // ==========================================
    // GET COURSE ID FROM URL
    // ==========================================

    const urlParams = new URLSearchParams(window.location.search);
    const courseId = urlParams.get('id');


    // ==========================================
    // ELEMENTS
    // ==========================================

    const courseTitle = document.getElementById('courseTitle');
    const courseCategory = document.getElementById('courseCategory');
    const courseDescription = document.getElementById('courseDescription');

    const instructorName = document.getElementById('instructorName');
    const instructorBio = document.getElementById('instructorBio');

    const lessonsContainer = document.getElementById('lessonsListContainer');

    const mainVideo = document.getElementById('mainVideo');
    const videoSource = document.getElementById('videoSource');

    const youtubeVideo = document.getElementById('youtubeVideo');

    const videoMessage = document.getElementById('videoMessage');


    // ==========================================
    // LOAD COURSE
    // ==========================================

    if (!courseId) {
        console.error('Course ID is missing.');
        return;
    }


    fetch(`get-course.php?id=${courseId}`)

        .then(response => {

            if (!response.ok) {
                throw new Error('Server error');
            }

            return response.json();

        })

        .then(result => {

            if (result.status !== 'success') {

                console.error(result.message);

                if (courseTitle) {
                    courseTitle.innerText = 'Course Not Found';
                }

                return;
            }


            // ==================================
            // COURSE INFORMATION
            // ==================================

            const data = result.data;

            if (courseTitle) {
                courseTitle.innerText = data.title;
            }

            if (courseCategory) {
                courseCategory.innerText =
                    data.category || 'General CS';
            }

            if (courseDescription) {
                courseDescription.innerText =
                    data.description || 'No description available.';
            }


            // ==================================
            // INSTRUCTOR
            // ==================================

            if (data.instructor_first) {

                instructorName.innerText =
                    `Instructor: ${data.instructor_first} ${data.instructor_last || ''}`;

            }

            if (data.instructor_brief) {

                instructorBio.innerText =
                    data.instructor_brief;

            }


            // ==================================
            // LESSONS
            // ==================================

            if (result.lessons && Array.isArray(result.lessons)) {

                renderLessonsList(result.lessons);

            } else {

                lessonsContainer.innerHTML =
                    '<p class="no-lessons">No lessons available.</p>';

            }

        })

        .catch(error => {

            console.error('Error fetching course:', error);

            if (courseTitle) {
                courseTitle.innerText = 'Error Loading Course';
            }

        });



    // ==========================================
    // RENDER LESSONS
    // ==========================================

    function renderLessonsList(lessons) {

        if (!lessonsContainer) {
            return;
        }


        if (lessons.length === 0) {

            lessonsContainer.innerHTML =
                '<p class="no-lessons">No lessons added yet.</p>';

            return;

        }


        lessonsContainer.innerHTML = lessons.map((lesson, index) => {

            const title = escapeHtml(lesson.title || 'Untitled Lesson');

            const videoUrl = lesson.video_url || '';

            return `

                <div
                    class="lesson-card"
                    style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        gap:15px;
                        margin-bottom:10px;
                        padding:12px;
                        background:rgba(255,255,255,0.05);
                        border-radius:6px;
                    "
                >

                    <span>
                        <strong>
                            Lesson ${index + 1}:
                        </strong>

                        ${title}
                    </span>


                    <button
                        type="button"
                        class="watch-link-btn"
                        data-url="${escapeAttribute(videoUrl)}"
                        style="
                            color:#ffd700;
                            font-weight:bold;
                            background:rgba(255,215,0,0.1);
                            padding:6px 12px;
                            border-radius:4px;
                            border:1px solid #ffd700;
                            cursor:pointer;
                        "
                    >

                        <i class="fa-solid fa-play"></i>

                        Watch Video

                    </button>

                </div>

            `;

        }).join('');


        // ==================================
        // WATCH BUTTONS
        // ==================================

        containerWatchButtons();

    }



    // ==========================================
    // ATTACH WATCH BUTTON EVENTS
    // ==========================================

    function containerWatchButtons() {

        const buttons =
            lessonsContainer.querySelectorAll('.watch-link-btn');


        buttons.forEach(button => {

            button.addEventListener('click', () => {

                const videoUrl =
                    button.getAttribute('data-url');


                if (!videoUrl) {

                    alert('No video URL is available for this lesson.');

                    return;

                }


                playVideo(videoUrl);

            });

        });

    }



    // ==========================================
    // PLAY VIDEO
    // ==========================================

    function playVideo(videoUrl) {

        // Hide everything first

        mainVideo.style.display = 'none';

        youtubeVideo.style.display = 'none';

        videoMessage.style.display = 'none';


        // ======================================
        // YOUTUBE
        // ======================================

        if (
            videoUrl.includes('youtube.com') ||
            videoUrl.includes('youtu.be')
        ) {

            const youtubeId =
                getYoutubeId(videoUrl);


            if (!youtubeId) {

                alert('Invalid YouTube URL.');

                videoMessage.style.display = 'block';

                return;

            }


            youtubeVideo.src =
                `https://www.youtube.com/embed/${youtubeId}`;


            youtubeVideo.style.display =
                'block';


            youtubeVideo.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });


            return;

        }


        // ======================================
        // DIRECT VIDEO / MP4
        // ======================================

        videoSource.src = videoUrl;

        mainVideo.style.display = 'block';

        mainVideo.load();


        mainVideo.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });


        // Try to start video

        const playPromise =
            mainVideo.play();


        if (playPromise !== undefined) {

            playPromise.catch(error => {

                console.log(
                    'Autoplay was blocked. Press Play manually.'
                );

            });

        }

    }



    // ==========================================
    // GET YOUTUBE ID
    // ==========================================

    function getYoutubeId(url) {

        let videoId = '';


        // youtu.be/VIDEO_ID

        if (url.includes('youtu.be/')) {

            videoId =
                url.split('youtu.be/')[1];

        }


        // youtube.com/watch?v=VIDEO_ID

        else if (url.includes('youtube.com/watch')) {

            const params =
                new URLSearchParams(
                    new URL(url).search
                );

            videoId =
                params.get('v');

        }


        // youtube.com/embed/VIDEO_ID

        else if (url.includes('youtube.com/embed/')) {

            videoId =
                url.split('youtube.com/embed/')[1];

        }


        if (videoId) {

            videoId =
                videoId.split('&')[0];

            videoId =
                videoId.split('?')[0];

        }


        return videoId;

    }



    // ==========================================
    // HTML ESCAPE
    // ==========================================

    function escapeHtml(text) {

        const div =
            document.createElement('div');

        div.textContent = text;

        return div.innerHTML;

    }


    function escapeAttribute(text) {

        return String(text)
            .replace(/&/g, '&amp;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;');

    }



    // ==========================================
    // ADD LESSON MODAL
    // ==========================================

    const addLessonBtn =
        document.getElementById('addLessonBtn');

    const addLessonModal =
        document.getElementById('addLessonModal');

    const closeModalBtn =
        document.getElementById('closeModalBtn');

    const addLessonForm =
        document.getElementById('addLessonForm');


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


    window.addEventListener('click', (event) => {

        if (event.target === addLessonModal) {

            addLessonModal.style.display = 'none';

        }

    });



    // ==========================================
    // INSTRUCTOR AUTH
    // ==========================================

    function showInstructorAuthStep() {

        if (!addLessonForm) {
            return;
        }


        addLessonForm.innerHTML = `

            <h3 class="dynamic-form-title">
                Instructor Authentication
            </h3>

            <p class="dynamic-form-subtitle">
                Please enter your credentials to manage lessons.
            </p>


            <div
                class="form-group"
                style="margin-bottom:15px;text-align:left;"
            >

                <label
                    for="instUser"
                    style="display:block;font-weight:bold;margin-bottom:5px;color:#fff;"
                >
                    Instructor Username
                </label>

                <input
                    type="text"
                    id="instUser"
                    placeholder="Enter username"
                    required
                    class="form-styled-input"
                    style="width:100%;padding:8px;"
                >

            </div>


            <div
                class="form-group"
                style="margin-bottom:15px;text-align:left;"
            >

                <label
                    for="instPass"
                    style="display:block;font-weight:bold;margin-bottom:5px;color:#fff;"
                >
                    Instructor Password
                </label>

                <input
                    type="password"
                    id="instPass"
                    placeholder="Enter password"
                    required
                    class="form-styled-input"
                    style="width:100%;padding:8px;"
                >

            </div>


            <button
                type="button"
                id="verifyInstBtn"
                class="form-styled-btn"
            >
                Verify & Continue
            </button>

        `;

    }



    // ==========================================
    // ADD LESSON FORM
    // ==========================================

    function showAddLessonStep() {

        if (!addLessonForm) {
            return;
        }


        addLessonForm.innerHTML = `

            <h3 class="dynamic-form-title">
                Add New Lesson
            </h3>


            <div
                class="form-group"
                style="margin-bottom:15px;text-align:left;"
            >

                <label
                    for="lessonTitleInput"
                    style="display:block;font-weight:bold;margin-bottom:5px;color:#fff;"
                >
                    Lesson Title
                </label>

                <input
                    type="text"
                    id="lessonTitleInput"
                    placeholder="e.g. Introduction to Variables"
                    required
                    class="form-styled-input"
                    style="width:100%;padding:8px;"
                >

            </div>


            <div
                class="form-group"
                style="margin-bottom:15px;text-align:left;"
            >

                <label
                    for="lessonUrlInput"
                    style="display:block;font-weight:bold;margin-bottom:5px;color:#fff;"
                >
                    Video URL
                </label>

                <input
                    type="url"
                    id="lessonUrlInput"
                    placeholder="https://example.com/video.mp4"
                    required
                    class="form-styled-input"
                    style="width:100%;padding:8px;"
                >

            </div>


            <button
                type="submit"
                id="saveLessonBtn"
                class="form-styled-btn"
            >
                Save Lesson
            </button>

        `;

    }



    // ==========================================
    // MODAL EVENTS
    // ==========================================

    if (addLessonForm) {

        addLessonForm.addEventListener('click', async (event) => {

            // ======================================
            // VERIFY INSTRUCTOR
            // ======================================

            if (event.target.id === 'verifyInstBtn') {

                const username =
                    document.getElementById('instUser').value.trim();

                const password =
                    document.getElementById('instPass').value;


                if (!username || !password) {

                    alert(
                        'Please enter both username and password.'
                    );

                    return;

                }


                try {

                    const response =
                        await fetch('verify-instructor.php', {

                            method: 'POST',

                            headers: {
                                'Content-Type':
                                    'application/json'
                            },

                            body: JSON.stringify({

                                username: username,

                                password: password,

                                course_id: courseId

                            })

                        });


                    const result =
                        await response.json();


                    if (result.status === 'success') {

                        showAddLessonStep();

                    } else {

                        alert(result.message);

                    }

                } catch (error) {

                    console.error(error);

                    alert(
                        'Server error verifying instructor.'
                    );

                }

            }

        });



        // ======================================
        // SAVE LESSON
        // ======================================

        addLessonForm.addEventListener('submit', async (event) => {

            event.preventDefault();


            const titleInput =
                document.getElementById('lessonTitleInput');

            const urlInput =
                document.getElementById('lessonUrlInput');


            if (!titleInput || !urlInput) {
                return;
            }


            const title =
                titleInput.value.trim();

            const videoUrl =
                urlInput.value.trim();


            if (!title || !videoUrl) {

                alert('Please fill in all fields.');

                return;

            }


            try {

                const response =
                    await fetch('add-lesson.php', {

                        method: 'POST',

                        headers: {
                            'Content-Type':
                                'application/json'
                        },

                        body: JSON.stringify({

                            course_id: courseId,

                            title: title,

                            video_url: videoUrl

                        })

                    });


                const result =
                    await response.json();


                if (result.status === 'success') {

                    alert(
                        'Lesson saved successfully!'
                    );

                    addLessonModal.style.display =
                        'none';

                    location.reload();

                } else {

                    alert(
                        'Error: ' + result.message
                    );

                }

            } catch (error) {

                console.error(error);

                alert(
                    'Failed to connect to server.'
                );

            }

        });

    }

});