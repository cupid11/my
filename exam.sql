-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 
-- 服务器版本: 5.5.53
-- PHP 版本: 7.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `xuexi`
--

CREATE TABLE IF NOT EXISTS `xuexi` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `age` int(12) NOT NULL,
  `sex` varchar(16) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 COMMENT='信息表' AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `xuexi`
--

INSERT INTO `xuexi` (`id`, `name`, `age`, `sex`, `address`, `email`) VALUES
(1, '你好', 879, 'woman', 'dasdadas', 2115456),
(2, 'world', 21, 'man', 'dasdsada', 2115456),
(3, '李四', 879, 'man', 'dasdadas', 2115456),
(4, 'hello5', 879, 'woman', 'dasdadas', 2115456),
(5, '张三', 21, 'man', 'dasdsada', 2115456),
(6, 'world3', 21, 'man', 'dasdsada', 2115456),
(7, 'world4', 21, 'man', 'dasdsada', 2115456),
(8, 'world6', 21, 'man', 'dasdsada', 2115456),
(9, 'hello', 879, 'man', 'dasdadas', 2115456),
(10, 'hello10', 879, 'man', 'dasdadas', 2115456),
(11, 'hello52', 879, 'man', 'dasdadas', 2115456),
(12, 'hello53', 879, 'man', 'dasdadas', 2115456),
(13, 'hello19', 879, 'man', 'dasdadas', 2115456),
(14, 'hello28', 879, 'man', 'dasdadas', 2115456),
(15, 'hello30', 879, 'man', 'dasdadas', 2115456),
(16, 'hello31', 879, 'man', 'dasdadas', 2115456),
(17, 'hello38', 879, 'man', 'dasdadas', 2115456),
(18, 'hello48', 879, 'man', 'dasdadas', 2115456),
(19, 'hello68', 879, 'man', 'dasdadas', 2115456),
(20, 'hello78', 879, 'man', 'dasdadas', 2115456),
(21, 'hello58', 879, 'man', 'dasdadas', 2115456),
(22, 'hello88', 879, 'man', 'dasdadas', 2115456),
(23, 'hello98', 879, 'man', 'dasdadas', 2115456),
(24, 'hello108', 879, 'man', 'dasdadas', 2115456),
(25, 'hello258', 879, 'man', 'dasdadas', 2115456),
(26, 'hello39', 879, 'man', 'dasdadas', 2115456),
(27, 'hell', 879, 'man', 'dasdadas', 2115456),
(28, 'he39', 879, 'man', 'dasdadas', 2115456),
(29, 'hell9', 879, 'man', 'dasdadas', 2115456),
(30, 'hel3', 879, 'man', 'dasdadas', 2115456),
(31, 'hello389', 879, 'man', 'dasdadas', 2115456),
(32, 'hello369', 879, 'man', 'dasdadas', 2115456),
(33, 'hello359', 879, 'man', 'dasdadas', 2115456),
(34, 'hello349', 879, 'man', 'dasdadas', 2115456),
(35, 'hello339', 879, 'man', 'dasdadas', 2115456),
(36, 'hello399999', 879, 'man', 'dasdadas', 2115456),
(37, 'hello399', 879, 'man', 'dasdadas', 2115456),
(38, 'hello3999', 879, 'man', 'dasdadas', 2115456),
(39, 'hello3999999', 879, 'man', 'dasdadas', 2115456),
(40, 'hello3999999999', 879, 'man', 'dasdadas', 2115456),
(41, 'hello399999999999', 879, 'man', 'dasdadas', 2115456),
(42, 'hello3956565', 879, 'man', 'dasdadas', 2115456),
(43, 'hello356565656569', 879, 'man', 'dasdadas', 2115456),
(44, 'hello395656565', 879, 'man', 'dasdadas', 2115456);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
