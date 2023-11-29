-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2023 at 11:40 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbudgets`
--

DROP TABLE IF EXISTS `addbudgets`;
CREATE TABLE IF NOT EXISTS `addbudgets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide = 1 , show = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addbudgets`
--

INSERT INTO `addbudgets` (`id`, `budget`, `currency_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1000', '3', '0', '2023-07-10 13:20:43', '2023-07-10 14:06:48'),
(2, '125', '3', '0', '2023-07-10 14:05:47', '2023-07-10 14:05:47'),
(6, '15', '4', '0', '2023-07-10 14:11:23', '2023-07-10 14:11:23'),
(7, '50', '1', '0', '2023-07-10 17:46:21', '2023-07-10 17:46:21'),
(8, '100', '2', '0', '2023-07-10 17:46:26', '2023-07-10 17:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `addcurrencies`
--

DROP TABLE IF EXISTS `addcurrencies`;
CREATE TABLE IF NOT EXISTS `addcurrencies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide = 1 , show = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addcurrencies`
--

INSERT INTO `addcurrencies` (`id`, `currency`, `slug_currency`, `status`, `created_at`, `updated_at`) VALUES
(1, 'USD', 'usd', '0', '2023-11-20 00:21:23', '2023-11-20 00:21:23'),
(2, 'AED', 'aed', '0', '2023-11-20 00:21:55', '2023-11-20 00:21:55'),
(3, 'EUR', 'eur', '0', '2023-11-20 00:22:43', '2023-11-20 00:22:43'),
(4, 'GBP', 'gbp', '0', '2023-11-20 00:23:00', '2023-11-20 02:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `bedrooms`
--

DROP TABLE IF EXISTS `bedrooms`;
CREATE TABLE IF NOT EXISTS `bedrooms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number_of_bed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_bedroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide = 1 , show = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bedrooms`
--

INSERT INTO `bedrooms` (`id`, `number_of_bed`, `slug_bedroom`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '0', '2023-11-19 21:56:24', '2023-11-19 22:19:35'),
(2, '2', '2', '0', '2023-11-19 21:56:39', '2023-11-19 21:56:39'),
(3, '3', '3', '0', '2023-11-19 21:56:51', '2023-11-19 21:56:51'),
(4, '4', '4', '0', '2023-11-19 21:57:28', '2023-11-19 21:57:28'),
(5, '5', '5', '0', '2023-11-19 21:57:43', '2023-11-19 21:57:43'),
(6, '6', '6', '0', '2023-11-19 21:57:56', '2023-11-19 21:57:56'),
(7, '7', '7', '0', '2023-11-19 21:59:11', '2023-11-19 21:59:11'),
(8, '8', '8', '0', '2023-11-19 21:59:27', '2023-11-19 21:59:27'),
(9, '9', '9', '0', '2023-11-19 21:59:39', '2023-11-19 21:59:39'),
(10, '10', '10', '0', '2023-11-19 21:59:57', '2023-11-20 02:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `chatboxes`
--

DROP TABLE IF EXISTS `chatboxes`;
CREATE TABLE IF NOT EXISTS `chatboxes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chatbox_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_investment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_aed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_apartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_studio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_immediately` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_specific_requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatbox_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget_custom_hide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investment_custom_hide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Apartments_custom_hide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatboxes`
--

INSERT INTO `chatboxes` (`id`, `chatbox_category`, `chatbox_your_name`, `chatbox_company_name`, `chatbox_email`, `chatbox_phone_no`, `chatbox_budget`, `chatbox_investment`, `chatbox_aed`, `chatbox_apartment`, `chatbox_studio`, `chatbox_immediately`, `chatbox_specific_requirement`, `chatbox_details`, `user_id`, `budget_custom_hide`, `investment_custom_hide`, `Apartments_custom_hide`, `created_at`, `updated_at`) VALUES
(1, 'I\'m-an-investor', 'Rana Bilal Munawar', 'Bilal Company', 'ranabilalmunawar122@gmail.com', '124234', 'GBP', 'AED 5 Million +', 'Apartments', '5 Bedroom +', 'Immediately', 'Yes I am currently in Dubai', 'Yes', 'Everythings is okay', NULL, '0', '0', '0', '2023-11-06 21:01:13', '2023-11-06 21:44:01'),
(2, 'I\'am an end-user', 'Bilal', 'rana Company', 'ranabilalmunawar30@gmail.com', '234234', '400 to 50011', '200 to 30011', 'Aplots', '30 bedeooms', '1-2 mouths', 'Yes I am currently in Dubai', 'Yes', 'I want to buy this apartment for my personal life', NULL, '1', '1', '1', '2023-11-06 21:03:12', '2023-11-06 21:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `completion_dates`
--

DROP TABLE IF EXISTS `completion_dates`;
CREATE TABLE IF NOT EXISTS `completion_dates` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `completions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_completions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide = 1 , show = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completion_dates`
--

INSERT INTO `completion_dates` (`id`, `completions`, `slug_completions`, `status`, `created_at`, `updated_at`) VALUES
(6, '2020', '2020', '0', '2023-11-20 19:48:48', '2023-11-20 20:31:18'),
(7, '2021', '2021', '0', '2023-11-20 19:49:23', '2023-11-20 19:49:23'),
(8, '2022', '2022', '0', '2023-11-20 19:49:40', '2023-11-20 19:49:40'),
(9, '2023', '202', '0', '2023-11-20 19:49:54', '2023-11-20 19:49:54'),
(10, '2024', '2024', '0', '2023-11-20 19:50:23', '2023-11-20 19:50:23'),
(11, '2025', '2025', '0', '2023-11-20 19:50:38', '2023-11-20 19:50:38'),
(12, '2026', '2026', '0', '2023-11-20 19:51:05', '2023-11-20 19:51:05'),
(13, '2027', '2027', '0', '2023-11-20 19:51:21', '2023-11-20 19:51:21'),
(14, '2028', '2028', '0', '2023-11-20 19:51:50', '2023-11-20 19:51:50'),
(15, '2029', '2029', '0', '2023-11-20 19:52:11', '2023-11-20 19:52:11'),
(16, '2030', '2030', '0', '2023-11-20 19:52:27', '2023-11-20 19:52:27'),
(17, '2031', '2031', '0', '2023-11-20 19:52:49', '2023-11-20 19:52:49'),
(18, '2032', '2032', '0', '2023-11-20 19:53:04', '2023-11-20 19:53:04'),
(19, '2033', '2033', '0', '2023-11-20 19:53:34', '2023-11-20 19:53:34'),
(20, '2034', '2034', '0', '2023-11-20 19:53:49', '2023-11-20 19:53:49'),
(21, '2035', '2035', '0', '2023-11-20 19:54:14', '2023-11-20 19:54:14'),
(22, '2036', '2036', '0', '2023-11-20 19:54:39', '2023-11-20 19:54:39'),
(23, '2037', '2037', '0', '2023-11-20 19:55:03', '2023-11-20 19:55:03'),
(24, '2038', '2038', '0', '2023-11-20 19:55:18', '2023-11-20 19:55:18'),
(25, '2039', '2039', '0', '2023-11-20 19:55:44', '2023-11-20 19:55:44'),
(26, '2040', '2040', '0', '2023-11-20 19:56:01', '2023-11-20 19:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

DROP TABLE IF EXISTS `developers`;
CREATE TABLE IF NOT EXISTS `developers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `developer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `developer_logo` mediumtext COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_property` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = Visible , 1 = hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `developer_name`, `slug_developer`, `email`, `password`, `password_show`, `description`, `developer_logo`, `location`, `type_of_property`, `status`, `created_at`, `updated_at`) VALUES
(35, 'developer three', 'developer-three', 'ranabilalmunawar90@gmail.com', '$2y$10$gx8qHW.ccBPW1KAqO9jaJO7xZF//95leNhrkoPc6sEPMP23waS8k6', '123456789', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', '1700534687169035881089.jpg', '10', '2', '0', '2023-11-20 21:44:47', '2023-11-21 08:33:04'),
(41, 'developer one', 'developer-one', 'developerom00@gmail.com', '$2y$10$HE4H53BGwM6W0/S0LKMqV.w3dMvcfYij.9bh0rjRzFhHYl9Tvb65u', '123456789', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', '170053483916902799098.jpg', '7', '1', '0', '2023-11-20 21:47:19', '2023-11-20 21:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `emailnewstemplates`
--

DROP TABLE IF EXISTS `emailnewstemplates`;
CREATE TABLE IF NOT EXISTS `emailnewstemplates` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emailnewstemplates`
--

INSERT INTO `emailnewstemplates` (`id`, `emails`, `file_upload`, `template_file`, `date`, `created_at`, `updated_at`) VALUES
(53, 'ranabilalmunawar122@gmail.com', '', '<p>h</p>', 'Thursday 26th of October 2023', '2023-10-26 01:58:34', '2023-10-26 01:58:34'),
(64, '', 'Emaildata-Copy(3).csv', NULL, 'Thursday 26th of October 2023', '2023-10-26 02:10:49', '2023-10-26 02:10:49'),
(65, 'ranabilalmunawar122@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:10:49', '2023-10-26 02:10:49'),
(66, 'ranabilalmunawar30@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:10:55', '2023-10-26 02:10:55'),
(67, 'muneebamjad142@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:10:56', '2023-10-26 02:10:56'),
(68, 'ranazaidmunawar106@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:10:58', '2023-10-26 02:10:58'),
(69, 'ranabilalmunawar12222@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:10:59', '2023-10-26 02:10:59'),
(70, 'fsddhjsgf@gmail.com', '64', '<figure class=\"image\"><img src=\"http://127.0.0.1:8000/template_download/169830424542.jpg\"></figure>', 'Thursday 26th of October 2023', '2023-10-26 02:11:00', '2023-10-26 02:11:00'),
(72, 'ranabilalmunawar122@gmail.com', '', '<figure class=\"image\"><img src=\"http://localhost:8000/template_download/169941780257.jpg\"></figure>', 'Wednesday 8th of November 2023', '2023-11-07 23:30:56', '2023-11-07 23:30:56'),
(73, '', '1698301847Emaildata.csv', NULL, 'Tuesday 14th of November 2023', '2023-11-13 21:23:11', '2023-11-13 21:23:11'),
(74, 'faizan@ranksol.com', '73', '<p><img class=\"image_resized\" style=\"width:30.63%;\" src=\"http://localhost:8000/template_download/169992842978.png\"></p>', 'Tuesday 14th of November 2023', '2023-11-13 21:23:11', '2023-11-13 21:23:11'),
(75, 'bilal@ranksol.com', '73', '<p><img class=\"image_resized\" style=\"width:30.63%;\" src=\"http://localhost:8000/template_download/169992842978.png\"></p>', 'Tuesday 14th of November 2023', '2023-11-13 21:23:15', '2023-11-13 21:23:15'),
(76, 'junaid@ranksol.com', '73', '<p><img class=\"image_resized\" style=\"width:30.63%;\" src=\"http://localhost:8000/template_download/169992842978.png\"></p>', 'Tuesday 14th of November 2023', '2023-11-13 21:23:16', '2023-11-13 21:23:16'),
(77, 'aslam@ranksol.com', '73', '<p><img class=\"image_resized\" style=\"width:30.63%;\" src=\"http://localhost:8000/template_download/169992842978.png\"></p>', 'Tuesday 14th of November 2023', '2023-11-13 21:23:17', '2023-11-13 21:23:17'),
(80, '', 'email list.xlsx', NULL, 'Wednesday 15th of November 2023', '2023-11-14 19:50:49', '2023-11-14 19:50:49'),
(81, 'faizan@ranksol.com', '80', '<p>ho</p>', 'Wednesday 15th of November 2023', '2023-11-14 19:50:49', '2023-11-14 19:50:49'),
(82, 'bilal@ranksol.com', '80', '<p>ho</p>', 'Wednesday 15th of November 2023', '2023-11-14 19:50:53', '2023-11-14 19:50:53'),
(83, 'junaid@ranksol.com', '80', '<p>ho</p>', 'Wednesday 15th of November 2023', '2023-11-14 19:50:54', '2023-11-14 19:50:54'),
(84, 'aslam@ranksol.com', '80', '<p>ho</p>', 'Wednesday 15th of November 2023', '2023-11-14 19:50:55', '2023-11-14 19:50:55'),
(89, '', 'Emaildata - Copy.csv', NULL, 'Wednesday 15th of November 2023', '2023-11-14 20:21:58', '2023-11-14 20:21:58'),
(90, 'ranabilalmunawar122@gmail.com', '89', '<p>hello</p>', 'Wednesday 15th of November 2023', '2023-11-14 20:21:58', '2023-11-14 20:21:58'),
(91, 'ranabilalmunawar30@gmail.com', '89', '<p>hello</p>', 'Wednesday 15th of November 2023', '2023-11-14 20:22:01', '2023-11-14 20:22:01'),
(92, 'muneebamjad142@gmail.com', '89', '<p>hello</p>', 'Wednesday 15th of November 2023', '2023-11-14 20:22:03', '2023-11-14 20:22:03'),
(93, 'ranazaidmunawar106@gmail.com', '89', '<p>hello</p>', 'Wednesday 15th of November 2023', '2023-11-14 20:22:04', '2023-11-14 20:22:04'),
(94, 'ranabilalmunawar122@gmail.com', '', '<p>fff</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:00:33', '2023-11-15 00:00:33'),
(95, 'ranabilalmunawar30@gmail.com', '', '<p>fff</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:00:37', '2023-11-15 00:00:37'),
(96, '', '1698301847Emaildata.csv', NULL, 'Wednesday 15th of November 2023', '2023-11-15 00:01:48', '2023-11-15 00:01:48'),
(97, 'ranabilalmunawar122@gmail.com', '96', '<p>fffddfdfgdfgdf</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:01:48', '2023-11-15 00:01:48'),
(98, 'ranabilalmunawar30@gmail.com', '96', '<p>fffddfdfgdfgdf</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:01:52', '2023-11-15 00:01:52'),
(99, 'muneebamjad142@gmail.com', '96', '<p>fffddfdfgdfgdf</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:01:53', '2023-11-15 00:01:53'),
(100, 'ranazaidmunawar106@gmail.com', '96', '<p>fffddfdfgdfgdf</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:01:55', '2023-11-15 00:01:55'),
(101, '', 'email list.xlsx', NULL, 'Wednesday 15th of November 2023', '2023-11-15 00:03:35', '2023-11-15 00:03:35'),
(102, 'ranabilalmunawar122@.com', '101', '<p>hello</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:03:35', '2023-11-15 00:03:35'),
(103, '', 'email list.xlsx', NULL, 'Wednesday 15th of November 2023', '2023-11-15 00:04:13', '2023-11-15 00:04:13'),
(104, 'faizan@ranksol.com', '103', '<p>yut</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:04:13', '2023-11-15 00:04:13'),
(105, 'bilal@ranksol.com', '103', '<p>yut</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:04:20', '2023-11-15 00:04:20'),
(106, 'junaid@ranksol.com', '103', '<p>yut</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:04:21', '2023-11-15 00:04:21'),
(107, 'aslam@ranksol.com', '103', '<p>yut</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:04:22', '2023-11-15 00:04:22'),
(108, '', 'email list.xlsx', NULL, 'Wednesday 15th of November 2023', '2023-11-15 00:05:00', '2023-11-15 00:05:00'),
(109, 'faizan@ranksol.com', '108', '<p>ddd</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:05:00', '2023-11-15 00:05:00'),
(110, 'bilal@ranksol.com', '108', '<p>ddd</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:05:05', '2023-11-15 00:05:05'),
(111, 'junaid@ranksol.com', '108', '<p>ddd</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:05:07', '2023-11-15 00:05:07'),
(112, 'aslam@ranksol.com', '108', '<p>ddd</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:05:08', '2023-11-15 00:05:08'),
(113, 'ranabilalmunawar122@gmail.com', '108', '<p>ddd</p>', 'Wednesday 15th of November 2023', '2023-11-15 00:05:09', '2023-11-15 00:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepagesettings`
--

DROP TABLE IF EXISTS `homepagesettings`;
CREATE TABLE IF NOT EXISTS `homepagesettings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tile_section_one` longtext COLLATE utf8mb4_unicode_ci,
  `description_section_one` longtext COLLATE utf8mb4_unicode_ci,
  `tile_section_two` longtext COLLATE utf8mb4_unicode_ci,
  `description_section_two` longtext COLLATE utf8mb4_unicode_ci,
  `tile_section_three` longtext COLLATE utf8mb4_unicode_ci,
  `description_section_three` longtext COLLATE utf8mb4_unicode_ci,
  `searching_section_title` longtext COLLATE utf8mb4_unicode_ci,
  `searching_sectiondescription` longtext COLLATE utf8mb4_unicode_ci,
  `logo_section_three` longtext COLLATE utf8mb4_unicode_ci,
  `footer_title_one` longtext COLLATE utf8mb4_unicode_ci,
  `footer_one_section_four` longtext COLLATE utf8mb4_unicode_ci,
  `footer_title_two` longtext COLLATE utf8mb4_unicode_ci,
  `footer_two_section_four` longtext COLLATE utf8mb4_unicode_ci,
  `footer_title_three` longtext COLLATE utf8mb4_unicode_ci,
  `footer_three_section_four` longtext COLLATE utf8mb4_unicode_ci,
  `footer_title_four` longtext COLLATE utf8mb4_unicode_ci,
  `footer_four_section_four` longtext COLLATE utf8mb4_unicode_ci,
  `footer_five_section_four` longtext COLLATE utf8mb4_unicode_ci,
  `header_change_backgoundcolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#0367A6',
  `footer_change_backgoundcolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#0367A6',
  `body_change_backgoundcolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#FFFFFF',
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepagesettings`
--

INSERT INTO `homepagesettings` (`id`, `tile_section_one`, `description_section_one`, `tile_section_two`, `description_section_two`, `tile_section_three`, `description_section_three`, `searching_section_title`, `searching_sectiondescription`, `logo_section_three`, `footer_title_one`, `footer_one_section_four`, `footer_title_two`, `footer_two_section_four`, `footer_title_three`, `footer_three_section_four`, `footer_title_four`, `footer_four_section_four`, `footer_five_section_four`, `header_change_backgoundcolor`, `footer_change_backgoundcolor`, `body_change_backgoundcolor`, `header_logo`, `created_at`, `updated_at`) VALUES
(1, '<h1>Welcome to <span style=\"color:#0367A6;\">LIVE</span></h1><h1 style=\"padding-top:40px;\"><span style=\"color:#0367A6;\">DXB </span>Website</h1>', '<p>We look forward to help you finding your dream home and best<br>investment options for you</p>', '<h1><span style=\"color:#0367A6;\">COMPARE</span> Off Plan Projects</h1>', '<p>We just need a few details about you</p>', '<h1 class=\"trusted\"><strong>Our Trusted</strong><br><strong>Partners</strong></h1>', '<p class=\"trusted_para\">We look forward to help you finding your dream home and best investment options for you</p>', '<h1>Search for Best Suitable<br>Plan for you</h1>', '<p>Remember you can search by property, Size and budget</p>', '<div class=\"col-sm one_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814824096.png\" width=\"200\"></div><div class=\" col-sm two_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814852861.png\" width=\"200\"></div><div class=\"col-sm three_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814855376.png\" width=\"170\"></div><div class=\"col-sm four_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814856779.jpg\" width=\"200\"></div><div class=\"col-sm five_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814858561.png\" width=\"200\"></div><div class=\"col-sm six_image\"><img class=\"image_resized\" src=\"http://127.0.0.1:8000/partner_logos/169814859967.png\" width=\"200\"></div>', 'Offplan Developer', '<p><a href=\"#\">Dubai Apartments for Sale</a></p><p><a href=\"#\">Dubai Villas for Sale</a></p><p><a href=\"#\">Dubai Townhouses for Sale</a></p><p><a href=\"#\">Emaar Off Plan Projects</a></p><p><a href=\"#\">Off Plan Projects in Dubai South</a></p>', 'Dubia Developments', '<p><a href=\"#\">Dubai Apartments for Sale</a></p><p><a href=\"#\">Dubai Villas for Sale</a></p><p><a href=\"#\">Dubai Townhouses for Sale</a></p><p><a href=\"#\">Emaar Off Plan Projects</a></p><p><a href=\"#\">Off Plan Projects in Dubai South</a></p>', 'Featured Projects', '<p><a href=\"#\">Dubai Apartments for Sale</a></p><p><a href=\"#\">Dubai Villas for Sale</a></p><p><a href=\"#\">Dubai Townhouses for Sale</a></p><p><a href=\"#\">Emaar Off Plan Projects</a></p><p><a href=\"#\">Off Plan Projects in Dubai South</a></p>', 'Property Type', '<p><a href=\"#\">Dubai Apartments for Sale</a></p><p><a href=\"#\">Dubai Villas for Sale</a></p><p><a href=\"#\">Dubai Townhouses for Sale</a></p><p><a href=\"#\">Emaar Off Plan Projects</a></p><p><a href=\"#\">Off Plan Projects in Dubai South</a></p>', '<p class=\"p_footer_one\">© Copyright 2023, All Rights Reserved.</p><p class=\"p_footer_two\">Select projects listed on LiveDxb are purely for informative purposes only. <span style=\"color:#1B98E0;\">Term and Conditions</span> | <span style=\"color:#1B98E0;\">Privacy Policy</span></p>', '#0367a6', '#0367a6', '#ffffff', '169814537919.png', '2023-10-24 05:34:28', '2023-11-15 22:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `interestproperties`
--

DROP TABLE IF EXISTS `interestproperties`;
CREATE TABLE IF NOT EXISTS `interestproperties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interestproperties`
--

INSERT INTO `interestproperties` (`id`, `interest_name`, `interest_email`, `phone`, `language`, `interest_message`, `property_id`, `created_at`, `updated_at`) VALUES
(13, 'Rana Bilal Munawar', 'ranabilalmunawar122@gmail.com', '+923015189863', 'Portuguese', 'hello', '2', '2023-08-04 19:54:47', '2023-08-04 19:54:47'),
(40, 'sfdf', 'ranabilalmunawae122@gmail.com', '+92+92345345', 'Arabic', 'sefsdf', '7', '2023-08-07 14:48:18', '2023-08-07 14:48:18'),
(41, 'Rana Bilal Munawar', 'ranabilalmunawae122@gmail.com', '+92+9243545', 'Arabic', 'sdfsdf', '7', '2023-08-07 14:50:26', '2023-08-07 14:50:26'),
(42, 'Rana Bilal Munawar', 'ranabilalmunawae122@gmail.com', '+9243545', 'Arabic', 'sdfsdf', '7', '2023-08-07 14:50:56', '2023-08-07 14:50:56'),
(43, 'sdfsd', 'ranabilalmunawae122@gmail.com', '+9243545', 'Russian', 'dfgdf', '7', '2023-08-07 14:53:44', '2023-08-07 14:53:44'),
(44, 'Rana Bilal Munawar', 'ranabilalmunawar122@gmail.com', '04535445', 'Spanish', 'asdasd', '2', '2023-08-07 15:11:19', '2023-08-07 15:11:19'),
(45, 'hgg', 'ranabilalmunawar122@gmail.com', '+9244554421', 'English', 'gtf', '6', '2023-08-09 18:38:46', '2023-08-09 18:38:46'),
(46, 'fsdf', 'ranabilalmunawar122@gmail.com', '+9245345325', 'Arabic', 'sfsdf', '2', '2023-08-15 17:28:57', '2023-08-15 17:28:57'),
(47, 'bilal', 'ranabilalmunawar122@gmail.com', '+920000000', 'Russian', 'abc', '5', '2023-08-15 17:30:25', '2023-08-15 17:30:25'),
(48, 'Rana Bilal Munawar', 'ranabilalmunawar122@gmail.com', '+9230140293948', 'Chinese', 'hi', '15', '2023-11-08 02:19:54', '2023-11-08 02:19:54'),
(49, 'abc', 'abc@gmail.com', '+92345345345', 'Hindi', 'sdddddd', '14', '2023-11-08 02:21:16', '2023-11-08 02:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `listing_properties`
--

DROP TABLE IF EXISTS `listing_properties`;
CREATE TABLE IF NOT EXISTS `listing_properties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_property` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT 'hide=1,show=0',
  `payment_plane` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currencys` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budgets` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desired_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_desired_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlights` longtext COLLATE utf8mb4_unicode_ci,
  `Project_details` longtext COLLATE utf8mb4_unicode_ci,
  `amenities_details` longtext COLLATE utf8mb4_unicode_ci,
  `location_details` longtext COLLATE utf8mb4_unicode_ci,
  `Interiors_and_Units` longtext COLLATE utf8mb4_unicode_ci,
  `other_incentives` longtext COLLATE utf8mb4_unicode_ci,
  `about_the_developer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_properties`
--

INSERT INTO `listing_properties` (`id`, `title_name`, `type_of_property`, `number_of_bedrooms`, `handover`, `status`, `payment_plane`, `first_payment`, `second_payment`, `currencys`, `budgets`, `desired_size`, `show_desired_size`, `location`, `highlights`, `Project_details`, `amenities_details`, `location_details`, `Interiors_and_Units`, `other_incentives`, `about_the_developer`, `created_at`, `updated_at`) VALUES
(14, 'Damac Properties', '1', '8', '12', 0, '6', '50% Advance', '50% on handover', '2', '4011', '13430', '158*85', '8', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system,;\" segoe=\"\" color=\"\" ui=\"\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system,;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" segoe=\"\" color=\"\" ui=\"\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '35', '2023-08-23 17:29:24', '2023-10-24 02:57:48'),
(15, 'Damac Properties', '2', '3', '13', 0, '6', '50% Advance', '50% on handover', '2', '4564', '4930', '58*85', '7', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Embark on a Journey of Luxury at Harbour Lights by Damac Properties. Immerse yourself in the captivating allure of this extraordinary residential development, inspired by the enchanting waves and the mesmerizing beauty of the sea. Prepare to be swept away by the sheer elegance and sophistication of this 52-story masterpiece, featuring meticulously designed </span></span><strong style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:bolder;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">1, 2 and 3-bedroom apartments</strong><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"> nestled along the waterfront. Indulge in a lifestyle that mirrors the opulence of a luxury cruise ship, as every detail within the interiors and amenities reflects the epitome of grandeur. From the spacious, cabin-like rooms to the sprawling, resort-style swimming pools, every aspect of Harbour Lights emanates a sense of lavishness and exclusivity. Step into a world wherehigh-end luxury collides with impeccable fashion, as the renowned brand de Grisogono lends its signature style to the property’s common areas. Experience a seamless flow of captivating elements, gracefully guiding you through this extraordinary haven of elegance. Prepare to be transported to a realm of unrivaled luxury as you explore the captivating wonders of Harbour Lights by Damac Properties. Discover a residential paradise where exclusivity meets sophistication, and let the harmonious fusion of design and ambiance leave an everlasting impression on your senses.</span></span></p>', '41', '2023-08-23 17:31:46', '2023-08-23 17:31:46'),
(16, 'Casa Damac Tower', '2', '7', '9', 0, '6', '60% advance', '40% hand', '1', '34343', '11845162', '34534*343', '4', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(51,51,51);font-family:&quot;Open Sans Light&quot;;font-size:20px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">DAMAC Casa is a residential tower in Al Sufouh. One of the most awaited amenities in the project is the virtual reality scuba diving simulators, enabling you to experience marine life from the Red Sea to the Indian Ocean. Among residences on offer are 1–3 bedroom luxury apartments, 3–5 bedroom super luxury apartments and 1–3 bedroom townhouses.</span></span></p>', '35', '2023-11-09 02:37:58', '2023-11-09 02:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `listing_property_images`
--

DROP TABLE IF EXISTS `listing_property_images`;
CREATE TABLE IF NOT EXISTS `listing_property_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `list_pro_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_property_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_property_images`
--

INSERT INTO `listing_property_images` (`id`, `list_pro_image`, `list_property_id`, `created_at`, `updated_at`) VALUES
(104, '169278670626.jpg', 15, '2023-08-23 17:31:47', '2023-08-23 17:31:47'),
(105, '169278670743.jpg', 15, '2023-08-23 17:31:47', '2023-08-23 17:31:47'),
(106, '169278670784.jpg', 15, '2023-08-23 17:31:47', '2023-08-23 17:31:47'),
(107, '16927867077.jpg', 15, '2023-08-23 17:31:47', '2023-08-23 17:31:47'),
(108, '169813452323.jpg', 14, '2023-10-24 03:02:03', '2023-10-24 03:02:03'),
(109, '169813452311.jpg', 14, '2023-10-24 03:02:03', '2023-10-24 03:02:03'),
(110, '16981345236.jpg', 14, '2023-10-24 03:02:03', '2023-10-24 03:02:03'),
(111, '169813452331.jpg', 14, '2023-10-24 03:02:03', '2023-10-24 03:02:03'),
(112, '169951547849.jpg', 16, '2023-11-09 02:37:58', '2023-11-09 02:37:58'),
(113, '169951547880.jpg', 16, '2023-11-09 02:37:58', '2023-11-09 02:37:58'),
(114, '169951547873.jpg', 16, '2023-11-09 02:37:58', '2023-11-09 02:37:58'),
(115, '169951547893.jpg', 16, '2023-11-09 02:37:58', '2023-11-09 02:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `listing_property_videos`
--

DROP TABLE IF EXISTS `listing_property_videos`;
CREATE TABLE IF NOT EXISTS `listing_property_videos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `list_pro_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_property_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_property_videos`
--

INSERT INTO `listing_property_videos` (`id`, `list_pro_video`, `list_property_id`, `created_at`, `updated_at`) VALUES
(27, '169278656470.mp4', 14, '2023-08-23 17:29:24', '2023-08-23 17:29:24'),
(28, '169278670737.mp4', 15, '2023-08-23 17:31:47', '2023-08-23 17:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide=1,show=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `slug_location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dubai Harbour', 'dubai-harbour', '0', '2023-11-20 01:35:10', '2023-11-20 01:35:10'),
(2, 'Palm Jumeirah', 'palm-jumeirah', '0', '2023-11-20 01:35:51', '2023-11-20 01:35:51'),
(3, 'Emaar South', 'emaar-south', '0', '2023-11-20 01:36:08', '2023-11-20 01:36:08'),
(4, 'Downtown Dubai', 'downtown-dubai', '0', '2023-11-20 01:36:40', '2023-11-20 01:36:40'),
(5, 'Bluewaters Island', 'bluewaters-island', '0', '2023-11-20 01:36:56', '2023-11-20 01:36:56'),
(6, 'Tilal Al Ghaf Community', 'tilal-al-ghaf-community', '0', '2023-11-20 01:37:16', '2023-11-20 01:37:16'),
(7, 'Dubai Marina', 'dubai-marina', '0', '2023-11-20 01:37:32', '2023-11-20 01:37:32'),
(8, 'Palm Jumeirah one', 'palm-jumeirah-one', '0', '2023-11-20 01:40:15', '2023-11-20 01:40:15'),
(9, 'Mina Rashid', 'mina-rashid', '0', '2023-11-20 01:41:03', '2023-11-20 01:41:03'),
(10, 'business-bay', 'business-bay', '0', '2023-11-20 01:41:23', '2023-11-20 02:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `logoimages`
--

DROP TABLE IF EXISTS `logoimages`;
CREATE TABLE IF NOT EXISTS `logoimages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo_section_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_06_26_092536_create_listing_property_images_table', 1),
(13, '2023_06_26_092934_create_listing_property_videos_table', 1),
(14, '2023_06_26_093135_add_new_fields_developers', 1),
(18, '2023_07_07_110613_create_add_budgets_table', 3),
(20, '2023_07_10_061520_create_addbudgets_table', 4),
(31, '2023_07_13_104620_create_user_properties_table', 10),
(34, '2023_06_26_080406_create_listing_properties_table', 13),
(35, '2023_07_25_060555_create_budgets_table', 14),
(40, '2023_07_25_060541_create_prices_table', 17),
(41, '2023_07_25_061630_create_sqfeet_table', 18),
(42, '2023_08_04_111423_create_interestproperties_table', 19),
(47, '2014_10_12_000000_create_users_table', 20),
(51, '2023_10_13_094448_create_logoimages_table', 22),
(55, '2023_10_11_121451_create_homepagesettings_table', 23),
(58, '2023_10_26_020140_create_emailnewstemplates_table', 24),
(59, '2023_06_24_174052_create_type_of_properties_table', 25),
(60, '2023_07_05_064445_create_chatboxes_table', 26),
(62, '2023_06_25_062317_create_bedrooms_table', 27),
(63, '2023_07_06_094132_create_addcurrencies_table', 28),
(64, '2023_06_25_074557_create_locations_table', 29),
(65, '2023_06_25_070355_create_payment_plans_table', 30),
(66, '2023_07_20_091912_create_completion_dates_table', 31),
(67, '2023_06_22_111201_create_developers_table', 32);

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
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_plans`
--

DROP TABLE IF EXISTS `payment_plans`;
CREATE TABLE IF NOT EXISTS `payment_plans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_plane_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_payment_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'hide=0,show=1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_plans`
--

INSERT INTO `payment_plans` (`id`, `payment_plane_years`, `slug_payment_plan`, `status`, `created_at`, `updated_at`) VALUES
(1, '1 Years', '1-years', '0', '2023-11-20 02:54:07', '2023-11-20 07:30:57'),
(2, '2 Years', '2-years', '0', '2023-11-20 02:56:58', '2023-11-20 07:14:35'),
(6, '3 Years', '3-years', '0', '2023-11-20 02:58:06', '2023-11-20 02:58:06'),
(7, '4 Years', '4-years', '0', '2023-11-20 02:58:43', '2023-11-20 02:58:43'),
(8, '5 Years', '5-years', '0', '2023-11-20 02:58:59', '2023-11-20 02:58:59'),
(9, '6 Years', '6-years', '0', '2023-11-20 02:59:16', '2023-11-20 02:59:16'),
(10, '7 Years', '7-years', '0', '2023-11-20 02:59:43', '2023-11-20 02:59:43'),
(11, '8 Years', '8-years', '0', '2023-11-20 03:00:02', '2023-11-20 03:00:02'),
(12, '9 Years', '9-years', '0', '2023-11-20 03:00:18', '2023-11-20 03:00:18'),
(13, '10 Years', '10-years', '0', '2023-11-20 03:00:39', '2023-11-20 03:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `price_listing` int(11) DEFAULT NULL,
  `listing_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developers_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `price_listing`, `listing_id`, `developers_id`, `created_at`, `updated_at`) VALUES
(14, 4564, '15', '41', '2023-08-23 17:31:46', '2023-08-23 17:31:46'),
(15, 34343, '16', '35', '2023-11-09 02:37:58', '2023-11-09 02:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `sqfeet`
--

DROP TABLE IF EXISTS `sqfeet`;
CREATE TABLE IF NOT EXISTS `sqfeet` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sqfoot_listing` int(11) DEFAULT NULL,
  `listing_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developers_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sqfeet`
--

INSERT INTO `sqfeet` (`id`, `sqfoot_listing`, `listing_id`, `developers_id`, `created_at`, `updated_at`) VALUES
(14, 4930, '15', '13', '2023-08-23 17:31:46', '2023-08-23 17:31:46'),
(15, 11845162, '16', '35', '2023-11-09 02:37:58', '2023-11-09 02:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_properties`
--

DROP TABLE IF EXISTS `type_of_properties`;
CREATE TABLE IF NOT EXISTS `type_of_properties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_properties`
--

INSERT INTO `type_of_properties` (`id`, `property_type`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Land', '169864916718.png', '0', '2023-10-30 01:59:27', '2023-10-31 01:16:36'),
(2, 'Villa', '169864919820.png', '0', '2023-10-30 01:59:58', '2023-10-30 01:59:58'),
(3, 'Townhouse', '1698732887carbon_home.png', '0', '2023-10-30 02:00:29', '2023-10-31 01:14:47'),
(4, 'Apartment', '169864927364.png', '0', '2023-10-30 02:01:13', '2023-10-30 02:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = users, 1 = admin, 2 = form-user, 3 = developers',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `developer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `social_id`, `email_verified_at`, `password`, `show_password`, `avatar`, `phone_no`, `user_role`, `status`, `developer_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rana Bilal', 'Munawar1', 'ranabilalmunawar@gmail.com', NULL, NULL, '$2y$10$/mAGQpKaq5DVWo5XXDgR6umeEpgQyXeYI7sxOtn0MG9m9VnA.27RG', '123456789', 'ggg.png', '+923015198578', '0', 1, NULL, NULL, '2023-08-23 17:04:38', '2023-10-24 02:01:37'),
(2, 'Super', 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$ZymV5PAjpOuoVJasK3ThvOJZMgMNU/Km9jHtx0M84G8SIVj3WCTtq', '123456789', NULL, '123456789', '1', 1, NULL, NULL, '2023-08-23 17:05:22', '2023-08-23 17:05:22'),
(9, 'Rana Bilal', 'Munawar1', 'main@gmail.com', NULL, NULL, '$2y$10$lKucE58t4wUJeaMrY8o44u904AdQMwN55I4FLr/mh8UCaUWGD54GG', '123456789', NULL, '123456789', '0', 1, NULL, NULL, '2023-09-12 14:14:55', '2023-10-23 04:57:26'),
(56, 'rana', 'bilal', 'ranabilalmunawar122@gmail.com', NULL, NULL, '$2y$10$oLY0jPki10jgP/1Wi9n5Sez1Z6MabYVaNDCR07Sg8Z9uh0byiuTRq', '123456789', NULL, NULL, '2', 1, NULL, NULL, '2023-11-07 02:27:49', '2023-11-07 02:27:49'),
(62, 'developer three', NULL, 'ranabilalmunawar90@gmail.com', NULL, NULL, '$2y$10$gv1VZ4TtqoFKUW.4eNwiIuv.Ov/xI5GqmJKZQLNXBQrWGB3FmOFxu', '123456789', '1700534687169035881089.jpg', NULL, '3', 0, '35', NULL, '2023-11-20 21:44:47', '2023-11-21 08:33:04'),
(63, 'developer one', NULL, 'developerom00@gmail.com', NULL, NULL, '$2y$10$YIn/L/u8UzouoxYk22lyP.bkybs1htqYX7oWgrtFsD3U3Iy3i/C5W', '123456789', '170053483916902799098.jpg', NULL, '3', 1, '41', NULL, '2023-11-20 21:47:19', '2023-11-20 21:47:19'),
(64, 'Rana Zaid', 'Munawar', 'ranazaidmunawar106@gmail.com', NULL, NULL, '$2y$10$wZMn86x0vDAUDLljDwGBvO9NNz4Tz4oV7zhmOAzWBTmys8hsSGIWa', NULL, NULL, NULL, '0', 1, NULL, NULL, '2023-11-24 04:46:06', '2023-11-24 04:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_properties`
--

DROP TABLE IF EXISTS `user_properties`;
CREATE TABLE IF NOT EXISTS `user_properties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_property` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_bedroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_budget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_payment_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_desired_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_properties`
--

INSERT INTO `user_properties` (`id`, `user_property`, `user_bedroom`, `user_currency`, `user_budget`, `user_payment_plan`, `user_location`, `user_desired_size`, `user_dateofbirth`, `user_id`, `created_at`, `updated_at`) VALUES
(53, '1', '4', '2', '121', '6', '9', '256*52625', '0707/1919/2323', '70', '2023-07-22 01:24:48', '2023-07-22 01:24:48'),
(54, '4', '2', '2', '34', '8', '8', '128*85', '0707/2424/2323', '71', '2023-07-24 13:03:19', '2023-07-24 13:03:19'),
(68, '2', '2', '3', '20000', '2', '8', '3750', '0707/1818/2323', '25', '2023-07-24 19:33:22', '2023-07-24 19:33:22'),
(126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2023-10-30 01:34:10', '2023-10-30 01:34:10'),
(127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2023-10-30 01:34:38', '2023-10-30 01:34:38'),
(128, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, '2', '2023-10-30 01:36:40', '2023-10-30 01:36:40'),
(129, NULL, '3', NULL, '353', '7', '3', '6456', NULL, '2', '2023-10-30 01:37:53', '2023-10-30 01:37:53'),
(130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2023-10-30 01:46:35', '2023-10-30 01:46:35'),
(131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2023-10-30 01:47:59', '2023-10-30 01:47:59'),
(132, '2', '3', '2', '4564', '6', '2', '4930', '1111/2222/2323', '41', '2023-11-02 12:12:39', '2023-11-02 12:12:39'),
(133, '2', '3', NULL, '4564', '6', '2', '4930', NULL, '2', '2023-11-02 12:27:55', '2023-11-02 12:27:55'),
(134, '2', '3', NULL, '4564', '6', '2', '4930', NULL, '2', '2023-11-02 12:29:01', '2023-11-02 12:29:01'),
(135, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:38:15', '2023-11-02 12:38:15'),
(136, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:39:06', '2023-11-02 12:39:06'),
(137, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:39:44', '2023-11-02 12:39:44'),
(138, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:40:26', '2023-11-02 12:40:26'),
(139, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:41:37', '2023-11-02 12:41:37'),
(140, '2', '3', NULL, '4930', '6', '2', '4564', NULL, '42', '2023-11-02 12:47:49', '2023-11-02 12:47:49'),
(141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42', '2023-11-02 12:51:07', '2023-11-02 12:51:07'),
(142, NULL, '4', NULL, '3453', '2', '3', '34534', '1111/1010/2323', '43', '2023-11-02 13:54:57', '2023-11-02 13:54:57'),
(143, '2', '4', NULL, '3453', '2', '3', '34534', '1111/1010/2323', '44', '2023-11-02 13:57:30', '2023-11-02 13:57:30'),
(144, '2', '4', NULL, '3453', '2', '3', '34534', '1111/1010/2323', '45', '2023-11-02 13:58:17', '2023-11-02 13:58:17'),
(145, '2', '3', NULL, '565', '6', '3', '556', '1111/1010/2323', '46', '2023-11-02 14:04:03', '2023-11-02 14:04:03'),
(146, '2', '4', NULL, '435', '2', '7', '45', NULL, '42', '2023-11-02 14:04:58', '2023-11-02 14:04:58'),
(147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42', '2023-11-07 00:17:04', '2023-11-07 00:17:04'),
(148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42', '2023-11-07 00:17:17', '2023-11-07 00:17:17'),
(149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42', '2023-11-07 00:17:48', '2023-11-07 00:17:48'),
(150, '1', '5', NULL, '23423', '10', '6', '23', NULL, '42', '2023-11-07 00:25:28', '2023-11-07 00:25:28'),
(151, NULL, '4', NULL, '2342', '10', '3', '2342', '1111/0909/2323', '47', '2023-11-07 00:55:11', '2023-11-07 00:55:11'),
(152, NULL, '3', NULL, '757', '11', '2', '57', '1111/2323/2323', '48', '2023-11-07 01:44:38', '2023-11-07 01:44:38'),
(153, NULL, '2', NULL, '4564', '11', '4', '46', '1111/3030/2323', '49', '2023-11-07 01:48:58', '2023-11-07 01:48:58'),
(154, NULL, '2', NULL, '66', '1', '2', '56', '1111/1717/2323', '50', '2023-11-07 01:51:37', '2023-11-07 01:51:37'),
(155, NULL, '3', NULL, '343', '2', '3', '345', '1111/0303/2323', '51', '2023-11-07 01:54:12', '2023-11-07 01:54:12'),
(156, NULL, '5', NULL, '234', '7', '2', '234', '1111/1414/2323', '52', '2023-11-07 01:58:21', '2023-11-07 01:58:21'),
(157, NULL, '4', NULL, '2342', '12', '3', '234', '1111/3030/2323', '53', '2023-11-07 02:01:10', '2023-11-07 02:01:10'),
(158, NULL, '6', NULL, '44', '10', '2', '34', '1111/2929/2323', '54', '2023-11-07 02:06:20', '2023-11-07 02:06:20'),
(159, NULL, '3', NULL, '234', '12', '3', '234', '1111/2222/2323', '55', '2023-11-07 02:07:15', '2023-11-07 02:07:15'),
(160, '1', '4', NULL, '34', '7', '3', '234', '1111/2121/2323', '56', '2023-11-07 02:27:49', '2023-11-07 02:27:49'),
(161, '2', '3', NULL, '4564', '6', '7', '4930', NULL, '56', '2023-11-19 19:31:02', '2023-11-19 19:31:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
