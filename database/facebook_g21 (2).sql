-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 08:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_g21`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `content`, `users_id`, `posts_id`) VALUES
(24, 'cute', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `posts_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `likes_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `titles` varchar(60) DEFAULT NULL,
  `Descriptions` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `image`, `titles`, `Descriptions`, `users_id`) VALUES
(200, 'download.jpg', NULL, 'hello', 1),
(208, NULL, NULL, 'koev', 1),
(226, NULL, NULL, 'qqq', 1),
(227, NULL, NULL, 'qq', 1),
(228, NULL, NULL, 'ss', 1),
(229, NULL, NULL, 'ssssssss', 1),
(230, NULL, NULL, 'zz', 1),
(231, NULL, NULL, 'zz', 1),
(232, NULL, NULL, 'qqqqqqqqqqqqqqq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `fullName` varchar(60) DEFAULT NULL,
  `nickName` varchar(60) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `passwords` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `fullName`, `nickName`, `Email`, `passwords`) VALUES
(1, 'kk', 'ooo', 'ab@gmail.com', '233'),
(2, 'koev', NULL, 'koev.song@student.passerellesnumerquiz.org', '123'),
(3, 'koev', NULL, 'songkoevabc@gmail.com', '1234'),
(4, 'koev', NULL, 'koev.song@student.passerellesnumeriques.org', '1234'),
(5, 'koev', NULL, 'koev.song@student.passerellesnumeriques.org', '12'),
(6, 'koev', NULL, 'koev.song@student.passerellesnumeriques.org', '11'),
(7, 'koev', NULL, 'koev.song@student.passerellesnumerquiz.org', '123'),
(8, 'koev', NULL, 'koev.song@student.passerellesnumerquiz.org', '123'),
(9, 'qq', NULL, 'koev.song@student.passerellesnumerquiz.org', '111'),
(10, 'koev', NULL, 'koev.song@student.passerellesnumeriques.org', '123'),
(11, 'koev', NULL, 'songkoevabc@gmail.com', '123'),
(12, 'kimky', NULL, 'kimky@gmail.com', '123'),
(13, 'kimky', NULL, 'kimky@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `posts_id` (`posts_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id` (`posts_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`posts_id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`posts_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
