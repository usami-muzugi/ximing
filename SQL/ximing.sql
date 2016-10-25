-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2016-10-25 23:03:14
-- 服务器版本： 5.5.48-log
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testximing`
--

-- --------------------------------------------------------

--
-- 表的结构 `invite_code`
--

CREATE TABLE `invite_code` (
  `id` int(32) NOT NULL,
  `code` varchar(128) NOT NULL,
  `user` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `invite_code`
--

INSERT INTO `invite_code` (`id`, `code`, `user`) VALUES
(1225, '1331Mjc5ZWUyZTBhNTNlYWZkYWE5', 1331);

-- --------------------------------------------------------

--
-- 表的结构 `ss_node`
--

CREATE TABLE `ss_node` (
  `id` int(11) NOT NULL,
  `node_name` varchar(128) NOT NULL,
  `node_type` int(3) NOT NULL,
  `node_server` varchar(128) NOT NULL,
  `node_method` varchar(64) NOT NULL,
  `node_info` varchar(128) NOT NULL,
  `node_status` varchar(128) NOT NULL,
  `node_order` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `ss_node`
--

INSERT INTO `ss_node` (`id`, `node_name`, `node_type`, `node_server`, `node_method`, `node_info`, `node_status`, `node_order`) VALUES
(1, '新加坡节点', 0, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 1),
(3, '日本节点-1', 1, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 0),
(6, '日本节点-2', 0, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 2),
(22, '日本-3', 1, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 2),
(23, '香港-2', 1, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 0),
(24, '美国节点', 0, 'IP address goes here', 'aes-256-cfb', 'infomation goes here', 'status goes here', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ss_reset_pwd`
--

CREATE TABLE `ss_reset_pwd` (
  `id` int(11) NOT NULL,
  `init_time` int(11) NOT NULL,
  `expire_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uni_char` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `ss_user_admin`
--

CREATE TABLE `ss_user_admin` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `ss_user_admin`
--

INSERT INTO `ss_user_admin` (`id`, `uid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `t` int(11) NOT NULL DEFAULT '0',
  `u` bigint(20) NOT NULL,
  `d` bigint(20) NOT NULL,
  `plan` varchar(2) CHARACTER SET utf8mb4 NOT NULL,
  `transfer_enable` bigint(20) NOT NULL,
  `port` int(11) NOT NULL,
  `switch` tinyint(4) NOT NULL DEFAULT '1',
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `last_get_gift_time` int(11) NOT NULL DEFAULT '0',
  `last_check_in_time` int(11) NOT NULL DEFAULT '0',
  `last_rest_pass_time` int(11) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `invite_num` int(8) NOT NULL,
  `money` date NOT NULL,
  `ref_by` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `user_name`, `email`, `pass`, `passwd`, `t`, `u`, `d`, `plan`, `transfer_enable`, `port`, `switch`, `enable`, `type`, `last_get_gift_time`, `last_check_in_time`, `last_rest_pass_time`, `reg_date`, `invite_num`, `money`, `ref_by`) VALUES
(1, 'root', 'admin@root.com', '63a9f0ea7bb98050796b649e85481845', '715759898', 1475754011, 42263394518, 217250430288, '站长', 2514360443338752, 10000, 1, 1, 1, 0, 1475679198, 0, '2016-02-25 23:52:48', 0, '2036-06-22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invite_code`
--
ALTER TABLE `invite_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_node`
--
ALTER TABLE `ss_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_reset_pwd`
--
ALTER TABLE `ss_reset_pwd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_user_admin`
--
ALTER TABLE `ss_user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `invite_code`
--
ALTER TABLE `invite_code`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1226;
--
-- 使用表AUTO_INCREMENT `ss_node`
--
ALTER TABLE `ss_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用表AUTO_INCREMENT `ss_reset_pwd`
--
ALTER TABLE `ss_reset_pwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- 使用表AUTO_INCREMENT `ss_user_admin`
--
ALTER TABLE `ss_user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1342;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
