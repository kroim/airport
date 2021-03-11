/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100126
Source Host           : localhost:3306
Source Database       : airport1

Target Server Type    : MYSQL
Target Server Version : 100126
File Encoding         : 65001

Date: 2018-03-07 23:47:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `critical` varchar(255) DEFAULT NULL,
  `enabled` varchar(255) DEFAULT NULL,
  `ref_num_name` varchar(255) DEFAULT NULL,
  `desc_name` varchar(255) DEFAULT NULL,
  `due_on_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('2', 'test1', '8', 'no', 'Reference number1', 'Description1', 'Due on1');
INSERT INTO `categories` VALUES ('3', 'test3', '10', 'no', 'Reference number3', 'Description3', 'Due on3');
INSERT INTO `categories` VALUES ('4', 'test', '5', 'no', 'Reference number', 'Description', 'Due on');

-- ----------------------------
-- Table structure for custom
-- ----------------------------
DROP TABLE IF EXISTS `custom`;
CREATE TABLE `custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `referencenumbertext` varchar(255) DEFAULT NULL,
  `descriptiontext` varchar(255) DEFAULT NULL,
  `dueontext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of custom
-- ----------------------------
INSERT INTO `custom` VALUES ('4', '1', null, null, null);

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `notifyat` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('14', 'test', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";}', 'America/New_York', '10:00', 'Header Text for test', 'Test Footer Text');
INSERT INTO `group` VALUES ('16', 'test1', 'a:1:{i:0;s:1:\"2\";}', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'HongKong', '17:00', 'test1 header ', 'test1 footer');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_category` varchar(255) DEFAULT NULL,
  `log_ref_num` varchar(255) DEFAULT NULL,
  `log_user_n` varchar(255) DEFAULT NULL,
  `log_user_e` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('2', 'test3', 'Test0123', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:15');
INSERT INTO `log` VALUES ('3', 'test3', 'Test0123', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:16');
INSERT INTO `log` VALUES ('4', 'test', 'test', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:18');

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ref_num` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `due_on` date DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('2', '2', '2', 'ESS2019', 'Edit Test Task', '2018-04-12', 'First Task', 'renew');
INSERT INTO `tasks` VALUES ('3', '2', '2', 'ESS2019', 'Edit Test Task', '2018-03-01', 'First Task', '');
INSERT INTO `tasks` VALUES ('4', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('5', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('6', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('7', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('8', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('9', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('10', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('11', '2', '3', 'Test0123', 'Log test1', '2018-03-06', 'Add test log', 'renew');
INSERT INTO `tasks` VALUES ('12', '2', '3', 'Test0123', 'Log test1', '2018-03-16', 'Add test log1', '');
INSERT INTO `tasks` VALUES ('13', '2', '4', 'test', 'teat', '2018-03-24', 'dfafaa', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT '-1',
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lang` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Administrator', 'admin@admin.com', 'admin', 'admin', '-1', null, null, null, null, null);
INSERT INTO `users` VALUES ('2', 'Administrator1', 'admin1@admin.com', 'admin', 'manager', '16', null, null, null, null, null);
INSERT INTO `users` VALUES ('3', 'User1', 'user1@user.com', 'user', 'manager', '14', null, null, null, null, null);
