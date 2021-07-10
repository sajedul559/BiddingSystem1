-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:53 PM
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
-- Table structure for table `farmer_registers`
--

CREATE TABLE `farmer_registers` (
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
-- Dumping data for table `farmer_registers`
--

INSERT INTO `farmer_registers` (`id`, `register_as`, `username`, `email`, `mobile`, `dob`, `division`, `address`, `zip_code`, `gender`, `password`, `profile_pic`, `action`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'farmer', 'zulkarnine', 'zns601@gmail.com', '01989419776', '1997-09-25', 'Dhaka', 'Kolabagan,Dhaka', '1205', 'male', '$2y$10$5EnTljBZoUBfb8.0zziQxev5RUYtA2pDfUtkvERTs3PPmd4WZoICG', 'null', 'active', 'verified', '2020-12-29 08:33:12', '2021-01-15 02:51:20'),
(2, 'farmer', 'alomgir', 'alomgir@gmail.com', '01876543567', '1996-05-24', 'Khulna', 'noton bazar', '1211', 'male', '$2y$10$296c5wRUL5sUJNG8ZqX/FeE.C5rCEtf2/XDHU963AUVe/ua4UuhU6', 'null', 'active', 'verified', '2021-01-15 06:30:02', '2021-01-15 06:30:02'),
(3, 'farmer', 'Faruqe', 'faruqe@gmail.com', '01969084620', '1997-07-12', 'Dhaka', 'raipura', '1615', 'male', '$2y$10$QrWtmO4w4LuSipeRLKFBVOKJOn/WtKvOjHbFjs/DPUSE/WewSo4SC', 'null', 'active', 'verified', '2021-01-15 06:32:00', '2021-01-15 06:32:00'),
(4, 'farmer', 'sajedul', 'sajedul@gmail.com', '01888344856', '1995-09-26', 'Chittagong', '90/A road, hathazari', '1234', 'male', '$2y$10$oCKO0K1OG5wrJhjZNyIkO.Xv8RTg4tiaS4S5n/CRJwx6LN46h4fKK', 'null', 'active', 'verified', '2021-01-15 06:34:52', '2021-01-15 06:34:52'),
(5, 'farmer', 'hossain', 'hossain@gmail.com', '01764578235', '1993-04-30', 'Barishal', 'kuakata', '1567', 'male', '$2y$10$M4NEU4pJ/G/tyOdP.QhOGuuLF7SSTR2YpEiUohCIkBn7R/j7ZldeW', 'null', 'active', 'verified', '2021-01-15 06:37:32', '2021-01-15 06:37:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer_registers`
--
ALTER TABLE `farmer_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
