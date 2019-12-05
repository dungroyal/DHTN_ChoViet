-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2019 lúc 04:37 PM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idCatalog`),
  ADD KEY `fk_product_store` (`idStore`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_store` FOREIGN KEY (`idStore`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
