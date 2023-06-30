-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 12:29 PM
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
-- Table structure for table `contacts_tbl`
--

CREATE TABLE `contacts_tbl` (
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts_tbl`
--

INSERT INTO `contacts_tbl` (`name`, `position`, `contact`) VALUES
('DR. MA. Agnes P. Nuestro', 'VP for Academic Affairs', 'ovpaa@cvsu.edu.ph'),
('DR. Camilo A. Polinga', 'VP for Administrative and Support Services', 'ovpass@cvsu.edu.ph'),
('DR. Melbourne R. Talactac', 'VP for Research and Extension', 'ovpre@cvsu.edu.ph'),
('DR. Mary Jane D. Tepora', 'VP for Planning and Development', 'pdo@cvsu.edu.ph'),
('DR. Mary Jane D. Tepora', 'DEAN, College of Agriculture, Food, Environment and Natural Resources', 'cafenr@cvsu.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `course_id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`course_id`, `course`) VALUES
(0, 'BSE'),
(1, 'BSHM'),
(2, 'BSCpE'),
(3, 'BSBM'),
(4, 'BSIT'),
(5, 'BSCS'),
(6, 'BSIndT');

-- --------------------------------------------------------

--
-- Table structure for table `programs_tbl`
--

CREATE TABLE `programs_tbl` (
  `course` varchar(100) DEFAULT NULL,
  `adviser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs_tbl`
--

INSERT INTO `programs_tbl` (`course`, `adviser`) VALUES
('Bachelor of Secondary Education', 'Aira G. Cantorne'),
('BS Business Management', 'Ma. Theresa Ochoa'),
('BS Computer Engineering', 'Matthew Loyola'),
('BS Computer Science', 'John Michael Calandria'),
('BS Hospitality Management', 'Leslie Caparas'),
('BS Industrial Technology', 'Jhumel Ignas'),
('BS Information Technology', 'Daryl Supan');

-- --------------------------------------------------------

--
-- Table structure for table `strand_tbl`
--

CREATE TABLE `strand_tbl` (
  `strand_id` int(11) NOT NULL,
  `strand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strand_tbl`
--

INSERT INTO `strand_tbl` (`strand_id`, `strand`) VALUES
(0, 'TVL'),
(1, 'STEM'),
(2, 'GAS'),
(3, 'HUMSS'),
(4, 'ABM');

-- --------------------------------------------------------

--
-- Table structure for table `studdetails_tbl`
--

CREATE TABLE `studdetails_tbl` (
  `stud_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studdetails_tbl`
--

INSERT INTO `studdetails_tbl` (`stud_id`, `first_name`, `last_name`, `middle_name`, `gender`) VALUES
(17, 'Rianna Joy', 'Ando', 'N/A', 'F'),
(18, 'Lance Aldous', 'Silva', 'N/A', 'M'),
(21, 'Ton', 'Vierneza', 'Bigcas', 'M'),
(22, 'Reilly', 'Tenido', 'Capili', 'M'),
(25, 'Carlos Miguel', 'Matta', 'N/A', 'M'),
(26, 'Cyrus Anthony', 'Cruz', 'N/A', 'M'),
(28, 'Laurence James', 'Badayos', 'Rosas', 'M'),
(29, 'Jason Matthew', 'Parrilla', 'Rosas', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `studinfo_tbl`
--

CREATE TABLE `studinfo_tbl` (
  `ID` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `strand_id` int(11) NOT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `stud_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studinfo_tbl`
--

INSERT INTO `studinfo_tbl` (`ID`, `course_id`, `strand_id`, `phone_number`, `stud_status`) VALUES
(17, 4, 4, '12354678910', 'Transferee'),
(18, 6, 2, '12345678910', 'Old/New'),
(21, 1, 3, '12345678910', 'Transferee'),
(22, 5, 2, '12345678910', 'Old/New'),
(25, 0, 2, '12345678910', 'Old/New'),
(26, 0, 0, '12345678910', 'Old/New'),
(28, 2, 1, '12345678910', 'Transferee'),
(29, 3, 4, '12345678910', 'Old/New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `strand_tbl`
--
ALTER TABLE `strand_tbl`
  ADD PRIMARY KEY (`strand_id`);

--
-- Indexes for table `studdetails_tbl`
--
ALTER TABLE `studdetails_tbl`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `studinfo_tbl`
--
ALTER TABLE `studinfo_tbl`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `strand_id` (`strand_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studinfo_tbl`
--
ALTER TABLE `studinfo_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studdetails_tbl`
--
ALTER TABLE `studdetails_tbl`
  ADD CONSTRAINT `studdetails_tbl_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `studinfo_tbl` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studinfo_tbl`
--
ALTER TABLE `studinfo_tbl`
  ADD CONSTRAINT `studinfo_tbl_ibfk_1` FOREIGN KEY (`strand_id`) REFERENCES `strand_tbl` (`strand_id`),
  ADD CONSTRAINT `studinfo_tbl_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course_tbl` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
