-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `lang_rate`
--

CREATE TABLE `lang_rate` (
  `username` varchar(255) NOT NULL,
  `HTML` int(1) DEFAULT 0,
  `CSS` int(1) DEFAULT 0,
  `JavaScript` int(1) DEFAULT 0,
  `Bash` int(1) DEFAULT 0,
  `Shell` int(1) DEFAULT 0,
  `PowerShell` int(1) DEFAULT 0,
  `C` int(1) DEFAULT 0,
  `C++` int(1) DEFAULT 0,
  `Java` int(1) DEFAULT 0,
  `Objective-C` int(1) DEFAULT 0,
  `Swift` int(1) DEFAULT 0,
  `Assembly` int(1) DEFAULT 0,
  `C#` int(1) DEFAULT 0,
  `Clojure` int(1) DEFAULT 0,
  `Dart` int(1) DEFAULT 0,
  `Elixir` int(1) DEFAULT 0,
  `Erlang` int(1) DEFAULT 0,
  `F#` int(1) DEFAULT 0,
  `Go` int(1) DEFAULT 0,
  `Kotlin` int(1) DEFAULT 0,
  `PHP` int(1) DEFAULT 0,
  `Python` int(1) DEFAULT 0,
  `R` int(1) DEFAULT 0,
  `Ruby` int(1) DEFAULT 0,
  `Rust` int(1) DEFAULT 0,
  `Scala` int(1) DEFAULT 0,
  `SQLang` int(1) DEFAULT 0,
  `TypeScript` int(1) DEFAULT 0,
  `VBA` int(1) DEFAULT 0,
  `WebAssembly` int(1) DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang_rate`
--

INSERT INTO `lang_rate` (`username`, `HTML`, `CSS`, `JavaScript`, `Bash`, `Shell`, `PowerShell`, `C`, `C++`, `Java`, `Objective-C`, `Swift`, `Assembly`, `C#`, `Clojure`, `Dart`, `Elixir`, `Erlang`, `F#`, `Go`, `Kotlin`, `PHP`, `Python`, `R`, `Ruby`, `Rust`, `Scala`, `SQLang`, `TypeScript`, `VBA`, `WebAssembly`, `time`) VALUES
('Radhika', 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2020-02-27 10:48:42'),
('Shreyans', 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, '2020-02-27 08:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `time`) VALUES
('Radhika', 'Nangia', '2020-02-27 08:19:39'),
('Shreyans', 'Jain', '2020-02-27 08:19:39');

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
  `msg` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `store_id`, `name`, `phone`, `n1`, `n2`, `n3`, `n4`, `n5`, `msg`) VALUES
(1, 1, 'Shreyans Jain', '9990538444', 5, 5, 5, 5, 5, 'Excellent'),
(2, 1, 'Saurabh Jain', '9910022497', 5, 5, 5, 5, 5, ' Brilliant'),
(3, 3, 'Kaku Jain', '1245369870', 1, 2, 3, 4, 5, ' zsexdrcftvgybhun'),
(4, 1, 'Gaurav Jain', '9818122497', 5, 5, 5, 5, 5, ' Brilliant Coffee');

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
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_add`, `owner_name`, `owner_phone`, `store_phone`, `store_email`, `date_created`) VALUES
(1, 'Cafe Double Shot Espresso', 'Faridabad', 'Shreyans Jain', '9990538444', '01291245789', 'shreyansjain1407@gmail.com', '2019-06-05 07:05:08'),
(2, 'XYZ', 'XYZ', 'Radhika Nangia', '9999696816', '01141651144', 'radhikanangia@hotmail.com', '2019-06-05 07:05:08'),
(3, 'The Investment House', '', 'Gaurav Jain', '1245367892', '01297846321', '', '2019-06-05 07:05:08'),
(4, 'The Dhaba', '', 'Dhruv Jain', '7845412163', '01294512368', '', '2019-06-05 07:05:08'),
(5, 'Cafe Espresso', 'Faridabad', 'Shreyans Jain', '9990538444', '9990538444', 'sj@gmail.com', '2019-06-05 07:05:08'),
(6, 'Cafe Mocha', 'Faridabad', 'Saurabh Jain', '9874532154', '01291452368', 'saurabhj@gmail.com', '2019-06-05 07:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `perc_x` float NOT NULL,
  `perc_xii` float NOT NULL,
  `spl_ug` varchar(30) NOT NULL,
  `perc_ug` float NOT NULL,
  `spl_pg` varchar(30) NOT NULL,
  `perc_pg` float NOT NULL,
  `hobs` varchar(50) NOT NULL,
  `intrst` varchar(50) NOT NULL,
  `pref_lang` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `age`, `perc_x`, `perc_xii`, `spl_ug`, `perc_ug`, `spl_pg`, `perc_pg`, `hobs`, `intrst`, `pref_lang`, `time`) VALUES
('Radhika', 'Radhika Nangia', 'radhikanangia@hotmail.com', 22, 100, 100, 'cse', 10, 'na', 0, 'la la la ', 'la la', 'la', '2020-02-27 08:20:12'),
('Shreyans', 'Shreyans Jain', 'shreyansjain1@hotmail.com', 21, 73, 81, 'CSE', 68, 'NA', 0, 'Coffee', 'More Coffee', 'Java', '2020-02-27 08:20:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lang_rate`
--
ALTER TABLE `lang_rate`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
