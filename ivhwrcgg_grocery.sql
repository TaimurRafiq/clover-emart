-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 01:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivhwrcgg_grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `name`, `quantity`, `price`, `image`) VALUES
(34, 1043, '1', '7-CF (Leather & Tyre wax) 450 ml', 1, '243', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(35, 51, '1', '7Up 1.5LTR', 1, '100', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(36, 1699, '1', 'One Chansa Mango 800ML', 0, '210', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(37, 1699, '1', 'One Chansa Mango 800ML', 0, '210', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(38, 1699, '1', 'One Chansa Mango 800ML', 0, '210', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(39, 677, '1', '7CF Hard Wax (200 GRAM)', 1, '540', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(40, 1548, '1', 'Mitchells mango squash 800ml bottle', 0, '223', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(41, 868, '1', 'Sprite Zero Can 250ML', 0, '45', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(42, 2425, '1', 'Activade', 1, '57.4', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(43, 2426, '1', 'Activade Berry Blue', 1, '57.4', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(44, 51, '1', '7Up 1.5LTR', 1, '100', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(45, 467, '1', 'Scotch Tape 1*50 (6 rolls)', 1, '47', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(46, 677, '1', '7CF Hard Wax (200 GRAM)', 1, '540', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(49, 62, '118.103.234.44', 'Shinex Protectant Orange - 315 ml', 1, '607.5', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(50, 20, '168.211.5.140', 'Axe Body Wash Energy Boost 250ml', 1, '294', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(51, 22, '168.211.5.140', 'Nivea Cream 60ml', 1, '196', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(52, 11, '103.101.232.78', 'HERSHEY\'S SYRUP STRAWBERRY 623GM', 1, '742', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(53, 8, '103.101.232.78', 'QALMI Dates 400g', 1, '744', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(54, 5, '111.88.15.157', 'QALMI Dates 200G', 2, '372', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(55, 14, '111.88.15.157', 'Oral-B Complete Extra Soft Toothbrush 1Pce', 1, '91', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(56, 14, '103.101.232.83', 'Oral-B Complete Extra Soft Toothbrush 1Pce', 1, '91', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(57, 11, '111.88.73.99', 'HERSHEY\'S SYRUP STRAWBERRY 623GM', 1, '742', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(58, 8, '111.88.33.29', 'QALMI Dates 400g', 1, '744', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(69, 677, '45.116.232.33', '7CF Hard Wax (200 GRAM)', 1, '540', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(70, 5, '45.116.233.38', 'QALMI Dates 200G', 2, '372', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(71, 4, '45.116.233.38', 'AMBER Dates 200G', 10, '730', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(72, 467, '181.214.255.101', 'Scotch Tape 1*50 (6 rolls)', 1, '47', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(74, 2031, '45.116.232.51', '7UP PET BOTTLE (500 ml)', 2, '60', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(81, 51, '1589882532', '7Up 1.5LTR', 1, '100', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(82, 2031, '1589882532', '7UP PET BOTTLE (500 ml)', 2, '60', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(83, 2044, '1589882568', '7Up 2.25Ltr', 1, '140', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(84, 51, '1589882568', '7Up 1.5LTR', 1, '100', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(85, 2037, '1589882568', '7UP BOTTLE (1 Ltr)', 1, '85', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(89, 19, '1589889770', 'Fanta Orange Pet 500 ML', 1, '45', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(95, 2426, '1589895820', 'Activade Berry Blue', 1, '57.4', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(97, 28, '1589905014', 'Coca Cola Pet Bottle (500 ML)', 3, '50', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(98, 443, '1589905298', 'police wagon', 2, '280', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(104, 2734, '1589912121', 'Misc1', 1, '0', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(106, 2739, '1589912121', 'Ramzan Package 3', 3, '3600', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(108, 2037, '1589912636', '7UP BOTTLE (1 Ltr)', 1, '85', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(112, 1040, '1589937837', '7CF Wax Lemon (Q Care) (450 ml)', 2, '229.5', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(114, 1040, '1589952462', '7CF Wax Lemon (Q Care) (450 ml)', 3, '229.5', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(115, 388, '1589958443', 'ABC Jelly Fun Pack Big Bites 7.5g', 2, '5', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(116, 36, '1589967609', '3 HORSE CLASSIC (IMB) 330ml', 4, '155.4', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(118, 51, '1589971832', '7Up 1.5LTR', 1, '100', 'https://demo.hasthemes.com/greenfarm-preview/greenfarm/assets/images/products/product07.jpg'),
(122, 4, '1589973423', 'AMBER Dates 200G', 2, '730', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(123, 5, '1589973423', 'QALMI Dates 200G', 2, '372', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(124, 1, '1589973423', 'Stapler Feiyide', 1, '266', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(125, 9, '1589973423', 'AJWA Dates 400g', 1, '1237', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(131, 467, '1589973527', 'Scotch Tape 1*50 (6 rolls)', 1, '47', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(132, 677, '1589973527', '7CF Hard Wax (200 GRAM)', 1, '540', 'http://martapi.mangotech-erp.com/Content/Product.jpeg'),
(143, 13, '1590656418', 'Shinex Protectant Green - 315 ml', 1, '625', 'product.mangotech-erp.com'),
(144, 108, '1590656418', 'Formula-1 Scractch out (Scratch & Swirl ) 207 ml', 1, '630', 'product.mangotech-erp.com'),
(145, 112, '1590656418', 'STP Fuel Injector Cleaner - 155 ml', 1, '650', 'product.mangotech-erp.com'),
(146, 610, '1590661730', 'Always prospera S5 (Extra Long) 7 Pads', 1, '175', ''),
(179, 2981, '1591119171', 'POLAC Pineapple whole Slice XXXX', 1, '290', ''),
(182, 8, '1591148434', 'QALMI Dates 400g', 2, '744', 'http://product.mangotech-erp.com/Content/ProductImages/8resize-15906563401040607307qalmi.jpg'),
(184, 111, '1591168968', 'STP Octane Booster - 354 ml', 1, '742.5', 'http://product.mangotech-erp.com/Content/ProductImages/111resize-1590668227598531655stpoctanebooster.png'),
(185, 37, '1591184615', 'Dabur Amla Hair Oil 90ml', 1, '217', 'http://product.mangotech-erp.com/Content/ProductImages/37resize-15906605241847373149daburamla.jpg'),
(186, 1107, '1591868096', 'Bonio Dog Biscuit 375gm', 1, '553', 'http://product.mangotech-erp.com/Content/ProductImages/1012clover_Product.jpeg'),
(187, 19, '1591868096', 'Fanta Orange Pet 500 ML', 1, '45', 'http://product.mangotech-erp.com/Content/ProductImages/19resize-1590657833105921094fanta.jpeg'),
(188, 28, '1591868096', 'Coca Cola Pet Bottle (500 ML)', 1, '50', 'http://product.mangotech-erp.com/Content/ProductImages/28resize-15906596161465425965cocacola.jpg'),
(189, 2735, '1592830395', 'Misc2', 2, '55', '/Content/ProductImages/1012clover_Product.jpeg'),
(190, 2734, '1592830395', 'Misc1', 1, '10', '/Content/ProductImages/1012clover_Product.jpeg'),
(191, 71, '1592830395', 'Selsun Blue Shampoo Moisturizing 100ml', 1, '285', '/Content/ProductImages/71resize-15906640041438774833100ml.jpg'),
(192, 8, '1593000133', 'QALMI Dates 400g', 2, '744', '/Content/ProductImages/8resize-15906563401040607307qalmi.jpg'),
(202, 2099, '1593504585', 'EASY - CREAMY FUDGE (CARAMEL) - 700 GRAMS', 2, '487', 'http://product.mangotech-erp.com//Content/ProductImages/1012clover_Product.jpeg'),
(205, 21, '1593669686', 'HONEY LANGNESE PURE HONEY BEE 125G', 1, '504', '/Content/ProductImages/21resize-15906586081173120141lagnesehoney.jpg'),
(206, 6, '1593669687', 'AJWA DATES 200G', 1, '666', 'http://product.mangotech-erp.com//Content/ProductImages/6ajwa.jpg'),
(207, 5, '1593685981', 'QALMI DATES 200G', 1, '372', 'http://product.mangotech-erp.com//Content/ProductImages/5qal.PNG'),
(208, 3, '1593685981', 'MABROOM DATES 400G', 1, '968', 'http://product.mangotech-erp.com/Content/ProductImages/32.PNG'),
(209, 1, '1593686433', 'STAPLER FEIYIDE', 1, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG'),
(210, 3, '1593686433', 'MABROOM DATES 400G', 1, '968', 'http://product.mangotech-erp.com/Content/ProductImages/32.PNG'),
(211, 28, '1593695752', 'COCA COLA PET BOTTLE (500 ML)', 2, '50', 'http://product.mangotech-erp.com/Content/ProductImages/28resize-15906596161465425965cocacola.jpg'),
(212, 30, '1593695752', 'JOHNSONS BABY JELLY FRAGRANCE 100ML', 1, '245', 'http://product.mangotech-erp.com/Content/ProductImages/30resize-15906598101959120186johnsonsjelly.jpg'),
(219, 1, '208', 'STAPLER FEIYIDE', 1, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG'),
(225, 24, '1594022511', 'CHUPA CHUPS LOLLY POP', 1, '25', 'http://product.mangotech-erp.com/Content/ProductImages/24resize-15906588521054293082chupachups.jpg'),
(227, 24, '1594025156', 'CHUPA CHUPS LOLLY POP', 1, '25', '/Content/ProductImages/24resize-15906588521054293082chupachups.jpg'),
(233, 6, '209', 'AJWA DATES 200G', 1, '666', 'http://product.mangotech-erp.com/Content/ProductImages/6ajwa.jpg'),
(236, 24, '1594377422', 'CHUPA CHUPS LOLLY POP', 1, '25', '/Content/ProductImages/24resize-15906588521054293082chupachups.jpg'),
(272, 1, '239', 'STAPLER FEIYIDE', 4, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG'),
(286, 3, '239', 'MABROOM DATES 400G', 2, '968', 'http://product.mangotech-erp.com/Content/ProductImages/32.PNG'),
(289, 1, '1597039082', 'STAPLER FEIYIDE', 1, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG'),
(290, 1, '1597051105', 'STAPLER FEIYIDE', 1, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG'),
(291, 27, '240', 'SPRITE LEMON PET BOTTLE 500ML', 1, '45', 'http://product.mangotech-erp.com/Content/ProductImages/27resize-159065952136880784sprite (1).jpg'),
(292, 1, '1597052708', 'STAPLER FEIYIDE', 1, '150', 'http://product.mangotech-erp.com/Content/ProductImages/1stap.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `address`, `city`, `state`, `country`, `created_at`) VALUES
(1, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', 'Pakistan', 'Sukkur', 'Sindh', '2020-05-16 07:49:31'),
(2, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', 'Pakistan', 'Sukkur', 'Sindh', '2020-05-16 07:51:59'),
(3, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', 'Pakistan', 'Sukkur', 'Sindh', '2020-05-16 07:52:20'),
(4, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', 'Pakistan', 'Sukkur', 'Sindh', '2020-05-16 07:52:47'),
(5, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', 'Pakistan', 'Sukkur', 'Sindh', '2020-05-16 07:54:00'),
(6, 'DHA', 'Office', 'tahseenwarsi707@gmail.com', '+923032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI', 'Pakistan', 'Karachi', 'Sindh', '2020-05-16 07:54:58'),
(7, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 10:55:43'),
(8, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 10:56:18'),
(9, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 10:57:14'),
(10, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 11:04:11'),
(11, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 11:06:51'),
(12, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 11:07:42'),
(13, 'Tahseen', 'Warsi', 'muzammil@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-16 11:21:12'),
(14, 'DHA', 'Office', 'tahseenwarsi707@gmail.com', '+923032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI', '', '', '', '2020-05-16 11:30:17'),
(15, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:09:00'),
(16, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:12:13'),
(17, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:16:34'),
(18, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:18:04'),
(19, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:21:52'),
(20, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:25:09'),
(21, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:27:02'),
(22, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-17 11:27:47'),
(23, 'Mir', 'Maaz', 'msalimaaz@gmail.com', '+923443607167', 'Gulistan e Jauhar', '', '', '', '2020-05-18 09:58:54'),
(24, 'Tahseen', 'Warsi', 'tahseenwarsi707@gmail.com', '3032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-18 11:10:01'),
(25, 'Muhammad', 'Suffyan', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan', '', '', '', '2020-05-19 12:11:14'),
(26, 'Tahseen', 'Warsi', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan, N 212', '', '', '', '2020-05-20 11:05:06'),
(27, 'adil', 'jan', 'adil@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-05-20 11:21:08'),
(28, 'adil', 'jan', 'adil@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-05-20 11:39:35'),
(29, 'adil', 'jan', 'adil@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-05-20 11:46:53'),
(30, 'adil', 'jan', 'adil@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-05-20 11:49:07'),
(31, 'ali', 'ali', 'ali@gmail.com', '03222345432', 'garden west', '', '', '', '2020-05-20 12:47:41'),
(32, 'ali', 'ali', 'ali@gmail.com', '03222345432', 'garden west', '', '', '', '2020-05-20 12:49:43'),
(33, 'irshad', 'ali', 'irshad@gmail.com', '03452345499', 'lyari', '', '', '', '2020-05-20 12:54:51'),
(34, 'ali', 'ahemd', 'ali@gmail.com', '03452345499', 'garden west', '', '', '', '2020-05-20 12:57:33'),
(35, 'john', 'john', 'john@google.com', '000-00000000', '.', '', '', '', '2020-05-21 04:38:55'),
(36, 'Zee', 'Mangotech', 'zeemangotech@gmail.com', '03453565955', 'University', '', '', '', '2020-05-26 16:44:07'),
(37, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-27 01:32:45'),
(38, 'asdf', 'asdf', 'afd@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-05-29 12:59:46'),
(39, 'ahmed', 'alam', 'ahmed@gmail.com', '03452345434', 'lyari', '', '', '', '2020-05-30 12:37:20'),
(40, 'Zeeshan ', 'Ali ', 'decentali89@gmail.com', '0300866898', 'R108 ', '', '', '', '2020-05-30 14:53:35'),
(41, 'Test ', 'Guest ', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-30 17:33:14'),
(42, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-30 17:35:47'),
(43, 'Tahseen', 'Warsi', 'suffyan09@gmail.com', '03032013925', 'Office # 1-D, Building 7/C, Lane-13, Bukhari Commercial, D.H.A Phase VI, Karachi Pakistan, N 212, N ', '', '', '', '2020-05-31 14:02:49'),
(44, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-31 15:03:23'),
(45, 'Zeeshan', '', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-31 16:56:41'),
(46, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-05-31 17:06:36'),
(47, 'ahmed', 'ali', 'ahmed@gmail.com', '03222345432', 'garden west', '', '', '', '2020-06-01 06:08:46'),
(48, 'Mir', 'Maaz', 'msalimaaz@gmail.com', '+923443607167', 'Gulistan e Jauhar', '', '', '', '2020-06-01 11:09:22'),
(49, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-06-02 18:51:03'),
(50, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-06-03 04:17:23'),
(51, 'Mir', 'Maaz', 'msalimaaz@gmail.com', '03443607167', 'Gulistan e Jauhar', '', '', '', '2020-06-26 07:53:36'),
(52, 'adil', 'jan', 'adil6@gmail.com', '03452345422', 'johar', '', 'karachi', '', '2020-06-26 11:09:45'),
(53, 'adil', 'jan', 'adil7@gmail.com', '03222345432', 'nazimabad2', '', 'karachi', '', '2020-06-26 11:25:53'),
(54, 'adil', 'jan', 'irshad2@gmail.com', '03452345434', 'nazimabad2', '', 'karachi', '', '2020-06-26 11:34:35'),
(55, 'ali', 'jan', 'ali3@gmail.com', '03452345434', 'nazimabad', '', '', '', '2020-06-26 11:36:52'),
(56, 'irshad', 'jan', 'irshad5@gmail.com', '03452345422', 'nazimabad', '', '', '', '2020-06-26 11:52:14'),
(57, 'testcard', '', 'testcard@gmail.com', '03222345432', 'garden east', '', '', '', '2020-07-04 10:51:12'),
(58, 'testpay', '', 'testpay@gmail.com', '03452345334', 'gulshan', '', '', '', '2020-07-06 07:15:20'),
(59, 'afroz', 'alam', 'testcheck@gmail.com', '03452345422', 'gulshan', '', '', '', '2020-07-06 07:33:40'),
(60, 'afroz', 'alam', 'testcheck@gmail.com', '03452345422', 'gulshan', '', '', '', '2020-07-06 07:38:28'),
(61, 'afroz', 'alam', 'testcheck@gmail.com', '03452345422', 'gulshan', '', '', '', '2020-07-06 07:40:01'),
(62, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-07-06 08:49:55'),
(63, 'testview', '', 'testview@gmail.com', '03229867543', 'johar', '', '', '', '2020-07-06 19:20:59'),
(64, 'adil', 'jan', 'testcheck@gmail.com', '03452345434', 'gulshan', '', '', '', '2020-07-07 06:30:50'),
(65, 'ali', 'ahemd', 'testcheck@gmail.com', '03452345422', 'nazimabad', '', '', '', '2020-07-07 06:36:46'),
(66, 'test', '', 'testcheck@gmail.com', '03452345422', 'nazimabad', '', '', '', '2020-07-07 06:38:13'),
(67, 'afroz', 'ali', 'mytest2@gmail.com', '03452345433', 'lyari', '', '', '', '2020-07-07 07:21:56'),
(68, 'irshad', 'asdf', 'checktest@gmail.com', '03222345432', 'garden west', '', '', '', '2020-07-10 10:31:20'),
(69, 'Zeeshan', 'Ali', 'decentali89@gmail.com', '03000866898', 'University', '', '', '', '2020-07-10 10:39:04'),
(70, 'Zeeshan Ali', '', 'decentali89@gmail.com', '0300-8668988', 'University', '', '', '', '2020-07-11 15:33:38'),
(71, 'Test', '', 'test@gmail.com', '0347-8060160', 'H NO. B-219, Block 4, Saadi Town.', '', '', '', '2020-08-08 11:52:28'),
(72, 'Test', '', 'test@gmail.com', '0347-8060160', 'H NO. B-219, Block 4, Saadi Town.', '', '', '', '2020-08-08 11:57:36'),
(73, 'Test', '', 'test@gmail.com', '0347-8060160', 'H NO. B-219, Block 4, Saadi Town.', '', '', '', '2020-08-08 11:58:50'),
(74, 'Test', '', 'test@gmail.com', '0347-8060160', 'H NO. B-219, Block 4, Saadi Town.', '', '', '', '2020-08-08 12:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `total_amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `user_id`, `product_id`, `quantity`, `product_name`, `product_price`, `total_amount`) VALUES
(1, 5, '33', 467, 3, '', '47*3', '1936'),
(2, 5, '33', 2031, 2, '', '60*2', '1936'),
(3, 5, '33', 18, 2, '', '210*2', '1936'),
(4, 5, '33', 1420, 1, '', '590*1', '1936'),
(5, 5, '33', 30, 1, '', '245*1', '1936'),
(6, 5, '33', 18, 2, '', '210*2', '1936'),
(7, 6, '33', 467, 3, '', '141', '1936'),
(8, 6, '33', 2031, 2, '', '120', '1936'),
(9, 6, '33', 18, 2, '', '420', '1936'),
(10, 6, '33', 1420, 1, '', '590', '1936'),
(11, 6, '33', 30, 1, '', '245', '1936'),
(12, 6, '33', 18, 2, '', '420', '1936'),
(13, 7, '33', 51, 1, '', '100', '295.4'),
(14, 7, '33', 2045, 1, '', '40', '295.4'),
(15, 7, '33', 36, 1, '', '155.4', '295.4'),
(16, 8, '33', 51, 1, '', '100', '295.4'),
(17, 8, '33', 2045, 1, '', '40', '295.4'),
(18, 8, '33', 36, 1, '', '155.4', '295.4'),
(19, 9, '33', 51, 1, '', '100', '295.4'),
(20, 9, '33', 2045, 1, '', '40', '295.4'),
(21, 9, '33', 36, 1, '', '155.4', '295.4'),
(22, 10, '33', 51, 1, '', '100', '295.4'),
(23, 10, '33', 2045, 1, '', '40', '295.4'),
(24, 10, '33', 36, 1, '', '155.4', '295.4'),
(25, 11, '33', 51, 1, '', '100', '295.4'),
(26, 11, '33', 2045, 1, '', '40', '295.4'),
(27, 11, '33', 36, 1, '', '155.4', '295.4'),
(28, 12, '33', 51, 1, '', '100', '295.4'),
(29, 12, '33', 2045, 1, '', '40', '295.4'),
(30, 12, '33', 36, 1, '', '155.4', '295.4'),
(31, 13, '33', 51, 1, '', '100', '295.4'),
(32, 13, '33', 2045, 1, '', '40', '295.4'),
(33, 13, '33', 36, 1, '', '155.4', '295.4'),
(34, 14, '33', 36, 1, '', '155.4', '155.4'),
(35, 15, '33', 5, 1, '', '372', '372'),
(36, 16, '33', 5, 1, '', '372', '372'),
(37, 17, '33', 5, 1, '', '372', '372'),
(38, 18, '33', 5, 1, '', '372', '372'),
(39, 19, '33', 5, 1, '', '372', '372'),
(40, 20, '33', 5, 1, '', '372', '1102'),
(41, 20, '33', 4, 1, '', '730', '1102'),
(42, 21, '33', 5, 1, '', '372', '1102'),
(43, 21, '33', 4, 1, '', '730', '1102'),
(44, 22, '33', 5, 2, '', '744', '8044'),
(45, 22, '33', 4, 10, '', '7300', '8044'),
(46, 23, '33', 106, 2, '', '1400', '1400'),
(47, 24, '174', 383, 1, '', '10', '10'),
(48, 25, '33', 2031, 2, '', '120', '211'),
(49, 25, '33', 14, 1, '', '91', '211'),
(50, 26, '33', 326, 1, '', '540', '540.0'),
(51, 27, '178', 18, 1, '', '210', '210.0'),
(52, 28, '33', 19, 1, '', '45', '95.0'),
(53, 28, '33', 28, 1, '', '50', '95.0'),
(54, 29, '33', 38, 1, '', '300', '300.0'),
(55, 30, '178', 46, 3, '', '300', '300.0'),
(56, 31, '33', 13, 1, '', '607.5', '607.5'),
(57, 32, '179', 108, 1, '', '630', '630.0'),
(58, 33, '33', 14, 1, '', '91', '91.0'),
(59, 34, '179', 14, 1, '', '91', '91.0'),
(60, 35, '180', 467, 12, '', '564', '564.0'),
(61, 36, '33', 6, 1, '', '666', '666.0'),
(62, 37, '33', 2, 1, '', '484', '1150.0'),
(63, 37, '33', 6, 1, '', '666', '1150.0'),
(64, 38, '174', 2, 1, '', '484', '484.0'),
(65, 39, '177', 3, 2, '', '1936', '3410.0'),
(66, 39, '177', 4, 1, '', '730', '3410.0'),
(67, 39, '177', 8, 1, '', '744', '3410.0'),
(68, 40, '33', 1, 3, '', '798', '1282.0'),
(69, 40, '33', 2, 1, '', '484', '1282.0'),
(70, 41, '33', 1, 1, '', '266', '2695.0'),
(71, 41, '33', 2, 2, '', '968', '2695.0'),
(72, 41, '33', 7, 1, '', '1461', '2695.0'),
(73, 42, '33', 2, 1, '', '484', '484.0'),
(74, 43, '33', 609, 1, '', '325', '2343.0'),
(75, 43, '33', 2, 2, '', '968', '2343.0'),
(76, 43, '33', 20, 1, '', '294', '2343.0'),
(77, 43, '33', 64, 1, '', '756', '2343.0'),
(78, 44, '33', 18, 1, '', '210', '345.0'),
(79, 44, '33', 19, 2, '', '90', '345.0'),
(80, 44, '33', 27, 1, '', '45', '345.0'),
(81, 45, '33', 1, 1, '', '266', '996.0'),
(82, 45, '33', 4, 1, '', '730', '996.0'),
(83, 46, '171', 2, 2, '', '968', '1698.0'),
(84, 46, '171', 4, 1, '', '730', '1698.0'),
(85, 47, '177', 1, 3, '', '798', '1282.0'),
(86, 47, '177', 2, 1, '', '484', '1282.0'),
(87, 48, '33', 19, 1, '', '45', '135.0'),
(88, 48, '33', 27, 2, '', '90', '135.0'),
(89, 49, '33', 31, 1, '', '161', '252.0'),
(90, 49, '33', 14, 1, '', '91', '252.0'),
(91, 50, '33', 31, 1, '', '161', '161.0'),
(92, 51, '33', 432, 2, '', '100', '100.0'),
(93, 52, '33', 18, 1, '', '210', '210.0'),
(94, 53, '33', 14, 1, '', '91', '91.0'),
(95, 54, '33', 28, 1, '', '50', '50.0'),
(96, 55, '200', 8, 1, '', '744', '1129.0'),
(97, 55, '200', 14, 1, '', '91', '1129.0'),
(98, 55, '200', 20, 1, '', '294', '1129.0'),
(99, 56, '200', 34, 1, '', '50', '100.0'),
(100, 56, '200', 28, 1, '', '50', '100.0'),
(101, 57, '207', 2, 1, '', '300', '300.0'),
(102, 58, '208', 2, 1, '', '300', '300.0'),
(103, 59, '209', 2, 1, '', '300', '300.0'),
(104, 60, '209', 3, 1, '', '968', '968.0'),
(105, 61, '209', 4, 1, '', '730', '730.0'),
(106, 62, '181', 24, 1, '', '25', '25.0'),
(107, 63, '210', 1, 1, '', '150', '150.0'),
(108, 64, '209', 1, 1, '', '150', '450.0'),
(109, 64, '209', 2, 1, '', '300', '450.0'),
(110, 65, '209', 6, 1, '', '666', '666.0'),
(111, 66, '209', 4, 1, '', '730', '730.0'),
(112, 67, '211', 6, 1, '', '666', '666.0'),
(113, 68, '212', 1, 1, '', '150', '150.0'),
(114, 69, '181', 24, 1, '', '25', '25.0'),
(115, 70, '181', 201, 1, '', '10', '10.0');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('rafiqtaimur@gmail.com', '768e78024aa8fdb9b8fe87be86f64745945857b07d', '2020-08-11 11:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'test', 'user', 'testing', 'test@gmail.com', 'e19d5cd5af0378da05f63f891c7467af'),
(2, 'Tahseen', 'Warsi', 'tahseen12', 'suffyan09@gmail.com', 'e19d5cd5af0378da05f63f891c7467af'),
(3, 'Zeeshan', 'Ali', 'Zeeshan Ali', 'decentali89@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Ahmed', 'Ali', 'Ahmed Ali', 's.tahseen03@gmail.com', 'e19d5cd5af0378da05f63f891c7467af'),
(5, 'Mir', 'Maaz', 'Mir Maaz', 'msalimaaz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
