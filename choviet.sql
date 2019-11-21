-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 03:28 AM
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
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`) VALUES
(40, 'Điện tử & Điện gia dụng', NULL),
(41, 'Thiết bị điện tử', NULL),
(42, 'Thời trang Nam', NULL),
(43, 'Thời trang Nữ', NULL),
(44, 'Điện thoại & Phụ kiện', NULL),
(45, 'Mẹ và bé', NULL),
(47, 'Máy tính & Laptop', NULL),
(48, 'Sức khoẻ và sắc đẹp', NULL),
(49, 'Máy ảnh & Máy quay phim', NULL),
(50, 'Giầy dép Nam', NULL),
(51, 'Giầy dép Nữ', NULL),
(52, 'Đồng Hồ', NULL),
(53, 'Túi ví', NULL),
(54, 'Phụ kiện thời trang', NULL),
(55, 'Thiết bị điện gia dụng', NULL),
(56, 'Thể thao & Du lịch', NULL),
(57, 'Ô tô & Xe máy & Xe đạp', NULL),
(58, 'Thời trang trẻ em', NULL),
(59, 'Nhà sách Online', NULL),
(61, 'Nhà cửa & Đời sống', NULL),
(62, 'Sản phẩm khác', NULL),
(63, 'Phụ kiện điện tử', NULL),
(64, 'Tivi & Thiết bị điện gia dụng', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_store`
--

CREATE TABLE `catalog_store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idStore` int(100) NOT NULL,
  `idCatalog` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog_store`
--

INSERT INTO `catalog_store` (`id`, `name`, `idStore`, `idCatalog`) VALUES
(6, 'Thiết bị điện gia dụng', 7, 55),
(7, 'Điện thoại & Phụ kiện', 7, 44);

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
  `soluong` int(100) NOT NULL DEFAULT 100,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 1000,
  `descripsion` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Sản phẩm thịnh hành năm 2019',
  `hot` tinyint(2) NOT NULL DEFAULT 0,
  `idCatalog` int(100) NOT NULL,
  `idStore` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `soluong`, `image`, `view`, `descripsion`, `hot`, `idCatalog`, `idStore`) VALUES
(136, 'Smart Tivi Samsung 4K 55 inch UA55NU7090', 100000, 100, 'vn-uhd-ru7300-ua55ru7300kxxv-lperspectiveblack-150456403.webp', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 55, 7),
(137, 'Smart Tivi Samsung 4K 55 inch UA55NU7090', 100000, 100, '1.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, 44, 7);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `idUser` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `image`, `diachi`, `Date`, `idUser`) VALUES
(6, 'Asanzo Officall', 'asanzo.jpg', 'TP. Hồ Chí Minh', '2019-11-19', 9),
(7, 'Samsung Việt Nam', 'samsung.jpg', 'TP. Hà Nội', '2019-11-19', 10),
(8, 'Adidas Việt Nam', 'Adidas-logo.jpg', 'TP. Hà Nội', '2019-11-19', 11);

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
(9, 'asanzo', 'asanzo', 'asanzo2019@gmail.com', 'avatar_user.png', '2'),
(10, 'samsung', 'samsung', 'samsung2019@gmail.com', 'avatar_user.png', '2'),
(11, 'adidas', 'adidas', 'adidas2019@gmail.com', 'avatar_user.png', '2'),
(12, 'admin', 'admin', 'admin2019@gmail.com', 'avatar_user.png', '1');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_store`
--
ALTER TABLE `catalog_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catalogstore_store` (`idStore`),
  ADD KEY `fk_catalogstore_catalog` (`idCatalog`);

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
  ADD KEY `fk_product_catalog` (`idCatalog`),
  ADD KEY `fk_product_store` (`idStore`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `catalog_store`
--
ALTER TABLE `catalog_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Constraints for table `catalog_store`
--
ALTER TABLE `catalog_store`
  ADD CONSTRAINT `fk_catalogstore_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_catalogstore_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `fk_store_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
