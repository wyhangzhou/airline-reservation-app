-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2014 at 03:04 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airline_reservation_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airline_id` char(20) NOT NULL,
  `name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `name`) VALUES
('AA', 'American Airlines'),
('AK', 'Alaska Airlines'),
('DT', 'delta'),
('SW', 'Southwest Airlines'),
('UA', 'United Airlines');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `airport_id` char(3) NOT NULL,
  `city` char(20) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_id`, `city`, `zip`) VALUES
('JFK', 'New York', 34567),
('LAS', 'Las Vegas', 45678),
('LAX', 'Los Angeles', 12345),
('PHX', 'Phoenix', 85034);

-- --------------------------------------------------------

--
-- Table structure for table `arrives`
--

CREATE TABLE `arrives` (
  `flight_no` int(11) NOT NULL,
  `airport_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrives`
--

INSERT INTO `arrives` (`flight_no`, `airport_id`) VALUES
(1, 'JFK'),
(2, 'JFK'),
(3, 'JFK'),
(4, 'JFK'),
(5, 'JFK'),
(6, 'JFK'),
(7, 'JFK'),
(8, 'JFK'),
(9, 'JFK'),
(10, 'JFK'),
(11, 'JFK'),
(12, 'JFK'),
(13, 'LAS'),
(14, 'LAS'),
(15, 'LAS'),
(16, 'LAS'),
(17, 'LAS'),
(18, 'LAS'),
(19, 'LAS'),
(20, 'LAS'),
(21, 'LAS'),
(22, 'LAS'),
(23, 'LAS'),
(24, 'LAS'),
(25, 'LAX'),
(26, 'LAX'),
(27, 'LAX'),
(28, 'LAX'),
(29, 'LAX'),
(30, 'LAX'),
(31, 'LAX'),
(32, 'LAX'),
(33, 'LAX'),
(34, 'LAX'),
(35, 'LAX'),
(36, 'LAX'),
(37, 'PHX'),
(38, 'PHX'),
(39, 'PHX'),
(40, 'PHX'),
(41, 'PHX'),
(42, 'PHX'),
(43, 'PHX'),
(44, 'PHX'),
(45, 'PHX'),
(46, 'PHX'),
(47, 'PHX'),
(48, 'PHX'),
(49, 'JFK'),
(50, 'JFK'),
(51, 'JFK'),
(52, 'JFK'),
(53, 'JFK'),
(54, 'JFK'),
(55, 'JFK'),
(56, 'JFK'),
(57, 'JFK'),
(58, 'JFK'),
(59, 'JFK'),
(60, 'JFK'),
(61, 'LAS'),
(62, 'LAS'),
(63, 'LAS'),
(64, 'LAS'),
(65, 'LAS'),
(66, 'LAS'),
(67, 'LAS'),
(68, 'LAS'),
(69, 'LAS'),
(70, 'LAS'),
(71, 'LAS'),
(72, 'LAS'),
(73, 'LAX'),
(74, 'LAX'),
(75, 'LAX'),
(76, 'LAX'),
(77, 'LAX'),
(78, 'LAX'),
(79, 'LAX'),
(80, 'LAX'),
(81, 'LAX'),
(82, 'LAX'),
(83, 'LAX'),
(84, 'LAX'),
(85, 'PHX'),
(86, 'PHX'),
(87, 'PHX'),
(88, 'PHX'),
(89, 'PHX'),
(90, 'PHX'),
(91, 'PHX'),
(92, 'PHX'),
(93, 'PHX'),
(94, 'PHX'),
(95, 'PHX'),
(96, 'PHX');

-- --------------------------------------------------------

--
-- Table structure for table `departs`
--

CREATE TABLE `departs` (
  `flight_no` int(11) NOT NULL,
  `airport_id` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departs`
--

INSERT INTO `departs` (`flight_no`, `airport_id`) VALUES
(1, 'LAS'),
(2, 'LAS'),
(3, 'LAS'),
(4, 'LAS'),
(5, 'LAX'),
(6, 'LAX'),
(7, 'LAX'),
(8, 'LAX'),
(9, 'PHX'),
(10, 'PHX'),
(11, 'PHX'),
(12, 'PHX'),
(13, 'JFK'),
(14, 'JFK'),
(15, 'JFK'),
(16, 'JFK'),
(17, 'LAX'),
(18, 'LAX'),
(19, 'LAX'),
(20, 'LAX'),
(21, 'PHX'),
(22, 'PHX'),
(23, 'PHX'),
(24, 'PHX'),
(25, 'JFK'),
(26, 'JFK'),
(27, 'JFK'),
(28, 'JFK'),
(29, 'LAS'),
(30, 'LAS'),
(31, 'LAS'),
(32, 'LAS'),
(33, 'PHX'),
(34, 'PHX'),
(35, 'PHX'),
(36, 'PHX'),
(37, 'JFK'),
(38, 'JFK'),
(39, 'JFK'),
(40, 'JFK'),
(41, 'LAS'),
(42, 'LAS'),
(43, 'LAS'),
(44, 'LAS'),
(45, 'LAX'),
(46, 'LAX'),
(47, 'LAX'),
(48, 'LAX'),
(49, 'LAS'),
(50, 'LAS'),
(51, 'LAS'),
(52, 'LAS'),
(53, 'LAX'),
(54, 'LAX'),
(55, 'LAX'),
(56, 'LAX'),
(57, 'PHX'),
(58, 'PHX'),
(59, 'PHX'),
(60, 'PHX'),
(61, 'JFK'),
(62, 'JFK'),
(63, 'JFK'),
(64, 'JFK'),
(65, 'LAX'),
(66, 'LAX'),
(67, 'LAX'),
(68, 'LAX'),
(69, 'PHX'),
(70, 'PHX'),
(71, 'PHX'),
(72, 'PHX'),
(73, 'JFK'),
(74, 'JFK'),
(75, 'JFK'),
(76, 'JFK'),
(77, 'LAS'),
(78, 'LAS'),
(79, 'LAS'),
(80, 'LAS'),
(81, 'PHX'),
(82, 'PHX'),
(83, 'PHX'),
(84, 'PHX'),
(85, 'JFK'),
(86, 'JFK'),
(87, 'JFK'),
(88, 'JFK'),
(89, 'LAS'),
(90, 'LAS'),
(91, 'LAS'),
(92, 'LAS'),
(93, 'LAX'),
(94, 'LAX'),
(95, 'LAX'),
(96, 'LAX');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_no` int(11) NOT NULL,
  `arrival_date` datetime NOT NULL,
  `depart_date` datetime NOT NULL,
  `distance` double NOT NULL,
  `plane_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_no`, `arrival_date`, `depart_date`, `distance`, `plane_id`, `capacity`) VALUES
(1, '2014-12-01 08:45:00', '2014-12-01 14:45:00', 2550, 1, 0),
(2, '2014-12-01 11:45:00', '2014-12-01 17:45:00', 2550, 2, 0),
(3, '2014-12-01 17:45:00', '2014-12-01 23:45:00', 2550, 3, 0),
(4, '2014-12-01 20:45:00', '2014-12-02 02:45:00', 2550, 4, 0),
(5, '2014-12-01 08:45:00', '2014-12-01 15:45:00', 2822, 5, 0),
(6, '2014-12-01 11:45:00', '2014-12-01 18:45:00', 2822, 6, 0),
(7, '2014-12-01 17:45:00', '2014-12-02 00:45:00', 2822, 7, 0),
(8, '2014-12-01 20:45:00', '2014-12-02 03:45:00', 2822, 8, 0),
(9, '2014-12-01 08:45:00', '2014-12-01 13:45:00', 2432, 9, 0),
(10, '2014-12-01 11:45:00', '2014-12-01 16:45:00', 2432, 10, 0),
(11, '2014-12-01 17:45:00', '2014-12-01 22:45:00', 2432, 11, 0),
(12, '2014-12-01 20:45:00', '2014-12-02 01:45:00', 2432, 12, 0),
(13, '2014-12-01 08:45:00', '2014-12-01 14:45:00', 2550, 13, 0),
(14, '2014-12-01 11:45:00', '2014-12-01 17:45:00', 2550, 14, 0),
(15, '2014-12-01 17:45:00', '2014-12-01 23:45:00', 2550, 15, 0),
(16, '2014-12-01 20:45:00', '2014-12-02 02:45:00', 2550, 16, 0),
(17, '2014-12-01 08:45:00', '2014-12-01 10:45:00', 281, 17, 0),
(18, '2014-12-01 11:45:00', '2014-12-01 13:45:00', 281, 18, 0),
(19, '2014-12-01 17:45:00', '2014-12-01 19:45:00', 281, 19, 0),
(20, '2014-12-01 20:45:00', '2014-12-01 22:45:00', 281, 20, 0),
(21, '2014-12-01 08:45:00', '2014-12-01 11:05:00', 298, 21, 0),
(22, '2014-12-01 11:45:00', '2014-12-01 14:05:00', 298, 22, 0),
(23, '2014-12-01 17:45:00', '2014-12-01 20:05:00', 298, 23, 0),
(24, '2014-12-01 20:45:00', '2014-12-01 23:05:00', 298, 24, 0),
(25, '2014-12-01 08:45:00', '2014-12-01 15:45:00', 2822, 25, 0),
(26, '2014-12-01 11:45:00', '2014-12-01 18:45:00', 2822, 26, 0),
(27, '2014-12-01 17:45:00', '2014-12-02 00:45:00', 2822, 27, 0),
(28, '2014-12-01 20:45:00', '2014-12-02 03:45:00', 2822, 28, 0),
(29, '2014-12-01 08:45:00', '2014-12-01 10:45:00', 281, 29, 0),
(30, '2014-12-01 11:45:00', '2014-12-01 13:45:00', 281, 30, 0),
(31, '2014-12-01 17:45:00', '2014-12-01 19:45:00', 281, 31, 0),
(32, '2014-12-01 20:45:00', '2014-12-01 22:45:00', 281, 32, 0),
(33, '2014-12-01 08:45:00', '2014-12-01 11:45:00', 391, 33, 0),
(34, '2014-12-01 11:45:00', '2014-12-01 14:45:00', 391, 34, 0),
(35, '2014-12-01 17:45:00', '2014-12-01 20:45:00', 391, 35, 0),
(36, '2014-12-01 20:45:00', '2014-12-01 23:45:00', 391, 36, 0),
(37, '2014-12-01 08:45:00', '2014-12-01 13:45:00', 2432, 37, 0),
(38, '2014-12-01 11:45:00', '2014-12-01 16:45:00', 2432, 38, 0),
(39, '2014-12-01 17:45:00', '2014-12-01 22:45:00', 2432, 39, 0),
(40, '2014-12-01 20:45:00', '2014-12-02 01:45:00', 2432, 40, 0),
(41, '2014-12-01 08:45:00', '2014-12-01 11:05:00', 298, 41, 0),
(42, '2014-12-01 11:45:00', '2014-12-01 14:05:00', 298, 42, 0),
(43, '2014-12-01 17:45:00', '2014-12-01 20:05:00', 298, 43, 0),
(44, '2014-12-01 20:45:00', '2014-12-01 23:05:00', 298, 44, 2),
(45, '2014-12-01 08:45:00', '2014-12-01 11:45:00', 391, 45, 0),
(46, '2014-12-01 11:45:00', '2014-12-01 14:45:00', 391, 46, 0),
(47, '2014-12-01 17:45:00', '2014-12-01 20:45:00', 391, 47, 0),
(48, '2014-12-01 20:45:00', '2014-12-01 23:45:00', 391, 48, 0),
(49, '2014-12-02 08:45:00', '2014-12-02 14:45:00', 2550, 1, 0),
(50, '2014-12-02 11:45:00', '2014-12-02 17:45:00', 2550, 2, 0),
(51, '2014-12-02 17:45:00', '2014-12-02 23:45:00', 2550, 3, 0),
(52, '2014-12-02 20:45:00', '2014-12-03 02:45:00', 2550, 4, 0),
(53, '2014-12-02 08:45:00', '2014-12-02 15:45:00', 2822, 5, 0),
(54, '2014-12-02 11:45:00', '2014-12-02 18:45:00', 2822, 6, 0),
(55, '2014-12-02 17:45:00', '2014-12-03 00:45:00', 2822, 7, 0),
(56, '2014-12-02 20:45:00', '2014-12-03 03:45:00', 2822, 8, 0),
(57, '2014-12-02 08:45:00', '2014-12-02 13:45:00', 2432, 9, 0),
(58, '2014-12-02 11:45:00', '2014-12-02 16:45:00', 2432, 10, 0),
(59, '2014-12-02 17:45:00', '2014-12-02 22:45:00', 2432, 11, 0),
(60, '2014-12-02 20:45:00', '2014-12-03 01:45:00', 2432, 12, 0),
(61, '2014-12-02 08:45:00', '2014-12-02 14:45:00', 2550, 13, 0),
(62, '2014-12-02 11:45:00', '2014-12-02 17:45:00', 2550, 14, 0),
(63, '2014-12-02 17:45:00', '2014-12-02 23:45:00', 2550, 15, 0),
(64, '2014-12-02 20:45:00', '2014-12-03 02:45:00', 2550, 16, 0),
(65, '2014-12-02 08:45:00', '2014-12-02 10:45:00', 281, 17, 0),
(66, '2014-12-02 11:45:00', '2014-12-02 13:45:00', 281, 18, 0),
(67, '2014-12-02 17:45:00', '2014-12-02 19:45:00', 281, 19, 0),
(68, '2014-12-02 20:45:00', '2014-12-02 22:45:00', 281, 20, 0),
(69, '2014-12-02 08:45:00', '2014-12-02 11:05:00', 298, 21, 0),
(70, '2014-12-02 11:45:00', '2014-12-02 14:05:00', 298, 22, 0),
(71, '2014-12-02 17:45:00', '2014-12-02 20:05:00', 298, 23, 0),
(72, '2014-12-02 20:45:00', '2014-12-02 23:05:00', 298, 24, 0),
(73, '2014-12-02 08:45:00', '2014-12-02 15:45:00', 2822, 25, 0),
(74, '2014-12-02 11:45:00', '2014-12-02 18:45:00', 2822, 26, 1),
(75, '2014-12-02 17:45:00', '2014-12-03 00:45:00', 2822, 27, 0),
(76, '2014-12-02 20:45:00', '2014-12-03 03:45:00', 2822, 28, 0),
(77, '2014-12-02 08:45:00', '2014-12-02 10:45:00', 281, 29, 0),
(78, '2014-12-02 11:45:00', '2014-12-02 13:45:00', 281, 30, 0),
(79, '2014-12-02 17:45:00', '2014-12-02 19:45:00', 281, 31, 0),
(80, '2014-12-02 20:45:00', '2014-12-02 22:45:00', 281, 32, 0),
(81, '2014-12-02 08:45:00', '2014-12-02 11:45:00', 391, 33, 0),
(82, '2014-12-02 11:45:00', '2014-12-02 14:45:00', 391, 34, 0),
(83, '2014-12-02 17:45:00', '2014-12-02 20:45:00', 391, 35, 0),
(84, '2014-12-02 20:45:00', '2014-12-02 23:45:00', 391, 36, 0),
(85, '2014-12-02 08:45:00', '2014-12-02 13:45:00', 2432, 37, 0),
(86, '2014-12-02 11:45:00', '2014-12-02 16:45:00', 2432, 38, 0),
(87, '2014-12-02 17:45:00', '2014-12-02 22:45:00', 2432, 39, 0),
(88, '2014-12-02 20:45:00', '2014-12-03 01:45:00', 2432, 40, 0),
(89, '2014-12-02 08:45:00', '2014-12-02 11:05:00', 298, 41, 0),
(90, '2014-12-02 11:45:00', '2014-12-02 14:05:00', 298, 42, 1),
(91, '2014-12-02 17:45:00', '2014-12-02 20:05:00', 298, 43, 0),
(92, '2014-12-02 20:45:00', '2014-12-02 23:05:00', 298, 44, 0),
(93, '2014-12-02 08:45:00', '2014-12-02 11:45:00', 391, 45, 0),
(94, '2014-12-02 11:45:00', '2014-12-02 14:45:00', 391, 46, 0),
(95, '2014-12-02 17:45:00', '2014-12-02 20:45:00', 391, 47, 0),
(96, '2014-12-02 20:45:00', '2014-12-02 23:45:00', 391, 48, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE `plane` (
  `plane_id` int(11) NOT NULL,
  `model` char(20) NOT NULL,
  `number_seats` int(11) NOT NULL,
  `airline_id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`plane_id`, `model`, `number_seats`, `airline_id`) VALUES
(1, '734', 100, 'AA'),
(2, '744', 120, 'AA'),
(3, '754', 140, 'UA'),
(4, '764', 160, 'UA'),
(5, '774', 200, 'SW'),
(6, 'A324', 100, 'SW'),
(7, 'A334', 120, 'DT'),
(8, 'A354', 140, 'DT'),
(9, 'A364', 150, 'AK'),
(10, 'A374', 160, 'UA'),
(11, '764', 170, 'SW'),
(12, 'A384', 200, 'AK'),
(13, '733', 100, 'AA'),
(14, '743', 120, 'AA'),
(15, '753', 140, 'UA'),
(16, '763', 160, 'UA'),
(17, '773', 200, 'SW'),
(18, 'A323', 100, 'SW'),
(19, 'A333', 120, 'DT'),
(20, 'A353', 140, 'DT'),
(21, 'A363', 150, 'AK'),
(22, 'A373', 160, 'UA'),
(23, '763', 170, 'SW'),
(24, 'A383', 200, 'AK'),
(25, '732', 100, 'AA'),
(26, '742', 120, 'AA'),
(27, '752', 140, 'UA'),
(28, '762', 160, 'UA'),
(29, '772', 200, 'SW'),
(30, 'A322', 100, 'SW'),
(31, 'A332', 120, 'DT'),
(32, 'A352', 140, 'DT'),
(33, 'A362', 150, 'AK'),
(34, 'A372', 160, 'UA'),
(35, '762', 170, 'SW'),
(36, 'A382', 200, 'AK'),
(37, '731', 100, 'AA'),
(38, '741', 120, 'AA'),
(39, '751', 140, 'UA'),
(40, '761', 160, 'UA'),
(41, '771', 200, 'SW'),
(42, 'A321', 100, 'SW'),
(43, 'A331', 120, 'DT'),
(44, 'A351', 140, 'DT'),
(45, 'A361', 150, 'AK'),
(46, 'A371', 160, 'UA'),
(47, '761', 170, 'SW'),
(48, 'A381', 200, 'AK');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `user_id` char(20) NOT NULL,
  `flight_no` int(11) NOT NULL,
`reservation_no` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`user_id`, `flight_no`, `reservation_no`) VALUES
('heej', 1, 1),
('tjfar', 1, 2),
('jack5', 90, 9),
('jack10', 74, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(20) NOT NULL,
  `Uname` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `email` char(40) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Uname`, `password`, `email`, `phone`) VALUES
('asjdasl', 'dd', '11', 'dadsdsa@dosdf.com', 0),
('heej', 'Heejong Cho', 'mypass', 'hcho16@asu.edu', 2147483647),
('jack', 'jack111', '123456', '123@gmail.com', 0),
('jack10', 'jack', '123456', '123@gmail.com', 0),
('jack2', 'jack222', '123456', 'abcde@qq.com', 0),
('jack5', '', '', '', 0),
('jsnow', 'Jon Snow', '123456', 'jon_snow@hotmail.com', 0),
('tjfar', 'Travis Farwell', 'password', 'travisfarwell@msn.com', 2147483647),
('ywang', 'Yao Wang', 'password', 'wy.hangzhou@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
 ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
 ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `arrives`
--
ALTER TABLE `arrives`
 ADD KEY `flight_no` (`flight_no`), ADD KEY `airport_id` (`airport_id`);

--
-- Indexes for table `departs`
--
ALTER TABLE `departs`
 ADD KEY `flight_no` (`flight_no`), ADD KEY `airport_id` (`airport_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
 ADD PRIMARY KEY (`flight_no`), ADD KEY `plane_id` (`plane_id`);

--
-- Indexes for table `plane`
--
ALTER TABLE `plane`
 ADD PRIMARY KEY (`plane_id`), ADD KEY `airline_id` (`airline_id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
 ADD PRIMARY KEY (`reservation_no`), ADD KEY `user_id` (`user_id`), ADD KEY `flight_no` (`flight_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
MODIFY `reservation_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrives`
--
ALTER TABLE `arrives`
ADD CONSTRAINT `arrives_ibfk_1` FOREIGN KEY (`flight_no`) REFERENCES `flight` (`flight_no`),
ADD CONSTRAINT `arrives_ibfk_2` FOREIGN KEY (`airport_id`) REFERENCES `airport` (`airport_id`);

--
-- Constraints for table `departs`
--
ALTER TABLE `departs`
ADD CONSTRAINT `departs_ibfk_1` FOREIGN KEY (`flight_no`) REFERENCES `flight` (`flight_no`),
ADD CONSTRAINT `departs_ibfk_2` FOREIGN KEY (`airport_id`) REFERENCES `airport` (`airport_id`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`plane_id`) REFERENCES `plane` (`plane_id`);

--
-- Constraints for table `plane`
--
ALTER TABLE `plane`
ADD CONSTRAINT `plane_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `airlines` (`airline_id`);

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`flight_no`) REFERENCES `flight` (`flight_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
