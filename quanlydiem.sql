-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2020 lúc 03:34 PM
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
-- Cơ sở dữ liệu: `nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachsv`
--

CREATE TABLE `danhsachsv` (
  `Tensinhvien` varchar(50) NOT NULL,
  `MSV` varchar(50) NOT NULL,
  `Lớp` varchar(50) NOT NULL,
  `Khoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsachsv`
--

INSERT INTO `danhsachsv` (`Tensinhvien`, `MSV`, `Lớp`, `Khoa`) VALUES
('Trần Đức Quảng', '1651060841', '58TH3', 'CNTT'),
('Nguyễn Quang Hải', '1651060854', '58TH3', 'CNTT'),
('Đoàn Văn Hậu ', '1651060986', '58TH3', 'CNTT'),
('Đỗ Hùng Dũng', '1651064356', '58TH3', 'CNTT'),
('Đặng Văn Lâm', '1651068543', '58TH3', 'CNTT'),
('Quế Ngọc Hải', '1651068433', '58TH3', 'CNTT'),
('Lương Xuân Trường ', '1651064321', '58TH3', 'CNTT'),
('Nguyễn Văn Toàn', '1651068233', '58TH3', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemqtrinh`
--

CREATE TABLE `diemqtrinh` (
  `Tensinhvien` varchar(50) NOT NULL,
  `MSV` int(20) NOT NULL,
  `Lop` varchar(50) NOT NULL,
  `monhoc` varchar(50) NOT NULL,
  `diemqtrinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemqtrinh`
--

INSERT INTO `diemqtrinh` (`Tensinhvien`, `MSV`, `Lop`, `monhoc`, `diemqtrinh`) VALUES
('Trần Đức Quảng', 1651060841, '58TH3', 'Đồ họa 3D', '9'),
('Nguyễn Quang Hải', 1651060854, '58TH3', 'Đồ họa 3D', '10'),
('Đoàn Văn Hậu ', 1651060986, '58TH3', 'Đồ họa 3D', '8'),
('Nguyễn Công Phượng', 1651065463, '58TH3', 'Đồ họa 3D', '7'),
('Nguyễn Văn Toàn', 1651068233, '58TH3', 'Đồ họa 3D', '8'),
('Lương Xuân Trường', 1651064321, '58TH3', 'Đồ họa 3D', '9'),
('Đỗ Hùng Dũng', 1651068475, '58TH3', 'Đồ họa 3D', '8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthi`
--

CREATE TABLE `diemthi` (
  `Tensinhvien` varchar(50) NOT NULL,
  `MSV` int(11) NOT NULL,
  `Lop` varchar(11) NOT NULL,
  `Monhoc` varchar(50) NOT NULL,
  `Diemthi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemthi`
--

INSERT INTO `diemthi` (`Tensinhvien`, `MSV`, `Lop`, `Monhoc`, `Diemthi`) VALUES
('Trần Đức Quảng', 1651069741, '58TH3', 'Học Máy', '9'),
('Nguyễn Quang Hải', 1651060987, '58TH3', 'Học Máy', '9'),
('Đoàn Văn Hậu ', 1651060986, '58TH3', 'Học Máy', '9'),
('Đỗ Hùng Dũng', 1651064356, '58TH3', 'Học Máy', '10'),
('Đặng Văn Lâm', 1651068543, '58TH3', 'Học Máy', '10'),
('Quế Ngọc Hải', 1651068433, '58TH3', 'Học Máy', '10'),
('Trần Đức Quảng', 1651060841, '58TH3', 'Đồ họa 3D', '9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `Tên giangvien` varchar(50) NOT NULL,
  `Ma giangvien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `Tên SV` varchar(50) NOT NULL,
  `MSV` int(10) NOT NULL,
  `Mã học phần` varchar(50) NOT NULL,
  `Tên học phần` varchar(50) NOT NULL,
  `Số tín chỉ` int(10) NOT NULL,
  `Điểm Qtrinh` int(10) NOT NULL,
  `Điểm thi` int(10) NOT NULL,
  `TKPH` varchar(10) NOT NULL,
  `Điểm chữ` varchar(10) NOT NULL,
  `Năm học` varchar(20) NOT NULL,
  `Học kỳ` varchar(20) NOT NULL,
  `Giai đoạn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`Tên SV`, `MSV`, `Mã học phần`, `Tên học phần`, `Số tín chỉ`, `Điểm Qtrinh`, `Điểm thi`, `TKPH`, `Điểm chữ`, `Năm học`, `Học kỳ`, `Giai đoạn`) VALUES
('Trần Đức Quảng', 1651060987, 'CSE486', 'Hệ quản trị cơ sở dữ liệu', 3, 7, 7, '7.0', 'B', '2019-2020', 'Học kỳ 1', 1),
('Trần Đức Quảng', 1651060987, 'CSE445', 'Học Máy', 3, 9, 9, '9.0', 'A', '2019-2020', 'Học kỳ 1', 1),
('Trần Đức Quảng', 1651060987, 'CSE435', 'Phân tích thiết kế hệ thống', 3, 8, 9, '8.5', 'A', '2019-2020', 'Học kỳ 1', 1),
('Trần Đức Quảng', 1651060987, 'CSE243', 'Hệ điều hành', 3, 9, 9, '9.0', 'A', '2019-2020', 'Học kỳ 1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `quyen`) VALUES
(30, 'quanghai123', 'e10adc3949ba59abbe56e057f20f883e', 0),
(31, 'hi123456', 'e10adc3949ba59abbe56e057f20f883e', 0),
(32, 'quanghai', 'e10adc3949ba59abbe56e057f20f883e', 0),
(33, 'alo123456', 'e10adc3949ba59abbe56e057f20f883e', 0),
(34, 'huongngat99', 'e10adc3949ba59abbe56e057f20f883e', 1),
(35, 'ducquang123', 'e10adc3949ba59abbe56e057f20f883e', 0),
(36, 'alo123', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diemthi`
--
ALTER TABLE `diemthi`
  ADD KEY `Tensinhvien` (`Tensinhvien`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD KEY `Tên SV` (`Tên SV`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
