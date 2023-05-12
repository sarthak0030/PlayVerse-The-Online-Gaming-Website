-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2023 at 06:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tms`
--
CREATE DATABASE IF NOT EXISTS `tms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-05-07 22:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE IF NOT EXISTS `tblenquiry` (
  `EnquiryId` int(3) NOT NULL AUTO_INCREMENT,
  `EnquiryName` varchar(100) NOT NULL,
  `EnquiryEmail` varchar(100) NOT NULL,
  `EnquiryMessage` varchar(255) NOT NULL,
  PRIMARY KEY (`EnquiryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`EnquiryId`, `EnquiryName`, `EnquiryEmail`, `EnquiryMessage`) VALUES
(1, 'Sarthak', 'sarthak@gmail.com', 'hey, this is a demo message......'),
(2, 'Demo', 'demo@gmail.com', 'hey............');

-- --------------------------------------------------------

--
-- Table structure for table `tblgames`
--

CREATE TABLE IF NOT EXISTS `tblgames` (
  `GameId` int(3) NOT NULL AUTO_INCREMENT,
  `GameName` varchar(100) NOT NULL,
  `GameRules` varchar(1000) NOT NULL,
  `GameAbout` varchar(1000) NOT NULL,
  PRIMARY KEY (`GameId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblgames`
--

INSERT INTO `tblgames` (`GameId`, `GameName`, `GameRules`, `GameAbout`) VALUES
(1, 'Memoria: The Memory Game', '', ''),
(2, 'Tic-Tac-Toe', '', ''),
(3, 'Hangman: The Word Game', '', ''),
(4, 'Rock-Paper-Scissor', '', ''),
(5, 'Connect 4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `UserFirstName` varchar(255) NOT NULL,
  `UserLastName` varchar(255) NOT NULL,
  `UserAge` int(3) NOT NULL,
  `UserNumber` int(10) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UsersPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`UserEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`UserFirstName`, `UserLastName`, `UserAge`, `UserNumber`, `UserEmail`, `UsersPassword`) VALUES
('Demo', 'Example', 21, 1234567890, 'demo@gmail.com', '12345'),
('Sarthak', 'Patil', 20, 1234567890, 'sarthak@gmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
