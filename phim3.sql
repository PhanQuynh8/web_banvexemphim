-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 10:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phim3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chinhanh`
--

CREATE TABLE `tbl_chinhanh` (
  `tenchinhanh` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_chinhanh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `linkdiachi` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chinhanh`
--

INSERT INTO `tbl_chinhanh` (`tenchinhanh`, `diachi`, `id_chinhanh`, `linkdiachi`) VALUES
('Rạp Sư Vạn Hạnh', '44,đường sư vạn hạnh, quận 10, TPHCM', 'CN1', 'https://www.google.com/maps/place/44+S%C6%B0+V%E1%BA%A1n+H%E1%BA%A1nh,+Ph%C6%B0%E1%BB%9Dng+9,+Qu%E1%BA%ADn+5,+Th%C3%A0nh+ph%E1%B'),
('Rạp 3 tháng 2', '256, đường 3 tháng 2, quận 10, TPHCM', 'CN2', 'https://www.google.com/maps/place/256+%C4%90.+3%2F2,+Ph%C6%B0%E1%BB%9Dng+12,+Qu%E1%BA%ADn+10,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7708217,106.670363,17z/data=!3m1!4b1!4m5!3m4!1s0x31752ede45983ec9:0x8af6e843dc3f22f!8m2!3d10.7708164!4d106.6725517'),
('Rạp cao thắng', '132, cao thắng, quận 3, TPHCM', 'CN3', 'https://www.google.com/maps/place/132+%C4%90.+Cao+Th%E1%BA%AFng,+Ph%C6%B0%E1%BB%9Dng+4,+Qu%E1%BA%ADn+3,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7726475,106.6772047,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f2120259491:0x881adc5a6087b28d!8m2!3d10.7726422!4d106.6793934');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lichchieu`
--

CREATE TABLE `tbl_lichchieu` (
  `id_lichchieu` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `giochieu` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_phim` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_chinhanh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_ngay` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lichchieu`
--

INSERT INTO `tbl_lichchieu` (`id_lichchieu`, `giochieu`, `id_phim`, `rap`, `id_chinhanh`, `id_ngay`) VALUES
('LC01', '08:40', 'MV01', '1', 'CN1', 'NG1'),
('LC02', '15:30', 'MV02', '1', 'CN1', 'NG1'),
('LC03', '20:30', 'MV03', '1', 'CN1', 'NG1'),
('LC04', '8:30', 'MV04', '2', 'CN1', 'NG1'),
('LC05', '14:30', 'MV05', '2', 'CN1', 'NG1'),
('LC06', '23:59', 'MV06', '2', 'CN1', 'NG1'),
('LC07', '9:00', 'MV07', '3', 'CN1', 'NG1'),
('LC08', '16:20', 'MV08', '3', 'CN1', 'NG1'),
('LC09', '19:50', 'MV01', '3', 'CN1', 'NG1'),
('LC10', '8:35', 'MV02', '1', 'CN2', 'NG1'),
('LC11', '15:50', 'MV03', '1', 'CN2', 'NG1'),
('LC12', '19:40', 'MV04', '1', 'CN2', 'NG1'),
('LC13', '9:00', 'MV05', '2', 'CN2', 'NG1'),
('LC14', '16:00', 'MV06', '2', 'CN2', 'NG1'),
('LC15', '20:00', 'MV07', '2', 'CN2', 'NG1'),
('LC16', '9:10', 'MV08', '3', 'CN2', 'NG1'),
('LC17', '17:00', 'MV01', '3', 'CN2', 'NG2'),
('LC18', '21:00', 'MV02', '3', 'CN2', 'NG2'),
('LC19', '9:50', 'MV03', '1', 'CN3', 'NG2'),
('LC20', '16:50', 'MV04', '1', 'CN3', 'NG2'),
('LC21', '20:10', 'MV05', '1', 'CN3', 'NG2'),
('LC22', '10:10', 'MV06', '2', 'CN3', 'NG2'),
('LC23', '17:50', 'MV07', '2', 'CN3', 'NG2'),
('LC24', '23:50', 'MV08', '2', 'CN3', 'NG2'),
('LC25', '10:00', 'MV02', '3', 'CN3', 'NG2'),
('LC26', '22:30', 'MV05', '3', 'CN3', ''),
('LC27', '22:10', 'MV07', '3', 'CN3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `id_phim` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenphim` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `daodien` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `dienvien` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `khoichieu` date NOT NULL,
  `thoiluong` int(50) NOT NULL,
  `trailer` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrangphim` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`id_phim`, `tenphim`, `hinhanh`, `phanloai`, `daodien`, `dienvien`, `theloai`, `khoichieu`, `thoiluong`, `trailer`, `tinhtrangphim`) VALUES
('MV01', 'NOPE', 'https://image.thanhnien.vn/w1024/Uploaded/2022/ygtmjz/2022_02_13/nope-8695.jpg\r\n', 'PHIM DÀNH CHO KHÁN GIẢ TỪ 16 TUỔI TRỞ LÊN', 'Peele Jordan\r\n', 'Daniel Kaluuya, Palmer Keke , Brandon Perea\r\n', 'Kinh dị\r\n', '2022-08-12', 141, 'https://www.youtube.com/watch?v=CaIYD369OJI', 'dangchieu'),
('MV02', '\r\nHẠ CÁNH KHẨN CẤP', '\r\nhttps://media.yeah1.com/files/thientruc/2022/08/10/axc8iny-094509.jpg', 'PHIM DÀNH CHO KHÁN GIẢ TỪ 16 TUỔI TRỞ LÊN\r\n\r\n', 'Jae-rim Han, Lee Byung-hun, Jeon Do-yeon', '\r\nSong Kang-ho, Lee Byung-hun, Jeon Do-yeon, Kim Nam-Gil và Yim Si-wan, Park Hae-Joon', '\r\nHành động, tâm lý', '2022-08-26', 131, 'https://www.youtube.com/watch?v=d-1yppQlMN4', 'dangchieu'),
('MV03', 'VÔ DIỆN SÁT NHÂN', 'https://metiz.vn/media/poster_film/900wx1350h-vdsn_1_.jpg', 'PHIM DÀNH CHO KHÁN GIẢ TỪ 18 TUỔI TRỞ LÊN', 'Dinh Cong Hieu', 'Phuong Anh Dao, Quach Ngoc Tuyen, Oanh Kieu', 'Kinh dị', '2022-09-20', 90, 'https://www.youtube.com/watch?v=KgMmy31o-OE', 'dangchieu'),
('MV04', 'MÔN PHÁI VÕ MÈO', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/pof-poster_ch_nh_th_c_1_.jpg', 'PHIM DÀNH CHO MỌI LỨA TUỔI', 'Chris Bailey, Mark Koetsier, Rob Minkoff', 'Samuel L. Jackson, Michale Cera. …….', 'Hoạt hình', '2022-09-29', 100, 'https://www.youtube.com/watch?v=NlUpQfyECzU', 'dangchieu'),
('MV05', 'DRAGON BALL SUPER: SUPER HERO', 'https://ecdn.game4v.com/g4v-content/uploads/2021/12/15094716/Dragon-Ball-Super-Super-Hero-1639536435-20.jpg', '-PHIM DÀNH CHO KHÁN GIẢ TỪ 13 TUỔI TRỞ LÊN', 'Tetsuro Kodama', 'Zach Aguilar, Kara Edwards, Toshio Furukawa', 'Hoạt hình', '2022-10-11', 100, 'https://www.youtube.com/watch?v=JAV_YRopxYs', 'dangchieu'),
('MV06', 'DÂN CHƠI KHÔNG SỢ CON RƠI:', 'https://www.cgv.vn/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/d/c/dckscr_teaser_poster_resz.jpg', '-PHIM DÀNH CHO KHÁN GIẢ TỪ 13 TUỔI TRỞ LÊN', 'Huỳnh Đông', 'Vân Trang, Tiến Luật, bé Bảo Thi', ' Hài, Tâm lý', '2022-09-12', 100, 'https://www.youtube.com/watch?v=2BOCZ5ax5qk', 'dangchieu'),
('MV07', 'DUYÊN MA', 'https://img.cdn.vncdn.io/cinema/img/80288412176661530-3.jpg', '-PHIM DÀNH CHO KHÁN GIẢ TỪ 16 TUỔI TRỞ LÊN', 'Khanh Toan – Tam nguyen', 'KIEU MINH TUAN, NGOC TRINH', 'Hài, kinh dị, tình cảm', '2022-09-16', 96, 'https://www.youtube.com/watch?v=36OZrznG_pY', 'dangchieu'),
('MV08', 'HANSAN: THE EMERGENCE OF DRAGON', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d5/Hansan_%28film%29.jpg/220px-Hansan_%28film%29.jpg', '-PHIM DÀNH CHO KHÁN GIẢ TỪ 16 TUỔI TRỞ LÊN', 'Han-min Kim', 'Park Hae-il, Yo-Han Byun, Sung-Ki Ahn', 'Hành động', '2022-09-30', 129, '-https://www.youtube.com/watch?v=a7RGWeaTLmg', 'dangchieu'),
('MV09', 'FEARLESS LOVE', 'http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002551?referenceScheme=HeadOffice&allowPlaceHolder=true&hei', '-PHIM DÀNH CHO KHÁN GIẢ TỪ 16 TUỔI TRỞ LÊN', 'Worrawech Danuwong', '\r\nPattie Ungsumalynn Sirapatsakmetha, Dan Worrawech Danuwong, Beam Kawee Tanjararak', 'Kinh Dị, Hài, Lãng Mạn', '2022-11-15', 121, 'https://www.youtube.com/watch?v=V_nHpkHYCzE', 'sapchieu'),
('MV10', 'AROUND THE WORLD IN 80 DAYS', 'http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002546?referenceScheme=HeadOffice&allowPlaceHolder=true&hei', 'PHIM PHỔ BIẾN CHO MỌI LỨA TUỔI', 'Samuel Tourneux', 'Damien Frette, Jules Verne', 'Hoạt Hình', '2022-11-09', 121, 'https://www.youtube.com/watch?v=v-LSUYu4HxQ', 'sapchieu'),
('MV11', 'HUNT', 'http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002484?referenceScheme=HeadOffice&allowPlaceHolder=true&hei', 'PHIM DÀNH CHO KHÁN GIẢ TỪ 18 TUỔI TRỞ LÊN', 'Lee Jung Jae', 'Jung Jae Lee, Jung Woo Sung', 'Hành Động', '2022-11-11', 121, 'https://www.youtube.com/watch?v=1RLlCg-LFKI', 'sapchieu'),
('MV12', '\r\nBLACK PANTHER II', 'http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002542?referenceScheme=HeadOffice&allowPlaceHolder=true&hei', ' PHIM DÀNH CHO KHÁN GIẢ TỪ 13 TUỔI TRỞ LÊN', 'Martin Freeman, Chadwick Boseman', ' Letitia Wright, Lupita Nyong\'o, Danai Gurira, Winston Duke, Dominique Thorne, Florence Kasumba, Michaela Coel, Tenoch Huerta, Martin Freeman và Angela Bassett.', 'Hành Động', '2022-11-25', 121, 'https://www.youtube.com/watch?v=_Z3QKkl1WyM', 'sapchieu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngay`
--

CREATE TABLE `tbl_ngay` (
  `id_ngay` varchar(5) NOT NULL,
  `ngay` date NOT NULL,
  `thu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ngay`
--

INSERT INTO `tbl_ngay` (`id_ngay`, `ngay`, `thu`) VALUES
('NG1', '2022-11-14', 'Thứ 2'),
('NG10', '2022-11-23', 'thứ 4'),
('NG11', '2022-11-24', 'thứ 5'),
('NG12', '2022-11-25', 'thứ 6'),
('NG13', '2022-11-26', 'thứ 7'),
('NG14', '2022-11-27', 'Chủ nhật'),
('NG15', '2022-11-28', 'Thứ 2'),
('NG2', '2022-11-15', 'thứ 3'),
('NG3', '2022-11-16', 'thứ 4'),
('NG4', '2022-11-17', 'thứ 5'),
('NG5', '2022-11-18', 'thứ 6'),
('NG6', '2022-11-19', 'thứ 7'),
('NG7', '2022-11-20', 'Chủ nhật '),
('NG8', '2022-11-21', 'Thứ 2'),
('NG9', '2022-11-22', 'thứ 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id_ve` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_phim` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_lichchieu` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ghe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluongve` int(11) NOT NULL,
  `soluongbap` int(11) NOT NULL,
  `soluongnuoc` int(11) NOT NULL,
  `tongtien` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`id_ve`, `id_user`, `id_phim`, `id_lichchieu`, `ghe`, `soluongve`, `soluongbap`, `soluongnuoc`, `tongtien`) VALUES
('VE001', 'KH01', 'MV01', 'LC09', 'A-5', 1, 1, 2, 340000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenuser` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(128) NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `tenuser`, `taikhoan`, `matkhau`, `sdt`, `email`) VALUES
('KH01', 'Phan Như Quỳnh', 'quynh123', '123456a', 374652123, 'quynhphan11@gmail.com'),
('KH02', 'Phạm Văn Hùng', 'hung12d', '123456a', 374652123, 'hungpham2311@gmail.com'),
('KH03', 'Văn Tuấn Kiệt', 'kiet123', '123456a', 374652123, 'kiet123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chinhanh`
--
ALTER TABLE `tbl_chinhanh`
  ADD PRIMARY KEY (`id_chinhanh`);

--
-- Indexes for table `tbl_lichchieu`
--
ALTER TABLE `tbl_lichchieu`
  ADD PRIMARY KEY (`id_lichchieu`),
  ADD KEY `id_phim` (`id_phim`),
  ADD KEY `id_chinhanh` (`id_chinhanh`);
ALTER TABLE `tbl_lichchieu` ADD FULLTEXT KEY `id_phim_2` (`id_phim`);

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`id_phim`);

--
-- Indexes for table `tbl_ngay`
--
ALTER TABLE `tbl_ngay`
  ADD PRIMARY KEY (`id_ngay`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id_ve`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_phim` (`id_phim`),
  ADD KEY `id_lichchieu` (`id_lichchieu`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lichchieu`
--
ALTER TABLE `tbl_lichchieu`
  ADD CONSTRAINT `tbl_lichchieu_ibfk_1` FOREIGN KEY (`id_phim`) REFERENCES `tbl_movie` (`id_phim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
