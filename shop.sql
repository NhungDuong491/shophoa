-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 01:58 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(6, 'Lẵng'),
(5, 'Hộp'),
(7, 'Giỏ'),
(8, 'Bó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`) VALUES
(73, 'Quà', 1),
(74, 'Hoa_chia_buồn', 1),
(75, 'Hoa_tình_yêu', 1),
(76, 'Hoa_sự_kiện', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_subject` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_status` tinyint(2) NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_status`, `contact_date`) VALUES
(22, 'Trang', 'trangnt@gmail.com', 'hoa', 'hoa đẹp quá', 0, '0000-00-00'),
(23, 'Lê Thị Hậu', 'lethihaumnxc@gmail.com', 'hoa', 'aa', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_mobile` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_city` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_country` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_zip` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`) VALUES
(59, 'Tường Nhi', 'nhi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', ''),
(60, 'Thiên An', 'hatrang@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0944668036', 'Xóm 3 - Thuận Minh - Thọ Xuân - Thanh Hóa', 'Thanh Hóa', 'Việt Nam', ''),
(61, 'Vân Anh', 'vanh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', ''),
(62, 'Tuấn Anh', 'tanh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0944668036', 'Thanh Hóa', 'Thanh Hóa', 'Việt Nam', ''),
(63, 'Nguyễn Thị Phượng', 'phuongnt@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0944668036', 'Triều Khúc', 'Hà Nội', 'Việt Nam', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cus_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`) VALUES
(143, 59, 119, 150, 428, 'pending', '2021-09-07 15:50:59'),
(141, 59, 115, 148, 530, 'pending', '2021-09-02 10:36:18'),
(140, 59, 115, 147, 1157, 'pending', '2021-09-02 10:35:22'),
(144, 60, 122, 151, 846, 'pending', '2021-09-29 16:25:32'),
(145, 60, 123, 152, 326, 'pending', '2021-10-09 03:17:11'),
(146, 62, 124, 153, 693, 'pending', '2021-10-13 16:42:36'),
(147, 59, 125, 154, 1565, 'pending', '2021-10-14 01:14:49'),
(148, 59, 126, 155, 326, 'pending', '2021-10-14 02:43:15'),
(149, 63, 127, 156, 1020, 'pending', '2021-10-27 15:45:47'),
(150, 63, 127, 157, 1020, 'pending', '2021-10-27 15:47:12'),
(151, 63, 127, 158, 0, 'pending', '2021-10-27 15:47:17'),
(152, 63, 129, 159, 948, 'pending', '2021-10-27 15:54:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(12) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `sales_quantity` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `sales_quantity`) VALUES
(170, 141, 98, 'Sinh nhật vui vẻ', 500, 1),
(169, 140, 97, 'Hoa baby', 800, 1),
(168, 140, 100, 'Hi vọng', 300, 1),
(172, 143, 84, 'Hoa cưới', 400, 1),
(173, 144, 97, 'Hoa baby', 800, 1),
(174, 145, 100, 'Hi vọng', 300, 1),
(175, 146, 99, 'Mãi mãi', 650, 1),
(176, 147, 104, 'hoa hồng', 300, 5),
(177, 148, 100, 'Hi vọng', 300, 1),
(178, 149, 92, 'An khang', 450, 1),
(179, 149, 86, 'Hoa hộp', 250, 1),
(180, 149, 100, 'Hi vọng', 300, 1),
(181, 152, 84, 'Hoa cưới', 400, 1),
(182, 152, 91, 'Chia buồn', 500, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_status`, `payment_type`, `payment_date_time`, `payment_message`) VALUES
(147, 'pending', 'cash_on_delivery', '2021-09-02 10:35:22', ''),
(148, 'pending', 'paypal_payment', '2021-09-02 10:36:18', ''),
(150, 'pending', 'cash_on_delivery', '2021-09-07 15:50:59', ''),
(151, 'pending', 'paypal_payment', '2021-09-29 16:25:32', ''),
(152, 'pending', 'paypal_payment', '2021-10-09 03:17:11', ''),
(153, 'pending', 'paypal_payment', '2021-10-13 16:42:36', ''),
(154, 'pending', 'paypal_payment', '2021-10-14 01:14:49', ''),
(155, 'pending', 'cash_on_delivery', '2021-10-14 02:43:15', ''),
(156, 'pending', 'paypal_payment', '2021-10-27 15:45:47', 'bắc ninh'),
(157, 'pending', 'paypal_payment', '2021-10-27 15:47:12', 'bắc ninh'),
(158, 'pending', 'cash_on_delivery', '2021-10-27 15:47:17', 'bắc ninh'),
(159, 'pending', 'cash_on_delivery', '2021-10-27 15:54:23', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_cat` tinyint(4) NOT NULL,
  `pro_sub_cat` tinyint(4) NOT NULL,
  `pro_brand` tinyint(4) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_quantity` tinyint(4) NOT NULL,
  `pro_availability` tinyint(4) NOT NULL COMMENT 'status 1=instock, 2=outof stock, 3= up coming',
  `pro_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'status=1 enable status=2 disable',
  `pro_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_product` tinyint(1) DEFAULT 0 COMMENT 'show top value=1 other wise value=0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_title`, `pro_desc`, `pro_cat`, `pro_sub_cat`, `pro_brand`, `pro_price`, `pro_quantity`, `pro_availability`, `pro_status`, `pro_image`, `top_product`) VALUES
(92, 'An khang', '', 76, 34, 7, 450, -3, 0, 1, 'uploads/lang-hoa-hong-hhg1015.jpg', NULL),
(84, 'Hoa cưới', '', 76, 36, 8, 400, -1, 0, 1, 'uploads/sp4.png', 1),
(85, 'May mắn', '', 76, 34, 0, 400, 0, 0, 1, 'uploads/sp1.png', 1),
(90, 'Vui vẻ', '', 76, 35, 7, 500, 2, 0, 1, 'uploads/gio-hoa-tuoi-dep-01.jpg', NULL),
(91, 'Chia buồn', '', 74, 41, 6, 500, 1, 0, 1, 'uploads/hoa-chia-buon-28.jpg', NULL),
(86, 'Hoa hộp', '', 73, 39, 0, 250, 0, 0, 1, 'uploads/IMG-3945-2-Copy-4729-1551779221.jpg', NULL),
(89, 'Vĩnh cửu', '', 75, 37, 8, 300, 0, 0, 1, 'uploads/3737456c676d8633df7c.jpg', NULL),
(88, 'Gấu', '', 73, 38, 0, 600, 1, 0, 1, 'uploads/gấu.jpg', NULL),
(93, 'Trăm năm', '', 75, 37, 8, 350, -6, 0, 1, 'uploads/m-C-i-l-ng-m-n-Hoa-Trang-Tr-T-L-M-Th-C_jpg_640x640.jpg', NULL),
(94, 'Hoa sinh nhật', '', 76, 35, 8, 250, 2, 0, 1, 'uploads/bo-hoa-dep-13.jpg', NULL),
(95, 'Tri kỷ', '', 75, 37, 8, 350, -1, 0, 1, 'uploads/images.jpg', NULL),
(96, 'Tình bạn', '', 76, 34, 7, 300, -1, 0, 1, 'uploads/chuc-mung-ngay-moi-600x600.jpg', NULL),
(97, 'Hoa baby', '', 75, 37, 8, 800, 0, 0, 1, 'uploads/SWEET-LOVE-600x800.jpg', NULL),
(98, 'Sinh nhật vui vẻ', '', 76, 35, 8, 500, 3, 0, 1, 'uploads/hoa-tang-sinh-nhat-sep-nam.jpg', NULL),
(99, 'Mãi mãi', '', 75, 37, 8, 650, -1, 0, 1, 'uploads/ngam-nhung-bo-hoa-dep-nhat-danh-tang-nhung-nguoi-phu-nu-than-yeu-ngay-20-10.jpg', NULL),
(100, 'Hi vọng', '<p><span xss=removed><strong>Bó hoa sẽ là món quà hoàn hảo dành tặng các cô gái nhân ngày sinh nhật, ngày bảo vệ tốt nghiệp</strong></span></p>\r\n', 76, 34, 7, 300, -6, 0, 1, 'uploads/at0064-400k_hQ84CNGR.jpg', NULL),
(101, 'Thủy chung', '', 75, 41, 8, 600, 9, 0, 1, 'uploads/50-bo-hoa-mau-tim-dep-sang-trong-nhat-the-gioi-1.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_mobile` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_city` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_country` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cus_zip` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_fax` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`, `cus_fax`) VALUES
(119, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(118, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(117, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(114, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(120, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(121, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(122, 60, 'Hà Trang', 'hatrang@gmail.com', '', '0944668036', 'Xóm 3 - Thuận Minh - Thọ Xuân - Thanh Hóa', 'Thanh Hóa', 'Việt Nam', NULL, ''),
(123, 60, 'Thiên An', 'hatrang@gmail.com', '', '0944668036', 'Xóm 3 - Thuận Minh - Thọ Xuân - Thanh Hóa', 'Thanh Hóa', 'Việt Nam', NULL, ''),
(124, 62, 'Tuấn Anh', 'tanh@gmail.com', '', '0944668036', 'Thanh Hóa', 'Thanh Hóa', 'Việt Nam', NULL, ''),
(125, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(126, 59, 'Tường Nhi', 'nhi@gmail.com', '', '0828427817', 'Xóm 3', 'Huyện Thọ Xuân', 'Việt Nam', NULL, ''),
(127, 63, 'Lê Thị Hậu', 'phuongnt@gmail.com', '', '0944668036', 'Triều Khúc', 'Hà Nội', 'Việt Nam', NULL, ''),
(128, 63, 'Nguyễn Thị Phượng', 'phuongnt@gmail.com', '', '0944668036', 'Triều Khúc', 'Hà Nội', 'Việt Nam', NULL, ''),
(129, 63, 'Nguyễn Thị Phượng', 'phuongnt@gmail.com', '', '0944668036', 'Triều Khúc', 'Hà Nội', 'Việt Nam', NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_sub_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `sub_category_name`, `category_sub_id`) VALUES
(37, 'Hoa hồng', 75),
(36, 'Hoa cưới', 76),
(34, 'Hoa chúc mừng', 76),
(35, 'Hoa sinh nhật', 76),
(38, 'Gấu', 73),
(39, 'Hộp quà', 73),
(40, 'Hoa trắng', 74),
(41, 'Hoa màu', 74);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(23, 'Admin', 'admin@gmail.com', '$2y$10$4SilYIRsd/bke59e61gv2e3rkKfz9CCuLYCOIn.cFKTCCCBIuSGa.', 1, 1),
(24, 'ThuTrang', 'trangnt@gmail.com', '$2y$10$jrTvgoZNS1/3vLg6khr4/.VY8CUuQduDD2JeU7gsA/fzGmFmUl0he', 3, 1),
(25, 'Nhung Dương', 'nhung@gmail.com', '$2y$10$.GjicmDK43XTsZz9lhBpB..L/LCfAqZkKvdxElqB.P3u9phWNxTCC', 2, 1),
(26, 'Ngọc Anhs', 'anh@gmail.com', '$2y$10$7SW9m.bF8HPPVQVXaJi30u.8evzWWAZhnoTKJaWD5kd0CeQIPnPIG', 2, 1),
(27, 'Phượng', 'phuong@gmail.com', '$2y$10$oXovi8Vc/bg5eMz5MCjiZ.cxLAF5A34tGFhjNJv7DhTxt41OACwK2', 3, 1),
(28, 'Lan Anh', 'lanh@gmail.com', '$2y$10$R2RjknTtELpLLox/bavABe62BpiumhISkdWjqn/njT1UHeb4pjuRu', 3, 1),
(32, 'A', 'a@xn--gmaildd3q3e-c7a', '$2y$10$eofCMSy7Hdl8SxhyOXTVA.ZT0M.v8ce5zU07QuXCfuJjeDcFUs6Bm', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `pro_id` (`parent_comment_id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
