-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2021 lúc 06:12 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `contact`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unit`
--

CREATE TABLE `unit` (
  `idUnit` int(11) NOT NULL,
  `nameUnit` varchar(100) NOT NULL,
  `phoneWork` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `unit`
--

INSERT INTO `unit` (`idUnit`, `nameUnit`, `phoneWork`, `address`, `email`, `website`, `parentId`) VALUES
(6, 'Khoa công nghệ thông tin 100', '(+84) 024 3 5632211', 'nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'vpkcntt@tlu.edu.vn', 'http://ce.tlu.edu.vn', 0),
(7, 'Khoa công nghệ thông tin', '(+84) 024 3 5632211', 'nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'vpkcntt@tlu.edu.vn', 'http://ce.tlu.edu.vn', 0),
(8, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(9, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(10, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(11, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(12, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(13, 'Khoa kĩ thuật tài nguyên nước', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0),
(14, 'Khoa kĩ thuật tài nguyên nước 1', '04 3852 8026', 'P.305 A1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội', 'KhoaN@tlu.edu.vn', 'http://kttnn.tlu.edu.vn/', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phoneWork` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idUnit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullName`, `role`, `phoneWork`, `phone`, `email`, `idUnit`) VALUES
(16, 'Phùng Thế Việt 1', 'Sinh Viên', '(+84)-024 3 5632299', '0926823391', 'vietkaka9x@gmail.com', 6),
(19, 'Nguyễn Văn Bình', 'Sinh Viên', '04 3852 8026', ' (04) 3853.308', 'binh99@gmail.com', 6),
(20, 'Nguyễn Văn Bình', 'Sinh Viên', '04 3852 8026', ' (04) 3853.308', 'binh99@gmail.com', 6),
(21, 'Nguyễn Văn Tỉnh', 'Sinh Viên', '(+84)-024 3 5632299', '09626454565', 'Maimon0512@gmail.com', 6),
(22, 'Nguyễn Văn Tỉnh', 'Sinh Viên', '(+84)-024 3 5632299', '09626454565', 'Maimon0512@gmail.com', 6),
(23, 'Võ Thị Sáu', 'Sinh Viên', '09548563267', '0546795136', 'abc@gmail.com', 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`idUnit`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userdepartment_fk` (`idUnit`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `unit`
--
ALTER TABLE `unit`
  MODIFY `idUnit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
