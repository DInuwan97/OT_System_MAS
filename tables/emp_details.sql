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
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `emp_no` int(11) NOT NULL,
  `frame_no` int(11) NOT NULL,
  `epf_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `start_location` varchar(50) NOT NULL,
  `end_location` varchar(50) NOT NULL,
  `ot_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`emp_no`, `frame_no`, `epf_no`, `name`, `status`, `start_location`, `end_location`, `ot_status`) VALUES
(1, 1, 123, 'Chamara', 'Staff', 'Kandy', 'Mihinthale', 'Accept'),
(3, 1, 774, 'Gaminda', 'Worker', 'Daraniyagala', 'Town Hall', 'Accept'),
(10, 2, 125, 'Gamini', 'Staff', 'Nabada', 'Horana', 'Accept'),
(20, 2, 8944, 'Ganidu', 'Worker', 'Anuradhapura', 'Horana', 'Accept'),
(21, 9, 850, 'Anuradha', 'Staff', 'Mihinthale', 'Thalawa', 'Pending'),
(22, 9, 851, 'Prasad', 'Worker', 'Plant', 'Mihinthale', 'Pending'),
(24, 3, 4458, 'Pramitha', 'Worker', 'Plant', 'Galenbindunuwewa', 'Accept'),
(25, 1, 544, 'Damesh', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(26, 1, 822, 'Kusuma', 'Worker', 'Malagala', 'Plant', 'Accept'),
(27, 1, 966, 'Renuka', 'Worker', 'Mihinthale', 'Plant', 'Accept'),
(28, 1, 111, 'Jayasekara', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(29, 3, 922, 'Wickrama', 'Staff', 'Plant', 'Mihinthale', 'Accept'),
(30, 3, 810, 'Sunila', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(31, 10, 15544, 'Anura', 'Staff', 'Plant', 'Mihinthale', 'Reject'),
(32, 10, 955, 'Kamala', 'Worker', 'Anuradhapura', 'Mihinthale', 'Accept'),
(33, 10, 871, 'Sumanawathi', 'Worker', 'Plant', 'Galgamuwa', 'Accept'),
(34, 10, 487, 'Wimala', 'Worker', 'Galgamuwa', 'Plant', 'Accept'),
(35, 14, 789, 'Jayantha', 'Staff', 'Plant', 'Mihinthale', 'Accept'),
(36, 14, 811, 'Perera', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(37, 14, 253, 'Manusha', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(38, 14, 933, 'Gamini', 'Worker', 'Galgamuwa', 'Plant', 'Accept'),
(39, 2, 300, 'Saman', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(40, 2, 651, 'Wimal', 'Worker', 'Mihinthale', 'Plant', 'Accept'),
(41, 2, 357, 'Siril', 'Worker', 'Kohuwala', 'Plant', 'Accept'),
(42, 15, 223, 'Kamal', 'Staff', 'Plant', 'Mihinthale', 'Accept'),
(43, 15, 455, 'Sarath', 'Staff', 'Mihinthale', 'Plant', 'Accept'),
(44, 15, 677, 'Wickrama', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(45, 15, 709, 'Lallith', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(46, 15, 311, 'Prabhath', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(47, 16, 41, 'Kamal', 'Staff', 'Mihinthale', 'Plant', 'Accept'),
(48, 16, 85, 'Kasun', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(49, 16, 799, 'Wagesha', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(50, 16, 125, 'Nimal', 'Worker', 'Galgamuwa', 'Plant', 'Accept'),
(64, 3, 677, 'Hasitha', 'Worker', 'Anuradhapura', 'Plant', 'Reject'),
(66, 3, 54, 'Amal', 'Staff', 'Anuradhapura', 'Plant', 'Reject'),
(74, 19, 34, 'Namal', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(75, 19, 78, 'Jagath', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(76, 19, 88, 'Hasitha', 'Worker', 'Plant', 'Galenbindunuwewa', 'Accept'),
(79, 11, 35, 'Eshan', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(80, 11, 679, 'Jayantha', 'Worker', 'Plant', 'Galle', 'Accept'),
(81, 11, 678, 'Lallith', 'Worker', 'Mihinthale', 'Plant', 'Accept'),
(87, 20, 567, 'Kamal', 'Staff', 'Plant', 'Padukka', 'Accept'),
(88, 20, 4657, 'Lallith', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(89, 20, 23, 'Kanthi', 'Worker', 'Galgamuwa', 'Plant', 'Accept'),
(90, 21, 6767, 'Saman', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(91, 21, 768, 'Lal', 'Worker', 'Plant', 'Padukka', 'Accept'),
(92, 21, 997, 'Pathum', 'Worker', 'Galgamuwa', 'Plant', 'Accept'),
(93, 19, 7588, 'Sumana', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(94, 22, 57, 'Siril', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(95, 22, 5678, 'Upul', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(96, 22, 34, 'Upali', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(97, 23, 57, 'Amila', 'Staff', 'Mihinthale', 'Plant', 'Accept'),
(98, 23, 678, 'Kanthi', 'Worker', 'Anuradhapura', 'Plant', 'Accept'),
(99, 23, 89, 'Hasitha', 'Worker', 'Horana', 'Plant', 'Accept'),
(100, 24, 24, 'Dinuwan ', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(101, 24, 79, 'Gamini', 'Worker', 'Plant', 'Padukka', 'Accept'),
(102, 24, 79, 'Lallith', 'Worker', 'Plant', 'Kottawa', 'Accept'),
(103, 13, 57, 'Janith', 'Staff', 'Horana', 'Plant', 'Pending'),
(116, 18, 6878, 'Saliya', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(132, 18, 878, 'Ajith', 'Staff', 'Plant', 'Padukka', 'Accept'),
(133, 18, 778, 'Kalubowila', 'Worker', 'Kohuwala', 'Horana', 'Accept'),
(135, 18, 56, 'Anuradha', 'Worker', 'Plant', 'Colombo', 'Accept'),
(137, 25, 9849, 'Upali', 'Worker', 'Kohuwala', 'Plant', 'Accept'),
(140, 25, 54646, 'Siril', 'Staff', 'Plant', 'Horana', 'Accept'),
(141, 25, 3545, 'Perera', 'Worker', 'Plant', 'Mihinthale', 'Accept'),
(143, 26, 76, 'Lal', 'Worker', 'Plant', 'Kottawa', 'Accept'),
(144, 26, 677, 'Kamal', 'Worker', 'Plant', 'Horana', 'Accept'),
(145, 28, 7878, 'Saman', 'Staff', 'Anuradhapura', 'Plant', 'Accept'),
(146, 28, 656, 'Lal', 'Worker', 'Panadura', 'Plant', 'Accept'),
(148, 28, 965, 'Kanthi', 'Worker', 'Plant', 'Colombo', 'Reject'),
(149, 26, 6575, 'Kalubowila', 'Staff', 'Plant', 'Horana', 'Accept'),
(150, 34, 4545, 'Kanthi', 'Staff', 'Anuradhapura', 'Colombo', 'Accept'),
(151, 34, 67868, 'Upali', 'Worker', 'Plant', 'Padukka', 'Accept'),
(152, 35, 65, 'Chamara', 'Staff', 'Plant', 'Mihinthale', 'Accept'),
(153, 35, 680, 'Kamala', 'Worker', 'Plant', 'Anuradhapura', 'Accept'),
(154, 11, 65, 'Kanthi', 'Worker', 'Plant', 'Kottawa', 'Accept'),
(155, 40, 456, 'Lal', 'Staff', 'Kohuwala', 'Kottawa', 'Accept'),
(156, 40, 98, 'Manusha', 'Worker', 'Plant', 'Kottawa', 'Accept');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`emp_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
