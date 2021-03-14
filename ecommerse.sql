-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 05, 2021 at 09:36 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerse`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(14, 'Canon EOS', 36000),
(15, 'Nikon DSLR', 40000),
(16, 'Sony DSLR', 45000),
(17, 'Olympus DSLR', 50000),
(18, 'Titan Model #301', 13000),
(19, ' Titan Model #201', 3000),
(20, 'HMT Milan', 8000),
(21, 'Faber Luba #111', 18000),
(22, 'H&W', 800),
(23, 'Luis Phil', 1000),
(24, 'John Zok', 1500),
(25, ' Jhalsani ', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(22) DEFAULT NULL,
  `first_name` tinytext,
  `LAST_NAME` tinytext,
  `phone` int(10) DEFAULT NULL,
  `city` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `registration_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `LAST_NAME`, `phone`, `city`, `address`, `password`, `registration_timestamp`) VALUES
(1, 'venu@xyz.com', 'Venu', 'Sharma', 547903927, '', '', '123456', '2016-09-28 16:00:04'),
(2, 'shubham@xyz.com', 'Shubha', NULL, 538915694, '', '', '123456', '2021-02-24 07:47:18'),
(3, 'disha@xyz.com', 'Disha', 'Kaur', 557825323, '', '', '123456', '2016-09-29 18:32:14'),
(4, 'ankit@xyz.com', 'Ankit', 'Kumar', 561322116, '', '', '123456', '2016-09-30 09:35:18'),
(5, 'mrinal@xyz.com', 'Mrinal', 'Joy', 517918670, '', '', '123456', '2016-10-02 03:38:06'),
(6, 'abhilash@xyz.com', 'Abhilash', 'Jalsani', 509841902, '', '', '123456', '2016-10-01 05:00:00'),
(7, 'hardik@xyz.com', 'Hardik', 'Arora', 595452568, '', '', '123456', '2016-09-30 07:50:45'),
(8, 'yesha@xyz.com', 'Yesha', 'Krishna', 534532216, '', '', '123456', '2016-09-30 07:50:45'),
(9, 'rushit@xyz.com', 'Rushit', NULL, 534359370, '', '', '123456', '2016-09-29 06:16:37'),
(10, 'jessy@xyz.com', 'Jessy', 'Joseph', 591053100, '', '', '123456', '2016-09-28 18:32:14'),
(11, 'jasper@xyz.com', 'Jaspreet', NULL, 515078235, '', '', '123456', '2016-09-29 18:20:12'),
(12, 'prachi@xyz.com', 'Prachi', NULL, 530670640, '', '', '123456', '2016-09-29 06:42:12'),
(19, 'adityamishra2198@gmail', 'Aditya', '', 0, 'Chennai', '', '123456789', '2021-03-04 14:03:10'),
(20, 'adityamishra2198@gmail', 'Aditya', '', 0, 'Chennai', '', '123456789', '2021-03-05 08:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_timestamp` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
