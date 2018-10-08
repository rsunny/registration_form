-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2018 at 07:55 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wunder_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `slug` varchar(15) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `houseNumber` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `accountOwner` varchar(20) NOT NULL,
  `iban` varchar(20) NOT NULL,
  `paymentDataId` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`slug`, `firstName`, `lastName`, `telephone`, `address`, `houseNumber`, `city`, `zipCode`, `accountOwner`, `iban`, `paymentDataId`) VALUES
('btjAlRqDwu', 'Prasanth', 'Ravulapalli', '03472875769', 'Via Antonio Mambretti', '29', 'Milano', '20157', 'Prasanth R', '09876543210', '832f9b09b022effd0f535054e5354d691eabcb5d19917de513c99445f26e8cf0e6fa8211bf2c80e61e134d6b2b570c92'),
('dAEKKNMru3', 'Prasanth', 'Ravulapalli', '03472875769', 'Via Antonio Mambretti', '29', 'Milano', '20157', 'Prasanth', '0987654321', '67eb23f1136ce9187f23510002b4096ec71d316b48b42d4a876349d3a58382fed72ccb46a1eba392a8aef891bcd11977');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`slug`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
