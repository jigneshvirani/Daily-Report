/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : creoles_report

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-07-14 18:49:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for daily_summary
-- ----------------------------
DROP TABLE IF EXISTS `daily_summary`;
CREATE TABLE `daily_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of daily_summary
-- ----------------------------
INSERT INTO `daily_summary` VALUES ('1', '1', '3', 'I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', null);
INSERT INTO `daily_summary` VALUES ('2', '2', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 15:10:06');
INSERT INTO `daily_summary` VALUES ('3', '3', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('4', '4', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('5', '5', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('6', '6', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:32');
INSERT INTO `daily_summary` VALUES ('7', '7', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:32');
INSERT INTO `daily_summary` VALUES ('8', '1', '3', 'I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '0000-00-00 00:00:00');
INSERT INTO `daily_summary` VALUES ('9', '2', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 15:10:06');
INSERT INTO `daily_summary` VALUES ('10', '3', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('11', '4', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('12', '5', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:31');
INSERT INTO `daily_summary` VALUES ('13', '6', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:32');
INSERT INTO `daily_summary` VALUES ('14', '7', '3', 'I did testing. I did testing. I did testing. I did testing.', '2017-07-14 15:09:08', '2017-07-14 15:30:11', '2017-07-14 15:09:18', '2017-07-14 17:50:32');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', 'YellowBoots', '2017-07-14 13:05:31', '2017-07-14 13:05:33');
INSERT INTO `project` VALUES ('2', 'khalsaAid', '2017-07-14 13:05:31', '2017-07-14 13:05:38');
INSERT INTO `project` VALUES ('3', 'B1G1', '2017-07-14 13:05:31', '2017-07-14 13:05:38');
INSERT INTO `project` VALUES ('4', 'Pravago', '2017-07-14 13:05:31', '2017-07-14 13:05:38');
INSERT INTO `project` VALUES ('5', 'CultureTruck', '2017-07-14 13:05:31', '2017-07-14 13:05:38');
INSERT INTO `project` VALUES ('6', 'DoctoFrame', '2017-07-14 13:05:31', '2017-07-14 13:05:38');
INSERT INTO `project` VALUES ('7', 'CreoleStudios', '2017-07-14 13:05:31', '2017-07-14 13:05:38');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'margi@creolestudios.com', 'Margi', 'patel', '2017-07-14 13:05:47', '2017-07-14 13:05:50');
INSERT INTO `user` VALUES ('2', 'ashish@creolestudios.com', 'Ashish', 'patel', '2017-07-14 13:05:47', '2017-07-14 13:05:52');
INSERT INTO `user` VALUES ('3', 'jignesh@creolestudios.com', 'Jignesh', 'Virani', '2017-07-14 13:05:47', '2017-07-14 13:05:53');
