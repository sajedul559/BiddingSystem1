-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:22 PM
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
-- Table structure for table `crop_imports`
--

CREATE TABLE `crop_imports` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_session` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_quantity` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_rate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date_bidding` date NOT NULL,
  `crop_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crop_image2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Action` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crop_imports`
--

INSERT INTO `crop_imports` (`id`, `username`, `crop_name`, `crop_session`, `crop_type`, `crop_quantity`, `crop_location`, `bid_rate`, `crop_description`, `last_date_bidding`, `crop_image`, `crop_image2`, `status`, `condition`, `Action`, `created_at`, `updated_at`) VALUES
(2, 'zulkarnine', 'Lichu', '2', '1', '23', 'araihazar,dhaka,bangladesh', '2345', 'hello', '2020-12-10', 'public/crop_images/1copy.PNG', 'public/crop_images/1copy.PNG', '0', 'old', 'deleted', '2020-11-26 04:15:21', '2021-01-13 00:03:14'),
(5, 'zulkarnine', 'sorisa', '3', '5', '1 bighas', 'rajshahi', '5000', 'made by bangladesh', '2020-12-31', 'public/crop_images/1610723217.mustard1.jpg', 'public/crop_images/1610723217.mustard2.jpg', '1', 'old', 'Published', '2020-12-01 01:02:55', '2021-01-15 09:08:11'),
(6, 'zulkarnine', 'komola', '1', '1', '10 tress', 'rajshahi', '40000', 'from bangladesh', '2020-12-25', 'public/crop_images/komola.jpg', 'public/crop_images/1610723961.orange2.jpg', '0', 'New', 'Published', '2020-12-10 23:35:51', '2021-01-15 09:21:49'),
(7, 'zulkarnine', 'Lichu', '3', '1', '10 tress', 'araihazar1450,dhaka,bangladesh', '4000', 'from bangladesh', '2020-12-30', 'public/crop_images/1610723841.9.jpg', 'public/crop_images/download.jpg', '1', 'New', 'Published', '2020-12-21 01:00:24', '2021-01-15 09:21:47'),
(10, 'alomgir', 'grapes', '2', '1', '10 tress', 'khulna', '6000', 'for consumers', '2021-02-25', 'public/crop_images/1610715801.grapes.jpg', 'public/crop_images/1610715801.grapes2.jpg', '1', 'New', 'Published', '2021-01-15 07:03:21', '2021-01-15 07:58:31'),
(11, 'sajedul', 'badacophy', '2', '2', '10 bighas', 'chittagong', '5000', 'for consumers', '2021-01-28', 'public/crop_images/1610716188.Cabbage.jpg', 'public/crop_images/1610716188.Cabbage2.jpg', '1', 'New', 'Published', '2021-01-15 07:09:48', '2021-01-15 07:58:33'),
(12, 'zulkarnine', 'Rice', '3', '3', '40 kg', 'chittagong', '3000', 'for consumers', '2021-02-06', 'public/crop_images/1610721658.rice.jpg', 'public/crop_images/1610721658.rice2.jpg', '1', 'New', 'Published', '2021-01-15 08:40:58', '2021-01-15 08:41:11'),
(13, 'zulkarnine', 'tea', '1', '4', '1 bighas', 'Norshingdi', '9000', 'for consumers', '2021-02-15', 'public/crop_images/1610722084.tea.jpg', 'public/crop_images/1610722084.tea2.jpg', '1', 'New', 'Published', '2021-01-15 08:48:05', '2021-01-15 08:50:19'),
(14, 'zulkarnine', 'peaj', '1', '2', '40 kg', 'rajshahi', '6000', 'for consumers', '2021-02-16', 'public/crop_images/1610722836.Onion2.jpg', 'public/crop_images/1610722836.Onion.jpg', '1', 'New', 'Published', '2021-01-15 09:00:36', '2021-01-15 09:00:43'),
(15, 'zulkarnine', 'cotton', '2', '5', '20 trees', 'araihazar,dhaka,bangladesh', '10000', 'for consumers', '2021-02-22', 'public/crop_images/1610723102.cotton.jpg', 'public/crop_images/1610723102.cotton2.jpg', '1', 'New', 'Published', '2021-01-15 09:05:02', '2021-01-15 09:05:15'),
(16, 'zulkarnine', 'butta', '1', '3', '20kg', 'rajshahi', '500', 'for consumers', '2021-02-28', 'public/crop_images/1610723529.maize.jpg', 'public/crop_images/1610723529.maize2.jpg', '1', 'New', 'Published', '2021-01-15 09:12:09', '2021-01-15 09:15:41'),
(17, 'zulkarnine', 'soyabean', '1', '4', '1 bighas', 'raipura,dhaka', '1500', 'for consumer', '2021-01-25', 'public/crop_images/1610723734.syebean2.jpg', 'public/crop_images/1610723734.soyebean.jpg', '1', 'New', 'Published', '2021-01-15 09:15:34', '2021-01-15 09:15:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop_imports`
--
ALTER TABLE `crop_imports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crop_imports`
--
ALTER TABLE `crop_imports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
