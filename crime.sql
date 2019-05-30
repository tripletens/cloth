-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 06:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`admin_id`, `fullname`, `username`, `password`) VALUES
(1, 'onyinye Ukamaka', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agency_tb`
--

CREATE TABLE IF NOT EXISTS `agency_tb` (
  `user_id` varchar(20) NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `agency_name` varchar(225) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency_tb`
--

INSERT INTO `agency_tb` (`user_id`, `ipaddress`, `agency_name`, `username`, `password`) VALUES
('118-8980', '192.68.0.1', 'Nigerian Police Force(NPF)', 'npf', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `company_file`
--

CREATE TABLE IF NOT EXISTS `company_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` text NOT NULL,
  `file_description` text NOT NULL,
  `file_access` varchar(50) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_file`
--

INSERT INTO `company_file` (`id`, `file_name`, `file_description`, `file_access`, `date_uploaded`) VALUES
(1, 'uploads/6604_wp.docx', 'This profile is all about our company', 'Public', '2017-11-13 04:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `crime_tb`
--

CREATE TABLE IF NOT EXISTS `crime_tb` (
  `byWho` varchar(50) NOT NULL,
  `cirme_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `state_origin` varchar(50) NOT NULL,
  `crime` text NOT NULL,
  `complainant` varchar(100) NOT NULL,
  `complainant_address` text NOT NULL,
  `complainant_phone` varchar(30) NOT NULL,
  `type_case` varchar(225) NOT NULL,
  `complainant_statement` text NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`cirme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_tb`
--

INSERT INTO `crime_tb` (`byWho`, `cirme_id`, `name`, `sex`, `address`, `age`, `marital_status`, `state_origin`, `crime`, `complainant`, `complainant_address`, `complainant_phone`, `type_case`, `complainant_statement`, `date_added`) VALUES
('Nigerian Police Force(NPF)', '-788-7068', 'obidi Emma', 'Male', '65 Bid road, Onitsha', 24, 'Married', 'EDO', 'stealing', 'Obinna Ike ', 'lagos Ihiala', '8083456692', 'Fraud', 'Arrest hi fom', '2018-07-15 06:56:22'),
('Nigerian Police Force(NPF)', '810-6489', 'Okeke Uju', 'Female', 'No 2 nsukwu Village, Awka', 19, 'Single', 'ANAMBRA', 'Chidi Ike', 'urudiora, ogidi', 'Murder', '7035623069', 'Murder', 'She murder my Parents', '2018-07-15 07:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `download_logs`
--

CREATE TABLE IF NOT EXISTS `download_logs` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `mac_address` varchar(50) NOT NULL,
  `file_id` int(11) NOT NULL,
  `date_download` datetime NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `download_logs`
--

INSERT INTO `download_logs` (`d_id`, `user_id`, `ip_address`, `mac_address`, `file_id`, `date_download`) VALUES
(1, '67551', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-13 08:26:33'),
(2, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:18:07'),
(3, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:19:51'),
(4, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:20:34'),
(5, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:22:23'),
(6, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:25:40'),
(7, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:29:46'),
(8, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:31:01'),
(9, '37825', '192.0.0.23', '4.0.0.0b.12a', 1, '2017-11-20 01:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `ip_address`
--

CREATE TABLE IF NOT EXISTS `ip_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `date_registered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ip_address`
--

INSERT INTO `ip_address` (`id`, `ip`, `date_registered`) VALUES
(1, '192.0.0.23', '2017-11-12 22:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `mac_address`
--

CREATE TABLE IF NOT EXISTS `mac_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mac` varchar(50) NOT NULL,
  `date_registered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mac_address`
--

INSERT INTO `mac_address` (`id`, `mac`, `date_registered`) VALUES
(1, '4.0.0.0b.12a', '2017-11-13 07:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `ip_color` varchar(20) NOT NULL,
  `mac_address` varchar(50) NOT NULL,
  `mac_color` varchar(20) NOT NULL,
  `date_logged` datetime NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`log_id`, `user_id`, `ip_address`, `ip_color`, `mac_address`, `mac_color`, `date_logged`) VALUES
(3, '71564', '192.0.0.23', 'success', '0.0.4.12a', 'danger', '2017-11-13 07:16:39'),
(4, '37825', '127.0.0.1', 'danger', '4.0.0.0b.12a', 'success', '2017-11-13 07:20:07'),
(5, '67551', '192.0.0.23', 'success', '4.0.0.0b.12a', 'success', '2017-11-13 07:35:31'),
(6, '37825', '192.0.0.23', 'success', '4.0.0.0b.12a', 'success', '2017-11-20 00:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `access_code` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active',
  `status_color` varchar(50) NOT NULL DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `user_role`, `access_code`, `status`, `status_color`) VALUES
('19014', 'Emma', 'obika', 'emma@yahoo.com', '09033434443', 'Ansu Road, Ihiala anambra', 'Accountant', '228-6345', 'de-activated', 'info'),
('71564', 'Chika', 'Ike', 'chika@yahoo.com', '08083456692', '65 Bid road, Onitsha', 'Technical Staff', '516-8800', 'Blocked', 'danger'),
('37825', 'Chinwe', 'Ezeamama', 'chinwe@yahoo.com', '07035623069', 'Umudioka\r\nIhiala', 'Network Admin', '683-5879', 'active', 'success'),
('67551', 'onyinye', 'ukamaka', 'onyi@yahoo.com', '08034565454', 'Akwa Road Osha', 'Technical Staff', '260-3948', 'active', 'success');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
