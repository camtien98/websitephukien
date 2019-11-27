-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2019 lúc 09:36 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_phukiendientu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang_dat_hang`
--

CREATE TABLE `bang_dat_hang` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ngay_dat_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_hang`
--

CREATE TABLE `chi_tiet_dat_hang` (
  `id` int(11) NOT NULL,
  `ma_dat_hang` int(11) NOT NULL,
  `ma_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `ten` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `custom`
--

INSERT INTO `custom` (`id`, `ten`) VALUES
(1, '0'),
(1, 'Deoe'),
(123, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giatri`
--

CREATE TABLE `giatri` (
  `id` int(11) NOT NULL,
  `tendongten` varchar(255) NOT NULL,
  `tienmatmua` varchar(255) NOT NULL,
  `chuyenkhoanmua` varchar(255) NOT NULL,
  `tienmatban` varchar(255) NOT NULL,
  `chuyenkhoanban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giatri`
--

INSERT INTO `giatri` (`id`, `tendongten`, `tienmatmua`, `chuyenkhoanmua`, `tienmatban`, `chuyenkhoanban`) VALUES
(1, 'Ðô la Mỹ &nbsp;(USD)', '23.210', '23.210', '23.310', '23.310'),
(2, 'Bảng Anh &nbsp;(GBP)', '29.531', '29.875', '30.701', '30.701'),
(3, 'Ðồng Euro &nbsp;(EUR)', '25.443', '26.316', '26.316', '26.316');

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
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`, `trang_thai`, `ngay_dat_hang`) VALUES
(89, 'Nguyễn thị cẩm tiên', 'ntcamtien811@gmail.com', '180 cao lo', '0898105695', 'mua hang', '1[|||]1[|||||]', 'Chưa Duyệt', '19/11/2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int(11) NOT NULL,
  `ten_nguoi_lien_he` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lien_he` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id`, `ten_nguoi_lien_he`, `email`, `dien_thoai`, `noi_dung`, `ngay_lien_he`) VALUES
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'sad', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Bị Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Lỗi', '21/12/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `amount` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `data` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL,
  `gia` int(255) NOT NULL,
  `hinhanh` varchar(256) NOT NULL,
  `noidung` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinhanh`, `noidung`) VALUES
(12, 'Sạc dự phòng Samsung', 200000, 'img/1.png', 'Thiết kế gọn gàng, cứng cáp.\r\nSạc 3.5 lần thiết bị pin dưới 1.500 mAh, 1.5 lần dưới 3.500 mAh.\r\nDễ dàng kiểm tra lại được dung lượng pin còn lại trong sạc.\r\nSử dụng lõi pin Li-Ion an toàn.\r\nSạc được cho mọi điện thoại và máy tính bảng.\r\nBộ sản phẩm gồm: pin sạc.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userpass` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `userpass`, `email`, `fullname`, `level`, `add_date`) VALUES
(1, 'admin', 'admin', 'ntcamtien811@gmail.com', 'Tiên Tiên', 1, '2019-11-01 00:00:00'),
(2, 'admin', 'admin', 'ntcamtien811@gmail.com', 'Tiên Tiên', 1, '2019-11-01 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bang_dat_hang`
--
ALTER TABLE `bang_dat_hang`
  ADD PRIMARY KEY (`id`,`ngay_dat_hang`);

--
-- Chỉ mục cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giatri`
--
ALTER TABLE `giatri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bang_dat_hang`
--
ALTER TABLE `bang_dat_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giatri`
--
ALTER TABLE `giatri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
