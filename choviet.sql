-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2019 lúc 07:19 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `choviet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` tinyint(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `title`, `url`, `image`, `location`, `status`) VALUES
(1, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'poster1.jpg', 1, 1),
(2, 'Banner ', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'thucung.jpg', 2, 1),
(3, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'giaydep.jpg', 3, 1),
(4, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'quanao.jpg', 4, 1),
(5, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'dienthoai.jpg', 5, 1),
(6, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'aonam.jpg', 6, 1),
(7, 'Banner quảng cáo chó', 'http://localhost/DHTN_ChoViet/?act=product_detail&idProduct=146', 'xx', 7, 0),
(12, 'Đoàn Quốc Dũng', 'https://www.facebook.com/Quocdungroyal', 'xx', 1, 0),
(13, 'ROYAL', 'AA.com', 'xx', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` int(11) NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL DEFAULT 0,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` int(5) NOT NULL,
  `so_luong` int(5) NOT NULL,
  `giam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  `id_custom` int(5) DEFAULT NULL,
  `id_pro` int(5) NOT NULL,
  `id_cata` int(3) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `pro_name`, `img`, `coin`, `tinh_trang`, `info`, `color`, `so_luong`, `giam`, `id_user`, `id_custom`, `id_pro`, `id_cata`, `type`) VALUES
(27, 'Áo khoát Adidas ACE ', 'Mau.jpg', 150000, 0, 'Sản phẩm thịnh hành năm 2019', 1, 1, NULL, 9, 13, 143, 42, 0),
(28, 'Giầy Adidas Ace cao cấp trắng đen Nam ACE12165', 'MG_5424.jpg', 3000000, 0, 'Sản phẩm thịnh hành năm 2019', 1, 1, NULL, 9, 13, 145, 50, 0),
(29, 'Tivi & Thiết bị điện gia dụng', '1.jpg', 12000000, 0, 'Sản phẩm thịnh hành năm 2019', 1, 1, NULL, 9, 13, 146, 50, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`) VALUES
(40, 'Điện tử & Điện gia dụng', NULL),
(41, 'Thiết bị điện tử', '978b9e4cb61c611aaaf58664fae133c5_tn.png'),
(42, 'Thời trang Nam', '687f3967b7c2fe6a134a2c11894eea4b_tn.png'),
(43, 'Thời trang Nữ', '40S600T2.jpg'),
(44, 'Điện thoại & Phụ kiện', '31234a27876fb89cd522d7e3db1ba5ca_tn&quot.png'),
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
(64, 'Tivi & Thiết bị điện gia dụng', NULL),
(65, '', NULL),
(66, '', NULL),
(67, '', NULL),
(68, '', NULL),
(69, '', NULL),
(70, '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog_store`
--

CREATE TABLE `catalog_store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `idStore` int(100) NOT NULL,
  `idCatalog` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog_store`
--

INSERT INTO `catalog_store` (`id`, `name`, `image`, `idStore`, `idCatalog`) VALUES
(6, 'Thiết bị điện gia dụng', '', 7, 55),
(7, 'Điện thoại & Phụ kiện', '', 7, 44),
(8, 'Thời trang Nam', '', 8, 42),
(9, 'Thời trang Nữ', '', 8, 43),
(10, 'Phụ kiện điện tử', '10f3ad61996327e0aa5d8e27700ecd6e.jpg', 7, 63),
(11, 'Tivi & Thiết bị điện gia dụng', 'samsung.jpg', 7, 64),
(12, 'Giầy dép Nam', 'img_3061_master.png', 8, 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
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
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,0) NOT NULL DEFAULT 0,
  `soluong` int(100) NOT NULL DEFAULT 100,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 1000,
  `descripsion` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Sản phẩm thịnh hành năm 2019',
  `hot` tinyint(2) NOT NULL DEFAULT 0,
  `giamgia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  `idCatalog` int(100) NOT NULL,
  `idStore` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `soluong`, `image`, `view`, `descripsion`, `hot`, `giamgia`, `id_user`, `idCatalog`, `idStore`) VALUES
(136, 'Smart Tivi Samsung 4K 55 inch UA55NU7090', 100000, 100, '40S600T2.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 1, '', 9, 64, 7),
(138, 'Quần thun Nam Adidas F2031', 100000, 100, '6ecf6ba2f2694c388b5ba83a00d14b09_9366.webp', 1000, 'Sản phẩm thịnh hành năm 2019', 0, '', 9, 42, 8),
(142, 'Smart TV', 150, 100, 'img_3061_master.png', 1000, 'Sản phẩm thịnh hành năm 2019', 1, '', 9, 63, 7),
(143, 'Áo khoát Adidas ACE ', 150000, 200, 'Mau.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 1, '', 9, 42, 8),
(144, 'Áo khoát Adidas nữ cao cấp màu kem', 1500000, 100, '724211f7c0ef4082b97baa2b007d79ae_9366.webp', 1000, 'Sản phẩm thịnh hành năm 2019', 0, '', 9, 43, 8),
(145, 'Giầy Adidas Ace cao cấp trắng đen Nam ACE12165', 3000000, 100, 'MG_5424.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 0, '2000000', 9, 50, 8),
(146, 'Tivi & Thiết bị điện gia dụng', 12000000, 100, '1.jpg', 1000, 'Sản phẩm thịnh hành năm 2019', 1, '', 9, 50, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store`
--

CREATE TABLE `store` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `trangthai` tinyint(3) NOT NULL DEFAULT 1,
  `idUser` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `store`
--

INSERT INTO `store` (`id`, `name`, `username`, `password`, `phonenumber`, `email`, `image`, `diachi`, `Date`, `trangthai`, `idUser`) VALUES
(6, 'Asanzo Officall', 'asanzo', 'asanzo', '0398022720', 'doanquocdung5520@gmail.com', 'asanzo.jpg', 'TP. Hồ Chí Minh', '2019-11-19', 2, 9),
(7, 'Samsung Việt Nam', '', '', '', '', 'samsung.jpg', 'TP. Hà Nội', '2019-11-19', 1, 10),
(8, 'Adidas Việt Nam', '', '', '', '', 'Adidas-logo.jpg', 'TP. Hà Nội', '2019-11-19', 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'avatar_user.png',
  `lever` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `image`, `lever`) VALUES
(9, 'asanzo', 'asanzo', 'asanzo2019@gmail.com', 'avatar_user.png', '2'),
(10, 'samsung', 'samsung', 'samsung2019@gmail.com', 'avatar_user.png', '2'),
(11, 'adidas', 'adidas', 'adidas2019@gmail.com', 'avatar_user.png', '2'),
(12, 'admin', 'admin', 'admin2019@gmail.com', 'avatar_user.png', '1'),
(13, 'user', 'user', 'admin2019@gmail.com', 'avatar_user.png', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_cata` (`id_cata`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog_store`
--
ALTER TABLE `catalog_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catalogstore_store` (`idStore`),
  ADD KEY `fk_catalogstore_catalog` (`idCatalog`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_users` (`idUsers`),
  ADD KEY `fk_comment_product` (`idProduct`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idCatalog`),
  ADD KEY `fk_product_store` (`idStore`);

--
-- Chỉ mục cho bảng `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_store_user` (`idUser`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `catalog_store`
--
ALTER TABLE `catalog_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT cho bảng `store`
--
ALTER TABLE `store`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_cata` FOREIGN KEY (`id_cata`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `catalog_store`
--
ALTER TABLE `catalog_store`
  ADD CONSTRAINT `fk_catalogstore_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_catalogstore_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_comment_users` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `fk_store_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
