-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 04:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `Book_Id` int(11) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Book_Price` int(200) NOT NULL,
  `Book_Quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`Book_Id`, `Book_Name`, `Book_Price`, `Book_Quantity`) VALUES
(1, 'PHP and MYSQL', 35, 29),
(3, 'Android Programming', 30, 30),
(7, 'ASP.NET', 40, 30),
(8, 'JavaScript Programming', 35, 30),
(11, 'DataBase System', 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory_order`
--

CREATE TABLE `bookinventory_order` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Book_name` varchar(50) NOT NULL,
  `Book_Quantity` int(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory_order`
--

INSERT INTO `bookinventory_order` (`id`, `firstname`, `lastname`, `Book_name`, `Book_Quantity`, `payment_method`) VALUES
(9, 'Miki', 'Patel', 'Android Programming', 1, 'VISA'),
(11, 'Miki', 'Patel', 'PHP and MYSQL', 1, 'CASH'),
(12, 'Miki', 'Patel', 'PHP and MYSQL', 2, 'VISA'),
(13, 'Miki', 'Patel', 'PHP and MYSQL', 2, 'VISA'),
(14, 'Miki', 'Patel', 'Android Programming', 1, 'CASH'),
(15, 'Miki', 'Patel', 'Android Programming', 2, 'VISA'),
(16, 'Miki', 'Patel', 'Android Programming', 1, 'Debit'),
(17, 'Miki', 'Patel', 'PHP and MYSQL', 1, 'Debit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`Book_Id`);

--
-- Indexes for table `bookinventory_order`
--
ALTER TABLE `bookinventory_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `Book_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bookinventory_order`
--
ALTER TABLE `bookinventory_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
