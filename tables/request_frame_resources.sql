-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 10:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mas_ot`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_frame_resources`
--

CREATE TABLE `request_frame_resources` (
  `resource_no` int(11) NOT NULL,
  `frame_no` int(11) NOT NULL,
  `boiler` decimal(25,2) NOT NULL,
  `mini_boiler` decimal(25,2) NOT NULL,
  `compreasure` decimal(25,2) NOT NULL,
  `mini_compreasure` decimal(25,2) NOT NULL,
  `ac` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_frame_resources`
--

INSERT INTO `request_frame_resources` (`resource_no`, `frame_no`, `boiler`, `mini_boiler`, `compreasure`, `mini_compreasure`, `ac`) VALUES
(2, 22, '9450.00', '0.00', '0.00', '0.00', '11280.00'),
(3, 23, '0.00', '17600.00', '23220.00', '0.00', '0.00'),
(4, 24, '12150.00', '0.00', '0.00', '6780.00', '14160.00'),
(5, 25, '36300.00', '0.00', '0.00', '46200.00', '0.00'),
(6, 26, '2200.00', '0.00', '0.00', '0.00', '5600.00'),
(7, 27, '6600.00', '0.00', '0.00', '9840.00', '20880.00'),
(8, 28, '15400.00', '27160.00', '0.00', '0.00', '48720.00'),
(9, 29, '15400.00', '27160.00', '0.00', '0.00', '48720.00'),
(10, 30, '2200.00', '0.00', '0.00', '3280.00', '0.00'),
(11, 31, '4400.00', '0.00', '0.00', '0.00', '0.00'),
(12, 32, '2200.00', '0.00', '0.00', '0.00', '0.00'),
(13, 33, '2200.00', '0.00', '0.00', '0.00', '5680.00'),
(14, 34, '2200.00', '0.00', '0.00', '0.00', '0.00'),
(15, 35, '0.00', '0.00', '0.00', '0.00', '11104.00'),
(16, 36, '2200.00', '0.00', '0.00', '2960.00', '0.00'),
(17, 37, '0.00', '0.00', '0.00', '2960.00', '5280.00'),
(18, 38, '0.00', '3520.00', '0.00', '2960.00', '0.00'),
(19, 39, '0.00', '0.00', '0.00', '0.00', '5280.00'),
(20, 40, '2200.00', '0.00', '0.00', '0.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_frame_resources`
--
ALTER TABLE `request_frame_resources`
  ADD PRIMARY KEY (`resource_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_frame_resources`
--
ALTER TABLE `request_frame_resources`
  MODIFY `resource_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
