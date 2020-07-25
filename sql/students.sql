-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 07:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `gender` enum('M','F') NOT NULL COMMENT 'M= Male, F=Female',
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL DEFAULT 'Ahmedabad' COMMENT 'Initially software is made for ahmedabad, so default is ahmedabad',
  `state` varchar(10) NOT NULL COMMENT 'No default value for state',
  `country` varchar(15) NOT NULL DEFAULT 'India' COMMENT 'Default country is india',
  `is_active` enum('0','1') NOT NULL DEFAULT '0',
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `name`, `surname`, `gender`, `dob`, `city`, `state`, `country`, `is_active`, `updated_date`) VALUES
(2, 'nimit', 'Patel', 'F', '2020-07-01', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 06:02:04'),
(3, 'suresh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 06:02:08'),
(4, 'kishan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:14:14'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:14:27'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:14:32'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:14:37'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:14:47'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', '2020-07-18 05:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--
-- Error reading structure for table students.fees: #1932 - Table 'students.fees' doesn't exist in engine
-- Error reading data for table students.fees: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `students`.`fees`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `gender` enum('M','F') NOT NULL COMMENT 'M= Male, F=Female',
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL DEFAULT 'Ahmedabad' COMMENT 'Initially software is made for ahmedabad, so default is ahmedabad',
  `state` varchar(10) NOT NULL COMMENT 'No default value for state',
  `country` varchar(15) NOT NULL DEFAULT 'India' COMMENT 'Default country is india',
  `current_status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `surname`, `gender`, `dob`, `city`, `state`, `country`, `current_status`, `is_deleted`, `created_date`, `updated_date`) VALUES
(3, 'suresh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '1', 1, '2020-07-18 05:04:01', '2020-07-25 05:39:02'),
(4, 'kishan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:05:08', '2020-07-18 05:14:14'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:06:50', '2020-07-18 05:14:27'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:08:11', '2020-07-18 05:14:32'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:10:45', '2020-07-18 05:14:37'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:11:09', '2020-07-18 05:14:47'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '0', 0, '2020-07-18 05:15:38', '2020-07-25 04:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` enum('1','2','3') NOT NULL COMMENT '1=admin 2=student 3=faculty',
  `is_active` enum('0','1') NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `username`, `password`, `type`, `is_active`, `date_created`, `last_login`) VALUES
(1, 'admin', 'admin', '1', '1', '2020-07-24 00:00:00', '2020-07-25 09:20:33'),
(2, 'student', 'student', '2', '0', '2020-07-24 00:00:00', '2020-07-24 00:00:00'),
(3, 'faculty', 'faculty', '3', '0', '2020-07-24 00:00:00', '2020-07-24 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_key` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
