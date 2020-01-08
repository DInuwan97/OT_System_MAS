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
-- Table structure for table `confirm_frame`
--

CREATE TABLE `confirm_frame` (
  `confirm_no` int(11) NOT NULL,
  `frame_no` int(11) NOT NULL,
  `ot_final_status` varchar(20) NOT NULL,
  `transport_status` varchar(20) NOT NULL,
  `manager_status` varchar(20) NOT NULL,
  `ot_by` varchar(50) NOT NULL,
  `transport_by` varchar(50) NOT NULL,
  `ot_forward_time` varchar(250) NOT NULL,
  `tra_forward_time` varchar(250) NOT NULL,
  `utility_activation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_frame`
--

INSERT INTO `confirm_frame` (`confirm_no`, `frame_no`, `ot_final_status`, `transport_status`, `manager_status`, `ot_by`, `transport_by`, `ot_forward_time`, `tra_forward_time`, `utility_activation`) VALUES
(2, 2, 'Accept', 'Pending', 'Pending', '', '', '', '', ''),
(3, 3, 'Processing', 'Pending', 'Pending', '', '', '', '', ''),
(4, 4, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(5, 5, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(7, 8, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(8, 9, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(9, 10, 'Processing', 'Pending', 'Pending', '', '', '', '', ''),
(10, 1, 'Accept', 'Pending', 'Pending', '', '', '', '', ''),
(11, 11, 'Accept', 'Accept', 'Pending', 'buddhi', 'Wickramape', '2019-01-08 16:24:39', '2019-01-08 16:26:04', ''),
(12, 12, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(13, 13, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(14, 14, 'Accept', 'Accept', 'Accept', '', '', '', '', ''),
(15, 15, 'Accept', 'Accept', 'Accept', '', '', '', '', ''),
(16, 16, 'Accept', 'Accept', 'Pending', '', '', '', '', ''),
(17, 17, 'Pending', 'Pending', 'Pending', '', '', '', '', ''),
(18, 18, 'Accept', 'Accept', 'Accept', 'Wickramape', 'Wickramape', '2018-12-28 14:50:21', '2018-12-28 14:53:51', ''),
(19, 19, 'Accept', 'Accept', 'Accept', '', '', '', '', ''),
(21, 20, 'Accept', 'Accept', 'Accept', '', '', '', '', ''),
(22, 21, 'Accept', 'Accept', 'Accept', '', '', '', '', ''),
(23, 22, 'Accept', 'Accept', 'Accept', 'buddhi', 'Chintha', '2018-12-22 00:39:59', '2018-12-22 00:59:05', 'Pending'),
(24, 23, 'Accept', 'Accept', 'Accept', 'buddhi', 'Chintha', '2018-12-25 01:26:17', '2018-12-25 01:26:44', 'Verify'),
(25, 24, 'Accept', 'Accept', 'Accept', 'buddhi', 'Chintha', '2018-12-25 01:31:13', '2018-12-25 01:31:32', 'Pending'),
(26, 25, 'Accept', 'Accept', 'Accept', 'buddhi', 'Wickramape', '2018-12-28 20:16:29', '2018-12-28 20:16:52', 'Pending'),
(27, 26, 'Accept', 'Accept', 'Accept', 'wickramape', 'wickramape', '2019-01-02 23:21:43', '2019-01-02 23:22:19', 'Pending'),
(28, 27, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending'),
(29, 28, 'Return', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(30, 29, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(31, 30, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(32, 31, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(33, 32, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(34, 33, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(35, 34, 'Accept', 'Accept', 'Accept', 'Wickramape', 'Wickramape', '2019-01-07 18:38:46', '2019-01-07 18:38:57', ''),
(36, 35, 'Accept', 'Accept', 'Accept', 'Wickramape', 'Wickramape', '2019-01-07 21:23:42', '2019-01-07 21:23:58', ''),
(37, 36, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(38, 37, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(39, 38, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(40, 39, 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', 'Pending', ''),
(41, 40, 'Accept', 'Accept', 'Accept', 'Wickramape', 'Wickramape', '2019-01-08 16:27:24', '2019-01-08 16:27:56', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm_frame`
--
ALTER TABLE `confirm_frame`
  ADD PRIMARY KEY (`confirm_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm_frame`
--
ALTER TABLE `confirm_frame`
  MODIFY `confirm_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
