-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 12:34 PM
-- Server version: 5.7.11-log
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
-- Table structure for table `my_plan`
--

DROP TABLE IF EXISTS `my_plan`;
CREATE TABLE IF NOT EXISTS `my_plan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `channels` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `valid_till` date NOT NULL,
  `fees` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_plan`
--

INSERT INTO `my_plan` (`id`, `channels`, `language`, `valid_till`, `fees`) VALUES
(1, 'Colors Kannada', 'Kannada', '2019-01-01', 19),
(2, 'News18 Kannada', 'Kannada', '2018-11-29', 0.5),
(3, 'Movies OK', 'Hindi', '2018-12-18', 7.14),
(4, 'Kannada Cinema', 'kannada', '2018-11-30', 1),
(5, 'Colours Super', 'Kannada', '2019-02-02', 14),
(6, 'Zee Salaam', 'Urdu', '2019-01-14', 1),
(7, 'Zee Cafe', 'English', '2018-12-28', 15),
(8, 'Zee Te lugu', 'Tamil', '2019-02-28', 12),
(9, 'Zee 24 Taas', 'Marathi', '2019-02-10', 0.5),
(10, 'Zee Marathi', 'Marathi', '2019-01-18', 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
