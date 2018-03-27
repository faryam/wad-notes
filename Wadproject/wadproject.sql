-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 03:15 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameitems`
--

CREATE TABLE IF NOT EXISTS `gameitems` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gamename` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gameitems`
--

INSERT INTO `gameitems` (`id`, `name`, `price`, `image`, `gamename`) VALUES
(1, 'Breakout Case Key', '220.00', 'Breakout.png', 'csgo'),
(2, 'Chroma 2 Case Key', '220.00', 'Chroma2.png', 'csgo'),
(3, 'Chroma 3 Case Key', '220.00', 'Chroma3.png', 'csgo'),
(4, 'Chroma Case Key', '220.00', 'Chroma.png', 'csgo'),
(5, 'CS:GO Case Key', '220.00', 'CSGO.png', 'csgo'),
(6, 'Falchion Case Key', '220.00', 'Falchion.png', 'csgo'),
(7, 'Huntsman Case Key', '220.00', 'Huntsman.png', 'csgo'),
(8, 'Operation Wildfire Case Key', '220.00', 'wildfire.png', 'csgo'),
(9, 'AK-47 | Aquamarine Revenge (FT)', '2,000.00', 'Aquamarine-Revenge-307x256.png', 'csgo'),
(10, 'AK-47 | Frontside Misty (FT)', '500.00', 'Frontside-Misty-307x256.png', 'csgo'),
(11, 'AK-47 | Redline (FT)', '1,000.00', 'Redline-307x256.png', 'csgo'),
(12, 'AK-47 | Vulcan (FT)', '2,200.00', 'Vulcan-307x256.png', 'csgo'),
(13, 'AWP | Asiimov (FT)', '1,000.00', 'awpAsiimov-307x256.png', 'csgo'),
(14, 'Blades of Voth Domosh', '3,200.00', 'Legion-336x224.jpg', 'dota2'),
(15, 'Demon Eater', '3,200.00', 'Shadow-336x224.jpg', 'dota2'),
(16, 'Fiery Soul of the Slayer', '3,200.00', 'Lina-336x224.jpg', 'dota2'),
(17, 'Inscribed Thirst of Eztzhok Bundle', '300.00', 'Inscribed-Thirst-of-Eztzhok-Bundle-307x256.jpg', 'dota2'),
(18, 'Genuine Bloodfeather Wings', '700.00', 'Genuine-Bloodfeather-Wings-307x256.jpg', 'dota2'),
(19, 'Genuine Rapiers of the Burning God', '1,500.00', 'Genuine-Rapiers-of-the-Burning-God-307x256.jpg', 'dota2');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `price`, `image`) VALUES
(1, 'Call of Duty: Black Ops III', '4500', 'callofduty.jpg'),
(3, 'Counter-Strike Complete', '800.00', 'csgocomplete.jpg'),
(4, 'Counter-Strike: Global Offensive', '1,000.00', 'csgo.jpg'),
(5, 'DARK SOULS™ III', '6,000.00', 'dark-soul-3.jpg'),
(6, 'Fallout 4', '5,000.00', 'csgo.jpg'),
(7, 'Football Manager 2016', '4,500.00', 'football.jpg'),
(8, 'Garry’s Mod', '700.00', 'Garrys-mod.jpg'),
(9, 'Grand Theft Auto V', ' 4,500.00', 'gta5.jpg'),
(10, 'HITMAN™ – FULL EXPERIENCE\r\n', '6,500.00', 'HITMANFULLEXPERIENCE.jpg'),
(11, 'HITMAN™ – INTRO PACK', '1800.00', 'HITMAN-INTRO-PACK.jpg'),
(12, 'MGS V: The Phantom Pain', ' 4,500.00', 'metal-of-the-solid.jpg'),
(13, 'RUST', '1700.00', 'rust.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `giftcards`
--

CREATE TABLE IF NOT EXISTS `giftcards` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftcards`
--

INSERT INTO `giftcards` (`id`, `name`, `price`, `image`, `type`) VALUES
(1, 'USD5 Facebook Game Card (Global)', '600.00', 'FacebookUSD5-219x256.png', 'facebook'),
(2, 'USD10 Facebook Game Card (Global)', '1,200.00', 'FacebookUSD10-219x256.png', 'facebook'),
(3, 'USD25 Facebook Game Card (Global)', '2,200.00', 'FacebookUSD25-219x256.png', 'facebook'),
(4, 'USD50 Facebook Game Card (Global)', '5,600.00', 'FacebookUSD50-219x256.png', 'facebook'),
(5, 'USD5 Steam Wallet Code (Global)', '650.00', '5-336x212.png', 'steam'),
(6, 'USD10 Steam Wallet Code (Global)', '1,200.00', '10-336x212.png', 'steam'),
(7, 'USD15 Steam Wallet Code (Global)', '1,800.00', '15-336x212.png', 'steam'),
(8, 'USD20 Steam Wallet Code (Global)', '2,400.00', '20-336x212.png', 'steam'),
(9, 'USD25 Steam Wallet Code (Global)', '3,000.00', '25-336x212.png', 'steam'),
(10, 'USD30 Steam Wallet Code (Global)', '3,500', '30-336x212.png', 'steam'),
(11, 'USD50 Steam Wallet Code (Global)', '5,700.00', '50-336x212.png', 'steam'),
(12, 'USD60 Steam Wallet Code (Global)', '6,700.00', '60-336x212.png', 'steam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gameitems`
--
ALTER TABLE `gameitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giftcards`
--
ALTER TABLE `giftcards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gameitems`
--
ALTER TABLE `gameitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `giftcards`
--
ALTER TABLE `giftcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
