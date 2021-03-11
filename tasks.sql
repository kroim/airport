/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100126
Source Host           : localhost:3306
Source Database       : airport1

Target Server Type    : MYSQL
Target Server Version : 100126
File Encoding         : 65001

Date: 2018-03-08 05:20:23
*/

SET FOREIGN_KEY_CHECKS=0;

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
