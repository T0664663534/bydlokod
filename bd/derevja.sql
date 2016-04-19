-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 09:19 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `derevja`
--

-- --------------------------------------------------------

--
-- Table structure for table `derevja`
--

CREATE TABLE IF NOT EXISTS `derevja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `family` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `kind` varchar(50) NOT NULL,
  `height` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `derevja`
--

INSERT INTO `derevja` (`id`, `type`, `family`, `name`, `age`, `kind`, `height`) VALUES
(2, 'asasdf', 'asdfasdf', 'asdfasdf', 1223, 'asdfsa', 3244),
(4, 'Ñ„Ñ€ÑƒÐºÑ‚', 'Ñ„Ñ€ÑƒÐºÑ‚ Ð¾Ñ…ÑƒÐµÐ½Ð½Ñ‹Ð¹', 'Ñ„Ñ€ÑƒÐºÑ‚ Ð¾Ñ…ÑƒÐµÐ½Ð½Ñ‹Ð¹ Ð²ÑƒÐ»ÑŒÐ³Ð°Ñ€Ð½Ñ‹Ð¹', 42, 'Ð´Ð° Ð±Ð»ÑÐ´ÑŒ', 42);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
