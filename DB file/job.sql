-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 11:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `information` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `email`, `information`, `requirement`) VALUES
(0, 'developer', 'amezasadrawezh@gmail.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, eligendi laborum? Id earum ex quas veniam maiores necessitatibus perspiciatis repellat distinctio qui nihil vero vitae consequuntur, quibusdam ipsa sint ea!\r\n1>Lorem ipsum dolor, sit amet ', '1 year exprence'),
(0, 'ash', 'dxnamez@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'girl'),
(0, 'bu', 'dxnamez@gmail.com', 'xss', 'girl'),
(0, 'skn', 'dxnamez@gmail.com', 'swwwwwwww', 'girl'),
(0, 'a', 'dxnamez@gmail.com', 'aaaaaaaaa', 'a'),
(0, 'wwwww', 'dxnamez@gmail.com', 'www', 'wwww'),
(0, 'ssss', 'amezamanj7@gmail.com', 'ssssssssssss', 's'),
(0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(23) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `detail` varchar(233) DEFAULT NULL,
  `cv` varchar(1000) DEFAULT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `detail`, `cv`, `img`) VALUES
(12, 'z', 'zeroonekg01@gmail.com', 'zzzzzzzzzzzzz', 'amez.pdf', '631bc335874fd.png'),
(13, 'aaa', 'zeroonekg01@gmail.com', 'zzzzzzzzzzzz', '631bd9a9002c2.pdf', '631bd9a90017b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` text NOT NULL,
  `code` text NOT NULL,
  `status` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(22, 'a', 'amezamanj7@gmail.com', '$2y$10$/R8Qcp6BpG7SWB5gr1DV6enATH17acJ7FMgjdvW.Hq3OXhjWY5lcO', '0', 'verified'),
(23, 'aa', 'amezasadrawezh@gmail.com', '$2y$10$9gLgI5IA5PhQZmIH1mzjyeC9oUYwBIQ5IkSXzBRnTf5NsE3brDCdS', '166642', 'notverified'),
(24, 'a', 'amezzeroone@gmail.com', '$2y$10$cmrwepeCPR0LEchrRtSETudgorseB9Yw9IZ.y5e5UOIEXuCMvCLji', '410506', 'verified'),
(25, 'aa', 'dxnamez@gmail.com', '$2y$10$P780dM8vTZiH5WmN8qD.7OmE8NCDQvuTj8bw3L1cibsV0FzJouy8O', '0', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
