-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 07:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `parentName` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `admissonNo` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `fees` int(8) NOT NULL,
  `program` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gt` varchar(2) NOT NULL,
  `os` varchar(2) NOT NULL,
  `dbms` varchar(2) NOT NULL,
  `coa` varchar(2) NOT NULL,
  `pe` varchar(2) NOT NULL,
  `coi` varchar(2) NOT NULL,
  `p_state` varchar(15) NOT NULL,
  `p_district` varchar(15) NOT NULL,
  `p_city` varchar(15) NOT NULL,
  `p_pincode` int(10) NOT NULL,
  `p_contact` varchar(15) NOT NULL,
  `t_state` varchar(15) NOT NULL,
  `t_district` varchar(15) NOT NULL,
  `t_city` varchar(15) NOT NULL,
  `t_pincode` varchar(10) NOT NULL,
  `t_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`admissonNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
