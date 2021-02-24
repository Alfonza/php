-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 04:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `busid` int(11) NOT NULL,
  `seatno` int(11) NOT NULL,
  `ticketno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ticketprice` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bookingdate` date NOT NULL,
  `canceldate` date NOT NULL,
  `journeydate` date NOT NULL,
  `foodid` int(11) NOT NULL,
  `seatposition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`busid`, `seatno`, `ticketno`, `userid`, `ticketprice`, `status`, `bookingdate`, `canceldate`, `journeydate`, `foodid`, `seatposition`) VALUES
(1000, 3, 1, 4, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '27,28'),
(1002, 2, 2, 5, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '11,10'),
(1003, 2, 3, 4, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '27,28'),
(1004, 2, 4, 13, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '27,28'),
(1005, 2, 5, 14, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '27,28'),
(1001, 2, 6, 4, 500, 'booked', '2019-07-31', '0000-00-00', '2019-08-01', 1, '10,20,30'),
(1000, 3, 7, 4, 1500, 'booked', '2019-07-30', '0000-00-00', '2019-08-01', 2, '1,2,25');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busid` int(11) NOT NULL,
  `busname` varchar(20) NOT NULL,
  `seat no` int(11) NOT NULL,
  `available service` varchar(20) NOT NULL,
  `dtime` time NOT NULL,
  `atime` time NOT NULL,
  `price` int(11) NOT NULL,
  `routeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `busname`, `seat no`, `available service`, `dtime`, `atime`, `price`, `routeid`) VALUES
(1000, 'littleflower', 35, 'WBF', '04:00:00', '05:30:00', 500, 101),
(1001, 'reshma', 40, 'NBN', '16:30:00', '13:00:00', 1000, 101),
(1002, 'brothers', 35, 'WNF', '16:40:00', '18:00:00', 800, 103),
(1003, '5stars', 35, 'WNF', '09:30:00', '12:00:00', 900, 104),
(1005, 'RAJA', 40, 'WNF', '11:00:00', '11:30:00', 800, 104);

-- --------------------------------------------------------

--
-- Table structure for table `busroute`
--

CREATE TABLE `busroute` (
  `routeid` int(11) NOT NULL,
  `depature` varchar(20) NOT NULL,
  `arival` varchar(20) NOT NULL,
  `details` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busroute`
--

INSERT INTO `busroute` (`routeid`, `depature`, `arival`, `details`) VALUES
(101, 'manglore', 'banglore', 'via mysore'),
(102, 'manglore', 'kasaragod', 'uppala'),
(103, 'kochi', 'kozhikod', 'shornur'),
(104, 'cherupuzha', 'aluva', 'kozhikod'),
(105, 'goa', 'uduppi', 'kumta'),
(106, 'banglore', 'kochi', 'kozhikod'),
(107, 'abv', 'kj', 'kjhl');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `fname`, `fprice`) VALUES
(1, 'biriyani', 200),
(2, 'vada', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `atype` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `atype`, `address`, `phoneno`, `password`) VALUES
(4, 'nancy', 'alfonsa@gmail.com', 'admin', 'baskchs', 425487624, '1'),
(5, 'ash', 'mee@abc.com', 'user', 'asd', 1, '1212'),
(12, 'sarath', 'smileyboy@gmail.om', 'admin', 'kozhikod', 100, '101'),
(13, 'rimold', 'rimold@gmail.com', 'user', 'aluva', 2147483647, '12');

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE `waiting` (
  `userid` int(11) NOT NULL,
  `busid` int(11) NOT NULL,
  `journeydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiting`
--

INSERT INTO `waiting` (`userid`, `busid`, `journeydate`) VALUES
(1, 1000, '2019-09-19'),
(1, 1000, '0000-00-00'),
(1, 1000, '0000-00-00'),
(1, 1000, '2019-09-19'),
(1, 1000, '2019-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ticketno`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `busroute`
--
ALTER TABLE `busroute`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
