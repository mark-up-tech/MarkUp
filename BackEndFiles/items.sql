-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 12:41 PM
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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` int(11) NOT NULL,
  `Item_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Description`) VALUES
(1, 'Nike Jordan 1 Retro Black Toe Size 10.5'),
(2, 'Yeezy 700 Analog Size 8'),
(3, 'Jordan 1 J Balvin Size 8'),
(4, 'Era 95 DX White Black Size 8'),
(5, 'Off-White Presto OG Size 11'),
(6, 'Travis Scott x Jordan 1 Low Size 8.5'),
(7, 'Balenciaga Triple S Clear Sole logo-embroidered Size 9'),
(8, 'Balenciaga Triple S Clear Sole logo-embroidered leather, nubuck and mesh sneakers'),
(9, 'Gucci Tennis 1977 Web-stripe canvas high-top trainers'),
(10, 'Balenciaga Speed 2.0 stretch-knit high-top sneakers'),
(12, 'Vans x Vault Sk8-hi Size 8'),
(13, 'Used Jordan 4 Sashiko Size 7.5'),
(14, 'Vans Anti Social x Social Club Sk8-hi Size 8'),
(15, 'CDG Converse Low Size 8'),
(16, 'Yeezy 350 Yecheil NR Size 7.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
