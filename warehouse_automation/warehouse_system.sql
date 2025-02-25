-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 02:15 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_id` int NOT NULL,
  `products.id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `product_id`, `quantity`, `total_price`, `order_date`, `order_id`, `products.id`) VALUES
(1, 'hello', 1, 2, 799.00, '2025-02-20 08:12:15', 1, 1),
(2, 'world', 2, 1, 999.00, '2025-02-20 08:12:15', 2, 2),
(3, 'php', 3, 3, 1999.00, '2025-02-20 08:12:15', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products.id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text,
  `id` int NOT NULL,
  PRIMARY KEY (`products.id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products.id`, `name`, `quantity`, `price`, `description`, `id`) VALUES
(1, 'Pigeon Favourite Electric Kettle', 50, 449.00, '1.5 L, Silver, Black.', 1),
(2, 'V-Guard VKM12 Multicooker Electric Kettle', 30, 999.00, '1.2 L, Red.', 2),
(3, 'MILTON Insta Electric Kettle', 40, 899.00, '2 L, Silver.', 3),
(4, 'Pigeon Favourite Electric Kettle', 50, 449.00, '1.5 L, Silver, Black.', 4),
(5, 'V-Guard VKM12 Multicooker Electric Kettle', 30, 999.00, '1.2 L, Red.', 5),
(6, 'MILTON Insta Electric Kettle', 40, 899.00, '2 L, Silver.', 6),
(7, 'keyboard', 23, 333.00, 'basic', 7),
(10, 'wire ', 34, 199.00, 'basic', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
