-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2016 at 10:09 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `index`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemo`
--

CREATE TABLE IF NOT EXISTS `addemo` (
  `name` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `officepin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addemo`
--

INSERT INTO `addemo` (`name`, `address`, `email`, `contactno`, `id`, `password`, `officepin`) VALUES
('nikita deore', 'collage road', 'nik@gamil.com', '9856243258', 'nik', 'nik', '423206'),
('sapana more', 'collector patta', 'spn@gmail.com', '8965327415', 'spn', 'spn', '423865'),
('roshnee khairnar', 'malegaon camp', 'rosh@gmail.com', '9856832545', 'rosh', 'rosh', '423203'),
('pratiksha rajput', 'prerana sociaty, camp malegaon', 'prt@gmail.com', '665778887', 'prt', 'prt', '74552');

-- --------------------------------------------------------

--
-- Table structure for table `demo1`
--

CREATE TABLE IF NOT EXISTS `demo1` (
  `Entrynumber` varchar(80) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(60) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo1`
--

INSERT INTO `demo1` (`Entrynumber`, `date`, `time`, `description`) VALUES
('1', '2016-03-25', '13:03', 'chandwad'),
('1', '2016-04-01', '13:03', 'pimpalgaon'),
('2', '2016-05-11', '14:34', 'yeola'),
('2', '2016-05-21', '12:23', 'shirdi'),
('3', '2016-03-18', '12:32', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `rentry`
--

CREATE TABLE IF NOT EXISTS `rentry` (
  `Entrynumber` varchar(20) NOT NULL,
  `PrepaidModelRs` varchar(50) NOT NULL,
  `Weight` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `TName` varchar(50) NOT NULL,
  `TAddress` varchar(80) NOT NULL,
  `POName` varchar(30) NOT NULL,
  `PinCode` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `DOR` varchar(30) NOT NULL,
  `ServiceTax` varchar(50) NOT NULL,
  `TotalAmt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentry`
--

INSERT INTO `rentry` (`Entrynumber`, `PrepaidModelRs`, `Weight`, `Name`, `Address`, `Email`, `ContactNo`, `TName`, `TAddress`, `POName`, `PinCode`, `City`, `DOR`, `ServiceTax`, `TotalAmt`) VALUES
('1', '20', '50', 'sapana more', 'collector patta', 'spn@gmail.com', '9856234010', 'roshani khairnar', 'sidko,nasik', 'spooffice', '325698', 'malegaon', '2016-03-18', '65', '1065'),
('2', '80', '10', 'nikita deore', 'cr road', 'nik@gmail.com', '9856147523', 'diksha nikam', 'pune', 'po pune', '589632', 'nasik', '2016-06-23', '89', '889'),
('3', '132', '12', 'raj', 'malegaon', 'assa@gmail.com', '545462552', 'ragav', 'shimla', 'soffice', '325698', 'malegaon', '2016-04-05', '23', '1607'),
('3', '35', '60', 'sam', 'nasik', 'sam@gmail.com', '8955885555', 'rosh', 'malegaon', 'pomalegaon', '423203', 'nasik', '2016-06-29', '65', '2165'),
('4', '56', '52', 'sudhir', 'malegaon camp', 'sudhir@gmail.com', '9856321475', 'jay', 'nasik', 'ponasik', '4256304', 'malegaon', '2016-03-17', '12', '2924');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE IF NOT EXISTS `shipment` (
  `Entrynumber` varchar(20) NOT NULL,
  `CBName` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `vehicle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`Entrynumber`, `CBName`, `date`, `time`, `vehicle`) VALUES
('', '', '', '', ''),
('', 'raj', '2016-04-13', '12:30', ''),
('1', 'Raj agnihotri', '2016-03-20', '12:30', ''),
('2', 'Rahul ', '2016-04-25', '23:05', ''),
('3', 'roshan', '2016-04-10', '12:59', '');
