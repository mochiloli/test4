-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 02:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dynamic_select_box_dependent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'Cambodia'),
(2, 'Thailand'),
(3, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`, `country_id`) VALUES
(1, 'Phnom Penh', 1),
(2, 'Kandal', 1),
(3, 'Battambang', 1),
(4, 'Banteay Meanchey', 1),
(5, 'Siem Reap', 1),
(6, 'Kampong Cham', 1),
(7, 'Preah Sihanouk', 1),
(8, 'Banteay Meanchey', 1),
(9, 'Kampong Speu', 1),
(10, 'Kampot', 1),
(11, 'Phetchaburi', 2),
(12, 'Ratchaburi', 2),
(13, 'Samutsakhon', 2),
(14, 'Nonthaburi', 2),
(15, 'Nakhonpathom', 2),
(16, 'Bangkok', 2),
(17, 'Samutprakan', 2),
(18, 'Samutsongkhram', 2),
(19, 'Beijing Municipality', 3),
(20, 'Tianjin Municipality', 3),
(21, 'Hebei', 3),
(22, 'Shanxi', 3),
(23, 'Inner Mongolia Autonomous Region', 3),
(24, 'Liaoning', 3),
(25, 'Jilin', 3),
(26, 'Heilongjiang', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
