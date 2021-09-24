-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 09:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(13, 'sam', 'k', '1234567890', 'k@g.com', 'DYPOCE', '8fd1832c9e1ed424f3ae3b6060e03a09', 'admin', '2021/09/22'),
(14, 'admin', 'admin', '1111111111', 'admin@admin.com', 'admin', '0e7517141fb53f21ee439b355b5a1d0a', 'admin', '2021/09/24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_data`
--
ALTER TABLE `class_data`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
