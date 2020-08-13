-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2018 at 10:14 AM
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
-- Table structure for table `mini_pack1`
--

DROP TABLE IF EXISTS `mini_pack1`;
CREATE TABLE IF NOT EXISTS `mini_pack1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `channels` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_pack1`
--

INSERT INTO `mini_pack1` (`id`, `channels`, `description`, `price`) VALUES
(1, 'Nick  +', 'Children', 12),
(2, 'News18 Odia', 'NCA', 0.5),
(3, 'Colors Super', 'GEC', 14),
(4, 'Rishtey', 'GEC', 1),
(5, 'Cineplex  ', 'Movies', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
