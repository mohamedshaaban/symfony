-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 03:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `sylius_address`
--

CREATE TABLE `sylius_address` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_address`
--

INSERT INTO `sylius_address` (`id`, `customer_id`, `first_name`, `last_name`, `phone_number`, `street`, `company`, `city`, `postcode`, `created_at`, `updated_at`, `country_code`, `province_code`, `province_name`) VALUES
(1, NULL, 'Carley', 'Trantow', NULL, 'Romaguera Stream', NULL, 'Antonettafort', '85667-2434', '2017-12-14 13:02:00', '2017-12-14 13:02:02', 'US', NULL, NULL),
(2, NULL, 'Carley', 'Trantow', NULL, 'Romaguera Stream', NULL, 'Antonettafort', '85667-2434', '2017-12-14 13:02:00', '2017-12-14 13:02:02', 'US', NULL, NULL),
(3, 15, 'Carley', 'Trantow', NULL, 'Romaguera Stream', NULL, 'Antonettafort', '85667-2434', '2017-12-14 13:02:00', '2017-12-14 13:02:02', 'US', NULL, NULL),
(4, NULL, 'Gerald', 'DuBuque', NULL, 'Gulgowski Ways', NULL, 'Champlinfort', '72700', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(5, NULL, 'Gerald', 'DuBuque', NULL, 'Gulgowski Ways', NULL, 'Champlinfort', '72700', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(6, 4, 'Gerald', 'DuBuque', NULL, 'Gulgowski Ways', NULL, 'Champlinfort', '72700', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(7, NULL, 'Aditya', 'Doyle', NULL, 'Schowalter Ville', NULL, 'Maryseshire', '70012-8984', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(8, NULL, 'Aditya', 'Doyle', NULL, 'Schowalter Ville', NULL, 'Maryseshire', '70012-8984', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(9, 14, 'Aditya', 'Doyle', NULL, 'Schowalter Ville', NULL, 'Maryseshire', '70012-8984', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(10, NULL, 'Shawna', 'Pouros', NULL, 'Selina Station', NULL, 'Gonzalofurt', '82040', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(11, NULL, 'Shawna', 'Pouros', NULL, 'Selina Station', NULL, 'Gonzalofurt', '82040', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(12, 1, 'Shawna', 'Pouros', NULL, 'Selina Station', NULL, 'Gonzalofurt', '82040', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(13, NULL, 'Margaret', 'Collier', NULL, 'Grant Mall', NULL, 'South Salma', '68664-9828', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(14, NULL, 'Margaret', 'Collier', NULL, 'Grant Mall', NULL, 'South Salma', '68664-9828', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(15, 20, 'Margaret', 'Collier', NULL, 'Grant Mall', NULL, 'South Salma', '68664-9828', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(16, NULL, 'Marques', 'Mayer', NULL, 'Santiago View', NULL, 'Lake Wilber', '00799-2190', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(17, NULL, 'Marques', 'Mayer', NULL, 'Santiago View', NULL, 'Lake Wilber', '00799-2190', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(18, 16, 'Marques', 'Mayer', NULL, 'Santiago View', NULL, 'Lake Wilber', '00799-2190', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(19, NULL, 'Khalil', 'Hoppe', NULL, 'Swaniawski Port', NULL, 'Lake Kellenhaven', '19374-7738', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(20, NULL, 'Khalil', 'Hoppe', NULL, 'Swaniawski Port', NULL, 'Lake Kellenhaven', '19374-7738', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(21, 21, 'Khalil', 'Hoppe', NULL, 'Swaniawski Port', NULL, 'Lake Kellenhaven', '19374-7738', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(22, NULL, 'Jazmyne', 'Treutel', NULL, 'Hirthe Avenue', NULL, 'Bryonhaven', '23043', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(23, NULL, 'Jazmyne', 'Treutel', NULL, 'Hirthe Avenue', NULL, 'Bryonhaven', '23043', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(24, 18, 'Jazmyne', 'Treutel', NULL, 'Hirthe Avenue', NULL, 'Bryonhaven', '23043', '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'US', NULL, NULL),
(25, NULL, 'Santa', 'Gutmann', NULL, 'Noah Keys', NULL, 'Lake Bessiefort', '16027', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(26, NULL, 'Santa', 'Gutmann', NULL, 'Noah Keys', NULL, 'Lake Bessiefort', '16027', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(27, 10, 'Santa', 'Gutmann', NULL, 'Noah Keys', NULL, 'Lake Bessiefort', '16027', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(28, NULL, 'Danyka', 'Parisian', NULL, 'Sister Plaza', NULL, 'Nevafurt', '10749', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(29, NULL, 'Danyka', 'Parisian', NULL, 'Sister Plaza', NULL, 'Nevafurt', '10749', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(30, 2, 'Danyka', 'Parisian', NULL, 'Sister Plaza', NULL, 'Nevafurt', '10749', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(31, NULL, 'Anabel', 'Greenholt', NULL, 'Hamill Grove', NULL, 'East Lucileview', '05717', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(32, NULL, 'Anabel', 'Greenholt', NULL, 'Hamill Grove', NULL, 'East Lucileview', '05717', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(33, 19, 'Anabel', 'Greenholt', NULL, 'Hamill Grove', NULL, 'East Lucileview', '05717', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(34, NULL, 'Armani', 'Rohan', NULL, 'Kertzmann Port', NULL, 'New Sybleberg', '23627', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(35, NULL, 'Armani', 'Rohan', NULL, 'Kertzmann Port', NULL, 'New Sybleberg', '23627', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(36, 9, 'Armani', 'Rohan', NULL, 'Kertzmann Port', NULL, 'New Sybleberg', '23627', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(37, NULL, 'Lesley', 'Roob', NULL, 'Dibbert Roads', NULL, 'South Lorenza', '04560', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(38, NULL, 'Lesley', 'Roob', NULL, 'Dibbert Roads', NULL, 'South Lorenza', '04560', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(39, 5, 'Lesley', 'Roob', NULL, 'Dibbert Roads', NULL, 'South Lorenza', '04560', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(40, NULL, 'Rebekah', 'Konopelski', NULL, 'Abelardo Fall', NULL, 'Veummouth', '48771', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(41, NULL, 'Rebekah', 'Konopelski', NULL, 'Abelardo Fall', NULL, 'Veummouth', '48771', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(42, 13, 'Rebekah', 'Konopelski', NULL, 'Abelardo Fall', NULL, 'Veummouth', '48771', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(43, NULL, 'Rita', 'O\'Keefe', NULL, 'Fay Island', NULL, 'Mayville', '39887', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(44, NULL, 'Rita', 'O\'Keefe', NULL, 'Fay Island', NULL, 'Mayville', '39887', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(45, 17, 'Rita', 'O\'Keefe', NULL, 'Fay Island', NULL, 'Mayville', '39887', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(46, NULL, 'Ova', 'Runolfsdottir', NULL, 'Yost Corners', NULL, 'Aimeeside', '94478', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(47, NULL, 'Ova', 'Runolfsdottir', NULL, 'Yost Corners', NULL, 'Aimeeside', '94478', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(48, 19, 'Ova', 'Runolfsdottir', NULL, 'Yost Corners', NULL, 'Aimeeside', '94478', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(49, NULL, 'Jacynthe', 'Bauch', NULL, 'Osinski Islands', NULL, 'East Norwood', '11712', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(50, NULL, 'Jacynthe', 'Bauch', NULL, 'Osinski Islands', NULL, 'East Norwood', '11712', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(51, 1, 'Jacynthe', 'Bauch', NULL, 'Osinski Islands', NULL, 'East Norwood', '11712', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(52, NULL, 'Creola', 'Veum', NULL, 'Dexter Ville', NULL, 'New Amalia', '26729', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(53, NULL, 'Creola', 'Veum', NULL, 'Dexter Ville', NULL, 'New Amalia', '26729', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(54, 15, 'Creola', 'Veum', NULL, 'Dexter Ville', NULL, 'New Amalia', '26729', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(55, NULL, 'Rashad', 'Bruen', NULL, 'Stephanie Spurs', NULL, 'West Howellside', '86026-5932', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(56, NULL, 'Rashad', 'Bruen', NULL, 'Stephanie Spurs', NULL, 'West Howellside', '86026-5932', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(57, 16, 'Rashad', 'Bruen', NULL, 'Stephanie Spurs', NULL, 'West Howellside', '86026-5932', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(58, NULL, 'Edna', 'Von', NULL, 'Ena Point', NULL, 'Laverneland', '70261', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(59, NULL, 'Edna', 'Von', NULL, 'Ena Point', NULL, 'Laverneland', '70261', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(60, 3, 'Edna', 'Von', NULL, 'Ena Point', NULL, 'Laverneland', '70261', '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'US', NULL, NULL),
(61, 2, 'Deon', 'Runte', '450.527.4182 x16868', '196 Adolph Vista Apt. 896', 'Rowe-Crooks', 'Loweborough', '67136', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(62, 1, 'Maiya', 'Wehner', '+1-849-975-6132', '453 Mayer Rest', NULL, 'Port Lesleychester', '53400-7502', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(63, 11, 'Will', 'Zulauf', NULL, '65530 Lucius Ford', 'Ondricka-Grant', 'East Maximilianchester', '61298-2002', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(64, 3, 'Odell', 'Ullrich', NULL, '958 Colleen Islands', NULL, 'Maggiofort', '65700', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(65, 6, 'Will', 'Hammes', NULL, '5475 Jessica Oval Suite 942', 'Nitzsche-Olson', 'Durganville', '82688-4115', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(66, 8, 'Isaac', 'Beahan', NULL, '7329 Walter Inlet Suite 221', 'Bergstrom-Pouros', 'Lake Deangelo', '75296-9898', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(67, 18, 'Adrianna', 'Schroeder', NULL, '24531 Kuvalis Row Apt. 947', 'O\'Connell, Haley and Bartell', 'West River', '01595', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(68, 17, 'Cyril', 'Effertz', NULL, '58089 Andy Flats Suite 721', NULL, 'Port Aliaton', '46995-0809', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(69, 6, 'Amani', 'Hammes', '708.719.1408', '1763 Hirthe Route Apt. 923', NULL, 'Fadelmouth', '25054-9076', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL),
(70, 21, 'Esteban', 'Fisher', NULL, '702 Abshire Radial', 'Satterfield-Kessler', 'Schmelerside', '06782-7764', '2017-12-14 13:02:05', '2017-12-14 13:02:05', 'US', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_address_log_entries`
--

CREATE TABLE `sylius_address_log_entries` (
  `id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_address_log_entries`
--

INSERT INTO `sylius_address_log_entries` (`id`, `action`, `logged_at`, `object_id`, `object_class`, `version`, `data`, `username`) VALUES
(1, 'create', '2017-12-14 13:02:02', '1', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Carley\";s:8:\"lastName\";s:7:\"Trantow\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Romaguera Stream\";s:7:\"company\";N;s:4:\"city\";s:13:\"Antonettafort\";s:8:\"postcode\";s:10:\"85667-2434\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(2, 'create', '2017-12-14 13:02:02', '2', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Carley\";s:8:\"lastName\";s:7:\"Trantow\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Romaguera Stream\";s:7:\"company\";N;s:4:\"city\";s:13:\"Antonettafort\";s:8:\"postcode\";s:10:\"85667-2434\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(3, 'create', '2017-12-14 13:02:02', '3', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Carley\";s:8:\"lastName\";s:7:\"Trantow\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Romaguera Stream\";s:7:\"company\";N;s:4:\"city\";s:13:\"Antonettafort\";s:8:\"postcode\";s:10:\"85667-2434\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(4, 'create', '2017-12-14 13:02:04', '4', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Gerald\";s:8:\"lastName\";s:7:\"DuBuque\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Gulgowski Ways\";s:7:\"company\";N;s:4:\"city\";s:12:\"Champlinfort\";s:8:\"postcode\";s:5:\"72700\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(5, 'create', '2017-12-14 13:02:04', '5', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Gerald\";s:8:\"lastName\";s:7:\"DuBuque\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Gulgowski Ways\";s:7:\"company\";N;s:4:\"city\";s:12:\"Champlinfort\";s:8:\"postcode\";s:5:\"72700\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(6, 'create', '2017-12-14 13:02:04', '6', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Gerald\";s:8:\"lastName\";s:7:\"DuBuque\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Gulgowski Ways\";s:7:\"company\";N;s:4:\"city\";s:12:\"Champlinfort\";s:8:\"postcode\";s:5:\"72700\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(7, 'create', '2017-12-14 13:02:04', '7', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Aditya\";s:8:\"lastName\";s:5:\"Doyle\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Schowalter Ville\";s:7:\"company\";N;s:4:\"city\";s:11:\"Maryseshire\";s:8:\"postcode\";s:10:\"70012-8984\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(8, 'create', '2017-12-14 13:02:04', '8', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Aditya\";s:8:\"lastName\";s:5:\"Doyle\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Schowalter Ville\";s:7:\"company\";N;s:4:\"city\";s:11:\"Maryseshire\";s:8:\"postcode\";s:10:\"70012-8984\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(9, 'create', '2017-12-14 13:02:04', '9', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Aditya\";s:8:\"lastName\";s:5:\"Doyle\";s:11:\"phoneNumber\";N;s:6:\"street\";s:16:\"Schowalter Ville\";s:7:\"company\";N;s:4:\"city\";s:11:\"Maryseshire\";s:8:\"postcode\";s:10:\"70012-8984\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(10, 'create', '2017-12-14 13:02:04', '10', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Shawna\";s:8:\"lastName\";s:6:\"Pouros\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Selina Station\";s:7:\"company\";N;s:4:\"city\";s:11:\"Gonzalofurt\";s:8:\"postcode\";s:5:\"82040\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(11, 'create', '2017-12-14 13:02:04', '11', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Shawna\";s:8:\"lastName\";s:6:\"Pouros\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Selina Station\";s:7:\"company\";N;s:4:\"city\";s:11:\"Gonzalofurt\";s:8:\"postcode\";s:5:\"82040\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(12, 'create', '2017-12-14 13:02:04', '12', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Shawna\";s:8:\"lastName\";s:6:\"Pouros\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Selina Station\";s:7:\"company\";N;s:4:\"city\";s:11:\"Gonzalofurt\";s:8:\"postcode\";s:5:\"82040\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(13, 'create', '2017-12-14 13:02:04', '13', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Margaret\";s:8:\"lastName\";s:7:\"Collier\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Grant Mall\";s:7:\"company\";N;s:4:\"city\";s:11:\"South Salma\";s:8:\"postcode\";s:10:\"68664-9828\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(14, 'create', '2017-12-14 13:02:04', '14', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Margaret\";s:8:\"lastName\";s:7:\"Collier\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Grant Mall\";s:7:\"company\";N;s:4:\"city\";s:11:\"South Salma\";s:8:\"postcode\";s:10:\"68664-9828\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(15, 'create', '2017-12-14 13:02:04', '15', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Margaret\";s:8:\"lastName\";s:7:\"Collier\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Grant Mall\";s:7:\"company\";N;s:4:\"city\";s:11:\"South Salma\";s:8:\"postcode\";s:10:\"68664-9828\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(16, 'create', '2017-12-14 13:02:04', '16', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Marques\";s:8:\"lastName\";s:5:\"Mayer\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Santiago View\";s:7:\"company\";N;s:4:\"city\";s:11:\"Lake Wilber\";s:8:\"postcode\";s:10:\"00799-2190\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(17, 'create', '2017-12-14 13:02:04', '17', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Marques\";s:8:\"lastName\";s:5:\"Mayer\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Santiago View\";s:7:\"company\";N;s:4:\"city\";s:11:\"Lake Wilber\";s:8:\"postcode\";s:10:\"00799-2190\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(18, 'create', '2017-12-14 13:02:04', '18', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Marques\";s:8:\"lastName\";s:5:\"Mayer\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Santiago View\";s:7:\"company\";N;s:4:\"city\";s:11:\"Lake Wilber\";s:8:\"postcode\";s:10:\"00799-2190\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(19, 'create', '2017-12-14 13:02:04', '19', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Khalil\";s:8:\"lastName\";s:5:\"Hoppe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Swaniawski Port\";s:7:\"company\";N;s:4:\"city\";s:16:\"Lake Kellenhaven\";s:8:\"postcode\";s:10:\"19374-7738\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(20, 'create', '2017-12-14 13:02:04', '20', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Khalil\";s:8:\"lastName\";s:5:\"Hoppe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Swaniawski Port\";s:7:\"company\";N;s:4:\"city\";s:16:\"Lake Kellenhaven\";s:8:\"postcode\";s:10:\"19374-7738\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(21, 'create', '2017-12-14 13:02:04', '21', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Khalil\";s:8:\"lastName\";s:5:\"Hoppe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Swaniawski Port\";s:7:\"company\";N;s:4:\"city\";s:16:\"Lake Kellenhaven\";s:8:\"postcode\";s:10:\"19374-7738\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(22, 'create', '2017-12-14 13:02:04', '22', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Jazmyne\";s:8:\"lastName\";s:7:\"Treutel\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Hirthe Avenue\";s:7:\"company\";N;s:4:\"city\";s:10:\"Bryonhaven\";s:8:\"postcode\";s:5:\"23043\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(23, 'create', '2017-12-14 13:02:04', '23', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Jazmyne\";s:8:\"lastName\";s:7:\"Treutel\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Hirthe Avenue\";s:7:\"company\";N;s:4:\"city\";s:10:\"Bryonhaven\";s:8:\"postcode\";s:5:\"23043\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(24, 'create', '2017-12-14 13:02:04', '24', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Jazmyne\";s:8:\"lastName\";s:7:\"Treutel\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Hirthe Avenue\";s:7:\"company\";N;s:4:\"city\";s:10:\"Bryonhaven\";s:8:\"postcode\";s:5:\"23043\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(25, 'create', '2017-12-14 13:02:04', '25', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Santa\";s:8:\"lastName\";s:7:\"Gutmann\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Noah Keys\";s:7:\"company\";N;s:4:\"city\";s:15:\"Lake Bessiefort\";s:8:\"postcode\";s:5:\"16027\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(26, 'create', '2017-12-14 13:02:04', '26', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Santa\";s:8:\"lastName\";s:7:\"Gutmann\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Noah Keys\";s:7:\"company\";N;s:4:\"city\";s:15:\"Lake Bessiefort\";s:8:\"postcode\";s:5:\"16027\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(27, 'create', '2017-12-14 13:02:04', '27', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Santa\";s:8:\"lastName\";s:7:\"Gutmann\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Noah Keys\";s:7:\"company\";N;s:4:\"city\";s:15:\"Lake Bessiefort\";s:8:\"postcode\";s:5:\"16027\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(28, 'create', '2017-12-14 13:02:04', '28', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Danyka\";s:8:\"lastName\";s:8:\"Parisian\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Sister Plaza\";s:7:\"company\";N;s:4:\"city\";s:8:\"Nevafurt\";s:8:\"postcode\";s:5:\"10749\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(29, 'create', '2017-12-14 13:02:04', '29', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Danyka\";s:8:\"lastName\";s:8:\"Parisian\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Sister Plaza\";s:7:\"company\";N;s:4:\"city\";s:8:\"Nevafurt\";s:8:\"postcode\";s:5:\"10749\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(30, 'create', '2017-12-14 13:02:04', '30', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Danyka\";s:8:\"lastName\";s:8:\"Parisian\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Sister Plaza\";s:7:\"company\";N;s:4:\"city\";s:8:\"Nevafurt\";s:8:\"postcode\";s:5:\"10749\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(31, 'create', '2017-12-14 13:02:04', '31', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Anabel\";s:8:\"lastName\";s:9:\"Greenholt\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Hamill Grove\";s:7:\"company\";N;s:4:\"city\";s:15:\"East Lucileview\";s:8:\"postcode\";s:5:\"05717\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(32, 'create', '2017-12-14 13:02:04', '32', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Anabel\";s:8:\"lastName\";s:9:\"Greenholt\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Hamill Grove\";s:7:\"company\";N;s:4:\"city\";s:15:\"East Lucileview\";s:8:\"postcode\";s:5:\"05717\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(33, 'create', '2017-12-14 13:02:04', '33', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Anabel\";s:8:\"lastName\";s:9:\"Greenholt\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Hamill Grove\";s:7:\"company\";N;s:4:\"city\";s:15:\"East Lucileview\";s:8:\"postcode\";s:5:\"05717\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(34, 'create', '2017-12-14 13:02:04', '34', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Armani\";s:8:\"lastName\";s:5:\"Rohan\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Kertzmann Port\";s:7:\"company\";N;s:4:\"city\";s:13:\"New Sybleberg\";s:8:\"postcode\";s:5:\"23627\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(35, 'create', '2017-12-14 13:02:04', '35', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Armani\";s:8:\"lastName\";s:5:\"Rohan\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Kertzmann Port\";s:7:\"company\";N;s:4:\"city\";s:13:\"New Sybleberg\";s:8:\"postcode\";s:5:\"23627\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(36, 'create', '2017-12-14 13:02:04', '36', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Armani\";s:8:\"lastName\";s:5:\"Rohan\";s:11:\"phoneNumber\";N;s:6:\"street\";s:14:\"Kertzmann Port\";s:7:\"company\";N;s:4:\"city\";s:13:\"New Sybleberg\";s:8:\"postcode\";s:5:\"23627\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(37, 'create', '2017-12-14 13:02:04', '37', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Lesley\";s:8:\"lastName\";s:4:\"Roob\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Dibbert Roads\";s:7:\"company\";N;s:4:\"city\";s:13:\"South Lorenza\";s:8:\"postcode\";s:5:\"04560\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(38, 'create', '2017-12-14 13:02:04', '38', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Lesley\";s:8:\"lastName\";s:4:\"Roob\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Dibbert Roads\";s:7:\"company\";N;s:4:\"city\";s:13:\"South Lorenza\";s:8:\"postcode\";s:5:\"04560\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(39, 'create', '2017-12-14 13:02:04', '39', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Lesley\";s:8:\"lastName\";s:4:\"Roob\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Dibbert Roads\";s:7:\"company\";N;s:4:\"city\";s:13:\"South Lorenza\";s:8:\"postcode\";s:5:\"04560\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(40, 'create', '2017-12-14 13:02:04', '40', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Rebekah\";s:8:\"lastName\";s:10:\"Konopelski\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Abelardo Fall\";s:7:\"company\";N;s:4:\"city\";s:9:\"Veummouth\";s:8:\"postcode\";s:5:\"48771\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(41, 'create', '2017-12-14 13:02:04', '41', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Rebekah\";s:8:\"lastName\";s:10:\"Konopelski\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Abelardo Fall\";s:7:\"company\";N;s:4:\"city\";s:9:\"Veummouth\";s:8:\"postcode\";s:5:\"48771\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(42, 'create', '2017-12-14 13:02:04', '42', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Rebekah\";s:8:\"lastName\";s:10:\"Konopelski\";s:11:\"phoneNumber\";N;s:6:\"street\";s:13:\"Abelardo Fall\";s:7:\"company\";N;s:4:\"city\";s:9:\"Veummouth\";s:8:\"postcode\";s:5:\"48771\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(43, 'create', '2017-12-14 13:02:04', '43', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Rita\";s:8:\"lastName\";s:7:\"O\'Keefe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Fay Island\";s:7:\"company\";N;s:4:\"city\";s:8:\"Mayville\";s:8:\"postcode\";s:5:\"39887\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(44, 'create', '2017-12-14 13:02:04', '44', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Rita\";s:8:\"lastName\";s:7:\"O\'Keefe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Fay Island\";s:7:\"company\";N;s:4:\"city\";s:8:\"Mayville\";s:8:\"postcode\";s:5:\"39887\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(45, 'create', '2017-12-14 13:02:04', '45', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Rita\";s:8:\"lastName\";s:7:\"O\'Keefe\";s:11:\"phoneNumber\";N;s:6:\"street\";s:10:\"Fay Island\";s:7:\"company\";N;s:4:\"city\";s:8:\"Mayville\";s:8:\"postcode\";s:5:\"39887\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(46, 'create', '2017-12-14 13:02:04', '46', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:3:\"Ova\";s:8:\"lastName\";s:13:\"Runolfsdottir\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Yost Corners\";s:7:\"company\";N;s:4:\"city\";s:9:\"Aimeeside\";s:8:\"postcode\";s:5:\"94478\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(47, 'create', '2017-12-14 13:02:04', '47', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:3:\"Ova\";s:8:\"lastName\";s:13:\"Runolfsdottir\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Yost Corners\";s:7:\"company\";N;s:4:\"city\";s:9:\"Aimeeside\";s:8:\"postcode\";s:5:\"94478\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(48, 'create', '2017-12-14 13:02:04', '48', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:3:\"Ova\";s:8:\"lastName\";s:13:\"Runolfsdottir\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Yost Corners\";s:7:\"company\";N;s:4:\"city\";s:9:\"Aimeeside\";s:8:\"postcode\";s:5:\"94478\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(49, 'create', '2017-12-14 13:02:04', '49', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Jacynthe\";s:8:\"lastName\";s:5:\"Bauch\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Osinski Islands\";s:7:\"company\";N;s:4:\"city\";s:12:\"East Norwood\";s:8:\"postcode\";s:5:\"11712\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(50, 'create', '2017-12-14 13:02:04', '50', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Jacynthe\";s:8:\"lastName\";s:5:\"Bauch\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Osinski Islands\";s:7:\"company\";N;s:4:\"city\";s:12:\"East Norwood\";s:8:\"postcode\";s:5:\"11712\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(51, 'create', '2017-12-14 13:02:04', '51', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Jacynthe\";s:8:\"lastName\";s:5:\"Bauch\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Osinski Islands\";s:7:\"company\";N;s:4:\"city\";s:12:\"East Norwood\";s:8:\"postcode\";s:5:\"11712\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(52, 'create', '2017-12-14 13:02:04', '52', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Creola\";s:8:\"lastName\";s:4:\"Veum\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Dexter Ville\";s:7:\"company\";N;s:4:\"city\";s:10:\"New Amalia\";s:8:\"postcode\";s:5:\"26729\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(53, 'create', '2017-12-14 13:02:04', '53', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Creola\";s:8:\"lastName\";s:4:\"Veum\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Dexter Ville\";s:7:\"company\";N;s:4:\"city\";s:10:\"New Amalia\";s:8:\"postcode\";s:5:\"26729\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(54, 'create', '2017-12-14 13:02:04', '54', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Creola\";s:8:\"lastName\";s:4:\"Veum\";s:11:\"phoneNumber\";N;s:6:\"street\";s:12:\"Dexter Ville\";s:7:\"company\";N;s:4:\"city\";s:10:\"New Amalia\";s:8:\"postcode\";s:5:\"26729\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(55, 'create', '2017-12-14 13:02:04', '55', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Rashad\";s:8:\"lastName\";s:5:\"Bruen\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Stephanie Spurs\";s:7:\"company\";N;s:4:\"city\";s:15:\"West Howellside\";s:8:\"postcode\";s:10:\"86026-5932\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(56, 'create', '2017-12-14 13:02:04', '56', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Rashad\";s:8:\"lastName\";s:5:\"Bruen\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Stephanie Spurs\";s:7:\"company\";N;s:4:\"city\";s:15:\"West Howellside\";s:8:\"postcode\";s:10:\"86026-5932\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(57, 'create', '2017-12-14 13:02:04', '57', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:6:\"Rashad\";s:8:\"lastName\";s:5:\"Bruen\";s:11:\"phoneNumber\";N;s:6:\"street\";s:15:\"Stephanie Spurs\";s:7:\"company\";N;s:4:\"city\";s:15:\"West Howellside\";s:8:\"postcode\";s:10:\"86026-5932\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(58, 'create', '2017-12-14 13:02:04', '58', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Edna\";s:8:\"lastName\";s:3:\"Von\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Ena Point\";s:7:\"company\";N;s:4:\"city\";s:11:\"Laverneland\";s:8:\"postcode\";s:5:\"70261\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(59, 'create', '2017-12-14 13:02:04', '59', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Edna\";s:8:\"lastName\";s:3:\"Von\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Ena Point\";s:7:\"company\";N;s:4:\"city\";s:11:\"Laverneland\";s:8:\"postcode\";s:5:\"70261\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(60, 'create', '2017-12-14 13:02:04', '60', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Edna\";s:8:\"lastName\";s:3:\"Von\";s:11:\"phoneNumber\";N;s:6:\"street\";s:9:\"Ena Point\";s:7:\"company\";N;s:4:\"city\";s:11:\"Laverneland\";s:8:\"postcode\";s:5:\"70261\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(61, 'create', '2017-12-14 13:02:06', '61', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Deon\";s:8:\"lastName\";s:5:\"Runte\";s:11:\"phoneNumber\";s:19:\"450.527.4182 x16868\";s:6:\"street\";s:25:\"196 Adolph Vista Apt. 896\";s:7:\"company\";s:11:\"Rowe-Crooks\";s:4:\"city\";s:11:\"Loweborough\";s:8:\"postcode\";s:5:\"67136\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(62, 'create', '2017-12-14 13:02:06', '62', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Maiya\";s:8:\"lastName\";s:6:\"Wehner\";s:11:\"phoneNumber\";s:15:\"+1-849-975-6132\";s:6:\"street\";s:14:\"453 Mayer Rest\";s:7:\"company\";N;s:4:\"city\";s:18:\"Port Lesleychester\";s:8:\"postcode\";s:10:\"53400-7502\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(63, 'create', '2017-12-14 13:02:06', '63', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Will\";s:8:\"lastName\";s:6:\"Zulauf\";s:11:\"phoneNumber\";N;s:6:\"street\";s:17:\"65530 Lucius Ford\";s:7:\"company\";s:14:\"Ondricka-Grant\";s:4:\"city\";s:22:\"East Maximilianchester\";s:8:\"postcode\";s:10:\"61298-2002\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(64, 'create', '2017-12-14 13:02:06', '64', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Odell\";s:8:\"lastName\";s:7:\"Ullrich\";s:11:\"phoneNumber\";N;s:6:\"street\";s:19:\"958 Colleen Islands\";s:7:\"company\";N;s:4:\"city\";s:10:\"Maggiofort\";s:8:\"postcode\";s:5:\"65700\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(65, 'create', '2017-12-14 13:02:06', '65', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:4:\"Will\";s:8:\"lastName\";s:6:\"Hammes\";s:11:\"phoneNumber\";N;s:6:\"street\";s:27:\"5475 Jessica Oval Suite 942\";s:7:\"company\";s:14:\"Nitzsche-Olson\";s:4:\"city\";s:11:\"Durganville\";s:8:\"postcode\";s:10:\"82688-4115\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(66, 'create', '2017-12-14 13:02:06', '66', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Isaac\";s:8:\"lastName\";s:6:\"Beahan\";s:11:\"phoneNumber\";N;s:6:\"street\";s:27:\"7329 Walter Inlet Suite 221\";s:7:\"company\";s:16:\"Bergstrom-Pouros\";s:4:\"city\";s:13:\"Lake Deangelo\";s:8:\"postcode\";s:10:\"75296-9898\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(67, 'create', '2017-12-14 13:02:06', '67', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:8:\"Adrianna\";s:8:\"lastName\";s:9:\"Schroeder\";s:11:\"phoneNumber\";N;s:6:\"street\";s:26:\"24531 Kuvalis Row Apt. 947\";s:7:\"company\";s:28:\"O\'Connell, Haley and Bartell\";s:4:\"city\";s:10:\"West River\";s:8:\"postcode\";s:5:\"01595\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(68, 'create', '2017-12-14 13:02:06', '68', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Cyril\";s:8:\"lastName\";s:7:\"Effertz\";s:11:\"phoneNumber\";N;s:6:\"street\";s:26:\"58089 Andy Flats Suite 721\";s:7:\"company\";N;s:4:\"city\";s:12:\"Port Aliaton\";s:8:\"postcode\";s:10:\"46995-0809\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(69, 'create', '2017-12-14 13:02:06', '69', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:5:\"Amani\";s:8:\"lastName\";s:6:\"Hammes\";s:11:\"phoneNumber\";s:12:\"708.719.1408\";s:6:\"street\";s:26:\"1763 Hirthe Route Apt. 923\";s:7:\"company\";N;s:4:\"city\";s:10:\"Fadelmouth\";s:8:\"postcode\";s:10:\"25054-9076\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL),
(70, 'create', '2017-12-14 13:02:06', '70', 'Sylius\\Component\\Core\\Model\\Address', 1, 'a:10:{s:9:\"firstName\";s:7:\"Esteban\";s:8:\"lastName\";s:6:\"Fisher\";s:11:\"phoneNumber\";N;s:6:\"street\";s:18:\"702 Abshire Radial\";s:7:\"company\";s:19:\"Satterfield-Kessler\";s:4:\"city\";s:12:\"Schmelerside\";s:8:\"postcode\";s:10:\"06782-7764\";s:11:\"countryCode\";s:2:\"US\";s:12:\"provinceCode\";N;s:12:\"provinceName\";N;}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_adjustment`
--

CREATE TABLE `sylius_adjustment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_item_id` int(11) DEFAULT NULL,
  `order_item_unit_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_neutral` tinyint(1) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `origin_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_adjustment`
--

INSERT INTO `sylius_adjustment` (`id`, `order_id`, `order_item_id`, `order_item_unit_id`, `type`, `label`, `amount`, `is_neutral`, `is_locked`, `origin_code`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, 'order_promotion', 'Christmas', -111, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(2, NULL, NULL, 2, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(3, NULL, NULL, 3, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(4, NULL, NULL, 4, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(5, NULL, NULL, 5, 'order_promotion', 'Christmas', -60, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(6, NULL, NULL, 6, 'order_promotion', 'Christmas', -50, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(7, NULL, NULL, 7, 'order_promotion', 'Christmas', -49, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(8, NULL, NULL, 8, 'order_promotion', 'Christmas', -49, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(9, NULL, NULL, 9, 'order_promotion', 'Christmas', -61, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(10, NULL, NULL, 10, 'order_promotion', 'Christmas', -61, 0, 0, 'christmas', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(11, 1, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(12, 2, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(13, NULL, NULL, 26, 'order_promotion', 'Christmas', -72, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(14, NULL, NULL, 27, 'order_promotion', 'Christmas', -72, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(15, NULL, NULL, 28, 'order_promotion', 'Christmas', -246, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(16, NULL, NULL, 29, 'order_promotion', 'Christmas', -116, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(17, NULL, NULL, 30, 'order_promotion', 'Christmas', -116, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(18, NULL, NULL, 31, 'order_promotion', 'Christmas', -116, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(19, NULL, NULL, 32, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(20, NULL, NULL, 33, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(21, NULL, NULL, 34, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(22, NULL, NULL, 35, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(23, NULL, NULL, 36, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(24, 3, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(25, NULL, NULL, 37, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(26, NULL, NULL, 38, 'order_promotion', 'Christmas', -204, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(27, NULL, NULL, 39, 'order_promotion', 'Christmas', -204, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(28, NULL, NULL, 40, 'order_promotion', 'Christmas', -104, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(29, NULL, NULL, 41, 'order_promotion', 'Christmas', -104, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(30, 4, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(31, NULL, NULL, 42, 'order_promotion', 'Christmas', -140, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(32, NULL, NULL, 43, 'order_promotion', 'Christmas', -139, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(33, NULL, NULL, 44, 'order_promotion', 'Christmas', -241, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(34, NULL, NULL, 45, 'order_promotion', 'Christmas', -241, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(35, NULL, NULL, 46, 'order_promotion', 'Christmas', -133, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(36, NULL, NULL, 47, 'order_promotion', 'Christmas', -133, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(37, NULL, NULL, 48, 'order_promotion', 'Christmas', -133, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(38, NULL, NULL, 49, 'order_promotion', 'Christmas', -133, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(39, NULL, NULL, 50, 'order_promotion', 'Christmas', -153, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(40, NULL, NULL, 51, 'order_promotion', 'Christmas', -153, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(41, NULL, NULL, 52, 'order_promotion', 'Christmas', -152, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(42, NULL, NULL, 53, 'order_promotion', 'Christmas', -152, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(43, NULL, NULL, 54, 'order_promotion', 'Christmas', -152, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(44, 5, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(45, NULL, NULL, 55, 'order_promotion', 'Christmas', -61, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(46, NULL, NULL, 56, 'order_promotion', 'Christmas', -60, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(47, NULL, NULL, 57, 'order_promotion', 'Christmas', -113, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(48, NULL, NULL, 58, 'order_promotion', 'Christmas', -113, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(49, NULL, NULL, 59, 'order_promotion', 'Christmas', -112, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(50, NULL, NULL, 60, 'order_promotion', 'Christmas', -112, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(51, NULL, NULL, 61, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(52, NULL, NULL, 62, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(53, NULL, NULL, 63, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(54, NULL, NULL, 64, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(55, NULL, NULL, 65, 'order_promotion', 'Christmas', -205, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(56, 6, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(57, NULL, NULL, 66, 'order_promotion', 'Christmas', -155, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(58, NULL, NULL, 67, 'order_promotion', 'Christmas', -44, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(59, NULL, NULL, 68, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(60, NULL, NULL, 69, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(61, NULL, NULL, 70, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(62, NULL, NULL, 71, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(63, NULL, NULL, 72, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(64, NULL, NULL, 73, 'order_promotion', 'Christmas', -66, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(65, NULL, NULL, 74, 'order_promotion', 'Christmas', -66, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(66, NULL, NULL, 75, 'order_promotion', 'Christmas', -65, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(67, NULL, NULL, 76, 'order_promotion', 'Christmas', -203, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(68, NULL, NULL, 77, 'order_promotion', 'Christmas', -203, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(69, NULL, NULL, 78, 'order_promotion', 'Christmas', -203, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(70, 7, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(71, NULL, NULL, 79, 'order_promotion', 'Christmas', -21, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(72, NULL, NULL, 80, 'order_promotion', 'Christmas', -235, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(73, NULL, NULL, 81, 'order_promotion', 'Christmas', -235, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(74, NULL, NULL, 82, 'order_promotion', 'Christmas', -234, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(75, NULL, NULL, 83, 'order_promotion', 'Christmas', -234, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(76, NULL, NULL, 84, 'order_promotion', 'Christmas', -234, 0, 0, 'christmas', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(77, 8, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(78, 9, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(79, NULL, NULL, 102, 'order_promotion', 'Christmas', -30, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(80, NULL, NULL, 103, 'order_promotion', 'Christmas', -30, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(81, NULL, NULL, 104, 'order_promotion', 'Christmas', -30, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(82, NULL, NULL, 105, 'order_promotion', 'Christmas', -30, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(83, NULL, NULL, 106, 'order_promotion', 'Christmas', -61, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(84, NULL, NULL, 107, 'order_promotion', 'Christmas', -61, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(85, NULL, NULL, 108, 'order_promotion', 'Christmas', -60, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(86, NULL, NULL, 109, 'order_promotion', 'Christmas', -201, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(87, NULL, NULL, 110, 'order_promotion', 'Christmas', -201, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(88, NULL, NULL, 111, 'order_promotion', 'Christmas', -200, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(89, 10, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(90, NULL, NULL, 112, 'order_promotion', 'Christmas', -244, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(91, NULL, NULL, 113, 'order_promotion', 'Christmas', -249, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(92, NULL, NULL, 114, 'order_promotion', 'Christmas', -249, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(93, NULL, NULL, 115, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(94, NULL, NULL, 116, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(95, NULL, NULL, 117, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(96, NULL, NULL, 118, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(97, NULL, NULL, 119, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(98, NULL, NULL, 120, 'order_promotion', 'Christmas', -113, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(99, NULL, NULL, 121, 'order_promotion', 'Christmas', -114, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(100, NULL, NULL, 122, 'order_promotion', 'Christmas', -114, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(101, NULL, NULL, 123, 'order_promotion', 'Christmas', -113, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(102, 11, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(103, 12, NULL, NULL, 'shipping', 'FedEx', 1248, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(104, NULL, NULL, 127, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(105, NULL, NULL, 128, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(106, NULL, NULL, 129, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(107, NULL, NULL, 130, 'order_promotion', 'Christmas', -231, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(108, NULL, NULL, 131, 'order_promotion', 'Christmas', -230, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(109, NULL, NULL, 132, 'order_promotion', 'Christmas', -94, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(110, NULL, NULL, 133, 'order_promotion', 'Christmas', -94, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(111, NULL, NULL, 134, 'order_promotion', 'Christmas', -94, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(112, NULL, NULL, 135, 'order_promotion', 'Christmas', -94, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(113, NULL, NULL, 136, 'order_promotion', 'Christmas', -94, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(114, 13, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(115, NULL, NULL, 137, 'order_promotion', 'Christmas', -45, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(116, NULL, NULL, 138, 'order_promotion', 'Christmas', -45, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(117, NULL, NULL, 139, 'order_promotion', 'Christmas', -45, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(118, NULL, NULL, 140, 'order_promotion', 'Christmas', -45, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(119, NULL, NULL, 141, 'order_promotion', 'Christmas', -44, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(120, 14, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(121, 15, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(122, NULL, NULL, 163, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(123, NULL, NULL, 164, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(124, NULL, NULL, 165, 'order_promotion', 'Christmas', -106, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(125, NULL, NULL, 166, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(126, NULL, NULL, 167, 'order_promotion', 'Christmas', -119, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(127, 16, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(128, NULL, NULL, 168, 'order_promotion', 'Christmas', -150, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(129, NULL, NULL, 169, 'order_promotion', 'Christmas', -149, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(130, NULL, NULL, 170, 'order_promotion', 'Christmas', -149, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(131, NULL, NULL, 171, 'order_promotion', 'Christmas', -149, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(132, NULL, NULL, 172, 'order_promotion', 'Christmas', -149, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(133, NULL, NULL, 173, 'order_promotion', 'Christmas', -118, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(134, NULL, NULL, 174, 'order_promotion', 'Christmas', -118, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(135, NULL, NULL, 175, 'order_promotion', 'Christmas', -118, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(136, NULL, NULL, 176, 'order_promotion', 'Christmas', -118, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(137, 17, NULL, NULL, 'shipping', 'UPS', 8601, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(138, NULL, NULL, 177, 'order_promotion', 'Christmas', -111, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(139, NULL, NULL, 178, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(140, NULL, NULL, 179, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(141, NULL, NULL, 180, 'order_promotion', 'Christmas', -110, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(142, NULL, NULL, 181, 'order_promotion', 'Christmas', -52, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(143, NULL, NULL, 182, 'order_promotion', 'Christmas', -52, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(144, NULL, NULL, 183, 'order_promotion', 'Christmas', -52, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(145, NULL, NULL, 184, 'order_promotion', 'Christmas', -51, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(146, 18, NULL, NULL, 'shipping', 'FedEx', 1248, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(147, 19, NULL, NULL, 'shipping', 'DHL Express', 4682, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(148, NULL, NULL, 188, 'order_promotion', 'Christmas', -182, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(149, NULL, NULL, 189, 'order_promotion', 'Christmas', -182, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(150, NULL, NULL, 190, 'order_promotion', 'Christmas', -182, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(151, NULL, NULL, 191, 'order_promotion', 'Christmas', -182, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(152, NULL, NULL, 192, 'order_promotion', 'Christmas', -181, 0, 0, 'christmas', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(153, 20, NULL, NULL, 'shipping', 'FedEx', 1248, 0, 0, NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_admin_api_access_token`
--

CREATE TABLE `sylius_admin_api_access_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_admin_api_access_token`
--

INSERT INTO `sylius_admin_api_access_token` (`id`, `client_id`, `user_id`, `token`, `expires_at`, `scope`) VALUES
(1, 1, 2, 'SampleToken', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_admin_api_auth_code`
--

CREATE TABLE `sylius_admin_api_auth_code` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uri` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_admin_api_client`
--

CREATE TABLE `sylius_admin_api_client` (
  `id` int(11) NOT NULL,
  `random_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_uris` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_grant_types` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_admin_api_client`
--

INSERT INTO `sylius_admin_api_client` (`id`, `random_id`, `redirect_uris`, `secret`, `allowed_grant_types`) VALUES
(1, 'demo_client', 'a:0:{}', 'secret_demo_client', 'a:1:{i:0;s:8:\"password\";}');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_admin_api_refresh_token`
--

CREATE TABLE `sylius_admin_api_refresh_token` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires_at` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_admin_user`
--

CREATE TABLE `sylius_admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `email_verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale_code` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_admin_user`
--

INSERT INTO `sylius_admin_user` (`id`, `username`, `username_canonical`, `enabled`, `salt`, `password`, `last_login`, `password_reset_token`, `password_requested_at`, `email_verification_token`, `verified_at`, `locked`, `expires_at`, `credentials_expire_at`, `roles`, `email`, `email_canonical`, `created_at`, `updated_at`, `first_name`, `last_name`, `locale_code`) VALUES
(1, 'sylius', 'sylius', 1, 'ml1wyrxxyyo4oc804084cok4kcsgwc0', 'aGBwYfqgIwaJGlkmxPuzRdJInf+52pyihGPxe4WUwUHzQx2b1rnffilu7XHUWlqmXFtllDQfVmzcRQSjPjgi2A==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:26:\"ROLE_ADMINISTRATION_ACCESS\";}', 'sylius@example.com', 'sylius@example.com', '2017-12-14 13:01:44', '2017-12-14 13:01:44', 'John', 'Doe', 'en_US'),
(2, 'api', 'api', 1, 'rjgahy6q99cko0ok88owkwgco4g0skk', '1tD8JLDJyvKKBpDhcl20NzrT7i5zLefx23AAFb4FP8acj0wokA62Vcwoa1IytTVpwTzFsSjSb0CAtZT0YSA8CQ==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:2:{i:0;s:26:\"ROLE_ADMINISTRATION_ACCESS\";i:1;s:15:\"ROLE_API_ACCESS\";}', 'api@example.com', 'api@example.com', '2017-12-14 13:01:44', '2017-12-14 13:01:44', 'Luke', 'Brushwood', 'en_US'),
(3, 'm.shaban@gmail.com', 'm.shaban@gmail.com', 1, 'g0cfyvp8wzcwgowwcsc4c8kcs4w08wc', 'r2jvTKrqTKlT6NBa4cJvepAeuN9NoZtd8ug+W9Cmx2qbrc0XvwTngPNE5DHRRNv4Sq3/Bs1PREYAjr35zSiCEA==', '2017-12-14 15:47:59', NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:26:\"ROLE_ADMINISTRATION_ACCESS\";}', 'm.shaban@gmail.com', 'm.shaban@gmail.com', '2017-12-14 13:02:12', '2017-12-14 15:47:59', NULL, NULL, 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_channel`
--

CREATE TABLE `sylius_channel` (
  `id` int(11) NOT NULL,
  `default_locale_id` int(11) NOT NULL,
  `base_currency_id` int(11) NOT NULL,
  `default_tax_zone_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) NOT NULL,
  `hostname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `theme_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_calculation_strategy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skipping_shipping_step_allowed` tinyint(1) NOT NULL,
  `skipping_payment_step_allowed` tinyint(1) NOT NULL,
  `account_verification_required` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_channel`
--

INSERT INTO `sylius_channel` (`id`, `default_locale_id`, `base_currency_id`, `default_tax_zone_id`, `code`, `name`, `color`, `description`, `enabled`, `hostname`, `created_at`, `updated_at`, `theme_name`, `tax_calculation_strategy`, `contact_email`, `skipping_shipping_step_allowed`, `skipping_payment_step_allowed`, `account_verification_required`) VALUES
(1, 1, 1, 1, 'US_WEB', 'US Web Store', 'LightSkyBlue', NULL, 1, 'localhost', '2017-12-14 13:01:39', '2017-12-14 13:01:39', NULL, 'order_items_based', NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_channel_currencies`
--

CREATE TABLE `sylius_channel_currencies` (
  `channel_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_channel_currencies`
--

INSERT INTO `sylius_channel_currencies` (`channel_id`, `currency_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_channel_locales`
--

CREATE TABLE `sylius_channel_locales` (
  `channel_id` int(11) NOT NULL,
  `locale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_channel_locales`
--

INSERT INTO `sylius_channel_locales` (`channel_id`, `locale_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_channel_pricing`
--

CREATE TABLE `sylius_channel_pricing` (
  `id` int(11) NOT NULL,
  `product_variant_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `original_price` int(11) DEFAULT NULL,
  `channel_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_channel_pricing`
--

INSERT INTO `sylius_channel_pricing` (`id`, `product_variant_id`, `price`, `original_price`, `channel_code`) VALUES
(1, 1, 624, NULL, 'US_WEB'),
(2, 2, 306, NULL, 'US_WEB'),
(3, 3, 682, NULL, 'US_WEB'),
(4, 4, 876, NULL, 'US_WEB'),
(5, 5, 237, NULL, 'US_WEB'),
(6, 6, 933, NULL, 'US_WEB'),
(7, 7, 580, NULL, 'US_WEB'),
(8, 8, 532, NULL, 'US_WEB'),
(9, 9, 461, NULL, 'US_WEB'),
(10, 10, 832, NULL, 'US_WEB'),
(11, 11, 890, NULL, 'US_WEB'),
(12, 12, 532, NULL, 'US_WEB'),
(13, 13, 67, NULL, 'US_WEB'),
(14, 14, 197, NULL, 'US_WEB'),
(15, 15, 555, NULL, 'US_WEB'),
(16, 16, 779, NULL, 'US_WEB'),
(17, 17, 376, NULL, 'US_WEB'),
(18, 18, 399, NULL, 'US_WEB'),
(19, 19, 884, NULL, 'US_WEB'),
(20, 20, 564, NULL, 'US_WEB'),
(21, 21, 120, NULL, 'US_WEB'),
(22, 22, 583, NULL, 'US_WEB'),
(23, 23, 114, NULL, 'US_WEB'),
(24, 24, 877, NULL, 'US_WEB'),
(25, 25, 969, NULL, 'US_WEB'),
(26, 26, 76, NULL, 'US_WEB'),
(27, 27, 891, NULL, 'US_WEB'),
(28, 28, 807, NULL, 'US_WEB'),
(29, 29, 192, NULL, 'US_WEB'),
(30, 30, 934, NULL, 'US_WEB'),
(31, 31, 179, NULL, 'US_WEB'),
(32, 32, 100, NULL, 'US_WEB'),
(33, 33, 361, NULL, 'US_WEB'),
(34, 34, 964, NULL, 'US_WEB'),
(35, 35, 669, NULL, 'US_WEB'),
(36, 36, 927, NULL, 'US_WEB'),
(37, 37, 510, NULL, 'US_WEB'),
(38, 38, 763, NULL, 'US_WEB'),
(39, 39, 176, NULL, 'US_WEB'),
(40, 40, 557, NULL, 'US_WEB'),
(41, 41, 417, NULL, 'US_WEB'),
(42, 42, 735, NULL, 'US_WEB'),
(43, 43, 597, NULL, 'US_WEB'),
(44, 44, 451, NULL, 'US_WEB'),
(45, 45, 507, NULL, 'US_WEB'),
(46, 46, 727, NULL, 'US_WEB'),
(47, 47, 477, NULL, 'US_WEB'),
(48, 48, 820, NULL, 'US_WEB'),
(49, 49, 899, NULL, 'US_WEB'),
(50, 50, 887, NULL, 'US_WEB'),
(51, 51, 159, NULL, 'US_WEB'),
(52, 52, 340, NULL, 'US_WEB'),
(53, 53, 554, NULL, 'US_WEB'),
(54, 54, 50, NULL, 'US_WEB'),
(55, 55, 476, NULL, 'US_WEB'),
(56, 56, 874, NULL, 'US_WEB'),
(57, 57, 242, NULL, 'US_WEB'),
(58, 58, 336, NULL, 'US_WEB'),
(59, 59, 973, NULL, 'US_WEB'),
(60, 60, 325, NULL, 'US_WEB'),
(61, 61, 404, NULL, 'US_WEB'),
(62, 62, 274, NULL, 'US_WEB'),
(63, 63, 7, NULL, 'US_WEB'),
(64, 64, 909, NULL, 'US_WEB'),
(65, 65, 830, NULL, 'US_WEB'),
(66, 66, 937, NULL, 'US_WEB'),
(67, 67, 812, NULL, 'US_WEB'),
(68, 68, 987, NULL, 'US_WEB'),
(69, 69, 559, NULL, 'US_WEB'),
(70, 70, 610, NULL, 'US_WEB'),
(71, 71, 286, NULL, 'US_WEB'),
(72, 72, 493, NULL, 'US_WEB'),
(73, 73, 66, NULL, 'US_WEB'),
(74, 74, 817, NULL, 'US_WEB'),
(75, 75, 496, NULL, 'US_WEB'),
(76, 76, 940, NULL, 'US_WEB'),
(77, 77, 312, NULL, 'US_WEB'),
(78, 78, 454, NULL, 'US_WEB'),
(79, 79, 263, NULL, 'US_WEB'),
(80, 80, 610, NULL, 'US_WEB'),
(81, 81, 163, NULL, 'US_WEB'),
(82, 82, 621, NULL, 'US_WEB'),
(83, 83, 626, NULL, 'US_WEB'),
(84, 84, 455, NULL, 'US_WEB'),
(85, 85, 669, NULL, 'US_WEB'),
(86, 86, 805, NULL, 'US_WEB'),
(87, 87, 2, NULL, 'US_WEB'),
(88, 88, 836, NULL, 'US_WEB'),
(89, 89, 631, NULL, 'US_WEB'),
(90, 90, 458, NULL, 'US_WEB'),
(91, 91, 424, NULL, 'US_WEB'),
(92, 92, 749, NULL, 'US_WEB'),
(93, 93, 43, NULL, 'US_WEB'),
(94, 94, 430, NULL, 'US_WEB'),
(95, 95, 753, NULL, 'US_WEB'),
(96, 96, 961, NULL, 'US_WEB'),
(97, 97, 149, NULL, 'US_WEB'),
(98, 98, 841, NULL, 'US_WEB'),
(99, 99, 441, NULL, 'US_WEB'),
(100, 100, 864, NULL, 'US_WEB'),
(101, 101, 997, NULL, 'US_WEB'),
(102, 102, 815, NULL, 'US_WEB'),
(103, 103, 498, NULL, 'US_WEB'),
(104, 104, 288, NULL, 'US_WEB'),
(105, 105, 522, NULL, 'US_WEB'),
(106, 106, 97, NULL, 'US_WEB'),
(107, 107, 405, NULL, 'US_WEB'),
(108, 108, 227, NULL, 'US_WEB'),
(109, 109, 450, NULL, 'US_WEB'),
(110, 110, 156, NULL, 'US_WEB'),
(111, 111, 476, NULL, 'US_WEB'),
(112, 112, 194, NULL, 'US_WEB'),
(113, 113, 720, NULL, 'US_WEB'),
(114, 114, 598, NULL, 'US_WEB'),
(115, 115, 943, NULL, 'US_WEB'),
(116, 116, 344, NULL, 'US_WEB'),
(117, 117, 225, NULL, 'US_WEB'),
(118, 118, 885, NULL, 'US_WEB'),
(119, 119, 502, NULL, 'US_WEB'),
(120, 120, 868, NULL, 'US_WEB'),
(121, 121, 155, NULL, 'US_WEB'),
(122, 122, 230, NULL, 'US_WEB'),
(123, 123, 600, NULL, 'US_WEB'),
(124, 124, 955, NULL, 'US_WEB'),
(125, 125, 537, NULL, 'US_WEB'),
(126, 126, 328, NULL, 'US_WEB'),
(127, 127, 418, NULL, 'US_WEB'),
(128, 128, 510, NULL, 'US_WEB'),
(129, 129, 215, NULL, 'US_WEB'),
(130, 130, 524, NULL, 'US_WEB'),
(131, 131, 352, NULL, 'US_WEB'),
(132, 132, 10, NULL, 'US_WEB'),
(133, 133, 30, NULL, 'US_WEB'),
(134, 134, 463, NULL, 'US_WEB'),
(135, 135, 504, NULL, 'US_WEB'),
(136, 136, 397, NULL, 'US_WEB'),
(137, 137, 931, NULL, 'US_WEB'),
(138, 138, 710, NULL, 'US_WEB'),
(139, 139, 864, NULL, 'US_WEB'),
(140, 140, 496, NULL, 'US_WEB'),
(141, 141, 698, NULL, 'US_WEB'),
(142, 142, 683, NULL, 'US_WEB'),
(143, 143, 271, NULL, 'US_WEB'),
(144, 144, 952, NULL, 'US_WEB'),
(145, 145, 963, NULL, 'US_WEB'),
(146, 146, 922, NULL, 'US_WEB'),
(147, 147, 542, NULL, 'US_WEB'),
(148, 148, 240, NULL, 'US_WEB'),
(149, 149, 723, NULL, 'US_WEB'),
(150, 150, 616, NULL, 'US_WEB'),
(151, 151, 340, NULL, 'US_WEB'),
(152, 152, 915, NULL, 'US_WEB'),
(153, 153, 917, NULL, 'US_WEB'),
(154, 154, 778, NULL, 'US_WEB'),
(155, 155, 996, NULL, 'US_WEB'),
(156, 156, 50, NULL, 'US_WEB'),
(157, 157, 892, NULL, 'US_WEB'),
(158, 158, 625, NULL, 'US_WEB'),
(159, 159, 239, NULL, 'US_WEB'),
(160, 160, 53, NULL, 'US_WEB'),
(161, 161, 272, NULL, 'US_WEB'),
(162, 162, 845, NULL, 'US_WEB'),
(163, 163, 541, NULL, 'US_WEB'),
(164, 164, 632, NULL, 'US_WEB'),
(165, 165, 208, NULL, 'US_WEB'),
(166, 166, 534, NULL, 'US_WEB'),
(167, 167, 393, NULL, 'US_WEB'),
(168, 168, 555, NULL, 'US_WEB'),
(169, 169, 373, NULL, 'US_WEB'),
(170, 170, 851, NULL, 'US_WEB'),
(171, 171, 276, NULL, 'US_WEB'),
(172, 172, 656, NULL, 'US_WEB'),
(173, 173, 141, NULL, 'US_WEB'),
(174, 174, 539, NULL, 'US_WEB'),
(175, 175, 37, NULL, 'US_WEB'),
(176, 176, 371, NULL, 'US_WEB'),
(177, 177, 790, NULL, 'US_WEB'),
(178, 178, 223, NULL, 'US_WEB'),
(179, 179, 820, NULL, 'US_WEB'),
(180, 180, 834, NULL, 'US_WEB'),
(181, 181, 947, NULL, 'US_WEB'),
(182, 182, 750, NULL, 'US_WEB'),
(183, 183, 753, NULL, 'US_WEB'),
(184, 184, 117, NULL, 'US_WEB'),
(185, 185, 747, NULL, 'US_WEB'),
(186, 186, 386, NULL, 'US_WEB'),
(187, 187, 755, NULL, 'US_WEB'),
(188, 188, 83, NULL, 'US_WEB'),
(189, 189, 945, NULL, 'US_WEB'),
(190, 190, 401, NULL, 'US_WEB'),
(191, 191, 134, NULL, 'US_WEB'),
(192, 192, 385, NULL, 'US_WEB'),
(193, 193, 221, NULL, 'US_WEB'),
(194, 194, 692, NULL, 'US_WEB'),
(195, 195, 121, NULL, 'US_WEB'),
(196, 196, 347, NULL, 'US_WEB'),
(197, 197, 857, NULL, 'US_WEB'),
(198, 198, 977, NULL, 'US_WEB'),
(199, 199, 480, NULL, 'US_WEB'),
(200, 200, 235, NULL, 'US_WEB'),
(201, 201, 602, NULL, 'US_WEB'),
(202, 202, 169, NULL, 'US_WEB'),
(203, 203, 78, NULL, 'US_WEB'),
(204, 204, 357, NULL, 'US_WEB'),
(205, 205, 103, NULL, 'US_WEB'),
(206, 206, 131, NULL, 'US_WEB'),
(207, 207, 728, NULL, 'US_WEB'),
(208, 208, 202, NULL, 'US_WEB'),
(209, 209, 161, NULL, 'US_WEB'),
(210, 210, 850, NULL, 'US_WEB'),
(211, 211, 934, NULL, 'US_WEB'),
(212, 212, 215, NULL, 'US_WEB'),
(213, 213, 225, NULL, 'US_WEB'),
(214, 214, 639, NULL, 'US_WEB'),
(215, 215, 56, NULL, 'US_WEB'),
(216, 216, 425, NULL, 'US_WEB'),
(217, 217, 999, NULL, 'US_WEB'),
(218, 218, 137, NULL, 'US_WEB'),
(219, 219, 997, NULL, 'US_WEB'),
(220, 220, 83, NULL, 'US_WEB'),
(221, 221, 898, NULL, 'US_WEB'),
(222, 222, 23, NULL, 'US_WEB'),
(223, 223, 955, NULL, 'US_WEB'),
(224, 224, 754, NULL, 'US_WEB'),
(225, 225, 724, NULL, 'US_WEB'),
(226, 226, 386, NULL, 'US_WEB'),
(227, 227, 22, NULL, 'US_WEB'),
(228, 228, 638, NULL, 'US_WEB'),
(229, 229, 979, NULL, 'US_WEB'),
(230, 230, 244, NULL, 'US_WEB'),
(231, 231, 865, NULL, 'US_WEB'),
(232, 232, 623, NULL, 'US_WEB'),
(233, 233, 117, NULL, 'US_WEB'),
(234, 234, 659, NULL, 'US_WEB'),
(235, 235, 613, NULL, 'US_WEB'),
(236, 236, 906, NULL, 'US_WEB'),
(237, 237, 189, NULL, 'US_WEB'),
(238, 238, 197, NULL, 'US_WEB'),
(239, 239, 551, NULL, 'US_WEB'),
(240, 240, 846, NULL, 'US_WEB'),
(241, 241, 357, NULL, 'US_WEB'),
(242, 242, 820, NULL, 'US_WEB'),
(243, 243, 565, NULL, 'US_WEB'),
(244, 244, 373, NULL, 'US_WEB'),
(245, 245, 25, NULL, 'US_WEB'),
(246, 246, 428, NULL, 'US_WEB'),
(247, 247, 209, NULL, 'US_WEB'),
(248, 248, 833, NULL, 'US_WEB'),
(249, 249, 791, NULL, 'US_WEB'),
(250, 250, 92, NULL, 'US_WEB'),
(251, 251, 449, NULL, 'US_WEB'),
(252, 252, 464, NULL, 'US_WEB'),
(253, 253, 678, NULL, 'US_WEB'),
(254, 254, 69, NULL, 'US_WEB'),
(255, 255, 911, NULL, 'US_WEB'),
(256, 256, 309, NULL, 'US_WEB'),
(257, 257, 85, NULL, 'US_WEB'),
(258, 258, 786, NULL, 'US_WEB'),
(259, 259, 84, NULL, 'US_WEB'),
(260, 260, 574, NULL, 'US_WEB'),
(261, 261, 883, NULL, 'US_WEB'),
(262, 262, 860, NULL, 'US_WEB'),
(263, 263, 975, NULL, 'US_WEB'),
(264, 264, 390, NULL, 'US_WEB'),
(265, 265, 248, NULL, 'US_WEB'),
(266, 266, 410, NULL, 'US_WEB'),
(267, 267, 700, NULL, 'US_WEB'),
(268, 268, 472, NULL, 'US_WEB'),
(269, 269, 448, NULL, 'US_WEB'),
(270, 270, 211, NULL, 'US_WEB'),
(271, 271, 898, NULL, 'US_WEB'),
(272, 272, 760, NULL, 'US_WEB'),
(273, 273, 939, NULL, 'US_WEB'),
(274, 274, 161, NULL, 'US_WEB'),
(275, 275, 849, NULL, 'US_WEB'),
(276, 276, 439, NULL, 'US_WEB'),
(277, 277, 682, NULL, 'US_WEB'),
(278, 278, 378, NULL, 'US_WEB'),
(279, 279, 68, NULL, 'US_WEB'),
(280, 280, 202, NULL, 'US_WEB'),
(281, 281, 393, NULL, 'US_WEB'),
(282, 282, 622, NULL, 'US_WEB'),
(283, 283, 810, NULL, 'US_WEB'),
(284, 284, 962, NULL, 'US_WEB'),
(285, 285, 144, NULL, 'US_WEB'),
(286, 286, 366, NULL, 'US_WEB'),
(287, 287, 207, NULL, 'US_WEB'),
(288, 288, 174, NULL, 'US_WEB'),
(289, 289, 469, NULL, 'US_WEB'),
(290, 290, 620, NULL, 'US_WEB'),
(291, 291, 243, NULL, 'US_WEB'),
(292, 292, 437, NULL, 'US_WEB'),
(293, 293, 576, NULL, 'US_WEB'),
(294, 294, 803, NULL, 'US_WEB'),
(295, 295, 612, NULL, 'US_WEB'),
(296, 296, 686, NULL, 'US_WEB'),
(297, 297, 679, NULL, 'US_WEB'),
(298, 298, 193, NULL, 'US_WEB'),
(299, 299, 44, NULL, 'US_WEB'),
(300, 300, 982, NULL, 'US_WEB'),
(301, 301, 159, NULL, 'US_WEB'),
(302, 302, 416, NULL, 'US_WEB'),
(303, 303, 587, NULL, 'US_WEB'),
(304, 304, 411, NULL, 'US_WEB'),
(305, 305, 817, NULL, 'US_WEB'),
(306, 306, 997, NULL, 'US_WEB'),
(307, 307, 291, NULL, 'US_WEB'),
(308, 308, 712, NULL, 'US_WEB'),
(309, 309, 967, NULL, 'US_WEB'),
(310, 310, 251, NULL, 'US_WEB'),
(311, 311, 743, NULL, 'US_WEB'),
(312, 312, 519, NULL, 'US_WEB'),
(313, 313, 171, NULL, 'US_WEB'),
(314, 314, 216, NULL, 'US_WEB'),
(315, 315, 347, NULL, 'US_WEB'),
(316, 316, 214, NULL, 'US_WEB'),
(317, 317, 199, NULL, 'US_WEB'),
(318, 318, 458, NULL, 'US_WEB'),
(319, 319, 623, NULL, 'US_WEB'),
(320, 320, 490, NULL, 'US_WEB'),
(321, 321, 618, NULL, 'US_WEB'),
(322, 322, 747, NULL, 'US_WEB'),
(323, 323, 875, NULL, 'US_WEB'),
(324, 324, 261, NULL, 'US_WEB'),
(325, 325, 122, NULL, 'US_WEB'),
(326, 326, 569, NULL, 'US_WEB'),
(327, 327, 905, NULL, 'US_WEB'),
(328, 328, 741, NULL, 'US_WEB'),
(329, 329, 531, NULL, 'US_WEB'),
(330, 330, 129, NULL, 'US_WEB');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_country`
--

CREATE TABLE `sylius_country` (
  `id` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_country`
--

INSERT INTO `sylius_country` (`id`, `code`, `enabled`) VALUES
(1, 'US', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_currency`
--

CREATE TABLE `sylius_currency` (
  `id` int(11) NOT NULL,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_currency`
--

INSERT INTO `sylius_currency` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'USD', '2017-12-14 13:01:39', '2017-12-14 13:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_customer`
--

CREATE TABLE `sylius_customer` (
  `id` int(11) NOT NULL,
  `customer_group_id` int(11) DEFAULT NULL,
  `default_address_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'u',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subscribed_to_newsletter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_customer`
--

INSERT INTO `sylius_customer` (`id`, `customer_group_id`, `default_address_id`, `email`, `email_canonical`, `first_name`, `last_name`, `birthday`, `gender`, `created_at`, `updated_at`, `phone_number`, `subscribed_to_newsletter`) VALUES
(1, 1, NULL, 'shop@example.com', 'shop@example.com', 'John', 'Doe', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(2, 1, NULL, 'epollich@ryan.com', 'epollich@ryan.com', 'Marta', 'Ebert', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(3, 1, NULL, 'jayce73@littel.net', 'jayce73@littel.net', 'Breana', 'Casper', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(4, 2, NULL, 'emmanuel.parisian@casper.com', 'emmanuel.parisian@casper.com', 'Peyton', 'Thiel', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(5, 1, NULL, 'idubuque@kreiger.info', 'idubuque@kreiger.info', 'Sofia', 'Toy', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(6, 2, NULL, 'alivia.cole@dickens.org', 'alivia.cole@dickens.org', 'Unique', 'Streich', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(7, 2, NULL, 'kailey25@yahoo.com', 'kailey25@yahoo.com', 'Tina', 'Sawayn', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(8, 1, NULL, 'jeanne.lesch@yahoo.com', 'jeanne.lesch@yahoo.com', 'Ursula', 'Baumbach', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(9, 1, NULL, 'lockman.callie@gmail.com', 'lockman.callie@gmail.com', 'Davion', 'Runolfsdottir', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(10, 1, NULL, 'walker41@gmail.com', 'walker41@gmail.com', 'Quentin', 'Torp', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(11, 2, NULL, 'maggie.sauer@yahoo.com', 'maggie.sauer@yahoo.com', 'Kaylee', 'Heller', NULL, 'u', '2017-12-14 13:01:41', '2017-12-14 13:01:41', NULL, 0),
(12, 1, NULL, 'carmella36@johnston.biz', 'carmella36@johnston.biz', 'Royce', 'O\'Conner', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(13, 1, NULL, 'bhomenick@yahoo.com', 'bhomenick@yahoo.com', 'Jarrod', 'Hermiston', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(14, 1, NULL, 'rwhite@bauch.info', 'rwhite@bauch.info', 'Ryder', 'Aufderhar', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(15, 1, NULL, 'lucius10@towne.com', 'lucius10@towne.com', 'Briana', 'Zemlak', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(16, 2, NULL, 'marielle56@barton.net', 'marielle56@barton.net', 'Bertram', 'Stroman', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(17, 1, NULL, 'pmarks@yahoo.com', 'pmarks@yahoo.com', 'Granville', 'Shields', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(18, 2, NULL, 'german01@ledner.com', 'german01@ledner.com', 'Shanon', 'Kohler', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(19, 1, NULL, 'jayne.pfannerstill@dubuque.com', 'jayne.pfannerstill@dubuque.com', 'Estel', 'Nolan', NULL, 'u', '2017-12-14 13:01:42', '2017-12-14 13:01:42', NULL, 0),
(20, 1, NULL, 'yoconnell@wuckert.com', 'yoconnell@wuckert.com', 'Bernard', 'Streich', NULL, 'u', '2017-12-14 13:01:43', '2017-12-14 13:01:43', NULL, 0),
(21, 1, NULL, 'nbergnaum@becker.biz', 'nbergnaum@becker.biz', 'Darrel', 'Metz', NULL, 'u', '2017-12-14 13:01:43', '2017-12-14 13:01:44', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_customer_group`
--

CREATE TABLE `sylius_customer_group` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_customer_group`
--

INSERT INTO `sylius_customer_group` (`id`, `code`, `name`) VALUES
(1, 'retail', 'Retail'),
(2, 'wholesale', 'Wholesale');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_exchange_rate`
--

CREATE TABLE `sylius_exchange_rate` (
  `id` int(11) NOT NULL,
  `source_currency` int(11) NOT NULL,
  `target_currency` int(11) NOT NULL,
  `ratio` decimal(10,5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_gateway_config`
--

CREATE TABLE `sylius_gateway_config` (
  `id` int(11) NOT NULL,
  `gateway_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factory_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_gateway_config`
--

INSERT INTO `sylius_gateway_config` (`id`, `gateway_name`, `factory_name`, `config`) VALUES
(1, 'Offline', 'offline', '[]'),
(2, 'Offline', 'offline', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_locale`
--

CREATE TABLE `sylius_locale` (
  `id` int(11) NOT NULL,
  `code` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_locale`
--

INSERT INTO `sylius_locale` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'en_US', '2017-12-14 13:01:39', '2017-12-14 13:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_migrations`
--

CREATE TABLE `sylius_migrations` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_migrations`
--

INSERT INTO `sylius_migrations` (`version`) VALUES
('20170912085504');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_order`
--

CREATE TABLE `sylius_order` (
  `id` int(11) NOT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `channel_id` int(11) DEFAULT NULL,
  `promotion_coupon_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkout_completed_at` datetime DEFAULT NULL,
  `items_total` int(11) NOT NULL,
  `adjustments_total` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `currency_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `locale_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkout_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_order`
--

INSERT INTO `sylius_order` (`id`, `shipping_address_id`, `billing_address_id`, `channel_id`, `promotion_coupon_id`, `customer_id`, `number`, `notes`, `state`, `checkout_completed_at`, `items_total`, `adjustments_total`, `total`, `created_at`, `updated_at`, `currency_code`, `locale_code`, `checkout_state`, `payment_state`, `shipping_state`, `token_value`, `customer_ip`) VALUES
(1, 1, 2, 1, NULL, 15, '000000001', 'Iste id quam omnis eum quaerat qui.', 'new', '2017-12-14 13:02:02', 2314, 4682, 6996, '2017-12-14 13:02:00', '2017-12-14 13:02:02', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'lAbGfHP-68', NULL),
(2, 4, 5, 1, NULL, 4, '000000002', NULL, 'new', '2017-12-14 13:02:03', 11292, 4682, 15974, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'J~nGwgQYG7', NULL),
(3, 7, 8, 1, NULL, 14, '000000003', NULL, 'new', '2017-12-14 13:02:03', 5287, 8601, 13888, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'R6ELo4mkuo', NULL),
(4, 10, 11, 1, NULL, 1, '000000004', NULL, 'new', '2017-12-14 13:02:03', 2464, 4682, 7146, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'a_wbiyTOPu', NULL),
(5, 13, 14, 1, NULL, 20, '000000005', NULL, 'new', '2017-12-14 13:02:03', 6165, 8601, 14766, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'TILwQLN6pR', NULL),
(6, 16, 17, 1, NULL, 16, '000000006', NULL, 'new', '2017-12-14 13:02:03', 4788, 8601, 13389, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'imghuSDy-t', NULL),
(7, 19, 20, 1, NULL, 21, '000000007', NULL, 'new', '2017-12-14 13:02:03', 4799, 8601, 13400, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'mkt67Fpf6q', NULL),
(8, 22, 23, 1, NULL, 18, '000000008', 'Fugit laudantium quisquam omnis repellendus quo.', 'new', '2017-12-14 13:02:03', 3577, 8601, 12178, '2017-12-14 13:02:03', '2017-12-14 13:02:03', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'W5u3J3vz9I', NULL),
(9, 25, 26, 1, NULL, 10, '000000009', NULL, 'new', '2017-12-14 13:02:04', 11944, 8601, 20545, '2017-12-14 13:02:03', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'qSfLmrM7CI', NULL),
(10, 28, 29, 1, NULL, 2, '000000010', NULL, 'new', '2017-12-14 13:02:04', 2711, 4682, 7393, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', '19bGQIDGXC', NULL),
(11, 31, 32, 1, NULL, 19, '000000011', NULL, 'new', '2017-12-14 13:02:04', 5176, 4682, 9858, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'zL~PlLZ5zD', NULL),
(12, 34, 35, 1, NULL, 9, '000000012', 'Repudiandae sequi temporibus est molestiae mollitia voluptatem.', 'new', '2017-12-14 13:02:04', 2597, 1248, 3845, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'guEk3pDNei', NULL),
(13, 37, 38, 1, NULL, 5, '000000013', NULL, 'new', '2017-12-14 13:02:04', 3747, 8601, 12348, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', '6OEaRzvp0I', NULL),
(14, 40, 41, 1, NULL, 13, '000000014', NULL, 'new', '2017-12-14 13:02:04', 671, 4682, 5353, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'lRpDfN6q6f', NULL),
(15, 43, 44, 1, NULL, 17, '000000015', NULL, 'new', '2017-12-14 13:02:04', 11750, 4682, 16432, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', '489NritFVB', NULL),
(16, 46, 47, 1, NULL, 19, '000000016', 'Reprehenderit deleniti id alias amet dolore.', 'new', '2017-12-14 13:02:04', 1668, 8601, 10269, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'qX-e9g8u2w', NULL),
(17, 49, 50, 1, NULL, 1, '000000017', NULL, 'new', '2017-12-14 13:02:04', 3655, 8601, 12256, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', '_uAu6v8Ifd', NULL),
(18, 52, 53, 1, NULL, 15, '000000018', NULL, 'new', '2017-12-14 13:02:04', 1944, 1248, 3192, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', '705eJpEdmE', NULL),
(19, 55, 56, 1, NULL, 16, '000000019', NULL, 'new', '2017-12-14 13:02:04', 228, 4682, 4910, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'RHDSjgk5_m', NULL),
(20, 58, 59, 1, NULL, 3, '000000020', NULL, 'new', '2017-12-14 13:02:04', 2726, 1248, 3974, '2017-12-14 13:02:04', '2017-12-14 13:02:04', 'USD', 'en_US', 'completed', 'awaiting_payment', 'ready', 'OkB2~Vrx~d', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_order_item`
--

CREATE TABLE `sylius_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `units_total` int(11) NOT NULL,
  `adjustments_total` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `is_immutable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_order_item`
--

INSERT INTO `sylius_order_item` (`id`, `order_id`, `variant_id`, `quantity`, `unit_price`, `units_total`, `adjustments_total`, `total`, `is_immutable`) VALUES
(1, 1, 99, 4, 441, 1323, 0, 1323, 0),
(2, 1, 57, 1, 242, 182, 0, 182, 0),
(3, 1, 14, 3, 197, 443, 0, 443, 0),
(4, 1, 230, 2, 244, 366, 0, 366, 0),
(5, 2, 96, 4, 961, 3844, 0, 3844, 0),
(6, 2, 44, 1, 451, 451, 0, 451, 0),
(7, 2, 77, 1, 312, 312, 0, 312, 0),
(8, 2, 216, 4, 425, 1700, 0, 1700, 0),
(9, 2, 101, 5, 997, 4985, 0, 4985, 0),
(10, 3, 104, 2, 288, 432, 0, 432, 0),
(11, 3, 300, 1, 982, 736, 0, 736, 0),
(12, 3, 252, 3, 464, 1044, 0, 1044, 0),
(13, 3, 48, 5, 820, 3075, 0, 3075, 0),
(14, 4, 74, 3, 817, 1838, 0, 1838, 0),
(15, 4, 41, 2, 417, 626, 0, 626, 0),
(16, 5, 40, 2, 557, 835, 0, 835, 0),
(17, 5, 34, 2, 964, 1446, 0, 1446, 0),
(18, 5, 12, 4, 532, 1596, 0, 1596, 0),
(19, 5, 80, 5, 610, 2288, 0, 2288, 0),
(20, 6, 57, 2, 242, 363, 0, 363, 0),
(21, 6, 109, 4, 450, 1350, 0, 1350, 0),
(22, 6, 48, 5, 820, 3075, 0, 3075, 0),
(23, 7, 321, 1, 618, 463, 0, 463, 0),
(24, 7, 39, 1, 176, 132, 0, 132, 0),
(25, 7, 55, 5, 476, 1785, 0, 1785, 0),
(26, 7, 79, 3, 263, 592, 0, 592, 0),
(27, 7, 67, 3, 812, 1827, 0, 1827, 0),
(28, 8, 257, 1, 85, 64, 0, 64, 0),
(29, 8, 66, 5, 937, 3513, 0, 3513, 0),
(30, 9, 102, 4, 815, 3260, 0, 3260, 0),
(31, 9, 169, 4, 373, 1492, 0, 1492, 0),
(32, 9, 88, 5, 836, 4180, 0, 4180, 0),
(33, 9, 95, 4, 753, 3012, 0, 3012, 0),
(34, 10, 21, 4, 120, 360, 0, 360, 0),
(35, 10, 57, 3, 242, 544, 0, 544, 0),
(36, 10, 294, 3, 803, 1807, 0, 1807, 0),
(37, 11, 198, 1, 977, 733, 0, 733, 0),
(38, 11, 155, 2, 996, 1494, 0, 1494, 0),
(39, 11, 91, 5, 424, 1590, 0, 1590, 0),
(40, 11, 44, 1, 451, 338, 0, 338, 0),
(41, 11, 78, 3, 454, 1021, 0, 1021, 0),
(42, 12, 309, 1, 967, 967, 0, 967, 0),
(43, 12, 102, 2, 815, 1630, 0, 1630, 0),
(44, 13, 91, 3, 424, 954, 0, 954, 0),
(45, 13, 146, 2, 922, 1383, 0, 1383, 0),
(46, 13, 17, 5, 376, 1410, 0, 1410, 0),
(47, 14, 31, 5, 179, 671, 0, 671, 0),
(48, 15, 216, 5, 425, 2125, 0, 2125, 0),
(49, 15, 19, 5, 884, 4420, 0, 4420, 0),
(50, 15, 91, 4, 424, 1696, 0, 1696, 0),
(51, 15, 72, 5, 493, 2465, 0, 2465, 0),
(52, 15, 105, 2, 522, 1044, 0, 1044, 0),
(53, 16, 91, 3, 424, 954, 0, 954, 0),
(54, 16, 55, 2, 476, 714, 0, 714, 0),
(55, 17, 43, 3, 597, 1343, 0, 1343, 0),
(56, 17, 43, 2, 597, 896, 0, 896, 0),
(57, 17, 268, 4, 472, 1416, 0, 1416, 0),
(58, 18, 99, 4, 441, 1323, 0, 1323, 0),
(59, 18, 287, 4, 207, 621, 0, 621, 0),
(60, 19, 26, 3, 76, 228, 0, 228, 0),
(61, 20, 46, 5, 727, 2726, 0, 2726, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_order_item_unit`
--

CREATE TABLE `sylius_order_item_unit` (
  `id` int(11) NOT NULL,
  `order_item_id` int(11) NOT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `adjustments_total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_order_item_unit`
--

INSERT INTO `sylius_order_item_unit` (`id`, `order_item_id`, `shipment_id`, `adjustments_total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, -111, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(2, 1, 1, -110, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(3, 1, 1, -110, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(4, 1, 1, -110, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(5, 2, 1, -60, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(6, 3, 1, -50, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(7, 3, 1, -49, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(8, 3, 1, -49, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(9, 4, 1, -61, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(10, 4, 1, -61, '2017-12-14 13:02:00', '2017-12-14 13:02:02'),
(11, 5, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(12, 5, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(13, 5, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(14, 5, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(15, 6, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(16, 7, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(17, 8, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(18, 8, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(19, 8, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(20, 8, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(21, 9, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(22, 9, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(23, 9, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(24, 9, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(25, 9, 2, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(26, 10, 3, -72, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(27, 10, 3, -72, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(28, 11, 3, -246, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(29, 12, 3, -116, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(30, 12, 3, -116, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(31, 12, 3, -116, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(32, 13, 3, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(33, 13, 3, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(34, 13, 3, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(35, 13, 3, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(36, 13, 3, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(37, 14, 4, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(38, 14, 4, -204, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(39, 14, 4, -204, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(40, 15, 4, -104, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(41, 15, 4, -104, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(42, 16, 5, -140, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(43, 16, 5, -139, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(44, 17, 5, -241, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(45, 17, 5, -241, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(46, 18, 5, -133, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(47, 18, 5, -133, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(48, 18, 5, -133, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(49, 18, 5, -133, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(50, 19, 5, -153, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(51, 19, 5, -153, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(52, 19, 5, -152, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(53, 19, 5, -152, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(54, 19, 5, -152, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(55, 20, 6, -61, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(56, 20, 6, -60, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(57, 21, 6, -113, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(58, 21, 6, -113, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(59, 21, 6, -112, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(60, 21, 6, -112, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(61, 22, 6, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(62, 22, 6, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(63, 22, 6, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(64, 22, 6, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(65, 22, 6, -205, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(66, 23, 7, -155, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(67, 24, 7, -44, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(68, 25, 7, -119, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(69, 25, 7, -119, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(70, 25, 7, -119, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(71, 25, 7, -119, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(72, 25, 7, -119, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(73, 26, 7, -66, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(74, 26, 7, -66, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(75, 26, 7, -65, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(76, 27, 7, -203, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(77, 27, 7, -203, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(78, 27, 7, -203, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(79, 28, 8, -21, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(80, 29, 8, -235, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(81, 29, 8, -235, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(82, 29, 8, -234, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(83, 29, 8, -234, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(84, 29, 8, -234, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(85, 30, 9, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:04'),
(86, 30, 9, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:04'),
(87, 30, 9, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:04'),
(88, 30, 9, 0, '2017-12-14 13:02:03', '2017-12-14 13:02:04'),
(89, 31, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(90, 31, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(91, 31, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(92, 31, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(93, 32, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(94, 32, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(95, 32, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(96, 32, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(97, 32, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(98, 33, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(99, 33, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(100, 33, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(101, 33, 9, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(102, 34, 10, -30, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(103, 34, 10, -30, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(104, 34, 10, -30, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(105, 34, 10, -30, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(106, 35, 10, -61, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(107, 35, 10, -61, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(108, 35, 10, -60, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(109, 36, 10, -201, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(110, 36, 10, -201, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(111, 36, 10, -200, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(112, 37, 11, -244, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(113, 38, 11, -249, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(114, 38, 11, -249, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(115, 39, 11, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(116, 39, 11, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(117, 39, 11, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(118, 39, 11, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(119, 39, 11, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(120, 40, 11, -113, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(121, 41, 11, -114, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(122, 41, 11, -114, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(123, 41, 11, -113, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(124, 42, 12, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(125, 43, 12, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(126, 43, 12, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(127, 44, 13, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(128, 44, 13, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(129, 44, 13, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(130, 45, 13, -231, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(131, 45, 13, -230, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(132, 46, 13, -94, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(133, 46, 13, -94, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(134, 46, 13, -94, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(135, 46, 13, -94, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(136, 46, 13, -94, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(137, 47, 14, -45, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(138, 47, 14, -45, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(139, 47, 14, -45, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(140, 47, 14, -45, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(141, 47, 14, -44, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(142, 48, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(143, 48, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(144, 48, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(145, 48, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(146, 48, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(147, 49, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(148, 49, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(149, 49, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(150, 49, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(151, 49, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(152, 50, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(153, 50, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(154, 50, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(155, 50, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(156, 51, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(157, 51, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(158, 51, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(159, 51, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(160, 51, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(161, 52, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(162, 52, 15, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(163, 53, 16, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(164, 53, 16, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(165, 53, 16, -106, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(166, 54, 16, -119, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(167, 54, 16, -119, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(168, 55, 17, -150, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(169, 55, 17, -149, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(170, 55, 17, -149, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(171, 56, 17, -149, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(172, 56, 17, -149, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(173, 57, 17, -118, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(174, 57, 17, -118, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(175, 57, 17, -118, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(176, 57, 17, -118, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(177, 58, 18, -111, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(178, 58, 18, -110, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(179, 58, 18, -110, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(180, 58, 18, -110, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(181, 59, 18, -52, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(182, 59, 18, -52, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(183, 59, 18, -52, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(184, 59, 18, -51, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(185, 60, 19, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(186, 60, 19, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(187, 60, 19, 0, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(188, 61, 20, -182, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(189, 61, 20, -182, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(190, 61, 20, -182, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(191, 61, 20, -182, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(192, 61, 20, -181, '2017-12-14 13:02:04', '2017-12-14 13:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_order_sequence`
--

CREATE TABLE `sylius_order_sequence` (
  `id` int(11) NOT NULL,
  `idx` int(11) NOT NULL,
  `version` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_order_sequence`
--

INSERT INTO `sylius_order_sequence` (`id`, `idx`, `version`) VALUES
(1, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_payment`
--

CREATE TABLE `sylius_payment` (
  `id` int(11) NOT NULL,
  `method_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `currency_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_payment`
--

INSERT INTO `sylius_payment` (`id`, `method_id`, `order_id`, `currency_code`, `amount`, `state`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'USD', 6996, 'new', '[]', '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(2, 1, 2, 'USD', 15974, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(3, 2, 3, 'USD', 13888, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(4, 1, 4, 'USD', 7146, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(5, 2, 5, 'USD', 14766, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(6, 1, 6, 'USD', 13389, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(7, 2, 7, 'USD', 13400, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(8, 2, 8, 'USD', 12178, 'new', '[]', '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(9, 1, 9, 'USD', 20545, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(10, 2, 10, 'USD', 7393, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(11, 1, 11, 'USD', 9858, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(12, 1, 12, 'USD', 3845, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(13, 2, 13, 'USD', 12348, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(14, 2, 14, 'USD', 5353, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(15, 2, 15, 'USD', 16432, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(16, 1, 16, 'USD', 10269, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(17, 2, 17, 'USD', 12256, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(18, 1, 18, 'USD', 3192, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(19, 1, 19, 'USD', 4910, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(20, 1, 20, 'USD', 3974, 'new', '[]', '2017-12-14 13:02:04', '2017-12-14 13:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_payment_method`
--

CREATE TABLE `sylius_payment_method` (
  `id` int(11) NOT NULL,
  `gateway_config_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_payment_method`
--

INSERT INTO `sylius_payment_method` (`id`, `gateway_config_id`, `code`, `environment`, `is_enabled`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'cash_on_delivery', NULL, 1, 0, '2017-12-14 13:01:40', '2017-12-14 13:01:40'),
(2, 2, 'bank_transfer', NULL, 1, 1, '2017-12-14 13:01:40', '2017-12-14 13:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_payment_method_channels`
--

CREATE TABLE `sylius_payment_method_channels` (
  `payment_method_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_payment_method_channels`
--

INSERT INTO `sylius_payment_method_channels` (`payment_method_id`, `channel_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_payment_method_translation`
--

CREATE TABLE `sylius_payment_method_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `instructions` longtext COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_payment_method_translation`
--

INSERT INTO `sylius_payment_method_translation` (`id`, `translatable_id`, `name`, `description`, `instructions`, `locale`) VALUES
(1, 1, 'Cash on delivery', 'Velit dignissimos enim iure doloremque laborum.', NULL, 'en_US'),
(2, 2, 'Bank transfer', 'Nihil quia eaque facilis.', NULL, 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_payment_security_token`
--

CREATE TABLE `sylius_payment_security_token` (
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:object)',
  `after_url` longtext COLLATE utf8_unicode_ci,
  `target_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gateway_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product`
--

CREATE TABLE `sylius_product` (
  `id` int(11) NOT NULL,
  `main_taxon_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `variant_selection_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `average_rating` double NOT NULL DEFAULT '0',
  `has_discount` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product`
--

INSERT INTO `sylius_product` (`id`, `main_taxon_id`, `code`, `created_at`, `updated_at`, `enabled`, `variant_selection_method`, `average_rating`, `has_discount`) VALUES
(1, 2, 'b7bf12f8-168b-3b93-b2ef-4c9e6416112e', '2017-12-13 12:19:34', '2017-12-14 13:01:45', 1, 'match', 0, 1),
(2, 2, '05f76698-a755-3d92-9a77-3ffc9e92b908', '2017-12-12 22:55:43', '2017-12-14 13:01:58', 1, 'match', 2.5, 1),
(3, 2, '1dc99f3e-7d49-3c3a-8f31-6c8dc81b7aa8', '2017-12-13 23:14:31', '2017-12-14 13:01:46', 1, 'match', 0, 1),
(4, 2, 'f44ac5c3-7145-3205-8696-0840ae28eba4', '2017-12-13 06:18:48', '2017-12-14 13:01:46', 1, 'match', 0, 1),
(5, 2, 'bb858eb4-ff07-37e9-ac6d-b9c9cb44e62f', '2017-12-13 05:46:52', '2017-12-14 13:01:46', 1, 'match', 0, 1),
(6, 2, '599200ff-9083-39be-99fe-3cb4d04c3bf6', '2017-12-07 21:37:38', '2017-12-14 13:01:46', 1, 'match', 0, 1),
(7, 2, 'da3c65e1-0c06-3299-aafa-5a6578e01ab8', '2017-12-12 15:47:40', '2017-12-14 13:01:57', 1, 'match', 2, 1),
(8, 2, '3310fdc0-8b87-3ef4-ab61-9d443cded614', '2017-12-12 16:21:50', '2017-12-14 13:01:59', 1, 'match', 3, 1),
(9, 2, '385632d6-2c84-3d7a-bf4d-8c888920f890', '2017-12-13 23:31:09', '2017-12-14 13:01:46', 1, 'match', 0, 1),
(10, 2, 'd34da84b-5d1f-3b3d-8b91-6ba24923e4cc', '2017-12-08 12:59:32', '2017-12-14 13:01:58', 0, 'match', 3, 1),
(11, 2, '4afc6a19-cd9f-3e24-8e71-7ee97e8f1295', '2017-12-09 22:51:15', '2017-12-14 13:01:48', 1, 'match', 0, 1),
(12, 2, '79d4806c-4a36-3709-aafe-9fe7d0e95855', '2017-12-12 23:02:13', '2017-12-14 13:01:48', 1, 'match', 0, 1),
(13, 2, '39364317-8713-397b-ba20-b124bb5b4fa3', '2017-12-14 09:04:50', '2017-12-14 13:01:48', 1, 'match', 0, 1),
(14, 2, '703f8b3c-1128-3020-b904-cda3748f3bb9', '2017-12-07 19:49:35', '2017-12-14 13:01:48', 1, 'match', 0, 1),
(15, 2, 'dea4482f-32d7-3c60-b2b4-033ee1e95c10', '2017-12-11 23:23:52', '2017-12-14 13:01:48', 1, 'match', 0, 1),
(16, 3, '41fe8834-12a8-3a19-857c-186d29afaa64', '2017-12-08 01:22:06', '2017-12-14 13:01:58', 1, 'choice', 3, 1),
(17, 3, '4053b20e-f4c2-3822-bf5a-3b1edcf75a58', '2017-12-13 12:50:16', '2017-12-14 13:01:50', 1, 'choice', 0, 1),
(18, 3, 'b59c2842-6179-3a02-95da-3bfcfae08433', '2017-12-09 11:56:22', '2017-12-14 13:01:50', 1, 'choice', 0, 1),
(19, 3, 'b32cfd7b-efb9-3dc4-a017-65bb9bd6e774', '2017-12-13 07:40:12', '2017-12-14 13:01:50', 1, 'choice', 0, 1),
(20, 3, 'c1b1a3c4-1cca-3c48-b116-4ce27e08ed46', '2017-12-12 09:31:34', '2017-12-14 13:01:50', 1, 'choice', 0, 1),
(21, 3, '79ca790b-8e64-35aa-9980-d1856b501817', '2017-12-14 02:32:23', '2017-12-14 13:01:56', 0, 'choice', 4, 1),
(22, 3, 'e91407d9-21a3-3ab2-bd17-5b71c2de0412', '2017-12-08 17:34:54', '2017-12-14 13:01:50', 1, 'choice', 0, 1),
(23, 3, '2406386d-7f78-3bbf-87f9-22caca9b3f96', '2017-12-07 17:41:04', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(24, 3, '90b2356c-f761-39ff-a126-40504b5e9381', '2017-12-10 23:34:40', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(25, 3, 'cb525843-29d8-33b8-a317-5e1deb4137da', '2017-12-12 18:56:49', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(26, 3, '8dc42747-5bb4-3993-b057-7068e2ceed8d', '2017-12-08 01:09:03', '2017-12-14 13:01:59', 1, 'choice', 3, 1),
(27, 3, '0280bc4f-bed2-3298-9395-824078514578', '2017-12-10 04:36:04', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(28, 3, '53f33603-3cb2-34d8-af3b-278d914b4438', '2017-12-09 08:51:51', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(29, 3, '09d9b5fc-8d7f-357a-9376-e4fac8f97f3a', '2017-12-13 17:45:13', '2017-12-14 13:01:51', 0, 'choice', 0, 1),
(30, 3, '242b46af-bb8c-32e6-ba2c-188d22e6bccb', '2017-12-08 20:38:23', '2017-12-14 13:01:51', 1, 'choice', 0, 1),
(31, 4, '831bc990-0995-328a-9170-53caac8acd94', '2017-12-10 21:08:13', '2017-12-14 13:01:51', 0, 'match', 0, 1),
(32, 4, '018f35c6-7103-36b5-8acb-55b7e63fc371', '2017-12-13 16:00:54', '2017-12-16 06:32:50', 1, 'match', 0, 1),
(33, 4, 'e65c8f6f-c063-36c8-881a-613fae82ca23', '2017-12-10 01:08:18', '2017-12-14 13:01:51', 1, 'match', 0, 1),
(34, 4, 'cddb9029-6e32-34fe-88c0-cc23739e2245', '2017-12-14 02:19:00', '2017-12-14 13:01:58', 1, 'match', 5, 1),
(35, 4, 'de01e1ac-ca88-3f8c-b722-45768c6e7587', '2017-12-09 13:00:36', '2017-12-14 13:01:57', 1, 'match', 3, 1),
(36, 4, 'eb259fd6-70d0-31dc-8d64-a37228145d00', '2017-12-12 08:08:47', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(37, 4, 'a02f3822-2ed7-34de-ba17-d0ccf51a59db', '2017-12-08 00:13:14', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(38, 4, '70199856-090d-38ff-9a5d-3cef39a7bbfa', '2017-12-11 18:08:31', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(39, 4, 'aa09c18e-ab96-3841-bcfa-302479b340ef', '2017-12-09 19:02:34', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(40, 4, 'cacedbd2-89d2-37ab-9a7f-0dedc534d88e', '2017-12-12 21:12:06', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(41, 4, '5c7c3ac6-b353-352d-80e5-a3b570bb9651', '2017-12-09 09:03:57', '2017-12-14 13:01:57', 1, 'match', 3, 1),
(42, 4, 'ffaff859-83f6-3d40-8056-14c6f4f62f49', '2017-12-13 02:21:52', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(43, 4, '7ed809bc-f7a4-309a-8498-e0afc47ea9e2', '2017-12-08 12:16:59', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(44, 4, '0ade2fbd-775c-3fb9-8134-310f8856730f', '2017-12-07 15:07:22', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(45, 4, 'a607eb13-6696-3e2d-b562-7d05601e6323', '2017-12-12 11:08:49', '2017-12-14 13:01:52', 1, 'match', 0, 1),
(46, 6, '27d5408c-e8b8-340c-b91e-8e06a934b54b', '2017-12-07 19:04:03', '2017-12-14 13:01:56', 1, 'match', 1, 1),
(47, 7, '97163a4a-a37e-35bf-a8bb-9275d059348d', '2017-12-08 02:48:28', '2017-12-14 13:01:57', 1, 'match', 2, 1),
(48, 7, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4', '2017-12-08 02:53:22', '2017-12-14 13:01:53', 1, 'match', 0, 1),
(49, 6, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742', '2017-12-08 19:12:43', '2017-12-14 13:01:53', 1, 'match', 0, 1),
(50, 6, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6', '2017-12-13 08:42:34', '2017-12-14 13:01:57', 0, 'match', 2, 1),
(51, 6, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76', '2017-12-09 17:12:13', '2017-12-14 13:01:53', 1, 'match', 0, 1),
(52, 6, '6241f390-7f02-38c4-a87c-fc5e047b8fcb', '2017-12-10 15:52:25', '2017-12-14 13:01:59', 1, 'match', 3.5, 1),
(53, 6, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495', '2017-12-13 11:08:33', '2017-12-14 13:01:53', 0, 'match', 0, 1),
(54, 7, '34379f85-71d3-3530-9508-cfcf63d658cd', '2017-12-10 20:53:46', '2017-12-14 13:01:54', 1, 'match', 0, 1),
(55, 7, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b', '2017-12-14 07:33:36', '2017-12-14 13:01:54', 1, 'match', 0, 1),
(56, 6, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a', '2017-12-13 07:18:17', '2017-12-14 13:01:55', 0, 'match', 0, 1),
(57, 6, '3b995fc7-dc77-35d6-9f7e-c12adf184846', '2017-12-11 14:31:00', '2017-12-14 13:01:55', 0, 'match', 0, 1),
(58, 7, 'b477eae4-a925-35d1-ae65-bff0a24aec25', '2017-12-09 22:20:16', '2017-12-14 13:01:55', 0, 'match', 0, 1),
(59, 7, 'ded852a4-b0c4-3d47-a129-76540a9865db', '2017-12-11 02:01:57', '2017-12-14 13:01:55', 1, 'match', 0, 1),
(60, 6, 'af69110a-a33c-3be9-92ee-b3a66ed43133', '2017-12-12 05:44:25', '2017-12-14 13:01:55', 1, 'match', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_association`
--

CREATE TABLE `sylius_product_association` (
  `id` int(11) NOT NULL,
  `association_type_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_association`
--

INSERT INTO `sylius_product_association` (`id`, `association_type_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 60, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(2, 1, 30, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(3, 1, 59, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(4, 1, 9, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(5, 1, 55, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(6, 1, 46, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(7, 1, 10, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(8, 1, 14, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(9, 1, 22, '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(10, 1, 32, '2017-12-14 13:01:59', '2017-12-16 06:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_association_product`
--

CREATE TABLE `sylius_product_association_product` (
  `association_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_association_product`
--

INSERT INTO `sylius_product_association_product` (`association_id`, `product_id`) VALUES
(1, 49),
(1, 52),
(1, 60),
(2, 16),
(2, 18),
(2, 19),
(3, 54),
(3, 58),
(3, 59),
(4, 7),
(4, 10),
(4, 14),
(5, 47),
(5, 54),
(5, 59),
(6, 46),
(6, 56),
(6, 60),
(7, 1),
(7, 9),
(7, 10),
(8, 5),
(8, 8),
(8, 12),
(9, 17),
(9, 24),
(9, 28),
(10, 34),
(10, 39),
(10, 41);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_association_type`
--

CREATE TABLE `sylius_product_association_type` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_association_type`
--

INSERT INTO `sylius_product_association_type` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'similar_products', '2017-12-14 13:01:59', '2017-12-14 13:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_association_type_translation`
--

CREATE TABLE `sylius_product_association_type_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_association_type_translation`
--

INSERT INTO `sylius_product_association_type_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
(1, 1, 'Similar products', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_attribute`
--

CREATE TABLE `sylius_product_attribute` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storage_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_attribute`
--

INSERT INTO `sylius_product_attribute` (`id`, `code`, `type`, `storage_type`, `configuration`, `created_at`, `updated_at`, `position`) VALUES
(1, 'mug_material', 'select', 'json', 'a:2:{s:8:\"multiple\";b:0;s:7:\"choices\";a:4:{s:36:\"024e1e74-98a3-3ffa-aef0-09689a8e3f93\";s:19:\"Invisible porcelain\";s:36:\"006477ab-caf3-33c0-983f-7046a2c85095\";s:11:\"Banana skin\";s:36:\"a9148791-5241-3b7c-9c6c-95767755e2a4\";s:9:\"Porcelain\";s:36:\"30407b45-8681-33c5-bd12-0f5412f7d8d7\";s:9:\"Centipede\";}}', '2017-12-14 13:01:45', '2017-12-14 13:01:45', 0),
(2, 'sticker_paper', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2),
(4, 'book_author', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 3),
(5, 'book_isbn', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 4),
(6, 'book_pages', 'integer', 'integer', 'a:0:{}', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 5),
(7, 'book_genre', 'select', 'json', 'a:2:{s:8:\"multiple\";b:1;s:7:\"choices\";a:4:{s:36:\"e9285357-424a-395c-94d5-1b18dfd1762b\";s:15:\"Science Fiction\";s:36:\"7b07c373-29ae-3df6-acba-121be9b8e54e\";s:7:\"Romance\";s:36:\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\";s:8:\"Thriller\";s:36:\"d265d676-25f9-3c87-b5df-095b43d93a45\";s:6:\"Sports\";}}', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 6),
(8, 't_shirt_brand', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7),
(9, 't_shirt_collection', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8),
(10, 't_shirt_material', 'text', 'text', 'a:0:{}', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9),
(12, 'discount', 'checkbox', 'boolean', 'a:0:{}', '2017-12-14 23:37:18', '2017-12-14 23:37:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_attribute_translation`
--

CREATE TABLE `sylius_product_attribute_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_attribute_translation`
--

INSERT INTO `sylius_product_attribute_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
(1, 1, 'Mug material', 'en_US'),
(2, 2, 'Sticker paper', 'en_US'),
(4, 4, 'Book author', 'en_US'),
(5, 5, 'Book ISBN', 'en_US'),
(6, 6, 'Book pages', 'en_US'),
(7, 7, 'Book genre', 'en_US'),
(8, 8, 'T-Shirt brand', 'en_US'),
(9, 9, 'T-Shirt collection', 'en_US'),
(10, 10, 'T-Shirt material', 'en_US'),
(12, 12, 'discount', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_attribute_value`
--

CREATE TABLE `sylius_product_attribute_value` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `locale_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_value` longtext COLLATE utf8_unicode_ci,
  `boolean_value` tinyint(1) DEFAULT NULL,
  `integer_value` int(11) DEFAULT NULL,
  `float_value` double DEFAULT NULL,
  `datetime_value` datetime DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `json_value` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_attribute_value`
--

INSERT INTO `sylius_product_attribute_value` (`id`, `product_id`, `attribute_id`, `locale_code`, `text_value`, `boolean_value`, `integer_value`, `float_value`, `datetime_value`, `date_value`, `json_value`) VALUES
(1, 1, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"a9148791-5241-3b7c-9c6c-95767755e2a4\"]'),
(2, 2, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"a9148791-5241-3b7c-9c6c-95767755e2a4\"]'),
(3, 3, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"30407b45-8681-33c5-bd12-0f5412f7d8d7\"]'),
(4, 4, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"a9148791-5241-3b7c-9c6c-95767755e2a4\"]'),
(5, 5, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"a9148791-5241-3b7c-9c6c-95767755e2a4\"]'),
(6, 6, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"024e1e74-98a3-3ffa-aef0-09689a8e3f93\"]'),
(7, 7, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"006477ab-caf3-33c0-983f-7046a2c85095\"]'),
(8, 8, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"024e1e74-98a3-3ffa-aef0-09689a8e3f93\"]'),
(9, 9, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"30407b45-8681-33c5-bd12-0f5412f7d8d7\"]'),
(10, 10, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"006477ab-caf3-33c0-983f-7046a2c85095\"]'),
(11, 11, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"024e1e74-98a3-3ffa-aef0-09689a8e3f93\"]'),
(12, 12, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"a9148791-5241-3b7c-9c6c-95767755e2a4\"]'),
(13, 13, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"024e1e74-98a3-3ffa-aef0-09689a8e3f93\"]'),
(14, 14, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"30407b45-8681-33c5-bd12-0f5412f7d8d7\"]'),
(15, 15, 1, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"006477ab-caf3-33c0-983f-7046a2c85095\"]'),
(16, 16, 2, 'en_US', 'Paper from tree Wung', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 17, 2, 'en_US', 'Paper from tree Tanajno', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 18, 2, 'en_US', 'Paper from tree Wung', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 19, 2, 'en_US', 'Paper from tree Tanajno', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 20, 2, 'en_US', 'Paper from tree Me-Gusta', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 21, 2, 'en_US', 'Paper from tree Lemon-San', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 22, 2, 'en_US', 'Paper from tree Lemon-San', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 23, 2, 'en_US', 'Paper from tree Tanajno', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 24, 2, 'en_US', 'Paper from tree Me-Gusta', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 25, 2, 'en_US', 'Paper from tree Wung', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 26, 2, 'en_US', 'Paper from tree Wung', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 27, 2, 'en_US', 'Paper from tree Lemon-San', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 28, 2, 'en_US', 'Paper from tree Me-Gusta', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 29, 2, 'en_US', 'Paper from tree Tanajno', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 30, 2, 'en_US', 'Paper from tree Lemon-San', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 31, 4, 'en_US', 'Mrs. Aliya Hickle V', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 31, 5, 'en_US', '9784834948677', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 31, 6, 'en_US', NULL, NULL, 370, NULL, NULL, NULL, NULL),
(49, 31, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(50, 32, 4, 'en_US', 'Nayeli Pollich', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 32, 5, 'en_US', '9795717354065', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 32, 6, 'en_US', NULL, NULL, 657, NULL, NULL, NULL, NULL),
(53, 32, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(54, 33, 4, 'en_US', 'Rosa Wilkinson', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 33, 5, 'en_US', '9797202520436', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 33, 6, 'en_US', NULL, NULL, 752, NULL, NULL, NULL, NULL),
(57, 33, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(58, 34, 4, 'en_US', 'Hailey Kshlerin', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 34, 5, 'en_US', '9795616175211', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 34, 6, 'en_US', NULL, NULL, 786, NULL, NULL, NULL, NULL),
(61, 34, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"d265d676-25f9-3c87-b5df-095b43d93a45\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(62, 35, 4, 'en_US', 'Arnold Bartoletti', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 35, 5, 'en_US', '9796129081549', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 35, 6, 'en_US', NULL, NULL, 708, NULL, NULL, NULL, NULL),
(65, 35, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(66, 36, 4, 'en_US', 'Mr. Caleb Cremin II', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 36, 5, 'en_US', '9796769335514', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 36, 6, 'en_US', NULL, NULL, 449, NULL, NULL, NULL, NULL),
(69, 36, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"d265d676-25f9-3c87-b5df-095b43d93a45\",\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(70, 37, 4, 'en_US', 'Molly Pacocha', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 37, 5, 'en_US', '9788498949582', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 37, 6, 'en_US', NULL, NULL, 135, NULL, NULL, NULL, NULL),
(73, 37, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(74, 38, 4, 'en_US', 'Lyla Bartoletti V', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 38, 5, 'en_US', '9793802204509', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 38, 6, 'en_US', NULL, NULL, 611, NULL, NULL, NULL, NULL),
(77, 38, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(78, 39, 4, 'en_US', 'Lorenza Lynch', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 39, 5, 'en_US', '9791732086554', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 39, 6, 'en_US', NULL, NULL, 851, NULL, NULL, NULL, NULL),
(81, 39, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(82, 40, 4, 'en_US', 'Mrs. Dorris Cummings', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 40, 5, 'en_US', '9786279204370', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 40, 6, 'en_US', NULL, NULL, 653, NULL, NULL, NULL, NULL),
(85, 40, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"e9285357-424a-395c-94d5-1b18dfd1762b\"]'),
(86, 41, 4, 'en_US', 'Margarita Torp', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 41, 5, 'en_US', '9790559628992', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 41, 6, 'en_US', NULL, NULL, 775, NULL, NULL, NULL, NULL),
(89, 41, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(90, 42, 4, 'en_US', 'Romaine Yost', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 42, 5, 'en_US', '9786805276918', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 42, 6, 'en_US', NULL, NULL, 881, NULL, NULL, NULL, NULL),
(93, 42, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"e9285357-424a-395c-94d5-1b18dfd1762b\",\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"d265d676-25f9-3c87-b5df-095b43d93a45\"]'),
(94, 43, 4, 'en_US', 'Destany Gutkowski', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 43, 5, 'en_US', '9790162556095', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 43, 6, 'en_US', NULL, NULL, 56, NULL, NULL, NULL, NULL),
(97, 43, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"d265d676-25f9-3c87-b5df-095b43d93a45\",\"7b07c373-29ae-3df6-acba-121be9b8e54e\"]'),
(98, 44, 4, 'en_US', 'Chance White', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 44, 5, 'en_US', '9798773339670', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 44, 6, 'en_US', NULL, NULL, 322, NULL, NULL, NULL, NULL),
(101, 44, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"93e74efb-677c-3c5a-baa5-c40814d9c1f4\"]'),
(102, 45, 4, 'en_US', 'Natasha Huel', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 45, 5, 'en_US', '9781792082955', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 45, 6, 'en_US', NULL, NULL, 64, NULL, NULL, NULL, NULL),
(105, 45, 7, 'en_US', NULL, NULL, NULL, NULL, NULL, NULL, '[\"7b07c373-29ae-3df6-acba-121be9b8e54e\",\"e9285357-424a-395c-94d5-1b18dfd1762b\"]'),
(106, 46, 8, 'en_US', 'JKM-476 Streetwear', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 46, 9, 'en_US', 'Sylius Autumn 2010', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 46, 10, 'en_US', 'Potato 100%', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 47, 8, 'en_US', 'Potato', NULL, NULL, NULL, NULL, NULL, NULL),
(110, 47, 9, 'en_US', 'Sylius Autumn 1996', NULL, NULL, NULL, NULL, NULL, NULL),
(111, 47, 10, 'en_US', 'Centipede 10% / Wool 90%', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 48, 8, 'en_US', 'Nike', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 48, 9, 'en_US', 'Sylius Winter 1996', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 48, 10, 'en_US', 'Centipede', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 49, 8, 'en_US', 'Centipede Wear', NULL, NULL, NULL, NULL, NULL, NULL),
(116, 49, 9, 'en_US', 'Sylius Spring 2008', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 49, 10, 'en_US', 'Centipede', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 50, 8, 'en_US', 'Nike', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 50, 9, 'en_US', 'Sylius Winter 2011', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 50, 10, 'en_US', 'Centipede 10% / Wool 90%', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 51, 8, 'en_US', 'Potato', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 51, 9, 'en_US', 'Sylius Winter 2000', NULL, NULL, NULL, NULL, NULL, NULL),
(123, 51, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(124, 52, 8, 'en_US', 'JKM-476 Streetwear', NULL, NULL, NULL, NULL, NULL, NULL),
(125, 52, 9, 'en_US', 'Sylius Summer 1999', NULL, NULL, NULL, NULL, NULL, NULL),
(126, 52, 10, 'en_US', 'Potato 100%', NULL, NULL, NULL, NULL, NULL, NULL),
(127, 53, 8, 'en_US', 'Centipede Wear', NULL, NULL, NULL, NULL, NULL, NULL),
(128, 53, 9, 'en_US', 'Sylius Winter 2011', NULL, NULL, NULL, NULL, NULL, NULL),
(129, 53, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(130, 54, 8, 'en_US', 'Centipede Wear', NULL, NULL, NULL, NULL, NULL, NULL),
(131, 54, 9, 'en_US', 'Sylius Autumn 1998', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 54, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(133, 55, 8, 'en_US', 'JKM-476 Streetwear', NULL, NULL, NULL, NULL, NULL, NULL),
(134, 55, 9, 'en_US', 'Sylius Spring 2002', NULL, NULL, NULL, NULL, NULL, NULL),
(135, 55, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(136, 56, 8, 'en_US', 'Potato', NULL, NULL, NULL, NULL, NULL, NULL),
(137, 56, 9, 'en_US', 'Sylius Spring 2008', NULL, NULL, NULL, NULL, NULL, NULL),
(138, 56, 10, 'en_US', 'Potato 100%', NULL, NULL, NULL, NULL, NULL, NULL),
(139, 57, 8, 'en_US', 'JKM-476 Streetwear', NULL, NULL, NULL, NULL, NULL, NULL),
(140, 57, 9, 'en_US', 'Sylius Summer 1995', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 57, 10, 'en_US', 'Centipede', NULL, NULL, NULL, NULL, NULL, NULL),
(142, 58, 8, 'en_US', 'Nike', NULL, NULL, NULL, NULL, NULL, NULL),
(143, 58, 9, 'en_US', 'Sylius Winter 2007', NULL, NULL, NULL, NULL, NULL, NULL),
(144, 58, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(145, 59, 8, 'en_US', 'Nike', NULL, NULL, NULL, NULL, NULL, NULL),
(146, 59, 9, 'en_US', 'Sylius Spring 2009', NULL, NULL, NULL, NULL, NULL, NULL),
(147, 59, 10, 'en_US', 'Wool', NULL, NULL, NULL, NULL, NULL, NULL),
(148, 60, 8, 'en_US', 'Adidas', NULL, NULL, NULL, NULL, NULL, NULL),
(149, 60, 9, 'en_US', 'Sylius Spring 2005', NULL, NULL, NULL, NULL, NULL, NULL),
(150, 60, 10, 'en_US', 'Centipede', NULL, NULL, NULL, NULL, NULL, NULL),
(151, 32, 12, 'en_US', NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_channels`
--

CREATE TABLE `sylius_product_channels` (
  `product_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_channels`
--

INSERT INTO `sylius_product_channels` (`product_id`, `channel_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_image`
--

CREATE TABLE `sylius_product_image` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_image`
--

INSERT INTO `sylius_product_image` (`id`, `owner_id`, `type`, `path`) VALUES
(1, 1, 'main', '22/87/7ebb83239cdefaac4028d0a33fa1.jpeg'),
(2, 1, 'thumbnail', '21/36/3cd59d65ee7e45d2a734a79fe0a2.jpeg'),
(3, 2, 'main', 'bc/f7/251458e65556e0fb90dda888c287.jpeg'),
(4, 2, 'thumbnail', '68/a9/b4a0cfe6a7ae0f3eb1e1b675236c.jpeg'),
(5, 3, 'main', '19/e5/17eac3d89cc9d3b4bf5a4fd61105.jpeg'),
(6, 3, 'thumbnail', 'eb/a7/71b97a5746c33439ae40d21e0bbf.jpeg'),
(7, 4, 'main', '81/3b/9a78416e6a6d3a5f1dbe52c18b43.jpeg'),
(8, 4, 'thumbnail', 'df/98/cf5f3880b3c4572df2ecad707481.jpeg'),
(9, 5, 'main', 'b9/ea/298dfbe5ab5f637df9b8f9d94bb1.jpeg'),
(10, 5, 'thumbnail', 'ce/b8/ea7a92d4312cc525185d8b6a433b.jpeg'),
(11, 6, 'main', 'e7/16/0d08c2e43dc40c9836020b7a245b.jpeg'),
(12, 6, 'thumbnail', '96/3d/353cb0458517c6c27597d5706e5c.jpeg'),
(13, 7, 'main', 'fe/cb/37d6d59ccd9820ad99cebad33131.jpeg'),
(14, 7, 'thumbnail', '28/0f/3dba9f8dbcb88f5473e8c8559501.jpeg'),
(15, 8, 'main', '08/b0/3eed66b50987801d387f0c10b6b8.jpeg'),
(16, 8, 'thumbnail', '53/9e/50660e2ae0c8bd4f7a508174af63.jpeg'),
(17, 9, 'main', '44/1e/36d0394ac17e5ee9c2522e51ca95.jpeg'),
(18, 9, 'thumbnail', '2c/85/d0206f2b1733e2c59c6610e2eec2.jpeg'),
(19, 10, 'main', '90/a9/3438f90f48aef4ae36f1c6b3125e.jpeg'),
(20, 10, 'thumbnail', '13/f8/b57532b5fae6166a1c16a21e5ff1.jpeg'),
(21, 11, 'main', '90/8a/a00fb26c3c54bbfc3c81401411dd.jpeg'),
(22, 11, 'thumbnail', '8a/15/9bfd6b85e25ce50050372ec94fbc.jpeg'),
(23, 12, 'main', '60/7e/ddfa967a54fe7e94639b3f6ee9b0.jpeg'),
(24, 12, 'thumbnail', '0d/85/260802efeea6ee287e7b18a04fd9.jpeg'),
(25, 13, 'main', '6e/5d/a33d37693347980688b26121113b.jpeg'),
(26, 13, 'thumbnail', '54/55/2cb8712b29c568ad2fd06f0da1f3.jpeg'),
(27, 14, 'main', '88/6b/b752a9881be968a17cbbbf92810a.jpeg'),
(28, 14, 'thumbnail', '9b/03/666d6d909dd3024b8c31b3c47076.jpeg'),
(29, 15, 'main', 'ae/fb/0b2e9783895210da2f68448401b7.jpeg'),
(30, 15, 'thumbnail', '39/57/6ee9832e057b7207a4ec6ab3ac34.jpeg'),
(31, 16, 'main', 'e7/5b/202f50721eca0a7f81ce22ac982c.jpeg'),
(32, 16, 'thumbnail', 'a0/6e/2939d84035ec9101bdc1c8afe4e4.jpeg'),
(33, 17, 'main', 'fe/9b/65559f898de202b0649329a0f24d.jpeg'),
(34, 17, 'thumbnail', '4c/f9/f4afca0a3604e9fea558af5ff64a.jpeg'),
(35, 18, 'main', 'ef/e0/e632388477ee55e38a74cb15daf0.jpeg'),
(36, 18, 'thumbnail', '1a/8c/45ce07454451f4be46da6161bcb5.jpeg'),
(37, 19, 'main', 'f6/41/aafcf71ee7c808f2f0aa40de6654.jpeg'),
(38, 19, 'thumbnail', '23/fd/48c8a03c206511aa11b2a3bda01c.jpeg'),
(39, 20, 'main', 'c5/fb/0c688455e71b8df20fce95f04969.jpeg'),
(40, 20, 'thumbnail', 'f7/db/2c32cf66e7a158133152b2c5556b.jpeg'),
(41, 21, 'main', '82/0f/5833afe5d80d4016fb531af880b7.jpeg'),
(42, 21, 'thumbnail', '8a/87/6738cc7595bf59d9d1d6dc756190.jpeg'),
(43, 22, 'main', 'fb/6b/cc72fe9acc97154fa1f55d52686c.jpeg'),
(44, 22, 'thumbnail', 'ff/de/6814b7db458bd8bc5599b6a3278a.jpeg'),
(45, 23, 'main', 'd8/14/cb45e4d000ad470e438ce1c947c7.jpeg'),
(46, 23, 'thumbnail', '85/a0/e626fdea066a1ef6ddd7f9db3e12.jpeg'),
(47, 24, 'main', 'ba/ba/f919e01c258eda238fcaec2e77a2.jpeg'),
(48, 24, 'thumbnail', '8e/7c/378a883a517dad4991fcd0e5e3ec.jpeg'),
(49, 25, 'main', '60/69/37dc21033b001f01b9e24edae6fe.jpeg'),
(50, 25, 'thumbnail', 'aa/0a/20512e999ab50164f78565c9162b.jpeg'),
(51, 26, 'main', '42/df/48ac437951bf160364fb52070c35.jpeg'),
(52, 26, 'thumbnail', '9e/d2/2fc0a930d2e935efa3fa81bd92b8.jpeg'),
(53, 27, 'main', 'c6/29/07c5c4118983d6868f04d90112d6.jpeg'),
(54, 27, 'thumbnail', '75/18/30bc6778c885788eec55bcd8c6b2.jpeg'),
(55, 28, 'main', '0c/c4/ea2dbc43f4b8253e1cae2c68ae5b.jpeg'),
(56, 28, 'thumbnail', 'd0/90/123c369bd3b3e77c296183ca03ae.jpeg'),
(57, 29, 'main', '0b/85/718bc5eb8c7a53ec66734288ee2c.jpeg'),
(58, 29, 'thumbnail', 'aa/73/0e8ce1e1407ee961014b50aaa83d.jpeg'),
(59, 30, 'main', '3a/04/69ee3db3b3a877d96cb32f59104e.jpeg'),
(60, 30, 'thumbnail', 'ff/0c/11393fb0c164aac124e8a1fa6d3f.jpeg'),
(61, 31, 'main', '1c/49/42ca230bad55dd199b612a7282b6.jpeg'),
(62, 31, 'thumbnail', 'd6/06/ac6d674e32d455f459d5abce6666.jpeg'),
(63, 32, 'main', '88/31/d28d65510629db92d94672aa5b68.jpeg'),
(64, 32, 'thumbnail', 'ce/83/6c949d1a16ce39325a54fa302f59.jpeg'),
(65, 33, 'main', '17/df/1d7242fe42a0c9c13dfa1f32e699.jpeg'),
(66, 33, 'thumbnail', 'e2/77/dc2abbc4cb673985558aaffe8776.jpeg'),
(67, 34, 'main', '9e/36/88f700eba305b80202216fbbf808.jpeg'),
(68, 34, 'thumbnail', 'f7/3c/6085f9b80a97d4adfa42da720cae.jpeg'),
(69, 35, 'main', 'fc/d3/0d3908ab900712d90289bb01d353.jpeg'),
(70, 35, 'thumbnail', 'fb/a5/44854d8d10a499423a963ed5947b.jpeg'),
(71, 36, 'main', '2a/fe/688c625220c16326f76e67d44442.jpeg'),
(72, 36, 'thumbnail', '78/5c/9739c074d2e5fbd4d9eb24641d05.jpeg'),
(73, 37, 'main', '06/06/a289b5b6e315815928219e0767d3.jpeg'),
(74, 37, 'thumbnail', '0f/e3/dd04f19af6af635140aabea1c367.jpeg'),
(75, 38, 'main', '21/62/72d12024e958bae2e357c17b9a24.jpeg'),
(76, 38, 'thumbnail', 'dc/a8/a3814f1fc61c535db5b1edd53aea.jpeg'),
(77, 39, 'main', 'fa/b4/05b3d8bfbfb63c43bf398e06d102.jpeg'),
(78, 39, 'thumbnail', 'cd/96/b519c0d8c20a692bc6e89a405b6f.jpeg'),
(79, 40, 'main', '57/0f/7e2f5e1841c8d0aa7de9d5648123.jpeg'),
(80, 40, 'thumbnail', '01/68/566909cf35e7b6b5c667c464fc00.jpeg'),
(81, 41, 'main', 'ac/6a/dba330844fc978dd5b3d57a24083.jpeg'),
(82, 41, 'thumbnail', 'aa/bf/212b7b6108f25f108871195cb192.jpeg'),
(83, 42, 'main', '4d/3d/e8c00866b7fe063b44c54d84f716.jpeg'),
(84, 42, 'thumbnail', 'ec/e8/a94ab5405710bb0e5c7451f8d6fd.jpeg'),
(85, 43, 'main', 'c8/79/8a66a2dd5cd84b36af8d7e40ad3c.jpeg'),
(86, 43, 'thumbnail', '84/57/60b27fb189722a7dfee2f3a7d4a8.jpeg'),
(87, 44, 'main', 'b9/bc/c4693bfa6a510a4603bdde849851.jpeg'),
(88, 44, 'thumbnail', 'ae/62/bcc581c28e9adff3b0d237e90404.jpeg'),
(89, 45, 'main', 'a2/60/ad472b57ff4183c8fd15fc5b9cbd.jpeg'),
(90, 45, 'thumbnail', '8c/a8/93ed8b01de38b4c59747efd3b2d8.jpeg'),
(91, 46, 'main', '06/5b/1f52d084649be1fa4fae2edf7c49.jpeg'),
(92, 46, 'thumbnail', '41/ae/d327b74486f8ca01749113030529.jpeg'),
(93, 47, 'main', 'c1/2e/7def6a062f677535f2ae7dc28b4c.jpeg'),
(94, 47, 'thumbnail', 'ab/96/9011e3443a2563878a3e91effda1.jpeg'),
(95, 48, 'main', 'cc/27/41ad7b399e7ef52b854675fd7f22.jpeg'),
(96, 48, 'thumbnail', 'f2/d0/d46204df01b619490b27c318f2e0.jpeg'),
(97, 49, 'main', '2e/dd/9126de350715298de3ff54f0ec0b.jpeg'),
(98, 49, 'thumbnail', '0c/21/eda4afb6e764409341b8c9eb99b5.jpeg'),
(99, 50, 'main', '35/85/43a7fa99e983ebc638a54284060a.jpeg'),
(100, 50, 'thumbnail', '72/5b/f1e9a105b54678060aa7da030d38.jpeg'),
(101, 51, 'main', '23/31/34254212e466d1aa6b002bb70831.jpeg'),
(102, 51, 'thumbnail', 'd7/83/64c7d13f63c0ac6e63b739ef695f.jpeg'),
(103, 52, 'main', '11/a0/cafa424e2e075af89c2a159272c4.jpeg'),
(104, 52, 'thumbnail', 'ff/e3/0956cc71cbde4e8faf235dacd5c7.jpeg'),
(105, 53, 'main', 'bf/db/023face13bfaf51f499afeda35f1.jpeg'),
(106, 53, 'thumbnail', '8d/c2/5206e6ca78158848d4c8f9398222.jpeg'),
(107, 54, 'main', '43/bb/6fa7775dcc96d9a55e4e69c69e9c.jpeg'),
(108, 54, 'thumbnail', '33/c0/5d6cbefa2f056c3667e0a5313e0a.jpeg'),
(109, 55, 'main', '0e/0e/9809fc3c874610555d934f7a0b74.jpeg'),
(110, 55, 'thumbnail', '69/c0/7ad45ee224cb74a591dcd34c47f9.jpeg'),
(111, 56, 'main', 'bd/00/f469a123d681757eb19858f7c949.jpeg'),
(112, 56, 'thumbnail', '61/61/e338dfcf2d15a1a0b33f51ca21ac.jpeg'),
(113, 57, 'main', '8a/e0/b4ba1538d698488a74d05c9c5d23.jpeg'),
(114, 57, 'thumbnail', '62/9c/7ab2a618a1e915c568e07112d9cb.jpeg'),
(115, 58, 'main', 'f8/38/5ced2356aac8af01a53f21194be8.jpeg'),
(116, 58, 'thumbnail', '4b/10/e18bfd7a5307a35fd7e855a18896.jpeg'),
(117, 59, 'main', '5f/51/69b1cc26c2feb1d1750857f86944.jpeg'),
(118, 59, 'thumbnail', 'fe/fe/f8541ca2bc2e40ffbe3e08ccd773.jpeg'),
(119, 60, 'main', 'af/fd/01a008c1132d6f5820e272a36628.jpeg'),
(120, 60, 'thumbnail', 'b0/3f/9ede2888a7d7135693744e52b668.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_image_product_variants`
--

CREATE TABLE `sylius_product_image_product_variants` (
  `image_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_option`
--

CREATE TABLE `sylius_product_option` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_option`
--

INSERT INTO `sylius_product_option` (`id`, `code`, `position`, `created_at`, `updated_at`) VALUES
(1, 'mug_type', 0, '2017-12-14 13:01:45', '2017-12-14 13:01:45'),
(2, 'sticker_size', 1, '2017-12-14 13:01:50', '2017-12-14 13:01:50'),
(3, 't_shirt_color', 2, '2017-12-14 13:01:53', '2017-12-14 13:01:53'),
(4, 't_shirt_size', 3, '2017-12-14 13:01:53', '2017-12-14 13:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_options`
--

CREATE TABLE `sylius_product_options` (
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_options`
--

INSERT INTO `sylius_product_options` (`product_id`, `option_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(46, 3),
(46, 4),
(47, 3),
(47, 4),
(48, 3),
(48, 4),
(49, 3),
(49, 4),
(50, 3),
(50, 4),
(51, 3),
(51, 4),
(52, 3),
(52, 4),
(53, 3),
(53, 4),
(54, 3),
(54, 4),
(55, 3),
(55, 4),
(56, 3),
(56, 4),
(57, 3),
(57, 4),
(58, 3),
(58, 4),
(59, 3),
(59, 4),
(60, 3),
(60, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_option_translation`
--

CREATE TABLE `sylius_product_option_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_option_translation`
--

INSERT INTO `sylius_product_option_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
(1, 1, 'Mug type', 'en_US'),
(2, 2, 'Sticker size', 'en_US'),
(3, 3, 'T-Shirt color', 'en_US'),
(4, 4, 'T-Shirt size', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_option_value`
--

CREATE TABLE `sylius_product_option_value` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_option_value`
--

INSERT INTO `sylius_product_option_value` (`id`, `option_id`, `code`) VALUES
(1, 1, 'mug_type_medium'),
(2, 1, 'mug_type_double'),
(3, 1, 'mug_type_monster'),
(4, 2, 'sticker_size_3'),
(5, 2, 'sticker_size_5'),
(6, 2, 'sticker_size_7'),
(7, 3, 't_shirt_color_red'),
(8, 3, 't_shirt_color_black'),
(9, 3, 't_shirt_color_white'),
(10, 4, 't_shirt_size_s'),
(11, 4, 't_shirt_size_m'),
(12, 4, 't_shirt_size_l'),
(13, 4, 't_shirt_size_xl'),
(14, 4, 't_shirt_size_xxl');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_option_value_translation`
--

CREATE TABLE `sylius_product_option_value_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_option_value_translation`
--

INSERT INTO `sylius_product_option_value_translation` (`id`, `translatable_id`, `value`, `locale`) VALUES
(1, 1, 'Medium mug', 'en_US'),
(2, 2, 'Double mug', 'en_US'),
(3, 3, 'Monster mug', 'en_US'),
(4, 4, '3\"', 'en_US'),
(5, 5, '5\"', 'en_US'),
(6, 6, '7\"', 'en_US'),
(7, 7, 'Red', 'en_US'),
(8, 8, 'Black', 'en_US'),
(9, 9, 'White', 'en_US'),
(10, 10, 'S', 'en_US'),
(11, 11, 'M', 'en_US'),
(12, 12, 'L', 'en_US'),
(13, 13, 'XL', 'en_US'),
(14, 14, 'XXL', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_review`
--

CREATE TABLE `sylius_product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_review`
--

INSERT INTO `sylius_product_review` (`id`, `product_id`, `author_id`, `title`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 37, 15, 'omnis reprehenderit excepturi', 2, 'Ut ut culpa est voluptatem error commodi. Aut temporibus et ut magni nihil. Nisi voluptates rem voluptatem dolor sint.', 'rejected', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(2, 52, 17, 'facilis fuga deserunt', 1, 'Et est aperiam voluptatibus dolores. Et placeat repudiandae asperiores impedit. Quia aut et quia veritatis quis beatae aut.', 'rejected', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(3, 35, 4, 'amet ut accusantium', 1, 'Optio unde qui ut animi ullam et asperiores. Dicta dignissimos architecto vel sit. At quasi natus aspernatur sit qui rerum quo iste.', 'new', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(4, 21, 9, 'dolorem voluptatibus velit', 4, 'Dolorem consequatur sed eos aut suscipit laudantium quia consequuntur. Magni distinctio recusandae voluptas deserunt impedit. In qui et vitae eveniet eos.', 'accepted', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(5, 30, 1, 'sit dignissimos velit', 1, 'Dolor iste ut quam quia. Facere reiciendis adipisci tempora nesciunt autem. Ut error et ut dolorem.', 'new', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(6, 24, 14, 'exercitationem voluptatum aliquid', 3, 'Et ea temporibus expedita sed suscipit facilis architecto. Voluptatem ab dolorem delectus rerum quis aut totam. Rerum assumenda dolore molestiae aspernatur id eveniet magnam.', 'new', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(7, 17, 21, 'quia repellendus suscipit', 3, 'Occaecati et ea non ut veritatis natus. Quo inventore commodi fugit recusandae vitae et. At aut sunt repudiandae.', 'rejected', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(8, 46, 8, 'et aut soluta', 1, 'Sed explicabo nobis quisquam sed accusamus ut quae. Consequatur et aliquam aut quia sunt et a eos. Sit aut cupiditate dolor perspiciatis quis perferendis tenetur.', 'accepted', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(9, 58, 15, 'omnis sed non', 2, 'Illum quos nihil minus accusamus non. Aspernatur consectetur iste officia ducimus veniam numquam ea ut. Aspernatur rerum accusamus natus officia.', 'new', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(10, 27, 7, 'quia autem id', 1, 'Quasi qui et sapiente officia. Incidunt dolor qui quia dolor sed sit et ut. Natus et voluptas explicabo alias dicta voluptatibus sed.', 'new', '2017-12-14 13:01:56', '2017-12-14 13:01:56'),
(11, 28, 5, 'velit reiciendis totam', 4, 'Eos nobis corrupti non voluptas quaerat distinctio. Sit corrupti laboriosam omnis quis. Dolorem recusandae distinctio ducimus laborum debitis culpa minus.', 'rejected', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(12, 40, 16, 'autem aut dicta', 2, 'Eveniet consequatur sunt ipsam corrupti. Autem officia magni mollitia. In saepe recusandae saepe.', 'new', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(13, 3, 8, 'dolor dolores neque', 3, 'Vel natus ea officia quo. Modi minima distinctio et eum. Qui qui excepturi deserunt veniam qui.', 'rejected', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(14, 43, 5, 'aspernatur enim qui', 2, 'Commodi est occaecati id dolor reprehenderit fugiat molestiae. Qui sit quia soluta recusandae dolores quia et. Aut eos adipisci commodi soluta pariatur eveniet illo.', 'rejected', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(15, 34, 1, 'possimus sit occaecati', 5, 'Vero omnis rem laboriosam quisquam fugiat quis ut. Quo aut quia qui dolorum fugit. Velit aliquid et tempora qui fuga iste.', 'rejected', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(16, 47, 4, 'eum omnis veniam', 2, 'Non officiis ut neque rerum reprehenderit. Id doloribus officiis aut inventore praesentium. Eos tenetur itaque et.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(17, 7, 3, 'ut numquam delectus', 2, 'Natus possimus voluptatum error alias optio nihil minus. Autem nostrum sed ex officia. Enim aut quo illo.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(18, 35, 16, 'nemo aspernatur iusto', 3, 'Laborum aut repellendus autem dolorem maiores. Eveniet culpa est ipsa accusantium doloribus eaque ut. Similique veniam quia accusamus est iste doloribus blanditiis.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(19, 2, 17, 'tempora eos asperiores', 4, 'Sit et omnis sint. Quo tenetur ut veritatis et. Odio neque molestiae necessitatibus.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(20, 5, 21, 'voluptatem voluptatum tempore', 1, 'Perspiciatis aut voluptatem sequi eos ut beatae. Non dolore nostrum earum atque distinctio. Laudantium quia id voluptate.', 'new', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(21, 11, 12, 'aut porro dolorem', 5, 'Natus qui suscipit non officia. Enim rerum accusantium dolorem laborum sed adipisci minus. Dolorum delectus voluptatem odit explicabo.', 'new', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(22, 6, 17, 'praesentium facilis incidunt', 4, 'Fugiat qui iusto possimus rerum numquam sequi voluptas. Explicabo asperiores consequatur rerum dolor. Consequatur laborum dolores quo fuga.', 'new', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(23, 44, 6, 'non ratione aut', 5, 'Similique optio quibusdam voluptate quibusdam libero cumque sunt. In qui et itaque aut suscipit. Dolorem veniam esse debitis aut voluptatem saepe labore.', 'rejected', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(24, 52, 14, 'esse corporis accusamus', 3, 'Id ut natus nobis quaerat. Aliquid pariatur qui iste aut. Harum voluptas eos molestiae consequatur omnis minima explicabo ut.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(25, 50, 2, 'voluptatibus sint sit', 2, 'Qui sunt est quidem qui doloribus. Consequatur non nihil dolor delectus aut qui molestias. Adipisci et ut fugit officiis quas officia doloribus.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(26, 12, 13, 'occaecati optio aliquam', 5, 'Aperiam sint qui accusantium rem. Totam quod vel enim quod quaerat exercitationem sit. Fuga voluptatem quas officiis corrupti quia fugiat.', 'new', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(27, 41, 4, 'sed eaque quisquam', 3, 'Quisquam voluptates illum sit quasi ratione qui. Qui praesentium et explicabo quis amet. Vitae atque autem ipsam omnis id.', 'accepted', '2017-12-14 13:01:57', '2017-12-14 13:01:57'),
(28, 40, 16, 'quaerat perspiciatis possimus', 4, 'Ut facere aspernatur sit enim tempora iure perspiciatis. Ut consequatur consequatur ullam voluptatem ipsa. Tempore asperiores quia dolor ut nulla mollitia maiores.', 'rejected', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(29, 34, 21, 'harum porro qui', 5, 'Modi eveniet veritatis eius deleniti quod perspiciatis ad. Alias voluptatem inventore architecto mollitia dolorem. Neque dolor tempora vero ratione neque.', 'accepted', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(30, 50, 20, 'velit temporibus fuga', 1, 'Optio dicta animi dolore officia nobis consequatur. Et natus totam totam quod quia dolor. Neque molestiae culpa tenetur quis eos.', 'new', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(31, 16, 12, 'sint ut dolorem', 3, 'Neque inventore veritatis repellendus harum aliquam. Quia nihil voluptatum voluptatem ea excepturi molestiae accusamus. Iusto cum nam ipsum illum expedita dignissimos.', 'accepted', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(32, 20, 17, 'vel ut qui', 1, 'Maxime aspernatur excepturi qui distinctio necessitatibus dicta. In est doloribus reiciendis saepe cumque aut. Non ad aut ipsa soluta.', 'rejected', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(33, 53, 20, 'qui dolorem labore', 4, 'Maxime ullam quia fugiat est corporis ipsa quia. Ad voluptatum nihil saepe consequatur. Maiores a dolore qui.', 'new', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(34, 10, 6, 'exercitationem rem omnis', 3, 'Ab atque et ullam iusto ut eum neque dolores. Velit dolore veniam facilis eveniet. Id eius aut omnis molestiae molestiae est.', 'accepted', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(35, 2, 6, 'repellat ratione qui', 1, 'Aut ut neque alias qui et veritatis. Ut voluptas ipsam necessitatibus dolorem. Laboriosam sequi perspiciatis est voluptas ut.', 'accepted', '2017-12-14 13:01:58', '2017-12-14 13:01:58'),
(36, 26, 9, 'nihil neque autem', 3, 'Animi et natus ea soluta. Rerum omnis et qui quaerat. Numquam adipisci voluptate excepturi.', 'accepted', '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(37, 54, 7, 'hic aut nesciunt', 4, 'Tenetur qui est aperiam odit. Impedit quia est vero voluptatem rem exercitationem. Ut cumque et et quidem minus sed assumenda minima.', 'new', '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(38, 11, 9, 'sunt eos laborum', 4, 'Consequatur et omnis quis odit qui atque mollitia. Nemo dolor voluptates unde modi voluptatum dolorem. Rerum architecto possimus optio occaecati.', 'rejected', '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(39, 52, 15, 'non id dolores', 4, 'Ea culpa praesentium tenetur laborum. Est veritatis deleniti vel. Quo ut voluptatem non facilis id.', 'accepted', '2017-12-14 13:01:59', '2017-12-14 13:01:59'),
(40, 8, 7, 'harum non culpa', 3, 'Dignissimos tempore quis ullam fugiat sequi omnis minima. Eius inventore modi sed vitae quos ad. Ipsa ad optio possimus dolorem libero voluptatibus libero.', 'accepted', '2017-12-14 13:01:59', '2017-12-14 13:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_taxon`
--

CREATE TABLE `sylius_product_taxon` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `taxon_id` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_taxon`
--

INSERT INTO `sylius_product_taxon` (`id`, `product_id`, `taxon_id`, `position`) VALUES
(1, 1, 2, 0),
(2, 2, 2, 1),
(3, 3, 2, 2),
(4, 4, 2, 3),
(5, 5, 2, 4),
(6, 6, 2, 5),
(7, 7, 2, 6),
(8, 8, 2, 7),
(9, 9, 2, 8),
(10, 10, 2, 9),
(11, 11, 2, 10),
(12, 12, 2, 11),
(13, 13, 2, 12),
(14, 14, 2, 13),
(15, 15, 2, 14),
(16, 16, 3, 0),
(17, 17, 3, 1),
(18, 18, 3, 2),
(19, 19, 3, 3),
(20, 20, 3, 4),
(21, 21, 3, 5),
(22, 22, 3, 6),
(23, 23, 3, 7),
(24, 24, 3, 8),
(25, 25, 3, 9),
(26, 26, 3, 10),
(27, 27, 3, 11),
(28, 28, 3, 12),
(29, 29, 3, 13),
(30, 30, 3, 14),
(31, 31, 4, 0),
(32, 32, 4, 1),
(33, 33, 4, 2),
(34, 34, 4, 3),
(35, 35, 4, 4),
(36, 36, 4, 5),
(37, 37, 4, 6),
(38, 38, 4, 7),
(39, 39, 4, 8),
(40, 40, 4, 9),
(41, 41, 4, 10),
(42, 42, 4, 11),
(43, 43, 4, 12),
(44, 44, 4, 13),
(45, 45, 4, 14),
(46, 46, 5, 0),
(47, 46, 6, 0),
(48, 47, 5, 1),
(49, 47, 7, 0),
(50, 48, 5, 2),
(51, 48, 7, 1),
(52, 49, 5, 3),
(53, 49, 6, 1),
(54, 50, 5, 4),
(55, 50, 6, 2),
(56, 51, 5, 5),
(57, 51, 6, 3),
(58, 52, 5, 6),
(59, 52, 6, 4),
(60, 53, 5, 7),
(61, 53, 6, 5),
(62, 54, 5, 8),
(63, 54, 7, 2),
(64, 55, 5, 9),
(65, 55, 7, 3),
(66, 56, 5, 10),
(67, 56, 6, 6),
(68, 57, 5, 11),
(69, 57, 6, 7),
(70, 58, 5, 12),
(71, 58, 7, 4),
(72, 59, 5, 13),
(73, 59, 7, 5),
(74, 60, 5, 14),
(75, 60, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_translation`
--

CREATE TABLE `sylius_product_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_translation`
--

INSERT INTO `sylius_product_translation` (`id`, `translatable_id`, `name`, `slug`, `description`, `meta_keywords`, `meta_description`, `short_description`, `locale`) VALUES
(1, 1, 'Mug \"ab\"', 'mug-ab', 'Sit a facilis odit mollitia dolorum sed aut. Id doloribus voluptatibus fugiat voluptas et. Iusto est mollitia voluptates vero vitae id.\n\nRerum fugiat quod dolor ut vitae omnis. Temporibus ad totam quis incidunt. Deleniti eum quod omnis atque rerum. Distinctio ut ab voluptatum voluptate rerum distinctio.\n\nIure repellat vero vitae. Aliquam dolorum aliquam officia numquam error. Suscipit a eligendi in quo eum ad explicabo.', NULL, NULL, 'Tempora praesentium aliquam voluptate maiores voluptas maiores debitis aut. Delectus quibusdam possimus qui. Tempora expedita explicabo sunt sit. Excepturi modi quam quo illo facere perspiciatis.', 'en_US'),
(2, 2, 'Mug \"nesciunt\"', 'mug-nesciunt', 'Officiis dolor officia dicta. Nulla et ullam magnam sequi. Quis eos nulla reiciendis est natus excepturi nostrum. Nemo magni quia autem minima.\n\nEum non et dolor repudiandae reiciendis ut modi. At atque iste dolor aut ipsum mollitia iure. Et aperiam quia aliquam laboriosam eveniet voluptatibus dolore quos.\n\nVoluptas alias cumque rerum autem. Alias et laudantium omnis ea pariatur eius voluptas.', NULL, NULL, 'Aperiam eius suscipit sint doloribus incidunt labore iure. Maiores libero et maxime. Quos voluptate cum omnis voluptates quae.', 'en_US'),
(3, 3, 'Mug \"a\"', 'mug-a', 'Et nihil quibusdam quia similique ad ut vel. Labore ipsum consequatur eveniet saepe. Non autem quidem autem eum quidem nihil consequatur. Quia qui repellat dignissimos qui doloribus explicabo enim exercitationem.\n\nQuod et possimus quia itaque eum laboriosam exercitationem. Quibusdam sed enim saepe cum. Officiis ut cumque mollitia modi quis distinctio officia sunt.\n\nNihil earum minima nihil accusamus aut quisquam quia praesentium. Harum nesciunt non sit magni laboriosam laudantium esse explicabo. Autem dolorum cum veritatis in debitis est. Delectus id debitis impedit natus.', NULL, NULL, 'In labore consequatur ex autem. Non ut similique incidunt delectus aut ratione quidem. Architecto magnam iusto asperiores distinctio sit dolor.', 'en_US'),
(4, 4, 'Mug \"qui\"', 'mug-qui', 'In itaque tempore voluptas voluptas. Qui quaerat vel dolor rerum quia sed dolores. Eaque et dolores repudiandae perspiciatis molestiae.\n\nDolores nisi aut itaque similique et. Excepturi qui suscipit sed quas. Alias dolores corporis et sit accusamus cum.\n\nEt est nihil qui soluta et aut. Minus sint fuga officia. Corporis ut explicabo natus sit.', NULL, NULL, 'Sapiente quia ab consequatur aperiam nemo alias. Neque cumque iure recusandae dicta itaque. Nisi nulla expedita ab provident earum inventore.', 'en_US'),
(5, 5, 'Mug \"debitis\"', 'mug-debitis', 'Ut libero temporibus dolorum earum. Et aut deleniti doloribus odio voluptatibus. Veritatis minus at quia et neque reprehenderit id atque. Reprehenderit earum placeat ea architecto aut.\n\nNam omnis distinctio ut labore voluptatem. Rem laborum nulla earum accusantium aliquid. Blanditiis consequatur amet cum perferendis. Voluptas laudantium corrupti et nemo.\n\nEt aliquam asperiores sed sed aut qui voluptates. Libero hic quam alias minus dicta sunt. Excepturi dolorum laborum accusantium minima voluptas aperiam sed.', NULL, NULL, 'Quia sit aut aut a fugit. Et dolore non in dolor tempora quia. Eos illum expedita saepe qui.', 'en_US'),
(6, 6, 'Mug \"dicta\"', 'mug-dicta', 'Et occaecati minima et quibusdam. Nihil ut deleniti repellendus vel itaque. Quaerat molestiae dignissimos asperiores qui. Praesentium fugiat quo sit consequatur.\n\nVel amet nesciunt itaque aspernatur labore numquam voluptate. Officia eius quae laboriosam in autem. Perspiciatis sed quo eligendi quas.\n\nIure dolorum aut nobis qui. Et ipsum sint possimus et voluptatum. Ex dicta sed id sed itaque quia inventore. Debitis exercitationem eaque ut ut quo ducimus ut.', NULL, NULL, 'Animi illo odit natus autem consequatur. Laboriosam soluta officia nesciunt excepturi quod quos possimus. Assumenda sit voluptatem et.', 'en_US'),
(7, 7, 'Mug \"laudantium\"', 'mug-laudantium', 'Praesentium in repudiandae consequatur nulla. Id alias earum dolores.\n\nAsperiores autem accusantium vitae voluptatibus. Quia dolores ipsum dicta est est rerum. Consequatur ipsum omnis sequi illum expedita.\n\nEst quia molestiae ut omnis non adipisci eum. Culpa similique velit qui eum velit et dolore. Quibusdam commodi porro sunt consequatur soluta nam.', NULL, NULL, 'Nam ut provident expedita qui. Est voluptas rerum corrupti nihil. Esse saepe magni reiciendis placeat ducimus in quas.', 'en_US'),
(8, 8, 'Mug \"consequatur\"', 'mug-consequatur', 'Explicabo nisi in ducimus doloremque eaque eveniet minima. Et beatae consequatur qui reprehenderit. Repellat nobis qui deleniti dolores alias soluta est et. Reiciendis provident cumque earum quibusdam veniam. Quaerat incidunt accusantium qui nemo est enim.\n\nMagni porro quas fuga ipsum quo et veniam. Dolorum provident tempore doloremque sunt saepe ipsum. Voluptatem labore est ex. Sed dolor doloremque voluptas et esse et rerum.\n\nQui aut aperiam est earum. Rerum aut hic voluptatibus facilis. Ipsa placeat magni mollitia alias consectetur. Et rem optio id laboriosam.', NULL, NULL, 'Ipsam eius ullam beatae omnis nobis nemo. Officiis architecto aperiam officiis. Ipsam sint quia fugiat quia. Praesentium adipisci et magni ad.', 'en_US'),
(9, 9, 'Mug \"omnis\"', 'mug-omnis', 'Minima repellendus iste vitae id id placeat consectetur qui. Voluptas sed enim omnis sint officia et. Deserunt quia nostrum nam.\n\nFugiat ut velit culpa id ex assumenda. Quaerat deserunt vero necessitatibus fugit soluta pariatur quos. Et dignissimos delectus exercitationem enim. Aliquid sint quis cupiditate rerum repellat ut.\n\nConsequuntur eius ut dolorum. Vitae laborum eos alias iste ipsam. Delectus qui voluptatum cumque et adipisci earum ut. Quos sunt commodi et soluta sed sapiente molestiae.', NULL, NULL, 'Atque excepturi aliquid ut pariatur. Exercitationem culpa minima quia fuga omnis voluptas. Ratione provident porro est.', 'en_US'),
(10, 10, 'Mug \"atque\"', 'mug-atque', 'Laudantium aliquam fuga quia illum. Delectus consequatur minima eius illum quia. Dolores totam fugiat esse ex quia optio placeat. Et adipisci vel aliquid esse. Ratione dolorem voluptate culpa beatae ea voluptatem reiciendis.\n\nVeritatis ut et eum quia et sit quia quam. Maxime ut ratione earum. Fugit dicta quasi ut iusto voluptatem possimus provident. Quae in rem fugit deleniti pariatur iste. Voluptates ex perspiciatis dicta occaecati ex.\n\nEst dolorum hic porro voluptatem facilis vero laborum itaque. Cumque quae minus quas architecto aut accusamus. Reiciendis eos animi architecto illum quaerat aspernatur a. Non et maiores rerum dolore occaecati ullam consequatur sapiente. Ut quibusdam et saepe et nam quia minima.', NULL, NULL, 'Molestias delectus quidem architecto quia vel atque autem. Voluptas voluptatibus sed quas aut enim natus. Ut qui tempora provident voluptate. Voluptatem vero temporibus labore aut odit.', 'en_US'),
(11, 11, 'Mug \"voluptatum\"', 'mug-voluptatum', 'Laudantium est eos incidunt fugiat. Quisquam dolor in ut.\n\nRerum fuga voluptas et et eaque est. Est ea numquam repellendus recusandae quae cumque officia. Nihil quisquam eveniet sit quis in vero.\n\nEst dolorem ullam voluptate sit. Qui aut ullam veniam perferendis ea numquam voluptatum. Maxime hic dolorem dolorem aut. Corporis quo error et et deleniti.', NULL, NULL, 'Unde ea repellendus et voluptatem totam commodi aut. At doloribus aliquid cum deleniti aliquam similique aut. Nemo enim itaque blanditiis vero ad architecto ut. Cum consectetur suscipit fugit dicta blanditiis et.', 'en_US'),
(12, 12, 'Mug \"velit\"', 'mug-velit', 'Dignissimos id dignissimos quo aut. Nesciunt rerum est laborum aperiam autem quia. Magnam eos minus quam.\n\nConsequatur id non in deserunt voluptas. Sit dolorem aspernatur esse maxime omnis occaecati ipsam. Perspiciatis aut suscipit unde et.\n\nCulpa delectus ut aut et repellendus. Quo dicta nihil nihil ut aspernatur.', NULL, NULL, 'Quo architecto ut eum ratione. Eos laboriosam et saepe qui. Quae exercitationem numquam illo quo ipsa enim. Molestiae placeat necessitatibus voluptatem aut vel dolorem.', 'en_US'),
(13, 13, 'Mug \"autem\"', 'mug-autem', 'Similique tempora quia dolor et ipsa doloribus qui qui. Temporibus officia adipisci voluptas quo repellat dolorum. Aut dicta quidem perferendis illum. Voluptates aut debitis nemo inventore veniam et autem laudantium.\n\nVeritatis voluptate quia perspiciatis qui vitae. Nostrum quis est sed enim fuga. Illo id mollitia enim exercitationem. Optio fuga provident eos ab.\n\nModi reprehenderit suscipit quam non vel vitae. Qui voluptatem temporibus vitae porro animi id. Et et et magnam.', NULL, NULL, 'Voluptas quia eos officia autem. Et eligendi id est molestias. Quisquam veritatis suscipit numquam molestiae nemo maiores.', 'en_US'),
(14, 14, 'Mug \"praesentium\"', 'mug-praesentium', 'Eos quis molestiae impedit quibusdam occaecati. Natus sed repudiandae tempora labore dolorem.\n\nVoluptatem perspiciatis libero sint reprehenderit quae veniam. Ipsam nam aut expedita vero.\n\nEt id maxime quidem ut eius voluptates. Nam fugit quo quo quaerat nemo doloremque reiciendis. Cum accusantium et possimus consequuntur cumque et facere. Est est sed doloribus molestiae autem non repellendus.', NULL, NULL, 'Necessitatibus officia ad ex. Magni quod dolor quam. Omnis quaerat et ex dicta.', 'en_US'),
(15, 15, 'Mug \"quidem\"', 'mug-quidem', 'Minus fugiat sit nostrum quasi asperiores magni veniam consequatur. Ut voluptas qui cumque necessitatibus labore alias adipisci. Dolores tempore quos quia at et at. Sunt voluptatem pariatur consectetur amet et deserunt et.\n\nFacere sint voluptas mollitia sunt. Neque sapiente qui est qui consequuntur quasi maxime.\n\nNobis sed distinctio velit maxime corrupti cum dolores itaque. Nihil tenetur ea labore ipsum vitae. Nisi error incidunt totam in quae adipisci id.', NULL, NULL, 'Eveniet dolores quisquam ut est. Iste minima aliquid voluptas similique unde laboriosam perspiciatis. Voluptatum omnis odit deleniti quod maxime sunt qui.', 'en_US'),
(16, 16, 'Sticker \"quis\"', 'sticker-quis', 'Impedit cupiditate enim laboriosam ea illo et. Esse atque nesciunt assumenda voluptas. Maiores quod error mollitia neque dolores. Autem officiis eos nemo nihil. Dolorem cupiditate iusto voluptas nam beatae earum incidunt eius.\n\nQuisquam exercitationem quia et voluptates illo ut. Officiis magni odit exercitationem quia nemo. Omnis cumque enim laboriosam ducimus qui.\n\nAmet quisquam doloremque quia nisi saepe. Porro et saepe aspernatur cupiditate. Amet incidunt vitae eos nihil quia accusantium non. Deserunt voluptatum quos pariatur quae aut ut. Dolores facilis molestias ad nobis sit sit.', NULL, NULL, 'Culpa nihil rem est sapiente doloremque unde maxime praesentium. Voluptas architecto vero dignissimos sit et. Laboriosam veniam voluptatem ipsa accusamus modi aut voluptatem.', 'en_US'),
(17, 17, 'Sticker \"corporis\"', 'sticker-corporis', 'Repellat commodi harum quasi ex. Provident consequatur vero quia sint enim laboriosam officiis. Autem exercitationem sunt molestiae enim.\n\nCumque cumque velit quas deleniti. Cum dolores amet hic voluptatibus magnam velit nostrum. Rerum repudiandae ut sed officia voluptatibus necessitatibus. Dolore sed sit explicabo ea nostrum qui et. Quo facere minus amet autem ut aspernatur delectus.\n\nAutem nemo occaecati ipsum accusantium suscipit. Rerum corporis sit vitae quisquam. Ut optio natus aut. Aperiam id maxime velit cumque eaque et corporis.', NULL, NULL, 'Nam velit odio id. Porro amet sed sint sit beatae quae hic eaque. Incidunt voluptatum sapiente repellendus sed.', 'en_US'),
(18, 18, 'Sticker \"molestias\"', 'sticker-molestias', 'Officiis reprehenderit voluptas consequuntur quidem maxime. Quae dolor a natus nesciunt est quibusdam aut. Occaecati veniam harum ut. A ea omnis molestiae.\n\nDolorem laborum eveniet reiciendis velit rerum deserunt iure. Consequatur qui ipsam aliquam placeat distinctio laudantium velit. Eum odio molestiae ut molestiae. Dolor voluptatem quos corporis voluptates.\n\nRem veritatis rerum facilis quis. Et aut illum expedita quis voluptas est.', NULL, NULL, 'Sunt occaecati unde quisquam et. Fugit nihil sit consequatur. Explicabo ipsa aliquid at porro autem. Non sint odit magnam excepturi officiis ipsa.', 'en_US'),
(19, 19, 'Sticker \"corrupti\"', 'sticker-corrupti', 'Provident aut ea unde voluptates. Laborum non ut sed aperiam iusto est doloremque. Officia accusamus eos nulla iure et eos assumenda velit.\n\nQui ut suscipit dolores omnis itaque ea. Aliquam provident nihil aliquam similique cum iusto nisi nesciunt. Nesciunt voluptate sed iure quia.\n\nVel sed voluptas sunt accusamus ad dolores ut. Quo et dolor reiciendis eligendi dolores dolorem ea. Et occaecati placeat quis aliquam debitis autem.', NULL, NULL, 'Sit unde ea perferendis et unde laudantium sit. Porro qui quasi quis fugiat. Quia quia maiores eum quia cupiditate.', 'en_US'),
(20, 20, 'Sticker \"nobis\"', 'sticker-nobis', 'Enim reiciendis optio fugit est odio hic eos. Molestiae tempora iure nesciunt est et voluptatem saepe. Eaque unde modi aperiam dolor modi enim voluptatum quidem. Consequatur optio reiciendis odit. Velit unde aut odio dolor reprehenderit.\n\nAmet repellat architecto natus facilis. Ea eos voluptatem voluptatem. Quo deserunt earum consequatur distinctio non et sequi. Sint ut et cupiditate voluptates sint ipsa ipsa esse. Qui porro rem atque.\n\nConsequatur esse quam esse quia quo eligendi. Veniam deserunt eos voluptatibus recusandae exercitationem sit qui. Rerum est dolore mollitia voluptatibus.', NULL, NULL, 'Iusto nobis dolore totam. Vero consectetur soluta occaecati nihil doloribus occaecati.', 'en_US'),
(21, 21, 'Sticker \"possimus\"', 'sticker-possimus', 'Consequuntur quae ut expedita quia sit. Quia alias praesentium repudiandae et voluptatem error voluptatem quos. Unde doloremque quia nihil incidunt accusamus cum. Eveniet exercitationem perferendis ut sint.\n\nHic dolor velit qui itaque. Enim dolorem laudantium tempora magni fuga ducimus. Eius amet sapiente excepturi sit.\n\nUt explicabo porro autem dolor modi recusandae quisquam. Et odio quidem voluptatibus voluptatem ut.', NULL, NULL, 'Quia neque et ratione et ratione et. Occaecati repudiandae provident id earum quidem dolorem alias officiis. Distinctio eveniet harum ad quis et. Ratione consectetur assumenda quia qui natus corporis at enim. Impedit soluta qui provident sapiente at totam.', 'en_US'),
(22, 22, 'Sticker \"non\"', 'sticker-non', 'Recusandae quis rerum voluptatibus sed ipsa voluptatum. Ad eum numquam enim autem est enim totam. Sequi eius dolore est consequatur maxime.\n\nNisi quia ad quia aperiam dolor. Vero ea vel vel officiis. Vero dignissimos sit quis qui voluptas. Placeat veritatis voluptatem saepe et incidunt nulla vel. Molestiae dolor rerum doloribus voluptatem nemo sunt velit.\n\nEius assumenda vero veritatis et. Ut voluptatum amet maxime et voluptatibus. Illo unde et vel a ducimus consequatur aut quam.', NULL, NULL, 'Enim explicabo debitis sint aliquid id fugiat. Amet praesentium et quis. Aliquid sunt rerum quasi atque dolores voluptatibus velit. Eos et consequatur voluptatem.', 'en_US'),
(23, 23, 'Sticker \"ut\"', 'sticker-ut', 'Consequuntur quam nihil sit qui nesciunt aut et voluptatum. Consequuntur amet dolorum nihil. Sed ipsum quis sed et. Enim exercitationem quia illum neque quis reprehenderit asperiores.\n\nAliquid placeat cum soluta esse voluptatem non placeat quia. Et ab occaecati est veritatis et rerum. Impedit voluptatem culpa consequuntur occaecati.\n\nSunt officiis explicabo perspiciatis assumenda atque. Deleniti ut est similique ut. Id facere cumque et eos cupiditate nobis. Odit quasi veniam tenetur maxime sint repudiandae. Provident nisi voluptatum repellendus sit nam.', NULL, NULL, 'Sunt non harum non debitis sint consequatur unde. Nisi veritatis nesciunt et inventore. Sed ut soluta omnis nostrum. Quidem tenetur iusto ducimus enim.', 'en_US'),
(24, 24, 'Sticker \"consectetur\"', 'sticker-consectetur', 'Aut voluptas recusandae qui dolorem aut. At cumque aspernatur doloremque cumque sunt nisi. Est dicta nostrum omnis et at hic.\n\nAut numquam quos ea temporibus esse sit facere. Sapiente commodi nesciunt est omnis sed. Deleniti omnis quidem ut dolores et accusamus ut.\n\nCupiditate et quia quo et ut. Consequuntur minima nostrum assumenda. Est distinctio aut minima quo eos voluptates magni voluptas.', NULL, NULL, 'Natus eum animi omnis sed porro placeat. Voluptatem nesciunt id velit labore. Cupiditate enim molestiae tempora quos beatae.', 'en_US'),
(25, 25, 'Sticker \"quo\"', 'sticker-quo', 'Quasi voluptates vel fugiat. Incidunt dolor odit in repellendus maiores. Earum libero et sapiente commodi fuga sed. Quaerat suscipit corrupti aliquam et voluptas maxime qui.\n\nVel ratione aut vitae aut qui architecto magni velit. In id quis corporis cupiditate ab laudantium ipsa impedit.\n\nVoluptate aperiam incidunt corrupti sit omnis aliquam ipsa. Et distinctio necessitatibus qui neque inventore nostrum. Veritatis eaque et molestiae magnam.', NULL, NULL, 'Incidunt sed maxime molestias facere iusto veritatis. Voluptatem quisquam ducimus nulla explicabo qui odit nam. Quo possimus eligendi id ducimus similique.', 'en_US'),
(26, 26, 'Sticker \"dolor\"', 'sticker-dolor', 'Recusandae quo et aut nostrum accusantium. Nisi ab dolore et nobis aliquid quia vel. Rem sed nesciunt itaque vero quasi. Non ut iste molestiae rem possimus beatae quia.\n\nSint impedit molestias laboriosam. Aperiam sed rerum corrupti fuga debitis quia dolores. Ut quibusdam quae ducimus atque qui. Eum ut alias delectus et sunt id.\n\nAspernatur eaque facilis assumenda sequi saepe incidunt at est. Architecto molestiae nostrum mollitia esse maxime voluptate eius. Commodi sed voluptas et consequatur fugiat.', NULL, NULL, 'Consequatur est veniam ut eum ipsam blanditiis similique qui. Dolorem ducimus ea vitae quia vitae et. Aut rem quo autem animi.', 'en_US'),
(27, 27, 'Sticker \"dolore\"', 'sticker-dolore', 'Voluptatem veritatis adipisci quia eum et cumque. Tempore et rerum quos vitae. Porro molestias vel enim.\n\nQuasi saepe molestias consequatur aut autem. Quia officiis odit harum modi nesciunt magni est enim. Harum omnis recusandae soluta eaque placeat et ipsa. Maiores voluptatibus laudantium ipsam amet et.\n\nTempora nostrum voluptatem molestias sunt quia possimus. Nihil deserunt voluptates ullam asperiores omnis. Voluptatem non esse ut quos. Quasi eveniet aspernatur nostrum suscipit.', NULL, NULL, 'Corporis sit quidem maxime nesciunt aut. Dignissimos et eos est. Doloremque eos sed et quis harum quibusdam dolores. Voluptatem sequi quidem pariatur sit nobis aut culpa.', 'en_US'),
(28, 28, 'Sticker \"odio\"', 'sticker-odio', 'Incidunt voluptates et qui provident. Ipsam praesentium at voluptatum magni vel. Consequuntur suscipit aliquid blanditiis et nesciunt architecto error culpa. Asperiores eaque aut eum maiores voluptatem.\n\nQui sit velit ratione odit nihil. Eum et nihil officia maxime. Accusantium qui quo autem consequuntur assumenda ut dolorem. Exercitationem accusantium tempora quas sit minima et.\n\nQuibusdam voluptatibus accusamus amet omnis voluptate quia voluptates. Sapiente debitis sint et. Voluptatem iure beatae molestias sit et.', NULL, NULL, 'Officia omnis repellat sed soluta porro quos porro. Voluptatem eaque tempore dolores. Aliquam alias quaerat et distinctio corporis.', 'en_US'),
(29, 29, 'Sticker \"eum\"', 'sticker-eum', 'At aliquam incidunt nisi tenetur. Ea enim recusandae soluta quia deleniti. Quia harum exercitationem quia voluptatum est eius consequatur porro.\n\nA consequatur molestiae similique velit voluptatem. Reprehenderit quo magnam minus nisi. Ab vero aut ducimus deserunt. Corporis nihil nihil asperiores amet occaecati sint occaecati. Dolores sed quam explicabo saepe deserunt quis sit.\n\nDolores provident inventore aliquam. Nemo aut laboriosam rem sunt ipsa odit. Sequi provident sed ex non ipsa. Ut recusandae facilis aut quas molestiae eum. Tempora et voluptatem sit pariatur.', NULL, NULL, 'Dignissimos voluptatem et iste voluptate. Consectetur soluta omnis qui non. Quis amet consequuntur laudantium aliquam unde nobis asperiores deserunt.', 'en_US'),
(30, 30, 'Sticker \"mollitia\"', 'sticker-mollitia', 'Necessitatibus expedita facilis quo expedita. Earum repellendus impedit voluptatem dolore error qui cumque non.\n\nQui earum animi quae et est qui. Dicta culpa deserunt magnam et repellat. Ut rem perferendis illum error.\n\nSunt fuga sapiente tempora nisi. Sint quia aperiam est ut voluptatum. Sit voluptatem temporibus voluptatem ullam ea facere architecto.', NULL, NULL, 'Occaecati sequi earum hic adipisci hic sapiente. Magnam laboriosam repellendus sit voluptas earum. Illum non porro pariatur asperiores. Quia vitae autem quam quidem illum architecto deleniti.', 'en_US'),
(31, 31, 'Book \"natus\" by Mrs. Aliya Hickle V', 'book-natus-by-mrs-aliya-hickle-v', 'In sit aliquid saepe enim pariatur. Facere magnam nobis quas nostrum nihil non. Atque sit dolorem aperiam molestiae et.\n\nEt ab atque eveniet temporibus necessitatibus sed maxime tempora. Ea sint et at est ut recusandae aut. Sit enim at architecto vel voluptatem.\n\nVoluptate id quas quibusdam minima. Est eum tempore quibusdam. Fuga ullam iure hic non soluta qui. Ipsam iusto et dolores fugit.', NULL, NULL, 'Et corporis vitae eum qui corporis. Numquam occaecati deleniti repudiandae nihil autem et fugiat. Nobis illo fugit in rerum qui.', 'en_US'),
(32, 32, 'Book \"blanditiis\" by Nayeli Pollich', 'book-blanditiis-by-nayeli-pollich', 'Quia non minima cum labore dolorem vel. Omnis quis aliquam quo animi omnis enim. Nihil assumenda omnis consequatur alias. Officia perspiciatis doloremque sint cum.\r\n\r\nId vel est impedit blanditiis. Adipisci eos qui et quaerat fugiat pariatur et omnis. Et tempora excepturi deleniti nihil cumque.\r\n\r\nPraesentium voluptas distinctio sunt ab quo. Saepe voluptates consequuntur aspernatur nobis fuga aut adipisci. Magnam est assumenda quisquam voluptatibus quidem sapiente voluptas non.', NULL, NULL, 'Aut est temporibus eos voluptatum autem quam numquam. At dolore sed optio quas. Officiis non occaecati mollitia laudantium quos totam.', 'en_US'),
(33, 33, 'Book \"accusamus\" by Rosa Wilkinson', 'book-accusamus-by-rosa-wilkinson', 'Non sed aut quis eos eligendi rerum error rerum. Debitis tenetur eaque hic sed dolor ex numquam. Reiciendis non dolor fuga beatae consequatur ipsum id deserunt.\n\nDoloribus nostrum magni officia dolor. Voluptatem sunt nemo dolor nobis nulla.\n\nFugiat sequi asperiores consequatur. Delectus ad explicabo molestias distinctio veniam maiores. Corporis omnis repellendus ut rerum inventore consequatur consequuntur.', NULL, NULL, 'Molestiae magnam exercitationem asperiores doloribus aliquam eum. Assumenda aut voluptatem autem. Dignissimos neque dolores magni sunt voluptates consequatur exercitationem dolor. Animi eum rem tempore sint vitae dolorem aut.', 'en_US'),
(34, 34, 'Book \"incidunt\" by Hailey Kshlerin', 'book-incidunt-by-hailey-kshlerin', 'Accusantium ipsa molestiae suscipit modi facilis minima amet cum. Et assumenda natus voluptatibus deserunt corrupti architecto quisquam. Nesciunt voluptates voluptatem veritatis. Tempore autem illum omnis est. Animi temporibus sint quidem expedita maiores unde cupiditate.\n\nEt quae odio facilis vero. Omnis laudantium vitae neque voluptatem molestiae eum. Quia molestiae deleniti at et. Et ut veniam quos sint est et blanditiis. Omnis ipsum blanditiis omnis quia dicta dolorem.\n\nDeleniti voluptas minima dolores nihil. Est repellat beatae quia voluptatem sapiente itaque. Dolor illo corporis necessitatibus et iusto consequatur sed consequuntur. Est cumque dolorem magnam maiores.', NULL, NULL, 'Odio voluptas aut et consequatur expedita non excepturi. Voluptas excepturi sit praesentium neque quia. Nihil consequatur non et.', 'en_US'),
(35, 35, 'Book \"tenetur\" by Arnold Bartoletti', 'book-tenetur-by-arnold-bartoletti', 'Id possimus odio qui ratione odio dolorem quis. Cumque asperiores ratione rerum magni ipsum quia sed. Praesentium nemo ad hic temporibus necessitatibus dolore nihil.\n\nId quisquam quia autem. Ut beatae laborum qui ex aliquam quos vel. Nostrum ut vel recusandae et.\n\nUt dolor enim facilis consectetur minima voluptas consequatur. Omnis libero ducimus reprehenderit aperiam sed dignissimos. Dolor dolore magnam ullam maiores harum. Non et neque et laboriosam.', NULL, NULL, 'Quasi accusamus autem amet illo eos velit. Ad et qui culpa fugiat. Corporis id illo reprehenderit corporis dolor aut voluptas.', 'en_US'),
(36, 36, 'Book \"eos\" by Mr. Caleb Cremin II', 'book-eos-by-mr-caleb-cremin-ii', 'Id quia mollitia sit aut. Explicabo nostrum eius sit expedita dolorem qui fugiat. Temporibus laborum excepturi facilis a ipsa beatae. Ducimus voluptate voluptatem aut at sint.\n\nTempora et ut quibusdam aut. Illo delectus repudiandae sunt in sint. Asperiores sunt et expedita qui veniam fugiat sunt totam. Dignissimos perspiciatis laboriosam est voluptatibus odio doloremque ratione nihil. Sit dolor ratione modi labore rerum in quod.\n\nId officia omnis ullam earum sint et. Nesciunt nisi tenetur ut voluptas. Fuga pariatur rerum aut neque sequi distinctio sint fugiat. Rem quis facere voluptatem cum dolore dolor ea velit.', NULL, NULL, 'Quod sed quis ut cupiditate quibusdam dolor aperiam. Doloribus sequi et laboriosam ab quibusdam et atque. Delectus nisi at exercitationem blanditiis.', 'en_US'),
(37, 37, 'Book \"quibusdam\" by Molly Pacocha', 'book-quibusdam-by-molly-pacocha', 'Est quaerat et quo aliquid eos excepturi ut. Dicta itaque eveniet et sunt. Deserunt sint et nesciunt necessitatibus.\n\nAnimi quia porro dicta optio. Unde reiciendis placeat dicta voluptas fugiat rerum. In voluptatem omnis sunt aperiam cupiditate suscipit sequi.\n\nQuia sed sint qui ad aliquam. Nam ut qui incidunt in laboriosam enim. Iure sit ipsum omnis dolore.', NULL, NULL, 'Maiores in omnis nam iusto id ut deserunt. Maiores repellendus voluptatibus sed ad. Mollitia voluptas debitis natus ea ducimus commodi.', 'en_US'),
(38, 38, 'Book \"modi\" by Lyla Bartoletti V', 'book-modi-by-lyla-bartoletti-v', 'Ipsa facilis exercitationem nam eligendi veritatis aut nam. Sed sed et sed laudantium sed ea id molestias. Voluptatem hic ratione culpa unde eos amet voluptas.\n\nConsequatur commodi enim tempore dignissimos. Temporibus cupiditate exercitationem officiis ex unde. Dolor quas quisquam quos aliquam vero recusandae. Quis quia molestias harum assumenda repellendus.\n\nQuia tenetur eos corrupti suscipit. Earum magnam consequatur tenetur voluptates. Et aut dolore a sapiente eum. Ut aut iure officiis aut sint.', NULL, NULL, 'Qui impedit id error perspiciatis molestiae quis. Similique doloremque assumenda veniam qui aliquid est. Perferendis aut quos repellat. Amet sapiente ipsum eos voluptate delectus et.', 'en_US'),
(39, 39, 'Book \"ut\" by Lorenza Lynch', 'book-ut-by-lorenza-lynch', 'Aut quis officia mollitia sequi molestiae ipsum voluptatem. Voluptatem consequatur optio eos quae qui. Quia aspernatur molestias officia porro. Quia magnam explicabo voluptas ad omnis.\n\nConsequatur et adipisci qui. Qui illo sunt libero ea enim. Quas architecto doloribus aspernatur deserunt omnis quo vel. Et quis eum perspiciatis molestiae.\n\nExercitationem assumenda corporis quidem. Repudiandae enim in veritatis et maiores. Laborum voluptatem unde porro quidem harum doloremque. Non qui ut recusandae nesciunt quis. Reprehenderit laudantium quisquam blanditiis vel veniam iusto sint.', NULL, NULL, 'Perspiciatis nisi officia ipsa quisquam ipsum. Minima nesciunt et dolore ab atque quos. Vel rem impedit libero perspiciatis vel tenetur. Ab eveniet officiis voluptas ut qui molestias earum vero.', 'en_US'),
(40, 40, 'Book \"magnam\" by Mrs. Dorris Cummings', 'book-magnam-by-mrs-dorris-cummings', 'Ea deleniti magnam ad tempora consequatur suscipit eum dolorem. Fuga quia accusamus ad cupiditate laborum repellendus. Minima necessitatibus temporibus rerum modi.\n\nNobis et expedita nihil. Sit eveniet voluptas eaque qui nihil itaque fuga. Magni omnis voluptas cum ipsa fugiat et aut itaque.\n\nAtque natus et molestias qui perspiciatis labore enim. Delectus tempora omnis dolor.', NULL, NULL, 'Excepturi hic sit voluptatum non repudiandae sed magnam. Hic dolore tempore eius qui. Ex quia rerum ut dolores consectetur.', 'en_US'),
(41, 41, 'Book \"consequatur\" by Margarita Torp', 'book-consequatur-by-margarita-torp', 'Assumenda maiores minima porro. Laudantium ea in nisi voluptatum. Inventore architecto nobis est occaecati sed dolorem. Facilis aut perspiciatis deleniti nobis ut.\n\nEt et sed eum similique ducimus. Est alias commodi molestias eligendi ab sint est. Qui explicabo consequatur aut esse nostrum.\n\nProvident natus ea debitis voluptatem sed. Modi dolores porro quasi nihil. Minima animi velit id tenetur neque consequuntur voluptates natus. Aperiam consequatur sequi suscipit explicabo animi aut.', NULL, NULL, 'Eos iste et quos aperiam suscipit in. Quos qui aperiam delectus voluptatem voluptas sunt nam. Aperiam et dolorem quo praesentium voluptatem laboriosam.', 'en_US'),
(42, 42, 'Book \"odio\" by Romaine Yost', 'book-odio-by-romaine-yost', 'Voluptatem dolor laudantium veniam excepturi aliquam rerum vero sint. Maxime voluptatem minima temporibus dicta error minima. Saepe dolorem qui praesentium quo voluptatibus veritatis et. Earum maxime explicabo laboriosam ullam.\n\nConsequatur dolor facere maxime asperiores sit aut voluptas. Ex expedita dolorem iusto in voluptate excepturi modi. A autem voluptas sequi quia magni et eum. Mollitia aliquam non adipisci sequi.\n\nNecessitatibus error quae error dolores et fuga. Et saepe deleniti totam sit consequatur dolores. Sed voluptatum et omnis unde. Ea quaerat suscipit in aut architecto impedit.', NULL, NULL, 'Non et magni quasi totam. Deleniti rem non accusantium quod rerum. Culpa omnis est dolores ad odit est consequatur. Expedita earum dolor excepturi quia sapiente ducimus.', 'en_US'),
(43, 43, 'Book \"aut\" by Destany Gutkowski', 'book-aut-by-destany-gutkowski', 'Sed error laborum rem quo qui at doloremque. A dolorum commodi sunt iusto aut doloremque et. A sit sed ut est.\n\nAliquid dignissimos occaecati sit repellendus placeat omnis id. Sint modi odio blanditiis alias quo eos. Esse repellendus et illum deserunt sunt. Delectus molestias et qui minus voluptas sed.\n\nEt laudantium cum quod quis. Quia nesciunt molestiae possimus sed assumenda et. Debitis vel unde ut deserunt dolorem dolorem quidem possimus. Quia qui nisi eligendi reprehenderit.', NULL, NULL, 'Consequatur adipisci ducimus facilis tempora. Corporis iste odio voluptates. Officia eligendi necessitatibus aut et omnis.', 'en_US'),
(44, 44, 'Book \"est\" by Chance White', 'book-est-by-chance-white', 'Aliquid sit eius consequatur iusto a. Numquam voluptas id debitis nesciunt veniam non temporibus. Itaque sed fuga voluptas atque perspiciatis quia vel.\n\nAliquam dolores cupiditate asperiores asperiores dolores. Asperiores officiis et sint in adipisci dignissimos. Exercitationem tenetur quam ipsum qui et. Commodi et non eligendi voluptas.\n\nConsequatur sint est sit. Quas possimus quo omnis nam sed accusantium. Veniam deserunt aliquam non est distinctio eos quo quaerat. Debitis magnam blanditiis repellat sit tempore. Esse provident aut totam et aut qui et.', NULL, NULL, 'Amet eum magni corporis illum facilis necessitatibus. Odio iste dolor voluptas dignissimos voluptatem labore. Ratione neque animi qui veritatis qui est molestias. Corporis esse et et quia voluptatem.', 'en_US'),
(45, 45, 'Book \"unde\" by Natasha Huel', 'book-unde-by-natasha-huel', 'Ex qui tenetur nisi corporis. Quae suscipit animi laboriosam aut dolorem doloribus. Quasi ratione consequuntur dolor autem sed ratione necessitatibus.\n\nVoluptas sunt consectetur est illum corrupti eius. Adipisci cum perspiciatis sunt ratione eum qui iusto velit.\n\nEos ab accusamus vel ad autem fugit atque. Aut explicabo quia molestiae unde. Non commodi rerum cumque est iste.', NULL, NULL, 'Eius nisi esse quasi beatae dolores suscipit et. Iste nisi occaecati saepe minus. Reprehenderit accusantium sit nemo ut sapiente.', 'en_US'),
(46, 46, 'T-Shirt \"officia\"', 't-shirt-officia', 'Dolor maiores in quidem quia ipsum. Maiores tempora officiis eum aut nemo quod commodi. Est aut consequatur nobis voluptas aut doloremque laborum.\n\nAut ut enim repellat quas. Possimus deserunt aut esse ab. Repudiandae porro nam et voluptas voluptate et aut.\n\nAccusantium cupiditate quaerat eligendi quibusdam. Mollitia nesciunt corrupti iste et ratione. Excepturi ut eius dolor quae. Occaecati tenetur provident deserunt sunt.', NULL, NULL, 'Quos id et optio voluptatem vel autem cumque sequi. Fuga provident neque quia quam id. Repudiandae et tempora sit sequi dolor.', 'en_US'),
(47, 47, 'T-Shirt \"libero\"', 't-shirt-libero', 'Aut reprehenderit fuga cupiditate recusandae. Eaque similique modi dolore quis nulla ratione consectetur. Ipsam mollitia ducimus voluptas harum similique et consequatur ut. Maiores quas qui quasi et sed.\n\nConsequatur ut unde nesciunt ut aut. Dolorem illum doloremque ut adipisci reiciendis commodi officiis. Delectus molestiae est libero consequatur dolor.\n\nArchitecto itaque ut dignissimos omnis et dolor omnis dolor. Quas asperiores placeat est consequatur dignissimos. Corrupti maiores cum tempore. Natus earum et consequatur incidunt accusamus in quibusdam.', NULL, NULL, 'Ut eveniet illo quibusdam. Voluptas incidunt dolores quaerat est. Et eum et qui temporibus ut et. Harum eum quas omnis aut sed consequatur delectus qui.', 'en_US'),
(48, 48, 'T-Shirt \"cupiditate\"', 't-shirt-cupiditate', 'Non aut et quia et distinctio. Est laborum voluptatem aperiam saepe. Et optio quia enim. Ut molestiae nam reiciendis debitis.\n\nOccaecati nihil repellendus corrupti qui voluptatem ea et sed. Molestiae non accusantium temporibus culpa laborum soluta. Non voluptate fugiat aut veniam. Corporis dolores aut porro facere occaecati esse quaerat.\n\nOdit et soluta sint facere amet. Est nostrum aperiam praesentium. Suscipit sit dolores cumque impedit omnis et et. Ea rerum et voluptate quia maiores.', NULL, NULL, 'Sit eveniet non eum id culpa. A iusto beatae consequuntur. Quis sunt aut libero saepe ratione. Explicabo voluptatem consequuntur ut qui quibusdam provident similique.', 'en_US'),
(49, 49, 'T-Shirt \"minima\"', 't-shirt-minima', 'Autem aliquid vel dignissimos sit. Nisi unde aspernatur labore ut sit ipsum. Nesciunt eum in voluptatum tempora est rem.\n\nDelectus dolorem perferendis voluptatem officia et dolor ut minima. Nulla nesciunt laboriosam exercitationem amet consectetur aut. Fugit veritatis in error quis enim praesentium. Quis porro quia officia non dolor laborum est sit.\n\nExplicabo dolores voluptatem a et. Nihil facere quia voluptatem dolores atque eos ipsa sunt. Et animi enim iste qui. Adipisci a ab quaerat debitis.', NULL, NULL, 'Accusantium vero vero itaque tenetur quo non. Et delectus aut ipsum odit. Blanditiis maxime repellendus expedita quis laboriosam vero. Quo ut labore cumque quam consequuntur.', 'en_US'),
(50, 50, 'T-Shirt \"atque\"', 't-shirt-atque', 'Rerum magnam veniam provident dignissimos itaque adipisci temporibus. Eos illo labore vel fugiat aperiam corrupti aut. Quibusdam atque voluptatem quod tempora sed impedit ab qui.\n\nUnde facere illo recusandae eveniet qui praesentium voluptate. Dicta debitis consequuntur non facere alias illum nesciunt. Rerum et ullam laboriosam qui occaecati.\n\nDolore quam soluta qui voluptas ab. Repudiandae in dolor iusto et ducimus incidunt. Voluptas omnis magni aut natus quam similique repudiandae.', NULL, NULL, 'Dolorem nisi enim ea neque. Commodi nesciunt optio aut corporis. Et at rerum laudantium veniam laboriosam sapiente neque exercitationem. Nam sequi blanditiis possimus aperiam sunt et.', 'en_US'),
(51, 51, 'T-Shirt \"voluptas\"', 't-shirt-voluptas', 'Ut qui facere dicta laboriosam et. Aperiam laborum id repellat esse rerum laborum voluptates dolorem. Asperiores rem voluptas distinctio numquam hic quo.\n\nIllo est explicabo voluptatem explicabo ut animi. Facilis et quia maiores in laudantium. Necessitatibus omnis illo est quia dolorem. Necessitatibus aperiam iure iste magnam placeat.\n\nAnimi voluptatum debitis ut possimus odio ipsam. Eum tenetur architecto eaque labore provident qui expedita. Rerum ullam minus corporis fuga maxime sapiente.', NULL, NULL, 'Consequuntur et dolor quisquam possimus commodi voluptatibus. Exercitationem repellendus sunt sunt et est voluptatem iusto repellendus. Officiis et qui quaerat quia aut voluptatem ducimus.', 'en_US'),
(52, 52, 'T-Shirt \"aliquam\"', 't-shirt-aliquam', 'Enim provident ut amet dolor. Pariatur itaque dolores aut aut quaerat. Atque voluptates laboriosam ea est dolorem nemo sunt sed.\n\nNeque consequuntur rerum officiis ab est. Autem sed sit repellat est. Vitae dolores et incidunt optio perferendis dolorem.\n\nOccaecati sit ea quas exercitationem tempore quis. Soluta quae occaecati recusandae ipsam. Ipsa dicta distinctio exercitationem occaecati in. Voluptatem optio et est ipsam. Et eum est at quas debitis magnam.', NULL, NULL, 'Aperiam inventore porro dolores quo a mollitia. Aut doloribus dignissimos commodi molestiae. Ea tenetur fugit a qui.', 'en_US'),
(53, 53, 'T-Shirt \"dolores\"', 't-shirt-dolores', 'Velit ab est enim aspernatur voluptatibus adipisci corporis. Itaque sit in est. Quia voluptatibus nemo quis fuga quaerat eum rerum. Voluptas voluptate rerum facere molestias veritatis cumque veritatis.\n\nVoluptas cumque et molestiae excepturi qui voluptas. Magnam ducimus et aperiam saepe. Voluptatem et illo quis laudantium aperiam doloribus nam. Reprehenderit nam dolor in explicabo officia aspernatur ut eligendi.\n\nDoloremque amet sed id facere accusamus fugiat. Commodi nam rem et. Reprehenderit est deserunt explicabo.', NULL, NULL, 'Omnis blanditiis non repellendus labore quidem eaque impedit. Facere praesentium et et quia. Aut corrupti et fuga ipsum. Eum iste ab quis consequatur.', 'en_US'),
(54, 54, 'T-Shirt \"deleniti\"', 't-shirt-deleniti', 'Voluptates quia sit nobis quia sunt. Nesciunt qui magnam id soluta quia aperiam quam ut. Quos quia corporis tempore aperiam.\n\nExcepturi quisquam ipsa est officia nisi. Id est ratione omnis. Consequatur commodi maiores non nihil. Est vitae quidem ipsum et dolorum.\n\nQuia id autem eum cum nulla placeat. Non mollitia dolor eos ut. Consequatur aut et incidunt non et numquam aliquid.', NULL, NULL, 'Ut et eaque enim blanditiis qui et. Laudantium sint incidunt incidunt accusamus ipsa repudiandae. Ab fugit ipsa qui.', 'en_US'),
(55, 55, 'T-Shirt \"velit\"', 't-shirt-velit', 'Quis id et placeat et qui et non. Nemo nemo minus consequuntur maiores. Asperiores at tenetur non. Molestias repudiandae necessitatibus ab quis.\n\nRerum ut optio laboriosam nulla eos amet sint. Libero aut soluta asperiores eius. Animi delectus assumenda quis ipsa.\n\nExercitationem qui rerum deleniti. Doloremque esse ut animi hic ut animi. Corporis aut assumenda non non. Et aut ab ducimus repellendus ipsam voluptatem eveniet.', NULL, NULL, 'Sunt dolor qui velit enim omnis aut. Velit et autem laudantium corrupti unde. Placeat qui numquam ad pariatur vel ut quis.', 'en_US'),
(56, 56, 'T-Shirt \"vel\"', 't-shirt-vel', 'Labore ut id quia quia aspernatur a. Officiis voluptatem adipisci fugit incidunt. Occaecati nisi ut provident neque.\n\nEst incidunt aliquam officia alias perferendis possimus. Vero et maxime dignissimos ea. Sunt facilis nesciunt quos explicabo ullam. Quisquam est voluptas doloribus. Quo voluptas quaerat deserunt omnis.\n\nExercitationem molestiae quis doloribus iusto ut quia rerum. Tempora doloribus incidunt ratione autem. Ut molestias omnis a delectus.', NULL, NULL, 'Dolorem neque adipisci dolorum et. Unde et dolore nemo autem nesciunt cupiditate.', 'en_US'),
(57, 57, 'T-Shirt \"ea\"', 't-shirt-ea', 'Quia quam veritatis fugit ut fugiat consectetur. Laborum dolorem tenetur dolores exercitationem. Porro omnis nihil hic sed est qui.\n\nAt quia non asperiores ea facilis. Non dolores totam sed deleniti id ea qui adipisci. Qui perspiciatis enim nesciunt autem minima omnis.\n\nA quas est beatae numquam nobis. Tempore veniam officia id sed dolorem atque illo. Occaecati quaerat dolor dolorum dicta architecto id nobis. Quae qui nobis accusantium eveniet ex eos ut.', NULL, NULL, 'Ipsa veritatis accusantium perspiciatis tempora nostrum. Ut magnam delectus officia dignissimos. Est quo cumque dolorem illum ea inventore.', 'en_US'),
(58, 58, 'T-Shirt \"officiis\"', 't-shirt-officiis', 'Mollitia velit odio vero ex porro. Nemo nihil dignissimos soluta. Debitis corporis et dolorem quia blanditiis. Esse aut consequuntur quo qui.\n\nUt repellat quae qui ipsa culpa soluta. Ducimus voluptatibus quidem similique ex in ut laborum. Maiores est qui consectetur aut velit itaque. Possimus et sequi architecto atque tempora explicabo.\n\nExpedita alias aut illum. Deleniti nam dolorum minus. Consequatur assumenda dolore delectus temporibus.', NULL, NULL, 'Natus dolor et molestiae et. Minima nulla non qui consequatur repudiandae molestiae. Ullam vero sed similique aliquam exercitationem nobis numquam.', 'en_US'),
(59, 59, 'T-Shirt \"explicabo\"', 't-shirt-explicabo', 'Reiciendis similique quaerat in et consectetur aspernatur. Quod sunt molestias commodi officiis quis. A quasi repellendus consequatur beatae.\n\nFugiat ipsum magnam voluptatibus doloremque et. Rerum dicta et odio. Omnis omnis facilis consequatur et.\n\nUt ea inventore eveniet excepturi perspiciatis consequatur. Sed qui rerum maiores est tempora dolorem magni. Culpa ipsam quibusdam neque sunt.', NULL, NULL, 'Voluptatem ut ut accusamus. Qui autem harum qui voluptas. Consequatur molestias delectus quam at. Voluptatem voluptas recusandae temporibus sit ut.', 'en_US'),
(60, 60, 'T-Shirt \"aut\"', 't-shirt-aut', 'Reprehenderit provident dicta expedita perspiciatis. Quae eos quia recusandae rerum reprehenderit est ea. Quo dicta amet blanditiis explicabo unde cumque. Ab doloribus voluptas vel aut necessitatibus aut voluptatem.\n\nQuod nam iusto magni vel iusto voluptas et. Perspiciatis minus illum assumenda fugit vitae. Cupiditate ipsam perferendis eos culpa. Sequi deserunt eveniet dolor consequatur. Omnis enim dolorem dolor repellat distinctio et.\n\nIn quaerat cumque aut nemo. Sint maiores ab neque aut veniam maxime voluptas. Architecto molestias sint exercitationem ut incidunt atque enim placeat. Neque adipisci ut qui eum dolor.', NULL, NULL, 'Adipisci ut impedit quia perspiciatis asperiores. Et beatae dolor quaerat eum vel nostrum. Qui voluptas temporibus labore.', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_variant`
--

CREATE TABLE `sylius_product_variant` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tax_category_id` int(11) DEFAULT NULL,
  `shipping_category_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `position` int(11) NOT NULL,
  `version` int(11) NOT NULL DEFAULT '1',
  `on_hold` int(11) NOT NULL,
  `on_hand` int(11) NOT NULL,
  `tracked` tinyint(1) NOT NULL,
  `width` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `depth` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `shipping_required` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_variant`
--

INSERT INTO `sylius_product_variant` (`id`, `product_id`, `tax_category_id`, `shipping_category_id`, `code`, `created_at`, `updated_at`, `position`, `version`, `on_hold`, `on_hand`, `tracked`, `width`, `height`, `depth`, `weight`, `shipping_required`) VALUES
(1, 1, NULL, NULL, 'b7bf12f8-168b-3b93-b2ef-4c9e6416112e-variant-0', '2017-12-14 13:01:45', '2017-12-14 13:01:45', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(2, 1, NULL, NULL, 'b7bf12f8-168b-3b93-b2ef-4c9e6416112e-variant-1', '2017-12-14 13:01:45', '2017-12-14 13:01:45', 1, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(3, 1, NULL, NULL, 'b7bf12f8-168b-3b93-b2ef-4c9e6416112e-variant-2', '2017-12-14 13:01:45', '2017-12-14 13:01:45', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(4, 2, NULL, NULL, '05f76698-a755-3d92-9a77-3ffc9e92b908-variant-0', '2017-12-14 13:01:45', '2017-12-14 13:01:46', 0, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(5, 2, NULL, NULL, '05f76698-a755-3d92-9a77-3ffc9e92b908-variant-1', '2017-12-14 13:01:45', '2017-12-14 13:01:46', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(6, 2, NULL, NULL, '05f76698-a755-3d92-9a77-3ffc9e92b908-variant-2', '2017-12-14 13:01:45', '2017-12-14 13:01:46', 2, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(7, 3, NULL, NULL, '1dc99f3e-7d49-3c3a-8f31-6c8dc81b7aa8-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(8, 3, NULL, NULL, '1dc99f3e-7d49-3c3a-8f31-6c8dc81b7aa8-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(9, 3, NULL, NULL, '1dc99f3e-7d49-3c3a-8f31-6c8dc81b7aa8-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(10, 4, NULL, NULL, 'f44ac5c3-7145-3205-8696-0840ae28eba4-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(11, 4, NULL, NULL, 'f44ac5c3-7145-3205-8696-0840ae28eba4-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(12, 4, NULL, NULL, 'f44ac5c3-7145-3205-8696-0840ae28eba4-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(13, 5, NULL, NULL, 'bb858eb4-ff07-37e9-ac6d-b9c9cb44e62f-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(14, 5, NULL, NULL, 'bb858eb4-ff07-37e9-ac6d-b9c9cb44e62f-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(15, 5, NULL, NULL, 'bb858eb4-ff07-37e9-ac6d-b9c9cb44e62f-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(16, 6, NULL, NULL, '599200ff-9083-39be-99fe-3cb4d04c3bf6-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(17, 6, NULL, NULL, '599200ff-9083-39be-99fe-3cb4d04c3bf6-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(18, 6, NULL, NULL, '599200ff-9083-39be-99fe-3cb4d04c3bf6-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(19, 7, NULL, NULL, 'da3c65e1-0c06-3299-aafa-5a6578e01ab8-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(20, 7, NULL, NULL, 'da3c65e1-0c06-3299-aafa-5a6578e01ab8-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(21, 7, NULL, NULL, 'da3c65e1-0c06-3299-aafa-5a6578e01ab8-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(22, 8, NULL, NULL, '3310fdc0-8b87-3ef4-ab61-9d443cded614-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(23, 8, NULL, NULL, '3310fdc0-8b87-3ef4-ab61-9d443cded614-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(24, 8, NULL, NULL, '3310fdc0-8b87-3ef4-ab61-9d443cded614-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(25, 9, NULL, NULL, '385632d6-2c84-3d7a-bf4d-8c888920f890-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(26, 9, NULL, NULL, '385632d6-2c84-3d7a-bf4d-8c888920f890-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(27, 9, NULL, NULL, '385632d6-2c84-3d7a-bf4d-8c888920f890-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(28, 10, NULL, NULL, 'd34da84b-5d1f-3b3d-8b91-6ba24923e4cc-variant-0', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(29, 10, NULL, NULL, 'd34da84b-5d1f-3b3d-8b91-6ba24923e4cc-variant-1', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 1, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(30, 10, NULL, NULL, 'd34da84b-5d1f-3b3d-8b91-6ba24923e4cc-variant-2', '2017-12-14 13:01:46', '2017-12-14 13:01:46', 2, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(31, 11, NULL, NULL, '4afc6a19-cd9f-3e24-8e71-7ee97e8f1295-variant-0', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 0, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(32, 11, NULL, NULL, '4afc6a19-cd9f-3e24-8e71-7ee97e8f1295-variant-1', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 1, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(33, 11, NULL, NULL, '4afc6a19-cd9f-3e24-8e71-7ee97e8f1295-variant-2', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(34, 12, NULL, NULL, '79d4806c-4a36-3709-aafe-9fe7d0e95855-variant-0', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(35, 12, NULL, NULL, '79d4806c-4a36-3709-aafe-9fe7d0e95855-variant-1', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 1, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(36, 12, NULL, NULL, '79d4806c-4a36-3709-aafe-9fe7d0e95855-variant-2', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(37, 13, NULL, NULL, '39364317-8713-397b-ba20-b124bb5b4fa3-variant-0', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 0, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(38, 13, NULL, NULL, '39364317-8713-397b-ba20-b124bb5b4fa3-variant-1', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(39, 13, NULL, NULL, '39364317-8713-397b-ba20-b124bb5b4fa3-variant-2', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 2, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(40, 14, NULL, NULL, '703f8b3c-1128-3020-b904-cda3748f3bb9-variant-0', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 0, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(41, 14, NULL, NULL, '703f8b3c-1128-3020-b904-cda3748f3bb9-variant-1', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(42, 14, NULL, NULL, '703f8b3c-1128-3020-b904-cda3748f3bb9-variant-2', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(43, 15, NULL, NULL, 'dea4482f-32d7-3c60-b2b4-033ee1e95c10-variant-0', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(44, 15, NULL, NULL, 'dea4482f-32d7-3c60-b2b4-033ee1e95c10-variant-1', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(45, 15, NULL, NULL, 'dea4482f-32d7-3c60-b2b4-033ee1e95c10-variant-2', '2017-12-14 13:01:48', '2017-12-14 13:01:48', 2, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(46, 16, NULL, NULL, '41fe8834-12a8-3a19-857c-186d29afaa64-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(47, 16, NULL, NULL, '41fe8834-12a8-3a19-857c-186d29afaa64-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(48, 16, NULL, NULL, '41fe8834-12a8-3a19-857c-186d29afaa64-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(49, 17, NULL, NULL, '4053b20e-f4c2-3822-bf5a-3b1edcf75a58-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(50, 17, NULL, NULL, '4053b20e-f4c2-3822-bf5a-3b1edcf75a58-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(51, 17, NULL, NULL, '4053b20e-f4c2-3822-bf5a-3b1edcf75a58-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(52, 18, NULL, NULL, 'b59c2842-6179-3a02-95da-3bfcfae08433-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(53, 18, NULL, NULL, 'b59c2842-6179-3a02-95da-3bfcfae08433-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(54, 18, NULL, NULL, 'b59c2842-6179-3a02-95da-3bfcfae08433-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(55, 19, NULL, NULL, 'b32cfd7b-efb9-3dc4-a017-65bb9bd6e774-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(56, 19, NULL, NULL, 'b32cfd7b-efb9-3dc4-a017-65bb9bd6e774-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(57, 19, NULL, NULL, 'b32cfd7b-efb9-3dc4-a017-65bb9bd6e774-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(58, 20, NULL, NULL, 'c1b1a3c4-1cca-3c48-b116-4ce27e08ed46-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(59, 20, NULL, NULL, 'c1b1a3c4-1cca-3c48-b116-4ce27e08ed46-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(60, 20, NULL, NULL, 'c1b1a3c4-1cca-3c48-b116-4ce27e08ed46-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(61, 21, NULL, NULL, '79ca790b-8e64-35aa-9980-d1856b501817-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(62, 21, NULL, NULL, '79ca790b-8e64-35aa-9980-d1856b501817-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(63, 21, NULL, NULL, '79ca790b-8e64-35aa-9980-d1856b501817-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(64, 22, NULL, NULL, 'e91407d9-21a3-3ab2-bd17-5b71c2de0412-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(65, 22, NULL, NULL, 'e91407d9-21a3-3ab2-bd17-5b71c2de0412-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(66, 22, NULL, NULL, 'e91407d9-21a3-3ab2-bd17-5b71c2de0412-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:50', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(67, 23, NULL, NULL, '2406386d-7f78-3bbf-87f9-22caca9b3f96-variant-0', '2017-12-14 13:01:50', '2017-12-14 13:01:51', 0, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(68, 23, NULL, NULL, '2406386d-7f78-3bbf-87f9-22caca9b3f96-variant-1', '2017-12-14 13:01:50', '2017-12-14 13:01:51', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(69, 23, NULL, NULL, '2406386d-7f78-3bbf-87f9-22caca9b3f96-variant-2', '2017-12-14 13:01:50', '2017-12-14 13:01:51', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(70, 24, NULL, NULL, '90b2356c-f761-39ff-a126-40504b5e9381-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(71, 24, NULL, NULL, '90b2356c-f761-39ff-a126-40504b5e9381-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(72, 24, NULL, NULL, '90b2356c-f761-39ff-a126-40504b5e9381-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(73, 25, NULL, NULL, 'cb525843-29d8-33b8-a317-5e1deb4137da-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(74, 25, NULL, NULL, 'cb525843-29d8-33b8-a317-5e1deb4137da-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(75, 25, NULL, NULL, 'cb525843-29d8-33b8-a317-5e1deb4137da-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(76, 26, NULL, NULL, '8dc42747-5bb4-3993-b057-7068e2ceed8d-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(77, 26, NULL, NULL, '8dc42747-5bb4-3993-b057-7068e2ceed8d-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(78, 26, NULL, NULL, '8dc42747-5bb4-3993-b057-7068e2ceed8d-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(79, 27, NULL, NULL, '0280bc4f-bed2-3298-9395-824078514578-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(80, 27, NULL, NULL, '0280bc4f-bed2-3298-9395-824078514578-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(81, 27, NULL, NULL, '0280bc4f-bed2-3298-9395-824078514578-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(82, 28, NULL, NULL, '53f33603-3cb2-34d8-af3b-278d914b4438-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(83, 28, NULL, NULL, '53f33603-3cb2-34d8-af3b-278d914b4438-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(84, 28, NULL, NULL, '53f33603-3cb2-34d8-af3b-278d914b4438-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(85, 29, NULL, NULL, '09d9b5fc-8d7f-357a-9376-e4fac8f97f3a-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(86, 29, NULL, NULL, '09d9b5fc-8d7f-357a-9376-e4fac8f97f3a-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(87, 29, NULL, NULL, '09d9b5fc-8d7f-357a-9376-e4fac8f97f3a-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(88, 30, NULL, NULL, '242b46af-bb8c-32e6-ba2c-188d22e6bccb-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(89, 30, NULL, NULL, '242b46af-bb8c-32e6-ba2c-188d22e6bccb-variant-1', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(90, 30, NULL, NULL, '242b46af-bb8c-32e6-ba2c-188d22e6bccb-variant-2', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(91, 31, NULL, NULL, '831bc990-0995-328a-9170-53caac8acd94-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(92, 32, NULL, NULL, '018f35c6-7103-36b5-8acb-55b7e63fc371-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(93, 33, NULL, NULL, 'e65c8f6f-c063-36c8-881a-613fae82ca23-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(94, 34, NULL, NULL, 'cddb9029-6e32-34fe-88c0-cc23739e2245-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:51', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(95, 35, NULL, NULL, 'de01e1ac-ca88-3f8c-b722-45768c6e7587-variant-0', '2017-12-14 13:01:51', '2017-12-14 13:01:52', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(96, 36, NULL, NULL, 'eb259fd6-70d0-31dc-8d64-a37228145d00-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(97, 37, NULL, NULL, 'a02f3822-2ed7-34de-ba17-d0ccf51a59db-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(98, 38, NULL, NULL, '70199856-090d-38ff-9a5d-3cef39a7bbfa-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(99, 39, NULL, NULL, 'aa09c18e-ab96-3841-bcfa-302479b340ef-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(100, 40, NULL, NULL, 'cacedbd2-89d2-37ab-9a7f-0dedc534d88e-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(101, 41, NULL, NULL, '5c7c3ac6-b353-352d-80e5-a3b570bb9651-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(102, 42, NULL, NULL, 'ffaff859-83f6-3d40-8056-14c6f4f62f49-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(103, 43, NULL, NULL, '7ed809bc-f7a4-309a-8498-e0afc47ea9e2-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(104, 44, NULL, NULL, '0ade2fbd-775c-3fb9-8134-310f8856730f-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(105, 45, NULL, NULL, 'a607eb13-6696-3e2d-b562-7d05601e6323-variant-0', '2017-12-14 13:01:52', '2017-12-14 13:01:52', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(106, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(107, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(108, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(109, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(110, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(111, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(112, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(113, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(114, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(115, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(116, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(117, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(118, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(119, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(120, 46, NULL, NULL, '27d5408c-e8b8-340c-b91e-8e06a934b54b-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(121, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(122, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(123, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(124, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(125, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(126, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(127, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(128, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(129, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(130, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(131, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(132, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(133, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(134, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(135, 47, NULL, NULL, '97163a4a-a37e-35bf-a8bb-9275d059348d-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(136, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(137, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(138, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(139, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(140, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(141, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(142, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(143, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(144, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(145, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(146, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(147, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(148, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(149, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(150, 48, NULL, NULL, 'e0390bfe-21b6-3735-8ae3-ea24ef217bc4-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(151, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(152, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(153, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(154, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(155, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(156, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(157, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(158, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(159, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(160, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(161, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(162, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(163, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(164, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(165, 49, NULL, NULL, '0aa558ec-0a67-3de9-9aea-de7ddeb2c742-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(166, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(167, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(168, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(169, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(170, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(171, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(172, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(173, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(174, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(175, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(176, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(177, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(178, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(179, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(180, 50, NULL, NULL, 'b67fad40-dbb5-3c68-9b03-7fd5384ce5c6-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(181, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(182, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(183, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(184, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(185, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(186, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(187, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(188, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(189, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(190, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(191, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(192, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(193, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(194, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(195, 51, NULL, NULL, '85c4d821-f1e8-3e39-aa52-d6d87ee8bb76-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(196, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(197, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(198, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(199, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(200, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(201, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(202, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(203, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(204, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(205, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(206, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(207, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(208, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(209, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(210, 52, NULL, NULL, '6241f390-7f02-38c4-a87c-fc5e047b8fcb-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(211, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(212, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 1, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(213, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 2, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(214, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 3, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(215, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 4, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(216, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 5, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(217, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 6, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(218, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 7, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(219, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 8, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(220, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 9, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(221, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 10, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(222, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 11, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(223, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 12, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(224, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 13, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(225, 53, NULL, NULL, 'a1e6f4e6-fa6c-37d0-8719-ec0c1a27c495-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:53', 14, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(226, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-0', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 0, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(227, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-1', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 1, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(228, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-2', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 2, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(229, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-3', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 3, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(230, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-4', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 4, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(231, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-5', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 5, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(232, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-6', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 6, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(233, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-7', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 7, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(234, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-8', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 8, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(235, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-9', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 9, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(236, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-10', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 10, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(237, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-11', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 11, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(238, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-12', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 12, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(239, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-13', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 13, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(240, 54, NULL, NULL, '34379f85-71d3-3530-9508-cfcf63d658cd-variant-14', '2017-12-14 13:01:53', '2017-12-14 13:01:54', 14, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(241, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-0', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(242, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-1', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 1, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(243, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-2', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(244, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-3', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 3, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(245, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-4', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 4, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(246, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-5', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 5, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(247, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-6', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 6, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(248, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-7', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 7, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(249, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-8', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 8, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(250, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-9', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 9, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(251, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-10', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 10, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(252, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-11', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 11, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(253, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-12', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 12, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(254, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-13', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 13, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(255, 55, NULL, NULL, 'a8a68e0b-fc72-3fec-9a32-a49365dd664b-variant-14', '2017-12-14 13:01:54', '2017-12-14 13:01:54', 14, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(256, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-0', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 0, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(257, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-1', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 1, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(258, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-2', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(259, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-3', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 3, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(260, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-4', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 4, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(261, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-5', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 5, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(262, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-6', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 6, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(263, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-7', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 7, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(264, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-8', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 8, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(265, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-9', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 9, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(266, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-10', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 10, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(267, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-11', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 11, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(268, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-12', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 12, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(269, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-13', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 13, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(270, 56, NULL, NULL, 'a0ddcab5-5c6a-343a-aca3-51543ffd1f3a-variant-14', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 14, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(271, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-0', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 0, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(272, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-1', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 1, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(273, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-2', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(274, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-3', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 3, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(275, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-4', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 4, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(276, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-5', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 5, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(277, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-6', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 6, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(278, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-7', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 7, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(279, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-8', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 8, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(280, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-9', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 9, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(281, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-10', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 10, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(282, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-11', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 11, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(283, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-12', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 12, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(284, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-13', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 13, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(285, 57, NULL, NULL, '3b995fc7-dc77-35d6-9f7e-c12adf184846-variant-14', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 14, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(286, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-0', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(287, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-1', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(288, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-2', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 2, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(289, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-3', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 3, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(290, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-4', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 4, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(291, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-5', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 5, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(292, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-6', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 6, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(293, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-7', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 7, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(294, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-8', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 8, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(295, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-9', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 9, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(296, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-10', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 10, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(297, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-11', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 11, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(298, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-12', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 12, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(299, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-13', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 13, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(300, 58, NULL, NULL, 'b477eae4-a925-35d1-ae65-bff0a24aec25-variant-14', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 14, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(301, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-0', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 0, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(302, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-1', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 1, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(303, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-2', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 2, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(304, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-3', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 3, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(305, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-4', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 4, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(306, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-5', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 5, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(307, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-6', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 6, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(308, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-7', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 7, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(309, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-8', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 8, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(310, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-9', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 9, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(311, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-10', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 10, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(312, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-11', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 11, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1);
INSERT INTO `sylius_product_variant` (`id`, `product_id`, `tax_category_id`, `shipping_category_id`, `code`, `created_at`, `updated_at`, `position`, `version`, `on_hold`, `on_hand`, `tracked`, `width`, `height`, `depth`, `weight`, `shipping_required`) VALUES
(313, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-12', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 12, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(314, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-13', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 13, 1, 0, 7, 0, NULL, NULL, NULL, NULL, 1),
(315, 59, NULL, NULL, 'ded852a4-b0c4-3d47-a129-76540a9865db-variant-14', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 14, 1, 0, 9, 0, NULL, NULL, NULL, NULL, 1),
(316, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-0', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 0, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(317, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-1', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 1, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(318, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-2', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 2, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(319, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-3', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 3, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(320, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-4', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 4, 1, 0, 4, 0, NULL, NULL, NULL, NULL, 1),
(321, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-5', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 5, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(322, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-6', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 6, 1, 0, 6, 0, NULL, NULL, NULL, NULL, 1),
(323, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-7', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 7, 1, 0, 5, 0, NULL, NULL, NULL, NULL, 1),
(324, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-8', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 8, 1, 0, 1, 0, NULL, NULL, NULL, NULL, 1),
(325, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-9', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 9, 1, 0, 3, 0, NULL, NULL, NULL, NULL, 1),
(326, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-10', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 10, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(327, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-11', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 11, 1, 0, 8, 0, NULL, NULL, NULL, NULL, 1),
(328, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-12', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 12, 1, 0, 2, 0, NULL, NULL, NULL, NULL, 1),
(329, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-13', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 13, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1),
(330, 60, NULL, NULL, 'af69110a-a33c-3be9-92ee-b3a66ed43133-variant-14', '2017-12-14 13:01:55', '2017-12-14 13:01:55', 14, 1, 0, 0, 0, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_variant_option_value`
--

CREATE TABLE `sylius_product_variant_option_value` (
  `variant_id` int(11) NOT NULL,
  `option_value_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_variant_option_value`
--

INSERT INTO `sylius_product_variant_option_value` (`variant_id`, `option_value_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 2),
(6, 3),
(7, 1),
(8, 2),
(9, 3),
(10, 1),
(11, 2),
(12, 3),
(13, 1),
(14, 2),
(15, 3),
(16, 1),
(17, 2),
(18, 3),
(19, 1),
(20, 2),
(21, 3),
(22, 1),
(23, 2),
(24, 3),
(25, 1),
(26, 2),
(27, 3),
(28, 1),
(29, 2),
(30, 3),
(31, 1),
(32, 2),
(33, 3),
(34, 1),
(35, 2),
(36, 3),
(37, 1),
(38, 2),
(39, 3),
(40, 1),
(41, 2),
(42, 3),
(43, 1),
(44, 2),
(45, 3),
(46, 4),
(47, 5),
(48, 6),
(49, 4),
(50, 5),
(51, 6),
(52, 4),
(53, 5),
(54, 6),
(55, 4),
(56, 5),
(57, 6),
(58, 4),
(59, 5),
(60, 6),
(61, 4),
(62, 5),
(63, 6),
(64, 4),
(65, 5),
(66, 6),
(67, 4),
(68, 5),
(69, 6),
(70, 4),
(71, 5),
(72, 6),
(73, 4),
(74, 5),
(75, 6),
(76, 4),
(77, 5),
(78, 6),
(79, 4),
(80, 5),
(81, 6),
(82, 4),
(83, 5),
(84, 6),
(85, 4),
(86, 5),
(87, 6),
(88, 4),
(89, 5),
(90, 6),
(106, 7),
(106, 10),
(107, 7),
(107, 11),
(108, 7),
(108, 12),
(109, 7),
(109, 13),
(110, 7),
(110, 14),
(111, 8),
(111, 10),
(112, 8),
(112, 11),
(113, 8),
(113, 12),
(114, 8),
(114, 13),
(115, 8),
(115, 14),
(116, 9),
(116, 10),
(117, 9),
(117, 11),
(118, 9),
(118, 12),
(119, 9),
(119, 13),
(120, 9),
(120, 14),
(121, 7),
(121, 10),
(122, 7),
(122, 11),
(123, 7),
(123, 12),
(124, 7),
(124, 13),
(125, 7),
(125, 14),
(126, 8),
(126, 10),
(127, 8),
(127, 11),
(128, 8),
(128, 12),
(129, 8),
(129, 13),
(130, 8),
(130, 14),
(131, 9),
(131, 10),
(132, 9),
(132, 11),
(133, 9),
(133, 12),
(134, 9),
(134, 13),
(135, 9),
(135, 14),
(136, 7),
(136, 10),
(137, 7),
(137, 11),
(138, 7),
(138, 12),
(139, 7),
(139, 13),
(140, 7),
(140, 14),
(141, 8),
(141, 10),
(142, 8),
(142, 11),
(143, 8),
(143, 12),
(144, 8),
(144, 13),
(145, 8),
(145, 14),
(146, 9),
(146, 10),
(147, 9),
(147, 11),
(148, 9),
(148, 12),
(149, 9),
(149, 13),
(150, 9),
(150, 14),
(151, 7),
(151, 10),
(152, 7),
(152, 11),
(153, 7),
(153, 12),
(154, 7),
(154, 13),
(155, 7),
(155, 14),
(156, 8),
(156, 10),
(157, 8),
(157, 11),
(158, 8),
(158, 12),
(159, 8),
(159, 13),
(160, 8),
(160, 14),
(161, 9),
(161, 10),
(162, 9),
(162, 11),
(163, 9),
(163, 12),
(164, 9),
(164, 13),
(165, 9),
(165, 14),
(166, 7),
(166, 10),
(167, 7),
(167, 11),
(168, 7),
(168, 12),
(169, 7),
(169, 13),
(170, 7),
(170, 14),
(171, 8),
(171, 10),
(172, 8),
(172, 11),
(173, 8),
(173, 12),
(174, 8),
(174, 13),
(175, 8),
(175, 14),
(176, 9),
(176, 10),
(177, 9),
(177, 11),
(178, 9),
(178, 12),
(179, 9),
(179, 13),
(180, 9),
(180, 14),
(181, 7),
(181, 10),
(182, 7),
(182, 11),
(183, 7),
(183, 12),
(184, 7),
(184, 13),
(185, 7),
(185, 14),
(186, 8),
(186, 10),
(187, 8),
(187, 11),
(188, 8),
(188, 12),
(189, 8),
(189, 13),
(190, 8),
(190, 14),
(191, 9),
(191, 10),
(192, 9),
(192, 11),
(193, 9),
(193, 12),
(194, 9),
(194, 13),
(195, 9),
(195, 14),
(196, 7),
(196, 10),
(197, 7),
(197, 11),
(198, 7),
(198, 12),
(199, 7),
(199, 13),
(200, 7),
(200, 14),
(201, 8),
(201, 10),
(202, 8),
(202, 11),
(203, 8),
(203, 12),
(204, 8),
(204, 13),
(205, 8),
(205, 14),
(206, 9),
(206, 10),
(207, 9),
(207, 11),
(208, 9),
(208, 12),
(209, 9),
(209, 13),
(210, 9),
(210, 14),
(211, 7),
(211, 10),
(212, 7),
(212, 11),
(213, 7),
(213, 12),
(214, 7),
(214, 13),
(215, 7),
(215, 14),
(216, 8),
(216, 10),
(217, 8),
(217, 11),
(218, 8),
(218, 12),
(219, 8),
(219, 13),
(220, 8),
(220, 14),
(221, 9),
(221, 10),
(222, 9),
(222, 11),
(223, 9),
(223, 12),
(224, 9),
(224, 13),
(225, 9),
(225, 14),
(226, 7),
(226, 10),
(227, 7),
(227, 11),
(228, 7),
(228, 12),
(229, 7),
(229, 13),
(230, 7),
(230, 14),
(231, 8),
(231, 10),
(232, 8),
(232, 11),
(233, 8),
(233, 12),
(234, 8),
(234, 13),
(235, 8),
(235, 14),
(236, 9),
(236, 10),
(237, 9),
(237, 11),
(238, 9),
(238, 12),
(239, 9),
(239, 13),
(240, 9),
(240, 14),
(241, 7),
(241, 10),
(242, 7),
(242, 11),
(243, 7),
(243, 12),
(244, 7),
(244, 13),
(245, 7),
(245, 14),
(246, 8),
(246, 10),
(247, 8),
(247, 11),
(248, 8),
(248, 12),
(249, 8),
(249, 13),
(250, 8),
(250, 14),
(251, 9),
(251, 10),
(252, 9),
(252, 11),
(253, 9),
(253, 12),
(254, 9),
(254, 13),
(255, 9),
(255, 14),
(256, 7),
(256, 10),
(257, 7),
(257, 11),
(258, 7),
(258, 12),
(259, 7),
(259, 13),
(260, 7),
(260, 14),
(261, 8),
(261, 10),
(262, 8),
(262, 11),
(263, 8),
(263, 12),
(264, 8),
(264, 13),
(265, 8),
(265, 14),
(266, 9),
(266, 10),
(267, 9),
(267, 11),
(268, 9),
(268, 12),
(269, 9),
(269, 13),
(270, 9),
(270, 14),
(271, 7),
(271, 10),
(272, 7),
(272, 11),
(273, 7),
(273, 12),
(274, 7),
(274, 13),
(275, 7),
(275, 14),
(276, 8),
(276, 10),
(277, 8),
(277, 11),
(278, 8),
(278, 12),
(279, 8),
(279, 13),
(280, 8),
(280, 14),
(281, 9),
(281, 10),
(282, 9),
(282, 11),
(283, 9),
(283, 12),
(284, 9),
(284, 13),
(285, 9),
(285, 14),
(286, 7),
(286, 10),
(287, 7),
(287, 11),
(288, 7),
(288, 12),
(289, 7),
(289, 13),
(290, 7),
(290, 14),
(291, 8),
(291, 10),
(292, 8),
(292, 11),
(293, 8),
(293, 12),
(294, 8),
(294, 13),
(295, 8),
(295, 14),
(296, 9),
(296, 10),
(297, 9),
(297, 11),
(298, 9),
(298, 12),
(299, 9),
(299, 13),
(300, 9),
(300, 14),
(301, 7),
(301, 10),
(302, 7),
(302, 11),
(303, 7),
(303, 12),
(304, 7),
(304, 13),
(305, 7),
(305, 14),
(306, 8),
(306, 10),
(307, 8),
(307, 11),
(308, 8),
(308, 12),
(309, 8),
(309, 13),
(310, 8),
(310, 14),
(311, 9),
(311, 10),
(312, 9),
(312, 11),
(313, 9),
(313, 12),
(314, 9),
(314, 13),
(315, 9),
(315, 14),
(316, 7),
(316, 10),
(317, 7),
(317, 11),
(318, 7),
(318, 12),
(319, 7),
(319, 13),
(320, 7),
(320, 14),
(321, 8),
(321, 10),
(322, 8),
(322, 11),
(323, 8),
(323, 12),
(324, 8),
(324, 13),
(325, 8),
(325, 14),
(326, 9),
(326, 10),
(327, 9),
(327, 11),
(328, 9),
(328, 12),
(329, 9),
(329, 13),
(330, 9),
(330, 14);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_product_variant_translation`
--

CREATE TABLE `sylius_product_variant_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_product_variant_translation`
--

INSERT INTO `sylius_product_variant_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
(1, 1, 'earum', 'en_US'),
(2, 2, 'delectus', 'en_US'),
(3, 3, 'architecto', 'en_US'),
(4, 4, 'est', 'en_US'),
(5, 5, 'odio', 'en_US'),
(6, 6, 'voluptas', 'en_US'),
(7, 7, 'esse', 'en_US'),
(8, 8, 'in', 'en_US'),
(9, 9, 'hic', 'en_US'),
(10, 10, 'earum', 'en_US'),
(11, 11, 'porro', 'en_US'),
(12, 12, 'earum', 'en_US'),
(13, 13, 'impedit', 'en_US'),
(14, 14, 'non', 'en_US'),
(15, 15, 'ut', 'en_US'),
(16, 16, 'iste', 'en_US'),
(17, 17, 'iste', 'en_US'),
(18, 18, 'porro', 'en_US'),
(19, 19, 'assumenda', 'en_US'),
(20, 20, 'possimus', 'en_US'),
(21, 21, 'voluptas', 'en_US'),
(22, 22, 'doloribus', 'en_US'),
(23, 23, 'dolores', 'en_US'),
(24, 24, 'ullam', 'en_US'),
(25, 25, 'rem', 'en_US'),
(26, 26, 'laborum', 'en_US'),
(27, 27, 'laborum', 'en_US'),
(28, 28, 'laborum', 'en_US'),
(29, 29, 'illo', 'en_US'),
(30, 30, 'id', 'en_US'),
(31, 31, 'quasi', 'en_US'),
(32, 32, 'est', 'en_US'),
(33, 33, 'velit', 'en_US'),
(34, 34, 'non', 'en_US'),
(35, 35, 'ea', 'en_US'),
(36, 36, 'est', 'en_US'),
(37, 37, 'nihil', 'en_US'),
(38, 38, 'possimus', 'en_US'),
(39, 39, 'voluptatem', 'en_US'),
(40, 40, 'deserunt', 'en_US'),
(41, 41, 'quod', 'en_US'),
(42, 42, 'repellat', 'en_US'),
(43, 43, 'quia', 'en_US'),
(44, 44, 'iste', 'en_US'),
(45, 45, 'et', 'en_US'),
(46, 46, 'quis', 'en_US'),
(47, 47, 'ab', 'en_US'),
(48, 48, 'sunt', 'en_US'),
(49, 49, 'impedit', 'en_US'),
(50, 50, 'autem', 'en_US'),
(51, 51, 'atque', 'en_US'),
(52, 52, 'qui', 'en_US'),
(53, 53, 'voluptas', 'en_US'),
(54, 54, 'eos', 'en_US'),
(55, 55, 'cumque', 'en_US'),
(56, 56, 'ea', 'en_US'),
(57, 57, 'similique', 'en_US'),
(58, 58, 'quia', 'en_US'),
(59, 59, 'quaerat', 'en_US'),
(60, 60, 'at', 'en_US'),
(61, 61, 'cum', 'en_US'),
(62, 62, 'maiores', 'en_US'),
(63, 63, 'dolorum', 'en_US'),
(64, 64, 'voluptates', 'en_US'),
(65, 65, 'porro', 'en_US'),
(66, 66, 'error', 'en_US'),
(67, 67, 'quia', 'en_US'),
(68, 68, 'labore', 'en_US'),
(69, 69, 'autem', 'en_US'),
(70, 70, 'occaecati', 'en_US'),
(71, 71, 'qui', 'en_US'),
(72, 72, 'dolorem', 'en_US'),
(73, 73, 'illum', 'en_US'),
(74, 74, 'rerum', 'en_US'),
(75, 75, 'corrupti', 'en_US'),
(76, 76, 'id', 'en_US'),
(77, 77, 'et', 'en_US'),
(78, 78, 'est', 'en_US'),
(79, 79, 'tempora', 'en_US'),
(80, 80, 'voluptas', 'en_US'),
(81, 81, 'sunt', 'en_US'),
(82, 82, 'unde', 'en_US'),
(83, 83, 'omnis', 'en_US'),
(84, 84, 'qui', 'en_US'),
(85, 85, 'aut', 'en_US'),
(86, 86, 'aliquid', 'en_US'),
(87, 87, 'laborum', 'en_US'),
(88, 88, 'temporibus', 'en_US'),
(89, 89, 'expedita', 'en_US'),
(90, 90, 'dolor', 'en_US'),
(91, 91, 'qui', 'en_US'),
(92, 92, 'nobis', 'en_US'),
(93, 93, 'assumenda', 'en_US'),
(94, 94, 'quibusdam', 'en_US'),
(95, 95, 'illum', 'en_US'),
(96, 96, 'a', 'en_US'),
(97, 97, 'tempora', 'en_US'),
(98, 98, 'optio', 'en_US'),
(99, 99, 'vitae', 'en_US'),
(100, 100, 'quas', 'en_US'),
(101, 101, 'quasi', 'en_US'),
(102, 102, 'voluptas', 'en_US'),
(103, 103, 'libero', 'en_US'),
(104, 104, 'fugit', 'en_US'),
(105, 105, 'fugit', 'en_US'),
(106, 106, 'quis', 'en_US'),
(107, 107, 'ut', 'en_US'),
(108, 108, 'odio', 'en_US'),
(109, 109, 'aut', 'en_US'),
(110, 110, 'numquam', 'en_US'),
(111, 111, 'placeat', 'en_US'),
(112, 112, 'enim', 'en_US'),
(113, 113, 'sed', 'en_US'),
(114, 114, 'qui', 'en_US'),
(115, 115, 'sequi', 'en_US'),
(116, 116, 'vero', 'en_US'),
(117, 117, 'labore', 'en_US'),
(118, 118, 'nemo', 'en_US'),
(119, 119, 'a', 'en_US'),
(120, 120, 'sequi', 'en_US'),
(121, 121, 'ut', 'en_US'),
(122, 122, 'aut', 'en_US'),
(123, 123, 'est', 'en_US'),
(124, 124, 'eaque', 'en_US'),
(125, 125, 'sint', 'en_US'),
(126, 126, 'debitis', 'en_US'),
(127, 127, 'sunt', 'en_US'),
(128, 128, 'consequatur', 'en_US'),
(129, 129, 'aut', 'en_US'),
(130, 130, 'necessitatibus', 'en_US'),
(131, 131, 'officiis', 'en_US'),
(132, 132, 'quo', 'en_US'),
(133, 133, 'culpa', 'en_US'),
(134, 134, 'aut', 'en_US'),
(135, 135, 'nobis', 'en_US'),
(136, 136, 'maxime', 'en_US'),
(137, 137, 'eligendi', 'en_US'),
(138, 138, 'possimus', 'en_US'),
(139, 139, 'tempore', 'en_US'),
(140, 140, 'eligendi', 'en_US'),
(141, 141, 'reprehenderit', 'en_US'),
(142, 142, 'commodi', 'en_US'),
(143, 143, 'placeat', 'en_US'),
(144, 144, 'laboriosam', 'en_US'),
(145, 145, 'deserunt', 'en_US'),
(146, 146, 'ut', 'en_US'),
(147, 147, 'quasi', 'en_US'),
(148, 148, 'voluptas', 'en_US'),
(149, 149, 'veritatis', 'en_US'),
(150, 150, 'ratione', 'en_US'),
(151, 151, 'rem', 'en_US'),
(152, 152, 'est', 'en_US'),
(153, 153, 'recusandae', 'en_US'),
(154, 154, 'ut', 'en_US'),
(155, 155, 'officia', 'en_US'),
(156, 156, 'neque', 'en_US'),
(157, 157, 'et', 'en_US'),
(158, 158, 'amet', 'en_US'),
(159, 159, 'quam', 'en_US'),
(160, 160, 'qui', 'en_US'),
(161, 161, 'est', 'en_US'),
(162, 162, 'reiciendis', 'en_US'),
(163, 163, 'natus', 'en_US'),
(164, 164, 'incidunt', 'en_US'),
(165, 165, 'neque', 'en_US'),
(166, 166, 'reprehenderit', 'en_US'),
(167, 167, 'dolorum', 'en_US'),
(168, 168, 'sapiente', 'en_US'),
(169, 169, 'dolores', 'en_US'),
(170, 170, 'quisquam', 'en_US'),
(171, 171, 'et', 'en_US'),
(172, 172, 'cupiditate', 'en_US'),
(173, 173, 'dolores', 'en_US'),
(174, 174, 'accusamus', 'en_US'),
(175, 175, 'mollitia', 'en_US'),
(176, 176, 'qui', 'en_US'),
(177, 177, 'veritatis', 'en_US'),
(178, 178, 'iste', 'en_US'),
(179, 179, 'iste', 'en_US'),
(180, 180, 'voluptatum', 'en_US'),
(181, 181, 'error', 'en_US'),
(182, 182, 'eos', 'en_US'),
(183, 183, 'et', 'en_US'),
(184, 184, 'mollitia', 'en_US'),
(185, 185, 'officia', 'en_US'),
(186, 186, 'porro', 'en_US'),
(187, 187, 'illo', 'en_US'),
(188, 188, 'facilis', 'en_US'),
(189, 189, 'voluptate', 'en_US'),
(190, 190, 'sed', 'en_US'),
(191, 191, 'dolores', 'en_US'),
(192, 192, 'ratione', 'en_US'),
(193, 193, 'eum', 'en_US'),
(194, 194, 'quo', 'en_US'),
(195, 195, 'est', 'en_US'),
(196, 196, 'minima', 'en_US'),
(197, 197, 'non', 'en_US'),
(198, 198, 'iusto', 'en_US'),
(199, 199, 'aliquid', 'en_US'),
(200, 200, 'et', 'en_US'),
(201, 201, 'error', 'en_US'),
(202, 202, 'aut', 'en_US'),
(203, 203, 'fuga', 'en_US'),
(204, 204, 'maiores', 'en_US'),
(205, 205, 'et', 'en_US'),
(206, 206, 'qui', 'en_US'),
(207, 207, 'recusandae', 'en_US'),
(208, 208, 'itaque', 'en_US'),
(209, 209, 'fugit', 'en_US'),
(210, 210, 'laudantium', 'en_US'),
(211, 211, 'optio', 'en_US'),
(212, 212, 'soluta', 'en_US'),
(213, 213, 'impedit', 'en_US'),
(214, 214, 'laboriosam', 'en_US'),
(215, 215, 'minus', 'en_US'),
(216, 216, 'sunt', 'en_US'),
(217, 217, 'hic', 'en_US'),
(218, 218, 'autem', 'en_US'),
(219, 219, 'est', 'en_US'),
(220, 220, 'aspernatur', 'en_US'),
(221, 221, 'quod', 'en_US'),
(222, 222, 'et', 'en_US'),
(223, 223, 'non', 'en_US'),
(224, 224, 'et', 'en_US'),
(225, 225, 'aut', 'en_US'),
(226, 226, 'nesciunt', 'en_US'),
(227, 227, 'atque', 'en_US'),
(228, 228, 'et', 'en_US'),
(229, 229, 'maxime', 'en_US'),
(230, 230, 'asperiores', 'en_US'),
(231, 231, 'cupiditate', 'en_US'),
(232, 232, 'porro', 'en_US'),
(233, 233, 'cumque', 'en_US'),
(234, 234, 'maxime', 'en_US'),
(235, 235, 'ad', 'en_US'),
(236, 236, 'voluptatum', 'en_US'),
(237, 237, 'sunt', 'en_US'),
(238, 238, 'aspernatur', 'en_US'),
(239, 239, 'doloribus', 'en_US'),
(240, 240, 'ut', 'en_US'),
(241, 241, 'voluptatum', 'en_US'),
(242, 242, 'repudiandae', 'en_US'),
(243, 243, 'dolore', 'en_US'),
(244, 244, 'ratione', 'en_US'),
(245, 245, 'consequatur', 'en_US'),
(246, 246, 'dolor', 'en_US'),
(247, 247, 'excepturi', 'en_US'),
(248, 248, 'sequi', 'en_US'),
(249, 249, 'quidem', 'en_US'),
(250, 250, 'cum', 'en_US'),
(251, 251, 'omnis', 'en_US'),
(252, 252, 'quam', 'en_US'),
(253, 253, 'amet', 'en_US'),
(254, 254, 'est', 'en_US'),
(255, 255, 'adipisci', 'en_US'),
(256, 256, 'aliquid', 'en_US'),
(257, 257, 'vel', 'en_US'),
(258, 258, 'deserunt', 'en_US'),
(259, 259, 'fugiat', 'en_US'),
(260, 260, 'et', 'en_US'),
(261, 261, 'nesciunt', 'en_US'),
(262, 262, 'id', 'en_US'),
(263, 263, 'rerum', 'en_US'),
(264, 264, 'alias', 'en_US'),
(265, 265, 'veritatis', 'en_US'),
(266, 266, 'autem', 'en_US'),
(267, 267, 'at', 'en_US'),
(268, 268, 'hic', 'en_US'),
(269, 269, 'culpa', 'en_US'),
(270, 270, 'voluptatem', 'en_US'),
(271, 271, 'et', 'en_US'),
(272, 272, 'iure', 'en_US'),
(273, 273, 'in', 'en_US'),
(274, 274, 'minima', 'en_US'),
(275, 275, 'illum', 'en_US'),
(276, 276, 'quia', 'en_US'),
(277, 277, 'dolores', 'en_US'),
(278, 278, 'error', 'en_US'),
(279, 279, 'omnis', 'en_US'),
(280, 280, 'quia', 'en_US'),
(281, 281, 'et', 'en_US'),
(282, 282, 'voluptate', 'en_US'),
(283, 283, 'pariatur', 'en_US'),
(284, 284, 'minus', 'en_US'),
(285, 285, 'quia', 'en_US'),
(286, 286, 'amet', 'en_US'),
(287, 287, 'expedita', 'en_US'),
(288, 288, 'qui', 'en_US'),
(289, 289, 'aut', 'en_US'),
(290, 290, 'reprehenderit', 'en_US'),
(291, 291, 'qui', 'en_US'),
(292, 292, 'autem', 'en_US'),
(293, 293, 'voluptas', 'en_US'),
(294, 294, 'temporibus', 'en_US'),
(295, 295, 'ea', 'en_US'),
(296, 296, 'aliquam', 'en_US'),
(297, 297, 'quibusdam', 'en_US'),
(298, 298, 'incidunt', 'en_US'),
(299, 299, 'maxime', 'en_US'),
(300, 300, 'voluptatibus', 'en_US'),
(301, 301, 'qui', 'en_US'),
(302, 302, 'eos', 'en_US'),
(303, 303, 'sequi', 'en_US'),
(304, 304, 'dolorum', 'en_US'),
(305, 305, 'optio', 'en_US'),
(306, 306, 'aut', 'en_US'),
(307, 307, 'nemo', 'en_US'),
(308, 308, 'qui', 'en_US'),
(309, 309, 'veniam', 'en_US'),
(310, 310, 'consectetur', 'en_US'),
(311, 311, 'velit', 'en_US'),
(312, 312, 'dolores', 'en_US'),
(313, 313, 'quos', 'en_US'),
(314, 314, 'voluptate', 'en_US'),
(315, 315, 'omnis', 'en_US'),
(316, 316, 'aperiam', 'en_US'),
(317, 317, 'modi', 'en_US'),
(318, 318, 'hic', 'en_US'),
(319, 319, 'atque', 'en_US'),
(320, 320, 'nostrum', 'en_US'),
(321, 321, 'sed', 'en_US'),
(322, 322, 'voluptas', 'en_US'),
(323, 323, 'consequatur', 'en_US'),
(324, 324, 'ea', 'en_US'),
(325, 325, 'autem', 'en_US'),
(326, 326, 'et', 'en_US'),
(327, 327, 'cupiditate', 'en_US'),
(328, 328, 'excepturi', 'en_US'),
(329, 329, 'vel', 'en_US'),
(330, 330, 'esse', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion`
--

CREATE TABLE `sylius_promotion` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `exclusive` tinyint(1) NOT NULL,
  `usage_limit` int(11) DEFAULT NULL,
  `used` int(11) NOT NULL,
  `coupon_based` tinyint(1) NOT NULL,
  `starts_at` datetime DEFAULT NULL,
  `ends_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_promotion`
--

INSERT INTO `sylius_promotion` (`id`, `code`, `name`, `description`, `priority`, `exclusive`, `usage_limit`, `used`, `coupon_based`, `starts_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(1, 'christmas', 'Christmas', 'Inventore molestiae repellendus ut amet rem et facilis.', 0, 1, NULL, 15, 0, NULL, NULL, '2017-12-14 13:01:44', '2017-12-14 13:02:04'),
(2, 'new_year', 'New Year', 'Inventore molestiae repellendus ut amet rem et facilis.', 2, 1, 10, 0, 0, '2017-12-07 13:01:44', '2017-12-21 13:01:44', '2017-12-14 13:01:44', '2017-12-14 13:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion_action`
--

CREATE TABLE `sylius_promotion_action` (
  `id` int(11) NOT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_promotion_action`
--

INSERT INTO `sylius_promotion_action` (`id`, `promotion_id`, `type`, `configuration`) VALUES
(1, 1, 'order_percentage_discount', 'a:1:{s:10:\"percentage\";d:0.25;}'),
(2, 2, 'order_fixed_discount', 'a:1:{s:6:\"US_WEB\";a:1:{s:6:\"amount\";d:1000;}}');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion_channels`
--

CREATE TABLE `sylius_promotion_channels` (
  `promotion_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_promotion_channels`
--

INSERT INTO `sylius_promotion_channels` (`promotion_id`, `channel_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion_coupon`
--

CREATE TABLE `sylius_promotion_coupon` (
  `id` int(11) NOT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usage_limit` int(11) DEFAULT NULL,
  `used` int(11) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `per_customer_usage_limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion_order`
--

CREATE TABLE `sylius_promotion_order` (
  `order_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_promotion_order`
--

INSERT INTO `sylius_promotion_order` (`order_id`, `promotion_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(10, 1),
(11, 1),
(13, 1),
(14, 1),
(16, 1),
(17, 1),
(18, 1),
(20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_promotion_rule`
--

CREATE TABLE `sylius_promotion_rule` (
  `id` int(11) NOT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_promotion_rule`
--

INSERT INTO `sylius_promotion_rule` (`id`, `promotion_id`, `type`, `configuration`) VALUES
(1, 1, 'cart_quantity', 'a:1:{s:5:\"count\";i:4;}'),
(2, 2, 'item_total', 'a:1:{s:6:\"US_WEB\";a:1:{s:6:\"amount\";d:10000;}}');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_province`
--

CREATE TABLE `sylius_province` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shipment`
--

CREATE TABLE `sylius_shipment` (
  `id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracking` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_shipment`
--

INSERT INTO `sylius_shipment` (`id`, `method_id`, `order_id`, `state`, `tracking`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'ready', NULL, '2017-12-14 13:02:01', '2017-12-14 13:02:02'),
(2, 2, 2, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(3, 1, 3, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(4, 2, 4, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(5, 1, 5, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(6, 1, 6, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(7, 1, 7, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(8, 1, 8, 'ready', NULL, '2017-12-14 13:02:03', '2017-12-14 13:02:03'),
(9, 1, 9, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(10, 2, 10, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(11, 2, 11, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(12, 3, 12, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(13, 1, 13, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(14, 2, 14, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(15, 2, 15, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(16, 1, 16, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(17, 1, 17, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(18, 3, 18, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(19, 2, 19, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04'),
(20, 3, 20, 'ready', NULL, '2017-12-14 13:02:04', '2017-12-14 13:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shipping_category`
--

CREATE TABLE `sylius_shipping_category` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shipping_method`
--

CREATE TABLE `sylius_shipping_method` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `zone_id` int(11) NOT NULL,
  `tax_category_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `category_requirement` int(11) NOT NULL,
  `calculator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `archived_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_shipping_method`
--

INSERT INTO `sylius_shipping_method` (`id`, `category_id`, `zone_id`, `tax_category_id`, `code`, `configuration`, `category_requirement`, `calculator`, `is_enabled`, `position`, `archived_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, NULL, 'ups', 'a:1:{s:6:\"US_WEB\";a:1:{s:6:\"amount\";i:8601;}}', 1, 'flat_rate', 1, 0, NULL, '2017-12-14 13:01:40', '2017-12-14 13:01:40'),
(2, NULL, 1, NULL, 'dhl_express', 'a:1:{s:6:\"US_WEB\";a:1:{s:6:\"amount\";i:4682;}}', 1, 'flat_rate', 1, 1, NULL, '2017-12-14 13:01:40', '2017-12-14 13:01:40'),
(3, NULL, 1, NULL, 'fedex', 'a:1:{s:6:\"US_WEB\";a:1:{s:6:\"amount\";i:1248;}}', 1, 'flat_rate', 1, 2, NULL, '2017-12-14 13:01:40', '2017-12-14 13:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shipping_method_channels`
--

CREATE TABLE `sylius_shipping_method_channels` (
  `shipping_method_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_shipping_method_channels`
--

INSERT INTO `sylius_shipping_method_channels` (`shipping_method_id`, `channel_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shipping_method_translation`
--

CREATE TABLE `sylius_shipping_method_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_shipping_method_translation`
--

INSERT INTO `sylius_shipping_method_translation` (`id`, `translatable_id`, `name`, `description`, `locale`) VALUES
(1, 1, 'UPS', 'Assumenda voluptatem ut vel officia.', 'en_US'),
(2, 2, 'DHL Express', 'Facere et sint aliquid ut recusandae eligendi optio.', 'en_US'),
(3, 3, 'FedEx', 'Et eaque distinctio delectus nobis quis et.', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_shop_user`
--

CREATE TABLE `sylius_shop_user` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `email_verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_shop_user`
--

INSERT INTO `sylius_shop_user` (`id`, `customer_id`, `username`, `username_canonical`, `enabled`, `salt`, `password`, `last_login`, `password_reset_token`, `password_requested_at`, `email_verification_token`, `verified_at`, `locked`, `expires_at`, `credentials_expire_at`, `roles`, `email`, `email_canonical`, `created_at`, `updated_at`) VALUES
(1, 1, 'shop@example.com', 'shop@example.com', 1, 'bx5yat9s4bkk84o4kgcgww4gg08kscs', 'YLU2aR9N9bDDaBwmtyXbyZyEb+gHWknS0LqDb6FmO44Z5eOMAdjWblznmD7ZlXDtx3PmBJ/GrBnxe1odbcS+Mw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(2, 2, 'epollich@ryan.com', 'epollich@ryan.com', 1, 'f2v4sjs2jpwsg4sogsk800kckko84kk', 'hrL9AnAkeYnTPXDPZ0qlgD6G9u2oNWstenPRteMQvi4AcEh3qWFVQipZ9rGkuPVWOCqrIV5zo/tihU469GW+WQ==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(3, 3, 'jayce73@littel.net', 'jayce73@littel.net', 1, 'np5hk6b9900cwgw8c00ko0c0wc8880k', 'WPrhqOgPL+iPmvPzfbhncn8iNTU1aXurXhkw1JNbcoro5u5lGmufGlkW3JArRnIvSvb+rGGNigKylclV+hoyrg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(4, 4, 'emmanuel.parisian@casper.com', 'emmanuel.parisian@casper.com', 1, 'eou0np1luq040sc0wk4ko0w4csccs4s', 'mqmE3jXv6jiZ6+bz5umOB3nx9XSB0nwXr5VU5QQnXa9Z+7OajHjzIHWRLRgdKf3CYpbn8U4lygHX0UIHQW5jcw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(5, 5, 'idubuque@kreiger.info', 'idubuque@kreiger.info', 1, '1ou46jc05dr4kwwcosssc8wwcc008sk', 'jizDARnsry9cI7KNncUc3ROydybN4CS6TPkpJ0s9gULfsxgcXhXSMXtWd/iYDXz4pFpJUTQiySh99AQYXkrEcw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(6, 6, 'alivia.cole@dickens.org', 'alivia.cole@dickens.org', 1, 'g1xw6tfsad4wko88g8skgwggogkg4k8', 'c8iA/fG6hyEBP0T4CfG8RsrP8lfcDlV05f0nYVX4tJvf1gpZYGWD+YM7FrjnEyE7A3xtqIfIGezQ3ThgYzVDpQ==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(7, 7, 'kailey25@yahoo.com', 'kailey25@yahoo.com', 1, '1u0itokgshogs488skk8kokk00c0g40', 'TI11+XeV2uS/mV7Ccvlg9jCcHSEojgKeBvXECHx+MTj04cnUv07rDxHFDCzhlmZrN0tScc+kV3cE4/0CJPS4Qg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(8, 8, 'jeanne.lesch@yahoo.com', 'jeanne.lesch@yahoo.com', 1, 'mnpjohojtw08o04oc08cwwccc4wogw8', 'bg3+CYppDxr0c/tILh3cQgL7S066mkchkIxxRgNRWhtsw1ZWt4Kr0Kj2sELXCnpfDa2Dc3A9zADEugEugS9D5A==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(9, 9, 'lockman.callie@gmail.com', 'lockman.callie@gmail.com', 1, '5gatqf1uyrggc4gkkcgckosg8o8o808', 'YaWZoT2d3xDjZ6OucWnZnGKynFR8FzeELrNNvDnbvYmOhOcxhFX8ava5O/YffPZgX3uy7H2MvsZxR3YAVDP1eg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(10, 10, 'walker41@gmail.com', 'walker41@gmail.com', 1, '2ra7vmg9uhusowc8skskwgg8o404ck8', 'PQrieslg+HuECBMUHfUveIpY6gewqKxl21hEcJTOcmqQupxqW9iQw+AWmsxnPMfDYZ1wTRt/oinsCjJzMxfTbA==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(11, 11, 'maggie.sauer@yahoo.com', 'maggie.sauer@yahoo.com', 1, 'mzk457wptxcwcw00o808sos88o8kg8k', '26G/Qs7EKDVHPETKO07vyfkBd9zepofHI4JLNHARiq3JXmNS+mWWmCzegQIbLcLk2kpzK+hr/WYJ/fVUvwJL5w==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:41', '2017-12-14 13:01:41'),
(12, 12, 'carmella36@johnston.biz', 'carmella36@johnston.biz', 1, 'eqxm45as7ps84wcsw4cgwsw408g84c0', 'uv8ehthC5w5Xasi6VPfynzd7xUAZMHGV5wECEIPgEZxsNv1Vvm1/2LWU+JxK6LzgY9xbSRKQ5Lg4lbcrbVH2fw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(13, 13, 'bhomenick@yahoo.com', 'bhomenick@yahoo.com', 1, '504h7nhwja0wc8g84g8ssoc0g4kg048', 'BOsUo2/MXgNSqNuj/ECnIFwPWCQrm6R7uHdHGfuxBGq/86KVZcYcgTLumTCHfqoynFj1nOx9kNo7udpF3kAypw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(14, 14, 'rwhite@bauch.info', 'rwhite@bauch.info', 1, 'qu7jq9bz7usk4ss00o8o448k48s4o48', '/mqWsNOVoNWZrS4IMQIr4Kk1gLutpv2wXC7iXgGH9O0i4vvVg2+hIYoTWawYhINjVbOtAMcG/CyazZg348xOIg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(15, 15, 'lucius10@towne.com', 'lucius10@towne.com', 1, '9fi7u4ptjm88088088g4wksscsck4c4', 'emxqCyNeLQ3TQ/OASexbllLnEw/TfBmc6DD6kLMK8hDvOSOFYSvbq3l9emzP3dxcAGRp/QVM67EZcdXJfFWVmQ==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(16, 16, 'marielle56@barton.net', 'marielle56@barton.net', 1, '1pjnsnoldsbo8g8s8oogs4ocgc0g0ks', 'QZv5+rc7iskhl9qxxk+VC9ROJQeoY6UYIMudGUMcAKksXyS+fn5Bls/iwZaXajCp0u0XD620KP+quC/p60sQ8A==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(17, 17, 'pmarks@yahoo.com', 'pmarks@yahoo.com', 1, 'r7okepqdrfkgsc8cgo08s8cswo8c8gg', 'GkJyvwdbyc0MNxYO16G/+KYVS5X+0zAk/bkqEixR5LgpWvBGv4/ajcQ91ClrR0tQWmJVa638O6YRPBe8yMHylw==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(18, 18, 'german01@ledner.com', 'german01@ledner.com', 1, 'ihnipcl43y80g0w08ocooosk0go4sco', 'RW8ULz1zpwLOLpPQGYx/LlrLWOEMqYNZ8KpYoOCdwsa5CaqoaNnsijgd468VLNLs+6VKdFcKmv6jkB1bcZrQJg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(19, 19, 'jayne.pfannerstill@dubuque.com', 'jayne.pfannerstill@dubuque.com', 1, 'm6r6xwph0wgcogk0ksc0808kks0s8s8', 'NEIKw0Ishf1n2XJXi8ikZYi/LofnefBjENa7m7kBJOcFhR8/dYDEMy+Goi47Z0AzRXtYW/jlk/hMTbritVsapA==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:42', '2017-12-14 13:01:42'),
(20, 20, 'yoconnell@wuckert.com', 'yoconnell@wuckert.com', 1, 'jzalqq6swc0okw8sc0cowcgw80w0ows', 't3JSBfZuwdl+81REaFmgg83a7UjXamZBLtoPjCvjtdiptyse9ksWbkttoz3s+osz6wq0DFPspUuQtdALIDe27w==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:43', '2017-12-14 13:01:43'),
(21, 21, 'nbergnaum@becker.biz', 'nbergnaum@becker.biz', 1, '2u6ef2itul2cgwkskoskckgwg4ks8oo', 'YirZOh+I9LQZMJZieCfwhlhiPeZOkoy9BU3/wBDD6ka9Ur4NbVLQttn/SCqJILhaWlvSzUIuP/X94wky/MgaQg==', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'a:1:{i:0;s:9:\"ROLE_USER\";}', NULL, NULL, '2017-12-14 13:01:43', '2017-12-14 13:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_taxon`
--

CREATE TABLE `sylius_taxon` (
  `id` int(11) NOT NULL,
  `tree_root` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tree_left` int(11) NOT NULL,
  `tree_right` int(11) NOT NULL,
  `tree_level` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_taxon`
--

INSERT INTO `sylius_taxon` (`id`, `tree_root`, `parent_id`, `code`, `tree_left`, `tree_right`, `tree_level`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'category', 1, 14, 0, 0, '2017-12-14 13:01:44', '2017-12-14 13:01:45'),
(2, 1, 1, 'mugs', 2, 3, 1, 0, '2017-12-14 13:01:44', '2017-12-14 13:01:45'),
(3, 1, 1, 'stickers', 4, 5, 1, 1, '2017-12-14 13:01:49', '2017-12-14 13:01:49'),
(4, 1, 1, 'books', 6, 7, 1, 2, '2017-12-14 13:01:51', '2017-12-14 13:01:51'),
(5, 1, 1, 't_shirts', 8, 13, 1, 3, '2017-12-14 13:01:53', '2017-12-14 13:01:53'),
(6, 1, 5, 'mens_t_shirts', 9, 10, 2, 0, '2017-12-14 13:01:53', '2017-12-14 13:01:53'),
(7, 1, 5, 'womens_t_shirts', 11, 12, 2, 1, '2017-12-14 13:01:53', '2017-12-14 13:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_taxon_image`
--

CREATE TABLE `sylius_taxon_image` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_taxon_translation`
--

CREATE TABLE `sylius_taxon_translation` (
  `id` int(11) NOT NULL,
  `translatable_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_taxon_translation`
--

INSERT INTO `sylius_taxon_translation` (`id`, `translatable_id`, `name`, `slug`, `description`, `locale`) VALUES
(1, 1, 'Category', 'category', 'Illum laudantium iure mollitia totam vero qui. Quia perspiciatis quia repudiandae aut. Laudantium perspiciatis dolorum veniam ut.', 'en_US'),
(2, 2, 'Mugs', 'mugs', 'Fuga doloremque officiis veritatis aspernatur amet aut beatae. Nulla aliquam sunt expedita dicta quaerat. Necessitatibus voluptate atque magni ut.', 'en_US'),
(3, 3, 'Stickers', 'stickers', 'Voluptas alias aut velit voluptatem ullam exercitationem. Et dolore sint omnis id molestias nihil itaque. Atque mollitia temporibus eveniet nesciunt.', 'en_US'),
(4, 4, 'Books', 'books', 'Odio deserunt eos voluptatem qui temporibus quam veritatis et. Aut vel in voluptas repellendus quas et. Sit voluptas provident suscipit illum. Necessitatibus mollitia ratione in ipsum cum blanditiis.', 'en_US'),
(5, 5, 'T-Shirts', 't-shirts', 'Quidem dolor ea doloremque soluta. Fugit aut est rem sit consequuntur voluptas fugiat. Velit atque debitis sapiente accusantium minus eos corrupti rem.', 'en_US'),
(6, 6, 'Men', 't-shirts/men', 'Magnam rerum et omnis iste totam aut qui. Optio ipsam aut occaecati omnis repellendus. Totam sequi labore ea dolor eligendi dolorem quia inventore.', 'en_US'),
(7, 7, 'Women', 't-shirts/women', 'Voluptas dolore fugit exercitationem rerum amet consequatur laudantium. Laudantium nobis aperiam quaerat. Enim minima et repellat molestias nisi et fuga.', 'en_US');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_tax_category`
--

CREATE TABLE `sylius_tax_category` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_tax_category`
--

INSERT INTO `sylius_tax_category` (`id`, `code`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'clothing', 'Clothing', 'Sit voluptatem nam voluptatibus deserunt fuga dolores id. Deserunt id voluptate quam et quia optio. Quis nam tempore temporibus aut ad.', '2017-12-14 13:01:44', '2017-12-14 13:01:44'),
(2, 'books', 'Books', 'Sit alias quo omnis et dolorum porro. Nam minus recusandae exercitationem cumque voluptatum. Est sapiente quia delectus accusamus perferendis id deleniti.', '2017-12-14 13:01:44', '2017-12-14 13:01:44'),
(3, 'other', 'Other', 'Quis sint minus nisi non temporibus consectetur. Nobis cum omnis debitis culpa hic sit. Eveniet et accusantium quo ipsam nam.', '2017-12-14 13:01:44', '2017-12-14 13:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_tax_rate`
--

CREATE TABLE `sylius_tax_rate` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(10,5) NOT NULL,
  `included_in_price` tinyint(1) NOT NULL,
  `calculator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_tax_rate`
--

INSERT INTO `sylius_tax_rate` (`id`, `category_id`, `zone_id`, `code`, `name`, `amount`, `included_in_price`, `calculator`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'clothing_sales_tax_7', 'Clothing Sales Tax 7%', '0.07000', 0, 'default', '2017-12-14 13:01:44', '2017-12-14 13:01:44'),
(2, 2, 1, 'books_sales_tax_2', 'Books Sales Tax 2%', '0.02000', 0, 'default', '2017-12-14 13:01:44', '2017-12-14 13:01:44'),
(3, 3, 1, 'sales_tax_20', 'Sales Tax 20%', '0.20000', 0, 'default', '2017-12-14 13:01:44', '2017-12-14 13:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_user_oauth`
--

CREATE TABLE `sylius_user_oauth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refresh_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sylius_zone`
--

CREATE TABLE `sylius_zone` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_zone`
--

INSERT INTO `sylius_zone` (`id`, `code`, `name`, `type`, `scope`) VALUES
(1, 'US', 'United States of America', 'country', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `sylius_zone_member`
--

CREATE TABLE `sylius_zone_member` (
  `id` int(11) NOT NULL,
  `belongs_to` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sylius_zone_member`
--

INSERT INTO `sylius_zone_member` (`id`, `belongs_to`, `code`) VALUES
(1, 1, 'US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sylius_address`
--
ALTER TABLE `sylius_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B97FF0589395C3F3` (`customer_id`);

--
-- Indexes for table `sylius_address_log_entries`
--
ALTER TABLE `sylius_address_log_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylius_adjustment`
--
ALTER TABLE `sylius_adjustment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ACA6E0F28D9F6D38` (`order_id`),
  ADD KEY `IDX_ACA6E0F2E415FB15` (`order_item_id`),
  ADD KEY `IDX_ACA6E0F2F720C233` (`order_item_unit_id`);

--
-- Indexes for table `sylius_admin_api_access_token`
--
ALTER TABLE `sylius_admin_api_access_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2AA4915D5F37A13B` (`token`),
  ADD KEY `IDX_2AA4915D19EB6921` (`client_id`),
  ADD KEY `IDX_2AA4915DA76ED395` (`user_id`);

--
-- Indexes for table `sylius_admin_api_auth_code`
--
ALTER TABLE `sylius_admin_api_auth_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E366D8485F37A13B` (`token`),
  ADD KEY `IDX_E366D84819EB6921` (`client_id`),
  ADD KEY `IDX_E366D848A76ED395` (`user_id`);

--
-- Indexes for table `sylius_admin_api_client`
--
ALTER TABLE `sylius_admin_api_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylius_admin_api_refresh_token`
--
ALTER TABLE `sylius_admin_api_refresh_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9160E3FA5F37A13B` (`token`),
  ADD KEY `IDX_9160E3FA19EB6921` (`client_id`),
  ADD KEY `IDX_9160E3FAA76ED395` (`user_id`);

--
-- Indexes for table `sylius_admin_user`
--
ALTER TABLE `sylius_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylius_channel`
--
ALTER TABLE `sylius_channel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_16C8119E77153098` (`code`),
  ADD KEY `IDX_16C8119E743BF776` (`default_locale_id`),
  ADD KEY `IDX_16C8119E3101778E` (`base_currency_id`),
  ADD KEY `IDX_16C8119EA978C17` (`default_tax_zone_id`);

--
-- Indexes for table `sylius_channel_currencies`
--
ALTER TABLE `sylius_channel_currencies`
  ADD PRIMARY KEY (`channel_id`,`currency_id`),
  ADD KEY `IDX_AE491F9372F5A1AA` (`channel_id`),
  ADD KEY `IDX_AE491F9338248176` (`currency_id`);

--
-- Indexes for table `sylius_channel_locales`
--
ALTER TABLE `sylius_channel_locales`
  ADD PRIMARY KEY (`channel_id`,`locale_id`),
  ADD KEY `IDX_786B7A8472F5A1AA` (`channel_id`),
  ADD KEY `IDX_786B7A84E559DFD1` (`locale_id`);

--
-- Indexes for table `sylius_channel_pricing`
--
ALTER TABLE `sylius_channel_pricing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_variant_channel_idx` (`product_variant_id`,`channel_code`),
  ADD KEY `IDX_7801820CA80EF684` (`product_variant_id`);

--
-- Indexes for table `sylius_country`
--
ALTER TABLE `sylius_country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E74256BF77153098` (`code`),
  ADD KEY `IDX_E74256BF77153098` (`code`);

--
-- Indexes for table `sylius_currency`
--
ALTER TABLE `sylius_currency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_96EDD3D077153098` (`code`);

--
-- Indexes for table `sylius_customer`
--
ALTER TABLE `sylius_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7E82D5E6E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_7E82D5E6A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_7E82D5E6BD94FB16` (`default_address_id`),
  ADD KEY `IDX_7E82D5E6D2919A68` (`customer_group_id`);

--
-- Indexes for table `sylius_customer_group`
--
ALTER TABLE `sylius_customer_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7FCF9B0577153098` (`code`);

--
-- Indexes for table `sylius_exchange_rate`
--
ALTER TABLE `sylius_exchange_rate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5F52B852A76BEEDB3FD5856` (`source_currency`,`target_currency`),
  ADD KEY `IDX_5F52B852A76BEED` (`source_currency`),
  ADD KEY `IDX_5F52B85B3FD5856` (`target_currency`);

--
-- Indexes for table `sylius_gateway_config`
--
ALTER TABLE `sylius_gateway_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylius_locale`
--
ALTER TABLE `sylius_locale`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7BA1286477153098` (`code`);

--
-- Indexes for table `sylius_migrations`
--
ALTER TABLE `sylius_migrations`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `sylius_order`
--
ALTER TABLE `sylius_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6196A1F996901F54` (`number`),
  ADD UNIQUE KEY `UNIQ_6196A1F94D4CFF2B` (`shipping_address_id`),
  ADD UNIQUE KEY `UNIQ_6196A1F979D0C0E4` (`billing_address_id`),
  ADD KEY `IDX_6196A1F972F5A1AA` (`channel_id`),
  ADD KEY `IDX_6196A1F917B24436` (`promotion_coupon_id`),
  ADD KEY `IDX_6196A1F99395C3F3` (`customer_id`);

--
-- Indexes for table `sylius_order_item`
--
ALTER TABLE `sylius_order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_77B587ED8D9F6D38` (`order_id`),
  ADD KEY `IDX_77B587ED3B69A9AF` (`variant_id`);

--
-- Indexes for table `sylius_order_item_unit`
--
ALTER TABLE `sylius_order_item_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_82BF226EE415FB15` (`order_item_id`),
  ADD KEY `IDX_82BF226E7BE036FC` (`shipment_id`);

--
-- Indexes for table `sylius_order_sequence`
--
ALTER TABLE `sylius_order_sequence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sylius_payment`
--
ALTER TABLE `sylius_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D9191BD419883967` (`method_id`),
  ADD KEY `IDX_D9191BD48D9F6D38` (`order_id`);

--
-- Indexes for table `sylius_payment_method`
--
ALTER TABLE `sylius_payment_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A75B0B0D77153098` (`code`),
  ADD KEY `IDX_A75B0B0DF23D6140` (`gateway_config_id`);

--
-- Indexes for table `sylius_payment_method_channels`
--
ALTER TABLE `sylius_payment_method_channels`
  ADD PRIMARY KEY (`payment_method_id`,`channel_id`),
  ADD KEY `IDX_543AC0CC5AA1164F` (`payment_method_id`),
  ADD KEY `IDX_543AC0CC72F5A1AA` (`channel_id`);

--
-- Indexes for table `sylius_payment_method_translation`
--
ALTER TABLE `sylius_payment_method_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_payment_method_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_966BE3A12C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_payment_security_token`
--
ALTER TABLE `sylius_payment_security_token`
  ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `sylius_product`
--
ALTER TABLE `sylius_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_677B9B7477153098` (`code`),
  ADD KEY `IDX_677B9B74731E505` (`main_taxon_id`);

--
-- Indexes for table `sylius_product_association`
--
ALTER TABLE `sylius_product_association`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_association_idx` (`product_id`,`association_type_id`),
  ADD KEY `IDX_48E9CDABB1E1C39` (`association_type_id`),
  ADD KEY `IDX_48E9CDAB4584665A` (`product_id`);

--
-- Indexes for table `sylius_product_association_product`
--
ALTER TABLE `sylius_product_association_product`
  ADD PRIMARY KEY (`association_id`,`product_id`),
  ADD KEY `IDX_A427B983EFB9C8A5` (`association_id`),
  ADD KEY `IDX_A427B9834584665A` (`product_id`);

--
-- Indexes for table `sylius_product_association_type`
--
ALTER TABLE `sylius_product_association_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CCB8914C77153098` (`code`);

--
-- Indexes for table `sylius_product_association_type_translation`
--
ALTER TABLE `sylius_product_association_type_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_product_association_type_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_4F618E52C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_product_attribute`
--
ALTER TABLE `sylius_product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BFAF484A77153098` (`code`);

--
-- Indexes for table `sylius_product_attribute_translation`
--
ALTER TABLE `sylius_product_attribute_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_product_attribute_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_93850EBA2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_product_attribute_value`
--
ALTER TABLE `sylius_product_attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8A053E544584665A` (`product_id`),
  ADD KEY `IDX_8A053E54B6E62EFA` (`attribute_id`);

--
-- Indexes for table `sylius_product_channels`
--
ALTER TABLE `sylius_product_channels`
  ADD PRIMARY KEY (`product_id`,`channel_id`),
  ADD KEY `IDX_F9EF269B4584665A` (`product_id`),
  ADD KEY `IDX_F9EF269B72F5A1AA` (`channel_id`);

--
-- Indexes for table `sylius_product_image`
--
ALTER TABLE `sylius_product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_88C64B2D7E3C61F9` (`owner_id`);

--
-- Indexes for table `sylius_product_image_product_variants`
--
ALTER TABLE `sylius_product_image_product_variants`
  ADD PRIMARY KEY (`image_id`,`variant_id`),
  ADD KEY `IDX_8FFDAE8D3DA5256D` (`image_id`),
  ADD KEY `IDX_8FFDAE8D3B69A9AF` (`variant_id`);

--
-- Indexes for table `sylius_product_option`
--
ALTER TABLE `sylius_product_option`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E4C0EBEF77153098` (`code`);

--
-- Indexes for table `sylius_product_options`
--
ALTER TABLE `sylius_product_options`
  ADD PRIMARY KEY (`product_id`,`option_id`),
  ADD KEY `IDX_2B5FF0094584665A` (`product_id`),
  ADD KEY `IDX_2B5FF009A7C41D6F` (`option_id`);

--
-- Indexes for table `sylius_product_option_translation`
--
ALTER TABLE `sylius_product_option_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_product_option_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_CBA491AD2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_product_option_value`
--
ALTER TABLE `sylius_product_option_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F7FF7D4B77153098` (`code`),
  ADD KEY `IDX_F7FF7D4BA7C41D6F` (`option_id`);

--
-- Indexes for table `sylius_product_option_value_translation`
--
ALTER TABLE `sylius_product_option_value_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_product_option_value_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_8D4382DC2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_product_review`
--
ALTER TABLE `sylius_product_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C7056A994584665A` (`product_id`),
  ADD KEY `IDX_C7056A99F675F31B` (`author_id`);

--
-- Indexes for table `sylius_product_taxon`
--
ALTER TABLE `sylius_product_taxon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_taxon_idx` (`product_id`,`taxon_id`),
  ADD KEY `IDX_169C6CD94584665A` (`product_id`),
  ADD KEY `IDX_169C6CD9DE13F470` (`taxon_id`);

--
-- Indexes for table `sylius_product_translation`
--
ALTER TABLE `sylius_product_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_105A9084180C698989D9B62` (`locale`,`slug`),
  ADD UNIQUE KEY `sylius_product_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_105A9082C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_product_variant`
--
ALTER TABLE `sylius_product_variant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A29B52377153098` (`code`),
  ADD KEY `IDX_A29B5234584665A` (`product_id`),
  ADD KEY `IDX_A29B5239DF894ED` (`tax_category_id`),
  ADD KEY `IDX_A29B5239E2D1A41` (`shipping_category_id`);

--
-- Indexes for table `sylius_product_variant_option_value`
--
ALTER TABLE `sylius_product_variant_option_value`
  ADD PRIMARY KEY (`variant_id`,`option_value_id`),
  ADD KEY `IDX_76CDAFA13B69A9AF` (`variant_id`),
  ADD KEY `IDX_76CDAFA1D957CA06` (`option_value_id`);

--
-- Indexes for table `sylius_product_variant_translation`
--
ALTER TABLE `sylius_product_variant_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_product_variant_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_8DC18EDC2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_promotion`
--
ALTER TABLE `sylius_promotion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F157396377153098` (`code`);

--
-- Indexes for table `sylius_promotion_action`
--
ALTER TABLE `sylius_promotion_action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_933D0915139DF194` (`promotion_id`);

--
-- Indexes for table `sylius_promotion_channels`
--
ALTER TABLE `sylius_promotion_channels`
  ADD PRIMARY KEY (`promotion_id`,`channel_id`),
  ADD KEY `IDX_1A044F64139DF194` (`promotion_id`),
  ADD KEY `IDX_1A044F6472F5A1AA` (`channel_id`);

--
-- Indexes for table `sylius_promotion_coupon`
--
ALTER TABLE `sylius_promotion_coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B04EBA8577153098` (`code`),
  ADD KEY `IDX_B04EBA85139DF194` (`promotion_id`);

--
-- Indexes for table `sylius_promotion_order`
--
ALTER TABLE `sylius_promotion_order`
  ADD PRIMARY KEY (`order_id`,`promotion_id`),
  ADD KEY `IDX_BF9CF6FB8D9F6D38` (`order_id`),
  ADD KEY `IDX_BF9CF6FB139DF194` (`promotion_id`);

--
-- Indexes for table `sylius_promotion_rule`
--
ALTER TABLE `sylius_promotion_rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2C188EA8139DF194` (`promotion_id`);

--
-- Indexes for table `sylius_province`
--
ALTER TABLE `sylius_province`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B5618FE477153098` (`code`),
  ADD UNIQUE KEY `UNIQ_B5618FE4F92F3E705E237E06` (`country_id`,`name`),
  ADD KEY `IDX_B5618FE4F92F3E70` (`country_id`);

--
-- Indexes for table `sylius_shipment`
--
ALTER TABLE `sylius_shipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FD707B3319883967` (`method_id`),
  ADD KEY `IDX_FD707B338D9F6D38` (`order_id`);

--
-- Indexes for table `sylius_shipping_category`
--
ALTER TABLE `sylius_shipping_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B1D6465277153098` (`code`);

--
-- Indexes for table `sylius_shipping_method`
--
ALTER TABLE `sylius_shipping_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5FB0EE1177153098` (`code`),
  ADD KEY `IDX_5FB0EE1112469DE2` (`category_id`),
  ADD KEY `IDX_5FB0EE119F2C3FAB` (`zone_id`),
  ADD KEY `IDX_5FB0EE119DF894ED` (`tax_category_id`);

--
-- Indexes for table `sylius_shipping_method_channels`
--
ALTER TABLE `sylius_shipping_method_channels`
  ADD PRIMARY KEY (`shipping_method_id`,`channel_id`),
  ADD KEY `IDX_2D9833355F7D6850` (`shipping_method_id`),
  ADD KEY `IDX_2D98333572F5A1AA` (`channel_id`);

--
-- Indexes for table `sylius_shipping_method_translation`
--
ALTER TABLE `sylius_shipping_method_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sylius_shipping_method_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_2B37DB3D2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_shop_user`
--
ALTER TABLE `sylius_shop_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7C2B74809395C3F3` (`customer_id`);

--
-- Indexes for table `sylius_taxon`
--
ALTER TABLE `sylius_taxon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CFD811CA77153098` (`code`),
  ADD KEY `IDX_CFD811CAA977936C` (`tree_root`),
  ADD KEY `IDX_CFD811CA727ACA70` (`parent_id`);

--
-- Indexes for table `sylius_taxon_image`
--
ALTER TABLE `sylius_taxon_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DBE52B287E3C61F9` (`owner_id`);

--
-- Indexes for table `sylius_taxon_translation`
--
ALTER TABLE `sylius_taxon_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_uidx` (`locale`,`slug`),
  ADD UNIQUE KEY `sylius_taxon_translation_uniq_trans` (`translatable_id`,`locale`),
  ADD KEY `IDX_1487DFCF2C2AC5D3` (`translatable_id`);

--
-- Indexes for table `sylius_tax_category`
--
ALTER TABLE `sylius_tax_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_221EB0BE77153098` (`code`);

--
-- Indexes for table `sylius_tax_rate`
--
ALTER TABLE `sylius_tax_rate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3CD86B2E77153098` (`code`),
  ADD KEY `IDX_3CD86B2E12469DE2` (`category_id`),
  ADD KEY `IDX_3CD86B2E9F2C3FAB` (`zone_id`);

--
-- Indexes for table `sylius_user_oauth`
--
ALTER TABLE `sylius_user_oauth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_provider` (`user_id`,`provider`),
  ADD KEY `IDX_C3471B78A76ED395` (`user_id`);

--
-- Indexes for table `sylius_zone`
--
ALTER TABLE `sylius_zone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7BE2258E77153098` (`code`);

--
-- Indexes for table `sylius_zone_member`
--
ALTER TABLE `sylius_zone_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E8B5ABF34B0E929B77153098` (`belongs_to`,`code`),
  ADD KEY `IDX_E8B5ABF34B0E929B` (`belongs_to`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sylius_address`
--
ALTER TABLE `sylius_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `sylius_address_log_entries`
--
ALTER TABLE `sylius_address_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `sylius_adjustment`
--
ALTER TABLE `sylius_adjustment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `sylius_admin_api_access_token`
--
ALTER TABLE `sylius_admin_api_access_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_admin_api_auth_code`
--
ALTER TABLE `sylius_admin_api_auth_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_admin_api_client`
--
ALTER TABLE `sylius_admin_api_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_admin_api_refresh_token`
--
ALTER TABLE `sylius_admin_api_refresh_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_admin_user`
--
ALTER TABLE `sylius_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sylius_channel`
--
ALTER TABLE `sylius_channel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_channel_pricing`
--
ALTER TABLE `sylius_channel_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;
--
-- AUTO_INCREMENT for table `sylius_country`
--
ALTER TABLE `sylius_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_currency`
--
ALTER TABLE `sylius_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_customer`
--
ALTER TABLE `sylius_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `sylius_customer_group`
--
ALTER TABLE `sylius_customer_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_exchange_rate`
--
ALTER TABLE `sylius_exchange_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_gateway_config`
--
ALTER TABLE `sylius_gateway_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_locale`
--
ALTER TABLE `sylius_locale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_order`
--
ALTER TABLE `sylius_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sylius_order_item`
--
ALTER TABLE `sylius_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `sylius_order_item_unit`
--
ALTER TABLE `sylius_order_item_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `sylius_order_sequence`
--
ALTER TABLE `sylius_order_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_payment`
--
ALTER TABLE `sylius_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sylius_payment_method`
--
ALTER TABLE `sylius_payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_payment_method_translation`
--
ALTER TABLE `sylius_payment_method_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_product`
--
ALTER TABLE `sylius_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `sylius_product_association`
--
ALTER TABLE `sylius_product_association`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sylius_product_association_type`
--
ALTER TABLE `sylius_product_association_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_product_association_type_translation`
--
ALTER TABLE `sylius_product_association_type_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_product_attribute`
--
ALTER TABLE `sylius_product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sylius_product_attribute_translation`
--
ALTER TABLE `sylius_product_attribute_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sylius_product_attribute_value`
--
ALTER TABLE `sylius_product_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `sylius_product_image`
--
ALTER TABLE `sylius_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `sylius_product_option`
--
ALTER TABLE `sylius_product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sylius_product_option_translation`
--
ALTER TABLE `sylius_product_option_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sylius_product_option_value`
--
ALTER TABLE `sylius_product_option_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sylius_product_option_value_translation`
--
ALTER TABLE `sylius_product_option_value_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sylius_product_review`
--
ALTER TABLE `sylius_product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sylius_product_taxon`
--
ALTER TABLE `sylius_product_taxon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `sylius_product_translation`
--
ALTER TABLE `sylius_product_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `sylius_product_variant`
--
ALTER TABLE `sylius_product_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;
--
-- AUTO_INCREMENT for table `sylius_product_variant_translation`
--
ALTER TABLE `sylius_product_variant_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;
--
-- AUTO_INCREMENT for table `sylius_promotion`
--
ALTER TABLE `sylius_promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_promotion_action`
--
ALTER TABLE `sylius_promotion_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_promotion_coupon`
--
ALTER TABLE `sylius_promotion_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_promotion_rule`
--
ALTER TABLE `sylius_promotion_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sylius_province`
--
ALTER TABLE `sylius_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_shipment`
--
ALTER TABLE `sylius_shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sylius_shipping_category`
--
ALTER TABLE `sylius_shipping_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_shipping_method`
--
ALTER TABLE `sylius_shipping_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sylius_shipping_method_translation`
--
ALTER TABLE `sylius_shipping_method_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sylius_shop_user`
--
ALTER TABLE `sylius_shop_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `sylius_taxon`
--
ALTER TABLE `sylius_taxon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sylius_taxon_image`
--
ALTER TABLE `sylius_taxon_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_taxon_translation`
--
ALTER TABLE `sylius_taxon_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sylius_tax_category`
--
ALTER TABLE `sylius_tax_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sylius_tax_rate`
--
ALTER TABLE `sylius_tax_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sylius_user_oauth`
--
ALTER TABLE `sylius_user_oauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sylius_zone`
--
ALTER TABLE `sylius_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sylius_zone_member`
--
ALTER TABLE `sylius_zone_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sylius_address`
--
ALTER TABLE `sylius_address`
  ADD CONSTRAINT `FK_B97FF0589395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `sylius_customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_adjustment`
--
ALTER TABLE `sylius_adjustment`
  ADD CONSTRAINT `FK_ACA6E0F28D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `sylius_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ACA6E0F2E415FB15` FOREIGN KEY (`order_item_id`) REFERENCES `sylius_order_item` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ACA6E0F2F720C233` FOREIGN KEY (`order_item_unit_id`) REFERENCES `sylius_order_item_unit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_admin_api_access_token`
--
ALTER TABLE `sylius_admin_api_access_token`
  ADD CONSTRAINT `FK_2AA4915D19EB6921` FOREIGN KEY (`client_id`) REFERENCES `sylius_admin_api_client` (`id`),
  ADD CONSTRAINT `FK_2AA4915DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `sylius_admin_user` (`id`);

--
-- Constraints for table `sylius_admin_api_auth_code`
--
ALTER TABLE `sylius_admin_api_auth_code`
  ADD CONSTRAINT `FK_E366D84819EB6921` FOREIGN KEY (`client_id`) REFERENCES `sylius_admin_api_client` (`id`),
  ADD CONSTRAINT `FK_E366D848A76ED395` FOREIGN KEY (`user_id`) REFERENCES `sylius_admin_user` (`id`);

--
-- Constraints for table `sylius_admin_api_refresh_token`
--
ALTER TABLE `sylius_admin_api_refresh_token`
  ADD CONSTRAINT `FK_9160E3FA19EB6921` FOREIGN KEY (`client_id`) REFERENCES `sylius_admin_api_client` (`id`),
  ADD CONSTRAINT `FK_9160E3FAA76ED395` FOREIGN KEY (`user_id`) REFERENCES `sylius_admin_user` (`id`);

--
-- Constraints for table `sylius_channel`
--
ALTER TABLE `sylius_channel`
  ADD CONSTRAINT `FK_16C8119E3101778E` FOREIGN KEY (`base_currency_id`) REFERENCES `sylius_currency` (`id`),
  ADD CONSTRAINT `FK_16C8119E743BF776` FOREIGN KEY (`default_locale_id`) REFERENCES `sylius_locale` (`id`),
  ADD CONSTRAINT `FK_16C8119EA978C17` FOREIGN KEY (`default_tax_zone_id`) REFERENCES `sylius_zone` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sylius_channel_currencies`
--
ALTER TABLE `sylius_channel_currencies`
  ADD CONSTRAINT `FK_AE491F9338248176` FOREIGN KEY (`currency_id`) REFERENCES `sylius_currency` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AE491F9372F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_channel_locales`
--
ALTER TABLE `sylius_channel_locales`
  ADD CONSTRAINT `FK_786B7A8472F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_786B7A84E559DFD1` FOREIGN KEY (`locale_id`) REFERENCES `sylius_locale` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_channel_pricing`
--
ALTER TABLE `sylius_channel_pricing`
  ADD CONSTRAINT `FK_7801820CA80EF684` FOREIGN KEY (`product_variant_id`) REFERENCES `sylius_product_variant` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_customer`
--
ALTER TABLE `sylius_customer`
  ADD CONSTRAINT `FK_7E82D5E6BD94FB16` FOREIGN KEY (`default_address_id`) REFERENCES `sylius_address` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_7E82D5E6D2919A68` FOREIGN KEY (`customer_group_id`) REFERENCES `sylius_customer_group` (`id`);

--
-- Constraints for table `sylius_exchange_rate`
--
ALTER TABLE `sylius_exchange_rate`
  ADD CONSTRAINT `FK_5F52B852A76BEED` FOREIGN KEY (`source_currency`) REFERENCES `sylius_currency` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5F52B85B3FD5856` FOREIGN KEY (`target_currency`) REFERENCES `sylius_currency` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_order`
--
ALTER TABLE `sylius_order`
  ADD CONSTRAINT `FK_6196A1F917B24436` FOREIGN KEY (`promotion_coupon_id`) REFERENCES `sylius_promotion_coupon` (`id`),
  ADD CONSTRAINT `FK_6196A1F94D4CFF2B` FOREIGN KEY (`shipping_address_id`) REFERENCES `sylius_address` (`id`),
  ADD CONSTRAINT `FK_6196A1F972F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`),
  ADD CONSTRAINT `FK_6196A1F979D0C0E4` FOREIGN KEY (`billing_address_id`) REFERENCES `sylius_address` (`id`),
  ADD CONSTRAINT `FK_6196A1F99395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `sylius_customer` (`id`);

--
-- Constraints for table `sylius_order_item`
--
ALTER TABLE `sylius_order_item`
  ADD CONSTRAINT `FK_77B587ED3B69A9AF` FOREIGN KEY (`variant_id`) REFERENCES `sylius_product_variant` (`id`),
  ADD CONSTRAINT `FK_77B587ED8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `sylius_order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_order_item_unit`
--
ALTER TABLE `sylius_order_item_unit`
  ADD CONSTRAINT `FK_82BF226E7BE036FC` FOREIGN KEY (`shipment_id`) REFERENCES `sylius_shipment` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_82BF226EE415FB15` FOREIGN KEY (`order_item_id`) REFERENCES `sylius_order_item` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_payment`
--
ALTER TABLE `sylius_payment`
  ADD CONSTRAINT `FK_D9191BD419883967` FOREIGN KEY (`method_id`) REFERENCES `sylius_payment_method` (`id`),
  ADD CONSTRAINT `FK_D9191BD48D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `sylius_order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_payment_method`
--
ALTER TABLE `sylius_payment_method`
  ADD CONSTRAINT `FK_A75B0B0DF23D6140` FOREIGN KEY (`gateway_config_id`) REFERENCES `sylius_gateway_config` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sylius_payment_method_channels`
--
ALTER TABLE `sylius_payment_method_channels`
  ADD CONSTRAINT `FK_543AC0CC5AA1164F` FOREIGN KEY (`payment_method_id`) REFERENCES `sylius_payment_method` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_543AC0CC72F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_payment_method_translation`
--
ALTER TABLE `sylius_payment_method_translation`
  ADD CONSTRAINT `FK_966BE3A12C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_payment_method` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product`
--
ALTER TABLE `sylius_product`
  ADD CONSTRAINT `FK_677B9B74731E505` FOREIGN KEY (`main_taxon_id`) REFERENCES `sylius_taxon` (`id`);

--
-- Constraints for table `sylius_product_association`
--
ALTER TABLE `sylius_product_association`
  ADD CONSTRAINT `FK_48E9CDAB4584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_48E9CDABB1E1C39` FOREIGN KEY (`association_type_id`) REFERENCES `sylius_product_association_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_association_product`
--
ALTER TABLE `sylius_product_association_product`
  ADD CONSTRAINT `FK_A427B9834584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A427B983EFB9C8A5` FOREIGN KEY (`association_id`) REFERENCES `sylius_product_association` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_association_type_translation`
--
ALTER TABLE `sylius_product_association_type_translation`
  ADD CONSTRAINT `FK_4F618E52C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product_association_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_attribute_translation`
--
ALTER TABLE `sylius_product_attribute_translation`
  ADD CONSTRAINT `FK_93850EBA2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product_attribute` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_attribute_value`
--
ALTER TABLE `sylius_product_attribute_value`
  ADD CONSTRAINT `FK_8A053E544584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8A053E54B6E62EFA` FOREIGN KEY (`attribute_id`) REFERENCES `sylius_product_attribute` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_channels`
--
ALTER TABLE `sylius_product_channels`
  ADD CONSTRAINT `FK_F9EF269B4584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F9EF269B72F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_image`
--
ALTER TABLE `sylius_product_image`
  ADD CONSTRAINT `FK_88C64B2D7E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_image_product_variants`
--
ALTER TABLE `sylius_product_image_product_variants`
  ADD CONSTRAINT `FK_8FFDAE8D3B69A9AF` FOREIGN KEY (`variant_id`) REFERENCES `sylius_product_variant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8FFDAE8D3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `sylius_product_image` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_options`
--
ALTER TABLE `sylius_product_options`
  ADD CONSTRAINT `FK_2B5FF0094584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2B5FF009A7C41D6F` FOREIGN KEY (`option_id`) REFERENCES `sylius_product_option` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_option_translation`
--
ALTER TABLE `sylius_product_option_translation`
  ADD CONSTRAINT `FK_CBA491AD2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product_option` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_option_value`
--
ALTER TABLE `sylius_product_option_value`
  ADD CONSTRAINT `FK_F7FF7D4BA7C41D6F` FOREIGN KEY (`option_id`) REFERENCES `sylius_product_option` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_option_value_translation`
--
ALTER TABLE `sylius_product_option_value_translation`
  ADD CONSTRAINT `FK_8D4382DC2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product_option_value` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_review`
--
ALTER TABLE `sylius_product_review`
  ADD CONSTRAINT `FK_C7056A994584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C7056A99F675F31B` FOREIGN KEY (`author_id`) REFERENCES `sylius_customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_taxon`
--
ALTER TABLE `sylius_product_taxon`
  ADD CONSTRAINT `FK_169C6CD94584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_169C6CD9DE13F470` FOREIGN KEY (`taxon_id`) REFERENCES `sylius_taxon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_translation`
--
ALTER TABLE `sylius_product_translation`
  ADD CONSTRAINT `FK_105A9082C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_variant`
--
ALTER TABLE `sylius_product_variant`
  ADD CONSTRAINT `FK_A29B5234584665A` FOREIGN KEY (`product_id`) REFERENCES `sylius_product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A29B5239DF894ED` FOREIGN KEY (`tax_category_id`) REFERENCES `sylius_tax_category` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A29B5239E2D1A41` FOREIGN KEY (`shipping_category_id`) REFERENCES `sylius_shipping_category` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sylius_product_variant_option_value`
--
ALTER TABLE `sylius_product_variant_option_value`
  ADD CONSTRAINT `FK_76CDAFA13B69A9AF` FOREIGN KEY (`variant_id`) REFERENCES `sylius_product_variant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_76CDAFA1D957CA06` FOREIGN KEY (`option_value_id`) REFERENCES `sylius_product_option_value` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_product_variant_translation`
--
ALTER TABLE `sylius_product_variant_translation`
  ADD CONSTRAINT `FK_8DC18EDC2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_product_variant` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_promotion_action`
--
ALTER TABLE `sylius_promotion_action`
  ADD CONSTRAINT `FK_933D0915139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `sylius_promotion` (`id`);

--
-- Constraints for table `sylius_promotion_channels`
--
ALTER TABLE `sylius_promotion_channels`
  ADD CONSTRAINT `FK_1A044F64139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `sylius_promotion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1A044F6472F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_promotion_coupon`
--
ALTER TABLE `sylius_promotion_coupon`
  ADD CONSTRAINT `FK_B04EBA85139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `sylius_promotion` (`id`);

--
-- Constraints for table `sylius_promotion_order`
--
ALTER TABLE `sylius_promotion_order`
  ADD CONSTRAINT `FK_BF9CF6FB139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `sylius_promotion` (`id`),
  ADD CONSTRAINT `FK_BF9CF6FB8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `sylius_order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_promotion_rule`
--
ALTER TABLE `sylius_promotion_rule`
  ADD CONSTRAINT `FK_2C188EA8139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `sylius_promotion` (`id`);

--
-- Constraints for table `sylius_province`
--
ALTER TABLE `sylius_province`
  ADD CONSTRAINT `FK_B5618FE4F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `sylius_country` (`id`);

--
-- Constraints for table `sylius_shipment`
--
ALTER TABLE `sylius_shipment`
  ADD CONSTRAINT `FK_FD707B3319883967` FOREIGN KEY (`method_id`) REFERENCES `sylius_shipping_method` (`id`),
  ADD CONSTRAINT `FK_FD707B338D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `sylius_order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_shipping_method`
--
ALTER TABLE `sylius_shipping_method`
  ADD CONSTRAINT `FK_5FB0EE1112469DE2` FOREIGN KEY (`category_id`) REFERENCES `sylius_shipping_category` (`id`),
  ADD CONSTRAINT `FK_5FB0EE119DF894ED` FOREIGN KEY (`tax_category_id`) REFERENCES `sylius_tax_category` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_5FB0EE119F2C3FAB` FOREIGN KEY (`zone_id`) REFERENCES `sylius_zone` (`id`);

--
-- Constraints for table `sylius_shipping_method_channels`
--
ALTER TABLE `sylius_shipping_method_channels`
  ADD CONSTRAINT `FK_2D9833355F7D6850` FOREIGN KEY (`shipping_method_id`) REFERENCES `sylius_shipping_method` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2D98333572F5A1AA` FOREIGN KEY (`channel_id`) REFERENCES `sylius_channel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_shipping_method_translation`
--
ALTER TABLE `sylius_shipping_method_translation`
  ADD CONSTRAINT `FK_2B37DB3D2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_shipping_method` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_shop_user`
--
ALTER TABLE `sylius_shop_user`
  ADD CONSTRAINT `FK_7C2B74809395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `sylius_customer` (`id`);

--
-- Constraints for table `sylius_taxon`
--
ALTER TABLE `sylius_taxon`
  ADD CONSTRAINT `FK_CFD811CA727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `sylius_taxon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CFD811CAA977936C` FOREIGN KEY (`tree_root`) REFERENCES `sylius_taxon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_taxon_image`
--
ALTER TABLE `sylius_taxon_image`
  ADD CONSTRAINT `FK_DBE52B287E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `sylius_taxon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_taxon_translation`
--
ALTER TABLE `sylius_taxon_translation`
  ADD CONSTRAINT `FK_1487DFCF2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `sylius_taxon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sylius_tax_rate`
--
ALTER TABLE `sylius_tax_rate`
  ADD CONSTRAINT `FK_3CD86B2E12469DE2` FOREIGN KEY (`category_id`) REFERENCES `sylius_tax_category` (`id`),
  ADD CONSTRAINT `FK_3CD86B2E9F2C3FAB` FOREIGN KEY (`zone_id`) REFERENCES `sylius_zone` (`id`);

--
-- Constraints for table `sylius_user_oauth`
--
ALTER TABLE `sylius_user_oauth`
  ADD CONSTRAINT `FK_C3471B78A76ED395` FOREIGN KEY (`user_id`) REFERENCES `sylius_shop_user` (`id`);

--
-- Constraints for table `sylius_zone_member`
--
ALTER TABLE `sylius_zone_member`
  ADD CONSTRAINT `FK_E8B5ABF34B0E929B` FOREIGN KEY (`belongs_to`) REFERENCES `sylius_zone` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
