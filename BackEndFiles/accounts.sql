-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 09:37 AM
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
  `Contact_Num` varchar(11) NOT NULL,
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
(44, 'Test', 'User', '9123456789', 'usertrial@gmail.com', '$2y$10$1NMzjv5NfzFcfR.WLkuUU./y/5tAkcDwdi56oVIwZjh5vJd/rFrdW', '2020-11-09 08:16:21', 1, 1),
(45, 'Jonathan', 'Lozano', '9987654321', 'kyle@gmail.com', '$2y$10$4i8LCAPH9yForIzlK3ZXcun59wl6QInEmXRjHVNX5g2TtGWn8ts3a', '2020-11-09 08:24:31', 1, 0),
(64, 'Allan', 'patrick', '09123498765', 'allan@gmail.com', '$2y$10$aPfPy.HRLt6po/8443RQ2O1VO2gHrC9jb6KO4rWDvq8n20dSxCREC', '2020-12-08 12:18:36', 1, 1),
(65, 'Skramzies', 'Lagrimas', '09876543216', 'lagrimas@gmail.com', '$2y$10$uM87nUweHOjnpuSI./NxueA2DlbOamOG77TlIlL3Z/StsUThoCIAq', '2020-12-08 12:21:54', 1, 1),
(66, 'Erne', 'Yeager', '09987654321', 'eren@gmail.com', '$2y$10$XxLzSHMwiQoejtnpNspsyObJevp83SOxAz2XTxqLR31d9taUDs6.S', '2020-12-08 12:26:33', 1, 1),
(67, 'Trial69', 'Usertrial69', '09564312378', 'trial69@gmail.com', '$2y$10$tvuJ1s3ZtUdGxYrOQVX8LOv7z1yqGVcVoZziXCyr28jB/8wSfuQxa', '2020-12-08 12:30:58', 1, 1),
(68, 'Kyle', 'lozano', '09456565656', 'kyle322@gmail.com', '$2y$10$7DO/W/G3wS/DVGnN3.CcFOgpU8QUnSgZm6oE6MGpobCaCQ7bZJqyG', '2021-01-12 02:27:54', 1, 1),
(69, 'Jonathan', 'losano', '09564654654', 'kyle333@gmail.com', '$2y$10$/uLqIn792wkGxflTBbf9duXpdIyoRYX/Iwak/e9azEDAG9nO6PiU6', '2021-01-12 09:28:13', 1, 1),
(70, 'Jonathan', 'lonano', '09451235456', 'kyle332@gmail.com', '$2y$10$x1zyEPvtByKxk/okrw/Uxeeu2proh8/GGAg4SWD.tJUlNFbAPqGza', '2021-01-12 09:29:58', 1, 1),
(71, 'jonathan', 'lomamo', '09152564867', 'kyle3221@gmail.com', '$2y$10$3uiry9wcgGdTIX6jWIFWGuyKmJyCBbDYVVVH8vT6ITbITnytcT/xy', '2021-01-12 09:31:03', 1, 1),
(72, 'Jonathan', 'lolano', '09326546546', 'kyle32132@gmail.com', '$2y$10$QjuQW6Qj4s2ejPR1lZhSqeMUV.b6k1kvZ35rAMTr1UP.FSH.NymrK', '2021-01-12 09:32:25', 1, 1),
(73, 'jonathan', 'Lopano', '09452156454', 'kyle231@gmail.com', '$2y$10$fem/9Gaw8FCRk1DE9YXv6uu6PWij8tfAf62yjgp9Z0dgOh2UFfA5K', '2021-01-13 07:57:16', 1, 1);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
