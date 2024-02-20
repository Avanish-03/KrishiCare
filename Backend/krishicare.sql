-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 07:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`contact_id`, `email`, `message`) VALUES
(1, 'avanishyadav744@gmail.com', 'hello gfbf'),
(2, 'avanishyadav744@gmail.com', 'hello'),
(3, 'avanishyadav744@gmail.com', 'i have a query'),
(4, 'avanishyadav744@gmail.com', 'i have again a query');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_detail`
--

CREATE TABLE `farmer_detail` (
  `farmer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_detail`
--

INSERT INTO `farmer_detail` (`farmer_id`, `first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state`, `password`) VALUES
(1, 'Pawar', 'Abhimanyu', 'Ramchandra', 'abhi22@gmail.com', '2121212121', '99-bhakti nagar', 'surat', 'gujarat', '12345678'),
(3, 'yadav', 'krishna ', 'rajkumar', 'kris@123gmail.com', '1234567891', '40 - gayatri nagar', 'surat', 'gujarat', '1234'),
(5, 'yadav', 'jyoti', 'rajkumar', 'kris@123gmail.com', '9876543215', '40 - gayatri nagar', 'surat', 'gujarat', '123'),
(6, 'yadav', 'krishna ', 'rajkumar', 'avanishyadav744@gmail.com', '4569871235', '40 - gayatri nagar', 'surat', 'gujarat', '12345678'),
(7, 'yadav', 'krishna ', 'rajkumar', 'avanishyadav74@gmail.com', '4569871235', '40 - gayatri nagar', 'surat', 'gujarat', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_detail`
--

CREATE TABLE `laboratory_detail` (
  `lab_id` int(11) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `lab_add` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ownership` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboratory_detail`
--

INSERT INTO `laboratory_detail` (`lab_id`, `lab_name`, `email`, `contact`, `lab_add`, `city`, `state`, `password`, `ownership`) VALUES
(2, 'jay ambe ', 'lab2@gmail.com', 1234567891, '21- shukhi nagar', 'surat', 'gujarat', '1234', 'om sai ram'),
(3, 'temp3', 'avanishyadav744@gmail.com', 2147483647, 'h', 'h', 'h', '123456789', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `report_detail`
--

CREATE TABLE `report_detail` (
  `report_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `sample_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `report_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_detail`
--

CREATE TABLE `request_detail` (
  `request_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `request_date` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sample_detail`
--

CREATE TABLE `sample_detail` (
  `sample_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `collected_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `farmer_detail`
--
ALTER TABLE `farmer_detail`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `laboratory_detail`
--
ALTER TABLE `laboratory_detail`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `report_detail`
--
ALTER TABLE `report_detail`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `request_detail`
--
ALTER TABLE `request_detail`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `sample_detail`
--
ALTER TABLE `sample_detail`
  ADD PRIMARY KEY (`sample_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_detail`
--
ALTER TABLE `contact_detail`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmer_detail`
--
ALTER TABLE `farmer_detail`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laboratory_detail`
--
ALTER TABLE `laboratory_detail`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report_detail`
--
ALTER TABLE `report_detail`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_detail`
--
ALTER TABLE `request_detail`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample_detail`
--
ALTER TABLE `sample_detail`
  MODIFY `sample_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
