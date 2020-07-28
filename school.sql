-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 11:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1205, 'Vishal', 'vishal@gmail.com', 'vishal123', '999'),
(1206, 'Ash', 'ash@gmail.com', 'ash123', '555');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `place`, `date`) VALUES
(15, 'Plantation Drive', 'School Garden', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `date` date NOT NULL,
  `exam_group` enum('unit tests','half yearly','finals') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject`, `max_marks`, `duration`, `date`, `exam_group`) VALUES
(2, 'Maths', 30, 1, '2017-08-31', 'unit tests'),
(3, 'Science', 50, 2, '2017-06-07', 'half yearly'),
(4, 'Social Studies', 50, 2, '2017-06-12', 'half yearly'),
(5, 'Maths', 100, 3, '2017-12-13', 'finals'),
(6, 'Science', 100, 3, '2017-12-20', 'finals'),
(9, 'English', 30, 1, '2017-08-18', 'unit tests');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `s_id`, `e_id`, `marks`) VALUES
(1, 5411, 1, 24),
(2, 5411, 2, 25),
(4, 5411, 4, 49),
(6, 5411, 5, 88),
(7, 5411, 6, 74),
(8, 5411, 3, 37),
(9, 5411, 8, 11);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `roll_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grade` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `section` enum('A','B','C','D') NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`roll_number`, `name`, `email`, `password`, `grade`, `section`, `mobile`) VALUES
(5411, 'Vaibhav', 'vaibhav@gmail.com', 'vaibhav123', '11', 'A', '111'),
(5412, 'Mark', 'mark@gmail.com', 'mark123', '4', 'B', '111'),
(5413, 'Jakey', 'jakey@gmail.com', 'jakey123', '11', 'B', '222'),
(5414, 'Paul', 'paul@gmail.com', 'paul123', '2', 'A', '333'),
(5415, 'Cole', 'cole@gmail.com', 'cole123', '8', 'B', '000'),
(5416, 'Abhinav', 'abhinav@gmail.com', 'abhinav123', '7', 'B', '123'),
(5417, 'pratik', 'pratikj@gmail.com', '123456', '1', 'A', '9716874223');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_id` (`s_id`,`e_id`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1207;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `roll_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5418;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`roll_number`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `exams` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
