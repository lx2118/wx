/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-01-04 20:09:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wx_base_system
-- ----------------------------
DROP TABLE IF EXISTS `wx_base_system`;
CREATE TABLE `wx_base_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `welcome` text NOT NULL,
  `default` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_base_system
-- ----------------------------
INSERT INTO `wx_base_system` VALUES ('1', '111', '2222');

-- ----------------------------
-- Table structure for wx_config
-- ----------------------------
DROP TABLE IF EXISTS `wx_config`;
CREATE TABLE `wx_config` (
  `id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `system` text NOT NULL,
  `wechat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_config
-- ----------------------------
INSERT INTO `wx_config` VALUES ('1', '{\"webname\":\"我的网站\",\"icp\":\"1234444\",\"tel\":\"456\"}', '{\"token\":\"123\",\"appid\":\"123\",\"appsecret\":\"123\"}');

-- ----------------------------
-- Table structure for wx_module
-- ----------------------------
DROP TABLE IF EXISTS `wx_module`;
CREATE TABLE `wx_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `message` tinyint(1) NOT NULL DEFAULT '0',
  `actions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_module
-- ----------------------------
INSERT INTO `wx_module` VALUES ('4', '微官网', 'news', 'xupp', '0', '[[\"分类管理\",\"category\"],[\"文章管理\",\"article\"]]');
INSERT INTO `wx_module` VALUES ('3', '微信公众号', 'wechat', 'xupp', '0', '[[\"系统回复\",\"system\"],[\"关键词回复\",\"keyword\"],[\"菜单管理\",\"menu\"]]');
