-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 05:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `MOBILE_NO` varchar(50) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `HSC_RESULT` varchar(50) NOT NULL,
  `SSC_RESULT` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `YEAR` varchar(50) NOT NULL,
  `SEMESTER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `GENDER`, `MOBILE_NO`, `DATE_OF_BIRTH`, `HSC_RESULT`, `SSC_RESULT`, `COURSE`, `YEAR`, `SEMESTER`) VALUES
('', '', '', '', '', '0000-00-00', '', '', '', '', ''),
('Tanzeem', 'Rahat', 'tanzeemrahat80@gmail.com', 'Male', '12345678901', '2021-10-20', 'GPA 5.0', 'GPA 5.0', 'CSE', '2020', 'Summer'),
('', '', '', '', '', '0000-00-00', '', '', '', '', ''),
('ABC', 'DEF', 'asd@asdasde.com', 'Female', '12345678912', '2021-10-28', 'GPA 4.0', 'GPA 3.0', 'EEE', '2021', 'Spring');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
