-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 03:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_info`
--

CREATE TABLE `comment_info` (
  `id` int(11) NOT NULL,
  `body_text` text COLLATE utf8mb4_unicode_ci,
  `image_serial` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_info`
--

INSERT INTO `comment_info` (`id`, `body_text`, `image_serial`, `sender_id`, `tweet_id`) VALUES
(9, 'yes i am XD', NULL, 6, 13),
(11, 'no i am nigga', '5e3ee7c3dc2a12.53980106', 6, 12),
(12, 'i are not cool ya aly', NULL, 6, 12),
(13, 'i agree that aly is cooler', '5e3fb378a880b5.77863437', 5, 12),
(19, 'wana kman', NULL, 5, 9),
(21, 'i do like this picture alot :0', NULL, 6, 26);

-- --------------------------------------------------------

--
-- Table structure for table `likes_info`
--

CREATE TABLE `likes_info` (
  `id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE `message_info` (
  `id` int(11) NOT NULL,
  `body_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `image_serial` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`id`, `body_text`, `receiver_id`, `sender_id`, `image_serial`, `time`) VALUES
(406, 'hi bro', 6, 4, NULL, '2020-02-18 19:35:39'),
(407, 'how are you', 6, 4, NULL, '2020-02-18 19:35:46'),
(408, 'hi man', 6, 4, NULL, '2020-02-18 19:35:52'),
(409, 'i misss you', 6, 4, NULL, '2020-02-18 19:35:56'),
(410, 'hi joe', 6, 4, NULL, '2020-02-18 19:37:59'),
(411, 'hi aly', 4, 6, NULL, '2020-02-18 19:38:09'),
(412, 'hi man', 7, 4, NULL, '2020-02-18 19:40:56'),
(413, 'hi bro', 4, 7, NULL, '2020-02-18 19:41:02'),
(414, 'srsgregerg', 7, 4, NULL, '2020-02-18 19:41:42'),
(415, 'thrthtr', 4, 7, NULL, '2020-02-18 19:41:50'),
(416, 'hi bro', 6, 4, NULL, '2020-02-24 18:34:58'),
(417, 'hi khoulky', 4, 6, NULL, '2020-02-24 18:35:04'),
(418, 'sdsihsof', 4, 6, NULL, '2020-02-24 18:36:29'),
(419, 'ewrwer', 6, 4, NULL, '2020-02-24 18:36:37'),
(420, 'hi man', 5, 4, NULL, '2020-02-24 20:57:09'),
(421, 'hi aly', 4, 5, NULL, '2020-02-24 20:57:17'),
(422, 'hi man', 4, 6, NULL, '2020-02-25 11:15:47'),
(423, 'i miss you man', 6, 4, NULL, '2020-02-25 11:16:11'),
(424, 'dhichrl', 5, 4, NULL, '2020-02-25 14:16:49'),
(425, 'ehkdre', 4, 5, NULL, '2020-02-25 14:16:55'),
(426, 'euhfejfew', 5, 4, NULL, '2020-02-26 09:37:48'),
(427, 'wehiwjeofe', 4, 5, NULL, '2020-02-26 09:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relation_info`
--

CREATE TABLE `relation_info` (
  `id` int(11) NOT NULL,
  `user_id1` int(11) NOT NULL,
  `status` enum('unfollowing','following','requested','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unfollowing',
  `user_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tweet_info`
--

CREATE TABLE `tweet_info` (
  `id` int(11) NOT NULL,
  `body_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweet_info`
--

INSERT INTO `tweet_info` (`id`, `body_text`, `image_serial`, `sender_id`) VALUES
(3, 'i will build a never dying legacy', '5e3857f979aac5.20076093', 4),
(5, 'I want to go to Romee', '5e385a25aba6d4.08507569', 4),
(8, 'i love elon musk', '5e3b0c7cb7f3a8.21734123', 4),
(9, 'tesla is the future', '5e3f08dd9fbfa1.63472412', 4),
(11, 'i will be the next jay cutler', '5e3b0cba21f2e1.63864751', 5),
(12, 'i am the cool joe ;)', '5e3ecd157b20f3.27259966', 6),
(13, 'i\'m a noob', '', 6),
(15, 'i am new to TWITTTEEERR', '5e417ebf1f16f1.07477670', 7),
(19, 'i will lift heavy fuckin weights', '', 5),
(24, 'i want to change the world!', '5e3fe21a9cf721.93883240', 4),
(26, 'hi all i am new at this weird place called internet so say HEEEEEEEEYYYYY', '5e417102603b54.55399834', 6),
(28, 'ytfug', NULL, 4),
(29, 'ughiohoh', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_serial` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('online','offline','','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `username`, `email`, `password`, `image_serial`, `status`) VALUES
(4, 'aly feteha', 'alyfeteha1@gmail.com', '921999a', '5e3f0cc4d4e289.79933701', 'online'),
(5, 'abdo_athelete', 'mohamed@yahoo.com', '3111990m', '5e3578284d2f48.98468707', 'online'),
(6, 'joe alaa', 'youssef_alaa99@yahoo.com', 'hamada', NULL, 'offline'),
(7, 'feteha', 'feteha@gmail.com', '1234', NULL, 'offline'),
(14, 'hamda', 'hamada@gmail.com', '333', NULL, 'offline'),
(15, 'd', 'd@dd.com', '9', NULL, 'offline'),
(16, 'aly', 'hhh@ygug.com', '9', NULL, 'offline'),
(17, 'aly', 'dhf@fyg.com', '9', NULL, 'offline'),
(18, 'menna', 'menna@gmail.com', '1234', '5e4824eb1c16b3.57389805', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_info`
--
ALTER TABLE `comment_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `tweet_id` (`tweet_id`);

--
-- Indexes for table `likes_info`
--
ALTER TABLE `likes_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liker_id` (`liker_id`),
  ADD KEY `tweet_id` (`tweet_id`);

--
-- Indexes for table `message_info`
--
ALTER TABLE `message_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relation_info`
--
ALTER TABLE `relation_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id1` (`user_id1`),
  ADD KEY `user_id2` (`user_id2`);

--
-- Indexes for table `tweet_info`
--
ALTER TABLE `tweet_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_info`
--
ALTER TABLE `comment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `likes_info`
--
ALTER TABLE `likes_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_info`
--
ALTER TABLE `message_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relation_info`
--
ALTER TABLE `relation_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tweet_info`
--
ALTER TABLE `tweet_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_info`
--
ALTER TABLE `comment_info`
  ADD CONSTRAINT `comment_info_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user_information` (`id`),
  ADD CONSTRAINT `comment_info_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet_info` (`id`);

--
-- Constraints for table `likes_info`
--
ALTER TABLE `likes_info`
  ADD CONSTRAINT `likes_info_ibfk_1` FOREIGN KEY (`liker_id`) REFERENCES `user_information` (`id`),
  ADD CONSTRAINT `likes_info_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet_info` (`id`);

--
-- Constraints for table `message_info`
--
ALTER TABLE `message_info`
  ADD CONSTRAINT `message_info_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `user_information` (`id`),
  ADD CONSTRAINT `message_info_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `user_information` (`id`);

--
-- Constraints for table `relation_info`
--
ALTER TABLE `relation_info`
  ADD CONSTRAINT `relation_info_ibfk_1` FOREIGN KEY (`user_id1`) REFERENCES `user_information` (`id`),
  ADD CONSTRAINT `relation_info_ibfk_2` FOREIGN KEY (`user_id2`) REFERENCES `user_information` (`id`);

--
-- Constraints for table `tweet_info`
--
ALTER TABLE `tweet_info`
  ADD CONSTRAINT `tweet_info_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user_information` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
