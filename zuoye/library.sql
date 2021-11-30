-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2021 年 06 月 21 日 12:10
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `library`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_num` int(255) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_author` varchar(30) NOT NULL,
  `book_shu` int(255) NOT NULL,
  `book_jiechu` int(255) NOT NULL,
  `book_syu` int(255) NOT NULL,
  `book_position` varchar(50) NOT NULL,
  KEY `book_num` (`book_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`book_num`, `book_name`, `book_author`, `book_shu`, `book_jiechu`, `book_syu`, `book_position`) VALUES
(2, '《百年孤独》', '马尔克斯', 60, 3, 57, '一楼'),
(3, '《云边有个小卖部》', '张嘉佳', 0, 6, 44, '二楼'),
(1, '《时间简史》', '霍金', 60, 4, 56, '三楼');

-- --------------------------------------------------------

--
-- 表的结构 `guanliyuan_shuju`
--

CREATE TABLE IF NOT EXISTS `guanliyuan_shuju` (
  `user` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `guanliyuan_shuju`
--

INSERT INTO `guanliyuan_shuju` (`user`, `password`) VALUES
('张三', 333333),
('李四', 444444),
('王二', 22222),
('管理员', 0);

-- --------------------------------------------------------

--
-- 表的结构 `yonghu_shuju`
--

CREATE TABLE IF NOT EXISTS `yonghu_shuju` (
  `num` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `yonghu_shuju`
--

INSERT INTO `yonghu_shuju` (`num`, `user`, `password`, `name`, `age`, `gender`, `phone`, `mail`) VALUES
(3, 'gjb', 191919, '谷家宝', 20, '男', '78945612300', 'ewhrbryt64'),
(1, 'hhb', 111111, '韩浩波', 20, '男', '12345678910', 'asvf5456'),
(2, 'hzy', 434343, '何站营', 20, '男', '45678912345', 'ewgfterqg5486');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
