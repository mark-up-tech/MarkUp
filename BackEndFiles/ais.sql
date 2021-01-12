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
-- Table structure for table `ais`
--

CREATE TABLE `ais` (
  `Bidding_ID` int(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Item_Description` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Auctioneer` varchar(50) NOT NULL,
  `Starting_Amount` varchar(100) NOT NULL,
  `Date/Time_Auctioned` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ais`
--

INSERT INTO `ais` (`Bidding_ID`, `Image`, `Item_Description`, `Size`, `Auctioneer`, `Starting_Amount`, `Date/Time_Auctioned`) VALUES
(1, '1.jpg', 'Nike Jordan 1 Retro Black Toe ', 'Size 10.5', 'Chupapi Muneno', 'PHP 8,000', '2021-01-09 22:38:56'),
(2, '2.jpg', 'Yeezy 700 Analog ', 'Size 8', 'Joshua Dorotan', 'PHP 500', '2021-01-09 23:07:14'),
(3, '3.jpg', 'Jordan 1 J Balvin ', 'Size 8', 'Jeric Manlangit', 'PHP 15,000', '2021-01-09 23:08:42'),
(4, '4.jpg', 'Era 95 DX White Black ', 'Size  8', 'Eleanor Ruth', 'PHP 20,000', '2021-01-09 23:11:33'),
(5, '5.jpg', 'Off-White Presto OG ', 'Size 11', 'Marc Basadas', 'PHP 5,000', '2021-01-09 23:18:42'),
(6, '6.jpg', 'Travis Scott x Jordan 1 Low ', 'Size 8.5', 'Jeff Abuel', 'PHP 10,000', '2021-01-09 23:21:45'),
(7, '7.jpg', 'Balenciaga Triple S Clear Sole logo-embroidered ', 'Size 9', 'Cleo Alexis', 'PHP 15,000', '2021-01-09 23:24:40'),
(8, '8.jpg', 'Balenciaga Triple S Clear Sole logo-embroidered leather, nubuck and mesh sneakers', 'Size 8.5', 'Cleo Alexis', 'PHP 15,000', '2021-01-09 23:25:29'),
(9, '9.jpg', 'Gucci Tennis 1977 Web-stripe canvas high-top trainers', 'Size 9', 'Benjamin Frank', 'PHP 25,000', '2021-01-09 23:26:58'),
(10, '10.jpg', 'Balenciaga Speed 2.0 stretch-knit high-top sneakers ', 'Size 9', 'Maxene Frances', 'PHP 20,000', '2021-01-09 23:28:02'),
(11, '11.jpg', 'Vans x Vault Sk8-hi ', 'Size 8', 'Marvin Esguerra', 'PHP 200', '2021-01-09 23:28:47'),
(12, '12.jpg', 'Used Jordan 4 Sashiko ', 'Size 7.5', 'Trebor Go', 'PHP 2,500', '2021-01-09 23:30:51'),
(13, '13.jpg', 'Vans Anti Social x Social Club Sk8-hi ', 'Size 8', 'Michael Conley', 'PHP 200', '2021-01-09 23:31:57'),
(14, '14.jpg', 'CDG Converse Low ', 'Size 8', 'Alex Heyhermz', 'PHP 350', '2021-01-09 23:33:06'),
(15, '15.jpg', 'Yeezy 350 Yecheil NR ', 'Size 7.5', 'Peter Sagan', 'PHP 2,500', '2021-01-09 23:34:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ais`
--
ALTER TABLE `ais`
  ADD PRIMARY KEY (`Bidding_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ais`
--
ALTER TABLE `ais`
  MODIFY `Bidding_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
