-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2022 at 02:43 PM
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
-- Database: `fees_structure`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees_structure`
--

DROP TABLE IF EXISTS `fees_structure`;
CREATE TABLE IF NOT EXISTS `fees_structure` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `course` varchar(55) NOT NULL,
  `sem` varchar(55) NOT NULL,
  `branch` varchar(55) NOT NULL,
  `er_no` int(11) NOT NULL,
  `cer_purpose` varchar(55) NOT NULL,
  `sem_y_f_course` varchar(55) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fees_structure`
--

INSERT INTO `fees_structure` (`sr_no`, `name`, `course`, `sem`, `branch`, `er_no`, `cer_purpose`, `sem_y_f_course`) VALUES
(1, 'Soham Mandaliya', 'BE', '5th', 'CE', 2147483647, 'Hxdfn', 'rgthf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
