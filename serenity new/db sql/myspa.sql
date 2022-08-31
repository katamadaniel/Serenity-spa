-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 08:24 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myspa`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `full_names` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `service` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_names`, `email`, `phone_no`, `service`, `time`) VALUES
(4, 'angela wambui k', 'angelawambui@gmail.com', 702457896, 'Nail Care', 'Wenesday 8:00am-10:00am'),
(5, 'chege Robson', 'chege@yahoo.com', 1478963, 'Head Massage', 'Wenesday 8:00am-10:00am'),
(6, 'kanyingi victor', 'kvictor@gmail.com', 236589, 'Gym Dynamics', 'Thursady 8:00am-10:00am'),
(7, 'nobert rono', 'kiprono.nobert@yahoo.com', 2365874, 'Body Massage', 'Thursady 8:00am-10:00am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
