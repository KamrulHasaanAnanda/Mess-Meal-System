-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 07:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtec`
--

-- --------------------------------------------------------

--
-- Table structure for table `mealtable`
--

CREATE TABLE `mealtable` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Day` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mealtable`
--

INSERT INTO `mealtable` (`id`, `username`, `insert_time`, `Day`, `number`, `money`) VALUES
(46, 'borna', '2020-05-15 20:13:26', 'day1', 0, 0),
(47, 'borna', '2020-05-15 20:24:58', 'day2', 0, 0),
(48, 'borna', '2020-05-15 20:27:03', 'day3', 0, 0),
(56, 'e', '2020-05-16 16:28:31', 'day1', 2, 40),
(57, 'e', '2020-05-16 16:32:50', 'day2', 2, 50),
(58, 'Hassan', '2020-05-18 15:46:05', 'day1', 2, 40),
(59, 'Hassan', '2020-05-18 15:46:09', 'day2', 2, 50),
(60, 'Hassan', '2020-05-18 16:03:27', 'day4', 2, 40),
(61, 'Hassan', '2020-05-18 16:03:43', 'day5', 2, 55),
(62, 'Hassan', '2020-05-18 16:03:51', 'day3', 2, 40),
(63, 'Hassan', '2020-05-18 16:16:34', 'day10', 2, 50),
(64, 'Hassan', '2020-05-18 16:16:39', 'day11', 2, 40),
(65, 'Hassan', '2020-05-18 16:16:43', 'day23', 2, 45),
(66, 'Hassan', '2020-05-18 16:16:46', 'day29', 2, 40),
(67, 'Hassan', '2020-05-18 16:16:48', 'day30', 2, 110),
(68, 'Hassan', '2020-05-18 16:16:50', 'day28', 2, 90),
(69, 'Hassan', '2020-05-18 16:16:53', 'day27', 2, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `phone`, `password`) VALUES
('Ananda', '', '', '12345678'),
('ggg', 'anaada2015@gmail.com', '01825857470', '$2y$10$Ha60hwSrA6Bwp1u/PceiQuLe9lVP6yhH6HtUSOxu0vXDUOEeWNlci'),
('Anan', 'anaada2015@gmail.com', '01825857470', '$2y$10$iucy.OjHQAUpJGz97YiOVurYrKPjGDhfUb6rYMAKWac0WEGineu4O'),
('kamrul', 'anaada2015@gmail.com', '01825857470', '$2y$10$gtuGd2V7L9sg9GrsHPducOrS9s99HtHts53Z5b20n4HIMgbB1f9lK'),
('borna', 'anaada2015@gmail.com', '01956854072', '$2y$10$JyMP7S9g3UD1.rc9/wXSh.TOgivY8Oxpv0MipplXaJzHXV9LPqWdm'),
('pial', 'anaada2015@gmail.com', '01825857473', '$2y$10$hNWKZG3JXVWVtNEJlnxMmeoPUm5ZU1QjE1gRjjbSX2Y30Et/MYL/i'),
('ruhul', 'anaada2015@gmail.com', '01825964567', '$2y$10$ciHd8EPRM6Ys/m91AHk09uGsr8Gr7Nu7ji7T/Iz/8Vsy4ap9XZuQC'),
('anan', 'anaada2015@gmail.com', '01854357656', '$2y$10$TShHJJJGwkR0qOOlP49h7uTY9pKduOKaq78SfL4DZL68K4/T6NdCW'),
('e', 'anaada2015@gmail.com', '09876567567', '$2y$10$kVtQXIMiCHVz6QJ.kGwCOeQipsDoEoy8yP7MwsyTY0anEn4svT1Ay'),
('Hassan', 'anaada2015@gmail.com', '01825857470', '$2y$10$9uUaDF6z1lz4PSDyJoWbxeIGLTbCl9HADAxSeT9pWi.MAu2H6MA8y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mealtable`
--
ALTER TABLE `mealtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mealtable`
--
ALTER TABLE `mealtable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
