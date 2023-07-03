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

 Date: 06/08/2022 15:27:01
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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buy
-- ----------------------------
INSERT INTO `buy` VALUES (2, '3 Series 320D Sport', 12, 'Conor', 'Conor@McChesneys.ie', 16800, '2022-07-26', '2022-07-20 05:17:50');
INSERT INTO `buy` VALUES (3, 'Peugeot Partner 1.6 HDI', 11, 'Conor', 'Conor@McChesneys.ie', 4800, '2022-07-26', '2022-07-20 13:53:25');
INSERT INTO `buy` VALUES (4, 'Audi A6 B/E S Tronic', 5, 'Conor', 'Conor@McChesneys.ie', 16800, '2022-07-26', '2022-07-21 12:18:07');
INSERT INTO `buy` VALUES (5, 'VW Polo SE BMT', 23, 'Conor', 'Conor@McChesneys.ie', 11300, '2022-08-10', '2022-08-03 07:32:10');

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faqs
-- ----------------------------
INSERT INTO `faqs` VALUES (2, 'Security Deposit / Bidding Power', 'All successful bidders can confirm their winning bid by checking the . In additid');
INSERT INTO `faqs` VALUES (3, 'Delivery time to the destination port', 'All successful bd');
INSERT INTO `faqs` VALUES (4, 'How to register to bid in an auction?', 'All successful bidders can confirm their winning bid d');
INSERT INTO `faqs` VALUES (5, 'How will I know if my bid was successful?', 'All successful bidders can confirm their winning bid by checking the . In addition, all sucf');
INSERT INTO `faqs` VALUES (6, 'What happens if I bid on the wrong lot?', 'All successful bidders can confirm their winning bid by checking the . In addition, all successfd');
INSERT INTO `faqs` VALUES (7, 'How to leave an absentee bid', 'All successful bidde');
INSERT INTO `faqs` VALUES (8, 'How do I know if I won an item?', 'All successful bidders can confirm their winning bid by checking the . In addition, all succeg');
INSERT INTO `faqs` VALUES (9, 'How do I know if I\'m the high bidder?', 'All successful bidders can confirm their winning bid bh');
INSERT INTO `faqs` VALUES (10, 'Can I bid using my mobile device?', 'All successful bidders can confirm their winning bid by checking the  In addition, allg');
INSERT INTO `faqs` VALUES (11, 'Where do I access my saved items?', 'All successful bidders can confirm their winning bid by checking the . In addition, all suw');
INSERT INTO `faqs` VALUES (12, 'Cancellations and returns', 'All successful bidders can confirm their winning bid by checking the ');

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offer
-- ----------------------------
INSERT INTO `offer` VALUES (2, 'VW Passat 1.6', 15, 'Conor', 'Conor@McChesneys.ie', 12300, 11700, '2022-07-26', '2022-07-21 03:20:34', 'lose');
INSERT INTO `offer` VALUES (3, 'Audi A6 B/E S Tronic', 5, 'Distilled', 'test@distilled.ie', 16300, 17000, '2022-07-26', '2022-07-21 08:35:50', 'lose');
INSERT INTO `offer` VALUES (4, 'Seat ibiza 5 Dr', 21, 'Conor', 'Conor@McChesneys.ie', 6900, 6800, '2022-08-10', '2022-08-03 06:52:09', 'win');
INSERT INTO `offer` VALUES (5, 'VW Polo SE BMT', 23, 'Conor', 'Conor@McChesneys.ie', 11100, 11000, '2022-08-10', '2022-08-03 07:32:02', 'lose');

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
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stock
-- ----------------------------
INSERT INTO `stock` VALUES (12, '3 Series 320D Sport', 16400, 16800, '2022-07-26', 3, 7, 11, 2016, 'Navy', 4, 'Diesel', 'Automatic', '2.0', '117000', '/uploads/5801ce54a3f72ca9f3e83b4eeb426c9b.jpg', '/uploads/61eac37be77e1f4010f1bb4e05a15eff.jpg', '', '', '', '', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-07-20 02:45:35', 'inactive', 'bought', NULL, NULL);
INSERT INTO `stock` VALUES (14, 'Opel Astra 1.6 CDTI', 7900, 8100, '2022-07-26', 4, 7, 10, 2015, 'Blue', 5, 'Diesel', 'Manual', '1.6', '98000', '/uploads/e282e76ca780eeb374f2b74dd34df001jpeg', '', '', '', '', '', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-07-20 02:55:39', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (20, 'VW Golf 1.6 Highline Pan roof / Rev Camera', 15400, 15600, '2022-08-10', 3, 10, 10, 2016, 'White', 5, 'Diesel', 'Manual', '1.6', '114000', '/uploads/ee92c9d8942211242e275ab925de6d6a.PNG', '/uploads/f9489416efca087c99d8bad0e087f487.PNG', '/uploads/b284c58ba9a13a2a42f23bebb3bca812jpeg', '/uploads/1c3d827e2ac61d54090b0b4eb9b0ee8ejpeg', '/uploads/595110b9d37fb8fdce1da9d0641184afjpeg', '/uploads/5b98cadd3aca8ee5759587a1c7a647d0jpeg', '/uploads/0d4cfd47124ec8287bfc0e8af03ed2a9jpeg', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 02:39:48', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (21, 'Seat ibiza 5 Dr', 6900, 7100, '2022-08-10', 2, 10, 11, 2014, 'Red', 5, 'Petrol', 'Manual', '1.2', '125000', '/uploads/e9cb44d2b24ef99d547d68af5f543292jpeg', '/uploads/acd576cef93f780b117075eaaacdbcd7jpeg', '/uploads/41ceb4870b472f1092f131c449fee6f6jpeg', '/uploads/71bcc4503b9649963fcb5514276b2878jpeg', '/uploads/cdb4f19dcc7f128ac5c7e69568ea6697jpeg', '/uploads/8151f49a502b09e71f5a5dbcffde8f17jpeg', '/uploads/f7157cca65e04cbaab3a4992ce4780d4jpeg', '/uploads/ae6baba30f855b71f669a60a8fa0fbfbjpeg', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 02:48:54', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (22, 'VW Golf 1.6 Highline Pan roof / Rev Camera', 14900, 15200, '2022-08-10', 3, 15, 35, 2016, 'White', 5, 'Diesel', 'Manual', '1.6', '114000', '/uploads/b458630ab1efd99ef32fbdb001189a14.PNG', '/uploads/be6889ac39612efdfd07bb5c28462659.PNG', '/uploads/5431ae40cd9710edae4eb07c909abc39jpeg', '/uploads/5cdebbc82b3bf8030eeb367be0e9fc3b-B98', '/uploads/ceac9ea736119b5219d35a3514cb01ffjpeg', '/uploads/838b48416f188140bbdb531ee43b5dd9jpeg', '/uploads/0cdce57a869e2f5114e299820d4d4536.PNG', '/uploads/4db9faef4859fbc308bab0b83d64f164jpeg', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 02:54:02', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (23, 'VW Polo SE BMT', 11100, 11300, '2022-08-10', 3, 17, 23, 2016, 'Blue', 5, 'Petrol', 'Manual', '1.0', '62000', '/uploads/6051bb97544db21d5e783dc034c303d1jpeg', '/uploads/1ecd0437c613ad914b9d067f7a878585jpeg', '/uploads/39152ac7bb3e674edf04c63bf924dba2jpeg', '/uploads/8cd3131ea110ea18703832e452ba2c21jpeg', '/uploads/4cf6035d6140efc618cafbd945e9d8d7jpeg', '/uploads/821304d7fd3f8022586d50be9dcaefc1jpeg', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 03:05:30', 'active', 'bought', 'yes', NULL);
INSERT INTO `stock` VALUES (24, 'VW UP 5 Door', 9900, 10100, '2022-08-10', 2, 7, 12, 2018, 'White', 5, 'Petrol', 'Manual', '1.0', '66000', '/uploads/d88cd9f6ea0994eed636d8a00e1839fajpeg', '/uploads/e7bfcb5393df52252179f8ccb3f913cajpeg', '/uploads/4c5b3417995d68f82994cf9d0159eb95jpeg', '/uploads/2717a318964e2fecbd7ce132ec2f74bejpeg', '', '', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 03:12:30', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (25, 'Ford Focus', 9400, 9600, '2022-08-10', 3, 9, 15, 2015, 'Gray', 5, 'Diesel', 'Manual', '1.5', '173000', '/uploads/ca414c26f93081ad53c37b2ef5aac810jpeg', '/uploads/a5ba76a10298c0fea49c0e7c367dacf2jpeg', '/uploads/2536d1a3f3325759a60e7b4776c98575jpeg', '/uploads/407716a7f428a06b41c189b368669b73jpeg', '/uploads/8a34653f0e32c8b44eb101cb01855e3djpeg', '/uploads/82db021a055bd6130a675b20babeb0bcjpeg', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 03:20:09', 'active', NULL, 'yes', NULL);
INSERT INTO `stock` VALUES (26, 'Skoda Yeti DSG', 7500, 7700, '2022-08-10', 3, 7, 9, 2012, 'Gray', 5, 'Petrol', 'Automatic', '1.2', '117000', '/uploads/ca34548a241217b9e3d563142485bce0jpeg', '/uploads/8b896390c834bf8d60148f120d791162jpeg', '/uploads/1282e6f3a68f3dadc27f22b2353b7bb9jpeg', '/uploads/a2b6f1b1aea001fe2e8300eb1c740496jpeg', '', '', '', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 03:38:04', 'active', NULL, NULL, NULL);
INSERT INTO `stock` VALUES (27, 'Hyundai I40 ', 9500, 9700, '2022-08-10', 3, 10, 18, 2015, 'White', 4, 'Diesel', 'Manual', '1.7', '188680', '/uploads/537a405f5f19dd4395bb7d8e095b600fjpeg', '/uploads/b30f570e2fcc25af186b7db12f5b452djpeg', '/uploads/0cce1e6aa29b791c176f451f1836db0bjpeg', '/uploads/dadbfe0716e1aa24db18dc605ac1b7d2jpeg', '/uploads/c3746cd9cb11b482e2a06654e37a45c2jpeg', '/uploads/2e05c0bb85917f882f1a146a6be9b232jpeg', '/uploads/11289e0e87644c04603c91b347eacab4jpeg', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 05:31:53', 'active', NULL, 'yes', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Marc', 'tester', 'https://test.com', 'test@gmail.com', '10', '123456', 'paybank', '$2y$10$jRvAv9AcG5qfY/af3z1oAORBtEts2PpOtsxdXYlELLoELixzemY/K', '2022-07-14 18:17:17', NULL, 'OKay', '2022-07-14 19:20:38', 'active');
INSERT INTO `user` VALUES (2, 'John', 'tinker', 'https://elastic.com', 'jte123@outlook.com', '10', '123456', 'mybank', '$2y$10$cRpjRjTxlecubeZQon5./eoAahwcOBcyQqChm68bOWK0YVUHE6jUm', '2022-07-14 18:22:40', NULL, 'OKay', '2022-07-14 19:20:36', 'active');
INSERT INTO `user` VALUES (9, 'tony', 'anter', 'https://test.com', 'tessdt@gmail.com', '10', '123456', 'paybank', '$2y$10$Hb/nW4mG8ipTzKZtDIQ9BeuWx9.JqEz6ceFot8ywrs3XB8RRrZCKO', '2022-07-14 19:16:52', NULL, 'OKay', '2022-07-14 19:20:35', 'active');
INSERT INTO `user` VALUES (10, 'Conor', 'CJS', 'https://www.donedeal.ie/cars/Volkswagen/Beetle/2014?sellerType=pro&amp;fuelType=Diesel', 'Conor@McChesneys.ie', '000000989', '876558', 'BOI', '$2y$10$iSz5l36e4Hc2T3jRN6a1v.RZtUmpp5NSCX1zttohCt03Xu73lVCdG', NULL, NULL, 'OKay', '2022-07-18 16:26:44', 'active');
INSERT INTO `user` VALUES (11, 'Distilled', 'Donedeal', 'https://www.donedeal.ie/cars/Volkswagen/Beetle/2014?sellerType=pro&amp;fuelType=Diesel', 'test@distilled.ie', '', '876558', 'BOI', '$2y$10$EXY6banX//3CSm9HefFVh.Lr72V2AHWHNhbI.nZtWcDe9sMqGan2S', NULL, NULL, 'OKay', '2022-07-21 08:17:56', 'active');

SET FOREIGN_KEY_CHECKS = 1;
