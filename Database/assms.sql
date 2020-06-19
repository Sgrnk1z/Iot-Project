-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2019 at 10:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_contact` text NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_email` (`admin_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_contact`) VALUES
(1, 'Harshal Patil', 'h@gmail.com', 'harshal', '9106501397');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` text NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'Dindoli', 1),
(2, 'Adajan', 1),
(3, 'ahmedabad_ki_city', 2);

-- --------------------------------------------------------

--
-- Table structure for table `assaign_problem`
--

CREATE TABLE IF NOT EXISTS `assaign_problem` (
  `assaign_no/` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` varchar(20) NOT NULL,
  `assaign_date` date NOT NULL,
  `assaign_time` time NOT NULL,
  `tech_id` int(11) NOT NULL,
  `repaired_date` date NOT NULL,
  `repaired_time` time NOT NULL,
  PRIMARY KEY (`assaign_no/`),
  KEY `st_id` (`st_id`,`tech_id`),
  KEY `tech_id` (`tech_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `camera_id` varchar(20) NOT NULL,
  `sensor_id` varchar(20) NOT NULL,
  `area_id` int(11) NOT NULL,
  KEY `sensor_id` (`sensor_id`,`area_id`),
  KEY `area_id` (`area_id`),
  KEY `camera_id` (`camera_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`camera_id`, `sensor_id`, `area_id`) VALUES
('Camera1', 'Sensor_1', 1),
('Camera2', 'Sensor_1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` text NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Surat'),
(2, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `fault_streetlight`
--

CREATE TABLE IF NOT EXISTS `fault_streetlight` (
  `fault_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `fault_date` date NOT NULL,
  `fault_time` time NOT NULL,
  PRIMARY KEY (`fault_id`),
  KEY `st_id` (`st_id`,`tech_id`),
  KEY `tech_id` (`tech_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE IF NOT EXISTS `sensor` (
  `sensor_id` varchar(20) NOT NULL,
  `area_id` int(11) NOT NULL,
  UNIQUE KEY `sensor_id` (`sensor_id`),
  KEY `area_id` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`sensor_id`, `area_id`) VALUES
('Sensor_1', 1),
('Sensor_2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `streetlight`
--

CREATE TABLE IF NOT EXISTS `streetlight` (
  `st_id` varchar(20) NOT NULL,
  `st_status` int(11) NOT NULL,
  `power_consume` double NOT NULL,
  `camera_id` varchar(20) NOT NULL,
  UNIQUE KEY `st_id` (`st_id`),
  KEY `city_id` (`camera_id`),
  KEY `camera_id` (`camera_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streetlight`
--

INSERT INTO `streetlight` (`st_id`, `st_status`, `power_consume`, `camera_id`) VALUES
('1SC260_5', 2, 0, 'Camera1'),
('1SC280_1', 2, 0, 'Camera2'),
('1SC387_2', 2, 0, 'Camera1'),
('1SC496_5', 0, 0, 'Camera1'),
('1SC569_1', 0, 0, 'Camera2'),
('1SC656_2', 0, 0, 'Camera1'),
('1SC69_1', 0, 0, 'Camera1'),
('1SC750_2', 0, 0, 'Camera1'),
('1SC763_5', 0, 0, 'Camera1'),
('1SC821_5', 0, 0, 'Camera1'),
('1SC825_1', 0, 0, 'Camera2'),
('1SC845_1', 0, 0, 'Camera2'),
('1SC906_1', 0, 0, 'Camera2'),
('1SC991_5', 0, 0, 'Camera1');

-- --------------------------------------------------------

--
-- Table structure for table `switch_problem`
--

CREATE TABLE IF NOT EXISTS `switch_problem` (
  `switch_id` int(11) NOT NULL AUTO_INCREMENT,
  `switch_reason` text NOT NULL,
  `tech_id` int(11) NOT NULL,
  `switch_time` time NOT NULL,
  `switch_date` date NOT NULL,
  PRIMARY KEY (`switch_id`),
  KEY `tech_id` (`tech_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE IF NOT EXISTS `technician` (
  `tech_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_name` text NOT NULL,
  `tech_email` varchar(20) NOT NULL,
  `tech_password` text NOT NULL,
  `tech_location` text NOT NULL,
  `tech_contact` bigint(20) NOT NULL,
  `area_id` int(11) NOT NULL,
  PRIMARY KEY (`tech_id`),
  UNIQUE KEY `tech_email` (`tech_email`),
  UNIQUE KEY `tech_contact` (`tech_contact`),
  KEY `area_id` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`tech_id`, `tech_name`, `tech_email`, `tech_password`, `tech_location`, `tech_contact`, `area_id`) VALUES
(7, 'Mohan bhombe', 'm@gmail.com', '0', '0', 9726548188, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assaign_problem`
--
ALTER TABLE `assaign_problem`
  ADD CONSTRAINT `assaign_problem_ibfk_2` FOREIGN KEY (`tech_id`) REFERENCES `technician` (`tech_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assaign_problem_ibfk_3` FOREIGN KEY (`st_id`) REFERENCES `streetlight` (`st_id`);

--
-- Constraints for table `camera`
--
ALTER TABLE `camera`
  ADD CONSTRAINT `camera_ibfk_2` FOREIGN KEY (`sensor_id`) REFERENCES `sensor` (`sensor_id`),
  ADD CONSTRAINT `camera_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `fault_streetlight`
--
ALTER TABLE `fault_streetlight`
  ADD CONSTRAINT `fault_streetlight_ibfk_2` FOREIGN KEY (`tech_id`) REFERENCES `technician` (`tech_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `sensor_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `streetlight`
--
ALTER TABLE `streetlight`
  ADD CONSTRAINT `streetlight_ibfk_1` FOREIGN KEY (`camera_id`) REFERENCES `camera` (`camera_id`);

--
-- Constraints for table `switch_problem`
--
ALTER TABLE `switch_problem`
  ADD CONSTRAINT `switch_problem_ibfk_1` FOREIGN KEY (`tech_id`) REFERENCES `technician` (`tech_id`);

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
