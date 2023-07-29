-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 02:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `houseno` varchar(22) NOT NULL,
  `streetname` varchar(44) NOT NULL,
  `district` varchar(44) NOT NULL,
  `city` varchar(44) NOT NULL,
  `astate` varchar(22) NOT NULL,
  `country` varchar(22) NOT NULL,
  `pobox` varchar(22) NOT NULL,
  `co` varchar(22) NOT NULL,
  `additional` varchar(99) NOT NULL,
  `aappid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`houseno`, `streetname`, `district`, `city`, `astate`, `country`, `pobox`, `co`, `additional`, `aappid`) VALUES
('B0415', 'bye pass', 'T/wad', 'Gusau', 'Zamfara', 'Nigeria', '5544', 'KL45', 'GUSUAALD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ademail` varchar(88) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `fname` varchar(55) NOT NULL,
  `mname` varchar(55) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` varchar(22) NOT NULL,
  `lga` varchar(44) NOT NULL,
  `occ` varchar(22) NOT NULL,
  `state` varchar(22) NOT NULL,
  `phone1` varchar(22) NOT NULL,
  `phone2` varchar(22) NOT NULL,
  `phone3` varchar(22) NOT NULL,
  `email` varchar(55) NOT NULL,
  `tin` varchar(44) NOT NULL,
  `appid` int(11) NOT NULL,
  `sname` varchar(55) NOT NULL,
  `atitle` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`fname`, `mname`, `gender`, `dob`, `lga`, `occ`, `state`, `phone1`, `phone2`, `phone3`, `email`, `tin`, `appid`, `sname`, `atitle`) VALUES
('Abubakar ', 'Halilu', 'Male', '2000-02-01', 'Gusau', 'Civil Servants', 'Zamfara', '2147483647', '2147483647', '2147483647', 'halilu@gmail.com', '065456465', 1, 'Halilu', '');

-- --------------------------------------------------------

--
-- Table structure for table `ownership`
--

CREATE TABLE `ownership` (
  `oid` int(11) NOT NULL,
  `4a` varchar(55) NOT NULL,
  `4b` varchar(55) NOT NULL,
  `4c` varchar(55) NOT NULL,
  `apid` int(11) NOT NULL,
  `4aname` varchar(55) NOT NULL,
  `4adate` varchar(55) NOT NULL,
  `4bname` varchar(55) NOT NULL,
  `4bdate` varchar(55) NOT NULL,
  `4cname` varchar(55) NOT NULL,
  `4d` varchar(55) NOT NULL,
  `4cdate` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ownership`
--

INSERT INTO `ownership` (`oid`, `4a`, `4b`, `4c`, `apid`, `4aname`, `4adate`, `4bname`, `4bdate`, `4cname`, `4d`, `4cdate`) VALUES
(1, 'statutory C Of O', 'Court Judgement', 'Deed Of Gift', 1, 'Muhammad ', '2002-05-04', 'Ibrahim Muhammad', '2023-08-07', '', 'Deed Of Asseignment', '');

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE `plot` (
  `plotid` int(11) NOT NULL,
  `5a` varchar(55) NOT NULL,
  `landuse` varchar(55) NOT NULL,
  `purpose` varchar(1111) NOT NULL,
  `plga` varchar(22) NOT NULL,
  `pdistrict` varchar(44) NOT NULL,
  `paddress` varchar(77) NOT NULL,
  `5b` varchar(33) NOT NULL,
  `beacon` varchar(55) NOT NULL,
  `psize` varchar(55) NOT NULL,
  `lat` varchar(33) NOT NULL,
  `lon` varchar(33) NOT NULL,
  `poid` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`plotid`, `5a`, `landuse`, `purpose`, `plga`, `pdistrict`, `paddress`, `5b`, `beacon`, `psize`, `lat`, `lon`, `poid`) VALUES
(1, 'Survey Data / COORDINATES', 'Academia', 'constrauctions of scholl', 'Gusau', 'T/Wada', 'Bye pass Gusau', 'Change of LAND / Purpose', 'YES', '50x50', '12.1628', '6.6745', '1');

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

CREATE TABLE `representative` (
  `rep_id` int(11) NOT NULL,
  `rfname` varchar(55) NOT NULL,
  `rmname` varchar(55) NOT NULL,
  `rsname` varchar(55) NOT NULL,
  `rphone1` varchar(22) NOT NULL,
  `rphone2` varchar(22) NOT NULL,
  `rphone3` varchar(22) NOT NULL,
  `remail` varchar(55) NOT NULL,
  `rtin` varchar(22) NOT NULL,
  `raid` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representative`
--

INSERT INTO `representative` (`rep_id`, `rfname`, `rmname`, `rsname`, `rphone1`, `rphone2`, `rphone3`, `remail`, `rtin`, `raid`) VALUES
(1, 'Ahmad', 'GTDF', 'Sani', '+2348107326363', '+2348107326363', '+2340810732636', 'ahmerdy10@gmail.com', '656556', '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_email` varchar(88) NOT NULL,
  `pass` varchar(88) NOT NULL,
  `staffid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_email`, `pass`, `staffid`) VALUES
('ahmad@gmail.com', 'a53a33601b8dd9d06ae9e50f1f30fbe957aba866', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `ownership`
--
ALTER TABLE `ownership`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`plotid`);

--
-- Indexes for table `representative`
--
ALTER TABLE `representative`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ownership`
--
ALTER TABLE `ownership`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plot`
--
ALTER TABLE `plot`
  MODIFY `plotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `representative`
--
ALTER TABLE `representative`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
