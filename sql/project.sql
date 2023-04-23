-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:8111
-- Thời gian đã tạo: Th4 20, 2023 lúc 03:56 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar`
--

CREATE TABLE `calendar` (
  `ID` varchar(6) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Time_Start` datetime NOT NULL,
  `Time_End` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `calendar`
--

INSERT INTO `calendar` (`ID`, `Name`, `Time_Start`, `Time_End`) VALUES
('CL0001', 'LINDA', '2023-04-18 12:30:23', '2023-04-18 12:30:23'),
('CL0002', 'KEIRA', '2023-04-18 12:31:57', '2023-04-18 12:31:57'),
('CD0001', 'KIM', '2023-04-18 12:32:27', '2023-04-18 12:32:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar_event`
--

CREATE TABLE `calendar_event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_hour` datetime DEFAULT NULL,
  `event_end_hour` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `calendar_event`
--

INSERT INTO `calendar_event` (`event_id`, `event_name`, `event_start_hour`, `event_end_hour`) VALUES
(1, 'e1', '2023-04-20 12:00:00', '2023-04-21 11:29:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(255) NOT NULL,
  `empoyee_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`employee_id`, `empoyee_name`, `password`, `position`) VALUES
('00001', 'Linda', 'admin', 'Collector'),
('00002', 'Keira', 'admin', 'Janitor'),
('00003', 'Tommy', 'admin', 'Janitor'),
('0004', 'Yenefer', 'admin', 'Janitor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `have`
--

CREATE TABLE `have` (
  `employee_id` varchar(255) NOT NULL,
  `mcp_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `have`
--

INSERT INTO `have` (`employee_id`, `mcp_id`) VALUES
('00001', 'm0001'),
('00001', 'm0002'),
('00001', 'm0003'),
('00002', 'm0001'),
('00003', 'm0002'),
('0004', 'm0003');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mcps`
--

CREATE TABLE `mcps` (
  `mcp_id` varchar(255) NOT NULL,
  `mcp_address` varchar(255) NOT NULL,
  `mcp_manager` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mcps`
--

INSERT INTO `mcps` (`mcp_id`, `mcp_address`,`mcp_manager`, `capacity`) VALUES
('m0001', 'dh,da,bd', 'yasuo', '75%'),
('m0002', 'td,hcm', 'yone', '50%'),
('m0003', 'bt,hcm', 'garen', '100%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calendar_event`
--
ALTER TABLE `calendar_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Chỉ mục cho bảng `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`employee_id`,`mcp_id`);

  ADD KEY `fk_have_mcp_id` (`mcp_id`);

--
-- Chỉ mục cho bảng `mcps`
--
ALTER TABLE `mcps`
  ADD PRIMARY KEY (`mcp_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calendar_event`
--
ALTER TABLE `calendar_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `have`
--

ALTER TABLE have
  ADD CONSTRAINT fk_have_em_id FOREIGN KEY (employee_id) REFERENCES employee (employee_id) 
  ON DELETE CASCADE,
  ADD CONSTRAINT fk_have_mcp_id FOREIGN KEY (mcp_id) REFERENCES mcps (mcp_id)
	ON DELETE CASCADE
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
