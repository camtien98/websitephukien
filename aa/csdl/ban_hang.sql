-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 11, 2019 lúc 06:18 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_hang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.jpg', '990px', '200px');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '<table width=\"990px\">\r\n    \r\n        <tr>\r\n            <td align=\"center\">Cửa hàng :\r\n           <b>Shop Giày Ny Shoes</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td align=\"center\"  >Điện thoại :\r\n            <b>0392775887</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td align=\"center\"   >Địa chỉ :\r\n            <b>180 Cao Lỗ , Phường 4, Quận 8,TPHCM</b></td>\r\n        </tr>\r\n  \r\n</table>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`, `tinh_trang`) VALUES
(1, 'Tuyen', '1', '1', '1', '1', '57[|||]0[|||||]60[|||]0[|||||][|||]0[|||||]59[|||]1[|||||]58[|||]1[|||||]52[|||]1[|||||]', 'Đã xác '),
(2, 'Tuyến', 'fef', '3e3', '12', '$noi_dung', '57', 'Đã giao'),
(3, '1', '1', '1', '1', '', '58[|||]1[|||||]', 'Đã giao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Nokia'),
(4, 'Xiaomi'),
(5, 'Oppo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(2, 'Sản phẩm', '', 'san_pham'),
(5, 'Liên Hệ', 'Số điện thoại : 0905377032 <br />\r\nFacebook : facebook.com/anh8t', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `html`, `vi_tri`) VALUES
(1, '<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_p_1.png\" alt=\"\" /></a></p>\r\n<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/qc_p_2.png\" alt=\"\" /></a></p>\r\n<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_p_3.png\" alt=\"\" /></a></p>', 'trai'),
(2, '<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_t_1.png\" alt=\"\" /></a></p>\r\n<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/qc_t_2.png\" alt=\"\" /></a></p>\r\n<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_t_3.png\" alt=\"\" /></a></p>', 'phai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(41, 'Iphone 11', 33490000, 'iphone11.jpg', '', 1, 'co', 'co', 17),
(42, 'Iphone X', 25000000, 'iphone10.jpg', '', 1, 'co', 'co', 18),
(43, 'Iphone 8 Plus', 16490000, 'iphone8plus.jpg', '', 1, 'co', 'co', 19),
(44, 'Iphone 7 Plus', 12890000, 'iphone7plus.jpg', '', 1, 'co', 'co', 20),
(45, 'Nokia 9.1', 70000, 'nokia9.jpg', '', 5, 'co', 'co', 21),
(46, 'Nokia 7.2', 51000, 'nokia7.jpg', '', 5, 'co', 'co', 22),
(47, 'Nokia 6.2', 1000000, 'nokia62.jpg', '', 5, 'co', 'co', 23),
(48, 'Nokia 6.1', 999000, 'nokia6.jpg', '', 5, 'co', 'co', 24),
(49, 'Nokia 5.1', 500000, 'nokia5.jpg', '', 2, 'co', 'co', 25),
(50, 'Oppo A3', 2000000, 'oppoa3.jpg', '', 2, 'co', 'co', 26),
(51, 'Oppo A5s', 700000, 'oppoa5s.jpg', '', 2, 'co', 'co', 27),
(52, 'Oppo A9', 10000, 'oppoa9.png', '', 2, 'co', 'co', 28),
(53, 'Oppo F11', 450000, 'oppof11.png', '', 3, 'co', 'co', 29),
(54, 'Oppo Reno', 120000, 'opporeno.png', '', 3, 'co', 'co', 30),
(55, 'Samsung Galaxy Note 10', 540000, 'samsungnote10.jpg', '', 3, 'co', 'co', 31),
(56, 'Samsung Galaxy Note 9', 5000000, 'samsungnote9.jpg', '', 3, 'co', 'co', 32),
(57, 'Samsung Galaxy S9', 300000, 'samsungs9.jpg', '', 4, 'co', 'co', 33),
(58, 'Samsung Galaxy S10', 90000, 'samsungs10.jpg', '', 4, '', 'co', 34),
(59, 'Xiaomi Mi 9', 80000, 'xiaomimi9.jpg', '', 4, '', 'co', 35),
(60, 'Xiaomi Mi Mix 3', 3000000, 'xiaomimimix3.jpg', '', 4, '', 'co', 36),
(61, 'Xiaomi Note 10', 2323, 'xiaominote10.jpg', '', 1, 'co', 'co', 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, '968033abfd94f77cdb239d77f34120bca83032f5.jpg', '#'),
(2, 'cach-buoc-day-giay-converse-7-lo11445.jpg', '#'),
(3, '9424e2d2f459ff8918342f058173c8d1.jpg', '#'),
(4, 'nhung-cach-that-day-giay-dep-va-bat-mat-nhat-p1151.jpg', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
