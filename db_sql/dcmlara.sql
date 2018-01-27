-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 06:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcmlara`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_sem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_wrokshops`
--

CREATE TABLE `college_wrokshops` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci,
  `total_students` int(11) NOT NULL,
  `interests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement_assistance` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_wrokshops`
--

INSERT INTO `college_wrokshops` (`id`, `fname`, `lname`, `email`, `contact`, `college`, `address`, `landmark`, `state`, `city`, `images`, `total_students`, `interests`, `payment_mode`, `placement_assistance`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'United Institute of Management', 'Naini Allahabad', 'Deys medical Crossroads', 'Uttar Pradesh', 'Allahabad', NULL, 20, 'php,java,python', NULL, 1, '2018-01-25 21:45:20', '2018-01-25 21:45:20'),
(2, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'UIM Naini Allahabad', 'Noida', 'Deys medical Crossroads', 'Uttar Pradesh', 'Allahabad', NULL, 111, 'php', NULL, 0, '2018-01-25 21:48:50', '2018-01-25 21:48:50'),
(3, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'United Institute of Management', 'Naini Allahabad', 'Deys medical Crossroads', 'Uttar Pradesh', 'All', 'uploads/iejAB2IxpYSC95sy6cPfoI2pNN7zkqWHrUTgfstj.png,uploads/Nao8cOq9JQKZxXeQEENgYiZu4S3yTaNXGjRxXHG4.png,uploads/VbZOXQ3NQg3dJkQVazs0AOL6F3cydTRI7GlHu8ra.png', 103, 'hadoop,php,python', NULL, 1, '2018-01-25 22:21:06', '2018-01-25 22:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE `corporates` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_candidates` int(11) NOT NULL,
  `interests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`id`, `fname`, `lname`, `email`, `contact`, `company`, `designation`, `address`, `landmark`, `state`, `city`, `images`, `total_candidates`, `interests`, `payment_mode`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'durgeshcmishra@gmail.com', 'durgeshcmishra@gmail.com', '9811167005', 'Xsinfosol', NULL, 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'uploads.corporate/vfCJ3OQPXrgVcgmNg15Mpt0kAoY5s9iZuUnRgT6Q.png,uploads.corporate/AyfHykwpwxzniLiHUxZr3sWidHPFiep4ncmSLKYJ.png,uploads.corporate/nvmD3f2d5gPMcJcvorim19xxH0t9Q4CvrMrsgIZS.png', 123, 'hadoop,php,java', 'online', '2018-01-26 04:39:56', '2018-01-26 04:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_trainings`
--

CREATE TABLE `industrial_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_sem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industrial_trainings`
--

INSERT INTO `industrial_trainings` (`id`, `fname`, `lname`, `email`, `contact`, `address`, `landmark`, `state`, `city`, `qualification`, `college`, `year_sem`, `interests`, `images`, `payment_mode`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'B.Tech/B.E.', 'United Institute of Management', '2', 'hadoop,php,java', 'uploads.industrial/wQXY1IgmzJNXCfaTSqdPs4s810JuMFG2ly2jeDS5.jpeg', 'cash', '2018-01-26 09:48:16', '2018-01-26 09:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_24_085740_create_workshop_enquiries_table', 1),
(4, '2018_01_25_080132_create_contacts_table', 2),
(5, '2018_01_25_121131_create_college_wrokshops_table', 2),
(6, '2018_01_26_065339_create_corporates_table', 3),
(7, '2018_01_26_065527_create_classrooms_table', 3),
(8, '2018_01_26_065552_create_industrial_trainings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshop_enquiries`
--

CREATE TABLE `workshop_enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_type` enum('individual','classroom','','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'individual',
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_sem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshop_enquiries`
--

INSERT INTO `workshop_enquiries` (`id`, `enquiry_type`, `fname`, `lname`, `email`, `contact`, `addres`, `landmark`, `state`, `city`, `category`, `qualification`, `Designation`, `company`, `college`, `year_sem`, `interests`, `images`, `created_at`, `updated_at`) VALUES
(1, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', NULL, 'Uttar Pradesh', 'Pratapgarh', 'professional', 'B.Tech/B.E.', 'Team Leader', 'Xsinfosol', NULL, '8', 'hadoop,php,java', NULL, '2018-01-24 20:47:47', '2018-01-24 20:47:47'),
(2, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'United Institute of Management', '4', 'hadoop,php,java', 'uploads.individual/WHIwvpTH3G3SwXXAbAjQptq9DETVSst2FMVi6M19.jpeg', '2018-01-26 10:31:38', '2018-01-26 10:31:38'),
(3, 'classroom', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'MCA', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php', 'uploads.individual/2GOGn3mhcEvn2Zf3LA8QG05aERCAtglSZzgIknL8.jpeg', '2018-01-26 11:01:09', '2018-01-26 11:01:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_wrokshops`
--
ALTER TABLE `college_wrokshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporates`
--
ALTER TABLE `corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_trainings`
--
ALTER TABLE `industrial_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshop_enquiries`
--
ALTER TABLE `workshop_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_wrokshops`
--
ALTER TABLE `college_wrokshops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporates`
--
ALTER TABLE `corporates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industrial_trainings`
--
ALTER TABLE `industrial_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshop_enquiries`
--
ALTER TABLE `workshop_enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
