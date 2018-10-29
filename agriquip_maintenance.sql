-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 04:24 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriquip_maintenance`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `company_code` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_code`, `description`) VALUES
(1, 'Malaysia Airlines', 'MH', '3 years contract'),
(2, 'Pos Aviation', 'PA', 'Provides two equipments'),
(3, 'AirAsia', 'AA', 'PIC: Matt Swan');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `equipment_no` varchar(200) NOT NULL,
  `manufacture_year` varchar(200) NOT NULL,
  `seriel_no` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `type_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `type_name`, `equipment_no`, `manufacture_year`, `seriel_no`, `remark`, `type_id`) VALUES
(1, 'AAPD - Pallet Dolley', 'AAPD001', '2012', '12345', 'Started on 1/10/2017', 3),
(2, 'MHPD - Pallet Dolley', 'MHPD001', '2012', '1002', 'To be inspected on 12/11', 4),
(3, 'PACT - Container Trolley', 'PACT003', '2013', '1313', 'Started on 1/10/2017', 4),
(4, 'MHBT - Baggage Trolley', 'MHBT001', '2012', '1001', 'Started on 1/10/2017', 4);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_type`
--

DROP TABLE IF EXISTS `equipment_type`;
CREATE TABLE IF NOT EXISTS `equipment_type` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_type`
--

INSERT INTO `equipment_type` (`type_id`, `type_name`, `description`, `company_id`, `company_name`) VALUES
(1, 'MHBT - Baggage Trolley', 'For lotso baggages', 1, 'Malaysia Airlines'),
(2, 'PACT - Container Trolley', 'Massive trolleys', 2, 'Pos Aviation'),
(3, 'AAPD - Pallet Dolley', 'Wide and large', 3, 'AirAsia'),
(4, 'MHPD - Pallet Dolley', 'Blue color', 1, 'Malaysia Airlines'),
(5, 'MHCT - Container Trolley', 'Bigger trolley', 3, 'Malaysia Airlines');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `part_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `part_no` varchar(200) NOT NULL,
  `part_name` varchar(200) NOT NULL,
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`part_id`, `type_name`, `part_no`, `part_name`) VALUES
(1, 'MHBT - Baggage Trolley', 'BT-3.1', 'A-Frame'),
(2, 'PACT - Container Trolley', 'CT-1.0', 'Tow Bar');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

DROP TABLE IF EXISTS `repair`;
CREATE TABLE IF NOT EXISTS `repair` (
  `repair_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `equipment_no` varchar(200) NOT NULL,
  `date_received` varchar(20) NOT NULL,
  `submitted_by` varchar(200) NOT NULL,
  `date_released` varchar(20) NOT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`repair_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, `type_name`, `equipment_no`, `date_received`, `submitted_by`, `date_released`, `remark`) VALUES
(1, 'MHBT - Baggage Trolley', 'MHBT001', '2018-10-01', 'from session', '2018-10-04', 'Changed rollers'),
(4, 'MHBT - Baggage Trolley', 'MHBT001', '2018-10-22', 'from session', '2018-10-24', 'Change wheels'),
(5, 'MHBT - Baggage Trolley', 'MHBT001', '', '', '', ''),
(6, 'MHBT - Baggage Trolley', 'MHBT001', '', '', '', ''),
(7, 'MHBT - Baggage Trolley', 'MHBT001', '2018-10-30', '', '2018-10-31', ''),
(8, 'PACT - Container Trolley', 'PACT003', '', '', '', ''),
(9, 'MHBT - Baggage Trolley', 'MHBT001', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `repair_part`
--

DROP TABLE IF EXISTS `repair_part`;
CREATE TABLE IF NOT EXISTS `repair_part` (
  `repairpart_id` int(20) NOT NULL AUTO_INCREMENT,
  `part_no` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `repair_id` int(20) NOT NULL,
  PRIMARY KEY (`repairpart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair_part`
--

INSERT INTO `repair_part` (`repairpart_id`, `part_no`, `quantity`, `repair_id`) VALUES
(1, 'CT-1.0', 1, 4),
(2, '$part_no', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(20) NOT NULL,
  `staff_password` varchar(20) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `staff_password`, `staff_name`) VALUES
(1, 'staff', 'staff', 'staff ads');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE IF NOT EXISTS `supervisor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `supervisor_id` varchar(20) NOT NULL,
  `supervisor_password` varchar(20) NOT NULL,
  `supervisor_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `supervisor_id`, `supervisor_password`, `supervisor_name`) VALUES
(1, 'supervisor', 'supervisor', 'supervisor ads');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
