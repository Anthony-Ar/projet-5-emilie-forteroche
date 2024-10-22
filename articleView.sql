/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 80200
Source Host           : localhost:3306
Source Database       : projet-5-emilie

Target Server Type    : MYSQL
Target Server Version : 80200
File Encoding         : 65001

Date: 2024-10-22 15:53:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articleview`
-- ----------------------------
DROP TABLE IF EXISTS `articleview`;
CREATE TABLE `articleview` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of articleview
-- ----------------------------
