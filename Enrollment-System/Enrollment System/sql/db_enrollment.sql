-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:26 AM
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
-- Database: `db_enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_infotbl`
--

CREATE TABLE `students_infotbl` (
  `ID` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(50) NOT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `stud_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_infotbl`
--

INSERT INTO `students_infotbl` (`ID`, `course`, `strand`, `last_name`, `first_name`, `middle_name`, `phone_number`, `gender`, `stud_status`) VALUES
(3, 'BSCS', 'ABM', 'Parrilla', 'Jason Matthew', 'Rosas', '12345678910', 'Male', 'Transferee'),
(4, 'BSCpE', 'TVL-ICT', 'Matta', 'Carlos Miguel', 'N/A', '12345678910', 'Male', 'Old/New'),
(5, 'BSCS', 'HUMSS', 'Olympia', 'Patrick', 'N/A', '12345678910', 'Male', 'Transferee'),
(6, 'BSCS', 'TVL-ICT', 'Vierneza', 'Ton', 'Bigcas', '12345678910', 'Male', 'Old/New'),
(7, 'BSIT', 'GAS', 'Tenido', 'Reilly', 'Capili', '12345678910', 'Male', 'Old/New'),
(8, 'BSIT', 'TVL-ICT', 'Cruz', 'Cyrus Anthony', 'N/A', '12345678910', 'Male', 'Old/New'),
(9, 'BSIT', 'STEM', 'Silva', 'Lance Aldous', 'N/A', '12345678910', 'Male', 'Transferee'),
(10, 'BSIT', 'HUMSS', 'Reyes', 'Patrick', 'N/A', '12345678910', 'Male', 'Transferee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_infotbl`
--
ALTER TABLE `students_infotbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_infotbl`
--
ALTER TABLE `students_infotbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
