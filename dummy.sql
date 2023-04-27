-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 01:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) UNSIGNED NOT NULL,
  `product` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `product`, `category`, `brand`) VALUES
(1, 'product-1', 'category-1', 'brand-1'),
(2, 'product-1', 'category-1', 'brand-1'),
(3, 'product-1', 'category-1', 'brand-1'),
(4, 'product-1', 'category-1', 'brand-1'),
(5, 'product-1', 'category-1', 'brand-1'),
(6, 'product-1', 'category-1', 'brand-1'),
(7, 'product-1', 'category-1', 'brand-1'),
(8, 'product-1', 'category-1', 'brand-1'),
(9, 'product-1', 'category-1', 'brand-1'),
(10, 'product-1', 'category-1', 'brand-1'),
(11, 'product-1', 'category-1', 'brand-1'),
(12, 'product-1', 'category-1', 'brand-1'),
(13, 'product-1', 'category-1', 'brand-1'),
(14, 'product-1', 'category-1', 'brand-1'),
(15, 'product-1', 'category-1', 'brand-1'),
(16, 'product-1', 'category-1', 'brand-1'),
(17, 'product-1', 'category-1', 'brand-1'),
(18, 'product-1', 'category-1', 'brand-1'),
(19, 'product-1', 'category-1', 'brand-1'),
(20, 'product-1', 'category-1', 'brand-1'),
(21, 'product-2', 'category-2', 'brand-2'),
(22, 'product-2', 'category-2', 'brand-2'),
(23, 'product-2', 'category-2', 'brand-2'),
(24, 'product-2', 'category-2', 'brand-2'),
(25, 'product-2', 'category-2', 'brand-2'),
(26, 'product-2', 'category-2', 'brand-2'),
(27, 'product-2', 'category-2', 'brand-2'),
(28, 'product-2', 'category-2', 'brand-2'),
(29, 'product-2', 'category-2', 'brand-2'),
(30, 'product-2', 'category-2', 'brand-2'),
(31, 'product-3', 'category-3', 'brand-3'),
(32, 'product-3', 'category-3', 'brand-3'),
(33, 'product-3', 'category-3', 'brand-3'),
(34, 'product-3', 'category-3', 'brand-3'),
(35, 'product-3', 'category-3', 'brand-3'),
(36, 'product-3', 'category-3', 'brand-3'),
(37, 'product-3', 'category-3', 'brand-3'),
(38, 'product-3', 'category-3', 'brand-3'),
(39, 'product-3', 'category-3', 'brand-3'),
(40, 'product-3', 'category-3', 'brand-3'),
(41, 'product-3', 'category-3', 'brand-3'),
(42, 'product-3', 'category-3', 'brand-3'),
(43, 'product-3', 'category-3', 'brand-3'),
(44, 'product-3', 'category-3', 'brand-3'),
(45, 'product-3', 'category-3', 'brand-3'),
(46, 'product-3', 'category-3', 'brand-3'),
(47, 'product-3', 'category-3', 'brand-3'),
(48, 'product-3', 'category-3', 'brand-3'),
(49, 'product-3', 'category-3', 'brand-3'),
(50, 'product-3', 'category-3', 'brand-3'),
(51, 'product-3', 'category-3', 'brand-3'),
(52, 'product-3', 'category-3', 'brand-3'),
(53, 'product-3', 'category-3', 'brand-3'),
(54, 'product-3', 'category-3', 'brand-3'),
(55, 'product-3', 'category-3', 'brand-3'),
(56, 'product-3', 'category-3', 'brand-3'),
(57, 'product-3', 'category-3', 'brand-3'),
(58, 'product-3', 'category-3', 'brand-3'),
(59, 'product-3', 'category-3', 'brand-3'),
(60, 'product-3', 'category-3', 'brand-3'),
(61, 'product-3', 'category-3', 'brand-3'),
(62, 'product-3', 'category-3', 'brand-3'),
(63, 'product-3', 'category-3', 'brand-3'),
(64, 'product-3', 'category-3', 'brand-3'),
(65, 'product-3', 'category-3', 'brand-3'),
(66, 'product-3', 'category-3', 'brand-3'),
(67, 'product-3', 'category-3', 'brand-3'),
(68, 'product-3', 'category-3', 'brand-3'),
(69, 'product-3', 'category-3', 'brand-3'),
(70, 'product-3', 'category-3', 'brand-3'),
(71, 'product-3', 'category-3', 'brand-3'),
(72, 'product-3', 'category-3', 'brand-3'),
(73, 'product-3', 'category-3', 'brand-3'),
(74, 'product-3', 'category-3', 'brand-3'),
(75, 'product-3', 'category-3', 'brand-3'),
(76, 'product-3', 'category-3', 'brand-3'),
(77, 'product-3', 'category-3', 'brand-3'),
(78, 'product-3', 'category-3', 'brand-3'),
(79, 'product-3', 'category-3', 'brand-3'),
(80, 'product-3', 'category-3', 'brand-3'),
(81, 'product-3', 'category-3', 'brand-3'),
(82, 'product-3', 'category-3', 'brand-3'),
(83, 'product-3', 'category-3', 'brand-3'),
(84, 'product-3', 'category-3', 'brand-3'),
(85, 'product-3', 'category-3', 'brand-3'),
(86, 'product-3', 'category-3', 'brand-3'),
(87, 'product-3', 'category-3', 'brand-3'),
(88, 'product-3', 'category-3', 'brand-3'),
(89, 'product-3', 'category-3', 'brand-3'),
(90, 'product-3', 'category-3', 'brand-3'),
(91, 'product-3', 'category-3', 'brand-3'),
(92, 'product-3', 'category-3', 'brand-3'),
(93, 'product-3', 'category-3', 'brand-3'),
(94, 'product-3', 'category-3', 'brand-3'),
(95, 'product-3', 'category-3', 'brand-3'),
(96, 'product-3', 'category-3', 'brand-3'),
(97, 'product-3', 'category-3', 'brand-3'),
(98, 'product-3', 'category-3', 'brand-3'),
(99, 'product-3', 'category-3', 'brand-3'),
(100, 'product-3', 'category-3', 'brand-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
