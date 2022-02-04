-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 08:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid_test`
--

CREATE TABLE `covid_test` (
  `test_no` int(11) NOT NULL,
  `test_type` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_test`
--

INSERT INTO `covid_test` (`test_no`, `test_type`, `pid`, `hid`) VALUES
(112, 'pcr', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `reg_no`, `qualification`) VALUES
(1, 'Jone', '12341', 'MBBS bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `location`) VALUES
(10, 'Apollo', '8th mile, bangalore'),
(11, 'Colombia', 'Mangalore'),
(12, 'Saptgari ', 'janapriya apartment');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `phno` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `bloodtype` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `phno`, `age`, `symptoms`, `bloodtype`, `email`, `address`) VALUES
(1, 'd', 1234567890, 0, 'thdrg', 'rt', 'admin@admin.com', 'ews'),
(2, 'aas', 4445556, 54, 'trghd', 'e', 'Apple@gmail.com', 'dfgb'),
(3, 'pdf', 2147483647, 22, 'cough', 'b+', 'admin@gmail.com', 'Bangalore'),
(7, 'Apple', 2147483647, 44, 'none', 'b+', 'admin@gmail.com', 'Bangalore'),
(12, 'Jonwdasdd', 2147483647, 444, 'none', 'b+', 'admin@gmail.com', 'Bangalore'),
(16, 'Hiten', 1547975343, 20, 'cough ', 'ab+', 'hiten@hiten.com', 'Bangalore'),
(17, 'kash', 2147483647, 28, 'cough', 'AB-', 'afhaivhj@dvsdkjnb.sdk', 'dfhnklj;f zbvlisznbfh nzjxkcv hjksd njvcsd kj vnzx nkvcsdnd sjk;f d kvasd');

--
-- Triggers `patient`
--
DELIMITER $$
CREATE TRIGGER `total_patient` AFTER INSERT ON `patient` FOR EACH ROW SET @count = 'SELECT COUNT(pid) AS totalp FROM patient'
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patient_backup`
--

CREATE TABLE `patient_backup` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `phno` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `bloodtype` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `pid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`pid`, `hid`, `status`) VALUES
(2, 12, 'positive');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `sno` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sno`, `name`, `email`, `message`) VALUES
(1, 'Admin', 'admin@admin.com', 'Hi. this is just a test message \r\n'),
(2, 'test', 'dgddgf@dfgds.com', 'This is message from webpage'),
(3, 'test', 'dgddgf@dfgds.com', 'This is message from webpage');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `passwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin'),
(2, 'apple123', 'apple123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid_test`
--
ALTER TABLE `covid_test`
  ADD PRIMARY KEY (`test_no`),
  ADD KEY `pid` (`pid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patient_backup`
--
ALTER TABLE `patient_backup`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid_test`
--
ALTER TABLE `covid_test`
  MODIFY `test_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `covid_test`
--
ALTER TABLE `covid_test`
  ADD CONSTRAINT `covid_test_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  ADD CONSTRAINT `covid_test_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hospital` (`hid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
