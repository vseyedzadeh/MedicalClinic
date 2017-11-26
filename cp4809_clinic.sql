-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 05:17 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp4809_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `patientId` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `patientMessage` varchar(1000) NOT NULL,
  `doctorNote` varchar(1000) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `readStatus` tinyint(1) NOT NULL DEFAULT '0',
  `archiveStatus` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctorId`, `patientId`, `date`, `type`, `patientMessage`, `doctorNote`, `startTime`, `endTime`, `readStatus`, `archiveStatus`) VALUES
(1, 1, 5, '2017-12-03', 'visit', 'Test first event sdfsdaf f sdf dsf sdft test test 123 123 123 123 123 seee eee eee .fff dffdf sf sdf sdf sf sdf fd sdf sdf dsdddd end', 'Doctor Note: Doctor Note: Doctor Note: after fix variable and now change it again', '10:00:00', '11:00:00', 1, 0),
(2, 1, 5, '2017-12-03', 'visit', 'Test first event', 'Doctor Note: test after second entry', '12:00:00', '13:00:00', 2, 1),
(3, 2, 5, '2017-11-13', 'general checkup', 'yearly general checkup', '', '15:00:00', '16:00:00', 1, 0),
(4, 4, 1, '2017-11-14', 'general checkup', 'yearly general checkup', '', '17:00:00', '18:00:00', 0, 0),
(5, 2, 3, '2017-11-30', 'general checkup', 'hi this is the checkup', '', '08:00:00', '10:00:00', 2, 0),
(6, 6, 3, '2017-11-17', 'general checkup', 'feel sleepy', 'sleep more', '10:30:00', '11:00:00', 2, 0),
(7, 5, 3, '2017-11-02', 'general checkup', 'tired', 'work less', '11:30:00', '12:00:00', 2, 0),
(8, 6, 3, '2017-11-17', 'general checkup', 'test message', 'Test nov 13', '08:00:00', '08:30:00', 0, 0),
(9, 6, 5, '2017-11-20', '', '', '', '08:30:00', '09:00:00', 0, 0),
(10, 6, 1, '2017-11-22', '', '', '', '08:30:00', '09:00:00', 0, 0),
(12, 6, 1, '2017-11-22', '', '', '', '10:00:00', '10:30:00', 0, 0),
(13, 6, 1, '2017-11-21', '', '', '', '10:00:00', '10:30:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `patientId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dailyschedules`
--

CREATE TABLE `dailyschedules` (
  `id` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dailyschedules`
--

INSERT INTO `dailyschedules` (`id`, `doctorId`, `date`, `startTime`, `endTime`) VALUES
(1, 1, '2017-12-03', '08:00:00', '17:00:00'),
(2, 1, '2017-12-04', '08:00:00', '17:00:00'),
(3, 1, '2017-12-05', '08:00:00', '17:00:00'),
(4, 1, '2017-12-06', '08:00:00', '17:00:00'),
(5, 1, '2017-12-07', '08:00:00', '17:00:00'),
(6, 1, '2017-12-10', '08:00:00', '17:00:00'),
(7, 1, '2017-12-11', '08:00:00', '17:00:00'),
(8, 1, '2017-12-12', '08:00:00', '17:00:00'),
(9, 1, '2017-12-13', '08:00:00', '17:00:00'),
(10, 1, '2017-12-14', '08:00:00', '17:00:00'),
(11, 1, '2017-12-15', '08:00:00', '17:00:00'),
(12, 1, '2017-12-16', '08:00:00', '17:00:00'),
(13, 1, '2017-12-17', '08:00:00', '17:00:00'),
(14, 1, '2017-12-18', '08:00:00', '17:00:00'),
(15, 1, '2017-12-19', '08:00:00', '17:00:00'),
(16, 1, '2017-12-20', '08:00:00', '17:00:00'),
(17, 1, '2017-12-21', '08:00:00', '17:00:00'),
(18, 1, '2017-12-22', '08:00:00', '17:00:00'),
(19, 1, '2017-12-23', '08:00:00', '17:00:00'),
(20, 1, '2017-12-24', '08:00:00', '17:00:00'),
(21, 1, '2017-12-25', '08:00:00', '17:00:00'),
(22, 1, '2017-12-26', '08:00:00', '17:00:00'),
(23, 1, '2017-12-27', '08:00:00', '17:00:00'),
(24, 1, '2017-12-28', '08:00:00', '17:00:00'),
(25, 1, '2017-12-29', '08:00:00', '17:00:00'),
(26, 1, '2017-12-30', '08:00:00', '17:00:00'),
(27, 1, '2017-12-31', '08:00:00', '17:00:00'),
(28, 1, '2017-12-04', '08:00:00', '17:00:00'),
(29, 1, '2017-12-05', '08:00:00', '17:00:00'),
(30, 1, '2017-12-06', '08:00:00', '17:00:00'),
(31, 1, '2017-12-07', '08:00:00', '17:00:00'),
(33, 1, '2017-12-09', '08:00:00', '17:00:00'),
(34, 1, '2017-12-10', '08:00:00', '17:00:00'),
(35, 1, '2017-12-11', '08:00:00', '17:00:00'),
(36, 1, '2017-12-12', '08:00:00', '17:00:00'),
(37, 1, '2017-12-13', '08:00:00', '17:00:00'),
(38, 1, '2017-12-14', '08:00:00', '17:00:00'),
(39, 1, '2017-12-15', '08:00:00', '17:00:00'),
(40, 1, '2017-12-18', '08:00:00', '17:00:00'),
(41, 1, '2017-12-19', '08:00:00', '17:00:00'),
(42, 1, '2017-12-20', '08:00:00', '17:00:00'),
(43, 1, '2017-12-21', '08:00:00', '17:00:00'),
(44, 1, '2017-12-22', '08:00:00', '17:00:00'),
(45, 1, '2017-12-23', '08:00:00', '17:00:00'),
(46, 1, '2017-12-24', '08:00:00', '17:00:00'),
(47, 1, '2017-12-25', '08:00:00', '17:00:00'),
(48, 1, '2017-12-26', '08:00:00', '17:00:00'),
(49, 1, '2017-12-27', '08:00:00', '17:00:00'),
(50, 1, '2017-12-28', '08:00:00', '17:00:00'),
(51, 1, '2017-12-29', '08:00:00', '17:00:00'),
(52, 1, '2017-12-30', '08:00:00', '17:00:00'),
(53, 1, '2017-12-31', '08:00:00', '17:00:00'),
(54, 6, '2017-11-03', '08:00:00', '17:00:00'),
(55, 6, '2017-11-04', '08:00:00', '17:00:00'),
(56, 6, '2017-11-05', '08:00:00', '17:00:00'),
(57, 6, '2017-11-06', '08:00:00', '17:00:00'),
(58, 6, '2017-11-07', '08:00:00', '17:00:00'),
(59, 6, '2017-11-10', '08:00:00', '17:00:00'),
(60, 6, '2017-11-11', '08:00:00', '17:00:00'),
(61, 6, '2017-11-12', '08:00:00', '17:00:00'),
(62, 6, '2017-11-13', '08:00:00', '17:00:00'),
(63, 6, '2017-11-14', '08:00:00', '17:00:00'),
(64, 6, '2017-11-17', '08:00:00', '17:00:00'),
(65, 6, '2017-11-18', '08:00:00', '17:00:00'),
(66, 6, '2017-11-19', '08:00:00', '17:00:00'),
(67, 6, '2017-11-20', '08:00:00', '17:00:00'),
(68, 6, '2017-11-21', '08:00:00', '17:00:00'),
(69, 6, '2017-11-22', '08:00:00', '17:00:00'),
(70, 6, '2017-11-23', '08:00:00', '17:00:00'),
(71, 6, '2017-11-24', '08:00:00', '17:00:00'),
(72, 6, '2017-11-25', '08:00:00', '17:00:00'),
(73, 6, '2017-11-26', '08:00:00', '17:00:00'),
(74, 6, '2017-11-27', '08:00:00', '17:00:00'),
(75, 6, '2017-11-28', '08:00:00', '17:00:00'),
(76, 6, '2017-11-29', '08:00:00', '17:00:00'),
(77, 6, '2017-11-30', '08:00:00', '17:00:00'),
(78, 1, '2017-03-04', '08:00:00', '17:00:00'),
(79, 1, '2017-03-05', '08:00:00', '17:00:00'),
(80, 1, '2017-03-06', '08:00:00', '17:00:00'),
(81, 1, '2017-03-07', '08:00:00', '17:00:00'),
(82, 1, '2017-03-08', '08:00:00', '17:00:00'),
(83, 1, '2017-03-09', '08:00:00', '17:00:00'),
(84, 1, '2017-03-10', '08:00:00', '17:00:00'),
(85, 1, '2017-03-11', '08:00:00', '17:00:00'),
(86, 1, '2017-03-12', '08:00:00', '17:00:00'),
(87, 1, '2017-03-13', '08:00:00', '17:00:00'),
(88, 1, '2017-03-14', '08:00:00', '17:00:00'),
(89, 1, '2017-03-15', '08:00:00', '17:00:00'),
(90, 1, '2017-03-16', '08:00:00', '17:00:00'),
(91, 1, '2017-03-17', '08:00:00', '17:00:00'),
(92, 1, '2017-03-18', '08:00:00', '17:00:00'),
(93, 1, '2017-03-19', '08:00:00', '17:00:00'),
(94, 1, '2017-03-20', '08:00:00', '17:00:00'),
(95, 1, '2017-03-21', '08:00:00', '17:00:00'),
(96, 1, '2017-03-22', '08:00:00', '17:00:00'),
(97, 1, '2017-03-23', '08:00:00', '17:00:00'),
(98, 1, '2017-03-24', '08:00:00', '17:00:00'),
(99, 1, '2017-03-25', '08:00:00', '17:00:00'),
(100, 1, '2017-03-26', '08:00:00', '17:00:00'),
(101, 1, '2017-03-27', '08:00:00', '17:00:00'),
(102, 1, '2017-03-28', '08:00:00', '17:00:00'),
(103, 1, '2017-03-29', '08:00:00', '17:00:00'),
(104, 1, '2017-03-30', '08:00:00', '17:00:00'),
(105, 1, '2017-03-31', '08:00:00', '17:00:00'),
(106, 2, '2017-08-08', '08:00:00', '17:00:00'),
(107, 2, '2017-08-09', '08:00:00', '17:00:00'),
(108, 2, '2017-08-10', '08:00:00', '17:00:00'),
(109, 2, '2017-08-11', '08:00:00', '17:00:00'),
(110, 2, '2017-08-12', '08:00:00', '17:00:00'),
(111, 2, '2017-08-13', '08:00:00', '17:00:00'),
(112, 2, '2017-08-14', '08:00:00', '17:00:00'),
(113, 2, '2017-08-15', '08:00:00', '17:00:00'),
(114, 2, '2017-08-16', '08:00:00', '17:00:00'),
(115, 2, '2017-08-17', '08:00:00', '17:00:00'),
(116, 2, '2017-08-18', '08:00:00', '17:00:00'),
(117, 2, '2017-08-19', '08:00:00', '17:00:00'),
(118, 2, '2017-08-20', '08:00:00', '17:00:00'),
(119, 2, '2017-08-21', '08:00:00', '17:00:00'),
(120, 2, '2017-08-22', '08:00:00', '17:00:00'),
(121, 2, '2017-08-23', '08:00:00', '17:00:00'),
(122, 2, '2017-08-24', '08:00:00', '17:00:00'),
(123, 2, '2017-08-25', '08:00:00', '17:00:00'),
(124, 2, '2017-08-26', '08:00:00', '17:00:00'),
(125, 2, '2017-08-27', '08:00:00', '17:00:00'),
(126, 2, '2017-08-28', '08:00:00', '17:00:00'),
(127, 2, '2017-08-29', '08:00:00', '17:00:00'),
(128, 2, '2017-08-30', '08:00:00', '17:00:00'),
(129, 2, '2017-08-31', '08:00:00', '17:00:00'),
(130, 1, '2017-02-01', '08:00:00', '17:00:00'),
(131, 1, '2017-02-02', '08:00:00', '17:00:00'),
(132, 1, '2017-02-03', '08:00:00', '17:00:00'),
(133, 1, '2017-02-04', '08:00:00', '17:00:00'),
(134, 1, '2017-02-05', '08:00:00', '17:00:00'),
(135, 1, '2017-02-06', '08:00:00', '17:00:00'),
(136, 1, '2017-02-07', '08:00:00', '17:00:00'),
(137, 1, '2017-02-08', '08:00:00', '17:00:00'),
(138, 1, '2017-02-09', '08:00:00', '17:00:00'),
(139, 1, '2017-02-10', '08:00:00', '17:00:00'),
(140, 1, '2017-02-11', '08:00:00', '17:00:00'),
(141, 1, '2017-02-12', '08:00:00', '17:00:00'),
(142, 1, '2017-02-13', '08:00:00', '17:00:00'),
(143, 1, '2017-02-14', '08:00:00', '17:00:00'),
(144, 1, '2017-02-15', '08:00:00', '17:00:00'),
(145, 1, '2017-02-16', '08:00:00', '17:00:00'),
(146, 1, '2017-02-17', '08:00:00', '17:00:00'),
(147, 1, '2017-02-18', '08:00:00', '17:00:00'),
(148, 1, '2017-02-19', '08:00:00', '17:00:00'),
(149, 1, '2017-02-20', '08:00:00', '17:00:00'),
(150, 1, '2017-02-21', '08:00:00', '17:00:00'),
(151, 1, '2017-02-22', '08:00:00', '17:00:00'),
(152, 1, '2017-02-23', '08:00:00', '17:00:00'),
(153, 1, '2017-02-24', '08:00:00', '17:00:00'),
(154, 1, '2017-02-25', '08:00:00', '17:00:00'),
(155, 1, '2017-02-26', '08:00:00', '17:00:00'),
(156, 1, '2017-02-27', '08:00:00', '17:00:00'),
(157, 1, '2017-02-28', '08:00:00', '17:00:00'),
(158, 1, '2017-02-01', '08:00:00', '17:00:00'),
(159, 1, '2017-02-02', '08:00:00', '17:00:00'),
(160, 1, '2017-02-03', '08:00:00', '17:00:00'),
(161, 1, '2017-02-04', '08:00:00', '17:00:00'),
(162, 1, '2017-02-05', '08:00:00', '17:00:00'),
(163, 1, '2017-02-06', '08:00:00', '17:00:00'),
(164, 1, '2017-02-07', '08:00:00', '17:00:00'),
(165, 1, '2017-02-08', '08:00:00', '17:00:00'),
(166, 1, '2017-02-09', '08:00:00', '17:00:00'),
(167, 1, '2017-02-10', '08:00:00', '17:00:00'),
(168, 1, '2017-02-11', '08:00:00', '17:00:00'),
(169, 1, '2017-02-12', '08:00:00', '17:00:00'),
(170, 1, '2017-02-13', '08:00:00', '17:00:00'),
(171, 1, '2017-02-14', '08:00:00', '17:00:00'),
(172, 1, '2017-02-15', '08:00:00', '17:00:00'),
(173, 1, '2017-02-16', '08:00:00', '17:00:00'),
(174, 1, '2017-02-17', '08:00:00', '17:00:00'),
(175, 1, '2017-02-18', '08:00:00', '17:00:00'),
(176, 1, '2017-02-19', '08:00:00', '17:00:00'),
(177, 1, '2017-02-20', '08:00:00', '17:00:00'),
(178, 1, '2017-02-21', '08:00:00', '17:00:00'),
(179, 1, '2017-02-22', '08:00:00', '17:00:00'),
(180, 1, '2017-02-23', '08:00:00', '17:00:00'),
(181, 1, '2017-02-24', '08:00:00', '17:00:00'),
(182, 1, '2017-02-25', '08:00:00', '17:00:00'),
(183, 1, '2017-02-26', '08:00:00', '17:00:00'),
(184, 1, '2017-02-27', '08:00:00', '17:00:00'),
(185, 1, '2017-02-28', '08:00:00', '17:00:00'),
(186, 2, '2017-11-02', '08:00:00', '17:00:00'),
(187, 2, '2017-11-03', '08:00:00', '17:00:00'),
(188, 2, '2017-11-04', '08:00:00', '17:00:00'),
(189, 2, '2017-11-05', '08:00:00', '17:00:00'),
(190, 2, '2017-11-06', '08:00:00', '17:00:00'),
(191, 2, '2017-11-07', '08:00:00', '17:00:00'),
(192, 2, '2017-11-08', '08:00:00', '17:00:00'),
(193, 2, '2017-11-09', '08:00:00', '17:00:00'),
(194, 2, '2017-11-13', '08:00:00', '17:00:00'),
(195, 2, '2017-11-14', '08:00:00', '17:00:00'),
(196, 2, '2017-11-15', '08:00:00', '17:00:00'),
(197, 2, '2017-11-16', '08:00:00', '17:00:00'),
(198, 2, '2017-11-17', '08:00:00', '17:00:00'),
(199, 2, '2017-11-18', '08:00:00', '17:00:00'),
(200, 2, '2017-11-19', '08:00:00', '17:00:00'),
(201, 2, '2017-11-20', '08:00:00', '17:00:00'),
(202, 2, '2017-11-21', '08:00:00', '17:00:00'),
(203, 2, '2017-11-22', '08:00:00', '17:00:00'),
(204, 2, '2017-11-23', '08:00:00', '17:00:00'),
(205, 2, '2017-11-24', '08:00:00', '17:00:00'),
(206, 2, '2017-11-25', '08:00:00', '17:00:00'),
(207, 2, '2017-11-26', '08:00:00', '17:00:00'),
(208, 2, '2017-11-27', '08:00:00', '17:00:00'),
(209, 2, '2017-11-28', '08:00:00', '17:00:00'),
(210, 2, '2017-11-29', '08:00:00', '17:00:00'),
(211, 2, '2017-11-30', '08:00:00', '17:00:00'),
(212, 3, '2017-11-01', '08:00:00', '17:00:00'),
(213, 3, '2017-11-02', '08:00:00', '17:00:00'),
(214, 3, '2017-11-03', '08:00:00', '17:00:00'),
(215, 3, '2017-11-04', '08:00:00', '17:00:00'),
(216, 3, '2017-11-05', '08:00:00', '17:00:00'),
(217, 3, '2017-11-06', '08:00:00', '17:00:00'),
(218, 3, '2017-11-07', '08:00:00', '17:00:00'),
(219, 3, '2017-11-08', '08:00:00', '17:00:00'),
(220, 3, '2017-11-09', '08:00:00', '17:00:00'),
(221, 3, '2017-11-12', '08:00:00', '17:00:00'),
(222, 3, '2017-11-13', '08:00:00', '17:00:00'),
(223, 3, '2017-11-14', '08:00:00', '17:00:00'),
(224, 3, '2017-11-15', '08:00:00', '17:00:00'),
(225, 3, '2017-11-18', '08:00:00', '17:00:00'),
(226, 3, '2017-11-19', '08:00:00', '17:00:00'),
(227, 3, '2017-11-20', '08:00:00', '17:00:00'),
(228, 3, '2017-11-21', '08:00:00', '17:00:00'),
(229, 3, '2017-11-22', '08:00:00', '17:00:00'),
(230, 3, '2017-11-23', '08:00:00', '17:00:00'),
(231, 3, '2017-11-24', '08:00:00', '17:00:00'),
(232, 3, '2017-11-25', '08:00:00', '17:00:00'),
(233, 3, '2017-11-26', '08:00:00', '17:00:00'),
(234, 3, '2017-11-27', '08:00:00', '17:00:00'),
(235, 3, '2017-11-28', '08:00:00', '17:00:00'),
(236, 3, '2017-11-29', '08:00:00', '17:00:00'),
(237, 3, '2017-11-30', '08:00:00', '17:00:00'),
(238, 4, '2017-01-01', '08:00:00', '17:00:00'),
(239, 4, '2017-01-02', '08:00:00', '17:00:00'),
(240, 4, '2017-01-03', '08:00:00', '17:00:00'),
(241, 4, '2017-01-04', '08:00:00', '17:00:00'),
(242, 4, '2017-01-05', '08:00:00', '17:00:00'),
(243, 4, '2017-01-06', '08:00:00', '17:00:00'),
(244, 4, '2017-01-07', '08:00:00', '17:00:00'),
(245, 4, '2017-01-08', '08:00:00', '17:00:00'),
(246, 4, '2017-01-09', '08:00:00', '17:00:00'),
(247, 4, '2017-01-10', '08:00:00', '17:00:00'),
(248, 4, '2017-01-11', '08:00:00', '17:00:00'),
(249, 4, '2017-01-12', '08:00:00', '17:00:00'),
(250, 4, '2017-01-13', '08:00:00', '17:00:00'),
(251, 4, '2017-01-14', '08:00:00', '17:00:00'),
(252, 4, '2017-01-15', '08:00:00', '17:00:00'),
(253, 4, '2017-01-16', '08:00:00', '17:00:00'),
(254, 4, '2017-01-17', '08:00:00', '17:00:00'),
(255, 4, '2017-01-18', '08:00:00', '17:00:00'),
(256, 4, '2017-01-19', '08:00:00', '17:00:00'),
(257, 4, '2017-01-20', '08:00:00', '17:00:00'),
(258, 4, '2017-01-21', '08:00:00', '17:00:00'),
(259, 4, '2017-01-22', '08:00:00', '17:00:00'),
(260, 4, '2017-01-23', '08:00:00', '17:00:00'),
(261, 4, '2017-01-24', '08:00:00', '17:00:00'),
(262, 4, '2017-01-25', '08:00:00', '17:00:00'),
(263, 4, '2017-01-26', '08:00:00', '17:00:00'),
(264, 4, '2017-01-27', '08:00:00', '17:00:00'),
(265, 4, '2017-01-28', '08:00:00', '17:00:00'),
(266, 4, '2017-01-29', '08:00:00', '17:00:00'),
(267, 4, '2017-01-30', '08:00:00', '17:00:00'),
(268, 4, '2017-01-31', '08:00:00', '17:00:00'),
(269, 7, '2017-10-01', '08:00:00', '20:00:00'),
(270, 7, '2017-10-02', '08:00:00', '20:00:00'),
(271, 7, '2017-10-05', '08:00:00', '20:00:00'),
(272, 7, '2017-10-06', '08:00:00', '20:00:00'),
(273, 7, '2017-10-09', '08:00:00', '20:00:00'),
(274, 7, '2017-10-10', '08:00:00', '20:00:00'),
(275, 7, '2017-10-14', '08:00:00', '20:00:00'),
(276, 7, '2017-10-15', '08:00:00', '20:00:00'),
(277, 7, '2017-10-16', '08:00:00', '20:00:00'),
(278, 7, '2017-10-17', '08:00:00', '20:00:00'),
(279, 7, '2017-10-19', '08:00:00', '20:00:00'),
(280, 7, '2017-10-23', '08:00:00', '20:00:00'),
(281, 7, '2017-10-24', '08:00:00', '20:00:00'),
(282, 7, '2017-10-25', '08:00:00', '20:00:00'),
(283, 7, '2017-10-26', '08:00:00', '20:00:00'),
(284, 7, '2017-10-27', '08:00:00', '20:00:00'),
(285, 7, '2017-10-28', '08:00:00', '20:00:00'),
(286, 7, '2017-10-29', '08:00:00', '20:00:00'),
(287, 7, '2017-10-30', '08:00:00', '20:00:00'),
(288, 7, '2017-10-31', '08:00:00', '20:00:00'),
(289, 1, '2017-03-01', '08:00:00', '20:00:00'),
(290, 1, '2017-03-02', '08:00:00', '20:00:00'),
(291, 1, '2017-03-03', '08:00:00', '20:00:00'),
(292, 1, '2017-03-04', '08:00:00', '20:00:00'),
(293, 1, '2017-03-07', '08:00:00', '20:00:00'),
(294, 1, '2017-03-08', '08:00:00', '20:00:00'),
(295, 1, '2017-03-09', '08:00:00', '20:00:00'),
(296, 1, '2017-03-10', '08:00:00', '20:00:00'),
(297, 1, '2017-03-11', '08:00:00', '20:00:00'),
(298, 1, '2017-03-13', '08:00:00', '20:00:00'),
(299, 1, '2017-03-14', '08:00:00', '20:00:00'),
(300, 1, '2017-03-15', '08:00:00', '20:00:00'),
(301, 1, '2017-03-16', '08:00:00', '20:00:00'),
(302, 1, '2017-03-17', '08:00:00', '20:00:00'),
(303, 1, '2017-03-18', '08:00:00', '20:00:00'),
(304, 1, '2017-03-19', '08:00:00', '20:00:00'),
(305, 1, '2017-03-20', '08:00:00', '20:00:00'),
(306, 1, '2017-03-21', '08:00:00', '20:00:00'),
(307, 1, '2017-03-22', '08:00:00', '20:00:00'),
(308, 1, '2017-03-23', '08:00:00', '20:00:00'),
(309, 1, '2017-03-24', '08:00:00', '20:00:00'),
(310, 1, '2017-03-25', '08:00:00', '20:00:00'),
(311, 1, '2017-03-26', '08:00:00', '20:00:00'),
(312, 1, '2017-03-27', '08:00:00', '20:00:00'),
(313, 1, '2017-03-28', '08:00:00', '20:00:00'),
(314, 1, '2017-03-29', '08:00:00', '20:00:00'),
(315, 1, '2017-03-30', '08:00:00', '20:00:00'),
(316, 1, '2017-03-31', '08:00:00', '20:00:00'),
(317, 2, '2018-06-01', '08:00:00', '20:00:00'),
(318, 2, '2018-06-02', '08:00:00', '20:00:00'),
(319, 2, '2018-06-03', '08:00:00', '20:00:00'),
(320, 2, '2018-06-04', '08:00:00', '20:00:00'),
(321, 2, '2018-06-05', '08:00:00', '20:00:00'),
(322, 2, '2018-06-06', '08:00:00', '20:00:00'),
(323, 2, '2018-06-07', '08:00:00', '20:00:00'),
(324, 2, '2018-06-08', '08:00:00', '20:00:00'),
(325, 2, '2018-06-09', '08:00:00', '20:00:00'),
(326, 2, '2018-06-10', '08:00:00', '20:00:00'),
(327, 2, '2018-06-11', '08:00:00', '20:00:00'),
(328, 2, '2018-06-12', '08:00:00', '20:00:00'),
(329, 2, '2018-06-13', '08:00:00', '20:00:00'),
(330, 2, '2018-06-14', '08:00:00', '20:00:00'),
(331, 2, '2018-06-15', '08:00:00', '20:00:00'),
(332, 2, '2018-06-16', '08:00:00', '20:00:00'),
(333, 2, '2018-06-17', '08:00:00', '20:00:00'),
(334, 2, '2018-06-18', '08:00:00', '20:00:00'),
(335, 2, '2018-06-19', '08:00:00', '20:00:00'),
(336, 2, '2018-06-20', '08:00:00', '20:00:00'),
(337, 2, '2018-06-21', '08:00:00', '20:00:00'),
(338, 2, '2018-06-22', '08:00:00', '20:00:00'),
(339, 2, '2018-06-23', '08:00:00', '20:00:00'),
(340, 2, '2018-06-24', '08:00:00', '20:00:00'),
(341, 2, '2018-06-25', '08:00:00', '20:00:00'),
(342, 2, '2018-06-26', '08:00:00', '20:00:00'),
(343, 2, '2018-06-27', '08:00:00', '20:00:00'),
(344, 2, '2018-06-28', '08:00:00', '20:00:00'),
(345, 2, '2018-06-29', '08:00:00', '20:00:00'),
(346, 2, '2018-06-30', '08:00:00', '20:00:00'),
(347, 2, '2018-06-01', '08:00:00', '20:00:00'),
(348, 2, '2018-06-02', '08:00:00', '20:00:00'),
(349, 2, '2018-06-03', '08:00:00', '20:00:00'),
(350, 2, '2018-06-04', '08:00:00', '20:00:00'),
(351, 2, '2018-06-05', '08:00:00', '20:00:00'),
(352, 2, '2018-06-06', '08:00:00', '20:00:00'),
(353, 2, '2018-06-07', '08:00:00', '20:00:00'),
(354, 2, '2018-06-08', '08:00:00', '20:00:00'),
(355, 2, '2018-06-09', '08:00:00', '20:00:00'),
(356, 2, '2018-06-10', '08:00:00', '20:00:00'),
(357, 2, '2018-06-11', '08:00:00', '20:00:00'),
(358, 2, '2018-06-12', '08:00:00', '20:00:00'),
(359, 2, '2018-06-13', '08:00:00', '20:00:00'),
(360, 2, '2018-06-14', '08:00:00', '20:00:00'),
(361, 2, '2018-06-15', '08:00:00', '20:00:00'),
(362, 2, '2018-06-16', '08:00:00', '20:00:00'),
(363, 2, '2018-06-17', '08:00:00', '20:00:00'),
(364, 2, '2018-06-18', '08:00:00', '20:00:00'),
(365, 2, '2018-06-19', '08:00:00', '20:00:00'),
(366, 2, '2018-06-20', '08:00:00', '20:00:00'),
(367, 2, '2018-06-21', '08:00:00', '20:00:00'),
(368, 2, '2018-06-22', '08:00:00', '20:00:00'),
(369, 2, '2018-06-23', '08:00:00', '20:00:00'),
(370, 2, '2018-06-24', '08:00:00', '20:00:00'),
(371, 2, '2018-06-25', '08:00:00', '20:00:00'),
(372, 2, '2018-06-26', '08:00:00', '20:00:00'),
(373, 2, '2018-06-27', '08:00:00', '20:00:00'),
(374, 2, '2018-06-28', '08:00:00', '20:00:00'),
(375, 2, '2018-06-29', '08:00:00', '20:00:00'),
(376, 2, '2018-06-30', '08:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `title` varchar(25) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `experience` year(4) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `pathImage` varchar(100) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstName`, `lastName`, `title`, `speciality`, `experience`, `description`, `pathImage`, `email`, `password`) VALUES
(1, 'Bill', 'Calhoon', 'Cardiologist', 'Cardiologist', 1995, 'Suspendisse a erat ultrices turpis vulputate auctor. Nulla ante erat, aliquet sit amet scelerisque non, molestie sed leo. Sed arcu magna, bibendum at urna eget, lobortis congue est. Mauris vitae elementum erat. Nunc non interdum augue. Sed laoreet felis sed posuere varius. Phasellus consequat ut lorem id aliquet. Donec ante libero, tristique ut volutpat volutpat, bibendum sed lacus. In eleifend egestas malesuada. Mauris aliquet est vitae elit suscipit posuere. Proin lacinia purus sed nibh euismod rhoncus. Nullam dui lorem, porttitor vitae nibh eu, rutrum iaculis magna. Aenean vel ligula metus. ', '/assets/img/doctor1.jpg', 'billc@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(2, 'Alexa', 'Brunner', 'Dermatologist', 'Dermatologist', 2000, 'Sed ut dui tincidunt, mollis nisl sit amet, posuere enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo, urna et gravida placerat, purus risus vestibulum elit, id feugiat velit tellus sit amet ante. Donec auctor arcu et diam facilisis pulvinar. Nunc tempor arcu vitae urna viverra rhoncus. Nullam fermentum sollicitudin nisi quis volutpat nullam.', '/assets/img/doctor2.jpg', 'alexab@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(3, 'Marley', 'Kaminsky', 'Dermatologist', 'Dermatologist', 1985, 'Nam in tellus ullamcorper, viverra arcu vel, varius nunc. Maecenas vehicula semper odio, id finibus nibh varius id. Nam ultricies vehicula velit in tempus. Aenean elementum, risus ac euismod ultrices, mi nunc vehicula dolor, quis pellentesque velit urna a sem. Cras mattis mauris vel est dignissim fringilla. Vivamus scelerisque dui purus, vel rutrum nunc orci aliquam.', '/assets/img/doctor3.jpg', 'marleyk@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(4, 'Jane', 'Elquist', 'Pysychologist', 'Pysychology', 1998, 'Ut vitae pretium sapien. Sed ut metus tempor, sodales purus eu, ultrices ante. Fusce in lacinia velit, vitae consectetur metus. Aliquam massa turpis, tincidunt sit amet egestas eu, commodo at lacus. Nam placerat justo quis tellus fermentum consequat. Proin convallis odio in enim malesuada rutrum. Vivamus gravida tempus enim eu pellentesque. Vestibulum condimentum sapien ut lectus feugiat volutpat. ', '/assets/img/doctor4.jpg', 'janee@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(5, 'Preston', 'Oatney', 'Pysychologist', 'Pysychology', 1999, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac erat commodo, condimentum odio quis, efficitur dolor. Fusce vitae eros convallis, ornare nulla quis, sollicitudin est orci aliquam. ', '/assets/img/doctor5.jpg', 'prestono@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(6, 'May', 'Roxas', 'Pysychologist', 'Pysychology', 2000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus enim ut nulla finibus, sed malesuada sem ornare. Curabitur vitae nisi a massa porta finibus volutpat sit amet est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus semper eu quam ut vulputate. Nullam euismod, ligula eu fringilla bibendum, massa nulla cursus diam, non sagittis neque tortor quis enim. Sed sed ipsum tincidunt ex feugiat accumsan et tempus felis. Mauris at urna nullam.', '/assets/img/doctor6.jpg', 'mayr@clinicmd.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(7, 'Martin ', 'J. Black', 'Osteopathy', 'Osteopathy', 1986, 'Associate Professor, Department of Otolaryngology - Head and Neck Surgery, McGill University\r\nChief, McGill University Head and Neck Surgery and Oncology Program', '', '', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu'),
(8, 'Michael ', 'Wilmott', 'Osteopathy', 'Osteopathy', 2004, '30 years experience as a GP and GP teacher who is committed, interested and enthusiastic. Phillip has interest in Aviation medicine, travel advice and all aspects of family health.\r\n\r\nLong appointments for Dr Boltin are only available between 12.30 to 4.00pm - Please phone the clinic to make a long appointment.\r\nSpecial interests:\r\nOccupational health\r\nAviation and Travel Medicine\r\nFamily Medicine and Care\r\nBook with Dr. Phillip Boltin ...', '', 'Michael.Wilmott@gmail.com', '$2y$10$Nj6UFGjbNh3PAvYMsGsvMunRBHhV36cwJld0FYroZHt6D9qh6v6zu');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `fullAmount` decimal(8,2) NOT NULL,
  `downPayment` decimal(8,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paymentId` int(11) NOT NULL,
  `appointmentId` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `patientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `passresets`
--

CREATE TABLE `passresets` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `secretToken` varchar(100) NOT NULL,
  `expiryDateToken` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passresets`
--

INSERT INTO `passresets` (`id`, `userId`, `secretToken`, `expiryDateToken`) VALUES
(15, 1, 'IpbDeaqM12PAMx3zdYvoXCMXonsgOS8xhjbvtBivE85qF90S8v', '2017-11-07 17:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(2) NOT NULL,
  `postal` varchar(6) NOT NULL,
  `country` varchar(20) NOT NULL,
  `sin` varchar(12) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstName`, `lastName`, `street`, `city`, `province`, `postal`, `country`, `sin`, `email`, `password`, `phone`, `role`) VALUES
(1, 'vaji', 'sey', 'ergerg', 'isfahan', 'NB', 'h2b3n1', 'reghehe', '9999999999', '1795693@johnabbottcollege.net', '123!@#qwe', '1234569874', 'patient'),
(3, 'vaji', 'sey', 'ergerg', 'isfahan', 'NS', 'h2b3n1', 'reghehe', '9999999999', 'v.seyedzadeh.985@gmail.com', '$2y$10$zaKEZMxT3P6jws02VbMnluUbXcpgws2eVflkgeY83qZrRNb/YIJD2', '1234569874', 'patient'),
(5, 'mehrshad', 'shams', 'gseg', 'vdd', 'ON', 'h4g3f2', 'canada', '123456789', 'mshams@gmail.com', '$2y$10$BLAszxNhdIvhJa53PpW8ruIB975VTgLBm0mft/9Eetvg6dNz/kEwe', '1231231234', 'patient'),
(6, 'matt', 'jan', '333 rue lasalle', 'Lasalle', 'QC', 'H8p3c8', 'Canada', '123456789', 'winotojan_buyer1@gmail.com', '$2y$10$xpIt6Qq.oWXz0UvRBT22b.OPEaGsgAgyWvP9umwPPew0DymOcoypm', '514-5145144', 'patient'),
(7, 'winoto', 'jan', '218 Hepworth', 'Lasalle', 'QC', 'h8p3c8', 'Canada', '123456789', 'winotojan_buyer1@gmail.com', '$2y$10$XlIs9/t0Z9ZFF/kVZqxv7ufkNgAsKRTRqBF54HMZiqxxHPOniLHvW', '5145145144', 'patient'),
(8, 'win', 'win', 'winwin', 'winwin', 'QC', 'j1j2j2', 'ca', '123456789', 'win@win.com', '$2y$10$Vu9EFaZ7AI/GqEW/stRHeeWFyoD68/hiAepp5sqnJNTaaplAmUoxq', '5145145144', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `doctorId` int(11) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`doctorId`, `time`) VALUES
(6, '2017-11-17 8:00'),
(6, '2017-11-18 8:00'),
(6, '2017-11-18 10:30'),
(6, '2017-11-18 9:30'),
(6, '2017-11-19 9:00'),
(6, '2017-11-17 - 11:00'),
(6, '2017-11-17 08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorId` (`doctorId`),
  ADD KEY `patientId` (`patientId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorId` (`doctorId`),
  ADD KEY `patientId` (`patientId`);

--
-- Indexes for table `dailyschedules`
--
ALTER TABLE `dailyschedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctorId` (`doctorId`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentId` (`paymentId`),
  ADD KEY `appointmentId` (`appointmentId`),
  ADD KEY `email` (`email`),
  ADD KEY `patientId` (`patientId`);

--
-- Indexes for table `passresets`
--
ALTER TABLE `passresets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secretToken` (`secretToken`),
  ADD UNIQUE KEY `userId` (`userId`) USING BTREE;

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailyschedules`
--
ALTER TABLE `dailyschedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `passresets`
--
ALTER TABLE `passresets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`);

--
-- Constraints for table `dailyschedules`
--
ALTER TABLE `dailyschedules`
  ADD CONSTRAINT `dailyschedules_ibfk_1` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`paymentId`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`appointmentId`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`);

--
-- Constraints for table `passresets`
--
ALTER TABLE `passresets`
  ADD CONSTRAINT `passresets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
