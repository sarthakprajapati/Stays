-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 08:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
(0, 'detail', 'char'),
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
(12, 'images', 'char'),
(13, 'address', 'char'),
(14, 'city', 'char'),
(15, 'wifi', 'char'),
(16, 'detail_room', 'char'),
(17, 'check_in', 'string'),
(18, 'check_out', 'string'),
(19, 'numofper', 'int'),
(20, 'book_id', 'int');

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
(35, 'hotel'),
(36, 'hotel'),
(37, 'hotel'),
(38, 'hotel'),
(39, 'hotel'),
(40, 'hotel'),
(41, 'hotel'),
(42, 'hotel'),
(43, 'hotel'),
(44, 'hotel'),
(45, 'hotel'),
(46, 'hotel'),
(63, 'hotel'),
(64, 'room'),
(65, 'room'),
(66, 'room'),
(67, 'room'),
(68, 'room'),
(69, 'room'),
(70, 'room'),
(71, 'room'),
(72, 'room'),
(73, 'room'),
(77, 'book');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `email`, `password`, `role`) VALUES
(1, 'Sarthak', 'sarthak_ishu11', 'sarthakprajapati@live.in', '123', 'admin'),
(3, 'Sarthak Prajapati', 'abc', 'abc@live.in', '1234', 'user');

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
(177, 44, 1, 'Four Seasons '),
(178, 44, 12, 'mum-pool.jpg'),
(179, 44, 13, '1/136, Doctor E Moses Road, Worli, Mumbai, Maharashtra 400018'),
(180, 44, 0, 'In the heart of Worli, the business hub of India\'s largest city, Four Seasons Hotel Mumbai creates a tranquil, chic haven filled with sincere Indian hospitality.'),
(181, 44, 14, 'Mumbai'),
(182, 45, 1, 'Taj Lands End'),
(183, 45, 12, 'taj-lands-end.jpg'),
(184, 45, 13, 'Bandstand Fort, Byramji Jeejeebhoy Road, Mount Mary, Bandra West, Mumbai, Maharashtra 400050'),
(185, 45, 0, 'Experience the best of Mumbai at Taj Lands End, located in its lifestyle hub, Bandra.With the ambience of a luxe sea-view retreat that belies the hotelâ€™s central location, we are your ideal choice for visits to this zesty city. '),
(186, 45, 14, 'Mumbai'),
(187, 46, 1, 'The Muse Sarovar Portico'),
(188, 46, 12, 'd6f2026858954c4cb23aa7967d505711-84956-53845.jpg'),
(189, 46, 13, '88-89, Bijwasan Road, Kapashera, New Delhi, Delhi'),
(190, 46, 0, 'Located in Kapashera, New Delhi, The Muse Sarovar Portico offers a comfortable stay for all. It offers easy access to the airport and railway station making it a convenient destination. The hotel presents the ideal blend of aesthetic and functionality to '),
(191, 46, 14, 'Delhi'),
(266, 63, 1, 'Tojours pur'),
(267, 63, 12, 'abstract-art-bark-983200.jpg'),
(268, 63, 13, 'useless'),
(269, 63, 0, 'useless'),
(270, 63, 14, 'london'),
(290, 68, 11, '7800'),
(291, 68, 6, '1'),
(293, 68, 16, 'sdsdsfs'),
(294, 68, 12, 'cards.jpeg'),
(295, 68, 5, '44'),
(296, 69, 11, '98'),
(297, 69, 6, '1'),
(298, 69, 15, '1'),
(299, 69, 16, 'qwertyu'),
(300, 69, 12, 'Capture.PNG'),
(301, 69, 5, '44'),
(302, 70, 11, '7899'),
(303, 70, 6, '1'),
(304, 70, 16, 'qwertyuimm'),
(305, 70, 12, 'Capture.PNG'),
(306, 70, 5, '63'),
(307, 71, 11, '7548'),
(308, 71, 15, '1'),
(309, 71, 16, 'zxcvbnm'),
(310, 71, 12, '2.PNG'),
(311, 71, 5, '46'),
(312, 72, 11, '1458'),
(313, 72, 6, '1'),
(314, 72, 15, '1'),
(315, 72, 16, 'zxcvbnmmm'),
(316, 72, 12, '1.PNG'),
(317, 72, 5, '46'),
(318, 73, 11, '1478'),
(319, 73, 6, '1'),
(320, 73, 16, 'zxserf'),
(321, 73, 12, '1.PNG'),
(322, 73, 5, '45'),
(335, 77, 5, '44'),
(336, 77, 1, 'Krishanu'),
(337, 77, 17, '2018-07-29'),
(338, 77, 18, '2018-07-31'),
(339, 77, 19, '3');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `value_table`
--
ALTER TABLE `value_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
