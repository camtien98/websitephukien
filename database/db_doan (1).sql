-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 01:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bang_dat_hang`
--

CREATE TABLE `bang_dat_hang` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ngay_dat_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_dat_hang`
--

CREATE TABLE `chi_tiet_dat_hang` (
  `id` int(11) NOT NULL,
  `ma_dat_hang` int(11) NOT NULL,
  `ma_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id` int(11) NOT NULL,
  `ten` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `ten`) VALUES
(1, '0'),
(1, 'Deoe'),
(123, '123');

-- --------------------------------------------------------

--
-- Table structure for table `giatri`
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
-- Dumping data for table `giatri`
--

INSERT INTO `giatri` (`id`, `tendongten`, `tienmatmua`, `chuyenkhoanmua`, `tienmatban`, `chuyenkhoanban`) VALUES
(1, 'Ðô la Mỹ &nbsp;(USD)', '23.210', '23.210', '23.310', '23.310'),
(2, 'Bảng Anh &nbsp;(GBP)', '29.531', '29.875', '30.701', '30.701'),
(3, 'Ðồng Euro &nbsp;(EUR)', '25.443', '26.316', '26.316', '26.316');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
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
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`, `trang_thai`, `ngay_dat_hang`) VALUES
(95, 'Linh Nhi', 'maithilinhnhi98@gmail.com', 'djkhdkdkdl', '0943202538', '', '5[|||]1[|||||]6[|||]1[|||||]', 'Hủy Đơn', '26/11/2019'),
(97, 'Thien', 'maithilinhnhi98@gmail.com', 'asdasd', '0943202538', 'asdasdasdas', '2[|||]1[|||||]', 'Hủy Đơn', '27/11/2019'),
(98, 'Linh Nhi', 'maijdhuifhui@gmail.com', 'sss', '12345678', 'sss', '8[|||]1[|||||]', 'Hủy Đơn', '28/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
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
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `ten_nguoi_lien_he`, `email`, `dien_thoai`, `noi_dung`, `ngay_lien_he`) VALUES
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'sad', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Bị Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Lỗi', '21/12/2018'),
(0, 'phạm minh thiện', 'thien.phamminhstu@gmail.com', '01656581777', 'Đơn Hàng Lỗi', '21/12/2018'),
(0, 'Linh Nhi', 'maithilinhnhi98@gmail.com', '0943202538', 'hdijidj', '21/11/2019'),
(0, 'Linh Nhi', 'maithilinhnhi98@gmail.com', '123', 'ịkljLChILCH', '17/12/2019'),
(0, 'Linh Nhi', 'maithilinhnhi98@gmail.com', '123', 'ịkljLChILCH', '17/12/2019');

-- --------------------------------------------------------

--
-- Table structure for table `order`
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
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL,
  `gia` int(255) NOT NULL,
  `hinhanh` varchar(256) NOT NULL,
  `noidung` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinhanh`, `noidung`) VALUES
(2, 'ádas', 123, 'img/21.jpg', 'uyuyyuhyu'),
(3, 'Quần áo nữ streetwear', 900000, 'img/23.jpg', 'Phong cách thời trang đa dạng cho phái nữ'),
(5, 'Quần áo nữ', 900000, 'img/28.jpg', 'Mang lại vẻ thanh thoát cho phái nữ'),
(8, 'Quần áo nữ', 800000, 'img/31.jpg', 'Sức song mới cho những cô nàng cá tính'),
(9, 'Quần áo nữ', 700000, 'img/36.jpg', 'Tôn lên vẻ đẹp kiêu sa của nàng'),
(39, 'Quần áo nữ', 900000, 'img/33.jpg', 'Set đồ lí tưởng cho những cô gái hiện đại'),
(40, 'Quần áo nữ', 900000, 'img/32.jpg', 'Set đồ lí tưởng cho người con gái hiện đại'),
(43, 'Quần áo nữ', 900000, 'img/47.jpg', ' <br />\r\nNhững tín đồ yêu thích thời trang chắc hẳn không còn xa lạ với thuật ngữ streetwear, là một trong những xu hướng thời trang đã có thời kì bùng nổ và đến nay vẫn chưa có dấu hiệu hạ nhiệt, là phong cách thời trang thích hợp cho các bạn trẻ năng động ưa thích nét cá tính riêng không trộn lẫn mà vẫn đảm bảo tính thời thượng cần thiết.'),
(44, 'Quần áo nữ', 800000, 'img/20.jpg', 'Cũng nằm trong phong cách chúng mà kiểu dáng thời trang streetwear muốn hướng tới, tuy nhiên urban với nghĩa chính là đô thị, thuộc thành phố, vì vậy phong cách ăn mặc đường phố của urban streetwear tuy vẫn mang trong mình bản chất của sự bụi bặm tuy nhiên có phần thời thượng hơn.'),
(45, 'Quần áo nữ', 900000, 'img/48.jpg', 'Với cách giải thích streetwear là gì mà chúng mình đã nói bên trên, chắc hẳn các bạn đã rất ưa thích phong cách và có hứng thú với nó phải không? Ngoài ra đây đây cũng là phong cách unisex – Phong cách thời trang phi giới tính thích hợp cho cả nam và nữ, nếu muốn biến hóa nhiều style khác nhau'),
(46, 'Quần áo nữ', 900000, 'img/49.jpg', 'Bất kể bạn là một cô gái cá tính hay bánh bèo dễ thương thì cũng nên làm mới bản thân với phong cách đường phố thường nhật, bụi bặm cá tín nhưng không làm mất đi vẻ xinh đẹp và phong cách của mình. Bổ sung ngay vào list cách ăn mặc chất của mình nhé!'),
(47, 'Quần áo nữ', 900000, 'img/50.jpg', 'Sẽ chẳng có giới hạn cho những bạn ưa thích phong cách ăn mặc cá tính và cực chất, chẳng cần đến cách mix match quá cầu kì.'),
(48, 'Quần áo nữ', 700000, 'img/51.jpg', 'Những cô gái cá tính luôn mượn thời trang để nói lên tuyên ngôn riêng của bản thân họ.'),
(49, 'Quần áo nữ', 900000, 'img/52.jpg', 'Đây cũng là những trang phục khá quen thuộc trong hầu hết tủ đồ của các bạn nữ , kết hợp với 1 chiếc mũ fedora để trang phục thêm hoàn chỉnh và tự tin xuống phố thôi nào!'),
(50, 'Quần áo nữ', 900000, 'img/53.jpg', 'Bạn có thể linh hoạt và khéo léo hơn trong cách phối đồ với một chiếc áo dài tay bên trong và áo thun oversize dáng lửng bên ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loginuser`
--

CREATE TABLE `tb_loginuser` (
  `id` int(11) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_loginuser`
--

INSERT INTO `tb_loginuser` (`id`, `email`, `password`) VALUES
(1, 'a', '$2y$10$LHw7pXk3.d0y9ywDhkNNjuNZTgN/wXs.LpNTzZc8ubq'),
(2, 'a', '$2y$10$QVtF4ZB7ewGqo970NFODFeEOfJGrmk9feRhLAT4vigy'),
(3, 'ab', '$2y$10$CFA5wv.Z7.OiQoCmg3phCucqH9dD7OySJwf/R9AFeY8');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
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
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `userpass`, `email`, `fullname`, `level`, `add_date`) VALUES
(1, 'admin', 'admin', 'mainhuanlinh@gmail.com', 'mainhuanlinh', 1, '1998-08-30 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bang_dat_hang`
--
ALTER TABLE `bang_dat_hang`
  ADD PRIMARY KEY (`id`,`ngay_dat_hang`);

--
-- Indexes for table `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giatri`
--
ALTER TABLE `giatri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_loginuser`
--
ALTER TABLE `tb_loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bang_dat_hang`
--
ALTER TABLE `bang_dat_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giatri`
--
ALTER TABLE `giatri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_loginuser`
--
ALTER TABLE `tb_loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
