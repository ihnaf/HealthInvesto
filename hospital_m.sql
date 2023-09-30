-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2023 at 12:42 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_m`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `apassword` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `aname`, `apassword`) VALUES
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `D_id` int(11) NOT NULL AUTO_INCREMENT,
  `dFname` varchar(200) NOT NULL,
  `dLname` varchar(200) NOT NULL,
  `dAddress` varchar(300) NOT NULL,
  `dNumber` varchar(15) NOT NULL,
  `dDOB` date NOT NULL,
  `dEmail` varchar(200) NOT NULL,
  `dspecial` varchar(300) NOT NULL,
  PRIMARY KEY (`D_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`D_id`, `dFname`, `dLname`, `dAddress`, `dNumber`, `dDOB`, `dEmail`, `dspecial`) VALUES
(4, 'Muhammed', 'ihnaf', 'kalmunai', '0757841258', '1997-01-10', 'Muhammedihnaf100@gmail.com', ' Accupuncture');

-- --------------------------------------------------------

--
-- Table structure for table `timeschedule`
--

DROP TABLE IF EXISTS `timeschedule`;
CREATE TABLE IF NOT EXISTS `timeschedule` (
  `Dname` varchar(200) NOT NULL,
  `spec` varchar(200) NOT NULL,
  `Wday` varchar(100) NOT NULL,
  `sTime` time NOT NULL,
  `eTime` time NOT NULL,
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeschedule`
--

INSERT INTO `timeschedule` (`Dname`, `spec`, `Wday`, `sTime`, `eTime`, `t_id`) VALUES
('Heysqa', 'ewewef', 'Monday', '02:57:00', '03:58:00', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
