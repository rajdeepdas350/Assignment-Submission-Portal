-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 02:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5th_sem_miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `sl_no` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`sl_no`, `roll_no`, `sub`, `question`, `ans`, `upload_date`) VALUES
(1, 16, 'Mathematics', 'Write all the prime numbers from 1 to 20', '1,2,3,5,7,11,13,17,19', '2023-01-16'),
(2, 16, 'C Programming', 'Hello', 'printf(\"Hello World\");', '2023-01-16'),
(3, 16, 'Data Structures', 'Implement a queue\r\n', 'test ans', '2023-01-16'),
(4, 16, 'Data Structures', 'Implement a Stack using C programming', 'Answers', '2023-01-16'),
(5, 38, 'C Programming', 'Hello', 'int main(){}', '2023-01-16'),
(6, 38, 'Data Structures', 'Implement a queue', 'Queue Answer\r\n', '2023-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `sl_no` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`sl_no`, `subject`, `question`) VALUES
(1, 'Data Structures', 'Implement a Stack using C programming'),
(2, 'C Programming', 'Hello'),
(3, 'Data Structures', 'Implement a queue\r\n'),
(4, 'Mathematics', 'Write all the prime numbers from 1 to 20');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `name`, `branch`, `semester`, `roll_no`, `username`, `password`) VALUES
(1, 'Gaurav Kumar Das', 'CSE', '5', 16, 'gaurav1_9', 'std123'),
(2, 'Raajdeep Das', 'CSE', '5', 38, 'raj_23', 'std123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE `teacher_reg` (
  `id` int(4) NOT NULL,
  `name` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`id`, `name`, `subject`, `username`, `password`) VALUES
(1, 'Gajendra Purohit', 'Mathematics', 'gp_69', 'teach123'),
(2, 'Harris Khan', 'C Programming', '_cwh', 'teach123'),
(3, 'Jenny', 'Data Structures', '_jenny_', 'teach123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
