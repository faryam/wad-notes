-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 06:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

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

CREATE TABLE `gameitems` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gamename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'AK-47 | Aquamarine Revenge (FT)', '2000.00', 'Aquamarine-Revenge-307x256.png', 'csgo'),
(10, 'AK-47 | Frontside Misty (FT)', '500.00', 'Frontside-Misty-307x256.png', 'csgo'),
(11, 'AK-47 | Redline (FT)', '1000.00', 'Redline-307x256.png', 'csgo'),
(12, 'AK-47 | Vulcan (FT)', '2200.00', 'Vulcan-307x256.png', 'csgo'),
(13, 'AWP | Asiimov (FT)', '1000.00', 'awpAsiimov-307x256.png', 'csgo'),
(14, 'Blades of Voth Domosh', '3200.00', 'Legion-336x224.jpg', 'dota2'),
(15, 'Demon Eater', '3200.00', 'Shadow-336x224.jpg', 'dota2'),
(16, 'Fiery Soul of the Slayer', '3200.00', 'Lina-336x224.jpg', 'dota2'),
(17, 'Inscribed Thirst of Eztzhok Bundle', '300.00', 'Inscribed-Thirst-of-Eztzhok-Bundle-307x256.jpg', 'dota2'),
(18, 'Genuine Bloodfeather Wings', '700.00', 'Genuine-Bloodfeather-Wings-307x256.jpg', 'dota2'),
(19, 'Genuine Rapiers of the Burning God', '1500.00', 'Genuine-Rapiers-of-the-Burning-God-307x256.jpg', 'dota2');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `price`, `image`) VALUES
(1, 'Call of Duty: Black Ops III', '4500', 'callofduty.jpg'),
(3, 'Counter Strike Complete', '800.00', 'csgocomplete.jpg'),
(4, 'Counter Strike: Global Offensive', '1000.00', 'csgo.jpg'),
(5, 'DARK SOULS III', '6000.00', 'dark-soul-3.jpg'),
(6, 'Fallout 4', '5000.00', 'fallout.jpg'),
(7, 'Football Manager 2016', '4500.00', 'football.jpg'),
(8, 'Garrys Mod', '700.00', 'Garrys-mod.jpg'),
(9, 'Grand Theft Auto V', ' 4500.00', 'gta5.jpg'),
(10, 'HITMAN FULL EXPERIENCE\r\n', '6500.00', 'HITMANFULLEXPERIENCE.jpg'),
(11, 'HITMAN INTRO PACK', '1800.00', 'HITMAN-INTRO-PACK.jpg'),
(12, 'MGS V: The Phantom Pain', ' 4500.00', 'metal-of-the-solid.jpg'),
(13, 'RUST', '1700.00', 'rust.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `giftcards`
--

CREATE TABLE `giftcards` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftcards`
--

INSERT INTO `giftcards` (`id`, `name`, `price`, `image`, `type`) VALUES
(1, 'USD5 Facebook Game Card (Global)', '600.00', 'FacebookUSD5-219x256.png', 'facebook'),
(2, 'USD10 Facebook Game Card (Global)', '1200.00', 'FacebookUSD10-219x256.png', 'facebook'),
(3, 'USD25 Facebook Game Card (Global)', '2200.00', 'FacebookUSD25-219x256.png', 'facebook'),
(4, 'USD50 Facebook Game Card (Global)', '5600.00', 'FacebookUSD50-219x256.png', 'facebook'),
(5, 'USD5 Steam Wallet Code (Global)', '650.00', '5-336x212.png', 'steam'),
(6, 'USD10 Steam Wallet Code (Global)', '1200.00', '10-336x212.png', 'steam'),
(7, 'USD15 Steam Wallet Code (Global)', '1800.00', '15-336x212.png', 'steam'),
(8, 'USD20 Steam Wallet Code (Global)', '2400.00', '20-336x212.png', 'steam'),
(9, 'USD25 Steam Wallet Code (Global)', '3000.00', '25-336x212.png', 'steam'),
(10, 'USD30 Steam Wallet Code (Global)', '3500', '30-336x212.png', 'steam'),
(11, 'USD50 Steam Wallet Code (Global)', '5700.00', '50-336x212.png', 'steam'),
(12, 'USD60 Steam Wallet Code (Global)', '6700.00', '60-336x212.png', 'steam');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `custid`, `total`) VALUES
(1, 1, 1800),
(2, 2, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'faryam', 'asif'),
(2, 'a', 'a');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gameitems`
--
ALTER TABLE `gameitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `giftcards`
--
ALTER TABLE `giftcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
