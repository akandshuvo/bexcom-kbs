-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 09:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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

CREATE TABLE `after_sale_service_location` (
  `id` int(16) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_sale_service_location`
--

INSERT INTO `after_sale_service_location` (`id`, `division`, `district`, `upazilla`, `thana`, `post_code`, `area_village`) VALUES
(1, 'dhaka', 'dhaka', 'mirpur', 'mirpur', '1216', 'Mirpur 12');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `root` varchar(16) NOT NULL,
  `sub_root` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installer_address`
--

CREATE TABLE `installer_address` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retailer_location`
--

CREATE TABLE `retailer_location` (
  `id` int(11) NOT NULL,
  `division` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `upazilla` varchar(32) NOT NULL,
  `thana` varchar(32) NOT NULL,
  `post_code` varchar(32) NOT NULL,
  `area_village` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_location`
--

CREATE TABLE `upload_location` (
  `id` int(11) NOT NULL,
  `file` varchar(252) NOT NULL,
  `type` varchar(252) NOT NULL,
  `size` varchar(252) NOT NULL,
  `location` varchar(252) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `root` varchar(64) NOT NULL,
  `sub_root` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `password` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_id`, `password`, `level`, `login_time`, `logout_time`) VALUES
(1, 'Shovon Rahman Shuvo', '2145', 123456, 1, '2016-03-13 11:01:15', '0000-00-00 00:00:00'),
(2, 'Sirajum Monir Parvez', '1735', 123456, 3, '2016-05-12 06:52:13', '2016-03-13 10:55:25'),
(3, 'Md Ashraf Hossain', '2345', 123456, 2, '2016-03-12 18:00:00', '2016-03-12 18:00:00'),
(4, 'Faruque', '00123', 123456, 4, '2016-05-12 06:52:18', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `after_sale_service_location`
--
ALTER TABLE `after_sale_service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_location`
--
ALTER TABLE `retailer_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_location`
--
ALTER TABLE `upload_location`
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
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `retailer_location`
--
ALTER TABLE `retailer_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload_location`
--
ALTER TABLE `upload_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
