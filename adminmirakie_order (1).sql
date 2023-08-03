-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2023 at 02:57 AM
-- Server version: 10.5.21-MariaDB-log
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `address`, `phone_number`, `social_account`, `post_code`, `user_id`, `created_at`, `updated_at`) VALUES
(18, 'Bilal Two', 'munawar', 'ranabilalmunawar12@gmail.com', 'pakistan 2', '452452452', NULL, '4242', NULL, '2023-06-08 13:18:34', '2023-06-08 13:18:34'),
(17, 'mubeen3', '3', 'mubeen3.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:17:41', '2023-06-08 13:17:41'),
(16, 'mubeen2', '2', 'mubeen2.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:13:54', '2023-06-08 13:13:54'),
(15, 'bilal', 'munawar', 'ranabilalmunawar122@gmail.com', 'pakistan', '0304282', NULL, '454', NULL, '2023-06-08 13:10:46', '2023-06-08 13:10:46'),
(14, 'mubeen1', '1', 'mubeen1.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:08:52', '2023-06-08 13:08:52'),
(13, 'mubeen', '1', 'mubeen.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:06:41', '2023-06-08 13:06:41'),
(12, 'bilal ali', 'dgdg', 'ranabilalmunawar@gmail.com', 'ffgdfg', '35345', NULL, '4545', '3', '2023-06-06 18:46:18', '2023-06-06 18:46:18'),
(19, 'mubeen4', '4', 'mubeen4.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:21:33', '2023-06-08 13:21:33'),
(20, 'Rana', 'munawar', 'ranabilalmunawar35@gmail.com', 'pakistan 3', '245245245', NULL, '2452', NULL, '2023-06-08 13:24:07', '2023-06-08 13:24:07'),
(21, 'mubeen5', '5', 'mubeen5.ijaz4337@email.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 13:24:26', '2023-06-08 13:24:26'),
(22, 'Rana Bilal Four', 'Munawar', 'ranabilalmunawar40@gmail.com', 'pakistan 4', '3452450045', NULL, '2452', NULL, '2023-06-08 13:29:36', '2023-06-08 13:29:36'),
(23, 'Rana Bilal Five', 'Munawar', 'ranabilalmunawar50@gmail.com', 'pakistan 5', '24524500450', NULL, '4245', NULL, '2023-06-08 13:33:21', '2023-06-08 13:33:21'),
(24, 'mubeen6', 'hassan', 'mub6@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:18:57', '2023-06-08 18:18:57'),
(25, 'dfgdf', 'dfgdfg', 'fsdf@gmail.com', 'dfgdgd', '543534', NULL, '345345', NULL, '2023-06-08 18:19:01', '2023-06-08 18:19:01'),
(26, 'mub7', '7', 'mub7@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:20:22', '2023-06-08 18:20:22'),
(27, 'Bilal test', 'Munawar', 'bilal@gmail.com', 'zczc', '5454', NULL, '454', NULL, '2023-06-08 18:22:37', '2023-06-08 18:22:37'),
(28, 'mube2', '2', 'mube2@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-08 18:35:19', '2023-06-08 18:35:19'),
(29, 'bilal55', 'rana', 'ranabilal@gmail.com', 'sdfsd', '23232', NULL, '323', NULL, '2023-06-08 18:35:36', '2023-06-08 18:35:36'),
(30, 'ghmgh', 'jhmghm', 'ranazaidmunawar106@gmail.com', 'hjty', '425254245', NULL, '535', NULL, '2023-06-09 01:45:25', '2023-06-09 01:45:25'),
(31, 'abcd', 'abcd', 'abcd@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-09 12:51:20', '2023-06-09 12:51:20'),
(32, 'order', 'test', 'ordertest2@gmail.com', 'abdulallah pur towm', '03338723443', NULL, '37000', NULL, '2023-06-19 05:54:15', '2023-06-19 05:54:15'),
(33, 'agent', '2', 'ordertest@gmail.com', 'no', '0313004599', NULL, '34000', NULL, '2023-06-19 05:56:05', '2023-06-19 05:56:05'),
(34, 'mubeen9', 'ijaz', 'mubeen.ijaz@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '1234', NULL, '1234.', NULL, '2023-06-20 17:41:36', '2023-06-20 17:41:36'),
(35, 'Rana Zaid', 'Munawar', 'ranazaidmunawar1065@gmail.com', 'fsd', '03020000214', NULL, '38000', NULL, '2023-06-21 18:18:23', '2023-06-21 18:18:23'),
(36, 'Rana khan', 'Munawar', 'ranazaidmunawar1006@gmail.com', 'main', '03020000215', NULL, '38200', NULL, '2023-06-21 19:06:31', '2023-06-21 19:06:31'),
(37, 'Ahmad Junaid', 'Ali', 'ahmadjunaidali305@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '03221812496', NULL, '37000', NULL, '2023-07-17 17:38:39', '2023-07-17 17:38:39'),
(38, 'test', 'faizan', 'test@gmail.com', 'random testing address', '+448009296163', NULL, '38000', NULL, '2023-07-17 18:34:02', '2023-07-17 18:34:02'),
(39, 'ali', 'ahmad', 'admin@admin.com', 'fo9 4095 klgj4', '+44+447478329292', NULL, '37000', NULL, '2023-07-27 17:49:15', '2023-07-27 17:49:15'),
(40, 'ghjghjgh', '', '', 'dfghdfh', '+923020000214', NULL, 'hgjghi653478&^%&^', NULL, '2023-07-31 13:24:41', '2023-07-31 13:24:41'),
(41, 'mm', 'vv', 'mm@gmail.com', 'Pakistan ,Punjab,\r\nFaisalabad madina town', '+921234567898', NULL, '1234.', NULL, '2023-07-31 17:05:32', '2023-07-31 17:05:32'),
(42, 'jon', '', '', 'eden valley', '+44+447847298422', NULL, 'ls12 1nb', NULL, '2023-08-02 17:00:45', '2023-08-02 17:00:45'),
(43, 'no', 'Ali', 'ahmadjunaidali606@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-02 17:07:28', '2023-08-02 17:07:28'),
(44, 'kj', 'Ali', 'ahmadjunaidali905@gmail.com', 'Madina town Mamunkanjan Tehsil Tandlianwala District Faisalabad', '+9203221812496', NULL, '37000', NULL, '2023-08-02 18:22:35', '2023-08-02 18:22:35'),
(45, 'Mack', 'Jhosn', '', 'Manchester', '+92+923493667721', NULL, 'M14', NULL, '2023-08-03 03:24:28', '2023-08-03 03:24:28');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_details`
--

INSERT INTO `data_details` (`id`, `role_id`, `links`, `note`, `created_at`, `updated_at`) VALUES
(1, '2', 'https://www.ukbedsdirect.com/&nbsp;', 'website&nbsp;', '2023-07-27 18:02:36', '2023-07-27 18:02:36'),
(2, '4', 'http://127.0.0.1:8000/order_index', 'Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2023-07-31 13:38:58', '2023-07-31 13:38:58'),
(3, '3', 'http://127.0.0.1:8000/order_index', 'What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2023-07-31 13:41:42', '2023-07-31 13:41:42');

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
(23, '2023_07_20_093028_add_new_fields_orders', 17);

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
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 3),
(7, 'App\\Models\\User', 3),
(8, 'App\\Models\\User', 3),
(9, 'App\\Models\\User', 3),
(10, 'App\\Models\\User', 3),
(11, 'App\\Models\\User', 3),
(12, 'App\\Models\\User', 3),
(13, 'App\\Models\\User', 3),
(14, 'App\\Models\\User', 3),
(15, 'App\\Models\\User', 3),
(16, 'App\\Models\\User', 3),
(17, 'App\\Models\\User', 3),
(17, 'App\\Models\\User', 13),
(17, 'App\\Models\\User', 21),
(17, 'App\\Models\\User', 23),
(17, 'App\\Models\\User', 25),
(17, 'App\\Models\\User', 26),
(18, 'App\\Models\\User', 3),
(18, 'App\\Models\\User', 13),
(18, 'App\\Models\\User', 21),
(18, 'App\\Models\\User', 23),
(18, 'App\\Models\\User', 25),
(18, 'App\\Models\\User', 26),
(19, 'App\\Models\\User', 3),
(19, 'App\\Models\\User', 13),
(19, 'App\\Models\\User', 21),
(19, 'App\\Models\\User', 23),
(19, 'App\\Models\\User', 25),
(19, 'App\\Models\\User', 26),
(20, 'App\\Models\\User', 3),
(20, 'App\\Models\\User', 13),
(20, 'App\\Models\\User', 21),
(20, 'App\\Models\\User', 23),
(20, 'App\\Models\\User', 25),
(20, 'App\\Models\\User', 26),
(21, 'App\\Models\\User', 3),
(22, 'App\\Models\\User', 3),
(23, 'App\\Models\\User', 3),
(24, 'App\\Models\\User', 3),
(25, 'App\\Models\\User', 3),
(26, 'App\\Models\\User', 3),
(27, 'App\\Models\\User', 3),
(28, 'App\\Models\\User', 3),
(29, 'App\\Models\\User', 3);

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
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 25),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 21),
(4, 'App\\Models\\User', 23),
(4, 'App\\Models\\User', 26);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `customer_id`, `user_id`, `order_id`, `select_country`, `select_product`, `mattress_size`, `select_mattress`, `ottoman_design`, `ottoman_color`, `ottoman_fabric`, `gaslift_size`, `gaslift_design`, `headboard_size`, `headboard_design`, `headboard_color`, `headboard_fabric`, `without_diamond_size`, `without_diamond_color`, `without_diamond_fabric`, `without_diamond_storage`, `without_diamond_base`, `without_diamond_mattress`, `with_diamond_size`, `with_diamond_design`, `with_diamond_color`, `with_diamond_fabric`, `with_diamond_button_diamond`, `with_diamond_storage`, `with_diamond_base`, `with_diamond_mattress`, `ottoman_divan_size`, `ottoman_divan_headboad`, `ottoman_divan_color`, `ottoman_divan_fabric`, `ottoman_divan_mattress`, `divan_size`, `divan_headboard`, `divan_color`, `divan_fabric`, `divan_storage`, `divan_mattress`, `monaco_divan_size`, `monaco_divan_headboard`, `monaco_divan_color`, `monaco_divan_fabric`, `monaco_divan_storage`, `monaco_divan_mattress`, `created_at`, `updated_at`) VALUES
(38, 14, 14, '78', 'france', '3', NULL, NULL, 'Panel', 'black', 'Grey', NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Diamond', 'cream', 'Chenille', '1 Drawer-Side', 'Orthopadic sprung  10 inch', '2023-06-08 13:10:19', '2023-06-08 13:10:19'),
(39, 15, 12, '79', '***************899990000', '6', '4ft', 'Richmond 3D 12 inch', 'Plain', 'Gold', 'Leather', '3ft', 'Metal Gaslift', '4ft', 'Split-Cube button', 'pink', 'Naples', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:10:46', '2023-06-08 13:10:46'),
(40, 15, 12, '80', '123132156456465456465423165456789731231', '5', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, NULL, NULL, NULL, '4ft6 inch', 'silver', NULL, 'Board Gaslift', 'Solid base', 'Mayfair 3D 12 inch', '4ft', 'Split-Panel', 'silver', NULL, 'Diamond', 'Metal Gaslift', 'Solid base', 'Richmond 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:12:12', '2023-06-08 18:43:53'),
(37, 14, 14, '77', 'UK', '2', NULL, NULL, NULL, NULL, NULL, '4ft', 'Metal Gaslift', '5ft', 'Split-Panel', 'silver', 'Crush velvet', '5ft', 'silver', 'Naples', 'Board Gaslift', 'Wooden Slates', 'Memory foam 10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:08:52', '2023-06-08 13:08:52'),
(36, 13, 14, '76', 'UK', '2', '4ft', 'Cream 3D 12 inch', 'Monaco-Button', 'White', 'Chenille', '4ft6 inch', 'Metal Gaslift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:06:41', '2023-06-08 13:06:41'),
(30, 6, 4, '70', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'plain', 'White', 'Chenille', '3 Drawers-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 20:56:51', '2023-06-05 20:56:51'),
(31, 6, 4, '71', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Split-Cube Diamond', 'Aubergine', 'Chenille', 'Diamond', 'Metal Gaslift', 'Solid base', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 20:58:27', '2023-06-05 20:58:27'),
(32, 7, 9, '72', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design', NULL, 'select Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Florida Button', 'Sapphire', 'Chenille', '1 Drawer-Jumbo Drawer', 'Richmond 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 21:32:33', '2023-06-05 21:32:33'),
(33, 8, 11, '73', 'UK', '2', NULL, NULL, 'Monaco-Diamond', 'pink', 'Naples', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-05 21:43:02', '2023-06-05 21:43:02'),
(41, 15, 12, '81', 'Japan', '4', '4ft', 'Suede 3D 12 inch', NULL, NULL, NULL, '4ft', 'Metal Gaslift', '6ft inch', 'Split-Panel', 'Mink', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Florida Button', 'Maroon', 'Leather', 'Mayfair 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:13:42', '2023-06-08 13:13:42'),
(42, 16, 16, '82', 'UK', '2', '3ft', 'Cream 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:13:54', '2023-06-08 13:13:54'),
(43, 16, 16, '83', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, '4ft6 inch', 'black', 'Grey', 'Board Gaslift', 'Solid base', 'Orthopadic sprung  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:14:33', '2023-06-08 13:14:33'),
(44, 15, 12, '84', 'france', '3', '3ft', 'Mayfair 3D  12 inch', NULL, NULL, NULL, '4ft', 'Metal Gaslift', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Split-Panel', 'pink', 'Grey', 'Button', 'Board Gaslift', 'Wooden Slates', 'Mayfair 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:14:42', '2023-06-08 13:14:42'),
(45, 16, 16, '85', 'Japan', '4', NULL, NULL, 'Monaco-Diamond', 'Duck Egg', 'Grey', NULL, 'select Design<', '6ft inch', 'Split-Panel', 'White', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:15:11', '2023-06-08 13:15:11'),
(46, 17, 18, '86', 'france', '3', '4ft6 inch', 'Mayfair 3D 12 inch', 'Monaco-Diamond', 'Maroon', 'Crush velvet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:17:41', '2023-06-08 13:17:41'),
(47, 17, 18, '87', 'Japan', '4', NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Metal Gaslift', '4ft', 'Split-Plain', 'teal', 'Chenille', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'panel', 'black', 'Grey', 'Orthopadic Memory foam  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:18:34', '2023-06-08 13:18:34'),
(48, 18, 13, '88', 'Japan', '4', NULL, NULL, NULL, NULL, NULL, '5ft', 'Metal Gaslift', '6ft inch', 'Split-Cube button', 'Gold', 'Leather', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:18:34', '2023-06-08 13:18:34'),
(49, 17, 18, '89', 'france', '3', '4ft6 inch', 'Memory Gel 12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, '3ft', 'steel', 'Grey', 'Metal Gaslift', 'Wooden Slates', 'Memory foam  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:19:15', '2023-06-08 13:19:15'),
(50, 18, 13, '90', 'france', '3', '4ft', '1000 pocket 12 inch', 'Monaco-Diamond', 'Gold', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:19:23', '2023-06-08 13:19:23'),
(51, 18, 13, '91', '123132156456465456465423165456789731231', '5', '4ft', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, '4ft6 inch', 'Duck Egg', 'Grey', 'Board Gaslift', 'Solid base', 'Richmond 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:20:55', '2023-06-08 13:20:55'),
(52, 19, 19, '92', 'Japan', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Split-Panel', 'silver', 'Naples', 'Diamond', 'Metal Gaslift', 'Solid base', 'Orthopadic sprung 10 inch', NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Button', 'black', 'Crush velvet', '1 Drawer-Side', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:21:33', '2023-06-08 13:21:33'),
(53, 18, 13, '93', 'Japan', '4', '4ft6 inch', 'Richmond 3D  12 inch', 'Monaco-Diamond', 'Mink', 'Grey', '3ft', 'Metal Gaslift', '4ft', 'Floor Standing Panel', 'Gold', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:21:38', '2023-06-08 13:21:38'),
(54, 19, 19, '94', 'UK', '2', '3ft', 'Silver 3D 12 inch', NULL, NULL, NULL, '3ft', 'Metal Gaslift', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:22:11', '2023-06-08 13:22:11'),
(55, 19, 19, '95', 'france', '3', NULL, NULL, 'Monaco-Button', 'Brown', 'Suede', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:22:38', '2023-06-08 13:22:38'),
(56, 20, 17, '96', '123132156456465456465423165456789731231', '5', '4ft', 'Mayfair 3D 12 inch', 'Monaco-Button', 'Mink', 'Plush Velvet', '4ft', NULL, '6ft inch', 'Floor Standing-Florida Diamond', 'Mink', 'Crush velvet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:24:07', '2023-06-08 13:24:07'),
(57, 21, 21, '97', 'Japan', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Florida Button', 'silver', 'Plush Velvet', 'simple - Semi ortho 8 inch', '3ft', 'Cube Button', 'black', 'Crush velvet', '1 Drawer-Side', 'Mayfair 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:24:26', '2023-06-08 13:24:26'),
(58, 20, 17, '98', 'france', '3', '4ft6 inch', 'Mayfair 3D  12 inch', NULL, NULL, NULL, '4ft6 inch', 'Metal Gaslift', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Diamond', 'pink', 'Chenille', '2 Drawers-1 each side Top piece', '2000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:24:51', '2023-06-08 13:24:51'),
(59, 21, 21, '99', 'Japan', '4', '4ft', 'Cream 3D 12 inch', NULL, NULL, NULL, '4ft', 'Metal Gaslift', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:25:01', '2023-06-08 13:25:01'),
(60, 21, 21, '100', 'france', '3', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design<', '3ft', 'Split-Plain', 'silver', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:26:13', '2023-06-08 13:26:13'),
(61, 20, 17, '101', '***************899990000', '6', '4ft', 'Mayfair 3D  12 inch', NULL, NULL, NULL, '5ft', 'Metal Gaslift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Button', 'Mink', NULL, '3 Drawers-1 each side Top piece and Jumbo', 'Mayfair 3D 12 inch', '2023-06-08 13:26:34', '2023-06-08 13:37:00'),
(62, 22, 20, '102', 'Japan', '4', '4ft', '1000 pocket 12 inch', 'Monaco-Button', 'Gold', 'Suede', '4ft', 'Metal Gaslift', '4ft', 'Split-Cube button', 'silver', 'Naples', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:29:36', '2023-06-08 13:29:36'),
(63, 22, 20, '103', 'Japan', '4', '4ft6 inch', 'Richmond 3D  12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5ft', 'Florida Button', 'Mink', 'Grey', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:30:32', '2023-06-08 13:30:32'),
(64, 22, 20, '104', 'france', '3', '3ft', 'Richmond 3D  12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Split-Cube button', 'Mink', 'Grey', 'Button', 'Board Gaslift', 'Wooden Slates', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:31:15', '2023-06-08 13:31:15'),
(65, 23, 22, '105', '123132156456465456465423165456789731231', '5', '4ft', 'Mayfair 3D 12 inch', 'Monaco-Diamond', 'Mink', 'Crush velvet', '4ft', 'Metal Gaslift', '3ft', 'Floor Standing-Florida Button', 'black', 'Naples', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:33:21', '2023-06-08 13:33:21'),
(66, 23, 22, '106', '***************899990000', '6', '4ft6 inch', 'Richmond 3D  12 inch', 'Monaco-Diamond', 'Mink', 'Suede', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:34:05', '2023-06-08 13:34:05'),
(67, 23, 22, '107', 'france', '3', '4ft', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Cube Diamond', 'Gold', 'Grey', '3 Drawers-1 each side Top piece and Jumbo', 'Memory foam  10 inch', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 13:34:48', '2023-06-08 13:34:48'),
(68, 24, 3, '108', 'UK', '2', '4ft', 'Cream 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:18:57', '2023-06-08 18:18:57'),
(69, 25, 3, '109', 'Japan', '4', '4ft', 'Suede 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:19:01', '2023-06-08 18:19:01'),
(70, 24, 3, '110', '***************899990000', '6', '3ft', 'Suede 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:19:25', '2023-06-08 18:19:25'),
(71, 26, 3, '111', 'Japan', '4', '4ft', 'Memory Gel 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:20:22', '2023-06-08 18:20:22'),
(72, 27, 3, '112', 'Japan', '4', '4ft', 'Richmond 3D 12 inch', 'Monaco-Diamond', 'pink', 'Leather', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:22:37', '2023-06-08 18:22:37'),
(73, 27, 3, '113', '123132156456465456465423165456789731231', '5', '4ft6 inch', 'Mayfair 3D  12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:23:29', '2023-06-08 18:23:29'),
(74, 28, 3, '114', 'france', '3', '3ft', 'Silver 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:35:19', '2023-06-08 18:35:19'),
(75, 29, 3, '115', 'Japan', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:35:36', '2023-06-08 18:35:36'),
(76, 28, 3, '116', 'Japan', '4', NULL, NULL, 'Monaco-Diamond', 'White', 'Grey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:35:47', '2023-06-08 18:35:47'),
(77, 29, 3, '117', 'france', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 18:36:07', '2023-06-08 18:36:07'),
(78, 30, 3, '118', '***************899990000', '6', '3ft', 'pillow top 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 01:45:25', '2023-06-09 01:45:25'),
(79, 30, 3, '119', '***************899990000', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 01:45:50', '2023-06-09 01:45:50'),
(80, 31, 3, '120', 'UK', '2', '4ft', 'Mayfair 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:51:20', '2023-06-09 12:51:20'),
(81, 32, 24, '121', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'silver', 'Crush velvet', 'Metal Gaslift', 'Wooden Slates', 'simple - Semi ortho 8 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-19 05:54:15', '2023-06-19 05:54:15'),
(82, 33, 23, '122', 'UK', '2', '4ft', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-19 05:56:05', '2023-06-19 05:56:05'),
(83, 34, 3, '123', 'UK', '2', NULL, NULL, NULL, NULL, NULL, '3ft', 'Metal Gaslift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-20 17:41:36', '2023-06-20 17:41:36'),
(84, 35, 3, '124', '***************899990000', '6', NULL, NULL, NULL, NULL, NULL, '3ft', 'Metal Gaslift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 18:18:23', '2023-06-21 18:18:23'),
(85, 36, 3, '125', '***************899990000', '6', NULL, NULL, 'Monaco-Diamond', 'purple', 'Leather', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 19:06:31', '2023-06-21 19:06:31'),
(86, 37, 3, '126', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Floor Standing Panel', 'Maroon', 'Chenille', 'Diamond', 'Board Gaslift', 'Wooden Slates', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 17:38:39', '2023-07-17 17:38:39'),
(87, 38, 21, '127', 'france', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Mink', 'Crush velvet', 'Metal Gaslift', 'Solid base', 'Silver 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 18:34:02', '2023-07-17 18:34:02'),
(88, 39, 3, '128', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'cream', 'Plush Velvet', 'Board Gaslift', 'Wooden Slates', 'Suede 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 17:49:15', '2023-07-27 17:49:15'),
(89, 39, 3, '129', 'UK', '2', '3ft', 'Cream 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 17:51:55', '2023-07-27 17:51:55'),
(90, 40, 3, '130', '123132156456465456465423165456789731231', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 13:24:41', '2023-07-31 13:24:41'),
(91, 41, 3, '131', 'UK', '2', '4ft', 'Mayfair 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 17:05:32', '2023-07-31 17:05:32'),
(92, 41, 3, '132', '2', '2', '4ft', 'Cream 3D 12 inch', NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 17:06:25', '2023-07-31 17:06:25'),
(93, 42, 3, '133', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3ft', 'Button', 'Mink', 'Crush velvet', '3 Drawers-1 each side Top piece and Jumbo', 'Richmond 3D 12 inch', '2023-08-02 17:00:45', '2023-08-02 17:00:45'),
(94, 43, 3, '134', 'UK', '2', '3ft', 'Richmond 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 17:07:28', '2023-08-02 17:07:28'),
(95, 43, 3, '135', '2', '2', NULL, NULL, 'Panel', 'Gold', 'Chenille', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 17:08:20', '2023-08-02 17:08:20'),
(96, 44, 3, '136', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Split-Cube button', 'Mustard Gold', 'Suede', 'Button', 'Metal Gaslift', 'Solid base', 'Richmond 3D 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 18:22:35', '2023-08-02 18:22:35'),
(97, 44, 3, '137', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'select Design<', NULL, 'select Design<', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft6 inch', 'Split-Cube button', 'Gold', 'Grey', 'Diamond', 'Metal Gaslift', 'Wooden Slates', '1000 pocket 12 inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 18:28:07', '2023-08-02 18:28:07'),
(98, 45, 3, '138', 'UK', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4ft', 'Cube Button', 'Grey', 'Plush Velvet', '2 Drawers-1 each side Top piece', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-03 03:24:28', '2023-08-03 03:24:28');

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
  `delivery_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `user_id`, `note`, `price`, `created_at`, `updated_at`, `product_id`, `qty`, `delivery_status`, `delivery_date`) VALUES
(76, 'In-00001-2023', 13, 14, 'abc', '123', '2023-06-08 13:06:41', '2023-06-08 13:06:41', 2, 1, NULL, NULL),
(77, 'In-00002-2023', 14, 14, 'abc', '123', '2023-06-08 13:08:52', '2023-06-08 13:08:52', 2, 1, NULL, NULL),
(78, 'In-00003-2023', 14, 14, 'abc', '123', '2023-06-08 13:10:19', '2023-06-08 13:10:19', 3, 1, NULL, NULL),
(79, 'In-00004-2023', 15, 12, 'this is', '50', '2023-06-08 13:10:46', '2023-06-08 13:10:46', 6, 2, NULL, NULL),
(80, 'In-00005-2023', 15, 12, 'Order 2', '30', '2023-06-08 13:12:12', '2023-06-08 13:12:12', 5, 5, NULL, NULL),
(81, 'In-00006-2023', 15, 12, 'order 3', '25', '2023-06-08 13:13:42', '2023-06-08 13:13:42', 4, 3, NULL, NULL),
(82, 'In-00007-2023', 16, 16, 'abc', '123', '2023-06-08 13:13:54', '2023-06-08 13:13:54', 2, 2, NULL, NULL),
(83, 'In-00008-2023', 16, 16, 'abc', '123', '2023-06-08 13:14:33', '2023-06-08 13:14:33', 2, 2, NULL, NULL),
(84, 'In-00009-2023', 15, 12, 'order 4', '60', '2023-06-08 13:14:42', '2023-06-08 13:14:42', 3, 3, NULL, NULL),
(85, 'In-00010-2023', 16, 16, 'abc', '123', '2023-06-08 13:15:11', '2023-06-08 13:15:11', 4, 2, NULL, NULL),
(86, 'In-00011-2023', 17, 18, 'abc', '123', '2023-06-08 13:17:41', '2023-06-08 13:17:41', 3, 3, NULL, NULL),
(87, 'In-00012-2023', 17, 18, 'abc', '123', '2023-06-08 13:18:34', '2023-06-08 13:18:34', 4, 3, NULL, NULL),
(88, 'In-00013-2023', 18, 13, 'this', '10', '2023-06-08 13:18:34', '2023-06-08 13:18:34', 4, 2, NULL, NULL),
(89, 'In-00014-2023', 17, 18, 'abc', '123', '2023-06-08 13:19:15', '2023-06-08 13:19:15', 3, 3, NULL, NULL),
(90, 'In-00015-2023', 18, 13, 'this', '20', '2023-06-08 13:19:23', '2023-06-08 13:19:23', 3, 3, NULL, NULL),
(91, 'In-00016-2023', 18, 13, 'this', '20', '2023-06-08 13:20:55', '2023-06-08 13:20:55', 5, 2, NULL, NULL),
(92, 'In-00017-2023', 19, 19, 'abc', '123', '2023-06-08 13:21:33', '2023-06-08 13:21:33', 4, 4, NULL, NULL),
(93, 'In-00018-2023', 18, 13, 'this', '30', '2023-06-08 13:21:38', '2023-06-08 13:21:38', 4, 30, NULL, NULL),
(94, 'In-00019-2023', 19, 19, 'abc', '123', '2023-06-08 13:22:11', '2023-06-08 13:22:11', 2, 4, NULL, NULL),
(95, 'In-00020-2023', 19, 19, 'abc', '123', '2023-06-08 13:22:38', '2023-06-08 13:22:38', 3, 4, NULL, NULL),
(96, 'In-00021-2023', 20, 17, 'this', '10', '2023-06-08 13:24:07', '2023-06-08 13:24:07', 5, 1, NULL, NULL),
(97, 'In-00022-2023', 21, 21, 'abc', '123', '2023-06-08 13:24:26', '2023-06-08 13:24:26', 4, 5, NULL, NULL),
(98, 'In-00023-2023', 20, 17, 'this', '20', '2023-06-08 13:24:51', '2023-06-08 13:24:51', 3, 2, NULL, NULL),
(99, 'In-00024-2023', 21, 21, 'abc', '123', '2023-06-08 13:25:01', '2023-06-08 13:25:01', 4, 5, NULL, NULL),
(100, 'In-00025-2023', 21, 21, 'abc', '123', '2023-06-08 13:26:13', '2023-06-08 13:26:13', 3, 5, NULL, NULL),
(101, 'In-00026-2023', 20, 17, 'this', '30', '2023-06-08 13:26:34', '2023-06-08 13:26:34', 6, 3, NULL, NULL),
(102, 'In-00027-2023', 22, 20, 'this', '100', '2023-06-08 13:29:36', '2023-06-08 13:29:36', 4, 10, NULL, NULL),
(103, 'In-00028-2023', 22, 20, 'this', '200', '2023-06-08 13:30:32', '2023-06-08 13:30:32', 4, 2, NULL, NULL),
(104, 'In-00029-2023', 22, 20, 'this', '300', '2023-06-08 13:31:15', '2023-06-08 13:31:15', 3, 3, NULL, NULL),
(105, 'In-00030-2023', 23, 22, 'this', '100', '2023-06-08 13:33:21', '2023-06-08 13:33:21', 5, 1, NULL, NULL),
(106, 'In-00031-2023', 23, 22, 'this', '200', '2023-06-08 13:34:05', '2023-06-08 13:34:05', 6, 2, NULL, NULL),
(107, 'In-00032-2023', 23, 22, 'this', '300', '2023-06-08 13:34:48', '2023-06-08 13:34:48', 3, 3, NULL, NULL),
(108, 'In-00033-2023', 24, 3, 'cg', '1200', '2023-06-08 18:18:57', '2023-06-08 18:18:57', 2, 2, NULL, NULL),
(109, 'In-00034-2023', 25, 3, 'fhfh', '4564', '2023-06-08 18:19:01', '2023-06-08 18:19:01', 4, 245, NULL, NULL),
(110, 'In-00035-2023', 24, 3, 'fcdg', '11111', '2023-06-08 18:19:25', '2023-06-08 18:19:25', 6, 54, NULL, NULL),
(111, 'In-00036-2023', 26, 3, 'f', '1200', '2023-06-08 18:20:22', '2023-06-08 18:20:22', 4, 5, NULL, NULL),
(112, 'In-00037-2023', 27, 3, 'dfdf', '44', '2023-06-08 18:22:37', '2023-06-08 18:22:37', 4, 34, NULL, NULL),
(113, 'In-00038-2023', 27, 3, 'dfsd', '343', '2023-06-08 18:23:29', '2023-06-08 18:23:29', 5, 343, NULL, NULL),
(114, 'In-00039-2023', 28, 3, 'abc', '123', '2023-06-08 18:35:19', '2023-06-08 18:35:19', 3, 5, NULL, NULL),
(115, 'In-00040-2023', 29, 3, 'sdfsdf', '43', '2023-06-08 18:35:36', '2023-06-08 18:35:36', 4, 3, NULL, NULL),
(116, 'In-00041-2023', 28, 3, 'xcds', '11', '2023-06-08 18:35:47', '2023-06-08 18:35:47', 4, 5, NULL, NULL),
(117, 'In-00042-2023', 29, 3, 'gdfg', '343', '2023-06-08 18:36:07', '2023-06-08 18:36:07', 3, 4, NULL, NULL),
(118, 'In-00043-2023', 30, 3, 'jh,hj', '535', '2023-06-09 01:45:25', '2023-06-09 01:45:25', 6, 2, NULL, NULL),
(119, 'In-00044-2023', 30, 3, 'gbfgfg', '424', '2023-06-09 01:45:50', '2023-06-09 01:45:50', 6, 25, NULL, NULL),
(120, 'In-00045-2023', 31, 3, 'abc', '1200', '2023-06-09 12:51:20', '2023-06-09 12:51:20', 2, 1, NULL, NULL),
(121, 'In-00046-2023', 32, 24, 'no', '100', '2023-06-19 05:54:15', '2023-06-19 05:54:15', 2, 1, NULL, NULL),
(122, 'In-00047-2023', 33, 23, 'no', '120', '2023-06-19 05:56:05', '2023-06-19 05:56:05', 2, 1, NULL, NULL),
(123, 'In-00048-2023', 34, 3, 'abc', '21', '2023-06-20 17:41:36', '2023-06-20 17:41:36', 2, 2, NULL, NULL),
(124, 'In-00049-2023', 35, 3, 'ggg', '111', '2023-06-21 18:18:23', '2023-06-21 18:18:23', 6, 22, NULL, NULL),
(125, 'In-00050-2023', 36, 3, 'testing', '2500', '2023-06-21 19:06:31', '2023-06-21 19:06:31', 6, 15, NULL, NULL),
(126, 'In-00051-2023', 37, 3, 'no', '145', '2023-07-17 17:38:39', '2023-07-17 17:38:39', 2, 1, NULL, NULL),
(127, 'In-00052-2023', 38, 21, 'It\'s not compulsory.', '12', '2023-07-17 18:34:02', '2023-07-17 18:34:02', 3, 12, NULL, NULL),
(128, 'In-00053-2023', 39, 3, 'no', '134', '2023-07-27 17:49:15', '2023-07-27 17:49:15', 2, 1, 'inprocess', '2023-07-29'),
(129, 'In-00054-2023', 39, 3, 'divan', '120', '2023-07-27 17:51:55', '2023-07-27 17:51:55', 2, 1, 'inprocess', '2023-07-29'),
(130, 'In-00055-2023', 40, 3, NULL, '2500', '2023-07-31 13:24:41', '2023-07-31 13:24:41', 5, NULL, NULL, '2023-07-25'),
(131, 'In-00056-2023', 41, 3, NULL, '500', '2023-07-31 17:05:32', '2023-07-31 17:05:32', 2, 2, NULL, '2023-08-02'),
(132, 'In-00057-2023', 41, 3, 'ABCD', '1100', '2023-07-31 17:06:25', '2023-07-31 17:06:25', 2, 2, 'inprocess', '2023-08-02'),
(133, 'In-00058-2023', 42, 3, 'with assembly', '125', '2023-08-02 17:00:45', '2023-08-02 17:00:45', 2, 1, NULL, '2023-08-02'),
(134, 'In-00059-2023', 43, 3, 'no', '145', '2023-08-02 17:07:28', '2023-08-02 17:07:28', 2, 1, 'inprocess', '2023-08-02'),
(135, 'In-00060-2023', 43, 3, 'yes', '100', '2023-08-02 17:08:20', '2023-08-02 17:08:20', 2, 1, 'inprocess', '2023-08-02'),
(136, 'In-00061-2023', 44, 3, 'no', '120', '2023-08-02 18:22:35', '2023-08-02 18:22:35', 2, 1, 'inprocess', '2023-08-02'),
(137, 'In-00062-2023', 44, 3, 'no', '120', '2023-08-02 18:28:07', '2023-08-02 18:28:07', 2, 1, 'inprocess', '2023-08-02'),
(138, 'In-00063-2023', 45, 3, NULL, '90', '2023-08-03 03:24:28', '2023-08-03 03:24:28', 2, 1, 'inprocess', '2023-08-05');

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
(77, 138, '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', '[\"default\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `country` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`, `updated_at`, `country`) VALUES
(2, 'Bed', '300', '2023-04-23 20:04:38', '2023-04-23 20:04:38', '[\"UK\"]'),
(3, 'Sofas', '100', '2023-05-04 13:35:13', '2023-05-04 13:35:13', '[\"france\"]'),
(4, 'Couch', '100', '2023-05-04 13:35:32', '2023-05-04 13:35:32', '[\"Japan\"]'),
(6, '%%%^&&**(', '115500 +1 321+ 232565', '2023-05-04 13:36:43', '2023-05-04 13:36:43', '[\"***************899990000\",\" japan\",\" china\",\" france\",\" belgium\",\" argentina\"]');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$HHOgGs7Dlos5XoqKmMn34ONMewtpTBPaf26YoRmaQByxFGHUWv8sG', 'niGzvF318sz6XXvfjXm1mSPXouDuKFNtqWp7SKuizrcqryWUOHy0HmMDVAzT', '2023-04-06 04:58:28', '2023-07-17 18:15:30'),
(13, 'Rana Bilal Munawar Two', 'ranabilalmunawar12@gmail.com', NULL, '$2y$10$glc925KW912DJIAWMx8ATu0E/eHvQERxEOU1GZqosb76AiTnLLPD6', 'srwQIxiqtxMD8LNfDqDdltRC6bCFn4o2EPXTD6VUHY8qWJqFf2BOh0TjQxPD', '2023-06-08 12:55:43', '2023-06-08 12:55:43'),
(21, 'mubeen5', 'mub5@gmail.com', NULL, '$2y$10$nm5MyB.Ewm9aHt4A3yppUOvkrotE4DLaVP2IDK8An10O8U/H28.5e', 'IxMgJ1X6E1ild8HhQl6SRXEKniviK4e0fo2yWMwsz3FYV7xj4pXCsBz5afzv', '2023-06-08 12:59:58', '2023-07-17 18:24:06'),
(23, 'ordertest', 'ordertest@gmail.com', NULL, '$2y$10$4BVvLyyHGEjwWraYp9.X4epEyWAWzploQpIVhXCMyMjJxRBksSvb.', 'YuO3GCy3Bun49FL1qWOayRNaFAGGWrTTaWx4UTIzUkYajWrC6thtUFWVJvbK', '2023-06-19 05:47:40', '2023-06-19 05:47:40'),
(25, 'mubeen', 'mubeen@gmail.com', NULL, '$2y$10$ruEw6JrqiknBPthTgMLNked.BYF8zRxbPy.OPlXlJKWjK.iAMnnHy', NULL, '2023-07-31 13:42:40', '2023-07-31 13:42:40'),
(26, 'mub-V', 'mub-V@gmail.com', NULL, '$2y$10$LX1XyBxuSeCkqaLqgcWq.eUk7TqgtVV7PWP25FxyyIKA9Gkm9PyyC', NULL, '2023-08-02 18:13:42', '2023-08-02 18:13:42');

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
(3, '2', 3, '2023-06-07 05:57:49', '2023-07-17 18:15:30'),
(9, '4', 13, '2023-06-08 12:55:43', '2023-06-08 12:55:43'),
(17, '4', 21, '2023-06-08 12:59:58', '2023-07-17 18:24:06'),
(19, '4', 23, '2023-06-19 05:47:40', '2023-06-19 05:47:40'),
(21, '3', 25, '2023-07-31 13:42:40', '2023-07-31 13:42:40'),
(22, '4', 26, '2023-08-02 18:13:42', '2023-08-02 18:13:42');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `data_details`
--
ALTER TABLE `data_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `order_variation`
--
ALTER TABLE `order_variation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `payments_invoices`
--
ALTER TABLE `payments_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
