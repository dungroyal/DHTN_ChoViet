-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 04:49 PM
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
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `idProduct` int(100) NOT NULL,
  `soluong` int(100) NOT NULL,
  `idUsers` int(100) NOT NULL,
  `idOrder` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idStore` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`, `idStore`) VALUES
(18, 'Smart TV', 'tivi.jpg', 4),
(19, 'Máy giặc', 'may-giat-samsung-ww90k52e0ww-sv-dd-300x300.jpg', 4),
(20, 'Tủ lanh Asanzo', '29047_19657_tu-lanh-panasonic-nr-bv288xsvn-255l.jpg', 4),
(21, 'Giầy thể thao', NULL, 5),
(22, 'Áo thể thao', NULL, 5),
(23, 'Smart TV', NULL, 3),
(24, 'Tủ lạnh Samsung', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'avatar_user.png',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `idProduct` int(100) DEFAULT NULL,
  `danhgia` tinyint(4) NOT NULL DEFAULT 5,
  `idUsers` int(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `idUsers` int(100) NOT NULL,
  `total` double(10,0) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,0) NOT NULL DEFAULT 0,
  `soluong` int(10) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 1000,
  `descripsion` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Sản phẩm thịnh hành năm 2019',
  `hot` tinyint(2) NOT NULL DEFAULT 0,
  `idCatalog` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `soluong`, `image`, `view`, `descripsion`, `hot`, `idCatalog`) VALUES
(126, 'Tivi Led ASANZO 40S600T2 40 inch', 0, 0, '40S600T2.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 18),
(127, 'Bảng giá Máy lạnh Asanzo Inverter K12A- 1.5HP', 0, 0, '10f3ad61996327e0aa5d8e27700ecd6e.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 18),
(128, 'MÁY GIẶT 7.2 KG AQUA AQW-S72CT LỒNG ĐỨNG', 0, 0, 'sua-may-giat-sanyo.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 20),
(129, 'Giày Adidas Prophere Rêu APP05', 0, 0, 'img_3061_master.png', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 21),
(130, 'Giày Thể Thao Adidas Superstar Trắng mũi sò F1', 0, 0, 'MG_5424.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 21),
(131, 'Áo Thể Thao Nam Mùa Hè Ngắn Tay Adidas D2M LOGO TE', 0, 0, 's-l300_306900cacfe848a6b83ad809cbda5b92_grande.png', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 22),
(132, 'Smart TV UHD 4K 50 inch NU7400 | UA50NU7400KXXV | ', 0, 0, 'vn-uhd-nu7400-ua55nu7400kxxv-frontblack-97614381.webp', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 23),
(133, 'Smart TV màn hình cong 4K UHD 55 inch RU7300 | UA5', 0, 0, 'vn-uhd-ru7300-ua55ru7300kxxv-lperspectiveblack-150456403.webp', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 23);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usernam` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `idUser` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `usernam`, `password`, `image`, `diachi`, `Date`, `idUser`) VALUES
(3, 'SamSung Việt Nam', NULL, NULL, 'samsung.jpg', 'TP. Hà Nội', '2019-11-18', 6),
(4, 'Asanzo Offical', NULL, NULL, 'asanzo.jpg', 'TP. Hồ Chí Minh', '2019-11-18', 7),
(5, 'Adidas Global', NULL, NULL, 'Adidas-logo.jpg', 'TP. Hồ Chí Minh', '2019-11-18', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'avatar_user.png',
  `lever` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `image`, `lever`) VALUES
(4, 'dungdq', 'ps08542', 'doanquocdung55@gmail.com', 'avatar_user.png', '0'),
(5, 'admin', 'admin', 'admin55@gmail.com', 'avatar_user.png', '1'),
(6, 'samsung', 'samsung', 'samsung2019@gmail.com', 'avatar_user.png', '2'),
(7, 'asanzo', 'asanzo', 'asanzo2019@gmail.com', 'avatar_user.png', '2'),
(8, 'adidas', 'adidas', 'adidas2019@gmail.com', 'avatar_user.png', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_product` (`idProduct`),
  ADD KEY `fk_cart_order` (`idOrder`),
  ADD KEY `fk_cart_users` (`idUsers`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catalog_store` (`idStore`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_users` (`idUsers`),
  ADD KEY `fk_comment_product` (`idProduct`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_users` (`idUsers`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idCatalog`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_store_user` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_order` FOREIGN KEY (`idOrder`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cart_users` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `fk_catalog_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_comment_users` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_users` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `fk_store_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
