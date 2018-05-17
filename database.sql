-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 03:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `SKU` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`SKU`, `Name`, `Price`, `Type`, `Weight`) VALUES
('BK001', 'Bible', 20, 'Book', '6');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `SKU` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Size` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`SKU`, `Name`, `Price`, `Type`, `Size`) VALUES
('DV123', 'Mixtape', 99, 'DVD', 1024);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `SKU` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Height` int(255) NOT NULL,
  `Width` int(255) NOT NULL,
  `Length` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`SKU`, `Name`, `Price`, `Type`, `Height`, `Width`, `Length`) VALUES
('FT001', 'Chair', 37, 'Furniture', 40, 70, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
