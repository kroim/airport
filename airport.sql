/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100126
Source Host           : localhost:3306
Source Database       : airport

Target Server Type    : MYSQL
Target Server Version : 100126
File Encoding         : 65001

Date: 2017-12-18 20:03:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aircraft
-- ----------------------------
DROP TABLE IF EXISTS `aircraft`;
CREATE TABLE `aircraft` (
  `aircraft_id` int(11) NOT NULL AUTO_INCREMENT,
  `aircraft_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aircraft_arabic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aircraft_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aircraft_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of aircraft
-- ----------------------------
INSERT INTO `aircraft` VALUES ('1', 'HZ-ZAQ', null, 'BELL 206');
INSERT INTO `aircraft` VALUES ('2', 'HZ-ZAY', null, 'BELL 206');
INSERT INTO `aircraft` VALUES ('3', 'HZ-ZAX', null, 'BELL 206');
INSERT INTO `aircraft` VALUES ('4', 'HZ-ZAA', null, 'BELL 206');
INSERT INTO `aircraft` VALUES ('6', 'HZ-AAB', 'arabic test', 'BE');

-- ----------------------------
-- Table structure for airport
-- ----------------------------
DROP TABLE IF EXISTS `airport`;
CREATE TABLE `airport` (
  `airport_id` int(11) NOT NULL AUTO_INCREMENT,
  `airport_icao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airport_arabic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airport_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`airport_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of airport
-- ----------------------------
INSERT INTO `airport` VALUES ('1', 'OEJN', 'مطار الملك عبدالعزيز الدولي', 'جدة');
INSERT INTO `airport` VALUES ('2', 'OERK', 'مطار الملك خالد الدولي', 'الرياض');
INSERT INTO `airport` VALUES ('3', 'OEDF', 'مطار الملك فهد الدولي', 'الدمام');

-- ----------------------------
-- Table structure for mission
-- ----------------------------
DROP TABLE IF EXISTS `mission`;
CREATE TABLE `mission` (
  `mission_id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_request_no` int(11) NOT NULL,
  `aircraft_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airport_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airport_ar_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hours` double DEFAULT NULL,
  `cycles` double DEFAULT NULL,
  `purpose_en` text COLLATE utf8_unicode_ci,
  `purpose_ar` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`mission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mission
-- ----------------------------
INSERT INTO `mission` VALUES ('1', '1', 'HZ-ZAA', 'OEJN', 'مطار الملك عبدالعزيز الدولي', '2017-11-17', '2', '3', 'Test Note1', '', 'Test Notes1');
INSERT INTO `mission` VALUES ('2', '3', 'HZ-ZAY', 'OEDF', 'مطار الملك فهد الدولي', '2017-12-26', '12', '19', 'Test Note2', '', 'Test Notes2');
INSERT INTO `mission` VALUES ('3', '2', 'HZ-ZAQ', 'OERK', 'مطار الملك خالد الدولي', '2017-11-03', '8', '12', 'hejfle', 'dfasdfa', 'dfasfadsfasdf');
INSERT INTO `mission` VALUES ('4', '4', 'HZ-ZAY', 'OERK', 'مطار الملك خالد الدولي', '2017-12-02', '12', '15', 'dsfsadf', 'dfsadf', 'dfsadsfs');
INSERT INTO `mission` VALUES ('5', '3', 'HZ-ZAY', 'OEDF', 'مطار الملك فهد الدولي', '2017-12-23', '3', '5', 'df', 'dfsa', 'sdfasfsdaf');
INSERT INTO `mission` VALUES ('6', '5', 'HZ-AAB', 'OEDF', 'مطار الملك فهد الدولي', '2017-12-04', '4', '9', 'sdsddfa', 'sfsdafsadf', 'dfasfdsfsdaf');
INSERT INTO `mission` VALUES ('7', '3', 'HZ-ZAY', 'OEDF', 'مطار الملك فهد الدولي', '2017-12-14', '4.5', '3', 'ss', 'as', 'as');

-- ----------------------------
-- Table structure for request
-- ----------------------------
DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `aircraft` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `airport` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `airport_ar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purpose_ar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of request
-- ----------------------------
INSERT INTO `request` VALUES ('1', 'HZ-ZAA', '2017-11-15', '2017-11-25', 'OEJN', 'مطار الملك عبدالعزيز الدولي', 'Test1', null, null, null);
INSERT INTO `request` VALUES ('2', 'HZ-ZAQ', '2017-11-02', '2017-11-08', 'OERK', 'مطار الملك خالد الدولي', 'Test2', '', null, 'uploads/1513017847.png');
INSERT INTO `request` VALUES ('3', 'HZ-ZAY', '2017-11-24', '2017-12-28', 'OEDF', 'مطار الملك فهد الدولي', 'Test3', null, null, null);
INSERT INTO `request` VALUES ('4', 'HZ-ZAY', '2017-12-01', '2017-12-03', 'OERK', 'مطار الملك خالد الدولي', 'test english', 'test arabic', null, 'uploads/1512977568.png');
INSERT INTO `request` VALUES ('5', 'HZ-AAB', '2017-12-04', '2017-12-09', 'OEDF', 'مطار الملك فهد الدولي', 'enal ', 'dfsafsdfsfsdfds', null, 'uploads/1512978311.png');
INSERT INTO `request` VALUES ('6', 'HZ-ZAA', '2017-12-11', '2017-12-14', 'OERK', 'مطار الملك خالد الدولي', 'df', 'dfasfs', null, 'uploads/1512979560.png');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin', 'admin');
INSERT INTO `users` VALUES ('2', 'manager', 'manager', 'manager');
INSERT INTO `users` VALUES ('3', 'dispatcher', 'dispatcher', 'dispatcher');
INSERT INTO `users` VALUES ('4', 'general', 'mrg', 'general MGR');
