-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 08, 2023 at 02:48 AM
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
  `avatar` varchar(50) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `avatar`, `empname`, `email`) VALUES
(2, 'user_1.jpg', 'Ebenezer Atakora', 'example2@gmail.com'),
(3, 'user_3.jpg', 'Maxwell Chapo', 'example8@gmail.com'),
(4, 'user_1.jpg', 'Bismark Ansah', 'example1@gmail.com'),
(5, 'user_3.jpg', 'Joseph Nketiah', 'example6@gmail.com'),
(6, 'user_2.jpg', 'Steven Manfo', 'example11@gmail.com'),
(7, 'user_1.jpg', 'Fredrick Dollar', 'example5@gmail.com'),
(8, 'user_1.jpg', 'Randy Odoom', 'example10@gmail.com'),
(9, 'user_3.jpg', 'Perfect Delali', 'example9@gmail.com'),
(10, 'user_2.jpg', 'Frank Long', 'example4@gmail.com'),
(11, 'user_2.jpg', 'Kwame Insider', 'example7@gmail.com'),
(12, 'user_3.jpg', 'Emmanuel (Chairman)', 'example3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `starttime` varchar(11) NOT NULL,
  `endtime` varchar(11) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `motion` varchar(10) DEFAULT NULL,
  `info` text,
  `prog` varchar(100) NOT NULL DEFAULT '0',
  `created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskid`, `username`, `avatar`, `email`, `starttime`, `endtime`, `duration`, `motion`, `info`, `prog`, `created`) VALUES
(21, 'Randy Odoom', 'user_1.jpg', 'example10@gmail.com', '00:30', '05:36', '255', 'Running', 'Similique architecto nesciunt ullam animi corrupti. Fuga maiores nulla. Accusantium tempore accusamus veritatis molestias consequatur vero quasi.\r\nOfficiis est inventore aspernatur voluptates. Cum nostrum perferendis repellendus corporis aliquam. Praesentium placeat accusantium debitis aut perspiciatis architecto.\r\nVeniam quaerat dolores mollitia eligendi suscipit reiciendis alias. Molestiae neque magnam ducimus a cumque perspiciatis adipisci. Aut consequatur aliquid et quaerat et laboriosam.', '50', '2023-09-08'),
(24, 'Randy Odoom', 'user_1.jpg', 'example10@gmail.com', '02:31', '05:36', '140', 'Running', 'dfsdfsdf', '30', '2023-09-08'),
(25, 'Maxwell Chapo', 'user_3.jpg', 'example8@gmail.com', '00:34', '00:36', '-11', 'Running', 'erwerer', '85', '2023-09-08');

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
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
