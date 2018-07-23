-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 07:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eavstays`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `attribute`, `type`) VALUES
(1, 'name', 'char'),
(2, 'email', 'char'),
(3, 'username', 'char'),
(4, 'password', 'char'),
(5, 'hotel_id', 'int'),
(6, 'AC', 'boolean'),
(7, 'pool', 'boolean'),
(8, 'parking', 'boolean'),
(9, 'gym', 'boolean'),
(10, 'pets', 'boolean'),
(11, 'price', 'float'),
(12, 'image', 'char');

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`id`, `type`) VALUES
(6, 'hotel'),
(7, 'hotel'),
(8, 'hotel'),
(35, 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `email`, `password`) VALUES
(1, 'Sarthak', 'sarthak_ishu11', 'sarthakprajapati@live.in', '123'),
(2, 'Sarthak Prajapati', 'sarthak_ishu11', 'sarthakprajapati@live.in', '12345'),
(3, 'Sarthak Prajapati', 'abc', 'abc@live.in', '123');

-- --------------------------------------------------------

--
-- Table structure for table `value_table`
--

CREATE TABLE `value_table` (
  `id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `attr_val` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `value_table`
--

INSERT INTO `value_table` (`id`, `entity_id`, `attr_val`, `value`) VALUES
(15, 6, 1, 'Hotel Picadily'),
(16, 6, 2, 'picadily@hotel.com'),
(17, 6, 3, 'picadily'),
(18, 6, 4, '$2y$10$R5J8g4BxqEC/tUI1TxCpA.qxIXGSJA2Y0gbZbjMEI.yXZSbuHX8Le'),
(19, 7, 1, 'Swaraj'),
(20, 7, 2, 'sarthakprajapati@live.in'),
(21, 7, 3, 'sarthak_ishu11'),
(22, 7, 4, '$2y$10$yAgxw4fQ0jWTiftN1HIt2.IkWn/nHOszN6gyE7Qt3hR9UfRiVKE/a'),
(23, 8, 1, 'Stay'),
(24, 8, 2, 'sarthakprajapati11@gmail.com'),
(25, 8, 3, 'sarthakprajapati11'),
(26, 8, 4, '$2y$10$di/cp3NbEV6O0nf3jaw3t.eURYnYecjbUOL0f38JGPGky10OtUi/2'),
(131, 35, 1, 'saa'),
(132, 35, 2, 'sas@gmail.com'),
(133, 35, 3, 'sarthak_ishu11ss'),
(134, 35, 4, '$2y$10$PhLlCYGGorzZZGTvxXyYYePXUMnROxPcl/rREGg8wp35tOOj.JgfG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_table`
--
ALTER TABLE `value_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `value_table`
--
ALTER TABLE `value_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
