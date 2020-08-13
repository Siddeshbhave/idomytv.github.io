-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 12:36 PM
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
(1, 'Zee Kannada', 'GEC', 19),
(2, 'Colors Kannada', 'GEC', 19),
(3, 'Colors Super', 'GEC', 14),
(4, 'Colors Gujarati', 'GEC', 5),
(5, 'News18 Urdu', 'NCA', 1);

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
(1, 'News18 Kannada', 'NCA', 0.5),
(2, 'Colors Kannada', 'GEC', 19),
(3, 'Kannada Cinema', 'Movies', 1),
(4, 'Rishtey', 'GEC', 1),
(5, 'Cineplex  ', 'Movies', 8);

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

-- --------------------------------------------------------

--
-- Table structure for table `powerpack1`
--

DROP TABLE IF EXISTS `powerpack1`;
CREATE TABLE IF NOT EXISTS `powerpack1` (
  `channel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powerpack1`
--

INSERT INTO `powerpack1` (`channel`) VALUES
('Colors Kannada'),
('Colors Super'),
('News18 Kannada'),
('CNBC Awaaz'),
('News18 Rajasthan'),
('News18 Urdu'),
('News18 Assam/NE'),
('News18 India'),
('CNN News18'),
('Colors Kannada Cinema');

-- --------------------------------------------------------

--
-- Table structure for table `powerpack2`
--

DROP TABLE IF EXISTS `powerpack2`;
CREATE TABLE IF NOT EXISTS `powerpack2` (
  `channel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powerpack2`
--

INSERT INTO `powerpack2` (`channel`) VALUES
('Colors Kannada'),
('Colors Super'),
('Colors Infinity'),
('Rishtey'),
('News18 Urdu'),
('News18 Kannada'),
('News18 Kerala'),
('Colors Gujarati'),
('Colors'),
('Colors Kannada Cinema');

-- --------------------------------------------------------

--
-- Table structure for table `powerpack3`
--

DROP TABLE IF EXISTS `powerpack3`;
CREATE TABLE IF NOT EXISTS `powerpack3` (
  `channel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powerpack3`
--

INSERT INTO `powerpack3` (`channel`) VALUES
('Colours'),
('News18 Lokmat'),
('CNBC Awaaz'),
('News18'),
('History TV18'),
('Rishtey'),
('Cineplex '),
('CNN News18'),
('Nick  +'),
('FYI TV18');

-- --------------------------------------------------------

--
-- Table structure for table `powerpack4`
--

DROP TABLE IF EXISTS `powerpack4`;
CREATE TABLE IF NOT EXISTS `powerpack4` (
  `channel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powerpack4`
--

INSERT INTO `powerpack4` (`channel`) VALUES
('Zee TV'),
('&TV'),
('Zee Cinema'),
('& Pictures'),
('Zee Bollywood'),
('Zee Action'),
('Zee ETC'),
('Zee Café'),
('Zee Sarthak'),
('Zee Kannada');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `network` int(20) NOT NULL,
  `can` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `alt_phone` int(10) NOT NULL,
  `otp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
