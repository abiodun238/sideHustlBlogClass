-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 11:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(45) NOT NULL,
  `post_title` varchar(225) NOT NULL,
  `post_body` longtext NOT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `post_img` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_body`, `slug`, `post_img`, `created_at`) VALUES
(3, 'UPDATED POST', 'byte, the basic unit of information in computer storage and processing. A byte consists of 8 adjacent binary digits (bits), each of which consists of a 0 or 1. (Originally, a byte was any string of more than one bit that made up a simple piece of information like a single character. Thus, for example, there were four- or six-bit bytes, but eventually the standard settled on eight bits.) The string of bits making up a byte is processed as a unit by a computer; bytes are the smallest operable units of storage in computer technology. A byte can represent the equivalent of a single character, such as the letter B, a comma, or a percentage sign, or it can represent a number from 0 to 255. Because a byte contains so little information, the processing and storage capacities of computer hardware are usually given in gigabytes (GB; one billion bytes) and terabytes (TB; one trillion bytes). Because the byte had its roots in binary digits, originally one kilobyte was not 1,000 bytes but 1,024 bytes (1,024 = 210), and thus', 'paystack', 'nft-sign-hot-burning-fire-illustration-214371293.jpg', '2022-04-26 17:48:45'),
(4, 'POST HELLOw', 'byte, the basic unit of information in computer storage and processing. A byte consists of 8 adjacent binary digits (bits), each of which consists of a 0 or 1. (Originally, a byte was any string of more than one bit that made up a simple piece of information like a single character. Thus, for example, there were four- or six-bit bytes, but eventually the standard settled on eight bits.) The string of bits making up a byte is processed as a unit by a computer; bytes are the smallest operable units of storage in computer technology. A byte can represent the equivalent of a single character, such as the letter B, a comma, or a percentage sign, or it can represent a number from 0 to 255. Because a byte contains so little information, the processing and storage capacities of computer hardware are usually given in gigabytes (GB; one billion bytes) and terabytes (TB; one trillion bytes). Because the byte had its roots in binary digits, originally one kilobyte was not 1,000 bytes but 1,024 bytes (1,024 = 210), and thus', 'paystack', 'ITEM_PREVIEW1.png', '2022-04-26 17:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`) VALUES
('user1', 'User One', 'user@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
