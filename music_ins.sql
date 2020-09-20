-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2018 at 12:04 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_ins`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

DROP TABLE IF EXISTS `add_product`;
CREATE TABLE IF NOT EXISTS `add_product` (
  `ins_id` int(11) NOT NULL,
  `ins_name` varchar(30) NOT NULL,
  `ins_brand` varchar(25) NOT NULL,
  `ins_cat` varchar(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `descp` varchar(100) NOT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`ins_id`, `ins_name`, `ins_brand`, `ins_cat`, `price`, `descp`) VALUES
(1, 'keyboard ma150', 'casio', 'key', '3000.00', 'basic'),
(2, 'aman', 'human', 'string', '1230.00', 'tatti'),
(5, 'dfgfg', 'ddf', 'sdf', '3434.00', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `Bill_number` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Door` varchar(80) NOT NULL,
  `Street` varchar(80) NOT NULL,
  `Locality` varchar(80) NOT NULL,
  `City` varchar(80) NOT NULL,
  `State` varchar(80) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`Bill_number`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_number`, `Name`, `Phone`, `Door`, `Street`, `Locality`, `City`, `State`, `ins_id`, `Price`) VALUES
(1, 'Manikiran', '9876543210', '123', 'abc', 'def', 'Bangalore', 'Karnataka', 1, 1),
(2, 'aman', '5151544', '54', 'sd', 'sd', 'sd', 'sd', 1, 1),
(3, 'dfdfdf', '34234324', '3434', 'ddfdf', 'efedfdfdf', 'dfdf', 'dfdf', 1, 3000),
(4, 'APARNA BHATT A S', '8464', '54', 'nasjdh', 'jgiug', 'hvgihg', 'igigi', 2, 1230),
(5, 'osaghdiu', '8464', '54', 'nasjdh', 'jgiug', 'hvgihg', 'igigi', 2, 1230),
(6, 'osaghdiu', '8464', '54', 'nasjdh', 'jgiug', 'hvgihg', 'igigi', 2, 1230),
(7, 'ajlfdhok', '544', '654', 'vjgcuj', 'jvjhvjv', 'vjhvjvjv', 'vhjvj', 2, 1230),
(8, 'askjfhkj', '646', '6', 'kbk', 'khbkbk', 'kbkbkk', 'kbkvk', 2, 1230),
(9, 'askjfhkj', '646', '6', 'kbk', 'khbkbk', 'kbkbkk', 'kbkvk', 2, 1230),
(10, 'AKASH P RAJASEKHARAN', '9611587624', '742', '18', 'rrnagar', 'bangalore', 'karnataka', 1, 3000),
(11, 'oppo', '78456123', '456', 'hkjh', 'kjhbkj', 'jlkbk', 'bkjbkj', 2, 1230);

--
-- Triggers `bill`
--
DROP TRIGGER IF EXISTS `sales_insert`;
DELIMITER $$
CREATE TRIGGER `sales_insert` AFTER INSERT ON `bill` FOR EACH ROW BEGIN
Insert into sales values (NEW.ins_id,NEW.Name,NEW.Price);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `ins_id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ins_id`, `Name`, `Price`) VALUES
(1, 'dfdfdf', 3000),
(2, 'APARNA BHATT A S', 1230);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobno` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`email`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `gender`, `mobno`, `email`, `password`, `address`, `uid`) VALUES
('Mani', 'Kiran', 'Male', '9876543210', 'info@manikiran.co', '6543210', 'Somewhere In India', 1),
('aman', 'ulla', 'm', '3434', 'aman@aman.aman', 'aman', 'hell', 2),
('akash', 'pr', 'Male', '9611587624', 'akashprajasekharan@gmail.com', 'akash', 'bangalore', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
