-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2016 at 02:57 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Cardio', 'Orange', '2016-05-19 17:26:57', '2016-05-19 17:26:57'),
(2, 'Stretch', 'red', '2016-05-19 17:28:51', '2016-05-19 17:28:51'),
(3, 'Martial Arts', 'purple', '2016-05-19 17:29:41', '2016-05-19 17:29:41'),
(4, 'Tone', 'blue', '2016-05-19 17:30:09', '2016-05-19 17:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `classes_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `price`, `time`, `duration`, `group_id`, `location_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Aerobics', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53'),
(5, 'AQUA AEROBICS', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53'),
(6, 'STEP AEROBICS', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53'),
(8, 'STEP N BURN', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53'),
(9, 'BURN 60', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53'),
(10, 'HIIT INSANITY', 3000.00, '9:20 PM', '30min', 3, 1, 'http://placehold.it/377x236', '2016-05-19 19:21:09', '2016-05-19 19:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `colors_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `image`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Aerobics', 'http://placehold.it/377x236', 'They aim to raise your heart rate to burn calories and improve fitness. They are highly energetic classes that get you to into the Fat burning zone. You should expect a lot of jumping and running around', 1, '2016-05-19 17:46:50', '2016-05-19 17:46:50'),
(4, 'HIIT', 'http://placehold.it/377x236', 'High-intensity interval training (HIIT) is a form of exercise in which you alternate between very intense anaerobic periods and slower recovery periods for a shorter, more efficient workout.', 1, '2016-05-19 17:48:02', '2016-05-19 17:48:02'),
(5, 'Yoga/Pilates', 'http://placehold.it/377x236', 'These classes are completed at a lower intensity, allowing you time to relax, distress and rejuvenate while developing better posture, flexibility and better', 2, '2016-05-19 17:48:44', '2016-05-19 17:51:05'),
(6, 'Toning and Muscle building', 'http://placehold.it/377x236', 'They aim to work your muscles, improve fitness and your appearance. They often include structured weight training or body weight exercises that improve muscular endurance and tones up the body.', 4, '2016-05-19 17:49:22', '2016-05-19 17:49:22'),
(7, 'Dance', 'http://placehold.it/377x236', 'This is a full body dynamic aerobc workout which incorporates different forms of dance to the beat of great music Dance classes are a great and fun way to mix up your fitness regime and learn some dance moves while toning your muscles. most dance class', 4, '2016-05-19 17:49:58', '2016-05-19 17:49:58'),
(8, 'Martial arts themed', 'http://placehold.it/377x236', 'These are intense cardiovascular classes based on combat practices from Eastern Asia and Brazil(Capoeira) aimed at improving physical fitness with a focus on self defence practice, movement', 3, '2016-05-19 17:50:34', '2016-05-19 17:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `gyms`
--

CREATE TABLE IF NOT EXISTS `gyms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `latitude` double(8,2) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `gyms_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `type`, `address`, `email`, `location`, `image`, `longitude`, `latitude`, `number`, `hours`, `description`, `price`, `website`, `created_at`, `updated_at`) VALUES
(1, 'LOTUS HEALTH AND FITNESS', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(2, 'YOUR SPA AND FITNESS @FOUR POINTS ', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 2147483647, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(3, 'BODYLINE FITNESS CENTRE', 'gym', '6 Murtala Muhammed Drive', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 2147483647, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(4, 'BARAZAHI GYM', 'gym', '6 Murtala Muhammed Drive', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 2147483647, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(5, 'PROFLEX GYM', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(6, 'BMS SPA & FITNESS', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(7, 'RADDISON GYM', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(8, 'BNATURAL GYM', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(9, 'BNATURAL GYM,IKEJA', 'gym', '6 Murtala Muhammed Drive', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 2147483647, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(10, 'LIFEQUEST', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(11, 'Fitness Central', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(12, 'FITNESS OPTIONS', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22'),
(13, 'ZIGGY''S GYM', 'gym', '30 Festival Road off adetokunbo ademola', 'info@lotufitnessandhealth.com', 'Victoria Island', 'http://placehold.it/770x378', 'www.lotusfitnessandhealth.com', '6.435', 12956267, '8:00 PM', 'some text', 20000.00, 'www.lotusfitnessandhealth.com', '2016-05-19 18:13:22', '2016-05-19 18:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `location_reviews`
--

CREATE TABLE IF NOT EXISTS `location_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_20_1024552_create_location_reviews', 1),
('2016_03_20_1124522_create_location_table', 1),
('2016_03_20_1224522_create_venue_table', 1),
('2016_03_20_154522_create_gyms_table', 1),
('2016_03_20_161034_create_categories_table', 1),
('2016_03_20_161056_create_groups_table', 1),
('2016_03_20_161134_create_classes_table', 1),
('2016_03_23_234857_create_reviews_tabel', 1),
('2016_03_24_015532_create_trainers_table', 1),
('2016_04_20_163944_create_colors_table', 1),
('2016_04_23_130222_create_sessions_table', 1),
('2016_04_26_084704_create_stores_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classes_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `classes_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `stores_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuesday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wednsday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thursday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `friday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saturday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sunday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `trainers_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `status`, `email`, `firstname`, `lastname`, `address`, `image`, `phone`, `post_code`, `city`, `country`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bTGB8eUfTPh3HUvehV7s7.oBAKQ6EvMZfq2GzQHklAa/.sh3TV8Be', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE IF NOT EXISTS `venues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
