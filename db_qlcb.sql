-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2018 lúc 05:34 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlcb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_egn`
--

CREATE TABLE `tbl_egn` (
  `egn_id` int(11) NOT NULL,
  `eng_name` text NOT NULL,
  `eng_date` text NOT NULL,
  `eng_gender` text NOT NULL,
  `eng_adress` text NOT NULL,
  `eng_train` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_egn`
--

INSERT INTO `tbl_egn` (`egn_id`, `eng_name`, `eng_date`, `eng_gender`, `eng_adress`, `eng_train`) VALUES
(1, 'kỹ sư 1', '1/1/2015', 'Nữ ', 'Cầu Giấy-Hà Nội', 'CNTT'),
(2, 'kỹ sư 2', '1/1/2016', 'nam', 'Từ Liêm - Hà Nội', 'cơ khí'),
(3, 'kỹ sư3', '1/8/2014', 'nam', 'Hà Nội', 'CNTT'),
(4, 'Kỹ sư 3', '2018-12-09', 'Nam', 'Hà Nội\r\n				', 'CNTT'),
(5, 'Kỹ sư 3', '2018-12-23', 'Nam', 'Hà Nội\r\n				', 'CNTT'),
(6, 'Kỹ sư 3', '2018-12-23', 'Nam', 'Hà Nội\r\n				', 'CNTT'),
(7, 'Kỹ sư 3', '2018-12-02', 'Nam', 'Hà Nội\r\n				', 'CNTT'),
(8, 'Kỹ sư 4', '2018-12-30', 'Nam', 'Hà Nội\r\n				', 'CNTT'),
(9, 'Kỹ sư 5', '2018-12-09', 'Nam', 'Hà Nội\r\n				', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `empl_id` int(11) NOT NULL,
  `empl_name` text NOT NULL,
  `empl_date` text NOT NULL,
  `empl_gender` text NOT NULL,
  `empl_adress` text NOT NULL,
  `empl_job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_employees`
--

INSERT INTO `tbl_employees` (`empl_id`, `empl_name`, `empl_date`, `empl_gender`, `empl_adress`, `empl_job`) VALUES
(1, 'nhân viên 1', '', 'nữ', 'Xuân Thủy-Hà Nội', 'lập trình'),
(2, 'nhân viên 2', '', 'nam', 'Thanh Xuân - Hà Nội', 'thiết kế'),
(3, 'nhanvien3', '1/1/2018', 'nam', 'Hà Nội\r\n                ', 'lập trình'),
(4, 'Nhân viên 4', '2018-12-22', 'Nam', 'Từ Liêm\r\n                ', 'sà'),
(5, 'Nhân viên 5', '2018-12-15', 'Nam', 'Từ Liêm\r\n                ', 'sà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_worker`
--

CREATE TABLE `tbl_worker` (
  `worker_id` int(11) NOT NULL,
  `worker_name` text NOT NULL,
  `worker_date` text NOT NULL,
  `worker_gender` text NOT NULL,
  `worker_adress` text NOT NULL,
  `worker_level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_worker`
--

INSERT INTO `tbl_worker` (`worker_id`, `worker_name`, `worker_date`, `worker_gender`, `worker_adress`, `worker_level`) VALUES
(1, 'công nhân 1', '1/1/1997', 'Nam', 'Hà Nội', '2/7'),
(2, 'công nhân 2', '11/12/1995', 'Nữ', 'Hải Dương', '5/7'),
(3, 'Vũ Thị Thanh', '1/1/1', 'Nữ', 'Hà Nội', '5'),
(4, 'Dương Quang Anh', '2018-12-22', 'Nam', 'Hải Dương', '5'),
(5, 'Nguyễn Minh Anh', '2018-12-02', 'Nam', 'Cầu Giấy-Hà Nội', '3'),
(6, 'Nguyễn Minh Anh', '2018-12-02', 'Nam', 'Cầu Giấy-Hà Nội', '3'),
(7, 'Nguyễn Văn Nam', '', 'Nam', 'Hải Dương', '1'),
(8, 'Dương Quang Anh', '', 'Nam', 'Hải Dương', '1'),
(9, 'Nguyễn Văn Nam', '', 'Nam', 'Hải Dương', '1'),
(10, '', '', '', '', ''),
(11, 'Nguyễn Minh Anh', '2018-12-02', 'Nam', 'Hải Dương', '1'),
(12, 'Dương Quang Anh', '2018-12-09', 'Nam', 'Hải Dương', '3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_egn`
--
ALTER TABLE `tbl_egn`
  ADD PRIMARY KEY (`egn_id`);

--
-- Chỉ mục cho bảng `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`empl_id`);

--
-- Chỉ mục cho bảng `tbl_worker`
--
ALTER TABLE `tbl_worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_egn`
--
ALTER TABLE `tbl_egn`
  MODIFY `egn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `empl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_worker`
--
ALTER TABLE `tbl_worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
