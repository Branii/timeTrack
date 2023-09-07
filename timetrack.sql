-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 07, 2023 at 02:02 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empid` int(11) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `empname`, `email`) VALUES
(2, 'Ebenezer Atakora', 'example@gmail.com'),
(3, 'Maxwell Chapo', 'example@gmail.com'),
(4, 'Bismark Ansah', 'example@gmail.com'),
(5, 'Joseph Nketiah', 'example@gmail.com'),
(6, 'Steven Manfo', 'example@gmail.com'),
(7, 'Fredrick Dollar', 'example@gmail.com'),
(8, 'Randy Odoom', 'example@gmail.com'),
(9, 'Perfect Delali', 'example@gmail.com'),
(10, 'Frank Long', 'example@gmail.com'),
(11, 'Kwame Insider', 'example@gmail.com'),
(12, 'Emmanuel (Chairman)', 'example@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `starttime` varchar(11) NOT NULL,
  `endtime` varchar(11) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `motion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskid`, `username`, `starttime`, `endtime`, `duration`, `motion`) VALUES
(2, 'Steven Manfo', '01:00', '23:03', '1252', 'Paused'),
(3, 'Bismark Ansah', '01:04', '23:08', '1246', 'Paused'),
(5, 'Yusif Muneru', '00:31', '01:31', '-3', 'Paused'),
(6, 'Randy Odoom', '00:34', '02:34', '59', 'Paused');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'Steven Manfo', 'braniiblack@gmail.com', '4534543', '1234'),
(2, 'Richard Obiri', 'braniiblack@gmail.com', '4534543', '$2y$10$dmOVoyol2Ih0/lRKc2Tjq.eAZRgnWWXo0Lxw2qT/.F7fEDXPqBtIi'),
(3, 'Bismark Ansah', 'braniiblack@gmail.com', '4534543', '$2y$10$H7a/PUhinofI542EK46R4.UTzBUsl8n19uNA4h/AnzQIvD2WOm8T.'),
(4, 'Randy Odoom', 'braniiblack@gmail.comx', '453454322', '$2y$10$qDJsH1tVkpre5CS2QnfxX.mmdRC.C1gz9w.OJRJT3Cq5Ddqw6POwu'),
(5, 'Yusif Muneru', 'braniiblaack@gmail.com', '45354', '$2y$10$lUP41nZPCQE91aBNdegkfefuHpgNcmco69x/VyJLHitR2TOV0DNbi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
