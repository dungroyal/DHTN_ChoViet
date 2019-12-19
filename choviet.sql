-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 02:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ward` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'avatar_user.png',
  `lever` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phonenumber`, `address`, `ward`, `district`, `city`, `name`, `pass`, `email`, `image`, `lever`) VALUES
(9, 'Lê Văn Tèo', '0398022720', '', NULL, NULL, NULL, 'asanzo', 'asanzo', 'asanzo2019@gmail.com', 'avatar_user.png', '2'),
(10, 'Nguyễn Văn Tuấn', '0398022720', '', NULL, NULL, NULL, 'samsung', 'samsung', 'samsung2019@gmail.com', 'avatar_user.png', '2'),
(11, 'Nguyễn Văn A', '0398022720', '', NULL, NULL, NULL, 'adidas', 'adidas', 'adidas2019@gmail.com', 'avatar_user.png', '2'),
(12, 'Đoàn Quốc Dũng', '0398022720', '', NULL, NULL, NULL, 'admincv', 'Admincv2019', 'doanquocdung55@gmail.com', 'avatar_user.png', '0'),
(13, 'Trần Công Diện', '0398022720', '', NULL, NULL, NULL, 'user2019', 'User2019', 'doanquocdung55@gmail.com', 'avatar_user.png', '0'),
(14, 'Đoàn Quốc Dũng', '0398022720', '', NULL, NULL, NULL, 'dungdqps08542', 'doanquocdung55@gmail.com', 'doanquocdung5520', 'avatar_user.png', '1'),
(15, 'Lê Trọng Nhân', '0398022720', '', NULL, NULL, NULL, 'Đoàn Quốc Dũng', 'doanquocdung5520', 'Dungdqps08542@fpt.edu.vn', 'avatar_user.png', '1'),
(16, 'Lê trọng nhân', '0398022720', '', NULL, NULL, NULL, 'dungdqps08542', 'Doanquocdung5520', 'Dungdqps08542@fpt.edu.vn', 'avatar_user.png', '0'),
(17, 'Lê Văn Tèo', '0398022720', '', NULL, NULL, NULL, 'abc', 'abc', 'abc', 'avatar_user.png', '0'),
(23, 'Lê Văn Cáp', '0368542175', NULL, NULL, NULL, NULL, 'test123', 'Test123', 'capdeptrai@gmail.com', 'avatar_user.png', '0'),
(24, 'Đũng ĐQ', '0398022720', NULL, NULL, NULL, NULL, 'Dungdqps08542', 'Dungdqps08542', 'kjhkjh@gmail.com', 'avatar_user.png', '0'),
(25, 'Đasasd', '0398022720', NULL, NULL, NULL, NULL, 'dungdkjlkjlkj', 'Adadad123', 'jkljlaklk@klkl.com', 'avatar_user.png', '0'),
(26, 'Dungdq', '0398202232', NULL, NULL, NULL, NULL, 'Doanquocdung5520', 'Dung5520', 'dung@123.com', 'avatar_user.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
