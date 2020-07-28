-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 01:55 PM
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
  `is_deleted` enum('0','1') NOT NULL DEFAULT '1',
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`id`, `name`, `surname`, `gender`, `dob`, `city`, `state`, `country`, `is_active`, `is_deleted`, `date_created`, `updated_date`) VALUES
(2, 'nimit', 'shah', 'F', '2020-07-01', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:41:55'),
(3, 'suresh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:22:01'),
(4, 'kishan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:22:01'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:41:57'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:41:57'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:41:57'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:41:57'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', '0', '2020-07-25', '2020-07-28 11:20:12'),
(12, 'manish', 'patel', 'M', '1994-05-15', ' Goregaon ', 'Maharashtr', 'India', '1', '0', '2020-07-25', '2020-07-28 11:20:12'),
(13, 'tosttest', 'patel', 'M', '2020-07-23', ' Chandil ', 'Jharkhand', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(14, 'tosat', 'asas', 'M', '2020-08-08', ' Idukki ', 'Kerala', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(15, 'test', 'ads', 'M', '2020-08-07', ' North Island ', 'Lakshadwee', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(16, 'test', 'test5', 'M', '0000-00-00', ' Kalpeni ', 'Kerala', 'India', '1', '1', '2020-07-26', '2020-07-28 10:56:47'),
(17, 'test5', 'test5', 'M', '2020-07-29', ' Chainpur ', 'Jharkhand', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(18, 'adas', 'asas', 'M', '2020-07-13', ' Lakshadweep Sea ', 'Lakshadwee', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(19, 'asasas', 'asasas', 'M', '2020-07-31', ' Gulmarg ', 'Jammu & Ka', 'India', '1', '1', '2020-07-26', '2020-07-28 10:56:53'),
(20, 'tets6', 'test6', 'M', '2020-07-30', ' Idukki ', 'Kerala', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(21, 'test', 'test', 'M', '2020-07-31', ' Chainpur ', 'Jharkhand', 'India', '1', '0', '2020-07-26', '2020-07-28 11:20:12'),
(22, 'test', 'tes5', 'F', '2020-07-29', ' Chaibasa ', 'Jharkhand', 'India', '0', '1', '2020-07-26', '2020-07-28 10:56:20');

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
(3, 'suresh', 'Patel', 'M', '2020-07-17', 'Ahmedabad', 'GJ', 'India', '0', 1, '2020-07-18 05:04:01', '2020-07-28 09:43:57'),
(4, 'kishan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 1, '2020-07-18 05:05:08', '2020-07-28 09:42:30'),
(5, 'veeru', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:06:50', '2020-07-28 11:43:06'),
(6, 'pratik', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:08:11', '2020-07-28 11:43:06'),
(7, 'pradhan', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:10:45', '2020-07-28 11:43:06'),
(8, 'parth', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:11:09', '2020-07-28 11:43:06'),
(9, 'prakash', 'Patel', 'M', '2020-11-21', 'Ahmedabad', 'GJ', 'India', '1', 0, '2020-07-18 05:15:38', '2020-07-28 11:43:06'),
(10, 'test', 'test', 'M', '2020-07-23', ' Mapuca ', 'Goa', 'India', '1', 0, '2020-07-26 12:20:25', '2020-07-28 11:43:06');

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
(1, 'admin', 'admin1', '1', '1', 0, '2020-07-24 00:00:00', '2020-07-28 14:39:34'),
(2, 'student', 'student', '1', '1', 0, '2020-07-24 00:00:00', '2020-07-24 00:00:00'),
(3, 'faculty', 'faculty', '3', '0', 1, '2020-07-24 00:00:00', '2020-07-24 00:00:00'),
(4, 'student2', 'student2', '3', '1', 0, '2020-07-25 14:02:09', '0000-00-00 00:00:00'),
(5, 'Student1235854', 'new', '3', '1', 1, '2020-07-25 14:03:13', '0000-00-00 00:00:00'),
(6, 'test1', 'test1', '1', '1', 1, '2020-07-25 14:04:08', '2020-07-25 18:30:15'),
(7, 'tost', 'tost', '1', '1', 1, '2020-07-26 15:25:15', '0000-00-00 00:00:00'),
(8, 'test', 'test', '1', '1', 1, '2020-07-26 17:34:46', '0000-00-00 00:00:00');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
