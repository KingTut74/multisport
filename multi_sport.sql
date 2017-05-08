-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 05:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `event` text,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone` text,
  `birthdate` date DEFAULT NULL,
  `disability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `event`, `first_name`, `last_name`, `email`, `phone`, `birthdate`, `disability`) VALUES
(1, 'halfmarathon', 'Cynthia', 'Smith', 'cynthia.writer@comcast.net', '5038940948', '2017-11-21', 'Yes. I need a motor on my bike'),
(2, 'halfmarathon', 'Cynthia', 'Smith', 'cynthia.writer@comcast.net', '5038940948', '2017-12-26', 'Yes. I need prescription goggles'),
(3, 'triatri', 'Cynthia', 'Smith', 'cynthia.writer@comcast.net', '5038940948', '2017-10-24', 'Yes. I need a van for my wheelchair'),
(4, 'triatri', 'Cynthia', 'Smith', 'cynthia.writer@comcast.net', '5038940948', '2017-10-24', 'Yes. I need a van for my wheelchair');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
