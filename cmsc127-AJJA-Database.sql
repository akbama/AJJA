-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:27 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsc127`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announce_id` int(4) NOT NULL,
  `time` time(5) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `time`, `date`, `subject`, `content`) VALUES
(1001, '09:00:00.00000', '2022-05-24', 'Bills', 'Rent due on May 30, 2022'),
(1002, '10:30:00.00000', '2022-05-24', 'Events', 'Reminders on our quarterly meeting on June 6, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `log-in`
--

CREATE TABLE `log-in` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log-in`
--

INSERT INTO `log-in` (`username`, `password`, `email`) VALUES
('admin', 'pass123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rental listing`
--

CREATE TABLE `rental listing` (
  `room_id` int(5) NOT NULL,
  `room_name` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `room_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental listing`
--

INSERT INTO `rental listing` (`room_id`, `room_name`, `description`, `room_rate`) VALUES
(1, 'G1 Room', 'Fully furnished with air-conditioning and Wi-Fi', 9000),
(2, 'G2E Room', 'Partially furnished with air-conditioning', 6000),
(3, 'G3 Room', 'Fully furnished without air-conditioning, with Wi-Fi', 8000),
(4, 'F2 Room', 'Partially furnished without air-conditioning, with Wi-Fi', 5000),
(5, 'F1 Room', 'Not furnished with air-conditioning and Wi-Fi', 4000),
(6, 'Y3B Room', 'Not furnished without air-conditioning, with Wi-Fi', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rental listing`
--
ALTER TABLE `rental listing`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `log-in`
--
ALTER TABLE `log-in`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
