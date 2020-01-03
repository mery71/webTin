-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2018 lúc 09:07 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cualac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cnpm`
--

CREATE TABLE `cnpm` (
  `idcnpm` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bangcap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cnpm`
--

INSERT INTO `cnpm` (`idcnpm`, `ten`, `bangcap`, `quequan`, `sdt`) VALUES
(1, 'Lê Thanh Hiếu', 'Tiến sĩ', 'Huế', '01656312546'),
(2, 'Lê Phước Nam Hà', 'Thạc sĩ', 'Huế', '01656312546'),
(3, 'Nguyễn Thị Hương Giang', 'Thạc sĩ', 'Huế', '01656312546'),
(4, 'Đoàn Hồ Anh Triết', NULL, 'Huế', '01656312546');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `mal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenl` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`mal`, `tenl`) VALUES
('tin1', 'Tin1A'),
('tin2', 'Tin2A'),
('tin3.1', 'Tin 3A'),
('tin3.2', 'Tin 3B'),
('tin4', 'Tin 4A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mang`
--

CREATE TABLE `mang` (
  `idmang` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bangcap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mang`
--

INSERT INTO `mang` (`idmang`, `ten`, `bangcap`, `quequan`, `sdt`) VALUES
(1, 'Phù Đôn Hậu', 'Thạc sĩ', 'Huế', '0915013548'),
(2, 'Hồ Thị Kim Thoa', 'Thạc sĩ', 'Huế', '0915013548'),
(3, 'Võ Thị Thu Sang', 'Thạc sĩ', 'Huế', '0915013548'),
(4, 'Võ Phước Thăng', 'Thạc sĩ', 'Huế', '0915013548'),
(5, 'Nguyễn Văn Khang', 'Thạc sĩ', 'Huế', '0915013548');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mt`
--

CREATE TABLE `mt` (
  `idmt` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bangcap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mt`
--

INSERT INTO `mt` (`idmt`, `ten`, `bangcap`, `quequan`, `sdt`) VALUES
(1, 'Nguyễn Thị Lan Anh', 'Tiến sĩ', 'Huế', '01656312546'),
(2, 'Trần Hoài Nhân', 'Thạc sĩ', 'Huế', '01682981393'),
(3, 'Nguyễn Lê Trung Thành', 'Thạc sĩ', 'Huế', '0915013548'),
(4, 'Đinh Thị Diệu Minh', 'Thạc sĩ', 'Huế', '01662413590'),
(5, 'Vĩnh Anh Nghiêm Quân', NULL, NULL, '0976539879');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `tenlop` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masv` varchar(45) COLLATE ucs2_unicode_ci NOT NULL,
  `tensv` varchar(45) COLLATE ucs2_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(45) COLLATE ucs2_unicode_ci DEFAULT NULL,
  `quequan` varchar(45) COLLATE ucs2_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`tenlop`, `masv`, `tensv`, `ngaysinh`, `gioitinh`, `quequan`) VALUES
('Tin3A', '15S1021021', 'Nguyễn Võ Thái Ngân', '1997-03-22', 'nữ', 'Quảng nam'),
('Tin3A', '15S1021022', 'Nguyễn Thị Tý', '1997-08-20', 'nữ', 'Quảng Ngãi'),
('Tin3A', '15S1021024', 'Ngô Thị lạc', '1997-03-22', 'nữ', 'Huế'),
('Tin3A', '15S1021025', 'Trần Quang Tân', '1997-08-20', 'nam', 'Quảng Trị'),
('Tin3A', '15S1021026', 'Huỳnh Văn Thùy', '1997-03-22', 'nam', 'Quảng nam'),
('Tin3B', '15S1021027', 'Nguyễn Đăng Phong', '1997-03-22', 'nam', 'Huế'),
('Tin3B', '15S1021028', 'Nguyễn Thị Si', '1997-08-20', 'nữ', 'Huế'),
('Tin3B', '15S1021029', 'Nguyễn Duy Cường', '1997-03-22', 'nam', 'Quảng Nam'),
('Tin3B', '15S1021030', 'Lê Kim Long', '1997-08-20', 'nam', 'Quảng Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien1`
--

CREATE TABLE `sinhvien1` (
  `masv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lop_mal` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien1`
--

INSERT INTO `sinhvien1` (`masv`, `hoten`, `ngaysinh`, `gioitinh`, `quequan`, `lop_mal`) VALUES
('15S1021023', 'NGuyễn Thị Tý', '20/8/1997', 'nữ', 'Quảng Ngãi', 'tin3.1'),
('15S1021024', 'Trần Quang Tân', '1/6/1997', 'nam', 'Quảng Trị', 'tin3.2'),
('15S1021025', 'HUỳnh Văn Thùy', '2/4/1997', 'nam', 'Quảng Nam', 'tin3.2'),
('15S1021026', 'Nguyễn ĐĂng Phong', '07/01/1997', 'nam', 'Huế', 'tin3.2'),
('15S1021027', 'Nguyễn Võ Thái Ngân', '22/6/1997', 'nữ', 'Quãng Nam', 'tin3.1'),
('15S1021028', 'Nguyễn Thị Si', '22/6/1997', 'nữ', 'Huế', 'tin3.2'),
('15S1021029', 'Ngô Thị Lạc', '07/01/1997', 'nữ', 'Huế', 'tin3.1'),
('15S1021030', 'Nguyễn Duy Cường', '2/4/1997', 'nam', 'Quảng Nam', 'tin3.2'),
('15S1021031', 'Nguyễn Văn A', '22/6/1997', 'nam', 'Huế', 'tin1'),
('15S1021032', 'Nguyễn Văn B', '2/4/1997', 'nam', 'Quảng Bình', 'tin1'),
('15S1021034', 'Trần Thị Tú Linh', '20/3/1997', 'nữ', 'Quảng Trị', 'tin2'),
('15S1021035', 'Nguyễn Thị Mỹ Linh', '16/6/1997', 'nữ', 'Quảng Bình', 'tin2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) UNSIGNED NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `hoten`, `email`) VALUES
(1, 'laclac', '1234', 'Ngô Thị Lạc', 'lac71@gmail.com'),
(2, 'nganngan', '12345', 'Nguyễn Võ Thái Ngân', 'ngan12345@gmail.com'),
(3, 'tyty', '0101', 'Nguyễn Thị Tý', 'ty97@gmail.com'),
(4, 'susu', '22222', 'Lê Thị Mỹ Linh', 'su112gmail.com'),
(5, 'heo', '1212', 'Nguyễn Thị Si', 'sisi@gmail.com'),
(10, 'thuy', '123456', 'Huỳnh Văn Thùy', 'thuy97@gmail.com'),
(11, 'tom', '1111', 'Nguyễn Quang Minh', 'tom@gmail');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cnpm`
--
ALTER TABLE `cnpm`
  ADD PRIMARY KEY (`idcnpm`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`mal`);

--
-- Chỉ mục cho bảng `mang`
--
ALTER TABLE `mang`
  ADD PRIMARY KEY (`idmang`);

--
-- Chỉ mục cho bảng `mt`
--
ALTER TABLE `mt`
  ADD PRIMARY KEY (`idmt`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);

--
-- Chỉ mục cho bảng `sinhvien1`
--
ALTER TABLE `sinhvien1`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `fk_Sinh viên_lop_idx` (`lop_mal`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sinhvien1`
--
ALTER TABLE `sinhvien1`
  ADD CONSTRAINT `fk_Sinh viên_lop` FOREIGN KEY (`lop_mal`) REFERENCES `lop` (`mal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
