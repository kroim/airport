/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100126
Source Host           : localhost:3306
Source Database       : airport1

Target Server Type    : MYSQL
Target Server Version : 100126
File Encoding         : 65001

Date: 2018-03-10 17:19:53
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('2', 'test1', '8', 'no', 'Reference number1', 'Description1', 'Due on1');
INSERT INTO `categories` VALUES ('3', 'test3', '10', 'no', 'Reference number3', 'Description3', 'Due on3');

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
INSERT INTO `custom` VALUES ('4', '1', 'Reference Number', 'Description', 'Due On');

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
INSERT INTO `group` VALUES ('14', 'test', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'Asia/Riyadh', '10:00', 'Header Text for test1', 'Test Footer Text1');
INSERT INTO `group` VALUES ('16', 'test1', 'a:1:{i:0;s:1:\"4\";}', 'a:1:{i:0;s:1:\"3\";}', 'HongKong', '17:00', 'test1 header ', 'test1 footer');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('2', 'test3', 'Test0123', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:15');
INSERT INTO `log` VALUES ('3', 'test3', 'Test0123', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:16');
INSERT INTO `log` VALUES ('4', 'test', 'test', 'Administrator1', 'admin1@admin.com', 'Create', '2018-03-06 16:23:18');
INSERT INTO `log` VALUES ('5', 'test1', 'ESS2019', 'Administrator1', 'admin1@admin.com', 'Modify', '2018-03-08 03:09:57');
INSERT INTO `log` VALUES ('6', 'test3', 'RE1254', 'User2', 'user2@hotmail.com', 'Create', '2018-03-08 10:48:33');
INSERT INTO `log` VALUES ('7', 'test3', 'RE1254', 'User2', 'user2@hotmail.com', 'Modify', '2018-03-08 10:50:09');
INSERT INTO `log` VALUES ('8', 'test3', 'RE1254', 'User2', 'user2@hotmail.com', 'Modify', '2018-03-08 10:55:54');
INSERT INTO `log` VALUES ('9', 'test3', '1111111', 'User2', 'user2@hotmail.com', 'Create', '2018-03-08 10:56:33');
INSERT INTO `log` VALUES ('10', 'test3', 'RE1254', 'User2', 'user2@hotmail.com', 'Modify', '2018-03-08 11:00:06');
INSERT INTO `log` VALUES ('11', 'test3', '1111111', 'User2', 'user2@hotmail.com', 'Modify', '2018-03-08 11:00:19');

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ref_num` varchar(255) DEFAULT '',
  `desc` varchar(255) DEFAULT '',
  `due_on` varchar(255) DEFAULT '',
  `notes` varchar(255) DEFAULT '',
  `type` varchar(255) DEFAULT '',
  `files` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('2', '2', '2', 'ESS2019', 'Edit Test Task', '', 'First Task', 'renew', '');
INSERT INTO `tasks` VALUES ('3', '2', '2', 'ESS2019', 'Edit Test Task', '', 'First Task', '', '');
INSERT INTO `tasks` VALUES ('4', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('5', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('6', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('7', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('8', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('9', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('10', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('11', '2', '3', 'Test0123', 'Log test1', '', 'Add test log', 'renew', '');
INSERT INTO `tasks` VALUES ('12', '2', '3', 'Test0123', 'Log test1', '', 'Add test log1', '', '');
INSERT INTO `tasks` VALUES ('14', '4', '3', 'RE1254', 'test3 and user2', '2018-03-21', 'first adding', '', '');
INSERT INTO `tasks` VALUES ('15', '4', '3', '1111111', 'Description 11111', '2018-03-12', 'Notes 11111', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Administrator', 'admin@admin.com', 'admin', 'admin', '-1', null, null, null, null, null);
INSERT INTO `users` VALUES ('2', 'Administrator1', 'admin1@admin.com', 'admin', 'manager', '-1', null, null, null, null, null);
INSERT INTO `users` VALUES ('3', 'User1', 'user1@user.com', 'user', 'manager', '14', null, null, null, null, null);
INSERT INTO `users` VALUES ('4', 'User2', 'user2@hotmail.com', 'user', 'manager', '16', null, null, null, null, null);
