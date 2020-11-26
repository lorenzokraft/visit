-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 01:59 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`ID`, `Username`, `Password`, `Email`, `created_by`) VALUES
(4, 'sodekepelu@yahoo.com', 'hhhh', 'lumzysmiles@gmail.com', 'Lawrence'),
(48, 'admin', 'admin', 'admin', 'Lawrence'),
(49, 'admin', 'admin', 'admin', 'Lawrence'),
(51, 'iffe', 'iffe123', 'iffe.khan18@gmail.com', 'Lawrence'),
(52, 'test', 'test123', 'test@gmail.com', 'Lawrence');

-- --------------------------------------------------------

--
-- Table structure for table `cus_details`
--

CREATE TABLE `cus_details` (
  `ID` bigint(20) NOT NULL,
  `FirstName` varchar(80) NOT NULL,
  `Surname` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `WhatsApp` varchar(15) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `VisaReq` varchar(10) NOT NULL,
  `VisaChangeReq` varchar(10) NOT NULL,
  `GlobalVisa` varchar(100) NOT NULL,
  `Notes` longtext NOT NULL,
  `AgentName` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cus_details`
--

INSERT INTO `cus_details` (`ID`, `FirstName`, `Surname`, `Email`, `MobileNumber`, `WhatsApp`, `Nationality`, `VisaReq`, `VisaChangeReq`, `GlobalVisa`, `Notes`, `AgentName`, `Time`) VALUES
(1, 'Lawrence', 'Omole', 'omole911@gmail.com', '08032598067', '08032598067', 'Nigerian ', 'yes', 'urs', '', 'i am the author yes!', 'Agent', '2020-01-25 08:44:32'),
(2, 'Peter', 'Parker', 'peterparker@mail.com', '077070707', '999999900', 'Nija', 'one', 'two', '', 'three', 'four', '2020-01-26 09:11:13'),
(3, 'Peter', 'Parker', 'peterparker@mail.com', '077070707', '999999900', 'Nija', 'one', 'two', '', 'three', 'four', '2020-01-26 09:13:24'),
(5, 'Iftikhar', 'Ali', 'iffe@gmail.com', '2323423', '234234234', 'Pakistan', '30DaysVisa', '-', '-', 'sdfsdf', 'iffe', '2020-01-27 00:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(1, 'Lawrence', 'password', 'lawrence@gmail.com', 1, '2020-01-25 12:43:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cus_details`
--
ALTER TABLE `cus_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cus_details`
--
ALTER TABLE `cus_details`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
