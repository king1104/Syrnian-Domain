-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2017 at 12:44 AM
-- Server version: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_zgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `LockedItems`
--

CREATE TABLE IF NOT EXISTS `LockedItems` (
  `Name` varchar(50) DEFAULT NULL,
  `ImageURL` varchar(250) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `Exp` int(11) DEFAULT NULL,
  `NPCSell` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LockedItems`
--

INSERT INTO `LockedItems` (`Name`, `ImageURL`, `Level`, `Exp`, `NPCSell`) VALUES
('Locked Toolbox', 'http://www.syrnia.com/images/inventory/Locked%20toolbox.png', 1, 50, NULL),
('Locked Wooden Egg', 'http://www.syrnia.com/images/inventory/Locked%20wooden%20egg.png', 1, 100, NULL),
('Locked Christmas Present', 'http://www.syrnia.com/images/inventory/Locked%20christmas%20present.png', 1, 100, NULL),
('Locked Small Chest', 'http://www.syrnia.com/images/inventory/Locked%20small%20chest.png', 10, 75, NULL),
('Locked Moldy Chest', 'http://www.syrnia.com/images/inventory/Locked%20moldy%20chest.png', 15, 125, NULL),
('Locked Ancient Chest', 'http://www.syrnia.com/images/inventory/Locked%20ancient%20chest.png', 25, 200, NULL),
('Locked Sarcophagus', 'http://www.syrnia.com/images/inventory/Locked%20sarcophagus.png', 40, 500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `myTest`
--

CREATE TABLE IF NOT EXISTS `myTest` (
  `ImageURL` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `Power` int(11) DEFAULT NULL,
  `Aim` int(11) DEFAULT NULL,
  `Armor` int(11) DEFAULT NULL,
  `NPCBuy` int(11) DEFAULT NULL,
  `NPCSell` int(11) DEFAULT NULL,
  `Obtain` varchar(50) DEFAULT NULL,
  `ActionUse` varchar(50) DEFAULT NULL,
  `isEnchantable` bit(1) DEFAULT NULL,
  `isBound` bit(1) DEFAULT NULL,
  `isQuest` bit(1) DEFAULT NULL,
  `isEvent` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myTest`
--

INSERT INTO `myTest` (`ImageURL`, `Name`, `Type`, `Level`, `Power`, `Aim`, `Armor`, `NPCBuy`, `NPCSell`, `Obtain`, `ActionUse`, `isEnchantable`, `isBound`, `isQuest`, `isEvent`) VALUES
('nimage', 'nname', 'ntype', 0, 0, 0, 0, 0, 0, 'nobtain', 'nuse', b'1', b'1', b'1', b'1'),
('nimage', 'nname', 'ntype', 0, 0, 0, 0, 0, 0, 'nobtain', 'nuse', b'1', b'1', b'1', b'1'),
('$nimage', '$nname', '$ntype', 0, 0, 0, 0, 0, 0, '$nobtain', '$nuse', b'1', b'1', b'1', b'1'),
('image', 'Test Name', 'Armor', 5, 0, 0, 15, 30, 300, 'null', 'null', b'1', b'1', b'1', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
