-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2024 at 09:16 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glintqnj_pspr`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
`id` int(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `createdOn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fullName`, `userName`, `password`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(1, 'Admin', 'admin', '123', '2024-01-29 06:51:21.263459', '0', '0000-00-00 00:00:00.000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`id` int(155) NOT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `type` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `total_post` varchar(100) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `exam_date_start` varchar(255) DEFAULT NULL,
  `exam_date_end` varchar(255) NOT NULL,
  `result_date` varchar(255) DEFAULT NULL,
  `admit_card_date` varchar(255) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `type`, `amount`, `total_post`, `eligibility`, `age`, `status`, `exam_date_start`, `exam_date_end`, `result_date`, `admit_card_date`, `created_by`, `created_on`, `updated_on`, `updated_by`) VALUES
(1, 'SUPERVISOR ', 'Field work ', 12300.00, '75', 'Inter ', '18-40', '1', '05-02-2024', '05-02-2024', '10-02-2024', '03-02-2024', 'Admin', '2024-01-31 21:01:24', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE IF NOT EXISTS `farmerregistration` (
`id` int(255) NOT NULL,
  `farmerName` varchar(100) NOT NULL,
  `farmerMobile` varchar(12) NOT NULL,
  `farmerDistrict` varchar(200) NOT NULL,
  `farmerMsg` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE IF NOT EXISTS `imagegallery` (
`id` int(255) NOT NULL,
  `galleryTitle` varchar(255) NOT NULL,
  `galleryDescription` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`id`, `galleryTitle`, `galleryDescription`, `created_on`, `created_by`) VALUES
(2, 'Meeting ', 'Meeting ', '2024-02-01 09:13:07', 'Admin'),
(3, 'Best Memory of Group', 'Best Memory of Group', '2024-07-15 10:09:06', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `news_gallery`
--

CREATE TABLE IF NOT EXISTS `news_gallery` (
`id` int(255) NOT NULL,
  `newsTitle` varchar(255) NOT NULL,
  `newsDescription` varchar(2000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news_gallery`
--

INSERT INTO `news_gallery` (`id`, `newsTitle`, `newsDescription`, `status`, `created_on`, `created_by`) VALUES
(1, 'Cisf', 'Cisf', 0, '2024-07-15 10:12:15', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`id` int(255) NOT NULL,
  `n_title` varchar(200) NOT NULL,
  `n_description` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `n_title`, `n_description`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(2, 'Ajajd', '', '2024-07-15 10:07:24', 'Admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pid` int(11) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `transaction_id` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `request_id` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `dor` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `father_name` varchar(155) DEFAULT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `name_ofkin` varchar(255) DEFAULT NULL,
  `mobile_ofkin` bigint(11) NOT NULL,
  `status` varchar(155) DEFAULT NULL,
  `last_unit` varchar(255) DEFAULT NULL,
  `nearest_unit` varchar(255) DEFAULT NULL,
  `cor_address` text,
  `address1` text,
  `address2` text,
  `address3` text,
  `district` text,
  `state` text,
  `pincode` text,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `registration_no` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `dor`, `dob`, `gender`, `father_name`, `bloodgroup`, `rank`, `name_ofkin`, `mobile_ofkin`, `status`, `last_unit`, `nearest_unit`, `cor_address`, `address1`, `address2`, `address3`, `district`, `state`, `pincode`, `mobile`, `email`, `registration_no`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(48, 'ANAND PATEL', '2024-07-03', '2024-07-12', 'MALE', 'ANAND', 'O-', 'ADG', 'NEXT KIN', 32145698789, '1', 'LAST UNIT', 'NEAREST UNIT', 'HS NO', 'LAN NO', 'POST OFFICE', 'MACHALISHAHAR', 'JAUNPUR', 'UP', '222202', '9984087027', 'gipl@gmail.com', '1154037326', '2024-07-12 11:13:44', 'USER', NULL, NULL),
(49, 'ANAND PATEL', '2024-07-11', '2024-07-13', 'MALE', 'RAM', 'O-', 'CO', 'KK', 0, '2', 'JAUNPUR', 'VARANSHI', 'NEQ', 'ANAN', 'AJAJ', 'AJAJ', 'jaunpur', 'KKK', '222202', '999999999', 'giplanand@gmail.com', '1187888245', '2024-07-13 07:54:40', 'USER', NULL, NULL),
(50, '55 66', '2024-07-11', '2024-07-12', 'MALE', '555', 'O-', 'IG', 'LL', 0, '2', 'LLL', 'LLL', 'LLL', 'LLL', 'LLL', 'LL', 'LL', 'LL', 'll', 'lll', 'lll@gmail.com', '1369957386', '2024-07-13 12:27:08', 'USER', NULL, NULL),
(51, 'ANAND ANAND', '2024-07-12', '2024-07-13', 'MALE', 'ANAND', 'O-', 'HC', '4444', 0, '0', 'ANANDJ', 'ANAND', 'KKJ', 'HHH', 'JJJKK', 'HHHH', 'HHH', 'UP', '222222', '6655', 'ksksk@gmail.com', '1274211218', '2024-07-13 13:34:58', 'USER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE IF NOT EXISTS `videogallery` (
`id` int(255) NOT NULL,
  `videoTitle` varchar(255) NOT NULL,
  `videoDescription` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `exam_name` (`exam_name`), ADD UNIQUE KEY `exam_name_2` (`exam_name`);

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_gallery`
--
ALTER TABLE `news_gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_gallery`
--
ALTER TABLE `news_gallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
