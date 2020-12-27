-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_rent_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `ID` int(11) NOT NULL,
  `Location` varchar(40) NOT NULL,
  `Room_Type` varchar(40) NOT NULL,
  `Guest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`ID`, `Location`, `Room_Type`, `Guest`) VALUES
(21, 'Kurigram', 'double', 2),
(25, 'Rangpur', 'double', 2),
(26, 'Badda, Link Road, Gulsha 1', 'Shared Room', 4),
(27, 'Borishal ', 'Entire Place ', 3),
(29, 'Khulna ', 'Entire Place ', 2),
(30, 'Mirpur-10, Dhaka', 'Shared Room', 5),
(31, 'Rajshahi ', 'Private Room ', 1),
(33, 'khulna', 'single', 1);

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `Location` varchar(40) NOT NULL,
  `Check_In` date NOT NULL,
  `Check_Out` date NOT NULL,
  `Adult` int(11) NOT NULL,
  `Children` int(11) NOT NULL,
  `Infants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`Location`, `Check_In`, `Check_Out`, `Adult`, `Children`, `Infants`) VALUES
('Borishal ', '2020-01-07', '2020-02-01', 5, 2, 1),
('Dhaka', '2020-01-05', '2020-01-12', 2, 0, 1),
('Gulshan ', '2020-05-06', '2020-05-09', 2, 0, 1),
('Khulna ', '2020-02-01', '2020-02-17', 3, 1, 0),
('Rajshahi ', '2020-03-05', '2020-03-06', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Serial_Number` int(10) NOT NULL,
  `Host_Id` varchar(20) NOT NULL,
  `Renter_Id` varchar(20) NOT NULL,
  `Star` varchar(15) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Serial_Number`, `Host_Id`, `Renter_Id`, `Star`, `Comment`) VALUES
(0, 'H_S9', 'R_Q7', '**', ''),
(1, 'H_A1', 'R_M5', '***', 'Awesome place.'),
(2, 'H_S9', 'R_Q6', '**', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
