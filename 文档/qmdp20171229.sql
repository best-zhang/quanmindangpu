/*
Navicat MySQL Data Transfer

Source Server         : banwagong
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : qmdp

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2017-12-29 00:04:20
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('3', '路易威登', '12000.00', '12000', '12', '1', '16', '13888812138', '00012138', '013211', '20*20', '10', '牛皮', '1510069125.jpg,15100691251.jpg,1510069128.jpg,1510069164.jpg', '<span style=\"color: rgb(51, 51, 51); font-family: arial, tahoma, &quot;Microsoft Yahei&quot;, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">自1854年以来，代代相传至今的路易威登，以卓越品质、杰出创意和精湛工艺成为时尚旅行艺术的象征</span><span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px; font-family: arial, tahoma, &quot;Microsoft Yahei&quot;, 宋体, sans-serif; text-indent: 28px;\">[1]</span><a class=\"sup-anchor\" name=\"ref_[1]_38569\" style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0; font-family: arial, tahoma, &quot;Microsoft Yahei&quot;, 宋体, sans-serif; text-indent: 28px; background-color: rgb(255, 255, 255);\">&nbsp;</a><span style=\"color: rgb(51, 51, 51); font-family: arial, tahoma, &quot;Microsoft Yahei&quot;, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">&nbsp;。产品包括手提包，旅行用品，小型皮具，配饰，鞋履，成衣，腕表，高级珠宝及个性化订制服务等。</span>', '0', '2017-11-07 23:41:49');
INSERT INTO `goods` VALUES ('4', '范思哲', '12000.00', '12000', '12', '3', '16', '13888812318', '00013216', '13213', '12*12', '1654', '棉', '1510069472.jpg', '', '0', '2017-11-07 23:54:28');
INSERT INTO `goods` VALUES ('5', '和田玉', '1200.00', '1200', '1', '1', '16', '13888812138', '123200', '1231', '2313', '21', '玉', '1510071593.jpg,1510071599.jpg', '', '0', '2017-11-08 00:20:37');
INSERT INTO `goods` VALUES ('6', '东方金钰 翡翠貔貅吊坠天然浅绿a货玉石项链 男女玉貔貅皮休挂件 款式二（糯种貔貅007）', '370.00', '370', '1', '1', '10', '13888812318', '东方金钰 翡翠貔貅吊坠天然浅绿a货玉石项链 男女玉貔貅皮休挂件 款式二（糯种貔貅007）', '地大证书', '10*10', '28.00g', '翡翠', '1510216212.jpg,1510216213.jpg,1510216214.jpg,1510217356.jpg', '', '0', '2017-11-09 16:49:18');
INSERT INTO `goods` VALUES ('7', '豪8印象 S86 天然翡翠玉镯 玉石原石 翡翠手镯 冰糯种翡翠 玉手镯', '345.00', '345', '1', '1', '19', '1388812138', 'HB14HS86', '云南省检', '10*10', '20', '冰糯种', '1510217656.jpg,15102176561.jpg,15102176562.jpg,1510217657.jpg', '', '0', '2017-11-09 16:54:20');
INSERT INTO `goods` VALUES ('8', '羽扬天然正品和田玉招财貔貅吊坠玉坠男女士款挂件玉石项链挂牌', '211.00', '211', '1', '2', '19', '1388812138', '21313131', '大帝', '20', '20', '玉器', '1510218543.jpg,1510218544.jpg,15102185441.jpg,1510218545.jpg', '', '0', '2017-11-09 17:09:17');
INSERT INTO `goods` VALUES ('9', '玉说 和田玉白玉元宝貔貅吊坠男款时尚貔貅玉石玉牌男女玉佩挂件', '3131.00', '3131', '1', '2', '19', '13888812138', '315511311', 'DADI', '30', '30', 'YUQI', '1510218744.jpg,15102187441.jpg,15102187442.jpg,1510218745.jpg', '', '0', '2017-11-09 17:14:03');
INSERT INTO `goods` VALUES ('10', '玉说 和田玉白玉元宝貔貅吊坠男款时尚貔貅玉石玉牌男女玉佩挂件', '3131.00', '3131', '1', '2', '19', '13888812138', '315511311', 'DADI', '30', '30', 'YUQI', '1510218744.jpg,15102187441.jpg,15102187442.jpg,1510218745.jpg', '', '0', '2017-11-09 17:15:24');
INSERT INTO `goods` VALUES ('11', '和田玉吊坠羊脂玉平安扣吊坠男士女款玉坠玉佩吊坠玉器玉石吊坠', '500.00', '500', '1', '1', '19', '13888812138', '11311313', 'DIU', '50', '20', 'YUQI', '1510219096.jpg,1510219097.jpg,15102190971.jpg,15102190972.jpg', '', '0', '2017-11-09 17:18:20');
INSERT INTO `goods` VALUES ('12', '和田玉吊坠羊脂玉平安扣吊坠男士女款玉坠玉佩吊坠玉器玉石吊坠', '500.00', '500', '1', '1', '19', '13888812138', '11311313', 'DIU', '50', '20', 'YUQI', '1510219096.jpg,1510219097.jpg,15102190971.jpg,15102190972.jpg', '', '0', '2017-11-09 17:20:23');
INSERT INTO `goods` VALUES ('13', '姬龙雪2017新款真皮包包女款品牌女包牛皮单肩名牌手提奢侈品大包', '10000.00', '10000', '12', '3', '19', '1388812138', '1313131', 'fuli', '100*200', '20', '牛皮', '1510219743.jpg,15102197431.jpg,15102197432.jpg,1510219744.jpg', '', '0', '2017-11-09 17:29:25');
INSERT INTO `goods` VALUES ('14', '姬龙雪2017新款真皮包包女款品牌女包牛皮单肩名牌手提奢侈品大包', '10000.00', '10000', '12', '1', '19', '1388812138', '1313131', 'fuli', '100*200', '20', '牛皮', '1510219743.jpg,15102197431.jpg,15102197432.jpg,1510219744.jpg', '', '0', '2017-11-09 17:29:55');
INSERT INTO `goods` VALUES ('15', 'UROK男士商务男正装皮鞋定制固特异手工真皮牛津鞋奢侈品婚鞋男', '2000.00', '2000', '12', '1', '19', '13888812318', '136433', 'kiah', '无', '100', '皮革', '1510220057.jpg,15102200571.jpg,1510220058.jpg', '', '0', '2017-11-09 17:34:24');
INSERT INTO `goods` VALUES ('16', 'UROK男士商务男正装皮鞋定制固特异手工真皮牛津鞋奢侈品婚鞋男', '2000.00', '2000', '12', '3', '19', '13888812318', '136433', 'kiah', '无', '100', '皮革', '1510220057.jpg,15102200571.jpg,1510220058.jpg', '', '0', '2017-11-09 17:34:37');
INSERT INTO `goods` VALUES ('17', '卡梵蒂鳄鱼皮卷包链条小包真皮化妆包奢侈品晚宴手包单肩斜夸女包', '12000.00', '12000', '12', '3', '19', '1388881234', '313132131', '卡峰', '75', '30', '皮革', '1510220505.jpg,15102205051.jpg,15102205052.jpg,1510220516.jpg', '', '0', '2017-11-09 17:46:04');
INSERT INTO `goods` VALUES ('18', '卡梵蒂鳄鱼皮卷包链条小包真皮化妆包奢侈品晚宴手包单肩斜夸女包', '12000.00', '12000', '12', '2', '19', '1388881234', '313132131', '卡峰', '75', '30', '皮革', '1510220505.jpg,15102205051.jpg,15102205052.jpg,1510220516.jpg', '', '0', '2017-11-09 17:46:12');
INSERT INTO `goods` VALUES ('19', '288元/g金利福黄金足金金条龙凤呈祥2克5克10克金条投资收藏礼品', '1440.00', '1440', '4', '3', '19', '13888812138', '431313', '无证书', '200*150', '5g 10g 20g 30g', '金条', '1510220993.jpg,1510220994.jpg', '', '0', '2017-11-09 17:49:59');
INSERT INTO `goods` VALUES ('20', '288元/g金利福黄金足金金条龙凤呈祥2克5克10克金条投资收藏礼品', '1440.00', '1440', '4', '1', '19', '13888812138', '431313', '无证书', '200*150', '5g 10g 20g 30g', '金条', '1510220993.jpg,1510220994.jpg', '', '0', '2017-11-09 17:50:08');
INSERT INTO `goods` VALUES ('21', '288元/g金利福黄金足金金条龙凤呈祥2克5克10克金条投资收藏礼品', '1440.00', '1440', '4', '2', '19', '13888812138', '431313', '无证书', '200*150', '5g 10g 20g 30g', '金条', '1510220993.jpg,1510220994.jpg', '', '0', '2017-11-09 17:50:14');
INSERT INTO `goods` VALUES ('22', '晴爱纯黄金子弹头男士黄金吊坠霸气项链999足金结婚礼物送男友', '749.00', '749', '4', '3', '18', '1388881312', '1341131', '无证书', '230', '花款（约重3.10g-3.19g）', '足金', '15102214861.jpg,1510221486.jpg,15102214862.jpg,15102214863.jpg', '', '0', '2017-11-09 17:58:09');
INSERT INTO `goods` VALUES ('23', '晴爱纯黄金子弹头男士黄金吊坠霸气项链999足金结婚礼物送男友', '749.00', '749', '4', '2', '18', '1388881312', '1341131', '无证书', '230', '花款（约重3.10g-3.19g）', '足金', '15102214861.jpg,1510221486.jpg,15102214862.jpg,15102214863.jpg', '', '0', '2017-11-09 17:58:19');
INSERT INTO `goods` VALUES ('24', '晴爱纯黄金子弹头男士黄金吊坠霸气项链999足金结婚礼物送男友', '749.00', '749', '4', '1', '18', '1388881312', '1341131', '无证书', '230', '花款（约重3.10g-3.19g）', '足金', '15102214861.jpg,1510221486.jpg,15102214862.jpg,15102214863.jpg', '', '0', '2017-11-09 17:59:42');
INSERT INTO `goods` VALUES ('26', 'Apple/苹果 iPhone X', '88888.00', '88888', '5', '1', '19', '13888812138', '123333', '无', '64G', '35', '复合', '1510796679.jpg,15107966791.jpg,15107966792.jpg,1510796680.jpg', '<p><img src=\"../uploads/1510796845.jpg\" style=\"width: 1318px;\"></p><p><img src=\"../uploads/1510796869.jpg\" style=\"width: 1318px;\"></p><p><img src=\"../uploads/1510796881.jpg\" style=\"width: 1092px;\"></p><p><img src=\"../uploads/1510796926.jpg\" style=\"width: 1312px;\"><br></p>', '0', '2017-11-16 09:49:06');
INSERT INTO `goods` VALUES ('27', '倍思苹果数据线iPhone6s/7/8plus/X1.2米快充充电线', '350.00', '350', '5', '1', '19', '13888812138', '13120', '无', '无', '5', '复合', '1510797268.jpg,15107972681.jpg,15107972682.jpg,1510797275.jpg', '<p><img src=\"../uploads/1510797415.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797445.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797459.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797471.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797492.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797508.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797525.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797538.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797547.jpg\" style=\"width: 790px;\"></p><p><img src=\"../uploads/1510797702.jpg\" style=\"width: 790px;\"><br></p><p><img src=\"../uploads/1510797564.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797575.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797587.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797600.jpg\" style=\"width: 790px;\"><img src=\"../uploads/1510797717.jpg\" style=\"width: 790px;\"><br></p>', '0', '2017-11-16 10:02:02');
INSERT INTO `goods` VALUES ('28', '倍思苹果数据线iPhone6s/7/8plus/X1.2米快充充电线', '350.00', '350', '5', '1', '19', '13888812138', '13120', '无', '无', '5', '复合', '1510797268.jpg,15107972681.jpg,15107972682.jpg,1510797275.jpg', '<p><img src=\"../uploads/1510797415.jpg\" style=\"width: 999.766px; height: 965.953px;\"><img src=\"../uploads/1510797445.jpg\" style=\"width: 999.766px; height: 1030.14px;\"><img src=\"../uploads/1510797459.jpg\" style=\"width: 999.766px; height: 966.862px;\"><img src=\"../uploads/1510797471.jpg\" style=\"width: 1000.42px; height: 1065px;\"><img src=\"../uploads/1510797492.jpg\" style=\"width: 999.766px; height: 799.813px;\"><img src=\"../uploads/1510797508.jpg\" style=\"width: 999.766px; height: 944.082px;\"><img src=\"../uploads/1510797525.jpg\" style=\"width: 999.766px; height: 995.969px;\"><img src=\"../uploads/1510797538.jpg\" style=\"width: 999.766px; height: 973.19px;\"><img src=\"../uploads/1510797547.jpg\" style=\"width: 999.766px; height: 1006.09px;\"></p><p><img src=\"../uploads/1510797702.jpg\" style=\"width: 999.766px; height: 976.986px;\"><br></p><p><img src=\"../uploads/1510797564.jpg\" style=\"width: 1000.52px; height: 941px;\"><img src=\"../uploads/1510797575.jpg\" style=\"width: 999.766px; height: 1037.73px;\"><img src=\"../uploads/1510797587.jpg\" style=\"width: 1000.77px; height: 852.551px;\"><img src=\"../uploads/1510797600.jpg\" style=\"width: 999.766px; height: 890.93px;\"><img src=\"../uploads/1510797717.jpg\" style=\"width: 1000.94px; height: 800px;\"><br></p>', '0', '2017-11-16 10:24:47');
INSERT INTO `goods` VALUES ('29', '小米九号平衡车智能体感代步车 电动蓝牙骑行遥控代步车双轮', '5222.00', '5222', '5', '2', '18', '13888812138', '220000', '无', '522', '200', '复合', '1510801561.jpg,15108015611.jpg,15108015612.jpg,15108015613.jpg', '<p><img src=\"../uploads/1510801851.jpg\" style=\"width: 540px;\"><img src=\"../uploads/1510801886.jpg\" style=\"width: 759.097px; height: 1995px;\"></p><p><img src=\"../uploads/1510801949.jpg\" style=\"width: 428px;\"><img src=\"../uploads/1510802057.jpg\" style=\"width: 624px;\"></p><p><img src=\"../uploads/1510802076.jpg\" style=\"width: 543px;\"><img src=\"../uploads/1510802090.jpg\" style=\"width: 671px;\"></p><p><br></p>', '0', '2017-11-16 11:15:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of raise
-- ----------------------------
INSERT INTO `raise` VALUES ('10', '全名当铺', '长安街当铺', '一个地处长安街有着丰富的文化底蕴的街头，熙熙攘攘的街头给当铺增添了不少人气。', '12345678991', '123444', '123455', '3000000', '3', '60', '2017-11-08 00:00:00', '1508396545.png', '3000000', '', '2', 'admin', '2017-10-19 15:02:57');
INSERT INTO `raise` VALUES ('12', '全名当铺1', '武侯区红牌楼', '这是一个有着历史背景的地方，作为红牌楼场镇的标志性建筑和民族和睦、商贸繁荣的象征，雄踞街头，壮观达远，盛名累世。', '13888812138', '88888', '123456789', '1500000', '3', '90', '2017-11-15 00:00:00', '1510043124.jpg', '300000', '投资保障及还款方式<div>资金用于投资全名当铺典当抵押放款业务，典当业务每月公开透明收取费用</div><div>客户不管是选择线上投资还是线下投资都是以实物抵押的形式进行</div>', '1', 'admin', '2017-11-07 16:32:07');
INSERT INTO `raise` VALUES ('13', 'fdds', 'fdsa', 'fdsfdsf', 'fdsfsadf', 'fdsafsa', '23424', '2110000', '210000', '15', '2017-11-22 22:23:40', '1510064606.jpg', '0', 'fdsafaf<b>fdsfsfaf</b><i style=\"\"><b>fdsafa</b>fdsa</i>', '1', 'admin', '2017-11-07 22:23:40');
INSERT INTO `raise` VALUES ('14', '全民当铺2', '高新区', '这里拥有全成都最优质的资源，赶快来吧！', '13888812138', '88888', '123456789', '3000000', '50000', '180', '2018-05-06 23:26:57', '1510068316.jpg', '0', '坐落于高新区金融城，此处拥有最繁华的地界', '0', 'admin', '2017-11-07 23:26:57');
INSERT INTO `raise` VALUES ('15', '全名当铺3', '青羊区', '青羊区，历史底蕴深，是古蜀文明和诗歌文化的发源地之一，', '13888812138', '88888', '123456789', '3000000', '50000', '60', '2018-01-06 23:31:12', '1510068600.jpg', '0', '青羊区拥有杜甫草堂、金沙遗址、宽窄巷子、青羊宫、文殊院等成都最为精华的历史遗迹。深厚的历史积淀带来无限的历史记忆', '0', 'admin', '2017-11-07 23:31:12');
INSERT INTO `raise` VALUES ('16', '全名当铺4', '金牛区', '金牛区已建设成为成都市的经济大区', '13888812138', '88888', '123456789', '3330000', '50000', '64', '2018-01-10 23:34:03', '1510068839.jpg', '0', '拥有现代商贸业、电子信息服务业、轨道交通产业、工程技术服务业、现代医药产业、都市旅游业等六大重点产业，形成西部科技商务中心、北部工业总部基地、北部商贸城、中央欢乐区、金牛城市中心、城北城市商业中心、凤凰新城等七大功能板块。', '0', 'admin', '2017-11-07 23:34:03');
INSERT INTO `raise` VALUES ('17', '全名当铺5', '天府新区', '四川天府新区规划于2010年，人口预测600万人，涉及成都市的天府新区成都直管区、成都高新区、双流区、龙泉驿区、新津县、简阳市，眉山市的彭山区、仁寿县，规划面积1578平方公里，其中成都规划范围为1484平方公里，约占整个天府新区规划面积的94.04%。', '13888812138', '1321231', '2161561561', '3000000', '50000', '90', '2018-02-06 00:24:44', '1510071852.jpg', '0', '<span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">四川天府新区规划于2010年，人口预测600万人，涉及成都市的</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%A4%A9%E5%BA%9C%E6%96%B0%E5%8C%BA%E6%88%90%E9%83%BD%E7%9B%B4%E7%AE%A1%E5%8C%BA\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">天府新区成都直管区</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%88%90%E9%83%BD%E9%AB%98%E6%96%B0%E5%8C%BA\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">成都高新区</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%8F%8C%E6%B5%81%E5%8C%BA\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">双流区</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E9%BE%99%E6%B3%89%E9%A9%BF%E5%8C%BA\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">龙泉驿区</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%96%B0%E6%B4%A5%E5%8E%BF\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">新津县</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E7%AE%80%E9%98%B3%E5%B8%82\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">简阳市</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">，眉山市的</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%BD%AD%E5%B1%B1%E5%8C%BA\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">彭山区</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">、</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%BB%81%E5%AF%BF%E5%8E%BF\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">仁寿县</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">，规划面积1578</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%B9%B3%E6%96%B9%E5%85%AC%E9%87%8C\" style=\"color: rgb(19, 110, 194); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);\">平方公里</a><span style=\"color: rgb(51, 51, 51); font-family: arial, 宋体, sans-serif; font-size: 14px; text-indent: 28px;\">，其中成都规划范围为1484平方公里，约占整个天府新区规划面积的94.04%。</span>', '0', 'admin', '2017-11-08 00:24:44');
INSERT INTO `raise` VALUES ('18', '全名当铺6', '双流', '双流区位于成都市西南，东连龙泉驿区和简阳市，南接眉山市仁寿县和彭山区，西邻新津县和崇州市，北靠温江区、青羊区、武侯区及锦江区。区人民政府驻东升街道，', '13888812138', '116316561', '321561', '3200000', '50000', '180', '2018-05-07 00:27:45', '1510072024.jpg', '50000', '<span style=\"color: rgb(204, 0, 0); font-family: arial;\">双流</span><span style=\"color: rgb(51, 51, 51); font-family: arial;\">区位于成都市西南，东连龙泉驿区和简阳市，南接眉山市仁寿县和彭山区，西邻新津县和崇州市，北靠温江区、青羊区、武侯区及锦江区。区人民政府驻东升街道，</span>', '0', 'admin', '2017-11-08 00:27:45');
INSERT INTO `raise` VALUES ('19', '全名当铺7', '锦江区', '锦江区是成都市11个市辖区之一，成立于1991年1月1日。锦江区命名源于“濯锦之江”（锦江）的历史渊源，是成都市中心城区之一。区域范围包括原东城区的大部分和原金牛区的琉璃场、三圣两乡。锦江区属地为古华阳县及其近郊，具有悠久的商业历史。', '15313131', '131313', '1321156165', '5000000', '50000', '90', '2018-02-06 00:33:27', '1510072381.jpg', '0', '<span style=\"color: rgb(204, 0, 0); font-family: arial;\">锦江区</span><span style=\"color: rgb(51, 51, 51); font-family: arial;\">是成都市11个市辖区之一，成立于1991年1月1日。</span><span style=\"color: rgb(204, 0, 0); font-family: arial;\">锦江区</span><span style=\"color: rgb(51, 51, 51); font-family: arial;\">命名源于“濯锦之江”（</span><span style=\"color: rgb(204, 0, 0); font-family: arial;\">锦江</span><span style=\"color: rgb(51, 51, 51); font-family: arial;\">）的历史渊源，是成都市中心城区之一。区域范围包括原东城区的大部分和原金牛区的琉璃场、三圣两乡。</span><span style=\"color: rgb(204, 0, 0); font-family: arial;\">锦江区</span><span style=\"color: rgb(51, 51, 51); font-family: arial;\">属地为古华阳县及其近郊，具有悠久的商业历史。</span>', '0', 'admin', '2017-11-08 00:33:27');
INSERT INTO `raise` VALUES ('20', '测试项目', '这是测试的', '疯狂房价看法许昌县', '028-36562322', 'heheh', '235623300', '1000000', '10000', '30', '2017-12-15 22:28:52', '1510755983.jpg', '0', '<p><span style=\"font-weight: bold; color: rgb(255, 0, 255);\">这简直是太好了</span></p><p><span style=\"color: rgb(255, 0, 255);\"><span style=\"font-weight: bold;\">非常</span><span style=\"font-family: 新宋体;\"><span style=\"font-weight: bold;\">漂亮的珍珠，不信你买来试试看</span><span style=\"font-style: italic;\">，信不信由你</span></span></span></p><p><span style=\"font-size: 36px; color: rgb(0, 255, 0);\">﻿哈哈~~<span style=\"font-family: 华文行楷;\">真的不错的东西哦!</span></span><span style=\"color: rgb(255, 0, 255);\"><span style=\"font-family: 新宋体;\"><span style=\"font-style: italic;\"><br></span></span></span></p><p><img src=\"../uploads/1510756000.jpg\" style=\"width: 790px;\"><br></p>', '1', 'admin', '2017-11-15 22:28:52');
INSERT INTO `raise` VALUES ('21', 'Terrible People Magazine', 'Terrible People Magazine', 'A new culture and lifestyle magazine exploring the dark sides of human nature through essays, interviews, illustration and photography.', '135844500', '450000', '16546316', '3000000', '200000', '90', '2018-02-14 11:34:14', '1510802902.jpg', '0', '<div class=\"full-description js-full-description responsive-media formatted-lists\" deep=\"10\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.5em; vertical-align: baseline; word-wrap: break-word;\"><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803204.gif\" style=\"width: 680px;\"><img src=\"../uploads/1510803179.gif\" style=\"width: 680px;\"></p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803189.jpg\" style=\"width: 680px;\"></p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803226.gif\" style=\"width: 680px;\"><img src=\"../uploads/1510803244.jpg\" style=\"width: 680px;\"><br></p></div>', '0', 'admin', '2017-11-16 11:34:14');
INSERT INTO `raise` VALUES ('22', 'Terrible People Magazine', 'Terrible People Magazine', 'A new culture and lifestyle magazine exploring the dark sides of human nature through essays, interviews, illustration and photography.', '135844500', '450000', '16546316', '3000000', '200000', '90', '2018-02-14 11:34:35', '1510802902.jpg', '0', '<div class=\"full-description js-full-description responsive-media formatted-lists\" deep=\"10\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.5em; vertical-align: baseline; word-wrap: break-word;\"><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Liberation Sans&quot;, FreeSans, sans-serif; font-size: 1.6rem; vertical-align: baseline; color: rgb(53, 53, 53);\">We are now working on issue 2 in a smaller team than at the beginning. 3 of us continued working on the second issue:&nbsp;Jennifer (from Germany with a background in Print and Media Technologies), Oriane (from France with a background in Graphic Design) and&nbsp;Yuting (from Taiwan with a background in Business Management).</p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Liberation Sans&quot;, FreeSans, sans-serif; font-size: 1.6rem; vertical-align: baseline; color: rgb(53, 53, 53);\">The next issue is going to have a similar structure as the first one. Therefore, we are keeping features like the unrecommendations, articles about politics &amp; culture, interviews, illustrations and photoshoots.&nbsp;Our booklet in the middle of the magazine will again present a political article, giving it the importance it deserves.</p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803204.gif\" style=\"width: 680px;\"><img src=\"../uploads/1510803179.gif\" style=\"width: 680px;\"></p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803189.jpg\" style=\"width: 680px;\"></p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\"><img src=\"../uploads/1510803226.gif\" style=\"width: 680px;\"><img src=\"../uploads/1510803244.jpg\" style=\"width: 680px;\"><br></p></div>', '1', 'admin', '2017-11-16 11:34:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

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
INSERT INTO `raisedeal` VALUES ('9', '6', '13', '120000.00', '12000', '2017-11-06 00:00:00', 'dsgfd', 'gfdsgds', 'admin', '2017-11-07 22:26:28');
INSERT INTO `raisedeal` VALUES ('10', '6', '14', '3300000.00', '330000', '2017-11-08 00:00:00', '玉林街', '老王', 'admin', '2017-11-07 23:35:12');
INSERT INTO `raisedeal` VALUES ('20', '5', '18', '10000.00', '1000', '2017-11-06 00:00:00', 'dsa', 'daqeqew', 'admin', '2017-11-08 14:27:16');

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
  `manager` int(1) NOT NULL DEFAULT '1' COMMENT '是否是后台管理员, 0-是;1-不是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '111111', '管理员', '1', '30', '028-66667722', '2000', '2017-03-07', '1510221994.jpg', '0', null, '2017-10-10 21:41:48', '2017-12-28 23:31:22', '0');
INSERT INTO `user` VALUES ('2', 'test', '123456', '测试用户', '0', '23', '15962356986', '1000', null, null, '1', null, '2017-10-23 17:04:23', '2017-12-28 23:57:27', '1');
INSERT INTO `user` VALUES ('4', 'aa', '123456', 'hello', '1', '25', '2432354', '1000', null, null, '1', '0', '2017-10-23 18:05:40', null, '1');
INSERT INTO `user` VALUES ('5', 'hi', '123456', '生物学', '1', '23', '028-56598569', '1000', null, null, '2', '0', '2017-11-06 22:01:27', '2017-11-13 10:39:44', '1');
INSERT INTO `user` VALUES ('6', 'enen', '123456', '嗯嗯', '0', '20', '0265644', '0', null, null, '5', '0', '2017-11-06 22:04:45', '2017-11-13 10:51:45', '1');
INSERT INTO `user` VALUES ('7', 'mytest', '123456', '还是测试用户', '0', '28', '028-96985698', '0', null, null, '2', '0', '2017-11-14 12:15:23', null, '1');
INSERT INTO `user` VALUES ('10', '00001', '123456', '老王', '0', '23', '13888812138', '0', null, null, '1', '0', '2017-11-16 09:24:51', null, '1');
INSERT INTO `user` VALUES ('11', '111', '123456', '正在', '0', '32', '1313131', '0', null, null, '1', '0', '2017-11-25 15:39:57', null, '1');
INSERT INTO `user` VALUES ('12', '00000000', '123456', '全民当铺', '0', '10', '000000000', '0', null, null, '1', '0', '2017-12-01 17:26:59', null, '1');
