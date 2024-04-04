-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 01:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidate`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(11) NOT NULL,
  `job_field` varchar(50) NOT NULL,
  `job_description` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `client` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `closing_date` date NOT NULL,
  `posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `job_field`, `job_description`, `position`, `client`, `status`, `closing_date`, `posted_date`) VALUES
(1, 'Accounting', 'Banking and financial professional required', 'Manager', 'LOLC Finance', 1, '2023-11-30', '2023-10-16'),
(2, 'Software Engineering', 'Design and development web applications', 'UI Designer', 'WSO2', 1, '2023-11-30', '2023-10-16'),
(4, 'Software Engineering', 'Design and development web applications', 'Developer', 'IFS', 1, '2023-11-30', '2023-10-16'),
(5, 'Chef', 'Required two years of experience', 'Head Chef', 'Jetwin Hotel', 1, '2023-11-30', '2023-10-16'),
(6, 'Nurse', 'Child care', 'Nurse', 'Hemas', 1, '2023-11-30', '2023-10-16'),
(7, 'Cashier', 'Good in arithmetics', 'Junior Cashier', 'John shop', 1, '2023-11-30', '2023-10-16'),
(8, 'Software Engineering', 'Design and development web applications', 'Developer', 'Virtusa', 1, '2023-11-30', '2023-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `Job_seeker_id` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone_number` char(15) NOT NULL,
  `cvID` int(11) DEFAULT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`Job_seeker_id`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `gender`, `Email`, `Phone_number`, `cvID`, `User_id`) VALUES
(1, 'Nishini', '', 'Silva', '2002-07-20', 2, 'nishinihimasha@gmail.com', '0712505366', 1, 1),
(2, 'Nishadi', '', 'abc', '2003-01-16', 1, 'abc@gmail.com', '0778998987', 2, 2),
(10, 'jude', '', 'silva', '2005-06-16', 1, 'abc@gmail.com', '077899383', 10, 10),
(11, 'nilanka', '', 'pereraa', '2015-02-11', 1, 'test@gmail.com', '0778998765', 11, 11),
(12, 'Imesh', '', 'Randika', '2001-01-23', 1, 'imesh44445555@gmail.com', '0778356946', 12, 12),
(13, 'Imesh', '', 'Randika', '2001-01-23', 1, 'imesh44445555@gmail.com', '0778356946', 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(30) NOT NULL,
  `Password` varchar(15) DEFAULT NULL,
  `User_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `User_name`, `Password`, `User_type_id`) VALUES
(1, 'nishinihimasha@gmail.com', 'Chutti@123', 2),
(2, 'abc@gmail.com', '123456', 2),
(10, 'abc@gmail.com', 'Chutta@123', 2),
(11, 'test@gmail.com', 'Abc@1234', 2),
(12, 'imesh44445555@gmail.com', 'rccrox6677II@', 2),
(13, 'imesh44445555@gmail.com', 'rccrox6677II@', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`Job_seeker_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `Job_seeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
