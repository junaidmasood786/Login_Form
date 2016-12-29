-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 08:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_pass` text NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pass`, `created_date`) VALUES
(11, 'Admin', 'admin', '27 Dec, 2016 17:51:51'),
(12, 'Admin', 'admin', '27 Dec, 2016 17:53:08'),
(13, 'Admin', 'admin', '28 Dec, 2016 10:10:10'),
(15, 'Junaid', 'jsklaj', '28 Dec, 2016 15:29:24'),
(16, 'Junaid', 'jsklaj', '28 Dec, 2016 15:31:12'),
(17, 'Junaid', 'jsklaj', '28 Dec, 2016 15:31:31'),
(18, 'Junaid', 'jsklaj', '28 Dec, 2016 15:31:33'),
(19, 'Junaid', 'jsklaj', '28 Dec, 2016 15:32:55'),
(20, 'Junaid', 'jsklaj', '28 Dec, 2016 15:33:06'),
(21, 'Junaid', 'jsklaj', '28 Dec, 2016 15:33:26'),
(22, 'Junaid', 'jsklaj', '28 Dec, 2016 15:33:42'),
(23, 'Junaid', 'jsklaj', '28 Dec, 2016 15:33:50'),
(24, 'Junaid', 'jsklaj', '28 Dec, 2016 15:33:55'),
(25, 'Junaid', 'jsklaj', '28 Dec, 2016 15:34:04'),
(26, 'Junaid', 'jsklaj', '28 Dec, 2016 15:34:25'),
(27, 'Junaid', 'jsklaj', '28 Dec, 2016 15:36:04'),
(28, 'Junaid', 'jsklaj', '28 Dec, 2016 15:36:33'),
(29, 'Junaid', 'jsklaj', '28 Dec, 2016 15:37:01'),
(30, 'Junaid', 'jsklaj', '28 Dec, 2016 15:37:16'),
(31, 'Junaid', 'jsklaj', '28 Dec, 2016 15:37:32'),
(32, 'Junaid', 'jsklaj', '28 Dec, 2016 15:37:43'),
(33, 'Junaid', 'jsklaj', '28 Dec, 2016 15:37:52'),
(34, 'Junaid', 'dhjakd', '28 Dec, 2016 15:40:57'),
(36, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:12:45'),
(37, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:13:18'),
(38, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:13:25'),
(39, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:15:19'),
(40, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:15:47'),
(41, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:17:03'),
(42, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:17:21'),
(43, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:17:37'),
(44, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:18:23'),
(45, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:18:37'),
(46, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:18:45'),
(47, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:18:52'),
(48, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:19:00'),
(49, 'Junaid', 'adsjkdalsd', '28 Dec, 2016 17:19:32'),
(50, 'Junaid', 'askdljal', '28 Dec, 2016 17:20:04'),
(53, 'Junaid', 'sdklSJD', '28 Dec, 2016 17:26:09'),
(54, 'Junaid', 'sdklSJD', '28 Dec, 2016 17:28:35'),
(55, 'Junaid', 'ssss', '28 Dec, 2016 17:59:03'),
(56, 'Junaid', 'jsddkhad', '28 Dec, 2016 18:01:15'),
(57, 'Junaid', '12342567', '28 Dec, 2016 20:02:08'),
(58, 'Junaid', '12342567', '28 Dec, 2016 20:11:08'),
(59, 'Junaid', 'ssss', '28 Dec, 2016 20:56:38'),
(60, 'Junaid', 'ssss', '28 Dec, 2016 20:59:29'),
(61, 'Junaid', 'ssss', '28 Dec, 2016 21:00:47'),
(62, 'Junaid', 'ssss', '28 Dec, 2016 21:00:57'),
(63, 'Junaid', 'ssss', '28 Dec, 2016 21:01:21'),
(64, 'Junaid', 'ssss', '28 Dec, 2016 21:09:17'),
(65, 'Junaid', 'ssss', '28 Dec, 2016 21:09:42'),
(66, 'Junaid', 'ssss', '28 Dec, 2016 21:10:02'),
(67, 'Junaid', 'ssss', '28 Dec, 2016 21:10:24'),
(68, 'Junaid', 'ssss', '28 Dec, 2016 21:11:43'),
(69, 'Junaid', 'ssss', '28 Dec, 2016 21:12:12'),
(70, 'Junaid', 'ssss', '28 Dec, 2016 21:12:40'),
(71, 'Junaid', 'ssss', '28 Dec, 2016 21:13:01'),
(72, 'Junaid', 'ssss', '28 Dec, 2016 21:13:30'),
(73, 'Junaid', 'ssss', '28 Dec, 2016 21:13:39'),
(74, 'Junaid', 'ssss', '28 Dec, 2016 21:19:31'),
(75, 'Junaid', 'ssss', '28 Dec, 2016 21:19:58'),
(76, 'Junaid', 'ssss', '28 Dec, 2016 21:23:07'),
(77, 'Junaid', 'ssss', '28 Dec, 2016 21:27:39'),
(78, 'Junaid', 'ssss', '28 Dec, 2016 21:27:48'),
(79, 'Junaid', 'ssss', '28 Dec, 2016 21:28:08'),
(80, 'Junaid', 'ssss', '28 Dec, 2016 21:28:21'),
(81, 'Junaid', 'ssss', '29 Dec, 2016 4:24:54'),
(82, 'Junaid', 'SSSS', '29 Dec, 2016 4:26:24'),
(83, 'Junaid', 'ssss', '29 Dec, 2016 5:09:42'),
(84, 'Junaid', 'ssss', '29 Dec, 2016 5:09:53'),
(85, 'Junaid', 'ssss', '29 Dec, 2016 6:14:40'),
(86, 'Junaid', 'ssss', '29 Dec, 2016 10:01:43'),
(87, 'Junaid', 'ssss', '29 Dec, 2016 10:07:15'),
(88, 'Junaid', 'ssss', '29 Dec, 2016 10:08:49'),
(89, 'Junaid', 'ssss', '29 Dec, 2016 10:09:07'),
(90, 'Junaid', 'ssss', '29 Dec, 2016 10:10:30'),
(91, 'Junaid', 'ssss', '29 Dec, 2016 10:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_pass` text NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_name`, `m_pass`, `created_date`) VALUES
(42, 'Member', 'member', '27 Dec, 2016 17:39:58'),
(43, 'Umair', 'shdjka', '28 Dec, 2016 17:09:47'),
(44, 'Umair', 'shdjka', '28 Dec, 2016 17:10:08'),
(45, 'Umair', 'ajkdjak', '28 Dec, 2016 17:10:21'),
(46, 'Umair', 'ajkdjak', '28 Dec, 2016 17:10:40'),
(47, 'Umair', 'fwjrfhw', '28 Dec, 2016 17:25:55'),
(48, 'Umair', 'kdnaskdf', '28 Dec, 2016 17:28:45'),
(49, 'Umair', 'kdnaskdf', '28 Dec, 2016 17:31:12'),
(50, 'Umair', 'dskldjkls', '28 Dec, 2016 17:31:46'),
(51, 'Umair', 'asd', '28 Dec, 2016 17:57:34'),
(52, 'Umair', 'asd', '28 Dec, 2016 21:03:42'),
(53, 'Umair', 'asd', '28 Dec, 2016 21:03:52'),
(54, 'Umair', 'asd', '28 Dec, 2016 21:05:26'),
(55, 'Umair', 'asd', '28 Dec, 2016 21:05:44'),
(56, 'Junaid', 'ssss', '28 Dec, 2016 21:12:12'),
(57, 'Umair', 'asd', '28 Dec, 2016 21:12:23'),
(58, 'Junaid', 'ssss', '28 Dec, 2016 21:12:40'),
(59, 'Junaid', 'ssss', '28 Dec, 2016 21:13:01'),
(60, 'Umair', 'asd', '28 Dec, 2016 21:20:10'),
(61, 'Umair', 'asd', '28 Dec, 2016 21:20:35'),
(62, 'Umair', 'asd', '28 Dec, 2016 21:21:05'),
(63, 'Umair', 'asd', '28 Dec, 2016 21:21:42'),
(64, 'Umair', 'asd', '28 Dec, 2016 21:22:38'),
(65, 'Umair', 'asd', '28 Dec, 2016 21:22:56'),
(66, 'Umair', 'asd', '28 Dec, 2016 21:23:20'),
(67, 'Umair', 'asd', '28 Dec, 2016 21:23:58'),
(68, 'Umair', 'asd', '28 Dec, 2016 21:24:14'),
(69, 'Umair', 'asd', '28 Dec, 2016 21:25:22'),
(70, 'Umair', 'asd', '28 Dec, 2016 21:25:32'),
(71, 'Umair', 'asd', '28 Dec, 2016 21:28:44'),
(72, 'Umair', 'asd', '29 Dec, 2016 4:25:22'),
(73, 'Umair', 'asd', '29 Dec, 2016 4:55:52'),
(74, 'Umair', 'asd', '29 Dec, 2016 5:10:00'),
(75, 'Umair', 'asd', '29 Dec, 2016 5:10:36'),
(76, 'Umair', 'asd', '29 Dec, 2016 6:14:26'),
(77, 'Umair', 'asd', '29 Dec, 2016 10:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `s_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(15) DEFAULT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` text NOT NULL,
  `DOBD` int(2) NOT NULL,
  `DOBM` text NOT NULL,
  `DOBY` int(4) NOT NULL,
  `Email` text NOT NULL,
  `Telephone` varchar(13) DEFAULT NULL,
  `Address` text,
  `Postal_code` int(5) DEFAULT NULL,
  `Created_date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`s_Id`, `Name`, `Surname`, `Username`, `Password`, `DOBD`, `DOBM`, `DOBY`, `Email`, `Telephone`, `Address`, `Postal_code`, `Created_date`) VALUES
(42, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(43, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(44, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(45, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(46, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(47, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(48, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(49, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(50, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(51, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(52, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(53, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(54, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(55, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(56, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(57, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(58, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(59, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(60, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(61, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(62, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(63, '', '', 'Junaid', 'Ahmed', 3, 'January', 1991, 'junaid_masood786@yahoo.com', '', '', 54600, 29),
(64, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(65, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(66, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(67, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(68, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(69, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(70, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(71, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(72, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(73, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(74, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(75, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(76, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(77, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(78, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(79, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(80, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(81, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(82, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(83, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(84, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(85, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(86, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(87, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(88, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(89, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(90, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(91, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(92, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(93, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(94, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(95, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(96, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(97, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(98, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(99, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(100, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(101, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(102, '', '', 'akdf', 'hsjkfh', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(103, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(104, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(105, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(106, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(107, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(108, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(109, '', '', '', '', 0, '- Month -', 0, '', '', '', 0, 29),
(110, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(111, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(112, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(113, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(114, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29),
(115, '', '', 'sklfjsfj', 'jskdfjsk', 1, 'January', 1993, 'junaid_masood786@yahoo.com', '', '', 0, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`s_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `s_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
