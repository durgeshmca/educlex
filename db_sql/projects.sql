-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 04:44 AM
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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project`, `content`, `desc`, `updated_at`, `created_at`) VALUES
(1, 'JAVA', '<ul class=\"listTick\">\r\n                                        <li>Payment Billing Product Project</li>\r\n                                        <li>Transport Company</li>\r\n                                        <li>Connect Globe</li>\r\n                                        <li>Online Banking Project</li>\r\n                                        <li>Online Quiz Project</li>\r\n                                        <li>City Classified and Search</li>\r\n                                        <li>Mailcasting Project</li>\r\n                                        <li>Online Library Project</li>\r\n                                        <li>Pharmacy Project</li>\r\n                                        <li>Company Mailer Project</li>\r\n                                        <li>Baby Care Project</li>\r\n                                        <li>Library Management System</li>\r\n                                        <li>Broadcasting Chat Server Project</li>\r\n                                        <li>Exam System	</li>\r\n                                        <li>JApps (Java Application World)</li>\r\n                                        <li>Fee Report</li>\r\n                                        <li>Fee Management</li>\r\n                                        <li>eLibrary</li>\r\n                                      </ul>', 'Java Project List', '2018-02-21 17:25:03', '2018-02-21 17:25:03'),
(2, 'HADOOP', '<ul class=\"listTick\">\r\n                                        <li>Spark Streaming and Kafka Integration</li>\r\n                                        <li>Sentiment Analysis on Demonetization</li>\r\n                                        <li> Aviation data analysis </li>\r\n                                        <li> Scheduling Hadoop Jobs</li>\r\n                                        <li>Machine Learning with Spark</li>\r\n                                        <li> Machine Learning with Spark on Bank Use Case</li>\r\n                                        <li>Distributed SQL engine for Big Data</li>\r\n                                        <li> Map Reduce Use Case - Uber Data Analysis</li>\r\n                                        <li> MapReduce Use Case-Youtube Data Analysi</li>\r\n                                        <li>Map reduce Use case – Titanic Data Analysis</li>\r\n                                        <li>Pig Use Case - Weblog Analysis</li>\r\n                                        <li>Pig Use Case – The Daily Show Data Analysis </li>\r\n                                        <li>Sentiment Analysis on Twitter – TimeZone wise analysis</li>\r\n                                        <li> Hive Use case – Counting Hashtags Using Hive	</li>\r\n                                        <li> Pokemon Data Analysis using Apache Hive</li>\r\n                                        <li>HealthCare Use Case With Apache Spark</li>\r\n                                        <li>Analyzing New York Crime Data</li>\r\n                                        <li>Building Spam filter Engine</li>\r\n                                      </ul>', 'Project listofHadoop', '2018-02-21 17:29:45', '2018-02-21 17:29:45'),
(3, 'PHP', '<ul class=\"listTick\">\r\n                                    <li>Online Examination</li>\r\n                                    <li>Mailing Server</li>\r\n                                    <li>Social Networking</li>\r\n                                    <li>Hostel Management System</li>\r\n                                    <li>Mailing Server</li>\r\n                                    <li>Online Shopping</li>\r\n                                    <li>Online Discussion Forum</li>\r\n                                    <li>Online Library Project</li>\r\n                                    <li>Student Supervision System</li>\r\n                                    <li>Blood Bank Management System</li>\r\n                                    <li>Online Tours and Travels</li>\r\n                                    <li>Online Book Shop/Store</li>\r\n                                    <li>Online Notice Board</li>\r\n                                    <li>Invoice Management System	</li>\r\n                                    <li>Attendance Management System</li>\r\n                                    <li>Student Result Management System</li>\r\n                                    <li>Hospital Management System</li>\r\n                                    <li>Online Ticket Booking System</li>\r\n                                  </ul>', 'Project List For PHP', '2018-02-21 17:31:23', '2018-02-21 17:31:23'),
(4, 'ANDROID/IOS', '<ul class=\"listTick\">\r\n                                    <li>Classroom Automation  App </li>\r\n                                    <li>Smart Voting System</li>\r\n                                    <li>Online Furniture Shopping Mobile Application</li>\r\n                                    <li>Food Express App Project</li>\r\n                                    <li>Trip Travel Planning app</li>\r\n                                    <li>Time Table Android/IOS Application</li>\r\n                                    <li>Profile Converter and Contact Picker App</li>\r\n                                    <li>Campus Mobile Application</li>\r\n                                    <li>Job Portal Android/IOS Application</li>\r\n                                    <li>Scheduling SMS Android/IOS Application</li>\r\n                                    <li>Restaurant Android/IOS Application</li>\r\n                                    <li>Dustbin – Waste Material Management App</li>\r\n                                    <li>Android/IOS App for Training and Placement cell</li>\r\n                                    <li>Food Maker Android/IOS Application	</li>\r\n                                    <li>Android/IOS based Astrologer Application</li>\r\n                                    <li>Streaming using Smartphone as relay via Bluetooth</li>\r\n                                    <li>Location Tracking Android/IOS Project</li>\r\n                                    <li>Diet Adviser Android/IOS Project</li>\r\n\r\n                                  </ul>', 'Apps', '2018-02-21 17:32:42', '2018-02-21 17:32:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
