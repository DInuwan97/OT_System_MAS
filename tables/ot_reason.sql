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
-- Table structure for table `ot_reason`
--

CREATE TABLE `ot_reason` (
  `reason_no` int(11) NOT NULL,
  `frame_no` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ot_reason`
--

INSERT INTO `ot_reason` (`reason_no`, `frame_no`, `reason`) VALUES
(1, 3, 'to finish work'),
(2, 5, 'To speed up the tommorows work'),
(3, 6, 'Go ahead of works'),
(5, 8, 'Get ready tot the confernce'),
(6, 9, 'In order to give faster factory outlets to the upcoming competition. '),
(7, 10, 'qqqqqqqqqqqqqqqqq'),
(8, 11, 'aaaaaaaaaaaaaaaaaaa'),
(9, 12, 'ytttttttt'),
(10, 13, 'ddddddda'),
(11, 14, 'asafsgsgsgs fdfdf'),
(12, 15, 'adadadfsgdd dgdg'),
(13, 16, 'advdgmgnmfhnv fjmgjk,gv'),
(14, 17, 'ergedtyhrturyjtyietujfgb  utjfrytt  7tyfjtuiyotghdgky'),
(15, 18, 'detyhfgfghryuryu'),
(16, 19, 'qefsdfhfg  thjtuyiti'),
(17, 20, 'aewrfcsvde rfefefgeefefef'),
(18, 21, 'n publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document without relying on meaningful content. Replacing the actual content with placeholder text allows designers to design the form of the content before the content itself has been produced'),
(19, 22, 'gjryjryjtu rtyuityjity guioyikte7i ryu857ui56k'),
(20, 23, 'SFRHETH ERHDDFHDGHERT RTHTHRHETHETH'),
(21, 24, 'IKUYOYUO'),
(22, 25, 'dfd ffffffffffffffffffffffffcbcbc bcbbbc vccbbcb ccb'),
(23, 26, 'hghjgjhgjggjgj'),
(24, 27, 'dggfg'),
(25, 28, 'dfffffffffffffffffffffffff'),
(26, 29, 'dfffffffffffffffffffffffff'),
(27, 30, 'hhhhhhhhhhhhhhhhhhhhh'),
(28, 31, 'daaaaaaaah nnnnnnnn'),
(29, 32, 'jkkkkkkkkk'),
(30, 33, 'hgggggggggg'),
(31, 34, 'hgdjjjjjjjjjj'),
(32, 35, 'llllllllllll'),
(33, 36, 'kkkkkkkkkkkkkkkkk'),
(34, 37, 'kkkkkkkkkkk'),
(35, 38, 'sfdfdghgj'),
(36, 39, 'hjhjh'),
(37, 40, 'frtyt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ot_reason`
--
ALTER TABLE `ot_reason`
  ADD PRIMARY KEY (`reason_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ot_reason`
--
ALTER TABLE `ot_reason`
  MODIFY `reason_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
