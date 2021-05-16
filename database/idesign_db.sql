-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idesign_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tb`
--

CREATE TABLE `contactus_tb` (
  `Srno` int(10) NOT NULL,
  `Name` varchar(80) COLLATE utf8_bin NOT NULL,
  `Email` varchar(80) COLLATE utf8_bin NOT NULL,
  `Message` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contactus_tb`
--

INSERT INTO `contactus_tb` (`Srno`, `Name`, `Email`, `Message`) VALUES
(1, 'Anshika Gupta', 'anshikagupta2000@gmail.com', 'Hi I am a New Customer. Can i get details regarding certain furniture?'),
(2, 'Rohan Avasthi', 'rohanavasthi99@gmail.com', 'Hi! I really like your showroom design. Planning to visit soon.'),
(3, 'Kristine Paul', 'kristinepaul@gmail.com', 'This is a message.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus_tb`
--
ALTER TABLE `contactus_tb`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus_tb`
--
ALTER TABLE `contactus_tb`
  MODIFY `Srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
