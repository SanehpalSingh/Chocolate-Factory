-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2020 at 01:43 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `choclatefactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `image_url` varchar(100) NOT NULL,
  `like_count` int(11) DEFAULT 0,
  `description` varchar(500) NOT NULL,
  `is_showroom` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `quantity`, `price`, `image_name`, `image_url`, `like_count`, `description`, `is_showroom`) VALUES
(14, 'darkchoclate', 3, 5, NULL, 'image/3.jpg', 8, 'bit bitter', 1),
(15, 'choclatetrufle', 3, 5, NULL, 'image/4.jpg', 0, 'delicious', 0),
(16, 'choclatetrufle', 3, 5, NULL, 'image/4.jpg', 0, 'delicious', 0),
(17, 'choclate', 2, 20, NULL, 'image/1.jpg', 0, 'good', 0),
(19, 'munch', 3, 1, NULL, 'image/home.jpg', 0, 'delicious', 1),
(20, 'candy', 3, 2, NULL, 'image/home.jpg', 0, 'very tasty', 1),
(21, 'candy', 3, 2, NULL, 'image/home.jpg', 0, 'very tasty', 1),
(22, 'candy', 1, 98, NULL, 'image/3.jpg', 0, 'delicious', 1),
(23, 'munch', 2, 90, NULL, 'image/2.jpg', 0, 'very tasty', 0),
(24, '', 1, 90, NULL, 'image/2.jpg', 0, 'very tasty', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
