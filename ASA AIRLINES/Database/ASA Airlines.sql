-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 09:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asaairlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('sachin7', 'sachin729');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `ticketno` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `age` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `flightid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`ticketno`, `name`, `father`, `age`, `gender`, `flightid`, `time`) VALUES
(12, 'sachin', 'hukam', '23', 'male', 1, '2017-06-21 18:31:44'),
(13, 'sachin', 'hukam', '25', 'male', 1, '2017-06-21 18:33:43'),
(14, 'amar', 'amarf', '23', 'male', 2, '2017-06-21 19:16:26'),
(15, 'sachin singh', 'hukam singh', '23', 'male', 2, '2017-06-21 19:21:11'),
(16, 'sachin', 'hukam singh', '26', 'male', 2, '2017-06-21 19:22:44'),
(17, 'sachin singh', 'hukam chaudhary', '29', 'male', 1, '2017-06-21 19:28:23'),
(18, 'amar', 'sachin', '26', 'male', 1, '2017-06-21 19:34:50'),
(19, 'kunal', 'sachin', '26', 'male', 2, '2017-06-21 19:42:46'),
(20, 'pappu', 'pappan', '25', 'male', 1, '2017-06-21 19:44:24'),
(21, 'rahul', 'raman', '25', 'male', 1, '2017-06-21 19:46:18'),
(22, 'kusum', 'aman', '25', 'female', 2, '2017-06-21 21:14:48'),
(23, 'komal', 'kunal', '19', 'female', 2, '2017-06-21 21:16:57'),
(24, 'priya singh', 'hukam singh', '18', 'female', 6, '2017-06-22 14:21:00'),
(25, 'lee minho', 'kim minho', '25', 'male', 6, '2017-06-22 14:23:34'),
(26, 'kundan', 'kumar', '56', 'male', 2, '2017-06-22 18:08:39'),
(27, 'shashi', 'shashank', '25', 'male', 1, '2017-06-22 18:55:17'),
(28, 'sundar', 'sumit', '54', 'male', 1, '2017-06-22 19:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flightid` int(11) NOT NULL,
  `date` date NOT NULL,
  `source` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `deptime` time NOT NULL,
  `arrtime` time NOT NULL,
  `class` varchar(40) NOT NULL,
  `capacity` int(11) NOT NULL,
  `seatavail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flightid`, `date`, `source`, `destination`, `deptime`, `arrtime`, `class`, `capacity`, `seatavail`) VALUES
(1, '2017-06-19', 'delhi', 'indore', '17:00:00', '19:00:00', 'economic', 200, 178),
(2, '2017-06-19', 'delhi', 'indore', '07:14:16', '15:34:37', 'business', 180, 137),
(6, '2017-12-12', 'indore', 'seoul', '16:00:00', '22:00:00', 'business', 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `contact`) VALUES
('amar9', 'amarnana', 'amar jatav', 'amar@gmail.com', '8962917734'),
('priya11', 'priya1111', 'priya singh', 'priya@gmail.com', '8962917734'),
('sa', 'sachin89', 'sachin', 'sa@gmail.com', ''),
('sachin', 'sachin', 'sachin singh', 'sachinx1000@gmail.com', '214457524'),
('simplycoolpriya', 'leeminho', 'priya singh', 'simplycoolpriya@gmail.com', '9174715251');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`ticketno`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `ticketno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
