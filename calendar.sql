-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `accept` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `start`, `end`, `accept`) VALUES
(38, 'dsfasdf', '2021-04-02 00:00:00', '2021-04-03 00:00:00', 1),
(39, 'adsfasdf', '2021-04-02 00:00:00', '2021-04-03 00:00:00', 1),
(40, 'gdfgsgf', '2021-04-03 00:00:00', '2021-04-04 00:00:00', 1),
(41, 'study', '2021-04-12 04:00:00', '2021-04-12 09:00:00', 1),
(42, 'tyrty', '2021-04-16 07:00:00', '2021-04-16 11:00:00', 1),
(43, 'dfgdfg', '2021-04-09 00:00:00', '2021-04-10 00:00:00', 1),
(44, 'ewrwe', '2021-04-09 00:00:00', '2021-04-10 00:00:00', 1),
(45, 'werr', '2021-04-09 00:00:00', '2021-04-10 00:00:00', 1),
(46, 'werwer', '2021-04-09 00:00:00', '2021-04-10 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
