-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2026 at 12:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becoder_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `instructor_id`, `title`, `category`, `description`, `created_at`) VALUES
(49, 2, 'Web Programming & .NET Core', 'Web Applications', 'Advanced backend development using C# and ASP.NET Core Web APIs.', '2026-09-08 20:07:20'),
(50, 3, 'Information Technology Systems', 'General CS', 'Core concepts of IT infrastructure, hardware, and systems administration.', '2026-09-08 20:07:20'),
(51, 4, 'Introduction to Cybersecurity', 'Cybersecurity', 'Fundamental concepts of securing digital assets, networks, and personal data.', '2026-09-08 20:07:20'),
(52, 21, 'Advanced Frontend Frameworks', 'Web Applications', 'Building dynamic user interfaces using modern JavaScript frameworks and UI design.', '2026-09-08 20:07:20'),
(53, 22, 'Database Systems & SQL Optimization', 'Databases', 'Designing relational databases and writing efficient SQL performance queries.', '2026-09-08 20:07:20'),
(54, 23, 'Python Programming for Beginners', 'Programming', 'Learn Python syntax, control structures, and basic automation scripts.', '2026-09-08 20:07:20'),
(55, 24, 'Object-Oriented Programming in C#', 'Programming', 'Mastering OOP principles, classes, and methods using C#.', '2026-09-08 20:07:20'),
(56, 25, 'Data Structures & Algorithms', 'Computer Science', 'Understanding core data structures like arrays, lists, trees, and sorting algorithms.', '2026-09-08 20:07:20'),
(57, 26, 'Networking Essentials & Cisco', 'Networking', 'Introduction to network layers, IP addressing, and Cisco packet configurations.', '2026-09-08 20:07:20'),
(58, 27, 'Machine Learning Foundations', 'Artificial Intelligence', 'Basic classification models, data cleaning, and machine learning pipelines using Python.', '2026-09-08 20:07:20'),
(59, 28, 'Software Engineering Paradigms', 'Software Engineering', 'Software development life cycle, requirements analysis, and design patterns.', '2026-09-08 20:07:20'),
(60, 29, 'Ethical Hacking & Web Defense', 'Cybersecurity', 'Web security consulting, vulnerability assessment, and penetration testing basics.', '2026-09-08 20:07:20'),
(61, 30, 'Cloud Computing & Microservices', 'Cloud Architecture', 'Introduction to cloud services, deployment strategies, and scalable backend design.', '2026-09-08 20:07:20'),
(62, 31, 'UI/UX Design Principles', 'Design', 'Mobile and web application interface design with deep user experience insights.', '2026-09-08 20:07:20'),
(63, 32, 'Competitive Programming & Logic', 'Computer Science', 'Advanced algorithms, problem-solving techniques, and competitive coding.', '2026-09-08 20:07:20'),
(64, 33, 'IT Project Management', 'Management', 'Enterprise software planning, agile methodologies, and team leadership.', '2026-09-08 20:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `video_url`, `sort_order`) VALUES
(1, 49, 'ziaad', 'https://youtu.be/YTv_wz66FdY?si=FsFc3TV_HIqo5yH_', 1),
(2, 49, 'asdsdasdasd', 'https://youtu.be/YTv_wz66FdY?si=FsFc3TV_HIqo5yH_', 1),
(3, 51, 'dsasdsadsad', 'https://youtu.be/YTv_wz66FdY?si=FsFc3TV_HIqo5yH_', 1),
(4, 50, 'ziaaaaad', 'https://youtu.be/YTv_wz66FdY?si=FsFc3TV_HIqo5yH_', 1),
(5, 50, 'adssdaasdasdsa', 'https://youtu.be/GwhY92K2JdU?si=P-SpnwGTcEueDB9v', 1),
(6, 49, 'php', 'https://youtu.be/YTv_wz66FdY?si=FsFc3TV_HIqo5yH_', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('student','instructor','admin') DEFAULT 'student',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `brief` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `role`, `created_at`, `brief`) VALUES
(1, 'System', 'Admin', 'admin', 'admin@becoder.com', '123456', 'admin', '2026-09-08 19:09:08', NULL),
(2, 'Hossam', 'Ibrahim', 'instructor1', 'ahmed@becoder.com', '123456', 'instructor', '2026-09-08 19:09:08', 'Expert in Web Programming, C#, and ASP.NET Core Web APIs development.'),
(3, 'Abdelrahman', 'Mohamed', 'instructor2', 'mohamed@becoder.com', '123456', 'instructor', '2026-09-08 19:09:08', 'Specialist in Information Technology infrastructure, hardware, and systems administration.'),
(4, 'Mahmoud', 'Ibrahim', 'instructor3', 'mahmoud@becoder.com', '123456', 'instructor', '2026-09-08 19:09:08', 'Cybersecurity researcher specializing in network security, vulnerability assessment, and digital defense.'),
(21, 'Khaled', 'Omar', 'instructor4', 'khaled.omar@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Frontend developer focused on modern JavaScript frameworks, responsive UI design, and user interfaces.'),
(22, 'Youssef', 'Tarek', 'instructor5', 'youssef.tarek@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Database administrator expert in relational schema design and SQL performance tuning.'),
(23, 'Mostafa', 'Kamal', 'instructor6', 'mostafa.kamal@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Python developer and software automation enthusiast teaching core programming fundamentals.'),
(24, 'Amr', 'Nabil', 'instructor7', 'amr.nabil@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Object-Oriented Programming specialist focusing on software architecture using C#.'),
(25, 'Ibrahim', 'Sayed', 'instructor8', 'ibrahim.sayed@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Computer Science lecturer focusing on advanced data structures, trees, graphs, and sorting algorithms.'),
(26, 'Tamer', 'Fathy', 'instructor9', 'tamer.fathy@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Cisco certified network associate specializing in routing, switching, and network layers.'),
(27, 'Karim', 'Saeed', 'instructor10', 'karim.saeed@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Artificial Intelligence researcher building machine learning pipelines and classification models in Python.'),
(28, 'Ramy', 'Gamal', 'instructor11', 'ramy.gamal@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Software engineer teaching software development life cycles and design patterns.'),
(29, 'Hassan', 'Zaki', 'instructor12', 'hassan.zaki@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Ethical hacker and web defense consultant teaching vulnerability testing and security.'),
(30, 'Sherif', 'Mounir', 'instructor13', 'sherif.mounir@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Cloud computing specialist focused on microservices and scalable backend cloud deployments.'),
(31, 'Ebrahim', 'Reda', 'instructor14', 'ebrahim.reda@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'UI/UX architect with deep insights into mobile and web design principles.'),
(32, 'Ziad', 'Essam', 'instructor15', 'ziad.essam@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'Competitive programming coach specializing in problem-solving and logic algorithms.'),
(33, 'Adel', 'Fouad', 'instructor16', 'adel.fouad@becoder.com', '123456', 'instructor', '2026-09-08 20:03:43', 'IT project manager expert in agile enterprise software planning and team leadership.'),
(34, 'ahmed', 'shady', 'ahmed_55', 'ahmed@gmail.com', '20032005', 'student', '2026-09-09 09:07:30', NULL),
(35, 'Ziad', 'Sherif', 'ziad_sherif', 'zyadshrief20@gmail.com', '123456', 'student', '2026-09-09 12:58:10', NULL),
(36, 'abdo', 'abdo', 'abdoo', 'abdo20@gmail.com', '123456', 'student', '2026-09-09 21:55:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
