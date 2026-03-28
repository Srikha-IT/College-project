-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cauvery_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'WVdSdGFXNUFNVEl6');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `class` text NOT NULL,
  `strength` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `faculty_id`, `class`, `strength`) VALUES
(1, 1, 'III BCA', 55),
(2, 2, 'III MCA', 25),
(3, 3, 'II BSC', 33);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `dob`, `department`, `email`, `mobile`, `password`) VALUES
(1, 'Mohanraj', '1991-07-15', 'Mca', 'mohanrajphp91@gmail.com', '9894942574', 'MTIzNDU2'),
(2, 'Manoj', '1989-05-06', 'Mca', 'manomax2020@gmail.com', '8981112121', 'MTIzNTY='),
(3, 'Sarath', '1995-07-05', 'Mcom', 'sarath@gmail.com', '123456', 'MTIzNDU2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `program` varchar(50) NOT NULL,
  `year_of_study` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `class_section` varchar(100) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `mobile_available_type` varchar(100) NOT NULL,
  `residental_address` text NOT NULL,
  `id_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `dob`, `type`, `regno`, `program`, `year_of_study`, `department`, `class_section`, `bloodgroup`, `father_name`, `mother_name`, `mobile`, `mobile_available_type`, `residental_address`, `id_image`, `password`) VALUES
(1, 'Mohan', 'Raj', '1991-07-15', '', '14362', '', '', '', '', '', 'Vasudevan P', 'Shanthi V', '9789332769', '', '', '', '123456'),
(2, 'sriha', 's', '2000-07-15', 'Day Scholer', '14366', 'C++', '', 'Mcom', '', '', 'Mohanraj', 'Shanthi V', '1234567890', 'Both the Parent', '', '', '123456'),
(3, 'Manoj', 'dev', '1989-06-07', '', '14363', '', '', '', '', '', 'Vasudevan ', 'Sathya', '9944449436', '', '', '', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
