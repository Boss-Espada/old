-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 07:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unijob`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_announce`
--

CREATE TABLE `tab_announce` (
  `announce_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `work_id` int(255) NOT NULL,
  `start_date` varchar(11) NOT NULL,
  `end_date` varchar(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_category`
--

CREATE TABLE `tab_category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_job`
--

CREATE TABLE `tab_job` (
  `work_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_jobmatch`
--

CREATE TABLE `tab_jobmatch` (
  `match_id` int(11) NOT NULL,
  `employer_id` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `announce_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_jobstatus`
--

CREATE TABLE `tab_jobstatus` (
  `jobstatus_id` int(11) NOT NULL,
  `announce_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_job_accept`
--

CREATE TABLE `tab_job_accept` (
  `accept_id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `announce_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_job_type`
--

CREATE TABLE `tab_job_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE `tab_user` (
  `id_card` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_announce`
--
ALTER TABLE `tab_announce`
  ADD PRIMARY KEY (`announce_id`,`work_id`) USING BTREE;

--
-- Indexes for table `tab_category`
--
ALTER TABLE `tab_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tab_job`
--
ALTER TABLE `tab_job`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `tab_jobmatch`
--
ALTER TABLE `tab_jobmatch`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `tab_jobstatus`
--
ALTER TABLE `tab_jobstatus`
  ADD PRIMARY KEY (`jobstatus_id`);

--
-- Indexes for table `tab_job_accept`
--
ALTER TABLE `tab_job_accept`
  ADD PRIMARY KEY (`accept_id`);

--
-- Indexes for table `tab_job_type`
--
ALTER TABLE `tab_job_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`id_card`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_announce`
--
ALTER TABLE `tab_announce`
  MODIFY `announce_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_category`
--
ALTER TABLE `tab_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_job`
--
ALTER TABLE `tab_job`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_jobmatch`
--
ALTER TABLE `tab_jobmatch`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_jobstatus`
--
ALTER TABLE `tab_jobstatus`
  MODIFY `jobstatus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_job_accept`
--
ALTER TABLE `tab_job_accept`
  MODIFY `accept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_job_type`
--
ALTER TABLE `tab_job_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
