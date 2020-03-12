-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2020 at 08:47 AM
-- Server version: 5.7.25
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--
CREATE DATABASE IF NOT EXISTS `form` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `form`;

-- --------------------------------------------------------

--
-- Table structure for table `countdata`
--

CREATE TABLE `countdata` (
  `id` int(11) NOT NULL,
  `visit` int(11) NOT NULL,
  `signup` int(11) NOT NULL,
  `webcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countdata`
--

INSERT INTO `countdata` (`id`, `visit`, `signup`, `webcount`) VALUES
(1, 415, 259, 75);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `edate` varchar(20) NOT NULL,
  `etime` varchar(20) NOT NULL DEFAULT '',
  `purpose` varchar(20) NOT NULL,
  `webtype` varchar(20) NOT NULL,
  `server` varchar(20) NOT NULL,
  `domain` varchar(20) NOT NULL,
  `ssls` varchar(20) NOT NULL,
  `security` varchar(20) NOT NULL,
  `section` varchar(500) NOT NULL,
  `feature` varchar(500) NOT NULL,
  `addpage` varchar(20) NOT NULL,
  `form` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `edate`, `etime`, `purpose`, `webtype`, `server`, `domain`, `ssls`, `security`, `section`, `feature`, `addpage`, `form`, `total`) VALUES
(1, '2019-10-06', '07:53:28 PM', 'br', 'dynamic', 'server1', '1000', '1500', '0', 'home;service;gallery;blog;contact;portfolio;team;showcase;', 'social;content;images;tracking;chatbot;', 'no', 'yes', '22500'),
(2, '2019-10-06', '10:05:46 PM', 'os', 'onepage', 'server1', '1000', '1500', '0', 'home;service;gallery;blog;contact;portfolio;team;showcase;', 'social;content;images;tracking;chatbot;', 'no', 'yes', '20000'),
(3, '2019-10-07', '11:41:32 AM', 'br', 'dynamic', 'server2', '1000', '1500', '0', 'home;service;gallery;blog;portfolio;team;', 'social;content;images;tracking;chatbot;', 'yes', 'yes', '19000'),
(4, '2019-10-07', '06:13:51 PM', 'mr', 'dynamic', 'server1', '0', '1500', '0', 'home;service;gallery;', 'social;content;images;tracking;chatbot;', 'no', 'no', '21500'),
(5, '2019-10-07', '06:15:53 PM', 'mr', 'dynamic', 'server1', '1000', '0', '0', 'service;gallery;portfolio;team;', 'social;content;images;tracking;chatbot;', 'no', 'yes', '21000'),
(6, '2019-10-09', '08:56:47 PM', 'br', 'dynamic', 'server1', '0', '1500', '0', 'home;service;blog;contact;portfolio;team;showcase;', 'social;content;tracking;chatbot;', 'no', 'yes', '21000'),
(7, '2019-10-09', '08:58:17 PM', 'br', 'onepage', 'server2', '1000', '0', '0', 'home;service;blog;contact;portfolio;team;showcase;', 'social;content;images;', 'no', 'no', '13000'),
(8, '2019-10-10', '03:38:50 PM', 'br', 'dynamic', 'server2', '1000', '1500', '0', 'home;service;gallery;blog;contact;portfolio;', 'social;content;images;tracking;chatbot;', 'no', 'no', '19000'),
(9, '2019-10-10', '05:25:02 PM', 'br', 'dynamic', 'server1', '1000', '1500', '0', 'home;service;gallery;blog;contact;portfolio;team;showcase;', 'social;content;images;tracking;chatbot;', 'yes', 'yes', '22500'),
(10, '2019-10-10', '05:40:47 PM', 'br', 'dynamic', 'server1', '0', '1500', '5000', 'home;service;gallery;blog;contact;portfolio;team;showcase;', 'social;content;images;', 'yes', 'yes', '24500'),
(11, '2019-10-10', '06:02:27 PM', 'mr', 'static', 'server2', '1000', '1500', '0', 'contact;', 'social;', 'yes', 'yes', '13000'),
(12, '2019-10-13', '02:01:48 PM', 'os', 'static', 'server2', '0', '0', '5000', 'home;service;gallery;contact;portfolio;team;showcase;', 'social;content;', 'no', 'yes', '18000'),
(13, '2019-10-13', '04:56:00 PM', 'br', 'commerce', 'server1', '0', '0', '0', 'gallery;blog;', 'social;', 'no', 'yes', '49500'),
(14, '2019-11-12', '05:13:27 PM', 'os', 'dynamic', 'server2', '1000', '1500', '5000', 'home;service;gallery;blog;contact;portfolio;team;showcase;', 'social;content;tracking;chatbot;', 'yes', 'no', '23500'),
(15, '2019-11-12', '05:16:05 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'portfolio;', 'content;', 'no', 'no', '49500'),
(16, '2019-11-12', '05:23:00 PM', 'mr', 'onepage', 'server2', '1000', '1500', '0', 'home;', 'content;', 'yes', 'yes', '13500'),
(17, '2019-11-12', '06:18:46 PM', 'br', 'static', 'server1', '1000', '0', '5000', 'home;', 'content;', 'yes', 'no', '22000'),
(18, '2019-11-12', '06:19:23 PM', 'br', 'static', 'server1', '1000', '0', '5000', 'home;', 'content;', 'yes', 'no', '22000'),
(19, '2019-11-12', '06:20:54 PM', 'br', 'static', 'server1', '1000', '1500', '5000', 'home;', 'content;', 'yes', 'no', '23500'),
(20, '2019-11-12', '06:22:01 PM', 'br', 'static', 'server1', '1000', '1500', '5000', 'home;', 'social;content;', 'yes', 'no', '24000'),
(21, '2019-11-12', '06:22:25 PM', 'br', 'static', 'server1', '1000', '1500', '5000', 'home;', 'social;content;', 'yes', 'yes', '24000'),
(22, '2019-11-12', '06:23:09 PM', 'br', 'static', 'server1', '1000', '0', '5000', 'home;', 'social;content;', 'yes', 'yes', '22500'),
(23, '2019-11-12', '06:23:40 PM', 'br', 'static', 'server1', '0', '0', '5000', 'home;', 'social;content;', 'yes', 'yes', '21500'),
(24, '2019-11-12', '06:24:01 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'yes', '49500'),
(25, '2019-11-12', '06:24:44 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'yes', '49500'),
(26, '2019-11-12', '06:26:44 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'yes', '49500'),
(27, '2019-11-12', '06:26:54 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'yes', '49500'),
(28, '2019-11-12', '06:27:05 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'no', '49500'),
(29, '2019-11-12', '06:27:19 PM', 'br', 'commerce', 'server2', '0', '1500', '0', 'contact;', 'content;', 'yes', 'no', '49500'),
(30, '2019-11-12', '06:38:03 PM', 'mr', 'onepage', 'server2', '1000', '0', '5000', 'home;', 'images;', 'yes', 'no', '15000'),
(31, '2019-12-07', '03:50:25 PM', 'br', 'dynamic', 'server1', '0', '1500', '0', 'service;gallery;', 'social;content;images;', 'yes', 'no', '19500');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(20) NOT NULL,
  `refid` int(20) NOT NULL,
  `edate` varchar(20) NOT NULL,
  `etime` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob` varchar(30) NOT NULL,
  `note` varchar(500) NOT NULL,
  `total` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `refid`, `edate`, `etime`, `name`, `email`, `mob`, `note`, `total`, `status`) VALUES
(1, 1, '2019-10-06', '07:54:08 PM', 'Omkar', 'omkar@playtech.in', '8951963307', 'omkar is here', '22500', 'Pending'),
(2, 2, '2019-10-06', '10:07:52 PM', 'Omkar Kakeru', 'omkar@gmail.com', '8951963307', 'Heeooo', '20000', 'Pending'),
(3, 3, '2019-10-07', '11:42:32 AM', 'Omkar kakeru', 'omkar@gmail.com', '8951963307', 'I want add a landing page.', '19000', 'Pending'),
(4, 4, '2019-10-07', '06:14:19 PM', 'Omkar', 'om@om.co', '1234567890', 'qwerty\r\nqwertyu\r\nqwert', '21500', 'Pending'),
(5, 5, '2019-10-07', '06:16:16 PM', 'vibha', '8919@gmail.com', '1239871239812', 'qweoiwqueiowque\r\nqw\r\nqweqw\r\neqw\r\newqr', '21000', 'Pending'),
(6, 12, '2019-10-13', '02:02:21 PM', 'OMkar', 'oa@om.com', 'oa@om.com', 'eferterte', '18000', 'Pending'),
(7, 13, '2019-10-13', '05:18:42 PM', 'Omar', 'om@oma.co', 'odf', 'odvsdvd', '49500', 'Pending'),
(8, 14, '2019-11-12', '05:14:19 PM', 'Omkar Kakeru', 'om@gmail.com', '8951963308', 'Hello How are you', '23500', 'Pending'),
(9, 15, '2019-11-12', '05:16:19 PM', 'test', 'test@test.com', '1234567890', 'qwertyuio', '49500', 'Pending'),
(10, 16, '2019-11-12', '05:23:26 PM', 'Omkrar', '89@gmail.com', '8951963307', 'ofjsdnfsdfn', '13500', 'Pending'),
(11, 29, '2019-11-12', '06:27:49 PM', 'hello', 'om@om.com', '123456789', 'osmg', '49500', 'Pending'),
(12, 30, '2019-11-12', '06:39:22 PM', 'Omkar', 'om@om.com', '1234567890', 'wdwegrw', '15000', 'Pending'),
(13, 31, '2019-12-07', '03:51:07 PM', 'Omkar Kakeru', 'omkar.kakeru@gmail.com', '8951963307', 'Hello Please send quote Thank you!', '19500', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
