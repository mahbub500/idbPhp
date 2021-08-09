-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 05:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf47`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory` (IN `products` CHAR(8), OUT `count` INT)  SELECT 45 INTO count$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory_new` (IN `product` CHAR(50), OUT `total` INT)  SELECT 60 INTO total$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `calculate_bonus` (`emp_id` CHAR(8)) RETURNS DECIMAL(10,2) BEGIN
DECLARE total DECIMAL(10,2);
DECLARE bonus DECIMAL(10,2);
SELECT SUM(price) INTO total FROM sales WHERE employee_id = emp_id;
SET bonus = total * .05;
RETURN bonus;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`) VALUES
(1, 'B', 'BBB', '500'),
(3, 'B3', 'BLUE2', '500'),
(5, 'C9', 'BLACK ', '500'),
(9, 'C9', 'Full', '2500'),
(8, 'B5', 'WHITE', '5500'),
(10, 'B10', 'Polo T-shirt', '200'),
(11, 'RR4', 'Red Rose', '150'),
(12, 'B5', 'Mynul Islam', '2500'),
(15, 'A5', 'Apple', '500'),
(16, 'fa', 'Onange', '234');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(6) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` smallint(6) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `employee_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_name`, `product_quantity`, `price`, `employee_id`) VALUES
(1, 'Shirt', 10, '5000.00', 1),
(2, 'Black Shirt', 23, '8756.00', 4),
(3, 'White Shirt', 25, '50000.00', 2),
(4, 'Pink Shirt', 23, '4567.00', 2),
(5, 'Pink Shirt', 10, '2345.00', 3),
(6, 'Shirt', 10, '56789.00', 2),
(7, 'Pink Orna', 30, '4500.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `education` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `district`, `profile`, `education`) VALUES
(102, 'Siam', 'Male?<br /', '', '', ''),
(103, 'Siam', 'Male?<br /', '', '', ''),
(104, 'Siam', 'Male?<br /', '', '', ''),
(129, 'Siam', 'Male?<br /', '', '', ''),
(130, 'Siam', 'Male?<br /', '', '', ''),
(131, 'Siam', 'Male?<br /', '', '', ''),
(133, 'Siam', 'Male?<br /', '', '', ''),
(134, 'Siam', 'Male?<br /', '', '', ''),
(135, 'Siam', 'Male?<br /', '', '', ''),
(136, 'Siam', 'Male?<br /', '', '', ''),
(137, 'Siam', 'Male?<br /', '', '', ''),
(155, 'Siam', 'Male?<br /', '', '', ''),
(156, 'Siam', 'Male?<br /', '', '', ''),
(157, 'MYNUL ISLAM', 'Male', 'Barishal', 'fadfd', 'HSC,Honors,'),
(158, 'Mahbub', 'Male', 'Noakhali', 'fasdfasd', 'SSC,HSC,Honors,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
