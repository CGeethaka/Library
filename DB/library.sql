-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 06:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Author` varchar(60) NOT NULL,
  `Date_publish` varchar(25) NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `Title`, `Description`, `Category`, `Author`, `Date_publish`, `Qty`) VALUES
(1, 'English 1', 'Learning English', 'Language', 'San Juan', '1999-10-18', 20),
(2, 'PHP', 'php l', 'Information & Technology', 'php', '2020-09-15', 10);

-- --------------------------------------------------------

--
-- Table structure for table `borrowing`
--

CREATE TABLE IF NOT EXISTS `borrowing` (
  `BorID` int(11) NOT NULL AUTO_INCREMENT,
  `BName` varchar(20) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `BID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `LPrice` int(50) NOT NULL,
  PRIMARY KEY (`BorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `borrowing`
--

INSERT INTO `borrowing` (`BorID`, `BName`, `Category`, `BID`, `Username`, `Qty`, `Date`, `Status`, `LPrice`) VALUES
(12, 'PHP', 'Information & Technology', 2, '21', 1, 'Wednesday, 25 September, 2020', 'Returned', 0),
(13, 'English 1', 'Language', 1, '21', 1, 'Wednesday, 25 September, 2020', 'Borrowed', 0),
(14, 'English 1', 'Language', 1, 'aaa', 20, 'Wednesday, 25 September, 2020', 'Borrowed', 0),
(15, 'English 1', 'Language', 1, 'damith', 20, 'Wednesday, 25 September, 2020', 'Borrowed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`MID`,`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`MID`, `FName`, `LName`, `NIC`, `Gender`, `Address`, `Telephone`, `Email`, `Username`, `Password`, `Status`) VALUES
(1, 'sd', 'Da', '5545455', 'Male', 'sf', 215124212, 'fef@dgd.ce', '21', '21', 'Student'),
(2, 'ad', 'fd', '23', 'Male', 'dsaf', 1234, 'ds@sd.df', 'User', '123', 'Student'),
(3, 'Kevin', 'Ashan', '596521511V', 'Male', '13 Colombo', 754521023, 'ka@gmail.com', 'Admin', '123', 'Librarian'),
(4, 'Ashan', 'Dilip', '568545211V', 'Male', '130, Kelaniya', 785454620, 'as@gmail.com', 'Ashan', '123', 'Professor'),
(5, 'Damith', 'Silva', '658542100v', 'Male', '67/ kandy', 775254524, 'fdfdh@gmail.com', 'Damith', 'aaa', 'Professor'),
(6, 'Anil', 'Perera', '545230122v', 'Male', '56/5 Colombo', 751202032, 'sjdh@gmai.com', 'sunil55', '222', 'Student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
