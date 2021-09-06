-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 07:28 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `store_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `store_id`) VALUES
(1, 'Shreyans', 'Shreyans', 1),
(2, 'Saurabh', 'Saurabh', 2),
(3, 'Gaurav', 'Gaurav', 3),
(4, 'Dhruv', 'Dhruv', 4);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `store_id` int(5) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `n1` int(11) DEFAULT NULL,
  `n2` int(11) DEFAULT NULL,
  `n3` int(11) DEFAULT NULL,
  `n4` int(11) DEFAULT NULL,
  `n5` int(11) DEFAULT NULL,
  `msg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `store_id`, `name`, `phone`, `n1`, `n2`, `n3`, `n4`, `n5`, `msg`) VALUES
(1, 1, 'Shreyans Jain', '9990538444', 5, 5, 5, 5, 5, 'Excellent'),
(2, 1, 'Saurabh Jain', '9910022497', 5, 5, 5, 5, 5, ' Brilliant'),
(3, 3, 'Kaku Jain', '1245369870', 1, 2, 3, 4, 5, ' zsexdrcftvgybhun'),
(4, 1, 'Gaurav Jain', '9818122497', 5, 5, 5, 5, 5, ' Brilliant Coffee'),
(5, 1, 'Adam Burns', '9854123670', 5, 5, 5, 5, 5, ' That was a hell of a coffee'),
(6, 3, 'Don', '7845236910', 4, 4, 4, 4, 4, ' Brilliant Investment Bankers'),
(7, 4, '', '', 1, 2, 3, 4, 5, ' '),
(10, 1, 'Vanessa', '7845962310', 1, 2, 3, 4, 5, ' Excellent'),
(11, 1, 'John', '7845236910', 1, 2, 3, 4, 5, ' Brilliant'),
(16, 1, '', '', 1, 2, 3, 4, 5, ' '),
(17, 1, '', '', 1, 2, 3, 4, 5, ' '),
(18, 1, '', '', 1, 2, 3, 4, 5, ' '),
(19, 1, '', '', 1, 2, 3, 4, 5, ' '),
(20, 1, '', '', 1, 2, 3, 4, 5, ' '),
(21, 1, '', '', 0, 0, 0, 0, 0, ' '),
(22, 1, '', '', 0, 0, 0, 0, 0, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `si_prod`
--

CREATE TABLE `si_prod` (
  `ID` int(10) NOT NULL,
  `FK_SIID` int(10) NOT NULL,
  `FK_ProdID` int(10) NOT NULL,
  `InvQty` int(10) NOT NULL,
  `UnitPrice` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `TaxSGST` float(10,2) NOT NULL,
  `TaxCGST` float(10,2) NOT NULL,
  `TaxIGST` float(10,2) NOT NULL,
  `TaxPar` float NOT NULL,
  `SMID` varchar(10) NOT NULL,
  `CustID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `si_prod`
--

INSERT INTO `si_prod` (`ID`, `FK_SIID`, `FK_ProdID`, `InvQty`, `UnitPrice`, `Discount`, `Amount`, `TaxSGST`, `TaxCGST`, `TaxIGST`, `TaxPar`, `SMID`, `CustID`) VALUES
(1, 1, 1, 1, 800, 80, 720, 17.14, 17.14, 0.00, 5, '', '1'),
(2, 2, 1, 1, 800, 80, 720, 17.14, 17.14, 0.00, 5, '', '2'),
(3, 5, 2, 1, 800, 120, 680, 16.19, 16.19, 0.00, 5, '', '3'),
(4, 6, 3, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '4'),
(5, 3, 4, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '5'),
(6, 4, 5, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '6'),
(7, 6, 6, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '7'),
(8, 3, 7, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '8'),
(9, 4, 9, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '9'),
(10, 7, 10, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '10'),
(11, 6, 17, 1, 800, 0, 800, 19.05, 19.05, 0.00, 5, '', '11'),
(12, 5, 51, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '12'),
(13, 6, 52, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '13'),
(14, 4, 54, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '14'),
(15, 6, 56, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '15'),
(16, 4, 62, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '16'),
(17, 5, 71, 1, 1500, 0, 1500, 114.41, 114.41, 0.00, 18, '', '17'),
(18, 6, 72, 1, 1500, 0, 1500, 114.41, 114.41, 0.00, 18, '', '18'),
(19, 7, 73, 1, 1500, 0, 1500, 114.41, 114.41, 0.00, 18, '', '19'),
(20, 6, 79, 1, 1500, 0, 1500, 114.41, 114.41, 0.00, 18, '', '20'),
(21, 4, 91, 1, 1500, 0, 1500, 114.41, 114.41, 0.00, 18, '', '21'),
(22, 5, 96, 1, 1200, 0, 1200, 64.29, 64.29, 0.00, 18, '', '22'),
(23, 6, 97, 1, 1200, 0, 1200, 64.29, 64.29, 0.00, 18, '', '23'),
(24, 7, 98, 1, 1200, 0, 1200, 64.29, 64.29, 0.00, 18, '', '24'),
(25, 6, 99, 1, 1200, 0, 1200, 64.29, 64.29, 0.00, 18, '', '25'),
(26, 7, 111, 1, 3700, 0, 3700, 198.21, 198.21, 0.00, 18, '', '26');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(5) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `store_add` varchar(50) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_phone` varchar(10) NOT NULL,
  `store_phone` varchar(12) NOT NULL,
  `store_email` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_add`, `owner_name`, `owner_phone`, `store_phone`, `store_email`, `date_created`) VALUES
(1, 'Cafe Double Shot Espresso', 'Faridabad', 'Shreyans Jain', '9990538444', '01291245789', 'shreyansjain14107@gmail.com', '2019-06-05 07:05:08'),
(2, 'The Garment House', '', 'Saurabh Jain', '1234567890', '01297894562', '', '2019-06-05 07:05:08'),
(3, 'The Investment House', '', 'Gaurav Jain', '1245367892', '01297846321', '', '2019-06-05 07:05:08'),
(4, 'The Dhaba', '', 'Dhruv Jain', '7845412163', '01294512368', '', '2019-06-05 07:05:08'),
(5, 'Cafe Espresso', 'Faridabad', 'Shreyans Jain', '9990538444', '9990538444', 'sj@gmail.com', '2019-06-05 07:05:08'),
(6, 'Cafe Mocha', 'Faridabad', 'Saurabh Jain', '9874532154', '01291452368', 'saurabhj@gmail.com', '2019-06-05 07:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `store_coupons`
--

CREATE TABLE `store_coupons` (
  `id` int(5) NOT NULL,
  `store_id` int(5) NOT NULL,
  `cpn1` longtext NOT NULL,
  `cpn1_cd` longtext NOT NULL,
  `cpn2` longtext NOT NULL,
  `cpn2_cd` longtext NOT NULL,
  `cpn3` longtext NOT NULL,
  `cpn3_cd` longtext NOT NULL,
  `cpn4` longtext NOT NULL,
  `cpn4_cd` longtext NOT NULL,
  `cpn5` longtext NOT NULL,
  `cpn5_cd` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_coupons`
--

INSERT INTO `store_coupons` (`id`, `store_id`, `cpn1`, `cpn1_cd`, `cpn2`, `cpn2_cd`, `cpn3`, `cpn3_cd`, `cpn4`, `cpn4_cd`, `cpn5`, `cpn5_cd`, `date_created`, `active`) VALUES
(1, 1, 'Flat 10% Off', 'FLAT10OFF', 'Flat 20% Off', 'FLAT20OFF', 'Flat 30% Off', 'FLAT30OFF', 'Flat 40% Off', 'FLAT40OFF', 'Flat 50% Off', 'FLAT50OFF', '2019-06-09 08:46:11', 0),
(2, 2, 'Flat 10% Off', 'FLAT10OFF', 'Flat 20% Off', 'FLAT20OFF', 'Flat 30% Off', 'FLAT30OFF', 'Flat 40% Off', 'FLAT40OFF', 'Flat 50% Off', 'FLAT50OFF', '2019-06-09 08:46:11', 0),
(3, 3, 'Flat 10% Off', 'FLAT10OFF', 'Flat 20% Off', 'FLAT20OFF', 'Flat 30% Off', 'FLAT30OFF', 'Flat 40% Off', 'FLAT40OFF', 'Flat 50% Off', 'FLAT50OFF', '2019-06-09 08:47:54', 0),
(4, 4, 'Flat 10% Off', 'FLAT10OFF', 'Flat 20% Off', 'FLAT20OFF', 'Flat 30% Off', 'FLAT30OFF', 'Flat 40% Off', 'FLAT40OFF', 'Flat 60% Off', 'FLAT60OFF', '2019-06-09 08:47:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `store_questions`
--

CREATE TABLE `store_questions` (
  `id` int(5) NOT NULL,
  `store_id` int(5) NOT NULL,
  `q1` longtext NOT NULL,
  `q2` longtext NOT NULL,
  `q3` longtext NOT NULL,
  `q4` longtext NOT NULL,
  `q5` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_questions`
--

INSERT INTO `store_questions` (`id`, `store_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `date_created`, `active`) VALUES
(1, 1, 'How would you rate the taste of your meal?', 'How was the temperature of the food served?', 'How was the service time of the waiters?', 'How was the overall hygene of the restaurant?', 'Please rate your overall visit with us?', '2019-06-09 08:51:44', NULL),
(2, 2, 'How would you rate the taste of your meal?', 'How was the temperature of the food served?', 'How was the service time of the waiters?', 'How was the overall hygene of the restaurant?', 'Please rate your overall visit with us?', '2019-06-09 08:52:20', NULL),
(3, 3, 'How was the taste of your meal?', 'How was the temperature of the food served?', 'How was the service time of the waiters?', 'How was the overall hygene of the restaurant?', 'Please rate your overall visit with us?', '2019-06-09 08:52:20', NULL),
(4, 4, 'How would you rate the taste of your mea Ravil?', 'AbcHow was the temperature of the food served?', 'How was the service time of the waiters?', 'How was the overall hygene of the restaurant?', 'Please rate your overall visit with us?', '2019-06-09 08:52:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `store_id` (`store_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_prod`
--
ALTER TABLE `si_prod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `store_coupons`
--
ALTER TABLE `store_coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `store_id` (`store_id`);

--
-- Indexes for table `store_questions`
--
ALTER TABLE `store_questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `store_id` (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store_coupons`
--
ALTER TABLE `store_coupons`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `store_questions`
--
ALTER TABLE `store_questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
