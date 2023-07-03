-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.epizy.com
-- Generation Time: Aug 04, 2022 at 12:30 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32175289_autotest`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `buy_price` int(10) NOT NULL,
  `expires` varchar(255) NOT NULL,
  `bought_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `cname`, `cid`, `uname`, `uemail`, `buy_price`, `expires`, `bought_at`) VALUES
(1, 'M. Benz 22', 1, 'tony', 'tessdt@gmail.com', 35000, '2022-07-25', '2022-07-14 19:22:00'),
(2, '3 Series 320D Sport', 12, 'Conor', 'Conor@McChesneys.ie', 16800, '2022-07-26', '2022-07-20 05:17:50'),
(3, 'Peugeot Partner 1.6 HDI', 11, 'Conor', 'Conor@McChesneys.ie', 4800, '2022-07-26', '2022-07-20 13:53:25'),
(4, 'Audi A6 B/E S Tronic', 5, 'Conor', 'Conor@McChesneys.ie', 16800, '2022-07-26', '2022-07-21 12:18:07'),
(5, 'VW Polo SE BMT', 23, 'Conor', 'Conor@McChesneys.ie', 11300, '2022-08-10', '2022-08-03 07:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `text`) VALUES
(2, 'Security Deposit / Bidding Power', 'All successful bidders can confirm their winning bid by checking the . In additid'),
(3, 'Delivery time to the destination port', 'All successful bd'),
(4, 'How to register to bid in an auction?', 'All successful bidders can confirm their winning bid d'),
(5, 'How will I know if my bid was successful?', 'All successful bidders can confirm their winning bid by checking the . In addition, all sucf'),
(6, 'What happens if I bid on the wrong lot?', 'All successful bidders can confirm their winning bid by checking the . In addition, all successfd'),
(7, 'How to leave an absentee bid', 'All successful bidde'),
(8, 'How do I know if I won an item?', 'All successful bidders can confirm their winning bid by checking the . In addition, all succeg'),
(9, 'How do I know if I\'m the high bidder?', 'All successful bidders can confirm their winning bid bh'),
(10, 'Can I bid using my mobile device?', 'All successful bidders can confirm their winning bid by checking the  In addition, allg'),
(11, 'Where do I access my saved items?', 'All successful bidders can confirm their winning bid by checking the . In addition, all suw'),
(12, 'Cancellations and returns', 'All successful bidders can confirm their winning bid by checking the ');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `esti_price` int(11) NOT NULL,
  `offer` int(11) NOT NULL,
  `expires` varchar(255) NOT NULL,
  `offered_at` datetime NOT NULL,
  `winning` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `cname`, `cid`, `uname`, `uemail`, `esti_price`, `offer`, `expires`, `offered_at`, `winning`) VALUES
(1, 'M. Benz 22', 1, 'tony', 'tessdt@gmail.com', 30000, 31000, '2022-07-25', '2022-07-14 19:22:12', 'lose'),
(2, 'VW Passat 1.6', 15, 'Conor', 'Conor@McChesneys.ie', 12300, 11700, '2022-07-26', '2022-07-21 03:20:34', 'lose'),
(3, 'Audi A6 B/E S Tronic', 5, 'Distilled', 'test@distilled.ie', 16300, 17000, '2022-07-26', '2022-07-21 08:35:50', 'lose'),
(4, 'Seat ibiza 5 Dr', 21, 'Conor', 'Conor@McChesneys.ie', 6900, 6800, '2022-08-10', '2022-08-03 06:52:09', 'win'),
(5, 'VW Polo SE BMT', 23, 'Conor', 'Conor@McChesneys.ie', 11100, 11000, '2022-08-10', '2022-08-03 07:32:02', 'lose');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `esti_price` int(11) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `timer` date NOT NULL,
  `premium` int(11) NOT NULL,
  `offers` int(11) NOT NULL,
  `watching` int(11) NOT NULL,
  `years` year(4) NOT NULL,
  `color` varchar(255) NOT NULL,
  `doors` int(11) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `main_img` varchar(255) NOT NULL,
  `sub_img1` varchar(255) DEFAULT NULL,
  `sub_img2` varchar(255) DEFAULT NULL,
  `sub_img3` varchar(255) DEFAULT NULL,
  `sub_img4` varchar(255) DEFAULT NULL,
  `sub_img5` varchar(255) DEFAULT NULL,
  `sub_img6` varchar(255) DEFAULT NULL,
  `sub_img7` varchar(255) DEFAULT NULL,
  `sub_img8` varchar(255) DEFAULT NULL,
  `sub_img9` varchar(255) DEFAULT NULL,
  `sub_img10` varchar(255) DEFAULT NULL,
  `mechanical_pdf` varchar(255) NOT NULL,
  `condition_pdf` varchar(255) NOT NULL,
  `uploaded_at` datetime DEFAULT NULL,
  `list_status` varchar(255) DEFAULT NULL,
  `buy_status` varchar(255) DEFAULT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `live_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `esti_price`, `buy_price`, `timer`, `premium`, `offers`, `watching`, `years`, `color`, `doors`, `fuel`, `transmission`, `engine`, `mileage`, `main_img`, `sub_img1`, `sub_img2`, `sub_img3`, `sub_img4`, `sub_img5`, `sub_img6`, `sub_img7`, `sub_img8`, `sub_img9`, `sub_img10`, `mechanical_pdf`, `condition_pdf`, `uploaded_at`, `list_status`, `buy_status`, `feature`, `live_status`) VALUES
(1, 'M. Benz 22', 30000, 35000, '2022-07-25', 10, 7, 15, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/afdc1b4cf61d638439c48646432fe30d.png', '/uploads/45a72f934cce9e0927f7dba206396b9a.png', '/uploads/164ee34501fe10e3f48293c087d99288.png', '/uploads/0d686bf44b25e06d1c51f7597624fd96.png', '/uploads/17178bdadac8f2e7bf6f8db3b53bd1b9.png', '/uploads/a1ca50d988683642a9ca6ffb64f667d8.png', '', '', '', '', '', '/reports/be875f8ae94f3e618e808f7213062e32.pdf', '/reports/a27bfa975158c319eb4909d0e8e407cf.pdf', '2022-07-14 18:10:14', 'active', 'bought', 'yes', 'die'),
(2, 'Audi', 35000, 40000, '2022-07-30', 10, 9, 19, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/e2933a02e9fddf6c7848c76e2d3f0a23.jpg', '/uploads/360452515e1ccae90a5743d862fe20e5.jpg', '/uploads/7dba44fff69d0e9a7c8d13a77cefcd19.jpg', '/uploads/4c65701270460c98749c59721284d663.jpg', '/uploads/9f14732013a9d446b39d7037d60d6ee4.jpg', '/uploads/75f89e4975e4c7590fe2ce6c7c11a32f.jpg', '', '', '', '', '', '/reports/64efd46d54afee513e42c84847e718bd.pdf', '/reports/ce7c14dc63b3fc1f8625c3ddc190c6de.pdf', '2022-07-14 20:09:14', 'active', NULL, 'yes', 'die'),
(3, 'Super', 30000, 35000, '2022-08-10', 10, 7, 15, 2022, 'black', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/6aa85e939a1da1ae8679b78d18544654.jpg', '/uploads/6f537d227a5d71e57fc16438b2d41973.jpg', '/uploads/39d2f4c052b2070148d871126a3dbb62.jpg', '/uploads/fd3b33935bc1094fa183cb7549b3b838.jpg', '/uploads/b21ec8e0c486bd00182291c74377ef91.jpg', '/uploads/e508dffab0224a4727dec77adf78e7db.jpg', '', '', '', '', '', '/reports/c58251a9b87ceb304460734330f1a8aa.pdf', '/reports/bf597a60f82f6095be29d645f2fd8936.pdf', '2022-07-14 20:12:27', 'active', NULL, 'yes', 'die'),
(4, 'W 442', 25000, 30000, '2022-07-30', 10, 5, 31, 2022, 'silver', 4, 'petrol', 'auto', 'I-4 1,5 l', '60000', '/uploads/3055f80e8414a9fc7be60dd18270429b.jpg', '/uploads/acf3206b5326c513d3db5e3168e69618.jpg', '', '', '', '', '', '', '', '', '', '/reports/e839c030e572291948cdedfc26595b4b.pdf', '/reports/65fd50e57e9a611b3dd3961ae746246a.pdf', '2022-07-14 20:15:48', 'active', NULL, 'no', 'die'),
(5, 'Audi A6 B/E S Tronic', 16300, 16800, '2022-07-26', 4, 9, 15, 2014, 'White', 5, 'Diesel', 'Automatic ', '2.0', '107000', '/uploads/a60930c594f9764ebbecbbf3943e395c.jpg', '/uploads/632c93fc33c0d1bcc49f994c96e49791.jpg', '/uploads/164d94506730a8a68ff1c0479ef7ee4d.jpg', '/uploads/4c7b452bfe300490061cea0a333aef13.jpg', '/uploads/11812aca3d847d69659057970cd04963.jpg', '/uploads/d8f7458528f9381abcabc2136475c406.jpg', '/uploads/99eae92cc368989a89e46db8862dcbb5jpeg', '', '', '', '', '/reports/8f4132f075c812e25cd691b33ae4c708.pdf', '/reports/8124523672617da80b2103bec6316390.pdf', '2022-07-18 16:23:29', 'inactive', 'bought', 'yes', 'die'),
(11, 'Peugeot Partner 1.6 HDI', 4500, 4800, '2022-07-26', 3, 19, 29, 2012, 'White', 5, 'Diesel', 'Manual', '1.6', '115000', '/uploads/0f319c73ae48885026faf6c4377978dc.jpg', '/uploads/93de171f7b7278e80265289b2cb68edc.jpg', '/uploads/84975f02a32fe05d73c8a96f413bd272.jpg', '/uploads/2b3521a2d241f217eb9452e12bf1bbd7', '', '', '', '', '', '', '', '/reports/270b322caac0d8eae5863f8e5434f3ac.pdf', '/reports/44647ea8750122ef262a16d586bd6392.pdf', '2022-07-20 02:43:42', 'inactive', 'bought', NULL, 'die'),
(12, '3 Series 320D Sport', 16400, 16800, '2022-07-26', 3, 7, 11, 2016, 'Navy', 4, 'Diesel', 'Automatic', '2.0', '117000', '/uploads/5801ce54a3f72ca9f3e83b4eeb426c9b.jpg', '/uploads/61eac37be77e1f4010f1bb4e05a15eff.jpg', '', '', '', '', '', '', '', '', '', '/reports/e611865f5b082628bdd2239c62865deb.pdf', '/reports/53e9511e67a21ee30832f20cf07ef223.pdf', '2022-07-20 02:45:35', 'inactive', 'bought', NULL, 'die'),
(13, 'Audi A3 2.0TDI 150hp', 19200, 19500, '2022-07-26', 3, 7, 11, 2017, 'Gray', 5, 'Diesel', 'Manual', '2.0', '44000', '/uploads/f78817a71bdf4dc867a55692e53e0e0djpeg', '/uploads/04207f4b244343676595e4cc592ee115jpeg', '/uploads/45aef3ee6b4036989a26ea0eb4ad44f1.jpg', '/uploads/c1946957b782de035a8ba5655784a4de.jpg', '', '', '', '', '', '/uploads/657d4e108c5f4c70e81946f94ebf0b70.jpg', '', '/reports/fab95c5b7971e84feb893f1d2ab01c14.pdf', '/reports/50119516221bd3d843c8c7f6b3c6d1a5.pdf', '2022-07-20 02:48:26', 'active', NULL, NULL, NULL),
(14, 'Opel Astra 1.6 CDTI', 7900, 8100, '2022-07-26', 4, 7, 10, 2015, 'Blue', 5, 'Diesel', 'Manual', '1.6', '98000', '/uploads/e282e76ca780eeb374f2b74dd34df001jpeg', '', '', '', '', '', '', '', '', '', '', '/reports/869583ca207aea3d1a9a57570c07b63b.pdf', '/reports/e115d2fd724c95a6b02849d795b89cf1.pdf', '2022-07-20 02:55:39', 'active', NULL, NULL, NULL),
(15, 'VW Passat 1.6', 12300, 12600, '2022-07-26', 3, 6, 10, 2015, 'Silver', 4, 'Diesel', 'Manual', '1.6', '105000', '/uploads/fa7c0137dee6f91a2e12cf1234a3ce00jpeg', '/uploads/68ac2e621a5ed59235bf97fae3dd31abjpeg', '', '', '', '', '', '', '', '', '', '/reports/d98721e62c4209b754eaa9e3f869dbae.pdf', '/reports/c75237ed0de65ee2358cf7d797401b5d.pdf', '2022-07-20 02:58:34', 'inactive', NULL, NULL, 'die'),
(16, 'Audi A6 B/E S Tronic', 33500, 34200, '2022-07-26', 3, 16, 19, 2020, 'Black', 4, 'Diesel', 'Automatic', '2.0', '48000', '/uploads/559c18d1cfe6752a566244ce2ea421cajpeg', '/uploads/0b3988de3fd73da562386c9569afdccejpeg', '/uploads/45c5e8dddb4a2f735c1d4b6d61712be1jpeg', '', '', '', '', '', '', '', '', '/reports/586c2cffa37fb7ae56bba16935ee4fc9.pdf', '/reports/a9fb1707aed2a555b58b113ce0ba8c54.pdf', '2022-07-20 03:00:24', 'inactive', 'bought', 'yes', 'die'),
(17, 'BMW 5 Series', 30500, 31250, '2022-07-26', 3, 6, 19, 2017, 'Blue', 4, 'Diesel', 'Automatic', '2.0', '53000', '/uploads/50edbf3a0fa0589c92ca13ae75101d7fjpeg', '/uploads/8ada3e731a1f140b416f7382ddd627bcjpeg', '/uploads/c13787bc1d9a06c0d748fdf5eb285759jpeg', '', '', '', '', '', '', '', '', '/reports/06485aaf19d984141b090a1101f381e5.pdf', '/reports/e8aa47865103fe777abcd174a1c1142b.pdf', '2022-07-20 03:02:32', 'inactive', NULL, 'yes', 'die'),
(18, 'Audi A6 B/E S Tronic', 22500, 22900, '2022-07-26', 3, 10, 15, 2018, 'Red', 4, 'Diesel', 'Automatic', '2.0', '78000', '/uploads/5d76fc9e99fad30995bf8954c5c016bejpeg', '/uploads/d7c3ac29900e6dd427f352838a6eb109jpeg', '/uploads/6ae49a4d325859e376faf47b6fea3ff3jpeg', '/uploads/60abc454b7f513660d756b597e3aa58feg', '/uploads/28afd13df884488de62b020ccd0accdejpeg', '/uploads/5f784f3ea7ef5d527d34f2dc9a0e2cc2jpeg', '/uploads/b77b8e537c5840c65c7c9b04c67a6101jpeg', '', '', '', '', '/reports/7f53b7c19e954e31b21aa02d51755224.pdf', '/reports/94e1a18091812c1c00f389bdd62baf34.pdf', '2022-07-21 08:11:03', 'inactive', 'bought', NULL, 'die'),
(19, 'BMW 5 Series', 30500, 31500, '2022-07-26', 3, 19, 28, 2019, 'Black', 4, 'Diesel', 'Automatic', '2.0', '89000', '/uploads/76632b1944030bbd550680e4c02f255djpeg', '/uploads/ca39ac380cd2847e464515dcc377f850jpeg', '/uploads/15b2cacbcbbaa6d60d8910f230ec0aa8jpeg', '/uploads/3517ab511aaf2b649e712605ef1fb794eg', '/uploads/3cedba4a9def24dd22fbc7660ef2328ejpeg', '/uploads/c4f139922940582d1c8466eff11f4a12jpeg', '', '', '', '', '', '/reports/16db11ea6ba83d1ed83c9ce480daf5ca.pdf', '/reports/068a8b3e61518386446a90c6d17a15ad.pdf', '2022-07-21 08:16:51', 'inactive', NULL, NULL, 'die'),
(20, 'VW Golf 1.6 Highline Pan roof / Rev Camera', 15400, 15600, '0000-00-00', 3, 10, 10, 2016, 'White', 5, 'Diesel', 'Manual', '1.6', '114000', '/uploads/ee92c9d8942211242e275ab925de6d6a.PNG', '/uploads/f9489416efca087c99d8bad0e087f487.PNG', '/uploads/b284c58ba9a13a2a42f23bebb3bca812jpeg', '/uploads/1c3d827e2ac61d54090b0b4eb9b0ee8ejpeg', '/uploads/595110b9d37fb8fdce1da9d0641184afjpeg', '/uploads/5b98cadd3aca8ee5759587a1c7a647d0jpeg', '/uploads/0d4cfd47124ec8287bfc0e8af03ed2a9jpeg', '', '', '', '', '/reports/d55763925d4d375b00582c810aa1ca82.pdf', '/reports/5a2eb2db0fc38b225fafbe8801744a98.pdf', '2022-08-03 02:39:48', 'inactive', NULL, NULL, 'die'),
(21, 'Seat ibiza 5 Dr', 6900, 7100, '2022-08-10', 2, 10, 11, 2014, 'Red', 5, 'Petrol', 'Manual', '1.2', '125000', '/uploads/e9cb44d2b24ef99d547d68af5f543292jpeg', '/uploads/acd576cef93f780b117075eaaacdbcd7jpeg', '/uploads/41ceb4870b472f1092f131c449fee6f6jpeg', '/uploads/71bcc4503b9649963fcb5514276b2878jpeg', '/uploads/cdb4f19dcc7f128ac5c7e69568ea6697jpeg', '/uploads/8151f49a502b09e71f5a5dbcffde8f17jpeg', '/uploads/f7157cca65e04cbaab3a4992ce4780d4jpeg', '/uploads/ae6baba30f855b71f669a60a8fa0fbfbjpeg', '', '', '', '/reports/b7c68036cb8a9ecf4886304370b7bfda.pdf', '/reports/7f20b22f0758c26085426e177e501109.pdf', '2022-08-03 02:48:54', 'active', NULL, NULL, NULL),
(22, 'VW Golf 1.6 Highline Pan roof / Rev Camera', 14900, 15200, '2022-08-10', 3, 15, 35, 2016, 'White', 5, 'Diesel', 'Manual', '1.6', '114000', '/uploads/b458630ab1efd99ef32fbdb001189a14.PNG', '/uploads/be6889ac39612efdfd07bb5c28462659.PNG', '/uploads/5431ae40cd9710edae4eb07c909abc39jpeg', '/uploads/5cdebbc82b3bf8030eeb367be0e9fc3b-B98', '/uploads/ceac9ea736119b5219d35a3514cb01ffjpeg', '/uploads/838b48416f188140bbdb531ee43b5dd9jpeg', '/uploads/0cdce57a869e2f5114e299820d4d4536.PNG', '/uploads/4db9faef4859fbc308bab0b83d64f164jpeg', '', '', '', '/reports/be54c7020a3979f53f205826b0aae745.pdf', '/reports/a8f72bd60bf482833631911c218783c6.pdf', '2022-08-03 02:54:02', 'active', NULL, NULL, NULL),
(23, 'VW Polo SE BMT', 11100, 11300, '2022-08-10', 3, 17, 23, 2016, 'Blue', 5, 'Petrol', 'Manual', '1.0', '62000', '/uploads/6051bb97544db21d5e783dc034c303d1jpeg', '/uploads/1ecd0437c613ad914b9d067f7a878585jpeg', '/uploads/39152ac7bb3e674edf04c63bf924dba2jpeg', '/uploads/8cd3131ea110ea18703832e452ba2c21jpeg', '/uploads/4cf6035d6140efc618cafbd945e9d8d7jpeg', '/uploads/821304d7fd3f8022586d50be9dcaefc1jpeg', '', '', '', '', '', '/reports/d5008e510a0b1be0a21a232ed473c262.pdf', '/reports/3948997470fb1de0af39ba616d1ffd43.pdf', '2022-08-03 03:05:30', 'active', 'bought', 'yes', NULL),
(24, 'VW UP 5 Door', 9900, 10100, '2022-08-10', 2, 7, 12, 2018, 'White', 5, 'Petrol', 'Manual', '1.0', '66000', '/uploads/d88cd9f6ea0994eed636d8a00e1839fajpeg', '/uploads/e7bfcb5393df52252179f8ccb3f913cajpeg', '/uploads/4c5b3417995d68f82994cf9d0159eb95jpeg', '/uploads/2717a318964e2fecbd7ce132ec2f74bejpeg', '', '', '', '', '', '', '', '/reports/ffc57604bea3c71d44b67e0f1ad155c1.pdf', '/reports/81b425ed3c50e97409b6ae4829a0b1f3.pdf', '2022-08-03 03:12:30', 'active', NULL, NULL, NULL),
(25, 'Ford Focus', 9400, 9600, '2022-08-10', 3, 9, 15, 2015, 'Gray', 5, 'Diesel', 'Manual', '1.5', '173000', '/uploads/ca414c26f93081ad53c37b2ef5aac810jpeg', '/uploads/a5ba76a10298c0fea49c0e7c367dacf2jpeg', '/uploads/2536d1a3f3325759a60e7b4776c98575jpeg', '/uploads/407716a7f428a06b41c189b368669b73jpeg', '/uploads/8a34653f0e32c8b44eb101cb01855e3djpeg', '/uploads/82db021a055bd6130a675b20babeb0bcjpeg', '', '', '', '', '', '/reports/9240a4a8e6e8e2503dc553195a6364b2.pdf', '/reports/ce97afdbf46adae236f79aad92b7ee2b.pdf', '2022-08-03 03:20:09', 'active', NULL, 'yes', NULL),
(26, 'Skoda Yeti DSG', 7500, 7700, '2022-08-10', 3, 7, 9, 2012, 'Gray', 5, 'Petrol', 'Automatic', '1.2', '117000', '/uploads/ca34548a241217b9e3d563142485bce0jpeg', '/uploads/8b896390c834bf8d60148f120d791162jpeg', '/uploads/1282e6f3a68f3dadc27f22b2353b7bb9jpeg', '/uploads/a2b6f1b1aea001fe2e8300eb1c740496jpeg', '', '', '', '', '', '', '', '/reports/b4eba74ccc7383a8f949742ac79494c4.pdf', '/reports/148f3d2ef02234ddabbd3368ceace426.pdf', '2022-08-03 03:38:04', 'active', NULL, NULL, NULL),
(27, 'Hyundai I40 ', 9500, 9700, '2022-08-10', 3, 10, 18, 2015, 'White', 4, 'Diesel', 'Manual', '1.7', '188680', '/uploads/537a405f5f19dd4395bb7d8e095b600fjpeg', '/uploads/b30f570e2fcc25af186b7db12f5b452djpeg', '/uploads/0cce1e6aa29b791c176f451f1836db0bjpeg', '/uploads/dadbfe0716e1aa24db18dc605ac1b7d2jpeg', '/uploads/c3746cd9cb11b482e2a06654e37a45c2jpeg', '/uploads/2e05c0bb85917f882f1a146a6be9b232jpeg', '/uploads/11289e0e87644c04603c91b347eacab4jpeg', '', '', '', '', '/reports/79678e95d5ac517950c46c374a4d7949.pdf', '/reports/db8065fcbd8b9d3d8631f94e3b2981f4.pdf', '2022-08-03 05:31:53', 'active', NULL, 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dealership` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `garage` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `waiting` varchar(255) DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `dealership`, `link`, `email`, `vat`, `garage`, `bank`, `password`, `created_at`, `updated_at`, `waiting`, `approved_at`, `status`) VALUES
(1, 'Marc', 'tester', 'https://test.com', 'test@gmail.com', '10', '123456', 'paybank', '$2y$10$jRvAv9AcG5qfY/af3z1oAORBtEts2PpOtsxdXYlELLoELixzemY/K', '2022-07-14 18:17:17', NULL, 'OKay', '2022-07-14 19:20:38', 'active'),
(2, 'John', 'tinker', 'https://elastic.com', 'jte123@outlook.com', '10', '123456', 'mybank', '$2y$10$cRpjRjTxlecubeZQon5./eoAahwcOBcyQqChm68bOWK0YVUHE6jUm', '2022-07-14 18:22:40', NULL, 'OKay', '2022-07-14 19:20:36', 'active'),
(9, 'tony', 'anter', 'https://test.com', 'tessdt@gmail.com', '10', '123456', 'paybank', '$2y$10$Hb/nW4mG8ipTzKZtDIQ9BeuWx9.JqEz6ceFot8ywrs3XB8RRrZCKO', '2022-07-14 19:16:52', NULL, 'OKay', '2022-07-14 19:20:35', 'active'),
(10, 'Conor', 'CJS', 'https://www.donedeal.ie/cars/Volkswagen/Beetle/2014?sellerType=pro&amp;fuelType=Diesel', 'Conor@McChesneys.ie', '000000989', '876558', 'BOI', '$2y$10$iSz5l36e4Hc2T3jRN6a1v.RZtUmpp5NSCX1zttohCt03Xu73lVCdG', NULL, NULL, 'OKay', '2022-07-18 16:26:44', 'active'),
(11, 'Distilled', 'Donedeal', 'https://www.donedeal.ie/cars/Volkswagen/Beetle/2014?sellerType=pro&amp;fuelType=Diesel', 'test@distilled.ie', '', '876558', 'BOI', '$2y$10$EXY6banX//3CSm9HefFVh.Lr72V2AHWHNhbI.nZtWcDe9sMqGan2S', NULL, NULL, 'OKay', '2022-07-21 08:17:56', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
