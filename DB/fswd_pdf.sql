-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2023 at 02:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd_pdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_birth` datetime DEFAULT NULL,
  `place_of_birth` varchar(100) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date_birth`, `place_of_birth`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ando Zamhariro Royan', '2002-04-09 00:00:00', 'Jember', 'Jl. Melon V/F-3, Jember, Jawa Timur', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(2, 'Jane Smith', '1985-08-20 14:30:00', 'Los Angeles', '456 Elm St, Los Angeles, Bali', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(3, 'Alice Johnson', '1995-03-10 10:15:00', 'Chicago', '789 Oak St, Chicago, Papua Barat', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(4, 'Sarah Johnson', '1993-07-12 13:45:00', 'Miami', '321 Ocean Ave, Miami, Aceh', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(5, 'David Wilson', '1987-09-03 10:30:00', 'Seattle', '555 Pine St, Seattle, Sumatera Utara', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(6, 'Jennifer Lee', '1991-11-22 16:15:00', 'Austin', '789 Elm St, Austin, Riau', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(7, 'Robert Smith', '1983-04-05 12:00:00', 'Boston', '456 Oak St, Boston, Sulawesi Tengah', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(8, 'Emily Davis', '1997-08-17 09:25:00', 'Denver', '789 Broadway St, Denver, Kalimantan Selatan', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(9, 'William Brown', '1989-01-10 11:50:00', 'Phoenix', '123 Pine St, Phoenix, Papua', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(10, 'Olivia Martin', '1996-06-28 14:10:00', 'Philadelphia', '987 Elm St, Philadelphia, Sumatera Barat', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(11, 'James Harris', '1981-12-03 08:05:00', 'San Diego', '321 Broadway St, San Diego, Kalimantan Utara', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(12, 'Sophia Taylor', '1990-03-15 15:30:00', 'San Antonio', '555 Oak St, San Antonio, Sulawesi Selatan', '2023-09-27 13:18:59', '2023-09-27 13:18:59'),
(13, 'Liam Jackson', '1988-05-08 07:20:00', 'Dallas', '456 Elm St, Dallas, Bali', '2023-09-27 13:18:59', '2023-09-27 13:18:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
