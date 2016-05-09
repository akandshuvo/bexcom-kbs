-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 09:15 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bexcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `after_sale_service_location`
--

CREATE TABLE IF NOT EXISTS `after_sale_service_location` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_sale_service_location`
--

INSERT INTO `after_sale_service_location` (`id`, `division`, `district`, `upazilla`, `thana`, `post_code`, `area_village`) VALUES
(1, 'dhaka', 'dhaka', 'mirpur', 'mirpur', '1216', 'Mirpur 12'),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', ''),
(6, '', '', '', '', '', ''),
(7, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', ''),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(11, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(12, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(13, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(14, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(15, 'Comilla', 'Chadpur', 'kochua', 'kochia', '1111', 'bal'),
(16, 'chittagong', '', '', '', '', ''),
(17, 'chittagong', '', '', '', '', ''),
(18, 'Rajhshahi', '', '', '', '', ''),
(19, 'Rajhshahi', '', '', '', '', ''),
(20, 'Rajhshahi', '', '', '', '', ''),
(21, 'Rajhshahi', '', '', '', '', ''),
(22, 'Rajhshahi', '', '', '', '', ''),
(23, 'Rajhshahi', '', '', '', '', ''),
(24, 'Rajhshahi', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `installer_address`
--

CREATE TABLE IF NOT EXISTS `installer_address` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installer_address`
--

INSERT INTO `installer_address` (`id`, `division`, `district`, `upazilla`, `thana`, `post_code`, `area_village`) VALUES
(1, '', '', '', '', '', ''),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(6, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(7, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(8, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(9, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(10, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(11, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(12, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(13, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(14, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(15, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(16, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(17, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(18, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(19, '', '', '', '', '', ''),
(20, '', '', '', '', '', ''),
(21, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(22, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(23, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(24, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(25, '', '', '', '', '', ''),
(26, '', '', '', '', '', ''),
(27, 'chittagong', '', '', '', '', ''),
(28, 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi'),
(29, 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi'),
(30, 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi'),
(31, 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi', 'Rajhshahi');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_location`
--

CREATE TABLE IF NOT EXISTS `retailer_location` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_location`
--

INSERT INTO `retailer_location` (`id`, `division`, `district`, `upazilla`, `thana`, `post_code`, `area_village`) VALUES
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', 'Bogra', 'kahalu', 'kahalu', '1233', 'Niamotpur'),
(0, 'Rajhshahi', '', '', '', '', ''),
(0, 'Rajhshahi', '', '', '', '', ''),
(0, 'Rajhshahi', '', '', '', '', ''),
(0, 'Rajhshahi', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `password` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_id`, `password`, `level`, `login_time`, `logout_time`) VALUES
(1, 'Shovon Rahman Shuvo', '2145', 123456, 1, '2016-03-13 11:01:15', '0000-00-00 00:00:00'),
(2, 'Sirajum Monir Parvez', '1735', 123456, 2, '2016-03-13 11:01:01', '2016-03-13 10:55:25'),
(3, 'Md Ashraf Hossain', '2345', 123456, 2, '2016-03-12 18:00:00', '2016-03-12 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `after_sale_service_location`
--
ALTER TABLE `after_sale_service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_address`
--
ALTER TABLE `installer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `after_sale_service_location`
--
ALTER TABLE `after_sale_service_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `installer_address`
--
ALTER TABLE `installer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
