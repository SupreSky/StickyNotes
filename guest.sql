-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 06 月 27 日 15:25
-- 伺服器版本: 5.7.12-0ubuntu1
-- PHP 版本： 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `guest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `showBoard`
--

CREATE TABLE `showBoard` (
  `guestID` int(11) NOT NULL,
  `guestName` varchar(25) CHARACTER SET big5 NOT NULL,
  `guestEmail` varchar(30) CHARACTER SET big5 NOT NULL,
  `guestGender` varchar(100) NOT NULL,
  `guestSubject` varchar(25) CHARACTER SET big5 NOT NULL,
  `guestTime` datetime NOT NULL,
  `guestContent` text NOT NULL,
  `photo` varchar(8848) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `showBoard`
--

INSERT INTO `showBoard` (`guestID`, `guestName`, `guestEmail`, `guestGender`, `guestSubject`, `guestTime`, `guestContent`, `photo`) VALUES
(1, '星涵', '480821882@dh.tw', '女', '大家好阿', '2016-06-27 21:17:07', '=D', '1.png'),
(2, '曦迎', '480821768@dh.tw', '男', '嗨嗨', '2016-06-27 21:20:22', '早安阿各位\r\n', '2.png'),
(3, '雲擷', '480821432@dh.tw', '女', '好久不見', '2016-06-27 14:14:34', 'KrKr', '3.png');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `showBoard`
--
ALTER TABLE `showBoard`
  ADD PRIMARY KEY (`guestID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `showBoard`
--
ALTER TABLE `showBoard`
  MODIFY `guestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
