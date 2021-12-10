-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 11:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`, `Designation`) VALUES
('Monisha Bakshi', 'cse.200101055@gmail.com', 'monisha', 'N/A'),
('Maisha Maliha Jahan', 'cse.200101060@gmail.com', 'ruku', 'Library Assistant'),
('MD Al Arman Sorker', 'mdalarmansorker@gmail.com', 'arman', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `Dept` varchar(5) DEFAULT NULL,
  `Bdate` date DEFAULT NULL,
  `Bname` varchar(100) DEFAULT NULL,
  `Wname` varchar(100) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Dept`, `Bdate`, `Bname`, `Wname`, `Amount`, `Edition`, `Price`) VALUES
(12, 'CSE', '2021-11-23', 'INTRODUCTION TO ALGORITHMS', 'THOMAS H. CORMEN, CHARLES E. LEISERSO, RONALD L. RIVEST, CLIFFORD STEIN', 11, 'THIRD EDITION', 125);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `S_ID` int(11) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `S_Dept` varchar(20) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`S_ID`, `S_Name`, `S_Dept`, `Batch`, `Email`, `Phone`, `Password`, `Address`, `Gender`) VALUES
(200101059, 'MD Al Arman Sorker', 'CSE', '10', 'cse.200101059@gmail.com', '01973408603', 'password', 'Rangpur Sadar, Rangpur', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
