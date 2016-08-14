-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 08:14 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoadon`
--

-- --------------------------------------------------------

--
-- Table structure for table `chisothang`
--

CREATE TABLE IF NOT EXISTS `chisothang` (
  `MaKhachHang` int(11) NOT NULL,
  `nguoiChotID` int(11) NOT NULL,
  `ngayChot` date NOT NULL,
  `chiSoChot` int(11) NOT NULL,
  `thangChot` int(11) NOT NULL,
  `namChot` year(4) NOT NULL,
  `trangThaiNop` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chisothang`
--

INSERT INTO `chisothang` (`MaKhachHang`, `nguoiChotID`, `ngayChot`, `chiSoChot`, `thangChot`, `namChot`, `trangThaiNop`) VALUES
(2, 2, '2016-08-01', 200, 7, 2016, 'chưa nộp');

-- --------------------------------------------------------

--
-- Table structure for table `loaithongbao`
--

CREATE TABLE IF NOT EXISTS `loaithongbao` (
`id` int(11) NOT NULL,
  `ChuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NguoiTaoID` int(11) NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `loaithongbao`
--

INSERT INTO `loaithongbao` (`id`, `ChuDe`, `NguoiTaoID`, `NgayTao`) VALUES
(1, 'Lịch Cắt Nước', 2, '2016-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_unicode_ci NOT NULL,
  `anhBia` text COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `moTa` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoiDangID` int(11) NOT NULL,
  `ngayDang` date NOT NULL,
  `loaiThongBaoID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tieuDe`, `anhBia`, `noiDung`, `moTa`, `nguoiDangID`, `ngayDang`, `loaiThongBaoID`) VALUES
(1, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(2, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(3, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(4, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(5, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(6, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(7, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1),
(8, 'Cắt nước tạm thời phường mỗ lao', 'image/catnuoc.jpg', 'do lý do bảo trì, Phường Mỗ Lao sẽ bị căt nước trong ngày 13/8/2016 đến 18h', 'Cắt nước tạm thời phương Mỗ Lao do lý do bảo trì', 2, '2016-08-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE IF NOT EXISTS `qa` (
`id` int(11) NOT NULL,
  `khanhHangID` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `khanhHangID`, `tieuDe`, `noiDung`) VALUES
(1, 2, 'đồng hồ hỏng', 'đồng hồ gia đình tôi hỏng từ đầu tháng 8/2016'),
(2, 2, 'hỏng đồng hồ', 'đồng hồ gia đình tôi hỏng từ đầu tháng 8/2016'),
(3, 2, 'hỏng đồng hồ', 'đồng hồ gia đình tôi hỏng từ đầu tháng 8/2016');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL,
  `UserName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `UserName`) VALUES
(2, 'nhantv');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '10',
  `address` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL DEFAULT 'Male',
  `dob` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SoKhau` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `display_name`, `status`, `address`, `email`, `phone`, `gender`, `dob`, `created_at`, `updated_at`, `SoKhau`, `isDeleted`) VALUES
(2, 'nhantv', 'TbPsVJc5TAVnIZ7pOHx4E76bPQSHlLEm', '$2y$13$pl4vTRv.OhTuoLMP54H7LOArfG5VSQuLzZFG.8ynphuUlNfFntH5S', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'nhantv@gmail.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:03:54', 3, 0),
(3, 'tuanvm', 'TYVvpmzhfwNzV_SkfshVldzdp1JxcDIm', '$2y$13$MNvwiZR5uuy3/i1q08KJpulTwC.dnXDqYCmIVmiTYNru/POI6VKCO', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'idk@hanu.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(4, 'congvn', 'VtcKPS0nrNXI_RoZ-Fz0WY0FDsgIENiU', '$2y$13$eQz2fqbRPP0SAYpq1eaEF.kGlCfgSVmy2nJkHHU8lkL8bI22QpEeW', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'idk@notknow.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(5, 'ngoctb', '5XtQYArGW7UirSweLIhA2ZHcZiqL5pE8', '$2y$13$b/XLDh7GAAV6Y9dkYT5T8uzJTqqjahZ.yYF8OGrOWf0U12eUkOnYK', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'idk@gmail.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(6, 'binhdc', 'EBzjvQEbVL7jkjw7Jgbip97WiqDTZFMT', '$2y$13$TIwkGlG9t1J5Q2O6kZ7O1OdgicFTfzNFmu.w8F/eqw8pWIQSLHgDe', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'binhdc@kcomail.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(7, 'dungvt', 'nTel-nQk6vG1Z3blq85sqEDYK3ydOIKp', '$2y$13$FFV.fSJnGhvrLPXjO9yR4O8auJSMBZCQH5gSwbsJhyvl9bWxZtA8e', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'dzung@wtf.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(8, 'dctuan', 'c85g_WFpqOhIUb9OiTbjArar8LKp4Tcd', '$2y$13$my3.w2VhNozo3VL1vZ7Hsey17v1/1GpH8jdcDfNsAhbnk74iQasYq', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'tuandamdang@wtf.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0),
(9, 'nhan', 'xYlo2TtP3A8syer-78kDrXHesXPHzxp3', '$2y$13$b1ehs.f6uTc./ouhaVZm0.fZnc8Vl927TSI97CmUJ/jfOdUISGYtW', NULL, NULL, 10, 'số 1 Ao Sen, Mỗ Lao, Hà Đông', 'nhantv.95@gmail.com', '0123456789', 'Male', NULL, '0000-00-00 00:00:00', '2016-08-14 17:04:13', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaithongbao`
--
ALTER TABLE `loaithongbao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaithongbao`
--
ALTER TABLE `loaithongbao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
