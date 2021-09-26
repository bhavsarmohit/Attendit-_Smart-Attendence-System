-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 02:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendit`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_data`
--

CREATE TABLE `class_data` (
  `id` int(100) NOT NULL,
  `classname` varchar(100) NOT NULL,
  `classteacherid` varchar(100) NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_data`
--

INSERT INTO `class_data` (`id`, `classname`, `classteacherid`, `timestamp`) VALUES
(1, 'testclass', '1', '4445'),
(2, 'TE COMP', '12', '2021/09/22 12:49:19'),
(3, 'TE COMP1', '12', '2021/09/22 12:49:33'),
(4, 'SE COMP', '12', '2021/09/22 13:02:34'),
(5, 'Class ABCD', '12', '2021/09/24 07:01:59'),
(6, 'TEST CLASS', '12', '2021/09/24 07:02:41'),
(7, 'XYZ', '12', '2021/09/24 07:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `division_data`
--

CREATE TABLE `division_data` (
  `id` int(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_classid` varchar(100) NOT NULL,
  `d_classname` varchar(100) NOT NULL,
  `d_adminid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division_data`
--

INSERT INTO `division_data` (`id`, `d_name`, `d_classid`, `d_classname`, `d_adminid`) VALUES
(2, 'DIV 1', '2', 'TE COMP', '12'),
(3, 'DIV 3', '2', 'TE COMP', '12'),
(4, 'DIV 3', '2', 'TE COMP', '12'),
(5, 'DIV 4', '2', 'TE COMP', '12'),
(6, 'DIV 5', '2', 'TE COMP', '12'),
(7, 'DIV 1', '3', 'TE COMP1', '12');

-- --------------------------------------------------------

--
-- Table structure for table `subject_data`
--

CREATE TABLE `subject_data` (
  `id` int(100) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `classid` varchar(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `s_adminid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_data`
--

INSERT INTO `subject_data` (`id`, `subject_name`, `classid`, `classname`, `s_adminid`) VALUES
(1, 'DBMS', '2', 'TE COMP', '12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobno` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_role` varchar(40) NOT NULL,
  `signup_timestamp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobno`, `email`, `clgname`, `pass`, `user_role`, `signup_timestamp`) VALUES
(12, 'Sumit', 'Kuldharan', '7083799738', 'kuldharansumitd@gmail.com', 'SKNCOE', '8fd1832c9e1ed424f3ae3b6060e03a09', 'admin', '2021/09/22'),
(13, 'sam', 'k', '1234567890', 'k@g.com', 'DYPOCE', '8fd1832c9e1ed424f3ae3b6060e03a09', 'admin', '2021/09/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_data`
--
ALTER TABLE `class_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division_data`
--
ALTER TABLE `division_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_data`
--
ALTER TABLE `subject_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_data`
--
ALTER TABLE `class_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `division_data`
--
ALTER TABLE `division_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_data`
--
ALTER TABLE `subject_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
