-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 15, 2020 lúc 06:23 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Mid-Test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `MaLop` varchar(50) NOT NULL,
  `TenLopHoc` text NOT NULL,
  `GiaoVien` text NOT NULL,
  `LichHoc` varchar(100) NOT NULL,
  `HocPhi` smallint(100) NOT NULL,
  `NgayBatDau` varchar(50) NOT NULL,
  `NgayKetThuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`MaLop`, `TenLopHoc`, `GiaoVien`, `LichHoc`, `HocPhi`, `NgayBatDau`, `NgayKetThuc`) VALUES
('e023', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 600, '', ''),
('e024', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e025', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e026', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e027', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e028', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e029', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e030', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', ''),
('e031', 'lop tieng anh giao tiep danh cho hoc sinh lua tuoi tieu hoc', 'Phan Thanh Binh', '2020-10-05', 500, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
