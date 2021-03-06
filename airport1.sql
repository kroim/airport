/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100126
Source Host           : localhost:3306
Source Database       : airport1

Target Server Type    : MYSQL
Target Server Version : 100126
File Encoding         : 65001

Date: 2018-03-04 08:15:34
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
INSERT INTO `categories` VALUES ('2', 'test1', '2', 'no', 'Reference number', 'Description', 'Due on');
INSERT INTO `categories` VALUES ('3', 'test3', '1', 'no', 'Reference number', 'Description', 'Due on');
INSERT INTO `categories` VALUES ('4', 'test', '5', 'no', 'Reference number', 'Description', 'Due on');

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ref_num` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `due_on` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------

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
  `group_id` int(11) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lang` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `notifyat` varchar(255) DEFAULT NULL,
  `notifygroup` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Administrator', 'admin@admin.com', 'admin', 'admin', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('2', 'Administrator1', 'admin1@admin.com', 'admin', 'manager', null, null, null, null, null, null, null, null, null, null);
