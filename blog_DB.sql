-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groubid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `groubid`, `created_at`, `updated_at`) VALUES
(2, 'abozaid', '202cb962ac59075b964b07152d234b70', 0, NULL, NULL),
(3, 'yousef', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cateogeries`
--

CREATE TABLE `cateogeries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cateogeries`
--

INSERT INTO `cateogeries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'games', 'games', '2018-04-25 02:31:26', '2018-04-25 02:31:26'),
(3, 'programs', 'programs', '2018-04-25 02:31:40', '2018-04-25 02:31:40'),
(4, 'laravel', 'laravel5.5', '2018-04-25 02:32:08', '2018-04-25 02:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `cateogery_posts`
--

CREATE TABLE `cateogery_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `cateogeries_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cateogery_posts`
--

INSERT INTO `cateogery_posts` (`post_id`, `cateogeries_id`, `created_at`, `updated_at`) VALUES
(26, 4, '2018-04-25 02:36:04', '2018-04-25 02:36:04'),
(27, 4, '2018-04-25 02:37:26', '2018-04-25 02:37:26'),
(28, 2, '2018-04-25 02:38:54', '2018-04-25 02:38:54'),
(29, 3, '2018-04-25 02:39:59', '2018-04-25 02:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(13, 'ali', 'ali', 'ead', 'ousef@yahoo.com', 'aab3238922bcc25a6f606eb525ffdc56', '2018-04-23 20:34:05', '2018-04-23 20:34:05'),
(14, 'basem', 'basem', 'gamal', 'usef@yahoo.com', '75877cb75154206c4e65e76b88a12712', '2018-04-23 20:35:12', '2018-04-23 20:35:12'),
(24, 'barakt', 'mohammed', 'barakt', 'ouawsbef@yahoo.com', '202cb962ac59075b964b07152d234b70', '2018-04-25 01:31:21', '2018-04-25 01:31:21'),
(26, 'ali', 'a', 'd', 'uwwsef@yahoo.com', '202cb962ac59075b964b07152d234b70', '2018-04-25 03:23:54', '2018-04-25 03:23:54'),
(27, 'joen', 'joen', 'alex', 'joen11@gmail.com', '2b24d495052a8ce66358eb576b8912c8', '2018-04-25 03:24:26', '2018-04-25 03:24:26');

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
(3, '2018_04_19_055023_create_posts_table', 1),
(4, '2018_04_19_055710_create_tags_table', 1),
(5, '2018_04_19_055831_create_cateogeries_table', 1),
(6, '2018_04_19_060016_create_cateogery_posts_table', 1),
(7, '2018_04_19_060327_create_post_tags_table', 1),
(8, '2018_04_19_060537_create_admins_table', 1),
(9, '2018_04_19_060820_create_roles_table', 1),
(10, '2018_04_19_060911_create_admin_roles_table', 1),
(11, '2018_04_23_174932_create_members_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `created_at`, `updated_at`) VALUES
(25, 'Installing Laravel', 'laravel', 'laravel5.5', 'Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.\r\nVia Laravel Installer\r\nFirst, download the Laravel installer using Composer:\r\ncomposer global require \"laravel/installer\"\r\nMake sure to place composer\'s system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:', 1, NULL, '2018-04-25 02:34:11', '2018-04-25 02:34:11'),
(26, 'Default Route', 'laravel routing', 'routing_laravel', 'All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.\r\nFor most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route\'s URL in your browser. For example, you may access the following route by navigating to http://your-app.test/user in your browser:', 1, NULL, '2018-04-25 02:36:04', '2018-04-25 02:36:04'),
(27, 'laravel Sharing Data With All Views', 'sharing', 'share', 'Occasionally, you may need to share a piece of data with all views that are rendered by your application. You may do so using the view facade\'s share method. Typically, you should place calls to share within a service provider\'s boot method. You are free to add them to the AppServiceProvider or generate a separate service provider to house them:', 1, NULL, '2018-04-25 02:37:25', '2018-04-25 02:37:25'),
(28, 'FIFA2018 realsed', 'fifa', 'fifa0128', 'The 2018 FIFA World Cup will be the 21st FIFA World Cup, a quadrennial international football tournament contested by the men\'s national teams of the member associations of FIFA. It is scheduled to take place in Russia from 14 June to 15 July 2018, after the country was awarded the hosting rights on 2 December 2010.Secure your seat at the 2018 FIFA World Cup™ and enjoy football in style with our Official Hospitality. Hospitality. ;. Media Releases. More Media Releases. 2018 FIFA World Cup™. 2018 FIFA World Cup: over four million tickets requested, sales window clos... Read more. 2018 FIFA World Cup™. 2018 FIFA World Cup.', 1, NULL, '2018-04-25 02:38:54', '2018-04-25 02:38:54'),
(29, 'visual studio', 'visual studio', 'visual studio', 'Visual Basic is a third-generation event-driven programming language and integrated development environment (IDE) from Microsoft for its Component Object Model (COM) programming model first released in 1991 and declared legacy during 2008. Microsoft intended Visual Basic to be relatively easy to learn and use. Visual Basic is engineered for productively building type-safe and object-oriented applications. Visual Basic enables developers to target Windows, Web, and mobile devices. As with all languages targeting the Microsoft .NET Framework, programs written in Visual Basic benefit from security and language ...', 1, NULL, '2018-04-25 02:39:58', '2018-04-25 02:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(25, 3, '2018-04-25 02:43:58', '2018-04-25 02:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, '#laravel_instaliation5.5', 'instaliation', '2018-04-25 02:43:40', '2018-04-25 02:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cateogeries`
--
ALTER TABLE `cateogeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cateogery_posts`
--
ALTER TABLE `cateogery_posts`
  ADD KEY `cateogery_posts_post_id_index` (`post_id`),
  ADD KEY `cateogery_posts_cateogeries_id_index` (`cateogeries_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cateogeries`
--
ALTER TABLE `cateogeries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cateogery_posts`
--
ALTER TABLE `cateogery_posts`
  ADD CONSTRAINT `cateogery_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
