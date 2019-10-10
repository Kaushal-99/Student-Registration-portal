-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 06:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

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
  `applysch` varchar(3) DEFAULT '',
  `appid` varchar(30) DEFAULT NULL,
  `appstatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_type`
--

INSERT INTO `admission_type` (`roll`, `receipt_type`, `applysch`, `appid`, `appstatus`) VALUES
('17CS1031', 'Provisional', 'Yes', '8748jnsjdsjdhjshdj', 'Aproved'),
('17IT1012', 'Regular', 'No', '', ''),
('17IT1013', 'Regular', 'No', '', ''),
('17IT1020', 'Regular', 'Yes', '21554564', 'Aproved'),
('sdfsd', 'sdsds', 'No', 'sdsds', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `roll` varchar(40) NOT NULL,
  `hod` text DEFAULT NULL,
  `CC` text DEFAULT NULL,
  `stud_section` text DEFAULT NULL,
  `final_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`roll`, `hod`, `CC`, `stud_section`, `final_status`) VALUES
('17CS1031', 'Leena', 'Sunita', 'ss', 'approved'),
('17IT1012', 'Ashish', 'Varsha', 'ss', 'approved'),
('17IT1013', 'Ashish', 'Madhav', 'ss', 'approved'),
('17IT1020', 'Ashish', 'Varsha', 'ss', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id`, `name`, `department`, `division`) VALUES
(1, 'Varsha', 'IT', 'A'),
(2, 'Sunita', 'CS', 'A'),
(3, 'Madhav', 'IT', 'B');

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
  `doc_url` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents_submitted`
--

INSERT INTO `documents_submitted` (`roll`, `name`, `doc_url`) VALUES
('17CS1031', 'Marksheet-Sem 1', '../uploadedfiles/17CS1031+IMG-20191009-WA0002.jpg'),
('17IT1012', 'Marksheet-Sem 1', '../uploadedfiles/17IT1012+IMG-20191009-WA0007.jpg'),
('17IT1012', 'Marksheet-Sem 2', '../uploadedfiles/17IT1012+marksheet_1.jpg'),
('17IT1013', 'Marksheet-Sem 1', '../uploadedfiles/17IT1013+IMG-20191009-WA0002.jpg'),
('17IT1020', 'Marksheet-Sem 1', '../uploadedfiles/17IT1020+IMG-20191009-WA0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `seat_no` varchar(30) NOT NULL,
  `month_year` varchar(30) NOT NULL,
  `pointer` decimal(10,2) NOT NULL,
  `kt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `roll`, `sem`, `seat_no`, `month_year`, `pointer`, `kt`) VALUES
('17CS1031+123456', '17CS1031', '1', '123456', '2019-09', '7.40', 0),
('17CS1031+djhsdjh', '17CS1031', '2', 'djhsdjh', '2019-09', '7.62', 0),
('17IT1012+1001', '17IT1012', '1', '1001', '2018-05', '8.70', 0),
('17IT1012+1002', '17IT1012', '2', '1002', '2019-05', '9.20', 0),
('17IT1013+3001', '17IT1013', '1', '3001', '2019-05', '8.50', 0),
('17IT1013+3002', '17IT1013', '2', '3002', '2019-10', '8.23', 0),
('17IT1020+2001', '17IT1020', '1', '2001', '2018-01', '9.00', 0),
('17IT1020+2002', '17IT1020', '2', '2002', '2018-11', '8.23', 0),
('17IT1020+2003', '17IT1020', '3', '2003', '2019-09', '8.43', 0),
('17IT1020+2004', '17IT1020', '4', '2004', '2019-12', '8.90', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`username`, `department`) VALUES
('Leena', 'CS'),
('Ashish', 'IT');

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
('17CS1031', '123', 'STUDENT'),
('17IT1012', '123', 'STUDENT'),
('17IT1013', '123', 'STUDENT'),
('17IT1020', '123', 'STUDENT'),
('Ashish', '123', 'HOD'),
('Leena', '123', 'HOD'),
('Madhav', '123', 'CC'),
('Rahul', '123', 'SS'),
('ss', '123', 'SS'),
('Sunita', '123', 'CC'),
('Varsha', '123', 'CC');

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
('17CS1031', 'Raj', 4, 'TE', 'makarandrox@gmail.com', 'A', 'A3', 'CS', 'OPEN', 'Regular', 'makarand.png'),
('17IT1012', 'Kaushal Chande', 5, 'TE', 'chandekaushal@gmail.com', 'A', 'A2', 'IT', 'OPEN', 'Regular', 'kaushal.jpg'),
('17IT1013', 'Piyush Jha', 5, 'TE', 'piyushjha65@gmail.com', 'B', 'B2', 'IT', 'OPEN', 'Regular', ''),
('17IT1020', 'Makarand Madhavi', 5, 'TE', 'makarandmadhavi99@gmail.com', 'A', 'A2', 'IT', 'OBC', 'Regular', 'makarand.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_section`
--

CREATE TABLE `student_section` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_section`
--

INSERT INTO `student_section` (`id`, `name`) VALUES
(1, 'Rahul');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents_submitted`
--
ALTER TABLE `documents_submitted`
  ADD UNIQUE KEY `doc_url` (`doc_url`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`department`);

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
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_section`
--
ALTER TABLE `student_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
