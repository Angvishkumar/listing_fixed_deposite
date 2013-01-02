-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2012 at 05:48 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vevento_cumulative_interest`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing_information`
--

CREATE TABLE IF NOT EXISTS `listing_information` (
  `Principal_Amount` decimal(20,2) NOT NULL,
  `Rate_Of_Interest` double NOT NULL,
  `Tenure_Of_deposite` double NOT NULL,
  `Total_Interest` double(20,2) NOT NULL,
  `Maturity_Amount` double(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_information`
--

INSERT INTO `listing_information` (`Principal_Amount`, `Rate_Of_Interest`, `Tenure_Of_deposite`, `Total_Interest`, `Maturity_Amount`) VALUES
('1200.00', 5, 6, 340064800114.16, 340064801314.16),
('1500.00', 0.043, 6, 1938.84, 3438.84),
('10000.00', 5, 6, 2833873334284.67, 2833873344284.70);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE IF NOT EXISTS `user_information` (
  `F_Name` varchar(10) NOT NULL,
  `L_Name` varchar(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
