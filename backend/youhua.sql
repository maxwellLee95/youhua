/*
 Navicat Premium Data Transfer

 Source Server         : youhua
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : 47.104.210.235
 Source Database       : youhua

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : utf-8

 Date: 08/30/2019 15:49:30 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `acl_classes`
-- ----------------------------
DROP TABLE IF EXISTS `acl_classes`;
CREATE TABLE `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `acl_entries`
-- ----------------------------
DROP TABLE IF EXISTS `acl_entries`;
CREATE TABLE `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`),
  CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `acl_object_identities`
-- ----------------------------
DROP TABLE IF EXISTS `acl_object_identities`;
CREATE TABLE `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`),
  CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `acl_object_identity_ancestors`
-- ----------------------------
DROP TABLE IF EXISTS `acl_object_identity_ancestors`;
CREATE TABLE `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`),
  CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `acl_security_identities`
-- ----------------------------
DROP TABLE IF EXISTS `acl_security_identities`;
CREATE TABLE `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('LK','GD','CP') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `custom_page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6F9DB8E7B7683595` (`goods_id`),
  KEY `IDX_6F9DB8E7B1F0A29` (`custom_page_id`),
  CONSTRAINT `FK_6F9DB8E7B1F0A29` FOREIGN KEY (`custom_page_id`) REFERENCES `custom_page` (`id`),
  CONSTRAINT `FK_6F9DB8E7B7683595` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `banner`
-- ----------------------------
BEGIN;
INSERT INTO `banner` VALUES ('2', '2', 'uploads/images/348af43f5bff930a1375b1656ef9bfc091672bd9.jpg', 'CP', 'http://www.baidu.com', '2018-12-13 20:02:35', '2019-06-12 18:45:27', '1'), ('5', '2', 'uploads/images/00affbcc95fc02a7d93ba997904de86d62c900ec.jpg', 'GD', 'https://baidu.com', '2019-05-13 14:39:35', '2019-05-13 14:43:17', null);
COMMIT;

-- ----------------------------
--  Table structure for `classify_goods`
-- ----------------------------
DROP TABLE IF EXISTS `classify_goods`;
CREATE TABLE `classify_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `classify_goods`
-- ----------------------------
BEGIN;
INSERT INTO `classify_goods` VALUES ('1', '古典花卉', 'uploads/images/1a16bcf1a1be23afd5d336596388cfc0cb03a4e5.jpg', '1', '2018-12-07 15:53:00', '2019-01-16 19:52:59'), ('2', '古典欧式', 'uploads/images/d8cee776491a38a15528d1577b79552186695e2c.jpg', '0', '2018-12-10 10:36:51', '2019-05-13 14:47:39'), ('3', '风景油画', 'uploads/images/1552fcca16f8f774ea81e6571220d1ae819259af.jpg', '2', '2018-12-13 19:46:00', '2018-12-13 19:46:00'), ('4', '现代抽象', 'uploads/images/61fe486c2e7a0f0460b5cfc8e0907efc9f8e21ce.jpg', '3', '2018-12-13 19:49:03', '2018-12-13 19:49:03'), ('5', '中国元素', 'uploads/images/a585beac2a9dbebe4c749d1cab185e540454c5bf.jpg', '4', '2018-12-13 19:49:58', '2018-12-13 19:49:58'), ('6', '工笔花鸟', 'uploads/images/384d7c622cc95cd196ffaa4eb186920a8a9941a1.jpg', '5', '2018-12-13 19:50:30', '2018-12-13 19:50:30'), ('7', '流彩抽象', 'uploads/images/41a1b1d36feeb8b0a11438ee85a1238422fdfa55.jpg', '6', '2018-12-13 19:51:00', '2018-12-13 19:51:00'), ('8', '美女贵妇', 'uploads/images/aa5c5b6dc9b94c50735383e3a308621ced360091.jpg', '7', '2018-12-13 19:51:47', '2018-12-13 19:51:47');
COMMIT;

-- ----------------------------
--  Table structure for `consumer`
-- ----------------------------
DROP TABLE IF EXISTS `consumer`;
CREATE TABLE `consumer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('nan','nv') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:SexType)',
  `deleted_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `last_login_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `first_login_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `consumer`
-- ----------------------------
BEGIN;
INSERT INTO `consumer` VALUES ('1', 'https://wx.qlogo.cn/mmopen/vi_32/eU8kyWWkSFDqJ52zLzZXk6kbkMiaSjlUog3gyMQWjUpPibPlrx4pKHfNvVp2sI7CCQ2GrQoG3D1icEIecHLhjgXOw/132', '铭', 'nan', null, '2019-08-30 11:37:43', '2018-12-07 15:50:55', '2018-12-07 15:50:55', '2019-08-30 11:37:43'), ('2', 'https://wx.qlogo.cn/mmopen/vi_32/EdOcHZcibotjONtd8FClUIKPAxWes2S14Kc2zeuibon6M9cFftVvhvbKu0VYCK5dLBhpzZicpWWcx9aiaiaHmqj9PJQ/132', 'Maxwell', 'nan', null, '2019-08-30 15:37:57', '2018-12-10 14:05:20', '2018-12-10 14:05:20', '2019-08-30 15:37:57'), ('3', 'https://wx.qlogo.cn/mmopen/vi_32/HicNdBiaqEDZg95SMsHvRFZtaicWNehpEWUcgh1qxHn6Be89zQRibVicfl2tbdV2nzKmEddJmu4T0yj8lQPSluEjAaA/132', '小虎', 'nan', null, '2019-06-25 10:48:11', '2018-12-13 17:59:36', '2018-12-13 17:59:36', '2019-06-25 10:48:11'), ('4', 'https://wx.qlogo.cn/mmopen/vi_32/ibib6xictyJOE8wIhBUUx24REubMhxHyTgrlJSLTtnAtS16rInia1XK0R1U07SzvyySrFT8bTibThtZtwTstAwc4Q1A/132', 'al', 'nan', null, '2019-02-21 21:11:41', '2019-02-19 17:19:25', '2019-02-19 17:19:25', '2019-02-21 21:11:41');
COMMIT;

-- ----------------------------
--  Table structure for `custom_page`
-- ----------------------------
DROP TABLE IF EXISTS `custom_page`;
CREATE TABLE `custom_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `custom_page`
-- ----------------------------
BEGIN;
INSERT INTO `custom_page` VALUES ('1', '产品介绍', '产品介绍', '<p><u><strong><s>have a good day!</s><img alt=\"laugh\" height=\"24\" src=\"http://www.nowhoarts.com/bundles/fosckeditor/plugins/smiley/images/teeth_smile.png\" title=\"laugh\" width=\"24\" /></strong></u></p>', '2019-01-05 15:32:21', '2019-06-12 18:41:36'), ('2', '测试2', 'ceshi2', '<p><img alt=\"\" src=\"http://n.sinaimg.cn/ent/transform/250/w630h420/20190606/b249-hxyuapi1183293.jpg\" /></p>', '2019-06-08 09:22:29', '2019-06-08 09:22:29');
COMMIT;

-- ----------------------------
--  Table structure for `fos_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `fos_user_group`;
CREATE TABLE `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `fos_user_user`
-- ----------------------------
DROP TABLE IF EXISTS `fos_user_user`;
CREATE TABLE `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `date_of_birth` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `firstname` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_data` json DEFAULT NULL,
  `twitter_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_data` json DEFAULT NULL,
  `gplus_uid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus_data` json DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_C560D761C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `fos_user_user`
-- ----------------------------
BEGIN;
INSERT INTO `fos_user_user` VALUES ('1', 'youhua', 'youhua', 'yousdfsfs', 'yousdfsfs', '1', null, '$2y$13$VoEoHt8sz5TAeiwWE8IfTeBKq8aqysJgpaQl1iZ1Z7XAXjIqjTcyi', '2019-08-30 11:44:09', null, null, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '2018-12-07 15:52:32', '2019-08-30 11:44:09', null, null, null, null, null, 'u', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `fos_user_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `fos_user_user_group`;
CREATE TABLE `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`),
  CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_price` double NOT NULL,
  `deposit_price` double NOT NULL,
  `long_size` int(11) NOT NULL,
  `wide_size` int(11) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `goods`
-- ----------------------------
BEGIN;
INSERT INTO `goods` VALUES ('1', 'The last supper', '1', 'uploads/images/23d283bd5b05c452e65f1e149ac9ffb031b09b6a.jpg', '最后的晚餐', '123', '0.01', '300', '400', '<p><img alt=\"750x460.jpg\" src=\"https://img.alicdn.com/imgextra/i1/1617810587/O1CN01IKlmFO1GCsySzIt4C_!!1617810587.jpg\" /><img alt=\"关联_01.jpg\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/O1CN01aQZaMh1GCsxoCFExJ_!!1617810587.jpg\" /></p>\r\n\r\n<p><img alt=\"关联_02.jpg\" src=\"https://img.alicdn.com/imgextra/i1/1617810587/O1CN011GCsxpuI4VyoesP_!!1617810587.jpg\" /><img alt=\"关联_03.jpg\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/O1CN011GCsxn2pN5JGFUA_!!1617810587.jpg\" /><img alt=\"关联_04.jpg\" src=\"https://img.alicdn.com/imgextra/i4/1617810587/O1CN0141kKgD1GCsxpjbmtD_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2BGaXcxz9F1JjSZFsXXaCGVXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2wMHLXBvBIuJjSszhXXX8ZFXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2e6uOaZ5fF1Jjy0FlXXbtcXXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/1617810587/TB2SMGecxf9F1JjSZFNXXbtIVXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/1617810587/TB2SCGMa0WgF1Jjy0FhXXbeEFXa_!!1617810587.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>', '2018-12-07 15:54:39', '2019-08-30 15:31:37'), ('2', 'Carrier were killed ​', '3', 'uploads/images/320e199fc34ac39c61ed2736884b9b1ab6072881.jpg', '运输船遇难', '3', '0.01', '400', '400', '<p><img alt=\"750x460.jpg\" src=\"https://img.alicdn.com/imgextra/i1/1617810587/O1CN01IKlmFO1GCsySzIt4C_!!1617810587.jpg\" /><img alt=\"关联_01.jpg\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/O1CN01aQZaMh1GCsxoCFExJ_!!1617810587.jpg\" /></p>\r\n\r\n<p><img alt=\"关联_02.jpg\" src=\"https://img.alicdn.com/imgextra/i1/1617810587/O1CN011GCsxpuI4VyoesP_!!1617810587.jpg\" /><img alt=\"关联_03.jpg\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/O1CN011GCsxn2pN5JGFUA_!!1617810587.jpg\" /><img alt=\"关联_04.jpg\" src=\"https://img.alicdn.com/imgextra/i4/1617810587/O1CN0141kKgD1GCsxpjbmtD_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2BGaXcxz9F1JjSZFsXXaCGVXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2wMHLXBvBIuJjSszhXXX8ZFXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i3/1617810587/TB2e6uOaZ5fF1Jjy0FlXXbtcXXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i2/1617810587/TB2SMGecxf9F1JjSZFNXXbtIVXa_!!1617810587.jpg\" /><img alt=\"\" src=\"https://img.alicdn.com/imgextra/i4/1617810587/TB2SCGMa0WgF1Jjy0FhXXbeEFXa_!!1617810587.jpg\" /></p>', '2018-12-10 10:38:04', '2019-08-30 15:31:46'), ('3', '寻寻觅觅', '10', 'uploads/images/26baf70981797aee204915dfdae2e9d40ec8c2e3.jpg', '冷冷清清', '1200', '150', '50', '70', null, '2019-01-05 16:24:25', '2019-01-05 16:24:25');
COMMIT;

-- ----------------------------
--  Table structure for `goods_banner`
-- ----------------------------
DROP TABLE IF EXISTS `goods_banner`;
CREATE TABLE `goods_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  KEY `IDX_EC4DB82AB7683595` (`goods_id`),
  CONSTRAINT `FK_EC4DB82AB7683595` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `goods_banner`
-- ----------------------------
BEGIN;
INSERT INTO `goods_banner` VALUES ('1', '1', 'uploads/images/ca122e6ab6954edb85c0a77d2177954930155108.jpg', '2018-12-07 15:54:39', '2018-12-13 19:58:05'), ('2', '1', 'uploads/images/a0434934b2d69208576588c674da3ae649045049.jpg', '2018-12-07 15:54:39', '2018-12-13 19:58:05'), ('3', '2', 'uploads/images/20cd895bd01b8e264399b180bc97dae3e2524434.jpg', '2018-12-10 10:38:04', '2018-12-13 20:08:40'), ('4', '2', 'uploads/images/2d8d10eff6251c17acfc59d76ca299121b58960e.jpg', '2018-12-13 20:08:40', '2018-12-13 20:08:40'), ('5', '3', 'uploads/images/d472dfd31698491eb484b0d74384fc416926e26f.jpg', '2019-01-05 16:24:25', '2019-01-05 16:24:25'), ('6', '3', 'uploads/images/6194c9a5a50f23e74d35f97452e5f34f8e647f81.jpg', '2019-01-05 16:24:25', '2019-01-05 16:24:25');
COMMIT;

-- ----------------------------
--  Table structure for `goods_classify_goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods_classify_goods`;
CREATE TABLE `goods_classify_goods` (
  `goods_id` int(11) NOT NULL,
  `classify_goods_id` int(11) NOT NULL,
  PRIMARY KEY (`goods_id`,`classify_goods_id`),
  KEY `IDX_D8F1E13CB7683595` (`goods_id`),
  KEY `IDX_D8F1E13C65617B4C` (`classify_goods_id`),
  CONSTRAINT `FK_D8F1E13C65617B4C` FOREIGN KEY (`classify_goods_id`) REFERENCES `classify_goods` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D8F1E13CB7683595` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `goods_classify_goods`
-- ----------------------------
BEGIN;
INSERT INTO `goods_classify_goods` VALUES ('1', '1'), ('2', '1'), ('3', '3');
COMMIT;

-- ----------------------------
--  Table structure for `marketing`
-- ----------------------------
DROP TABLE IF EXISTS `marketing`;
CREATE TABLE `marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explain_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` double NOT NULL,
  `present_price` double NOT NULL,
  `discount` double NOT NULL,
  `validity_date` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `deleted_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `marketing`
-- ----------------------------
BEGIN;
INSERT INTO `marketing` VALUES ('1', 'uploads/images/56bcc8c4e6e0b4aaf2d1cdfd32b2b962a4479585.jpg', '黄金会员', '1、请在结账前出示此卡；\r\n2、此卡可享受会员优惠待遇；\r\n3、此卡不得购买产品，不得与其它优惠同时使用；\r\n4、此卡一经售出，概不兑现。如有遗失，请及时挂失；\r\n5、本店保留此卡法律范围内的最终解释权。', '100', '0.01', '0.8', '30', '2018-12-10 10:56:09', '2018-12-13 20:14:28', null), ('2', 'uploads/images/3f2f5fdb9d2714c2c6a51cc0845ac56349b69cf2.jpg', '钻石会员卡', '1、请在结账前出示此卡；\r\n2、此卡可享受会员优惠待遇；\r\n3、此卡不得购买产品，不得与其它优惠同时使用；\r\n4、此卡一经售出，概不兑现。如有遗失，请及时挂失；\r\n5、本店保留此卡法律范围内的最终解释权。', '0.01', '0.01', '0.9', '30', '2018-12-13 20:24:42', '2018-12-13 20:24:42', null);
COMMIT;

-- ----------------------------
--  Table structure for `media__gallery`
-- ----------------------------
DROP TABLE IF EXISTS `media__gallery`;
CREATE TABLE `media__gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `media__gallery`
-- ----------------------------
BEGIN;
INSERT INTO `media__gallery` VALUES ('1', '123', 'default', 'reference', '1', '2019-05-29 16:28:55', '2019-01-21 20:58:49');
COMMIT;

-- ----------------------------
--  Table structure for `media__gallery_media`
-- ----------------------------
DROP TABLE IF EXISTS `media__gallery_media`;
CREATE TABLE `media__gallery_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  KEY `IDX_80D4C5414E7AF8F` (`gallery_id`),
  KEY `IDX_80D4C541EA9FDD75` (`media_id`),
  CONSTRAINT `FK_80D4C5414E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `media__gallery` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_80D4C541EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `media__media`
-- ----------------------------
DROP TABLE IF EXISTS `media__media`;
CREATE TABLE `media__media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `enabled` tinyint(1) NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_status` int(11) NOT NULL,
  `provider_reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_metadata` json DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_size` int(11) DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `context` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cdn_is_flushable` tinyint(1) DEFAULT NULL,
  `cdn_flush_identifier` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cdn_flush_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `cdn_status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_id` int(11) NOT NULL,
  `market_id` int(11) NOT NULL,
  `recharge_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `expire_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_70E4FA7837FDBD6D` (`consumer_id`),
  KEY `IDX_70E4FA78622F3F37` (`market_id`),
  CONSTRAINT `FK_70E4FA7837FDBD6D` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`id`),
  CONSTRAINT `FK_70E4FA78622F3F37` FOREIGN KEY (`market_id`) REFERENCES `marketing` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `member`
-- ----------------------------
BEGIN;
INSERT INTO `member` VALUES ('6', '1', '2', '2019-08-14 14:38:03', '2019-09-13 14:38:03', '2018-12-24 16:48:12', '2019-08-14 14:38:03'), ('7', '3', '2', '2019-05-29 18:13:42', '2019-06-28 18:13:42', '2018-12-24 17:17:23', '2019-05-29 18:13:42'), ('8', '4', '2', '2019-02-21 13:52:17', '2019-03-23 13:52:17', '2019-02-21 13:52:17', '2019-02-21 13:52:17'), ('9', '2', '2', '2019-08-30 15:07:25', '2020-01-24 15:07:28', '2019-08-30 15:07:31', '2019-08-30 15:07:36');
COMMIT;

-- ----------------------------
--  Table structure for `migration_versions`
-- ----------------------------
DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `migration_versions`
-- ----------------------------
BEGIN;
INSERT INTO `migration_versions` VALUES ('20181210030905');
COMMIT;

-- ----------------------------
--  Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_id` int(11) NOT NULL,
  `consignee_name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_concat` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('WP','WS','AS','AT','AC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WP' COMMENT '(DC2Type:OrderType)',
  `deleted_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `total` double NOT NULL DEFAULT '0',
  `total_excl` double NOT NULL DEFAULT '0',
  `paid_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `sent_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `took_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  KEY `IDX_F529939837FDBD6D` (`consumer_id`),
  CONSTRAINT `FK_F529939837FDBD6D` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `order`
-- ----------------------------
BEGIN;
INSERT INTO `order` VALUES ('1', '1', '', '', 'undefined', 'YH2018120768700', 'AC', null, '13', '13', null, null, null, '2018-12-07 16:24:50', '2018-12-12 14:12:28'), ('2', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121028366', 'AC', null, '3', '3', null, null, null, '2018-12-10 16:40:33', '2018-12-12 14:12:24'), ('3', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121094726', 'AC', null, '3', '3', null, null, null, '2018-12-10 16:41:20', '2018-12-12 13:55:33'), ('4', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121067464', 'AC', null, '0.03', '0.03', null, null, null, '2018-12-10 16:42:00', '2018-12-12 13:52:19'), ('5', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121003739', 'AC', null, '0.03', '0.03', null, null, null, '2018-12-10 16:42:16', '2018-12-12 13:39:25'), ('6', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121229943', 'AC', null, '0.03', '0.03', '2018-12-12 13:35:43', null, null, '2018-12-12 13:35:32', '2018-12-12 13:39:08'), ('7', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121219152', 'AC', null, '0.03', '0.03', '2018-12-12 13:41:09', null, null, '2018-12-12 13:41:03', '2018-12-12 14:25:17'), ('8', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121254290', 'AC', null, '0.03', '0.03', '2018-12-12 14:26:16', null, null, '2018-12-12 14:25:43', '2018-12-12 15:06:24'), ('9', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121213757', 'AC', null, '0.03', '0.03', '2018-12-12 15:44:57', null, null, '2018-12-12 15:44:29', '2018-12-12 15:52:24'), ('10', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121263631', 'AC', null, '0.03', '0.03', '2018-12-12 15:52:58', null, null, '2018-12-12 15:52:44', '2018-12-12 15:56:22'), ('11', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121268449', 'AC', null, '0.03', '0.03', '2018-12-12 15:56:38', null, null, '2018-12-12 15:56:32', '2018-12-12 15:57:01'), ('12', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121223317', 'AC', null, '0.03', '0.03', '2018-12-12 15:57:18', null, null, '2018-12-12 15:57:10', '2018-12-12 16:00:32'), ('13', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121265360', 'WP', null, '13', '13', null, null, null, '2018-12-12 16:00:40', '2018-12-12 16:00:40'), ('14', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121258015', 'AC', null, '0.03', '0.03', '2018-12-12 16:01:59', null, null, '2018-12-12 16:01:50', '2018-12-12 16:04:39'), ('15', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121295472', 'AC', null, '0.03', '0.03', '2018-12-12 16:04:54', null, null, '2018-12-12 16:04:46', '2018-12-12 16:06:13'), ('16', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121286556', 'AC', null, '0.03', '0.03', '2018-12-12 16:06:35', null, null, '2018-12-12 16:06:27', '2018-12-12 16:15:43'), ('17', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121216492', 'AC', null, '0.03', '0.03', '2018-12-12 16:16:03', null, null, '2018-12-12 16:15:55', '2018-12-12 16:17:07'), ('18', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121267019', 'AC', null, '0.03', '0.03', '2018-12-12 16:17:24', null, null, '2018-12-12 16:17:16', '2018-12-12 16:48:00'), ('19', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121204127', 'AC', null, '0.03', '0.03', '2018-12-12 16:48:38', null, null, '2018-12-12 16:48:09', '2018-12-12 16:50:44'), ('20', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121278869', 'AC', null, '0.03', '0.03', '2018-12-12 16:51:11', null, null, '2018-12-12 16:51:01', '2018-12-13 19:03:19'), ('21', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121313242', 'AC', null, '0.03', '0.03', '2018-12-13 19:04:22', '2018-12-13 19:09:03', null, '2018-12-13 19:03:36', '2018-12-13 20:50:00'), ('22', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121376798', 'WP', null, '0.03', '0.03', null, null, null, '2018-12-13 19:39:43', '2018-12-13 19:39:43'), ('23', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121391790', 'WP', null, '0.03', '0.03', null, null, null, '2018-12-13 19:39:49', '2018-12-13 19:39:49'), ('24', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121366559', 'WP', null, '0.03', '0.03', null, null, null, '2018-12-13 19:39:57', '2018-12-13 19:39:57'), ('25', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121322033', 'WP', null, '0.02', '0.02', null, null, null, '2018-12-13 20:33:35', '2018-12-13 20:33:35'), ('26', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121330855', 'WP', null, '0.02', '0.02', null, null, null, '2018-12-13 20:33:38', '2018-12-13 20:33:38'), ('27', '1', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121322173', 'WP', null, '0.02', '0.02', null, null, null, '2018-12-13 20:36:06', '2018-12-13 20:36:06'), ('28', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121331281', 'AT', null, '0.02', '0.02', '2018-12-13 20:41:42', '2018-12-13 20:43:53', '2018-12-13 20:55:10', '2018-12-13 20:41:20', '2018-12-13 20:55:10'), ('29', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121382043', 'AC', null, '0.05', '0.05', null, null, null, '2018-12-13 20:50:10', '2018-12-17 17:11:45'), ('30', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121380708', 'AT', null, '0.05', '0.05', '2018-12-13 20:50:35', '2018-12-17 17:08:32', '2018-12-17 17:08:37', '2018-12-13 20:50:21', '2018-12-17 17:08:37'), ('31', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2018121369868', 'AT', null, '0.03', '0.01', '2018-12-13 21:13:18', '2018-12-13 21:13:57', '2018-12-13 21:14:15', '2018-12-13 21:13:10', '2018-12-13 21:14:15'), ('32', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121763710', 'AC', null, '0', '0.05', null, null, null, '2018-12-17 17:38:40', '2018-12-17 17:55:19'), ('33', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121767874', 'AT', null, '0', '0.05', null, '2018-12-17 17:51:26', '2018-12-17 17:51:33', '2018-12-17 17:44:48', '2018-12-17 17:51:33'), ('34', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121924322', 'AC', null, '0.03', '0', '2018-12-19 21:11:42', null, null, '2018-12-19 21:11:14', '2018-12-19 21:13:24'), ('35', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018121918754', 'AT', null, '0.03', '0', '2018-12-19 21:13:55', '2018-12-19 21:14:19', '2018-12-19 21:14:38', '2018-12-19 21:13:48', '2018-12-19 21:14:38'), ('36', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018122071880', 'WP', null, '0.03', '0', null, null, null, '2018-12-20 21:49:16', '2018-12-20 21:49:16'), ('37', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2018122037310', 'AT', null, '0.03', '0', '2018-12-20 21:52:23', '2019-01-08 21:19:24', '2019-01-08 21:19:27', '2018-12-20 21:51:51', '2019-01-08 21:19:27'), ('38', '3', '李小虎', '13138163231', '广东省深圳市南山区招商海琴花园', 'YH2019010514226', 'AT', null, '0.03', '0', '2019-01-05 15:53:17', '2019-01-05 16:43:21', '2019-01-05 16:57:03', '2019-01-05 15:53:12', '2019-01-05 16:57:03'), ('39', '3', '李小虎', '13138163231', '广东省深圳市南山区招商海琴花园', 'YH2019010557588', 'AC', null, '0', '0', null, '2019-01-05 17:17:27', null, '2019-01-05 16:59:37', '2019-06-25 10:46:20'), ('40', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010873317', 'AC', null, '0.03', '0', '2019-01-08 21:20:00', null, null, '2019-01-08 21:19:46', '2019-01-08 21:23:57'), ('41', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010858938', 'AC', null, '0.03', '0', '2019-01-08 21:24:33', null, null, '2019-01-08 21:24:23', '2019-01-08 21:30:14'), ('42', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010865040', 'AC', null, '0.03', '0', '2019-01-08 21:30:45', null, null, '2019-01-08 21:30:34', '2019-01-08 21:34:16'), ('43', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010836269', 'AC', null, '0.03', '0', '2019-01-08 21:34:42', null, null, '2019-01-08 21:34:32', '2019-01-09 11:40:37'), ('44', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010903584', 'WP', null, '0.03', '0', null, null, null, '2019-01-09 11:42:05', '2019-01-09 11:42:05'), ('45', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010967169', 'WP', null, '0.03', '0', null, null, null, '2019-01-09 11:47:27', '2019-01-09 11:47:27'), ('46', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010920691', 'WP', null, '0.03', '0', null, null, null, '2019-01-09 11:50:40', '2019-01-09 11:50:40'), ('47', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010967292', 'WP', null, '0.03', '0', null, null, null, '2019-01-09 13:07:10', '2019-01-09 13:07:10'), ('48', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010988037', 'AC', null, '0.03', '0', '2019-01-09 13:13:13', null, null, '2019-01-09 13:08:54', '2019-01-09 13:19:32'), ('49', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010929284', 'AC', null, '0.03', '0', '2019-01-09 13:11:26', null, null, '2019-01-09 13:11:12', '2019-01-09 13:12:50'), ('50', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010903667', 'AC', null, '0.02', '0', '2019-01-09 13:13:17', null, null, '2019-01-09 13:13:09', '2019-01-09 13:18:51'), ('51', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010969981', 'AC', null, '0.03', '0', '2019-01-09 13:19:55', null, null, '2019-01-09 13:19:43', '2019-01-09 16:46:34'), ('52', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010998303', 'AC', null, '0.03', '0', '2019-01-09 16:47:06', null, null, '2019-01-09 16:46:48', '2019-01-09 17:34:06'), ('53', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010965993', 'AC', null, '0.03', '0', null, null, null, '2019-01-09 16:49:37', '2019-01-09 17:34:14'), ('54', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010970775', 'AC', null, '0.03', '0', '2019-01-09 16:49:54', null, null, '2019-01-09 16:49:42', '2019-01-09 17:34:11'), ('55', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010919482', 'AC', null, '0.03', '0', '2019-01-09 17:34:51', null, null, '2019-01-09 17:34:37', '2019-01-09 17:40:15'), ('56', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010970463', 'AC', null, '0.03', '0', '2019-01-09 17:40:38', null, null, '2019-01-09 17:40:28', '2019-01-09 17:44:58'), ('57', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010967634', 'AC', null, '0.03', '0', '2019-01-09 17:45:33', null, null, '2019-01-09 17:45:28', '2019-01-09 17:47:48'), ('58', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010906258', 'AC', null, '0.03', '0', '2019-01-09 17:48:36', null, null, '2019-01-09 17:48:24', '2019-01-09 17:50:44'), ('59', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010965384', 'AC', null, '0.03', '0', '2019-01-09 17:51:20', null, null, '2019-01-09 17:51:13', '2019-01-09 17:55:02'), ('60', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019010982026', 'AC', null, '0.03', '0', '2019-01-09 17:55:30', '2019-01-16 19:55:26', null, '2019-01-09 17:55:23', '2019-01-16 19:57:49'), ('61', '4', '义乌', '110', '广东省广州市海珠区123路', 'YH2019022113841', 'WP', null, '0.03', '0', null, null, null, '2019-02-21 13:53:13', '2019-02-21 13:53:13'), ('62', '4', '义乌', '110', '广东省广州市海珠区123路', 'YH2019022121786', 'WP', null, '0.02', '0', null, null, null, '2019-02-21 21:12:24', '2019-02-21 21:12:24'), ('63', '4', '义乌', '110', '广东省广州市海珠区123路', 'YH2019022172236', 'WP', null, '0.02', '0', null, null, null, '2019-02-21 21:12:38', '2019-02-21 21:12:38'), ('64', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019051397305', 'AC', null, '0', '0.03', null, null, null, '2019-05-13 14:52:57', '2019-05-13 14:54:03'), ('65', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019051342688', 'AT', null, '0', '0.03', null, '2019-05-13 14:54:35', '2019-05-13 14:54:46', '2019-05-13 14:54:16', '2019-05-13 14:54:46'), ('66', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019052955501', 'AC', null, '0.03', '0', '2019-05-29 18:36:59', null, null, '2019-05-29 18:36:52', '2019-05-30 09:03:53'), ('67', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019053079020', 'AC', null, '0.03', '0', '2019-05-30 09:04:29', null, null, '2019-05-30 09:04:12', '2019-05-30 09:21:49'), ('68', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019053018483', 'AC', null, '0.03', '0', '2019-05-30 09:22:38', null, null, '2019-05-30 09:22:24', '2019-05-30 09:28:55'), ('69', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019053015059', 'AC', null, '0.03', '0', '2019-05-30 09:29:21', null, null, '2019-05-30 09:29:08', '2019-05-30 09:38:37'), ('70', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019053058773', 'AT', null, '0.03', '0', '2019-05-30 09:39:12', '2019-06-06 03:54:05', '2019-06-28 11:35:41', '2019-05-30 09:39:05', '2019-06-28 11:35:41'), ('71', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019060802468', 'AT', null, '0.03', '0', '2019-06-08 09:29:06', '2019-06-20 06:56:27', '2019-06-20 06:56:29', '2019-06-08 09:28:58', '2019-06-20 06:56:29'), ('72', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062525410', 'AT', null, '0.03', '0.03', '2019-06-25 09:06:15', '2019-06-25 09:07:38', '2019-06-25 09:07:40', '2019-06-25 09:06:03', '2019-06-25 09:07:40'), ('73', '3', '李小虎', '13138163231', '广东省深圳市南山区招商海琴花园', 'YH2019062520925', 'AT', null, '0.02', '0.03', '2019-06-25 10:49:38', '2019-08-26 15:35:08', '2019-08-26 15:35:10', '2019-06-25 10:49:29', '2019-08-26 15:35:10'), ('74', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062701991', 'AT', null, '0', '0.06', null, '2019-06-27 06:35:03', '2019-06-27 06:35:04', '2019-06-27 06:34:38', '2019-06-27 06:35:04'), ('75', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062728485', 'AT', null, '0', '0.06', null, '2019-06-27 06:35:37', '2019-06-27 06:35:38', '2019-06-27 06:35:21', '2019-06-27 06:35:38'), ('76', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062740351', 'AT', null, '0', '0.06', null, '2019-06-28 11:02:42', '2019-06-28 11:02:43', '2019-06-27 06:35:48', '2019-06-28 11:02:43'), ('77', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062814541', 'AT', null, '0', '0.06', null, '2019-06-28 11:03:17', '2019-06-28 11:03:18', '2019-06-28 11:03:01', '2019-06-28 11:03:18'), ('78', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019062807768', 'AT', null, '0', '0.06', null, '2019-06-28 11:08:35', '2019-06-28 11:08:37', '2019-06-28 11:08:23', '2019-06-28 11:08:37'), ('79', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019062827855', 'AT', null, '0', '0.06', null, '2019-06-28 11:37:26', '2019-06-28 11:37:37', '2019-06-28 11:35:55', '2019-06-28 11:37:37'), ('80', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019062827266', 'AT', null, '0', '0.03', null, '2019-06-28 14:19:54', '2019-06-28 14:20:07', '2019-06-28 14:19:36', '2019-06-28 14:20:07'), ('81', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019081470254', 'AT', null, '0.03', '0', '2019-08-14 14:32:51', '2019-08-14 14:35:19', '2019-08-14 14:35:32', '2019-08-14 14:32:33', '2019-08-14 14:35:32'), ('82', '1', 'xxx', '134444282893', '广东省广州市海珠区下班吧', 'YH2019081449407', 'WS', null, '0', '0.03', null, '2019-08-21 17:09:54', '2019-08-21 17:09:54', '2019-08-14 14:35:40', '2019-08-21 17:09:54'), ('83', '2', '李', '13726273851', '广东省深圳市南山区123', 'YH2019083047382', 'AT', null, '0.03', '0', '2019-08-30 15:21:02', '2019-08-30 15:23:45', '2019-08-30 15:23:48', '2019-08-30 15:20:38', '2019-08-30 15:23:48');
COMMIT;

-- ----------------------------
--  Table structure for `order_bill`
-- ----------------------------
DROP TABLE IF EXISTS `order_bill`;
CREATE TABLE `order_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `order_info_id` int(11) NOT NULL,
  `deposit_price` double NOT NULL,
  `status` enum('RT','AE') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:OrderBillType)',
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  KEY `IDX_37D023F4B7683595` (`goods_id`),
  KEY `IDX_37D023F4ABF168B3` (`order_info_id`),
  CONSTRAINT `FK_37D023F4ABF168B3` FOREIGN KEY (`order_info_id`) REFERENCES `order` (`id`),
  CONSTRAINT `FK_37D023F4B7683595` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `order_bill`
-- ----------------------------
BEGIN;
INSERT INTO `order_bill` VALUES ('1', '1', '1', '13', 'AE', '1', '2018-12-07 16:24:50', '2018-12-07 16:24:50'), ('2', '2', '2', '3', 'AE', '1', '2018-12-10 16:40:33', '2018-12-10 16:40:33'), ('3', '2', '3', '3', 'AE', '1', '2018-12-10 16:41:20', '2018-12-10 16:41:20'), ('4', '2', '4', '0.03', 'AE', '1', '2018-12-10 16:42:00', '2018-12-10 16:42:00'), ('5', '2', '5', '0.03', 'AE', '1', '2018-12-10 16:42:16', '2018-12-10 16:42:16'), ('6', '2', '6', '0.03', 'AE', '1', '2018-12-12 13:35:32', '2018-12-12 13:35:32'), ('7', '2', '7', '0.03', 'AE', '1', '2018-12-12 13:41:03', '2018-12-12 13:41:03'), ('8', '2', '8', '0.03', 'AE', '1', '2018-12-12 14:25:43', '2018-12-12 14:25:43'), ('9', '2', '9', '0.03', 'AE', '1', '2018-12-12 15:44:29', '2018-12-12 15:44:29'), ('10', '2', '10', '0.03', 'AE', '1', '2018-12-12 15:52:44', '2018-12-12 15:52:44'), ('11', '2', '11', '0.03', 'AE', '1', '2018-12-12 15:56:32', '2018-12-12 15:56:32'), ('12', '2', '12', '0.03', 'AE', '1', '2018-12-12 15:57:10', '2018-12-12 15:57:10'), ('13', '1', '13', '13', 'AE', '1', '2018-12-12 16:00:40', '2018-12-12 16:00:40'), ('14', '2', '14', '0.03', 'AE', '1', '2018-12-12 16:01:50', '2018-12-12 16:01:50'), ('15', '2', '15', '0.03', 'AE', '1', '2018-12-12 16:04:46', '2018-12-12 16:04:46'), ('16', '2', '16', '0.03', 'AE', '1', '2018-12-12 16:06:27', '2018-12-12 16:06:27'), ('17', '2', '17', '0.03', 'AE', '1', '2018-12-12 16:15:55', '2018-12-12 16:15:55'), ('18', '2', '18', '0.03', 'AE', '1', '2018-12-12 16:17:16', '2018-12-12 16:17:16'), ('19', '2', '19', '0.03', 'AE', '1', '2018-12-12 16:48:09', '2018-12-12 16:48:09'), ('20', '2', '20', '0.03', 'AE', '1', '2018-12-12 16:51:01', '2018-12-12 16:51:01'), ('21', '2', '21', '0.03', 'AE', '1', '2018-12-13 19:03:36', '2018-12-13 19:03:36'), ('22', '2', '22', '0.03', 'AE', '1', '2018-12-13 19:39:43', '2018-12-13 19:39:43'), ('23', '2', '23', '0.03', 'AE', '1', '2018-12-13 19:39:49', '2018-12-13 19:39:49'), ('24', '2', '24', '0.03', 'AE', '1', '2018-12-13 19:39:57', '2018-12-13 19:39:57'), ('25', '1', '25', '0.02', 'AE', '1', '2018-12-13 20:33:35', '2018-12-13 20:33:35'), ('26', '1', '26', '0.02', 'AE', '1', '2018-12-13 20:33:38', '2018-12-13 20:33:38'), ('27', '1', '27', '0.02', 'AE', '1', '2018-12-13 20:36:06', '2018-12-13 20:36:06'), ('28', '1', '28', '0.02', 'AE', '1', '2018-12-13 20:41:20', '2018-12-13 20:41:20'), ('29', '2', '29', '0.03', 'AE', '1', '2018-12-13 20:50:10', '2018-12-13 20:50:10'), ('30', '1', '29', '0.02', 'AE', '1', '2018-12-13 20:50:10', '2018-12-13 20:50:10'), ('31', '2', '30', '0.03', 'AE', '1', '2018-12-13 20:50:21', '2018-12-13 20:50:21'), ('32', '1', '30', '0.02', 'AE', '1', '2018-12-13 20:50:21', '2018-12-13 20:50:21'), ('33', '2', '31', '0.03', 'AE', '1', '2018-12-13 21:13:10', '2018-12-13 21:13:10'), ('34', '1', '31', '0.02', 'RT', '1', '2018-12-13 21:13:10', '2018-12-13 21:13:10'), ('35', '2', '32', '0.03', 'RT', '1', '2018-12-17 17:38:40', '2018-12-17 17:38:40'), ('36', '1', '32', '0.02', 'RT', '1', '2018-12-17 17:38:40', '2018-12-17 17:38:40'), ('37', '2', '33', '0.03', 'RT', '1', '2018-12-17 17:44:48', '2018-12-17 17:44:48'), ('38', '1', '33', '0.02', 'RT', '1', '2018-12-17 17:44:48', '2018-12-17 17:44:48'), ('39', '2', '34', '0.03', 'AE', '1', '2018-12-19 21:11:14', '2018-12-19 21:11:14'), ('40', '2', '35', '0.03', 'AE', '1', '2018-12-19 21:13:48', '2018-12-19 21:13:48'), ('41', '2', '36', '0.03', 'AE', '1', '2018-12-20 21:49:16', '2018-12-20 21:49:16'), ('42', '2', '37', '0.03', 'AE', '1', '2018-12-20 21:51:51', '2018-12-20 21:51:51'), ('43', '2', '38', '0.03', 'AE', '1', '2019-01-05 15:53:12', '2019-01-05 15:53:12'), ('44', '2', '40', '0.03', 'AE', '1', '2019-01-08 21:19:46', '2019-01-08 21:19:46'), ('45', '2', '41', '0.03', 'AE', '1', '2019-01-08 21:24:23', '2019-01-08 21:24:23'), ('46', '2', '42', '0.03', 'AE', '1', '2019-01-08 21:30:34', '2019-01-08 21:30:34'), ('47', '2', '43', '0.03', 'AE', '1', '2019-01-08 21:34:32', '2019-01-08 21:34:32'), ('48', '2', '44', '0.03', 'AE', '1', '2019-01-09 11:42:05', '2019-01-09 11:42:05'), ('49', '2', '45', '0.03', 'AE', '1', '2019-01-09 11:47:27', '2019-01-09 11:47:27'), ('50', '2', '46', '0.03', 'AE', '1', '2019-01-09 11:50:40', '2019-01-09 11:50:40'), ('51', '2', '47', '0.03', 'AE', '1', '2019-01-09 13:07:10', '2019-01-09 13:07:10'), ('52', '2', '48', '0.03', 'AE', '1', '2019-01-09 13:08:54', '2019-01-09 13:08:54'), ('53', '2', '49', '0.03', 'AE', '1', '2019-01-09 13:11:12', '2019-01-09 13:11:12'), ('54', '1', '50', '0.02', 'AE', '1', '2019-01-09 13:13:09', '2019-01-09 13:13:09'), ('55', '2', '51', '0.03', 'AE', '1', '2019-01-09 13:19:43', '2019-01-09 13:19:43'), ('56', '2', '52', '0.03', 'AE', '1', '2019-01-09 16:46:48', '2019-01-09 16:46:48'), ('57', '2', '53', '0.03', 'AE', '1', '2019-01-09 16:49:37', '2019-01-09 16:49:37'), ('58', '2', '54', '0.03', 'AE', '1', '2019-01-09 16:49:42', '2019-01-09 16:49:42'), ('59', '2', '55', '0.03', 'AE', '1', '2019-01-09 17:34:37', '2019-01-09 17:34:37'), ('60', '2', '56', '0.03', 'AE', '1', '2019-01-09 17:40:28', '2019-01-09 17:40:28'), ('61', '2', '57', '0.03', 'AE', '1', '2019-01-09 17:45:28', '2019-01-09 17:45:28'), ('62', '2', '58', '0.03', 'AE', '1', '2019-01-09 17:48:24', '2019-01-09 17:48:24'), ('63', '2', '59', '0.03', 'AE', '1', '2019-01-09 17:51:13', '2019-01-09 17:51:13'), ('64', '2', '60', '0.03', 'AE', '1', '2019-01-09 17:55:23', '2019-01-09 17:55:23'), ('65', '2', '61', '0.03', 'AE', '1', '2019-02-21 13:53:13', '2019-02-21 13:53:13'), ('66', '1', '62', '0.02', 'AE', '1', '2019-02-21 21:12:24', '2019-02-21 21:12:24'), ('67', '1', '63', '0.02', 'AE', '1', '2019-02-21 21:12:38', '2019-02-21 21:12:38'), ('68', '2', '64', '0.03', 'RT', '1', '2019-05-13 14:52:57', '2019-05-13 14:52:57'), ('69', '2', '65', '0.03', 'RT', '1', '2019-05-13 14:54:16', '2019-05-13 14:54:16'), ('70', '2', '66', '0.03', 'AE', '1', '2019-05-29 18:36:52', '2019-05-29 18:36:52'), ('71', '2', '67', '0.03', 'AE', '1', '2019-05-30 09:04:12', '2019-05-30 09:04:12'), ('72', '2', '68', '0.03', 'AE', '1', '2019-05-30 09:22:24', '2019-05-30 09:22:24'), ('73', '2', '69', '0.03', 'AE', '1', '2019-05-30 09:29:08', '2019-05-30 09:29:08'), ('74', '2', '70', '0.03', 'AE', '1', '2019-05-30 09:39:05', '2019-05-30 09:39:05'), ('75', '2', '71', '0.03', 'AE', '1', '2019-06-08 09:28:58', '2019-06-08 09:28:58'), ('76', '2', '72', '0.03', 'AE', '1', '2019-06-25 09:06:03', '2019-06-25 09:06:03'), ('77', '2', '72', '0.03', 'RT', '1', '2019-06-25 09:06:03', '2019-06-25 09:06:03'), ('78', '1', '73', '0.02', 'AE', '1', '2019-06-25 10:49:29', '2019-06-25 10:49:29'), ('79', '2', '73', '0.03', 'RT', '1', '2019-06-25 10:49:29', '2019-06-25 10:49:29'), ('80', '2', '74', '0.03', 'RT', '1', '2019-06-27 06:34:38', '2019-06-27 06:34:38'), ('81', '2', '74', '0.03', 'RT', '1', '2019-06-27 06:34:38', '2019-06-27 06:34:38'), ('82', '2', '75', '0.03', 'RT', '1', '2019-06-27 06:35:21', '2019-06-27 06:35:21'), ('83', '2', '75', '0.03', 'RT', '1', '2019-06-27 06:35:21', '2019-06-27 06:35:21'), ('84', '2', '76', '0.03', 'RT', '1', '2019-06-27 06:35:48', '2019-06-27 06:35:48'), ('85', '2', '76', '0.03', 'RT', '1', '2019-06-27 06:35:48', '2019-06-27 06:35:48'), ('86', '2', '77', '0.03', 'RT', '1', '2019-06-28 11:03:01', '2019-06-28 11:03:01'), ('87', '2', '77', '0.03', 'RT', '1', '2019-06-28 11:03:01', '2019-06-28 11:03:01'), ('88', '2', '78', '0.03', 'RT', '1', '2019-06-28 11:08:23', '2019-06-28 11:08:23'), ('89', '2', '78', '0.03', 'RT', '1', '2019-06-28 11:08:23', '2019-06-28 11:08:23'), ('90', '2', '79', '0.03', 'RT', '1', '2019-06-28 11:35:55', '2019-06-28 11:35:55'), ('91', '2', '79', '0.03', 'RT', '1', '2019-06-28 11:35:55', '2019-06-28 11:35:55'), ('92', '2', '80', '0.03', 'RT', '1', '2019-06-28 14:19:36', '2019-06-28 14:19:36'), ('93', '2', '81', '0.03', 'AE', '1', '2019-08-14 14:32:33', '2019-08-14 14:32:33'), ('94', '2', '82', '0.03', 'RT', '1', '2019-08-14 14:35:40', '2019-08-14 14:35:40'), ('95', '2', '83', '0.03', 'AE', '1', '2019-08-30 15:20:38', '2019-08-30 15:20:38');
COMMIT;

-- ----------------------------
--  Table structure for `receipt_info`
-- ----------------------------
DROP TABLE IF EXISTS `receipt_info`;
CREATE TABLE `receipt_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailed_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime)',
  PRIMARY KEY (`id`),
  KEY `IDX_5DF20ADB37FDBD6D` (`consumer_id`),
  CONSTRAINT `FK_5DF20ADB37FDBD6D` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `receipt_info`
-- ----------------------------
BEGIN;
INSERT INTO `receipt_info` VALUES ('1', '1', 'xxx', '134444282893', '广东省', '广州市', '海珠区', '下班吧', '', '2018-12-10 16:40:32', '2018-12-10 16:40:32'), ('2', '2', '李', '13726273851', '广东省', '深圳市', '南山区', '123', '加辣椒', '2018-12-13 19:39:40', '2018-12-13 19:39:40'), ('3', '3', '李小虎', '13138163231', '广东省', '深圳市', '南山区', '招商海琴花园', '', '2019-01-05 15:53:10', '2019-01-05 15:53:10'), ('4', '4', '义乌', '110', '广东省', '广州市', '海珠区', '123路', '', '2019-02-21 13:53:07', '2019-02-21 13:53:07');
COMMIT;

-- ----------------------------
--  Table structure for `wechat`
-- ----------------------------
DROP TABLE IF EXISTS `wechat`;
CREATE TABLE `wechat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_id` int(11) NOT NULL,
  `open_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B2EE495137FDBD6D` (`consumer_id`),
  CONSTRAINT `FK_B2EE495137FDBD6D` FOREIGN KEY (`consumer_id`) REFERENCES `consumer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `wechat`
-- ----------------------------
BEGIN;
INSERT INTO `wechat` VALUES ('1', '1', 'o1gDy5Kpl6FcKSHDMWt4o57_wgzs'), ('2', '2', 'o1gDy5JpugUmb_wL4n9czmxeg6og'), ('3', '3', 'o1gDy5GZdPicQM34aLeYGBUH30AI'), ('4', '4', 'o1gDy5FxcB_bMWBzcUUnflvIM-NQ');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
