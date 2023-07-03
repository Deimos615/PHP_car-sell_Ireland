/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : autoguru

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 05/08/2022 07:25:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for buy
-- ----------------------------
DROP TABLE IF EXISTS `buy`;
CREATE TABLE `buy`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cid` int(11) NOT NULL,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uemail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `buy_price` int(10) NOT NULL,
  `expires` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bought_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buy
-- ----------------------------
INSERT INTO `buy` VALUES (1, 'M. Benz 22', 1, 'tony', 'tessdt@gmail.com', 35000, '2022-07-25', '2022-07-14 19:22:00');

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faqs
-- ----------------------------
INSERT INTO `faqs` VALUES (1, 'How to start bidding?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (2, 'Security Deposit / Bidding Power', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (3, 'Delivery time to the destination port', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (4, 'How to register to bid in an auction?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (5, 'How will I know if my bid was successful?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (6, 'What happens if I bid on the wrong lot?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (7, 'How to leave an absentee bid', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (8, 'How do I know if I won an item?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (9, 'How do I know if I\'m the high bidder?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (10, 'Can I bid using my mobile device?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (11, 'Where do I access my saved items?', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');
INSERT INTO `faqs` VALUES (12, 'Cancellations and returns', 'All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.');

-- ----------------------------
-- Table structure for offer
-- ----------------------------
DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cid` int(11) NOT NULL,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uemail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `esti_price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `expires` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `offered_at` datetime(0) NOT NULL,
  `winning` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offer
-- ----------------------------
INSERT INTO `offer` VALUES (1, 'M. Benz 22', 1, 'tony', 'tessdt@gmail.com', 30000, 31000, '2022-07-25', '2022-07-14 19:22:12', 'lose');

-- ----------------------------
-- Table structure for stock
-- ----------------------------
DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `esti_price` int(11) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `timer` date NOT NULL,
  `premium` int(11) NOT NULL,
  `offers` int(11) NOT NULL,
  `watching` int(11) NOT NULL,
  `years` year NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `doors` int(11) NOT NULL,
  `fuel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transmission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `engine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mileage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `main_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sub_img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img8` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img9` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_img10` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mechanical_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `condition_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_at` datetime(0) NULL DEFAULT NULL,
  `list_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `buy_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `feature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `live_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stock
-- ----------------------------
INSERT INTO `stock` VALUES (1, 'M. Benz 22', 30000, 35000, '2022-07-25', 10, 7, 15, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/afdc1b4cf61d638439c48646432fe30d.png', '/uploads/45a72f934cce9e0927f7dba206396b9a.png', '/uploads/164ee34501fe10e3f48293c087d99288.png', '/uploads/0d686bf44b25e06d1c51f7597624fd96.png', '/uploads/17178bdadac8f2e7bf6f8db3b53bd1b9.png', '/uploads/a1ca50d988683642a9ca6ffb64f667d8.png', '', '', '', '', '', '/reports/be875f8ae94f3e618e808f7213062e32.pdf', '/reports/a27bfa975158c319eb4909d0e8e407cf.pdf', '2022-07-14 18:10:14', 'active', 'bought', 'yes', NULL);
INSERT INTO `stock` VALUES (2, 'Audi', 35000, 40000, '2022-07-30', 10, 9, 19, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/e2933a02e9fddf6c7848c76e2d3f0a23.jpg', '/uploads/360452515e1ccae90a5743d862fe20e5.jpg', '/uploads/7dba44fff69d0e9a7c8d13a77cefcd19.jpg', '/uploads/4c65701270460c98749c59721284d663.jpg', '/uploads/9f14732013a9d446b39d7037d60d6ee4.jpg', '/uploads/75f89e4975e4c7590fe2ce6c7c11a32f.jpg', '', '', '', '', '', '/reports/64efd46d54afee513e42c84847e718bd.pdf', '/reports/ce7c14dc63b3fc1f8625c3ddc190c6de.pdf', '2022-07-14 20:09:14', 'active', NULL, 'yes', NULL);
INSERT INTO `stock` VALUES (3, 'Super', 30000, 35000, '2022-08-10', 10, 7, 15, 2022, 'black', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/6aa85e939a1da1ae8679b78d18544654.jpg', '/uploads/6f537d227a5d71e57fc16438b2d41973.jpg', '/uploads/39d2f4c052b2070148d871126a3dbb62.jpg', '/uploads/fd3b33935bc1094fa183cb7549b3b838.jpg', '/uploads/b21ec8e0c486bd00182291c74377ef91.jpg', '/uploads/e508dffab0224a4727dec77adf78e7db.jpg', '', '', '', '', '', '/reports/c58251a9b87ceb304460734330f1a8aa.pdf', '/reports/bf597a60f82f6095be29d645f2fd8936.pdf', '2022-07-14 20:12:27', 'active', NULL, 'yes', 'die');
INSERT INTO `stock` VALUES (4, 'W 442', 25000, 30000, '2022-07-30', 10, 5, 31, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/3055f80e8414a9fc7be60dd18270429b.jpg', '/uploads/acf3206b5326c513d3db5e3168e69618.jpg', '', '', '', '', '', '', '', '', '', '/reports/e839c030e572291948cdedfc26595b4b.pdf', '/reports/65fd50e57e9a611b3dd3961ae746246a.pdf', '2022-07-14 20:15:48', 'active', NULL, 'yes', NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dealership` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `garage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `waiting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `approved_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Marc', 'tester', 'https://test.com', 'test@gmail.com', '10', '123456', 'paybank', '$2y$10$jRvAv9AcG5qfY/af3z1oAORBtEts2PpOtsxdXYlELLoELixzemY/K', '2022-07-14 18:17:17', NULL, 'OKay', '2022-07-14 19:20:38', 'active');
INSERT INTO `user` VALUES (2, 'John', 'tinker', 'https://elastic.com', 'jte123@outlook.com', '10', '123456', 'mybank', '$2y$10$cRpjRjTxlecubeZQon5./eoAahwcOBcyQqChm68bOWK0YVUHE6jUm', '2022-07-14 18:22:40', NULL, 'OKay', '2022-07-14 19:20:36', 'active');
INSERT INTO `user` VALUES (9, 'tony', 'anter', 'https://test.com', 'tessdt@gmail.com', '10', '123456', 'paybank', '$2y$10$Hb/nW4mG8ipTzKZtDIQ9BeuWx9.JqEz6ceFot8ywrs3XB8RRrZCKO', '2022-07-14 19:16:52', NULL, 'OKay', '2022-07-14 19:20:35', 'active');

SET FOREIGN_KEY_CHECKS = 1;
