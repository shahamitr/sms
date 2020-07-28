-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 11:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `name`, `surname`, `gender`, `dob`, `city`, `state`, `country`, `is_active`, `date_created`, `updated_date`) VALUES
(2, 'nimit', 'Patel', 'F', '2020-07-01', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-26 09:10:30'),
(3, 'suresh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:37'),
(4, 'kishan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:42'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:45'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:48'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:51'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-25 11:21:55'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '2020-07-25', '2020-07-26 09:48:24'),
(12, 'manish', 'patel', 'M', '1994-05-15', ' Goregaon ', 'Maharashtr', 'India', '1', '2020-07-25', '2020-07-26 09:48:33');

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
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `surname`, `gender`, `dob`, `city`, `state`, `country`, `current_status`, `is_deleted`, `created_date`, `updated_date`) VALUES
(3, 'jayesh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:04:01', '2020-07-26 09:47:34'),
(4, 'Dhruvit', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:05:08', '2020-07-25 13:45:53'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:06:50', '2020-07-18 05:14:27'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:08:11', '2020-07-18 05:14:32'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:10:45', '2020-07-18 05:14:37'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:11:09', '2020-07-18 05:14:47'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:15:38', '2020-07-26 09:48:44'),
(10, 'kartik', 'lakhani', 'M', '2001-01-19', ' Radhanpur ', 'Gujarat', 'India', '1', 0, '2020-07-25 13:38:32', '2020-07-25 13:38:32'),
(11, 'dhiraj', 'patil', 'M', '2000-04-01', ' Jalgaon ', 'Maharashtr', 'India', '1', 0, '2020-07-25 13:39:52', '2020-07-25 13:39:52'),
(12, 'parth', 'patel', 'M', '2020-07-04', ' Dalhousie ', 'Himachal P', 'India', '1', 0, '2020-07-26 09:32:47', '2020-07-26 09:32:47'),
(13, 'chintan', 'gupta', 'M', '2020-07-07', ' Arwal ', 'Bihar', 'India', '1', 0, '2020-07-26 09:48:08', '2020-07-26 09:48:08');

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
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `username`, `password`, `type`, `is_active`, `is_deleted`, `date_created`, `last_login`) VALUES
(1, 'admin', 'admin1', '1', '1', 0, '2020-07-24 00:00:00', '2020-07-26 13:25:15'),
(2, 'student', 'student', '2', '0', 0, '2020-07-24 00:00:00', '2020-07-24 00:00:00'),
(3, 'faculty', 'faculty', '3', '0', 0, '2020-07-24 00:00:00', '2020-07-24 00:00:00'),
(4, 'student2', 'student2', '3', '0', 0, '2020-07-25 14:02:09', '0000-00-00 00:00:00'),
(5, 'Student1235854', 'new', '3', '1', 0, '2020-07-25 14:03:13', '0000-00-00 00:00:00'),
(6, 'test1', 'test1', '1', '1', 0, '2020-07-25 14:04:08', '2020-07-25 18:30:15');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
