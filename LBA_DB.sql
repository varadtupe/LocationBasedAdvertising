-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2014 at 06:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lba`
--
--
-- Database: `lbaservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `i_id` int(10) NOT NULL,
  `i_image` varchar(50) NOT NULL,
  `o_id` int(10) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `o_id` int(10) NOT NULL AUTO_INCREMENT,
  `op_id` int(10) NOT NULL,
  `o_title` varchar(30) NOT NULL,
  `o_description` varchar(500) NOT NULL,
  `o_price` float NOT NULL,
  `o_discount` int(2) NOT NULL,
  `o_photo` varchar(50) NOT NULL,
  `o_address` varchar(50) NOT NULL,
  `o_area` varchar(10) NOT NULL,
  `o_city` varchar(10) NOT NULL,
  `o_lat` float NOT NULL,
  `o_long` float NOT NULL,
  `o_contact` varchar(20) NOT NULL,
  `o_category` varchar(20) NOT NULL,
  `o_expiry` date NOT NULL,
  `o_valid` tinyint(1) NOT NULL,
  `o_link` varchar(50) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`o_id`, `op_id`, `o_title`, `o_description`, `o_price`, `o_discount`, `o_photo`, `o_address`, `o_area`, `o_city`, `o_lat`, `o_long`, `o_contact`, `o_category`, `o_expiry`, `o_valid`, `o_link`) VALUES
(1, 4, '2', '3', 4, 5, 'Images/4.jpg', '8', '7', '6', 9, 0, '1', 'food', '0004-03-02', 1, '5'),
(2, 4, 'BVCOE', '45', 45, 4554, 'Images/4.jpg', '5454', '454', '5445', 19.0263, 0, '65', 'food', '2014-12-30', 1, '546'),
(3, 4, 'BVCOE', '45', 45, 4554, 'Images/4.jpg', '5454', '454', '5445', 19.0823, 0, '65', 'food', '2014-12-30', 1, '546'),
(4, 24, '45', '45', 45, 4, 'Images/24.jpg', '5', '54', '54', 19.0706, 72.9018, '54', 'food', '2014-04-05', 1, '5454'),
(5, 65, '765', '76545', 765, 76, 'Images/65.jpg', '7655', '765', '5765', 19.0162, 72.8733, '54', 'food', '2014-04-05', 1, '5454'),
(6, 5564, '654', '65476545', 65, 46, 'Images/5564.jpg', '6547655', '654', '54', 19.029, 73.0299, '564', 'food', '0004-05-06', 1, '64');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(30) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_lat` float NOT NULL,
  `p_long` float NOT NULL,
  `p_city` varchar(10) NOT NULL,
  `p_area` varchar(10) NOT NULL,
  `p_contact` varchar(20) NOT NULL,
  `p_email` varchar(20) NOT NULL,
  `p_website` varchar(20) NOT NULL,
  `p_logo` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`p_id`, `p_name`, `p_address`, `p_lat`, `p_long`, `p_city`, `p_area`, `p_contact`, `p_email`, `p_website`, `p_logo`) VALUES
(1, '1', '1', 1, 1, '1', '1', '1', '1', '1', 'logo/1.jpg'),
(2, '2', '3', 4, 5, '6', '7', '8', '9', '0', 'logo/2.jpg'),
(3, 'VST', '564', 19.0228, 73.0337, '65', '765', '765', '765', '765765', 'logo/VST.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `pwd`) VALUES
(1, 'varad', 'tupe'),
(2, 'akshaya', 'patil'),
(3, 'seema', 'ubhare');
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
