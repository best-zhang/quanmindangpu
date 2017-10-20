/*
Navicat MySQL Data Transfer

Source Server         : banwagong
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : qmdp

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2017-10-20 01:17:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '商品名',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `integral` int(10) DEFAULT '0' COMMENT '积分',
  `standards` varchar(500) DEFAULT NULL COMMENT '商品规格',
  `detail` text COMMENT '商品详情',
  `covers` varchar(1000) DEFAULT NULL COMMENT '封面图片',
  `imgs` varchar(2000) DEFAULT NULL COMMENT '详情图片',
  `createby` int(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for `raise`
-- ----------------------------
DROP TABLE IF EXISTS `raise`;
CREATE TABLE `raise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT '项目名称',
  `title` varchar(500) DEFAULT NULL,
  `instruction` varchar(1000) DEFAULT NULL COMMENT '项目简介',
  `tel` varchar(100) DEFAULT NULL COMMENT '联系电话',
  `weixin` varchar(100) DEFAULT NULL COMMENT '微信',
  `qq` varchar(100) DEFAULT NULL COMMENT 'QQ',
  `target` decimal(10,0) NOT NULL COMMENT '众筹目标',
  `minimum` decimal(10,0) NOT NULL COMMENT '起投',
  `remainday` int(10) DEFAULT NULL COMMENT '剩余天数',
  `dtend` datetime DEFAULT NULL COMMENT '截止日期',
  `cover` varchar(200) DEFAULT NULL COMMENT '封面图片',
  `completed` decimal(10,0) DEFAULT NULL COMMENT '已完成',
  `detail` text COMMENT '项目详情',
  `prostatus` int(11) NOT NULL DEFAULT '0' COMMENT '项目状态  0-计划中 1-众筹中 2-已完成',
  `createby` varchar(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of raise
-- ----------------------------
INSERT INTO `raise` VALUES ('10', '全名当铺', '长安街当铺', '一个地处长安街有着丰富的文化底蕴的街头，熙熙攘攘的街头给当铺增添了不少人气。', '12345678991', '123444', '123455', '300', '3', '60', '2017-11-28 00:00:00', '1508396545.png', '0', '', '1', 'admin', '2017-10-19 15:02:57');

-- ----------------------------
-- Table structure for `raisedeal`
-- ----------------------------
DROP TABLE IF EXISTS `raisedeal`;
CREATE TABLE `raisedeal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `person` varchar(200) NOT NULL COMMENT '姓名',
  `projectid` int(10) NOT NULL COMMENT '项目id',
  `money` decimal(10,2) NOT NULL COMMENT '金额',
  `integral` int(10) DEFAULT NULL COMMENT '积分',
  `tradetime` datetime DEFAULT NULL COMMENT '交易时间',
  `address` varchar(1000) DEFAULT NULL COMMENT '交易地点',
  `jingban` varchar(200) NOT NULL COMMENT '经办人',
  `createby` varchar(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of raisedeal
-- ----------------------------
INSERT INTO `raisedeal` VALUES ('1', 'sss', '1', '2000.00', '100', '2017-03-12 00:00:00', 'dsadsad', 'rew', 'admin', '2017-10-19 23:57:23');
INSERT INTO `raisedeal` VALUES ('2', 'sss', '1', '2000.00', '100', '2017-03-12 00:00:00', 'dsadsad', 'rew', 'admin', '2017-10-19 23:59:22');
INSERT INTO `raisedeal` VALUES ('3', 'sss', '1', '200.00', '20', '2017-03-12 00:00:00', 'dsadsad', 'rew', 'admin', '2017-10-20 00:03:04');
INSERT INTO `raisedeal` VALUES ('4', 'ret', '3', '22.00', '0', '2017-10-20 00:00:00', '45646', '456464', 'admin', '2017-10-20 00:04:37');
INSERT INTO `raisedeal` VALUES ('5', '李白', '10', '3.00', '3000', '2017-10-20 00:00:00', '成都市锦江区春熙路', '销售A', 'admin', '2017-10-20 00:29:44');

-- ----------------------------
-- Table structure for `shop`
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '店铺名字',
  `address` varchar(500) DEFAULT NULL COMMENT '店铺地址',
  `leader` varchar(200) DEFAULT NULL COMMENT '店铺负责人',
  `tel` varchar(50) DEFAULT NULL COMMENT '联系电话',
  `createby` int(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(200) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(500) NOT NULL DEFAULT '' COMMENT '用户密码',
  `integral` int(10) DEFAULT '0' COMMENT '积分',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  `dtlast` datetime DEFAULT NULL COMMENT '最后一次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '0', '2017-10-10 21:41:48', null);
