-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 03:17 PM
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
-- Database: `medhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis_lab`
--

CREATE TABLE `analysis_lab` (
  `id` int(11) NOT NULL,
  `commercial_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number(s)` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'delimited by '',''',
  `address(es)` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'delimited by '','''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analysis_lab`
--

INSERT INTO `analysis_lab` (`id`, `commercial_name`, `password`, `phone_number(s)`, `address(es)`) VALUES
(1, 'elshams', '$2y$10$qbgI80Kidn6zBG.JAwoPNeGj9JN6P.uBoA4wDELc0Qptnx7gnlB1G', '03546732', '32 elmaadi street cairo egypt');

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` int(11) NOT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `prescribed_medicine` text COLLATE utf8mb4_unicode_ci COMMENT 'delimited by '',''',
  `concentration` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doctor_id` int(11) NOT NULL,
  `period_of_drug_use(days)` int(11) NOT NULL,
  `requested_lab_analysis_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `diagnosis`, `patient_id`, `prescribed_medicine`, `concentration`, `Doctor_id`, `period_of_drug_use(days)`, `requested_lab_analysis_id`, `date_of_diagnosis`) VALUES
(7, 'headache', 7, 'voltarine', '200mg', 2, 10, 'full blood analysis', '2020-2-1'),
(8, 'kidney failure and will need kidney transplant', 7, 'spazmomeen', '10mg', 2, 20, 'full blood analysis', '2020-2-11');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syndicate_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','prefer not to say','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proficiency` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_address` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `full_name`, `national_number`, `syndicate_number`, `password`, `gender`, `profile_picture`, `proficiency`, `phone_number`, `work_address`) VALUES
(1, 'mohamed ofara', '$2y$10$AsYGZBSET7X8ZhkynebtN.gIp1lILr4soklkBjS3StTSxJ5Lwkhqm', '$2y$10$EuRaG3dLuhfBZywQZHAJ2uVpwMRpXwiBHZIp3CsHeF62p7zcwqqVu', '$2y$10$TqBf2zt4YTkBZ6DV0IBje.R3epissJFxELnLiEIr.uOwg6dbf5XXe', 'male', '5e4f5c87214456.53008072.jpg', 'expert in neurology', '03292929', 'andalosia smouha'),
(2, 'mahmoud elhalafawy', '$2y$10$iviC4la8RsKwAuDJ2caxt.CH6F.4cbD36a3qp1hG9WSE9VslgiYaW', '$2y$10$3loVvKyN4SdFmksn0HU.XuOmzAFzi4NyYW686cDLujbaGJCivKTF2', '$2y$10$GfzdktFug0A7vRNVPdtqxODaI71URg8OwBgQnU5o2CCbY7etCYjlS', 'male', '', 'expert in neurology', '03748494', 'andalosia smouha');

-- --------------------------------------------------------

--
-- Table structure for table `lab_analysis_names`
--

CREATE TABLE `lab_analysis_names` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_taking_sample` datetime NOT NULL,
  `place_id` int(11) NOT NULL,
  `diagnosis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients_information`
--

CREATE TABLE `patients_information` (
  `id` int(11) NOT NULL,
  `national_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','prefer not to say','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients_information`
--

INSERT INTO `patients_information` (`id`, `national_number`, `full_name`, `password`, `date_of_birth`, `gender`, `profile_picture`, `address`, `phone_number`) VALUES
(7, '$2y$10$Rwzr5kFZ7NZr.z8dFNMHqupM/6M355..tnKaBT8msaxXtVAOWV7Ya', 'aly feteha abdelhalim', '$2y$10$5KFEp1ZtdMsdy0TN.hCfLOIiNKGYu9B5324ytzd/gKQzaKqhsyCkO', '1999-04-10', 'male', '5e4f8d6a1b5459.69414535.jpg', 'pharmacy elmaadi 32 st cairo', '03546732');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syndicate_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','prefer not to say','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'prefer not to say',
  `work_place_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_phone_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`id`, `full_name`, `national_number`, `syndicate_number`, `password`, `gender`, `work_place_address`, `work_phone_number`, `profile_picture`) VALUES
(4, 'aly mohmed ahmed', '$2y$10$RlnRl6MiXsOiLf5CtjHiMuhAv9MSAwPE6Sc0.s0mWhSwHiGCAGX6S', '$2y$10$DVZYml4WhEzZ67duCMidaOiRZML1OVfT1UCAg.P6ORQXgmVFjDFyK', '$2y$10$GJLCmkYqchNLPqbVyqV24evnB1naMj.XJl2P4nSO05nFImexm1tQ.', 'male', '32 elmaadi street cairo egypt', '03546732', '5e4f5c87214456.53008072.jpg'),
(5, 'mohamed hassam elsayed', '$2y$10$da0YUfe7ILnzlbXvEZFwMu2ygMEiQQNiVS0mTtD0NuNOJWbDoTf7G', '$2y$10$pZr8RjG9GFaZX3vl.REH5ebeF4M5FqPrtx8VgvugMAZc3IGEiwZo6', '$2y$10$54zMCL/zaoH.duMeatt5q./aJLOJyo8RB94lcMAcnwlUwzogvVf12', 'male', '32 elmaadi street cairo egypt', '03543223', '5e4f5c87214456.53008072.jpg'),
(6, 'yara mohamed ibrahim', '$2y$10$PwNJS.phQ4C7BYHSiMsxreJ3lIMlETZ8fQZElHGj7wtZNkmHclvlm', '$2y$10$kUGsZK2Pe7is2UQ2z1aDHeZBbNa0hY/F61Oz7g4Twt40380ABnfV2', '$2y$10$tPwVqR2SnrYQhdGhaww5LuQe4BM9TlDd2JsJ2mcaNkQU3qp66GJm6', 'female', '32 elmaadi street cairo egypt', '03546732', '5e4f5c87214456.53008072.jpg'),
(7, 'mariam mohamed', '$2y$10$td3Rylv1crmaREK5IrBtPOeVy7yI8j4YRzq1RF6aWy2LMbBDn70Uu', '$2y$10$lB0UH1lSv4nqslx.bWBMvelkH/9UvfhxQAsxpUz2J.6Vv0rN6Rw2i', '$2y$10$DsW1O0TgJDXwJLFd.BWSYuvKdskYTMLbOzuLwk8DFgTGoLM9aHgCi', 'female', 'pharmacy elmaadi 32 st cairo', '03828383', '5e4f5c87214456.53008072.jpg'),
(13, 'jumana gaber', '$2y$10$gD7uc6YUqrvjCSa9/RCYc.9ScgGhbWzb2/NfFQA0Y6RjFOIrXjEMO', '$2y$10$j9oytftHK0EhkXxO6BuKe.gJIta09La30ploy1yzwE0qZHQDjmGti', '$2y$10$xlRkZwJqwH9fhW7No1Ri3u7O3adpqy347nP3iFPNgyNZH/g4iP4C2', 'female', 'pharmacy elmaadi 32 st cairo', '03828383', '5e4f7fcd1d4ed5.16851809.jpg'),
(14, 'doaa ibrahim', '$2y$10$kI0FaIc1/DtcLyGDB63HU.hoBPeShDvdnZwlNpxTXv0PiIoJSQlv.', '$2y$10$b//RYTBiMK.GsMr9hA.02.pZn5/MipU.k/sKcCR2MXTjvxVtVjtzC', '$2y$10$zwU6c2VAfLTT.SsP8VcCNOIA5omENFEehhX65zXU3sWBazkJq.kpW', 'female', 'pharmacy elmaadi 32 st cairo', '03828383', '5e4fa2c6c27270.90620545.jpg'),
(15, 'hossam hossam', '$2y$10$bWLj6o2LTg3bHUQAhm/K8.O/PlEu.xYjwGWDR.jP3ee5WU2uCQyLW', '$2y$10$yOKfNgk228RF.2voZfxhFusRQtBlz0rbMoNZGZ44vXEOXnB2Tzv4C', '$2y$10$AAQyUcXn5JE5s8m.3LREnOYkzJYCbksQ86K4in/0cokKCLlRwgrJu', 'male', 'pharmacy elmaadi 32 st cairo', '032973923', '5e4f5c87214456.53008072.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_comments`
--

CREATE TABLE `pharmacist_comments` (
  `id` int(11) NOT NULL,
  `pharmacist_comment_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_selling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not sold yet',
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis_lab`
--
ALTER TABLE `analysis_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Doctor_id` (`Doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_analysis_names`
--
ALTER TABLE `lab_analysis_names`
  ADD KEY `diagnosis_id` (`diagnosis_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `patients_information`
--
ALTER TABLE `patients_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist_comments`
--
ALTER TABLE `pharmacist_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosis_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis_lab`
--
ALTER TABLE `analysis_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients_information`
--
ALTER TABLE `patients_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pharmacist_comments`
--
ALTER TABLE `pharmacist_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD CONSTRAINT `diagnoses_ibfk_1` FOREIGN KEY (`Doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `diagnoses_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients_information` (`id`);

--
-- Constraints for table `lab_analysis_names`
--
ALTER TABLE `lab_analysis_names`
  ADD CONSTRAINT `lab_analysis_names_ibfk_1` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnoses` (`id`),
  ADD CONSTRAINT `lab_analysis_names_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `analysis_lab` (`id`);

--
-- Constraints for table `pharmacist_comments`
--
ALTER TABLE `pharmacist_comments`
  ADD CONSTRAINT `pharmacist_comments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `diagnoses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
