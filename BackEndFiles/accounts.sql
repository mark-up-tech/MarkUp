-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 02:09 PM
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
(22, 'jonathan', 'Lozano', 12333, 'kyle@gmail.com', '$2y$10$hGqyKiBqu/v.lCGlZl7pUOvyyESPQYCd4sp/xw8OEGJmuM3rsZcuS', '2020-11-02 15:03:25', 1, 1),
(23, 'wap', 'los', 9094565, 'kyle2@gmail.com', '$2y$10$txSfqUy2ER.3lpAN0H/1cOOIn/ryxd6L6HJ29.9L4jhcnb4Agywma', '2020-11-02 15:12:46', 1, 1),
(24, 'test1fn', 'test1ln', 9321654987, 'test1@gmail.com', '$2y$10$9WAqRnUa/NqbDVdG6k7BU.wJKG66h8HuExjNadK6xSVhfGNZA5JBa', '2020-11-04 12:28:38', 1, 1),
(25, 'test2fn', 'test2ln', 94654632, 'test2ln@gmail.com', '$2y$10$NOwM78xOgg2VvMZawgGlOu.t8QQwcD/NbFAOa3sSKCBft6Jbfvc3O', '2020-11-04 12:47:29', 1, 1);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
