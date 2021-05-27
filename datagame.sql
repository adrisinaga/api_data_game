-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2021 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datagame`
--

-- --------------------------------------------------------

--
-- Table structure for table `datagame`
--

CREATE TABLE `datagame` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `icon` varchar(500) NOT NULL,
  `play` varchar(500) NOT NULL,
  `tag1` varchar(120) NOT NULL,
  `tag2` varchar(120) NOT NULL,
  `tag3` varchar(120) NOT NULL,
  `tag4` varchar(120) NOT NULL,
  `tag5` varchar(120) NOT NULL,
  `run` varchar(500) NOT NULL,
  `like` varchar(500) NOT NULL,
  `comn` varchar(500) NOT NULL,
  `report` varchar(500) NOT NULL,
  `statusgame` varchar(120) NOT NULL,
  `published` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datagame`
--

INSERT INTO `datagame` (`id`, `title`, `desc`, `icon`, `play`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `run`, `like`, `comn`, `report`, `statusgame`, `published`) VALUES
(1, 'Mobile Legend', 'Game mobile Legend', 'icon', 'play', 'tag1', 'tag2', 'tag3', 'tag4', 'tag5', 'run', 'like', 'comn', 'report', 'on', 'activated'),
(2, 'Ragnarok', 'Game online Ragnarok 2021', 'icon.png', 'play', 'tag1', 'tag2', 'tag3', 'tag4', 'tag5', 'run', 'like', 'comn', 'report', 'off', 'non-activated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datagame`
--
ALTER TABLE `datagame`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datagame`
--
ALTER TABLE `datagame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
