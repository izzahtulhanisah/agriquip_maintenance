-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2018 at 02:12 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_code`, `description`) VALUES
(1, 'Malaysia Airlines', 'MH', '5 years contract'),
(2, 'Pos Aviation', 'PA', '5 equipment types involved'),
(3, 'Malindo Air', 'MA', '3 years contract. PIC: Mr. Tang');

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
  `owner` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `type_name`, `equipment_no`, `manufacture_year`, `seriel_no`, `owner`, `remark`) VALUES
(3, 'MHBT - Baggage Trolley', 'MHBT003', '2013', '1212', 'AirAsia', ''),
(5, 'MHBT - Baggage Trolley', 'MHBT005', '', '', '', ''),
(4, 'MHBT - Baggage Trolley', 'MHBT004', '', '', '', ''),
(2, 'MHBT - Baggage Trolley', 'MHBT002', '', '', '', ''),
(1, 'MHBT - Baggage Trolley', 'MHBT001', '', '', '', ''),
(6, 'MHBT - Baggage Trolley', 'MHBT006', '', '', '', ''),
(7, 'MHBT - Baggage Trolley', 'MHBT007', '', '', '', ''),
(8, 'MHBT - Baggage Trolley', 'MHBT008', '', '', '', ''),
(9, 'MHBT - Baggage Trolley', 'MHBT009', '', '', '', ''),
(10, 'MHBT - Baggage Trolley', 'MHBT010', '', '', '', ''),
(11, 'MHBT - Baggage Trolley', 'MHBT011', '', '', '', ''),
(12, 'MHBT - Baggage Trolley', 'MHBT012', '', '', '', ''),
(13, 'MHBT - Baggage Trolley', 'MHBT013', '', '', '', ''),
(14, 'MHBT - Baggage Trolley', 'MHBT014', '', '', '', ''),
(15, 'MHBT - Baggage Trolley', 'MHBT015', '', '', '', ''),
(16, 'MHBT - Baggage Trolley', 'MHBT016', '', '', '', ''),
(17, 'MHBT - Baggage Trolley', 'MHBT017', '', '', '', ''),
(18, 'MHBT - Baggage Trolley', 'MHBT018', '', '', '', ''),
(19, 'MHBT - Baggage Trolley', 'MHBT019', '', '', '', ''),
(20, 'MHBT - Baggage Trolley', 'MHBT020', '', '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_type`
--

INSERT INTO `equipment_type` (`type_id`, `type_name`, `description`, `company_id`, `company_name`) VALUES
(29, 'MHPD - Pallet Dolley', 'Pallettes', 0, '1'),
(28, 'MHBT - Baggage Trolley', 'A massive trolley', 0, '1'),
(30, 'MHCT - MHCT', '', 0, '2'),
(27, 'MHCT - Container Trolley', 'Carry lotso containers', 0, '1'),
(31, 'PABT - Baggage Trolley', 'One hundred trolleys', 0, ''),
(32, 'PACT - Container Trolley', 'Two hundreds trolleys', 0, 'Pos Aviation'),
(33, 'MAPD - Pallet Dolley', '', 3, 'Malindo Air');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`part_id`, `type_name`, `part_no`, `part_name`) VALUES
(3, 'MHCT - Container Trolley', 'CT-6.0', 'Roller A'),
(2, 'MHBT - Baggage Trolley', 'BT-3.1', 'A-Frame'),
(4, 'MHPD - Pallet Dolley', 'PD-3.0', 'Rigid Fork'),
(5, '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, `type_name`, `equipment_no`, `date_received`, `submitted_by`, `date_released`, `remark`) VALUES
(11, 'MHBT - Baggage Trolley', 'MHBT013', '2018-10-01', '', '2018-10-05', ''),
(12, 'MHBT - Baggage Trolley', 'MHBT014', '2018-10-08', '', '2018-10-12', ''),
(14, 'MHBT - Baggage Trolley', 'MHBT011', '2018-10-23', 'from session', '2018-10-24', 'Inspection');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
