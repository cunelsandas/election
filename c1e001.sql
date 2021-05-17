-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 10:48 AM
-- Server version: 10.4.19-MariaDB-1:10.4.19+maria~bionic
-- PHP Version: 7.2.34-21+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c1e001`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone` int(11) DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `zone`, `username`, `first_name`, `last_name`, `email`, `password`, `picture`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 0, 'cunelsandas', 'พศิน', 'ทองเกื้อ', 'phasin80@gmail.com', '$2y$10$8nm/qcIloyG2qTfuHaYIfeTtsO4h1qhvGzPpQkDJNfLdZQgQKMVwe', 'wmsbg_1613641198.jpg', 'KakSaSQZT2OHUiWkzvauMUhZziGhDcInh5jcPz2CrgL0ts9tj1XlHuO1vKUk', NULL, '2021-02-18 02:39:48', '2021-02-18 02:39:58'),
(4, 0, 'itg007', 'ITGLOBAL', '.CO', 'itg007@itglobal.co.th', '$2y$10$Dp2qA0.xUg38X6CbwdWqqOVZt1d7Ivz861L8IqiPUBvWSI4udyQT6', 'LOGO_1615431429.png', 'IGbBFLR1F7fM2mn13GllDefp7O9DnpdxqKUjeHlkjxAaP7GV2qyls9qWtL8q', NULL, '2021-03-11 02:56:35', '2021-03-13 02:13:15'),
(5, 1, 'admindis1', 'เขต', '1', 'test1@gmail.com', '$2y$10$ns5YcZTX6ZTicDy8OSd/bOO8eAg7h2jbMeKMeNf19wBOD5vfSuyJm', '1NumberOneInCircle_1615796281.png', 'H2xcnmBsT9R5xTXDnWOSJZB4nPuqP6Fh80RwTJGc0MbAhhVXFtNpsslFBIKt', NULL, '2021-03-15 07:44:33', '2021-03-22 04:51:21'),
(6, 2, 'admindis2', 'เขต', '2', 'test2@gmail.com', '$2y$10$SPhSFzoW8EadyPUsArP.z.ykU0DTS5jsZoU5Mrxe1zrpBDrREvFF.', '2_1615796574.png', 'rbEfWJcGJh8Z4T8MfzcGlNhxaxPbkNimuJuT4bf9QFISn1oij1NyLcuFkxeB', NULL, '2021-03-15 08:21:08', '2021-03-22 04:51:30'),
(8, NULL, 'adminmk', 'ADMIN', 'กลาง', 'adminmk@itglobal.co.th', '$2y$10$thgWGD64FE3Jl9c48JlTZ.M8PEtijTuUgHOZdHRVQo99RNz69Yoee', 'admin_1615889232.png', 'wljd3H0X2DofaQeJfwmPCHByUaKFsudHPptK92O78SFbfoHqDVxgDOirQ3Q1', NULL, '2021-03-16 10:07:12', '2021-03-22 04:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'เชียงใหม่', 50300, '2021-02-17 21:06:47', '2021-02-17 21:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE `constituency` (
  `id` int(11) NOT NULL,
  `total_constituency` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`id`, `total_constituency`, `updated_at`, `created_at`) VALUES
(1, 5309, '2021-03-27 05:14:32', '2021-03-17 02:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'ไทย', '2021-02-17 21:06:55', '2021-02-17 21:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'เทศบาลตำบลเหมืองแก้ว', '2021-03-16 04:06:34', '2021-03-15 02:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dept_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `created_at`, `updated_at`) VALUES
(1, 'ผู้บริหาร', '2021-02-17 21:06:04', '2021-03-09 02:25:20'),
(2, 'สมาชิกสภา', '2021-02-24 04:39:40', '2021-03-09 02:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'เขต 1', '2021-02-17 21:06:29', '2021-03-09 02:26:59'),
(2, 'เขต 2', '2021-02-17 21:06:34', '2021-03-09 02:27:06'),
(3, 'เขต 3', '2021-02-17 21:06:37', '2021-03-09 02:27:11'),
(7, 'ไม่มีเขต(เลือกสำหรับผู้สมัครนายกฯ)', '2021-03-09 03:10:51', '2021-03-16 04:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_fields`
--

CREATE TABLE `dynamic_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_number` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `join_date` date DEFAULT current_timestamp(),
  `birth_date` date DEFAULT NULL,
  `dept_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `totalpoint` int(11) DEFAULT NULL,
  `salary_id` int(10) UNSIGNED DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_edit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `title_name`, `head_number`, `number`, `first_name`, `last_name`, `email`, `phone`, `address`, `gender_id`, `join_date`, `birth_date`, `dept_id`, `country_id`, `state_id`, `city_id`, `division_id`, `totalpoint`, `salary_id`, `age`, `picture`, `created_at`, `updated_at`, `user_edit`, `deleted_at`) VALUES
(14, NULL, NULL, 1, 'นายฉลอง', 'ปัญญา', NULL, NULL, NULL, 1, '2021-03-09', NULL, 1, NULL, NULL, NULL, 7, 932, NULL, 0, '1นายฉลอง ปัญญา_1615888934.jpg', '2021-03-09 03:13:21', '2021-03-28 14:24:14', 'ADMIN กลาง', NULL),
(15, NULL, NULL, 2, 'นายไกร', 'บุญมาเรือน', NULL, NULL, NULL, 1, '2021-03-09', NULL, 1, NULL, NULL, NULL, 7, 1823, NULL, 0, '2นายไกรบุญ มาเรือน_1615888957.jpg', '2021-03-09 03:13:42', '2021-03-28 14:24:20', 'ADMIN กลาง', NULL),
(16, NULL, NULL, 3, 'นายวิชัน', 'เมธา', NULL, NULL, NULL, 1, '2021-03-09', NULL, 1, NULL, NULL, NULL, 7, 1053, NULL, 0, '3นายวิชัน เมธา_1615888978.jpg', '2021-03-09 03:14:30', '2021-03-28 14:24:25', 'ADMIN กลาง', NULL),
(17, NULL, 1, 2, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 10000, NULL, 0, 'Untitled-1_1615868704.png', '2021-03-09 03:14:53', '2021-03-22 05:36:29', 'เขต 1', '2021-03-22 05:36:29'),
(18, NULL, 1, 3, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 50000, NULL, 0, 'Untitled-1_1615868782.png', '2021-03-09 03:15:14', '2021-03-22 05:36:32', 'เขต 1', '2021-03-22 05:36:32'),
(19, NULL, 1, 4, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615868793.png', '2021-03-09 03:15:50', '2021-03-22 05:36:34', 'พศิน ทองเกื้อ', '2021-03-22 05:36:34'),
(20, NULL, 1, 5, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615868809.png', '2021-03-09 03:16:40', '2021-03-22 05:36:36', 'พศิน ทองเกื้อ', '2021-03-22 05:36:36'),
(21, NULL, 1, 6, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615868819.png', '2021-03-09 03:17:03', '2021-03-22 05:36:38', 'พศิน ทองเกื้อ', '2021-03-22 05:36:38'),
(22, NULL, 1, 1, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868829.png', '2021-03-09 03:19:44', '2021-03-22 05:36:39', 'พศิน ทองเกื้อ', '2021-03-22 05:36:39'),
(23, NULL, 1, 2, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868844.png', '2021-03-09 03:20:46', '2021-03-22 05:36:40', 'พศิน ทองเกื้อ', '2021-03-22 05:36:40'),
(24, NULL, 1, 3, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868871.png', '2021-03-09 03:21:10', '2021-03-22 05:36:41', 'พศิน ทองเกื้อ', '2021-03-22 05:36:41'),
(25, NULL, 1, 4, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868895.png', '2021-03-09 03:21:28', '2021-03-22 05:36:42', 'พศิน ทองเกื้อ', '2021-03-22 05:36:42'),
(26, NULL, 1, 5, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868921.png', '2021-03-09 03:21:50', '2021-03-22 05:36:43', 'พศิน ทองเกื้อ', '2021-03-22 05:36:43'),
(27, NULL, 1, 6, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615868938.png', '2021-03-09 03:22:22', '2021-03-22 05:36:43', 'พศิน ทองเกื้อ', '2021-03-22 05:36:43'),
(28, NULL, 1, 1, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615868949.png', '2021-03-09 03:23:04', '2021-03-17 08:03:17', 'พศิน ทองเกื้อ', '2021-03-17 08:03:17'),
(29, NULL, 1, 2, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, NULL, 'Untitled-1_1615868968.png', '2021-03-09 03:23:36', '2021-03-17 08:03:14', 'พศิน ทองเกื้อ', '2021-03-17 08:03:14'),
(30, NULL, 1, 3, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615868988.png', '2021-03-09 03:23:58', '2021-03-17 08:03:11', 'พศิน ทองเกื้อ', '2021-03-17 08:03:11'),
(31, NULL, 1, 5, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615868999.png', '2021-03-09 03:24:33', '2021-03-17 08:03:07', 'พศิน ทองเกื้อ', '2021-03-17 08:03:07'),
(32, NULL, 1, 6, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869013.png', '2021-03-09 03:24:59', '2021-03-17 08:03:02', 'พศิน ทองเกื้อ', '2021-03-17 08:03:02'),
(33, NULL, 2, 7, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869027.png', '2021-03-09 03:25:51', '2021-03-22 05:36:44', 'พศิน ทองเกื้อ', '2021-03-22 05:36:44'),
(34, NULL, 2, 8, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869037.png', '2021-03-09 03:26:16', '2021-03-22 05:36:45', 'พศิน ทองเกื้อ', '2021-03-22 05:36:45'),
(35, NULL, 2, 9, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869049.png', '2021-03-09 03:26:49', '2021-03-22 05:36:46', 'พศิน ทองเกื้อ', '2021-03-22 05:36:46'),
(36, NULL, 2, 10, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869063.png', '2021-03-09 03:27:10', '2021-03-22 05:36:46', 'พศิน ทองเกื้อ', '2021-03-22 05:36:46'),
(37, NULL, 2, 11, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869082.png', '2021-03-09 03:27:58', '2021-03-22 05:36:47', 'พศิน ทองเกื้อ', '2021-03-22 05:36:47'),
(38, NULL, 2, 12, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 1, 0, NULL, 0, 'Untitled-1_1615869095.png', '2021-03-09 03:28:15', '2021-03-22 05:36:48', 'พศิน ทองเกื้อ', '2021-03-22 05:36:48'),
(39, NULL, 2, 7, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869110.png', '2021-03-09 03:28:49', '2021-03-22 05:36:48', 'พศิน ทองเกื้อ', '2021-03-22 05:36:48'),
(40, NULL, 2, 8, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869125.png', '2021-03-09 03:29:11', '2021-03-22 05:36:49', 'พศิน ทองเกื้อ', '2021-03-22 05:36:49'),
(41, NULL, 2, 9, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869144.png', '2021-03-09 03:29:32', '2021-03-22 05:36:50', 'พศิน ทองเกื้อ', '2021-03-22 05:36:50'),
(42, NULL, 2, 10, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869156.png', '2021-03-09 03:29:51', '2021-03-22 05:36:51', 'พศิน ทองเกื้อ', '2021-03-22 05:36:51'),
(43, NULL, 2, 11, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869179.png', '2021-03-09 03:30:35', '2021-03-22 05:36:51', 'พศิน ทองเกื้อ', '2021-03-22 05:36:51'),
(44, NULL, 2, 12, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869190.png', '2021-03-09 03:30:55', '2021-03-22 05:36:53', 'พศิน ทองเกื้อ', '2021-03-22 05:36:53'),
(45, NULL, 2, 7, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869208.png', '2021-03-09 03:31:19', '2021-03-17 08:02:45', 'พศิน ทองเกื้อ', '2021-03-17 08:02:45'),
(46, NULL, 2, 8, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869219.png', '2021-03-09 03:31:42', '2021-03-17 08:02:42', 'พศิน ทองเกื้อ', '2021-03-17 08:02:42'),
(47, NULL, 2, 9, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 2, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869229.png', '2021-03-09 03:32:10', '2021-03-17 08:02:40', 'พศิน ทองเกื้อ', '2021-03-17 08:02:40'),
(48, NULL, 2, 10, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869239.png', '2021-03-09 03:32:45', '2021-03-17 08:02:37', 'พศิน ทองเกื้อ', '2021-03-17 08:02:37'),
(49, NULL, 2, 11, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869250.png', '2021-03-09 03:33:05', '2021-03-17 08:02:35', 'พศิน ทองเกื้อ', '2021-03-17 08:02:35'),
(50, NULL, 2, 12, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869260.png', '2021-03-09 03:33:21', '2021-03-17 08:02:33', 'พศิน ทองเกื้อ', '2021-03-17 08:02:33'),
(51, NULL, 2, 13, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-09', NULL, 2, NULL, NULL, NULL, 3, 0, NULL, 0, 'Untitled-1_1615869270.png', '2021-03-09 03:33:45', '2021-03-17 08:02:31', 'พศิน ทองเกื้อ', '2021-03-17 08:02:31'),
(69, NULL, 2, 50, 'พศิน', 'ทองเกื้อ', NULL, NULL, NULL, 1, '2021-03-15', NULL, 2, NULL, NULL, NULL, 1, 9000, NULL, 50, 'diy1614064451blobid1614064448464_1615796366.jpg', '2021-03-15 08:18:52', '2021-03-16 03:19:46', 'พศิน ทองเกื้อ', '2021-03-16 03:19:46'),
(70, NULL, 2, 50, 'พศิน', 'ทองเกื้อ', NULL, NULL, NULL, 1, '2021-03-16', NULL, 2, NULL, NULL, NULL, 1, 8000, NULL, 50, '1NumberOneInCircle_1615865105.png', '2021-03-16 03:25:05', '2021-03-16 03:25:26', 'พศิน ทองเกื้อ', '2021-03-16 03:25:26'),
(71, NULL, 2, 50, 'ชื่อ', 'นามสกุลผู้สมัคร', NULL, NULL, NULL, 1, '2021-03-16', NULL, 2, NULL, NULL, NULL, 2, 0, NULL, 0, 'Untitled-1_1615869279.png', '2021-03-16 04:04:38', '2021-03-16 05:04:11', 'พศิน ทองเกื้อ', '2021-03-16 05:04:11'),
(72, NULL, NULL, 3, 'ทดสอบ', 'ทดสอบ', NULL, NULL, NULL, 1, '2021-03-16', NULL, 1, NULL, NULL, NULL, 7, NULL, NULL, 30, '1_1615888736.png', '2021-03-16 09:58:56', '2021-03-16 10:03:19', NULL, '2021-03-16 10:03:19'),
(73, NULL, 1, 10, 'กอาาาาาา', '55่ีี้ีร้รีุ้้ั', NULL, NULL, NULL, 1, '2021-03-16', NULL, 2, NULL, NULL, NULL, 3, NULL, NULL, 55, '1615618527158_1615889567.jpg', '2021-03-16 10:12:47', '2021-03-17 04:08:31', NULL, '2021-03-17 04:08:31'),
(74, NULL, 1, 77, 'พศวย', 'ทองเกี่ย', NULL, NULL, NULL, 1, '2021-03-17', NULL, 2, NULL, NULL, NULL, 3, NULL, NULL, 25, 'admin_1615974759.png', '2021-03-17 09:52:39', '2021-03-17 09:53:26', NULL, '2021-03-17 09:53:26'),
(75, NULL, 2, 45, 'พศิน', 'ทองเกื้อ', NULL, NULL, NULL, 2, '2021-03-17', NULL, 2, NULL, NULL, NULL, 3, NULL, NULL, 44, '1_1615974777.jpg', '2021-03-17 09:52:57', '2021-03-17 09:53:18', NULL, '2021-03-17 09:53:18'),
(76, NULL, 3, 70, 'พศิน', 'ทองเกื้อ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, NULL, NULL, 50, 'admin_1616390554.png', '2021-03-22 05:22:34', '2021-03-22 05:29:41', NULL, '2021-03-22 05:29:41'),
(77, NULL, 1, 1, 'นางสายพิน', 'ภาวดี', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 758, NULL, 0, '1_นางสายพิน_ภาวดี_1616391439.jpg', '2021-03-22 05:37:19', '2021-03-28 14:24:40', 'ADMIN กลาง', NULL),
(78, NULL, 1, 2, 'นายชัชร์', 'สุเป็ง', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 554, NULL, 0, '2_นายชัชร์_สุเป็ง_1616391465.jpg', '2021-03-22 05:37:45', '2021-03-28 14:24:52', 'ADMIN กลาง', NULL),
(79, NULL, 1, 3, 'นายสมศักดิ์', 'ชิดทอง', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 429, NULL, 0, '3_นายสมศักดิ์_ชิดทอง_1616391489.jpg', '2021-03-22 05:38:09', '2021-03-28 14:24:58', 'ADMIN กลาง', NULL),
(80, NULL, 1, 4, 'นางประนอม', 'จอกดี', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 540, NULL, 0, '4_นางประนอม_จอกดี_1616391512.jpg', '2021-03-22 05:38:32', '2021-03-28 14:25:04', 'ADMIN กลาง', NULL),
(81, NULL, 1, 5, 'นายบุญส่ง', 'ตุ้ยหล้า', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 343, NULL, 0, '5_นายบุญส่ง_ตุ๊ยหล้า_1616391541.jpg', '2021-03-22 05:39:01', '2021-03-28 14:25:33', 'ADMIN กลาง', NULL),
(82, NULL, 1, 6, 'นางวันเพ็ญ', 'อาทิตย์', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 680, NULL, 0, '6_นางวันเพ็ญ_อาทิตย์_1616391567.jpg', '2021-03-22 05:39:27', '2021-03-28 14:25:40', 'ADMIN กลาง', NULL),
(83, NULL, 2, 7, 'นายวิจารณ์', 'ตุละทา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 566, NULL, 0, '7_นายวิจารณ์_ตุละทา_1616391593.jpg', '2021-03-22 05:39:53', '2021-03-28 14:25:46', 'ADMIN กลาง', NULL),
(84, NULL, 2, 8, 'นายนรินทร์', 'อุดมศรี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 518, NULL, 0, '8_นายนรินทร์_อุดมศรี_1616391620.jpg', '2021-03-22 05:40:20', '2021-03-28 14:25:52', 'ADMIN กลาง', NULL),
(85, NULL, 2, 9, 'นายทรัพย์', 'จอกดี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 506, NULL, 0, '9_นายทรัพย์_จอกดี_1616391637.jpg', '2021-03-22 05:40:37', '2021-03-28 14:25:57', 'ADMIN กลาง', NULL),
(86, NULL, 2, 10, 'นายสวงษ์', 'มูลทา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 499, NULL, 0, '10_นายสวงษ์_มูลทา_1616391666.jpg', '2021-03-22 05:41:06', '2021-03-28 14:26:02', 'ADMIN กลาง', NULL),
(87, NULL, 2, 11, 'นางสาวญาณิศา', 'สุขเกษม', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 520, NULL, 0, '11_นางสาวญาณิศา_สุขเกษม_1616391690.jpg', '2021-03-22 05:41:30', '2021-03-28 14:26:08', 'ADMIN กลาง', NULL),
(88, NULL, 2, 12, 'นายสมเพชร', 'วงค์หาญ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 296, NULL, 0, '12_นายสมเพชร_วงค์หาญ_1616391715.jpg', '2021-03-22 05:41:55', '2021-03-28 14:26:14', 'ADMIN กลาง', NULL),
(89, NULL, 3, 13, 'นายเหลื่อม', 'ธรรมปัญญา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 401, NULL, 0, '13_นายเหลื่อม_ธรรมปัญญา_1616391737.jpg', '2021-03-22 05:42:17', '2021-03-28 14:26:20', 'ADMIN กลาง', NULL),
(90, NULL, 3, 14, 'นายสมบูรณ์', 'ธรรมปัญญา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 303, NULL, 0, '14_นายสมบูรณ์_ธรรมปัญญา_1616391772.jpg', '2021-03-22 05:42:52', '2021-03-28 14:26:26', 'ADMIN กลาง', NULL),
(91, NULL, 3, 15, 'นายปริญญา', 'บุญทวี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 342, NULL, 0, '15_นายปริญญา_บุญทวี_1616391796.jpg', '2021-03-22 05:43:16', '2021-03-28 14:26:32', 'ADMIN กลาง', NULL),
(92, NULL, 3, 16, 'นายพงษ์ศักดิ์', 'คำพันธ์', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 273, NULL, 0, '16_นายพงษ์ศักดิ์_คำพันธ์_1616391817.jpg', '2021-03-22 05:43:37', '2021-03-28 14:26:40', 'ADMIN กลาง', NULL),
(93, NULL, 3, 17, 'นายโยธิน', 'ปัญญาเลิศ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 278, NULL, 0, '17_นายโยธิน_ปัญญาเลิศ_1616391839.jpg', '2021-03-22 05:43:59', '2021-03-28 14:26:49', 'ADMIN กลาง', NULL),
(94, NULL, 3, 18, 'นางอรวรรยา', 'ขะวงษ์', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 1, 222, NULL, 0, '18_นางอรวรรยา_ขะวงษ์_1616391861.jpg', '2021-03-22 05:44:21', '2021-03-28 14:26:54', 'ADMIN กลาง', NULL),
(95, NULL, 1, 1, 'นางสาวเบญจมาภรณ์', 'ภิรักษ์', NULL, NULL, NULL, 2, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 368, NULL, 0, '1_นางสาวเบญจมาภรณ์_ภิรักษ์_1616392213.jpg', '2021-03-22 05:50:13', '2021-03-28 14:27:10', 'ADMIN กลาง', NULL),
(96, NULL, 1, 2, 'นายประยุฎ', 'สมนา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 334, NULL, 0, '2_นายประยุฎ_สมนา_1616392252.jpg', '2021-03-22 05:50:52', '2021-03-28 14:27:22', 'ADMIN กลาง', NULL),
(97, NULL, 1, 3, 'นายอนุกูล', 'จันทร์พิสุ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 399, NULL, 0, '3_นายอนุกูล_จันทร์พิสุ_1616392275.jpg', '2021-03-22 05:51:15', '2021-03-28 14:27:29', 'ADMIN กลาง', NULL),
(98, NULL, 1, 4, 'นายนิทัศน์', 'ชื่นแสน', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 360, NULL, 0, '4_นายนิทัศน์_ชื่นแสน_1616392294.jpg', '2021-03-22 05:51:34', '2021-03-28 14:27:34', 'ADMIN กลาง', NULL),
(99, NULL, 1, 5, 'นายมนตรี', 'คำวงค์ศรี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 431, NULL, 0, '5_นายมนตรี_คำวงค์ศรี_1616392313.jpg', '2021-03-22 05:51:53', '2021-03-28 14:27:46', 'ADMIN กลาง', NULL),
(100, NULL, 1, 6, 'นายวิเชียร', 'กันทา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 385, NULL, 0, '6_นายวิเชียร_กันทา_1616392333.jpg', '2021-03-22 05:52:13', '2021-03-28 14:27:53', 'ADMIN กลาง', NULL),
(101, NULL, 2, 7, 'นายศรีวัย', 'ศรีวิชัย', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 545, NULL, 0, '7_นายศรีวัย_ศรีวิชัย_1616392352.jpg', '2021-03-22 05:52:32', '2021-03-28 14:28:01', 'ADMIN กลาง', NULL),
(102, NULL, 2, 8, 'นายพันธ์', 'ปันธิมา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 699, NULL, 0, '8_นายพันธ์_ปันธิมา_1616392404.jpg', '2021-03-22 05:53:24', '2021-03-28 14:28:11', 'ADMIN กลาง', NULL),
(103, NULL, 2, 9, 'นายสมศักดิ์', 'แก้วทะโลม', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 517, NULL, 0, '9_นายสมศักดิ์_แก้วทะโลม_1616392430.jpg', '2021-03-22 05:53:50', '2021-03-28 14:28:17', 'ADMIN กลาง', NULL),
(104, NULL, 2, 10, 'พันตรีณรงค์', 'พลเดช', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 478, NULL, 0, '10_พันตรีณรงค์_พลเดช_1616392448.jpg', '2021-03-22 05:54:08', '2021-03-28 14:28:25', 'ADMIN กลาง', NULL),
(105, NULL, 2, 11, 'นายรังสรรค์', 'มาลัย', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 442, NULL, 0, '11_นายรังสรรค์_มาลัย_1616392463.jpg', '2021-03-22 05:54:23', '2021-03-28 14:28:31', 'ADMIN กลาง', NULL),
(106, NULL, 2, 12, 'นายเกษม', 'สุวรรณเสรี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 424, NULL, 0, '12_นายเกษม_สุวรรณเสรี_1616392482.jpg', '2021-03-22 05:54:42', '2021-03-28 14:28:37', 'ADMIN กลาง', NULL),
(107, NULL, 3, 13, 'นายพิสันต์', 'พรหมวังศรี', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 615, NULL, 0, '13_นายพิสันต์_พรหมวังศรี_1616392501.jpg', '2021-03-22 05:55:01', '2021-03-28 14:28:46', 'ADMIN กลาง', NULL),
(108, NULL, 3, 14, 'นายประพันธ์', 'หิรัญญา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 721, NULL, 0, '14_นายประพันธ์_หิรัญญา_1616392520.jpg', '2021-03-22 05:55:20', '2021-03-28 14:28:52', 'ADMIN กลาง', NULL),
(109, NULL, 3, 15, 'นายทองล้วน', 'วงษา', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 717, NULL, 0, '15_นายทองล้วน_วงษา_1616392537.jpg', '2021-03-22 05:55:37', '2021-03-28 14:29:01', 'ADMIN กลาง', NULL),
(110, NULL, 3, 16, 'นายสุพจน์', 'จักรคำ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 717, NULL, 0, '16_นายสุพจน์_จักรคำ_1616392556.jpg', '2021-03-22 05:55:56', '2021-03-28 14:29:08', 'ADMIN กลาง', NULL),
(111, NULL, 3, 17, 'นายเชาวลิต', 'ลือเลิศ', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 615, NULL, 0, '17_นายเชาวลิต_ลือเลิศ_1616392577.jpg', '2021-03-22 05:56:17', '2021-03-28 14:29:14', 'ADMIN กลาง', NULL),
(112, NULL, 3, 18, 'นายกิจจา', 'ชัยวิรัตน์', NULL, NULL, NULL, 1, '2021-03-22', NULL, 2, NULL, NULL, NULL, 2, 528, NULL, 0, '18_นายกิจจา_ชัยวิรัตน์_1616392594.jpg', '2021-03-22 05:56:34', '2021-03-28 14:29:19', 'ADMIN กลาง', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_name`, `created_at`, `updated_at`) VALUES
(1, 'ชาย', '2021-02-17 21:03:52', '2021-02-17 21:03:52'),
(2, 'หญิง', '2021-02-17 21:03:52', '2021-02-17 21:03:52');

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
(1, '2018_03_01_045640_create_departments_table', 1),
(2, '2018_03_05_132536_create_countries_table', 1),
(3, '2018_03_05_170530_create_cities_table', 1),
(4, '2018_03_06_115649_create_salaries_table', 1),
(5, '2018_03_06_123354_create_states_table', 1),
(6, '2018_03_06_131623_create_divisions_table', 1),
(7, '2018_03_07_164659_create_genders_table', 1),
(8, '2018_03_08_133020_create_employees_table', 1),
(9, '2018_03_13_165135_create_admins_table', 1),
(10, '2018_06_25_150148_password_resets', 1),
(11, '2021_02_23_031842_create_dynamic_field', 2),
(12, '2021_02_23_034510_create_ip_approve_tbl', 3),
(13, '2021_02_23_042010_create_dynamic_field', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('phasin80@gmail.com', '$2y$10$xeesFAARsvjhdLJimguY/Ok/j/7h3.vL4kiiTU1iQ611SBcZJNI5a', '2021-02-26 06:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_amount` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `s_amount`, `created_at`, `updated_at`) VALUES
(1, 10000.00, '2021-02-17 21:05:14', '2021-02-17 21:05:14'),
(2, 11000.00, '2021-02-17 21:05:19', '2021-02-17 21:05:19'),
(3, 12000.00, '2021-02-17 21:05:23', '2021-02-17 21:05:23'),
(4, 12500.00, '2021-02-24 04:41:31', '2021-02-24 04:41:31'),
(5, 15800.00, '2021-02-24 04:42:52', '2021-02-24 04:42:52'),
(6, 15000.00, '2021-02-24 04:42:58', '2021-02-24 04:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'เมือง', '2021-02-17 21:14:52', '2021-02-17 21:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `system_setting`
--

CREATE TABLE `system_setting` (
  `id` int(11) NOT NULL,
  `facebook_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_setting`
--

INSERT INTO `system_setting` (`id`, `facebook_link`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-03-15 02:19:51', '2021-03-29 08:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payments`
--

CREATE TABLE `tb_payments` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `salary` int(20) DEFAULT NULL,
  `money_extra` int(20) DEFAULT NULL,
  `salary_amount` int(20) DEFAULT NULL,
  `sso_pay` int(20) DEFAULT NULL,
  `saving_group_pay` int(20) DEFAULT NULL,
  `saving_co_pay` int(20) DEFAULT NULL,
  `tax_pay` int(20) DEFAULT NULL,
  `pay_amount` int(20) DEFAULT NULL,
  `net_receive` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_dept_id_foreign` (`dept_id`),
  ADD KEY `employees_country_id_foreign` (`country_id`),
  ADD KEY `employees_state_id_foreign` (`state_id`),
  ADD KEY `employees_city_id_foreign` (`city_id`),
  ADD KEY `employees_division_id_foreign` (`division_id`),
  ADD KEY `employees_salary_id_foreign` (`salary_id`),
  ADD KEY `employees_gender_id_foreign` (`gender_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
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
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `constituency`
--
ALTER TABLE `constituency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dynamic_fields`
--
ALTER TABLE `dynamic_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `system_setting`
--
ALTER TABLE `system_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_payments`
--
ALTER TABLE `tb_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `employees_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `employees_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `employees_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `employees_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`),
  ADD CONSTRAINT `employees_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
