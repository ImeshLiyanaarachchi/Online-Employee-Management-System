-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 01:55 AM
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
-- Database: `express_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Inquery_ID` int(3) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Inquery_ID`, `Full Name`, `Email`, `Subject`, `Message`) VALUES
(2, 'Imesh Liyanaarachchi', 'imesh22@gmail.com', 'Candidate document Related Matter', 'I was not able to upload documents to the website'),
(3, 'Sudesh Liyanaarachchi', 'Sudesh44@gmail.com', 'Candidate Registration Error', 'I can not register to the website '),
(4, 'Mahesh bandula', 'mahesh323@gmail.com', 'Job posting related issue', 'I can post job posts to the web site ');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jobID` int(3) NOT NULL,
  `jobtitle` varchar(25) NOT NULL,
  `companyname` varchar(25) NOT NULL,
  `jobdescription` text NOT NULL,
  `jobrequirements` text NOT NULL,
  `salary` varchar(10) NOT NULL,
  `location` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jobID`, `jobtitle`, `companyname`, `jobdescription`, `jobrequirements`, `salary`, `location`) VALUES
(2, 'Software Engineer', 'IFS', 'We are seeking a highly motivated and skilled Software Engineer to join our dynamic team. As a Software Engineer, you will be responsible for designing, developing, and maintaining software solutions.', '5 Years work experience, Degree related to ICT', 'Rs.100000', 'No:44 Puwakpitiya Avissaw'),
(3, 'Business Analyst', 'Zone-27', 'We are seeking a skilled and detail-oriented Business Analyst to join our team. As a Business Analyst, your role will be pivotal in bridging the gap between business needs and technical solutions.', '4 Years work experience, Degree related to ICT or management', 'Rs.200000', 'No:55 Rawathawatta Rathma'),
(4, 'Web developer', 'Virtusa', 's a Web Developer, you will play a key role in designing, implementing, and maintaining websites and web applications that are visually appealing and user-friendly.', '4 Years work experience, Degree or diploma related to ICT or computer science', 'Rs.500000', 'No:55 Panadura Kaluthara'),
(5, 'Software architect', 'IFS', 'As a Software Architect, you will be responsible for translating complex business requirements into architectural blueprints that guide the development team.', '6 years of work Experience ability work in stressfull conditions', 'Rs.800000', 'No:55 Kiriwandala Avissaw'),
(6, 'Software Engineer', 'Dialog Axiata', 'If you\'re passionate about coding, have a problem-solving mindset, and enjoy working collaboratively to create innovative software, we encourage you to apply.', 'IT degree with 5 years of experience and problrm solving skills', 'Rs.100000', 'No:82 Homagama Kiriwathth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Inquery_ID`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jobID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Inquery_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jobID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
