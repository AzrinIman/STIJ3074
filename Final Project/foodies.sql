-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 05:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `sellername` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `whatsappno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `foodname`, `sellername`, `price`, `descriptions`, `whatsappno`) VALUES
(17, 'Roti Canai', 'Cafe Grant', 'RM1', 'Delivery fee will be charge', '0191456520'),
(18, 'Ayam Cheese', 'Kak Ta cafe', 'Rm10', '8pcs/Box\r\nDelivery Will be charge\r\n', '0187894621');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'azrin', '$2y$10$VPDBeHZEsQkd7SCx2vQzz.SpZmp/m3HWIXoptCafmaJias2ali2zG', '2021-01-17 01:57:41'),
(2, 'zayn', '$2y$10$BWsKnKcbp.fQ6r4.9gKxnuy4tSWVLBNqyoMVprpZNUDuLEKQtpYP6', '2021-01-17 02:16:04'),
(3, 'zaim', '$2y$10$8iWnNUbixK.K.O78YMu2uemBnDbKBLUezp9d51RKqvwRilEy0H5eC', '2021-01-17 03:22:14'),
(4, 'ali', '$2y$10$j6EqyV3OpedmdBrDx52YpeH/672QVJYiyFCYhrwSzWsvJg4x2CGxG', '2021-01-17 08:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
