-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 03:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `unm`, `pass`, `mob`, `created_at`, `updated_at`) VALUES
(11, 'priyanka', 'priyanka@gmail.com', '$2y$10$Tl4hjLFdDOXfQVYg8EwVseSACHzEC.8xK7XtS2ahkXbi7ipBJ87wK', 1236547894, '2023-04-08 08:07:25', '2023-04-08 08:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `cat_img`, `created_at`, `updated_at`) VALUES
(1, 'Nature', 'nature_small_5.jpg', NULL, NULL),
(2, 'God', '16810469522585_img.jpg', NULL, NULL),
(3, 'Animals', 'wp2552953.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `cat_id`, `file`, `des`, `created_at`, `updated_at`) VALUES
(5, 'Mahadev', 2, '16810469522585_img.jpg', 'mahadev', '2023-04-09 07:59:12', '2023-04-09 07:59:12'),
(6, 'Krishiv', 1, '16810469811230_img.jpg', NULL, '2023-04-09 07:59:41', '2023-04-09 07:59:41'),
(7, 'Nature 1', 1, '16812059376354_img.jpg', NULL, '2023-04-11 04:08:57', '2023-04-11 04:08:57'),
(8, 'Nature 3', 1, '16812059571087_img.jpg', NULL, '2023-04-11 04:09:17', '2023-04-11 04:09:17'),
(9, 'nature 4', 1, '16812059849174_img.jpg', NULL, '2023-04-11 04:09:44', '2023-04-11 04:09:44'),
(10, 'Nature 5', 1, '16812060015466_img.jpg', NULL, '2023-04-11 04:10:01', '2023-04-11 04:10:01'),
(11, 'Nature 6', 1, '16812060182876_img.jpg', NULL, '2023-04-11 04:10:18', '2023-04-11 04:10:18'),
(12, 'Nature 7', 1, '16812060329308_img.jpg', NULL, '2023-04-11 04:10:33', '2023-04-11 04:10:33'),
(13, 'Krishna 1', 2, '16812078982816_img.jpg', NULL, '2023-04-11 04:41:38', '2023-04-11 04:41:38'),
(14, 'Krishna 2', 2, '16812079262564_img.jpg', NULL, '2023-04-11 04:42:06', '2023-04-11 04:42:06'),
(15, 'Mahakali 1', 2, '16812079405212_img.jpg', NULL, '2023-04-11 04:42:20', '2023-04-11 04:42:20'),
(16, 'Parrot 1', 3, '16812079696621_img.webp', NULL, '2023-04-11 04:42:49', '2023-04-11 04:42:49'),
(17, 'Humming Bird 1', 3, '16812079926159_img.webp', NULL, '2023-04-11 04:43:12', '2023-04-11 04:43:12'),
(18, 'Lion 1', 3, '16812080186892_img.jpg', NULL, '2023-04-11 04:43:38', '2023-04-11 04:43:38'),
(19, 'Lion 2', 3, '16812080396653_img.jpg', NULL, '2023-04-11 04:43:59', '2023-04-11 04:43:59'),
(20, 'Leopard', 3, '16812080579713_img.jpg', NULL, '2023-04-11 04:44:17', '2023-04-11 04:44:17'),
(21, 'Multiple Photos', 2, '16812128164949_img.jpg,16812128162607_img.jpg,16812128169489_img.jpg', NULL, '2023-04-11 06:03:36', '2023-04-11 06:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_04_06_132541_create_images_table', 1),
(3, '2023_04_06_132703_create_admins_table', 1),
(4, '2023_04_06_172342_create_categories_table', 1),
(5, '2023_04_08_110752_create_admins_table', 2),
(6, '2023_04_11_122409_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `unm`, `pass`, `mob`, `created_at`, `updated_at`) VALUES
(1, 'priyanka', 'priyanka@gmail.com', '$2y$10$xR9izYlYcfxNa4bHpENHBeW9iss7qXxCjIYr9nhLGOQ5yTzQ0bxlm', 9979159804, '2023-04-11 07:16:19', '2023-04-11 07:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_cat_id_images` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
