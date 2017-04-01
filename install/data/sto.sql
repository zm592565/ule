-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?09 �?21 �?09:43
-- 服务器版�? 5.6.21
-- PHP 版本: 5.5.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据�? `ulecms`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE IF NOT EXISTS `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数�?`think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理�?, 1, '1,2,3,4,5'),
(2, '内容编辑', 1, '4,5'),
(3, '站点管理�?, 1, '2,3,4,5');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数�?`think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(46, 2);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数�?`think_auth_rule`
--

INSERT INTO `think_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`) VALUES
(1, '1', '系统管理', 1, 1, ''),
(2, '2', '管理员管�?, 1, 1, ''),
(3, '3', '会员管理', 1, 1, ''),
(4, '4', '评论管理', 1, 1, ''),
(5, '5', '内容管理', 1, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `#_admin`
--

CREATE TABLE IF NOT EXISTS `#_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(42) NOT NULL COMMENT '用户�?,
  `pass` varchar(42) NOT NULL COMMENT '密码',
  `name` varchar(40) NOT NULL COMMENT '姓名',
  `email` varchar(80) NOT NULL COMMENT 'email',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否冻结',
  `last_time` datetime NOT NULL COMMENT '上次登录时间',
  `last_ip` varchar(20) NOT NULL COMMENT '上次登录IP',
  `login_count` int(20) NOT NULL COMMENT '登录次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- 转存表中的数�?`#_admin`
--

INSERT INTO `#_admin` (`id`, `user`, `pass`, `name`, `email`, `state`, `last_time`, `last_ip`, `login_count`) VALUES
(1, 'admin', '6bbadbba0874c141508359bdf27ad23e', '', '', 1, '2016-09-19 16:06:38', '::1', 18),
(46, 'zm592565', '6bbadbba0874c141508359bdf27ad23e', '', '', 1, '2016-09-19 16:03:28', '::1', 9);

-- --------------------------------------------------------

--
-- 表的结构 `#_class`
--

CREATE TABLE IF NOT EXISTS `#_class` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(22) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `class_name` varchar(60) NOT NULL COMMENT '栏目中文�?,
  `class_en` varchar(40) NOT NULL COMMENT '栏目英文�?,
  `class_info` varchar(200) NOT NULL COMMENT '栏目说明',
  `class_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '栏目类型,0：list,1:page',
  `class_img` varchar(200) NOT NULL COMMENT '栏目图片',
  `sort` int(9) unsigned NOT NULL COMMENT '排序',
  `is_menu` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否导航显示',
  `time` date NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类�? AUTO_INCREMENT=88 ;

--
-- 转存表中的数�?`#_class`
--

INSERT INTO `#_class` (`id`, `pid`, `class_name`, `class_en`, `class_info`, `class_type`, `class_img`, `sort`, `is_menu`, `time`) VALUES
(83, 0, '公司文化', 'wenhua', 'wenhua', 0, '', 83, 0, '2016-06-08'),
(84, 83, '公司架构', 'jiagou', 'jiagou', 1, '', 84, 1, '2016-06-08'),
(87, 0, '大大', 'adsa', 'dsadsad', 0, '', 87, 1, '2016-06-12');

-- --------------------------------------------------------

--
-- 表的结构 `#_from`
--

CREATE TABLE IF NOT EXISTS `#_from` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '来源�?,
  `name_en` varchar(60) NOT NULL COMMENT '来源英文�?,
  `name_info` varchar(200) NOT NULL COMMENT '来源说明',
  `link` varchar(200) NOT NULL COMMENT '来源链接',
  `date` datetime NOT NULL COMMENT '添加 时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数�?`#_from`
--

INSERT INTO `#_from` (`id`, `name`, `name_en`, `name_info`, `link`, `date`) VALUES
(1, '明恒网络', '521m', '大大', 'www.521m.net', '0000-00-00 00:00:00'),
(2, 'ddd', 'ddd', 'ddd', 'dd', '2016-05-31 10:15:33'),
(3, 'dd', 'dd', 'dd', 'dd', '2016-06-06 14:31:44');

-- --------------------------------------------------------

--
-- 表的结构 `#_news`
--

CREATE TABLE IF NOT EXISTS `#_news` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `fromid` int(8) unsigned NOT NULL,
  `copyfrom` varchar(20) NOT NULL,
  `digest` varchar(300) NOT NULL,
  `uid` int(8) unsigned NOT NULL,
  `keyword` varchar(300) NOT NULL,
  `is_comment` tinyint(1) unsigned NOT NULL,
  `content` text NOT NULL,
  `photo` mediumtext NOT NULL,
  `time` int(20) unsigned NOT NULL,
  `sort` int(8) unsigned NOT NULL,
  `userip` varchar(15) NOT NULL,
  `count` int(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- 转存表中的数�?`#_news`
--

INSERT INTO `#_news` (`id`, `title`, `fromid`, `copyfrom`, `digest`, `uid`, `keyword`, `is_comment`, `content`, `photo`, `time`, `sort`, `userip`, `count`) VALUES
(87, 'ddddddddddddddddddd', 1, 'ddddddddddddddddddd', 'dddddddddddddddddddd', 87, 'dddddddddddddddddddddddddd', 0, '&lt;p&gt;dddddddddddddddddddddd&lt;img src=&quot;/ueditor/php/upload/image/20160708/1467949357882237.jpg&quot; title=&quot;1467949357882237.jpg&quot; alt=&quot;3.jpg&quot;/&gt;&lt;/p&gt;', '[".\\/Uploads\\/min\\/2016-07-08\\/1467949382261801031.jpeg"]', 1467949384, 1, '::1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `#_page`
--

CREATE TABLE IF NOT EXISTS `#_page` (
  `id` tinyint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` tinyint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `zhai` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `time` int(40) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- 转存表中的数�?`#_page`
--

INSERT INTO `#_page` (`id`, `uid`, `title`, `keyword`, `zhai`, `content`, `time`) VALUES
(84, 84, '公司架构2', '公司架构1', '公司架构1', '&lt;p&gt;公司架构1dsadsadsa&lt;/p&gt;', 1467948626);

-- --------------------------------------------------------

--
-- 表的结构 `#_site`
--

CREATE TABLE IF NOT EXISTS `#_site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(40) NOT NULL COMMENT '站点名称',
  `site_keywords` varchar(200) NOT NULL COMMENT '站点关键�?,
  `site_description` text NOT NULL COMMENT '站点描述',
  `site_admin_name` varchar(40) NOT NULL DEFAULT '悠乐cms' COMMENT '管理系统名称',
  `site_admin_version` varchar(10) CHARACTER SET utf32 NOT NULL COMMENT '版本�?,
  `site_admin_info` text NOT NULL COMMENT '页脚信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`#_site`
--

INSERT INTO `#_site` (`id`, `site_name`, `site_keywords`, `site_description`, `site_admin_name`, `site_admin_version`, `site_admin_info`) VALUES
(1, '悠乐cms系统', '悠乐,cms,后台管理', '悠乐cms内容管理系统，是由张明，在thinkPHP3.2.3的基础上开发的简易企业网站管理系统，供广大有建站需求的开发人员免费使用或者二次开发。不过请注明原创人员（QQ�?44822559；Tel:18591980321 Website:www.521m.net�?, '悠乐cms管理系统', '1.0.1', '<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>\n			Copyright ©2015 u-le.net All Rights Reserved.<br>\n			本后台系统由<a href="http://www.u-le.net/" target="_blank" title="U-le悠乐cms管理系统">悠乐cms管理系统</a>提供技术支�?/p>');

-- --------------------------------------------------------

--
-- 表的结构 `#_system`
--

CREATE TABLE IF NOT EXISTS `#_system` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL COMMENT '网站名称',
  `keyword` varchar(100) NOT NULL COMMENT '关键�?,
  `description` varchar(200) NOT NULL COMMENT '描述',
  `coryright` varchar(200) NOT NULL COMMENT '版权',
  `icp` varchar(100) NOT NULL COMMENT '备案�?,
  `count` text NOT NULL COMMENT '统计代码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站前台系统设置' AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`#_system`
--

INSERT INTO `#_system` (`id`, `name`, `keyword`, `description`, `coryright`, `icp`, `count`) VALUES
(1, '悠乐', '地接平台', '悠乐-www.u-le.net', '版权所有@悠乐地接', '陕ICP�?6002104�?, '2233');

-- --------------------------------------------------------

--
-- 表的结构 `#_user`
--

CREATE TABLE IF NOT EXISTS `#_user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL COMMENT '用户�?,
  `pass` varchar(42) NOT NULL COMMENT '密码',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '性别 默认�?',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
