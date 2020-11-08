-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlogin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(128) NOT NULL,
  `Last_Name` varchar(128) NOT NULL,
  `Contact_Num` bigint(11) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `UserPwd` varchar(128) NOT NULL,
  `Date_Created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) NOT NULL DEFAULT 1,
  `Role` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `First_Name`, `Last_Name`, `Contact_Num`, `Email`, `UserPwd`, `Date_Created`, `Status`, `Role`) VALUES
(0, 'Jonathan', 'Lozano', 12345678911, 'kyle@gmail.com', '$2y$10$9nNsPuJMWMnLKo1/orKpA.u/C1Mxa.iTARvfIrVV5.N6dxUudR7S6', '2020-11-08 14:02:44', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `uname` (`Email`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Contact_Num` (`Contact_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
