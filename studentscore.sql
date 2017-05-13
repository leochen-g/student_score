/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : studentscore

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-05-12 00:37:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `name` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `password` varchar(20) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('qq', '1234');
INSERT INTO `admin` VALUES ('lidong', '1234');
INSERT INTO `admin` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for certificate
-- ----------------------------
DROP TABLE IF EXISTS `certificate`;
CREATE TABLE `certificate` (
  `sid` varchar(30) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `estate` varchar(20) DEFAULT NULL,
  `enum` varchar(30) DEFAULT NULL,
  `etype` varchar(30) DEFAULT NULL,
  `ccredit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sid`,`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of certificate
-- ----------------------------
INSERT INTO `certificate` VALUES ('412727199405087000', '刘正威', '1', '计算机基础及MS Office应用', '已邮寄', '8234693749', '申通', '一级');
INSERT INTO `certificate` VALUES ('340104198411091011', '刘彪', '1', '计算机基础及MS Office应用', '已邮寄', '8234693750', '申通', '一级');
INSERT INTO `certificate` VALUES ('340222198908140016', '刘醒', '1', '计算机基础及MS Office应用', '已邮寄', '8234693751', '申通', '一级');
INSERT INTO `certificate` VALUES ('340122198812041667', '张宝凤', '1', '计算机基础及MS Office应用', '已邮寄', '8234693752', '申通', '一级');
INSERT INTO `certificate` VALUES ('340222199301140049', '俞慧敏', '1', '计算机基础及MS Office应用', '已邮寄', '8234693753', '申通', '一级');
INSERT INTO `certificate` VALUES ('340121199109079000', '杜田甜', '5', 'C++ 语言程序设计', '已邮寄', '8234693754', '申通', '二级');
INSERT INTO `certificate` VALUES ('340104198405042088', '郑盼盼', '5', 'C++ 语言程序设计', '已邮寄', '8234693755', '申通', '二级');
INSERT INTO `certificate` VALUES ('340323199112201940', '张茜', '5', 'C++ 语言程序设计', '已邮寄', '8234693756', '申通', '二级');
INSERT INTO `certificate` VALUES ('340102199705301047', '王孝云', '5', 'C++ 语言程序设计', '已邮寄', '8234693757', '申通', '二级');
INSERT INTO `certificate` VALUES ('34010319770419251X', '陈志强', '5', 'C++ 语言程序设计', '已邮寄', '8234693758', '圆通', '二级');
INSERT INTO `certificate` VALUES ('340121198806247304', '尹少云', '5', 'C++ 语言程序设计', '已邮寄', '8234693759', '圆通', '二级');
INSERT INTO `certificate` VALUES ('341224199103129870', '王启蒙', '5', 'C++ 语言程序设计', '已邮寄', '8234693760', '圆通', '二级');
INSERT INTO `certificate` VALUES ('340121199603084001', '孙雨婷', '5', 'C++ 语言程序设计', '已邮寄', '8234693761', '圆通', '二级');
INSERT INTO `certificate` VALUES ('341221199201012941', '李莲芳', '5', 'C++ 语言程序设计', '已邮寄', '8234693762', '圆通', '二级');
INSERT INTO `certificate` VALUES ('340104198112280015', '袁飞', '5', 'C++ 语言程序设计', '已邮寄', '8234693763', '圆通', '二级');
INSERT INTO `certificate` VALUES ('340803198701032417', '黄维', '6', 'Visual Basic语言程序设计', '已邮寄', '8234693764', '圆通', '二级');
INSERT INTO `certificate` VALUES ('34011119951213156X', '祁雨星', '6', 'Visual Basic语言程序设计', '已邮寄', '8234693765', '圆通', '二级');
INSERT INTO `certificate` VALUES ('340823199009085328', '钱长平', '6', 'Visual Basic语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341103199011163628', '潘倩', '6', 'Visual Basic语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340123199511194708', '李梁霞', '6', 'Visual Basic语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('342921199811143219', '杨壮', '6', 'Visual Basic语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340111197808081531', '方员', '6', 'Visual Basic语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340421199204150223', '胡晓蕾', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340702198904250519', '梅飞', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340102199604302526', '凌莉', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340823199512192569', '方杰', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340826199212249219', '程华俊', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340406199506112827', '李周金梦', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340122199408020068', '胡敏', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340121199304153767', '金余玲', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341622199708290914', '孙孝宁', '7', 'Java 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340103199404253519', '孟佛实', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('342225198603270531', '曹金刚', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341225198501161210', '宁建', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('342221198408180519', '朱爱彬', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340111198709203032', '李小华', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340404199410252611', '蔡磊', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340121197601096405', '陈方针', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340826198808140092', '胡煜', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340826198907260030', '程翔', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('342625199509271745', '计贤玲', '5', 'C++ 语言程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341281199502090325', '鲁月瑶', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341202198803043311', '郝大伟', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('342426198712020416', '芮少先', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341222199410081421', '李东柯', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341125199011206518', '曹梦闲', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('340604199309190226', '戎晓莉', '8', 'Access 数据库程序设计', '未邮寄', '', '', '二级');
INSERT INTO `certificate` VALUES ('341221198906018265', '牛勤', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340825199201170023', '江晓丽', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342426199404133210', '李华兵', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('360428198706200618', '邹小彬', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342623198802055526', '钱静', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340121198810275981', '孟苹', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340121198406058811', '郑兴', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('34010419800620203X', '吴松', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('411627199208175127', '司胜男', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('34162119901228152X', '徐小珍', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340111199004224540', '龚雪', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('610526198707171913', '高岩昊', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('341221199408197031', '梁保龙', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('320123199511060415', '翁志屿', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342423199508151174', '吕友虎', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('341281199402106609', '张紫蒙', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342425199502200839', '戴静安', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340826199511275273', '陈豪', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340827199209143436', '虞建国', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340602199702031448', '冯爱欣', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('421002199612260018', '刘晟昊', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('320621199603300716', '张维伦', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340825199508040813', '丁敏', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340822199406182627', '张金婷', '2', '计算机基础及WPS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340811199510245115', '李谱', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('341221199510027741', '洪双双', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('130426199605181912', '韩超', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342601199607011815', '沐鹏杰', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('342224199708201442', '张素素', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('341222199610104691', '张佳乐', '1', '计算机基础及MS Office应用', '未邮寄', '', '', '一级');
INSERT INTO `certificate` VALUES ('340123199506236221', '李慧慧', '1', '计算机基础及MS Office应用', '已邮寄', '482179423', 'EMS', '一级');
INSERT INTO `certificate` VALUES ('341182199304076419', '杨正雨', '1', '计算机基础及MS Office应用', '已邮寄', '482179424', 'EMS', '一级');
INSERT INTO `certificate` VALUES ('13073219970129307X', '王晓刚', '1', '计算机基础及MS Office应用', '已邮寄', '482179425', 'EMS', '一级');
INSERT INTO `certificate` VALUES ('342625199404020712', '齐从斌', '1', '计算机基础及MS Office应用', '已邮寄', '482179426', 'EMS', '一级');
INSERT INTO `certificate` VALUES ('131126199310020040', '韩旭', '6', 'Visual Basic语言程序设计', '已邮寄', '482179427', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('341225199502194641', '刘海艳', '6', 'Visual Basic语言程序设计', '已邮寄', '482179428', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('340621199309062431', '赵永奇', '6', 'Visual Basic语言程序设计', '已邮寄', '482179429', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('342623199008098961', '张露', '6', 'Visual Basic语言程序设计', '已邮寄', '482179430', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('321102199301251044', '颜玉洁', '6', 'Visual Basic语言程序设计', '已邮寄', '482179431', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('341881199406052225', '肖广宁', '6', 'Visual Basic语言程序设计', '已邮寄', '482179432', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('340406199112193011', '陶李', '6', 'Visual Basic语言程序设计', '已邮寄', '482179433', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('33012719951120421X', '王荣辉', '6', 'Visual Basic语言程序设计', '已邮寄', '482179434', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('341227199102103424', '王洁', '6', 'Visual Basic语言程序设计', '已邮寄', '482179435', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('342622199508305510', '卢攀', '6', 'Visual Basic语言程序设计', '已邮寄', '482179436', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('12010219941029263X', '赵', '6', 'Visual Basic语言程序设计', '已邮寄', '482179437', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('340123198906083119', '汪鹏', '6', 'Visual Basic语言程序设计', '已邮寄', '482179438', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('342921199405131220', '陈丽臣', '6', 'Visual Basic语言程序设计', '已邮寄', '482179439', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('340221199611231265', '王萍', '6', 'Visual Basic语言程序设计', '已邮寄', '482179440', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('142429199612115924', '石振佳', '6', 'Visual Basic语言程序设计', '已邮寄', '482179441', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('342425199709067625', '秦静静', '6', 'Visual Basic语言程序设计', '已邮寄', '482179442', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('362204199412098114', '陈雪飞', '6', 'Visual Basic语言程序设计', '已邮寄', '482179443', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('34242219961228363X', '徐中森', '6', 'Visual Basic语言程序设计', '已邮寄', '482179444', 'EMS', '二级');
INSERT INTO `certificate` VALUES ('342622199604201412', '赵子健', '6', 'Visual Basic语言程序设计', '已邮寄', '482179445', 'EMS', '二级');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `classid` int(3) NOT NULL,
  `sdeptid` int(3) NOT NULL,
  `sclass` varchar(20) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`classid`,`sdeptid`),
  KEY `class_fk` (`sdeptid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '1', '计01班');
INSERT INTO `class` VALUES ('2', '1', '计02班');
INSERT INTO `class` VALUES ('3', '1', '计03班');
INSERT INTO `class` VALUES ('4', '1', '计04班');
INSERT INTO `class` VALUES ('1', '2', '计05班');
INSERT INTO `class` VALUES ('2', '2', '计06班');
INSERT INTO `class` VALUES ('3', '2', '软07班');
INSERT INTO `class` VALUES ('4', '2', '软08班');
INSERT INTO `class` VALUES ('1', '3', '软09班');
INSERT INTO `class` VALUES ('2', '3', '软10班');
INSERT INTO `class` VALUES ('3', '3', '网11班');
INSERT INTO `class` VALUES ('1', '4', '网12班');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `cid` varchar(10) CHARACTER SET gb2312 NOT NULL,
  `cname` varchar(40) CHARACTER SET gb2312 NOT NULL,
  `ccredit` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '计算机基础及MS Office应用', '一级');
INSERT INTO `course` VALUES ('2', '计算机基础及WPS Office应用', '一级');
INSERT INTO `course` VALUES ('3', '计算机基础及Photoshop应用', '一级');
INSERT INTO `course` VALUES ('4', '计算机基础及Photoshop应用', '二级');
INSERT INTO `course` VALUES ('5', 'C++ 语言程序设计', '二级');
INSERT INTO `course` VALUES ('6', 'Visual Basic语言程序设计', '二级');
INSERT INTO `course` VALUES ('7', 'Java 语言程序设计', '二级');
INSERT INTO `course` VALUES ('8', 'Access 数据库程序设计', '二级');
INSERT INTO `course` VALUES ('9', 'Visual Foxpro数据库程序设计', '二级');

-- ----------------------------
-- Table structure for grade
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade` (
  `sid` varchar(30) CHARACTER SET gb2312 NOT NULL,
  `sname` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `cid` varchar(10) CHARACTER SET gb2312 NOT NULL,
  `cname` varchar(100) CHARACTER SET gb2312 NOT NULL,
  `sgrade` float NOT NULL,
  `cdate` varchar(20) COLLATE utf8_bin NOT NULL,
  `ccredit` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`sid`,`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of grade
-- ----------------------------
INSERT INTO `grade` VALUES ('412727199405087000', '刘正威', '1', '计算机基础及MS Office应用', '86', '201612', '一级');
INSERT INTO `grade` VALUES ('340104198411091011', '刘彪', '1', '计算机基础及MS Office应用', '87', '201612', '一级');
INSERT INTO `grade` VALUES ('340222198908140016', '刘醒', '1', '计算机基础及MS Office应用', '88', '201612', '一级');
INSERT INTO `grade` VALUES ('340122198812041667', '张宝凤', '1', '计算机基础及MS Office应用', '89', '201612', '一级');
INSERT INTO `grade` VALUES ('340222199301140049', '俞慧敏', '1', '计算机基础及MS Office应用', '90', '201612', '一级');
INSERT INTO `grade` VALUES ('340121199109079000', '杜田甜', '5', 'C++ 语言程序设计', '91', '201612', '二级');
INSERT INTO `grade` VALUES ('340104198405042088', '郑盼盼', '5', 'C++ 语言程序设计', '92', '201612', '二级');
INSERT INTO `grade` VALUES ('340323199112201940', '张茜', '5', 'C++ 语言程序设计', '93', '201612', '二级');
INSERT INTO `grade` VALUES ('340102199705301047', '王孝云', '5', 'C++ 语言程序设计', '94', '201612', '二级');
INSERT INTO `grade` VALUES ('34010319770419251X', '陈志强', '5', 'C++ 语言程序设计', '95', '201612', '二级');
INSERT INTO `grade` VALUES ('340121198806247304', '尹少云', '5', 'C++ 语言程序设计', '96', '201612', '二级');
INSERT INTO `grade` VALUES ('341224199103129870', '王启蒙', '5', 'C++ 语言程序设计', '69', '201612', '二级');
INSERT INTO `grade` VALUES ('340121199603084001', '孙雨婷', '5', 'C++ 语言程序设计', '70', '201612', '二级');
INSERT INTO `grade` VALUES ('341221199201012941', '李莲芳', '5', 'C++ 语言程序设计', '71', '201703', '二级');
INSERT INTO `grade` VALUES ('340104198112280015', '袁飞', '5', 'C++ 语言程序设计', '72', '201703', '二级');
INSERT INTO `grade` VALUES ('340803198701032417', '黄维', '6', 'Visual Basic语言程序设计', '73', '201703', '二级');
INSERT INTO `grade` VALUES ('34011119951213156X', '祁雨星', '6', 'Visual Basic语言程序设计', '74', '201703', '二级');
INSERT INTO `grade` VALUES ('340823199009085328', '钱长平', '6', 'Visual Basic语言程序设计', '75', '201703', '二级');
INSERT INTO `grade` VALUES ('341103199011163628', '潘倩', '6', 'Visual Basic语言程序设计', '76', '201703', '二级');
INSERT INTO `grade` VALUES ('340123199511194708', '李梁霞', '6', 'Visual Basic语言程序设计', '77', '201703', '二级');
INSERT INTO `grade` VALUES ('342921199811143219', '杨壮', '6', 'Visual Basic语言程序设计', '78', '201703', '二级');
INSERT INTO `grade` VALUES ('340111197808081531', '方员', '6', 'Visual Basic语言程序设计', '79', '201703', '二级');
INSERT INTO `grade` VALUES ('340421199204150223', '胡晓蕾', '7', 'Java 语言程序设计', '80', '201703', '二级');
INSERT INTO `grade` VALUES ('340702198904250519', '梅飞', '7', 'Java 语言程序设计', '81', '201703', '二级');
INSERT INTO `grade` VALUES ('340102199604302526', '凌莉', '7', 'Java 语言程序设计', '82', '201703', '二级');
INSERT INTO `grade` VALUES ('340823199512192569', '方杰', '7', 'Java 语言程序设计', '83', '201703', '二级');
INSERT INTO `grade` VALUES ('340826199212249219', '程华俊', '7', 'Java 语言程序设计', '84', '201703', '二级');
INSERT INTO `grade` VALUES ('340406199506112827', '李周金梦', '7', 'Java 语言程序设计', '85', '201703', '二级');
INSERT INTO `grade` VALUES ('340122199408020068', '胡敏', '7', 'Java 语言程序设计', '86', '201703', '二级');
INSERT INTO `grade` VALUES ('340121199304153767', '金余玲', '7', 'Java 语言程序设计', '87', '201703', '二级');
INSERT INTO `grade` VALUES ('341622199708290914', '孙孝宁', '7', 'Java 语言程序设计', '88', '201703', '二级');
INSERT INTO `grade` VALUES ('340103199404253519', '孟佛实', '5', 'C++ 语言程序设计', '89', '201703', '二级');
INSERT INTO `grade` VALUES ('342225198603270531', '曹金刚', '5', 'C++ 语言程序设计', '90', '201703', '二级');
INSERT INTO `grade` VALUES ('341225198501161210', '宁建', '5', 'C++ 语言程序设计', '91', '201703', '二级');
INSERT INTO `grade` VALUES ('342221198408180519', '朱爱彬', '5', 'C++ 语言程序设计', '92', '201703', '二级');
INSERT INTO `grade` VALUES ('340111198709203032', '李小华', '5', 'C++ 语言程序设计', '93', '201703', '二级');
INSERT INTO `grade` VALUES ('340404199410252611', '蔡磊', '5', 'C++ 语言程序设计', '94', '201703', '二级');
INSERT INTO `grade` VALUES ('340121197601096405', '陈方针', '5', 'C++ 语言程序设计', '50', '201703', '二级');
INSERT INTO `grade` VALUES ('340826198808140092', '胡煜', '5', 'C++ 语言程序设计', '51', '201703', '二级');
INSERT INTO `grade` VALUES ('340826198907260030', '程翔', '5', 'C++ 语言程序设计', '52', '201703', '二级');
INSERT INTO `grade` VALUES ('342625199509271745', '计贤玲', '5', 'C++ 语言程序设计', '53', '201703', '二级');
INSERT INTO `grade` VALUES ('341281199502090325', '鲁月瑶', '8', 'Access 数据库程序设计', '54', '201703', '二级');
INSERT INTO `grade` VALUES ('341202198803043311', '郝大伟', '8', 'Access 数据库程序设计', '55', '201703', '二级');
INSERT INTO `grade` VALUES ('342426198712020416', '芮少先', '8', 'Access 数据库程序设计', '56', '201703', '二级');
INSERT INTO `grade` VALUES ('341222199410081421', '李东柯', '8', 'Access 数据库程序设计', '57', '201703', '二级');
INSERT INTO `grade` VALUES ('341125199011206518', '曹梦闲', '8', 'Access 数据库程序设计', '58', '201703', '二级');
INSERT INTO `grade` VALUES ('340604199309190226', '戎晓莉', '8', 'Access 数据库程序设计', '59', '201703', '二级');
INSERT INTO `grade` VALUES ('341221198906018265', '牛勤', '2', '计算机基础及WPS Office应用', '60', '201703', '一级');
INSERT INTO `grade` VALUES ('340825199201170023', '江晓丽', '2', '计算机基础及WPS Office应用', '61', '201703', '一级');
INSERT INTO `grade` VALUES ('342426199404133210', '李华兵', '2', '计算机基础及WPS Office应用', '62', '201703', '一级');
INSERT INTO `grade` VALUES ('360428198706200618', '邹小彬', '2', '计算机基础及WPS Office应用', '63', '201703', '一级');
INSERT INTO `grade` VALUES ('342623198802055526', '钱静', '2', '计算机基础及WPS Office应用', '64', '201703', '一级');
INSERT INTO `grade` VALUES ('340121198810275981', '孟苹', '2', '计算机基础及WPS Office应用', '65', '201703', '一级');
INSERT INTO `grade` VALUES ('340121198406058811', '郑兴', '2', '计算机基础及WPS Office应用', '66', '201703', '一级');
INSERT INTO `grade` VALUES ('34010419800620203X', '吴松', '2', '计算机基础及WPS Office应用', '67', '201703', '一级');
INSERT INTO `grade` VALUES ('411627199208175127', '司胜男', '2', '计算机基础及WPS Office应用', '68', '201703', '一级');
INSERT INTO `grade` VALUES ('34162119901228152X', '徐小珍', '2', '计算机基础及WPS Office应用', '69', '201703', '一级');
INSERT INTO `grade` VALUES ('340111199004224540', '龚雪', '2', '计算机基础及WPS Office应用', '70', '201703', '一级');
INSERT INTO `grade` VALUES ('610526198707171913', '高岩昊', '2', '计算机基础及WPS Office应用', '71', '201703', '一级');
INSERT INTO `grade` VALUES ('341221199408197031', '梁保龙', '2', '计算机基础及WPS Office应用', '72', '201703', '一级');
INSERT INTO `grade` VALUES ('320123199511060415', '翁志屿', '2', '计算机基础及WPS Office应用', '73', '201703', '一级');
INSERT INTO `grade` VALUES ('342423199508151174', '吕友虎', '2', '计算机基础及WPS Office应用', '74', '201703', '一级');
INSERT INTO `grade` VALUES ('341281199402106609', '张紫蒙', '2', '计算机基础及WPS Office应用', '75', '201703', '一级');
INSERT INTO `grade` VALUES ('342425199502200839', '戴静安', '2', '计算机基础及WPS Office应用', '76', '201703', '一级');
INSERT INTO `grade` VALUES ('340826199511275273', '陈豪', '2', '计算机基础及WPS Office应用', '77', '201703', '一级');
INSERT INTO `grade` VALUES ('340827199209143436', '虞建国', '2', '计算机基础及WPS Office应用', '78', '201703', '一级');
INSERT INTO `grade` VALUES ('340602199702031448', '冯爱欣', '2', '计算机基础及WPS Office应用', '79', '201703', '一级');
INSERT INTO `grade` VALUES ('421002199612260018', '刘晟昊', '2', '计算机基础及WPS Office应用', '80', '201703', '一级');
INSERT INTO `grade` VALUES ('320621199603300716', '张维伦', '2', '计算机基础及WPS Office应用', '81', '201703', '一级');
INSERT INTO `grade` VALUES ('340825199508040813', '丁敏', '2', '计算机基础及WPS Office应用', '82', '201703', '一级');
INSERT INTO `grade` VALUES ('340822199406182627', '张金婷', '2', '计算机基础及WPS Office应用', '83', '201703', '一级');
INSERT INTO `grade` VALUES ('340811199510245115', '李谱', '1', '计算机基础及MS Office应用', '84', '201703', '一级');
INSERT INTO `grade` VALUES ('341221199510027741', '洪双双', '1', '计算机基础及MS Office应用', '85', '201703', '一级');
INSERT INTO `grade` VALUES ('130426199605181912', '韩超', '1', '计算机基础及MS Office应用', '86', '201703', '一级');
INSERT INTO `grade` VALUES ('342601199607011815', '沐鹏杰', '1', '计算机基础及MS Office应用', '87', '201703', '一级');
INSERT INTO `grade` VALUES ('342224199708201442', '张素素', '1', '计算机基础及MS Office应用', '88', '201703', '一级');
INSERT INTO `grade` VALUES ('341222199610104691', '张佳乐', '1', '计算机基础及MS Office应用', '89', '201703', '一级');
INSERT INTO `grade` VALUES ('340123199506236221', '李慧慧', '1', '计算机基础及MS Office应用', '90', '201703', '一级');
INSERT INTO `grade` VALUES ('341182199304076419', '杨正雨', '1', '计算机基础及MS Office应用', '91', '201703', '一级');
INSERT INTO `grade` VALUES ('13073219970129307X', '王晓刚', '1', '计算机基础及MS Office应用', '92', '201703', '一级');
INSERT INTO `grade` VALUES ('342625199404020712', '齐从斌', '1', '计算机基础及MS Office应用', '93', '201703', '一级');
INSERT INTO `grade` VALUES ('131126199310020040', '韩旭', '6', 'Visual Basic语言程序设计', '94', '201703', '二级');
INSERT INTO `grade` VALUES ('341225199502194641', '刘海艳', '6', 'Visual Basic语言程序设计', '95', '201703', '二级');
INSERT INTO `grade` VALUES ('340621199309062431', '赵永奇', '6', 'Visual Basic语言程序设计', '96', '201703', '二级');
INSERT INTO `grade` VALUES ('342623199008098961', '张露', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('321102199301251044', '颜玉洁', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('341881199406052225', '肖广宁', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('340406199112193011', '陶李', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('33012719951120421X', '王荣辉', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('341227199102103424', '王洁', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('342622199508305510', '卢攀', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('12010219941029263X', '赵', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('340123198906083119', '汪鹏', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('342921199405131220', '陈丽臣', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('340221199611231265', '王萍', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('142429199612115924', '石振佳', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('342425199709067625', '秦静静', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('362204199412098114', '陈雪飞', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('34242219961228363X', '徐中森', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');
INSERT INTO `grade` VALUES ('342622199604201412', '赵子健', '6', 'Visual Basic语言程序设计', '96', '201609', '二级');

-- ----------------------------
-- Table structure for school
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` int(3) NOT NULL,
  `sschool` varchar(20) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES ('1', '计算机学院');
INSERT INTO `school` VALUES ('2', '化学与化工学院');
INSERT INTO `school` VALUES ('3', '文学院');
INSERT INTO `school` VALUES ('4', '电子信息学院');

-- ----------------------------
-- Table structure for sdept
-- ----------------------------
DROP TABLE IF EXISTS `sdept`;
CREATE TABLE `sdept` (
  `sdeptid` int(3) NOT NULL,
  `id` int(3) NOT NULL,
  `sdept` varchar(20) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`sdeptid`),
  KEY `sdept_fk` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sdept
-- ----------------------------
INSERT INTO `sdept` VALUES ('1', '1', '计算机科学与技术专业');
INSERT INTO `sdept` VALUES ('2', '1', '软件工程专业');
INSERT INTO `sdept` VALUES ('3', '1', '网络工程专业');
INSERT INTO `sdept` VALUES ('4', '2', '化学化工');
INSERT INTO `sdept` VALUES ('5', '3', '汉语言文学');
INSERT INTO `sdept` VALUES ('6', '4', '电子工程');
INSERT INTO `sdept` VALUES ('7', '4', '通信工程');
INSERT INTO `sdept` VALUES ('8', '1', '物联网工程');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sid` varchar(30) CHARACTER SET gbk NOT NULL,
  `sname` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `sage` int(3) NOT NULL,
  `ssex` varchar(5) CHARACTER SET gb2312 NOT NULL,
  `sdept` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `sschool` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `sclass` varchar(20) CHARACTER SET gb2312 NOT NULL,
  `spassword` varchar(30) CHARACTER SET gb2312 NOT NULL DEFAULT 'sid',
  PRIMARY KEY (`sid`),
  KEY `studentsd_fk` (`sdept`),
  KEY `studentsc_fk` (`sschool`),
  KEY `studentscl_fk` (`sclass`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('412727199405087000', '刘正威', '23', '女', '计算机科学与技术专业', '计算机学院', '计02班', '412727199405087000');
INSERT INTO `student` VALUES ('340104198411091011', '刘彪', '33', '男', '计算机科学与技术专业', '计算机学院', '计02班', '340104198411091011');
INSERT INTO `student` VALUES ('340222198908140016', '刘醒', '28', '男', '计算机科学与技术专业', '计算机学院', '计02班', '340222198908140016');
INSERT INTO `student` VALUES ('340122198812041667', '张宝凤', '29', '女', '计算机科学与技术专业', '计算机学院', '计03班', '340122198812041667');
INSERT INTO `student` VALUES ('340222199301140049', '俞慧敏', '24', '女', '计算机科学与技术专业', '计算机学院', '计03班', '340222199301140049');
INSERT INTO `student` VALUES ('340121199109079000', '杜田甜', '26', '女', '计算机科学与技术专业', '计算机学院', '计04班', '340121199109079000');
INSERT INTO `student` VALUES ('340104198405042088', '郑盼盼', '33', '女', '计算机科学与技术专业', '计算机学院', '计05班', '340104198405042088');
INSERT INTO `student` VALUES ('340323199112201940', '张茜', '26', '女', '计算机科学与技术专业', '计算机学院', '计06班', '340323199112201940');
INSERT INTO `student` VALUES ('340102199705301047', '王孝云', '20', '女', '计算机科学与技术专业', '计算机学院', '计04班', '340102199705301047');
INSERT INTO `student` VALUES ('34010319770419251X', '陈志强', '40', '男', '计算机科学与技术专业', '计算机学院', '计05班', '34010319770419251X');
INSERT INTO `student` VALUES ('340121198806247304', '尹少云', '29', '女', '计算机科学与技术专业', '计算机学院', '计06班', '340121198806247304');
INSERT INTO `student` VALUES ('341224199103129870', '王启蒙', '26', '男', '计算机科学与技术专业', '计算机学院', '计02班', '341224199103129870');
INSERT INTO `student` VALUES ('340121199603084001', '孙雨婷', '21', '女', '计算机科学与技术专业', '计算机学院', '计03班', '340121199603084001');
INSERT INTO `student` VALUES ('341221199201012941', '李莲芳', '25', '女', '软件工程专业', '计算机学院', '软07班', '341221199201012941');
INSERT INTO `student` VALUES ('340104198112280015', '袁飞', '36', '男', '软件工程专业', '计算机学院', '软07班', '340104198112280015');
INSERT INTO `student` VALUES ('340803198701032417', '黄维', '30', '男', '软件工程专业', '计算机学院', '软07班', '340803198701032417');
INSERT INTO `student` VALUES ('34011119951213156X', '祁雨星', '22', '女', '软件工程专业', '计算机学院', '软07班', '34011119951213156X');
INSERT INTO `student` VALUES ('340823199009085328', '钱长平', '27', '女', '软件工程专业', '计算机学院', '软07班', '340823199009085328');
INSERT INTO `student` VALUES ('341103199011163628', '潘倩', '27', '女', '软件工程专业', '计算机学院', '软07班', '341103199011163628');
INSERT INTO `student` VALUES ('340123199511194708', '李梁霞', '22', '女', '软件工程专业', '计算机学院', '软07班', '340123199511194708');
INSERT INTO `student` VALUES ('342921199811143219', '杨壮', '19', '男', '软件工程专业', '计算机学院', '软07班', '342921199811143219');
INSERT INTO `student` VALUES ('340111197808081531', '方员', '39', '男', '软件工程专业', '计算机学院', '软07班', '340111197808081531');
INSERT INTO `student` VALUES ('340421199204150223', '胡晓蕾', '25', '女', '通信工程', '电子信息学院', '网11班', '340421199204150223');
INSERT INTO `student` VALUES ('340702198904250519', '梅飞', '28', '男', '通信工程', '电子信息学院', '网11班', '340702198904250519');
INSERT INTO `student` VALUES ('340102199604302526', '凌莉', '21', '女', '通信工程', '电子信息学院', '网11班', '340102199604302526');
INSERT INTO `student` VALUES ('340823199512192569', '方杰', '22', '女', '通信工程', '电子信息学院', '网11班', '340823199512192569');
INSERT INTO `student` VALUES ('340826199212249219', '程华俊', '25', '男', '通信工程', '电子信息学院', '网11班', '340826199212249219');
INSERT INTO `student` VALUES ('340406199506112827', '李周金梦', '22', '女', '通信工程', '电子信息学院', '网11班', '340406199506112827');
INSERT INTO `student` VALUES ('340122199408020068', '胡敏', '23', '女', '通信工程', '电子信息学院', '网11班', '340122199408020068');
INSERT INTO `student` VALUES ('340121199304153767', '金余玲', '24', '女', '通信工程', '电子信息学院', '网11班', '340121199304153767');
INSERT INTO `student` VALUES ('341622199708290914', '孙孝宁', '20', '男', '通信工程', '电子信息学院', '网11班', '341622199708290914');
INSERT INTO `student` VALUES ('340103199404253519', '孟佛实', '23', '男', '通信工程', '电子信息学院', '网11班', '340103199404253519');
INSERT INTO `student` VALUES ('342225198603270531', '曹金刚', '31', '男', '通信工程', '电子信息学院', '网11班', '342225198603270531');
INSERT INTO `student` VALUES ('341225198501161210', '宁建', '32', '男', '通信工程', '电子信息学院', '网11班', '341225198501161210');
INSERT INTO `student` VALUES ('342221198408180519', '朱爱彬', '33', '男', '通信工程', '电子信息学院', '网11班', '342221198408180519');
INSERT INTO `student` VALUES ('340111198709203032', '李小华', '30', '男', '通信工程', '电子信息学院', '网11班', '340111198709203032');
INSERT INTO `student` VALUES ('340404199410252611', '蔡磊', '23', '男', '通信工程', '电子信息学院', '网11班', '340404199410252611');
INSERT INTO `student` VALUES ('340121197601096405', '陈方针', '41', '女', '通信工程', '电子信息学院', '网11班', '340121197601096405');
INSERT INTO `student` VALUES ('340826198808140092', '胡煜', '29', '男', '通信工程', '电子信息学院', '网11班', '340826198808140092');
INSERT INTO `student` VALUES ('340826198907260030', '程翔', '28', '男', '通信工程', '电子信息学院', '网11班', '340826198907260030');
INSERT INTO `student` VALUES ('342625199509271745', '计贤玲', '22', '女', '通信工程', '电子信息学院', '网11班', '342625199509271745');
INSERT INTO `student` VALUES ('341281199502090325', '鲁月瑶', '22', '女', '化学化工', '化学与化工学院', '化1', '341281199502090325');
INSERT INTO `student` VALUES ('341202198803043311', '郝大伟', '29', '男', '化学化工', '化学与化工学院', '化1', '341202198803043311');
INSERT INTO `student` VALUES ('342426198712020416', '芮少先', '30', '男', '化学化工', '化学与化工学院', '化1', '342426198712020416');
INSERT INTO `student` VALUES ('341222199410081421', '李东柯', '23', '女', '化学化工', '化学与化工学院', '化1', '341222199410081421');
INSERT INTO `student` VALUES ('341125199011206518', '曹梦闲', '27', '男', '化学化工', '化学与化工学院', '化1', '341125199011206518');
INSERT INTO `student` VALUES ('340604199309190226', '戎晓莉', '24', '女', '化学化工', '化学与化工学院', '化1', '340604199309190226');
INSERT INTO `student` VALUES ('341221198906018265', '牛勤', '28', '女', '化学化工', '化学与化工学院', '化1', '341221198906018265');
INSERT INTO `student` VALUES ('340825199201170023', '江晓丽', '25', '女', '化学化工', '化学与化工学院', '化1', '340825199201170023');
INSERT INTO `student` VALUES ('342426199404133210', '李华兵', '23', '男', '化学化工', '化学与化工学院', '化1', '342426199404133210');
INSERT INTO `student` VALUES ('360428198706200618', '邹小彬', '30', '男', '汉语言文学', '文学院', '文1', '360428198706200618');
INSERT INTO `student` VALUES ('342623198802055526', '钱静', '29', '女', '汉语言文学', '文学院', '文1', '342623198802055526');
INSERT INTO `student` VALUES ('340121198810275981', '孟苹', '29', '女', '汉语言文学', '文学院', '文1', '340121198810275981');
INSERT INTO `student` VALUES ('340121198406058811', '郑兴', '33', '男', '汉语言文学', '文学院', '文1', '340121198406058811');
INSERT INTO `student` VALUES ('34010419800620203X', '吴松', '37', '男', '汉语言文学', '文学院', '文1', '34010419800620203X');
INSERT INTO `student` VALUES ('411627199208175127', '司胜男', '25', '女', '汉语言文学', '文学院', '文1', '411627199208175127');
INSERT INTO `student` VALUES ('34162119901228152X', '徐小珍', '27', '女', '汉语言文学', '文学院', '文1', '34162119901228152X');
INSERT INTO `student` VALUES ('340111199004224540', '龚雪', '27', '女', '汉语言文学', '文学院', '文1', '340111199004224540');
INSERT INTO `student` VALUES ('610526198707171913', '高岩昊', '30', '男', '汉语言文学', '文学院', '文1', '610526198707171913');
INSERT INTO `student` VALUES ('341221199408197031', '梁保龙', '23', '男', '汉语言文学', '文学院', '文1', '341221199408197031');
INSERT INTO `student` VALUES ('320123199511060415', '翁志屿', '22', '男', '汉语言文学', '文学院', '文1', '320123199511060415');
INSERT INTO `student` VALUES ('342423199508151174', '吕友虎', '22', '男', '汉语言文学', '文学院', '文1', '342423199508151174');
INSERT INTO `student` VALUES ('341281199402106609', '张紫蒙', '23', '女', '软件工程专业', '计算机学院', '计03班', '341281199402106609');
INSERT INTO `student` VALUES ('342425199502200839', '戴静安', '22', '男', '软件工程专业', '计算机学院', '计03班', '342425199502200839');
INSERT INTO `student` VALUES ('340826199511275273', '陈豪', '22', '男', '软件工程专业', '计算机学院', '计03班', '340826199511275273');
INSERT INTO `student` VALUES ('340827199209143436', '虞建国', '25', '男', '软件工程专业', '计算机学院', '计03班', '340827199209143436');
INSERT INTO `student` VALUES ('340602199702031448', '冯爱欣', '20', '女', '软件工程专业', '计算机学院', '计03班', '340602199702031448');
INSERT INTO `student` VALUES ('421002199612260018', '刘晟昊', '21', '男', '软件工程专业', '计算机学院', '计03班', '421002199612260018');
INSERT INTO `student` VALUES ('320621199603300716', '张维伦', '21', '男', '软件工程专业', '计算机学院', '计03班', '320621199603300716');
INSERT INTO `student` VALUES ('340825199508040813', '丁敏', '22', '男', '软件工程专业', '计算机学院', '计03班', '340825199508040813');
INSERT INTO `student` VALUES ('340822199406182627', '张金婷', '23', '女', '软件工程专业', '计算机学院', '计03班', '340822199406182627');
INSERT INTO `student` VALUES ('340811199510245115', '李谱', '22', '男', '软件工程专业', '计算机学院', '计03班', '340811199510245115');
INSERT INTO `student` VALUES ('341221199510027741', '洪双双', '22', '女', '软件工程专业', '计算机学院', '计03班', '341221199510027741');
INSERT INTO `student` VALUES ('130426199605181912', '韩超', '21', '男', '软件工程专业', '计算机学院', '计03班', '130426199605181912');
INSERT INTO `student` VALUES ('342601199607011815', '沐鹏杰', '21', '男', '软件工程专业', '计算机学院', '计03班', '342601199607011815');
INSERT INTO `student` VALUES ('342224199708201442', '张素素', '20', '女', '软件工程专业', '计算机学院', '计03班', '342224199708201442');
INSERT INTO `student` VALUES ('341222199610104691', '张佳乐', '21', '男', '软件工程专业', '计算机学院', '计03班', '341222199610104691');
INSERT INTO `student` VALUES ('340123199506236221', '李慧慧', '22', '女', '软件工程专业', '计算机学院', '计03班', '340123199506236221');
INSERT INTO `student` VALUES ('341182199304076419', '杨正雨', '24', '男', '软件工程专业', '计算机学院', '计03班', '341182199304076419');
INSERT INTO `student` VALUES ('13073219970129307X', '王晓刚', '20', '男', '软件工程专业', '计算机学院', '计03班', '13073219970129307X');
INSERT INTO `student` VALUES ('342625199404020712', '齐从斌', '23', '男', '软件工程专业', '计算机学院', '计03班', '342625199404020712');
INSERT INTO `student` VALUES ('131126199310020040', '韩旭', '24', '女', '软件工程专业', '计算机学院', '计03班', '131126199310020040');
INSERT INTO `student` VALUES ('341225199502194641', '刘海艳', '22', '女', '软件工程专业', '计算机学院', '计03班', '341225199502194641');
INSERT INTO `student` VALUES ('340621199309062431', '赵永奇', '24', '男', '软件工程专业', '计算机学院', '计03班', '340621199309062431');
INSERT INTO `student` VALUES ('342623199008098961', '张露', '27', '女', '软件工程专业', '计算机学院', '计03班', '342623199008098961');
INSERT INTO `student` VALUES ('321102199301251044', '颜玉洁', '24', '女', '软件工程专业', '计算机学院', '计03班', '321102199301251044');
INSERT INTO `student` VALUES ('341881199406052225', '肖广宁', '23', '女', '软件工程专业', '计算机学院', '计03班', '341881199406052225');
INSERT INTO `student` VALUES ('340406199112193011', '陶李', '26', '男', '软件工程专业', '计算机学院', '计03班', '340406199112193011');
INSERT INTO `student` VALUES ('33012719951120421X', '王荣辉', '22', '男', '软件工程专业', '计算机学院', '计03班', '33012719951120421X');
INSERT INTO `student` VALUES ('341227199102103424', '王洁', '26', '女', '软件工程专业', '计算机学院', '计03班', '341227199102103424');
INSERT INTO `student` VALUES ('342622199508305510', '卢攀', '22', '男', '软件工程专业', '计算机学院', '计03班', '342622199508305510');
INSERT INTO `student` VALUES ('12010219941029263X', '赵', '23', '男', '软件工程专业', '计算机学院', '计03班', '12010219941029263X');
INSERT INTO `student` VALUES ('340123198906083119', '汪鹏', '28', '男', '软件工程专业', '计算机学院', '计03班', '340123198906083119');
INSERT INTO `student` VALUES ('342921199405131220', '陈丽臣', '23', '女', '软件工程专业', '计算机学院', '计03班', '342921199405131220');
INSERT INTO `student` VALUES ('340221199611231265', '王萍', '21', '女', '软件工程专业', '计算机学院', '计03班', '340221199611231265');
INSERT INTO `student` VALUES ('142429199612115924', '石振佳', '21', '女', '软件工程专业', '计算机学院', '计03班', '142429199612115924');
INSERT INTO `student` VALUES ('342425199709067625', '秦静静', '20', '女', '软件工程专业', '计算机学院', '计03班', '342425199709067625');
INSERT INTO `student` VALUES ('362204199412098114', '陈雪飞', '23', '男', '软件工程专业', '计算机学院', '计03班', '362204199412098114');
INSERT INTO `student` VALUES ('34242219961228363X', '徐中森', '21', '男', '软件工程专业', '计算机学院', '计03班', '34242219961228363X');
INSERT INTO `student` VALUES ('342622199604201412', '赵子健', '21', '男', '软件工程专业', '计算机学院', '计03班', '342622199604201412');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `test1` varchar(255) DEFAULT NULL,
  `test2` varchar(255) DEFAULT NULL,
  `test3` varchar(255) DEFAULT NULL,
  `test4` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of test
-- ----------------------------
