-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 10:16 AM
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
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `cost_no` int(11) NOT NULL,
  `frame_no` int(11) NOT NULL,
  `utility_cost` decimal(25,2) NOT NULL,
  `emp_cost` decimal(25,2) NOT NULL,
  `transport_cost` decimal(25,2) NOT NULL,
  `sew_cost` double(25,2) NOT NULL,
  `manager_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`cost_no`, `frame_no`, `utility_cost`, `emp_cost`, `transport_cost`, `sew_cost`, `manager_status`) VALUES
(1, 14, '4340.00', '10200.00', '8700.00', 0.00, 'Accept'),
(2, 15, '6180.00', '13800.00', '9600.00', 0.00, 'Accept'),
(3, 16, '24460.00', '15300.00', '7500.00', 0.00, 'Pending'),
(4, 17, '8720.00', '0.00', '0.00', 0.00, 'Pending'),
(5, 18, '15670.00', '12150.00', '1870.00', 0.00, 'Accept'),
(6, 19, '48020.00', '18900.00', '1500.00', 0.00, 'Accept'),
(7, 20, '31636.00', '3330.00', '5250.00', 0.00, 'Accept'),
(8, 21, '19080.00', '7350.00', '3950.00', 0.00, 'Accept'),
(9, 22, '20730.00', '7350.00', '7500.00', 0.00, 'Accept'),
(10, 23, '40820.00', '18900.00', '1870.00', 0.00, 'Accept'),
(11, 24, '33090.00', '9450.00', '1250.00', 0.00, 'Accept'),
(12, 25, '82500.00', '69300.00', '4520.00', 0.00, 'Accept'),
(13, 26, '7800.00', '4200.00', '1780.00', 0.00, 'Accept'),
(14, 27, '37320.00', '0.00', '0.00', 0.00, 'Pending'),
(15, 28, '91280.00', '0.00', '0.00', 0.00, 'Pending'),
(16, 29, '91280.00', '0.00', '0.00', 0.00, 'Pending'),
(17, 30, '5480.00', '0.00', '0.00', 0.00, 'Pending'),
(18, 31, '4400.00', '0.00', '0.00', 0.00, 'Pending'),
(19, 32, '2200.00', '0.00', '0.00', 0.00, 'Pending'),
(20, 33, '7880.00', '0.00', '0.00', 0.00, 'Pending'),
(21, 34, '2200.00', '3000.00', '1200.00', 0.00, 'Accept'),
(22, 35, '11104.00', '6000.00', '1000.00', 0.00, 'Accept'),
(23, 40, '2200.00', '3000.00', '1700.00', 480.00, 'Accept');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`cost_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `cost_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
