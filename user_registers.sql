-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registers`
--

CREATE TABLE `user_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `register_as` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `division` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_registers`
--

INSERT INTO `user_registers` (`id`, `register_as`, `username`, `email`, `mobile`, `dob`, `division`, `address`, `zip_code`, `gender`, `password`, `profile_pic`, `action`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'zulkarnine', 'zns601@gmail.com', '01660144436', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$szL3ySjeYWF3Sb.Yg6x9W.zoSY5fvmnPuOZ7qG1e8pwXaoJ2PbfZO', 'null', 'active', 'verified', '2020-12-29 08:35:19', '2021-01-15 02:51:34'),
(2, 'customer', 'alomgir', 'alomgir@gmail.com', '01876543567', '1995-09-26', 'Dhaka', 'noton bazar', '1211', 'male', '$2y$10$R6R8S2jH0unUaBNY3i76wuX.PERvwc4ePLWbAztSNai.Vji88.yuu', 'null', 'active', 'verified', '2021-01-15 06:39:57', '2021-01-15 06:39:57'),
(3, 'customer', 'Faruqe', 'faruqe@gmail.com', '01969084620', '1996-04-02', 'Chittagong', 'hathhazari', '1506', 'male', '$2y$10$DcVBqY1SDCcJAiI7RQ/8qOu8jqbOedKXlj7m2SU1vQZQCaCspkboO', 'null', 'active', 'verified', '2021-01-15 06:41:15', '2021-01-15 06:41:15'),
(4, 'customer', 'sajedul', 'sajedul@gmail.com', '01888344856', '1994-12-26', 'Dhaka', '1606', '1606', 'male', '$2y$10$DVGvgGtOX06EkWHXZNiwtOaX7t9AXmxbag3PIlAO9rPiJhRHRHUci', 'null', 'active', 'verified', '2021-01-15 06:44:45', '2021-01-15 06:44:45'),
(5, 'customer', 'hossain', 'hossain@gmail.com', '01764578235', '1999-05-31', 'Comilla', '45 kollandi', '1703', 'male', '$2y$10$1dr1SbMaNufMXIi0r3G/dOhMVRzdVnqcCGWiueYWNfUVoqZMyD2AK', 'null', 'active', 'verified', '2021-01-15 06:47:37', '2021-01-15 06:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registers`
--
ALTER TABLE `user_registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registers`
--
ALTER TABLE `user_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
