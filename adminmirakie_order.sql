-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2023 at 02:46 AM
-- Server version: 10.5.22-MariaDB-log
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminmirakie_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupens`
--

CREATE TABLE `coupens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type` enum('plain','percentage') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupen_user`
--

CREATE TABLE `coupen_user` (
  `user_id` bigint(20) NOT NULL,
  `coupen_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `social_account` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alert` varchar(255) NOT NULL DEFAULT '0',
  `seen` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `address`, `phone_number`, `social_account`, `post_code`, `user_id`, `created_at`, `updated_at`, `alert`, `seen`) VALUES
(18, 'Bilal Two', 'munawar', 'ranabilalmunawar12@gmail.com', 'pakistan 2', '452452452', NULL, '4242', NULL, '2023-06-08 13:18:34', '2023-08-20 07:29:16', '1', '0'),
(17, 'mubeen3', '3', 'mubeen3.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:17:41', '2023-08-20 07:30:03', '1', '0'),
(16, 'mubeen2', '2', 'mubeen2.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:13:54', '2023-06-08 13:13:54', '0', '0'),
(15, 'bilal', 'munawar', 'ranabilalmunawar122@gmail.com', 'pakistan', '0304282', NULL, '454', NULL, '2023-06-08 13:10:46', '2023-06-08 13:10:46', '0', '0'),
(14, 'mubeen1', '1', 'mubeen1.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:08:52', '2023-06-08 13:08:52', '0', '0'),
(13, 'mubeen', '1', 'mubeen.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:06:41', '2023-08-18 19:23:13', '1', '0'),
(12, 'bilal ali', 'dgdg', 'ranabilalmunawar@gmail.com', 'ffgdfg', '35345', NULL, '4545', '3', '2023-06-06 18:46:18', '2023-06-06 18:46:18', '0', '0'),
(19, 'mubeen4', '4', 'mubeen4.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:21:33', '2023-06-08 13:21:33', '0', '0'),
(20, 'Rana', 'munawar', 'ranabilalmunawar35@gmail.com', 'pakistan 3', '245245245', NULL, '2452', NULL, '2023-06-08 13:24:07', '2023-06-08 13:24:07', '0', '0'),
(21, 'mubeen5', '5', 'mubeen5.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:24:26', '2023-06-08 13:24:26', '0', '0'),
(22, 'Rana Bilal Four', 'Munawar', 'ranabilalmunawar40@gmail.com', 'pakistan 4', '3452450045', NULL, '2452', NULL, '2023-06-08 13:29:36', '2023-06-08 13:29:36', '0', '0'),
(23, 'Rana Bilal Five', 'Munawar', 'ranabilalmunawar50@gmail.com', 'pakistan 5', '24524500450', NULL, '4245', NULL, '2023-06-08 13:33:21', '2023-06-08 13:33:21', '0', '0'),
(24, 'mubeen6', 'hassan', 'mub6@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:18:57', '2023-06-08 18:18:57', '0', '0'),
(25, 'dfgdf', 'dfgdfg', 'fsdf@gmail.com', 'dfgdgd', '543534', NULL, '345345', NULL, '2023-06-08 18:19:01', '2023-06-08 18:19:01', '0', '0'),
(26, 'mub7', '7', 'mub7@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:20:22', '2023-06-08 18:20:22', '0', '0'),
(27, 'Bilal test', 'Munawar', 'bilal@gmail.com', 'zczc', '5454', NULL, '454', NULL, '2023-06-08 18:22:37', '2023-06-08 18:22:37', '0', '0'),
(28, 'mube2', '2', 'mube2@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:35:19', '2023-06-08 18:35:19', '0', '0'),
(29, 'bilal55', 'rana', 'ranabilal@gmail.com', 'sdfsd', '23232', NULL, '323', NULL, '2023-06-08 18:35:36', '2023-06-08 18:35:36', '0', '0'),
(30, 'ghmgh', 'jhmghm', 'ranazaidmunawar106@gmail.com', 'hjty', '425254245', NULL, '535', NULL, '2023-06-09 01:45:25', '2023-06-09 01:45:25', '0', '0'),
(31, 'abcd', 'abcd', 'abcd@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-09 12:51:20', '2023-06-09 12:51:20', '0', '0'),
(32, 'order', 'test', 'ordertest2@gmail.com', 'abdulallah pur towm', '03338723443', NULL, '37000', NULL, '2023-06-19 05:54:15', '2023-06-19 05:54:15', '0', '0'),
(33, 'agent', '2', 'ordertest@gmail.com', 'no', '0313004599', NULL, '34000', NULL, '2023-06-19 05:56:05', '2023-06-19 05:56:05', '0', '0'),
(34, 'mubeen9', 'ijaz', 'mubeen.ijaz@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-20 17:41:36', '2023-06-20 17:41:36', '0', '0'),
(35, 'Rana Zaid', 'Munawar', 'ranazaidmunawar1065@gmail.com', 'fsd', '03020000214', NULL, '38000', NULL, '2023-06-21 18:18:23', '2023-06-21 18:18:23', '0', '0'),
(36, 'Rana khan', 'Munawar', 'ranazaidmunawar1006@gmail.com', 'main', '03020000215', NULL, '38200', NULL, '2023-06-21 19:06:31', '2023-06-21 19:06:31', '0', '0'),
(37, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '03221812496', NULL, '37000', NULL, '2023-07-17 17:38:39', '2023-07-17 17:38:39', '0', '0'),
(38, 'test', 'faizan', 'test@gmail.com', 'random testing address', '+448009296163', NULL, '38000', NULL, '2023-07-17 18:34:02', '2023-07-17 18:34:02', '0', '0'),
(39, 'ali', 'ahmad', 'admin@admin.com', 'fo9 4095 klgj4', '+44+447478329292', NULL, '37000', NULL, '2023-07-27 17:49:15', '2023-07-27 17:49:15', '0', '0'),
(40, 'ghjghjgh', '', '', 'dfghdfh', '+923020000214', NULL, 'hgjghi653478&^%&^', NULL, '2023-07-31 13:24:41', '2023-07-31 13:24:41', '0', '0'),
(41, 'mm', 'vv', 'mm@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '+921234567898', NULL, '1234.', NULL, '2023-07-31 17:05:32', '2023-07-31 17:05:32', '0', '0'),
(42, 'jon', '', '', 'eden valley', '+44+447847298422', NULL, 'ls12 1nb', NULL, '2023-08-02 17:00:45', '2023-08-02 17:00:45', '0', '0'),
(43, 'no', 'Ali', 'ahmadjunaidali606@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-02 17:07:28', '2023-08-02 17:07:28', '0', '0'),
(44, 'kj', 'Ali', 'ahmadjunaidali905@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-02 18:22:35', '2023-08-02 18:22:35', '0', '0'),
(45, 'Mack', 'Jhosn', '', 'Manchester', '+92+923493667721', NULL, 'M14', NULL, '2023-08-03 03:24:28', '2023-08-03 03:24:28', '0', '0'),
(46, 'hhhhhh', '', '', 'fsd', '+923020000214', NULL, '38000', NULL, '2023-08-09 19:09:55', '2023-08-09 19:09:55', '0', '0'),
(47, 'jon', 'jon', '', 'yes ues', '+44+447442939460', NULL, 'dn19 7lp', NULL, '2023-08-09 22:12:37', '2023-08-09 22:12:37', '0', '0'),
(48, 'jgl', 'jfskj', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-09 22:22:26', '2023-08-09 22:22:26', '0', '0'),
(49, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-09 22:42:35', '2023-08-09 22:42:35', '0', '0'),
(50, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-15 14:23:59', '2023-08-15 14:23:59', '0', '0'),
(51, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-16 03:01:05', '2023-08-16 03:01:05', '0', '0'),
(52, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-17 12:14:49', '2023-08-17 12:14:49', '0', '0'),
(53, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-17 12:17:14', '2023-08-17 12:17:14', '0', '0'),
(54, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-17 12:20:05', '2023-08-17 12:20:05', '0', '0'),
(55, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-17 18:48:14', '2023-08-17 18:48:14', '0', '0'),
(56, 'Salman', 'khan', 'ranazaidmunawar106@gmail.com', 'fsd', '+923020000214', NULL, '38000', NULL, '2023-08-18 19:45:05', '2023-08-18 19:45:05', '0', '0'),
(57, 'Rana Zaid', 'Munawar', 'ranazaidmunawar106@gmail.com', 'faisalabad', '+923020000214', NULL, '38000', NULL, '2023-08-18 19:52:37', '2023-08-18 19:52:37', '0', '0'),
(58, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-18 20:14:59', '2023-08-18 20:14:59', '0', '0'),
(59, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-19 17:00:07', '2023-08-19 17:00:07', '0', '0'),
(60, 'jon', '', '', 'Faisalabad', '+923221812496', NULL, '380000', NULL, '2023-08-19 17:04:40', '2023-08-19 17:04:40', '0', '0'),
(61, 'order', 'tset', '', 'fsd', '+923316717315', NULL, '45098', NULL, '2023-08-20 07:51:06', '2023-08-20 07:51:06', '0', '0'),
(62, 'no', '', '', 'fsd', '+9203336717315', NULL, '67676', NULL, '2023-08-20 07:57:00', '2023-08-20 07:57:00', '0', '0'),
(63, 'nomy', '', '', 'notm ljl', '+2134892290902', NULL, '79h o99', NULL, '2023-08-20 08:03:46', '2023-08-20 08:03:46', '0', '0'),
(64, 'nomy', '', '', 'fsd', '+927698789979', NULL, '79h o99', NULL, '2023-08-20 08:13:03', '2023-08-20 08:13:03', '0', '0'),
(65, 'nomy', '', '', 'ghjtyuio', '+92567898765456', NULL, 'ghjkk', NULL, '2023-08-20 08:20:24', '2023-08-20 08:20:24', '0', '0'),
(66, 'hafiz', 'bro', '', 'fsd', '+923336717315', NULL, '37000', NULL, '2023-08-24 14:10:22', '2023-08-24 14:10:22', '0', '0'),
(67, 'jon', '', '', 'fsd', '+922092094809', NULL, 'iuhy87', NULL, '2023-08-24 14:13:04', '2023-08-24 14:13:04', '0', '0'),
(68, 'nomy', '', '', 'y4fg65', '+927987654356789', NULL, '214yhtf7', NULL, '2023-08-24 14:14:57', '2023-08-24 14:14:57', '0', '0'),
(69, 'ali', '', '', 'fsd', '+9234567899876543', NULL, '45098', NULL, '2023-08-24 14:16:28', '2023-08-24 14:16:28', '0', '0'),
(70, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-24 14:36:25', '2023-08-24 14:36:25', '0', '0'),
(71, 'rana ali', '', '', 'fsd', '+923020000214', NULL, '3622n', NULL, '2023-08-25 18:38:43', '2023-08-25 18:38:43', '0', '0'),
(72, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-25 20:38:40', '2023-08-25 20:38:40', '0', '0'),
(73, 'Jon', '', '', 'Fsd', '+57575686', NULL, 'St355', NULL, '2023-08-25 22:13:16', '2023-08-25 22:13:16', '0', '0'),
(74, 'order', 'test', '', 'fsd', '+92456898765', NULL, '37000', NULL, '2023-08-26 18:15:11', '2023-08-26 18:15:11', '0', '0'),
(75, 'Ahmad', '', '', 'Test', '+4407957272628', NULL, 'Ta135dn', NULL, '2023-08-26 19:49:00', '2023-08-26 19:49:00', '0', '0'),
(76, 'Ben Dancer', '', '', 'Flat 8 Harty House Church street Eccles,\r\nM30 0LT', '+4407305353613', NULL, 'M30 0LT', NULL, '2023-08-26 21:20:33', '2023-08-26 21:20:33', '0', '0'),
(77, 'Warren griffiths', '', '', '10 Chappel walk coppull, PR75AY', '+4407496679606', NULL, 'PR75AY', NULL, '2023-08-26 21:37:23', '2023-08-26 21:37:23', '0', '0'),
(78, 'Dave', '', '', '143 Greatmedow Northampton', '+44+447769181759', NULL, 'NN3 8DJ', NULL, '2023-08-26 22:29:48', '2023-08-26 22:29:48', '0', '0'),
(79, 'Rukaiya', 'Khasamwala', '', '108 Pembroke,', '+447459776108', NULL, 'G74 3QA', NULL, '2023-08-26 23:09:44', '2023-08-26 23:09:44', '0', '0'),
(80, 'Joanne', '', '', 'bn2 4rd\r\n112 Bevendean Crescent', '+447944580878', NULL, 'bn2 4rd', NULL, '2023-08-26 23:21:05', '2023-08-26 23:21:05', '0', '0'),
(81, 'Anth', 'brown', '', '2 bladud buildings bath', '+4407940710904', NULL, 'Ba15ls', NULL, '2023-08-26 23:26:25', '2023-08-26 23:26:25', '0', '0'),
(82, 'Shaks', 'kakiil', '', 'BB2 2SN\r\n23 selborn street, blackburn, lancashire', '+4407400322712', NULL, 'BB2 2SN', NULL, '2023-08-26 23:31:57', '2023-08-26 23:31:57', '0', '0'),
(83, 'Joanne', 'Edmondson', '', 'OL9 0AW\r\n17 Parkgate \r\nChadderton\r\nOldham', '+4407542988421', NULL, 'OL9 0AW', NULL, '2023-08-26 23:36:45', '2023-08-26 23:36:45', '0', '0'),
(84, 'Chukwuma', 'Innocent', '', 'DL3 0NN \r\n65 Eldon street, Darlington', '+4407769371120', NULL, 'DL3 0NN', NULL, '2023-08-26 23:42:51', '2023-08-26 23:42:51', '0', '0'),
(85, 'Oluwakemi', 'Olaoye', '', '50 Park Lane Tottenham', '+44+447754433776', NULL, 'n17 0js', NULL, '2023-08-27 00:12:18', '2023-08-27 00:12:18', '0', '0'),
(86, 'Oluwakemi', 'Olaoye', '', '50 Park Lane Tottenham, London', '+44+447754433776', NULL, 'n17 0js', NULL, '2023-08-27 00:24:55', '2023-08-27 00:24:55', '0', '0'),
(87, 'Stephanie Hulme', '', '', '3 Knowsley green springhead', '+44+4407484261608', NULL, 'OL44BP', NULL, '2023-08-27 00:46:48', '2023-08-27 00:46:48', '0', '0'),
(88, 'Stephanie Hulme', '', '', '3 Knowsley green springhead', '+44+447484261608', NULL, 'OL44BP', NULL, '2023-08-27 01:15:35', '2023-08-27 01:15:35', '0', '0'),
(89, 'Michelle', '', '', '29 Broadway Grimsby', '+44+447415715710', NULL, 'DN34 5RW', NULL, '2023-08-27 01:37:01', '2023-08-27 01:37:01', '0', '0'),
(90, 'Natalie', 'fox', '', '21 ORchard street\r\nwombwell\r\nbarnsley\r\nsouth yorkshire', '+4407927484222', NULL, 'S73 8HQ', NULL, '2023-08-27 01:51:08', '2023-08-27 01:51:08', '0', '0'),
(91, 'Leigh Collins', '', '', '25 Alverstone Road', '+4407961228684', NULL, 'SR33HZ', NULL, '2023-08-27 01:54:30', '2023-08-27 01:54:30', '0', '0'),
(92, 'EVA', 'TOKAROVA', '', '24 SPRINWOOD GARDENS \r\nBRADFORD', '+4407761780629', NULL, 'BD5 8QP', NULL, '2023-08-27 02:07:44', '2023-08-27 02:07:44', '0', '0'),
(93, 'RIO', 'DOWEN', '', '12 MOORLANDS COURT RESIVOUR ROAD \r\nROWLEY REGIS', '+4407754437413', NULL, 'B65 9PB', NULL, '2023-08-27 02:11:19', '2023-08-27 02:11:19', '0', '0'),
(94, 'JIMMY', '', '', '18 CHERITON DRIVE BOLTON', '+4407586166539', NULL, 'BL26HJ', NULL, '2023-08-27 02:17:05', '2023-08-27 02:17:05', '0', '0'),
(95, 'VICKY', '', '', '7 QUEEN MARRY ROAD \r\nROSSINGTON', '+4407369232996', NULL, 'DN110TS', NULL, '2023-08-27 02:24:28', '2023-08-27 02:24:28', '0', '0'),
(96, 'BARBORA', 'HORVATHOVA', '', '34 HANKEY STREET', '+4407442778509', NULL, 'PE12HH', NULL, '2023-08-27 02:26:54', '2023-08-27 02:26:54', '0', '0'),
(97, 'DANIKA', 'CLARK', '', '8 BAULKINS DROVE\r\nSUTTON ST JAMES\r\nSPALDING', '+4407731868687', NULL, 'PE120JX', NULL, '2023-08-27 02:30:42', '2023-08-27 02:30:42', '0', '0'),
(98, 'Attia Murtaza', '', '', 'Sommerfield Road Bartley green Birmingham', '+4407480744433', NULL, 'B32 3TL', NULL, '2023-08-27 02:35:31', '2023-08-27 02:35:31', '0', '0'),
(99, 'Tracey Willan', '', '', '1 langdale crescent Kendal', '+4407775897645', NULL, 'LA96JU', NULL, '2023-08-27 03:01:38', '2023-08-27 03:01:38', '0', '0'),
(100, 'Samuel', 'Covaciu', '', '22 Manchester street Newport', '+44+447748927790', NULL, 'Np198dj', NULL, '2023-08-27 03:05:52', '2023-08-27 03:05:52', '0', '0'),
(101, 'Nour Al HWAMDA', '', '', '12 Lynworth place', '+447413202091', NULL, 'Gl525ea', NULL, '2023-08-27 04:09:12', '2023-08-27 04:09:12', '0', '0'),
(102, 'Jotheoneandonly', '', '', '54 primrose close casstlefield Runcorn cheshire', '+447786798434', NULL, 'Wa72ll', NULL, '2023-08-27 04:20:12', '2023-08-27 04:20:12', '0', '0'),
(103, 'Sonir alici', '', '', '132 south church av southend on sea', '+447980070951', NULL, 'Ss12rp', NULL, '2023-08-27 04:50:10', '2023-08-27 04:50:10', '0', '0'),
(104, 'kyron', 'janes', '', 'kings court rd', '+4407901273213', NULL, 'sw161ja', NULL, '2023-08-27 04:56:59', '2023-08-27 04:56:59', '0', '0'),
(105, 'amanda', 'venton', '', '10 bramwell street eastwood rotherham', '+4407849844993', NULL, 's651rz', NULL, '2023-08-27 05:02:36', '2023-08-27 05:02:36', '0', '0'),
(106, 'Esther', 'Olayinka', '', '64 Birchwood Avenue', '+44+447871759920', NULL, 'LN60JD', NULL, '2023-08-27 05:41:22', '2023-08-27 05:41:22', '0', '0'),
(107, 'Ahmed', 'Salem', '', 'Sale, Greater Manchester UK', '+44+447552542462', NULL, 'M33 3PT', NULL, '2023-08-27 07:11:52', '2023-08-27 07:11:52', '0', '0'),
(108, 'Linda', 'Topping', '', '46 Mainwaring drive wilmslow', '+44+447597945042', NULL, 'sk92qd', NULL, '2023-08-27 07:15:41', '2023-08-27 07:15:41', '0', '0'),
(109, 'Abi', 'Jones', '', '2b Harold Evers Way Kidderminster', '+44+447527107282', NULL, 'Dy102HG', NULL, '2023-08-27 07:20:37', '2023-08-27 07:20:37', '0', '0'),
(110, 'Ellie', 'Brown', '', '71 Andrew street Liverpool', '+44+447817764374', NULL, 'L4 4DS', NULL, '2023-08-27 07:25:51', '2023-08-27 07:25:51', '0', '0'),
(111, 'Jake', '', '', 'Corporal House Field Lane', '+44+447984414244', NULL, 'WF9 1DD', NULL, '2023-08-27 07:36:19', '2023-08-27 07:36:19', '0', '0'),
(112, 'Salman Al Arab', '', '', 'Flat 3, 287 Gillot Road', '+44+447878784122', NULL, 'B16 0RX', NULL, '2023-08-27 07:41:29', '2023-08-27 07:41:29', '0', '0'),
(113, 'BlackMoses', '', '', '3 Bembridge House Station Road', '+44+447593616300', NULL, 'NN17 1UE', NULL, '2023-08-27 07:47:16', '2023-08-27 07:47:16', '0', '0'),
(114, 'Mohammad Rajabi', '', '', '623a holderness Road', '+44+447405591517', NULL, 'Hu89al', NULL, '2023-08-27 07:54:56', '2023-08-27 07:54:56', '0', '0'),
(115, 'Jordan', '', '', '7 Cygnet Court, 21 Watson Street, Birkenhead,', '+44+447511570963', NULL, 'CH41 3QA', NULL, '2023-08-27 07:59:48', '2023-08-27 07:59:48', '0', '0'),
(116, 'Euphemia Okao', '', '', '11 Treforest Road', '+44+447447391430', NULL, 'CV3 1FN', NULL, '2023-08-27 08:04:50', '2023-08-27 08:04:50', '0', '0'),
(117, 'Taz Riaz', '', '', '72 Stanley Street', '+44+447459385541', NULL, 'ST6 6BX', NULL, '2023-08-27 08:14:27', '2023-08-27 08:14:27', '0', '0'),
(118, 'Michelle dainty', '', '', '13 sunderland place wigan', '+447377150340', NULL, 'WN50QT', NULL, '2023-08-27 08:20:59', '2023-08-27 08:20:59', '0', '0'),
(119, 'Caitlin', '', '', '15 Gallowstree Rise Welshpool Powys', '+44+447799958947', NULL, 'Sy217nt', NULL, '2023-08-27 08:29:11', '2023-08-27 08:29:11', '0', '0'),
(120, 'Gareth Jacklin', '', '', '24 osbourne drive', '+447305828229', NULL, 'Bd132gd', NULL, '2023-08-27 08:33:31', '2023-08-27 08:33:31', '0', '0'),
(121, 'Mariam Omar', '', '', 'Clyde court Flat D8, 11 Erskine Street, Leicester,', '+44+447761397922', NULL, 'LE1 2AW', NULL, '2023-08-27 08:37:14', '2023-08-27 08:37:14', '0', '0'),
(122, 'Janice', '', '', '1 Scholars Close Newsham Blyth', '+44+447377968372', NULL, 'NE244SY', NULL, '2023-08-27 08:40:41', '2023-08-27 08:40:41', '0', '0'),
(123, 'Chels Lee', '', '', '59 park street', '+44+447916356407', NULL, 'Hu28ta', NULL, '2023-08-27 08:44:16', '2023-08-27 08:44:16', '0', '0'),
(124, 'Abhishek Pandey', '', '', '39, Rathbone crescent Peterborough', '+44+447387427118', NULL, 'Pe36de', NULL, '2023-08-27 08:46:34', '2023-08-27 08:46:34', '0', '0'),
(125, 'Muhammad amin', '', '', '142 Derwen', '+44+447938853929', NULL, 'Bb3 1bz', NULL, '2023-08-27 08:48:56', '2023-08-27 08:48:56', '0', '0'),
(126, 'Marylynne X Rose', '', '', '188 readington drive', '+44+447598141265', NULL, 'sl3 7qb', NULL, '2023-08-27 08:53:16', '2023-08-27 08:53:16', '0', '0'),
(127, 'AC Alex', '', '', '70 capel garden', '+44+447976911215', NULL, 'Ig3 9dg', NULL, '2023-08-27 08:55:46', '2023-08-27 08:55:46', '0', '0'),
(128, 'Christy Oluwatoyin', 'Nwaturuocha', '', '8 Ely Close Stevenage', '+44+447769556950', NULL, 'Sg1 4nn', NULL, '2023-08-27 09:00:08', '2023-08-27 09:00:08', '0', '0'),
(129, 'ogo uzo', '', '', 'flat 25 the strand London road', '+44+447771212389', NULL, 'GL 13HT', NULL, '2023-08-27 09:04:38', '2023-08-27 09:04:38', '0', '0'),
(130, 'Sarah Paxton', '', '', '88 riding leaze Lawrence weston Bristol', '+44+447854844366', NULL, 'Bs11 0qd', NULL, '2023-08-27 09:07:11', '2023-08-27 09:07:11', '0', '0'),
(131, 'Chloe Louise', 'Gibbs', '', 'flat 8', '+44+447943152840', NULL, 'DA2 6RD', NULL, '2023-08-27 09:09:36', '2023-08-27 09:09:36', '0', '0'),
(132, 'Sham Patel', '', '', '63 Northampton Road Wellingborough Northants', '+44+447787705503', NULL, 'NN8 3LS', NULL, '2023-08-27 09:11:59', '2023-08-27 09:11:59', '0', '0'),
(133, 'Hichame El', 'Haddad', '', 'Beresford Ave Wembley', '+44+447594442444', NULL, 'HA0 1 NW', NULL, '2023-08-27 09:14:59', '2023-08-27 09:14:59', '0', '0'),
(134, 'Dundy', '', '', '12 Street London', '+44745689924455', NULL, 'Wn12kl', NULL, '2023-08-27 09:19:38', '2023-08-27 09:19:38', '0', '0'),
(135, 'Mark Horsfield', '', '', 'Admiral drive Wisbech', '+447522696831', NULL, 'PE13 3px', NULL, '2023-08-27 09:23:27', '2023-08-27 09:23:27', '0', '0'),
(136, 'Bethany', '', '', '70 Spring Parklands, Dudley,', '+44+447484811909', NULL, 'DY1 2DL', NULL, '2023-08-27 09:25:48', '2023-08-27 09:25:48', '0', '0'),
(137, 'Bee Ross', '', '', '323 Huntington Terrace Rd, Cannock Staffordshire', '+44+447541837934', NULL, 'WS11 5HX', NULL, '2023-08-27 09:28:26', '2023-08-27 09:28:26', '0', '0'),
(138, 'Rebecca', '', '', '12 Weybridge Woodside Telford', '+44+447908913845', NULL, 'no postcode', NULL, '2023-08-27 09:32:14', '2023-08-27 09:32:14', '0', '0'),
(139, 'An Dzia', '', '', '39 John Street Ilkeston', '+44+447935197914', NULL, 'DE7 8GL', NULL, '2023-08-27 10:08:33', '2023-08-27 10:08:33', '0', '0'),
(140, 'Amy Richards', '', '', '6,Holmecroft, Newbiggen by the sea,', '+44+447707495833', NULL, 'NE64 6DQ', NULL, '2023-08-27 10:14:03', '2023-08-27 10:14:03', '0', '0'),
(141, 'Mia Ali', '', '', '74 Alders Road', '+44+447708657748', NULL, 'M22 8FU', NULL, '2023-08-27 10:16:22', '2023-08-27 10:16:22', '0', '0'),
(142, 'An Dzia', 'An Dzia', '', '39 John street llkeston', '+9207935197914', NULL, 'DE78GL', NULL, '2023-08-27 10:57:27', '2023-08-27 10:57:27', '0', '0'),
(143, 'Hkoogd', '', '', 'Gkooogc', '+44+447653089005', NULL, 'Guij33', NULL, '2023-08-27 14:51:49', '2023-08-27 14:51:49', '0', '0'),
(144, 'Fgjk', '', '', 'Tiojfd', '+44+447087590953', NULL, 'Gio6ebl', NULL, '2023-08-27 15:07:13', '2023-08-27 15:07:13', '0', '0'),
(145, 'Steven bilsby', '', '', 'Victory cres Southampton', '+4407494719980', NULL, 'So15 8ra', NULL, '2023-08-27 15:21:49', '2023-08-27 15:21:49', '0', '0'),
(146, 'Samuel', 'Covaciu', '', '22 Manchester street Newport Np198dj', '+447748927790', NULL, 'Np198dj', NULL, '2023-08-27 16:51:22', '2023-08-27 16:51:22', '0', '0'),
(147, 'Robert', 'Manners', '', 'Runcie close. Cotgrave Nottingham.', '+44+4407920430803', NULL, 'NG12 3TG', NULL, '2023-08-27 21:47:54', '2023-08-27 21:47:54', '0', '0'),
(148, 'Jamie M mill', '', '', '18 Birchwood road Alfretom', '+4407397243613', NULL, 'DE55 7HB', NULL, '2023-08-27 22:23:53', '2023-08-27 22:23:53', '0', '0'),
(149, 'Loredana', '', '', '257 Beake Avenue', '+447404816536', NULL, 'CV6 3BA', NULL, '2023-08-27 22:53:53', '2023-08-27 22:53:53', '0', '0'),
(150, 'Loredana', '', '', '257 Beake Avenue', '+447404816536', NULL, 'CV6 3BA', NULL, '2023-08-27 23:00:43', '2023-08-27 23:00:43', '0', '0'),
(151, 'Barbora', 'horvathova', '', '34 HANKEY STREET', '+4407442778509', NULL, 'PE1 2HH', NULL, '2023-08-27 23:25:11', '2023-08-27 23:25:11', '0', '0'),
(152, 'DANIKA', 'CLARK', '', '8 BAULKINS DROVE\r\nSUTTON ST JAMES\r\nSPALDING', '+9207731868687', NULL, 'PE120JX', NULL, '2023-08-27 23:27:28', '2023-08-27 23:27:28', '0', '0'),
(153, 'VICKY', '', '', '7 QUEEN MARY ROAD\r\nROSSINGTON', '+4407369232996', NULL, 'DN110TS', NULL, '2023-08-27 23:33:11', '2023-08-27 23:33:11', '0', '0'),
(154, 'JIMMY', '', '', '18 CHERITON DRIVE BOLTON', '+9207586166539', NULL, 'BL26HJ', NULL, '2023-08-27 23:35:53', '2023-08-27 23:35:53', '0', '0'),
(155, 'R MORGAN', '', '', 'THE BRUSHES REDFORD ROAD WALESBY\r\nNOTTINGHAMSHIRE', '+9207789208247', NULL, 'NG22 9PE', NULL, '2023-08-27 23:47:30', '2023-08-27 23:47:30', '0', '0'),
(156, 'MOHAMMED', '', '', '111 COSTWOOD AVENUE', '+9207521188841', NULL, 'NN5 6DS', NULL, '2023-08-27 23:49:51', '2023-08-27 23:49:51', '0', '0'),
(157, 'THOMAS', 'WIDDOWSON', '', '16 BADGER CLOSE', '+9207460434027', NULL, 'NG4 3EL', NULL, '2023-08-27 23:51:56', '2023-08-27 23:51:56', '0', '0'),
(158, 'Dami Babalola', '', '', '23 leegrange Road, \r\nM9 4fa', '+4407944949582', NULL, 'M9 4fa', NULL, '2023-08-28 00:32:35', '2023-08-28 00:32:35', '0', '0'),
(159, 'Nancy skilton', '', '', 'Sittingbourne crown road', '+44+447394091795', NULL, 'Me10 2ah', NULL, '2023-08-28 00:47:09', '2023-08-28 00:47:09', '0', '0'),
(160, 'Stapleton', '', '', '11finklestreet  bentley \r\nDn50rp', '+4407835416718', NULL, 'Dn50rp', NULL, '2023-08-28 01:00:02', '2023-08-28 01:00:02', '0', '0'),
(161, 'Mohammad Roshan', '', '', '30 Lloyd road Levenshulme', '+44+447758162090', NULL, 'M19 2RF', NULL, '2023-08-28 01:09:16', '2023-08-28 01:09:16', '0', '0'),
(162, 'Chianta', '', '', '131 bronywan chirk, Wrexham', '+4407955612003', NULL, 'Sy11 3fd', NULL, '2023-08-28 01:24:15', '2023-08-28 01:24:15', '0', '0'),
(163, 'Jean', 'carney', '', '52 Kirk balk, hoyland, Barnsleys', '+4407585685243', NULL, 's749ht', NULL, '2023-08-28 01:37:13', '2023-08-28 01:37:13', '0', '0'),
(164, 'Kyron', 'kyron', '', 'kings court rd', '+4407901273213', NULL, 'sw161ja', NULL, '2023-08-28 01:40:37', '2023-08-28 01:40:37', '0', '0'),
(165, 'Carole', 'Barker', '', '61 torcross avenue Wyken', '+4407404236770', NULL, 'Cv2 3nw', NULL, '2023-08-28 01:44:36', '2023-08-28 01:44:36', '0', '0'),
(166, 'SARA', '', '', '133 FRAMFIELD ROAD', '+9207749381384', NULL, 'W7 1NQ', NULL, '2023-08-28 01:50:40', '2023-08-28 01:50:40', '0', '0'),
(167, 'Megan Burton', '', '', '1 Carden Place', '+4407749568497', NULL, 'LS15 0QU', NULL, '2023-08-28 01:59:47', '2023-08-28 01:59:47', '0', '0'),
(168, 'Nuhu Salihu', 'Abdullahi', '', '20 Harbury close', '+447455697298', NULL, 'BL3 4JY', NULL, '2023-08-28 02:07:59', '2023-08-28 02:07:59', '0', '0'),
(169, 'Omidiora Ola moses', '', '', '106 Meath Street', '+447706206635', NULL, 'TS14RY', NULL, '2023-08-28 02:10:18', '2023-08-28 02:10:18', '0', '0'),
(170, 'Grace Alice', 'Cullen', '', '86 The Highway, Brighton and Hove', '+44+447903092655', NULL, 'BN2 4GD', NULL, '2023-08-28 02:30:51', '2023-08-28 02:30:51', '0', '0'),
(171, 'Soniya Chacko', '', '', 'Flat 8 Hop House 18 Eldrige St\r\nDorchester, DT1 1HL', '+4407384023172', NULL, 'DT1 1HL', NULL, '2023-08-28 02:35:45', '2023-08-28 02:35:45', '0', '0'),
(172, 'Syed', 'Touseef', '', '58, Colwyn Close ,Stevenage, SG1 2AW', '+4407771406584', NULL, 'SG1 2AW', NULL, '2023-08-28 02:36:18', '2023-08-28 02:36:18', '0', '0'),
(173, 'Mimi', '', '', '157 dene road', '+44+447537884487', NULL, 'Ox3 7ja', NULL, '2023-08-28 02:56:03', '2023-08-28 02:56:03', '0', '0'),
(174, 'Mac Serrano-Castro', '', '', '5 PADDOCKS CLOSE HARROW,', '+4407404640953', NULL, 'HA2 8NP', NULL, '2023-08-28 04:21:37', '2023-08-28 04:21:37', '0', '0'),
(175, 'STACEY', 'COSGROVE', '', '20 THORN STREET BOLTON', '+9207398322365', NULL, 'BL1 8LA', NULL, '2023-08-28 04:23:25', '2023-08-28 04:23:25', '0', '0'),
(176, 'STACEY', 'COSGROVE', '', '20 THORN STREET BOLTON', '+9207398322365', NULL, 'BL1 8LA', NULL, '2023-08-28 04:48:35', '2023-08-28 04:48:35', '0', '0'),
(177, 'Mohamed', 'Darwish', '', '15 Northumberland street \r\nHuddersfield', '+44+447300381355', NULL, 'HD1 1RL', NULL, '2023-08-28 16:40:56', '2023-08-28 16:40:56', '0', '0'),
(178, 'Hammad', 'Shafique', 'rhtigerranahamad@gmail.com', 'Agne Vindzigelskiene\r\n12 Sherlock House \r\nLynley Close \r\nME15 9GB \r\n07929314872\r\n1X super king siz', '+923056226707', NULL, 'ME15 9GB', NULL, '2023-08-28 17:32:28', '2023-08-28 17:32:28', '0', '0'),
(179, 'Chole white', '', '', '18 Levime avenue, Fy44pd', '+447955286619', NULL, 'Fy44pd', NULL, '2023-08-28 18:10:17', '2023-08-28 18:10:17', '0', '0'),
(180, 'Sian Mitchell', '', '', '67 Stratford road ch15ny', '+4407915842477', NULL, 'ch15ny', NULL, '2023-08-28 18:16:28', '2023-08-28 18:16:28', '0', '0'),
(181, 'Chole white', '', '', '18 Levine Avenue, FY44PPD', '+17955286619', NULL, 'FY44PD', NULL, '2023-08-28 18:16:54', '2023-08-28 18:16:54', '0', '0'),
(182, 'Jessica MacEvan', '', '', '1b New Road,Ramsey', '+4407555505238', NULL, 'PE26 1ED', NULL, '2023-08-28 18:57:37', '2023-08-28 18:57:37', '0', '0'),
(183, 'Linda', '', '', '51 borver grove hartciffe bristol BS13 9LX', '+4407407190685', NULL, 'BS13 9LX', NULL, '2023-08-28 19:35:30', '2023-08-28 19:35:30', '0', '0'),
(184, 'KAPINGA', 'LAJA', '', '11 YORK ROAD', '+9207476972245', NULL, 'B23 6TE', NULL, '2023-08-28 19:39:30', '2023-08-28 19:39:30', '0', '0'),
(185, 'chloe', 'ward', '', '29 KINNIARD ROAD', '+9207418053056', NULL, 'S5 0NP', NULL, '2023-08-28 20:46:26', '2023-08-28 20:46:26', '0', '0'),
(186, 'PAT', 'FOSTER', '', '39 HOLYSTENE CLOSE BLYTH', '+9207889228235', NULL, 'NE24 4QG', NULL, '2023-08-28 20:49:24', '2023-08-28 20:49:24', '0', '0'),
(187, 'MARAGRET', 'GARFORTH', '', '73 nelson way chadderton', '+9207725312934', NULL, 'OL9 8NG', NULL, '2023-08-28 20:52:37', '2023-08-28 20:52:37', '0', '0'),
(188, 'Jane', '', 'malingasid@gmail.com', '0010 demon fort house 100\r\nOxford street Leicester flat', '+4407706396782', NULL, 'Le15xq', NULL, '2023-08-28 21:11:11', '2023-08-28 21:11:11', '0', '0'),
(189, 'Adeel', 'Muhammad', '', 'stately Road, Sheffield.', '+447438938429', NULL, 'S8 0ZP', NULL, '2023-08-28 21:28:03', '2023-08-28 21:28:03', '0', '0'),
(190, 'Adeel', 'Muhammad', '', 'Stavely Road, Sheffield.', '+447438938429', NULL, 'S8 0ZP', NULL, '2023-08-28 21:42:43', '2023-08-28 21:42:43', '0', '0'),
(191, 'Julie Norburn', '', '', 'Number 1 Patchway Drive Fareham', '+44+447741052651', NULL, 'PO143BG', NULL, '2023-08-28 21:54:48', '2023-08-28 21:54:48', '0', '0'),
(192, 'Diana', '', '', '120 saint andrews road', '+44+447795533089', NULL, 'Nn2 6hn', NULL, '2023-08-28 23:27:38', '2023-08-28 23:27:38', '0', '0'),
(193, 'Renata', 'Mandics', '', '41 Whiteways grove', '+4407999359125', NULL, 'S48FL', NULL, '2023-08-28 23:34:53', '2023-08-28 23:34:53', '0', '0'),
(194, 'Jennifer', 'Ukaegbu 07459291030 07459506235', '', 'BB23DH\r\n1 brooks road Blackburn', '+4407459291030', NULL, 'BB23DH', NULL, '2023-08-28 23:58:49', '2023-08-28 23:58:49', '0', '0'),
(195, 'Elizabeth', 'Murphy', '', '30 brown street carluke', '+447852580132', NULL, 'Ml85dt', NULL, '2023-08-29 00:23:07', '2023-08-29 00:23:07', '0', '0'),
(196, 'Adeniyi shukrah', '', '', 'M43 7RW\r\n15, St Georges Road Droylsden', '+4407586818112', NULL, 'M43 7RW', NULL, '2023-08-29 01:24:23', '2023-08-29 01:24:23', '0', '0'),
(197, 'Luke Payne', '', '', '92 Rhododendron Ave, Meopham, Gravesend', '+447577368244', NULL, 'DA13 0TT', NULL, '2023-08-29 01:28:51', '2023-08-29 01:28:51', '0', '0'),
(198, 'Mason Cunningham', '', '', '2 firtree terrace browning road', '+447950938132', NULL, 'Sk56JT', NULL, '2023-08-29 01:33:56', '2023-08-29 01:33:56', '0', '0'),
(199, 'Linda Mccoole', '', '', '191/2 Restalrig road', '+44+441312834780', NULL, 'EH7 6HW', NULL, '2023-08-29 01:35:19', '2023-08-29 01:35:19', '0', '0'),
(200, 'Ahmed Almanaama', '', '', '29, station road', '+4407756537375', NULL, 'PE13 5QA', NULL, '2023-08-29 01:38:10', '2023-08-29 01:38:10', '0', '0'),
(201, 'Bryan', '', '', 'Flat 2, 90 park grove princes avenue', '+4407903790839', NULL, 'HU5 2US', NULL, '2023-08-29 01:49:25', '2023-08-29 01:49:25', '0', '0'),
(202, 'Costin', 'Coman', '', '102 Lockwood Road', '+4407789291142', NULL, 'B311qd', NULL, '2023-08-29 02:15:47', '2023-08-29 02:15:47', '0', '0'),
(203, 'Soner alici', '', '', '132 southchurch av southend on sea', '+447980070951', NULL, 'Ss12rp', NULL, '2023-08-29 02:32:45', '2023-08-29 02:32:45', '0', '0'),
(204, 'Kelly', 'Mapp', '', '18 Howe crescent', '+4407956553234', NULL, 'wv12 5rw', NULL, '2023-08-29 02:42:48', '2023-08-29 02:42:48', '0', '0'),
(205, 'DANIEL', 'LEWIS', '', '201 STATION ROAD KINGS HEATH', '+9207413864839', NULL, 'B14 7TB', NULL, '2023-08-29 02:53:38', '2023-08-29 02:53:38', '0', '0'),
(206, 'Jihed', '', '', '56 verdon street S3 0QR Sheffield  south yorksire', '+4479492686566', NULL, 'S3 9QR', NULL, '2023-08-29 04:14:50', '2023-08-29 04:14:50', '0', '0'),
(207, 'Ameila franica-shaw', '', '', '3 Linnet Grove Birchwood Warrington', '+44+447973921997', NULL, 'Wa3 6Nt', NULL, '2023-08-29 10:32:21', '2023-08-29 10:32:21', '0', '0'),
(208, 'Hausar azizi', '', '', '108', '+447776666060', NULL, 'N17 8jx', NULL, '2023-08-29 12:52:16', '2023-08-29 12:52:16', '0', '0'),
(209, 'Hausar azizi', '', '', '189 Somerset gardens Crichton road London', '+447776666060', NULL, 'N17 8jx', NULL, '2023-08-29 13:00:29', '2023-08-29 13:00:29', '0', '0'),
(210, 'Ziba zarifi', '', '', 'Hotoft road Leicester, LEF 1EF', '+447849076768', NULL, 'LEF 1EF', NULL, '2023-08-29 16:11:21', '2023-08-29 16:11:21', '0', '0'),
(211, 'Utkarsh', 'Goswami', '', '26 Grittelton Avenue HA9 6NT', '+44+447586573884', NULL, 'HA9 6NT', NULL, '2023-08-29 16:17:35', '2023-08-29 16:17:35', '0', '0'),
(212, 'Rana', '', '', 'Fsd', '+9203020000214', NULL, '380000', NULL, '2023-08-29 16:36:26', '2023-08-29 16:36:26', '0', '0'),
(213, 'Lindsey Payne Bowers', '', '', '35 clay drive melling Liverpool ,L31 1FA', '+447736819255', NULL, 'L31 1FA', NULL, '2023-08-29 20:02:02', '2023-08-29 20:02:02', '0', '0'),
(214, 'Edore', '', '', '43 Woodford way, Witney', '+4407455685684', NULL, 'OX28 6GU', NULL, '2023-08-29 20:03:20', '2023-08-29 20:03:20', '0', '0'),
(215, 'Raymond Chilaka', '', '', '40 Nyewood lane bognor Regis, \r\nPO21 2QN', '+447435382371', NULL, 'PO21 2QN', NULL, '2023-08-29 20:10:25', '2023-08-29 20:10:25', '0', '0'),
(216, 'Raymond Chilaka', '', '', '40 Nyewood lane bognor Regis, \r\nPO21 2QN', '+447435382371', NULL, 'PO21 2QN', NULL, '2023-08-29 20:19:20', '2023-08-29 20:19:20', '0', '0'),
(217, 'Raymond Chilaka', '', '', '40 Nyewood lane bognor Regis, \r\nPO21 2QN', '+447435382371', NULL, 'PO21 2QN', NULL, '2023-08-29 20:22:50', '2023-08-29 20:22:50', '0', '0'),
(218, 'Jihed', '', '', '56 verdon street S3 9QR sheffield south yorksire', '+447492686566', NULL, 'S3 9QR', NULL, '2023-08-29 20:26:13', '2023-08-29 20:26:13', '0', '0'),
(219, 'TRI Trevor', 'TRI Trevor', '', '10 glebe house', '+44+4407466873021', NULL, 'M300ZH', NULL, '2023-08-29 20:39:16', '2023-08-29 20:39:16', '0', '0'),
(220, 'Hannah', '', '', 'Wellbury farm Newton aycliffe', '+4407592039056', NULL, 'Dl5 6ja', NULL, '2023-08-29 21:14:51', '2023-08-29 21:14:51', '0', '0'),
(221, 'Ahmad', 'Nissar', '', '20 barkston drive, pe1 4la', '+4407866566584', NULL, 'pe1 4la', NULL, '2023-08-29 21:18:14', '2023-08-29 21:18:14', '0', '0'),
(222, 'Damon', 'Lloyd', '', '9 westry close, Pe147bu', '+4407869601878', NULL, 'Pe147bu', NULL, '2023-08-29 21:24:49', '2023-08-29 21:24:49', '0', '0'),
(223, 'Maria', 'Głowicka', '', '124 Pennelton Place Boness', '+4407715851014', NULL, 'Eh51 0PE', NULL, '2023-08-29 23:10:40', '2023-08-29 23:10:40', '0', '0'),
(224, 'Ebony', '', '', '135 Borron road', '+4407732770699', NULL, 'Wa120ng', NULL, '2023-08-29 23:16:21', '2023-08-29 23:16:21', '0', '0'),
(225, 'Hayley', '', '', '5 Naildown close hythe Kent', '+4407377043410', NULL, 'CT21 5TA', NULL, '2023-08-29 23:22:16', '2023-08-29 23:22:16', '0', '0'),
(226, 'Suleimane', '', '', '14 hardwood court', '+4407564431460', NULL, 'M6 6QP', NULL, '2023-08-29 23:39:14', '2023-08-29 23:39:14', '0', '0'),
(227, 'Natale', '', '', '30 Grange road woodlands', '+4407368539580', NULL, 'Dn6 7py', NULL, '2023-08-30 00:05:53', '2023-08-30 00:05:53', '0', '0'),
(228, 'Emmanuel', '', '', '19 Bradford close , Taunton Somerset', '+44+447360144099', NULL, 'TA14YH', NULL, '2023-08-30 00:25:30', '2023-08-30 00:25:30', '0', '0'),
(229, 'Shpresim', 'Domi', '', 'Kingston ave 26', '+447944308898', NULL, 'Ol98ll', NULL, '2023-08-30 00:28:26', '2023-08-30 00:28:26', '0', '0'),
(230, 'Margaret white', '', '', '7 topham avenue Harley goodacre Worcester', '+44+447901985339', NULL, 'Wr4 0pg', NULL, '2023-08-30 00:55:13', '2023-08-30 00:55:13', '0', '0'),
(231, 'jack Daniel', '', '', '97 Cavendish road', '+44+447849762635', NULL, 'S611bw', NULL, '2023-08-30 01:00:59', '2023-08-30 01:00:59', '0', '0'),
(232, 'Naiza', 'Yasen', '', '35 prospect street\r\nSpringwood\r\nHd12nx', '+4407754877136', NULL, 'hd12nx', NULL, '2023-08-30 01:03:28', '2023-08-30 01:03:28', '0', '0'),
(233, 'Oleh', 'renata', '', '70 HASSAM Avenue\r\nNew Castle\r\nST5 9 ET', '+44+447915310489', NULL, 'ST59ET', NULL, '2023-08-30 01:06:29', '2023-08-30 01:06:29', '0', '0'),
(234, 'Soni kc', '', '', '201 Ribbelton lane', '+44+447737341592', NULL, 'Pr1 5dy', NULL, '2023-08-30 01:10:27', '2023-08-30 01:10:27', '0', '0'),
(235, 'Danielle Longson', '', '', '6 Oak Street,', '+447702008646', NULL, 'FY7 6TN', NULL, '2023-08-30 01:21:37', '2023-08-30 01:21:37', '0', '0'),
(236, 'Shireen', '', '', 'Flat 4a revington road ST halens', '+447481167995', NULL, 'Wa106tb', NULL, '2023-08-30 01:27:19', '2023-08-30 01:27:19', '0', '0'),
(237, 'Laura', 'Laura', '', '140 strathty road letham PH1 2NB', '+44+447958324731', NULL, 'PH1 2NB', NULL, '2023-08-30 01:27:59', '2023-08-30 01:27:59', '0', '0'),
(238, 'Wiktoria Chromy', '', '', '86 Victoria park road Birmingham', '+4407940570047', NULL, 'B66 3QL', NULL, '2023-08-30 01:35:46', '2023-08-30 01:35:46', '0', '0'),
(239, 'MRS SARAH JANINE SMITHERS', '', '', '70 RAVENSKNOWLE ROAD MOLDGREEN HUDDERSFILED', '+9207857120061', NULL, 'HD5 8BL', NULL, '2023-08-30 01:44:04', '2023-08-30 01:44:04', '0', '0'),
(240, 'ROHAN', 'LAL', '', '39 PAGES LANE', '+9207359428367', NULL, 'B43 6LP', NULL, '2023-08-30 01:47:56', '2023-08-30 01:47:56', '0', '0'),
(241, 'MIRIAM', '', '', '46 OXFORD STREET LISBON\r\nGROUND FLOOR FLAT', '+9207903551633', NULL, 'WV14 7BU', NULL, '2023-08-30 01:51:32', '2023-08-30 01:51:32', '0', '0'),
(242, 'JIMMY', '', '', '18 CHERITON DRIVE BOLTON', '+9207586166539', NULL, 'BL26HJ', NULL, '2023-08-30 01:54:33', '2023-08-30 01:54:33', '0', '0'),
(243, 'R MORGAN', '', '', 'THE BRUSHES REDFORD ROAD WALESBY\r\nNOTTINGHAMSHIRE', '+9207789208427', NULL, 'NG22 9PE', NULL, '2023-08-30 01:56:24', '2023-08-30 01:56:24', '0', '0'),
(244, 'LOU', 'BREWSTER', '', '21 WESTERFIELD WAY NOTTINGHAM', '+9207811353015', NULL, 'NG11 7ET', NULL, '2023-08-30 01:58:28', '2023-08-30 01:58:28', '0', '0'),
(245, 'Samuel Covaciu', '', '', '22 Manchester street Newport Np198dj', '+44+447748927790', NULL, 'Np198dj', NULL, '2023-08-30 02:16:09', '2023-08-30 02:16:09', '0', '0'),
(246, 'Tina', '', '', '7 Wheat close', '+4407583571930', NULL, 'M13 0ed', NULL, '2023-08-30 02:35:37', '2023-08-30 02:35:37', '0', '0'),
(247, 'Mohamad', '', '', 'DN32 9DR\r\n206 Freeman St Grismsby', '+4407309037713', NULL, 'DN32 9DR', NULL, '2023-08-30 03:17:59', '2023-08-30 03:17:59', '0', '0'),
(248, 'Anayou', 'Nsude', '', '52 Ilsley Road Basingstoke, RG24 9RU', '+44+447956078088', NULL, 'RG24 9RU', NULL, '2023-08-30 03:18:59', '2023-08-30 03:18:59', '0', '0'),
(249, 'Liam', 'Kelly', '', '22 Pond close Hockwellring Luton Bedfordshire', '+44+447517804634', NULL, 'LU4 9PB', NULL, '2023-08-30 13:06:27', '2023-08-30 13:06:27', '0', '0'),
(250, 'Ashley', '', '', '81 tenterden road Tottenham', '+4407704422670', NULL, 'N17 8BW', NULL, '2023-08-30 15:25:18', '2023-08-30 15:25:18', '0', '0'),
(251, 'Kardesha', 'Nicholls', '', '91 Cambalt Road', '+44+447935256677', NULL, 'SW15 6EL', NULL, '2023-08-30 15:46:04', '2023-08-30 15:46:04', '0', '0'),
(252, 'Rafiat', '', '', 'Aminu olajumoki rawpheehart stanley road', '+44+4407769384822', NULL, 'OL97HT', NULL, '2023-08-30 16:44:19', '2023-08-30 16:44:19', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_details`
--

CREATE TABLE `data_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_details`
--

INSERT INTO `data_details` (`id`, `role_id`, `links`, `note`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '2', 'https://www.ukbedsdirect.com/&nbsp;', 'website&nbsp;', '2023-07-27 18:02:36', '2023-07-27 18:02:36', '3'),
(2, '4', 'http://127.0.0.1:8000/order_index', 'Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-07-31 13:38:58', '2023-07-31 13:38:58', '13'),
(3, '3', 'http://127.0.0.1:8000/order_index', 'What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2023-07-31 13:41:42', '2023-07-31 13:41:42', '23'),
(4, '4', 'https://www.daraz.pk/?spm=a2a0e.home.venture.1.488a7fe44ZKFHO&amp;scm=1003.4.icms-zebra-100010652-2955374.OTHER_5487142431_2598749#', 'jst for test&nbsp;', '2023-08-20 07:41:03', '2023-08-20 07:41:03', '32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_04_04_090242_create_products_table', 3),
(8, '2023_04_06_070017_create_coupens_table', 4),
(9, '2023_04_05_090641_create_permission_tables', 5),
(11, '2023_04_06_092855_create_coupen_user_table', 6),
(12, '2023_04_07_052555_create_orders_table', 7),
(13, '2023_04_07_064831_add_country_field_in_products_table', 8),
(14, '2023_04_07_101948_add_post_code_field_in_customers_table', 9),
(15, '2023_04_04_085606_create_product_variations_table', 10),
(16, '2023_04_14_092947_add_product_field_in_orders_table', 11),
(17, '2023_04_14_093548_create_order_variation_table', 11),
(18, '2023_05_30_050836_create_orderdetails_table', 12),
(19, '2023_04_03_095441_create_customers_table', 13),
(20, '2023_07_24_101104_create_payments_invoices_table', 14),
(21, '2023_07_20_055424_create_data_details_table', 15),
(22, '2023_07_20_094510_update_order_table', 16),
(23, '2023_07_20_093028_add_new_fields_orders', 17),
(24, '2023_08_02_105259_add_new_fields_payments_invoices', 18),
(25, '2023_08_03_095612_add_new_fields_data_details', 19),
(26, '2023_08_07_104426_add_new_fields_orderdetails', 20),
(27, '2023_08_08_075525_add_new_fields_orderdetails', 21),
(28, '2023_08_09_092759_add_new_fields_orderdetails', 22),
(29, '2023_08_17_105446_add_new_fields_users', 23),
(30, '2023_08_17_110420_add_new_fields_customers', 24),
(31, '2023_08_17_111137_add_new_fields_orders', 25),
(32, '2023_08_17_111425_add_new_fields_products', 26),
(33, '2023_08_29_113913_add_new_fields_users', 27);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 38),
(1, 'App\\Models\\User', 43),
(1, 'App\\Models\\User', 104),
(1, 'App\\Models\\User', 108),
(2, 'App\\Models\\User', 38),
(2, 'App\\Models\\User', 43),
(2, 'App\\Models\\User', 104),
(2, 'App\\Models\\User', 108),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 43),
(3, 'App\\Models\\User', 104),
(3, 'App\\Models\\User', 108),
(4, 'App\\Models\\User', 38),
(4, 'App\\Models\\User', 43),
(4, 'App\\Models\\User', 104),
(4, 'App\\Models\\User', 108),
(5, 'App\\Models\\User', 38),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 104),
(5, 'App\\Models\\User', 108),
(6, 'App\\Models\\User', 38),
(6, 'App\\Models\\User', 43),
(6, 'App\\Models\\User', 104),
(6, 'App\\Models\\User', 108),
(7, 'App\\Models\\User', 38),
(7, 'App\\Models\\User', 43),
(7, 'App\\Models\\User', 104),
(7, 'App\\Models\\User', 108),
(8, 'App\\Models\\User', 38),
(8, 'App\\Models\\User', 43),
(8, 'App\\Models\\User', 104),
(8, 'App\\Models\\User', 108),
(9, 'App\\Models\\User', 38),
(9, 'App\\Models\\User', 43),
(9, 'App\\Models\\User', 104),
(9, 'App\\Models\\User', 108),
(10, 'App\\Models\\User', 38),
(10, 'App\\Models\\User', 43),
(10, 'App\\Models\\User', 104),
(10, 'App\\Models\\User', 108),
(11, 'App\\Models\\User', 38),
(11, 'App\\Models\\User', 43),
(11, 'App\\Models\\User', 104),
(11, 'App\\Models\\User', 108),
(12, 'App\\Models\\User', 38),
(12, 'App\\Models\\User', 43),
(12, 'App\\Models\\User', 104),
(12, 'App\\Models\\User', 108),
(13, 'App\\Models\\User', 38),
(13, 'App\\Models\\User', 43),
(13, 'App\\Models\\User', 104),
(13, 'App\\Models\\User', 108),
(14, 'App\\Models\\User', 38),
(14, 'App\\Models\\User', 43),
(14, 'App\\Models\\User', 104),
(14, 'App\\Models\\User', 108),
(15, 'App\\Models\\User', 38),
(15, 'App\\Models\\User', 43),
(15, 'App\\Models\\User', 104),
(15, 'App\\Models\\User', 108),
(16, 'App\\Models\\User', 38),
(16, 'App\\Models\\User', 43),
(16, 'App\\Models\\User', 104),
(16, 'App\\Models\\User', 108),
(17, 'App\\Models\\User', 26),
(17, 'App\\Models\\User', 38),
(17, 'App\\Models\\User', 40),
(17, 'App\\Models\\User', 41),
(17, 'App\\Models\\User', 42),
(17, 'App\\Models\\User', 43),
(17, 'App\\Models\\User', 44),
(17, 'App\\Models\\User', 45),
(17, 'App\\Models\\User', 46),
(17, 'App\\Models\\User', 47),
(17, 'App\\Models\\User', 48),
(17, 'App\\Models\\User', 49),
(17, 'App\\Models\\User', 50),
(17, 'App\\Models\\User', 51),
(17, 'App\\Models\\User', 52),
(17, 'App\\Models\\User', 53),
(17, 'App\\Models\\User', 54),
(17, 'App\\Models\\User', 55),
(17, 'App\\Models\\User', 56),
(17, 'App\\Models\\User', 57),
(17, 'App\\Models\\User', 58),
(17, 'App\\Models\\User', 59),
(17, 'App\\Models\\User', 60),
(17, 'App\\Models\\User', 61),
(17, 'App\\Models\\User', 62),
(17, 'App\\Models\\User', 63),
(17, 'App\\Models\\User', 64),
(17, 'App\\Models\\User', 65),
(17, 'App\\Models\\User', 67),
(17, 'App\\Models\\User', 68),
(17, 'App\\Models\\User', 69),
(17, 'App\\Models\\User', 70),
(17, 'App\\Models\\User', 71),
(17, 'App\\Models\\User', 72),
(17, 'App\\Models\\User', 73),
(17, 'App\\Models\\User', 74),
(17, 'App\\Models\\User', 75),
(17, 'App\\Models\\User', 76),
(17, 'App\\Models\\User', 77),
(17, 'App\\Models\\User', 78),
(17, 'App\\Models\\User', 79),
(17, 'App\\Models\\User', 80),
(17, 'App\\Models\\User', 81),
(17, 'App\\Models\\User', 82),
(17, 'App\\Models\\User', 83),
(17, 'App\\Models\\User', 84),
(17, 'App\\Models\\User', 85),
(17, 'App\\Models\\User', 86),
(17, 'App\\Models\\User', 87),
(17, 'App\\Models\\User', 88),
(17, 'App\\Models\\User', 89),
(17, 'App\\Models\\User', 90),
(17, 'App\\Models\\User', 91),
(17, 'App\\Models\\User', 92),
(17, 'App\\Models\\User', 93),
(17, 'App\\Models\\User', 94),
(17, 'App\\Models\\User', 95),
(17, 'App\\Models\\User', 96),
(17, 'App\\Models\\User', 97),
(17, 'App\\Models\\User', 98),
(17, 'App\\Models\\User', 99),
(17, 'App\\Models\\User', 100),
(17, 'App\\Models\\User', 101),
(17, 'App\\Models\\User', 103),
(17, 'App\\Models\\User', 104),
(17, 'App\\Models\\User', 105),
(17, 'App\\Models\\User', 106),
(17, 'App\\Models\\User', 107),
(17, 'App\\Models\\User', 108),
(18, 'App\\Models\\User', 26),
(18, 'App\\Models\\User', 38),
(18, 'App\\Models\\User', 40),
(18, 'App\\Models\\User', 41),
(18, 'App\\Models\\User', 42),
(18, 'App\\Models\\User', 43),
(18, 'App\\Models\\User', 44),
(18, 'App\\Models\\User', 45),
(18, 'App\\Models\\User', 46),
(18, 'App\\Models\\User', 47),
(18, 'App\\Models\\User', 48),
(18, 'App\\Models\\User', 49),
(18, 'App\\Models\\User', 50),
(18, 'App\\Models\\User', 51),
(18, 'App\\Models\\User', 52),
(18, 'App\\Models\\User', 53),
(18, 'App\\Models\\User', 54),
(18, 'App\\Models\\User', 55),
(18, 'App\\Models\\User', 56),
(18, 'App\\Models\\User', 57),
(18, 'App\\Models\\User', 58),
(18, 'App\\Models\\User', 59),
(18, 'App\\Models\\User', 60),
(18, 'App\\Models\\User', 61),
(18, 'App\\Models\\User', 62),
(18, 'App\\Models\\User', 63),
(18, 'App\\Models\\User', 64),
(18, 'App\\Models\\User', 65),
(18, 'App\\Models\\User', 67),
(18, 'App\\Models\\User', 68),
(18, 'App\\Models\\User', 69),
(18, 'App\\Models\\User', 70),
(18, 'App\\Models\\User', 71),
(18, 'App\\Models\\User', 72),
(18, 'App\\Models\\User', 73),
(18, 'App\\Models\\User', 74),
(18, 'App\\Models\\User', 75),
(18, 'App\\Models\\User', 76),
(18, 'App\\Models\\User', 77),
(18, 'App\\Models\\User', 78),
(18, 'App\\Models\\User', 79),
(18, 'App\\Models\\User', 80),
(18, 'App\\Models\\User', 81),
(18, 'App\\Models\\User', 82),
(18, 'App\\Models\\User', 83),
(18, 'App\\Models\\User', 84),
(18, 'App\\Models\\User', 85),
(18, 'App\\Models\\User', 86),
(18, 'App\\Models\\User', 87),
(18, 'App\\Models\\User', 88),
(18, 'App\\Models\\User', 89),
(18, 'App\\Models\\User', 90),
(18, 'App\\Models\\User', 91),
(18, 'App\\Models\\User', 92),
(18, 'App\\Models\\User', 93),
(18, 'App\\Models\\User', 94),
(18, 'App\\Models\\User', 95),
(18, 'App\\Models\\User', 96),
(18, 'App\\Models\\User', 97),
(18, 'App\\Models\\User', 98),
(18, 'App\\Models\\User', 99),
(18, 'App\\Models\\User', 100),
(18, 'App\\Models\\User', 101),
(18, 'App\\Models\\User', 103),
(18, 'App\\Models\\User', 104),
(18, 'App\\Models\\User', 105),
(18, 'App\\Models\\User', 106),
(18, 'App\\Models\\User', 107),
(18, 'App\\Models\\User', 108),
(19, 'App\\Models\\User', 26),
(19, 'App\\Models\\User', 38),
(19, 'App\\Models\\User', 40),
(19, 'App\\Models\\User', 41),
(19, 'App\\Models\\User', 42),
(19, 'App\\Models\\User', 43),
(19, 'App\\Models\\User', 44),
(19, 'App\\Models\\User', 45),
(19, 'App\\Models\\User', 46),
(19, 'App\\Models\\User', 47),
(19, 'App\\Models\\User', 48),
(19, 'App\\Models\\User', 49),
(19, 'App\\Models\\User', 50),
(19, 'App\\Models\\User', 51),
(19, 'App\\Models\\User', 52),
(19, 'App\\Models\\User', 53),
(19, 'App\\Models\\User', 54),
(19, 'App\\Models\\User', 55),
(19, 'App\\Models\\User', 56),
(19, 'App\\Models\\User', 57),
(19, 'App\\Models\\User', 58),
(19, 'App\\Models\\User', 59),
(19, 'App\\Models\\User', 60),
(19, 'App\\Models\\User', 61),
(19, 'App\\Models\\User', 62),
(19, 'App\\Models\\User', 63),
(19, 'App\\Models\\User', 64),
(19, 'App\\Models\\User', 65),
(19, 'App\\Models\\User', 67),
(19, 'App\\Models\\User', 68),
(19, 'App\\Models\\User', 69),
(19, 'App\\Models\\User', 70),
(19, 'App\\Models\\User', 71),
(19, 'App\\Models\\User', 72),
(19, 'App\\Models\\User', 73),
(19, 'App\\Models\\User', 74),
(19, 'App\\Models\\User', 75),
(19, 'App\\Models\\User', 76),
(19, 'App\\Models\\User', 77),
(19, 'App\\Models\\User', 78),
(19, 'App\\Models\\User', 79),
(19, 'App\\Models\\User', 80),
(19, 'App\\Models\\User', 81),
(19, 'App\\Models\\User', 82),
(19, 'App\\Models\\User', 83),
(19, 'App\\Models\\User', 84),
(19, 'App\\Models\\User', 85),
(19, 'App\\Models\\User', 86),
(19, 'App\\Models\\User', 87),
(19, 'App\\Models\\User', 88),
(19, 'App\\Models\\User', 89),
(19, 'App\\Models\\User', 90),
(19, 'App\\Models\\User', 91),
(19, 'App\\Models\\User', 92),
(19, 'App\\Models\\User', 93),
(19, 'App\\Models\\User', 94),
(19, 'App\\Models\\User', 95),
(19, 'App\\Models\\User', 96),
(19, 'App\\Models\\User', 97),
(19, 'App\\Models\\User', 98),
(19, 'App\\Models\\User', 99),
(19, 'App\\Models\\User', 100),
(19, 'App\\Models\\User', 101),
(19, 'App\\Models\\User', 103),
(19, 'App\\Models\\User', 104),
(19, 'App\\Models\\User', 105),
(19, 'App\\Models\\User', 106),
(19, 'App\\Models\\User', 107),
(19, 'App\\Models\\User', 108),
(20, 'App\\Models\\User', 26),
(20, 'App\\Models\\User', 38),
(20, 'App\\Models\\User', 40),
(20, 'App\\Models\\User', 41),
(20, 'App\\Models\\User', 42),
(20, 'App\\Models\\User', 43),
(20, 'App\\Models\\User', 44),
(20, 'App\\Models\\User', 45),
(20, 'App\\Models\\User', 46),
(20, 'App\\Models\\User', 47),
(20, 'App\\Models\\User', 48),
(20, 'App\\Models\\User', 49),
(20, 'App\\Models\\User', 50),
(20, 'App\\Models\\User', 51),
(20, 'App\\Models\\User', 52),
(20, 'App\\Models\\User', 53),
(20, 'App\\Models\\User', 54),
(20, 'App\\Models\\User', 55),
(20, 'App\\Models\\User', 56),
(20, 'App\\Models\\User', 57),
(20, 'App\\Models\\User', 58),
(20, 'App\\Models\\User', 59),
(20, 'App\\Models\\User', 60),
(20, 'App\\Models\\User', 61),
(20, 'App\\Models\\User', 62),
(20, 'App\\Models\\User', 63),
(20, 'App\\Models\\User', 64),
(20, 'App\\Models\\User', 65),
(20, 'App\\Models\\User', 67),
(20, 'App\\Models\\User', 68),
(20, 'App\\Models\\User', 69),
(20, 'App\\Models\\User', 70),
(20, 'App\\Models\\User', 71),
(20, 'App\\Models\\User', 72),
(20, 'App\\Models\\User', 73),
(20, 'App\\Models\\User', 74),
(20, 'App\\Models\\User', 75),
(20, 'App\\Models\\User', 76),
(20, 'App\\Models\\User', 77),
(20, 'App\\Models\\User', 78),
(20, 'App\\Models\\User', 79),
(20, 'App\\Models\\User', 80),
(20, 'App\\Models\\User', 81),
(20, 'App\\Models\\User', 82),
(20, 'App\\Models\\User', 83),
(20, 'App\\Models\\User', 84),
(20, 'App\\Models\\User', 85),
(20, 'App\\Models\\User', 86),
(20, 'App\\Models\\User', 87),
(20, 'App\\Models\\User', 88),
(20, 'App\\Models\\User', 89),
(20, 'App\\Models\\User', 90),
(20, 'App\\Models\\User', 91),
(20, 'App\\Models\\User', 92),
(20, 'App\\Models\\User', 93),
(20, 'App\\Models\\User', 94),
(20, 'App\\Models\\User', 95),
(20, 'App\\Models\\User', 96),
(20, 'App\\Models\\User', 97),
(20, 'App\\Models\\User', 98),
(20, 'App\\Models\\User', 99),
(20, 'App\\Models\\User', 100),
(20, 'App\\Models\\User', 101),
(20, 'App\\Models\\User', 103),
(20, 'App\\Models\\User', 104),
(20, 'App\\Models\\User', 105),
(20, 'App\\Models\\User', 106),
(20, 'App\\Models\\User', 107),
(20, 'App\\Models\\User', 108),
(21, 'App\\Models\\User', 38),
(21, 'App\\Models\\User', 43),
(21, 'App\\Models\\User', 104),
(21, 'App\\Models\\User', 108),
(22, 'App\\Models\\User', 38),
(22, 'App\\Models\\User', 43),
(22, 'App\\Models\\User', 104),
(22, 'App\\Models\\User', 108),
(23, 'App\\Models\\User', 38),
(23, 'App\\Models\\User', 43),
(23, 'App\\Models\\User', 104),
(23, 'App\\Models\\User', 108),
(24, 'App\\Models\\User', 38),
(24, 'App\\Models\\User', 43),
(24, 'App\\Models\\User', 104),
(24, 'App\\Models\\User', 108),
(25, 'App\\Models\\User', 38),
(25, 'App\\Models\\User', 43),
(25, 'App\\Models\\User', 104),
(25, 'App\\Models\\User', 108),
(26, 'App\\Models\\User', 38),
(26, 'App\\Models\\User', 43),
(26, 'App\\Models\\User', 104),
(26, 'App\\Models\\User', 108),
(27, 'App\\Models\\User', 38),
(27, 'App\\Models\\User', 43),
(27, 'App\\Models\\User', 104),
(27, 'App\\Models\\User', 108),
(28, 'App\\Models\\User', 38),
(28, 'App\\Models\\User', 43),
(28, 'App\\Models\\User', 104),
(28, 'App\\Models\\User', 108),
(29, 'App\\Models\\User', 38),
(29, 'App\\Models\\User', 43),
(29, 'App\\Models\\User', 104),
(29, 'App\\Models\\User', 108);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 38),
(2, 'App\\Models\\User', 43),
(2, 'App\\Models\\User', 104),
(2, 'App\\Models\\User', 108),
(4, 'App\\Models\\User', 26),
(4, 'App\\Models\\User', 40),
(4, 'App\\Models\\User', 41),
(4, 'App\\Models\\User', 42),
(4, 'App\\Models\\User', 44),
(4, 'App\\Models\\User', 45),
(4, 'App\\Models\\User', 46),
(4, 'App\\Models\\User', 47),
(4, 'App\\Models\\User', 48),
(4, 'App\\Models\\User', 49),
(4, 'App\\Models\\User', 50),
(4, 'App\\Models\\User', 51),
(4, 'App\\Models\\User', 52),
(4, 'App\\Models\\User', 53),
(4, 'App\\Models\\User', 54),
(4, 'App\\Models\\User', 55),
(4, 'App\\Models\\User', 56),
(4, 'App\\Models\\User', 57),
(4, 'App\\Models\\User', 58),
(4, 'App\\Models\\User', 59),
(4, 'App\\Models\\User', 60),
(4, 'App\\Models\\User', 61),
(4, 'App\\Models\\User', 62),
(4, 'App\\Models\\User', 63),
(4, 'App\\Models\\User', 64),
(4, 'App\\Models\\User', 65),
(4, 'App\\Models\\User', 67),
(4, 'App\\Models\\User', 68),
(4, 'App\\Models\\User', 69),
(4, 'App\\Models\\User', 70),
(4, 'App\\Models\\User', 71),
(4, 'App\\Models\\User', 72),
(4, 'App\\Models\\User', 73),
(4, 'App\\Models\\User', 74),
(4, 'App\\Models\\User', 75),
(4, 'App\\Models\\User', 76),
(4, 'App\\Models\\User', 77),
(4, 'App\\Models\\User', 78),
(4, 'App\\Models\\User', 79),
(4, 'App\\Models\\User', 80),
(4, 'App\\Models\\User', 81),
(4, 'App\\Models\\User', 82),
(4, 'App\\Models\\User', 83),
(4, 'App\\Models\\User', 84),
(4, 'App\\Models\\User', 85),
(4, 'App\\Models\\User', 86),
(4, 'App\\Models\\User', 87),
(4, 'App\\Models\\User', 88),
(4, 'App\\Models\\User', 89),
(4, 'App\\Models\\User', 90),
(4, 'App\\Models\\User', 91),
(4, 'App\\Models\\User', 92),
(4, 'App\\Models\\User', 93),
(4, 'App\\Models\\User', 94),
(4, 'App\\Models\\User', 95),
(4, 'App\\Models\\User', 96),
(4, 'App\\Models\\User', 97),
(4, 'App\\Models\\User', 98),
(4, 'App\\Models\\User', 99),
(4, 'App\\Models\\User', 100),
(4, 'App\\Models\\User', 101),
(4, 'App\\Models\\User', 103),
(4, 'App\\Models\\User', 105),
(4, 'App\\Models\\User', 106),
(4, 'App\\Models\\User', 107);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `select_country` varchar(255) NOT NULL,
  `select_product` varchar(255) NOT NULL,
  `mattress_size` varchar(255) DEFAULT NULL,
  `select_mattress` varchar(255) DEFAULT NULL,
  `ottoman_design` varchar(255) DEFAULT NULL,
  `ottoman_color` varchar(255) DEFAULT NULL,
  `ottoman_fabric` varchar(255) DEFAULT NULL,
  `gaslift_size` varchar(255) DEFAULT NULL,
  `gaslift_design` varchar(255) DEFAULT NULL,
  `headboard_size` varchar(255) DEFAULT NULL,
  `headboard_design` varchar(255) DEFAULT NULL,
  `headboard_color` varchar(255) DEFAULT NULL,
  `headboard_fabric` varchar(255) DEFAULT NULL,
  `without_diamond_size` varchar(255) DEFAULT NULL,
  `without_diamond_color` varchar(255) DEFAULT NULL,
  `without_diamond_fabric` varchar(255) DEFAULT NULL,
  `without_diamond_storage` varchar(255) DEFAULT NULL,
  `without_diamond_base` varchar(255) DEFAULT NULL,
  `without_diamond_mattress` varchar(255) DEFAULT NULL,
  `with_diamond_size` varchar(255) DEFAULT NULL,
  `with_diamond_design` varchar(255) DEFAULT NULL,
  `with_diamond_color` varchar(255) DEFAULT NULL,
  `with_diamond_fabric` varchar(255) DEFAULT NULL,
  `with_diamond_button_diamond` varchar(255) DEFAULT NULL,
  `with_diamond_storage` varchar(255) DEFAULT NULL,
  `with_diamond_base` varchar(255) DEFAULT NULL,
  `with_diamond_mattress` varchar(255) DEFAULT NULL,
  `ottoman_divan_size` varchar(255) DEFAULT NULL,
  `ottoman_divan_headboad` varchar(255) DEFAULT NULL,
  `ottoman_divan_color` varchar(255) DEFAULT NULL,
  `ottoman_divan_fabric` varchar(255) DEFAULT NULL,
  `ottoman_divan_mattress` varchar(255) DEFAULT NULL,
  `divan_size` varchar(255) DEFAULT NULL,
  `divan_headboard` varchar(255) DEFAULT NULL,
  `divan_color` varchar(255) DEFAULT NULL,
  `divan_fabric` varchar(255) DEFAULT NULL,
  `divan_storage` varchar(255) DEFAULT NULL,
  `divan_mattress` varchar(255) DEFAULT NULL,
  `monaco_divan_size` varchar(255) DEFAULT NULL,
  `monaco_divan_headboard` varchar(255) DEFAULT NULL,
  `monaco_divan_color` varchar(255) DEFAULT NULL,
  `monaco_divan_fabric` varchar(255) DEFAULT NULL,
  `monaco_divan_storage` varchar(255) DEFAULT NULL,
  `monaco_divan_mattress` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `without_diamond_design` varchar(255) DEFAULT NULL,
  `Mattress` varchar(255) DEFAULT NULL,
  `Ottoman` varchar(255) DEFAULT NULL,
  `Bed` varchar(255) DEFAULT NULL,
  `Gaslift` varchar(255) DEFAULT NULL,
  `Headboard` varchar(255) DEFAULT NULL,
  `Design` varchar(255) DEFAULT NULL,
  `Without_diamond_button` varchar(255) DEFAULT NULL,
  `With_diamond_button` varchar(255) DEFAULT NULL,
  `Divan` varchar(255) DEFAULT NULL,
  `Ottoman_divan` varchar(255) DEFAULT NULL,
  `Divan_form` varchar(255) DEFAULT NULL,
  `Manaco_divan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `customer_id`, `user_id`, `order_id`, `select_country`, `select_product`, `mattress_size`, `select_mattress`, `ottoman_design`, `ottoman_color`, `ottoman_fabric`, `gaslift_size`, `gaslift_design`, `headboard_size`, `headboard_design`, `headboard_color`, `headboard_fabric`, `without_diamond_size`, `without_diamond_color`, `without_diamond_fabric`, `without_diamond_storage`, `without_diamond_base`, `without_diamond_mattress`, `with_diamond_size`, `with_diamond_design`, `with_diamond_color`, `with_diamond_fabric`, `with_diamond_button_diamond`, `with_diamond_storage`, `with_diamond_base`, `with_diamond_mattress`, `ottoman_divan_size`, `ottoman_divan_headboad`, `ottoman_divan_color`, `ottoman_divan_fabric`, `ottoman_divan_mattress`, `divan_size`, `divan_headboard`, `divan_color`, `divan_fabric`, `divan_storage`, `divan_mattress`, `monaco_divan_size`, `monaco_divan_headboard`, `monaco_divan_color`, `monaco_divan_fabric`, `monaco_divan_storage`, `monaco_divan_mattress`, `created_at`, `updated_at`, `without_diamond_design`, `Mattress`, `Ottoman`, `Bed`, `Gaslift`, `Headboard`, `Design`, `Without_diamond_button`, `With_diamond_button`, `Divan`, `Ottoman_divan`, `Divan_form`, `Manaco_divan`) VALUES
(193, 134, 91, '233', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:19:38', '2023-08-27 10:01:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 135, 42, '234', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida', 'silver', 'Crush velvet', 'Diamond', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:23:27', '2023-08-27 09:23:27', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(191, 132, 40, '231', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Florida Button', 'black', 'Plush Velvet', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:11:59', '2023-08-28 16:13:02', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', 'Ottoman_divan : ', NULL, NULL),
(192, 133, 40, '232', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:14:59', '2023-08-27 11:28:12', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(190, 131, 40, '230', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:09:36', '2023-08-27 09:09:36', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(189, 130, 40, '229', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'Grey', 'Plush Velvet', 'No Drawers', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:07:11', '2023-08-27 09:07:11', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(188, 129, 40, '228', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'plain', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:04:38', '2023-08-27 09:04:38', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(187, 128, 40, '227', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'Sapphire', 'Grey', '2 Drawers-Left side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:01:30', '2023-08-27 09:01:30', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(186, 128, 40, '226', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'teal', 'Plush Velvet', '2 Drawers-Left side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:00:08', '2023-08-27 09:00:08', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(185, 127, 40, '225', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'purple', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:55:46', '2023-08-27 08:55:46', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(184, 126, 40, '224', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Grey', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:53:16', '2023-08-27 08:53:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(183, 125, 40, '223', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'Grey', 'Plush Velvet', 'No Drawers', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:48:56', '2023-08-27 08:48:56', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(182, 124, 40, '222', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:46:34', '2023-08-27 08:46:34', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(181, 123, 40, '221', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'black', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:44:16', '2023-08-27 08:44:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(180, 122, 40, '220', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', '4 Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:40:41', '2023-08-27 08:40:41', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(179, 121, 40, '219', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Grey', 'Naples', '4 Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:37:14', '2023-08-27 08:37:14', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(178, 120, 40, '218', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Naples', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:33:31', '2023-08-27 08:33:31', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(176, 118, 40, '216', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:20:59', '2023-08-27 08:21:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(177, 119, 40, '217', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'silver', 'Crush velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:29:11', '2023-08-29 17:27:22', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(175, 117, 40, '215', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'purple', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:14:27', '2023-08-27 08:14:27', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(174, 116, 40, '214', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Slate', 'Grey', '2 Drawers-1 each side Top piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:06:58', '2023-08-27 08:06:58', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(173, 116, 40, '213', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 08:04:50', '2023-08-27 08:04:50', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(172, 115, 40, '212', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Grey', 'Crush velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:59:48', '2023-08-27 07:59:48', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(171, 114, 40, '211', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:54:56', '2023-08-27 07:54:56', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(170, 113, 40, '210', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'Grey', 'Crush velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:47:16', '2023-08-27 07:47:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(169, 112, 40, '209', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'black', 'Plush Velvet', '2 Drawers-1 each side Top piece', 'Full memory foam 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:41:29', '2023-08-27 07:41:29', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(168, 111, 40, '208', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Button', 'Grey', 'Naples', '2 Drawers-1 each side Bottom piece', 'No', '2023-08-27 07:36:19', '2023-08-27 07:36:19', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, NULL, 'Manaco_divan  : '),
(167, 110, 40, '207', 'UK', '2', '4ft6 inch', 'simple - Semi ortho  8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:27:38', '2023-08-27 07:27:38', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 110, 40, '206', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'sand', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:25:51', '2023-08-27 07:25:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(165, 109, 40, '205', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'Grey', 'Crush velvet', 'Diamond', 'No', 'Solid base', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:20:37', '2023-08-27 07:20:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(164, 108, 40, '204', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'Mink', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:15:41', '2023-08-27 07:16:40', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(163, 107, 40, '203', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'panel', 'Mink', 'Naples', 'No Drawers', 'Full memory foam 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 07:11:52', '2023-08-27 07:12:43', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(162, 106, 92, '202', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'black', 'Plush Velvet', '1 Drawer-Side', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 05:41:22', '2023-08-27 05:41:22', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(161, 105, 67, '201', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'Grey', 'Plush Velvet', 'N/A', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 05:02:36', '2023-08-27 05:02:36', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(160, 104, 67, '200', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'black', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:56:59', '2023-08-27 04:56:59', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(159, 103, 52, '199', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Grey', 'Grey', 'No Drawers', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:53:46', '2023-08-27 04:53:46', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(158, 103, 52, '198', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Grey', 'No Drawers', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:51:54', '2023-08-27 04:51:54', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(157, 103, 52, '197', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'horizontal line', 'Grey', 'Naples', 'No Drawers', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:50:10', '2023-08-29 02:41:44', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(156, 102, 52, '196', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'plain', 'Grey', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:20:12', '2023-08-27 04:20:12', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(155, 101, 52, '195', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Diamond', 'pink', 'Crush velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 04:09:12', '2023-08-27 04:09:12', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(154, 100, 79, '194', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', NULL, 'Grey', 'Crush velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 03:05:52', '2023-08-27 04:01:21', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(153, 99, 85, '193', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Diamond', 'silver', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', '2023-08-27 03:01:38', '2023-08-27 03:01:38', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, NULL, 'Manaco_divan  : '),
(152, 98, 53, '192', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'Grey', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:35:31', '2023-08-27 02:36:57', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(151, 97, 83, '191', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Crush velvet', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:30:42', '2023-08-27 02:30:42', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(150, 96, 83, '190', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:26:54', '2023-08-27 02:26:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(149, 95, 83, '189', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'black', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:24:28', '2023-08-27 02:24:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(148, 94, 83, '188', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Florida', 'red', 'Chenille', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:17:05', '2023-08-27 02:17:05', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(146, 92, 83, '186', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Grey', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:07:44', '2023-08-27 02:11:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(147, 93, 83, '187', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'cream', 'Naples', '2 Drawers-Left side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 02:11:19', '2023-08-27 02:11:19', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(143, 89, 71, '183', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Naples', 'No Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 01:37:01', '2023-08-27 01:37:01', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(144, 90, 83, '184', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'pink', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 01:51:08', '2023-08-27 01:51:08', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', 'Divan => ', NULL, NULL, NULL),
(140, 86, 62, '180', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'black', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 00:24:55', '2023-08-27 00:24:55', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(142, 88, 71, '182', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'cream', 'Naples', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 01:15:35', '2023-08-27 01:15:35', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(132, 78, 41, '172', 'UK', '2', '4ft6 inch', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 22:29:48', '2023-08-26 22:30:49', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 76, 60, '170', 'UK', '2', '4ft6 inch', 'Full memory foam 12 inch', NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 21:20:33', '2023-08-26 21:40:16', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 77, 60, '171', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'black', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 21:37:23', '2023-08-26 21:37:23', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(135, 81, 63, '175', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'red', 'Crush velvet', 'Diamond', 'No', 'Wooden Slates', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:26:25', '2023-08-26 23:26:25', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(136, 82, 63, '176', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'black', 'Plush Velvet', 'No Drawers', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:31:57', '2023-08-26 23:31:57', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(137, 83, 63, '177', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'black', 'Chenille', 'No Drawers', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:36:45', '2023-08-26 23:36:45', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(138, 84, 63, '178', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Diamond', 'black', 'Crush velvet', 'No Drawers', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:42:51', '2023-08-26 23:42:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(134, 80, 63, '174', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'black', 'Crush velvet', 'No Drawers', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:21:05', '2023-08-26 23:28:38', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(133, 79, 58, '173', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'steel', 'Plush Velvet', 'No Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 23:09:44', '2023-08-26 23:11:02', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(195, 136, 42, '235', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'panel', 'black', 'Chenille', 'N/A', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:25:48', '2023-08-27 09:25:48', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(196, 137, 42, '236', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Diamond', 'Grey', 'Crush velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:28:26', '2023-08-27 09:28:26', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(197, 138, 42, '237', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 09:32:14', '2023-08-30 16:45:30', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(198, 139, 42, '238', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'Grey', 'Plush Velvet', 'Diamond', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 10:08:33', '2023-08-27 10:08:33', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(199, 140, 40, '239', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'Grey', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 10:14:03', '2023-08-27 10:14:03', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(200, 141, 40, '240', 'UK', '2', '5ft', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 10:16:22', '2023-08-27 10:16:22', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 142, 42, '241', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 10:57:27', '2023-08-27 10:57:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 145, 74, '244', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'charcoal', 'Chenille', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 15:21:49', '2023-08-27 15:28:40', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(205, 146, 79, '245', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'Grey', 'Crush velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 16:51:22', '2023-08-27 16:51:22', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(206, 147, 84, '246', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'Grey', 'Chenille', 'N/A', 'No', 'Wooden Slates', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 21:47:54', '2023-08-27 21:47:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(207, 148, 84, '247', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'silver', 'Crush velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 22:23:53', '2023-08-27 22:23:53', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(208, 149, 58, '248', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Plush Velvet', '4 Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 22:53:53', '2023-08-27 22:53:53', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(209, 150, 58, '249', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'charcoal', 'Chenille', '4 Drawers', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:00:43', '2023-08-27 23:00:43', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(210, 151, 83, '250', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:25:11', '2023-08-28 07:54:43', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(211, 152, 83, '251', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'Grey', 'Crush velvet', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:27:28', '2023-08-27 23:27:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(212, 153, 83, '252', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'black', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:33:11', '2023-08-27 23:33:11', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(213, 154, 83, '253', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Florida', 'red', 'Plush Velvet', 'Button', NULL, 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:35:53', '2023-08-27 23:35:53', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(214, 155, 83, '254', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:47:30', '2023-08-27 23:47:30', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(215, 156, 83, '255', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'silver', 'Crush velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:49:51', '2023-08-27 23:49:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(216, 157, 83, '256', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'black', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-27 23:51:56', '2023-08-27 23:51:56', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(217, 158, 60, '257', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Maroon', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 00:32:35', '2023-08-28 00:33:27', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(218, 159, 84, '258', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'silver', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 00:47:09', '2023-08-28 00:47:09', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(219, 160, 63, '259', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'No', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:00:02', '2023-08-28 01:00:02', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(220, 161, 71, '260', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', '2 Drawers-Left side', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:09:16', '2023-08-28 01:09:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(221, 162, 46, '261', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'N/A', 'Metal Gaslift', 'Wooden Slates', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:24:15', '2023-08-28 01:24:15', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(222, 163, 67, '262', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'Grey', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:37:13', '2023-08-28 01:37:13', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(223, 164, 67, '263', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'black', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:40:37', '2023-08-28 01:40:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(224, 165, 67, '264', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Diamond', 'black', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:44:36', '2023-08-28 01:44:36', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(225, 166, 83, '265', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'black', 'Naples', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:50:40', '2023-08-28 01:50:40', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(226, 167, 54, '266', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'Cube Diamond', 'black', 'Plush Velvet', 'No Drawers', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 01:59:47', '2023-08-28 01:59:47', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(227, 168, 95, '267', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', NULL, 'steel', 'Plush Velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:07:59', '2023-08-28 02:09:11', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(228, 169, 52, '268', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'plain', 'black', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:10:18', '2023-08-28 02:11:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(229, 170, 62, '269', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'silver', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:30:51', '2023-08-28 02:30:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(230, 171, 60, '270', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'silver', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:35:45', '2023-08-28 02:40:31', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(231, 172, 67, '271', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Diamond', 'sand', 'Plush Velvet', '2 Drawers-1 each side Top piece', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:36:18', '2023-08-28 02:36:18', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(232, 172, 67, '272', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'Hilton', 'sand', 'Grey', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'Memory foam  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:37:57', '2023-08-28 02:37:57', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(233, 171, 60, '273', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'plain', 'Brown', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:39:24', '2023-08-28 02:41:22', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL);
INSERT INTO `orderdetails` (`id`, `customer_id`, `user_id`, `order_id`, `select_country`, `select_product`, `mattress_size`, `select_mattress`, `ottoman_design`, `ottoman_color`, `ottoman_fabric`, `gaslift_size`, `gaslift_design`, `headboard_size`, `headboard_design`, `headboard_color`, `headboard_fabric`, `without_diamond_size`, `without_diamond_color`, `without_diamond_fabric`, `without_diamond_storage`, `without_diamond_base`, `without_diamond_mattress`, `with_diamond_size`, `with_diamond_design`, `with_diamond_color`, `with_diamond_fabric`, `with_diamond_button_diamond`, `with_diamond_storage`, `with_diamond_base`, `with_diamond_mattress`, `ottoman_divan_size`, `ottoman_divan_headboad`, `ottoman_divan_color`, `ottoman_divan_fabric`, `ottoman_divan_mattress`, `divan_size`, `divan_headboard`, `divan_color`, `divan_fabric`, `divan_storage`, `divan_mattress`, `monaco_divan_size`, `monaco_divan_headboard`, `monaco_divan_color`, `monaco_divan_fabric`, `monaco_divan_storage`, `monaco_divan_mattress`, `created_at`, `updated_at`, `without_diamond_design`, `Mattress`, `Ottoman`, `Bed`, `Gaslift`, `Headboard`, `Design`, `Without_diamond_button`, `With_diamond_button`, `Divan`, `Ottoman_divan`, `Divan_form`, `Manaco_divan`) VALUES
(234, 173, 62, '274', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'red', 'Chenille', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 02:56:03', '2023-08-28 02:56:03', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(235, 174, 58, '275', 'UK', '7', '4ft6 inch', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 04:21:37', '2023-08-28 04:21:37', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 176, 83, '277', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Florida', 'pink', 'Crush velvet', 'Diamond', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 04:48:35', '2023-08-28 04:48:35', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(238, 177, 103, '278', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'plain', 'black', 'Crush velvet', 'No Drawers', '2000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 16:40:56', '2023-08-28 16:41:39', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(239, 178, 90, '279', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 17:32:28', '2023-08-28 17:32:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 180, 53, '281', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Grey', 'Plush Velvet', 'No Drawers', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 18:16:28', '2023-08-28 18:16:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(242, 181, 50, '282', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida Button', 'Grey', 'Plush Velvet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 18:16:54', '2023-08-28 18:16:54', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(243, 182, 68, '283', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'purple', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 18:57:37', '2023-08-28 18:57:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(244, 182, 68, '284', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'black', 'Grey', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 18:58:54', '2023-08-28 18:58:54', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(245, 183, 100, '285', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'Grey', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 19:35:30', '2023-08-29 15:30:01', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(246, 184, 83, '286', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'silver', 'Chenille', '2 Drawers-1 each side Bottom piece', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 19:39:30', '2023-08-28 19:39:30', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(247, 185, 83, '287', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida', 'silver', 'Naples', 'Button', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 20:46:26', '2023-08-28 20:46:26', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(248, 186, 83, '288', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton Diamond', 'black', 'Plush Velvet', 'No Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 20:49:24', '2023-08-28 20:49:24', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(249, 187, 83, '289', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'black', 'Naples', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 20:52:37', '2023-08-28 20:52:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', 'Divan => ', NULL, NULL, NULL),
(250, 188, 105, '290', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 21:11:11', '2023-08-28 21:11:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 189, 47, '291', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Button', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 21:28:03', '2023-08-28 21:28:03', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(252, 189, 47, '292', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'Gold', 'Grey', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 21:30:19', '2023-08-28 21:30:19', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(253, 190, 47, '293', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', NULL, 'blue', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 21:42:43', '2023-08-28 21:42:43', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(254, 191, 96, '294', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Sleigh', 'Grey', 'Crush velvet', 'Button', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 21:54:48', '2023-08-28 21:54:48', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(255, 192, 62, '295', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Sleigh', 'silver', 'Crush velvet', 'Button', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 23:27:38', '2023-08-28 23:27:38', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(256, 193, 45, '296', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', NULL, 'Beige', 'Plush Velvet', 'Button', 'Metal Gaslift', 'Wooden Slates', 'Memory foam  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 23:34:53', '2023-08-29 02:28:34', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(257, 194, 63, '297', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Diamond', 'Maroon', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 23:58:49', '2023-08-28 23:58:49', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(258, 195, 98, '298', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Vivinne Panel', 'steel', 'Plush Velvet', NULL, NULL, NULL, 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 00:23:07', '2023-08-29 00:23:07', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(259, 196, 63, '299', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:24:23', '2023-08-29 01:24:23', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(260, 197, 54, '300', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'panel', 'black', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:28:51', '2023-08-29 01:28:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(262, 198, 54, '302', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', NULL, 'black', 'Plush Velvet', NULL, 'Board Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:33:56', '2023-08-29 01:34:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(263, 199, 71, '303', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'Mink', 'Naples', '4 Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:35:19', '2023-08-29 01:35:19', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(264, 200, 54, '304', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6ft', 'Cube Diamond', 'charcoal', 'Chenille', '2 Drawers-1 each side Top piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:38:10', '2023-08-29 01:38:10', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(265, 201, 58, '305', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'plain', 'Grey', 'Plush Velvet', 'No Drawers', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 01:49:25', '2023-08-29 01:49:25', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(266, 202, 58, '306', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida', 'Grey', 'Naples', 'Diamond', 'No', 'Wooden Slates', 'Orthopadic Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:15:47', '2023-08-29 02:15:47', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(271, 203, 52, '311', 'UK', '7', '4ft6 inch', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:39:16', '2023-08-29 02:39:16', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 204, 58, '312', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'Slate', 'Naples', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:42:48', '2023-08-29 02:42:48', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(268, 203, 52, '308', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'Grey', 'Naples', 'No Drawers', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:32:45', '2023-08-29 02:32:45', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(269, 203, 52, '309', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Diamond', 'Grey', 'Grey', 'No Drawers', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:34:47', '2023-08-29 02:34:47', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(270, 203, 52, '310', 'UK', '7', '3ft', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:35:35', '2023-08-29 02:35:35', NULL, 'Mattress : ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 205, 83, '313', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Naples', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 02:53:38', '2023-08-29 02:53:38', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', 'Divan => ', NULL, NULL, NULL),
(274, 206, 107, '314', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 04:14:50', '2023-08-29 04:17:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 207, 84, '315', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'Grey', 'Plush Velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 10:32:21', '2023-08-29 10:32:21', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(277, 209, 98, '317', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Sleigh', 'steel', 'Plush Velvet', 'Diamond', 'No', NULL, 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 13:00:29', '2023-08-29 13:00:29', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(278, 210, 50, '318', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Vivinne Panel', 'silver', 'Plush Velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 16:11:21', '2023-08-29 16:11:21', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(279, 211, 100, '319', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'plain', 'charcoal', 'Chenille', 'No Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 16:17:35', '2023-08-30 15:54:18', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(280, 211, 100, '320', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'charcoal', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 16:20:14', '2023-08-29 16:20:14', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(282, 213, 60, '322', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'pink', 'Crush velvet', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 20:02:02', '2023-08-29 20:02:02', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(283, 214, 82, '323', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 20:03:20', '2023-08-29 20:03:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 217, 60, '326', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'Grey', 'Plush Velvet', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 20:22:50', '2023-08-29 20:22:50', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(287, 218, 107, '327', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'Grey', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 20:26:13', '2023-08-29 20:26:13', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(288, 219, 42, '328', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Sleigh', 'Grey', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 20:39:16', '2023-08-29 20:39:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(289, 220, 68, '329', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube', 'Grey', 'Plush Velvet', 'Button', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 21:14:51', '2023-08-29 21:14:51', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(290, 221, 79, '330', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'silver', 'Crush velvet', 'Diamond', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 21:18:14', '2023-08-29 21:18:14', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(291, 222, 79, '331', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Grey', 'Crush velvet', NULL, 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 21:24:49', '2023-08-29 21:24:49', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(292, 223, 58, '332', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'silver', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 23:10:40', '2023-08-29 23:10:40', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(293, 224, 58, '333', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'silver', 'Crush velvet', '2 Drawers-Right side', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 23:16:21', '2023-08-29 23:16:21', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(294, 225, 58, '334', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'pink', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 23:22:16', '2023-08-29 23:22:16', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(295, 226, 72, '335', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'silver', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-29 23:39:14', '2023-08-29 23:39:14', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(296, 227, 58, '336', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Oxford', 'cream', 'Naples', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 00:05:53', '2023-08-30 00:05:53', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(297, 228, 71, '337', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Cube Button', 'charcoal', 'Naples', '2 Drawers-Right side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 00:25:30', '2023-08-30 00:25:30', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(298, 229, 52, '338', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 00:28:26', '2023-08-30 00:28:26', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(299, 229, 52, '339', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'panel', 'steel', 'Grey', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 00:30:28', '2023-08-30 00:30:28', NULL, NULL, NULL, 'Bed', NULL, NULL, 'Design => ', NULL, NULL, 'Divan', NULL, 'Divan_form : ', NULL),
(300, 230, 41, '340', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'N/A', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 00:55:13', '2023-08-30 00:55:13', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(301, 231, 41, '341', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'black', 'Plush Velvet', 'Diamond', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:00:59', '2023-08-30 01:00:59', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(302, 232, 67, '342', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Diamond', 'black', 'Plush Velvet', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:03:28', '2023-08-30 01:03:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(303, 233, 67, '343', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Diamond', 'red', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:06:29', '2023-08-30 01:06:29', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(304, 234, 41, '344', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Button', 'Grey', 'Crush velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:10:27', '2023-08-30 01:10:27', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(305, 235, 85, '345', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Arizona', 'Grey', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:21:37', '2023-08-30 01:21:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(306, 236, 52, '346', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'silver', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:27:19', '2023-08-30 01:27:19', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(307, 237, 67, '347', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'black', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:27:59', '2023-08-30 01:27:59', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(308, 238, 106, '348', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Hilton', 'black', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'Full memory foam 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:35:46', '2023-08-30 01:35:46', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(309, 239, 83, '349', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida', 'silver', 'Plush Velvet', 'Diamond', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:44:04', '2023-08-30 01:44:04', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(310, 240, 83, '350', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Florida', 'Grey', 'Naples', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:47:56', '2023-08-30 01:47:56', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(311, 241, 83, '351', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'panel', 'silver', 'Plush Velvet', 'N/A', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:51:32', '2023-08-30 01:51:32', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(312, 242, 83, '352', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Florida', 'red', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:54:33', '2023-08-30 01:54:33', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', 'Divan => ', NULL, NULL, NULL),
(313, 243, 83, '353', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:56:24', '2023-08-30 01:56:24', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(314, 244, 83, '354', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 01:58:28', '2023-08-30 01:58:28', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(315, 245, 79, '355', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Sleigh', 'Grey', 'Crush velvet', 'Diamond', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 02:16:09', '2023-08-30 02:16:09', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(316, 246, 68, '356', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Cube Button', 'black', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 02:35:37', '2023-08-30 02:35:37', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(317, 247, 63, '357', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'panel', 'Grey', 'Plush Velvet', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 03:17:59', '2023-08-30 03:17:59', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(318, 248, 67, '358', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'Maroon', 'Naples', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 03:18:59', '2023-08-30 03:18:59', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(319, 249, 62, '359', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'panel', 'steel', 'Plush Velvet', 'No Drawers', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 13:06:27', '2023-08-30 13:06:27', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(320, 250, 68, '360', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Hilton', 'cream', 'Plush Velvet', 'Button', 'No', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 15:25:18', '2023-08-30 15:25:18', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, 'luxury beds : ', NULL, NULL, NULL, NULL),
(321, 251, 62, '361', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'panel', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Bottom piece', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 15:46:04', '2023-08-30 15:46:04', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL),
(322, 252, 42, '362', 'UK', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'plain', 'silver', 'Chenille', 'No Drawers', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-30 16:44:19', '2023-08-30 16:44:19', NULL, NULL, NULL, 'Bed => ', NULL, NULL, 'Design => ', NULL, NULL, 'Divan => ', NULL, 'Divan_form  : ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `note` longtext DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `alert` varchar(255) NOT NULL DEFAULT '0',
  `seen` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `user_id`, `note`, `price`, `created_at`, `updated_at`, `product_id`, `qty`, `delivery_status`, `delivery_date`, `alert`, `seen`) VALUES
(170, 'In-00003-2023', 76, 60, NULL, '125', '2023-08-26 21:20:33', '2023-08-26 21:20:33', 7, 1, NULL, '2023-08-29', '0', '0'),
(171, 'In-00004-2023', 77, 60, NULL, '165', '2023-08-26 21:37:23', '2023-08-26 21:37:23', 7, 1, NULL, '2023-08-28', '0', '0'),
(172, 'In-00003-2023', 78, 41, 'Confirm 👍', '85', '2023-08-26 22:29:48', '2023-08-26 22:34:12', 7, 1, NULL, '2023-08-28', '0', '0'),
(173, 'In-00004-2023', 79, 58, 'The customer would like to order 2 more beds based on this bed\'s quality please make sure to deliver a good quality bed. Thanks', '185', '2023-08-26 23:09:44', '2023-08-26 23:09:44', 7, 1, NULL, '2023-08-28', '0', '0'),
(174, 'In-00005-2023', 80, 63, NULL, '180', '2023-08-26 23:21:05', '2023-08-26 23:21:05', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(175, 'In-00006-2023', 81, 63, NULL, '260', '2023-08-26 23:26:25', '2023-08-26 23:26:25', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(176, 'In-00007-2023', 82, 63, 'R', '100', '2023-08-26 23:31:57', '2023-08-26 23:31:57', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(177, 'In-00008-2023', 83, 63, NULL, '110', '2023-08-26 23:36:45', '2023-08-26 23:36:45', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(178, 'In-00009-2023', 84, 63, NULL, '170', '2023-08-26 23:42:51', '2023-08-26 23:42:51', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(180, 'In-00010-2023', 86, 62, 'Double Size Panel WINGBACK Bed Without Mattress In Plushvelvet Black Colour', '200', '2023-08-27 00:24:55', '2023-08-27 00:24:55', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(182, 'In-00011-2023', 88, 71, NULL, '185', '2023-08-27 01:15:35', '2023-08-27 01:15:35', 7, NULL, NULL, '2023-08-28', '0', '0'),
(183, 'In-00012-2023', 89, 71, NULL, '185', '2023-08-27 01:37:01', '2023-08-27 01:37:01', 7, NULL, NULL, '2023-08-28', '0', '0'),
(184, 'In-00013-2023', 90, 83, '70 TOP UP', '320', '2023-08-27 01:51:08', '2023-08-27 01:51:08', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(186, 'In-00014-2023', 92, 83, '25 TOP UP', '180', '2023-08-27 02:07:44', '2023-08-27 02:07:44', 7, 0, 'inprocess', '2023-08-28', '0', '0'),
(187, 'In-00015-2023', 93, 83, NULL, '180', '2023-08-27 02:11:19', '2023-08-27 02:11:19', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(188, 'In-00016-2023', 94, 83, NULL, '247', '2023-08-27 02:17:05', '2023-08-27 02:17:05', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(189, 'In-00017-2023', 95, 83, NULL, '178', '2023-08-27 02:24:28', '2023-08-27 02:24:28', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(190, 'In-00018-2023', 96, 83, NULL, '155', '2023-08-27 02:26:54', '2023-08-27 02:26:54', 7, 0, 'inprocess', '2023-08-28', '0', '0'),
(191, 'In-00019-2023', 97, 83, NULL, '169', '2023-08-27 02:30:42', '2023-08-27 02:30:42', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(192, 'In-00020-2023', 98, 53, '£40 topup', '195', '2023-08-27 02:35:31', '2023-08-27 02:36:57', 7, 1, NULL, '2023-09-01', '0', '0'),
(193, 'In-00021-2023', 99, 85, NULL, '185', '2023-08-27 03:01:38', '2023-08-27 03:01:38', 7, 1, 'complete', '2023-08-28', '0', '0'),
(194, 'In-00022-2023', 100, 79, NULL, '360', '2023-08-27 03:05:52', '2023-08-27 16:52:22', 7, 1, NULL, '2023-08-29', '0', '0'),
(195, 'In-00023-2023', 101, 52, NULL, '175', '2023-08-27 04:09:12', '2023-08-27 04:09:12', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(196, 'In-00024-2023', 102, 52, NULL, '160', '2023-08-27 04:20:12', '2023-08-27 04:20:12', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(197, 'In-00025-2023', 103, 52, 'Napples Seal grey', '340', '2023-08-27 04:50:10', '2023-08-27 04:50:10', 7, 2, 'inprocess', '2023-08-28', '0', '0'),
(198, 'In-00026-2023', 103, 52, 'Napel seal grey color', '200', '2023-08-27 04:51:54', '2023-08-27 04:51:54', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(199, 'In-00027-2023', 103, 52, 'Napels seal grey color', '440', '2023-08-27 04:53:46', '2023-08-27 04:53:46', 7, 2, 'inprocess', '2023-08-28', '0', '0'),
(200, 'In-00028-2023', 104, 67, NULL, '210', '2023-08-27 04:56:59', '2023-08-27 04:56:59', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(201, 'In-00029-2023', 105, 67, NULL, '440', '2023-08-27 05:02:36', '2023-08-27 05:02:36', 7, 1, NULL, '2023-08-28', '0', '0'),
(202, 'In-00030-2023', 106, 92, NULL, '170', '2023-08-27 05:41:22', '2023-08-27 05:42:52', 7, 1, NULL, '2023-08-28', '1', '0'),
(203, 'In-00031-2023', 107, 40, 'Confirmed order. fabric soft matt.', '300', '2023-08-27 07:11:52', '2023-08-27 07:12:43', 7, 2, 'inprocess', '2023-08-28', '0', '0'),
(204, 'In-00032-2023', 108, 40, 'Confirmed order,', '160', '2023-08-27 07:15:41', '2023-08-27 07:16:40', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(205, 'In-00033-2023', 109, 40, 'Confirmed order', '220', '2023-08-27 07:20:37', '2023-08-27 07:20:37', 7, NULL, NULL, '2023-08-28', '0', '0'),
(206, 'In-00034-2023', 110, 40, 'confirmed order', '125', '2023-08-27 07:25:51', '2023-08-27 07:25:51', 7, NULL, NULL, '2023-08-28', '0', '0'),
(207, 'In-00035-2023', 110, 40, 'confirmed order', '90', '2023-08-27 07:27:38', '2023-08-27 07:27:38', 7, NULL, NULL, '2023-08-28', '0', '0'),
(208, 'In-00036-2023', 111, 40, 'confirmed order', '250', '2023-08-27 07:36:19', '2023-08-27 07:36:19', 7, NULL, NULL, '2023-08-28', '0', '0'),
(209, 'In-00037-2023', 112, 40, 'confirmed order', '200', '2023-08-27 07:41:29', '2023-08-27 07:41:29', 7, NULL, NULL, '2023-08-28', '0', '0'),
(210, 'In-00038-2023', 113, 40, 'confirmed order', '269', '2023-08-27 07:47:16', '2023-08-27 07:47:16', 7, NULL, NULL, '2023-08-28', '0', '0'),
(211, 'In-00039-2023', 114, 40, NULL, '165', '2023-08-27 07:54:56', '2023-08-27 07:54:56', 7, NULL, NULL, '2023-08-28', '0', '0'),
(212, 'In-00040-2023', 115, 40, 'confirmed order', '160', '2023-08-27 07:59:48', '2023-08-27 07:59:48', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(213, 'In-00041-2023', 116, 40, 'confirmed', '185', '2023-08-27 08:04:50', '2023-08-27 08:04:50', 7, NULL, NULL, '2023-08-28', '0', '0'),
(214, 'In-00042-2023', 116, 40, 'confirmed', '205', '2023-08-27 08:06:58', '2023-08-27 08:06:58', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(215, 'In-00043-2023', 117, 40, 'confirmed', '170', '2023-08-27 08:14:27', '2023-08-27 08:14:27', 7, NULL, NULL, '2023-08-28', '0', '0'),
(216, 'In-00044-2023', 118, 40, 'confirmed', '160', '2023-08-27 08:20:59', '2023-08-27 08:20:59', 7, NULL, NULL, '2023-08-28', '0', '0'),
(217, 'In-00045-2023', 119, 40, 'confirmed order', '340', '2023-08-27 08:29:11', '2023-08-27 08:29:11', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(218, 'In-00046-2023', 120, 40, 'confirmed', '200', '2023-08-27 08:33:31', '2023-08-27 08:33:31', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(219, 'In-00047-2023', 121, 40, 'confirmed', '270', '2023-08-27 08:37:14', '2023-08-27 08:37:14', 7, NULL, NULL, '2023-08-28', '0', '0'),
(220, 'In-00048-2023', 122, 40, 'confirmed order', '240', '2023-08-27 08:40:41', '2023-08-27 08:40:41', 7, NULL, NULL, '2023-08-28', '0', '0'),
(221, 'In-00049-2023', 123, 40, NULL, '155', '2023-08-27 08:44:16', '2023-08-27 08:44:16', 7, NULL, NULL, '2023-08-28', '0', '0'),
(222, 'In-00050-2023', 124, 40, NULL, '200', '2023-08-27 08:46:34', '2023-08-27 08:46:34', 7, NULL, NULL, '2023-08-28', '0', '0'),
(223, 'In-00051-2023', 125, 40, 'confirmed order', '100', '2023-08-27 08:48:56', '2023-08-27 08:48:56', 7, NULL, 'inprocess', '2023-08-28', '0', '0'),
(224, 'In-00052-2023', 126, 40, NULL, '180', '2023-08-27 08:53:16', '2023-08-27 08:53:16', 7, NULL, NULL, '2023-08-28', '0', '0'),
(225, 'In-00053-2023', 127, 40, NULL, '180', '2023-08-27 08:55:46', '2023-08-27 08:55:46', 7, NULL, NULL, '2023-08-28', '0', '0'),
(226, 'In-00054-2023', 128, 40, NULL, '175', '2023-08-27 09:00:08', '2023-08-27 09:00:08', 7, NULL, NULL, '2023-08-28', '0', '0'),
(227, 'In-00055-2023', 128, 40, NULL, '175', '2023-08-27 09:01:30', '2023-08-27 09:01:30', 7, NULL, NULL, '2023-08-28', '0', '0'),
(228, 'In-00056-2023', 129, 40, NULL, '210', '2023-08-27 09:04:38', '2023-08-27 09:04:38', 7, NULL, NULL, '2023-08-28', '0', '0'),
(229, 'In-00057-2023', 130, 40, NULL, '120', '2023-08-27 09:07:11', '2023-08-27 09:07:11', 7, NULL, NULL, '2023-08-28', '0', '0'),
(230, 'In-00058-2023', 131, 40, NULL, '180', '2023-08-27 09:09:36', '2023-08-27 09:09:36', 7, NULL, NULL, '2023-08-28', '0', '0'),
(231, 'In-00059-2023', 132, 40, NULL, '300', '2023-08-27 09:11:59', '2023-08-27 09:11:59', 7, NULL, NULL, '2023-08-28', '0', '0'),
(232, 'In-00060-2023', 133, 40, 'two bed', '360', '2023-08-27 09:14:59', '2023-08-27 09:14:59', 7, 2, NULL, '2023-08-28', '0', '0'),
(233, 'In-00061-2023', 134, 91, 'One', '300', '2023-08-27 09:19:38', '2023-08-27 09:19:38', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(234, 'In-00062-2023', 135, 42, NULL, '160', '2023-08-27 09:23:27', '2023-08-27 09:23:27', 7, NULL, NULL, '2023-08-28', '0', '0'),
(235, 'In-00063-2023', 136, 42, NULL, '400', '2023-08-27 09:25:48', '2023-08-27 09:25:48', 7, NULL, NULL, '2023-08-28', '0', '0'),
(236, 'In-00064-2023', 137, 42, NULL, '150', '2023-08-27 09:28:26', '2023-08-27 09:28:26', 7, NULL, NULL, '2023-08-28', '0', '0'),
(237, 'In-00065-2023', 138, 42, NULL, '200', '2023-08-27 09:32:14', '2023-08-27 09:32:14', 7, NULL, NULL, '2023-08-28', '0', '0'),
(238, 'In-00066-2023', 139, 42, NULL, '170', '2023-08-27 10:08:33', '2023-08-27 10:08:33', 7, NULL, NULL, '2023-08-28', '0', '0'),
(239, 'In-00067-2023', 140, 40, NULL, '220', '2023-08-27 10:14:03', '2023-08-27 10:14:03', 7, NULL, NULL, '2023-08-28', '0', '0'),
(240, 'In-00068-2023', 141, 40, 'Confirmed', '100', '2023-08-27 10:16:22', '2023-08-27 10:16:22', 7, NULL, NULL, '2023-08-28', '0', '0'),
(241, 'In-00069-2023', 142, 42, '10 topup', '170', '2023-08-27 10:57:27', '2023-08-27 10:57:27', 7, 1, NULL, '2023-08-28', '0', '0'),
(244, 'In-00070-2023', 145, 74, 'Bed With Mattress with One Drwas Top Up £05', '170', '2023-08-27 15:21:49', '2023-08-28 19:27:57', 7, 1, 'Tuesday delivery 28th august', '2023-08-29', '0', '0'),
(245, 'In-00071-2023', 146, 79, NULL, '360', '2023-08-27 16:51:22', '2023-08-27 16:51:22', 7, 1, NULL, '2023-08-29', '0', '0'),
(246, 'In-00072-2023', 147, 84, NULL, '250', '2023-08-27 21:47:54', '2023-08-27 21:47:54', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(247, 'In-00073-2023', 148, 84, NULL, '155', '2023-08-27 22:23:53', '2023-08-27 22:23:53', 7, 1, 'inprocess', '2023-08-28', '0', '0'),
(248, 'In-00074-2023', 149, 58, 'The customer ordered 2 beds 1 is with a memory foam mattress and the other one without a mattress both are of the same address\r\nI will mention the reference to 2nd bed', '249', '2023-08-27 22:53:53', '2023-08-27 22:53:53', 7, 1, 'complete', '2023-08-29', '0', '0'),
(249, 'In-00075-2023', 150, 58, 'This is a reference order from the same customer with the same address \r\nThis bed is without a mattress', '190', '2023-08-27 23:00:43', '2023-08-27 23:00:43', 7, 1, NULL, '2023-08-29', '0', '0'),
(250, 'In-00076-2023', 151, 83, NULL, '154', '2023-08-27 23:25:11', '2023-08-27 23:25:11', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(251, 'In-00077-2023', 152, 83, NULL, '200', '2023-08-27 23:27:28', '2023-08-27 23:27:28', 7, 0, 'inprocess', '2023-08-29', '0', '0'),
(252, 'In-00078-2023', 153, 83, NULL, '179', '2023-08-27 23:33:11', '2023-08-27 23:33:11', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(253, 'In-00079-2023', 154, 83, NULL, '250', '2023-08-27 23:35:53', '2023-08-27 23:35:53', 7, -2, 'inprocess', '2023-08-29', '0', '0'),
(254, 'In-00080-2023', 155, 83, NULL, '154', '2023-08-27 23:47:30', '2023-08-27 23:47:30', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(255, 'In-00081-2023', 156, 83, NULL, '155', '2023-08-27 23:49:51', '2023-08-27 23:49:51', 7, 0, 'inprocess', '2023-08-29', '0', '0'),
(256, 'In-00082-2023', 157, 83, NULL, '154', '2023-08-27 23:51:56', '2023-08-27 23:51:56', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(257, 'In-00083-2023', 158, 60, NULL, '155', '2023-08-28 00:32:35', '2023-08-29 02:35:02', 7, 1, NULL, '2023-08-30', '0', '0'),
(258, 'In-00084-2023', 159, 84, NULL, '180', '2023-08-28 00:47:09', '2023-08-28 00:47:09', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(259, 'In-00085-2023', 160, 63, NULL, '135', '2023-08-28 01:00:02', '2023-08-28 01:00:02', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(260, 'In-00086-2023', 161, 71, NULL, '230', '2023-08-28 01:09:16', '2023-08-28 01:09:16', 7, NULL, NULL, '2023-08-29', '0', '0'),
(261, 'In-00087-2023', 162, 46, '£10 Topup and the Design of Bed should be Panel Wingback', '360', '2023-08-28 01:24:15', '2023-08-28 01:24:15', 7, 1, NULL, '2023-08-29', '0', '0'),
(262, 'In-00088-2023', 163, 67, NULL, '230', '2023-08-28 01:37:13', '2023-08-28 01:37:13', 7, 1, NULL, '2023-08-29', '0', '0'),
(263, 'In-00089-2023', 164, 67, NULL, '210', '2023-08-28 01:40:37', '2023-08-28 01:40:37', 7, 1, NULL, '2023-08-29', '0', '0'),
(264, 'In-00090-2023', 165, 67, NULL, '150', '2023-08-28 01:44:36', '2023-08-28 01:44:36', 7, 1, NULL, '2023-08-29', '0', '0'),
(265, 'In-00091-2023', 166, 83, NULL, '218', '2023-08-28 01:50:40', '2023-08-28 01:50:40', 2, -1, 'inprocess', '2023-08-29', '0', '0'),
(266, 'In-00092-2023', 167, 54, NULL, '220', '2023-08-28 01:59:47', '2023-08-28 01:59:47', 2, 1, NULL, '2023-08-29', '0', '0'),
(267, 'In-00093-2023', 168, 95, NULL, '320', '2023-08-28 02:07:59', '2023-08-28 02:07:59', 2, 1, NULL, '2023-08-29', '0', '0'),
(268, 'In-00094-2023', 169, 52, NULL, '370', '2023-08-28 02:10:18', '2023-08-28 02:10:18', 7, 2, 'inprocess', '2023-08-29', '0', '0'),
(269, 'In-00095-2023', 170, 62, 'It\'s not a Panel Bed it\'s a wingline panel bed.', '240', '2023-08-28 02:30:51', '2023-08-28 02:30:51', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(270, 'In-00096-2023', 171, 60, NULL, '175', '2023-08-28 02:35:45', '2023-08-28 02:35:45', 7, 1, NULL, '2023-09-01', '0', '0'),
(271, 'In-00097-2023', 172, 67, NULL, '220', '2023-08-28 02:36:18', '2023-08-28 02:36:18', 7, 1, NULL, '2023-08-29', '0', '0'),
(272, 'In-00098-2023', 172, 67, NULL, '460', '2023-08-28 02:37:57', '2023-08-28 02:37:57', 7, 1, NULL, '2023-08-29', '0', '0'),
(273, 'In-00099-2023', 171, 60, NULL, '175', '2023-08-28 02:39:24', '2023-08-28 02:39:24', 7, 1, NULL, '2023-09-01', '0', '0'),
(274, 'In-00100-2023', 173, 62, 'Special Order Company', '190', '2023-08-28 02:56:03', '2023-08-28 02:56:03', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(275, 'In-00101-2023', 174, 58, 'Please add this order to the priority list \r\nThe customer wants delivery before 11 am', '260', '2023-08-28 04:21:37', '2023-08-28 04:21:37', 7, 2, 'inprocess', '2023-08-29', '0', '0'),
(277, 'In-00102-2023', 176, 83, NULL, '138', '2023-08-28 04:48:35', '2023-08-28 04:48:35', 7, 1, 'inprocess', '2023-08-29', '0', '0'),
(278, 'In-00103-2023', 177, 103, NULL, '310', '2023-08-28 16:40:56', '2023-08-28 16:40:56', 7, 1, NULL, '2023-08-30', '0', '0'),
(279, 'In-00104-2023', 178, 90, 'Agne Vindzigelskiene\r\n12 Sherlock House \r\nLynley Close \r\nME15 9GB \r\n07929314872\r\n1X super king size plush black divan bed without mattress 2 drawers', '200', '2023-08-28 17:32:28', '2023-08-28 17:32:28', 7, 1, 'complete', '2023-08-29', '0', '0'),
(281, 'In-00105-2023', 180, 53, '£topup', '180', '2023-08-28 18:16:28', '2023-08-28 18:16:28', 7, 1, NULL, '2023-08-29', '0', '0'),
(282, 'In-00106-2023', 181, 50, NULL, '160', '2023-08-28 18:16:54', '2023-08-28 18:16:54', 7, 1, NULL, '2023-08-30', '0', '0'),
(283, 'In-00107-2023', 182, 68, '2divan beds in black and purple naples', '150', '2023-08-28 18:57:37', '2023-08-28 18:57:37', 7, 2, 'inprocess', '2023-08-30', '0', '0'),
(284, 'In-00108-2023', 182, 68, NULL, '150', '2023-08-28 18:58:54', '2023-08-28 18:58:54', 7, NULL, NULL, '2023-08-30', '0', '0'),
(285, 'In-00109-2023', 183, 100, 'first floor delivery charges already add', '195', '2023-08-28 19:35:30', '2023-08-28 19:35:30', 7, 1, NULL, '2023-08-30', '0', '0'),
(286, 'In-00110-2023', 184, 83, NULL, '203', '2023-08-28 19:39:30', '2023-08-28 19:39:30', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(287, 'In-00111-2023', 185, 83, NULL, '229', '2023-08-28 20:46:26', '2023-08-28 20:46:26', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(288, 'In-00112-2023', 186, 83, NULL, '208', '2023-08-28 20:49:24', '2023-08-28 20:49:24', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(289, 'In-00113-2023', 187, 83, NULL, '228', '2023-08-28 20:52:37', '2023-08-28 20:52:37', 7, NULL, 'inprocess', '2023-08-30', '0', '0'),
(290, 'In-00114-2023', 188, 105, NULL, '230', '2023-08-28 21:11:11', '2023-08-28 21:11:11', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(291, 'In-00115-2023', 189, 47, NULL, '155', '2023-08-28 21:28:03', '2023-08-28 21:28:03', 7, 1, NULL, '2023-08-30', '0', '0'),
(292, 'In-00116-2023', 189, 47, NULL, '310', '2023-08-28 21:30:19', '2023-08-28 21:30:19', 7, 2, NULL, '2023-08-30', '0', '0'),
(293, 'In-00117-2023', 190, 47, NULL, '230', '2023-08-28 21:42:43', '2023-08-28 21:42:43', 7, 1, NULL, '2023-08-30', '0', '0'),
(294, 'In-00118-2023', 191, 96, NULL, '260', '2023-08-28 21:54:48', '2023-08-28 21:54:48', 7, 1, NULL, '2023-08-31', '0', '0'),
(295, 'In-00119-2023', 192, 62, 'For Special Order Company', '240', '2023-08-28 23:27:38', '2023-08-28 23:27:38', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(296, 'In-00120-2023', 193, 45, 'Customer said After 2 pm delivery please', '450', '2023-08-28 23:34:53', '2023-08-29 02:28:34', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(297, 'In-00121-2023', 194, 63, 'R', '150', '2023-08-28 23:58:49', '2023-08-28 23:58:49', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(298, 'In-00122-2023', 195, 98, 'Bamper bed ..', '290', '2023-08-29 00:23:07', '2023-08-29 00:23:07', 7, 1, NULL, '2023-08-30', '0', '0'),
(299, 'In-00123-2023', 196, 63, NULL, '170', '2023-08-29 01:24:23', '2023-08-29 01:24:23', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(300, 'In-00124-2023', 197, 54, 'Wingback Headboard', '350', '2023-08-29 01:28:51', '2023-08-29 01:28:51', 7, 1, NULL, '2023-08-30', '0', '0'),
(302, 'In-00125-2023', 198, 54, NULL, '410', '2023-08-29 01:33:56', '2023-08-29 01:34:37', 7, 1, NULL, '2023-08-30', '0', '0'),
(303, 'In-00126-2023', 199, 71, 'Assembly', '290', '2023-08-29 01:35:19', '2023-08-29 01:35:19', 7, NULL, NULL, '2023-08-30', '0', '0'),
(304, 'In-00127-2023', 200, 54, NULL, '250', '2023-08-29 01:38:10', '2023-08-29 01:38:10', 7, 1, NULL, '2023-08-30', '0', '0'),
(305, 'In-00128-2023', 201, 58, 'This Order is Reshuduled', '170', '2023-08-29 01:49:25', '2023-08-29 01:49:25', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(306, 'In-00129-2023', 202, 58, NULL, '220', '2023-08-29 02:15:47', '2023-08-29 02:15:47', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(308, 'In-00131-2023', 203, 52, NULL, '600', '2023-08-29 02:32:45', '2023-08-29 02:32:45', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(309, 'In-00132-2023', 203, 52, NULL, '1', '2023-08-29 02:34:47', '2023-08-29 02:34:47', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(310, 'In-00133-2023', 203, 52, NULL, '1', '2023-08-29 02:35:35', '2023-08-29 02:35:35', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(311, 'In-00133-2023', 203, 52, NULL, '1', '2023-08-29 02:39:16', '2023-08-29 02:39:16', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(312, 'In-00134-2023', 204, 58, NULL, '230', '2023-08-29 02:42:48', '2023-08-29 02:42:48', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(313, 'In-00135-2023', 205, 83, NULL, '210', '2023-08-29 02:53:38', '2023-08-29 02:53:38', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(314, 'In-00136-2023', 206, 107, 'Hilton double bed with foam mattress Dark Grey color Plus velvet. Please use buttons in bed', '240', '2023-08-29 04:14:50', '2023-08-29 04:17:09', 7, 1, NULL, '2023-08-29', '0', '0'),
(315, 'In-00137-2023', 207, 84, NULL, '360', '2023-08-29 10:32:21', '2023-08-29 10:32:21', 7, 2, 'inprocess', '2023-08-30', '0', '0'),
(317, 'In-00138-2023', 209, 98, NULL, '300', '2023-08-29 13:00:29', '2023-08-29 13:00:29', 7, 1, 'inprocess', '2023-08-30', '0', '0'),
(318, 'In-00139-2023', 210, 50, NULL, '250', '2023-08-29 16:11:21', '2023-08-29 16:11:21', 7, 1, NULL, '2023-08-31', '0', '0'),
(319, 'In-00140-2023', 211, 100, 'assembly ( YES )', '220', '2023-08-29 16:17:35', '2023-08-29 16:17:35', 7, 1, NULL, '2023-08-31', '0', '0'),
(320, 'In-00141-2023', 211, 100, 'ASSEMBLY ( YES )', '380', '2023-08-29 16:20:14', '2023-08-29 16:20:14', 7, 2, NULL, '2023-08-31', '0', '0'),
(322, 'In-00142-2023', 213, 60, NULL, '185', '2023-08-29 20:02:02', '2023-08-29 20:02:02', 7, 1, NULL, '2023-08-31', '0', '0'),
(323, 'In-00143-2023', 214, 82, 'One on each side \r\nMehron plush velvet', '190', '2023-08-29 20:03:20', '2023-08-29 20:03:20', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(326, 'In-00144-2023', 217, 60, NULL, '200', '2023-08-29 20:22:50', '2023-08-29 20:22:50', 7, 1, NULL, '2023-09-03', '0', '0'),
(327, 'In-00145-2023', 218, 107, 'Mattress delivered and customer paid 120 and 120 remains . total is 240', '120', '2023-08-29 20:26:13', '2023-08-29 20:26:13', 7, 1, NULL, '2023-08-30', '0', '0'),
(328, 'In-00146-2023', 219, 42, 'Topup 25', '295', '2023-08-29 20:39:16', '2023-08-29 20:39:16', 7, 1, NULL, '2023-08-31', '0', '0'),
(329, 'In-00147-2023', 220, 68, 'Customer want afternoon delivery please\r\nAnd Dark grey Plush please', '310', '2023-08-29 21:14:51', '2023-08-29 21:14:51', 7, NULL, 'inprocess', '2023-08-31', '0', '0'),
(330, 'In-00148-2023', 221, 79, NULL, '260', '2023-08-29 21:18:14', '2023-08-29 21:18:14', 7, 1, NULL, '2023-08-31', '0', '0'),
(331, 'In-00149-2023', 222, 79, NULL, '155', '2023-08-29 21:24:49', '2023-08-29 21:24:49', 7, 1, NULL, '2023-09-01', '0', '0'),
(332, 'In-00150-2023', 223, 58, 'Customer Wants 2 single size beds', '290', '2023-08-29 23:10:40', '2023-08-29 23:10:40', 7, 2, 'inprocess', '2023-08-31', '0', '0'),
(333, 'In-00151-2023', 224, 58, NULL, '140', '2023-08-29 23:16:21', '2023-08-29 23:16:21', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(334, 'In-00152-2023', 225, 58, NULL, '260', '2023-08-29 23:22:16', '2023-08-29 23:22:16', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(335, 'In-00153-2023', 226, 72, NULL, '160', '2023-08-29 23:39:14', '2023-08-29 23:39:14', 7, NULL, NULL, '2023-08-31', '0', '0'),
(336, 'In-00154-2023', 227, 58, NULL, '289', '2023-08-30 00:05:53', '2023-08-30 00:05:53', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(337, 'In-00155-2023', 228, 71, NULL, '230', '2023-08-30 00:25:30', '2023-08-30 00:25:30', 7, NULL, NULL, '2023-08-31', '0', '0'),
(338, 'In-00156-2023', 229, 52, NULL, '175', '2023-08-30 00:28:26', '2023-08-30 00:28:26', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(339, 'In-00157-2023', 229, 52, NULL, '145', '2023-08-30 00:30:28', '2023-08-30 00:30:28', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(340, 'In-00158-2023', 230, 41, 'Up stairs delivery £30 added', '360', '2023-08-30 00:55:13', '2023-08-30 00:55:13', 7, 1, NULL, '2023-08-31', '0', '0'),
(341, 'In-00159-2023', 231, 41, 'Confirmed 👍', '210', '2023-08-30 01:00:59', '2023-08-30 01:00:59', 7, 1, NULL, '2023-08-31', '0', '0'),
(342, 'In-00160-2023', 232, 67, NULL, '135', '2023-08-30 01:03:28', '2023-08-30 01:03:28', 7, 1, NULL, '2023-08-31', '0', '0'),
(343, 'In-00161-2023', 233, 67, NULL, '155', '2023-08-30 01:06:29', '2023-08-30 01:06:29', 7, 1, NULL, '2023-08-31', '0', '0'),
(344, 'In-00162-2023', 234, 41, 'Confirmed 👍', '150', '2023-08-30 01:10:27', '2023-08-30 01:10:27', 7, 1, NULL, '2023-08-31', '0', '0'),
(345, 'In-00163-2023', 235, 85, NULL, '290', '2023-08-30 01:21:37', '2023-08-30 01:21:37', 7, NULL, NULL, '2023-08-30', '0', '0'),
(346, 'In-00164-2023', 236, 52, NULL, '250', '2023-08-30 01:27:19', '2023-08-30 01:27:19', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(347, 'In-00165-2023', 237, 67, NULL, '200', '2023-08-30 01:27:59', '2023-08-30 01:27:59', 7, 1, NULL, '2023-08-31', '0', '0'),
(348, 'In-00166-2023', 238, 106, NULL, '280', '2023-08-30 01:35:46', '2023-08-30 01:35:46', 7, 1, NULL, '2023-08-31', '0', '0'),
(349, 'In-00167-2023', 239, 83, NULL, '460', '2023-08-30 01:44:04', '2023-08-30 01:44:04', 7, 2, 'inprocess', '2023-08-31', '0', '0'),
(350, 'In-00168-2023', 240, 83, NULL, '230', '2023-08-30 01:47:56', '2023-08-30 01:47:56', 7, 0, 'inprocess', '2023-08-31', '0', '0'),
(351, 'In-00169-2023', 241, 83, NULL, '399', '2023-08-30 01:51:32', '2023-08-30 01:51:32', 7, 2, 'inprocess', '2023-08-31', '0', '0'),
(352, 'In-00170-2023', 242, 83, NULL, '249', '2023-08-30 01:54:33', '2023-08-30 01:54:33', 7, -1, 'inprocess', '2023-08-31', '0', '0'),
(353, 'In-00171-2023', 243, 83, NULL, '154', '2023-08-30 01:56:24', '2023-08-30 01:56:24', 7, NULL, 'inprocess', '2023-08-31', '0', '0'),
(354, 'In-00172-2023', 244, 83, NULL, '184', '2023-08-30 01:58:28', '2023-08-30 01:58:28', 7, NULL, 'inprocess', '2023-08-31', '0', '0'),
(355, 'In-00173-2023', 245, 79, NULL, '360', '2023-08-30 02:16:09', '2023-08-30 02:16:09', 7, 1, NULL, '2023-08-31', '0', '0'),
(356, 'In-00174-2023', 246, 68, NULL, '125', '2023-08-30 02:35:37', '2023-08-30 02:35:37', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(357, 'In-00175-2023', 247, 63, NULL, '150', '2023-08-30 03:17:59', '2023-08-30 03:17:59', 7, 1, 'inprocess', '2023-08-31', '0', '0'),
(358, 'In-00176-2023', 248, 67, NULL, '190', '2023-08-30 03:18:59', '2023-08-30 03:18:59', 7, 1, NULL, '2023-08-31', '0', '0'),
(359, 'In-00177-2023', 249, 62, 'For Special order Company', '230', '2023-08-30 13:06:27', '2023-08-30 13:06:27', 7, 1, 'inprocess', '2023-09-01', '0', '0'),
(360, 'In-00178-2023', 250, 68, NULL, '240', '2023-08-30 15:25:18', '2023-08-30 15:25:18', 7, 1, 'inprocess', '2023-09-01', '0', '0'),
(361, 'In-00179-2023', 251, 62, 'For PDF Company', '165', '2023-08-30 15:46:04', '2023-08-30 15:46:04', 7, 1, 'inprocess', '2023-09-01', '0', '0'),
(362, 'In-00180-2023', 252, 42, NULL, '125', '2023-08-30 16:44:19', '2023-08-30 16:44:19', 7, 1, NULL, '2023-08-31', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_variation`
--

CREATE TABLE `order_variation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `design` longtext NOT NULL,
  `size` longtext NOT NULL,
  `headboard` longtext NOT NULL,
  `color_or_fabric` longtext NOT NULL,
  `matteres` longtext NOT NULL,
  `storage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_variation`
--

INSERT INTO `order_variation` (`id`, `order_id`, `design`, `size`, `headboard`, `color_or_fabric`, `matteres`, `storage`, `created_at`, `updated_at`) VALUES
(1, 20, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(2, 22, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(3, 23, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(4, 1, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(5, 2, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(6, 67, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(7, 68, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(8, 69, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(9, 70, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(10, 71, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(11, 72, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(12, 73, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(13, 74, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(14, 75, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(15, 76, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(16, 77, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(17, 78, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(18, 79, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(19, 80, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(20, 81, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(21, 82, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(22, 83, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(23, 84, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(24, 85, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(25, 86, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(26, 87, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(27, 88, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(28, 89, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(29, 90, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(30, 91, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(31, 92, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(32, 93, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(33, 94, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(34, 95, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(35, 96, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(36, 97, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(37, 98, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(38, 99, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(39, 100, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(40, 101, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(41, 102, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(42, 103, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(43, 104, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(44, 105, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(45, 106, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(46, 107, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(47, 108, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(48, 109, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(49, 110, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(50, 111, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(51, 112, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(52, 113, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(53, 114, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(54, 115, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(55, 116, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(56, 117, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(57, 118, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(58, 119, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(59, 120, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(60, 121, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(61, 122, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(62, 123, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(63, 124, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(64, 125, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(65, 126, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(66, 127, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(67, 128, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(68, 129, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(69, 130, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(70, 131, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(71, 132, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(72, 133, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(73, 134, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(74, 135, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(75, 136, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(76, 137, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(77, 138, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(78, 139, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(79, 140, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(80, 141, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(81, 142, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(82, 143, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(83, 144, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(84, 145, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(85, 146, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(86, 147, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(87, 148, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(88, 149, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(89, 150, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(90, 151, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(91, 152, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(92, 153, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(93, 154, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(94, 155, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(95, 156, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(96, 157, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(97, 158, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(98, 159, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(99, 160, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(100, 161, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(101, 162, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(102, 163, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(103, 164, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(104, 165, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(105, 166, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(106, 167, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(107, 168, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(108, 169, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(109, 170, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(110, 171, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(111, 172, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(112, 173, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(113, 174, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(114, 175, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(115, 176, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(116, 177, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(117, 178, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(118, 179, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(119, 180, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(120, 181, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(121, 182, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(122, 183, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(123, 184, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(124, 185, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(125, 186, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(126, 187, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(127, 188, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(128, 189, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(129, 190, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(130, 191, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(131, 192, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(132, 193, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(133, 194, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(134, 195, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(135, 196, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(136, 197, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(137, 198, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(138, 199, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(139, 200, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(140, 201, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(141, 202, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(142, 203, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(143, 204, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(144, 205, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(145, 206, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(146, 207, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(147, 208, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(148, 209, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(149, 210, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(150, 211, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(151, 212, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(152, 213, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(153, 214, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(154, 215, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(155, 216, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(156, 217, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(157, 218, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(158, 219, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(159, 220, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(160, 221, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(161, 222, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(162, 223, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(163, 224, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(164, 225, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(165, 226, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(166, 227, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(167, 228, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(168, 229, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(169, 230, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(170, 231, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(171, 232, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(172, 233, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(173, 234, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(174, 235, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(175, 236, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(176, 237, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(177, 238, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(178, 239, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(179, 240, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(180, 241, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(181, 242, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(182, 243, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(183, 244, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(184, 245, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(185, 246, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(186, 247, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(187, 248, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(188, 249, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(189, 250, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(190, 251, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(191, 252, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(192, 253, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(193, 254, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(194, 255, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(195, 256, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(196, 257, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(197, 258, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(198, 259, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(199, 260, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(200, 261, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(201, 262, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(202, 263, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(203, 264, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(204, 265, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(205, 266, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(206, 267, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(207, 268, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(208, 269, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(209, 270, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(210, 271, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(211, 272, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(212, 273, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(213, 274, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(214, 275, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(215, 276, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(216, 277, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(217, 278, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(218, 279, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(219, 280, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(220, 281, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(221, 282, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(222, 283, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(223, 284, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(224, 285, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(225, 286, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(226, 287, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(227, 288, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(228, 289, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(229, 290, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(230, 291, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(231, 292, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(232, 293, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(233, 294, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(234, 295, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(235, 296, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(236, 297, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(237, 298, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(238, 299, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(239, 300, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(240, 301, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(241, 302, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(242, 303, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(243, 304, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(244, 305, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(245, 306, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(246, 307, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(247, 308, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(248, 309, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(249, 310, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(250, 311, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(251, 312, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(252, 313, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(253, 314, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(254, 315, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(255, 316, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(256, 317, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(257, 318, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(258, 319, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(259, 320, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(260, 321, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(261, 322, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(262, 323, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(263, 324, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(264, 325, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(265, 326, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(266, 327, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(267, 328, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(268, 329, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(269, 330, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(270, 331, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(271, 332, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(272, 333, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(273, 334, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(274, 335, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(275, 336, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(276, 337, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(277, 338, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(278, 339, 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL),
(279, 340, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(280, 341, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(281, 342, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(282, 343, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(283, 344, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(284, 345, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(285, 346, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(286, 347, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(287, 348, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(288, 349, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(289, 350, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(290, 351, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(291, 352, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(292, 353, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(293, 354, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(294, 355, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(295, 356, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(296, 357, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(297, 358, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(298, 359, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(299, 360, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(300, 361, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL),
(301, 362, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alisher42828@gmail.com', '$2y$10$dtFklhXJ6a4htJ.rcrf8feww68rk8GNWhL1blCWZ.uE7H6defU4cy', '2023-08-26 23:01:06'),
('hmuhammadidrees62@gmail.com', '$2y$10$TXlzok9q9tXXtLTvt2daaek0Gz5gDSQfdiNi5N46qaBzYEyRxLWCS', '2023-08-27 21:20:41'),
('myouis.my@gmail.com', '$2y$10$oGyA7ciao30uPurb0bMdbuUhrhYLqAh6pcj7A6/sai9iE2vJNOERG', '2023-08-27 01:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `payments_invoices`
--

CREATE TABLE `payments_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments_invoices`
--

INSERT INTO `payments_invoices` (`id`, `role_id`, `links`, `note`, `created_at`, `updated_at`, `user_id`) VALUES
(22, '4', 'https://drive.google.com/drive/folders/1NnBd1shEslquNMhvkw3VcT_v1B8IsYzZ?usp=drive_link', 'Safyan Anwar Team order and commission update.&nbsp;', '2023-08-29 04:21:52', '2023-08-29 04:21:52', '46'),
(18, '4', 'https://drive.google.com/drive/folders/1Hu0zSdqW0nvO8SP02raWFzmsZKEDf-G3?usp=drive_link', 'Yasir Imran Team order and Commission update.&nbsp;', '2023-08-29 04:04:32', '2023-08-29 04:04:32', '86'),
(19, '4', 'https://drive.google.com/drive/folders/151sJ52_1Hxrza5INuexzqn7puHOgmiUW?usp=drive_link', 'Afridi Team order and commission update', '2023-08-29 04:08:57', '2023-08-29 04:08:57', '49'),
(20, '4', 'https://drive.google.com/drive/folders/1LQKnKoegHilDzpcCOu9dYz5lpD9_T6oz?usp=drive_link', 'Fatima Team order And Commission update&nbsp;', '2023-08-29 04:11:26', '2023-08-29 04:11:26', '48'),
(21, '4', 'https://drive.google.com/drive/folders/1pQcb0h2ycDTuX4eDt0mI4mmCYlcbre2z?usp=drive_link', 'M Adnan Team order and Commission update.&nbsp;', '2023-08-29 04:18:49', '2023-08-29 04:18:49', '47'),
(17, '4', 'https://drive.google.com/drive/folders/1wk2xbNDfBHuu7riKVhrY1dmhquYBOOl6?usp=sharing', 'Zubair Zulifiqar team order and commission update.&nbsp;', '2023-08-28 02:54:36', '2023-08-28 02:54:36', '41'),
(13, '4', 'https://drive.google.com/drive/folders/1nAVUakRhwLr2bV51yBTWXsdRcj9w-Flx?usp=sharing', 'Mohsin Nawaz Team order and commission update.&nbsp;', '2023-08-28 02:43:13', '2023-08-28 02:43:13', '71'),
(14, '4', 'https://drive.google.com/drive/folders/1tH5MQmmwQTtKQx5ihpRrdn8zetoAKHD6?usp=sharing', 'Muhammad Ahmad chughtai team order and commission update&nbsp;', '2023-08-28 02:45:35', '2023-08-28 02:45:35', '40'),
(15, '4', 'https://drive.google.com/drive/folders/1-vN7HYNAiZkvyZBBghZvD-hYLWQxc9_n?usp=sharing', 'Samreen Awan Team order and commission update.&nbsp;', '2023-08-28 02:48:12', '2023-08-28 02:48:12', '42'),
(16, '4', 'https://drive.google.com/drive/folders/1vSMGDIX4TdHPU9FhKFMRO3h3PQe8wLvN?usp=sharing', 'Tanjeena Kiyani Team order and commission update.&nbsp;', '2023-08-28 02:53:08', '2023-08-28 02:53:08', '69'),
(10, '4', 'https://drive.google.com/drive/folders/16G9b7v6qNbOW1yZUGrtBiYnznBrTT1Y3?usp=sharing', 'Amir Farooq Buzdar team order and commission update.&nbsp;', '2023-08-28 02:34:38', '2023-08-28 02:34:38', '60'),
(11, '4', 'https://drive.google.com/drive/folders/1T3QCUPkJzDt1BprZ6rJdu16A69ERVaZA?usp=sharing', 'Hamza Farooq Buzdar team order and commission update&nbsp;', '2023-08-28 02:36:14', '2023-08-28 02:36:14', '72'),
(12, '4', 'https://drive.google.com/drive/folders/12mJpL3oe4-sSU6H6uScKeFnbjJfOvDGT?usp=sharing', 'Mohmmad Usman Team order and commission update.', '2023-08-28 02:41:09', '2023-08-28 02:41:09', '63'),
(9, '4', 'https://drive.google.com/drive/folders/1M7vSOa3QG7DWmieKqU0BOUsfT9_vrWkc?usp=sharing', 'Ahmad Prince team order and commission update.', '2023-08-28 02:33:01', '2023-08-28 02:33:01', '70'),
(8, '4', 'https://drive.google.com/drive/folders/1HwOXMvS7MXPnOjb0e2zGmhIws5fVCuDs?usp=sharing', 'For Mahaz Ullah team order and commission updates.&nbsp;', '2023-08-28 02:18:29', '2023-08-28 02:18:29', '62'),
(23, '4', 'https://drive.google.com/drive/folders/1EeE5n6T4Kd0TB5p7ereg7zoJnrS7YwHl?usp=drive_link', 'Hafiz Muhammad Idrees Team order and commission update', '2023-08-29 04:24:58', '2023-08-29 04:24:58', '45'),
(24, '4', 'https://drive.google.com/drive/folders/1C9kCwUXXpjA3Aoiy8n5O-a6LXwDQbQ1T?usp=drive_link', 'Afaq Ashraf Team order and commission update&nbsp;', '2023-08-29 04:43:13', '2023-08-29 04:43:13', '44'),
(25, '4', 'https://drive.google.com/drive/folders/1r7dF-v86bOhk_-GkDQrwuxXlifaXpAbu?usp=drive_link', 'Rabia Rashid Team order and commission update.&nbsp;', '2023-08-29 04:47:20', '2023-08-29 04:47:20', '50'),
(26, '4', 'https://drive.google.com/drive/folders/1KuZtfX7cww4s3_dEwiRUXZFnm7wE7w4J?usp=drive_link', 'Sania Team order and commission update&nbsp;', '2023-08-29 04:50:53', '2023-08-29 04:50:53', '51');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'View User', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(2, 'Create User', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(3, 'Update User', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(4, 'Delete User', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(5, 'View Role', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(6, 'Create Role', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(7, 'Update Role', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(8, 'Delete Role', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(9, 'View Product', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(10, 'Create Product', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(11, 'Update Product', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(12, 'Delete Product', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(13, 'View Product Variation', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(14, 'Create Product Variation', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(15, 'Update Product Variation', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(16, 'Delete Product Variation', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(17, 'View Order', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(18, 'Create Order', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(19, 'Update Order', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(20, 'Delete Order', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(21, 'View Customer', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(22, 'Create Customer', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(23, 'Update Customer', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(24, 'Delete Customer', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(25, 'View Coupen', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(26, 'Create Coupen', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(27, 'Update Coupen', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(28, 'Delete Coupen', 'web', '2023-04-06 04:58:23', '2023-04-06 04:58:23'),
(29, 'View File Upload', 'web', '2023-05-04 09:43:57', '2023-05-04 09:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` longtext DEFAULT NULL,
  `alert` varchar(255) NOT NULL DEFAULT '0',
  `seen` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`, `updated_at`, `country`, `alert`, `seen`) VALUES
(7, 'Bed And Mattress', '300', '2023-08-28 03:07:52', '2023-08-28 03:07:52', '[\"UK\"]', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `design` longtext DEFAULT NULL,
  `size` longtext DEFAULT NULL,
  `headboard` longtext DEFAULT NULL,
  `color_or_fabric` longtext DEFAULT NULL,
  `matteres` longtext DEFAULT NULL,
  `storage` longtext DEFAULT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `design`, `size`, `headboard`, `color_or_fabric`, `matteres`, `storage`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '[\"Sleigh\"]', '[\"4ft\"]', '[\"diamond\"]', '[\"blue plush\"]', '[\"simple\"]', '[\"gaslift\"]', 2, '2023-04-28 04:18:08', '2023-04-28 04:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', 'web', '2023-04-06 04:58:28', '2023-04-06 05:59:47'),
(3, 'Vendor', 'web', '2023-04-28 04:23:14', '2023-05-04 18:46:54'),
(4, 'Agent', 'web', '2023-05-02 16:49:22', '2023-05-04 18:47:05'),
(5, 'Support', 'web', '2023-06-01 17:16:18', '2023-06-01 17:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(2, 5),
(3, 2),
(3, 5),
(4, 2),
(4, 5),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(17, 3),
(17, 4),
(18, 2),
(18, 3),
(18, 4),
(19, 2),
(19, 3),
(19, 4),
(20, 2),
(20, 3),
(20, 4),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alert` varchar(255) NOT NULL DEFAULT '0',
  `seen` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alert`, `seen`, `image`) VALUES
(38, 'Ahmad Junaid Ali', 'ahmadjunaidali305@gmail.com', NULL, '$2y$10$h31mGV0ZR5Woc7qfDwwfeu6o1RTJ.luMHPTVOvRpyCCsf1Hf51rtS', 'eVkSsPCKGf0xAh4Ud39jZP9KpCOAmuGOQw5YOgu5azUBB9ThitK5WnxyIYYH', '2023-08-26 18:17:25', '2023-08-29 19:53:00', '1', '0', '169331358011.png'),
(40, 'Muhammad Ahmad chughtai', 'ahmedchughtai325@gmail.com', NULL, '$2y$10$WvEQMcvm2AGfcFpqYZzbw.VUuYH0wRmTmnhe09oTn7.anr2WB7l0e', NULL, '2023-08-26 18:44:19', '2023-08-26 21:35:35', '1', '0', NULL),
(41, 'Zubair Zulfiqar', 'zubairzulfiqar275@gmail.com', NULL, '$2y$10$T8xcG6x0m2h36t8U6J7C/OwxGAXv46UglNQQ004G10YfCH8n9Xgr6', '2vze2Cy5n0e4JZ6M9FCzhYxD6dwrXoZxH4TKtBgcYmhgu4KtOMc9Za7BXswy', '2023-08-26 18:47:52', '2023-08-26 21:36:59', '1', '0', NULL),
(42, 'Samreen  Awan', 'muzalfa97@gmail.com', NULL, '$2y$10$TC09.FiGOnyQVQL51/uumesqKDXiE.40V4RSp1NTFU4RUsfkGJx0y', 'jxWAZb7vxK1R0HRvBQSM0ziMxqK39TUWBkgd8H1owR9WZHZdjCaq16oNTfgF', '2023-08-26 18:50:22', '2023-08-26 18:50:22', '0', '0', NULL),
(43, 'Hafiz Abd ur Rehman', 'abduurahmannn@gmail.com', NULL, '$2y$10$/g.RQUB5I/oK9IEdd8h0VuPqywaJZUXvKJS3Z7LS.cV8HlaSb4dkC', 'dkzVwbe6Xar8JnGzDL36r1FSsmt8TcQnLf2elapftox5FepvcgChvaFFbiAQ', '2023-08-26 18:55:03', '2023-08-26 21:02:17', '0', '0', NULL),
(44, 'Afaq Ashraf', 'faaqch3@gmail.com', NULL, '$2y$10$p9U4uqqELCfHQdi.3bEWxe5OthcQ4nxgLL6ib.fFzOUiQc.jmjD2u', NULL, '2023-08-26 19:02:12', '2023-08-26 19:02:12', '0', '0', NULL),
(45, 'Hafiz Muhammad idrees', 'hmuhammadidrees62@gmail.com', NULL, '$2y$10$5dIkFaJwgfsq6ivsd7JU7uf4qBvg9g64NlS5o48BM5lC1mAyeSsom', NULL, '2023-08-26 19:04:05', '2023-08-26 19:04:05', '0', '0', NULL),
(46, 'Safyan Anwar', 'safyananwar76@outlook.com', NULL, '$2y$10$TKsZoNBundejo/AI/9LXsurGxtb/iz2m1yvp56M9i5KBeZD3acYfu', 'hHsvGdptzP05143cWBQyVeGZG5nZBl10PvW9FHzEgfePZ4JrnzUahoAqFQYl', '2023-08-26 19:05:34', '2023-08-26 19:05:34', '0', '0', NULL),
(47, 'M Adnan', 'naseermadnan40@gmail.com', NULL, '$2y$10$J2Yk1ZFb0XSisLmK1VE75ejjzFf8WQhGwgWDYVUvvZzqVCNO5YG7O', 'gVk4PjGQvHl0DoBUgVf7eko58K9XcJy4PhCYvxWtRj6ZnOFtpf81K1Qsk6nB', '2023-08-26 19:21:42', '2023-08-26 19:21:42', '0', '0', NULL),
(48, 'Fatima', 'aliu46603@gmail.com', NULL, '$2y$10$pr8uf9ORW4TP8McNFeVcAejyOnS4Tc91vkQn6Xl0TUSMY/du1hTlq', NULL, '2023-08-26 19:23:33', '2023-08-26 19:23:33', '0', '0', NULL),
(49, 'Afridi', 'qasimbangash077@gmail.com', NULL, '$2y$10$4croo0E8qCelgXa0SfZMY.y4gWdlFwnPYXE7MEk/3FTQ/sXmhmWKC', NULL, '2023-08-26 19:25:22', '2023-08-26 19:25:22', '0', '0', NULL),
(50, 'Rabia Rashid', 'adnanrashid379@gmail.com', NULL, '$2y$10$aa1uzYZHvdCS9RKIke8CbeQHECJa4b33Eqqs4dArLbs9EGqBvlHDS', NULL, '2023-08-26 19:26:29', '2023-08-26 19:26:29', '0', '0', NULL),
(51, 'Sania', 'saniakousar163@gmail.com', NULL, '$2y$10$eeTYxFS1UAz9Ne8hwZ.6m.rCpeszPmTyExBrO2uTShDRnlNnrSU4e', NULL, '2023-08-26 19:27:40', '2023-08-26 19:27:40', '0', '0', NULL),
(52, 'Ali sher', 'alisher42828@gmail.com', NULL, '$2y$10$Edz.W23vVrf1gwjgHWfTMO/QZOdjFTyu6m/OtbMyV5NHJdeuItRKa', 'ZTDOo3sF8uvoA9h3OtRBSFckrscaIC39ZVzBhOcJsLjVHxaRScQt2A59fQtl', '2023-08-26 19:28:59', '2023-08-26 19:28:59', '0', '0', NULL),
(53, 'Sir Abbas', 'muhammadabbas11@gmail.com', NULL, '$2y$10$oUabtWU6Q.jPnPzMdnYEYuMMJURFk0d6gLZE1WeuvwK9gMLjmhVHO', 'o8DUz9rrHbfxGI1bVmbCBH9eYLfqDDu04i5jExZ4a5qdEQMf4BrvrCCsZaNm', '2023-08-26 19:30:11', '2023-08-26 19:30:11', '0', '0', NULL),
(54, 'Muhammad Qasim', 'qasimali3848@gmail.com', NULL, '$2y$10$itzCb2voJI.b6/6Pw2aneuAGhDF9jZFdcMJTEeW2bKQ2CSSJXvy0.', 'x1raNn94KHhAPxW3AkbcpqQfzXKFlzThqSMy3qcR4ffKJZLV6qRamCctceFR', '2023-08-26 19:31:48', '2023-08-26 19:31:48', '0', '0', NULL),
(55, 'Saad Ul Rehman', 'psaad3317@gmail.com', NULL, '$2y$10$BolGRIQQ/A6x1h0lI7/GHOAUqo0Moykk9NTtcuzGenK0LAT5Ck71K', NULL, '2023-08-26 19:33:06', '2023-08-26 19:33:06', '0', '0', NULL),
(56, 'SAJJAD HUSSAIN', 'sajjad130495@gmail.com', NULL, '$2y$10$vabCwtMyJirheBxh7Ledaen2bpuv.yf95KwlAX6qfIYhscTC4VLB2', NULL, '2023-08-26 19:34:12', '2023-08-26 19:36:01', '0', '0', NULL),
(57, 'Muhammad Asif', 'asifdogar9004@gmail.com', NULL, '$2y$10$Tt6DbRzwgOr8GM8vm913mulkMrpTzblj0UYIGLAIQ.pwyjINgh7wm', NULL, '2023-08-26 19:37:26', '2023-08-26 19:37:26', '0', '0', NULL),
(58, 'Abdul Rehman', 'abdulrehhman711@gmail.com', NULL, '$2y$10$Hq5D0vTRfmrF6ET0765MNu5rq6uVrkhcKhCbmoFXdS1R2jZuYH6S6', 'biyMVGvTMD5e1J5g1GLAd6k4EjkzZJJzOSXDtHSeAT8UawDNFlyecH2TksRI', '2023-08-26 19:38:48', '2023-08-26 19:38:48', '0', '0', NULL),
(59, 'Hussnain Umer', 'hussnainumer3233@gmail.com', NULL, '$2y$10$0aKOTeZprINOyOXuFmWRwOdRNgMjtFMM1cSIzZKQd/Kl6GH7sJKXy', 'n5z1tBsIaANRMtIbmFI7n70bpfeHGBXicT7juOx64A6Tsw8TUUEfzq79PppD', '2023-08-26 19:53:56', '2023-08-26 19:53:56', '0', '0', NULL),
(60, 'Amir farooq buzdar', 'amirf540@gmail.com', NULL, '$2y$10$VeiDmVkUuuDXZVa7NzKkPOdbLFv09LGEcLZzoXtICo4qnW/ptHK5y', '7nDAxHvpPUzuEqdsfaENOfKjEwtvW8v4tLj8Gdb9XyslV0man0EDjdUjna7D', '2023-08-26 20:02:37', '2023-08-26 20:02:37', '0', '0', NULL),
(61, 'Amir Butt', 'aamirbutt341@gmail.com', NULL, '$2y$10$7gxlBN8LSMla4DJZci5KtuLq0.zBCGCJFVmfcQFL5JT1x0OY7QOnG', NULL, '2023-08-26 20:57:54', '2023-08-26 20:57:54', '0', '0', NULL),
(62, 'Mahaz Ullah', 'dhtc585@gmail.com', NULL, '$2y$10$Rai7zFclB4foxXy2KWOfo.xK3YrnkukZkboA0halLeAlrUV.Xkf7S', 'TIgrffCQqtKTM9lBAXcdM9fkavSuEVKYHk0nm03kWEvWZxCcMSkJZw6Gj22t', '2023-08-26 21:11:58', '2023-08-26 21:11:58', '0', '0', NULL),
(63, 'Muhmmad Usman', 'usmansana031@gmail.com', NULL, '$2y$10$PcPauFggvdlbkoGkGkdz7u6AgHq.pewlfsM08ZTxCEAQtlkiup08C', 'Xxw5zhgyYybNDNe4TjrYMM28pydq4EjiRZ3WgaJseO4WJHIOPGHB4AAFAJma', '2023-08-26 21:13:47', '2023-08-26 21:13:47', '0', '0', NULL),
(64, 'Muhammad Ameer Hamza', 'm.ameerhamza356@gmail.com', NULL, '$2y$10$lP5ikZEuxFxqB7Eag3DBDOO30gnxBMj/o9krmiPq3bYynoe.o4xeu', NULL, '2023-08-26 21:22:28', '2023-08-26 21:22:28', '0', '0', NULL),
(65, 'Adeel Ahmed', 'Adeelahmedahmedahmed92@gmail.com', NULL, '$2y$10$bnGYMIB/BpJng.HImXWE5Oz0.F58h.8pFPbtOxDYWldz2.AOr4kJW', NULL, '2023-08-26 21:23:49', '2023-08-26 21:23:49', '0', '0', NULL),
(67, 'Mujeeb', 'mujeebayub302@gmail.com', NULL, '$2y$10$D5Gjou2LrmvIGE/LfrVEOemSNjiDqA4AQyDycT4XbcsjgyTSiGecG', 'ercpkgrcAPnAsIY3mR9qH54eWkAR4HWJqCXshbAv36LhmVTvSbhWeQ3z1HwO', '2023-08-26 21:25:15', '2023-08-26 21:25:15', '0', '0', NULL),
(68, 'Amber', 'xhksara@gmail.com', NULL, '$2y$10$0M1eHscjw/sp/iOyHjPk8ehQQHQTzC.OO.0NnY9OA2lHiFi4TiNGO', 'nPrhWlGahnGBsu1VqtONM0NUPdUkyu8nJU8P7nDJlOKrCzOCw6C2YTXOvi3S', '2023-08-26 21:26:21', '2023-08-26 21:26:21', '0', '0', NULL),
(69, 'Tanjeena Kiyani', 'Rubabkiani94@gmail.com', NULL, '$2y$10$VJK2S3clT2IohztRajOVee9WydC.FZM1qR7yyT8/MnnNA2.Luyd0S', NULL, '2023-08-26 21:48:48', '2023-08-26 21:48:48', '0', '0', NULL),
(70, 'Ahmad Prince', 'ahmad22prince26@gmail.com', NULL, '$2y$10$V1wXTRN4ooMUU45qQwKu7uIeJWnhfohnpAwOoElqLvXzJGm2/oiMy', NULL, '2023-08-26 22:10:29', '2023-08-26 22:10:29', '0', '0', NULL),
(71, 'Mohsin Nawaz', 'mohsinbaloch4470@gmail.com', NULL, '$2y$10$XNdC3QstD2e10/Benh2Fte38Mmas7/dbupNu0Wq0wlev9hCF7nEzC', '6xxDck2ZvQKbNIfeIdcDQCXVrIhVETJk7DxoQ0tpvoWVa18A9m2b7imfRZ6s', '2023-08-26 22:13:36', '2023-08-26 22:13:36', '0', '0', NULL),
(72, 'Hamza farooq', 'hamzafarooqbuzdar123@gmail.com', NULL, '$2y$10$I17MITOywAabhNe6jrgbaemR1reqN8PKXnHrGqA/.SlAdKf8ZFex2', NULL, '2023-08-26 23:05:58', '2023-08-26 23:05:58', '0', '0', NULL),
(73, 'Ikhlaq Hussain', 'ikhlaq.ik123@gmail.com', NULL, '$2y$10$RwJsuIgggaIBWFaHdYtR6OxdUqvZm4gqRDbxlx6S7ui9H.FIdavPG', NULL, '2023-08-26 23:38:38', '2023-08-26 23:38:38', '0', '0', NULL),
(74, 'Hassan', 'kalyarhassan17@gmail.com', NULL, '$2y$10$o8Ow6/mZT652qnPi5wIebOn37w.dqhPbbEMtlloKWuylhojY7klgS', 'OVR6gLKb18DRXKF1SdCjMPwjIwadYu4OKPUjr3uLjht9F1tvQW31bkL8SvO0', '2023-08-26 23:49:39', '2023-08-26 23:49:39', '0', '0', NULL),
(75, 'Danish Riaz', 'Bajwajutt787@gmail.com', NULL, '$2y$10$4nTZpqBzw4Xcd1MV9V3AM./nfok5zRTCyPMAdzxtv1SBLTMk2phDa', NULL, '2023-08-26 23:51:28', '2023-08-26 23:51:28', '0', '0', NULL),
(76, 'Mohsin Ali', 'ma4803825@gmail.com', NULL, '$2y$10$Bt1DHWlGF5YoUbBeDmvJIusf3YjBXFLie6lhULWErCyQ/07qBdCDe', NULL, '2023-08-26 23:55:29', '2023-08-26 23:55:29', '0', '0', NULL),
(77, 'Sajoo', 'Sajookhann.22@gmail.com', NULL, '$2y$10$PgbBMMUOQRTsimaRJVKwmuUDLiQfNBPiRDpMTtw3ZJY1c7ARIaJyS', NULL, '2023-08-26 23:57:34', '2023-08-26 23:59:15', '0', '0', NULL),
(78, 'Muzamil', 'muzamiljanjua22@gmail.com', NULL, '$2y$10$b7z2cF5MRy85AeSSFzE7TutdjrZnt6kXmyqLdb5/au1ODdQ04ytjO', 'bZ2Hi7bJy4hFMYWyJKvGvD66WorRWwypkIkMQLiv8aPtQOYaqbhlF6XumRE2', '2023-08-27 00:00:27', '2023-08-27 00:00:27', '0', '0', NULL),
(79, 'Natasha', 'merubch890@gmail.com', NULL, '$2y$10$Os0M18d/gxm.MhxgfLu4pOLZX3n80Up.N/3xsymGKRgtsdnDtPG/C', 'qMgCiQVB2Ab1Iz1XBJI74YBO4NB1s8QQ1rnn9HKfD8jRMFyfpYsn1oyXtHnC', '2023-08-27 00:02:22', '2023-08-27 00:02:22', '0', '0', NULL),
(80, 'Muhammad Hussam', 'HussamEcom@gmail.com', NULL, '$2y$10$vT8tFTXLA9DxW23HkRCYkOvkscopHkCZWmc5lmqpOSpv4vHDBcAH2', NULL, '2023-08-27 00:05:37', '2023-08-27 00:05:37', '0', '0', NULL),
(81, 'Syed shahmeer', 'Sbadshah064@gmail.com', NULL, '$2y$10$gYmrxWhFF.p89T6TzliOLO5Zeh6HawB8aoWBZy0puoV5kTUyikwTS', NULL, '2023-08-27 00:07:58', '2023-08-27 00:07:58', '0', '0', NULL),
(82, 'Areeba', 'areebazubair74@gmail.com', NULL, '$2y$10$GFbyjci7EQH27luYYRyFquDRStPs/cvQ/BCYrOfzG4vpe8vRGdFH2', NULL, '2023-08-27 00:11:11', '2023-08-27 00:11:11', '0', '0', NULL),
(83, 'Huzaifa younis', 'myouis.my@gmail.com', NULL, '$2y$10$Bw8Q5Iv62VO.sLuLdQWkuu30KT98un3dLKeP7oiwn3HAsidgTOfOC', 'p8rncCAAbN1aMxC2bomchAZJcyQJ4NyU3JivOaDUOWiUJXrNKKO3zG7Ap2qV', '2023-08-27 00:13:43', '2023-08-27 00:13:43', '0', '0', NULL),
(84, 'Mashood Alam', 'mashoodmian22@gmail.com', NULL, '$2y$10$6zMMP8DCChHx9aphIwFfU.GwumwkBLGBfv6k3U1IGhoy90tZv98xm', '24NzOo82NR6VLWGBMUo0JH21wGUJQbFSWPhtExSqn6XXvNDmPSK92u0S3LF6', '2023-08-27 00:15:01', '2023-08-27 00:15:01', '0', '0', NULL),
(85, 'Fiza Ali', 'ali_fiza14@yahoo.com', NULL, '$2y$10$biPooD0/bAUei6FgxbrqGuztRaS3LaWWW.aVVQxFf68UJnT7t3LSq', 'n9rn3x8VZXfSN77WIoFBbmjmVNI7xrDBHZ3SsN4nL8fkcZGvUHpjJi9nP1T4', '2023-08-27 00:25:26', '2023-08-27 00:25:26', '0', '0', NULL),
(86, 'Yasir Imran', 'Balawal51@gmail.com', NULL, '$2y$10$q7BAnTLH4tmnT7j4fRxU8Oa1QkV76V4DWNMz58GgciZn9S1M9jEIO', NULL, '2023-08-27 00:27:44', '2023-08-27 00:27:44', '0', '0', NULL),
(87, 'Rehman Hussain', 'rehmanhusssain012@gmail.com', NULL, '$2y$10$C6FbGBm6biOD2zcJNNaV9eI3PEwQoe463w5EgdnSMEj2.Hjx0Dexu', NULL, '2023-08-27 00:32:42', '2023-08-27 00:32:42', '0', '0', NULL),
(88, 'Ayyan', 'scorpianboy007@gmail.com', NULL, '$2y$10$FT7u89BETlBgfS9is8I/uOGvQDQfa1i/Bnfk6Lxb9iRu.Ng9vbiy2', NULL, '2023-08-27 00:33:46', '2023-08-27 00:33:46', '0', '0', NULL),
(89, 'Saqib Saleem', 'ranasaqibsaleem228@gmail.com', NULL, '$2y$10$Nr2iq0oL8EsaD4M3ZgQZt.y/Mz/Q8oAjWOXNaNTmxWt/Qz5V2QXO.', NULL, '2023-08-27 00:34:56', '2023-08-27 00:34:56', '0', '0', NULL),
(90, 'Hammad shafique', 'rhtigerranahamad@gmail.com', NULL, '$2y$10$5LkMnaGEACRz2TNgv6aHEO/D2VHlRkUMqKUyJruKS96X0t94uM5Cm', '6BBr8AriNrtMB8h1TClgRAtFNWrYGn7IQtF0poqc2OkzzaUmAIReWNcgrIiK', '2023-08-27 00:36:39', '2023-08-27 00:36:39', '0', '0', NULL),
(91, 'Malik Shahid', 'malikg1505025@gmail.com', NULL, '$2y$10$AZD.9m/bBDqDGQY/i3cmuONyhSUnXhPVHreiA7wZ1Z54ljedwNh9m', 'T6CMJkbwLzXXadWPNiUcKCe6bGpDByZhYC8ofMLmK1ZqAlypmATDdCzjJzr5', '2023-08-27 00:40:06', '2023-08-27 00:40:06', '0', '0', NULL),
(92, 'Misbah Malik', 'malikmisbah981@gmail.com', NULL, '$2y$10$Vt.y2upgB6nQjPuSRH8YfeZEfSvHtmqO9WhRJIlgIZFHU7MeYReeq', NULL, '2023-08-27 02:56:24', '2023-08-27 02:56:24', '0', '0', NULL),
(93, 'Ali raza', 'Fiza85408@gmail.com', NULL, '$2y$10$EQ/XLkXNZgeWZ3srAfr5uuYK/26k7fgG3jSgVAxL49CgLwtP4ZW5.', NULL, '2023-08-27 02:57:50', '2023-08-27 02:57:50', '0', '0', NULL),
(94, 'Aqib khan', 'aqibkhanam0@gmail.com', NULL, '$2y$10$sjSFUllxznCZ.uIWtTL8ZuJryso1O9ZoyGQeYvpEikuY/0VyFGAKq', NULL, '2023-08-27 02:59:11', '2023-08-27 02:59:11', '0', '0', NULL),
(95, 'Kamran Raza', 'raxxa.312@gmail.com', NULL, '$2y$10$ccSKwHmueQaKmsRfh0WZX.qOaJjHFwcWCUYNmnWsAwrmeIMOI4iry', 'Lq26tJufzHKYmPJ4MsmYC5vtvc6pKAEx7n7AeLGvVj7SwzrqKWjbSFjlyjZ0', '2023-08-27 03:01:34', '2023-08-27 03:01:34', '0', '0', NULL),
(96, 'Habib Khan', 'hk919234@gmail.com', NULL, '$2y$10$jjlO93cq8olenZ8lyZx50uZPSnbwp66Z1nwh/zoM9g6XAli5UY7UC', 'EkUd81DhCfZYsZabh2wbkD2xwMyugHl22WVpbMpVYWxAqCMY0nZ6VM07JLWj', '2023-08-27 03:02:41', '2023-08-27 03:02:41', '0', '0', NULL),
(97, 'Tahir Nabeel', 'tahirnabeel00786@gmail.com', NULL, '$2y$10$9ksJlr9bmbGbpJ/hdh5/tO4tmlXhjDtV2jUr5MfuvsoS7YSGBuQ92', NULL, '2023-08-27 08:57:38', '2023-08-27 08:57:38', '0', '0', NULL),
(98, 'Muhammad Rizwan', 'muhammadrazwan550@gmail.com', NULL, '$2y$10$4nSwGLJ016nPHItgVApr3OQnyKppHbFrDKpJm01wjYUiuM6vmMHRq', '0RNLVxCJir4s2RvjXsdi4pybT9uWMfJIOtwBNL7IiJlp3G95zqyVQmEePsP5', '2023-08-27 15:18:14', '2023-08-27 15:18:14', '0', '0', NULL),
(99, 'Muhammad Ameer Ali', 'muhammadameerali02@gmail.com', NULL, '$2y$10$nGoNc9Weq9AOrEr7.17da..kSdxPIWCLf/Hsf0GHv1W2vzA60EpPu', NULL, '2023-08-28 05:04:29', '2023-08-28 05:04:29', '0', '0', NULL),
(100, 'Muhammad Danyal Yaseen', 'danyalteach786@gmail.com', NULL, '$2y$10$nGixkgrDP/5S0GZxOnIEL.LMOb2VW8jtxBJJejqqG5iaE1w60rSZG', '57MgZJELl2peQM6zFClewox78plnvHRGT3e9aDhmEp0DQ4Pc97CvXnkPEM9q', '2023-08-28 05:08:50', '2023-08-28 05:08:50', '0', '0', NULL),
(101, 'Ansi69', 'gicgbseng20253.mans@gmail.com', NULL, '$2y$10$VqndR9DQgxxjzBOGjvzkW..C/MvBLbK68GXY1MlIZIuBypoomgKNa', NULL, '2023-08-28 05:10:05', '2023-08-28 05:10:05', '0', '0', NULL),
(103, 'Muhammad Talha', 'tk5439443@gmail.com', NULL, '$2y$10$Q6Keyyu9HG9JscCOxfeeuOC9mr7bKFMdi2qIfihEJNpqnxiJsk1Jq', 'YJoezdJrNXuzf3PpTIXGzoVvzm751PONcRphSJpzNDrJIee8yjdHK0dpCOAe', '2023-08-28 15:56:34', '2023-08-28 15:56:34', '0', '0', NULL),
(104, 'Muhammad Saif ur Rehman', 'saifrehman6717@gmail.com', NULL, '$2y$10$xT9qMVlJpYoqLPbFy/89f.bOPa0RJHAWZw0F.43Rvsxd9vMp0pKlG', 'AiNwvzPRtmjIpU3IW2uKh9bqik2H9nkouxCUbGzLMerhMxmeBt1jZLQFsFky', '2023-08-28 16:52:25', '2023-08-28 16:52:25', '0', '0', NULL),
(105, 'Sidra abbasi', 'Malingasid@gmail.com', NULL, '$2y$10$5eNmep4lDNG86v.0XGDwoOIlrgzt8bcnb6Kbk9p9l/m8geuNe9ZGO', 'JtfPAllXNzu4WFrlWMzfKZuw23rMOXYxSnqJSpr2pe9FPMB2Uo5yS1glEGkT', '2023-08-28 20:33:15', '2023-08-28 20:33:15', '0', '0', NULL),
(106, 'Ehsan ullah', 'ehsankalyar7866@gmail.com', NULL, '$2y$10$uTqKG7WMB4KIszfOlcJTiu4LkbNVLpn.YjXpoUBGc53eH.opiNCWS', 'QlpxSAB2lCySeM9o0g1K1sUMoWKBNgZfNf2aiQN7Mtf9LYuEE0If6dVZWiIW', '2023-08-29 02:35:08', '2023-08-29 02:35:08', '0', '0', NULL),
(107, 'Imran65', 'imran6566019@gmail.com', NULL, '$2y$10$1HuB0L7IIaUycRjDL8ar5OcuFPH1PXfGSdQQs11FYhKQlE7KtIwp2', NULL, '2023-08-29 02:37:10', '2023-08-29 02:37:10', '0', '0', NULL),
(108, 'Faizanali', 'faizanali@ranksol.com', NULL, '$2y$10$SKZHo8485VTrmOG3SfTjh.KaTHtwiMf3Xfi3Rfyk6pHDOPHhkk.9C', 'bIQgvIhyoLjAmMzIMtOi88W2zVnqcDRbqzvKJdY8j37i1WG4pQVSOTrFPjMp', '2023-08-29 18:40:09', '2023-08-29 18:40:09', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(43, '4', 49, '2023-08-26 19:25:22', '2023-08-26 19:25:22'),
(42, '4', 48, '2023-08-26 19:23:33', '2023-08-26 19:23:33'),
(41, '4', 47, '2023-08-26 19:21:42', '2023-08-26 19:21:42'),
(34, '4', 40, '2023-08-26 18:44:19', '2023-08-26 18:44:19'),
(40, '4', 46, '2023-08-26 19:05:34', '2023-08-26 19:05:34'),
(39, '4', 45, '2023-08-26 19:04:05', '2023-08-26 19:04:05'),
(38, '4', 44, '2023-08-26 19:02:12', '2023-08-26 19:02:12'),
(37, '2', 43, '2023-08-26 18:55:03', '2023-08-26 21:02:17'),
(36, '4', 42, '2023-08-26 18:50:22', '2023-08-26 18:50:22'),
(35, '4', 41, '2023-08-26 18:47:52', '2023-08-26 18:47:52'),
(56, '4', 62, '2023-08-26 21:11:58', '2023-08-26 21:11:58'),
(32, '2', 38, '2023-08-26 18:17:25', '2023-08-29 19:53:00'),
(44, '4', 50, '2023-08-26 19:26:29', '2023-08-26 19:26:29'),
(45, '4', 51, '2023-08-26 19:27:40', '2023-08-26 19:27:40'),
(46, '4', 52, '2023-08-26 19:28:59', '2023-08-26 19:28:59'),
(47, '4', 53, '2023-08-26 19:30:11', '2023-08-26 19:30:11'),
(48, '4', 54, '2023-08-26 19:31:48', '2023-08-26 19:31:48'),
(49, '4', 55, '2023-08-26 19:33:06', '2023-08-26 19:33:06'),
(50, '4', 56, '2023-08-26 19:34:12', '2023-08-26 19:36:01'),
(51, '4', 57, '2023-08-26 19:37:26', '2023-08-26 19:37:26'),
(52, '4', 58, '2023-08-26 19:38:48', '2023-08-26 19:38:48'),
(53, '4', 59, '2023-08-26 19:53:56', '2023-08-26 19:53:56'),
(54, '4', 60, '2023-08-26 20:02:37', '2023-08-26 20:02:37'),
(55, '4', 61, '2023-08-26 20:57:54', '2023-08-26 20:57:54'),
(57, '4', 63, '2023-08-26 21:13:47', '2023-08-26 21:13:47'),
(58, '4', 64, '2023-08-26 21:22:28', '2023-08-26 21:22:28'),
(59, '4', 65, '2023-08-26 21:23:49', '2023-08-26 21:23:49'),
(60, '4', 67, '2023-08-26 21:25:15', '2023-08-26 21:25:15'),
(61, '4', 68, '2023-08-26 21:26:21', '2023-08-26 21:26:21'),
(62, '4', 69, '2023-08-26 21:48:48', '2023-08-26 21:48:48'),
(63, '4', 70, '2023-08-26 22:10:29', '2023-08-26 22:10:29'),
(64, '4', 71, '2023-08-26 22:13:36', '2023-08-26 22:13:36'),
(65, '4', 72, '2023-08-26 23:05:58', '2023-08-26 23:05:58'),
(66, '4', 73, '2023-08-26 23:38:38', '2023-08-26 23:38:38'),
(67, '4', 74, '2023-08-26 23:49:39', '2023-08-26 23:49:39'),
(68, '4', 75, '2023-08-26 23:51:28', '2023-08-26 23:51:28'),
(69, '4', 76, '2023-08-26 23:55:29', '2023-08-26 23:55:29'),
(70, '4', 77, '2023-08-26 23:57:34', '2023-08-26 23:59:15'),
(71, '4', 78, '2023-08-27 00:00:27', '2023-08-27 00:00:27'),
(72, '4', 79, '2023-08-27 00:02:22', '2023-08-27 00:02:22'),
(73, '4', 80, '2023-08-27 00:05:37', '2023-08-27 00:05:37'),
(74, '4', 81, '2023-08-27 00:07:58', '2023-08-27 00:07:58'),
(75, '4', 82, '2023-08-27 00:11:11', '2023-08-27 00:11:11'),
(76, '4', 83, '2023-08-27 00:13:43', '2023-08-27 00:13:43'),
(77, '4', 84, '2023-08-27 00:15:01', '2023-08-27 00:15:01'),
(78, '4', 85, '2023-08-27 00:25:26', '2023-08-27 00:25:26'),
(79, '4', 86, '2023-08-27 00:27:44', '2023-08-27 00:27:44'),
(80, '4', 87, '2023-08-27 00:32:42', '2023-08-27 00:32:42'),
(81, '4', 88, '2023-08-27 00:33:46', '2023-08-27 00:33:46'),
(82, '4', 89, '2023-08-27 00:34:56', '2023-08-27 00:34:56'),
(83, '4', 90, '2023-08-27 00:36:39', '2023-08-27 00:36:39'),
(84, '4', 91, '2023-08-27 00:40:06', '2023-08-27 00:40:06'),
(85, '4', 92, '2023-08-27 02:56:24', '2023-08-27 02:56:24'),
(86, '4', 93, '2023-08-27 02:57:50', '2023-08-27 02:57:50'),
(87, '4', 94, '2023-08-27 02:59:11', '2023-08-27 02:59:11'),
(88, '4', 95, '2023-08-27 03:01:34', '2023-08-27 03:01:34'),
(89, '4', 96, '2023-08-27 03:02:41', '2023-08-27 03:02:41'),
(90, '4', 97, '2023-08-27 08:57:38', '2023-08-27 08:57:38'),
(91, '4', 98, '2023-08-27 15:18:14', '2023-08-27 15:18:14'),
(92, '4', 99, '2023-08-28 05:04:29', '2023-08-28 05:04:29'),
(93, '4', 100, '2023-08-28 05:08:50', '2023-08-28 05:08:50'),
(94, '4', 101, '2023-08-28 05:10:05', '2023-08-28 05:10:05'),
(95, '4', 103, '2023-08-28 15:56:34', '2023-08-28 15:56:34'),
(96, '2', 104, '2023-08-28 16:52:25', '2023-08-28 16:52:25'),
(97, '4', 105, '2023-08-28 20:33:15', '2023-08-28 20:33:15'),
(98, '4', 106, '2023-08-29 02:35:08', '2023-08-29 02:35:08'),
(99, '4', 107, '2023-08-29 02:37:10', '2023-08-29 02:37:10'),
(100, '2', 108, '2023-08-29 18:40:09', '2023-08-29 18:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupens`
--
ALTER TABLE `coupens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupens_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_details`
--
ALTER TABLE `data_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_variation`
--
ALTER TABLE `order_variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments_invoices`
--
ALTER TABLE `payments_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupens`
--
ALTER TABLE `coupens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `data_details`
--
ALTER TABLE `data_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- AUTO_INCREMENT for table `order_variation`
--
ALTER TABLE `order_variation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `payments_invoices`
--
ALTER TABLE `payments_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
