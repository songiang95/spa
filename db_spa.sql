-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 12:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuahang`
--

CREATE TABLE `cuahang` (
  `id_cuahang` int(11) NOT NULL,
  `ten_cuahang` varchar(255) NOT NULL,
  `sdt_cuahang` int(11) NOT NULL,
  `email_cuahang` varchar(255) DEFAULT NULL,
  `diachi_cuahang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuahang`
--

INSERT INTO `cuahang` (`id_cuahang`, `ten_cuahang`, `sdt_cuahang`, `email_cuahang`, `diachi_cuahang`) VALUES
(1, 'Spa Magic Marvel', 934502089, '', '68 Ngô Thì Nhậm, Hai Bà Trưng, HN'),
(2, 'Spa Vân Trinh', 986318619, '', '66 Khâm Thiên, Đống Đa, HN'),
(3, 'Spa Hương', 964443636, '', 'P103, 11B, Tông Đản, Hoàn Kiếm, HN'),
(4, 'Spa Phương Uyên', 978781686, '', '412 Đê La Thành, Đống Đa, HN'),
(5, 'Spa Xinh', 917220759, '', '	84 Mai Hắc Đế, Hai Bà Trưng, HN'),
(6, 'Spa Violet', 975512079, '', '111K7 Thành Công, Ba Đình, HN'),
(7, 'Spa Sakura', 982836012, '', '	46 Nam Ngư, Hoàn Kiếm, HN'),
(8, 'TTTM Nhật Lệ', 904929333, '', '38 Hạ Đình, Thanh Xuân, HN'),
(9, 'TMV Diamond Hiếu', 948572222, '', '136 Phố Huế, Hoàn Kiếm, HN'),
(10, 'Spa VS', 975097888, '', '6 Trần Hữu Tước, Đống Đa, HN	'),
(11, 'Spa Huyền SG Beauty	', 903208427, '', '81 Láng, Đống Đa, HN	'),
(12, 'Spa Prodis Beauty	', 946661116, '', '57 Nguyễn Công Hoan , Ba Đình, HN 	'),
(13, 'Spa Thượng Hải	', 1666600256, '', 'Số 6/376 Đường Bưởi, Ba Đình, HN	'),
(14, 'Viện TM Âu Việt 	', 435553402, '', ' 25 Nguyễn Ngọc Vũ, Cầu Giấy,  HN	'),
(15, 'TMV Thanh Bình 	', 989678167, '', '23 Cửa Đông, Hoàn Kiếm, HN	'),
(16, 'Spa Tường Mỹ	', 974683666, '', '23B Quốc Tử Giám, Đống Đa, HN * ĐT: 	');

-- --------------------------------------------------------

--
-- Table structure for table `datlich`
--

CREATE TABLE `datlich` (
  `id_datlich` int(11) NOT NULL,
  `thoigian_datlich` datetime NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `ten_nguoidat` varchar(255) NOT NULL,
  `sdt_nguoidat` int(11) NOT NULL,
  `email_nguoidat` varchar(255) DEFAULT NULL,
  `diachi_nguoidat` varchar(255) DEFAULT NULL,
  `khuyenmai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id_dichvu` int(11) NOT NULL,
  `ma_dichvu` varchar(255) NOT NULL,
  `ten_dichvu` varchar(255) NOT NULL,
  `url_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id_dichvu`, `ma_dichvu`, `ten_dichvu`, `url_anh`) VALUES
(1, 'SPAMA01', 'chăm sóc mắt', 'mat.jpg'),
(2, 'SPAMUI01', 'chăm sóc mũi', 'mui.jpg'),
(3, 'SPADA', 'chăm sóc da', 'da.jpg'),
(4, 'SPAMI', 'chăm sóc mi', 'mi.jpg'),
(5, 'SPAMOI', 'chăm sóc môi', 'moi.jpg'),
(6, 'SPATOC', 'chăm sóc tóc', 'toc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoidap`
--

CREATE TABLE `hoidap` (
  `id_hoidap` int(11) NOT NULL,
  `khuyenmai_id` int(11) NOT NULL,
  `cauhoi` varchar(255) NOT NULL,
  `dapan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `cuahang_id` int(11) NOT NULL,
  `tieude_km` varchar(255) DEFAULT NULL,
  `noidung_km` varchar(255) DEFAULT NULL,
  `gia_km` float(255,0) NOT NULL,
  `muc_km` int(255) DEFAULT NULL,
  `soluong_km` int(255) DEFAULT NULL,
  `thoigiantu` datetime NOT NULL,
  `thoigianden` datetime DEFAULT NULL,
  `tinhtrang_km` varchar(255) DEFAULT NULL,
  `dichvu_id` int(11) NOT NULL,
  `giagoc` float(255,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_khuyenmai`, `cuahang_id`, `tieude_km`, `noidung_km`, `gia_km`, `muc_km`, `soluong_km`, `thoigiantu`, `thoigianden`, `tinhtrang_km`, `dichvu_id`, `giagoc`) VALUES
(1, 1, 'khuyến mại chăm sóc da', 'Khuyến mại chăm sóc da từ cơ bản đến chuyên sâu với các sản phẩm của Pháp', 0, 30, 3, '2018-06-01 15:15:58', '2018-06-03 15:16:05', 'hết', 1, 1000000),
(2, 1, 'Khuyến mại trị sẹo lõm', 'Khuyến mại trị sẹo lõm từ 10 - 20%, đây là cơ hội trị triệt để sẹo lõm bằng công nghệ 5D với chi phí thấp nhất, có nhiều phần quà hấp dẫn', 0, 45, 0, '2018-06-12 15:17:27', '2018-06-30 15:17:32', 'đang diễn ra', 1, 1500000),
(3, 3, 'Trị tàn nhang - Khuyến mại lớn', 'Chương trình Khuyến Mại 20% cho dịch vụ Trị Tàn nhang từ 25 - 04 - 2018 đến hết 05 - 05 - 2018 Khuyến mại trị tàn nhang, đây là cơ hội trị sạch tàn nhang 99% với chi phí thấp nhất, với nhiều phần quà có giá trị', 0, 20, 0, '2018-06-12 15:19:38', '2018-06-21 15:19:43', '', 3, 1000000),
(4, 2, 'Belas Spa ưu đãi đến 60% phí triệt lông và tắm trắng', 'Kỷ niệm sinh nhật lần thứ 2 của Belas chi nhánh Đà Nẵng, Belas dành tặng 2 chương trình ưu đãi cực kỳ hấp dẫn cho 2 dịch vụ HOT nhất và được khách hàng quan tâm nhiều nhất trong thời gian qua.', 0, 20, 50, '2018-06-05 15:22:28', '2018-06-15 15:22:33', '', 3, 2000000),
(5, 4, 'Ưu đãi lớn cho dịch vụ xoá sẹo, thâm', 'Từ 08/11 – 25/11/2015, hệ thống Belas Spa tại Tp.HCM và Đà Nẵng sẽ dành ưu đãi lên đến 40% cho các bạn khi đến Belas điều trị sẹo mụn trứng cá bằng công nghệ lăn kim tế bào gốc.', 0, 35, 20, '2018-06-19 15:23:48', '2018-06-21 15:23:52', '', 3, 2500000),
(6, 0, 'DỊCH VỤ TẮM TRẮNG', 'Tết Nguyên Đán đang đến gần, tắm trắng là một trong những dịch vụ được các chị em săn đón nhiều nhất. Tắm trắng tại nhà thường không mấy hiệu quả, chưa kể đến những ảnh hưởng tiêu cực do việc dùng sai cách cũng như sử dụng những sản phẩm không rõ nguồn gố', 0, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 3, 1500000),
(7, 0, 'Tắm trắng Milk Nano White của Mỹ', 'Đây là hình thức tẩy tế da chết kết hợp với chế độ chăm sóc da đặc biệt cho sức khỏe và dinh dưỡng của làn da.Các dưỡng chất Nano trong phương pháp này sẽ làm chậm lại quá trình lão hóa của làn da, giúp xóa bỏ nếp nhăn và khiến da trắng hồng tự nhiên.', 0, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 3, 1500000),
(8, 0, 'Tắm trắng yến mạch sữa tươi', 'Yến mạch được xem là một siêu phẩm của thiện nhiên, từ lâu đã được khoa học chứng minh có chứa nhiều dinh dưỡng quan trọng có khả năng làm trắng, chăm sóc sắc đẹp và ngăn ngừa lão hóa. Yến mạch kết hợp với sữa tươi là một trong những phương pháp tắm trắng', 0, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 3, 1800000),
(9, 0, 'Tắm trắng thảo dược Nhật Bản', 'Thành phần tự nhiên an toàn là đặc trưng của mỹ phẩm Nhật Bản và cũng là điều kiện tiên quyết cho liệu trình tắm trắng bằng thảo dược Nhật Bản tại Belas Spa. Trong thảo dược Nhật Bản này chứa nhiều tinh chất Aloe Vera Cucumber làm mềm mịn da, Vitamin E, V', 0, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 3, 2200000);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai_daxem`
--

CREATE TABLE `khuyenmai_daxem` (
  `id_khuyenmai_daxem` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `khuyenmai_id` int(11) NOT NULL,
  `ngayxem_km` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyenmai_daxem`
--

INSERT INTO `khuyenmai_daxem` (`id_khuyenmai_daxem`, `nguoidung_id`, `khuyenmai_id`, `ngayxem_km`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 1, 3, NULL),
(4, 1, 4, NULL),
(5, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai_url`
--

CREATE TABLE `khuyenmai_url` (
  `id_urlkhuyenmai` int(11) NOT NULL,
  `khuyenmai_id` int(11) NOT NULL,
  `url_anh_km` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khuyenmai_url`
--

INSERT INTO `khuyenmai_url` (`id_urlkhuyenmai`, `khuyenmai_id`, `url_anh_km`) VALUES
(1, 1, '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `id_loainguoidung` tinyint(1) NOT NULL,
  `ma_loai_user` varchar(10) NOT NULL,
  `ten_loai_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loainguoidung`
--

INSERT INTO `loainguoidung` (`id_loainguoidung`, `ma_loai_user`, `ten_loai_user`) VALUES
(1, 'KH', 'Khách hàng'),
(2, 'CH', 'Cửa hàng');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `user_nguoidung` varchar(255) NOT NULL,
  `password_nguoidung` varchar(255) NOT NULL,
  `email_nguoidung` varchar(255) NOT NULL,
  `sdt_nguoidung` int(11) NOT NULL,
  `diachi_nguoidung` varchar(255) DEFAULT NULL,
  `loainguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `user_nguoidung`, `password_nguoidung`, `email_nguoidung`, `sdt_nguoidung`, `diachi_nguoidung`, `loainguoidung_id`) VALUES
(1, 'Nguyễn Thị Uyên', 'uyen123', 'uyen@gmail.com', 1225282074, 'Hà Nội', 1),
(2, 'Nguyễn Thanh Tâm', 'tam123', 'tam@gmail.com', 976611687, 'Hà Nội', 1),
(3, 'Nguyễn Văn Hùng', 'hung123', 'hung@gmail.com', 975569858, 'Hải Phòng', 2),
(4, 'Nguyễn Thị Mùa', 'mua123', 'mua@gmail.com', 1657007576, 'Hà Nội', 2),
(5, 'Đỗ Khắc Chiến', 'chien123', 'chien@gmail.com', 1692127174, 'Thái Bình', 2),
(6, 'Nguyễn Thị Tuyết', 'tuyet123', 'tuyet@gmail.com', 936035966, 'Nam Định', 1),
(7, 'Phạm Thị Hoa', 'hoa123', 'hoa@gmail.com', 984493243, 'Hải Dương', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhanxet`
--

CREATE TABLE `nhanxet` (
  `id_nhanxet` int(11) NOT NULL,
  `khuyenmai_id` int(11) NOT NULL,
  `danhgia_sao` int(5) DEFAULT NULL,
  `noidung_nhanxet` varchar(255) DEFAULT NULL,
  `nguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanxet`
--

INSERT INTO `nhanxet` (`id_nhanxet`, `khuyenmai_id`, `danhgia_sao`, `noidung_nhanxet`, `nguoidung_id`) VALUES
(1, 1, 4, NULL, 1),
(2, 2, 4, NULL, 2),
(3, 3, 4, 'tốt', 3),
(4, 1, 4, 'dùng được', 2),
(5, 1, 5, 'rất tốt', 3),
(6, 2, 3, 'tạm được', 3),
(7, 4, 5, NULL, 5),
(8, 4, 5, NULL, 1),
(9, 5, 3, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `id_quangcao` int(11) NOT NULL,
  `mota_quangcao` varchar(255) DEFAULT NULL,
  `cuahang_id` int(11) NOT NULL,
  `vitri_quangcao` int(10) NOT NULL,
  `url_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`id_quangcao`, `mota_quangcao`, `cuahang_id`, `vitri_quangcao`, `url_anh`) VALUES
(1, 'quảng cáo banner chính', 0, 1, 'quangcao1.jpg'),
(2, 'quảng cao', 0, 1, 'quangcao2.jpg'),
(3, 'quang cáo đầu', 0, 2, 'quangcao3.jpg'),
(4, 'quảng cáo thứ', 0, 3, 'quangcao4.jpg'),
(5, 'quảng cáo 3', 0, 4, 'quangcao5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude_tintuc` varchar(255) DEFAULT NULL,
  `noidung_tin` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`id_cuahang`);

--
-- Indexes for table `datlich`
--
ALTER TABLE `datlich`
  ADD PRIMARY KEY (`id_datlich`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id_dichvu`);

--
-- Indexes for table `hoidap`
--
ALTER TABLE `hoidap`
  ADD PRIMARY KEY (`id_hoidap`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Indexes for table `khuyenmai_daxem`
--
ALTER TABLE `khuyenmai_daxem`
  ADD PRIMARY KEY (`id_khuyenmai_daxem`);

--
-- Indexes for table `khuyenmai_url`
--
ALTER TABLE `khuyenmai_url`
  ADD PRIMARY KEY (`id_urlkhuyenmai`);

--
-- Indexes for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`id_loainguoidung`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD UNIQUE KEY `email_nguoidung` (`email_nguoidung`);

--
-- Indexes for table `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD PRIMARY KEY (`id_nhanxet`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id_quangcao`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `id_cuahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `datlich`
--
ALTER TABLE `datlich`
  MODIFY `id_datlich` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id_dichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hoidap`
--
ALTER TABLE `hoidap`
  MODIFY `id_hoidap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khuyenmai_daxem`
--
ALTER TABLE `khuyenmai_daxem`
  MODIFY `id_khuyenmai_daxem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khuyenmai_url`
--
ALTER TABLE `khuyenmai_url`
  MODIFY `id_urlkhuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanxet`
--
ALTER TABLE `nhanxet`
  MODIFY `id_nhanxet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id_quangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
