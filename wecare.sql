-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 06:23 PM
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
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gp`
--

CREATE TABLE `gp` (
  `ID` int(11) NOT NULL,
  `GPname` varchar(200) NOT NULL,
  `GPemail` varchar(200) NOT NULL,
  `GPID` varchar(200) NOT NULL,
  `GPpassword` varchar(200) NOT NULL,
  `GP_clients` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gp`
--

INSERT INTO `gp` (`ID`, `GPname`, `GPemail`, `GPID`, `GPpassword`, `GP_clients`) VALUES
(1, 'Naod Mulgetta', 'naodm99@gmail.com', 'Dr.Naod', 'hi', 0),
(2, 'Naod', 'naod@gmail.com', 'Naod', 'hi', 2),
(3, 'Peter Imegi', 'Pimegi@gmail.com', 'Peter', 'password', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `dose` int(11) NOT NULL,
  `blood_test_required` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersname` varchar(200) NOT NULL,
  `usersemail` varchar(200) NOT NULL,
  `usersuserID` varchar(200) NOT NULL,
  `userspassword` varchar(200) NOT NULL,
  `bloodworkresults` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersname`, `usersemail`, `usersuserID`, `userspassword`, `bloodworkresults`) VALUES
(3, 'Naod Mulgetta', 'naodmulgetta@googlemail.com', 'naod.m', '$2y$10$4YMGNzPsyeaR1ntRPPj6TOt5k0WMqMJexjqTa8sHyAGCFKYuvv.j6', 0),
(4, 'chris', 'chris@gmail.com', 'chris07', '$2y$10$Auxl1HZcQRSTyRiHGYWuFe/O6ep3Vbd5/x.6mWDpGBnDSMvdzSBpy', 0),
(5, 'Tanaka', 'tanaka@googlemail.com', 'tan', '$2y$10$jsv524FtdTv3O/OjgrsHb.bzLf/A3b0d//ksaKktLxU24hhweV.Eq', 0),
(6, 'David', 'david@gmail.com', 'david', '$2y$10$W1SL8Pb0oXZGO24qf7BhLOL6gl0IIe18IweoD0xFk2JMwSt0xV4lK', 0),
(7, 'boris', 'boris@gmail.com', 'Boris', 'boris', 1),
(8, 'Nahom', 'nahom@gmail.com', 'Nahom', '$2y$10$2y2CXvdj2ST1E2.vYeVEWO8bACWfPWbwIBnyu986XUB8wcSMmziYS', 0),
(9, 'Drake', 'drake@gmail.com', 'DRake', '$2y$10$ly6MQbP9./lV0p7sLXt6s.VUDsifxPh674x1rhPnLaLjTtT/E7B/i', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wecare`
--

CREATE TABLE `wecare` (
  `patient_ID` int(3) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_adress` varchar(100) NOT NULL,
  `patient_pnumber` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gp`
--
ALTER TABLE `gp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- Indexes for table `wecare`
--
ALTER TABLE `wecare`
  ADD PRIMARY KEY (`patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gp`
--
ALTER TABLE `gp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wecare`
--
ALTER TABLE `wecare`
  MODIFY `patient_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
