-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2018 at 10:15 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ido`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_pack`
--

DROP TABLE IF EXISTS `mini_pack`;
CREATE TABLE IF NOT EXISTS `mini_pack` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `channels` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_pack`
--

INSERT INTO `mini_pack` (`id`, `channels`, `description`, `price`) VALUES
(1, 'Vh1', 'Music', 4),
(2, 'MTV Beats', 'Music', 2),
(3, 'Colors  Marathi', 'GEC', 17),
(4, 'Colors Gujarati', 'GEC', 5),
(5, 'News18 Urdu', 'NCA', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
