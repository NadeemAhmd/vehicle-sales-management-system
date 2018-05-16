-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2017 at 12:58 PM
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
-- Database: `vsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_id` int(11) NOT NULL,
  `cf_name` varchar(100) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `w_start` date NOT NULL,
  `w_end` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `c_address` varchar(400) DEFAULT NULL,
  `c_pass` varchar(30) NOT NULL,
  `extra` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `v_id_2` (`v_id`),
  UNIQUE KEY `c_id` (`c_id`),
  UNIQUE KEY `invoice_id` (`invoice_id`),
  KEY `v_id` (`v_id`),
  KEY `c_id_2` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `v_id`, `cf_name`, `cl_name`, `c_email`, `c_mobile`, `nid`, `w_start`, `w_end`, `payment_type`, `invoice_id`, `c_address`, `c_pass`, `extra`) VALUES
(1, 2, 'alpha', 'asd', 'abc@abc.com', 'asd', 'asd', '2017-01-05', '2017-01-24', '', NULL, NULL, 'abc', NULL),
(2, 1, 'beta', 'asd', 'xyz@xyz.com', 'asd', 'asd', '2017-01-05', '2017-01-24', '', NULL, NULL, 'xyz', NULL),
(3, 110, 'RISHAB', 'A', 'ABC@ABC.COM', '919919199', 'ABC', '2017-11-08', '2019-11-08', 'Visa/Master Card', '#IE9S110S', 'ABC', 'abc', 'AKSBK');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_logo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`manufacturer_id`),
  UNIQUE KEY `manufacturer_name` (`manufacturer_name`),
  KEY `manufacturer_name_2` (`manufacturer_name`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_logo`) VALUES
(30, 'BMW', NULL),
(32, 'LambourGini', NULL),
(33, 'Newww', NULL),
(35, 'oasdad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(100) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  PRIMARY KEY (`model_id`),
  UNIQUE KEY `model_name` (`model_name`),
  KEY `manufacturer_name` (`manufacturer_name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `model_name`, `manufacturer_name`) VALUES
(27, 'JXER', 'BMW'),
(28, 'FF23', 'LambourGini'),
(29, 'Laxus', 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `su` int(11) DEFAULT '0',
  `u_email` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `u_bday` date NOT NULL,
  `u_position` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_gender` varchar(30) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `s_question` varchar(100) DEFAULT NULL,
  `s_ans` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `email` (`u_email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `su`, `u_email`, `f_name`, `l_name`, `u_bday`, `u_position`, `u_type`, `u_pass`, `u_mobile`, `u_gender`, `u_address`, `s_question`, `s_ans`) VALUES
(9, 1, 'employee@employee.com', 'Mr', 'Employee', '2015-11-30', 'General Employee', 'Employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c', '00202', 'Male', 'kkasd', NULL, NULL),
(10, 1, 'admin@admin.com', 'Mr', 'Admin', '2015-11-30', 'Demo Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '00202', 'Male', 'kkasd', NULL, NULL),
(14, 0, 'nadeema960@gmail.com', 'Nadeem', 'Ahmed', '1997-04-21', 'ADMIN', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '7259453249', 'Male', 'Bangalore', 'What is your 1st Phone No?', '7259453249'),
(16, 0, 'xyz@xyz.com', 'xyz', 'abc', '1997-01-21', 'Employee', 'Employee', 'd16fb36f0911f878998c136191af705e', '123', 'Female', 'Somewhere', 'What is your 1st Phone No?', 'Suganya');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(100) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `b_price` double NOT NULL,
  `s_price` double DEFAULT NULL,
  `mileage` double NOT NULL,
  `add_date` date NOT NULL,
  `sold_date` date DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `registration_year` int(11) NOT NULL,
  `insurance_id` int(11) DEFAULT NULL,
  `gear` varchar(100) NOT NULL,
  `doors` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `tank` float NOT NULL,
  `image` varchar(400) DEFAULT NULL,
  `e_no` varchar(40) NOT NULL,
  `c_no` varchar(40) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `v_color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`v_id`),
  KEY `manufacturer_name` (`manufacturer_name`),
  KEY `model_name` (`model_name`),
  KEY `c_no` (`c_no`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `manufacturer_name`, `model_name`, `category`, `b_price`, `s_price`, `mileage`, `add_date`, `sold_date`, `status`, `registration_year`, `insurance_id`, `gear`, `doors`, `seats`, `tank`, `image`, `e_no`, `c_no`, `u_id`, `v_color`) VALUES
(1, 'LambourGini', 'JXER', 'asdasd', 2000, 25000, 200, '2016-12-08', NULL, 'Available', 2001, 121212, 'Auto', 0, 0, 0, '23.jpg', '', '', NULL, NULL),
(2, 'LambourGini', 'JXER', 'asdasd', 2000, 35000, 200, '2016-12-08', NULL, 'Available', 2001, 121212, 'Auto', 10, 10, 10, '20.jpg', '10', '10', NULL, NULL),
(110, 'BMW', 'JXER', 'asdasd', 2000, 50000, 200, '2016-12-08', '2017-11-08', 'Sold', 2001, 121212, 'Auto', 10, 10, 10, '14622508402015-Mitsubishi-Outlander-Sport-2-4-GT-0.jpg', '10', '10', 10, NULL),
(111, 'LambourGini', 'FF23', 'Subcompact', 2000, 55000, 3, '2017-03-01', NULL, 'Available', 2002, 2147483647, 'Auto', 3, 3, 22, '19.jpg', '23232', '', NULL, 'Black');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `vehicle` (`v_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`manufacturer_name`) REFERENCES `manufacturer` (`manufacturer_name`) ON DELETE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`manufacturer_name`) REFERENCES `model` (`manufacturer_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicle_ibfk_2` FOREIGN KEY (`model_name`) REFERENCES `model` (`model_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicle_ibfk_3` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
