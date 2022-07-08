-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niit`
--

-- --------------------------------------------------------

--
-- Table structure for table `niit`
--

CREATE TABLE `niit` (
  `id` int(11) NOT NULL,
  `loginEmail` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `work_1_start_date` varchar(20) NOT NULL,
  `work_1_end_date` varchar(20) NOT NULL,
  `work_1_company` varchar(255) NOT NULL,
  `work_1_role` varchar(255) NOT NULL,
  `work_2_start_date` varchar(20) NOT NULL,
  `work_2_end_date` varchar(20) NOT NULL,
  `work_2_company` varchar(255) NOT NULL,
  `work_2_role` varchar(255) NOT NULL,
  `school_start_date` varchar(20) NOT NULL,
  `school_end_date` varchar(20) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `college_1_start_date` varchar(20) NOT NULL,
  `college_1_end_date` varchar(20) NOT NULL,
  `college_1_name` varchar(255) NOT NULL,
  `college_1_course_name` varchar(255) NOT NULL,
  `college_2_start_date` varchar(20) NOT NULL,
  `college_2_end_date` varchar(20) NOT NULL,
  `college_2_name` varchar(255) NOT NULL,
  `college_2_course_name` varchar(255) NOT NULL,
  `college_3_start_date` varchar(20) NOT NULL,
  `college_3_end_date` varchar(20) NOT NULL,
  `college_3_name` varchar(255) NOT NULL,
  `college_3_course_name` varchar(255) NOT NULL,
  `skills_1` varchar(255) NOT NULL,
  `skills_2` varchar(255) NOT NULL,
  `skills_3` varchar(255) NOT NULL,
  `skills_4` varchar(255) NOT NULL,
  `skills_5` varchar(255) NOT NULL,
  `lang_1` varchar(255) NOT NULL,
  `lang_2` varchar(255) NOT NULL,
  `lang_3` varchar(255) NOT NULL,
  `certificate_1_date` varchar(20) NOT NULL,
  `certificate_1_name` varchar(255) NOT NULL,
  `certificate_2_date` varchar(20) NOT NULL,
  `certificate_2_name` varchar(255) NOT NULL,
  `certificate_3_date` varchar(20) NOT NULL,
  `certificate_3_name` varchar(255) NOT NULL,
  `interest_1` varchar(255) NOT NULL,
  `interest_2` varchar(255) NOT NULL,
  `interest_3` varchar(255) NOT NULL,
  `project_1_date` varchar(20) NOT NULL,
  `project_1_name` varchar(255) NOT NULL,
  `project_1_feature` varchar(255) NOT NULL,
  `project_1_outcome` varchar(255) NOT NULL,
  `project_1_tools_used` varchar(255) NOT NULL,
  `project_2_date` varchar(20) NOT NULL,
  `project_2_name` varchar(255) NOT NULL,
  `project_2_feature` varchar(255) NOT NULL,
  `project_2_outcome` varchar(255) NOT NULL,
  `project_2_tools_used` varchar(255) NOT NULL,
  `project_3_date` varchar(20) NOT NULL,
  `project_3_name` varchar(255) NOT NULL,
  `project_3_feature` varchar(255) NOT NULL,
  `project_3_outcome` varchar(255) NOT NULL,
  `project_3_tools_used` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `login_email` varchar(255) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `class10_school_name` varchar(255) DEFAULT NULL,
  `class10_end_date` date DEFAULT NULL,
  `class12_school_name` varchar(255) DEFAULT NULL,
  `class12_end_date` date DEFAULT NULL,
  `college_1_start_date` date DEFAULT NULL,
  `college_1_name` varchar(255) DEFAULT NULL,
  `college_course_year` varchar(20) NOT NULL,
  `work_start_date` date DEFAULT NULL,
  `work_end_date` date DEFAULT NULL,
  `work_company` varchar(255) DEFAULT NULL,
  `work_role` varchar(255) DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_outcome` varchar(255) DEFAULT NULL,
  `project_tools_used` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `lang_type` varchar(50) NOT NULL,
  `certificate_date` date DEFAULT NULL,
  `certificate_name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `cpassword`, `token`, `status`) VALUES
(30, 'rahulgupta324.rg@gmail.com', 'rahulgupta324.rg@gmail.com', '$2y$10$bwRwpU7U2qOl23SZ16kBZ.utRpu.BKpmlYjWZcGBZ72mxR8cCkx4.', '$2y$10$A7V/EF/ncF1Bkm0fGMb6N.pK1DWmln.y4BeyBue/T5Z9WXxWaaes2', '142fd0b6bf19d4f2823ccf294cd973', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niit`
--
ALTER TABLE `niit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `niit`
--
ALTER TABLE `niit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
