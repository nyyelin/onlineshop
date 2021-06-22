-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2020 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b17_os_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'hello world', 'backend/brandimg/f75979856edbbb26fcfa6f512153e0ab.jpg', '2020-08-27 20:04:58', '2020-08-30 08:28:54'),
(2, 'Delectus deleniti rerum totam ullam.', 'backend/brandimg/24ceb4e9df00cece3824fb93711693b9.jpg', '2020-08-27 20:04:58', '2020-08-27 20:04:58'),
(3, 'Quasi inventore veritatis.', 'backend/brandimg/88ac0185f8aa795cc5691198692e10d3.jpg', '2020-08-27 20:04:58', '2020-08-27 20:04:58'),
(4, 'Ut similique iure rerum.', 'backend/brandimg/3fd04c6529c12c1d86b5c886b027feb6.jpg', '2020-08-27 20:04:58', '2020-08-27 20:04:58'),
(5, 'Eos nulla ullam sequi.', 'backend/brandimg/b1f247239018306a72d903e14aa2dedd.jpg', '2020-08-27 20:04:58', '2020-08-27 20:04:58'),
(6, 'Honey Tun', 'backend/brandimg/1598608874.jpeg', '2020-08-28 03:31:14', '2020-08-28 03:31:14'),
(7, 'flower', 'backend/brandimg/1599110775.jpeg', '2020-09-02 22:56:15', '2020-09-02 22:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatem quidem quod.', 'backend/categoryimg/d3cb9df4ba757821aca0691c1ea1723d.jpg', '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(2, 'Adipisci voluptatem eos.', 'backend/categoryimg/59d0386373e2fd0b275d569adc170833.jpg', '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(3, 'hello world', 'backend/categoryimg/1598800061.png', '2020-08-30 08:34:10', '2020-08-30 08:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `phoneno`, `address`, `profile`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '123456789', 'ygn', 'frontend/image/profile/1599192419.jpeg', 8, '2020-09-03 21:36:59', '2020-09-03 21:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `subcategory_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, '0001', 'Programming', 'backend/itemimg/1598582127.jpeg', 10000, 100, 'hello', 1, 1, '2020-08-27 20:05:27', '2020-08-27 20:05:27'),
(2, '0002', 'Nike', 'backend/itemimg/1598582228.png', 14000, 200, 'heloo world', 1, 1, '2020-08-27 20:05:54', '2020-08-27 20:05:54'),
(3, '0003', 'Wifi', 'backend/itemimg/1598582183.jpeg', 12000, 200, 'hello love', 2, 5, '2020-08-27 20:06:23', '2020-08-27 20:06:23'),
(4, '0004', 'Addias', 'backend/itemimg/1598582228.png', 2000, 300, 'hello hate you', 4, 3, '2020-08-27 20:07:08', '2020-08-27 20:07:08'),
(5, '0005', 'Hello', 'backend/itemimg/1598582277.jpeg', 10000, 4000, 'hello cutie', 6, 2, '2020-08-27 20:07:57', '2020-08-27 20:07:57'),
(6, '0006', 'Andorid', 'backend/itemimg/1598582313.jpeg', 14000, 0, 'heloo', 6, 2, '2020-08-27 20:08:33', '2020-08-27 20:08:33');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_24_162103_create_brands_table', 1),
(5, '2020_08_24_173019_create_categories_table', 1),
(6, '2020_08_24_173032_create_subcategories_table', 1),
(7, '2020_08_24_174948_create_customers_table', 1),
(8, '2020_08_25_043044_create_students_table', 1),
(9, '2020_08_25_051652_create_items_table', 1),
(10, '2020_08_31_034540_create_orders_table', 2),
(11, '2020_08_31_035516_create_order_detail_table', 2),
(12, '2020_09_01_075738_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(1, 'App\\User', 4),
(1, 'App\\User', 8),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucherno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderdate` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `voucherno`, `orderdate`, `status`, `note`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5f4cc3a40e3db', '2020-08-31', 0, 'hello', 38000, 1, '2020-08-31 03:02:20', '2020-08-31 03:02:20'),
(2, '5f4cc4133f667', '2020-08-31', 0, NULL, 14000, 1, '2020-08-31 03:04:11', '2020-08-31 03:04:11'),
(3, '5f4cc4532ea7b', '2020-08-31', 0, NULL, 10000, 3, '2020-08-31 03:05:15', '2020-08-31 03:05:15'),
(4, '5f4e51500062a', '2020-09-01', 0, 'hello', 20000, 4, '2020-09-01 07:19:04', '2020-09-01 07:19:04'),
(5, '5f4e5e47f3762', '2020-09-01', 0, NULL, 34000, 4, '2020-09-01 08:14:24', '2020-09-01 08:14:24'),
(6, '5f4f7545574f5', '2020-09-02', 0, NULL, 2000, 3, '2020-09-02 04:04:45', '2020-09-02 04:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `item_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-08-31 03:02:20', '2020-08-31 03:02:20'),
(2, 1, 2, 1, '2020-08-31 03:02:20', '2020-08-31 03:02:20'),
(3, 1, 3, 1, '2020-08-31 03:02:20', '2020-08-31 03:02:20'),
(4, 1, 4, 1, '2020-08-31 03:02:20', '2020-08-31 03:02:20'),
(5, 2, 3, 1, '2020-08-31 03:04:11', '2020-08-31 03:04:11'),
(6, 2, 4, 1, '2020-08-31 03:04:11', '2020-08-31 03:04:11'),
(7, 3, 5, 1, '2020-08-31 03:05:15', '2020-08-31 03:05:15'),
(8, 4, 1, 2, '2020-09-01 07:19:04', '2020-09-01 07:19:04'),
(9, 5, 1, 2, '2020-09-01 08:14:24', '2020-09-01 08:14:24'),
(10, 5, 6, 1, '2020-09-01 08:14:24', '2020-09-01 08:14:24'),
(11, 6, 4, 1, '2020-09-02 04:04:45', '2020-09-02 04:04:45');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Customer', 'web', '2020-09-01 01:47:34', '2020-09-01 01:47:34'),
(2, 'Admin', 'web', '2020-09-01 01:47:34', '2020-09-01 01:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Nona Schinner IV', 'ena63@example.net', '701 Cathryn Knoll Suite 383\nNorth Laviniashire, WV 18373', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(2, 'Newell Nolan', 'hoppe.carolyne@example.org', '8910 Mariane Divide\nWuckertmouth, KY 16940-2170', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(3, 'Mandy Lebsack II', 'hailey62@example.org', '7348 Von Manor Apt. 799\nNorvalshire, TN 24132-3707', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(4, 'Pierre Legros', 'nicolas.nathan@example.net', '2722 Alexie Rest\nLake Winona, CA 23481', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(5, 'Merle Adams PhD', 'rohan.tracey@example.net', '1682 Griffin Trail Apt. 525\nWest Ressie, KY 32250-8973', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(6, 'Prof. Brandy McCullough', 'adolf.spencer@example.org', '72175 Considine Islands\nWest Lisetteland, FL 94405', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(7, 'Betsy Harber', 'eleonore.quigley@example.com', '53460 Geraldine Motorway Suite 742\nSteuberland, MS 70523-0464', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(8, 'Marina Rath', 'brice.kirlin@example.net', '5197 Gus Club\nNorth Anjaliton, CT 21500', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(9, 'Devonte Hyatt', 'koelpin.jerrell@example.net', '67059 Prosacco Springs\nEast Katrinemouth, CT 58908-5983', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(10, 'Dr. Emerson Schimmel MD', 'legros.flavie@example.net', '6876 Prosacco Mills Suite 490\nNorth Paulineberg, UT 69525-6616', '2020-08-27 02:15:31', '2020-08-27 02:15:31'),
(11, 'Miss Kathryne Carroll', 'leda57@example.net', '8425 Helena Summit\nNew Curt, NY 37638-7625', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(12, 'Gladyce Koelpin IV', 'thora83@example.net', '83043 Toy Creek Apt. 820\nSheldonton, KS 68751', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(13, 'Jacky Robel V', 'vschmidt@example.com', '65146 Ratke Drive Suite 656\nNew Amiya, WA 50749', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(14, 'Alysa Heathcote', 'tobin66@example.com', '467 Keeling Knoll Apt. 069\nWest Lisandroburgh, OH 90006', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(15, 'Prof. Merritt Stark V', 'abigale.grimes@example.com', '7497 Emmerich Landing\nSouth Abnerberg, OK 41244', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(16, 'Sadye Langosh', 'rylee00@example.com', '67113 Reichert Freeway Apt. 813\nNorth Enrico, NH 12633', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(17, 'Jovanny Casper', 'pdavis@example.org', '714 D\'Amore Views Suite 461\nNew Zola, KY 27179', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(18, 'Reta Larson', 'corine27@example.net', '879 Howe Points\nPort Braxtonberg, UT 41259', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(19, 'Royce Bogisich', 'aisha61@example.com', '4821 Bruen Squares Apt. 198\nLake Robinview, VA 56294-4915', '2020-08-27 20:04:49', '2020-08-27 20:04:49'),
(20, 'Daniella Schoen', 'turcotte.jimmy@example.net', '244 Heath Bypass Suite 187\nNew May, ME 46287', '2020-08-27 20:04:49', '2020-08-27 20:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Eum sed est fugiat.', 1, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(2, 'Qui est sapiente cum.', 1, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(3, 'Voluptas accusantium.', 1, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(4, 'Voluptatem nostrum et.', 2, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(5, 'Qui et beatae qui.', 2, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(6, 'Aut quos odit.', 2, '2020-08-27 02:15:35', '2020-08-27 02:15:35'),
(7, 'hello world', 3, '2020-08-30 08:46:50', '2020-08-30 08:46:50'),
(8, 'hello world', 1, '2020-08-30 08:50:37', '2020-08-30 08:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nyinyi', 'nyinyi@gmail.com', NULL, '$2y$10$QHFhfhxm3jFc0GA3r4HA3eV0NygEPLyIGTK5WNKEYZ69tVoGsy0Ye', NULL, '2020-08-31 02:59:54', '2020-08-31 02:59:54'),
(2, 'nyiye', 'nyi@gmail.com', NULL, '$2y$10$yvpUGdwl0s6.HqvBWfwNKu6N0zUwqR9XHyS5A/j6BnCuJvqiZzSZG', NULL, '2020-08-31 22:47:05', '2020-08-31 22:47:05'),
(3, 'aung aung', 'aung@gmail.com', NULL, '$2y$10$MvcTkDGLyejt55kJ4WEwhuuOJaAyjMll2UYFPtNdCFTgVAvmoPb0W', NULL, '2020-09-01 02:08:15', '2020-09-01 02:08:15'),
(4, 'aung Fyo', 'aungfyo@gmail.com', NULL, '$2y$10$2Z75zuOswADUtAFHjP6wdOx.QCeUbajY0hcqi7bQ0uubB3q5Jdn2.', NULL, '2020-09-02 02:08:47', '2020-09-02 02:08:47'),
(5, 'Honey Tun', 'honey@gmail.com', NULL, '$2y$10$QoPakjb2fkoZA/EwD9X1Du.d0Boz3Jxg0ve8e1HxjIWqU1Jf4GXDi', NULL, '2020-09-03 21:32:10', '2020-09-03 21:32:10'),
(6, 'Honey Tun1', 'honey1@gmail.com', NULL, '$2y$10$6pcuAhnk8aTlcgW7FtoF/.ab.aanGZim888zqME/tXKr5Abd6uABm', NULL, '2020-09-03 21:34:19', '2020-09-03 21:34:19'),
(7, 'Honey Tun2', 'honey2@gmail.com', NULL, '$2y$10$kxd.qfMMt5Iv6fqE5nKiVuy56AJRe3ZXtxfxdlmZe.rYkuWZiwM8u', NULL, '2020-09-03 21:34:53', '2020-09-03 21:34:53'),
(8, 'Programming', 'pp@gmail.com', NULL, '$2y$10$SVdb33PARvucshdnB30mvuvQB9ItwcKDLCI1qeZNRWLw.YBjbk0hC', NULL, '2020-09-03 21:36:59', '2020-09-03 21:36:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `items_brand_id_foreign` (`brand_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_item_id_foreign` (`item_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
