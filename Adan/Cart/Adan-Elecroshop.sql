-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tshirt_cart.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `total_price` float(6,2) NOT NULL DEFAULT '0.00',
  `order_status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tshirt_cart.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `address`, `address2`, `country`, `state`, `zipcode`, `total_price`, `order_status`, `created_at`, `updated_at`) VALUES
	(1, 'Ahsan', 'Zameer', 'ahsnzmeerkhan@gmail.com', 'L-14 Gulshan-e-Malir, Malir Halt Karachi', 'L-14 Gulshan-e-Malir, Malir Halt Karachi', 'Schweiz', 'Zuerich', '75210', 120.00, 'confirmed', '2021-02-15 11:16:10', '2021-02-15 11:16:10');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table tshirt_cart.order_details
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` float(8,4) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` double(8,4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tshirt_cart.order_details: ~3 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `qty`, `total_price`) VALUES
(1, 3, 1, 'Iphone 13 Pro', 450, 1, 950.00),
(2, 3, 3, 'Maroon T-shirt', 95, 5, 47.50),
(3, 3, 4, 'Orange T-shirt', 46, 6, 57.00),
(4, 4, 1, 'Iphone 13 Pro', 450, 1, 450),
(5, 5, 2, 'Asus Rog 5', 450, 1, 450),
(6, 6, 1, 'Iphone 13 Pro', 450, 1, 450);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table tshirt_cart.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` text,
  `price` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_slug`, `short_description`, `full_description`, `price`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 13 Pro', 'iphone 13 pro', '', '', 950.90, 0, 1, '2021-02-11 22:02:17', '2021-02-11 22:02:21'),
(2, 'Asus Rog 5', 'Asus Rog 5', '', 'Lorem ipsum repudiandae.', 650.56, 0, 1, '2021-02-11 22:02:50', '2021-02-11 22:02:53'),
(3, 'Motorola Edge 20 Pro', 'Motorola Edge 20 Pro', '', 'Lorbdiandae.', 780.00, 0, 1, '2021-02-11 22:03:21', '2021-02-11 22:03:24'),
(4, 'OnePlus Nord 2 5G', 'OnePlus nOrd 2 5G', '', 'Lorem br adipisicing elit.', 450.17, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(5, 'Realme 9 Pro+ 5G ', 'Realme 9 Pro+ 5G ', '', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(6, 'Vivo X60 Pro 5G ', 'Vivo X60 Pro 5G ', '', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(7, 'Sony Xperia 1 ', 'Sony Xperia 1 ', '', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(8, 'Samsung Galaxy S10 ', 'Samsung Glaxy S10 ', ' ', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(9, 'Opo Find ', 'Opo Find ', ' ', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(10, 'Opo Neo ', 'Opo Neo ', ' ', 'Lorem br a.', 560.90, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53');
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product_images`
--
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS`product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img`, `display_order`, `is_featured`) VALUES
(1, 1, 'black-tshirt-1.jpg', 1, 1),
(4, 1, 'black-tshirt-4.jpg', 4, 0),
(5, 2, 'Asus Rog 5.jpg', 1, 1),
(6, 2, 'Asus Rog 5.jpg', 2, 0),
(7, 3, 'Motorola Edge 20 Pro .jpg', 1, 1),
(8, 4, 'OnePlus Nord 2 5G .jpg', 1, 1),
(9, 5, 'Realme 9 Pro+ 5G .png', 1, 1),
(10, 6, 'Vivo X60 Pro 5G.jpg', 1, 1),
(11, 7, 'Sony Xperia 1 III.jpg', 1, 1),
(15, 8, 'Samsung Galaxy S10e.jpg', 1, 1),
(16, 9, 'Oppo_Find_X5_Serie_Datenblaetter_geleakt.jpg', 1, 1),
(17, 10, 'Opo Neo.jpg', 1, 1);


/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
