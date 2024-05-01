-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_data`
--

CREATE TABLE `inventory_data` (
  `serial_no` int(11) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `Inventory_Description` varchar(500) DEFAULT NULL,
  `labrotary` varchar(50) DEFAULT NULL,
  `Purchase_Price` int(11) DEFAULT NULL,
  `dsr_number` varchar(70) DEFAULT NULL,
  `Assistant_Confirmed` varchar(100) DEFAULT NULL,
  `image_url` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_data`
--


-- --------------------------------------------------------

--
-- Table structure for table `manage_invent`
--

CREATE TABLE `manage_invent` (
  `serial_no` int(11) NOT NULL,
  `Inventory_Description` varchar(100) NOT NULL,
  `Purchase_Price` varchar(100) NOT NULL,
  `Move_To_Laboratory` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_invent`
--

INSERT INTO `manage_invent` (`serial_no`, `Inventory_Description`, `Purchase_Price`, `Move_To_Laboratory`, `Status`) VALUES
(564, 'Table', '5000', 'MB-407-A', 'Pending'),
(6578, 'Table', '8500', 'MB-407-B', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `scanned_inventory`
--

CREATE TABLE `scanned_inventory` (
  `labrotary` varchar(50) DEFAULT NULL,
  `Inventory_Description` varchar(500) DEFAULT NULL,
  `Qr_image` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Omkar Kishor Patil', 'Patilomkar2820@gmail.com', 'a512f1621f0c592925bc7afb2801d9be');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_invent`
--
ALTER TABLE `manage_invent`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
