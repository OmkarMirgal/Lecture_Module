-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 06:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecture_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `course_id`, `batch_id`, `user_id`, `batch_date`) VALUES
(1, 1, 1, 2, '2023-07-01'),
(2, 1, 2, 2, '2023-07-02'),
(3, 2, 3, 2, '2023-07-08'),
(4, 2, 4, 3, '2023-07-01'),
(5, 3, 5, 3, '2023-07-02'),
(6, 4, 6, 3, '2023-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `course_id`, `batch_name`, `batch_date`) VALUES
(1, 1, 'tesxst', '2023-07-01'),
(2, 1, 'tesuacv', '2023-07-02'),
(3, 2, 'hvbkh bcx', '2023-07-08'),
(4, 2, 'etgtrht', '2023-07-01'),
(5, 3, 'sdvsdv', '2023-07-02'),
(6, 4, 'dfbfddfzb', '2023-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `level`, `description`, `image_path`) VALUES
(1, 'test', 'Beginner', 'test', 'uploads/1688205178_aeedf673e49c8eac29de.jpg'),
(2, 'abc', 'Beginner', 'cdszc', 'uploads/1688217450_0c29567ce9b34bd808bc.jpg'),
(3, 'dsvds', 'Advance', 'dsbfdbd', 'uploads/1688226264_da5f3a40316108ea771b.jpg'),
(4, 'dfbgfnrfg', 'Intermediate', 'fdbdzf', 'uploads/1688227386_3a6653e9e82da8be2d20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(2) NOT NULL DEFAULT 'U',
  `login_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `user_type`, `login_at`) VALUES
(1, 'admin', 'admin', 'A', '2023-06-30 19:56:47'),
(2, 'Tom', 'Tom', 'U', '2023-06-30 19:57:44'),
(3, 'Jack', 'Jack', 'U', '2023-06-30 19:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
