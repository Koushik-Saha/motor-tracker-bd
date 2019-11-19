-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 07:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moto_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_bn`, `title_en`, `sub_title_bn`, `sub_title_en`, `description_bn`, `description_en`, `photo`, `created_at`, `updated_at`) VALUES
(1, '', 'our customer over 25 years!!', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Perfer repudiandae nostrum alias quibusdam!</p>', '', '<p>No singulis postulant his, per decore elaboraret sadipscing Id namwisi accusamus dolro ametmoderatius, denique mediocrem voluptatum. per decore elaboraret sadipscing te labitursaperetnec amet. Eos in quis eripuit. Minim theophrastus eum id. Eos an graece libris inter- esset. Eu duo mentitum maluisset</p>', '2019-07-16-5d2d6fc807b77.png', NULL, '2019-07-16 00:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_clients`
--

CREATE TABLE `home_page_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_clients`
--

INSERT INTO `home_page_clients` (`id`, `name`, `phone`, `address`, `photo`, `created_at`, `updated_at`) VALUES
(13, 'Client', '0000000000', 'Dhaka', 'client-2019-07-14.png', '2019-07-14 05:21:04', '2019-07-14 05:21:04'),
(14, 'Client 2', '0000000000', 'Dhaka', 'client-2-2019-07-14.png', '2019-07-14 05:22:00', '2019-07-14 05:22:00'),
(15, 'Client 3', '0000000000', 'Dhaka', 'client-3-2019-07-14.png', '2019-07-14 05:22:44', '2019-07-14 05:22:44'),
(16, 'Client 4', '0000000000', 'Dhaka', 'client-4-2019-07-14.png', '2019-07-14 05:23:11', '2019-07-14 05:23:11'),
(17, 'Client 5', '0000000000', 'Dhaka', 'client-5-2019-07-14.png', '2019-07-14 05:23:43', '2019-07-14 05:23:43'),
(18, 'Client 6', '0000000000', 'Dhaka', 'client-6-2019-07-14.png', '2019-07-14 05:25:49', '2019-07-14 05:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_services`
--

CREATE TABLE `home_page_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_services`
--

INSERT INTO `home_page_services` (`id`, `title`, `sub_title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(12, 'Real Time Tracking', NULL, 'Track your vehicle’s real time for specific time with your device with just one click.Signals that a GPS device constantly receives from the satellite, the movement of the person or vehicle can be tracked.', 'real-time-tracking-2019-07-16-5d2d94fa62f07.png', '2019-07-16 03:12:26', '2019-07-16 03:12:26'),
(13, 'Engine On/Off Alert', NULL, 'Get real time engine On/Off alerts and also see the engine status of your vehicle. This is a unique feature of Darpan GPS tracking which no one else is offering.', 'engine-onoff-alert-2019-07-16-5d2d9752da109.jpg', '2019-07-16 03:22:26', '2019-07-16 03:22:26'),
(14, 'Fuel Monitoring', NULL, 'Fuel Monitor is your assistant to help keeping an eye on the cost for car: fuel consumption, cost per miles/km, fuels, services and repairs', 'fuel-monitoring-2019-07-16-5d2d98e6be48b.jpg', '2019-07-16 03:29:10', '2019-07-16 03:29:10'),
(15, 'Customization Support', NULL, 'We provide service based solution to clients with good results. We are delivering the right solutions at the right price to our customers', 'customization-support-2019-07-16-5d2d9c144130b.jpg', '2019-07-16 03:42:44', '2019-07-16 03:42:44'),
(16, 'History Route Playback', NULL, 'Keeping track of persons, pets, and even vehicles are made possible today, thanks to GPS technology.', 'history-route-playback-2019-07-16-5d2db5177e2b0.jpg', '2019-07-16 05:29:27', '2019-07-16 05:29:27'),
(17, 'Fuel Monitoring', NULL, 'Fuel Monitor is your assistant to help keeping an eye on the cost for car: fuel consumption, cost per miles/km, fuels, services and repairs', 'fuel-monitoring-2019-07-16-5d2db55a217b0.jpg', '2019-07-16 05:30:34', '2019-07-16 05:30:34');

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
(3, '2019_07_10_091023_create_home_page_clients_table', 2),
(4, '2019_07_13_052055_create_home_page_services_table', 3),
(5, '2019_07_14_053724_create_package_and_prices_table', 4),
(6, '2019_07_15_044851_create_software_table', 5),
(7, '2019_07_15_113809_create_sliders_table', 6),
(9, '2019_07_16_041855_create_abouts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `package_and_prices`
--

CREATE TABLE `package_and_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_and_prices`
--

INSERT INTO `package_and_prices` (`id`, `title`, `sub_title`, `price`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Basic', 'Regular Price 4500tk Only', 350, '<p>Daily fuel consumption record<br />Real-time live tracking<br />Engine on/off alert<br />GEO-Fence alert<br />Speed alert<br />1 Year Service Warranty</p>', '2019-07-14 05:08:34', '2019-07-14 05:08:34'),
(5, 'Bike', NULL, 350, '<p>Daily fuel consumption record<br />Real-time live tracking<br />Engine on/off alert<br />GEO-Fence alert<br />Speed alert<br />1 Year Service Warranty</p>', '2019-07-14 05:13:29', '2019-07-14 05:13:29'),
(6, 'Standerd', NULL, 550, '<p>Daily fuel consumption record<br />Real-time live tracking<br />Engine on/off alert<br />GEO-Fence alert<br />Speed alert<br />1 Year Service Warranty</p>', '2019-07-14 05:14:32', '2019-07-14 05:14:32'),
(7, 'Premium', NULL, 750, '<p>Daily fuel consumption record<br />Real-time live tracking<br />Engine on/off alert<br />GEO-Fence alert<br />Speed alert<br />1 Year Service Warranty</p>', '2019-07-14 05:15:05', '2019-07-14 05:15:05');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_bn`, `title_en`, `sub_title_bn`, `sub_title_en`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'With over 25 years of experience', NULL, 'Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems.', '-2019-07-22-5d3561cfb5ac9.jpg', '2019-07-16 03:55:36', '2019-07-16 03:55:36'),
(3, NULL, 'With over 25 years of experience', NULL, 'Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems.', '-2019-07-16-5d2d9f5226a5e.jpg', '2019-07-16 03:56:34', '2019-07-16 03:56:34'),
(4, NULL, 'With over 25 years of experience', NULL, 'Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems.', '-2019-07-16-5d2d9f1881b1a.jpg', '2019-07-21 05:00:47', '2019-07-21 05:00:47'),
(7, NULL, 'With over 25 years of experience', NULL, 'Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems.', '-2019-07-22-5d3565011b182.jpg', '2019-07-22 01:25:53', '2019-07-22 01:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `android_app_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apple_app_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_manual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `android_app_link`, `apple_app_link`, `user_manual`, `created_at`, `updated_at`) VALUES
(1, 'https://play.google.com/store/apps/details?id=com.facebook.katana&hl=en', 'https://apps.apple.com/in/app/facebook/id284882215', '2019-07-15-5d2c40d8214aa.pdf', NULL, '2019-07-15 03:01:12');

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
(1, 'Admin', 'riyadul@gmail.com', NULL, '$2y$10$q3OlfOGypXF9K0XSOKktl.rQaOuLwjrCbXjmvrZhryYN4NJkVH/s.', NULL, '2019-07-06 23:01:35', '2019-07-06 23:01:35'),
(2, 'Bd Soft It', 'support@bdsoftit.com', NULL, '$2y$10$LUUvT/FyW47YAl.DBNqI.eDpOXpSGZMhLLLmT9F0fcGxkz0Z9azIu', NULL, '2019-07-06 23:11:22', '2019-07-06 23:11:22'),
(4, 'Moto Tracker', 'mmhassan.sm@gmail.com', NULL, '$2y$10$kA6ytupOviMxIcEsT9.woeVYhUsgFHVfqUsZUxU3cASH47f/eyroS', NULL, '2019-07-18 06:41:31', '2019-07-18 06:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_clients`
--
ALTER TABLE `home_page_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_services`
--
ALTER TABLE `home_page_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_and_prices`
--
ALTER TABLE `package_and_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page_clients`
--
ALTER TABLE `home_page_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home_page_services`
--
ALTER TABLE `home_page_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_and_prices`
--
ALTER TABLE `package_and_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
