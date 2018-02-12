-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2018 at 12:54 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

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
-- Table structure for table `form_settings`
--

DROP TABLE IF EXISTS `form_settings`;
CREATE TABLE IF NOT EXISTS `form_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `form_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_settings`
--

INSERT INTO `form_settings` (`id`, `form_name`, `link_label`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Course Details', 'Course Details', 1, '2018-02-11 18:30:00', '2018-02-12 07:11:27'),
(2, 'Contact Form', 'Contact Us', 1, '2018-02-11 18:30:00', '2018-02-12 06:48:56'),
(3, 'Workshop Form At Home', 'Workshop Form', 1, '2018-02-11 18:30:00', '2018-02-12 06:59:19'),
(5, 'College Workshop', 'College workshop Form', 1, NULL, '2018-02-12 07:10:28'),
(6, 'Corporate Workshop Form', 'Corporate Workshop', 1, NULL, '2018-02-12 07:10:33'),
(7, 'Industrial Training Workshop Form', 'Industrial Training', 1, NULL, '2018-02-12 07:10:39'),
(8, 'Classroom Training Form', 'Class Room Training Form', 1, NULL, '2018-02-12 07:10:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
