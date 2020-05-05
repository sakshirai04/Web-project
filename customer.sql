-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2019 at 08:01 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--
CREATE DATABASE IF NOT EXISTS `customer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `customer`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(13) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `email`, `num`, `password`) VALUES
(1, 'Jay', 'Patel', 'jpjp490@gmail.com', '8655761824', '12345678'),
(8, 'rajvi', 'shah', 'rshah07@gmail.com', '1234565587', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

DROP TABLE IF EXISTS `product1`;
CREATE TABLE IF NOT EXISTS `product1` (
  `name` varchar(20) NOT NULL,
  `mobile` int(12) NOT NULL,
  `shoes` varchar(20) NOT NULL,
  `brand` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`name`, `mobile`, `shoes`, `brand`) VALUES
('rajvi', 1234567890, '6', 'xfghjkl'),
('rajvi', 1234567890, '6', 'xfghjkl'),
('sakshi', 123456789, '5', 'sdfgh'),
('hjkl', 234545678, '5', 'asdf'),
('jay', 1234567890, '3', 'hjk'),
('jay', 1234567890, '3', 'hjk'),
('hjkl', 123456789, '5', 'asdf'),
('jay', 1234567890, '8', 'abc'),
('jay', 1234567890, '8', 'abc'),
('jay', 1234567890, '8', 'abc'),
('jay', 1234567890, '8', 'abc'),
('kajal', 1234567890, '6', 'bata'),
('sakshi', 556567890, '5', 'nike'),
('jayz', 123456789, '5', 'bata'),
('hjkl', 123456789, '3', 'abc'),
('jay', 1234567890, '5', 'bata'),
('jay', 1234567890, '5', 'bata');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
