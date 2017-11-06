/*
Navicat MySQL Data Transfer

Source Server         : banwagong
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : qmdp

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2017-11-07 00:32:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `basetype`
-- ----------------------------
DROP TABLE IF EXISTS `basetype`;
CREATE TABLE `basetype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of basetype
-- ----------------------------
INSERT INTO `basetype` VALUES ('1', '最新');
INSERT INTO `basetype` VALUES ('2', '热门');
INSERT INTO `basetype` VALUES ('3', '积分');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '商品名',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `integral` int(10) DEFAULT '0' COMMENT '积分',
  `goodstypeid` int(11) DEFAULT NULL COMMENT '商品种类id',
  `basetypeid` int(11) DEFAULT NULL COMMENT '归类id',
  `proid` int(11) DEFAULT NULL COMMENT '店铺(项目)id',
  `tel` varchar(100) DEFAULT NULL COMMENT '联系电话',
  `goodscode` varchar(500) DEFAULT NULL COMMENT '商品编号',
  `certificate` varchar(500) DEFAULT NULL COMMENT '证书',
  `size` varchar(500) DEFAULT NULL COMMENT '大小',
  `weight` varchar(500) DEFAULT NULL COMMENT '重量',
  `material` varchar(500) DEFAULT NULL COMMENT '材质',
  `imgs` varchar(2000) DEFAULT NULL COMMENT '图片',
  `detail` text COMMENT '商品详情',
  `createby` int(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('2', '促销费', '5000.00', '6225', '4', '2', '10', 'sdfgdsgd', 'XW211', 'gfert', '125*531*569', '12.5kg', '1265421', '1508679864.png,15086798641.png,15086798642.png,15086798643.png', 'gdgfsdgdsfgdsfg<strike>gdsgf</strike>dsdsfg<u>fdsgsdg<i>dsfgdsf</i><b style=\"\"><i>sdgf</i>d</b>d</u>dsgfdsfgsdgf<u>f<b style=\"\">gf<i>sd</i></b><i>g</i></u>', '0', '2017-10-22 21:44:34');

-- ----------------------------
-- Table structure for `goodsdeal`
-- ----------------------------
DROP TABLE IF EXISTS `goodsdeal`;
CREATE TABLE `goodsdeal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `userid` int(10) DEFAULT NULL COMMENT '用户',
  `goodsid` int(10) DEFAULT NULL COMMENT '商品',
  `proid` int(10) DEFAULT NULL COMMENT '店铺',
  `money` decimal(10,0) DEFAULT NULL COMMENT '金额',
  `integral` int(10) DEFAULT NULL COMMENT '积分',
  `tradetime` datetime DEFAULT NULL COMMENT '交易时间',
  `jingban` varchar(200) DEFAULT NULL COMMENT '经办人',
  `createby` int(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodsdeal
-- ----------------------------
INSERT INTO `goodsdeal` VALUES ('1', '1', '2', '10', '223', '0', '2017-10-18 00:00:00', '0', '0', '2017-10-22 22:07:29');

-- ----------------------------
-- Table structure for `goodstype`
-- ----------------------------
DROP TABLE IF EXISTS `goodstype`;
CREATE TABLE `goodstype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodstype
-- ----------------------------
INSERT INTO `goodstype` VALUES ('1', '玉器');
INSERT INTO `goodstype` VALUES ('2', '珠宝');
INSERT INTO `goodstype` VALUES ('3', '钻石');
INSERT INTO `goodstype` VALUES ('4', '黄金');
INSERT INTO `goodstype` VALUES ('5', '3C产品');
INSERT INTO `goodstype` VALUES ('6', '木质');
INSERT INTO `goodstype` VALUES ('7', '陶瓷');
INSERT INTO `goodstype` VALUES ('8', '石材');
INSERT INTO `goodstype` VALUES ('9', '复合');
INSERT INTO `goodstype` VALUES ('10', '装饰');
INSERT INTO `goodstype` VALUES ('11', '玻璃');
INSERT INTO `goodstype` VALUES ('12', '其他');

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
  `userid` int(10) NOT NULL COMMENT '姓名',
  `projectid` int(10) NOT NULL COMMENT '项目id',
  `money` decimal(10,2) NOT NULL COMMENT '金额',
  `integral` int(10) DEFAULT NULL COMMENT '积分',
  `tradetime` datetime DEFAULT NULL COMMENT '交易时间',
  `address` varchar(1000) DEFAULT NULL COMMENT '交易地点',
  `jingban` varchar(200) DEFAULT '' COMMENT '经办人',
  `createby` varchar(10) NOT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of raisedeal
-- ----------------------------
INSERT INTO `raisedeal` VALUES ('1', '2', '10', '2000.00', '100', '2017-03-12 00:00:00', 'dsadsad', '1', 'admin', '2017-10-19 23:57:23');
INSERT INTO `raisedeal` VALUES ('2', '2', '10', '2000.00', '100', '2017-03-12 00:00:00', 'dsadsad', '1', 'admin', '2017-10-19 23:59:22');
INSERT INTO `raisedeal` VALUES ('3', '4', '10', '200.00', '20', '2017-03-12 00:00:00', 'dsadsad', '2', 'admin', '2017-10-20 00:03:04');
INSERT INTO `raisedeal` VALUES ('4', '4', '10', '22.00', '0', '2017-10-20 00:00:00', '45646', '2', 'admin', '2017-10-20 00:04:37');
INSERT INTO `raisedeal` VALUES ('5', '2', '10', '3.00', '3000', '2017-10-20 00:00:00', '成都市锦江区春熙路', '0', 'admin', '2017-10-20 00:29:44');
INSERT INTO `raisedeal` VALUES ('6', '5', '10', '205.00', '0', '2017-10-19 00:00:00', '', '0', 'admin', '2017-10-22 21:55:28');
INSERT INTO `raisedeal` VALUES ('7', '6', '10', '20.00', '20000', '2017-10-04 00:00:00', 'gdfh', '0', 'admin', '2017-10-22 23:30:44');
INSERT INTO `raisedeal` VALUES ('8', '5', '10', '10.00', '10000', '2017-11-06 00:00:00', 'ggfdsg', 'ggf', 'admin', '2017-11-06 22:03:06');

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
  `name` varchar(500) DEFAULT NULL COMMENT '姓名',
  `sex` int(10) DEFAULT '0' COMMENT '性别  0-男,1-女',
  `age` int(10) DEFAULT '0' COMMENT '年龄',
  `tel` varchar(500) DEFAULT NULL COMMENT '联系电话',
  `integral` int(10) DEFAULT '0' COMMENT '积分',
  `birthday` date DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `superior` int(10) DEFAULT '0' COMMENT '上级',
  `createby` int(10) DEFAULT NULL COMMENT '添加者',
  `dtinsert` datetime NOT NULL COMMENT '添加时间',
  `dtlast` datetime DEFAULT NULL COMMENT '最后一次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '111111', '管理员', '0', '30', '028-66667722', '10000', '2000-02-03', '1509892939.jpg', '0', null, '2017-10-10 21:41:48', '2017-11-05 17:39:38');
INSERT INTO `user` VALUES ('2', 'test', '123456', '测试用户', '0', '23', '15962356986', '0', null, null, '1', null, '2017-10-23 17:04:23', null);
INSERT INTO `user` VALUES ('4', 'aa', '123456', 'hello', '1', '25', '2432354', '0', null, null, '1', '0', '2017-10-23 18:05:40', null);
INSERT INTO `user` VALUES ('5', 'hi', '123456', '生物学', '1', '23', '028-56598569', '0', null, null, '2', '0', '2017-11-06 22:01:27', null);
INSERT INTO `user` VALUES ('6', 'enen', '123456', '嗯嗯', '0', '20', '0265644', '0', null, null, '5', '0', '2017-11-06 22:04:45', null);
