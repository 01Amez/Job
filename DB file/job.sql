-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 02:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_with_prepared_statement`
--

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
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `detail`, `cv`, `image`) VALUES
(1, 'ahmad mhmad ali', 'amezamanj7@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem temporibus, nam blanditiis itaque asperiores vero quaerat pariatur eius sint in officia laborum quisquam aperiam ex ea consectetur ullam? Cupiditate.\n', 'amez.pdf', '1.jpg'),
(2, 'amez amanj ali', 'amezamanj11@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem temporibus, nam blanditiis itaque asperiores vero quaerat pariatur eius sint in officia laborum quisquam aperiam ex ea consectetur ullam? Cupiditate.\n', 'sahand.pdf', '2.jpg'),
(3, 'ahmad ata ali', 'amezamanj7@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem temporibus, nam blanditiis itaque asperiores vero quaerat pariatur eius sint in officia laborum quisquam aperiam ex ea consectetur ullam? Cupiditate.\n', 'amez.pdf', '3.jpg'),
(4, 'zana omar mana', 'amezamanj000@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem temporibus, nam blanditiis itaque asperiores vero quaerat pariatur eius sint in officia laborum quisquam aperiam ex ea consectetur ullam? Cupiditate.\n', 'amez.pdf', '4.jpg'),
(5, 'soma aziz', 'dxnamez@gmail.com', 'ah hhhhhhhhhhhhhhhaaaaaa', 'amez.pdf', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `userName`, `user_password`) VALUES
(1, 'admin@gmail.com', '', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'andra@gmail.com', 'alex', '534b44a19bf18d20b71ecc4eb77c572f'),
(4, 'andra@gmail.com', 'alex', '4124bc0a9335c27f086f24ba207a4912'),
(5, 'andra@gmail.com', 'alex', '534b44a19bf18d20b71ecc4eb77c572f');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;