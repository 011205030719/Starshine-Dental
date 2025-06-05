-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 11:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starshine`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtl_appointment`
--

CREATE TABLE `dtl_appointment` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `IC` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtl_appointment`
--

INSERT INTO `dtl_appointment` (`id`, `username`, `IC`, `gender`, `phoneNo`, `email`, `services`, `appointmentDate`, `appointmentTime`) VALUES
(1, 'Lim Chee Ying', '021201100538', 'female', '01136655598', 'admin@gmail.com', 'Rountine Check-Ups,Teeth Removal', '2023-03-31', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `dtl_services`
--

CREATE TABLE `dtl_services` (
  `servicesId` int(11) NOT NULL,
  `servicesName` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtl_services`
--

INSERT INTO `dtl_services` (`servicesId`, `servicesName`, `price`) VALUES
(1, 'Rountine Check-Ups', 90.00),
(2, 'Cleaning Teeth', 110.95),
(3, 'Whitening Teeth', 150.00),
(4, 'Veneers', 210.56),
(5, 'Braces', 4700.99),
(6, 'Teeth Removal', 130.00);

-- --------------------------------------------------------

--
-- Table structure for table `dtl_user`
--

CREATE TABLE `dtl_user` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtl_user`
--

INSERT INTO `dtl_user` (`email`, `username`, `password`) VALUES
('admin@gmail.com', 'cheeying', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtl_appointment`
--
ALTER TABLE `dtl_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `dtl_services`
--
ALTER TABLE `dtl_services`
  ADD PRIMARY KEY (`servicesId`);

--
-- Indexes for table `dtl_user`
--
ALTER TABLE `dtl_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtl_appointment`
--
ALTER TABLE `dtl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dtl_services`
--
ALTER TABLE `dtl_services`
  MODIFY `servicesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dtl_appointment`
--
ALTER TABLE `dtl_appointment`
  ADD CONSTRAINT `dtl_appointment_ibfk_1` FOREIGN KEY (`email`) REFERENCES `dtl_user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
