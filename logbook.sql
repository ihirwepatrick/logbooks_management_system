-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `week` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `working_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `start_date`, `end_date`, `week`, `day`, `description`, `working_hours`) VALUES
(4, '2024-05-23', '2024-05-30', 6, 'Friday', 'I will be working on the field in the western province helping the cells leaders in the citizen registartions ', 3),
(5, '2024-04-30', '2024-05-21', 3, 'Thursday', 'Hello my niggas', 2),
(6, '2024-05-01', '2024-05-12', 3, 'Tuesday', '4567890', 567890),
(7, '2024-05-01', '2024-05-12', 3, 'Tuesday', '4567890', 567890),
(8, '2024-05-16', '2024-05-16', 2, 'Thursday', 'gjhklm', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created_at`) VALUES
(1, 'ihirwe@nipcts.com', 'ihirwe@nipcts.com', '$2y$10$Fe1Vzc0WX4TcSWnWZFMe4.nV219SvKC8a756ZG9UkHl2l4jrOtn7C', NULL, '2024-05-30 07:51:36'),
(2, 'ihirwe@nipcts.com', 'ihirwe@nipcts.com', '$2y$10$f9W4PTI8vm9i8NUR0TZ4juG7ljylYTY4bX.6J0tkMwXeerxXHQ.eS', NULL, '2024-05-30 07:56:25'),
(3, 'ihirwe@nipcts.com', 'hello@gmail.com', '$2y$10$NYQpLmjLB6TGkIrfC3Jq/eVCFddMgExuqv/BFa5crL6nEMcP2S4dW', NULL, '2024-05-30 08:03:37'),
(4, 'ihirwe@nipcts.com', 'nipcts@hello.com', '$2y$10$en/JdIebGfYfPfL6XZ2C6OTjNgRmgxrO3XagWPM57cQY.BSlD20RS', NULL, '2024-05-30 08:05:05'),
(5, 'nip', 'drippy@gmail.com', '$2y$10$FMpMHpvo3gg6ba0GsQdEXumXGlTMosknlwVk7CKa20Uvhtzw2KVxy', NULL, '2024-05-30 08:06:57'),
(7, 'drippy@gmail.com', 'admin@gmail.com', '$2y$10$btNP5LFIyCCir8/Z6la/u.JwN4Vxw4xx3naqY.4UItGOJBd4o48ta', 1, '2024-05-30 08:18:27'),
(8, 'teacher', 'tt@gmail.com', '$2y$10$QxMqspc1ktBAZO.4SU6NVe71Zym9MuDy1L/LoizkD7QH9xIgAxRg.', 2, '2024-05-30 08:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `activities` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
