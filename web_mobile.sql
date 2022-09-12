-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 18, 2022 lúc 09:24 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ID_Contact` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`ID_Contact`, `Name`, `Email`, `Subject`, `Content`) VALUES
(1, 'duc', 'duc@gmail.com', 'hello', 'xinchao'),
(2, 'Dat', 'dat@gmail.com', 'o', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID_Order` int(8) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `ID_Order_Detail` int(8) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ID_Product` int(11) NOT NULL,
  `NameProduct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Information` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID_Product`, `NameProduct`, `Price`, `Brand`, `Amount`, `Image`, `Information`) VALUES
(1, 'iPhone 11 64GB', 14990000, 'Iphone', 10, 'iphone11.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 11 64GB\r\nMÃ n hÃ¬nh:IPS LCD6.1\"Liquid Retina\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A13 Bionic\r\nRAM:4 GB\r\nBá»™ nhá»› trong:64 GB\r\nSIM:1 Nano SIM & 1 eSIMHá»— trá»£ 4G\r\nPin, Sáº¡c:3110 mAh18 W\r\n'),
(2, 'iPhone 12 mini 64GB', 18990000, 'Iphone', 15, 'iphone-12-mini.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 12 mini 64GB\r\nMÃ n hÃ¬nh:OLED5.4\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A14 Bionic\r\nRAM:4 GB\r\nBá»™ nhá»› trong:64 GB\r\nSIM:1 Nano SIM & 1 eSIM Há»— trá»£ 5G\r\nPin, Sáº¡c:2227 mAh20 W\r\n'),
(4, 'iPhone 12 Pro Max 256GB', 29990000, 'Iphone', 15, 'iphone-12-pro-max-vang.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 12 Pro Max 256GB\r\nMÃ n hÃ¬nh:OLED6.7\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:3 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A14 Bionic\r\nRAM:6 GB\r\nBá»™ nhá»› trong:256 GB\r\nSIM:1 Nano SIM & 1 eSIMHá»— trá»£ 5G\r\nPin, Sáº¡c:3687 mAh20 W\r\n'),
(7, 'iPhone 13 Pro Max 128GB', 32890000, 'Iphone', 20, 'iphone-13-pro-max-gold.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 13 Pro Max 128GB\r\nMÃ n hÃ¬nh:OLED6.7\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:3 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:6 GB\r\nBá»™ nhá»› trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHá»— trá»£ 5G\r\nPin, Sáº¡c:4352 mAh20 W\r\n'),
(8, 'iPhone 13 128GB', 23690000, 'Iphone', 10, 'iphone-13-xanh-la.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 13 128GB\r\nMÃ n hÃ¬nh:OLED6.1\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:\r\n2 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nBá»™ nhá»› trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIM Há»— trá»£ 5G\r\nPin, Sáº¡c:3240 mAh20 W\r\n'),
(9, 'iPhone SE 64GB (2022)', 12990000, 'Iphone', 20, 'iphone-se-trang.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone SE 64GB (2022)\r\nMÃ n hÃ¬nh:IPS LCD4.7\"Retina HD\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:12 MP\r\nCamera trÆ°á»›c:7 MP\r\nChip:Apple A15 Bionic\r\nRAM:3 GB\r\nBá»™ nhá»› trong:64 GB\r\nSIM:1 Nano SIM & 1 eSIM Há»— trá»£ 5G\r\nPin, Sáº¡c:2018 mAh20 W\r\n'),
(11, 'iPhone 13 mini 128GB', 19700000, 'Iphone', 20, 'iphone-13-mini-blue.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 13 mini 128GB\r\nMÃ n hÃ¬nh:OLED5.4\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nBá»™ nhá»› trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIM Há»— trá»£ 5G\r\nPin, Sáº¡c:2438 mAh20 W\r\n'),
(12, 'iPhone 12 Pro 256GB', 26500000, 'Iphone', 20, 'iphone-12-pro-bac.jpg', 'Cáº¥u hÃ¬nh Äiá»‡n thoáº¡i iPhone 12 Pro 256GB\r\nMÃ n hÃ¬nh:OLED 6.1\"Super Retina XDR\r\nHá»‡ Ä‘iá»u hÃ nh:iOS 15\r\nCamera sau:3 camera 12 MP\r\nCamera trÆ°á»›c:12 MP\r\nChip:Apple A14 Bionic\r\nRAM:6 GB\r\nBá»™ nhá»› trong:256 GB\r\nSIM:1 Nano SIM & 1 eSIM Há»— trá»£ 5G\r\nPin, Sáº¡c:2815 mAh20 W\r\n'),
(14, 'Vivo Y01', 12000000, 'Vivo', 10, 'vivi-y01.jpg', ''),
(15, 'Vivo V21', 10000000, 'Vivo', 10, 'vivo-v21.jpg', ''),
(16, 'Vivo V23e', 20000000, 'Vivo', 12, 'Vivo-V23e.jpg', ''),
(17, 'Vivo Y15s', 13200000, 'Vivo', 10, 'Vivo-y15s.jpg', ''),
(18, 'Vivo Y21', 13800000, 'Vivo', 21, 'vivo-y21.jpg', ''),
(19, 'Vivo Y33s', 8000000, 'Vivo', 15, 'Vivo-y33s.jpg', ''),
(20, 'Vivo Y53s', 6900000, 'Vivo', 20, 'vivo-y53s.jpg', ''),
(21, 'Vivo Y72', 8900000, 'Vivo', 12, 'vivo-y72.jpg', ''),
(22, 'Samsung Galaxy Z Fold 3', 32000000, 'Samsung', 20, 'samsung-galaxy-z-fold-3.jpg', ''),
(23, 'Samsung Galaxy S22', 12000000, 'Samsung', 9, 'Galaxy-S22.jpg', ''),
(24, 'Samsung Galaxy A03', 22000000, 'Samsung', 12, 'samsung-galaxy-a03.jpg', ''),
(25, 'Samsung Galaxy A12', 14000000, 'Samsung', 5, 'samsung-galaxy-a12.jpg', ''),
(26, 'Samsung Galaxy A13', 23000000, 'Samsung', 21, 'Samsung-Galaxy-A13.jpg', ''),
(27, 'Samsung Galaxy A52s', 13900000, 'Samsung', 10, 'samsung-galaxy-a52s.jpg', ''),
(28, 'Samsung Galaxy Note 20', 23800000, 'Samsung', 10, 'samsung-galaxy-note-20.jpg', ''),
(29, 'Samsung Galaxy S21 Ultra', 28400000, 'Samsung', 15, 'samsung-galaxy-s21-ultra.jpg', ''),
(30, 'Oppo A15s', 12300000, 'Oppo', 10, 'oppo-a15s.jpg', ''),
(31, 'Oppo A16 Silver', 8300000, 'Oppo', 10, 'oppo-a16-silver.jpg', ''),
(32, 'Oppo A55', 7200000, 'Oppo', 10, 'oppo-a55.jpg', ''),
(33, 'Oppo A74', 12700000, 'Oppo', 10, 'oppo-a74.jpg', ''),
(34, 'Oppo Reno 4', 13700000, 'Oppo', 10, 'oppo-reno4.jpg', ''),
(35, 'Oppo Reno 5', 9200000, 'Oppo', 20, 'oppo-reno5.jpg', ''),
(36, 'Oppo Reno6', 14500000, 'Oppo', 10, 'oppo-reno6.jpg', ''),
(37, 'Oppo Reno 7', 16200000, 'Oppo', 10, 'OPPO-Reno7.jpg', ''),
(38, 'Realme 8 Silver', 7200000, 'Realme', 10, 'realme-8-silver.jpg', ''),
(39, 'Realme 9i Black', 12400000, 'Realme', 10, 'realme-9i-den.jpg', ''),
(40, 'Realme 9 Pro', 14200000, 'Realme', 10, 'realme-9-pro.jpg', ''),
(41, 'Realme C11', 12900000, 'Realme', 10, 'realme-c11.jpg', ''),
(42, 'Realme C21', 13200000, 'Realme', 20, 'realme-c21.jpg', ''),
(43, 'Realme C25s', 8200000, 'Realme', 10, 'realme-c25s.jpg', ''),
(44, 'Realme C35', 9200000, 'Realme', 10, 'realme-c35.jpg', ''),
(45, 'Xiaomi 11 Lite', 8200000, 'Xiaomi', 10, 'xiaomi-11-lite.jpg', ''),
(46, 'Xiaomi 12', 11200000, 'Xiaomi', 10, 'Xiaomi-12.jpg', ''),
(47, 'Xiaomi Redmi 9a', 4500000, 'Xiaomi', 10, 'xiaomi-redmi-9a.jpg', ''),
(48, 'Xiaomi Redmi 10c', 8300000, 'Xiaomi', 10, 'xiaomi-redmi-10c.jpg', ''),
(49, 'Xiaomi Redmi Note 10 Pro', 13900000, 'Xiaomi', 10, 'xiaomi-redmi-note-10-pro.jpg', ''),
(50, 'Xiaomi Redmi 10', 8400000, 'Xiaomi', 10, 'redmi-10.jpg', ''),
(51, 'Xiaomi 11T', 9100000, 'Xiaomi', 10, 'Xiaomi-11T.jpg', ''),
(52, 'Xiaomi 11T Pro', 8600000, 'Xiaomi', 10, 'xiaomi-11t-pro.jpeg', ''),
(53, 'Loa JBL Charge 5', 1250000, 'Loa', 10, 'jbl-charge-5.jpg', ''),
(54, 'Loa JBL Clip 4', 2100000, 'Loa', 10, 'JBL-Clip-4.jpg', ''),
(55, 'Loa JBL Go 3', 1400000, 'Loa', 10, 'jbl-go-3.jpg', ''),
(56, 'Loa Bluetooth Sony', 2100000, 'Loa', 10, 'bluetooth-sony-srs-xb13-avatar-600x600.jpg', ''),
(57, 'Loa JBL Flip 4 ', 900000, 'Loa', 10, 'jbl-flip4.jpg', ''),
(58, 'Sáº¡c dá»± phÃ²ng Oppo Pbv 02', 800000, 'Sacduphong', 10, 'oppo-pbv02.jpg', ''),
(59, 'Samsung EB P3300', 1100000, 'Sacduphong', 10, 'ss-eb-p3300.jpg', ''),
(60, 'Samsung Eb P5300', 800000, 'Sacduphong', 10, 'ss-eb-p5300.jpg', ''),
(61, 'Sony Cp V9', 2100000, 'Sacduphong', 20, 'sony-cp-v9.jpg', ''),
(62, 'Sony Cp V10', 830000, 'Sacduphong', 10, 'sony-cp-v10.jpg', ''),
(63, 'Xiaomi 3 Ultra', 1500000, 'Sacduphong', 10, 'xiaomi-3-ultra.jpg', ''),
(64, 'Xiaomi Vxn 4286', 900000, 'Sacduphong', 12, 'xiaomi-vxn4286gl.jpg', ''),
(65, 'Xiaomi Wireless ', 1200000, 'Sacduphong', 10, 'xiaomi-wireless.jpg', ''),
(66, 'Apple MNF82', 1300000, 'Capsac', 10, 'sac-apple-MNF82.jpg', ''),
(67, 'Apple Lightning', 800000, 'Capsac', 10, 'cap-chuyen-doi-lightning.jpg', ''),
(68, 'Oppo OP92KAUH', 1200000, 'Capsac', 10, 'sac-oppo-OP92KAUH.jpg', ''),
(69, 'Oppo TypeC', 200000, 'Capsac', 10, 'cap-typeC.jpg', ''),
(70, 'Samsung SS', 250000, 'Capsac', 10, 'sac-3-cong-ss.jpeg', ''),
(71, 'Samsung TypeC', 1200000, 'Capsac', 10, 'sac-kem-cap-typeC.jpg', ''),
(72, 'Combo Sony', 2100000, 'Capsac', 10, 'sac-2-cong-kem-cap.jpg', ''),
(73, 'Sony Micro 1M', 200000, 'Capsac', 10, 'cap-micro-1m.jpg', ''),
(74, 'Apple Airpods 3', 2000000, 'Tainghe', 10, 'airpods-3.jpeg', ''),
(75, 'Airpods Max', 3100000, 'Tainghe', 10, 'airpods-max-apple.jpeg', ''),
(76, 'LG FP8', 800000, 'Tainghe', 10, 'tainghe-FP8.jpeg', ''),
(77, 'LG HBS 780', 2100000, 'Tainghe', 10, 'tainghe-HBS-780.jpeg', ''),
(78, 'Samsung Glx Buds Live', 3100000, 'Tainghe', 10, 'ss-glx-Buds-Live.jpeg', ''),
(79, 'Samsung Glx Buds Pro', 3400000, 'Tainghe', 10, 'ss-glx-Buds-Pro.jpeg', ''),
(80, 'Sony WF-S DME', 1400000, 'Tainghe', 10, 'Sony-WF-SP800N-DME.jpeg', ''),
(81, 'Sony WH XB910N', 2100000, 'Tainghe', 10, 'Sony-WH-XB910N.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Passwd` int(8) NOT NULL,
  `Gender` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `Passwd`, `Gender`, `Birthday`, `Address`) VALUES
(2, 'duc', 123, 'Nam', '2022-05-01', 'ad');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID_Contact`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`ID_Order_Detail`),
  ADD KEY `order_detail_fk1` (`ID_Order`),
  ADD KEY `order_detail_fk2` (`ID_Product`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ID_Contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_Order` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `ID_Order_Detail` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `order_detail_fk1` FOREIGN KEY (`ID_Order`) REFERENCES `orders` (`ID_Order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_fk2` FOREIGN KEY (`ID_Product`) REFERENCES `products` (`ID_Product`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
