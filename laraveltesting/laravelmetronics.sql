-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 05:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelmetronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft_message`
--

CREATE TABLE `draft_message` (
  `draft_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `from_id` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_drafted` int(10) NOT NULL COMMENT 'not drafted - 0, drafted - 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draft_message`
--

INSERT INTO `draft_message` (`draft_id`, `to_id`, `from_id`, `subject`, `message`, `is_drafted`) VALUES
(1, 3, 1, 'dgd', 'fgregrvrvr', 0),
(2, 3, 1, 'trhthrh', 'tyhjtrgbrt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `status` int(10) NOT NULL COMMENT 'request - 0, accept - 1, reject - 2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `sender_id`, `receiver_id`, `status`) VALUES
(2, 2, 3, 1),
(8, 4, 2, 2),
(10, 4, 3, 1),
(13, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message_send`
--

CREATE TABLE `message_send` (
  `m_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `from_id` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_deleted` int(10) NOT NULL COMMENT 'not deleted - 0, deleted - 1',
  `sent_deleted` int(10) NOT NULL COMMENT 'not deleted - 0, deleted - 1',
  `is_marked` int(10) NOT NULL COMMENT 'not marked - 0, marked - 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_send`
--

INSERT INTO `message_send` (`m_id`, `to_id`, `from_id`, `subject`, `message`, `is_deleted`, `sent_deleted`, `is_marked`) VALUES
(2, 1, 2, 'test', 'hi rishabh', 1, 1, 0),
(3, 2, 1, 'test123', 'Hi sanjeev', 2, 1, 0),
(4, 2, 1, 'javascript', 'good morning sanjeev', 1, 0, 0),
(5, 3, 2, 'test', 'hello', 0, 0, 0),
(6, 1, 4, 'important', 'Hi rishabh\r\ni send you a file.Please check it and review it', 0, 0, 0),
(7, 3, 1, 'gggg', 'ddfefefece', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_about`
--

CREATE TABLE `user_about` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `text_area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_about`
--

INSERT INTO `user_about` (`id`, `user_id`, `text_area`) VALUES
(1, 3, '<p>Good Evening Guys</p>\r\n'),
(2, 1, '<p>Hi good afternoon guys</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_gallery`
--

CREATE TABLE `user_gallery` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pictures` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_gallery`
--

INSERT INTO `user_gallery` (`id`, `user_id`, `pictures`) VALUES
(1, 3, '70.jpg'),
(2, 3, '69.jpg'),
(3, 3, '68.jpg'),
(4, 2, '60.jpg'),
(5, 2, '59.jpg'),
(6, 2, '58.jpg'),
(7, 1, '02.jpg'),
(8, 1, '2.jpg'),
(9, 1, '01.jpg'),
(10, 1, '1.jpg'),
(11, 1, '04.jpg'),
(12, 1, '4.jpg'),
(13, 1, '03.jpg'),
(14, 1, '3.jpg'),
(15, 2, '87.jpg'),
(16, 2, '86.jpg'),
(17, 2, '85.jpg'),
(18, 2, '101.jpg'),
(19, 2, '100.jpg'),
(20, 2, '98.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `full_name`, `email`, `address`, `city`, `country`, `username`, `password`, `profile_pic`, `status`) VALUES
(1, 'Rishabh Modi', 'rishum92@gmail.com', 'Indore', 'Indore', 'US', 'Rishum92', '44b468b42009d8f78755d1733e5585af', 'team7.jpg', 1),
(2, 'Sanjeev Mishra', 'mishra11@gmail.com', 'Indore', 'Indore', 'IN', 'Sanjeev', '9551fe8d9c8ad11d733f673cf5280150', 'team16.jpg', 1),
(3, 'Nidhi', 'nidhi@yahoo.com', 'Indore', 'Indore', 'IN', 'nidhi', '64605c59ab62dbcd925af40d7de11276', 'team6.jpg', 1),
(4, 'sanjay', 'rishabhmodi65@yahoo.com', 'Indore', 'Indore', 'IN', 'sanjay', '5f1c5342818bf8c161d8ff4e18ff1720', 'team10.jpg', 1),
(5, 'priya', 'manifest.nidhi.s@gmail.com', 'Indore', 'Indore', 'IN', 'priya', '827ccb0eea8a706c4c34a16891f84e7b', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft_message`
--
ALTER TABLE `draft_message`
  ADD PRIMARY KEY (`draft_id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_send`
--
ALTER TABLE `message_send`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user_about`
--
ALTER TABLE `user_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_gallery`
--
ALTER TABLE `user_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft_message`
--
ALTER TABLE `draft_message`
  MODIFY `draft_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message_send`
--
ALTER TABLE `message_send`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_about`
--
ALTER TABLE `user_about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_gallery`
--
ALTER TABLE `user_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
