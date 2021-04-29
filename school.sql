-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 08:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(1, 'One', 'A'),
(3, 'Nine', 'E'),
(5, 'four', 'C'),
(6, 'Two', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `class`, `subject`, `section`, `time`, `date`) VALUES
(1, 'Musfiqur Rahman', 'Seven', 'English', 'A', '11-2 pm', 'Sunday, Tuesday'),
(2, 'Ishraq Ahamed', 'Six', 'Bangla', 'B', '8-10 am', 'Sunday, Tuesday'),
(3, 'Easha Afroz', 'Eight', 'Mathematics', 'C', '10-12 pm', 'Monday, Wednesday'),
(4, 'Hasan', 'Nine', 'Biology', 'A', '1-3 pm', 'Monday, Wednesday'),
(5, 'Raksan Polok', 'Nine', 'Physics', 'C', '8-10 am', 'Sunday, Tuesday'),
(6, 'Ummea Salma', 'Ten', 'Economics ', 'D', '2-4 pm', 'Sunday, Wednessday');

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

CREATE TABLE `hclass` (
  `HID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hclass`
--

INSERT INTO `hclass` (`HID`, `TID`, `CLA`, `SEC`, `SUB`) VALUES
(1, 1, 'One', 'E', 'Bangla'),
(2, 1, 'four', 'A', 'English'),
(3, 1, 'four', 'A', 'English'),
(4, 1, 'Nine', 'A', 'Chemistry'),
(5, 1, 'Nine', 'E', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `TID` int(11) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(150) NOT NULL,
  `SAL` varchar(150) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(1, 'musfiqur@123', 'musfiqur123', 'BsC', '35000', '+8801767788331', 'musfiqur521@gmail.com', 'Nikunja-2, Dhaka', '2.jpg'),
(2, 'Teacher@123', '1234', 'MSC', '35000', '', '', '', ''),
(3, 'teacher2@123', '1234', 'MSC', '35000', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(2, 'Bangla'),
(6, 'English'),
(8, 'Biology '),
(9, 'Chemistry'),
(10, 'English'),
(12, 'hhhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hclass`
--
ALTER TABLE `hclass`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hclass`
--
ALTER TABLE `hclass`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
