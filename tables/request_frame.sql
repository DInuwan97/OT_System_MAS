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
-- Table structure for table `request_frame`
--

CREATE TABLE `request_frame` (
  `frame_no` int(11) NOT NULL,
  `frame_by` varchar(100) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `staff_members` int(11) NOT NULL,
  `worker_members` int(11) NOT NULL,
  `model_num` int(11) NOT NULL,
  `vsm_num` int(11) NOT NULL,
  `utility` varchar(50) NOT NULL,
  `ot_hours` decimal(25,2) NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `start_time24` time NOT NULL,
  `end_time24` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_frame`
--

INSERT INTO `request_frame` (`frame_no`, `frame_by`, `req_date`, `start_time`, `end_time`, `staff_members`, `worker_members`, `model_num`, `vsm_num`, `utility`, `ot_hours`, `added_date`, `start_time24`, `end_time24`) VALUES
(1, 'Dinuwan', '11/23/2018', '7:00 PM', '9:00 PM', 1, 5, 12, 1001, '', '2.00', '2018-11-26 19:02:12', '00:00:00', '00:00:00'),
(2, 'Dinuwan', '11/27/2018', '9:42 PM', '11:42 PM', 1, 4, 115, 1005, '', '2.00', '2018-11-27 21:42:51', '00:00:00', '00:00:00'),
(3, 'buddhi', '11/28/2018', '5:30 PM', '8:30 PM', 2, 3, 78, 1019, '', '3.00', '2018-11-28 01:25:48', '00:00:00', '00:00:00'),
(4, 'Dinuwan', '11/28/2018', '11:17 AM', '1:17 PM', 1, 8, 552, 1005, '', '2.00', '2018-11-28 11:18:00', '00:00:00', '00:00:00'),
(5, 'Dinuwan', '11/28/2018', '11:19 AM', '12:19 PM', 2, 10, 1244, 1007, '', '1.00', '2018-11-28 11:19:48', '00:00:00', '00:00:00'),
(6, 'Dinuwan', '11/28/2018', '1:40 PM', '3:40 PM', 2, 5, 12, 1442, '', '2.00', '2018-11-28 13:41:01', '00:00:00', '00:00:00'),
(8, 'Chintha', '11/29/2018', '5:20 PM', '7:20 PM', 1, 8, 7844, 1012, '', '2.00', '2018-11-29 00:37:28', '00:00:00', '00:00:00'),
(9, 'Dinuwan', '11/29/2018', '12:24 PM', '2:24 PM', 2, 10, 182, 4885, '', '2.00', '2018-11-29 12:27:13', '00:00:00', '00:00:00'),
(10, 'buddhi', '11/30/2018', '10:12 PM', '12:12 PM', 1, 3, 11, 17458, '', '2.00', '2018-11-30 22:13:05', '00:00:00', '00:00:00'),
(11, 'buddhi', '11/23/2018', '7:45 AM', '3:04 AM', 1, 3, 721, 2071, '', '2.00', '2018-12-07 18:01:18', '00:00:00', '00:00:00'),
(12, 'buddhi', '11/26/2018', '12:03 PM', '9:45 AM', 1, 4, 768, 78541, '', '2.00', '2018-12-07 19:46:49', '00:00:00', '00:00:00'),
(13, 'buddhi', '11/28/2018', '1:04 AM', '3:04 AM', 1, 5, 324, 8529, '', '3.00', '2018-12-07 19:49:14', '00:00:00', '00:00:00'),
(14, 'Dinuwan', '12/07/2018', '11:00 PM', '1:00 AM', 1, 3, 1254, 1000, '', '2.00', '2018-12-07 23:00:25', '00:00:00', '00:00:00'),
(15, 'Dinuwan', '12/09/2018', '1:39 PM', '3:39 PM', 2, 3, 125, 1500, '', '2.00', '2018-12-09 13:40:03', '00:00:00', '00:00:00'),
(16, 'buddhi', '12/11/2018', '5:30 PM', '7:15 PM', 1, 3, 7415, 7551, '', '3.00', '2018-12-11 13:20:45', '00:00:00', '00:00:00'),
(17, 'Dinuwan', '12/12/2018', '8:30 PM', '10:45 PM', 1, 2, 46, 745, '', '2.00', '2018-12-12 20:25:40', '20:30:00', '22:45:00'),
(18, 'Dinuwan', '12/12/2018', '8:30 PM', '10:45 PM', 1, 3, 47, 546, '', '2.25', '2018-12-12 20:27:41', '20:30:00', '22:45:00'),
(19, 'Dinuwan', '12/14/2018', '7:30 PM', '11:00 PM', 1, 3, 11, 457, '', '3.50', '2018-12-13 22:38:45', '19:30:00', '23:00:00'),
(20, 'chintha', '12/14/2018', '4:03 PM', '7:45 PM', 1, 2, 99, 451, '', '3.70', '2018-12-14 16:34:19', '16:03:00', '19:45:00'),
(21, 'Chintha', '01/01/2019', '5:30 PM', '7:15 PM', 1, 2, 234, 5768, '', '1.75', '2018-12-14 18:30:46', '00:00:00', '00:00:00'),
(22, 'Wickramape', '1/15/2018', '5:30 PM', '7:15 PM', 1, 2, 781, 46, 'Boiler,AC,Compreasure,Mini Compreasure,Mini Boiler', '1.75', '2018-12-22 00:07:05', '17:30:00', '19:15:00'),
(23, 'Wickramape', '12/29/2018', '5:30 PM', '10:00 PM', 1, 2, 354, 549, 'Mini Boiler,Compreasure', '4.50', '2018-12-24 23:19:17', '00:00:00', '00:00:00'),
(24, 'Wickramape', '1/15/2018', '5:20 PM', '7:45 PM', 1, 2, 679, 6, 'Boiler,AC,Mini Compreasure', '2.25', '2018-12-24 23:21:10', '17:20:00', '19:45:00'),
(25, 'bhanuka', '12/28/2018', '8:00 PM', '12:30 PM', 1, 2, 156, 8845, 'Boiler,Mini Compreasure', '16.50', '2018-12-28 19:59:07', '05:00:00', '15:00:00'),
(26, 'Bhanuka', '12/28/2018', '9:50 PM', '10:50 PM', 1, 2, 5454, 2121, 'Boiler,AC', '1.00', '2018-12-28 21:50:51', '21:50:00', '22:50:00'),
(27, 'Dinuwan', '11/23/2018', '11:25 AM', '2:25 PM', 1, 2, 7, 4545, 'Boiler,AC,Mini Compreasure', '3.00', '2018-12-30 11:25:56', '11:25:00', '19:25:00'),
(28, 'Dinuwan', '11/23/2018', '10:30 AM', '5:30 PM', 1, 2, 24, 656, 'Boiler,Mini Boiler,AC', '7.00', '2019-01-01 16:55:58', '10:30:00', '17:30:00'),
(29, 'Dinuwan', '11/23/2018', '10:30 AM', '5:30 PM', 1, 2, 24, 656, 'Boiler,Mini Boiler,AC', '7.00', '2019-01-01 17:22:51', '10:30:00', '17:30:00'),
(30, 'Dinuwan', '12/28/2018', '4:12 PM', '5:12 PM', 1, 3, 4577, 7, 'Boiler,Mini Compressor', '1.00', '2019-01-06 16:12:33', '16:12:00', '17:12:00'),
(31, 'Bhanuka', '12/31/2018', '6:47 PM', '8:47 PM', 1, 5, 789, 80, 'Boiler', '2.00', '2019-01-06 18:47:33', '18:47:00', '20:47:00'),
(32, 'buddhi', '12/31/2018', '7:23 PM', '8:23 PM', 2, 2, 7754, 20, 'Boiler', '1.00', '2019-01-06 19:24:08', '19:23:00', '20:23:00'),
(33, 'Wickramape', '12/28/2018', '9:40 PM', '10:40 PM', 1, 5, 54545, 60, 'Boiler,AC', '1.00', '2019-01-06 21:40:49', '21:40:00', '22:40:00'),
(34, 'Wickramape', '12/31/2018', '6:37 PM', '7:37 PM', 1, 1, 1, 1, 'Boiler', '1.00', '2019-01-07 18:38:03', '18:37:00', '19:37:00'),
(35, 'Wickramape', '11/26/2018', '9:22 PM', '11:22 PM', 1, 1, 111, 1, 'AC', '2.00', '2019-01-07 21:22:41', '21:22:00', '23:22:00'),
(36, 'Wickramape', '01/08/2019', '12:35 AM', '1:35 AM', 1, 1, 223, 15, 'Boiler,Mini Compressor', '1.00', '2019-01-08 00:35:42', '00:35:00', '01:35:00'),
(37, 'Wickramape', '01/08/2019', '12:38 AM', '1:38 AM', 1, 1, 2555, 45, 'AC,Mini Compressor', '1.00', '2019-01-08 00:38:19', '00:38:00', '01:38:00'),
(38, 'Wickramape', '01/08/2019', '1:08 AM', '2:08 AM', 1, 1, 10, 60, 'Mini Boiler,Mini Compressor', '1.00', '2019-01-08 01:08:30', '01:08:00', '02:08:00'),
(39, 'Wickramape', '01/08/2019', '1:12 AM', '2:12 AM', 1, 1, 414, 40, 'AC', '1.00', '2019-01-08 01:12:48', '01:12:00', '02:12:00'),
(40, 'Wickramape', '01/08/2019', '7:51 AM', '8:51 AM', 1, 1, 6778, 12, 'Boiler', '1.00', '2019-01-08 07:52:05', '07:51:00', '08:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_frame`
--
ALTER TABLE `request_frame`
  ADD PRIMARY KEY (`frame_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_frame`
--
ALTER TABLE `request_frame`
  MODIFY `frame_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
