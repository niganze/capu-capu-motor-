-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 11:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capucapu`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(54) NOT NULL,
  `name` varchar(44) NOT NULL,
  `email` varchar(78) NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `telephone`, `address`) VALUES
(1, 'niganze alain', 'niganzealain@gmail.com', 782500771, 'kicukiro/kanombe'),
(2, 'irakoze maire chantal', 'jeaniakoze68@gmail.com', 2147483647, 'huye/street kc505 kc'),
(3, 'imanishimwe marcel', 'imanishimwe@gmail.com', -783876946, 'muhanga/sreet 967H');

-- --------------------------------------------------------

--
-- Table structure for table `iyandikishe`
--

CREATE TABLE `iyandikishe` (
  `id` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Firstname` varchar(56) NOT NULL,
  `Lastname` varchar(66) NOT NULL,
  `Email` varchar(56) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iyandikishe`
--

INSERT INTO `iyandikishe` (`id`, `Username`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
(1, 'uuufrgf', 'mukoza', 'patrick', 'mukozapatrick@gmnail.com', 12345),
(2, 'noiganze', 'niganze', 'alain', 'nigfanzealain@gmail.com', 54321),
(3, 'muyunyi', 'muyunyi ', 'ange', 'muvunyiange@gmail.com', 3456),
(4, 'niganze', 'niganze', 'alain', 'niganzealain@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'kagabo', 'kagabo123'),
(2, 'aime', 'aime250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iyandikishe`
--
ALTER TABLE `iyandikishe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(54) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iyandikishe`
--
ALTER TABLE `iyandikishe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
