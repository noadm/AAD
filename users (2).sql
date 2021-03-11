-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 02:23 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersname` varchar(200) NOT NULL,
  `usersemail` varchar(200) NOT NULL,
  `usersuserID` varchar(200) NOT NULL,
  `userspassword` varchar(200) NOT NULL,
  `bloodworkresults` int(1) NOT NULL,
  `medID` int(11) NOT NULL,
  `GPID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersname`, `usersemail`, `usersuserID`, `userspassword`, `bloodworkresults`, `medID`, `GPID`) VALUES
(3, 'Naod Mulgetta', 'naodmulgetta@googlemail.com', 'naod.m', '$2y$10$4YMGNzPsyeaR1ntRPPj6TOt5k0WMqMJexjqTa8sHyAGCFKYuvv.j6', 0, 1, 'Peter'),
(4, 'chris', 'chris@gmail.com', 'chris07', '$2y$10$Auxl1HZcQRSTyRiHGYWuFe/O6ep3Vbd5/x.6mWDpGBnDSMvdzSBpy', 0, 2, 'Peter'),
(6, 'David', 'david@gmail.com', 'david', '$2y$10$W1SL8Pb0oXZGO24qf7BhLOL6gl0IIe18IweoD0xFk2JMwSt0xV4lK', 0, 5, 'Ak'),
(8, 'Nahom', 'nahom@gmail.com', 'Nahom', '$2y$10$2y2CXvdj2ST1E2.vYeVEWO8bACWfPWbwIBnyu986XUB8wcSMmziYS', 0, 3, 'Yousef'),
(12, 'Edwin', 'EBH@gmail.com', 'Edwin', '$2y$10$3ZalL6fDnkclE5oOGrv41e.01oRRf5HQ6n1I/j55uP8HuQb87XDD2', 0, 0, 'Tanaka'),
(13, 'Harry Scunthorp', 'harry@googlemail.com', 'Harry', '$2y$10$zTwfXhII0wB9Az3tbC5NdexUt4/F6DzROdJqUfB1.8k.jN8zDmch.', 0, 3, 'Yousef'),
(14, 'Jesse Pinkman', 'Jesse@gmail.com', 'Jesse', '$2y$10$Dp7..Ff/nMz8xTjxNs6uQeVxLj8IVYJYIPQZLImzmCi.gLbnLRU8W', 0, 1, 'Ak'),
(15, 'Mathew Ball', 'mattyB@gmail.com', 'Mathew', '$2y$10$biGc4FLM6vAJosz.0hGgJe8WFzcpoobw3jgJJQa1htsUp3fDzBija', 0, 2, 'Yousef'),
(16, 'Jeff Seth', 'Jeff_san@gmail.com', 'Jeff', '$2y$10$65LMh3njxoBIc.c6BI2IyOzXPt3nGhnt7PxSWsAp/ih5RITv0qI3m', 0, 5, 'Peter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
