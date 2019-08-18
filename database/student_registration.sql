-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 12:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_type`
--

CREATE TABLE `admission_type` (
  `roll` varchar(40) NOT NULL,
  `receipt_type` varchar(30) NOT NULL,
  `applysch` varchar(3) NOT NULL DEFAULT 'No',
  `appid` varchar(30) NOT NULL,
  `appstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_type`
--

INSERT INTO `admission_type` (`roll`, `receipt_type`, `applysch`, `appid`, `appstatus`) VALUES
('17IT1020', 'Provisional', 'No', '', 'Aproved'),
('sdfsd', 'sdsds', 'No', 'sdsds', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `roll` varchar(40) NOT NULL,
  `hod` text NOT NULL,
  `CC` text NOT NULL,
  `stud_section` text NOT NULL,
  `final_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents_submitted`
--

CREATE TABLE `documents_submitted` (
  `roll` varchar(40) NOT NULL,
  `name` text NOT NULL,
  `doc_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `seat_no` varchar(30) NOT NULL,
  `month_year` varchar(30) NOT NULL,
  `pointer` decimal(10,0) NOT NULL,
  `kt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `roll`, `seat_no`, `month_year`, `pointer`, `kt`) VALUES
(16, '17IT1020', '', '', '0', 0),
(17, '17IT1020', '', '', '0', 0),
(18, '17IT1020', '', '', '0', 0),
(19, '17IT1020', '', '', '0', 0),
(20, '17IT1020', '', '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('17IT1020', '123', 'STUDENT'),
('cc', '123', 'CC'),
('hod', '123', 'HOD'),
('ss', '123', 'SS');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sem` int(10) NOT NULL,
  `year` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `division` varchar(1) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `department` varchar(30) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `admission_type` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `name`, `sem`, `year`, `email`, `division`, `batch`, `department`, `caste`, `admission_type`, `photo`) VALUES
('17IT1020', 'Makarand Madhavi', 5, 'TE', 'makarand@gmail.com', 'A', 'A2', 'Information Technology', 'OBC', 'Regular', 'makarand.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_section`
--

CREATE TABLE `student_section` (
  `id` varchar(40) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_type`
--
ALTER TABLE `admission_type`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents_submitted`
--
ALTER TABLE `documents_submitted`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student_section`
--
ALTER TABLE `student_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
