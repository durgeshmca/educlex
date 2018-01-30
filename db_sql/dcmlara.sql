-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2018 at 01:26 PM
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
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
CREATE TABLE IF NOT EXISTS `classrooms` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_wrokshops`
--

DROP TABLE IF EXISTS `college_wrokshops`;
CREATE TABLE IF NOT EXISTS `college_wrokshops` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_wrokshops`
--

INSERT INTO `college_wrokshops` (`id`, `fname`, `lname`, `email`, `contact`, `college`, `address`, `landmark`, `state`, `city`, `images`, `total_students`, `interests`, `payment_mode`, `placement_assistance`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'United Institute of Management', 'Naini Allahabad', 'Deys medical Crossroads', 'Uttar Pradesh', 'Allahabad', NULL, 20, 'php,java,python', NULL, 1, '2018-01-25 21:45:20', '2018-01-25 21:45:20'),
(2, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'UIM Naini Allahabad', 'Noida', 'Deys medical Crossroads', 'Uttar Pradesh', 'Allahabad', NULL, 111, 'php', NULL, 0, '2018-01-25 21:48:50', '2018-01-25 21:48:50'),
(3, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'United Institute of Management', 'Naini Allahabad', 'Deys medical Crossroads', 'Uttar Pradesh', 'All', 'uploads/iejAB2IxpYSC95sy6cPfoI2pNN7zkqWHrUTgfstj.png,uploads/Nao8cOq9JQKZxXeQEENgYiZu4S3yTaNXGjRxXHG4.png,uploads/VbZOXQ3NQg3dJkQVazs0AOL6F3cydTRI7GlHu8ra.png', 103, 'hadoop,php,python', NULL, 1, '2018-01-25 22:21:06', '2018-01-25 22:21:06'),
(4, 'Durgesh', 'Mishra', 'durgeshcmishra@live.in', '9811167005', 'UIM Naini Allahabad', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'uploads/uWtgMRlcm6627mblEDr8GpGaR3fiIaXvqArL4O4E.png,uploads/2ZgsWlMANcxUu86l518UMxp5GRRQfiGbMk6euVOr.png,uploads/F0SKfEziP5YRn8ixANjooGEitlOeF8wylLBI5xQk.png', 124, 'hadoop,php,java', NULL, 0, '2018-01-30 05:30:45', '2018-01-30 05:30:45'),
(5, 'Durgesh', 'Mishra', 'durgeshcmishra@live.in', '9811167005', 'UIM Naini Allahabad', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'uploads/87RQdzoexMPxGurBUzl9nttqm6oawDhKLKCkaOsr.png,uploads/VWpiQ4ABXJ0HDcOe9RYXjMJKwJlS68pbFUC1shFv.png,uploads/FjTGNtdTr06aKxBvzM7VD4YaCspumH9LO72asX24.png', 124, 'hadoop,php,java', NULL, 0, '2018-01-30 05:31:27', '2018-01-30 05:31:27'),
(6, 'Durgesh', 'Mishra', 'durgeshcmishra@live.in', '9811167005', 'UIM Naini Allahabad', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'uploads/TY5KvCfBl62nG1Kl7msnTEvW5yusKMXbevst136e.png,uploads/k8dIAqhZ4y7ic0x1hiAMwuLY5ihNdptlnE0w8Duc.png,uploads/qq39rZhPjWKxs6fRhyEwOyRqGiO7NctcvE4tCIGs.png', 124, 'hadoop,php,java', NULL, 0, '2018-01-30 05:47:03', '2018-01-30 05:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh Chandra Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'php java', 'hi how r u', '2018-01-30 07:26:32', '2018-01-30 07:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

DROP TABLE IF EXISTS `corporates`;
CREATE TABLE IF NOT EXISTS `corporates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`id`, `fname`, `lname`, `email`, `contact`, `company`, `designation`, `address`, `landmark`, `state`, `city`, `images`, `total_candidates`, `interests`, `payment_mode`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'durgeshcmishra@gmail.com', 'durgeshcmishra@gmail.com', '9811167005', 'Xsinfosol', NULL, 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'uploads.corporate/vfCJ3OQPXrgVcgmNg15Mpt0kAoY5s9iZuUnRgT6Q.png,uploads.corporate/AyfHykwpwxzniLiHUxZr3sWidHPFiep4ncmSLKYJ.png,uploads.corporate/nvmD3f2d5gPMcJcvorim19xxH0t9Q4CvrMrsgIZS.png', 123, 'hadoop,php,java', 'online', '2018-01-26 04:39:56', '2018-01-26 04:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `content`, `desc`) VALUES
(1, 'PHP', 'Language Basic\r\nLanguage cunstruct\r\nArrays\r\nFunctions\r\nOOPS\r\nPHP Frameworks\r\nCodeigniter\r\nLaravel\r\n', 'PHP Language tack with basic of mysql'),
(2, 'JAVA', 'Core Java\r\nAdvanced JAVA\r\nJAVA Frameworks', 'Java Programming'),
(3, 'Dot NET', 'Dot Net Course content', 'Dot Net MVC'),
(4, 'Python', 'Python Course Content', 'Python Programming Languages and Framework'),
(5, 'MySql', 'Mysql Database\r\nCRUD\r\nTriggers\r\nCursors\r\nFunctions and Procedures\r\nCluster', 'Mysql Database'),
(6, 'Linux', 'Linux Administrator\r\nWorking with Shell\r\nKVM\r\nACL\r\n', 'Linux System Administration'),
(7, 'Oracle', 'Oracle Database\r\nCRUD\r\nTriggers\r\nCursors\r\nFunctions and Procedures\r\nCluster', 'Oracle Database'),
(8, 'SalesForce', 'SalesForce administartor and Salesfoce Developer', 'Salesforce'),
(9, 'SAP', 'ABAP\r\nTechnical module, basically a language for business applications\r\nBASIS\r\nTechnical module who responsible for configuring and maintaining the operating system and database of SAP\r\nBI/BW\r\nLeading data warehousing and reporting tool\r\nSD\r\nFunctional Module for Sales & Distribution\r\nCO\r\nFunctional Module for cost management\r\nCRM\r\nFunctional module Customer Relationship Management\r\nFI\r\nFunctional Module for company-wide control and integration of financial information Projects\r\nPP\r\nFunctional Module for Production Planning\r\nMM\r\nFunctional Module for Material Management', 'Best SAP Training'),
(10, 'CCNA/CCNP', 'Describe how a network works\r\nDescribe the purpose and functions of various network devices\r\nDescribe the purpose and functions of various network devices\r\nSelect the components required to meet a network specification\r\nUse the OSI and TCP/IP models and their associated protocols to explain how data flows in a network\r\nDescribe common networked applications including web applications\r\nDescribe the purpose and basic operation of the protocols in the OSI and TCP models\r\nDescribe the impact of applications (Voice Over IP and Video Over IP) on a network\r\nInterpret network diagrams\r\nDetermine the path between two hosts across a network\r\nDescribe the components required for network and Internet communications\r\nIdentify and correct common network problems at layers 1, 2, 3 and 7 using a layered model approach\r\nDifferentiate between LAN/WAN operation and features\r\nConfigure, verify and troubleshoot a switch with VLANs and interswitch communications\r\nSelect the appropriate media, cables, ports, and connectors to connect switches to other network devices and hosts\r\nExplain the technology and media access control method for Ethernet networks\r\nExplain network segmentation and basic traffic management concepts\r\nExplain basic switching concepts and the operation of Cisco switches\r\nPerform and verify initial switch configuration tasks including remote access management\r\nVerify network status and switch operation using basic utilities (including: ping, traceroute, telnet, SSH, arp, ipconfig), SHOW & DEBUG commands\r\nIdentify, prescribe, and resolve common switched network media issues, configuration issues, auto negotiation, and switch hardware failures\r\nDescribe enhanced switching technologies (including: VTP, RSTP, VLAN, PVSTP, 802.1q)\r\nDescribe how VLANs create logically separate networks and the need for routing between them\r\nConfigure, verify, and troubleshoot VLANs\r\nConfigure, verify, and troubleshoot trunking on Cisco switches\r\nConfigure, verify, and troubleshoot interVLAN routing\r\nConfigure, verify, and troubleshoot VTP\r\nConfigure, verify, and troubleshoot RSTP operation\r\nInterpret the output of various show and debug commands to verify the operational status of a Cisco switched network.\r\nImplement basic switch security (including: port security, trunk access, management vlan other than vlan1, etc.)\r\nImplement an IP addressing scheme and IP Services to meet network requirements\r\nDescribe the operation and benefits of using private and public IP addressing\r\nExplain the operation and benefits of using DHCP and DNS\r\nConfigure, verify and troubleshoot DHCP and DNS operation on a router.(including: CLI/SDM)\r\nImplement static and dynamic addressing services for hosts in a LAN environment\r\nCalculate and apply an addressing scheme including VLSM IP addressing design to a network\r\nDetermine the appropriate classless addressing scheme using VLSM and summarization to satisfy addressing requirements in a LAN/WAN environment\r\nDescribe the technological requirements for running IPv6 in conjunction with IPv4 (including: protocols, dual stack, tunneling, etc).\r\nDescribe IPv6 addresses\r\nIdentify and correct common problems associated with IP addressing and host configurations\r\nConfigure, verify and troubleshoot a switch with VLANs and interswitch communications\r\nDescribe basic routing concepts (including: packet forwarding, router lookup process)\r\nDescribe the operation of Cisco routers (including: router bootup process, POST, router components)\r\nSelect the appropriate media, cables, ports, and connectors to connect routers to other network devices and hosts\r\nConfigure, verify, and troubleshoot RIPv2\r\nAccess and utilize the router to set basic parameters.(including: CLI/SDM)\r\nConnect, configure, and verify operation status of a device interface\r\nVerify device configuration and network connectivity using ping, traceroute, telnet, SSH or other utilities\r\nPerform and verify routing configuration tasks for a static or default route given specific routing requirements\r\nManage IOS configuration files. (including: save, edit, upgrade, restore)\r\nManage Cisco IOS\r\nCompare and contrast methods of routing and routing protocols\r\nConfigure, verify, and troubleshoot OSPF\r\nConfigure, verify, and troubleshoot EIGRP\r\nVerify network connectivity (including: using ping, traceroute, and telnet or SSH)\r\nTroubleshoot routing issues\r\nVerify router hardware and software operation using SHOW & DEBUG commands.\r\nImplement basic router security\r\nExplain and select the appropriate administrative tasks required for a WLAN\r\nDescribe standards associated with wireless media (including: IEEE WI-FI Alliance, ITU/FCC)\r\nIdentify and describe the purpose of the components in a small wireless network. (Including: SSID, BSS, ESS)\r\nIdentify the basic parameters to configure on a wireless network to ensure that devices connect to the correct access point\r\nCompare and contrast wireless security features and capabilities of WPA security (including: open, WEP, WPA-1/2)\r\nIdentify common issues with implementing wireless networks. (Including: Interface, miss configuration)\r\nIdentify security threats to a network and describe general methods to mitigate those threats\r\nDescribe today\'s increasing network security threats and explain the need to implement a comprehensive security policy to mitigate the threats\r\nExplain general methods to mitigate common security threats to network devices, hosts, and applications\r\nDescribe the functions of common security appliances and applications\r\nDescribe security recommended practices including initial steps to secure network devices\r\nImplement, verify, and troubleshoot NAT and ACLs in a medium-size Enterprise branch office network\r\nDescribe the purpose and types of ACLs\r\nConfigure and apply ACLs based on network filtering requirements.(including: CLI/SDM)\r\nConfigure and apply an ACLs to limit telnet and SSH access to the router using (including: SDM/CLI)\r\nVerify and monitor ACLs in a network environment\r\nTroubleshoot ACL issues\r\nExplain the basic operation of NAT\r\nConfigure NAT for given network requirements using (including: CLI/SDM)\r\nTroubleshoot NAT issues\r\nImplement and verify WAN links\r\nDescribe different methods for connecting to a WAN\r\nConfigure and verify a basic WAN serial connection\r\nConfigure and verify Frame Relay on Cisco routers\r\nTroubleshoot WAN implementation issues\r\nDescribe VPN technology (including: importance, benefits, role, impact, components)\r\nConfigure and verify a PPP connection between Cisco routers', 'CCNA/CCNP Course'),
(11, 'MongoDB', 'Introduction and Overview\r\nCreating, Reading and Updating Data (CRUD)\r\nPerformance\r\nReplication\r\nReplication, Part 2\r\nScalability\r\nBackup and Recovery', 'MogoDB '),
(12, 'Internet Of Things', 'Business Overview of Why IoT is so important\r\nCase Studies from Nest, CISCO and top industries\r\nIoT adaptation rate in North American & and how they are aligning their future business model and operation around IoT\r\nBroad Scale Application Area\r\nSmart house and smart city\r\nIndustrial Internet\r\nSmart Cars\r\nWearables\r\nHome healthcare\r\nBusiness Rule generation for IoT\r\n3 layered architecture of Big Data –Physical (Sensors), Communication and Data Intelligence\r\nIntroduction of IoT: All about Sensors\r\nBasic function and architecture of a sensor –Sensor body, sensor mechanism, sensor calibration, sensor maintenance, cost and pricing structure, legacy and modern sensor network- All basics about the sensors\r\nDevelopment of sensor electronics- IoT vs legacy and open source vs traditional PCB design style\r\nDevelopment of Sensor communication protocols –history to modern days. Legacy protocols like Modbus, relay, HART to modern day Zigbee, Zwave, X10,Bluetooth, ANT etc..\r\nBusiness driver for sensor deployment- FDA/EPA regulation, Fraud/tempering detection, supervision, Quality control and process management\r\nDifferent Kind of Calibration Techniques-manual, automation, infield, primary and secondary calibration –their implication in IoT\r\nPowering options for sensors-Battery, solar, Witricity. Mobile and PoE\r\nIntroduction to Sensor Network and Wireless protocol\r\nWhat is a sensor network? What is Ad-hoc network ?\r\nWireless vs. Wireline network\r\nWiFi- 802.11 families: N to S- application of each standards and common vendors.\r\nZigbee and Zwave-advantage of low power mesh networking. Long distance Zigbee. Introduction to different Zigbee chips:\r\nBluetooth/BLE: Low power vs high power, speed of detection, class ofBLE. Introduction of Bluetooth vendors & their review :\r\nCreating network with Wireless protocols such as Piconet by BLE\r\nProtocol stacks and packet structure for BLE and Zigbee\r\nOther long distance RF communication link\r\nLOS vs NLOS links\r\nSensor network packet architecture\r\nCapacity and throughput calculation\r\nApplication issues in wireless protocols- power consumption, reliability, PER, QoS, LOS\r\nReview of Electronics Platform, production and cost projection\r\nPCB vs FPGA vs ASIC design-how to take decision\r\nPrototyping electronics vs Production electronics\r\nQA certificate for IoT- CE/CSA/UL/IEC/RoHS/IP65: What are those and\r\nBasic introduction of multi-layer PCB design and its workflow when needed?\r\nElectronics reliability-basic concept of FIT and early mortality rate\r\nEnvironmental and reliability testing-basic concepts\r\nBasic Open source platforms: Adruino, Rasberry Pi, Beaglebone, RedBack, Diamond Back\r\nConceiving a new IoT product- Product requirement document for IoT\r\nState of the present art and review of existing technology in the marketplace\r\nSuggestion for new features and technologies based on market analysis and patent issues\r\nDetailed technical specs for new products- System, software, hardware, mechanical, installation etc.\r\nPackaging and documentation requirements\r\nServicing and customer support requirements\r\nHigh level design (HLD) for understanding of product concept\r\nRelease plan for phase wise introduction of the new features\r\nSkill set for the development team and proposed project plan -cost & duration\r\nTarget manufacturing price\r\nIntroduction to Mobile app platform & Middleware for IoT\r\nProtocol stack of Mobile app for IoT\r\nFundamentals of WAP ( Wireless application protocols)\r\nMobile to server integration –what are the factors to look out\r\nWhat are the intelligent layer that can be introduced at Mobile app level ?\r\niBeacon in IoS\r\nGlobal vs Local ID-GUID concept for secured IoT network\r\nIoT-Middleware case study-1 Axeda\r\nIoT Middleware case study-2 Xively\r\nMachine learning for intelligent IoT\r\nIntroduction to Machine learning\r\nLearning classification techniques\r\nBayesian Prediction-preparing training file\r\nSupport Vector Machine\r\nImage and video analytic for IoT\r\nFraud and alert analytic through IoT\r\nBio –metric ID integration with IoT\r\nReal Time Analytic/Stream Analytic\r\nScalability issues of IoT and machine learning\r\nWhat are the architectural implementation of Machine learning for IoT\r\nAnalytic Engine for IoT\r\nInsight analytic\r\nVisualization analytic\r\nStructured predictive analytic\r\nUnstructured predictive analytic\r\nRecommendation Engine\r\nPattern detection\r\nRule/Scenario discovery –failure, fraud, optimization\r\nRoot cause discovery\r\nIaas/Paas/Saas-IoT data, platform and software as a service revenue model\r\nIaas : Information as a service-evolving models\r\nMechanism of security breach in IOT layer for Iaas\r\nMiddleware for Iaas business implementation in healthcare, homeautomation and farming\r\nIaas case study for vehicular information for Auto-insurance and Agriculture\r\nPaas: Platform as a service in IoT. Case studies of some of the IoT middleware\r\nSaas : Software/System as service for IoT business models\r\nEuropean legislation for security in IoT platform\r\nFirewalling and IPS\r\nUpdates and patches\r\nDatabase & Platform implementation for IoT : Cloud based IoT platforms\r\nSQL vs NoSQL-Which one is good for your IoT application\r\nOpen sourced vs. Licensed Database\r\nAvailable M2M cloud platform\r\nBasic functionality of IoT cloud platform\r\nReal Time Analytic\r\nBatch Analytic\r\nData storage\r\nData filtering\r\nRule engine\r\nProcess mapping\r\nCaching of Data for IoT rule implementation\r\nLossless data compression /Data encoding : Huffman and Progressive filtering\r\nXively/ Omeg/Ayla/Libellium/CISCO M2M platform /AT &T M2M platform/ Google M2M platform\r\nA few common IoT systems\r\nHome automation\r\nEnergy optimization in Home\r\nAutomotive-OBD /Iaas/Paas for Insurance and Car parking\r\nIoT-Lock\r\nSmart Smoke alarm\r\nBAC ( Blood alcohol monitoring ) for drug abusers under probation\r\nPet cam for Pet lovers\r\nWearable IOT\r\nMobile parking ticketing system\r\nIndoor location tracking in Retail store\r\nHome health care\r\nSmart Sports Watch\r\nBig Data for IoT\r\n4V- Volume, velocity, variety and veracity of Big Data\r\nWhy Big Data is important in IoT\r\nBig Data vs legacy data in IoT\r\nFundamental of Map reduced system (MR)\r\nHadoop and HDFS\r\nKafka for data messaging and brokerage\r\nStorm/Bolt/Spout-fundamentals of real time analytic system\r\nStorage technique for image, Geospatial and video data\r\nDistributed database like Cassandra and HDFS\r\nParallel computing basics for IoT', 'Internet Of Things'),
(13, 'Cloud Computing', '<b>Introduction to Cloud Computing</b>\r\n\r\nDefining cloud computing\r\nComponents of a computing cloud\r\nDifferentiating types of clouds: public, private, hybrid\r\nDelivering services from the cloud\r\nCategorizing service types\r\nComparing vendor cloud products: Amazon, Google, Microsoft and others\r\nAdopting the Cloud\r\nKey drivers of cloud computing solutions\r\nInstantaneous provisioning of computing resources\r\nHandling varied loads with elasticity and seamless scalability\r\nTapping into an infinite storage capacity\r\nCost-effective pay-as-you-use billing models\r\nEvaluating barriers to cloud computing\r\nHandling sensitive data\r\nAspects of cloud security\r\nAssessing governance solutions\r\nExploiting Software as a Service ( SaaS )\r\nCharacterizing SaaS\r\nMinimizing the need for local hardware and software\r\nStreamlining administration with centralized installation and updates\r\nOptimizing cost and performance with the ability to scale on demand\r\nComparing service scenarios\r\nImproving collaboration with business productivity tools\r\nSimplifying business process creation by integrating existing components\r\nInspecting SaaS technologies\r\nDeploying Web applications\r\nImplementing Web services: SOAP, REST\r\nChoosing a development platform\r\nDelivering Platform as a Service (PaaS)\r\nExploring the technical foundation for PaaS\r\nSpecifying the components of PaaS\r\nAnalyzing vendor PaaS provisions\r\nSelecting an appropriate implementation\r\nBuilding services with solution stacks\r\nEvaluating the architecture of vendor specific platforms\r\nBecoming familiar with service platform tools\r\nLeveraging the power of scalable middleware\r\nManaging cloud storage\r\nControlling unstructured data in the cloud\r\nDeploying relational databases in the cloud\r\nImproving data availability\r\nEmploying support services\r\nTesting in the cloud\r\nMonitoring cloud-based services\r\nAnalyzing portability across platforms\r\nDeploying Infrastructure as a Service ( IaaS )\r\nEnabling technologies\r\nScalable server clusters\r\nAchieving transparency with platform virtualization\r\nElastic storage devices\r\nAccessing IaaS\r\nProvisioning servers on demand\r\nHandling dynamic and static IP addresses\r\nTools and support for management and monitoring\r\nBuilding a Business Case\r\nCalculating the financial implications\r\nAnalyzing current and future computing requirements\r\nComparing in-house facilities to the cloud\r\nEstimating economic factors downstream\r\nPreserving business continuity\r\nSelecting appropriate service-level agreements\r\nSafeguarding access to assets in the cloud\r\nSecurity, availability and disaster recovery strategies\r\nMigrating to the Cloud\r\nTechnical considerations\r\nRearchitecting applications for the cloud\r\nIntegrating the cloud with existing applications\r\nAvoiding vendor lock-in\r\nPlanning the migration\r\nIncremental vs\r\none-step solution\r\nSelecting a vendor\r\nEstablishing staff skill requirements', 'Cloud Computing'),
(14, 'Android', 'Introduction to Android\r\nThe Android family\r\nOverview of Android and Android SDK\r\nHistory of Android\r\nAndroid features\r\nAndroid Architecture overview\r\nIntroduction to OS layers\r\nLinux kernel\r\nLibraries\r\nAndroid Runtime\r\nApplication framework\r\nSetup of Android Development environment\r\nSystem requirements\r\nEclipse and SDK installation, AVD creation\r\nCreating first Android application\r\nProject Structure\r\nAndroid Application Fundamentals\r\nAndroid application building blocks\r\nActivating components\r\nShutting down components\r\nLife Cycle of Application\r\nDevelopment tools, Manifest File\r\nLife Cycle of Activity\r\nUser Interface\r\nView Hierarchy and Layouts\r\nUI Events\r\nBuilding Menus\r\nNotifying users\r\nCreating dialogs\r\nGraphics & Animations\r\nMain Building Blocks\r\nActivity\r\nServices\r\nContent Providers\r\nBroadcast Receivers\r\nResources\r\nOverview of Android Resources\r\nCreating Resources\r\nUsing Resources\r\nDrawable Resources\r\nAnimation Resources\r\nData Storage\r\nShared Preferences\r\nInternal Storage (Files)\r\nExternal Storage(SD Card)\r\nSQLite Databases\r\nAndroid Media API\r\nPlaying audio/video\r\nMedia recording\r\nBlue tooth\r\nWiFi\r\nCamera\r\nTelephonyManager\r\nLocation Services\r\nGoogle Maps\r\nDeploying Android Application on Device', 'Android App Development'),
(15, 'IOS', '<ul class=\"listTick\">\r\n<li>Define key programming terms relevant to Swift and iOS programming.</li>\r\n    <li>Describe the process of creating iOS apps.</li>\r\n    <li>State the purpose of the Apple developer tools, such as Xcode, Instruments, debugger, analyzer, and iOS Simulator.</li>\r\n    <li>Distinguish well-written code from poorly-written code.</li>\r\n    <li>Recognize patterns and idioms present in the Cocoa Touch API and other Apple frameworks.</li>\r\n    <li>Employ the Apple developer tools to create an iOS app.</li>\r\n    <li>Demonstrate programming best practices in Swift.</li>\r\n    <li>Examine and subdivide app functionality into properly designed components.</li>\r\n    <li>Explain and summarize iOS API features including location, mapping, sensors, gestures, multimedia and user interface components.</li>\r\n    <li>Plan, prepare and build an original iOS app, from concept to working program.</li>\r\n              </ul>', 'IOS with Swift'),
(16, 'Amazon Web Services', 'Getting started with Amazon cloud\r\nCreating accounts and analyzing the cost breakdown\r\nEvaluating Service Level Agreements (SLA)\r\nConsole, command line tools and API\r\nOverview of the architecture:\r\nEC2\r\nS3\r\nEBS\r\nBeanstalk\r\nRDS\r\nVPC\r\nCloudFront\r\nSimpleDB\r\nSQS\r\nCloudWatch\r\nAchieving Agility with EC2:\r\nManaging the EC2 infrastructure:\r\nBrowsing Amazon Machine Images (AMI)\r\nSpecifying security groups and key pairs\r\nProvisioning resources:\r\nEvaluating Elastic Block Store (EBS) and instance store root devices\r\nAssigning elastic IP addresses\r\nMapping instance types to computing needs\r\nImplementing Durable and Reliable Storage:\r\nStoring data in the cloud:\r\nPersisting off-instance storage with EBS volumes\r\nCreating backups with snapshots\r\nAchieving high durability with SimpleStorage Service\r\nTransmitting data in/out of the Amazon cloud\r\nSimplifying the database infrastructure:\r\nAchieving high availability of nonrelational data with SimpleDB\r\nEffortlessly implement a relational database with Relational Database Service (RDS)\r\nCreating cost-effective distributed solutions:\r\nDecoupling applications with Simple Queue Service\r\nLeveraging CloudFront for high-performance edge cache content delivery\r\nDelivering static and streaming content\r\nAdapting EC2 to Your Business Needs:\r\nCustomizing virtual machines:\r\nModifying existing images\r\nCreating new images off of running instances\r\nConverting an instance store AMI to an EBS A\r\nCreating an AWS cloud architecture:\r\nApplying best practices for a cloud solution\r\nSelecting a cloud setup for different use case scenarios\r\nHandling Dynamic Resource Requirements:\r\nMonitoring from inside or outside of the cloud:\r\nVisualizing utilization metrics with CloudWatch\r\nSetting alarms to send and receive notifications\r\nTransparently scaling to meet load variations:\r\nDistributing incoming traffic with elastic load balancing\r\nDynamically adding and removing instances with Auto Scaling\r\nSetting capacity thresholds\r\nHosting Applications with Elastic Beanstalk:\r\nManaging application environments:\r\nCustomizing and configuring platform stacks\r\nProvisioning application resources with CloudFormation\r\nAWS Security Features:\r\nControlling account security:\r\nConfiguring access credentials\r\nManaging users with Identity Access Management (IAM)\r\nLeveraging the Virtual Private Cloud (VPC):\r\nProvisioning isolated AWS resources\r\nBridging EC2 instances to your internal network with a VPN\r\nLaunching EC2 instances on dedicated hardware', 'AWS '),
(17, 'Big Data/Hadoop', 'Introduction\r\nBig Data Overview\r\nWhat is Big Data Analytics\r\nNecessity for Big Data Analytics\r\nRole of a Data Analyst\r\nWhat is Data Science\r\nNecessity for Data Science\r\nRole of Data Scientist\r\nUse Cases\r\nFinance\r\nRetail\r\nAdvertising\r\nDefense and Intelligence\r\nTelecommunications and Utilities\r\nHealthcare and Pharmaceuticals\r\nData Analytics Proces\r\nPreparation\r\nPreProcessing\r\nAnalysis\r\nPost Processing\r\nData Preparation\r\nPlanning\r\nData Collection\r\nData Selection\r\nTools for Data Preparation\r\nIntroduction to SQL DB\'s\r\nIntroduction to NoSql DB\'s\r\nKey / Value pair\r\nMongoDB\r\nCassandra\r\nGraph DB\'s (Neo4j)\r\nHands on Exercise : Using SQL and NoSql DB\'s\r\nData Preparation – Import/Export\r\nSqoop\r\nFlume\r\nHands on Exercise : Usage of Tools\r\nPreProcessing\r\nData Cleaning\r\nData Filtering\r\nData Completion\r\nData Correction\r\nData Standardization\r\nData Transformation\r\nTools for Data PreProcessing\r\nData Preprocessing using Pig\r\nWriting Pig Latin scripts and processing data\r\nData Preprocessing using Hive\r\nWriting Hive Scripts and processing data\r\nHands on Exercise : Pig and Hive\r\nData Analysis Introduction\r\nSqoop\r\nRecommendation\r\nClassification\r\nClustering\r\nMahout\r\nRecommendation\r\nIntroduction to Recommendations\r\nMaking recommendations, various techniques\r\nHands on Exercise for Recommendations\r\nClassification\r\nClassification System Overview\r\nClassification process\r\nNaive Bayes Classifier\r\nDecision Trees\r\nExamples of Classification\r\nClustering\r\nClustering basics\r\nHierarchical clustering\r\nK-Means clustering\r\nRunning clustering example\r\nExploring distance measures\r\nData Visualization using R\r\nLanguage basics\r\nData Frames\r\nVectorized operations on Data Frames\r\nSelection\r\nProjection\r\nTransformation', 'Big Data'),
(18, 'Web Designing', 'What is Web Design\r\nIntroduction to Web Design\r\nDomain Names & DNS\r\nClient and Server Software.\r\nStatic& Dynamic\r\nCareers in Web Technologies\r\nAdobe Photoshop CSS-2\r\nIntroduction of Stock Photography\r\nTypes of Images and Image Editing Tools\r\nIntroduction to Adobe Photoshop\r\nUsing Photoshop Tools\r\nLayers, Actions and Filters\r\nCreating Custom Effects\r\nDesign Banners, Basic Website Layout\r\nDesign Complex website Layout\r\nConversation of PSD to XHTML\r\nAdobe Flash\r\nIntroduction to Animation\r\nIntroduction to Adobe Flash\r\nTools in Adobe Flash\r\nFrame Animation\r\nVarious Flash Effects\r\nCreating Flash Banners\r\nCreating Flash Intro’s\r\nCreating Flash Website\r\nBasics of Action Scripting.\r\nHTML & DHTML\r\nStructure of HTML\r\nBasic HTML Tags\r\nAdvanced HTML Tags\r\nDifference between HTML & DHTML\r\nDHTML Basic tags\r\nIntroduction to Doc Types\r\nCreating Simple HTML Pages\r\nCascading Style Sheets\r\nIntroduction to CSS\r\nTypes of style sheets\r\nTypes of CSS Selectors\r\nComplete CSS properties\r\nConverting Table layout to CSS\r\nCustom CSS Layout Design\r\nCreating simple and dropdown menus\r\nCreating Appealing forms using CSS\r\nCSS Tips and Tricks with Hacks\r\nJava Script\r\nClient and Server side scripting\r\nIntroduction to Java Scripting\r\nTypes of Java Scripts\r\nVariables, operators, loops\r\nObjects, Events and DOM\r\nCommon java script functions\r\nUsing Java script in Dreamweaver\r\nJava Script Validations\r\nImplementing Menus, Galleries etc\r\nIntroduction to Ajax\r\nReal time Ajax Examples\r\nHow to Create Website\r\nClient Requirements/Specifications\r\nCreating a concept and layout\r\nChoosing a Color Scheme\r\nChoosing Stock Photography\r\nTexture and Typography\r\nDesign a Professional Layout\r\nConversation of PSD to CSS\r\nImplementing JavaScript.\r\nWeb Hosting By FTP\r\nWeb Hosting Basics\r\nTypes of Hosting Packages\r\nChanging Name Servers\r\nLinux and Windows CP\r\nUsing FTP Client\r\nMaintaining a Website\r\nAdobe Dreamweaver CS3\r\nIntro to Adobe Dreamweaver\r\nLearning the interface\r\nDefining a Dreamweaver site\r\nAdding Content and Multimedia.\r\nCreating user submission forms.\r\nImporting a website design\r\nDynamic Features\r\nTesting and Implementation\r\nVarious Browser Versions\r\nValidating the dHTML & CSS\r\nCommon Compatibility Issues', 'Web Designing'),
(19, 'HR Journalist', 'HR Journalist Course Content', 'HR Journalist');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_trainings`
--

DROP TABLE IF EXISTS `industrial_trainings`;
CREATE TABLE IF NOT EXISTS `industrial_trainings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industrial_trainings`
--

INSERT INTO `industrial_trainings` (`id`, `fname`, `lname`, `email`, `contact`, `address`, `landmark`, `state`, `city`, `qualification`, `college`, `year_sem`, `interests`, `images`, `payment_mode`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'B.Tech/B.E.', 'United Institute of Management', '2', 'hadoop,php,java', 'uploads.industrial/wQXY1IgmzJNXCfaTSqdPs4s810JuMFG2ly2jeDS5.jpeg', 'cash', '2018-01-26 09:48:16', '2018-01-26 09:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '2018_01_26_065552_create_industrial_trainings_table', 3),
(9, '2018_01_29_061640_create_courses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshop_enquiries`
--

DROP TABLE IF EXISTS `workshop_enquiries`;
CREATE TABLE IF NOT EXISTS `workshop_enquiries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshop_enquiries`
--

INSERT INTO `workshop_enquiries` (`id`, `enquiry_type`, `fname`, `lname`, `email`, `contact`, `addres`, `landmark`, `state`, `city`, `category`, `qualification`, `Designation`, `company`, `college`, `year_sem`, `interests`, `images`, `created_at`, `updated_at`) VALUES
(1, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', NULL, 'Uttar Pradesh', 'Pratapgarh', 'professional', 'B.Tech/B.E.', 'Team Leader', 'Xsinfosol', NULL, '8', 'hadoop,php,java', NULL, '2018-01-24 20:47:47', '2018-01-24 20:47:47'),
(2, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'United Institute of Management', '4', 'hadoop,php,java', 'uploads.individual/WHIwvpTH3G3SwXXAbAjQptq9DETVSst2FMVi6M19.jpeg', '2018-01-26 10:31:38', '2018-01-26 10:31:38'),
(3, 'classroom', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'MCA', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php', 'uploads.individual/2GOGn3mhcEvn2Zf3LA8QG05aERCAtglSZzgIknL8.jpeg', '2018-01-26 11:01:09', '2018-01-26 11:01:09'),
(4, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/eHYEay5N9IadRJJuyYPRt5RjxVWisWNCdaHidx88.png', '2018-01-29 23:32:56', '2018-01-29 23:32:56'),
(5, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/yDLqnVscKrMMZnumedut485qoH3B91feHoClscuJ.png', '2018-01-29 23:35:27', '2018-01-29 23:35:27'),
(6, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/JuWS7kBsSShGqiSNnJTgc5H1EZ3krCtd4cJlE4Ns.png', '2018-01-29 23:37:40', '2018-01-29 23:37:40'),
(7, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/N24l8ESfN62ngJ0qIhFw36xBcjSoAMRxcGxFpSsg.png', '2018-01-29 23:38:24', '2018-01-29 23:38:24'),
(8, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/Mlu6l9yEMxlPt60v0dDwIFKzZknjQf7HRq4l7qdX.png', '2018-01-29 23:40:20', '2018-01-29 23:40:20'),
(9, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/4oqxcyCU7A7W4llXdmp3NyfCzzywp3FvQDcpu392.png', '2018-01-29 23:41:41', '2018-01-29 23:41:41'),
(10, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'BSC', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,php,python', 'uploads.individual/NgiUu2myyq0f8NLUqFSynv6ilaiFxeeftElDfeDF.png', '2018-01-29 23:42:05', '2018-01-29 23:42:05'),
(11, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'United Institute of Management', '3', 'hadoop,php,java,python', 'uploads.individual/4N2nUyKB8TQMzk9MJH1WefxL0EXWzP6nxGD7YBsR.png', '2018-01-30 00:28:53', '2018-01-30 00:28:53'),
(12, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'United Institute of Management', '3', 'hadoop,php,java,python', 'uploads.individual/CKFLgSzK5QpPamIzwmkSKHqDbVFiq3KV9YJqmPep.png', '2018-01-30 00:30:03', '2018-01-30 00:30:03'),
(13, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'B.Tech/B.E.', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,java,python', 'uploads.individual/Dp5MZ3jP9iryGPiim1AKnu0gxMd9SB4nVIPKoZKt.png', '2018-01-30 00:31:22', '2018-01-30 00:31:22'),
(14, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'professional', 'B.Tech/B.E.', 'Team Leader', 'Xsinfosol', NULL, '-1', 'hadoop,java,python', 'uploads.individual/tX37gGxMFTFpzKwUxjx0y8JGjDgkTdw0WKkbQIC3.png', '2018-01-30 00:32:58', '2018-01-30 00:32:58'),
(15, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'UIM Naini Allahabad', '6', 'java', 'uploads.individual/7eHlJyUktYEEIbG0ogsm9jqu5rwbPI2GETtSOwDT.jpeg', '2018-01-30 00:39:15', '2018-01-30 00:39:15'),
(16, 'individual', 'Durgesh', 'Mishra', 'durgesh@xsinfosol.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'UIM Naini Allahabad', '6', 'java', 'uploads.individual/XIvLTYdpxp2pPguuynFnNkrj0hTjsoS6HsYxlaHt.jpeg', '2018-01-30 00:39:51', '2018-01-30 00:39:51'),
(17, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'B.Tech/B.E.', NULL, NULL, 'UIM Naini Allahabad', '2', 'python,ds', 'uploads.individual/1FWP3KLhMJQZeQKchNTqOpPjIBoLSnXXcbBpZivu.png', '2018-01-30 00:42:33', '2018-01-30 00:42:33'),
(18, 'individual', 'Durgesh', 'Mishra', 'durgeshcmishra@gmail.com', '9811167005', 'Panigon Baba Ka Purwa Kalakankar Kunda Pratapgarh', 'Uttar Pradesh', 'Uttar Pradesh', 'Pratapgarh', 'student', 'BPHARMA', NULL, NULL, 'UIM Naini Allahabad', '7', 'hadoop,php,java', 'uploads.individual/91UyHcywhkhHLbvdJVbyctwgFWYrN9lnrF565rvu.png', '2018-01-30 05:51:24', '2018-01-30 05:51:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
